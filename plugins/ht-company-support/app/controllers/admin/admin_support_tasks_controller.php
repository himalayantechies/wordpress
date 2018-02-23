<?php

class AdminSupportTasksController extends MvcAdminController {
    
    var $default_columns = array( 'company_name', 'title', 'created_by', 'task_deadline');
    var $default_search_joins = array('SupportCompany');
    var $default_searchable_fields = array('SupportCompany.name', 'SupportTask.title','SupportTask.created_by','SupportTask.task_deadline');

    public function add() {
        
        $this->set_data();
        $this->create_or_save();
    
    }

    public function edit() {
        
        $this->set_data();
        $this->verify_id_param();
        $this->set_object();
        $this->create_or_save();
    
    }

    public function index(){
        $this->load_helper('Task');
        $this->set_objects();
    }

    public function view(){

        require_once(ABSPATH . 'wp-load.php');
        require_once(ABSPATH . 'wp-config.php');
        require_once(ABSPATH . 'wp-includes' . '/wp-db.php');
        require_once ABSPATH.'wp-admin/includes/upgrade.php';
        $mediafiles = array();
        $this->verify_id_param();
        $this->set_object();
        $data = $this->object;
        $this->load_model('SupportTaskPost');
        $tasks = $this->SupportTaskPost->find(array('conditions'=> array('SupportTaskPost.task_id' => $this->object->id)));
        if (!empty($tasks)){
           foreach ($tasks as $key => $task) {
                $mediafiles[] = $wpdb->get_row("SELECT * FROM wp_posts WHERE wp_posts.ID = $task->media_id");
            }
        }
        $this->set(compact('data', 'mediafiles'));
    }

    public function delete() {
        $this->verify_id_param();
        $this->set_object();

        if (!empty($this->object)) {
            if($this->delete_task_media($this->object->id) == true){
                $this->model->delete($this->params['id']);
                $this->flash('notice', __('Successfully deleted!', 'wpmvc'));
            }
            else{
                $this->flash('warning', 'A '.MvcInflector::humanize($this->model->name).' with ID "'.$this->params['id'].'" couldn\'t be found.');
            }
        } else {
            $this->flash('warning', 'A '.MvcInflector::humanize($this->model->name).' with ID "'.$this->params['id'].'" couldn\'t be found.');
        }
        $url = MvcRouter::admin_url(array('controller' => $this->name, 'action' => 'index'));
        $this->redirect($url);
    }
    
    public function delete_task_media($task_id = null){
        require_once(ABSPATH . 'wp-load.php');
        require_once(ABSPATH . 'wp-config.php');
        require_once(ABSPATH . 'wp-includes' . '/wp-db.php');
        require_once ABSPATH.'wp-admin/includes/upgrade.php';

        if(!empty($task_id)){
            $this->load_model('SupportTaskPost');
            $task_media_ids = $this->SupportTaskPost->find(array('conditions'=> array('SupportTaskPost.task_id' => $task_id)));
            if(!empty($task_media_ids)){
                foreach ($task_media_ids as $key => $postID) {
                    
                    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE ID=$postID->media_id"));
                    if( $attachment ){
                        $attachmentID = $attachment[0];
                        wp_delete_attachment( $attachmentID );
                    }
                    else{
                        return false;
                    }
                }
                return true;
            }
            else{
                return true;
            }  
        }
        else{
            return true;
        }
    }

    public function set_data(){
    	$this->load_model('SupportCompany');
    	$companies = $this->SupportCompany->find();
    	$this->set('companies', $companies);
    }

    public function create_or_save() {

        if (!empty($this->params['data'][$this->model->name])) {
            $object = $this->params['data'][$this->model->name];
            //echo '<pre>'; print_r($object); exit;
            if (empty($object['id'])) {
                if($this->model->create($this->params['data'])) {
                    $id = $this->model->insert_id;
                    //print_r($id);exit;
                    $url = MvcRouter::admin_url(array('controller' => $this->name, 'action' => 'index'));
                    $this->flash('notice', __('Successfully created!', 'wpmvc'));
                    $this->redirect($url);
                } else {
                    $this->flash('error', $this->model->validation_error_html);
                    $this->set_object();
                }
            } else {
                if ($this->model->save($this->params['data'])) {
                    $this->flash('notice', __('Successfully saved!', 'wpvmc'));
                    $this->refresh();
                } else {
                    $this->flash('error', $this->model->validation_error_html);
                }
            }
        }
    }

    public function add_media(){

        require_once(ABSPATH . 'wp-load.php');
        require_once(ABSPATH . 'wp-config.php');
        require_once(ABSPATH . 'wp-includes' . '/wp-db.php');
        require_once ABSPATH.'wp-admin/includes/upgrade.php';

        global $wpdb;
        $response = array();
        $this->load_model('SupportTaskPost');
        $id = $this->params['id'];
        $tasks = $this->SupportTaskPost->find(array('conditions'=> array('SupportTaskPost.task_id' => $id)));

        foreach ($tasks as $key => $task) {
            $mediafiles[] = $wpdb->get_row("SELECT * FROM wp_posts WHERE wp_posts.ID = $task->media_id");
        }

        if(!empty($this->params['media_id']) && !empty($this->params['task_id'])){   
            $media_ids = $this->params['media_id'];
            foreach ($media_ids as $mediaId) {
                $taskmedia['media_id'] = $mediaId;
                $taskmedia['task_id'] = $this->params['task_id'];
                $this->SupportTaskPost->save($taskmedia);
            }
            $response['response'] = "SUCCESS";
            wp_send_json($response);
        }
        $this->set(compact('id', 'mediafiles'));
    }

