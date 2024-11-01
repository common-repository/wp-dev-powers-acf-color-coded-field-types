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
$accft_plugin_folder = plugins_url('', __DIR__);
if (accft_fs()->can_use_premium_code()) {
?>
<script type="text/javascript">
jQuery( "body" ).addClass("acf-color-coded-field-types-pro");
jQuery( "body.acf-color-coded-field-types-pro" ).removeClass("acf-color-coded-field-types-free");
</script>
<?php
}
if (accft_fs()->is_not_paying()) {
?>
<script type="text/javascript">
jQuery( "body" ).addClass("acf-color-coded-field-types-free");
jQuery( "body.acf-color-coded-field-types-free" ).removeClass("acf-color-coded-field-types-pro");
</script>
<?php
}
if (accft_fs()->is_trial()) {
}
do_action('accft_after_footer');
?>
