<?php

/**
 * Classic Editor
 *
 * Plugin Name: Fars Date
 * Plugin URI:  http://Karket.ir/fars-date
 * Description: Adds Suppport for Jalali (Shamsi) date and Persian numbers to posts, comments, pages, archives, search, categories, permalinks; to have better experience with Persian sites 
 * Version:     1.0
 * Author:      Mohammad Salehi Koleti
 * Author URI:  http://Karket.ir
 * License:     GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: fars-date
 *
 * Fars Date is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY.
 */
if (!defined('ABSPATH')) exit('No direct access allowed');
$farsDateSetting;
/**
 * Registers a setting.
 */
function wpdocs_register_my_setting() {
    register_setting( 'my_options_group', 'my_option_name', 'intval' ); 
} 
add_action( 'admin_init', 'wpdocs_register_my_setting' );
class FarsDate
{
    public function __construct()
    {
        global $farsDateSetting;
        global $wpdb;
        $tableName = $wpdb->prefix . 'fars_date';
        $settingHolder = $wpdb->get_results("SELECT `name`,`value` FROM $tableName", ARRAY_A);
    
        foreach ($settingHolder as $value) {
            $farsDateSetting[$value['name']] = $value['value'];
        }
        $this->define_const();
        $this->active();
        require_once('admin/setting.php');
        require_once('includes/loader.php');

    }
    private function active()
    {
        require_once('includes/create-table.php');
        register_activation_hook((__FILE__),'farsDateCreateTable');
    }
    private function define_const()
    {
        if (!defined('FARS_DATE_ROOT')) {
            define('FARS_DATE_ROOT', __FILE__);
        }

        if (!defined('FARS_DATE_DIR')) {
            define('FARS_DATE_DIR', plugin_dir_path(FARS_DATE_ROOT));
        }

        if (!defined('FARS_DATE_URL')) {
            define('FARS_DATE_URL', plugin_dir_url(FARS_DATE_ROOT));
        }

        if (!defined('FARS_DATE_SETTING')) {
            define('FARS_DATE_SETTING', '1.0');
        }
    }
}

return new FarsDate;
