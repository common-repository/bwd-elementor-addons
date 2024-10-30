<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDCTACallToAction extends \Elementor\Widget_Base {


	public function get_name() {
		return 'CallToAction';
	}

	public function get_title() {
		return esc_html__( 'Call To Action', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-cta bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'call to action', 'call', 'call to'. 'contact', 'form' ];
	}



	protected function register_controls() {

		$this->start_controls_section(
			'bwdcta_call_to_action_section',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/call-to-action/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_content',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_main_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( "Let’s try our service now", 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( "Do you want’to get promo code regularly?", 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your sub title here', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style10' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sale_title',
			[
				'label' => esc_html__( 'Sale Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'FLASH SALE', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type sale title here', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style6', 'style7', 'style8', 'style10' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_discount_title',
			[
				'label' => esc_html__( 'Discount', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '50% OFF', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type discount here', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style3', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Auto-layout for flexbox grid columns also the working the width of one column and have .', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text1_switch',
			[
				'label' => esc_html__( 'Button One', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text1',
			[
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Start Now', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your button text here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_btn_text1_switch' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn1_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_btn_text1_switch' => 'yes',
				],
				'default' => [
					'url' => 'bestwpdeveloper.com',
					'is_external' => true,
					'nofollow' => false,
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text2_switch',
			[
				'label' => esc_html__( 'Button Two', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_text2',
			[
				'label' => esc_html__( 'Button Two Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Start Now', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your button text here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
					'bwdcta_call_to_action_btn_text2_switch' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_style_tab',
		    [
		        'label' => esc_html__('Title','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_title_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_title_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_title',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_sub_title_tab',
		    [
		        'label' => esc_html__('Sub Title','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style10' ],
				],
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_sub_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sub_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_sub_title_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_p',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_description_tab',
		    [
		        'label' => esc_html__('Description','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_disce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_disce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_description_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_disce',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_sale_tab',
		    [
		        'label' => esc_html__('Sale','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style6', 'style7', 'style8', 'style10' ],
				],
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_sale_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_title_content .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_title_content .bwd_cta_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_sale_typography',
				'selector' => '{{WRAPPER}} .bwd_title_content .bwd_cta_title',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_discount_tab',
		    [
		        'label' => esc_html__('Discount','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style3', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11' ],
				],
		   
		    ]
		);
		$this->add_control(
			'bwdcta_call_to_action_discount_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_persent' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_discount_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover .bwd_cta_persent' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_discount_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_persent',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_btn_one_tab',
		    [
		        'label' => esc_html__('Button','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdcta_call_to_action_btn_one_style_tabs'
		);
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_one_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_spacing',
			[
				'label' => esc_html__( 'Spacing', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_one_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_hover_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover',
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_one_bg_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_one_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_one_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_btn_two_tab',
		    [
		        'label' => esc_html__('Button Two','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style5', 'style9', 'style10', 'style13' ],
				],
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdcta_call_to_action_btn_two_style_tabs'
		);
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_two_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_typography',
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcta_call_to_action_btn_two_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_hover_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover',
			]
		);
		$this->add_control(
			'bwdcta_call_to_action_btn_two_bg_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_btn_two_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_btn_two_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd_cta_button .bwd_cta_btn2:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_shape',
		    [
		        'label' => esc_html__('Shape Image','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcta_call_to_action_style!' => [ 'style1', 'style2', 'style10' ],
				],
		   
		    ]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_shape_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd_cta_img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdcta_call_to_action_box_tab',
		    [
		        'label' => esc_html__('Wrapper Box','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdcta_call_to_action_box_style_tabs'
		);
		$this->start_controls_tab(
			'bwdcta_call_to_action_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_margin',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcta_call_to_action_box_style_hover_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcta_call_to_action_box_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-call-to-action-wrapper:hover',
			]
		);
		$this->add_responsive_control(
			'bwdcta_call_to_action_box_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-call-to-action-wrapper:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$main_title = $settings['bwdcta_call_to_action_main_title'];
		$sub_title = $settings['bwdcta_call_to_action_sub_title'];
		$sale_title = $settings['bwdcta_call_to_action_sale_title'];
		$discount_title = $settings['bwdcta_call_to_action_discount_title'];
		$description = $settings['bwdcta_call_to_action_description'];
		$btn1_text = $settings['bwdcta_call_to_action_btn_text1'];
		$btn2_text = $settings['bwdcta_call_to_action_btn_text2'];
		if ( ! empty( $settings['bwdcta_call_to_action_btn1_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdcta_call_to_action_btn1_link', $settings['bwdcta_call_to_action_btn1_link'] );
		}
		if ('style1' == $settings['bwdcta_call_to_action_style'] || 'style2' == $settings['bwdcta_call_to_action_style']) { 
		if ('style1' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_2 bwd-call-to-action-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="bwd_wraper_2">
                            <div class="bwd_shape1">
                                <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img1.png'); ?>" alt="">
                            </div>
                            <div class="bwd_shape2">
                                <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img3.png'); ?>" alt="">
                            </div>
                            <div class="bwd_shape3">
                                <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img.png'); ?>" alt="">
                            </div>
                            <div class="bwd_shape4">
                                <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_2/img.png'); ?>" alt="">
                            </div>
                            <div class="bwd_content">
                                <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?> </div>
                                <div class="bwd_cta_button">
                                    <a class="bwd_cta_btn" <?php $this->print_render_attribute_string( 'bwdcta_call_to_action_btn1_link' ); ?>><?php echo esc_html( $btn1_text ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		} elseif ('style2' === $settings['bwdcta_call_to_action_style']) { 
		?>
		<div class="bwd_calltoaction_3 bwd-call-to-action-wrapper">
            <div class="bwd_bg_3 bwd-call-to-action-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="bwd_wraper_3">
                                <div class="bwd_shape1_3">
                                    <div class="bwd_shape1_div">
                                        <div class="bwd_shape2_div">
                                            <div class="bwd_shape3_div"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bwd_shape2_3">
                                    <div class="bwd_shape1_div">
                                        <div class="bwd_shape2_div">
                                            <div class="bwd_shape3_div"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bwd_shape3_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img10.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape4_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img5.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape5_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img9.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape6_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img7.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape7_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img2.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape8_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img8.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape9_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img6.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape10_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img3.png'); ?>" alt="">
                                </div>
                                <div class="bwd_shape11_3">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) .'../assets/public/img/designs_3/img4.png'); ?>" alt="">
                                </div>
                                <div class="bwd_content">
                                    <div class="bwd_cta_title"><?php echo esc_html( $main_title ); ?></div>
                                    <div class="bwd_cta_disce"><?php echo esc_html( $description ); ?></div>
                                    <div class="bwd_cta_button">
                                        <a class="bwd_cta_btn" <?php $this->print_render_attribute_string( 'bwdcta_call_to_action_btn1_link' ); ?>><?php echo esc_html( $btn1_text ); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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