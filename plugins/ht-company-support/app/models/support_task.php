<?php

class SupportTask extends MvcModel {

    var $display_field = 'detail';
    var $order = 'SupportTask.id DESC';
    //var $belongs_to = array('SupportGroup', 'SupportMessage', 'SupportCompuser');
    var $belongs_to = array(
    	'SupportCompany' => array(
      		'foreign_key' => 'company_id'
    	));
    var $has_many = array(
        'SupportTaskPost' => array(
            'foreign_key' => 'task_id',
            'dependent' => true
            )
        );
    var $validate = array(
    	'detail' => 'not_empty',
    	'company_id' => array(
    		'rule' => 'not_empty',
    		'message' => 'Select a company'
    		),
    	'task_deadline' => array(
    		'rule' => 'not_empty',
    		'message' => 'Enter the date in the given format'
    		)
    	);

    public function after_find($object) {

        if ($object->support_company != null) {
            $object->company_name = $object->support_company->name;
        }
    }
}

?>