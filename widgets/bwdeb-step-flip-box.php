<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDStepFlipBox extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameStepFlipBox', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Step Flip Box', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle step-flip';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_script_depends() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdff_flipflop_content_section',
			[
				'label' => esc_html__( 'Step Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdff_style_selection',
			[
				'label' => esc_html__( 'Step Styles', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/service-flip-box/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]	
		);
		$this->add_control(
			'bwdff_step_column',
			[
				'label' => esc_html__( 'Column', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '3',
				'options' => [
					'4' => esc_html__( '4', 'bwd-elementor-addons' ),
					'3' => esc_html__( '3', 'bwd-elementor-addons' ),
					'2' => esc_html__( '2', 'bwd-elementor-addons' ),
					'1' => esc_html__( '1', 'bwd-elementor-addons' ),
				],
				'description' => esc_html__('Use 3 columns which are circle.', 'bwd-elementor-addons')
			]
		);
		$this->add_control(
			'bwdff_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'center' => esc_html__( 'Center', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdff_step_content_width',
			[
				'label' => esc_html__( 'Content Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'full_width',
				'options' => [
					'boxed' => esc_html__( 'Boxed', 'bwd-elementor-addons' ),
					'full_width' => esc_html__( 'Full Width', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdff_flipflop_step_content_box_section',
			[
				'label' => esc_html__( 'Content Boxes', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdff_flipflop_step',
			[
				'label' => esc_html__( 'Step', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('1', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_flipflop_step_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdff_flipflop_step_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_step_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front-content .bwdff-step-sr-no-for-style9, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front-content .bwdff-step-sr-no-style9, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-fornt .bwd-flip-box-content .bwd-flip-box-hedi, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-stock-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-sr-no',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_step_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front-content .bwdff-step-sr-no-for-style9, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front-content .bwdff-step-sr-no-style9, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-fornt .bwd-flip-box-content .bwd-flip-box-hedi, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-sr-no' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-stock-no' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_flipflop_step_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_step_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back-content .bwdff-step-sr-no-back-for-style9, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back-content .bwdff-step-sr-no-back-style9, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-sr-no, .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-stock-no',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_step_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back-content .bwdff-step-sr-no-back-for-style9, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back-content .bwdff-step-sr-no-back-style9, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-sr-no' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-stock-no' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_title_divider_step',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('LEARNING', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_flipflop_title_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdff_flipflop_title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-style7 .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-style7 .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_flipflop_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_title_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-back .bwd-flip-box-content .bwd-flip-box-hedi, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-back .bwd-flip-box-content .bwd-flip-box-hedi, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-step-front-content .bwdff-step-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-title' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-assistive-listening-systems',
					'library' => 'solid',
				],
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs02'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab02',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'bwdff_flipflop_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-style7 .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt .bwd-flip-box-content .bwd-filp-box-icon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon, ' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_icon_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-style7 .bwdff-step-icon' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-style7 .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'backgound: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdff_flipflop_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab02',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'bwdff_flipflop_icon_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_icon_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-step-icon::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon::after' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdff_flipflop_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-step-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-icon i, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-step-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_icon_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Etea minus.', 'bwd-elementor-addons'),
				'description' => esc_html__('Use 10 to 15 words only.', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs03'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab03',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-desc',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-bottom-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content .bwdff-step-desc' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab03',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_description_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-back .bwd-flip-box-content .bwd-filp-box-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content:hover .bwdff-step-desc',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-for7 .bwdff-content-inner .bwdff-step-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-back .bwd-flip-box-content .bwd-filp-box-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content:hover .bwdff-step-desc' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_descrition',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs05'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab05',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-33::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-33 .bwdff-stock-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-fronteee-a::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-fronteee, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-33::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-content-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt .bwd-flip-arrow, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-bg-shape' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-fornt-style2, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt:before' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-style7::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt:after' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt:after' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt .bwd-flip-arrow:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-fornt-style2 .bwd-flip-arrow:before' => 'border-right-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_another_shape_color',
			[
				'label' => esc_html__( 'Another Shape Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content-33 .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item-for7, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-sr-no-down-shape::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-sr-no-down-shape::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-sr-no::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front .bwdff-step-sr-no::after' => 'border-left-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item::before' => 'border-top-color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab05',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_back_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content-33 .bwdff-stock-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back-content-33::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-fronteee-back-a::after{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-backeee, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_back_shape_color',
			[
				'label' => esc_html__( 'Back Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-back-style2 .bwd-flip-arrow, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-33::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-content-back-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-bg-shape' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-back-style2, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-back:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-back:before' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-back:after' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-box-back-style2::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-back:after' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-back .bwd-flip-arrow:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-flip-card-box .bwd-flip-box-back-style2 .bwd-flip-arrow:before' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_another_back_shape_color',
			[
				'label' => esc_html__( 'Another Back Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content-33 .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-sr-no-down-shape::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-sr-no-down-shape::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-sr-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-sr-no::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back .bwdff-step-sr-no::after' => 'border-left-color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_boxshadow_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_service_icon_box_style_tabs_one'
		);
		$repeater->start_controls_tab(
			'bwdff_service_icon_box_border_font_tab06',
			[
				'label' => esc_html__( 'Font Border', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_responsive_control(
			'bwdff_compare_the_box_border_font',
			[
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'rem', 'em', '%'],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-for-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_border_color_font',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-for-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-front' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_border_font_style_font',
			[
				'label' => esc_html__( 'Border Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'dashed' => esc_html__( 'Dashed', 'bwd-elementor-addons' ),
					'dotted' => esc_html__( 'Dotted', 'bwd-elementor-addons' ),
					'double' => esc_html__( 'Double', 'bwd-elementor-addons' ),
				],
			]
		);
		$repeater->add_responsive_control(
            'bwdff_border_font_style_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-for-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-font' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_icon_box_border_back_tab06',
			[
				'label' => esc_html__( 'Back Border', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_responsive_control(
			'bwdff_compare_the_box_border_back',
			[
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'rem', 'em', '%'],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-for-back-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_border_color_back',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-for-back-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_border_back_style_back',
			[
				'label' => esc_html__( 'Border Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'dashed' => esc_html__( 'Dashed', 'bwd-elementor-addons' ),
					'dotted' => esc_html__( 'Dotted', 'bwd-elementor-addons' ),
					'double' => esc_html__( 'Double', 'bwd-elementor-addons' ),
				],
			]
		);
		$repeater->add_responsive_control(
            'bwdff_border_back_style_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-for-back-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-back' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_border_divider2',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_service_icon_box_style_tabs06'
		);
		$repeater->start_controls_tab(
			'bwd_service_icon_box_background_normal_tab06',
			[
				'label' => esc_html__( 'Font Box Shadow', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdff_flipflop_back_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab06',
			[
				'label' => esc_html__( 'Back Box Shadow', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdff_flipflop_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-back-content .bwdff-content-inner, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item .bwdff-step-front',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_border_dividers22652',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
            'bwdff_flipflop_single_box_normal_margin_s',
            [
                'label' => esc_html__('Box Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-step-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdff_flipflop_boxes',
			[
				'label' => esc_html__( 'Flip Boxes', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'flipflop_boxes_title' => esc_html__( 'Flip Box #1', 'bwd-elementor-addons' ),
					],
					[
						'flipflop_boxes_title' => esc_html__( 'Flip Box #2', 'bwd-elementor-addons' ),
					],
					[
						'flipflop_boxes_title' => esc_html__( 'Flip Box #3', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ flipflop_boxes_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdff_step_style_section',
			[
				'label' => esc_html__( 'Step Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdff_step_only_style8_section',
			[
				'label' => esc_html__( 'Section Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'bwdff_style_selection' => 'style8'
				],
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_step_box_shape_background',
				'label' => esc_html__( 'Shape Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'condition' => [
					'bwdff_style_selection' => 'style8'
				],
				'selector' => '{{WRAPPER}} .bwdff-step-9::before',
				'separator' => 'after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_step_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdff-step-common',
			]
		);
		$this->add_responsive_control(
            'bwdff_step_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-step-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdff_step_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-step-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdff_step_column = $settings['bwdff_step_column'];
		if('1' === $bwdff_step_column){
			$bwdff_step_md_dev_clmn = 'col-md-12';
			$bwdff_step_sm_dev_clmn = 'col-sm-12';
			$bwdff_step_lg_dev_clmn = 'col-lg-12';
			$bwdff_step_xl_dev_clmn = 'col-xl-12';
		} elseif('2' === $bwdff_step_column){
			$bwdff_step_md_dev_clmn = 'col-md-6';
			$bwdff_step_sm_dev_clmn = 'col-sm-6';
			$bwdff_step_lg_dev_clmn = 'col-lg-6';
			$bwdff_step_xl_dev_clmn = 'col-xl-6';
		} elseif('3' === $bwdff_step_column){
			$bwdff_step_md_dev_clmn = 'col-md-4';
			$bwdff_step_sm_dev_clmn = 'col-sm-4';
			$bwdff_step_lg_dev_clmn = 'col-lg-4';
			$bwdff_step_xl_dev_clmn = 'col-xl-4';
		} elseif('4' === $bwdff_step_column){
			$bwdff_step_md_dev_clmn = 'col-md-3';
			$bwdff_step_sm_dev_clmn = 'col-sm-3';
			$bwdff_step_lg_dev_clmn = 'col-lg-3';
			$bwdff_step_xl_dev_clmn = 'col-xl-3';
		}

		$bwdff_content_width = $settings['bwdff_step_content_width'];
		if('full_width' === $bwdff_content_width){
			$bwdff_content_c_f = 'container-fluid';
		} elseif('boxed' === $bwdff_content_width){
			$bwdff_content_c_f = 'container';
		}
		if('style1' == $settings['bwdff_style_selection'] || 'style2' == $settings['bwdff_style_selection']){ 
		if('style1' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-common bwdff-step-1">
			<div class="<?php echo esc_attr($bwdff_content_c_f); ?>">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="'.esc_attr($bwdff_step_md_dev_clmn).' '. esc_attr($bwdff_step_lg_dev_clmn).' '. esc_attr($bwdff_step_xl_dev_clmn).' '.esc_attr($bwdff_step_sm_dev_clmn).' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-step-item">
							<div class="bwdff-step-front bwdff-step-for-border <?php if('solid' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-solid <?php } elseif('dashed' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dashed <?php } elseif('dotted' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dotted <?php } elseif('double' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-double <?php } ?>">
								<div class="bwdff-step-front-content">
									<div class="bwdff-step-sr-no"><?php echo esc_html($item['bwdff_flipflop_step']); ?></div>
									<div class="bwdff-step-title">
									<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
									</div>
								</div>
								<span class="bwdff-bg-shape"></span>
							</div>
							<div class="bwdff-step-back bwdff-step-for-back-border <?php if('solid' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-solid <?php } elseif('dashed' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dashed <?php } elseif('dotted' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dotted <?php } elseif('double' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-double <?php } ?>">
								<div class="bwdff-step-back-content">
									<div class="bwdff-step-icon">
										<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
									</div>
									<div class="bwdff-step-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
								</div>
								<span class="bwdff-bg-shape"></span>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		} elseif('style2' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-step-common bwdff-step-3">
			<div class="<?php echo esc_attr($bwdff_content_c_f); ?>">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-step-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-step-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
				echo '<div class="col-sm-6 '. esc_attr($bwdff_step_lg_dev_clmn).' '. esc_attr($bwdff_step_xl_dev_clmn).esc_attr( ' elementor-repeater-item-'. $item['_id'] ) . '">'; ?>	
					<div class="bwd-flip-card-box bwdff-step-item">
						<div class="bwd-flip-box-fornt bwd-flip-box-fornt-style2 bwdff-step-for-border <?php if('solid' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-solid <?php } elseif('dashed' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dashed <?php } elseif('dotted' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dotted <?php } elseif('double' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-double <?php } ?>">
							<div class="bwd-flip-arrow"></div>
							<div class="bwd-flip-box-content">
								<div class="bwd-flip-box-hedi">
									<?php echo esc_html($item['bwdff_flipflop_step']); ?>
								</div>
								<div class="bwd-filp-box-icon">
									<i class="<?php echo esc_attr($item['bwdff_flipflop_icon']['value']); ?>"></i>
								</div>
							</div>
						</div>
						<div class="bwd-flip-box-back bwd-flip-box-back-style2 bwdff-step-for-back-border <?php if('solid' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-solid <?php } elseif('dashed' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dashed <?php } elseif('dotted' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dotted <?php } elseif('double' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-double <?php } ?>">
							<div class="bwd-flip-arrow"></div>
							<div class="bwd-flip-box-content">
								<div class="bwd-flip-box-hedi">
									<?php echo esc_html($item['bwdff_flipflop_title']); ?> 
								</div>
								<div class="bwd-filp-box-icon">
									<?php echo esc_html($item['bwdff_flipflop_description']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
