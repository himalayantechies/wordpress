<?php
/*
Plugin Name: HT Support
Plugin URI: 
Description: A plugin developed for the effective communication between the company and its clients.
Author: sthasuman
Version: 1.0 
Author URI: 
*/

register_activation_hook(__FILE__, 'ht_company_support_activate');
register_deactivation_hook(__FILE__, 'ht_company_support_deactivate');

function ht_company_support_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/ht_company_support_loader.php';
    $loader = new HtCompanySupportLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function ht_company_support_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/ht_company_support_loader.php';
    $loader = new HtCompanySupportLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}

?>