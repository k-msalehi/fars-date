<?php
// array (size=7)
// 'num2fa-enable' => string '0' (length=1)
// 'num2fa-navbar' => string '1' (length=1)
// 'num2fa-sidebar' => string '1' (length=1)
// 'num2fa-post' => string '1' (length=1)
// 'num2fa-post-title' => string '1' (length=1)
// 'num2fa-post-meta' => string '1' (length=1)
// 'save_farsDateSetting' => string ' Save farsDateSetting' (length=21)

if (!current_user_can('manage_options')) {
    wp_die('Acess Denied!');
}

$allowedKeys = ['num2fa-enable', 'num2fa-post', 'num2fa-post-title', 'num2fa-post-meta', 'num2fa-navbar', 'num2fa-sidebar', 'num2fa-all', 'code-convert'];
if (isset($_POST)) {
    // require_once('../../../../wp-config.php');
    foreach ($_POST as $key => $value) {
        if (in_array($value, ['0', '1']) || ($key == 'num2fa-enable' && in_array($value, ['0', '1', '2']))) {
            if (in_array($key, $allowedKeys)) {
                update_option($key, $value);
            }
        }
    }
}
add_action('admin_notices', 'my_plugin_admin_notices');
function my_plugin_admin_notices()
{
    echo "<div class='updated'><p>Message to be shown</p></div>";
}
//wp_redirect('http://localhost/wp/wp-admin/options-general.php?page=fars-date-setting')