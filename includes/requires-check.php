<?php
if (!defined( 'ABSPATH')) {
    exit;
}

// For elementor
function bwdeb_register_required_plugins() {
	$check_display = get_current_screen();
	if (isset( $check_display->parent_file) && 'plugins.php' === $check_display->parent_file && 'update' === $check_display->id) {
		return;
	}
	$bwd_plugin_plugin = 'elementor/elementor.php';
	if (bwdeb_addon_install()) {
		if (!current_user_can('activate_plugins')) {
			return;
		}
		$bwd_plugin_active_url = wp_nonce_url('plugins.php?action=activate&plugin=' . $bwd_plugin_plugin . '&plugin_status=all&paged=1&s', 'activate-plugin_' . $bwd_plugin_plugin );
		$bwd_plugin_the_notice_is = '<p><b>'.esc_html__('BWD Elementor Addons', 'bwd-elementor-addons').'</b> '.esc_html__('requires Elementor to be activated.', 'bwd-elementor-addons').'</p>';
		$bwd_plugin_the_notice_is .= '<p><a href="'. esc_url($bwd_plugin_active_url) .'" class="button-primary">'.esc_html__('Activate Elementor', 'bwd-elementor-addons').'</a></p>';
	} else {
		if (!current_user_can('install_plugins')) {
			return;
		}
		$install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=elementor'), 'install-plugin_elementor');
		$bwd_plugin_the_notice_is = '<p><b>'.esc_html__('BWD Elementor Addons', 'bwd-elementor-addons').'</b> '.esc_html__('requires Elementor to be installed and activated.', 'bwd-elementor-addons').'</p>';
		$bwd_plugin_the_notice_is .= '<p><a href="'. esc_url($install_url) .'" class="button-primary">'.esc_html__('Install Elementor', 'bwd-elementor-addons').'</a></p>';
	}
	echo '<div class="notice notice-error is-dismissible"><p>' . wp_kses_post($bwd_plugin_the_notice_is) . '</p></div>';
}

function bwdeb_addon_install() {
	$file_path = 'elementor/elementor.php';
	$installed_plugins = get_plugins();
	return isset($installed_plugins[$file_path]);
}

// For woocommerce
function bwdeb_WooCommerce_register_required_plugins() {
	$product_wdgts_keys = ['bwdeb-plugin-product-grid', 'bwdeb-plugin-product-list', 'bwdeb-plugin-product-tiles', 'bwdeb-plugin-product-carousel', 'bwdeb-plugin-product-category-grid', 'bwdeb-plugin-product-category-tiles', 'bwdeb-plugin-product-accordion', 'bwdeb-plugin-product-image-accordion', 'bwdeb-plugin-product-list-carousel', 'bwdeb-plugin-product-timeline', 'bwdeb-plugin-related-product', 'bwdeb-plugin-product-category-carousel', 'bwdeb-plugin-featured-product','bwdeb-plugin-woo-cat-gallery', 'bwdeb-plugin-woop-multi-action', 'bwdeb-plugin-woop-wish-cont', 'bwdeb-woop-vendors', 'bwdeb-twpx', 'bwdeb-product-single'];
	$done = false;
	foreach ($product_wdgts_keys as $key) {
		if (get_option($key, 'off') == 'on') {
			$done = true;
			break;
		}
	}
	if ($done) {
		$w_check_display = get_current_screen();
		if (isset( $w_check_display->parent_file) && 'plugins.php' === $w_check_display->parent_file && 'update' === $w_check_display->id) {
			return;
		}
		$bwd_w_plugin_plugin = 'woocommerce/woocommerce.php';
		if (bwdeb_WooCommerce_addon_install()){
			if (!current_user_can('activate_plugins')){
				return;
			}
			$bwd_w_plugin_active_url = wp_nonce_url('plugins.php?action=activate&plugin=' . $bwd_w_plugin_plugin . '&plugin_status=all&paged=1&s', 'activate-plugin_' . $bwd_w_plugin_plugin );
			$bwd_w_plugin_the_notice_is = '<p><b>'.esc_html__('For WooCommerce widget ', 'bwd-elementor-addons').'</b> '.esc_html__('requires WooCommerce plugin to be activated.', 'bwd-elementor-addons').'</p>';
			$bwd_w_plugin_the_notice_is .= '<p><a href="'. esc_url($bwd_w_plugin_active_url) .'" class="button-primary">'.esc_html__('Activate WooCommerce', 'bwd-elementor-addons').'</a></p>';
		} else{
			if (!current_user_can('install_plugins')){
				return;
			}
			$w_install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=woocommerce'), 'install-plugin_woocommerce');
			$bwd_w_plugin_the_notice_is = '<p><b>'.esc_html__('For WooCommerce widget ', 'bwd-elementor-addons').'</b> '.esc_html__('requires WooCommerce plugin to be installed and activated.', 'bwd-elementor-addons').'</p>';
			$bwd_w_plugin_the_notice_is .= '<p><a href="'. esc_url($w_install_url) .'" class="button-primary">'.esc_html__('Install WooCommerce', 'bwd-elementor-addons').'</a></p>';
		}
		if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
			echo '<div class="notice notice-error is-dismissible"><p>' . wp_kses_post($bwd_w_plugin_the_notice_is) . '</p></div>';
		endif;
	}
}

function bwdeb_WooCommerce_addon_install(){
	$w_file_path = 'woocommerce/woocommerce.php';
	$w_installed_plugins = get_plugins();
	return isset($w_installed_plugins[$w_file_path]);
}

// For content switcher
function bwdeb_bwdcs_my_plugin() {
	return \Elementor\Plugin::instance();
}