<?php
/**
* PHP version 7.3.3
*
* @category    ACF_Fields
* @package     ACCFT
* @author      WP Dev Powers <info@wpdevpowers.com>
* @copyright   2018 WP Dev Powers | ACF PRO files are not to be used or distributed outside of the premium theme/plugin.
* @license     GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
* @link        http://wpdevpowers.com
*/
// Start -------------------------------- ENCODING -------------------------------------
$accft_plugin_folder = plugins_url('', __DIR__);
?>
<style type="text/css">
.dashicons-acf-color-coded-field-types {
background-image: url("<?php echo plugins_url('dashicon.png', __DIR__) ?>") !important;
background-repeat: no-repeat;
background-position: center;
}
</style>
<?php
function enqueue_our_required_stylesheets(){
wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/5.4.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_our_required_stylesheets');
wp_enqueue_style( 'admin-header.min', $accft_plugin_folder . '/css/admin-header.min.css', false, '1.1', 'all');
?>
<?php
if (accft_fs()->can_use_premium_code()) {
wp_enqueue_style( 'admin-header-pro.min', $accft_plugin_folder . '/css/admin-header-pro.min.css', false, '1.1', 'all');
}
if (accft_fs()->is_not_paying()) {
wp_enqueue_style( 'admin-header-free.min', $accft_plugin_folder . '/css/admin-header-free.min.css', false, '1.1', 'all');
}
do_action('accft_after_admin_header');
// End -------------------------------- ENCODING -------------------------------------
?>