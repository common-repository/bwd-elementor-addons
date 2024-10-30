<?php
/**
 * 
 * @admin ~~// this is the dashboard extrasettings tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
// $screen = get_current_screen();
// $supportCheck = $screen && $screen->id != 'dashboard_page_bwdes_email_subscription'?'bwd-admin-setting-tab':'';
// echo '<div id="extrasettings" class="'.$supportCheck.'">';
    echo '<div id="themebuilder" class="bwd-admin-setting-tab">';
		echo '<div class="bwd-extrasettings-container bwd-grid">';
			foreach($getBuilder as $keys=>$getExtra):
			echo '<div class="bwd-style-int bwd-col-xxl-4 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6">';
				echo '<div class="bwd-extrasettings-wrap">';
					$freeProText = $generalWidget['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					echo '<div class="bwd-widget-pro-badge">'.$freeProText.'</div>';
					echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).$getExtra['logo']).'" alt="">';
					echo '<h3>'.$getExtra['name'].'</h3>';
					echo '<span>'.$getExtra['description'].'</span>';
					echo '<div class="bwd-extrasettings-action-switch">';
						echo '<a href="'.$getExtra['demo'].'" target="_blank"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/desktop.svg').'" alt=""></a>';
						echo '<a href="'.$getExtra['video'].'" target="_blank"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
						echo '<div class="bwd-extrasettings-switcher">';
							echo '<label class="bwd-extrasettings-switch">';
								$inputChecked = get_option($getExtra['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getExtra['free_pro']==true?'checkbox':$checkbx;
								echo '<input type="'.$isPro.'" name="'.$getExtra['id'].'" id="'.$getExtra['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getExtra['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
			endforeach;
		echo '</div>';
	echo '</div>';