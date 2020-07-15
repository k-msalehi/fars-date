<?php

function fd_date_convert()
{
    if(get_option('fd-date-post') =='1'){
        wp_enqueue_script('fd-date2jalali-post', FARS_DATE_URL . 'assets/pjs/fd-date2jalali-post.js', [], false, true);
    }
    if(get_option('fd-date-comment') =='1'){
        wp_enqueue_script('fd-date2jalali-comment', FARS_DATE_URL . 'assets/pjs/fd-date2jalali-comment.js', [], false, true);
    }
}

function addNum2faJs()
{
    global $farsDateSetting;

    if (get_option('num2fa-post') == '1') {
        if (get_option('num2fa-code-convert') == '1') {
            wp_enqueue_script('num2fa-post', FARS_DATE_URL . 'assets/pjs/num2fa-post.js', [], false, true);
        } else {
            wp_enqueue_script('num2fa-post', FARS_DATE_URL . 'assets/pjs/num2fa-post-code.js', [], false, true);
        }
    }

    if (get_option('num2fa-post-meta') == '1') {
        wp_enqueue_script('num2fa-post-meta', FARS_DATE_URL . 'assets/pjs/num2fa-post-meta.js', [], false, true);
    }
    if (get_option('num2fa-post-title') == '1') {
        wp_enqueue_script('num2fa-post-title', FARS_DATE_URL . 'assets/pjs/num2fa-post-title.js', [], false, true);
    }
    if (get_option('num2fa-comment') == '1') {
        wp_enqueue_script('num2fa-comment', FARS_DATE_URL . 'assets/pjs/num2fa-comment.js', [], false, true);
    }
    if (get_option('num2fa-navbar') == '1') {
        // wp_enqueue_script('num2fa-navbar', FARS_DATE_URL . 'assets/pjs/num2fa-navbar.js', [], false,true);
        add_action("loop_start", function () {
            echo  "<script type='text/javascript' src='" . FARS_DATE_URL . "assets/pjs/num2fa-navbar.js'></script>";
        });
    }
    if (get_option('num2fa-sidebar') == '1') {
        wp_enqueue_script('num2fa-sidebar', FARS_DATE_URL . 'assets/pjs/num2fa-sidebar.js', [], false, true);
    }
}

if (get_option('fd-date-enable') == '1') {
    add_action('wp_enqueue_scripts', 'fd_date_convert');
}
if (get_option('num2fa-enable') == '1') {
    if (get_option('num2fa-all')) {
        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_script('num2fa-all', FARS_DATE_URL . 'assets/pjs/num2fa-all.js', [], false, true);
        });
    } else {
        add_action('wp_enqueue_scripts', 'addNum2faJs');
    }
}
