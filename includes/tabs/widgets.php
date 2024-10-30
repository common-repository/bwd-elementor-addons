<?php
/**
 * 
 * @admin ~~// this is the dashboard widgets tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
$screen = get_current_screen();
echo '<div id="widgets" class="bwd-admin-setting-tab">';
	echo '<div class="bwd-widgets-actions-container">';
		echo '<div class="bwd-widgets-en-di-button">';
			echo '<button class="bwd-enable-all bwd-widget-enable-all">'.esc_html__('Enable All',BWDEB_PLUGIN_TD).'</button>';
			echo '<button class="bwd-disable-all bwd-widget-disable-all">'.esc_html__('Disable All',BWDEB_PLUGIN_TD).'</button>';
		echo '</div>';
		echo '<div class="bwd-widgets-filter-button-wrap">';
			echo '<div class="bwd-widgets-filter-by">';
				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/Filter.svg').'" alt="">';
				echo '<span>'.esc_html__('Filter By',BWDEB_PLUGIN_TD).'</span>';
			echo '</div>';
			echo '<button class="bwd-all-widgets-button">'.esc_html__('all',BWDEB_PLUGIN_TD).'</button>';
			echo '<button class="bwd-free-widgets-button">'.esc_html__('free',BWDEB_PLUGIN_TD).'</button>';
			echo '<button class="bwd-pro-widgets-button">'.esc_html__('Pro',BWDEB_PLUGIN_TD).'</button>';
		echo '</div>';
		echo '<div class="bwd-widgets-use-unuse-button">';
			echo '<button class="bwd-widgets-use-button">'.esc_html__('used',BWDEB_PLUGIN_TD).'<span>'. $_SESSION['used_widget_count'] .'</span></button>';
			echo '<button class="bwd-widgets-unuse-button">'.esc_html__('unused',BWDEB_PLUGIN_TD).'<span>'. $_SESSION['unused_widget_count'] .'</span></button>';
			if($screen && $screen->id === 'dashboard_page_bwdes_email_subscription'){
				echo '<div class="bwd-save-settings-button">';
					echo '<div class="save-toast-message"></div>';
					echo '<button class="bwd-save-button" id="bwdtsk-save-settings">'.esc_html__('Save Changes', BWDEB_PLUGIN_TD).'</button>';
				echo '</div>';
			}
			echo '<div class="bwd-widgets-filter-search">';
				echo '<input type="search" name="" id="search-input" placeholder="Search Widgets">';
				echo '<img class="bwd-widgets-filter-search-icon" src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/search.svg').'" alt="Search icon">';
			echo '</div>';
		echo '</div>';
	echo '</div>';
	echo '<button class="bwd-right-btn"><span>Categories</span></button>';
	echo '<div class="bwd-widget-cats">
		<h1 class="bwd-categories">Categories</h1>
		<a href="#bwd-general" class="scroll-link">General Widgets</a>
		<a href="#bwd-cv" class="scroll-link">CV Builder</a>
		<a href="#bwd-hero" class="scroll-link">Hero Sections</a>
		<a href="#bwd-blog" class="scroll-link">Blog Widgets</a>
		<a href="#bwd-wooc" class="scroll-link">WooCommerce Widgets</a>
		<a href="#bwd-single-product" class="scroll-link">Product Single</a>
		<a href="#bwd-parchive" class="scroll-link">Product Archive</a>
		<a href="#bwd-cart" class="scroll-link">Cart</a>
		<a href="#bwd-checkout" class="scroll-link">Checkout</a>
		<a href="#bwd-hf" class="scroll-link">Header & Footer</a>
		<a href="#bwd-post-single" class="scroll-link">Post Single</a>
		<a href="#bwd-post-archive" class="scroll-link">Post Archive</a>
		<a href="#bwd-thankyou" class="scroll-link">Thankyou</a>
		<a href="#bwd-myaccount" class="scroll-link">My Account</a>
	</div>';
	echo '<div class="bwd-widgets-area-container">';
		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[0];
			echo '<div class="bwd-widgets-item-container bwd-grid">';

			foreach($generalWidgets as $key=>$generalWidget):
				echo '<div class="bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $generalWidget['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $generalWidget['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $generalWidget['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$generalWidget['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
								// $zero_echoed = false;
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$generalWidget['id']){
											echo $count;
										// } elseif($keyNew!=$generalWidget['id']){
										// 	if ($count == 0 && !$zero_echoed) {
										// 		echo 0;
										// 		$zero_echoed = true;
										// 	}
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$generalWidget['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$generalWidget['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$generalWidget['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($generalWidget['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $generalWidget['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$generalWidget['id'].'" id="'.$generalWidget['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $generalWidget['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			
		echo '</div>';
	echo '</div>';
		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[1];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($cvWidgets as $cvWidget=>$getCV):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getCV['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getCV['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getCV['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getCV['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getCV['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getCV['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getCV['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getCV['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getCV['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getCV['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getCV['id'].'" id="'.$getCV['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getCV['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';
		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[2];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			$i = 1;
			for ($i; $i <= 13; $i++) :
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
						echo '<div class="bwd-widget-pro-badge">'.esc_html__('Pro',BWDEB_PLUGIN_TD).'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.esc_html__('Hero Style '.$i, BWDEB_PLUGIN_TD).'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew=='bwdeb-check-hero-widget'.$i){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="https://bwdelementoraddons.com/hero-section/"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="https://www.youtube.com/@bestwpdeveloper"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="https://bwdelementoraddons.com/documentation"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option('bwdeb-check-hero-widget'.$i, 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								echo '<input class="bwd-widinput-switch" type="'.$checkbx.'" name="bwdeb-check-hero-widget'.$i.'" id="bwdeb-check-hero-widget'.$i.'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								echo '<span class="bwd-switch-box '.$itsProNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endfor;
			echo '</div>';
		echo '</div>';
		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[3];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($postWidgets as $postWidget=>$getPost):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getPost['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getPost['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getPost['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getPost['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getPost['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getPost['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getPost['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getPost['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getPost['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getPost['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getPost['id'].'" id="'.$getPost['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getPost['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';
		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[4];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($productWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[6];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($productSingleWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[14];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($productArchiveWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[10];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($cartWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[11];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($checkoutWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[7];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($headerFooterWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[8];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($postSingleWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[9];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($postArchiveWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[12];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($thankyouWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

		echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
			echo $all_T[13];
			echo '<div class="bwd-widgets-item-container bwd-grid">';
			foreach($myaccountWidgets as $productWidget=>$getProduct):
				echo '<div class="bwd-sk-cmn bwd-sk-cmn bwd-col-xxl-3 bwd-col-xl-4 bwd-col-lg-6 bwd-col-md-6 col-search">';
					echo '<div class="bwd-widgets-item-wrap">';
					echo $getProduct['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
					$freeProText = $getProduct['free_pro']==true?esc_html__('Free // Pro',BWDEB_PLUGIN_TD):esc_html__('Pro',BWDEB_PLUGIN_TD);
					$ifPro = $getProduct['free_pro']==true?esc_attr('free-'):'';
						echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
						echo '<div class="bwd-widgets-title-icon-wrap">';
							echo '<div class="bwd-widgets-title">';
								echo '<h6>'.$getProduct['name'].'</h6>';
								echo '<span>'.esc_html__('Total used - ',BWDEB_PLUGIN_TD);
									foreach ($widgetTypes as $keyNew=>$widget_type) {
										$count = isset($widget_counts[$widget_type]) ? $widget_counts[$widget_type] : 0;
										if($keyNew==$getProduct['id']){
											echo $count;
										}
									}
								echo '</span>';
							echo '</div>';
							echo '<div class="bwd-widgets-info-icons">';
								echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
								echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getProduct['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getProduct['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
								echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getProduct['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
							echo '</div>';
						echo '</div>';
						echo '<div class="bwd-widgets-switcher">';
							echo '<label class="bwd-widget-switch">';
								$inputChecked = get_option($getProduct['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getProduct['free_pro']==true?'checkbox':$checkbx;
								echo '<input class="bwd-widinput-switch" type="'.$isPro.'" name="'.$getProduct['id'].'" id="'.$getProduct['id'].'" '.$inputChecked.'>';
								$itsProNote = !class_exists( 'ProbwdelementorBundle' )?'bwd-pro-popup-button':'';
								$showNote = $getProduct['free_pro']!=true?$itsProNote:'';
								echo '<span class="bwd-switch-box '.$showNote.'"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div>';
		echo '</div>';

	echo '</div>';
echo '</div>';
