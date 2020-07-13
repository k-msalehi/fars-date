<?php
if (!defined('ABSPATH')) exit('No direct access allowed');
global $farsDateSetting;

?>
<div class="wrap">
    <h3 id="myPluginTitle">
        <?php
        _e('Fars Date farsDateSettings', 'fars-date')
        ?>
    </h3>
    <p id="MypluginFormMessage"></p>
<form method="post" action="<?=FARS_DATE_URL.'admin/submit-setting.php'?>">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><?php _e('Method of converting numbers to Persian') ?></th>
                    <td>
                        <fieldset>
                            <label><input type="radio" name="convert_type" value="dont_convert" <?=$farsDateSetting['num2fa-enable']== 0?'checked':''?>>
                                <span><?php _e('Don\'t convert numbers', 'fars-date') ?></span></label><br>
                            <label><input type="radio" name="convert_type" value="js" <?=$farsDateSetting['num2fa-enable']== 1?'checked':''?>>
                                <span><?php _e('javascript', 'fars-date') ?> <small><?php _e('(in some themes this type may convert numbers with a little delay)', 'fars-date') ?></small></span></label><br>
                            <label><input type="radio" name="convert_type" value="php" disabled <?=$farsDateSetting['num2fa-enable']== 2?'checked':''?>>
                                <span><?php _e('PHP', 'fars-date') ?> <small><?php _e('(Only availble in Pro version)', 'fars-date') ?></small></span></label><br>
                        </fieldset>

                <tr>
                    <th scope="row"><?php _e('Place of numbers to Convert to Persian', 'fars-date') ?></th>
                    <td>
                        <fieldset>
                            <label>
                                <input name="navbar" type="checkbox" value="1" <?=$farsDateSetting['num2fa-navbar']== 1?'checked':''?>>
                                <?php _e('Top Nav bar', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="sidebar" type="checkbox" value="1" <?=$farsDateSetting['num2fa-sidebar']== 1?'checked':''?>>
                                <?php _e('Sidebar', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="post_page_content" type="checkbox" value="1" <?=$farsDateSetting['num2fa-post']== 1?'checked':''?>>
                                <?php _e('Post/Pages content', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="post_page_title" type="checkbox" value="1" <?=$farsDateSetting['num2fa-post-title']== 1?'checked':''?>>
                                <?php _e('Post/Page Title', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="post_page_meta" type="checkbox" value="1" <?=$farsDateSetting['num2fa-post-meta']== 1?'checked':''?>>
                                <?php _e('Post/Page Meta', 'fars-date') ?> <small><?php _e('(descaription, date, auther)', 'fars-date') ?></small>
                            </label> <br>
                            <label>
                                <input name="convert_code" type="checkbox" value="1" <?=$farsDateSetting['convert-code']== 1?'checked':''?>>
                                <?php _e(htmlentities('<code> and <pre>?'), 'fars-date') ?> <small><?php _e('(converts numbers in code and pre tag)', 'fars-date)') ?></small>
                            </label>
                        </fieldset>
                    </td>
                </tr>

            </tbody>
        </table>
        <input type="submit" name="save_farsDateSetting" id="submit" class="button button-primary" value=" <?php _e('Save farsDateSetting', 'fars-date')?>">
    </form>
</div>