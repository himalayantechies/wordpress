<?php
  MvcConfiguration::set(array(
    'Debug' => false,
    ));

  MvcConfiguration::append(array(
    'AdminPages' => array(
      'support_compuser_groups' => array(
        'hide_menu' => true,
        'order' => 3
        ),
      'support_messages' => array(
        'add' => array(
          'in_menu' => false
            ),
        'edit' => array(
          'in_menu' => false
            ),
        'delete' => array(
          'in_menu' => false
            ),
        'save_chat' => array(
          'in_menu' => false
            ),
        'get_chat' => array(
          'in_menu' => false
            ),
        'hide_menu' => true,
        'order' => 4
        ),
      'support_groups' => array(
        'add' => array(
          'in_menu' => false
            ),
        'edit' => array(
          'in_menu' => false
            ),
        'delete' => array(
          'in_menu' => false
            ),
        'get_company_user' => array(
          'in_menu' => false
            ),
        'chat' => array(
          'in_menu' => false
            ),
        'icon' => 'dashicons-businessman',
        'label' => 'HT Support'
        ),
      'support_companies' => array(
        'add' => array(
          'in_menu' => false
            ),
        'edit' => array(
          'in_menu' => false
            ),
        'delete' => array(
          'in_menu' => false
            ),
        'label' => 'Company',
        'parent_slug' => 'mvc_support_groups',
        'order' => 0
        ),
      'support_compusers' => array(
        'add' => array(
          'in_menu' => false
            ),
        'edit' => array(
          'in_menu' => false
            ),
        'delete' => array(
          'in_menu' => false
            ),
        'label' => 'Users',
        'parent_slug' => 'mvc_support_groups',
        'order' => 1
        ),
      'support_tasks' => array(
        'add' => array(
          'in_menu' => false
            ),
        'edit' => array(
          'in_menu' => false
            ),
        'delete' => array(
          'in_menu' => false
            ),
        'view' => array(
          'in_menu' => false
            ),
        'add_media' => array(
          'in_menu' => false
            ),
        'ibenic_file_upload' => array(
          'in_menu' => false
            ),
        'label' => 'Tasks',
        'parent_slug' => 'mvc_support_groups',
        'order' => 2
        )
    )
  ));

add_action( 'admin_enqueue_scripts', 'htsupportadmincss_enqueue_scripts' );
function htsupportadmincss_enqueue_scripts($options) {
    wp_register_style('htsupportadmin_style', mvc_css_url('ht-company-support', 'bootstrap.css'));
    wp_enqueue_style('htsupportadmin_style');
  }

add_action( 'admin_enqueue_scripts', 'htsupportadmincss_scripts' );
function htsupportadmincss_scripts($options) {
    wp_register_style('htadmin_style', mvc_css_url('ht-company-support', 'admin.css'));
    wp_enqueue_style('htadmin_style');
  }

add_action( 'admin_enqueue_scripts', 'htsupportadminjs_enqueue_scripts' );
function htsupportadminjs_enqueue_scripts($options) {
    wp_register_script('htsupportadmin_js', mvc_js_url('ht-company-support', 'bootstrap.js'));
    wp_enqueue_script('htsupportadmin_js');
  }

add_action( 'admin_enqueue_scripts', 'htjs_enqueue_scripts' );
function htjs_enqueue_scripts() {
    wp_register_script('ht-company-support', plugins_url('ht-company-support/app/public/js/jquery.min.js'));
    wp_enqueue_script('ht-company-support');
  }

add_action( 'admin_enqueue_scripts', 'htstyle_enqueue_css' );
function htstyle_enqueue_css() {
    wp_register_style('ht-company-support', plugins_url('ht-company-support/app/public/css/admin.css'));
    wp_enqueue_style('ht-company-support');
  }

?>