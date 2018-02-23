<?php

class AdminSupportCompusersController extends MvcAdminController {
    
    var $default_columns = array('name', 'company_name', 'contact', 'email', 'designation', 'passkey', 'token');
    var $default_search_joins = array('SupportCompany');
    var $default_searchable_fields = array('SupportCompuser.name', 'SupportCompany.name','SupportCompuser.contact', 'SupportCompuser.email','SupportCompuser.designation');

         function so($data)
    {
        echo '<pre>';
        die(print_r($data));
    }

    public function add() {
        
        $this->set_companies();
        $this->saveuser();
        //$this->email_notify();
    
    }

    public function edit() {
        
        $this->set_companies();
        $this->verify_id_param();
        $this->set_object();
        $this->create_or_save();
    
    }

    public function set_companies(){
    	$this->load_model('SupportCompany');
    	$companies = $this->SupportCompany->find(array('selects' => array('id', 'name')));
    	$this->set('companies', $companies);
    }

    public function saveuser() {
        if (!empty($this->params['data'][$this->model->name])) {
            $token = uniqid().time();
            $this->params['data']['SupportCompuser']['token'] = $token;
            // echo"<pre>";
            // print_r($this->params);exit;
            $object = $this->params['data'][$this->model->name];
            if (empty($object['id'])) {
                if($this->model->create($this->params['data'])) {
                    $id = $this->model->insert_id;
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

    public function email_notify(){
        //echo"here";exit;
        $to = 'me_sthasuman@yahoo.com';
        $subject = 'Welcome to HT Support.';
        $body = 'This is test.';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        wp_mail( $to, $subject, $body, $headers );
    }
}

?>