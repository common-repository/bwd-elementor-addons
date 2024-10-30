<?php
/**
 * 
 * @admin ~~// this is the dashboard license tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
$screen = get_current_screen();
$supportCheck = $screen && $screen->id != 'dashboard_page_bwdes_email_subscription'?'bwd-admin-setting-tab':'';
echo '<div id="license" class="'.$supportCheck.'">';
	if($screen->id != 'dashboard_page_bwdes_email_subscription'){
		if(!class_exists( 'ProbwdelementorBundle' )){
			echo '<div class="bwd-license-container">';
				echo '<div class="bwd-license-content">';
					echo '<h3>'.esc_html__('Compare with Free vs Pro',BWDEB_PLUGIN_TD).'</h3>';
					echo '<span>'.esc_html__('You can explore the feature that we provied with fun and have their own functions each feature.',BWDEB_PLUGIN_TD).'</span>';
				echo '</div>';
				echo '<div class="bwd-license-table-area">';
					echo '<table>';
						echo '<tbody>';
							echo '<tr>';
								echo '<td class="bwd-table-title"></td>';
								echo '<td class="bwd-head-title"><h4>'.esc_html__('Free',BWDEB_PLUGIN_TD).'</h4></td>';
								echo '<td class="bwd-head-title"><h4>'.esc_html__('Pro',BWDEB_PLUGIN_TD).'</h4></td>';
							echo '</tr>';
							foreach($getLicense as $license=>$getL):
							echo '<tr>';
								echo '<td class="bwd-table-title"><span>'.$getL['name'].'</span></td>';
								if($getL['free']=='yes'){
									echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/cross.svg').'" alt="Img"></td>';
								} elseif($getL['free']=='no'){
									echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/right.svg').'" alt="Img"></td>';
								}else{
									echo '<td><h4>'.$getL['free'].'</h4></td>';
								}
								if($getL['pro']=='yes'){
									echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/right.svg').'" alt="Img"></td>';
								} elseif($getL['pro']=='no'){
									echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/cross.svg').'" alt="Img"></td>';
								}else{
									echo '<td><h4>'.$getL['pro'].'</h4></td>';
								}
							echo '</tr>';
							endforeach;
						echo '</tbody>';
					echo '</table>';
				echo '</div>';
				echo '<div class="bwd-license-buttton">';
					echo '<a href="https://bestwpdeveloper.com/pricing/">'.esc_html__('Purchase Now',BWDEB_PLUGIN_TD).'</a>';
				echo '</div>';
			echo '</div>';
		}else {
		echo '<div class="bwd-license-second-container">';
			echo '<div class="bwd-grid">';
				echo '<div class="bwd-col-xxl-7 bwd-col-xl-7">';
					echo '<div class="bwd-license-second-content">';
						echo '<h1>Professional Licensing Services</h1>';
						echo '<p>Professional Licensing Services refer to administrative and management services that assist professionals in acquiring, maintaining, and renewing their licenses to practice.</p>';
						echo '<a href="' . admin_url( 'admin.php?page=bwdproeb-license-settings' ) . '" target="_blank" class="bwd-license-second-btn">Go License</a>';
					echo '</div>';
				echo '</div>';
				echo '<div class="bwd-col-xxl-5 bwd-col-xl-5">';
					echo '<div class="bwd-license-second-content-img">';
						echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/lic.svg').'" alt="'.esc_attr('pro').'">';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
		}
	}
echo '</div>';