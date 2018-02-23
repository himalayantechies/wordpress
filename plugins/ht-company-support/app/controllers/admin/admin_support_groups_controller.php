<?php

class AdminSupportGroupsController extends MvcAdminController {

    var $default_columns = array('title', 'ht_handler', 'company_name', 'group_owner');
    var $default_search_joins = array('SupportCompany');
    var $default_searchable_fields = array('SupportGroup.title', 'SupportGroup.ht_handler','SupportCompany.name','SupportGroup.group_owner');

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
        $this->load_helper('Group');
        $this->set_objects();
    }

    public function set_data(){
    	$this->load_model('SupportCompany');
    	$this->load_model('SupportCompuser');
    	$companies = $this->SupportCompany->find(array('selects' => array('id', 'name')));
    	$this->set('companies', $companies);
    }
    
    public function create_or_save() {
        if (!empty($this->params['data'][$this->model->name])) {
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

    public function get_company_user(){

        $this->load_model('SupportCompuser');
        $id = $this->params['content'];
        $company_users = $this->SupportCompuser->find(array('conditions' => array('SupportCompuser.company_id' => $id)));
        wp_send_json( array($company_users) );
    }

    public function chat($id = null){
        $this->verify_id_param();
        $id = $this->params['id'];
        $this->load_model('SupportCompuser');
        $this->load_model('SupportCompuserGroup');
        $users_id = $this->SupportCompuserGroup->find(array('selects' => array('compuser_id'), 'conditions' => array('SupportCompuserGroup.group_id' => $id)));
        foreach ($users_id as $user) {
            $users_name[] = $this->SupportCompuser->find(array('conditions' => array('SupportCompuser.id' => $user->compuser_id)));
        }
        $this->set(compact('users_name','id'));
    }
}

?>