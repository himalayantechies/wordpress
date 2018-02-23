<?php
MvcRouter::public_connect('support_apis/test', array('controller' => 'support_apis', 'action' => 'test'));
MvcRouter::public_connect('support_apis/user_validate', array('controller' => 'support_apis', 'action' => 'user_validate'));
MvcRouter::public_connect('support_apis/client_userlist', array('controller' => 'support_apis', 'action' => 'client_userlist'));
MvcRouter::public_connect('support_apis/user_grouplist', array('controller' => 'support_apis', 'action' => 'user_grouplist'));
MvcRouter::public_connect('support_apis/group_messages', array('controller' => 'support_apis', 'action' => 'group_messages'));
MvcRouter::public_connect('support_apis/send_messages', array('controller' => 'support_apis', 'action' => 'send_messages'));
MvcRouter::public_connect('support_apis/create_group', array('controller' => 'support_apis', 'action' => 'create_group'));
MvcRouter::public_connect('support_apis/remove_groupusers', array('controller' => 'support_apis', 'action' => 'remove_groupusers'));
MvcRouter::public_connect('support_apis/change_passkey', array('controller' => 'support_apis', 'action' => 'change_passkey'));
MvcRouter::public_connect('support_apis/create_task', array('controller' => 'support_apis', 'action' => 'create_task'));


MvcRouter::admin_ajax_connect(array('controller' => 'admin_support_groups', 'action' => 'get_company_user'));
MvcRouter::admin_ajax_connect(array('controller' => 'admin_support_messages', 'action' => 'save_chat'));
MvcRouter::admin_ajax_connect(array('controller' => 'admin_support_messages', 'action' => 'get_chat'));
MvcRouter::admin_ajax_connect(array('controller' => 'admin_support_tasks', 'action' => 'file_upload'));
MvcRouter::admin_ajax_connect(array('controller' => 'admin_support_tasks', 'action' => 'file_delete'));
MvcRouter::admin_ajax_connect(array('controller' => 'admin_support_tasks', 'action' => 'add_media'));
MvcRouter::admin_ajax_connect(array('controller' => 'admin_support_tasks', 'action' => 'delete_media'));

?>