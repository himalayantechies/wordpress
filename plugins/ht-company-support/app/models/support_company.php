<?php

class SupportCompany extends MvcModel {

    var $display_field = 'name';
    var $order = 'SupportCompany.id DESC';
    var $has_many = array(
        'SupportCompuser' => array(
            'foreign_key' => 'company_id',
            'dependent' => true
        ),
        'SupportGroup' => array(
            'foreign_key' => 'company_id',
            'dependent' => true
        ),
        'SupportTask' => array(
            'foreign_key' => 'company_id',
            'dependent' => true
        ));
    var $validate = array(
    	'name' => 'not_empty',
    	'contact' => array(
    		'rule' => 'numeric',
    		'message' => 'Contact number should be numeric'
    		),
    	'email' => array(
    		'rule' => 'email',
    		'message' => 'Enter a valid email address'
    		),
    	'website' => array(
    		'rule' => 'url',
    		'required' => false,
    		'message' => 'Enter a valid url in website field'
    		)
    	);
}

?>