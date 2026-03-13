<?php
/**
 * Plugin Name: Pivotlar Footer Credit
 * Description: Adds "This is github starter kit by pivotlar" to the footer of all themes.
 */

add_action('wp_footer', function () {
    echo '<div style="text-align:center;padding:10px 0;font-size:14px;color:#666;">Updated:This is github starter kit by pivotlar</div>';
});
