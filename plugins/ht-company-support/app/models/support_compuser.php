<?php

class SupportCompuser extends MvcModel {

    var $display_field = 'name';
    var $order = 'SupportCompuser.id DESC';
    var $has_many = array(
        'SupportGroup' => array(
            'foreign_key' => 'compuser_id'
        ));
    var $belongs_to = array(
    	'SupportCompany' => array(
      		'foreign_key' => 'company_id'
    	));
    var $validate = array(
        'name' => array(
            'rule' => 'alphanumeric'
            ),
        'company_id' => array(
            'rule' => 'not_empty',
            'message' => 'Select a company'
            ),
        'contact' => array(
            'rule' => 'numeric'
            ),
        'email' => array(
            'rule' => 'email'
            ),
        'passkey' => 'not_empty',
    );
    
    public function after_find($object) {
            //echo"<pre>";
            //print_r($object->support_company); exit;
        if ($object->support_company != null) {
            $object->company_name = $object->support_company->name;
        }
    }
    //var $has_many => array('SupportTask');
    //var $includes = array('SupportCompany');
}

?>