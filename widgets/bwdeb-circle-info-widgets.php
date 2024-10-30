<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdci_circle_info_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdci-circle-info', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Interactive Circle Info', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'info-circle bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    protected function register_controls(){

		

		$this->start_controls_section(
			'bwdci_common_section',
			[
				'label' => esc_html__( 'Circle Info', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdci_select_style_selection',
			[
				'label' => esc_html__( 'Select Style', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/circle-info/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->add_responsive_control(
			'bwdci_commn_alignment',
			[
				'label' => esc_html__( 'Box Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
					'{{WRAPPER}} .bwdci-style-common' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'bwdci_commn_main_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
					'{{WRAPPER}} .bwdci-ep-circle-info-item' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->add_control(
			'bwdci_mouse_event',
			[
				'label'     => esc_html__('Mouse Event Type', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'default' => 'mouseenter',
				'options'   => [
					'mouseenter' => esc_html__('Mouse Enter', 'bwd-elementor-addons'),
					'mouseleave' => esc_html__('Mouse Leave', 'bwd-elementor-addons'),
					'click' => esc_html__('Click', 'bwd-elementor-addons'),
					'dblclick' => esc_html__('Double Click', 'bwd-elementor-addons'),
				],
			]
		);

		$this->add_control(
			'bwdci_info_inner_animation',
			[
				'label' => esc_html__( 'Circle Box Animation', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'auto-rotate' => esc_html__( 'Auto Rotate', 'bwd-elementor-addons' ),
					'info-inner-animation' => esc_html__( 'Animations', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdci_innerbox_animations',
			[
				'label'     => esc_html__('Content Animation', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'default' => '',
				'options'   => [
					'' => esc_html__('Default', 'bwd-elementor-addons'),
					'bounce' => esc_html__('Bounce', 'bwd-elementor-addons'),
					'bounceIn' => esc_html__('BounceIn', 'bwd-elementor-addons'),
					'bounceOut' => esc_html__('BounceOut', 'bwd-elementor-addons'),
					'flip' => esc_html__('Flip', 'bwd-elementor-addons'),
					'flipInX' => esc_html__('FlipInX', 'bwd-elementor-addons'),
					'flipInY' => esc_html__('FlipInY', 'bwd-elementor-addons'),
					'fadeIn' => esc_html__('fadeIn', 'bwd-elementor-addons'),
					'fadeOut' => esc_html__('FadeOut', 'bwd-elementor-addons'),
					'rotateIn' => esc_html__('RotateIn', 'bwd-elementor-addons'),
					'rotateOut' => esc_html__('RotateOut', 'bwd-elementor-addons'),
					'hinge' => esc_html__('Hinge', 'bwd-elementor-addons'),
					'flash' => esc_html__('Flash', 'bwd-elementor-addons'),
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner.info-inner-animation' => 'animation-name: {{VALUE}}!important;',
				],
				'condition' => ['bwdci_info_inner_animation' => 'info-inner-animation',],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->add_control(
			'bwdci_content_animation_speed',
			[
				'label' => __('Animation Speed (s)', 'bwd-elementor-addons'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['s'],
				'range' => [
					's' => [
						'min' => 100,
						'max' => 5000,
						'step' => 50,
					],
				],
				'default' => [
					'unit' => 's',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdci_info_inner_animation!' => ''
				],
			]
		);

		$this->add_control(
			'bwdci_info_inner_animation_direction',
			[
				'label' => esc_html__( 'Animation Direction', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'alternate' => esc_html__( 'Alternate', 'bwd-elementor-addons' ),
					'alternate-reverse' => esc_html__( 'Alternate Reverse', 'bwd-elementor-addons' ),
					'reverse' => esc_html__( 'Reverse', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner.auto-rotate' => 'animation-direction: {{VALUE}};',
				],
				'condition' => [ 'bwdci_info_inner_animation' => 'auto-rotate' ],
			]
		);
		$this->add_control(
			'bwdci_info_inner_animation_hover_pause',
			[
				'label' => esc_html__( 'Pause On Hover', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'hover-puse',
				'options' => [
					'' => esc_html__( 'No', 'bwd-elementor-addons' ),
					'hover-puse' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				],
				'condition' => [ 'bwdci_info_inner_animation!' => '' ],
			]
		);
		$bwdci_repet = new \Elementor\Repeater();

		//content amination
		$bwdci_repet->add_control(
			'bwdci_content_animations',
			[
				'label'     => esc_html__('Content Animation', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'default' => '',
				'options'   => [
					'' => esc_html__('Default', 'bwd-elementor-addons'),
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item.active' => 'animation-name: {{VALUE}}!important;',
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		//content_animation_speed
		$bwdci_repet->add_control(
			'bwdci_content_animation_speed',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item.active' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$bwdci_repet->start_controls_tabs(
			'bwdci_repeat_tabs'
		);
		
		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_button_tab',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_icon_yes_no',
			[
				'label' => esc_html__( 'Icon?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', 'bwd-elementor-addons' ),
						'icon' => 'eicon-editor-close',
					],
					'icon' => [
						'title' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'icon' => 'eicon-icon-box',
					],
				],
				'default' => 'icon',
				'toggle' => true,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-info-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
				'condition' => [
					'bwdci_icon_yes_no' => 'icon',
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_short_title', 
			[
				'label' => esc_html__( 'Short Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		
		$bwdci_repet->end_controls_tab();

		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_content_tab',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_title', 
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$bwdci_repet->add_control(
			'bwdci_main_title_url',
			[
				'label' => esc_html__( 'Title Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://bestwpdeveloper.com/',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdci_main_title!' => '',
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_icon_yes_no',
			[
				'label' => esc_html__( 'Icon?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', 'bwd-elementor-addons' ),
						'icon' => 'eicon-editor-close',
					],
					'icon' => [
						'title' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'icon' => 'eicon-icon-box',
					],
				],
				'default' => '',
				'toggle' => true,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_button_main_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-info-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
				'condition' => [
					'bwdci_main_icon_yes_no' => 'icon',
				],
			]
		);
		$bwdci_repet->add_control(
			'bwdci_button_main_icon_url',
			[
				'label' => esc_html__( 'Icon Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://bestwpdeveloper.com/',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdci_main_icon_yes_no' => 'icon',
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_image_yes_no',
			[
				'label' => esc_html__( 'Image?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', 'bwd-elementor-addons' ),
						'icon' => 'eicon-editor-close',
					],
					'image' => [
						'title' => esc_html__( 'Image', 'bwd-elementor-addons' ),
						'icon' => 'eicon-image-box',
					],
				],
				'default' => '',
				'toggle' => true,
			]
		);

		$bwdci_repet->add_control(
			'bwdci_main_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => [
					'bwdci_main_image_yes_no' => 'image',
				],
			]
		);
		$bwdci_repet->add_control(
			'bwdci_button_main_image_url',
			[
				'label' => esc_html__( 'Image Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://bestwpdeveloper.com/',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdci_main_image_yes_no' => 'image',
				],
			]
		);
		
		$bwdci_repet->end_controls_tab();

		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_bg_tab',
			[
				'label' => esc_html__( 'Style', 'bwd-elementor-addons' ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_info_box_popover_toggle',
			[
				'label' => esc_html__( 'Info Box', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				//'separator' => 'before',
			]
		);
			$bwdci_repet->add_control(
				'bwdci_repeat_background__BG_type',
				[
					'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'solid',
					'options' => [
						'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
						'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
						'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
					],
				]
			);
			$bwdci_repet->add_control(
				'bwdci_repeat_background__BG_type_solid',
				[
					'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item' => 'background: {{VALUE}}',
					],
					'condition' => [
						'bwdci_repeat_background__BG_type' => 'solid'
					],
				]
			);
			$bwdci_repet->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdci_repeat_background__bg_gradient',
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item',
					'condition' => [
						'bwdci_repeat_background__BG_type' => 'gradient'
					],
				]
			);
			$bwdci_repet->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdci_repeat_background_bg_img',
					'types' => [ 'classic' ],
					'exclude' => [ 'color' ],
					'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-item',
					'condition' => [
						'bwdci_repeat_background__BG_type' => 'img'
					],
				]
			);

		//title
		$bwdci_repet->add_control(
			'bwdci_title_popover_toggle',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdci_main_title!' => '',
				],
			]
		);
		$bwdci_repet->start_popover();

			$bwdci_repet->add_control(
				'bwdci_title_color',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-maintitle' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_title!' => '',
					],
				]
			);
			$bwdci_repet->add_control(
				'bwdci_title_color_hover',
				[
					'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-maintitle:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_title!' => '',
					],
				]
			);

		$bwdci_repet->end_popover();

		//description
		$bwdci_repet->add_control(
			'bwdci_desce_popover_toggle',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdci_main_description!' => '',
				],
			]
		);
		$bwdci_repet->start_popover();

			$bwdci_repet->add_control(
				'bwdci__desce_color',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-main-desce' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_description!' => '',
					],
				]
			);
			$bwdci_repet->add_control(
				'bwdci__desce_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-main-desce:hover' => 'color: {{VALUE}}',
					],
					'condition' => [
						'bwdci_main_description!' => '',
					],
				]
			);

		$bwdci_repet->end_popover();

		$bwdci_repet->end_controls_tab();
		$bwdci_repet->end_controls_tabs();


		//hr-----------
		// $bwdci_repet->add_control(
		// 	'bwdci_repeat_button_after_hr',
		// 	[
		// 		'type' => \Elementor\Controls_Manager::DIVIDER,
		// 	]
		// );

		$bwdci_repet->add_control(
			'bwdci_repeat_button_heading',
			[
				'label' => esc_html__( 'Button Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				//'separator' => 'before',
			]
		);


		$bwdci_repet->start_controls_tabs(
			'bwdci_repeat_button__tabs'
		);
		
		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_button__style_tab_normal',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient & Image', 'bwd-elementor-addons' ),
					//'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'solid'
				],
			]
		);

		$bwdci_repet->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient',
				'types' => [ 'classic','gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle',
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'gradient'
				],
			]
		);

		// $bwdci_repet->add_group_control(
		// 	\Elementor\Group_Control_Background::get_type(),
		// 	[
		// 		'name' => 'bwdci_repeat_button_bg_img',
		// 		'types' => [ 'classic' ],
		// 		'exclude' => [ 'color' ],
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle',
		// 		'condition' => [
		// 			'bwdci_repeat_button__BG_type' => 'img'
		// 		],
		// 	]
		// );

		$bwdci_repet->add_control(
			'bwdci_repeat_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_icon_yes_no' => 'icon',
				],
			]
		);
		
		$bwdci_repet->add_control(
			'bwdci_repeat_button_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_short_title!' => '',
				],
			]
		);

		$bwdci_repet->end_controls_tab();

		$bwdci_repet->start_controls_tab(
			'bwdci_repeat_content__style_tab_active',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type_active',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient & Image', 'bwd-elementor-addons' ),
					//'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
				],
			]
		);

		$bwdci_repet->add_control(
			'bwdci_repeat_button__BG_type_solid_active',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'solid'
				],
			]
		);

		$bwdci_repet->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient_active',
				'types' => [ 'classic','gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active',
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'gradient'
				],
			]
		);

		// $bwdci_repet->add_group_control(
		// 	\Elementor\Group_Control_Background::get_type(),
		// 	[
		// 		'name' => 'bwdci_repeat_button_bg_img_active',
		// 		'types' => [ 'classic' ],
		// 		'exclude' => [ 'color' ],
		// 		'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active',
		// 		'condition' => [
		// 			'bwdci_repeat_button__BG_type_active' => 'img'
		// 		],
		// 	]
		// );

		$bwdci_repet->add_control(
			'bwdci_repeat_button_icon_color_active',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_icon_yes_no' => 'icon',
				],
			]
		);
		
		$bwdci_repet->add_control(
			'bwdci_repeat_button_title_color_active',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdci-ep-circle-info-sub-circle.active .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdci_short_title!' => '',
				],
			]
		);

		$bwdci_repet->end_controls_tab();
		$bwdci_repet->end_controls_tabs();

		


		//main-repeater
		$this->add_control(
			'bwdci_main_repetater',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bwdci_repet->get_controls(),
				'default' => [
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 1' , 'bwd-elementor-addons' ),
						'bwdci_short_title' => esc_html__( 'Item 1' , 'bwd-elementor-addons' ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , 'bwd-elementor-addons' ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 2' , 'bwd-elementor-addons' ),
						'bwdci_short_title' => esc_html__( 'Item 2' , 'bwd-elementor-addons' ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , 'bwd-elementor-addons' ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 3' , 'bwd-elementor-addons' ),
						'bwdci_short_title' => esc_html__( 'Item 3' , 'bwd-elementor-addons' ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , 'bwd-elementor-addons' ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 4' , 'bwd-elementor-addons' ),
						'bwdci_short_title' => esc_html__( 'Item 4' , 'bwd-elementor-addons' ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , 'bwd-elementor-addons' ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdci_main_title' => esc_html__( 'Circle Info 5' , 'bwd-elementor-addons' ),
						'bwdci_short_title' => esc_html__( 'Item 5' , 'bwd-elementor-addons' ),
						'bwdci_main_description' => esc_html__( 'Lorem Ipsum is simply dummy text industry.' , 'bwd-elementor-addons' ),
						'bwdci_main_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_all',
			[
				'label' => esc_html__( 'Common', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdci_common_all_container_size',
			[
				'label' => esc_html__( 'Container Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'rem' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'em' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-wrap' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdci_common_all_content_box_size',
			[
				'label' => esc_html__( 'Content Box Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'rem', 'em' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'rem' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'em' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-content' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_common_main_content_direction',
			[
				'label' => esc_html__( 'Content Direction', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Column', 'bwd-elementor-addons' ),
					'column-reverse' => esc_html__( 'Column Reverse', 'bwd-elementor-addons' ),
					'row' => esc_html__( 'Row', 'bwd-elementor-addons' ),
					'row-reverse' => esc_html__( 'Row Reverse', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item.active' => 'flex-direction: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_background__BG_type',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
					'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdci_repeat_background__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_background__BG_type' => 'solid'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_background__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-item',
				'condition' => [
					'bwdci_repeat_background__BG_type' => 'gradient'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_background_bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-item',
				'condition' => [
					'bwdci_repeat_background__BG_type' => 'img'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_info_box_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-item',
			]
		);

		$this->add_responsive_control(
			'bwdci_info_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item, {{WRAPPER}} .bwdci-ep-circle-info-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_info_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_info_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-content',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_Inner_box',
			[
				'label' => esc_html__( 'Inner Box', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdci_inner_box__BG_type',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
					'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdci_inner_box__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_inner_box__BG_type' => 'solid'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_inner_box__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::before',
				'condition' => [
					'bwdci_inner_box__BG_type' => 'gradient'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_inner_box__bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::before',
				'condition' => [
					'bwdci_inner_box__BG_type' => 'img'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_inner_box_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::before',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_outer_box',
			[
				'label' => esc_html__( 'Outer Box', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdci_common_all_outer_box_size',
			[
				'label' => esc_html__( 'Outer Box Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'rem', 'em' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'rem' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
					'em' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner::after' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_outer_box__BG_type',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
					'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdci_outer_box__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-inner::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_outer_box__BG_type' => 'solid'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_outer_box__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::after',
				'condition' => [
					'bwdci_outer_box__BG_type' => 'gradient'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_outer_box__bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::after',
				'condition' => [
					'bwdci_outer_box__BG_type' => 'img'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_outer_box_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-inner::after',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_button',
			[
				'label' => esc_html__( 'Common Button', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdci_repeat_button__tabs'
		);
		
		$this->start_controls_tab(
			'bwdci_repeat_button__style_tab_normal',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdci_repeat_button_item_direction',
			[
				'label' => esc_html__( 'Item Direction', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Column', 'bwd-elementor-addons' ),
					'column-reverse' => esc_html__( 'Column Reverse', 'bwd-elementor-addons' ),
					'row' => esc_html__( 'Row', 'bwd-elementor-addons' ),
					'row-reverse' => esc_html__( 'Row Reverse', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'flex-direction: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_item_gap',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_box_width',
			[
				'label' => esc_html__( 'Box Size', 'bwd-elementor-addons' ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'bwdci_repeat_button_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-icon-circle i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
			]
		);
		
		$this->add_control(
			'bwdci_repeat_button_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdci_repeat_button_title_typography',
				'selector' => '{{WRAPPER}} .bwdci-title-circle',
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
					'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button_bg_img',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
				'condition' => [
					'bwdci_repeat_button__BG_type' => 'img'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_repeat_button_border',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_repeat_button_box_shadow',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdci_repeat_content__style_tab_active',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdci_repeat_button_icon_color_active',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active .bwdci-icon-circle i' => 'color: {{VALUE}}!important',
				],
			]
		);
		
		$this->add_control(
			'bwdci_repeat_button_title_color_active',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active .bwdci-title-circle' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type_active',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
					'img'  => esc_html__( 'Image', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdci_repeat_button__BG_type_solid_active',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button__bg_gradient_active',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_repeat_button_bg_img_active',
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
				'condition' => [
					'bwdci_repeat_button__BG_type_active' => 'img'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_repeat_button_border_active',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
			]
		);

		$this->add_responsive_control(
			'bwdci_repeat_button_border_radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_repeat_button_box_shadow_active',
				'selector' => '{{WRAPPER}} .bwdci-ep-circle-info-sub-circle.active',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();


		$this->start_controls_section(
			'bwdci_common_title',
			[
				'label' => esc_html__( 'Common Title', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdci_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-maintitle' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdci_title_color_hover',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-maintitle:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdci_title__typography',
				'selector' => '{{WRAPPER}} .bwdci-maintitle',
			]
		);

		$this->add_responsive_control(
			'bwdci_title__margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-maintitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_description',
			[
				'label' => esc_html__( 'Common Description', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdci__desce_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-main-desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdci__desce_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-main-desce:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdci__desce_typography',
				'selector' => '{{WRAPPER}} .bwdci-main-desce',
			]
		);

		$this->add_responsive_control(
			'bwdci_desce__margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-main-desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_image',
			[
				'label' => esc_html__( 'Common Image', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdci_common_image_width',
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
					'{{WRAPPER}} .bwdci-mainimage img' => 'width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdci_common_image_height',
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
					'{{WRAPPER}} .bwdci-mainimage img' => 'height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_commn_img_border',
				'selector' => '{{WRAPPER}} .bwdci-mainimage img',
			]
		);
		$this->add_responsive_control(
			'bwdci_commn_img_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainimage img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_commn_img_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdci-mainimage img',
			]
		);

		$this->add_responsive_control(
			'bwdci_commn_img_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainimage img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'bwdci_common_icon',
			[
				'label' => esc_html__( 'Common Icon', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdci_common_icon_tabs'
		);
		
		$this->start_controls_tab(
			'bwdci_common_icon_style_tab_normal',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_width',
			[
				'label' => esc_html__( 'Box Width', 'bwd-elementor-addons' ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_box_height',
			[
				'label' => esc_html__( 'Box Height', 'bwd-elementor-addons' ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'bwdci_common_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_common_icon_BG_type' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_common_icon_bg_gradient',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-mainicon',
				'condition' => [
					'bwdci_common_icon_BG_type' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_common_icon_border',
				'selector' => '{{WRAPPER}} .bwdci-mainicon',
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_common_icon_box_shadow',
				'selector' => '{{WRAPPER}} .bwdci-mainicon',
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdci_common_icon_style_tab_hover',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdci_common_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon:hover' => 'color: {{VALUE}}!important',
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type_hover',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdci_common_icon_BG_type_solid_hover',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon:hover' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdci_common_icon_BG_type_hover' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdci_common_icon_bg_gradient_hover',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdci-mainicon:hover',
				'condition' => [
					'bwdci_common_icon_BG_type_hover' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdci_common_icon_border_hover',
				'selector' => '{{WRAPPER}} .bwdci-mainicon:hover',
			]
		);

		$this->add_responsive_control(
			'bwdci_common_icon_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdci-mainicon:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdci_common_icon_box_shadow_hover',
				'selector' => '{{WRAPPER}} .bwdci-mainicon:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();

	}

	protected function render(){
		$settings = $this->get_settings_for_display();
		$bwdci_style_selection = $settings['bwdci_select_style_selection'];
			if( 'style1' === $bwdci_style_selection || 'style2' === $bwdci_style_selection ) {
			if( 'style1' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php echo '<i class="'.esc_attr($repet_circle['bwdci_button_icon']['value']).'"></i>'; ?></div>
								<?php endif; ?>
								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
									<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
								<?php endif; ?>
							</div>
						<?php } } ?>
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php //echo '<i class="'.esc_attr($repet_circle['bwdci_button_main_icon']).'"></i>'; ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php //echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdeb-MouseEvent.php' ; ?>
        	</div>
            <?php
        } else if( 'style2' === $bwdci_style_selection ) { ?>
			<div class="bwdci-ep-circle-info-1 bwdci-style-common">
				<div class="bwdci-ep-circle-info-wrap">
					<div class="bwdci-ep-circle-info-inner <?php echo esc_attr($settings['bwdci_info_inner_animation']); ?> <?php echo esc_attr($settings['bwdci_info_inner_animation_hover_pause']); ?>">
						
						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
							<div class="bwdci-ep-circle-info-sub-circle elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">
								<?php if ( $repet_circle['bwdci_icon_yes_no'] == 'icon' )  : ?>
									<div class="bwdci-icon-circle"><?php echo '<i class="'.esc_attr($repet_circle['bwdci_button_icon']['value']).'"></i>'; ?></div>
								<?php endif; ?>

								<?php if (!empty($repet_circle['bwdci_short_title'])) : ?>
									<div class="bwdci-title-circle"><?php echo esc_html( $repet_circle['bwdci_short_title'] );?></div>
								<?php endif; ?>

							</div>
						<?php } } ?>
						
					</div>
					<div class="bwdci-ep-circle-info-content">

						<?php if ( $settings['bwdci_main_repetater'] ) { 
						foreach (  $settings['bwdci_main_repetater'] as $repet_circle ) {
						?>
						
						<div class="bwdci-ep-circle-info-item elementor-repeater-item-<?php echo esc_attr( $repet_circle['_id'] ); ?>">

							<?php if ( $repet_circle['bwdci_main_icon_yes_no'] == 'icon' )  : ?>
								<div class="bwdci-main-icon">
									<a class="bwdci-mainicon" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_icon_url']['url']) ? $repet_circle['bwdci_button_main_icon_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_icon_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo '<i class="'.esc_attr($repet_circle['bwdci_button_main_icon']).'"></i>'; ?></a>
								</div>
							<?php endif; ?>

							<?php if ( $repet_circle['bwdci_main_image_yes_no'] == 'image' )  : ?>
								<div class="bwdci-main-image">
									<a class="bwdci-mainimage" href="<?php echo esc_url(isset($repet_circle['bwdci_button_main_image_url']['url']) ? $repet_circle['bwdci_button_main_image_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_button_main_image_url']['is_external']) ? 'target="_blank"' : ''); ?>><img src="<?php echo esc_url( $repet_circle['bwdci_main_image']['url'] ); ?>" alt="image"></a>
								</div>
							<?php endif; ?>
							
							<?php if (!empty($repet_circle['bwdci_main_title'])) : ?>
								<div class="bwdci-main-title">
									<a class="bwdci-maintitle" href="<?php echo esc_url(isset($repet_circle['bwdci_main_title_url']['url']) ? $repet_circle['bwdci_main_title_url']['url'] : ''); ?>" <?php echo esc_attr(($repet_circle['bwdci_main_title_url']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html( $repet_circle['bwdci_main_title'] );?></a>
								</div>
							<?php endif; ?>

							<?php if (!empty($repet_circle['bwdci_main_description'])) : ?>
								<div class="bwdci-main-desce"><?php echo esc_html( $repet_circle['bwdci_main_description'] );?></div>
							<?php endif; ?>


						</div>
						<?php } } ?>

					</div>
				</div>
				<?php require 'bwdeb-MouseEvent.php' ; ?>
        	</div>
            <?php
        }
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
    }
}