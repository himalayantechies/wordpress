<?php

class AdminSupportCompaniesController extends MvcAdminController {
    
    var $default_columns = array( 'name', 'address', 'contact', 'email', 'website');
    var $default_searchable_fields = array('SupportCompany.name', 'SupportCompany.address', 'SupportCompany.contact', 'SupportCompany.email', 'SupportCompany.website' );
    
    public function add() {
        
        $this->create_or_save();
    
    }

    public function edit() {
        
        $this->verify_id_param();
        $this->set_object();
        $this->create_or_save();
    
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
}

?>