<?php
/**
 * 
 * @admin ~~// this is the dashboard integrations tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;

echo '<div id="integrations" class="bwd-admin-setting-tab">';
	echo '<div class="bwd-integrations-container bwd-grid">';
		foreach($inteGrations as $key=>$getInfo):
		echo '<div class="bwd-style-int bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6">';
			echo '<div class="bwd-integrations-wrap">';
				echo '<img src="'.$getInfo['img'].'" alt="">';
				echo '<h3>'.$getInfo['name'].'</h3>';
				echo '<span>'.$getInfo['description'].'</span>';
				echo '<div class="bwd-integrations-button">';
					echo '<a href="'.$getInfo['url'].'" target="_blank">'.esc_html__('Install Here', BWDEB_PLUGIN_TD).'</a>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
			endforeach;
	echo '</div>';
echo '</div>';