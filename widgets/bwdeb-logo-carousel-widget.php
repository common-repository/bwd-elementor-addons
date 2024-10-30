<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDLCLogoCarousel extends Widget_Base {

	public function get_name() {
		return esc_html__('bwdlc-Logo-Carousel', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Logo Carousel', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-logo';
	}
	
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'logo ', 'logo carousel','bwd-logo-carousel', 'brand-logo'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdlc_logo_carousel_basic_settings',
			[
				'label' => esc_html__( 'Logo Carousel', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdlc_logo_carousel_style_selection',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'5' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'6' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'7' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'8' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'15' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'18' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/brand-logo-showcase" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		//repeater (slide items)
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdlc_logo_carousel_logo',
			[
				'label' => esc_html__( 'Choose Logo', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
				],
			]
		);
		$repeater->add_control(
			'bwdlc_logo_carousel_brand_name',
			[
				'label' => esc_html__( 'Tooltip Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'bwdlc_logo_carousel_logo_url',
			[
				'label' => esc_html__( 'Logo Url', 'bwd-elementor-addons' ),
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
			'bwdlc_carousel_logo_height',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdlc-brand-box-part .bwdlc-logo-img a img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);	

		//tooltip-style
		$repeater->add_control(
			'bwdlc-tooltip-switch',
			[
				'label' => esc_html__( 'Tooltip Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdlc-tooltip_bgcolor',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc-tooltip_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc-tooltip-border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltipbox_width',
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
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdlc_tooltip_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_tooltip_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdlc-tooltip-try',
				'condition' => [
					'bwdlc_logo_carousel_brand_name!' => '',
					'bwdlc-tooltip-switch' => 'yes',
				],
			]
		);

		//repeater fetch
		$this->add_control(
			'bwdlc_logo_carousel_list',
			[
				//'label' => esc_html__( 'Logo', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo','bwd-elementor-addons' ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo','bwd-elementor-addons' ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo','bwd-elementor-addons' ),
					],					
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo','bwd-elementor-addons' ),
					],
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo','bwd-elementor-addons' ),
					],
					[
						'bwdlc_logo_carousel_logo'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__)
						],
						'bwdlc_logo_carousel_brand_name' => esc_html__( 'Logo','bwd-elementor-addons' ),
					],
				],
			]
		);

		$this->add_control(
			'bwdlc-hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//centermodd amination
		$this->add_control(
			'bwdlc_centermood_animations',
			[
				'label'     => esc_html__('CenterMood Animation', 'bwd-elementor-addons'),
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/brand-logo-showcase" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-swiper-slide-active' => 'animation:{{VALUE}};',
				],
				'default' => 'bounce',
			]
		);

		//centermood_animation_speed
		$this->add_control(
			'bwdlc_centermood_animation_speed',
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
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-swiper-slide-active' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdlc-logo-caro-hrr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		//hover amination
		$this->add_control(
			'bwdlc_hover_animations',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/brand-logo-showcase" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-brand-box-part:hover img' => 'animation: {{VALUE}};',
				],
				'default' => 'bounce',
			]
		);

		//hover_animation_speed
		$this->add_control(
			'bwdlc_hover_animation_speed',
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
					'{{WRAPPER}} .bwdlc-swiper-slide.bwdlc-brand-box-part img' => 'animation-duration: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);



		$this->end_controls_section();


		//Slider Settings------------
        $this->start_controls_section(
			'bwdlc_slider_controls',
			[
				'label' => esc_html__( 'Slider Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Slide Effect
		$this->add_control(
			'bwdlc_slider_effects',
			[
				'label' => esc_html__( 'Slide Effect', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'false',
				'options' => [
					'false'  => esc_html__( 'Slide', 'bwd-elementor-addons' ),
					'fade'  => esc_html__( 'Fade', 'bwd-elementor-addons' ),
					'coverflow'  => esc_html__( 'Cover Flow', 'bwd-elementor-addons' ),
					'cube'  => esc_html__( 'Cube', 'bwd-elementor-addons' ),
					'flip'  => esc_html__( 'Flip', 'bwd-elementor-addons' ),
					'cards'  => esc_html__( 'Cards', 'bwd-elementor-addons' ),
					'creative'  => esc_html__( 'Creative', 'bwd-elementor-addons' ),
				],
				'frontend_available' => true,
			]
		);

		//popover-Coverflow-coverflow
		$this->add_control(
			'bwdlc_popover_slider_coverflow',
			[
				'label' => esc_html__( 'Coverflow Control', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'bwdlc_slider_effects' => 'coverflow',
				],
			]
		);

		$this->start_popover();

			//Coverflow Rotate
			$this->add_control(
				'bwdlc_coverflow_rotate',
				[
					'label' => esc_html__( 'Coverflow Rotate', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Depth
			$this->add_control(
				'bwdlc_coverflow_depth',
				[
					'label' => esc_html__( 'Coverflow Depth', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 1,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Modifier
			$this->add_control(
				'bwdlc_coverflow_modifier',
				[
					'label' => esc_html__( 'Coverflow Modifier', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 1,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow shadow switcher
			$this->add_control(
				'bwdlc_coverflow_shadow_switcher',
				[
					'label' => esc_html__( 'Coverflow Shadow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
					'return_value' => true,
					'default' => false,
					'frontend_available' => true,
				]
			);

			//Coverflow shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_coverflow_shadow_left',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-slide-shadow-left, {{WRAPPER}} .bwdlc-swiper-slide-shadow-right',
					'condition' => [
						'bwdlc_coverflow_shadow_switcher' => true,
					],
					'frontend_available' => true,
				]
			);

		$this->end_popover();



		//popover-Coverflow-cube
		$this->add_control(
			'bwdlc_popover_slider_cube',
			[
				'label' => esc_html__( 'Cube Control', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'bwdlc_slider_effects' => 'cube',
				],
			]
		);
		$this->start_popover();

			//Cube shadow switcher
			$this->add_control(
				'bwdlc_cube_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Shadow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_Cube_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-cube-shadow:before',
					'condition' => [
						'bwdlc_cube_shadow_switcher' => true,
					],
				]
			);

			//Cube slide shadow switcher
			$this->add_control(
				'bwdlc_cube_slide_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Slide Shadow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_Cube_slide_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-slide-shadow-left, {{WRAPPER}} .bwdlc-swiper-slide-shadow-right',
					'condition' => [
						'bwdlc_cube_slide_shadow_switcher' => true,
					],
				]
			);

			//Cube shadow offset
			$this->add_control(
				'bwdlc_cube_shadow_offset',
				[
					'label' => esc_html__( 'Cube Shadow Offset', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Cube Shadow Blur
			$this->add_control(
				'bwdlc_Cube_shadow_blur',
				[
					'label'       => esc_html__('Cube Shadow Blur', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 1,
					'default'     => 50,
					'selectors'   => [
						'{{WRAPPER}} .bwdlc-swiper-cube-shadow:before' => 'filter: blur({{SIZE}}px)',
					],
				]
			);

		$this->end_popover();

		//slide speed
		$this->add_control(
			'bwdlc_slide_speed',
			[
				'label' => esc_html__( 'Slide Speed (ms)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
				'default' => 1500,
				'dynamic' => [
					'active' => true,
				],
				'frontend_available' => true,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdlc_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Slider', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'frontend_available' => true,
			]
		);
		$this->start_popover();

			//desktop
			$this->add_control(
				'bwdlc_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwd-elementor-addons' ),
					'description' => esc_html__('Notice: ( minimum - 1025px )', 'bwd-elementor-addons'),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 5,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'bwdlc_desk_Space',
				[
					'label' => esc_html__( 'SpaceBetween', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 500,
					'step' => 1,
					'default' => 10,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//tablet
			$this->add_control(
				'bwdlc_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwd-elementor-addons' ),
					'description' => esc_html__('Notice: ( 768px - 1024px )', 'bwd-elementor-addons'),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'bwdlc_tablet_space',
				[
					'label' => esc_html__( 'SpaceBetween', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//mobile
			$this->add_control(
				'bwdlc_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwd-elementor-addons' ),
					'description' => esc_html__('Notice: ( maximum - 767px )', 'bwd-elementor-addons'),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'bwdlc_mobile_space',
				[
					'label' => esc_html__( 'SpaceBetween', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

		$this->end_popover();

        //Infinite Loop
        $this->add_control(
            'bwdlc_loop_switcher',
            [
                'label' => esc_html__( 'Infinite Loop?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //autoplay
        $this->add_control(
            'bwdlc_autoslide_switcher',
            [
                'label' => esc_html__( 'Autoplay?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //autoplay speed
		$this->add_control(
			'bwdlc_slider_autoplay_speed',
			[
				'label' => esc_html__( 'Autoplay Speed (ms)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
                'default' => 5000,
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'bwdlc_autoslide_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);

		//mousewheel
        $this->add_control(
            'bwdlc_mousewheel',
            [
                'label' => esc_html__( 'Mousewheel?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //scrollbar
		$this->add_control(
            'bwdlc_scroll_bar',
            [
                'label' => __('Scroll Bar?', 'bwd-elementor-addons'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'bwd-elementor-addons'),
                'label_off' => __('No', 'bwd-elementor-addons'),
                'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
            ]
        );

		//scrollbar show-hide
        $this->add_control(
            'bwdlc_scroll_visibility',
            [
                'label' => __('Scroll Bar', 'bwd-elementor-addons'),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false'  => __('Always show', 'bwd-elementor-addons'),
                    'true' => __('Automatic hide', 'bwd-elementor-addons'),
                ],
                'condition' => [
                    'bwdlc_scroll_bar' => 'yes',
                ],
                'frontend_available' => true,
            ]
        );

        //Pagination
        $this->add_control(
            'bwdlc_slide_pagination',
            [
                'label' => esc_html__( 'Pagination?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //bwdlc_pagination_type
        $this->add_control(
            'bwdlc_pagination_type',
            [
                'label' => esc_html__( 'Pagination Type', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'bullets',
                'options' => [
                    'bullets'  => esc_html__( 'Dots', 'bwd-elementor-addons' ),
					'numbers'  => esc_html__( 'Numbers', 'bwd-elementor-addons' ),
                    'progressbar'  => esc_html__( 'Progressbar', 'bwd-elementor-addons' ),
                    'fraction'  => esc_html__( 'Fraction', 'bwd-elementor-addons' ),
                ],
                'condition' => [
                    'bwdlc_slide_pagination' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

		$this->add_control(
            'bwdlc_pagination_bullets_style',
            [
                'label' => esc_html__( 'Dots Style', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''  => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'bwdlc_dots1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'bwdlc_dots2'  => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'bwdlc_dots3'  => esc_html__( 'Style 3', 'bwd-elementor-addons' ),
					'bwdlc_dots4'  => esc_html__( 'Style 4', 'bwd-elementor-addons' ),
					'bwdlc_dots5'  => esc_html__( 'Style 5', 'bwd-elementor-addons' ),
					'bwdlc_dots6'  => esc_html__( 'Style 6', 'bwd-elementor-addons' ),
					'bwdlc_dots7'  => esc_html__( 'Style 7', 'bwd-elementor-addons' ),
					'bwdlc_dots8'  => esc_html__( 'Style 8', 'bwd-elementor-addons' ),
					'bwdlc_dots9'  => esc_html__( 'Style 9', 'bwd-elementor-addons' ),
					'bwdlc_dots10'  => esc_html__( 'Style 10', 'bwd-elementor-addons' ),
                ],
                'condition' => [
                    'bwdlc_pagination_type' => 'bullets',
                ],
            ]
        );

        //Arrow Navigation
        $this->add_control(
            'bwdlc_arrow_switcher',
            [
                'label' => esc_html__( 'Arrow Navigation?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //arrow type
        $this->add_control(
            'bwdlc_nav_type',
            [
                'label' => esc_html__( 'Navigation Type', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'icon'  => esc_html__( 'Icon', 'bwd-elementor-addons' ),
                    'text'  => esc_html__( 'Text', 'bwd-elementor-addons' ),
                ],
                'condition' => [
                    'bwdlc_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //popover Navigation icon
        $this->add_control(
			'bwdlc_popover_navigation_icon',
			[
				'label' => esc_html__( 'Navigation Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdlc_nav_type' => 'icon',
                    'bwdlc_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);
        $this->start_popover();

            //prev icon
			$this->add_control(
				'bwdlc_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdlc_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
				]
			);

        $this->end_popover();


        //popover Navigation text
        $this->add_control(
			'bwdlc_popover_navigation_text',
			[
				'label' => esc_html__( 'Navigation Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
                'condition' => [
                    'bwdlc_nav_type' => 'text',
                    'bwdlc_arrow_switcher' => 'yes',
                ],
			]
		);
        $this->start_popover();

            //prev text
			$this->add_control(
				'bwdlc_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
				]
			);

            //next text
			$this->add_control(
				'bwdlc_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
				]
			);

        $this->end_popover();



        $this->end_controls_section();


        $this->start_controls_section(
			'bwdlc_slider_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_arrow_switcher' => 'yes',
                ],
			]
		);

        //norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

            //arrow-color
            $this->add_control(
                'bwdlc_arrow_color',
                [
                    'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'color: {{VALUE}}',
                    ],
                ]
            );

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_arrow_background_color',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdlc_arrow_size',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdlc_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdlc_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
                    'condition' => [
						'bwdlc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdlc_arrow_width',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdlc_arrow_height',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdlc_arrow_border',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdlc_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdlc_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev',
				]
			);

			//opacity
			$this->add_control(
				'bwdlc_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdlc_slider_visibility',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdlc_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdlc_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdlc_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdlc_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdlc_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdlc_arrow_background_color_hover',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdlc_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'bwdlc_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdlc_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
                    'condition' => [
						'bwdlc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdlc_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdlc_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdlc_arrow_border_hover',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdlc_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdlc_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdlc-swiper-button-next .bwdlc-swiper-next:hover, {{WRAPPER}} .bwdlc-swiper-button-prev .bwdlc-swiper-prev:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdlc_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdlc_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next, {{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdlc_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdlc_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdlc_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-prev .bwdlc-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdlc_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdlc_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdlc_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdlc-slider-common:hover .bwdlc-swiper-button-next .bwdlc-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();



		//Pagination :: Dots
        $this->start_controls_section(
			'bwdlc_slider_dots_style',
			[
				'label' => esc_html__( 'Pagination :: Dots', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_pagination_type' => ['bullets', 'numbers'],
					'bwdlc_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//dots Pagination
		$this->add_control(
			'bwdlc_dots_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

            //horizontal
			//bottom
			$this->add_responsive_control(
				'bwdlc_dots_bottom_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-pagination' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdlc_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-pagination' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap horizontal
		$this->add_responsive_control(
			'bwdlc_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination .bwdlc-swiper-pagination-bullet:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdlc_slider_direction' => 'horizontal',
                ],
			]
		);

		//dots-gap vertical
		$this->add_responsive_control(
			'bwdlc_dots_gap_vartical',
			[
				'label' => esc_html__( 'Dots Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination .bwdlc-swiper-pagination-bullet:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'bwdlc_slider_direction' => 'vertical',
                ],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdlc_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
                'condition' => [
                    'bwdlc_slider_direction' => 'horizontal',
                ],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdlc_dots_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet .bwdlc-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_dots_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination .bwdlc-swiper-pagination-bullet',
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdlc_dots_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdlc_dots_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_dots_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdlc_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet-active .bwdlc-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_dots_background_color_active',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdlc_dots_width_active',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdlc_dots_height_active',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_dots_border_active',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet.bwdlc-swiper-pagination-bullet-active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdlc_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet .bwdlc-paginumb:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdlc_pagination_type' => 'bullets',
					'bwdlc_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_dots_background_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover',
			]
		);

		//width
		$this->add_responsive_control(
			'bwdlc_dots_width_hover',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdlc_dots_height_hover',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_dots_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-bullet:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdlc_slider_progressbar_style',
			[
				'label' => esc_html__( 'Pagination :: Progressbar', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_pagination_type' => 'progressbar',
					'bwdlc_slide_pagination' => 'yes',
                ],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_progressbar',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_progressbar',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//Height
		$this->add_responsive_control(
			'bwdlc_progressbar_height',
			[
				'label' => esc_html__( 'height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-progressbar' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_progressbar_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-progressbar',
			]
		);

		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_progressbar',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_progressbar_background_color_active',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-progressbar .bwdlc-swiper-pagination-progressbar-fill',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdlc_slider_fraction_style',
			[
				'label' => esc_html__( 'Pagination :: Fraction', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_pagination_type' => 'fraction',
					'bwdlc_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//fraction Pagination
		$this->add_control(
			'bwdlc_fraction_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//bottom
			$this->add_responsive_control(
				'bwdlc_fraction_bottom_position',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdlc_fraction_left_position',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//Fraction-width
		$this->add_responsive_control(
			'bwdlc_fraction_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-height
		$this->add_responsive_control(
			'bwdlc_fraction_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-gap horizontal
		$this->add_responsive_control(
			'bwdlc_fraction_gap',
			[
				'label' => esc_html__( 'Fraction Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdlc_fraction_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
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
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction' => 'justify-content: {{VALUE}}',
				],
			]
		);

		//fraction-color
		$this->add_control(
			'bwdlc_fraction_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'color: {{VALUE}}',
				],
			]
		);

		//fraction-active-color
		$this->add_control(
			'bwdlc_fraction_number_active_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span.bwdlc-swiper-pagination-current' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdlc_fraction_typography',
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_fraction_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_faction_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdlc_faction_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-pagination-fraction span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_faction_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-swiper-pagination-fraction span',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdlc_scrollbar_style',
			[
				'label' => esc_html__( 'Scroll Bar', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'bwdlc_scroll_bar' => 'yes',
                ],
			]
		);

		$this->add_responsive_control(
			'bwdlc_scrollbar_position',
			[
				'label' => esc_html__( 'Vertical Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -10000,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-scrollbar' => 'bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdlc_scrollbar_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-swiper-scrollbar' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);	

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_scrollbar_drag_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-scrollbar-drag',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_scrollbar_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-swiper-scrollbar',
			]
		);

		$this->end_controls_section();

		// carousel logo styles section start
		$this->start_controls_section(
			'bwdlc_logo_carousel_logo_items_styles_section',
			[
				'label' => esc_html__( 'Logo Carousel', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdlc_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdlc_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		// logo width
		$this->add_responsive_control(
			'bwdlc_carousel_logo_width',
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
					'{{WRAPPER}} .bwdlc-brand-box-part .bwdlc-logo-img a img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);	
		//carousel height
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_height',
			[
				'label' => esc_html__( 'Height (px)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// carousel logo bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_bg',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part',
				'exclude' =>['image'],
			]
		);
		//carousel logo border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part',
			]
		);
		// carousel logo border radius
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_item_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//carousel logo box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part',
			]
		);
		
		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdlc_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		// carousel logo bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_bg_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part:hover',
				'exclude' =>['image'],
			]
		);
		//carousel logo border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part:hover',
			]
		);
		// carousel logo border radius
		$this->add_responsive_control(
			'bwdlc_logo_carousel_logo_item_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdlc-brand-box-part:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//carousel logo box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdlc_logo_carousel_logo_item_box_shadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdlc-brand-box-part:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$chosen_style = $settings['bwdlc_logo_carousel_style_selection'];
		$logo_repeater = $settings['bwdlc_logo_carousel_list'];
		if($chosen_style == 1 || $chosen_style == 2){
			?>
			<div class="bwdlc-slider-container-wrapper bwdlc-brand-logo-common bwdlc-logo-carousel-common bwdlc-brand-logo-<?php echo esc_attr($chosen_style );?> <?php echo esc_attr($settings['bwdlc_pagination_bullets_style']); ?>">
				<div class="bwdlc-swiper bwdlc-mySwiper-container">
					<div class="bwdlc-swiper-wrapper">
					<?php
						if( $logo_repeater){
							foreach ($logo_repeater as $logo) {
								?>
								<div class="bwdlc-swiper-slide bwdlc-brand-box-part elementor-repeater-item-<?php echo  esc_attr( $logo['_id'] ) ?>">
									<div class="bwdlc-logo-img">
										<a href="<?php echo esc_url($logo['bwdlc_logo_carousel_logo_url']['url'] )?>">
											<img src="<?php echo esc_url($logo['bwdlc_logo_carousel_logo']['url'] );?>" alt="">
										</a>
									</div>
									<?php if (!empty($logo['bwdlc_logo_carousel_brand_name'])) : ?>
										<div class="bwdlc-tooltip-try"><?php echo esc_html( $logo['bwdlc_logo_carousel_brand_name'] );?></div>
									<?php endif; ?>
								</div>
								<?php 
							}
						}
					?>
					</div>
				</div>
				<?php require 'bwdeb-swiper.php';?> 
			</div>	
			<?php 
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}

