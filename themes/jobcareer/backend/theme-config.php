<?php

/**
 * Defines configurations for Theme and Framework Plugin
 *
 * @since	1.0
 * @package	WordPress
 */
/*
 * THEME_ENVATO_ID contains theme unique id at envator
 */
if ( ! defined('THEME_ENVATO_ID') ) {
    define('THEME_ENVATO_ID', '14221636');
}

/*
 * THEME_NAME contains the name of the current theme
 */
if ( ! defined('THEME_NAME') ) {
    define('THEME_NAME', 'jobcareer');
}

/*
 * THEME_TEXT_DOMAIN contains the text domain name used for this theme
 */
if ( ! defined('THEME_TEXT_DOMAIN') ) {
    define('THEME_TEXT_DOMAIN', 'jobcareer');
}

/*
 * THEME_OPTIONS_PAGE_SLUG contains theme optinos main page slug
 */
if ( ! defined('THEME_OPTIONS_PAGE_SLUG') ) {
    define('THEME_OPTIONS_PAGE_SLUG', 'jobcareer_theme_options_constructor');
}

/*
 * CS_JOB_HUNT_STABLE_VERSION contains job hunt stable version compitble with this theme version
 */
if ( ! defined('CS_JOB_HUNT_STABLE_VERSION') ) {
    define('CS_JOB_HUNT_STABLE_VERSION', '2.0');
}

/*
 * CS_FRAMEWORK_STABLE_VERSION contains cs framework stable version compitble with this theme version
 */
if ( ! defined('CS_FRAMEWORK_STABLE_VERSION') ) {
    define('CS_FRAMEWORK_STABLE_VERSION', '1.8');
}

/*
 * CS_BASE contains the root server path of the framework that is loaded
 */
if ( ! defined('CS_BASE') ) {
    define('CS_BASE', get_template_directory() . '/');
}

/*
 * CS_HOME_BASE contains the root server path of the framework that is loaded
 */
if ( ! defined('CS_HOME_BASE') ) {
    define('CS_HOME_BASE', get_home_url());
}

/*
 * CS_BASE_URL contains the http url of the framework that is loaded
 */
if ( ! defined('CS_BASE_URL') ) {
    define('CS_BASE_URL', get_template_directory_uri() . '/');
}

/*
 * DEFAULT_DEMO_DATA_NAME contains the default demo data name used by CS importer
 */
if ( ! defined('DEFAULT_DEMO_DATA_NAME') ) {
    define('DEFAULT_DEMO_DATA_NAME', 'jobcareer');
}

/*
 * DEFAULT_DEMO_DATA_URL contains the default demo data url used by CS importer
 */
if ( ! defined('DEFAULT_DEMO_DATA_URL') ) {
    define('DEFAULT_DEMO_DATA_URL', 'http://jobcareer.chimpgroup.com/wp-content/uploads/');
}

/*
 * DEMO_DATA_HOME_URL contains the demo data url used by CS importer
 */
if ( ! defined('DEMO_DATA_HOME_URL') ) {
    define('DEMO_DATA_HOME_URL', 'http://jobcareer.chimpgroup.com/{{{demo_data_name}}}');
}

/*
 * DEMO_DATA_URL contains the demo data url used by CS importer
 */
if ( ! defined('DEMO_DATA_URL') ) {
    //define( 'DEMO_DATA_URL', 'http://jobcareer.chimpgroup.com/wp-content/uploads/{{{demo_data_name}}}' );
    define('DEMO_DATA_URL', 'http://jobcareer.chimpgroup.com/{{{demo_data_name}}}/wp-content/uploads/');
}

/*
 * REMOTE_API_URL contains the api url used for envator purchase key verification
 */
if ( ! defined('REMOTE_API_URL') ) {
    define('REMOTE_API_URL', 'http://chimpgroup.com/wp-demo/webservice/');
}

/*
 * ATTACHMENTS_REPLACE_URL contains the URL to be replaced in WP content XML attachments
 */
if ( ! defined('ATTACHMENTS_REPLACE_URL') ) {
    define('ATTACHMENTS_REPLACE_URL', 'http://jobcareer.chimpgroup.com/wp-content/uploads/');
}

/*
 * Theme Backup Directory Path
 */
if ( ! defined('AUTO_UPGRADE_BACKUP_DIR') ) {
    define('AUTO_UPGRADE_BACKUP_DIR', WP_CONTENT_DIR . '/' . THEME_NAME . '-backups/');
}

