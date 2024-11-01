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
$accft_plugin_folder = plugins_url( '', __DIR__ );
if ( !function_exists( 'accft_fs' ) ) {
function accft_fs()
{
global  $accft_fs ;
if ( ! isset( $accft_fs ) ) {
require_once ACCFT_PLUGIN_DIR . '/freemius/start.php';
$accft_fs = fs_dynamic_init( array(
'id'                  => '3223',
'slug'                => 'wp-dev-powers-acf-color-coded-field-types',
'premium_slug'        => 'wp-dev-powers-acf-color-coded-field-types-pro',
'type'                => 'plugin',
'public_key'          => 'pk_0151fdf0477141c69ef49f24645b5',
'is_premium'          => true,
'premium_suffix'      => 'Pro',
'has_premium_version' => true,
'has_addons'          => false,
'has_paid_plans'      => true,
'has_affiliation'     => 'customers',
'menu'                => array(
'slug'           => 'accft_fs_top_level_admin_menu',
),

) );
}
return $accft_fs;
}
accft_fs();
do_action( 'accft_fs_loaded' );
}
function accft_fs_custom_connect_message_on_update(
$user_first_name,
$plugin_title,
$user_login,
$site_link,
$freemius_link
) {
return sprintf(
__( 'Hey %1$s' ) . ',<br>' . __( 'Please help us improve %2$s! If you opt-in, some data about your usage of %2$s will be sent to %5$s. If you skip this, that\'s okay! %2$s will still work just fine.', 'acf-color-coded-field-types' ),
$user_first_name,
'<b>' . $plugin_title . '</b>',
'<b>' . $user_login . '</b>',
$site_link,
$freemius_link
);
}
accft_fs()->add_filter(
'connect_message_on_update',
'accft_fs_custom_connect_message_on_update',
10,
6
);
if ( accft_fs()->is_not_paying() ) {
add_action( 'admin_notices', 'accft_fs_Marketing_Content' );
function accft_fs_Marketing_Content()
{
$accft_fs_pro_folder = ACCFT_PLUGIN_DIR . '/pro';
if ( !file_exists( $accft_fs_pro_folder ) ) {
echo  '<div data-id="premium_activated" data-manager-id="acf-color-coded-field-types" class="updated success fs-notice fs-sticky fs-has-title"><label class="fs-plugin-title">ACF Color Coded Field Types</label><div class="fs-close"><i class="dashicons dashicons-no" title="Dismiss"></i> <span>Dismiss</span></div><div class="fs-notice-body"><b style="color: black;">Gain More Powers!</b>: <a href="http://wpdevpowers.com/pro-pricing/acf-color-coded-field-types/">Click here to upgrade to Pro</a>.</div></div>' ;
}
}
}
if ( accft_fs()->is_not_paying() ) {
add_action( 'admin_notices', 'accft_fs_Activate_License_Notice' );
function accft_fs_Activate_License_Notice()
{
$accft_fs_pro_folder = ACCFT_PLUGIN_DIR . '/pro';
if ( file_exists( $accft_fs_pro_folder ) ) {
echo  '<div data-id="Activate_License_Notice" data-manager-id="acf-color-coded-field-types" class="updated success fs-notice fs-sticky fs-has-title"><label class="fs-plugin-title">ACF Color Coded Field Types Pro</label><div class="fs-close"><i class="dashicons dashicons-no" title="Dismiss"></i> <span>Dismiss</span></div><div class="fs-notice-body"><b style="color: black;">Pro Version Successfully Installed!</b> All you need to do now is <a href="/wp-admin/admin.php?page=accft_fs_top_level_admin_menu-account">activate it here</a>.</div></div>' ;
}
}
}
// End -------------------------------- ENCODING -------------------------------------
?>