    public function file_delete(){
        require_once(ABSPATH . 'wp-load.php');
        require_once(ABSPATH . 'wp-config.php');
        require_once(ABSPATH . 'wp-includes' . '/wp-db.php');
        require_once ABSPATH.'wp-admin/includes/upgrade.php';

        require_once(ABSPATH . 'wp-admin' . '/includes/image.php');
        require_once(ABSPATH . 'wp-admin' . '/includes/file.php');
        require_once(ABSPATH . 'wp-admin' . '/includes/media.php');
        require_once(ABSPATH . 'wp-includes' . '/post.php');
        require_once(ABSPATH . 'wp-includes' . '/load.php');
        require_once(ABSPATH . 'wp-includes' . '/functions.php');

        if( isset( $_POST ) ){
        global $wpdb;
        $file_id = $_POST['post_id'];
        $fileurl = $_POST['file_url'];
        $task_id = $_POST['task_id'];
        $response = array();
        
        $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE ID=$file_id"));
        
        if( $attachment ){
            $attachmentID = $attachment[0];
            if ( false === wp_delete_attachment( $attachmentID ) ) {
    
                $response['response'] = "ERROR";
                $response['error'] = 'File could not be deleted';
    
            } else {
                $response['attachment_id'] = $attachmentID;
                $response['response'] = "SUCCESS";
                $response['msg'] = "The File has been deleted !!";
                $this->load_model('SupportTaskPost');
                $task_post_id = $this->SupportTaskPost->find(array('conditions' => array('SupportTaskPost.media_id' => $file_id, 'SupportTaskPost.task_id' => $task_id)));
                $this->SupportTaskPost->delete($task_post_id[0]->id);
            }
        }
        else{
            $filename = basename( $fileurl );
            $upload_dir = wp_upload_dir();
            $upload_path = $upload_dir["subdir"];
            $uploaded_file = $upload_path . $filename;
                
                if(file_exists($uploaded_file)){
            
                @unlink($uploaded_file);
                $response['response'] = "SUCCESS";
            
            } else {
                $response['response'] = "ERROR";
                $response['error'] = 'File does not exist';
            }
        } 
        wp_send_json( $response );
    } 
    die();
    }

    public function file_upload() {

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
        $response = array();
        //$file_data = isset( $_FILES ) ? $_FILES : array();
        if(!empty($_FILES['ibenic_file_upload'])){
            $files = $_FILES['ibenic_file_upload'];
            foreach ($files['name'] as $key => $value) {
                if ($files['name'][$key]) {
                    $file = array(
                        'name' => $files['name'][$key],
                        'type' => $files['type'][$key],
                        'tmp_name' => $files['tmp_name'][$key],
                        'error' => $files['error'][$key],
                        'size' => $files['size'][$key]
                    );
                    $_FILES = array("upload_file" => $file);
                    //print_r($_FILES);
                    $attachment_id = media_handle_upload('upload_file', 0 );
                    //print_r($attachment_id); exit;
                    if ( is_wp_error( $attachment_id ) ) { 
                        $response[$key]['response'] = "ERROR";
                        $response[$key]['error'] = $fileErrors[ $_FILES['upload_file']['error'] ];
                    }
                    else{
                        $upload_dir = wp_upload_dir();
                        $upload_path = $upload_dir["subdir"];
                        $upload_url = $upload_dir["url"];
                       
                        $fileName = $_FILES["upload_file"]["name"];
                        $fileNameChanged = str_replace(" ", "_", $fileName);
                        $temp_name = $_FILES["upload_file"]["tmp_name"];
                        $file_size = $_FILES["upload_file"]["size"];
                        $fileError = $_FILES["upload_file"]["error"];
                        $file_type = $_FILES["upload_file"]["type"];

                        $mb = 4 * 1024 * 1024;
                        $targetPath = $upload_path;
                        $response[$key]["filename"] = $fileName;
                        $response[$key]["file_size"] = $file_size;
                        if($fileError > 0){
                            $response[$key]["response"] = "ERROR";
                            $response[$key]["error"] = $fileErrors[ $fileError ];
                        }
                        else {
                            if(file_exists($targetPath . "/" . $fileNameChanged)){
                                            
                                $response[$key]["response"] = "ERROR";
                                $response[$key]["error"] = "File already exists.";
                            }
                            else{ 
                                if($file_size <= $mb){
                                    $response[$key]["response"] = "SUCCESS";
                                    $response[$key]["url"] =  $upload_url . "/" . $fileNameChanged;
                                    $response[$key]["type"] = $file_type;
                                    $response[$key]["attachment_id"] = $attachment_id;       
                                }
                                else{
                                    $response[$key]["response"] = "ERROR";
                                    $response[$key]["error"]= "File is too large. Max file size is 4 MB.";
                                }
                            }
                        }
                    }
                }
            }
        }
        wp_send_json($response);
    }
}

?>