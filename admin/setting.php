<?php

function showAdminSidebar()
{

    add_submenu_page(
        'options-general.php',
        __('Fars Date Settings', 'fars-date'),
        __('Fars Date Settings', 'fars-date'),
        'manage_options',
        'fars-date-setting',
        'showSetting'
    );
}

function showSetting()
{

    require_once("form-setting.php");
}
add_action('admin_menu', 'showAdminSidebar');
