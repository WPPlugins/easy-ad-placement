<?php

//shortcodes and php-snippes to load ads

function show_eap_ad_1() {
	$eap_c1_e = get_option( 'eap_c1' );
	$eap_c1_d = html_entity_decode( $eap_c1_e, ENT_COMPAT );
    
  $t_eap_co1 = get_option( 'eap_co1' ); 
   
  if ($t_eap_co1 == "0" OR $t_eap_co1 == "") {
    $eap_c1_o = "<p>" . $eap_c1_d . "</p>";
  } elseif ($t_eap_co1 == "1") {
    $eap_c1_o = "<p align='left'>" . $eap_c1_d . "</p>";
  } elseif ($t_eap_co1 == "2") {
    $eap_c1_o = "<p align='center'>" . $eap_c1_d . "</p>";
  } elseif ($t_eap_co1 == "3") {
    $eap_c1_o = "<p align='right'>" . $eap_c1_d . "</p>"; 
  }
  return $eap_c1_o;
}
add_shortcode( 'eap_ad_1', 'show_eap_ad_1' );

function show_eap_ad_2() {
	$eap_c2_e = get_option( 'eap_c2' );
	$eap_c2_d = html_entity_decode( $eap_c2_e, ENT_COMPAT );
    
  $t_eap_co2 = get_option( 'eap_co2' ); 
   
  if ($t_eap_co2 == "0" OR $t_eap_co2 == "") {
    $eap_c2_o = "<p>" . $eap_c2_d . "</p>";
  } elseif ($t_eap_co2 == "1") {
    $eap_c2_o = "<p align='left'>" . $eap_c2_d . "</p>";
  } elseif ($t_eap_co2 == "2") {
    $eap_c2_o = "<p align='center'>" . $eap_c2_d . "</p>";
  } elseif ($t_eap_co2 == "3") {
    $eap_c2_o = "<p align='right'>" . $eap_c2_d . "</p>"; 
  }
  return $eap_c2_o;
}
add_shortcode( 'eap_ad_2', 'show_eap_ad_2' );

function show_eap_ad_3() {
	$eap_c3_e = get_option( 'eap_c3' );
	$eap_c3_d = html_entity_decode( $eap_c3_e, ENT_COMPAT );
    
  $t_eap_co3 = get_option( 'eap_co3' ); 
   
  if ($t_eap_co3 == "0" OR $t_eap_co3 == "") {
    $eap_c3_o = "<p>" . $eap_c3_d . "</p>";
  } elseif ($t_eap_co3 == "1") {
    $eap_c3_o = "<p align='left'>" . $eap_c3_d . "</p>";
  } elseif ($t_eap_co3 == "2") {
    $eap_c3_o = "<p align='center'>" . $eap_c3_d . "</p>";
  } elseif ($t_eap_co3 == "3") {
    $eap_c3_o = "<p align='right'>" . $eap_c3_d . "</p>"; 
  }
  return $eap_c3_o;
}
add_shortcode( 'eap_ad_3', 'show_eap_ad_3' );

function show_eap_ad_4() {
	$eap_c4_e = get_option( 'eap_c4' );
	$eap_c4_d = html_entity_decode( $eap_c4_e, ENT_COMPAT );
    
  $t_eap_co4 = get_option( 'eap_co4' ); 
   
  if ($t_eap_co4 == "0" OR $t_eap_co4 == "") {
    $eap_c4_o = "<p>" . $eap_c4_d . "</p>";
  } elseif ($t_eap_co4 == "1") {
    $eap_c4_o = "<p align='left'>" . $eap_c4_d . "</p>";
  } elseif ($t_eap_co4 == "2") {
    $eap_c4_o = "<p align='center'>" . $eap_c4_d . "</p>";
  } elseif ($t_eap_co4 == "3") {
    $eap_c4_o = "<p align='right'>" . $eap_c4_d . "</p>"; 
  }
  return $eap_c4_o;
}
add_shortcode( 'eap_ad_4', 'show_eap_ad_4' );

function show_eap_ad_5() {
	$eap_c5_e = get_option( 'eap_c5' );
	$eap_c5_d = html_entity_decode( $eap_c5_e, ENT_COMPAT );
    
  $t_eap_co5 = get_option( 'eap_co5' ); 
   
  if ($t_eap_co5 == "0" OR $t_eap_co5 == "") {
    $eap_c5_o = "<p>" . $eap_c5_d . "</p>";
  } elseif ($t_eap_co5 == "1") {
    $eap_c5_o = "<p align='left'>" . $eap_c5_d . "</p>";
  } elseif ($t_eap_co5 == "2") {
    $eap_c5_o = "<p align='center'>" . $eap_c5_d . "</p>";
  } elseif ($t_eap_co5 == "3") {
    $eap_c5_o = "<p align='right'>" . $eap_c5_d . "</p>"; 
  }
  return $eap_c5_o;
}
add_shortcode( 'eap_ad_5', 'show_eap_ad_5' );

