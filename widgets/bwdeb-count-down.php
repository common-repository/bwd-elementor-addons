<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdcdCountDownWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDCDCountdown', 'bwd-elementor-addons' );
	}
	public function get_title() {
		return esc_html__( 'Count Down', 'bwd-elementor-addons' );
	}
	public function get_icon() {
		return 'icon-alarm-clock bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}
	
	public function get_keywords() {
		return [ 'count-down', 'bwd-count-down', 'count', 'number' ];
	}
	protected function register_controls() {
     // countdown layout control section start
		$this->start_controls_section(
			'bwdcd_count_down_layout_section',
			[
				'label' => esc_html__( 'Count Down Layout', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcd_count_down_choose',
			[
				'label' => esc_html__( 'Choose Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'style5' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'style6' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'style7' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'style8' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'style9' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'style10' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'style11' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'style12' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'style13' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
					'style14' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
					'style15' => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons' ),
					'style16' => esc_html__( 'Style 16 (PRO)', 'bwd-elementor-addons' ),
					'style17' => esc_html__( 'Style 17 (PRO)', 'bwd-elementor-addons' ),
					'style18' => esc_html__( 'Style 18 (PRO)', 'bwd-elementor-addons' ),
					'style19' => esc_html__( 'Style 19 (PRO)', 'bwd-elementor-addons' ),
					'style20' => esc_html__( 'Style 20 (PRO)', 'bwd-elementor-addons' ),
					'style21' => esc_html__( 'Style 21 (PRO)', 'bwd-elementor-addons' ),
					'style22' => esc_html__( 'Style 22 (PRO)', 'bwd-elementor-addons' ),
					'style23' => esc_html__( 'Style 23 (PRO)', 'bwd-elementor-addons' ),
					'style24' => esc_html__( 'Style 24 (PRO)', 'bwd-elementor-addons' ),
					'style25' => esc_html__( 'Style 25 (PRO)', 'bwd-elementor-addons' ),
					'style26' => esc_html__( 'Style 26 (PRO)', 'bwd-elementor-addons' ),
					'style27' => esc_html__( 'Style 27 (PRO)', 'bwd-elementor-addons' ),
					'style28' => esc_html__( 'Style 28 (PRO)', 'bwd-elementor-addons' ),
					'style29' => esc_html__( 'Style 29 (PRO)', 'bwd-elementor-addons' ),
					'style30' => esc_html__( 'Style 30 (PRO)', 'bwd-elementor-addons' ),
					'style31' => esc_html__( 'Style 31 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/count-down-addon-for-elementor/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();
		// count down content section ========================
		$this->start_controls_section(
			'bwdcd_count_down_content_section',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// expired date
		$this->add_control(
			'bwdcd_expired_date',
			[
				'label' => esc_html__( 'Expired Date', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default'=> esc_html__('2023-01-01 11:15'),
			]
		);

		//time unit reverse
		$this->add_control(
			'bwdcd_count_down_time_unit_direction',
			[
				'label' => esc_html__( 'Flip Time Unit Direction', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'on', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'off', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// title controls
		$this->add_control(
			'bwdcd_count_down_unit_title_contents',
			[
				'label' => esc_html__( 'Unit Titles', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdcd_count_down_day_title',
			[
				'label' => esc_html__( 'Day', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Day', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcd_count_down_hour_title',
			[
				'label' => esc_html__( 'Hour', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Hour', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcd_count_down_min_title',
			[
				'label' => esc_html__( 'Minutes', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Minutes', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcd_count_down_sec_title',
			[
				'label' => esc_html__( 'Seconds', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Seconds', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//what will happened after due time expired
		$this->add_control(
			'bwdcd_count_down_after_expired',
			[
				'label' => esc_html__( 'Actions After Expire', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'separator' => 'before',
				'label_block'=> true,
				'options' => [
					'redirect'  => esc_html__( 'Redirect', 'bwd-elementor-addons' ),
					'hide' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'show-message' => esc_html__('Show Message', 'bwd-elementor-addons' ),
				],

			]
		);
		//redirect control
		$this->add_control(
			'bwdcd_count_down_after_expired_url',
			[
				'label' => esc_html__( 'Redirect Url', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcd_count_down_after_expired' => 'redirect',
				],
			]
		);
		//Message control
		$this->add_control(
			'bwdcd_count_down_after_expired_msg',
			[
				'label' => esc_html__( 'Message', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcd_count_down_after_expired' => 'show-message',
				],
			]
		);
		$this->end_controls_section();
		// count down style section ========================
		$this->start_controls_section(
			'bwdcd_count_down_style_section',
			[
				'label' => esc_html__( 'Style', 'bwd-elementor-addons'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		//unit controls
		$this->add_control(
			'bwdcd_count_down_unit_style',
			[
				'label' => esc_html__( 'Time Units', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// unit typo 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcd_count_down_num_typography',
				'selector' => '{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num',
			]
		);
		// unit text color
		$this->add_control(
			'bwdcd_count_down_num_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-color-common' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-shape-common' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-shape-common::before,
					{{WRAPPER}} .bwdcd-shape-common::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		// unit bg color
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcd-count-down-num-bg',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num',
			]
		);
		// unit border color
		$this->add_control(
			'bwdcd_count_down_num_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcd_count_down_choose' => ['style30'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num' => 'border-color: {{VALUE}}'
				],
			]
		);
		//top line color
		$this->add_control(
			'bwdcd_count_down_num_flip_top_line_color',
			[
				'label' => esc_html__( 'Top Line Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcd_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-inner' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num::before,
					{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-num::after,
					{{WRAPPER}} .bwdcd-count-down-item .bwdcd-num-inner::before,
					{{WRAPPER}} .bwdcd-count-down-item .bwdcd-num-inner::after' => 'background-color: {{VALUE}}'
				],
			]
		);
		//bottom line color
		$this->add_control(
			'bwdcd_count_down_num_flip_bottom_line_color',
			[
				'label' => esc_html__( 'Bottom Line Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdcd_count_down_choose' => ['style1', 'style2'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-inner' => 'border-top-color: {{VALUE}}',
				],
			]
		);
		//unit width
		$this->add_responsive_control(
			'bwdcd_count_down_num_box_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%'],
				'range' => [
					'px' => [
						'min' => 70,
						'max' => 150,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					]
				],
				'default' => [
					'unit' => 'px',
					'size' => 110,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-count-down-item' => 'flex-basis: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit height
		$this->add_responsive_control(
			'bwdcd_count_down_num_box_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%'],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 50,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-height-control' => 'height: {{SIZE}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdcd_count_down_choose' => ['style1', 'style2'],
				],
			]
		);
		//padding
		$this->add_responsive_control(
			'bwdcd_count_down_num_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-count-down-item .bwdcd-count-down-num,
					{{WRAPPER}} .bwdcd-count-down-common .bwdcd-item-padding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		// margin
		$this->add_responsive_control(
			'bwdcd_count_down_item_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-common .bwdcd-count-down-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
			]
		);
		//unit bg shape color
		$this->add_control(
			'bwdcd_count_down_num_bg_shape_colors',
			[
				'label' => esc_html__( 'Unit BG Shape Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdcd_count_down_choose' => [ 'style25', 'style26','style27' ],
				],
			],
		);
		//unit shape 1
		$this->add_control(
			'bwdcd_count_down_num_bg_shape1',
			[
				'label' => esc_html__( 'Shape One Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-bg-shape::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcd_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit shape 2
		$this->add_control(
			'bwdcd_count_down_num_bg_shape2',
			[
				'label' => esc_html__( 'Shape Two Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-num-bg-shape::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcd_count_down_choose' => [ 'style25', 'style26','style27','style31' ],
				],
			]
		);
		//unit title styles
		$this->add_control(
			'bwdcd_count_down_unit_title_styles',
			[
				'label' => esc_html__( 'Unit Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//title typo  
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcd_count_down_title_typography',
				'selector' => '{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-title',
			]
		);
		// title text color
		$this->add_control(
			'bwdcd_count_down_title_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-title' => 'color: {{VALUE}}',
				],
			]
		);
		// title bg color
		$this->add_control(
			'bwdcd_count_down_title_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcd-count-down-num-common::after' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-item-common' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdcd-count-down-item .bwdcd-count-down-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings =$this->get_settings();
		$unit_dir_switch = $settings['bwdcd_count_down_time_unit_direction'];
		$provided_date = strtotime( $settings['bwdcd_expired_date']);
		$day_unit_title = $settings['bwdcd_count_down_day_title'];
		$hour_unit_title = $settings['bwdcd_count_down_hour_title'];
		$min_unit_title = $settings['bwdcd_count_down_min_title'];
		$sec_unit_title = $settings['bwdcd_count_down_sec_title'];
		//expired event
		$ex_show_msg = $settings['bwdcd_count_down_after_expired_msg'];
		$ex_show_url = $settings['bwdcd_count_down_after_expired_url']['url'];

		//store value what will happen after date expired 
		$after_ex_events = $settings['bwdcd_count_down_after_expired'];
		if($after_ex_events){
			foreach($after_ex_events as $after_ex_event_item){
				if($after_ex_event_item === 'hide'){
					$af_ex_event = 'hide';
				}else if($after_ex_event_item === 'show-message'){
					$af_ex_event = 'message';
				}else if($after_ex_event_item === 'redirect'){
					$af_ex_event = 'redirect';
				}
			}
		}

		//unit direction check
		if('yes' === $unit_dir_switch){
			$unit_dir = 'bwdcd-unit-flip-rev';
		}else{
			$unit_dir = 'bwdcd-unit-flip-row';
		}
		//================== count down rendering start here=====================
		if('style1' == $settings['bwdcd_count_down_choose'] || 'style2' == $settings['bwdcd_count_down_choose']){
		if('style1' === $settings['bwdcd_count_down_choose']){
				?>
			<div class="bwdcd-count-down-1 bwdcd-count-down-common <?php echo esc_attr($unit_dir)?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr($ex_show_url) ;?>"
				value="<?php echo esc_attr($af_ex_event) ;?>"
				/>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng  bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($day_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($hour_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($sec_unit_title)?></div>
				</div>

			</div>
				<?php
		}else if('style2' === $settings['bwdcd_count_down_choose']){
				?>
			<!-- count down 2 start -->
			<div class="bwdcd-count-down-2 bwdcd-count-down-common <?php echo  esc_attr($unit_dir )?>">
				<input class="bwdcd-expired-time" type="text" hidden value="<?php echo esc_attr($provided_date) ;?>">
				<input type="text" hidden class="bwdcd-ex-event"
				data-ex-msg="<?php echo esc_attr($ex_show_msg) ;?>" 
				data-ex-url="<?php echo esc_attr($ex_show_url) ;?>"
				value="<?php echo esc_attr($af_ex_event) ;?>"
				/>
	
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-day bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($day_unit_title)?></div>
				</div>
				
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-hour bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($hour_unit_title)?></div>
				</div>

				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-min bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($min_unit_title)?></div>
				</div>
				<div class="bwdcd-count-down-item">
					<div class="bwdcd-count-down-num bwdcd-sec bwdcd-shape-common">
						<div class="bwdcd-num-before bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-top-num bwdcd-f-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-bottom-num bwdcd-s-cng bwdcd-height-control bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
						<div class="bwdcd-num-after bwdcd-num-inner"><?php echo esc_html__('50', 'bwd-elementor-addons'); ?></div>
					</div>
					<div class="bwdcd-count-down-title"><?php echo esc_html($sec_unit_title)?></div>
				</div>

			</div>
			<!-- count down 2 end -->
			<!-- ============================================= -->
				<?php
			}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}
