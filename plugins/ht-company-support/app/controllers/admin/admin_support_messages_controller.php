<?php

class AdminSupportMessagesController extends MvcAdminController {
    
    var $default_columns = array( 'task_id', 'message', 'type', 'timestamp');
    
    public function add(){
    	$this->set_data();
    	// echo"<pre>";
    	// print_r($this->params['data']); exit;
    	if (!empty($this->params['data']) && !empty($this->params['data']['SupportMessage'])) {
            //$object = $this->params['data']['SupportMessage'];
        
            //if (empty($object['id'])) {
                $this->SupportMessage->create($this->params['data']);
                $id = $this->SupportMessage->insert_id;
                $url = MvcRouter::admin_url(array('controller' => $this->name, 'action' => 'edit', 'id' => $id));
                $this->flash('notice', 'Successfully saved!');
                $this->redirect($url);
            //}
        }
        //$this->set_object();
    }

    public function set_data(){
    	$this->load_model('SupportGroup');
    	$groups = $this->SupportGroup->find(array('selects' => array('id', 'title')));
    	$this->set('groups', $groups);
    }

    public function save_chat(){
        require_once(ABSPATH . 'wp-includes' . '/functions.php');
        if(!empty($this->params['group_id']) && !empty($this->params['content'])){
            $message = $this->params['content'];
            $data = array();
            $filtered_message = $this->makeLinks($message);
            $data['message'] = $filtered_message;
            $data['sender'] = $this->params['current_user'];
            $data['group_id'] = $this->params['group_id'];
            $data['timestamp'] = $this->params['msgtime'];
            $data['type'] = 0;
        }
        $this->SupportMessage->save($data);
    }

    public function get_chat(){
        $message_id = $this->params['content'];
        $group_id = $this->params['group_id'];
        $msg = $this->SupportMessage->find(array('conditions' => array('SupportMessage.group_id' => $group_id,'SupportMessage.id >' => $message_id)));
        wp_send_json( array($msg));

    }

    public function makeLinks($str = null) {
        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
        $urls = array();
        $urlsToReplace = array();
        if(preg_match_all($reg_exUrl, $str, $urls)) {
            $numOfMatches = count($urls[0]);
            $numOfUrlsToReplace = 0;
            for($i=0; $i<$numOfMatches; $i++) {
                $alreadyAdded = false;
                $numOfUrlsToReplace = count($urlsToReplace);
                for($j=0; $j<$numOfUrlsToReplace; $j++) {
                    if($urlsToReplace[$j] == $urls[0][$i]) {
                        $alreadyAdded = true;
                    }
                }
                if(!$alreadyAdded) {
                    array_push($urlsToReplace, $urls[0][$i]);
                }
            }
            $numOfUrlsToReplace = count($urlsToReplace);
            for($i=0; $i<$numOfUrlsToReplace; $i++) {
                $str = str_replace($urlsToReplace[$i], "<a href=\"".$urlsToReplace[$i]."\">".$urlsToReplace[$i]."</a> ", $str);
            }
            return $str;
        } else {
            return $str;
        }
    }

}

?>