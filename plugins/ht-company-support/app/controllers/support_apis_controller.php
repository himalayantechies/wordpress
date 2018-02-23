<?php

class SupportApisController extends MvcPublicController {

	public function test_api(){
		
		require_once(ABSPATH . 'wp-admin' . '/includes/image.php');
		require_once(ABSPATH . 'wp-admin' . '/includes/file.php');
    	require_once(ABSPATH . 'wp-admin' . '/includes/media.php');
    	require_once(ABSPATH . 'wp-includes' . '/post.php');
    	require_once(ABSPATH . 'wp-includes' . '/load.php');
    	require_once(ABSPATH . 'wp-includes' . '/functions.php');

		$fileErrors = array(

			0 => "There is no error, the file uploaded with success",
			1 => "The uploaded file exceeds the upload_max_files in server settings",
			2 => "The uploaded file exceeds the MAX_FILE_SIZE from html form",
			3 => "The uploaded file uploaded only partially",
			4 => "No file was uploaded",
			6 => "Missing a temporary folder",
			7 => "Failed to write file to disk",
			8 => "A PHP extension stoped file to upload" );
		
		$status = 'success';
		$posted_data = array();
    	$response_data = array();
    	$token_verify = $this->check_token();
    	//json_encode(form[fileup][size]/ name/mime/, form[date], form[owner], form[detail] )
    	//print_r($token_verify);exit;
    	if(!empty($token_verify['id'])){
    		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    			$_POST = json_decode(file_get_contents('php://input'), true);
    			//print_r($_POST);exit;
    			if(isset($_POST['detail']) && !empty($_POST['detail'])){
    				$response_data['detail'] = $_POST['detail'];
    			}
    			else{
    				$error = 'Enter the details of task.';
    			}
    			if(isset($_POST['task_deadline']) && !empty($_POST['task_deadline'])){
    				$response_data['task_deadline'] = $_POST['task_deadline'];
    			}
    			else{
    				$error = 'Enter the deadline of task.';
    			}
    			//print_r($response_data);exit;
    			if(empty($error)){
    				$file_data = isset( $_FILES ) ? $_FILES : array();
    				$data = array_merge( $posted_data, $file_data );
					$response = array();
					// echo"<pre>";
					// print_r($posted_data);
					// print_r($data); exit;
					if(!empty($file_data)){
						$attachment_id = media_handle_upload( 'fileUpload', 0 );
						//print_r($attachment_id); exit;
						if ( is_wp_error( $attachment_id ) ) {
							$status = 'failure';
							$err_message = $fileErrors[ $data['fileUpload']['error'] ];
							//$response['response'] = "ERROR";
							//$response['error'] = $fileErrors[ $data['fileUpload']['error'] ];
							
						}
						else{
							$upload_dir = wp_upload_dir();
							$upload_path = $upload_dir["basedir"];
					    	$upload_url = $upload_dir["baseurl"];
					   
							$fileName = $data["fileUpload"]["name"];
							$fileNameChanged = str_replace(" ", "_", $fileName);
							$temp_name = $data["fileUpload"]["tmp_name"];
							$file_size = $data["fileUpload"]["size"];
							$fileError = $data["fileUpload"]["error"];
							$file_type = $data["fileUpload"]["type"];

							$mb = 2 * 1024 * 1024;
							$targetPath = $upload_path;
							$response["filename"] = $fileName;
							$response["file_size"] = $file_size;

							if($fileError > 0){
								//$response["response"] = "ERROR";
					            //$response["error"] = $fileErrors[ $fileError ];
					            $status = 'failure';
								$err_message = $fileErrors[ $fileError ];
							}
							else{
								if(file_exists($targetPath . "/" . $fileNameChanged)){			
									//$response["response"] = "ERROR";
							        //$response["error"] = "File already exists.";
							        $status = 'failure';
									$err_message = 'File already exists.';
								}
								else{
									if($file_size <= $mb){
							            $response["response"] = "SUCCESS";
							            $response["url"] =  $upload_url . "/" . $fileNameChanged;
							            $response["type"] = $file_type;
						            	
						           	}
						           	else{
						            		//$response["response"] = "ERROR";
						            		//$response["error"]= "File is too large. Max file size is 2 MB.";
						           		$status = 'failure';
										$err_message = 'File is too large. Max file size is 2 MB.';
						            }
			            		}
							}
						}
					}
					if($status == 'success'){
						$this->load_model('SupportCompuser');
	    				$user_detail = $this->SupportCompuser->find(array( 'conditions' => array('id' => $token_verify['id'][0]->id)));
	    				if(!empty($user_detail)){
		    				$userdata['created_by'] = $user_detail->name;
		    				$userdata['company_id'] = $user_detail->company_id;
		    				$userdata['task_deadline'] = date('Y-m-d');
		    				$this->load_model('SupportTask');
		    				if($this->SupportTask->insert($userdata)){
		    					$status = 'success';
		    					$response_data['task_created'] = $userdata;
		    					$response_data['media'] = $response;
		    				}
		    				else{
		    					$status = 'failure';
		    					$message = 'couldnot create the task.';
		    				}
	    				}
	    				else{
		    				$status = 'failure';
		    				$message = 'Invalid user.';
		    			}
					}
					else{
						$status = 'failure';
		    			$message = $err_message;
					}
    			}
    			else{
    				$status = 'failure';
	    			$message = $error;
    			}
    		}
    		else{
    			$status = 'failure';
	    		$message = 'Invalid access.';
    		}
    	}
    	else{
    		$status = 'failure';
    		$message = $token_verify['error'];
    	}
    	$this->send_response($status, $response_data, $message);
	}
    
    public function user_validate(){

    	$_POST = json_decode(file_get_contents('php://input'), true);
    	if (!empty($_POST)){
    		$userdata = array();
    		$data = array();
	    	if(isset($_POST['email']) && !empty($_POST['email'])){
	    		$userdata['user_email'] = $_POST['email'];
	    		
	    	}
	    	else{
	    		$error = 'Please enter valid email address.';
	    	}
	    	if(isset($_POST['pass']) && !empty($_POST['pass'])){
	    		$userdata['user_pass'] = $_POST['pass'];
	    	}
	    	else{
	    		$error = 'Please enter the password.';
	    	}

	    	if(empty($error)){
	    		$this->load_model('SupportCompuser');
	    		$user_details = $this->SupportCompuser->find(array('conditions' => array('email' => $userdata['user_email'], 'passkey' => $userdata['user_pass'])));
	 
	    		if(!empty($user_details)){
	    			$this->load_model('SupportCompany');
	    			$company_details = $this->SupportCompany->find(array('conditions' => array('id' => $user_details[0]->company_id)));
	    			
	    			if(!empty($company_details)){
	    				$status = 'success';
	    				$data = array('user_detail' => $user_details, 'company_detail' => $company_details);
	    			}
	    			else{
	    				$status = 'failure';
	    				$message = 'No details of company.';
	    			}
	    		}
	    		else{
	    			$status = 'failure';
	    			$message = 'Invalid login credentials!';
	    		}
	    	}
	    	else{
	    		$status = 'failure';
	    		$message = $error;
	    	}
    	}
    	else{
    		$status = 'failure';
    		$message = 'Invalid access!';
    	}

    	$this->send_response($status, $data, $message);
    }

    public function client_userlist(){

    	$userdata = array();
    	$data = array();
   		$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
    		if ($_SERVER['REQUEST_METHOD'] === 'GET'){
	    		$this->load_model('SupportCompuser');
	    		$company_id = $this->SupportCompuser->find(array('selects' => array('id','company_id'), 'conditions' => array('id' => $token_verify['id'][0]->id)));
	    		$userlists = $this->SupportCompuser->find(array('conditions' => array('id !=' => $company_id[0]->id, 'company_id' => $company_id[0]->company_id)));

	    		if(!empty($userlists)){
		    		$data['company_userlists'] = $userlists;
		    		$status = 'success';
	    		}
	    		else{
	    			$status = 'failure';
	    			$message = 'Other users are not available.';
	    		}
	    	}
	    	else{
	    		$status = 'failure';
    			$message = 'Invalid access!';
	    	}
    	}
    	else{
    		$status = 'failure';
    		$message = $token_verify['error'];
    	}

    	$this->send_response($status, $data, $message);
    }	
    
    public function user_grouplist(){

    	$userdata = array();
    	$data = array();
    	$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
    		if ($_SERVER['REQUEST_METHOD'] === 'GET'){
	    		$this->load_model('SupportCompuserGroup');
	    		$group_id = $this->SupportCompuserGroup->find(array('selects' => array('group_id'), 'conditions' => array('compuser_id' => $token_verify['id'][0]->id)));
	    		if(!empty($group_id)){
	    			$this->load_model('SupportGroup');
	    			foreach($group_id as $group){
	    				$group_details[] = $this->SupportGroup->find(array('conditions' => array('id' => $group->group_id)));
	    			}
	    			if(!empty($group_details)){
						$data['user_grouplists'] = $group_details;
						$status = 'success';
	    			}
			   		else{
			    		$status = 'failure';
			   			$message = 'No related group found.';
			   		}
			   	}
			   	else{
			   		$status = 'failure';
			    	$message = 'No related group found.';
			   	}
			}
			else{
				$status = 'failure';
    			$message = 'Invalid access!';
			}
    	}
    	else{
    		$status = 'failure';
    		$message = $token_verify['error'];
    	}
    	$this->send_response($status, $data, $message);
  	}

    public function create_group(){

    	$userdata = array();
    	$data = array();
    	$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
	    	if ($_SERVER['REQUEST_METHOD'] === 'GET'){
	    		$this->load_model('SupportCompuser');
	    		$company_id = $this->SupportCompuser->find(array('selects' => array('id','company_id'), 'conditions' => array('id' => $token_verify['id'][0]->id)));
	    		$company_users = $this->SupportCompuser->find(array('conditions' => array('id !=' => $company_id[0]->id, 'company_id' => $company_id[0]->company_id)));
	    		if(!empty($company_users)){
	    			$data['company_users'] = $company_users;
	    			$status = 'success';
	    		}
	    		else{
	    			$status = 'failure';
		    		$message = 'No other users found.';
	    		}
	    	}

    		else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    			//read and decode json file
    			$_POST = json_decode(file_get_contents('php://input'), true);
    			if(isset($_POST['title']) && !empty($_POST['title'])){
	    		$userdata['title'] = $_POST['title'];
	    		}
	    		else{
	    			$error = 'Please enter group title.';
	    		}
	    		if(isset($_POST['ht_handler'])){
	    			$userdata['ht_handler'] = $_POST['ht_handler'];
	    		}
	    		if(isset($_POST['comp_users']) && !empty($_POST['comp_users'])){
	    			$status = 'success';
	    		}
	    		else{
	    			$error = 'Please select user for the group.';
	    		}
	    		if(empty($error)){
	    			$this->load_model('SupportCompuser');
	    			$company_id = $this->SupportCompuser->find(array('selects' => array('id','name','company_id'), 'conditions' => array('id' => $token_verify['id'][0]->id)));
	    			if(!empty($company_id)){
	    				$this->load_model('SupportGroup');
	    				$userdata['company_id'] = $company_id[0]->company_id;
	    				$userdata['group_owner'] = $company_id[0]->name;
	    				if($this->SupportGroup->insert($userdata)){
	    					//get the last inserted id
	    					$usergroup_id = $this->SupportGroup->insert_id;
	    					$data['group_details'] = $userdata;
		    				$groupuser = array();
		    				$this->load_model('SupportCompuserGroup');
		    				foreach ($_POST['comp_users'] as $user) {
		    					$groupuser['compuser_id'] = $user;
		    					$groupuser['group_id'] = $usergroup_id;
			    				if($this->SupportCompuserGroup->insert($groupuser)){
			    					$status = 'success';
			    					$data['group_users'][] = $groupuser;
			    				}
			    				else{
			    					$status = 'failure';
			    					$message = 'could not created group.';
			    				}
		    				}
	    				}
	    				else{
	    					$status = 'failure';
			    			$message = 'could not created group.';
	    				}
	    			}
	    			else{
	    				$status = 'failure';
		    			$message = 'can not create group.';
	    			}
	    		}
	    		else{
		    		$status = 'failure';
		    		$message = $error;
	    		}
    		}
    		else{
	    		$status = 'failure';
    			$message = 'Invalid access!';
    		}
    	}
    	else{
    		$status = 'failure';
    		$message = $token_verify['error'];
    	}
    	$this->send_response($status, $data, $message);
	}

    public function group_messages(){

    	$userdata = array();
    	$data = array();
    	$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
	    	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	    		$_POST = json_decode(file_get_contents('php://input'), true);
	    		if(isset($_POST['group_id']) && !empty($_POST['group_id'])){
	    			$userdata['group_id'] = $_POST['group_id']; 
	    		}
	    		else{
	    			$error = 'Invalid group.';
	    		}
	    		if(isset($_POST['message_id']) && !empty($_POST['message_id'])){
	    			$userdata['message_id'] = $_POST['message_id']; 
	    		}
	    		else{
	    			$error = 'Invalid msg id.';
	    		}
	    		
	    		if(empty($error)){
	    			$this->load_model('SupportMessage');
	    			$messages = $this->SupportMessage->find(array('conditions' => array('group_id' => $userdata['group_id'], 'SupportMessage.id >' => $userdata['message_id'])));
	    			if(!empty($messages)){
	    				foreach ($messages as $message) {
	    					$data['last_message_id'] = $message->id;
	    				}
	    				$status = 'success';
	    				$data['messages'] = $messages;
	    			}
	    			else{
	    				$status = 'failure';
		    			$message = 'No chats available.';
	    			}
	    		}
	    		else{
	    			$status = 'failure';
		    		$message = $error;
	    		}
	    	}
	    	else{
	    		$status = 'failure';
    			$message = 'Invalid access!';
	    	}
	    }
	    else{
    		$status = 'failure';
    		$message = $token_verify['error'];
    	}
    	$this->send_response($status, $data, $message);
    }

    public function send_messages(){

    	$userdata = array();
    	$data = array();
    	$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
	    	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	    		$_POST = json_decode(file_get_contents('php://input'), true);
	    		if(isset($_POST['group_id']) && !empty($_POST['group_id'])){
	    			$userdata['group_id'] = $_POST['group_id']; 
	    		}
	    		else{
	    			$error = 'Invalid group.';
	    		}
	    		if(isset($_POST['message']) && !empty($_POST['message_id'])){
	    			$userdata['message'] = $_POST['message']; 
	    		}
	    		else{
	    			$error = 'Blank message.';
	    		}
	    		if(empty($error)){
	    			$this->load_model('SupportCompuser');
	    			$user_name = $this->SupportCompuser->find(array('selects' => array('name'), 'conditions' => array('id' => $token_verify['id'][0]->id)));
	    			$userdata['sender'] = $user_name[0]->name;
	    			$userdata['type'] = 1;
	    			$userdata['timestamp'] = date('Y-m-d H:i:s');
	    			$this->load_model('SupportMessage');
	    			
	    			if($this->SupportMessage->insert($userdata)){
	    				$status = 'success';
	    				$data['message'] = $userdata;
	    			}
	    			else{
	    				$status = 'failure';
		    			$message = 'No chats available.';
	    			}
	    		}
	    		else{
	    			$status = 'failure';
		    		$message = $error;
	    		}
	    	}
	    	else{
	    		$status = 'failure';
    			$message = 'Invalid access!';
	    	}
	    }
	    else{
    		$status = 'failure';
    		$message = $token_verify['error'];
    	}
    	$this->send_response($status, $data, $message);

    }
    
    public function remove_groupusers(){

    	$userdata = array();
    	$data = array();
    	$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
	    	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	    		$_POST = json_decode(file_get_contents('php://input'), true);
	    		if(isset($_POST['group_id']) && !empty($_POST['group_id'])){
	    			$userdata['group_id'] = $_POST['group_id']; 
	    		}
	    		else{
	    			$error = 'Invalid group.';
	    		}
	    		if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
	    			$userdata['user_id'] = $_POST['user_id']; 
	    		}
	    		else{
	    			$error = 'Invalid user.';
	    		}
	    		if(empty($error)){
	    			$this->load_model('SupportCompuser');
	    			$user_name = $this->SupportCompuser->find(array('selects' => array('name'), 'conditions' => array('id' => $token_verify['id'][0]->id)));
	    			
	    			$this->load_model('SupportGroup');
	    			$group_owner = $this->SupportGroup->find(array('conditions' => array('group_owner' => $user_name[0]->name)));

	    			if(!empty($group_owner)){
	    				$this->load_model('SupportCompuserGroup');
		    			$group_user = $this->SupportCompuserGroup->find(array('conditions' => array('compuser_id' => $userdata['user_id'], 'group_id' => $userdata['group_id'])));
	
		    			if(!empty($group_user)){
		    				$this->SupportCompuserGroup->delete($group_user[0]->id);
		    				$status = 'success';
		    				$data['groupuser'] = $group_user;
		    			}
		    			else{
		    				$status = 'failure';
		    				$message = 'Invalid user details.';
		    			}
	    			}
	    			else{
	    				$status = 'failure';
	    				$message = 'You do not have access to remove this user.';
	    			}
	    		}
	    		else{
	    			$status = 'failure';
	    			$message = $error;
	    		}
	    	}
	    	else{
	    		$status = 'failure';
	    		$message = 'Invalid access.';
	    	}
	    }
	    else{
	    	$status = 'failure';
    		$message = $token_verify['error'];
	    }

	    $this->send_response($status, $data, $message);
    }

    public function create_task(){
    	
    	$userdata = array();
    	$data = array();
    	$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
    		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    			$_POST = json_decode(file_get_contents('php://input'), true);
    			if(isset($_POST['title']) && !empty($_POST['title'])){
    				$userdata['title'] = $_POST['title'];
    			}
    			else{
    				$error = 'Enter the title of task.';
    			}
    			if(isset($_POST['description']) && !empty($_POST['description'])){
    				$userdata['description'] = $_POST['description'];
    			}
    			else{
    				$error = 'Enter the description of task.';
    			}
    			if(empty($error)){
    				$this->load_model('SupportCompuser');
	    			$user_detail = $this->SupportCompuser->find(array('selects' => array('id','name','company_id'), 'conditions' => array('id' => $token_verify['id'][0]->id)));
	    			if(!empty($user_detail)){
	    				$userdata['created_by'] = $user_detail[0]->name;
	    				$userdata['company_id'] = $user_detail[0]->company_id;
	    				$userdata['task_deadline'] = $_POST['task_deadline'];
	    				$this->load_model('SupportTask');
	    				if($this->SupportTask->insert($userdata)){
	    					$status = 'success';
	    					$data['task_created'] = $userdata;
	    				}
	    				else{
	    					$status = 'failure';
	    					$message = 'couldnot create the task.';
	    				}
	    			}
	    			else{
	    				$status = 'error';
	    				$message = 'Invalid user.';
	    			}
    			}
    			else{
    				$status = 'failure';
	    			$message = $error;
    			}
    		}
    		else{
    			$status = 'failure';
	    		$message = 'Invalid access.';
    		}
    	}
    	else{
    		$status = 'failure';
    		$message = $token_verify['error'];
    	}

    	$this->send_response($status, $data, $message);
    }

    public function change_passkey(){

    	$userdata = array();
    	$data = array();
    	$token_verify = $this->check_token();
    	if(!empty($token_verify['id'])){
	    	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	    		$_POST = json_decode(file_get_contents('php://input'), true);
	    		if(isset($_POST['old_pass']) && !empty($_POST['old_pass'])){
	    			$userdata['old_pass'] = $_POST['old_pass']; 
	    		}
	    		else{
	    			$error = 'Enter the current passkey.';
	    		}
	    		if(isset($_POST['new_pass']) && !empty($_POST['new_pass'])){
	    			$userdata['new_pass'] = $_POST['new_pass']; 
	    		}
	    		else{
	    			$error = 'Enter the new passkey.';
	    		}
	    		if(empty($error)){
	    			$this->load_model('SupportCompuser');
	    			$check_currentpass = $this->SupportCompuser->find(array('conditions'=> array('passkey' => $userdata['old_pass'])));
	    			if(!empty($check_currentpass)){
	    				$this->SupportCompuser->update($token_verify['id'][0]->id, array('passkey' => $userdata['new_pass']));
						$status = 'success';
						$updated_userdetails = $this->SupportCompuser->find(array('conditions'=> array('id' => $token_verify['id'][0]->id)));
						$data['userdetails'] = $updated_userdetails;
	    			}
	    			else{
	    				$status = 'failure';
	    				$message = 'current passkey did not match';
	    			}
	    		}
	    		else{
	    			$status = 'failure';
	    			$message = $error;
	    		}
	    	}
	    	else{
	    		$status = 'failure';
	    		$message = 'Invalid access.';
	    	}
	    }
	    else{
	    	$status = 'failure';
    		$message = $token_verify['error'];
	    }

	    $this->send_response($status, $data, $message);
    }

    public function check_token($token = null){
    	$headers = apache_request_headers();
    	//print_r($headers);exit;
		$token = $headers['Token'];
	    //print_r($token);exit;
	    if($token != null){
	    	$this->load_model('SupportCompuser');
	    	$token_verify['id'] = $this->SupportCompuser->find(array('conditions' => array('token' => $token)));
	    	if(!empty($token_verify['id'])){
	    		return $token_verify;
	    	}
	    	else{
	    		$token_verify['error'] = 'Authorization denied.';
	    		return $token_verify;
	    	}
	    }
	    else{
	    	$token_verify['error'] = 'Authorization denied.';
	    	return $token_verify;
	    }
    }

    public function send_response($status = null, $data = null, $message = null){

    	if($status == 'success'){
    		$response = array('status' => $status, 'data' => $data);
    	}
    	else{
   			$response = array('status' => $status, 'error' => array('message' => $message));
   		}
   		wp_send_json($response);
    }


    // $posted_data =  isset( $_POST ) ? $_POST : array();
		// $file_data = isset( $_FILES ) ? $_FILES : array();
		// //print_r($file_data); exit;

		// $data = array_merge( $posted_data, $file_data );
		// $response = array();
		// // echo"<pre>";
		// // print_r($posted_data);
		// // print_r($data); exit;

		// $attachment_id = media_handle_upload( 'fileUpload', 0 );
		// //print_r($attachment_id); exit;
		// if ( is_wp_error( $attachment_id ) ) { 
		// 	$response['response'] = "ERROR";
		// 	$response['error'] = $fileErrors[ $data['fileUpload']['error'] ];
		//  } else {
		// $upload_dir = wp_upload_dir();
		// 	$upload_path = $upload_dir["basedir"];
	 //    	$upload_url = $upload_dir["baseurl"];
	   
		// 	$fileName = $data["fileUpload"]["name"];
		// 	$fileNameChanged = str_replace(" ", "_", $fileName);
		// 	$temp_name = $data["fileUpload"]["tmp_name"];
		// 	$file_size = $data["fileUpload"]["size"];
		// 	$fileError = $data["fileUpload"]["error"];
		// 	$file_type = $data["fileUpload"]["type"];

		// 	$mb = 2 * 1024 * 1024;
		// 	$targetPath = $upload_path;
		// 	$response["filename"] = $fileName;
		// 	$response["file_size"] = $file_size;
		// 	if($fileError > 0){
		// 		$response["response"] = "ERROR";
	 //            $response["error"] = $fileErrors[ $fileError ];
		// 	} else {
		// 		if(file_exists($targetPath . "/" . $fileNameChanged)){
							
		// 			$response["response"] = "ERROR";
		// 	        $response["error"] = "File already exists.";
		// 		} else {
		// 			if($file_size <= $mb){
		// 	            $response["response"] = "SUCCESS";
		// 	            $response["url"] =  $upload_url . "/" . $fileNameChanged;
		// 	            $response["type"] = $file_type;
		// 	            $response["attachment_id"] = $attachment_id;
		            	
		//            	} else {
		//             		$response["response"] = "ERROR";
		//             		$response["error"]= "File is too large. Max file size is 2 MB.";
		//             	}
	 //            }
		// 	}
		// }
	//wp_send_json($response);
}

?>