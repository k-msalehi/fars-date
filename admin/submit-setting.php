<?php
// array (size=7)
// 'num2fa-enable' => string '0' (length=1)
// 'num2fa-navbar' => string '1' (length=1)
// 'num2fa-sidebar' => string '1' (length=1)
// 'num2fa-post' => string '1' (length=1)
// 'num2fa-post-title' => string '1' (length=1)
// 'num2fa-post-meta' => string '1' (length=1)
// 'save_farsDateSetting' => string ' Save farsDateSetting' (length=21)
if (isset($_POST['save-farsDateSetting'])) {
    require_once('../../../../wp-config.php');
}
global $wpdb;
$tableName = $wpdb->prefix . 'fars_date';

foreach ($_POST as $key => $value) {
    if (in_array($value, ['0', '1']) || ($key == 'num2fa-enable' && in_array($value, ['0', '1', '2'])))
        $data = array('name' => $value);
    $where = array('name' => $key);
    $wpdb->update($tableName, $data, $where);
}
add_action('admin_notices', 'my_plugin_admin_notices');
function my_plugin_admin_notices()
{
    echo "<div class='updated'><p>Message to be shown</p></div>";
}
//wp_redirect('http://localhost/wp/wp-admin/options-general.php?page=fars-date-setting')