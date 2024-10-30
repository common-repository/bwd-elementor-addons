<?php
/**
 * 
 * @admin ~~// this is widget categories
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$general_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-general"><h3>'.wp_kses_post('General Widgets (<div class="widgetCount"></div>)').'</h3></div>';
$cv_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-cv"><h3>'.wp_kses_post('CV Builder (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$hero_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-hero"><h3>'.wp_kses_post('Hero Sections (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$blog_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-blog"><h3>'.wp_kses_post('Blog Widgets (<div class="widgetCount"></div>)', BWDEB_PLUGIN_TD).'</h3></div>';
$woo_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-wooc"><h3>'.wp_kses_post('WooCommerce Widgets (<div class="widgetCount"></div>)', BWDEB_PLUGIN_TD).'</h3></div>';
$wooSingle_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-single-product"><h3>'.wp_kses_post('Product Single (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$wooPArchive_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-parchive"><h3>'.wp_kses_post('Product Archive (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$wooCart_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-cart"><h3>'.wp_kses_post('Cart (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$wooCheckout_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-checkout"><h3>'.wp_kses_post('Checkout (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$wooThankyou_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-thankyou"><h3>'.wp_kses_post('Thankyou (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$wooMyAccount_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-myaccount"><h3>'.wp_kses_post('My Account (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$headerFooter_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-hf"><h3>'.wp_kses_post('Header & Footer (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$postSingle_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-post-single"><h3>'.wp_kses_post('Post Single (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$postArchive_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-post-archive"><h3>'.wp_kses_post('Post Archive (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$ext_W = '<div class="bwd-widgets-item-title bwd-widgets-heading" id="bwd-"><h3>'.wp_kses_post('Extensions (<div class="widgetCount"></div>) <sup><span> Pro</span></sup>').'</h3></div>';
$all_T = [$general_W,$cv_W,$hero_W,$blog_W,$woo_W,$ext_W,$wooSingle_W,$headerFooter_W,$postSingle_W,$postArchive_W,$wooCart_W,$wooCheckout_W,$wooThankyou_W,$wooMyAccount_W,$wooPArchive_W];