<?php
// array (size=8)
// 'num2fa-post' => string '1' (length=1)
// 'num2fa-post-title' => string '1' (length=1)
// 'num2fa-post-meta' => string '1' (length=1)
// 'num2fa-navbar' => string '1' (length=1)
// 'num2fa-sidebar' => string '1' (length=1)
// 'num2fa-enable' => string '0' (length=1)
// 'num2fa-all' => string '0' (length=1)
// 'code-convert' => string '0' (length=1)
// Fars Date farsDateSetting
//var_dump(get_option('num2fa-comment'));exit();
function addJsFiles()
{
    global $farsDateSetting;

    if (1) {
        wp_enqueue_script('fd-date2jalali', FARS_DATE_URL . 'assets/pjs/fd-date2jalali.js', [], false, true);
        add_action("comment_post", function ($addr) {
            echo  "<script type='text/javascript' src='" . FARS_DATE_URL . "assets/pjs/fd-date2jalali.js'></script>";
        });
    }
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
        add_action("loop_start", function ($addr) {
            echo  "<script type='text/javascript' src='" . FARS_DATE_URL . "assets/pjs/num2fa-navbar.js'></script>";
        });
    }
    if (get_option('num2fa-sidebar') == '1') {
        wp_enqueue_script('num2fa-sidebar', FARS_DATE_URL . 'assets/pjs/num2fa-sidebar.js', [], false, true);
    }
}

if (get_option('num2fa-enable') == '1') {
    if (get_option('num2fa-all')) {
        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_script('num2fa-all', FARS_DATE_URL . 'assets/pjs/num2fa-all.js', [], false, true);
        });
    } else {
        add_action('wp_enqueue_scripts', 'addJsFiles');
    }
}
