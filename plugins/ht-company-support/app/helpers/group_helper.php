<?php

class GroupHelper extends MvcHelper{
    
    public function admin_header_cells($controller) {
        $html = '';
        foreach ($controller->default_columns as $key => $column) {
            $html .= $this->admin_header_cell(__($column['label'], $this->plugin_name));
        }
        $html .= $this->admin_header_cell('');
        return '<tr>'.$html.'</tr>';
        
    }
    
    public function admin_header_cell($label) {
        return '<th scope="col" class="manage-column">'.$label.'</th>';
    }
    
    public function admin_table_cells($controller, $objects, $options = array()) {
        $html = '';
        foreach ($objects as $object) {
            $html .= '<tr>';
            foreach ($controller->default_columns as $key => $column) {
                $html .= $this->admin_table_cell($controller, $object, $column, $options);
            }
            $html .= $this->admin_actions_cell($controller, $object, $options);
            $html .= '</tr>';
        }
        return $html;
    }
    
    public function admin_table_cell($controller, $object, $column, $options = array()) {
        if (!empty($column['value_method'])) {
            $value = $controller->{$column['value_method']}($object);
        } else {
            $value = $object->{$column['key']};
        }
        return '<td>'.$value.'</td>';
    }
    
    public function admin_actions_cell($controller, $object, $options = array()) {
        
        $default = array(
            'actions' => array(
                'chat' => true,
                'edit' => true,
                'view' => true,
                'delete' => true,
            )
        );
        
        $options = array_merge($default, $options);
        
        $links = array();
        $object_name = empty($object->__name) ? 'Item #'.$object->__id : $object->__name;
        $encoded_object_name = $this->esc_attr($object_name);

        if($options['actions']['chat']){
            $links[] = '<a href="'.MvcRouter::admin_url(array('object' => $object, 'action' => 'chat')).'" title="' . __('Chat', 'wpmvc') . ' ' .$encoded_object_name.'" target="_blank">' . __('Chat', 'wpmvc') .'</a>';
        }
        
        if($options['actions']['edit']){
            $links[] = '<a href="'.MvcRouter::admin_url(array('object' => $object, 'action' => 'edit')).'" title="' . __('Edit', 'wpmvc') . ' ' .$encoded_object_name.'">' . __('Edit', 'wpmvc') .'</a>';
        }
        
        if($options['actions']['view']){
            $links[] = '<a href="'.MvcRouter::public_url(array('object' => $object)).'" title="' . __('View', 'wpmvc') . ' ' .$encoded_object_name.'">' . __('View', 'wpmvc') .'</a>';
        }
        
        if($options['actions']['delete']){
            $links[] = '<a href="'.MvcRouter::admin_url(array('object' => $object, 'action' => 'delete')).'" title="' . __('Delete', 'wpmvc') . ' ' .$encoded_object_name.'" onclick="return confirm(&#039;' . __('Are you sure you want to delete', 'wpmvc') . ' ' .$encoded_object_name.'?&#039;);">' . __('Delete', 'wpmvc') .'</a>';
        }

        $html = implode(' | ', $links);
        return '<td>'.$html.'</td>';
    }
}

?>