<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDServiceFlipBox extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameServiceFlipBox', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Service Flip Box', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle service-flip';
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
				'label' => esc_html__( 'Service Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdff_style_selection',
			[
				'label' => esc_html__( 'Service Styles', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/service-flip-box/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdff_column',
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
			'bwdff_content_width',
			[
				'label' => esc_html__( 'Content Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'boxed',
				'options' => [
					'boxed' => esc_html__( 'Boxed', 'bwd-elementor-addons' ),
					'full_width' => esc_html__( 'Full Width', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdff_flipflop_content_box_section',
			[
				'label' => esc_html__( 'Service Boxes', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdff_flipflop_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Development', 'bwd-elementor-addons'),
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
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content .bwdff-service-title',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content .bwdff-service-title' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-service-front-content .bwdff-service-title',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-service-front-content .bwdff-service-title' => 'color: {{VALUE}}',
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
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_service_icon_box_style_tabs02'
		);
		$repeater->start_controls_tab(
			'bwdff_service_icon_box_background_normal_tab02',
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content .bwdff-service-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_icon_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content .bwdff-service-icon' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content .bwdff-service-icon::before' => 'border-color: {{VALUE}}',
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content .bwdff-service-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_icon_box_background_hover_tab02',
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-service-icon, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-service-front-content .bwdff-service-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_icon_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-service-icon::before, {{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-service-front-content .bwdff-service-icon' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .bwdff-service-front-content .bwdff-service-icon::before' => 'border-color: {{VALUE}}',
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content .bwdff-service-icon' => 'font-size: {{SIZE}}{{UNIT}};',
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
				'default' => esc_html__('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et
				ea minus enim assumenda alias, sed error expedita ullam ab cum aliquid ex repellat
				vitae aspernatur.', 'bwd-elementor-addons'),
				'description' => esc_html__('Use 10 to 15 words only.', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_service_icon_box_style_tabs03'
		);
		$repeater->start_controls_tab(
			'bwdff_service_icon_box_background_normal_tab03',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item:hover .bwdff-service-back .bwdff-service-back-content .bwdff-service-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-service-desc',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item:hover .bwdff-service-back .bwdff-service-back-content .bwdff-service-desc, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-service-desc' => 'color: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_icon_box_background_hover_tab03',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_description_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content:hover .bwdff-service-desc',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content:hover .bwdff-service-desc' => 'color: {{VALUE}}',
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

		$repeater->add_control(
			'bwdff_flipflop_button',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('More', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_button_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr( 'https://www.your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_service_icon_box_style_tabs04'
		);
		$repeater->start_controls_tab(
			'bwdff_service_icon_box_background_normal_tab04',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_button_normal_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_button_normal_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_button_normal_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_button__normalbg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
            'bwdff_flipflop_button_normal_padding',
            [
                'label' => esc_html__('Button Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
            'bwdff_flipflop_button_normal_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_icon_box_background_hover_tab04',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_flipflop_button_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_button_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_button_hover_hover_bg_color',
			[
				'label' => esc_html__( 'Hover BG Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
            'bwdff_flipflop_button_hover_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
            'bwdff_flipflop_button_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_button_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'bwdff_service_icon_box_style_tabs05'
		);
		$repeater->start_controls_tab(
			'bwdff_service_icon_box_background_normal_tab05',
			[
				'label' => esc_html__( 'Font Box', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-content',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-common-for-shap-b-lrtb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-front .bwdff-service-front-content .bwdff-top-shape' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-common-for-shap-b-lrtb::before' => 'border-left-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-common-for-shap-a-lrtb::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content::after' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-common-for-shap-a-lrtb::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content .bwdff-service-title::before' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content .bwdff-service-icon' => 'outline-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content .bwdff-service-title' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-common-for-shap, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-common-for-shap-a::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-common-for-shap-b::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content::after,  {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content::before' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_another_shape_color',
			[
				'label' => esc_html__( 'Another Shape Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-front .bwdff-service-front-content .bwdff-top-shape .bwdff-top-shape-inner::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-front .bwdff-service-front-content .bwdff-top-shape .bwdff-top-shape-inner::after' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-front::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content .srl-no, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content .bwdff-service-icon::before' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_icon_box_background_hover_tab05',
			[
				'label' => esc_html__( 'Back Box', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_flipflop_back_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-back .bwdff-service-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back .bwdff-service-back-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back .bwdff-service-back-content',
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_back_shape_color',
			[
				'label' => esc_html__( 'Back Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back .bwdff-service-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back .bwdff-service-back-content::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back .bwdff-service-back-content' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_another_back_shape_color',
			[
				'label' => esc_html__( 'Another Back Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-back::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back .bwdff-service-back-content .bwdff-service-icon::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back-content .bwdff-read-more:hover' => 'background: {{VALUE}}',
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-cmn-bdr, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-border-bwd' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_border_color_font',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front .bwdff-service-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-cmn-bdr, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-border-bwd' => 'border-color: {{VALUE}}',
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
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-cmn-bdr, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-front-border-bwd' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_border_color_back',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back' => 'border-color: {{VALUE}}',
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
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-back' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
			'bwdff_service_icon_box_style_tabs06'
		);
		$repeater->start_controls_tab(
			'bwdff_service_icon_box_background_normal_tab06',
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
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdff_icon_box_background_hover_tab06',
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
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item .bwdff-service-back',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_border_dividerss22652',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		
		$repeater->add_responsive_control(
            'bwdff_flipflop_single_box_normal_margin_ss',
            [
                'label' => esc_html__('Box Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-service-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'bwdff_flipflop_title' => esc_html__( 'Development', 'bwd-elementor-addons' ),
					],
					[
						'bwdff_flipflop_title' => esc_html__( 'Programming', 'bwd-elementor-addons' ),
					],
					[
						'bwdff_flipflop_title' => esc_html__( 'JavaScript', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdff_flipflop_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdff_service_style_section',
			[
				'label' => esc_html__( 'Service Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_service_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdff-common-service',
			]
		);
		$this->add_responsive_control(
            'bwdff_service_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-common-service' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdff_service_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-common-service' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdff_column = $settings['bwdff_column'];
		if('1' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-12';
			$bwdff_lg_dev_clmn = 'col-lg-12';
			$bwdff_xl_dev_clmn = 'col-xl-12';
		} elseif('2' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-6';
			$bwdff_lg_dev_clmn = 'col-lg-6';
			$bwdff_xl_dev_clmn = 'col-xl-6';
		} elseif('3' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-4';
			$bwdff_lg_dev_clmn = 'col-lg-4';
			$bwdff_xl_dev_clmn = 'col-xl-4';
		} elseif('4' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-3';
			$bwdff_lg_dev_clmn = 'col-lg-3';
			$bwdff_xl_dev_clmn = 'col-xl-3';
		}

		$bwdff_content_width = $settings['bwdff_content_width'];
		if('full_width' === $bwdff_content_width){
			$bwdff_content_c_f = 'container-fluid';
		} elseif('boxed' === $bwdff_content_width){
			$bwdff_content_c_f = 'container';
		}
		
		if('style1' == $settings['bwdff_style_selection'] || 'style2' == $settings['bwdff_style_selection']){ 
		if('style1' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-common-service bwdff-service-1">
			<div class="<?php echo esc_attr($bwdff_content_c_f); ?>">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-service-item-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-service-item-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-service-item-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="'.esc_attr($bwdff_lg_dev_clmn).' '.esc_attr($bwdff_xl_dev_clmn).' '.esc_attr($bwdff_sm_dev_clmn).' bwdff-item-1 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-service-item">
							<div class="bwdff-service-front bwdff-service-front-cmn-bdr <?php if('solid' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-solid<?php } elseif('dashed' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dashed <?php } elseif('dotted' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dotted <?php } elseif('double' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-double <?php } ?>">
								<div class="bwdff-service-front-content">
									<div class="bwdff-top-shape">
										<div class="bwdff-top-shape-inner"></div>
									</div>
									<div class="bwdff-service-icon">
										<i class="<?php echo esc_attr( $item['bwdff_flipflop_icon']['value'] ); ?>"></i>
									</div>
									<div class="bwdff-service-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?></div>
								</div>
							</div>
							<div class="bwdff-service-back <?php if('solid' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-solid <?php } elseif('dashed' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dashed <?php } elseif('dotted' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dotted <?php } elseif('double' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-double <?php } ?>">
								<div class="bwdff-service-back-content">
									<div class="bwdff-service-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									<a href="<?php echo esc_url($item['bwdff_flipflop_button_link']['url']); ?>" class="bwdff-read-more"><?php echo esc_html($item['bwdff_flipflop_button']); ?></a>
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
		</div>
		<?php
		} elseif('style2' === $settings['bwdff_style_selection']){ 
		?>
		<div class="bwdff-common-service bwdff-service-2">
			<div class="<?php echo esc_attr($bwdff_content_c_f); ?>">
				<?php
				if('left' === $settings['bwdff_alignment']){
				?>
				<div class="bwdff-service-item-wrapper row justify-content-start">
					<?php
					} elseif('center' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-service-item-wrapper row justify-content-center">
							<?php
					} elseif('right' === $settings['bwdff_alignment']){
						?>
						<div class="bwdff-service-item-wrapper row justify-content-end">
						<?php
					}
					if ( $settings['bwdff_flipflop_boxes'] ) {
						foreach (  $settings['bwdff_flipflop_boxes'] as $item ) {
					echo '<div class="'. esc_attr($bwdff_lg_dev_clmn) .' col-sm-6 '. esc_attr($bwdff_xl_dev_clmn) .' bwdff-item-1 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-service-item">
							<div class="bwdff-service-front">
								<div class="bwdff-service-front-content bwdff-service-front-border-bwd bwdff-common-for-shap-a bwdff-common-for-shap-b <?php if('solid' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-solid <?php } elseif('dashed' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dashed <?php } elseif('dotted' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-dotted <?php } elseif('double' === $item['bwdff_border_font_style_font']){ ?>bwdff-common-class-style-double <?php } ?>">
									<div class="bwdff-service-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?></div>
									<div class="bwdff-service-icon">
										<i class="<?php echo esc_attr( $item['bwdff_flipflop_icon']['value'] ); ?>"></i>
									</div>
								</div>
							</div>
							<div class="bwdff-service-back">
								<div class="bwdff-service-back-content <?php if('solid' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-solid <?php } elseif('dashed' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dashed <?php } elseif('dotted' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dotted <?php } elseif('double' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-double <?php } ?>">
									<div class="bwdff-service-title"><?php echo esc_html($item['bwdff_flipflop_title']); ?></div>
									<div class="bwdff-service-desc"><?php echo esc_html($item['bwdff_flipflop_description']); ?></div>
									<a href="<?php echo esc_url($item['bwdff_flipflop_button_link']['url']); ?>" class="bwdff-read-more"><?php echo esc_html($item['bwdff_flipflop_button']); ?></a>
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
		</div>
		<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
