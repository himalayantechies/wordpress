<?php

class SupportTaskPost extends MvcModel {

	var $table = 'wp_support_task_posts';
    var $display_field = 'name';

    var $belongs_to = array(
    	'SupportTask' => array(
    		'foreign_key' => 'task_id'
    		)
    	);
}

?>