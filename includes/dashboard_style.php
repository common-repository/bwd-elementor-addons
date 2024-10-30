<?php
if ( ! defined( 'ABSPATH' ) ) exit;

include 'tabs/imp/categories.php';
$generalTitles = ['Changelog','Widgets Bar','What\'s New','New Template','Request For Review','Request A Feature','System Requirement','Documentation','Show your Love', 'Get Support'];
echo '<div class="bwd-dashboard-template-container">';
	echo '<div class="bwd-title-banner bwd-grid">';
		echo '<div class="bwd-col-xxl-7 bwd-col-xl-7">';
			echo '<div class="bwd-logo-title-banner">';
				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/images/logo.png').'" alt="BWD Logo">';
				echo '<h1>'.esc_html__('BWD Elementor Addons Settings', BWDEB_PLUGIN_TD).'</h1>';
			echo '</div>';
		echo '</div>';
		echo '<div class="bwd-col-xxl-5 bwd-col-xl-5">';
			echo '<div class="bwd-save-settings-button">';
			echo '<div class="save-toast-message"></div>';
				if(class_exists( 'ProbwdelementorBundle' )):
					echo '<a class="bwd-save-button" href="'.esc_url(admin_url( 'admin.php?page=bwdproeb-license-settings' )).'">';
						echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/images/key.svg').'" style="fill: white;" alt="'.esc_attr('Activate License').'">';
						echo '<span>'.esc_html__('Activate License', BWDEB_PLUGIN_TD).'</span>';
					echo '</a>';
				else:
					echo '<a class="bwd-save-button" href="https://bestwpdeveloper.com/pricing-plan" target="_blank">';
						echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/images/premium.svg').'" alt="'.esc_attr__('Get Pro', BWDEB_PLUGIN_TD).'">';
						echo '<span>'.esc_html__('Get Pro', BWDEB_PLUGIN_TD).'</span>';
					echo '</a>';
				endif;
				echo '<button class="bwd-save-button" id="bwdtsk-save-settings">'.esc_html__('Save Changes', BWDEB_PLUGIN_TD).'</button>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
	$bwdTabs = [
		[
			'id'=>'general',
			'name'=>esc_html__('Dashboard', BWDEB_PLUGIN_TD)
		],
		[
			'id'=>'widgets',
			'name'=>esc_html__('Core Widgets', BWDEB_PLUGIN_TD)
		],
		[
			'id'=>'extension',
			'name'=>esc_html__('Extensions', BWDEB_PLUGIN_TD)
		],
		[
			'id'=>'integrations',
			'name'=>esc_html__('Integrations', BWDEB_PLUGIN_TD)
		],
		[
			'id'=>'extrasettings',
			'name'=>esc_html__('Settings', BWDEB_PLUGIN_TD)
		],
		[
			'id'=>'themebuilder',
			'name'=>esc_html__('Theme Builder', BWDEB_PLUGIN_TD)
		],
		[
			'id'=>'license',
			'name'=>esc_html__('License', BWDEB_PLUGIN_TD)
		]
	];
	echo '<div class="bwd-main-tab">';
		echo '<ul class="bwd-tab-menu">';
		foreach($bwdTabs as $tabID=>$getTAb):
			echo '<li class="bwd-tab-list">';
				echo '<a href="#'.$getTAb['id'].'">'.$getTAb['name'].'</a>';
			echo '</li>'; 
		endforeach;
		echo '</ul>';
	echo '</div>';
	include 'tabs/imp/arrays.php';
	include 'tabs/imp/utilized.php';
	echo '<div class="bwd-admin-setting-tabs">';
		foreach($bwdTabs as $path=>$getPath):
		include 'tabs/'.$getPath['id'].'.php';
		endforeach;
	echo '</div>';

	echo '<div class="bwd-pro-popup-container">';
		echo '<div class="bwd-pro-popup-wrapper">';
			include 'tabs/imp/pro-popup-box.php';
		echo '</div>';
	echo '</div>';


echo '</div>';