if ( ! function_exists('get_demo_data_structure') ) {

    /**
     * Return Demo datas available
     *
     * @return	array	details of demo datas available
     */
    function get_demo_data_structure() {
        $demo_data_structure = array(
            'jobcareer' => array(
                'slug' => 'jobcareer',
                'name' => esc_html__('Job Career', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/jobcareer.jpg',
            ),
            'nextjob' => array(
                'slug' => 'nextjob',
                'name' => esc_html__('Next Job', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/nextjob.jpg',
            ),
            'recruiter' => array(
                'slug' => 'recruiter',
                'name' => esc_html__('Recruiter', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/recruiter.png',
            ),
            'jobstack' => array(
                'slug' => 'jobstack',
                'name' => esc_html__('Job Stack', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/jobstack.png',
            ),
            'jobdoor' => array(
                'slug' => 'jobdoor',
                'name' => esc_html__('Job Door', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/jobdoor.jpg',
            ),
            'careerbakery' => array(
                'slug' => 'careerbakery',
                'name' => esc_html__('Career Bakery', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/careerbakery.jpg',
            ),
            'jobsecure' => array(
                'slug' => 'jobsecure',
                'name' => esc_html__('Job Secure', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/jobsecure.jpg',
            ),
            'frontdesk' => array(
                'slug' => 'frontdesk',
                'name' => esc_html__('Front Desk', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/frontdesk.jpg',
            ),
            'rtl' => array(
                'slug' => 'rtl',
                'name' => esc_html__('RTL Job Career', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/rtl.jpg',
            ),
            'jobstreet' => array(
                'slug' => 'jobstreet',
                'name' => esc_html__('Job Street', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/jobstreet.jpg',
            ),
            'careerbuilder' => array(
                'slug' => 'careerbuilder',
                'name' => esc_html__('Career Builder', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/careerbuilder.jpg',
            ),
            'hindi' => array(
                'slug' => 'hindi',
                'name' => esc_html__('Hindi', 'jobcareer'),
                'image_url' => 'http://chimpgroup.com/wp-demo/webservice/demo_images/jobcareer/hindi.jpg',
            ),
        );
        return $demo_data_structure;
    }

}

if ( ! function_exists('get_server_requirements') ) {

    /**
     * Return server requirements for importer
     *
     * @return	array	server resources requirements for importer
     */
    function get_server_requirements() {
        $post_max_size = ini_get('post_max_size');
        $upload_max_filesize = ini_get('upload_max_filesize');
        $memory_limit = ini_get('memory_limit');
        $recommended_post_max_size = 256;
        $recommended_php_version = '5.5.0';
        $recommended_post_max_size_unit = 'M';
        $recommended_upload_max_filesize = 256;
        $recommended_upload_max_filesize_unit = 'M';
        $recommended_memory_limit = 256;
        $recommended_memory_limit_unit = 'M';
        $paths = wp_upload_dir();
        $upload_permission = substr(sprintf('%o', fileperms($paths['path'])), -4);
        $recommended_upload_permission = '0755';

        $server_requirements = array(
            array(
                'title' => esc_html__('Minimum PHP Version', 'jobcareer') . ' = ' . $recommended_php_version . ' ( ' . esc_html__('Available', 'jobcareer') . ' ' . phpversion() . ' )',
                'description' => esc_html__('To run this theme properly, mentioned minium PHP version is required.', 'jobcareer'),
                'version' => '',
                'is_met' => ( version_compare(phpversion(), $recommended_php_version, '>') ),
            ),
            array(
                'title' => 'POST_MAX_SIZE = ' . $recommended_post_max_size . $recommended_post_max_size_unit . ' ( ' . esc_html__('Available', 'jobcareer') . ' ' . $post_max_size . ' )',
                'description' => esc_html__('Sets max size of post data allowed. This setting also affects file upload.', 'jobcareer'),
                'version' => '',
                'is_met' => ( $recommended_post_max_size <= $post_max_size ),
            ),
            array(
                'title' => 'UPLOAD_MAX_FILESIZE = ' . $recommended_upload_max_filesize . $recommended_upload_max_filesize_unit . ' ( ' . esc_html__('Available', 'jobcareer') . ' ' . $upload_max_filesize . ' )',
                'description' => esc_html__('The maximum size of a file that can be uploaded.', 'jobcareer'),
                'version' => '',
                'is_met' => ( $recommended_upload_max_filesize <= $upload_max_filesize ),
            ),
            array(
                'title' => 'MEMORY_LIMIT = ' . $recommended_memory_limit . $recommended_memory_limit_unit . ' ( ' . esc_html__('Available', 'jobcareer') . ' ' . $memory_limit . ' )',
                'description' => esc_html__('This sets the maximum amount of memory in bytes that a script is allowed to allocate.', 'jobcareer'),
                'version' => '',
                'is_met' => ( $recommended_memory_limit <= $memory_limit ),
            ),
            array(
                'title' => 'ALLOW_URL_FOPEN ' . esc_html__('should be enabled in', 'jobcareer') . ' php.ini',
                'description' => esc_html__('To download import data this option is required.', 'jobcareer'),
                'version' => '',
                'is_met' => ini_get('allow_url_fopen'),
            ),
            array(
                'title' => 'cURL Support ' . esc_html__('should be enabled in', 'jobcareer') . ' php.ini',
                'description' => esc_html__('To download import data this option is required.', 'jobcareer'),
                'version' => '',
                'is_met' => extension_loaded('curl'),
            ),
            array(
                'title' => 'Zip ' . esc_html__('should be enabled in', 'jobcareer') . ' php.ini',
                'description' => esc_html__('To download import data this option is required.', 'jobcareer'),
                'version' => '',
                'is_met' => extension_loaded('zip'),
            ),
            array(
                'title' => 'Json Support ' . esc_html__('should be enabled in', 'jobcareer') . ' php.ini',
                'description' => esc_html__('To download import data this option is required.', 'jobcareer'),
                'version' => '',
                'is_met' => extension_loaded('json'),
            ),
            array(
                'title' => 'XML Support ' . esc_html__('should be enabled in', 'jobcareer') . ' php.ini',
                'description' => esc_html__('To download import data this option is required.', 'jobcareer'),
                'version' => '',
                'is_met' => extension_loaded('xml'),
            ),
            array(
                'title' => 'UPLOADS_PERMISSIONS = ' . $recommended_upload_permission . ' ( ' . esc_html__('Available', 'jobcareer') . ' ' . $upload_permission . ' )',
                'description' => esc_html__('To download import attachments this option is required.', 'jobcareer'),
                'version' => '',
                'is_met' => ( $recommended_upload_permission <= $upload_permission ),
            ),
        );
        return $server_requirements;
    }

}

if ( ! function_exists('get_plugin_requirements') ) {

    /**
     * Return plugin requirements for importer
     *
     * @return	array	plugin requirements for importer
     */
    function get_plugin_requirements() {
        // Default compatible plugin versions.
        $compatible_plugin_versions = array(
            'cs_framework' => CS_FRAMEWORK_STABLE_VERSION,
            'job_hunt' => CS_JOB_HUNT_STABLE_VERSION,
        );
        // Check if there is a need to prompt user to install theme.
        $is_cs_framework = class_exists('cs_framework');
        $have_new_version_cs_framework = false;
        if ( $is_cs_framework ) {
            $current_version_cs_framework = cs_framework::get_plugin_version();
            $new_version_cs_framework = $compatible_plugin_versions['cs_framework'];
            if ( version_compare($current_version_cs_framework, $new_version_cs_framework) < 0 ) {
                $is_cs_framework = false;
                $have_new_version_cs_framework = true;
            }
        }
        // Check if there is a need to prompt user to install theme.
        $is_wp_jobhunt = class_exists('wp_jobhunt');
        $have_new_version_wp_jobhunt = false;
        if ( $is_wp_jobhunt ) {
            $current_version_wp_jobhunt = wp_jobhunt::get_plugin_version();
            $new_version_wp_jobhunt = $compatible_plugin_versions['job_hunt'];
            if ( version_compare($current_version_wp_jobhunt, $new_version_wp_jobhunt) < 0 ) {
                $is_wp_jobhunt = false;
                $have_new_version_wp_jobhunt = true;
            }
        }
        // Check if there is a need to prompt user to install theme.
        $is_rev_slider = class_exists('RevSlider');
        $have_new_version_rev_slider = false;
        if ( $is_rev_slider ) {
            $current_version_rev_slider = RevSliderGlobals::SLIDER_REVISION;
            $new_version_rev_slider = get_option('revslider-latest-version', RevSliderGlobals::SLIDER_REVISION);
            if ( empty($new_version_rev_slider) ) {
                $new_version_rev_slider = '5.2.5';
            }

            if ( version_compare($current_version_rev_slider, $new_version_rev_slider) < 0 ) {
                $is_rev_slider = false;
                $have_new_version_rev_slider = true;
            }
        }
        $plugin_requirements = array(
            'cs_framework' => array(
                'title' => esc_html__('CS Framework', 'jobcareer'),
                'description' => esc_html__('This plugin is required as this handles the core functionality of the theme.', 'jobcareer'),
                'version' => $current_version_cs_framework,
                'new_version' => ( true == $have_new_version_cs_framework ) ? $new_version_cs_framework : '',
                'is_installed' => $is_cs_framework,
            ),
            'job_hunt' => array(
                'title' => esc_html__('Job Hunt', 'jobcareer'),
                'description' => esc_html__('This plugin is required as this handles all functionality related to jobs, candidates, etc.', 'jobcareer'),
                'version' => $current_version_wp_jobhunt,
                'new_version' => ( true == $have_new_version_wp_jobhunt ) ? $new_version_wp_jobhunt : '',
                'is_installed' => $is_wp_jobhunt,
            ),
            'rev_slider' => array(
                'title' => esc_html__('Revolution Slider', 'jobcareer'),
                'description' => esc_html__('This plugin is required to import Revolution sliders from demo data.', 'jobcareer'),
                'version' => $current_version_rev_slider,
                'new_version' => ( true == $have_new_version_rev_slider ) ? $new_version_rev_slider : '',
                'is_installed' => $is_rev_slider,
            ),
        );
        return $plugin_requirements;
    }

}

if ( ! function_exists('get_mandaory_plugins') ) {

    /**
     * Give a list of the plugins pluings need to be updated (used Auto Theme Upgrader)
     *
     * @return	array	a list of plugins which will be updated on Auto Theme update
     */
    function get_plugins_to_be_updated() {
        return array(
            array(
                'name' => esc_html__('WP jobhunt', 'jobcareer'),
                'slug' => 'wp-jobhunt',
                'source' => trailingslashit(get_template_directory_uri()) . 'backend/theme-components/cs-activation-plugins/wp-jobhunt.zip',
                'required' => true,
                'version' => '',
                'force_activation' => true,
                'force_deactivation' => true,
                'external_url' => '',
            ),
            array(
                'name' => esc_html__('CS Framework', 'jobcareer'),
                'slug' => 'cs-framework',
                'source' => trailingslashit(get_template_directory_uri()) . 'backend/theme-components/cs-activation-plugins/cs-framework.zip',
                'required' => true,
                'version' => '',
                'force_activation' => true,
                'force_deactivation' => true,
                'external_url' => '',
            ),
            array(
                'name' => esc_html__('JobHunt Application Deadline', 'jobcareer'),
                'slug' => 'jobhunt-application-deadline',
                'source' => trailingslashit(get_template_directory_uri()) . 'backend/theme-components/cs-activation-plugins/jobhunt-application-deadline.zip',
                'required' => true,
                'version' => '',
                'force_activation' => true,
                'force_deactivation' => true,
                'external_url' => '',
            ),
            array(
                'name' => esc_html__('JobHunt Email Template', 'jobcareer'),
                'slug' => 'jobhunt-email-templates',
                'source' => trailingslashit(get_template_directory_uri()) . 'backend/theme-components/cs-activation-plugins/jobhunt-email-templates.zip',
                'required' => true,
                'version' => '',
                'force_activation' => true,
                'force_deactivation' => true,
                'external_url' => '',
            ),
            array(
                'name' => esc_html__('JobHunt Indeed Jobs', 'jobcareer'),
                'slug' => 'jobhunt-indeed-jobs',
                'source' => trailingslashit(get_template_directory_uri()) . 'backend/theme-components/cs-activation-plugins/jobhunt-indeed-jobs.zip',
                'required' => true,
                'version' => '',
                'force_activation' => true,
                'force_deactivation' => true,
                'external_url' => '',
            ),
            array(
                'name' => esc_html__('JobHunt Notifications', 'jobcareer'),
                'slug' => 'jobhunt-notifications',
                'source' => trailingslashit(get_template_directory_uri()) . 'backend/theme-components/cs-activation-plugins/jobhunt-notifications.zip',
                'required' => true,
                'version' => '',
                'force_activation' => true,
                'force_deactivation' => true,
                'external_url' => '',
            ),
            array(
                'name' => esc_html__('JobHunt Apply With Facebook', 'jobcareer'),
                'slug' => 'jobhunt-apply-with-facebook',
                'source' => trailingslashit(get_template_directory_uri()) . 'backend/theme-components/cs-activation-plugins/jobhunt-apply-with-facebook.zip',
                'required' => true,
                'version' => '',
                'force_activation' => true,
                'force_deactivation' => true,
                'external_url' => '',
            ),
        );
    }

}