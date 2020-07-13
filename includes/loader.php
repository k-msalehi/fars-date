<?php
// array (size=8)
// 'num2fa-post' => string '1' (length=1)
// 'num2fa-post-title' => string '1' (length=1)
// 'num2fa-post-meta' => string '1' (length=1)
// 'num2fa-navbar' => string '1' (length=1)
// 'num2fa-sidebar' => string '1' (length=1)
// 'num2fa-enable' => string '0' (length=1)
// 'num2fa-all' => string '0' (length=1)
// 'convert-code' => string '0' (length=1)
// Fars Date farsDateSettings


add_action('wp_enqueue_scripts', 'addJsFiles');
function addJsFiles()
{
    global $farsDateSetting;

    if ($farsDateSetting['num2fa-post'] == '1') {
        if ($farsDateSetting['convert-code'] == '1') {
            wp_enqueue_script('num2fa-post', FARS_DATE_URL . 'assets/pjs/num2fa-post.js', [], false, true);
        } else {
            wp_enqueue_script('num2fa-post', FARS_DATE_URL . 'assets/pjs/num2fa-post-code.js', [], false, true);
        }
    }
}
