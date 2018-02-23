<?php

class SupportGroup extends MvcModel {

    var $display_field = 'title';
    var $order = 'SupportGroup.id DESC';
    var $has_many = array('SupportMessage', 'SupportTask');
    //var $includes = array('SupportCompuser');
    var $belongs_to = array(
    	'SupportCompany' => array(
      		'foreign_key' => 'company_id'
    	));
    var $has_and_belongs_to_many = array(
    	'SupportCompuser' => array(
      		'join_table' => '{prefix}support_compuser_groups',
      		'association_foreign_key' => 'compuser_id',
      		'foreign_key' => 'group_id'
      	));
    var $validate = array(
      'title' => array(
        'rule' => 'alphanumeric'
        ),
      'company_id' => array(
        'rule' => 'not_empty',
        'message' => 'Select a company'
        ),
      'compuser_id' => array(
        'rule' => 'not_empty',
        'message' => 'Select a user'
        )
      );

    public function after_find($object) {

        if ($object->support_company != null) {
            $object->company_name = $object->support_company->name;
        }
    }
}

?>