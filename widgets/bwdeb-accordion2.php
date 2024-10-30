<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDACAccordionCreatoR extends Widget_Base {

	public function get_name() {
		return esc_html__('Accordion', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Accordion', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-accordion';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'ab_content_selection',
			[
				'label' => esc_html__( 'Accordion Contents', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'ab_accordion_style_selection',
			[
				'label' => esc_html__( 'Accordion Styles', 'bwd-elementor-addons' ),
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/accordion" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'ab_accordion_items',
			[
				'label' => esc_html__( 'Items', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'ab_accordion_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'What is lorem ipsum text?', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->start_controls_tabs(
			'ab_accordion_total_title_style_tabs'
		);

		$repeater->start_controls_tab(
			'ab_accordion_total_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ab_accordion_title_typography_reside',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed',
			]
		);
		$repeater->add_control(
			'ab_accordion_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ab_accordion_title_bg_color',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'ab_accordion_title_text_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_title_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed',
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_title_border-radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ab_accordion_title_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed',
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_title_icon_gap',
			[
				'label' => esc_html__( 'Title Spacing', 'bwd-elementor-addons' ),
				'description' => esc_html__( 'Spacing between icon and title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'padding-inline-start: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_total_title_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'ab_accordion_total_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ab_accordion_title_hover_typography_reside',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover',
			]
		);
		$repeater->add_control(
			'ab_accordion_title_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ab_accordion_title_hover_bg_color',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_title_hover_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover',
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_title_hover_border-radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ab_accordion_title_hover_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover',
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_title_icon_hover_gap',
			[
				'label' => esc_html__( 'Title Spacing', 'bwd-elementor-addons' ),
				'description' => esc_html__( 'Spacing between icon and title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-title .ab-collapsed:hover' => 'padding-inline-start: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'ab_accordion_total_title_style_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'ab_accordion_title_active_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.ab-Accordion-default.active .ab-panel-title .ab-collapsed' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_title_active_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.ab-Accordion-default.active .ab-panel-title .ab-collapsed' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_title_active_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.ab-Accordion-default.active .ab-panel-title .ab-collapsed',
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_title_active_border-radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}.ab-Accordion-default.active .ab-panel-title .ab-collapsed' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ab_accordion_title_active_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.ab-Accordion-default.active .ab-panel-title .ab-collapsed',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$repeater->add_control(
			'ab_accordion_inner_content_heading',
			[
				'label' => esc_html__( 'Collapsed Content', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->start_controls_tabs(
			'ab_accordion_inner_content_tabs'
		);

		$repeater->start_controls_tab(
			'ab_accordion_inner_content_tab',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_image_show',
			[
				'label' => esc_html__( 'Show Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'ab_accordion_inner_image_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_title_show',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'What is lorem ipsum text', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'ab_accordion_inner_title_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_desc_show',
			[
				'label' => esc_html__( 'Show Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'ab_accordion_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'condition' => [
					'ab_accordion_inner_desc_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_btn_show',
			[
				'label' => esc_html__( 'Show Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'ab_accordion_inner_content_style_tab',
			[
				'label' => esc_html__( 'Style', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'more_options',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'condition' => [
					'ab_accordion_inner_image_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_inner_image_width',
			[
				'label' => esc_html__( 'Image Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-img-wrap' => 'flex-basis: {{SIZE}}%;',
				],
				'condition' => [
					'ab_accordion_inner_image_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_inner_image_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-img-wrap',
				'condition' => [
					'ab_accordion_inner_image_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_inner_image_border-radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-img-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'ab_accordion_inner_image_show' => 'yes',
				],
            ]
        );
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ab_accordion_inner_image_box_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-img-wrap',
				'condition' => [
					'ab_accordion_inner_image_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_title_heading',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'ab_accordion_inner_title_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ab_accordion_inner_title_typography',
				'selector' =>'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-title',
				'condition' => [
					'ab_accordion_inner_title_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_inner_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'ab_accordion_inner_title_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'ab_accordion_inner_title_text_shadow',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-title',
				'condition' => [
					'ab_accordion_inner_title_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_title_align',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-title' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'ab_accordion_inner_title_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_inner_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'ab_accordion_inner_title_show' => 'yes',
				],
            ]
        );
		$repeater->add_control(
			'ab_accordion_inner_desc_heading',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'ab_accordion_inner_desc_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ab_accordion_description_typography',
				'selector' =>'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-desc',
				'condition' => [
					'ab_accordion_inner_desc_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-desc' => 'color: {{VALUE}}',
				],
				'condition' => [
					'ab_accordion_inner_desc_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_description_indentation',
            [
                'label' => esc_html__( 'List Indent', 'bwd-elementor-addons' ),
				'description' => esc_html__( "It's only applicable for richtext editor list", 'bwd-elementor-addons' ),
                'type' => Controls_Manager::DIMENSIONS,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-inner-desc ul' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
			'ab_accordion_description_text_indentation',
			[
				'label' => esc_html__( 'Text Indent From Bullet', 'bwd-elementor-addons' ),
				'description' => esc_html__( "It's only applicable for richtext editor list", 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-inner-desc ul li' => 'padding-inline-start: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_desc_align',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-inner-desc p' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'ab_accordion_inner_desc_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-desc' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'ab_accordion_inner_desc_show' => 'yes',
				],
            ]
        );
		$repeater->add_control(
			'ab_accordion_inner_btn_heading',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ab_accordion_btn_typography',
				'selector' =>'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn',
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_btn_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn' => 'color: {{VALUE}}',
				],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_btn_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_btn_align',
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn-wrap' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_btn_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn',
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_btn_border-radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
            ]
        );
		$repeater->add_responsive_control(
            'ab_accordion_btn_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
            ]
        );
		$repeater->add_responsive_control(
            'ab_accordion_btn_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body .ab-inner-btn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
				'condition' => [
					'ab_accordion_inner_btn_show' => 'yes',
				],
            ]
        );
		$repeater->add_control(
			'ab_accordion_collapsed_box_heading',
			[
				'label' => esc_html__( 'Collapsed Box', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ab_accordion_collapsed_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_collapsed_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body',
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_collapsed_border-radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
            'ab_accordion_collapsed_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
            'ab_accordion_collapsed_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .ab-panel-body' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$repeater->add_control(
			'ab_accordion_divider_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		
		$repeater->add_control(
			'ab_accordion_collapsed_icon',
			[
				'label' => esc_html__( 'Collapsed Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-down',
					'library' => 'solid',
				],
			]
		);
		
		$repeater->add_control(
			'ab_accordion_expand_icon',
			[
				'label' => esc_html__( 'Expand Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-up',
					'library' => 'solid',
				],
			]
		);
		$repeater->start_controls_tabs(
			'ab_accordion_box_expand_icon_style_tabs'
		);

		$repeater->start_controls_tab(
			'ab_accordion_box_collapsed_icon_style_tab',
			[
				'label' => esc_html__( 'Collapsed', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'ab_accordion_box_collapsed_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_box_collapsed_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_box_collapsed_icon_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon',
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_box_collapsed_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_box_collapsed_icon_box_size',
			[
				'label' => esc_html__( 'Icon Box Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'ab_accordion_box_expand_icon_tab',
			[
				'label' => esc_html__( 'Expand', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'ab_accordion_box_expand_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon svg' => 'fill: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_box_expand_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ab_accordion_box_expand_icon_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon',
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_box_expand_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'ab_accordion_box_expand_icon_box_size',
			[
				'label' => esc_html__( 'Icon Box Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$repeater->add_responsive_control(
			'ab_accordion_box_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon, {{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon' => 'font-size: {{SIZE}}{{UNIT}};',
					' {{WRAPPER}} {{CURRENT_ITEM}} .ab-collapsed-icon svg, {{WRAPPER}} {{CURRENT_ITEM}} .ab-expand-icon svg' => 'inline-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$repeater->add_control(
			'ab_accordion_divider_s_k',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
			'ab_accordion_box_item_gap',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
            'ab_accordion_total_box_padding',
            [
                'label' => esc_html__('Item Box Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$repeater->add_responsive_control(
            'ab_accordion_total_box_margin',
            [
                'label' => esc_html__('Item Box Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'ab_total_accordion_box',
			[
				'label' => esc_html__( 'Accordion', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'ab_accordion_title' => esc_html__( 'Accordion #1', 'bwd-elementor-addons' ),
					],
					[
						'ab_accordion_title' => esc_html__( 'Accordion #2', 'bwd-elementor-addons' ),
					],
					[
						'ab_accordion_title' => esc_html__( 'Accordion #3', 'bwd-elementor-addons' ),
					],
					[
						'ab_accordion_title' => esc_html__( 'Accordion #4', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ ab_accordion_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'ab_accordion_builder_style_section',
			[
				'label' => esc_html__( 'Accordion Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ab_accordion_builder_section_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .ab-accordion-all',
			]
		);
		$this->add_responsive_control(
            'cbtns_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ab-accordion-all' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'cbtns_buttons_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ab-accordion-all' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$styles = $settings['ab_accordion_style_selection'];
		 
		// Social Link
		if ( ! empty( $settings['ab_accordion_inner_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'ab_accordion_inner_btn_link', $settings['ab_accordion_inner_btn_link'] );
		}
		if($settings['ab_accordion_style_selection'] == 'style1' || $settings['ab_accordion_style_selection'] == 'style2'){
		?>
		<div class="ab-accordion-all">
			<?php
			if ( $styles ){ ?>
				<div class="ab-Accordion-<?php echo $styles ?> ab-accordion-common">
				<?php
				if ( $settings['ab_total_accordion_box'] ) {
					foreach (  $settings['ab_total_accordion_box'] as $item ) {
						echo '<div class="ab-Accordion-default elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' ?>
						<div class="ab-Accordion-heading" >
							<h4 class="ab-panel-title">
								<?php
								$allowStyle = array('8', '11', '12', '17', '26');
								if( !in_array($styles, $allowStyle) ){
									include 'accordion/ab-collapsed.php';
									include 'accordion/ab-collapsed-icon.php';
									include 'accordion/ab-expand-icon.php'; }
								if( in_array($styles, $allowStyle) ){
									include 'accordion/ab-collapsed-icon.php';
									include 'accordion/ab-expand-icon.php';
									include 'accordion/ab-collapsed.php';
								}?>
							</h4>
						</div>
						<div id="collapseOne" class="ab-panel-collapse in">
							<div class="ab-panel-body">
								<div class="ab-panel-content-wrapper">
									<?php if($item['ab_accordion_inner_image_show'] === 'yes') { ?>
									<div class="ab-img-wrap">
										<img src="<?php echo esc_attr($item['ab_accordion_inner_image']['url']); ?>" alt="">
									</div>
									<?php } ?>
									<div class="ab-content-wrap">
										<?php if($item['ab_accordion_inner_title_show'] === 'yes') { ?>
											<h2 class="ab-inner-title"><?php echo esc_html( $item['ab_accordion_inner_title']); ?></h2>
										<?php } ?>
										<?php if($item['ab_accordion_inner_desc_show'] === 'yes') { ?>
											<div class="ab-inner-desc"><?php echo $item['ab_accordion_description']; ?></div>
										<?php } ?>
										<?php if($item['ab_accordion_inner_btn_show'] === 'yes') { ?>
											<div class="ab-inner-btn-wrap">
												<a href="<?php echo esc_url( $item['ab_accordion_inner_btn_link']['url']); ?>" class="ab-inner-btn"><?php echo $item['ab_accordion_inner_btn_text']; ?></a>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					} ?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
	
	
}