function show_eap_ad_6() {
	$eap_c6_e = get_option( 'eap_c6' );
	$eap_c6_d = html_entity_decode( $eap_c6_e, ENT_COMPAT );
    
  $t_eap_co6 = get_option( 'eap_co6' ); 
   
  if ($t_eap_co6 == "0" OR $t_eap_co6 == "") {
    $eap_c6_o = "<p>" . $eap_c6_d . "</p>";
  } elseif ($t_eap_co6 == "1") {
    $eap_c6_o = "<p align='left'>" . $eap_c6_d . "</p>";
  } elseif ($t_eap_co6 == "2") {
    $eap_c6_o = "<p align='center'>" . $eap_c6_d . "</p>";
  } elseif ($t_eap_co6 == "3") {
    $eap_c6_o = "<p align='right'>" . $eap_c6_d . "</p>"; 
  }
  return $eap_c6_o;
}
add_shortcode( 'eap_ad_6', 'show_eap_ad_6' );

function show_eap_ad_7() {
	$eap_c7_e = get_option( 'eap_c7' );
	$eap_c7_d = html_entity_decode( $eap_c7_e, ENT_COMPAT );
    
  $t_eap_co7 = get_option( 'eap_co7' ); 
   
  if ($t_eap_co7 == "0" OR $t_eap_co7 == "") {
    $eap_c7_o = "<p>" . $eap_c7_d . "</p>";
  } elseif ($t_eap_co7 == "1") {
    $eap_c7_o = "<p align='left'>" . $eap_c7_d . "</p>";
  } elseif ($t_eap_co7 == "2") {
    $eap_c7_o = "<p align='center'>" . $eap_c7_d . "</p>";
  } elseif ($t_eap_co7 == "3") {
    $eap_c7_o = "<p align='right'>" . $eap_c7_d . "</p>"; 
  }
  return $eap_c7_o;
}
add_shortcode( 'eap_ad_7', 'show_eap_ad_7' );

function show_eap_ad_8() {
	$eap_c8_e = get_option( 'eap_c8' );
	$eap_c8_d = html_entity_decode( $eap_c8_e, ENT_COMPAT );
    
  $t_eap_co8 = get_option( 'eap_co8' ); 
   
  if ($t_eap_co8 == "0" OR $t_eap_co8 == "") {
    $eap_c8_o = "<p>" . $eap_c8_d . "</p>";
  } elseif ($t_eap_co8 == "1") {
    $eap_c8_o = "<p align='left'>" . $eap_c8_d . "</p>";
  } elseif ($t_eap_co8 == "2") {
    $eap_c8_o = "<p align='center'>" . $eap_c8_d . "</p>";
  } elseif ($t_eap_co8 == "3") {
    $eap_c8_o = "<p align='right'>" . $eap_c8_d . "</p>"; 
  }
  return $eap_c8_o;
}
add_shortcode( 'eap_ad_8', 'show_eap_ad_8' );

function show_eap_ad_9() {
	$eap_c9_e = get_option( 'eap_c9' );
	$eap_c9_d = html_entity_decode( $eap_c9_e, ENT_COMPAT );
    
  $t_eap_co9 = get_option( 'eap_co9' ); 
   
  if ($t_eap_co9 == "0" OR $t_eap_co9 == "") {
    $eap_c9_o = "<p>" . $eap_c9_d . "</p>";
  } elseif ($t_eap_co9 == "1") {
    $eap_c9_o = "<p align='left'>" . $eap_c9_d . "</p>";
  } elseif ($t_eap_co9 == "2") {
    $eap_c9_o = "<p align='center'>" . $eap_c9_d . "</p>";
  } elseif ($t_eap_co9 == "3") {
    $eap_c9_o = "<p align='right'>" . $eap_c9_d . "</p>"; 
  }
  return $eap_c9_o;
}
add_shortcode( 'eap_ad_9', 'show_eap_ad_9' );

function show_eap_ad_10() {
	$eap_c10_e = get_option( 'eap_c10' );
	$eap_c10_d = html_entity_decode( $eap_c10_e, ENT_COMPAT );
    
  $t_eap_co10 = get_option( 'eap_co10' ); 
   
  if ($t_eap_co10 == "0" OR $t_eap_co10 == "") {
    $eap_c10_o = "<p>" . $eap_c10_d . "</p>";
  } elseif ($t_eap_co10 == "1") {
    $eap_c10_o = "<p align='left'>" . $eap_c10_d . "</p>";
  } elseif ($t_eap_co10 == "2") {
    $eap_c10_o = "<p align='center'>" . $eap_c10_d . "</p>";
  } elseif ($t_eap_co10 == "3") {
    $eap_c10_o = "<p align='right'>" . $eap_c10_d . "</p>"; 
  }
  return $eap_c10_o;
}
add_shortcode( 'eap_ad_10', 'show_eap_ad_10' );

?>