<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="bwdwi-count-down-1 bwdwi-count-down-common <?php echo esc_attr($unit_dir)?>">
	<input class="bwdwi-expired-time" type="text" hidden value="<?php echo esc_attr($provided_date) ;?>">
	<input type="text" hidden class="bwdwi-ex-event"
		data-ex-msg="<?php echo esc_attr($ex_show_msg) ;?>" 
		data-ex-url="<?php echo esc_attr($ex_show_url) ;?>"
		value="<?php echo esc_attr($af_ex_event) ;?>"
	/>
		<div class="bwdwi-count-down-item">
			<div class="bwdwi-count-down-num bwdwi-day bwdwi-shape-common">
				<div class="bwdwi-num-before bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-top-num bwdwi-f-cng  bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-bottom-num bwdwi-s-cng bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-num-after bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
			</div>
			<div class="bwdwi-count-down-title"><?php echo esc_html($day_unit_title)?></div>
		</div>
		<div class="bwdwi-count-down-item">
		<div class="bwdwi-count-down-num bwdwi-hour bwdwi-shape-common">
			<div class="bwdwi-num-before bwdwi-num-inner"><?php echo esc_html__('50'); ?></div>
				<div class="bwdwi-top-num bwdwi-f-cng bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					<div class="bwdwi-bottom-num bwdwi-s-cng bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					<div class="bwdwi-num-after bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				</div>
			<div class="bwdwi-count-down-title"><?php echo esc_html($hour_unit_title)?></div>
		</div>
		<div class="bwdwi-count-down-item">
			<div class="bwdwi-count-down-num bwdwi-min bwdwi-shape-common">
				<div class="bwdwi-num-before bwdwi-num-inner"><?php echo esc_html__('50'); ?></div>
				<div class="bwdwi-top-num bwdwi-f-cng bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-bottom-num bwdwi-s-cng bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-num-after bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
			</div>
				<div class="bwdwi-count-down-title"><?php echo esc_html($min_unit_title)?></div>
		</div>
		<div class="bwdwi-count-down-item">
		<div class="bwdwi-count-down-num bwdwi-sec bwdwi-shape-common">
			<div class="bwdwi-num-before bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-top-num bwdwi-f-cng bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-bottom-num bwdwi-s-cng bwdwi-height-control bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
				<div class="bwdwi-num-after bwdwi-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
			</div>
			<div class="bwdwi-count-down-title"><?php echo esc_html($sec_unit_title)?></div>
		</div>
	</div>