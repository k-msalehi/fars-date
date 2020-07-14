<?php

function showAdminSidebar()
{

    add_submenu_page(
        'options-general.php',
        __('Fars Date Setting', 'fars-date'),
        __('Fars Date Setting', 'fars-date'),
        'manage_options',
        'fars-date-setting',
        'showSetting'
    );
}

function showSetting()
{

    require_once("form-setting.php");
}
/*
num2fa-enable
num2fa-post
num2fa-post-title
num2fa-post-meta
num2fa-navbar
num2fa-sidebar
num2fa-all
code-convert
*/
function register_fars_date_setting() {
    register_setting('fars-date-setting', 'num2fa-enable',['default'=>'0'] ); 
    register_setting('fars-date-setting', 'num2fa-post',['default'=>'1'] ); 
    register_setting('fars-date-setting', 'num2fa-post-title',['default'=>'1'] ); 
    register_setting('fars-date-setting', 'num2fa-post-meta',['default'=>'1'] ); 
    register_setting('fars-date-setting', 'num2fa-navbar',['default'=>'1'] ); 
    register_setting('fars-date-setting', 'num2fa-sidebar',['default'=>'1'] ); 
    register_setting('fars-date-setting', 'num2fa-all',['default'=>'1'] ); 
    register_setting('fars-date-setting', 'num2fa-code-convert',['default'=>'0'] ); 
    register_setting('fars-date-setting', 'num2fa-comment',['default'=>'1'] ); 

} 
add_action( 'admin_init', 'register_fars_date_setting' );

add_action('admin_menu', 'showAdminSidebar');
