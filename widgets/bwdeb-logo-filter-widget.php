<?php

namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDLCLogoFilter extends Widget_Base {

	public function get_name() {
		return 'Bwd_logo_Filter';
	}

	public function get_title() {
		return esc_html__( 'Logo Filter', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle logo-filter';
	}
	
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'filter ', 'logo filter','bwd-elementor-addons','filter'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_filter_content_basic_settings',
			[
				'label' => esc_html__( 'Presets', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_style_selection',
			[
				'label' => esc_html__( 'Designs', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '17',
				'options' => [
					'17' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'19' => esc_html__( 'Style 2 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/brand-logo-showcase" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdlc_filter_filter_responsive_device',
			[
				'label' => esc_html__( 'Columns', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

		// desktop device column
		$this->add_control(
			'bwdlc_filter_filter_desktop',
			[
				'label' => esc_html__( 'Desktop', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'6'  => esc_html__( 'Column 2', 'bwd-elementor-addons' ),
					'4'  => esc_html__( 'Column 3', 'bwd-elementor-addons' ),
					'3'  => esc_html__( 'Column 4', 'bwd-elementor-addons' ),
					'2'  => esc_html__( 'Column 6', 'bwd-elementor-addons' ),
				],
			]
		);
		// tablet device column
		$this->add_control(
			'bwdlc_filter_filter_tablet',
			[
				'label' => esc_html__( 'Tablet', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'6'  => esc_html__( 'Column 2', 'bwd-elementor-addons' ),
					'4'  => esc_html__( 'Column 3', 'bwd-elementor-addons' ),
					'3'  => esc_html__( 'Column 4', 'bwd-elementor-addons' ),
					'2'  => esc_html__( 'Column 6', 'bwd-elementor-addons' ),
				],
			]
		);
		// mobile device column
		$this->add_control(
			'bwdlc_filter_filter_mobile',
			[
				'label' => esc_html__( 'Mobile', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '12',
				'options' => [
					'12'  => esc_html__( 'Column 1', 'bwd-elementor-addons' ),
					'6'  => esc_html__( 'Column 2', 'bwd-elementor-addons' ),
					'4'  => esc_html__( 'Column 3', 'bwd-elementor-addons' ),
					'3'  => esc_html__( 'Column 4', 'bwd-elementor-addons' ),
					'2'  => esc_html__( 'Column 6', 'bwd-elementor-addons' ),
				],
			]
		);


		$this->end_popover();
		
		$this->add_control(
			'bwdlc_logo_filter_all_enable_filter',
			[
				'label' => __( 'Show Filter Menu', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'bwd-elementor-addons' ),
				'label_off' => __( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		// filter content section
		$this->start_controls_section(
			'bwdlc_logo_filter_content_section',
			[
				'label' => esc_html__( 'Filter Menu', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdlc_logo_filter_all_enable_filter' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item',
			[
				'label' => esc_html__( 'All Item', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('All', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdlc_logo_filter_item_name',
			[
				'label' => esc_html__( 'Item Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Development', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'bwdlc_logo_filter_item_id',
			[
				'label' => esc_html__( 'Item ID', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item1', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'bwdlc_filter_btn_menu',
			[
				'label' => esc_html__( 'Logo Filter Items', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Marketing', 'bwd-elementor-addons' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item1', 'bwd-elementor-addons'),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Delivery Partner
						', 'bwd-elementor-addons' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item2', 'bwd-elementor-addons'),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Financial ', 'bwd-elementor-addons' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item3', 'bwd-elementor-addons'),
					],
					[
						'bwdlc_logo_filter_item_name' => esc_html__( 'Corporate
						', 'bwd-elementor-addons' ),
						'bwdlc_logo_filter_item_id' =>esc_html__('item4', 'bwd-elementor-addons'),
					],
				],
				'title_field' => '{{{ bwdlc_logo_filter_item_name }}}',
			]
		);
		$this->end_controls_section();

		// filter img section
		$this->start_controls_section(
			'bwdlc_logo_filter_content_section_image',
			[
				'label' => esc_html__( 'Filterable Logo', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$image_repeater = new \Elementor\Repeater();

		$image_repeater->add_control(
			'bwdlc_logo_filter_img_id',
			[
				'label' => esc_html__( 'Item ID', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item1', 'bwd-elementor-addons'),
				'description' => esc_html__('Copy from Filterable Item', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		// logo img
		$image_repeater->add_control(
			'bwdlc_filter_logo_img',
			[
				'label' => esc_html__( 'Choose Logo', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		// brand name
		$image_repeater->add_control(
			'bwdlc_logo_filter_brand_name',
			[
				'label' => esc_html__( 'Tooltip Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$image_repeater->add_control(
			'bwdlc_logo_filter_logo_url',
			[
				'label' => esc_html__( 'Brand Url', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		// logo size
		$image_repeater->add_responsive_control(
			'bwdlc_filter_logo_height',
			[
				'label' => esc_html__( 'Logo Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-brand-box-part .bwdlc-logo-img a img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);


		//tooltip-style
		$image_repeater->add_control(
			'bwdlc-tooltip-filter-switch',
			[
				'label' => esc_html__( 'Tooltip Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
				],
			]
		);
		$image_repeater->add_control(
			'bwdlc-tooltip_filter_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_control(
			'bwdlc-tooltip_filter_bgcolor',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc-tooltip_filter_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc-tooltip_filter-border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_responsive_control(
			'bwdlc_tooltip_filter_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_responsive_control(
			'bwdlc_tooltipbox_filter_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'min-width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_responsive_control(
			'bwdlc_tooltip_filter_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);
		$image_repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_tooltip_filter_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_filter_brand_name!' => '',
					'bwdlc-tooltip-filter-switch' => 'yes',
				],
			]
		);


		$this->add_control(
			'bwdlc_logo_logo_img',
			[
				'type' => Controls_Manager::REPEATER,
				'fields' => $image_repeater->get_controls(),
				'default' => [
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item1', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item2', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item1', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],					
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item4', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item5', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item3', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item6', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],
					[
						'bwdlc_filter_logo_img'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_filter_img_id' =>esc_html__('item7', 'bwd-elementor-addons'),
						'bwdlc_logo_filter_brand_name' => esc_html__('Logo', 'bwd-elementor-addons'),
					],
				],
			]
		);


		$this->add_control(
			'bwdlc-filter-hrr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//hover amination
		$this->add_control(
			'bwdlc_filterhover_animations',
			[
				'label'     => esc_html__('Hover Animation', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'none' => esc_html__('None', 'bwd-elementor-addons'),
					'bounce' => esc_html__('Bounce', 'bwd-elementor-addons'),
					'bounceIn' => esc_html__('BounceIn', 'bwd-elementor-addons'),
					'bounceOut' => esc_html__('BounceOut', 'bwd-elementor-addons'),
					'bounceInUp' => esc_html__('bounceInUp', 'bwd-elementor-addons'),
					'bounceInDown' => esc_html__('bounceInDown', 'bwd-elementor-addons'),
					'bounceInLeft' => esc_html__('bounceInLeft', 'bwd-elementor-addons'),
					'bounceInRight' => esc_html__('bounceInRight', 'bwd-elementor-addons'),
					'backInUp' => esc_html__('backInUp', 'bwd-elementor-addons'),
					'backInDown' => esc_html__('backInDown', 'bwd-elementor-addons'),
					'backInLeft' => esc_html__('backInLeft', 'bwd-elementor-addons'),
					'backInRight' => esc_html__('backInRight', 'bwd-elementor-addons'),
					'flip' => esc_html__('Flip', 'bwd-elementor-addons'),
					'flipInX' => esc_html__('FlipInX', 'bwd-elementor-addons'),
					'flipInY' => esc_html__('FlipInY', 'bwd-elementor-addons'),
					'fadeIn' => esc_html__('fadeIn', 'bwd-elementor-addons'),
					'fadeOut' => esc_html__('FadeOut', 'bwd-elementor-addons'),
					'fadeInUp' => esc_html__('fadeInUp', 'bwd-elementor-addons'),
					'fadeInDown' => esc_html__('fadeInDown', 'bwd-elementor-addons'),
					'fadeInUpBig' => esc_html__('fadeInUpBig', 'bwd-elementor-addons'),
					'fadeInLeft' => esc_html__('fadeInLeft', 'bwd-elementor-addons'),
					'fadeInRight' => esc_html__('fadeInRight', 'bwd-elementor-addons'),
					'fadeInRightBig' => esc_html__('fadeInRightBig', 'bwd-elementor-addons'),
					'fadeInBottomRight' => esc_html__('fadeInBottomRight', 'bwd-elementor-addons'),
					'fadeInBottomLeft' => esc_html__('fadeInBottomLeft', 'bwd-elementor-addons'),
					'fadeInTopRight' => esc_html__('fadeInTopRight', 'bwd-elementor-addons'),
					'fadeInTopLeft' => esc_html__('fadeInTopLeft', 'bwd-elementor-addons'),
					'rotateIn' => esc_html__('RotateIn', 'bwd-elementor-addons'),
					'rotateOut' => esc_html__('RotateOut', 'bwd-elementor-addons'),
					'rotateInUpRight' => esc_html__('rotateInUpRight', 'bwd-elementor-addons'),
					'rotateInUpLeft' => esc_html__('rotateInUpLeft', 'bwd-elementor-addons'),
					'rotateInDownRight' => esc_html__('rotateInDownRight', 'bwd-elementor-addons'),
					'rotateInDownLeft' => esc_html__('rotateInDownLeft', 'bwd-elementor-addons'),
					'hinge' => esc_html__('Hinge', 'bwd-elementor-addons'),
					'zoomIn' => esc_html__('ZoomIn', 'bwd-elementor-addons'),
					'zoomOut' => esc_html__('ZoomOut', 'bwd-elementor-addons'),
					'zoomInUp' => esc_html__('zoomInUp', 'bwd-elementor-addons'),
					'zoomInRight' => esc_html__('zoomInRight', 'bwd-elementor-addons'),
					'zoomInLeft' => esc_html__('zoomInLeft', 'bwd-elementor-addons'),
					'zoomInDown' => esc_html__('zoomInDown', 'bwd-elementor-addons'),
					'slideInUp' => esc_html__('SlideInUp', 'bwd-elementor-addons'),
					'slideInRight' => esc_html__('slideInRight', 'bwd-elementor-addons'),
					'slideInLeft' => esc_html__('slideInLeft', 'bwd-elementor-addons'),
					'slideInDown' => esc_html__('slideInDown', 'bwd-elementor-addons'),
					'flash' => esc_html__('Flash', 'bwd-elementor-addons'),
					'rollIn' => esc_html__('rollIn', 'bwd-elementor-addons'),
					'pulse' => esc_html__('Pulse', 'bwd-elementor-addons'),
					'rubberBand' => esc_html__('RubberBand', 'bwd-elementor-addons'),
					'shakeX' => esc_html__('ShakeX', 'bwd-elementor-addons'),
					'shakeY' => esc_html__('ShakeY', 'bwd-elementor-addons'),
					'headShake' => esc_html__('HeadShake', 'bwd-elementor-addons'),
					'swing' => esc_html__('Swing', 'bwd-elementor-addons'),
					'tada' => esc_html__('Tada', 'bwd-elementor-addons'),
					'wobble' => esc_html__('Wobble', 'bwd-elementor-addons'),
					'jello' => esc_html__('Jello', 'bwd-elementor-addons'),
					'heartBeat' => esc_html__('HeartBeat', 'bwd-elementor-addons'),
					'jackInTheBox' => esc_html__('JackInTheBox', 'bwd-elementor-addons'),
					'lightSpeedInLeft' => esc_html__('lightSpeedInLeft', 'bwd-elementor-addons'),
					'lightSpeedInRight' => esc_html__('lightSpeedInRight', 'bwd-elementor-addons'),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part:hover img' => 'animation: {{VALUE}};',
				],
				'default' => 'fadeInUp',
			]
		);

		//hover_animation_speed
		$this->add_control(
			'bwdlc_filterhover_animation_speed',
			[
				'label' => __('Animation Speed (ms)', 'bwd-elementor-addons'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['ms'],
				'range' => [
					'ms' => [
						'min' => 100,
						'max' => 5000,
						'step' => 50,
					],
				],
				'default' => [
					'unit' => 'ms',
					'size' => 1250,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part img' => 'animation-duration: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->end_controls_section();


		// style controls section
		$this->start_controls_section(
			'bwdlc_logo_item_style_section',
			[
				'label' => esc_html__( 'Logo Menu', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdlc_logo_filter_all_item_title_style_tabs'
		);

		// normal style  tab
		$this->start_controls_tab(
			'bwdlc_logo_filter_all_item_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_typography',
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_quote_active_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_right_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_div_active_background',
			[
				'label' => esc_html__( 'Active Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_div_hoveraaaa_sssssbackground',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic' ],
				'exclude'=>['image'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn',
			]
		);
		// margin
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// padding
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// border redoius
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		// hover tab
		$this->start_controls_tab(
			'bwdlc_logo_filter_all_item_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_hover_typography',
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn:hover',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_active_right_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_item_div_hover_active_background',
			[
				'label' => esc_html__( 'Active Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu-btn.active:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_all_item_div_hoveraaaa_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic' ],
				'exclude'=>['image'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-menu-btn:hover',
			]
		);
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_item_hover_border_radius',
            [
                'label' => esc_html__('Hover Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-menu-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end

		$this->add_control(
			'bwdlc_logo_filter_all_items_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdlc_logo_filter_all_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,

				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-menu' => 'justify-content: {{VALUE}} !important',
				],

			]
		);
		$this->end_controls_section();

		// filter logo style
		$this->start_controls_section(
			'bwdlc_logo_info_style_section',
			[
				'label' => esc_html__( 'Filter Logo', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//filter logo alignment========================
		$this->add_control(
			'bwdlc_logo_filter_logo_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,

				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid' => 'justify-content: {{VALUE}} !important',
				],
			]
		);
		// logo height
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_height',
			[
				'label' => esc_html__( 'Logo Box Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 170,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part ' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// logo x gap
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_x_gap',
			[
				'label' => esc_html__( 'Horizontally Gap (px)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid > * ' => 'padding-right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// logo y gap
		$this->add_responsive_control(
			'bwdlc_logo_filter_logo_y_gap',
			[
				'label' => esc_html__( 'Vertically Gap (px)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid > * ' => 'padding-bottom: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		// background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_bg',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		// border -radius
		$this->add_responsive_control(
            'bwdlc_logo_filter_all_info_u_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_filter_logo_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);
		$this->add_control(
			'bwdlc_logo_filter_all_info_u_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_filter_style_selection'];
		$filter_btn_menu = $settings['bwdlc_filter_btn_menu'];
		$filter_img_menu = $settings['bwdlc_logo_logo_img'];
		$desktop = $settings['bwdlc_filter_filter_desktop'];
		$tablet = $settings['bwdlc_filter_filter_tablet'];
		$mobile = $settings['bwdlc_filter_filter_mobile'];
		//$brand_name = 'bwdlc_logo_filter_brand_name';

		// filter rendering============================
		if($chosen_style == 17){
		?>
		<div class="bwdlc-brand-logo-common bwdlc-filter-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style);?>">
			<div class="row">

				<div class="col-xl-12">
					<div class="bwdlc-brand-menu d-flex">
						<?php
							if($filter_btn_menu){
								?>
								<div class="bwdlc-brand-menu-btn active" data-filter="*">
									<?php echo esc_html($settings['bwdlc_logo_filter_all_item'])?>
								</div>
								<?php
								foreach($filter_btn_menu as $item){
									?>
									<div class="bwdlc-brand-menu-btn elementor-repeater-item-<?php echo esc_attr($item['_id'] ) ?>" data-filter="<?php echo esc_attr($item['bwdlc_logo_filter_item_id'] )?>">
										<?php
										echo esc_html($item['bwdlc_logo_filter_item_name']);
										?>
									</div>
									<?php
								}
							}
						?>
					</div>
				</div>
			</div>

			<div class="row bwdlc-grid">
				<?php
					if($filter_img_menu){
						foreach($filter_img_menu as $img_item){
							?>
							<div class="active elementor-repeater-item-<?php echo esc_attr($img_item['_id'] ) ?> col-lg-<?php echo esc_attr($desktop )?>
							col-md-<?php echo esc_attr($tablet )?>
							col-<?php echo esc_attr($mobile )?>
							 bwdlc-grid-item <?php echo esc_attr($img_item['bwdlc_logo_filter_img_id'] ) ?>">
								<div class="bwdlc-brand-box-part">
									<div class="bwdlc-logo-img">
										<a href="<?php echo esc_url($img_item['bwdlc_logo_filter_logo_url']['url'] )?>">
											<img src="<?php echo esc_url($img_item['bwdlc_filter_logo_img']['url'] );?>" alt="Brand Logo">
										</a>
									</div>

									<?php if (!empty($img_item['bwdlc_logo_filter_brand_name'])) : ?>
										<div class="bwdlc-tooltip-try"><?php echo esc_html($img_item['bwdlc_logo_filter_brand_name']);?></div>
									<?php endif; ?>
								</div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
		<?php
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}



