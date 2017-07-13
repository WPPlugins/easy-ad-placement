<?php
/*
Plugin Name: Easy Ad Placement - for AdSense and other Ads
Version: 1.4
Plugin URI: http://www.randnotizen.org/easy-ad-placement/
Author: Jens Herdy
Author URI: http://www.randnotizen.org/
Description: A great Wordpress Plugin to place Ads from AdSense and other Ads anywhere you want.
License: GPLv3
*/

// load other files
include 'shortcodes.php';

// load languages
load_plugin_textdomain('eap', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );

// adding options menu
function eap_add_options_page() {
	if ( function_exists( 'add_options_page' ) ) {
		add_options_page( 'Easy Ad Placement - for AdSense and other Ads', 'Easy Ad Placement', 'manage_options', __FILE__, 'eap_options_page' );
	}
}

function eap_options_page() {
	if ( isset( $_POST['info_update'] ) ) {
		echo '<div id="message" class="updated fade"><p><strong>';

                // save codes
		$tmp1 = htmlentities( stripslashes( $_POST['eap_c1'] ) , ENT_COMPAT);
		update_option( 'eap_c1', $tmp1 );
		$tmp2 = htmlentities( stripslashes( $_POST['eap_c2'] ) , ENT_COMPAT );
		update_option( 'eap_c2', $tmp2 );
		$tmp3 = htmlentities( stripslashes( $_POST['eap_c3'] ) , ENT_COMPAT );
		update_option( 'eap_c3', $tmp3 );
		$tmp4 = htmlentities( stripslashes( $_POST['eap_c4'] ) , ENT_COMPAT );
		update_option( 'eap_c4', $tmp4 );
		$tmp5 = htmlentities( stripslashes( $_POST['eap_c5'] ) , ENT_COMPAT );
		update_option( 'eap_c5', $tmp5 );		
		$tmp6 = htmlentities( stripslashes( $_POST['eap_c6'] ) , ENT_COMPAT );
		update_option( 'eap_c6', $tmp6 );		
		$tmp7 = htmlentities( stripslashes( $_POST['eap_c7'] ) , ENT_COMPAT );
		update_option( 'eap_c7', $tmp7 );
		$tmp8 = htmlentities( stripslashes( $_POST['eap_c8'] ) , ENT_COMPAT );
		update_option( 'eap_c8', $tmp8 );		
		$tmp9 = htmlentities( stripslashes( $_POST['eap_c9'] ) , ENT_COMPAT );
		update_option( 'eap_c9', $tmp9 );		
		$tmp10 = htmlentities( stripslashes( $_POST['eap_c10'] ) , ENT_COMPAT );
		update_option( 'eap_c10', $tmp10 );
		
		// save alignment
		$tmp1o = htmlentities( stripslashes( $_POST['eap_co1'] ) , ENT_COMPAT );
		update_option( 'eap_co1', $tmp1o );
		$tmp2o = htmlentities( stripslashes( $_POST['eap_co2'] ) , ENT_COMPAT );
		update_option( 'eap_co2', $tmp2o );
		$tmp3o = htmlentities( stripslashes( $_POST['eap_co3'] ) , ENT_COMPAT );
		update_option( 'eap_co3', $tmp3o );
		$tmp4o = htmlentities( stripslashes( $_POST['eap_co4'] ) , ENT_COMPAT );
		update_option( 'eap_co4', $tmp4o );
		$tmp5o = htmlentities( stripslashes( $_POST['eap_co5'] ) , ENT_COMPAT );
		update_option( 'eap_co5', $tmp5o );
		$tmp6o = htmlentities( stripslashes( $_POST['eap_co6'] ) , ENT_COMPAT );
		update_option( 'eap_co6', $tmp6o );
		$tmp7o = htmlentities( stripslashes( $_POST['eap_co7'] ) , ENT_COMPAT );
		update_option( 'eap_co7', $tmp7o );
		$tmp8o = htmlentities( stripslashes( $_POST['eap_co8'] ) , ENT_COMPAT );
		update_option( 'eap_co8', $tmp8o );
		$tmp9o = htmlentities( stripslashes( $_POST['eap_co9'] ) , ENT_COMPAT );
		update_option( 'eap_co9', $tmp9o );
		$tmp10o = htmlentities( stripslashes( $_POST['eap_co10'] ) , ENT_COMPAT );
		update_option( 'eap_co10', $tmp10o );
    		
		_e('Options successfully Updated !', 'eap');
		echo '</strong></p></div>';
	}

?>

	<div class="wrap">
            <h2>Easy Ad Placement <?php _e('Options','eap'); ?></h2>

            <p><?php _e('Paste your ad codes (e.g. Google Adsense) into the fields on the right.','eap'); ?>
            <br><?php _e('With the php-snippets or the shortcodes on the left you can place the ads where you want.','eap'); ?></p>

	    <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
	    <input type="hidden" name="info_update" id="info_update" value="true">

	    <fieldset class="options">
	    <table width="100%" border="0" cellspacing="0" cellpadding="6">

            <?php $t_eap_co1 = get_option( 'eap_co1' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 1:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_1]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_1(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co1">
            <option value="0" <?php if ($t_eap_co1 == "0" OR $t_eap_co1 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co1 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co1 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co1 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c1" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c1' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co2 = get_option( 'eap_co2' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 2:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_2]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_2(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co2">
            <option value="0" <?php if ($t_eap_co2 == "0" OR $t_eap_co2 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co2 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co2 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co2 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c2" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c2' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co3 = get_option( 'eap_co3' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 3:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_3]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_3(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co3">
            <option value="0" <?php if ($t_eap_co3 == "0" OR $t_eap_co3 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co3 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co3 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co3 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c3" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c3' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co4 = get_option( 'eap_co4' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 4:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_4]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_4(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co4">
            <option value="0" <?php if ($t_eap_co4 == "0" OR $t_eap_co4 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co4 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co4 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co4 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c4" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c4' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co5 = get_option( 'eap_co5' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 5:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_5]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_5(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co5">
            <option value="0" <?php if ($t_eap_co5 == "0" OR $t_eap_co5 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co5 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co5 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co5 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c5" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c5' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co6 = get_option( 'eap_co6' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 6:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_6]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_6(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co6">
            <option value="0" <?php if ($t_eap_co6 == "0" OR $t_eap_co6 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co6 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co6 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co6 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c6" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c6' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co7 = get_option( 'eap_co7' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 7:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_7]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_7(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co7">
            <option value="0" <?php if ($t_eap_co7 == "0" OR $t_eap_co7 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co7 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co7 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co7 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c7" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c7' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co8 = get_option( 'eap_co8' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 8:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_8]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_8(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co8">
            <option value="0" <?php if ($t_eap_co8 == "0" OR $t_eap_co8 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co8 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co8 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co8 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c8" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c8' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co9 = get_option( 'eap_co9' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 9:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_9]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_9(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co9">
            <option value="0" <?php if ($t_eap_co9 == "0" OR $t_eap_co9 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co9 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co9 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co9 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c9" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c9' ); ?></textarea>
	    </td></tr>

            <?php $t_eap_co10 = get_option( 'eap_co10' ); ?>
	    <tr><td width="400px" align="left">
	    <strong><?php _e('Ad Code','eap'); ?> 10:</strong>
	    <br><?php _e('To display the code use','eap'); ?>:
	    <br>- <?php _e('The shortcode','eap'); ?>: <code>[eap_ad_10]</code>
	    <br>- <?php _e('The php code','eap'); ?> : <code>&lt;?php echo show_eap_ad_10(); ?&gt;</code>
	    <br>
	    <br><?php _e('Alignment','eap'); ?>:
	    <select name="eap_co10">
            <option value="0" <?php if ($t_eap_co10 == "0" OR $t_eap_co10 == "") {echo "selected";} else {echo "";}; ?>><?php _e('None','eap'); ?></option>
            <option value="1" <?php if ($t_eap_co10 == "1") {echo "selected";} else {echo "";}; ?>><?php _e('Left','eap'); ?></option>
            <option value="2" <?php if ($t_eap_co10 == "2") {echo "selected";} else {echo "";}; ?>><?php _e('Center','eap'); ?></option>
            <option value="3" <?php if ($t_eap_co10 == "3") {echo "selected";} else {echo "";}; ?>><?php _e('Right','eap'); ?></option>
            </select>
	    </td><td align="left">
	    <textarea name="eap_c10" rows="5" cols="45" wrap="off"><?php echo get_option( 'eap_c10' ); ?></textarea>
	    </td></tr>

	    </table>
	    </fieldset>

	    <div class="submit">
	        <input type="submit" class="button-primary" name="info_update" value="<?php _e('Update options','eap'); ?>" />
	    </div>

	    </form>

        <table width="100%" border="0" cellspacing="0" cellpadding="6">
	<tr><td width="670px" align="left"><?php _e('If you want to thank the developer for this free Plugin, you are welcome to make a donation via PayPal (you don\'t need a PayPal account to make the donation).','eap'); ?>
        </td><td> 
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="Z955W4RCYSZYQ">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG_global.gif" border="0" name="submit" alt="PayPal � The safer, easier way to pay online.">
        <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
        </form>
        </td></tr>
        </table>

	</div>
<?php
}

// insert the options_page in the menu
add_action( 'admin_menu', 'eap_add_options_page' );

// search for shortcodes
add_filter('the_content', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_filter('the_excerpt', 'do_shortcode');

?>