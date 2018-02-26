<?php

/**
 * Plugin Name: JobHunt Apply With Facebook
 * Plugin URI: http://themeforest.net/user/Chimpstudio/
 * Description: Job Hunt Apply With Facebook Add on
 * Version: 1.6
 * Author: ChimpStudio
 * Author URI: http://themeforest.net/user/Chimpstudio/
 * @package Job Hunt
 * Text Domain: jobhunt-facebook-apply
 */
// Direct access not allowed.
if ( ! defined('ABSPATH') ) {
    exit;
}

/**
 * Job_Hunt_Application_Deadline class.
 */
class Job_Hunt_Apply_With_Facebook {

    public $admin_notices;

    /**
     * construct function.
     */
    public function __construct() {

        // Define constants
        define('JOBHUNT_FACEBOOK_APPLY_PLUGIN_VERSION', '1.6');
        define('JOBHUNT_FACEBOOK_APPLY_PLUGIN_DOMAIN', 'jobhunt-facebook-apply');
        define('JOBHUNT_FACEBOOK_APPLY_PLUGIN_URL', WP_PLUGIN_URL . '/jobhunt-apply-with-facebook');
        define('JOBHUNT_FACEBOOK_APPLY_CORE_DIR', WP_PLUGIN_DIR . '/jobhunt-apply-with-facebook');
        define('JOBHUNT_FACEBOOK_APPLY_LANGUAGES_DIR', JOBHUNT_FACEBOOK_APPLY_CORE_DIR . '/languages');

        $this->admin_notices = array();

        // Notices for Admin
        add_action('admin_notices', array( $this, 'job_facebook_apply_notices_callback' ));

        // Initialize Addon
        add_action('init', array( $this, 'init' ));

        // Filters
        add_filter('cs_jobhunt_plugin_addons_options', array( $this, 'create_plugin_options' ), 11, 1);

        // Apply with facebook button
        add_action('apply_with_facebook_button', array( $this, 'apply_with_facebook_button_callback' ), 10, 1);
    }

    /**
     *  Load text domain and enqueue Script
     */
    public function init() {
        global $cs_plugin_options;

        // Add Plugin textdomain
        $locale = apply_filters('plugin_locale', get_locale(), 'jobhunt-facebook-apply');
        load_textdomain('jobhunt-facebook-apply', JOBHUNT_FACEBOOK_APPLY_LANGUAGES_DIR . '/jobhunt-facebook-apply' . "-" . $locale . '.mo');
        load_plugin_textdomain('jobhunt-facebook-apply', false, JOBHUNT_FACEBOOK_APPLY_LANGUAGES_DIR);

        // Check if facebook settings are added into plugin options
        if ( isset($cs_plugin_options['cs_apply_with_facebook']) && $cs_plugin_options['cs_apply_with_facebook'] == 'on' ) {
            if ( ! isset($cs_plugin_options['cs_facebook_app_id']) || $cs_plugin_options['cs_facebook_app_id'] == '' ) {
                $this->admin_notices = array( '<div class="error">' . __('<em><b>Job Hunt Apply With Facebook</b></em> needs the <b>Application ID</b> & <b>Secret Key</b>. Please provide in Jobhunt plugin settings->API Settings.', 'jobhunt-facebook-apply') . '</div>' );
            }
        }

        // Enqueue JS
        wp_enqueue_script('jobhunt-facebook-apply' . '-script', JOBHUNT_FACEBOOK_APPLY_PLUGIN_URL . '/assets/js/apply-fb-style.js', array( 'jquery' ));
    }

    public function job_facebook_apply_notices_callback() {
        foreach ( $this->admin_notices as $value ) {
            echo $value;
        }
    }

    /**
     * Draw Apply With Facebook Button.
     *
     * @param job_id is the job which user want to apply.
     */
    public function apply_with_facebook_button_callback($job_id) {
        global $cs_plugin_options;
        if ( isset($cs_plugin_options['cs_apply_with_facebook']) && $cs_plugin_options['cs_apply_with_facebook'] == 'on' ) {
            echo '<a class="btn large facebook social_login_login_facebook_apply" href="#" data-applyjobid="' . $job_id . '">
                    <div data-applyjobid="' . $job_id . '" class="facebook_jobid_apply"></div><i class="icon-facebook"></i>' . esc_html__("Apply with Facebook", 'jobhunt-facebook-apply') . '</a>';
        }
    }

    /**
     * Create plugin options
     */
    public function create_plugin_options($cs_setting_options) {

        $on_off_option = array( 'yes' => esc_html__("Yes", 'jobhunt-facebook-apply'), 'no' => esc_html__("No", 'jobhunt-facebook-apply') );

        $cs_setting_options[] = array(
            "name" => esc_html__('Apply With Facebook', 'jobhunt-facebook-apply'),
            "fontawesome" => 'icon-facebook',
            "id" => 'tab-apply-with-facebook-settings',
            "std" => "",
            "type" => "main-heading",
            "options" => ''
        );

        $cs_setting_options[] = array(
            "name" => esc_html__("Apply With Facebook", 'jobhunt-facebook-apply'),
            "id" => "tab-apply-with-facebook-settings",
            "type" => "sub-heading"
        );

        $cs_setting_options[] = array(
            "name" => esc_html__("Apply With Facebook", 'jobhunt-facebook-apply'),
            "desc" => "",
            "hint_text" => esc_html__("If this switch is set ON User can apply using facebook. If it will be OFF, User will not be able to apply using facebook.", 'jobhunt-facebook-apply'),
            "id" => "apply_with_facebook",
            "std" => "",
            "type" => "checkbox",
            "options" => $on_off_option
        );

        $cs_setting_options[] = array(
            "col_heading" => esc_html__("Apply With Facebook", 'jobhunt-facebook-apply'),
            "type" => "col-right-text",
            "help_text" => ""
        );

        return $cs_setting_options;
    }

}

new Job_Hunt_Apply_With_Facebook();
