<?php

class HtCompanySupportLoader extends MvcPluginLoader {

    var $db_version = '1.0';
    var $tables = array();

    function activate() {
    
        // This call needs to be made to activate this app within WP MVC
        
        $this->activate_app(__FILE__);
        
        // Perform any databases modifications related to plugin activation here, if necessary

        require_once ABSPATH.'wp-admin/includes/upgrade.php';
    
        add_option('ht_company_support_db_version', $this->db_version);
        
        global $wpdb;

        $table_1 = $wpdb->prefix . 'support_companies';
        $table_2 = $wpdb->prefix . 'support_compusers';
        $table_3 = $wpdb->prefix . 'support_groups';
        $table_4 = $wpdb->prefix . 'support_compuser_groups';
        $table_5 = $wpdb->prefix . 'support_tasks';
        $table_6 = $wpdb->prefix . 'support_messages';
        $table_7 = $wpdb->prefix . 'support_task_posts';
    
        $sql1 = "CREATE TABLE IF NOT EXISTS ".$table_1." (
        id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
        name varchar(50) NOT NULL,
        address varchar(50) DEFAULT NULL,
        contact varchar(50) DEFAULT NULL,
        email varchar(50) DEFAULT NULL,
        website varchar(50) DEFAULT NULL,
        PRIMARY KEY  (id)
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

        $sql2 = "CREATE TABLE IF NOT EXISTS ".$table_2." (
        id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
        company_id mediumint(9) unsigned NOT NULL,
        name varchar(50) NOT NULL,
        email varchar(50) DEFAULT NULL,
        passkey varchar(50) DEFAULT NULL,
        token varchar(50) DEFAULT NULL,
        contact varchar(50) DEFAULT NULL,
        designation varchar(50) DEFAULT NULL,
        PRIMARY KEY  (id),
        KEY company_id (company_id),
        CONSTRAINT $table_2 FOREIGN KEY  (company_id) REFERENCES $table_1 (id) ON DELETE CASCADE ON UPDATE CASCADE
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

        $sql3 = "CREATE TABLE IF NOT EXISTS ".$table_3." (
        id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
        company_id mediumint(9) unsigned NOT NULL,
        title varchar(50) NOT NULL,
        ht_handler varchar(50) DEFAULT NULL,
        group_owner varchar(50) DEFAULT NULL,
        PRIMARY KEY  (id),
        KEY company_id (company_id),
        CONSTRAINT $table_3"._fk." FOREIGN KEY  (company_id) REFERENCES $table_1 (id) ON DELETE CASCADE ON UPDATE CASCADE
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

        $sql4 = "CREATE TABLE IF NOT EXISTS ".$table_4." (
        id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
        compuser_id mediumint(9) unsigned NOT NULL,
        group_id mediumint(9) unsigned NOT NULL,
        PRIMARY KEY  (id),
        KEY compuser_id (compuser_id),
        KEY group_id (group_id),
        CONSTRAINT $table_4 FOREIGN KEY  (compuser_id) REFERENCES $table_2 (id) ON DELETE CASCADE ON UPDATE CASCADE,
        CONSTRAINT $table_4"._fk." FOREIGN KEY  (group_id) REFERENCES $table_3 (id) ON DELETE CASCADE ON UPDATE CASCADE
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

        $sql5 = "CREATE TABLE IF NOT EXISTS ".$table_5." (
        id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
        company_id mediumint(9) unsigned NOT NULL,
        title varchar(50) DEFAULT NULL,
        description text DEFAULT NULL,
        created_by varchar(50) DEFAULT NULL,
        task_deadline date DEFAULT NULL,
        PRIMARY KEY  (id),
        KEY company_id (company_id),
        CONSTRAINT $table_5"._fk." FOREIGN KEY  (company_id) REFERENCES $table_1 (id) ON DELETE CASCADE ON UPDATE CASCADE
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

        $sql6 = "CREATE TABLE IF NOT EXISTS ".$table_6." (
        id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
        group_id mediumint(9) unsigned NOT NULL,
        message varchar(50) DEFAULT NULL,
        sender varchar(50) DEFAULT NULL,
        timestamp datetime DEFAULT NULL,
        type varchar(50) DEFAULT NULL,
        PRIMARY KEY  (id),
        KEY group_id (group_id),
        CONSTRAINT $table_6 FOREIGN KEY  (group_id) REFERENCES $table_3 (id) ON DELETE CASCADE ON UPDATE CASCADE
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

        $sql7 = "CREATE TABLE IF NOT EXISTS ".$table_7." (
        id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
        task_id mediumint(9) unsigned NOT NULL,
        media_id mediumint(9) unsigned NOT NULL,
        PRIMARY KEY  (id),
        KEY task_id (task_id),
        CONSTRAINT $table_7 FOREIGN KEY  (task_id) REFERENCES $table_5 (id) ON DELETE CASCADE ON UPDATE CASCADE
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
         
        dbDelta( $sql1 );
        dbDelta( $sql2 );
        dbDelta( $sql3 );
        dbDelta( $sql4 );
        dbDelta( $sql5 );
        dbDelta( $sql6 );
        dbDelta( $sql7 );
        
        // Use dbDelta() to create the tables for the app here
        // $sql = '';
        // dbDelta($sql);
        
    }

    function deactivate() {
    
        // This call needs to be made to deactivate this app within WP MVC
        
        $this->deactivate_app(__FILE__);
        global $wpdb;
        $table_1 = $wpdb->prefix . 'support_companies';
        $table_2 = $wpdb->prefix . 'support_compusers';
        $table_3 = $wpdb->prefix . 'support_groups';
        $table_4 = $wpdb->prefix . 'support_compuser_groups';
        $table_5 = $wpdb->prefix . 'support_tasks';
        $table_6 = $wpdb->prefix . 'support_messages';
        $table_7 = $wpdb->prefix . 'support_task_posts';

        $sql1 = "DROP TABLE IF EXISTS ".$table_1."";
        $sql2 = "DROP TABLE IF EXISTS ".$table_2."";
        $sql3 = "DROP TABLE IF EXISTS ".$table_3."";
        $sql4 = "DROP TABLE IF EXISTS ".$table_4."";
        $sql5 = "DROP TABLE IF EXISTS ".$table_5."";
        $sql6 = "DROP TABLE IF EXISTS ".$table_6."";
        $sql7 = "DROP TABLE IF EXISTS ".$table_7."";

        $wpdb->query($sql7);
        $wpdb->query($sql6);
        $wpdb->query($sql5);
        $wpdb->query($sql4);
        $wpdb->query($sql3);
        $wpdb->query($sql2);
        $wpdb->query($sql1);
        // Perform any databases modifications related to plugin deactivation here, if necessary  
    }
}

?>