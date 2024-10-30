<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDLCLogoGrid extends Widget_Base {

	public function get_name() {
		return esc_html__('Logo_Grid', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Logo Grid', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-gallery-grid';
	}
	
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'logo ', 'logo grid','bwdlc-logo-carousel','grid','brand-logo'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_grid_basic_settings',
			[
				'label' => esc_html__( 'Presets', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_grid_style_selection',
			[
				'label' => esc_html__( 'Designs', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '9',
				'options' => [
					'9' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'10' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'11' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'12' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'13' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'14' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'16' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/brand-logo-showcase" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->add_control(
			'bwdlc_logo_grid_responsive_device',
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
			'bwdlc_logo_grid_desktop',
			[
				'label' => esc_html__( 'Desktop', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'2'  => esc_html__( 'Column 6', 'bwd-elementor-addons' ),
					'3'  => esc_html__( 'Column 4', 'bwd-elementor-addons' ),
					'4'  => esc_html__( 'Column 3', 'bwd-elementor-addons' ),
					'6'  => esc_html__( 'Column 2', 'bwd-elementor-addons' ),
				],
			]
		);
		// tablet device column
		$this->add_control(
			'bwdlc_logo_grid_tablet',
			[
				'label' => esc_html__( 'Tablet', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'2'  => esc_html__( 'Column 6', 'bwd-elementor-addons' ),
					'3'  => esc_html__( 'Column 4', 'bwd-elementor-addons' ),
					'4'  => esc_html__( 'Column 3', 'bwd-elementor-addons' ),
					'6'  => esc_html__( 'Column 2', 'bwd-elementor-addons' ),
				],
			]
		);
		// mobile device column
		$this->add_control(
			'bwdlc_logo_grid_mobile',
			[
				'label' => esc_html__( 'Mobile', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '12',
				'options' => [
					'2'  => esc_html__( 'Column 6', 'bwd-elementor-addons' ),
					'3'  => esc_html__( 'Column 4', 'bwd-elementor-addons' ),
					'4'  => esc_html__( 'Column 3', 'bwd-elementor-addons' ),
					'6'  => esc_html__( 'Column 2', 'bwd-elementor-addons' ),
					'12'  => esc_html__( 'Column 1', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_popover();

        $this->end_controls_section();
		
		// logo grid
		$this->start_controls_section(
			'bwdlc_logo_grid_items',
			[
				'label' => esc_html__( 'Logo Grid', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//repeater (slide items)
		$repeater = new \Elementor\repeater();

		$repeater->add_control(
			'bwdlc_logo_grid_logo',
			[
				'label' => esc_html__( 'Choose Logo', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_grid_name',
			[
				'label' => esc_html__( 'Tooltip Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_grid_logo_url',
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
		// logo height
		$repeater->add_responsive_control(
			'bwdlc_grid_logo_height',
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
		$repeater->add_control(
			'bwdlc-tooltip-grid-switch',
			[
				'label' => esc_html__( 'Tooltip Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_gird_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_gird_bgcolor',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc-tooltip_gird_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc-tooltip_gird-border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_gird_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltipbox_gird_width',
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
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_gird_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_tooltip_gird_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_grid_name!' => '',
					'bwdlc-tooltip-grid-switch' => 'yes',
				],
			]
		);

		//repeater fetch
		$this->add_control(
			'bwdlc_logo_grid_list',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),

					],					
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),

					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),
					],
					[
						'bwdlc_logo_grid_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_grid_name' =>esc_html__( 'Logo', 'bwd-elementor-addons' ),
					],
				],
			]
		);



		$this->add_control(
			'bwdlc-hrr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//hover amination
		$this->add_control(
			'bwdlc_gridhover_animations',
			[
				'label'     => esc_html__('Hover Animation', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'none' => esc_html__('None', 'bwd-elementor-addons'),
					'bounce' => esc_html__('Bounce', 'bwd-elementor-addons'),
					'pro-bounceIn' => esc_html__('BounceIn (PRO)', 'bwd-elementor-addons'),
					'pro-bounceOut' => esc_html__('BounceOut (PRO)', 'bwd-elementor-addons'),
					'pro-bounceInUp' => esc_html__('bounceInUp (PRO)', 'bwd-elementor-addons'),
					'pro-bounceInDown' => esc_html__('bounceInDown (PRO)', 'bwd-elementor-addons'),
					'pro-bounceInLeft' => esc_html__('bounceInLeft (PRO)', 'bwd-elementor-addons'),
					'pro-bounceInRight' => esc_html__('bounceInRight (PRO)', 'bwd-elementor-addons'),
					'pro-backInUp' => esc_html__('backInUp (PRO)', 'bwd-elementor-addons'),
					'pro-backInDown' => esc_html__('backInDown (PRO)', 'bwd-elementor-addons'),
					'pro-backInLeft' => esc_html__('backInLeft (PRO)', 'bwd-elementor-addons'),
					'pro-backInRight' => esc_html__('backInRight (PRO)', 'bwd-elementor-addons'),
					'pro-flip' => esc_html__('Flip (PRO)', 'bwd-elementor-addons'),
					'pro-flipInX' => esc_html__('FlipInX (PRO)', 'bwd-elementor-addons'),
					'pro-flipInY' => esc_html__('FlipInY (PRO)', 'bwd-elementor-addons'),
					'pro-fadeIn' => esc_html__('fadeIn (PRO)', 'bwd-elementor-addons'),
					'pro-fadeOut' => esc_html__('FadeOut (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInUp' => esc_html__('fadeInUp (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInDown' => esc_html__('fadeInDown (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInUpBig' => esc_html__('fadeInUpBig (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInLeft' => esc_html__('fadeInLeft (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInRight' => esc_html__('fadeInRight (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInRightBig' => esc_html__('fadeInRightBig (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInBottomRight' => esc_html__('fadeInBottomRight (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInBottomLeft' => esc_html__('fadeInBottomLeft (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInTopRight' => esc_html__('fadeInTopRight (PRO)', 'bwd-elementor-addons'),
					'pro-fadeInTopLeft' => esc_html__('fadeInTopLeft (PRO)', 'bwd-elementor-addons'),
					'pro-rotateIn' => esc_html__('RotateIn (PRO)', 'bwd-elementor-addons'),
					'pro-rotateOut' => esc_html__('RotateOut (PRO)', 'bwd-elementor-addons'),
					'pro-rotateInUpRight' => esc_html__('rotateInUpRight (PRO)', 'bwd-elementor-addons'),
					'pro-rotateInUpLeft' => esc_html__('rotateInUpLeft (PRO)', 'bwd-elementor-addons'),
					'pro-rotateInDownRight' => esc_html__('rotateInDownRight (PRO)', 'bwd-elementor-addons'),
					'pro-rotateInDownLeft' => esc_html__('rotateInDownLeft (PRO)', 'bwd-elementor-addons'),
					'pro-hinge' => esc_html__('Hinge (PRO)', 'bwd-elementor-addons'),
					'pro-zoomIn' => esc_html__('ZoomIn (PRO)', 'bwd-elementor-addons'),
					'pro-zoomOut' => esc_html__('ZoomOut (PRO)', 'bwd-elementor-addons'),
					'pro-zoomInUp' => esc_html__('zoomInUp (PRO)', 'bwd-elementor-addons'),
					'pro-zoomInRight' => esc_html__('zoomInRight (PRO)', 'bwd-elementor-addons'),
					'pro-zoomInLeft' => esc_html__('zoomInLeft (PRO)', 'bwd-elementor-addons'),
					'pro-zoomInDown' => esc_html__('zoomInDown (PRO)', 'bwd-elementor-addons'),
					'pro-slideInUp' => esc_html__('SlideInUp (PRO)', 'bwd-elementor-addons'),
					'pro-slideInRight' => esc_html__('slideInRight (PRO)', 'bwd-elementor-addons'),
					'pro-slideInLeft' => esc_html__('slideInLeft (PRO)', 'bwd-elementor-addons'),
					'pro-slideInDown' => esc_html__('slideInDown (PRO)', 'bwd-elementor-addons'),
					'pro-flash' => esc_html__('Flash (PRO)', 'bwd-elementor-addons'),
					'pro-rollIn' => esc_html__('rollIn (PRO)', 'bwd-elementor-addons'),
					'pro-pulse' => esc_html__('Pulse (PRO)', 'bwd-elementor-addons'),
					'pro-rubberBand' => esc_html__('RubberBand (PRO)', 'bwd-elementor-addons'),
					'pro-shakeX' => esc_html__('ShakeX (PRO)', 'bwd-elementor-addons'),
					'pro-shakeY' => esc_html__('ShakeY (PRO)', 'bwd-elementor-addons'),
					'pro-headShake' => esc_html__('HeadShake (PRO)', 'bwd-elementor-addons'),
					'pro-swing' => esc_html__('Swing (PRO)', 'bwd-elementor-addons'),
					'pro-tada' => esc_html__('Tada (PRO)', 'bwd-elementor-addons'),
					'pro-wobble' => esc_html__('Wobble (PRO)', 'bwd-elementor-addons'),
					'pro-jello' => esc_html__('Jello (PRO)', 'bwd-elementor-addons'),
					'pro-heartBeat' => esc_html__('HeartBeat (PRO)', 'bwd-elementor-addons'),
					'pro-jackInTheBox' => esc_html__('JackInTheBox (PRO)', 'bwd-elementor-addons'),
					'pro-lightSpeedInLeft' => esc_html__('lightSpeedInLeft (PRO)', 'bwd-elementor-addons'),
					'pro-lightSpeedInRight' => esc_html__('lightSpeedInRight (PRO)', 'bwd-elementor-addons'),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part:hover img' => 'animation: {{VALUE}};',
				],
				'default' => 'fadeInUp',
			]
		);

		//hover_animation_speed
		$this->add_control(
			'bwdlc_gridhover_animation_speed',
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


		//grid logo styles
		$this->start_controls_section(
			'bwdlc_logo_grid_logo_Styles_section',
			[
				'label' => esc_html__( 'Grid Logo', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// logo box height
		$this->add_responsive_control(
			'bwdlc_grid_logo_box_height',
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
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// logo box width
		$this->add_responsive_control(
			'bwdlc_grid_logo_size',
			[
				'label' => esc_html__( 'Logo Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-logo-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// alignment
		$this->add_control(
			'bwdlc_logo_grid_logo_items_align',
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
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-grid-logo-wrapper' => 'justify-content: {{VALUE}} !important',
				],
			]
		);

		//vertically gap
		$this->add_responsive_control(
			'bwdlc_logo_grid_logo_vertically_gap',
			[
				'label' => esc_html__( 'Vertically Gap (px)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					]
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper > *' => 'padding-bottom: {{SIZE}}{{UNIT}}!important;',
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper' => 'margin-bottom: -{{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		//horizontally gap
		$this->add_responsive_control(
			'bwdlc_logo_grid_logo_horizontally_gap',
			[
				'label' => esc_html__( 'Horizontally Gap (px)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					]
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper > *' => 'padding-right: {{SIZE}}{{UNIT}}!important;',
					'{{WRAPPER}} .bwdlc-grid-cmn .bwdlc-grid-logo-wrapper' => 'margin-right: -{{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		//background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
				'condition' => [
					'bwdlc_logo_grid_style_selection!' => ['11', '12'],
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_background_before',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part::before',
				'condition' => [
					'bwdlc_logo_grid_style_selection!' => ['9', '10', '13', '14', '15', '16'],
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);


		//border-radius
		$this->add_responsive_control(
			'bwdlc_logo_grid_logo_border-radius',
			[
				'label' => esc_html__( 'Border-Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_grid_logo_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-logo-common .bwdlc-brand-box-part',
			]
		);


    }
	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_grid_style_selection'];
		$logo_grid_repeater = $settings['bwdlc_logo_grid_list'];
		$desktop_col = $settings['bwdlc_logo_grid_desktop'];
		$tablet_col = $settings['bwdlc_logo_grid_tablet'];
		$mobile_col = $settings['bwdlc_logo_grid_mobile'];

		if($chosen_style == 9 || $chosen_style == 10){
		?>
		<div class="bwdlc-grid-cmn bwdlc-brand-logo-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style );?>">
			<div class="bwdlc-grid-logo-wrapper">
			<?php
				if( $logo_grid_repeater){
					foreach ($logo_grid_repeater as $logo_grid) {
					?>
				<div class="bwdlc-drop col-lg-<?php echo esc_attr( $desktop_col); ?> col-<?php echo esc_attr( $mobile_col); ?> col-md-<?php echo esc_attr( $tablet_col); echo esc_attr( ' elementor-repeater-item-' . $logo_grid['_id'] ) ?>">
					<div class="bwdlc-brand-box-part">
						<div class="bwdlc-logo-img">
							<a href="<?php echo esc_url($logo_grid['bwdlc_logo_grid_logo_url']['url'] )?>">
								<img src="<?php echo esc_url($logo_grid['bwdlc_logo_grid_logo']['url'] );?>" alt="Brand Logo">
							</a>
						</div>

						<?php if (!empty($logo_grid['bwdlc_logo_grid_name'])) : ?>
							<div class="bwdlc-tooltip-try"><?php echo esc_html($logo_grid['bwdlc_logo_grid_name']);?></div>
						<?php endif; ?>
					</div>
				</div>
				<?php 
				}
			}?>
			</div>
		</div>
		<?php
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}




