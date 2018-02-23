<?php

class SupportMessage extends MvcModel {

    var $display_field = 'message';
    var $order = 'SupportMessage.timestamp ASC';
    var $belongs_to = array(
    	'SupportGroup' => array(
      		'foreign_key' => 'group_id'
    	));
}

?>