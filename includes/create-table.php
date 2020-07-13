<?php

function farsDateCreateTable()
{
    global $wpdb;

    $tableName = $wpdb->prefix . 'fars_date';
    if ($wpdb->get_var("show tables like '$tableName'") != $tableName) {
        $sql = "CREATE TABLE " . $tableName . " (
id INT(11) NOT NULL AUTO_INCREMENT,
name VARCHAR(25) NOT NULL,
value VARCHAR(32) NOT NULL,
 UNIQUE KEY id (id) )DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);


        $wpdb->query("INSERT INTO `$tableName` (`id`, `name`, `value`) VALUES (NULL, 'num2fa-post', '1'), (NULL, 'num2fa-post-title', '1'), (NULL, 'num2fa-post-meta', '0'), (NULL, 'num2fa-navbar', '1'), (NULL, 'num2fa-sidebar', '1'), (NULL, 'num2fa-enable', '0'), (NULL, 'num2fa-all', '0'), (NULL, 'code-convert', '0')");
    }
}
//INSERT INTO `wp_fars_date` (`id`, `name`, `value`) VALUES (NULL, 'num2fa-post', ''), (NULL, 'num2fa-post-title', ''), (NULL, 'num2fa-post-meta', ''), (NULL, 'num2fa-navbar', ''), (NULL, 'num2fa-sidebar', '')
