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
add_action('admin_head', 'acf_color_coded_field_types_colorize_fields_by_type_when_editing_field_groups');
function acf_color_coded_field_types_colorize_fields_by_type_when_editing_field_groups()
{
?>
<style type="text/css">
.acf-field-object-accordion {
background: rgba(160, 196, 93, 0.25);
}
.acf-field-object-accordion a {
color: black;
}
.acf-field-object-accordion a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-tab {
background: rgba(228, 127, 26, 0.25);
}
.acf-field-object-tab a {
color: black;
}
.acf-field-object-tab a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-checkbox {
background: rgba(8, 236, 232, 0.05);
}
.acf-field-object-checkbox a {
color: black;
}
.acf-field-object-checkbox a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-message {
background: rgba(234, 0, 0, 0.05);
}
.acf-field-object-message a {
color: black;
}
.acf-field-object-message a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-text {
background: rgba(234, 234, 0, 0.10);
}
.acf-field-object-text a {
color: black;
}
.acf-field-object-text a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-textarea {
background: rgba(73, 109, 227, 0.3);
}
.acf-field-object-textarea a {
color: black;
}
.acf-field-object-textarea a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-relationship {
background: rgba(197, 98, 37, 0.3);
}
.acf-field-object-relationship a {
color: black;
}
.acf-field-object-relationship a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-image {
background: rgba(157, 204, 204, 0.3);
}
.acf-field-object-image a {
color: black;
}
.acf-field-object-image a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-file {
background: rgba(194, 30, 155, 0.3);
}
.acf-field-object-file a {
color: black;
}
.acf-field-object-file a:hover {
color: rgba(0, 0, 0, 0.7);
}
.acf-field-object-link {
background: rgba(30, 194, 150, 0.3);
}
.acf-field-object-link a {
color: black;
}
.acf-field-object-link a:hover {
color: rgba(0, 0, 0, 0.7);
}
</style>
<?php
}
?>