<?php
/**
 * Create Custom Post Type and it's meta boxes for Job Alert Notifications
 *
 * @package	Job Hunt
 */

// Direct access not allowed.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'create_plugin_options' ) ) {
	/**
	 * Create Plugin Options
	 */
	function create_plugin_options($cs_setting_options) {
		$on_off_option = array('yes' => esc_html__("Yes", 'jobhunt-notifications'), 'no' => esc_html__("No", 'jobhunt-notifications'));

		$cs_setting_options[] = array(
			"name" => esc_html__('Job Alerts', 'jobhunt-notifications'),
			"fontawesome" => 'icon-bell-o',
			"id" => 'tab-job-alert-settings',
			"std" => "",
			"type" => "main-heading",
			"options" => ''
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Job Alerts", 'jobhunt-notifications'),
			"id" => "tab-job-alert-settings",
			"type" => "sub-heading"
		);
		$cs_setting_options[] = array(
			"name" => esc_html__('Set Alert Frequencies', 'jobhunt-notifications'),
			"id" => "tab-user-alert-frequency",
			"std" => esc_html__('Frequency', 'jobhunt-notifications'),
			"type" => "section",
			"options" => ""
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Annually", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("Do you want to allow user to set alert frequency to annually?", 'jobhunt-notifications'),
			"id" => "jobhunt_frequency_annually",
			"std" => "",
			"type" => "checkbox",
			"options" => $on_off_option
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Biannually", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("Do you want to allow user to set alert frequency to biannually?", 'jobhunt-notifications'),
			"id" => "jobhunt_frequency_biannually",
			"std" => "",
			"type" => "checkbox",
			"options" => $on_off_option
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Monthly", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("Do you want to allow user to set alert frequency to monthly?", 'jobhunt-notifications'),
			"id" => "jobhunt_frequency_monthly",
			"std" => "",
			"type" => "checkbox",
			"options" => $on_off_option
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Fortnightly", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("Do you want to allow user to set alert frequency to fortnight?", 'jobhunt-notifications'),
			"id" => "jobhunt_frequency_fortnightly",
			"std" => "",
			"type" => "checkbox",
			"options" => $on_off_option
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Weekly", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("Do you want to allow user to set alert frequency to weekly?", 'jobhunt-notifications'),
			"id" => "jobhunt_frequency_weekly",
			"std" => "",
			"type" => "checkbox",
			"options" => $on_off_option
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Daily", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("Do you want to allow user to set alert frequency to daily?", 'jobhunt-notifications'),
			"id" => "jobhunt_frequency_daily",
			"std" => "",
			"type" => "checkbox",
			"options" => $on_off_option
		);
		$cs_setting_options[] = array(
			"name" => esc_html__("Never", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("Do you want to allow user to set alert frequency to Never?", 'jobhunt-notifications'),
			"id" => "jobhunt_frequency_never",
			"std" => "",
			"type" => "checkbox",
			"options" => $on_off_option
		);
                
            $cs_setting_options[] = array(
			"name" => esc_html__("Terms & conditions text", 'jobhunt-notifications'),
			"desc" => "",
			"hint_text" => esc_html__("This will be used on front-end  job listing page to create a job alert.", 'jobhunt-notifications'),
			"id" => "jobhunt_terms_conditions",
			"std" => "",
			"cs_editor" => true,
			"type" => "textarea",
		);
                
		$cs_setting_options[] = array(
			"col_heading" => esc_html__("Job Alerts", 'jobhunt-notifications'),
			"type" => "col-right-text",
			"help_text" => ""
		);

		return $cs_setting_options;
	}
}
// Add Plugin Options
add_filter('cs_jobhunt_plugin_addons_options', 'create_plugin_options', 10, 1);


if ( ! function_exists( 'jobhunt_jobs_shortcode_admin_fields_callback' ) ) {
	/**
	 * Add Option to enable/disable 'Email me job like these' button 'Job Options Shortcode Element Settings'
	 */
	function jobhunt_jobs_shortcode_admin_fields_callback($attrs) {
		global $cs_html_fields;
		
		$cs_opt_array = array(
			'name' => esc_html__('Job Alert Shortcode', 'jobhunt'),
			'desc' => '',
			'hint_text' => esc_html__('Do you want to show "Email Me Jobs Like These" button on this jobs listing page to set job alerts.', 'jobhunt'),
			'echo' => true,
			'field_params' => array(
				'std' => $attrs['cs_job_alert_button'],
				'id' => 'job_alert_button',
				'cust_name' => 'cs_job_alert_button[]',
				'classes' => 'dropdown chosen-select',
				'options' => array(
					'enable' => esc_html__('Enable', 'jobhunt-notifications'),
					'disable' => esc_html__('Disable', 'jobhunt-notifications'),
				),
				'return' => true,
			),
		);

		$cs_html_fields->cs_select_field($cs_opt_array);

	}
}
// Add Option to enable/disable 'Email me job like these' button 'Job Options Shortcode Element Settings'
add_action('jobhunt_jobs_shortcode_admin_fields', 'jobhunt_jobs_shortcode_admin_fields_callback', 10, 1);


if ( ! function_exists( 'jobhunt_save_jobs_shortcode_admin_fields_callback' ) ) {
	/**
	 * Save Option to enable/disable 'Email me job like these' button 'Job Options Shortcode Element Settings'
	 */
	function jobhunt_save_jobs_shortcode_admin_fields_callback($shortcode, $data, $cs_counter_job) {
		
		if (isset($data['cs_job_alert_button'][$cs_counter_job]) && $data['cs_job_alert_button'][$cs_counter_job] != '') {
			$shortcode .= 'cs_job_alert_button="' . htmlspecialchars($data['cs_job_alert_button'][$cs_counter_job]) . '" ';
		}
		return $shortcode;
	}
}
// Add Plugin Options
add_filter('jobhunt_save_jobs_shortcode_admin_fields', 'jobhunt_save_jobs_shortcode_admin_fields_callback', 10, 3);


if ( ! function_exists( 'jobhunt_jobs_shortcode_admin_default_attributes_callback' ) ) {
	/**
	 * Set default Option to enable/disable 'Email me job like these' button 'Job Options Shortcode Element Settings'
	 */
	function jobhunt_jobs_shortcode_admin_default_attributes_callback($defaults) {
		$defaults['cs_job_alert_button'] = 'enable';
		return $defaults;
	}
}
// Register default variable on backend
add_filter('jobhunt_jobs_shortcode_admin_default_attributes', 'jobhunt_jobs_shortcode_admin_default_attributes_callback', 10, 1);
// Register default variable on frontend
add_filter('jobhunt_jobs_shortcode_frontend_default_attributes', 'jobhunt_jobs_shortcode_admin_default_attributes_callback', 10, 1);