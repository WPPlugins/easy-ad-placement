<?php

//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

$option_name = 'plugin_option_name';

// delete codes
delete_option( 'eap_c1' );
delete_option( 'eap_c2' );
delete_option( 'eap_c3' );
delete_option( 'eap_c4' );
delete_option( 'eap_c5' );
delete_option( 'eap_c6' );
delete_option( 'eap_c7' );
delete_option( 'eap_c8' );
delete_option( 'eap_c9' );
delete_option( 'eap_c10' );

// delete code options
delete_option( 'eap_co1' );
delete_option( 'eap_co2' );
delete_option( 'eap_co3' );
delete_option( 'eap_co4' );
delete_option( 'eap_co5' );
delete_option( 'eap_co6' );
delete_option( 'eap_co7' );
delete_option( 'eap_co8' );
delete_option( 'eap_co9' );
delete_option( 'eap_co10' );

?>