<?php
/**
* Description: Changes the color that fields appear when editing ACF field groups in the backend based on their field type, making them much easier to sort and tell apart.  It also makes it much easier re-arrange your fields if you zoom out the page to view more fields at a time. The Pro version also adds an icon to fields that have conditional logic enabled and adds styling to fields that have start and end points to make it easier to tell where they start and end.
* Plugin Name: WordPress Dev Powers - ACF Color Coded Field Types Plugin
* Plugin URI:  http://wpdevpowers.com/pro-pricing/acf-color-coded-field-types/
*
* Version:     1.0.1
* Author:      WordPress Dev Powers
* Author URI:  http://wpdevpowers.com
* Text Domain: acf-color-coded-field-types
* License:     GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*
* PHP version 7.3.3
*
* @category    ACF_Fields
* @package     ACCFT
* @author      WordPress Dev Powers <wpdevpowers@gmail.com>
* @copyright   2018 WP Dev Powers | ACF PRO files are not to be used or distributed outside of the premium theme/plugin.
* @license     GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
* @link        http://wpdevpowers.com
*/
define('ACCFT_PLUGIN_DIR', dirname(__FILE__).'/');
$accft_plugin_folder = plugins_url('', __FILE__);
if (!function_exists('accft_fs_init')) {
function accft_fs_init()
{
register_setting('accft_fs_settings');
}
}
if (!defined('ABSPATH')) {
exit;
}
if (function_exists('accft_fs')) {
accft_fs()->set_basename(true, __FILE__);
return;
}
require plugin_dir_path(__FILE__) . '/php/freemius-integration.php';
add_action('after_setup_theme', 'accft_fs_init');
function accft_fs_init()
{
if (accft_fs()->can_use_premium_code()) {
$accft_fs_pro_folder = plugin_dir_path(__FILE__) . '/pro';
if (file_exists($accft_fs_pro_folder)) {
if (! function_exists('register_fields_code_field')) :
require_once plugin_dir_path(__FILE__) . '/acf/acf-code-field/acf-code-field.php';
endif;
if (! function_exists('include_field_types_divider')) :
require_once plugin_dir_path(__FILE__) . '/acf/acf-divider-field-master/acf-divider.php';
endif;
if (!class_exists('dhz_acf_plugin_column_field')) :
require_once plugin_dir_path(__FILE__) . '/acf/acf-columns/acf-column.php';
endif;
}
}
if (!class_exists('ACF') && !class_exists('acf_pro') && !function_exists('esjp_fs_init')) :
require_once plugin_dir_path(__FILE__) . '/acf/advanced-custom-fields/acf.php';
endif;
}
function register_accft_fs_my_admin_menu()
{
add_menu_page(
__('ACF Color Coded Field Types', 'textdomain'),
'ACCFT',
'manage_options',
'accft_fs_top_level_admin_menu',
'accft_fs_top_level_admin_menu',
'dashicons-acf-color-coded-field-types',
101
);
}
add_action('admin_menu', 'register_accft_fs_my_admin_menu');
function accft_fs_top_level_admin_menu()
{
?>
<style type="text/css">
h3 {
margin: 1em 0 .3em 0;
}
</style>
<div class="acf-color-coded-field-types-backend-page">
<?php
if (accft_fs()->is_not_paying()) {
	?>
<h2 class="free-only">ACF Color Coded Field Types</h2>
<?php
}
?>
<?php
if (accft_fs()->can_use_premium_code()) {
	?>
<div class="pro-only"></div>
<h2>ACF Color Coded Field Types Pro
<?php
if (accft_fs()->is_trial()) {
	?>
(Trial)
<?php
}
?>
</h2>
<?php
}
?>
<span style="font-size: 16px;"><a href="/wp-admin/admin.php?page=accft_fs_top_level_admin_menu-account" target="_blank">View Your Account</a> <span class="free-only">|</span> <a class="free-only" href="/wp-admin/admin.php?page=accft_fs_top_level_admin_menu-account" target="_blank">Upgrade to Pro!</a></span>
<h3>Usage Instructions</h3>
<p>All your fields when editing ACF Field Groups are now different colors allowing you to tell them apart even when zoomed way out, making them much easier to sort and tell apart.</p>
<p>The best way to see what this plugin does is to try out <a href="http://accft.wpdevpowers.com/?autologin_code=Tv1X0SZjRneyZPda" target="_blank">this demo</a>.</p>
<?php
if (accft_fs()->can_use_premium_code()) {
?>
<h3>Usage Instructions for Pro Powers</h3>
For fields like Column, Tab, & Divider that sometimes require specifying endpoints, I added a way to have a top or bottom border added to the accordions depending on if you add the startpoint or endpoint icon to the Fields Label. The icon codes are as follows...<br>
Startpoint: &lt;i class=&quot;fas fa-flag-checkered&quot;&gt;&lt;/i&gt;<br>
Endpoint: &lt;i class=&quot;fab fa-strava&quot;&gt;&lt;/i&gt;
<?php } ?>
</div>
<?php
}
add_action('admin_head', 'acf_color_coded_field_types_admin_header');
function acf_color_coded_field_types_admin_header()
{
include plugin_dir_path(__FILE__) . '/php/admin-header.php';
}
add_action('admin_footer', 'acf_color_coded_field_types_admin_footer');
function acf_color_coded_field_types_admin_footer()
{
include plugin_dir_path(__FILE__) . '/php/admin-footer.php';
}
add_action('wp_head', 'acf_color_coded_field_types_wp_header');
function acf_color_coded_field_types_wp_header()
{
include plugin_dir_path(__FILE__) . '/php/header.php';
}
add_action('wp_footer', 'acf_color_coded_field_types_wp_footer');
function acf_color_coded_field_types_wp_footer()
{
include plugin_dir_path(__FILE__) . '/php/footer.php';
}
require plugin_dir_path(__FILE__) . '/php/core.php';
?>