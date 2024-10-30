<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDIBIconbox extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbib-icon-box';
	}

	public function get_title() {
		return esc_html__( 'Icon Box', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return ' eicon-info-box bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'icon box', 'icon', 'info box'. 'box' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdib_pricing_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdib_icon_box_style',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/icon-box/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdib-icon-box_column_option',
			[
				'label' => esc_html__( 'Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '3',
				'options' => [
					'12'  => esc_html__( '1', 'bwd-elementor-addons' ),
					'6' => esc_html__( '2', 'bwd-elementor-addons' ),
					'4' => esc_html__( '3', 'bwd-elementor-addons' ),
					'3' => esc_html__( '4', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdib-icon-box_column_gap',
			[
				'label' => esc_html__( 'Columns Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'  => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'gx-0' => esc_html__( 'No Gap', 'bwd-elementor-addons' ),
					'gx-1' => esc_html__( 'Narrrow', 'bwd-elementor-addons' ),
					'gx-2' => esc_html__( 'Extended', 'bwd-elementor-addons' ),
					'gx-3' => esc_html__( 'Wide', 'bwd-elementor-addons' ),
					'gx-4' => esc_html__( 'Wider', 'bwd-elementor-addons' ),
					'gx-5' => esc_html__( 'Extra Wider', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdib-icon-box_row_gap',
			[
				'label' => esc_html__( 'Row Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdib_icon_box_content',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->start_controls_tabs(
			'bwdib_icon_box_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdib_icon_box_style_content_tab',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-globe',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_link',
			[
				'label' => esc_html__( 'Box Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'label_block' => true,
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdib_icon_box_style_style_tab',
			[
				'label' => esc_html__( 'Style', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_style',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle i' => 'color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle svg' => 'fill: {{VALUE}}; stroke: {{VALUE}};',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_bg_color',
			[
				'label' => esc_html__( 'Icon BG Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-bg-color, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-bg-colorb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-bg-colora::after' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_bg_solid_color',
			[
				'label' => esc_html__( 'Shape Solid BG Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shape, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapeb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapea::after' => 'background-color: {{VALUE}}!important',
					' {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapebb::before' => 'border-right-color: {{VALUE}}!important; border-bottom-color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_shape_bg_color_heading',
			[
				'label' => esc_html__( 'Shape Gradient Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdib_icon_box_shape_bg_gradient_color',
				'types' => ['gradient' ],
				'exclude' => [ 'image', 'classic' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shape, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapeb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-shapea::after',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_all_border_color',
			[
				'label' => esc_html__( 'All Visible Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-border, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-borderb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-bordera::after' => 'border-color: {{VALUE}}!important; outline-color: {{VALUE}}!important;',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-bordertrb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-bordertra::after' => 'border-top-color: {{VALUE}}!important; border-right-color: {{VALUE}}!important;',
					' {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-borderbb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-all-borderaa::after' => 'background-color: {{VALUE}}!important;',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdib_icon_box_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle svg, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-iconstyle i' => 'font-size: {{SIZE}}{{UNIT}}; width: {{size}}{{unit}}',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title_style',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-title' => 'color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdib_icon_box_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-title',
			]
		);
		$repeater->add_responsive_control(
			'bwdib_icon_box_title_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description_style',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-description' => 'color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdib_icon_box_description_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-description',
			]
		);
		$repeater->add_responsive_control(
			'bwdib_icon_box_description_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdib_icon_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-iconstyle i' => 'color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-iconstyle svg' => 'fill: {{VALUE}}; stroke: {{VALUE}};',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_title_hover_color',
			[
				'label' => esc_html__( 'Title Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-icon-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdib_icon_box_description_hover_color',
			[
				'label' => esc_html__( 'Des Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-icon-box-wrapper:hover .bwd-icon-description' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'bwdib_icon_box_list',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdib_icon_box_title' => esc_html__( 'Title #1', 'bwd-elementor-addons' ),
						'bwdib_icon_box_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio eius incidunt autem quia ipsam!', 'bwd-elementor-addons' ),
					],
					[
						'bwdib_icon_box_title' => esc_html__( 'Title #2', 'bwd-elementor-addons' ),
						'bwdib_icon_box_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio eius incidunt autem quia ipsam!', 'bwd-elementor-addons' ),
					],
					[
						'bwdib_icon_box_title' => esc_html__( 'Title #3', 'bwd-elementor-addons' ),
						'bwdib_icon_box_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio eius incidunt autem quia ipsam!', 'bwd-elementor-addons' ),
					],
					[
						'bwdib_icon_box_title' => esc_html__( 'Title #4', 'bwd-elementor-addons' ),
						'bwdib_icon_box_description' => esc_html__( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio eius incidunt autem quia ipsam!', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdib_icon_box_title }}}',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_text_align',
			[
				'label' => esc_html__( 'Text Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdib-icon-content-align' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'bwdib_icon_box_style_tab',
			[
				'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
			]
		);
		$this->start_controls_tabs(
			'bwdib_icon_box_style_tabs'
		);
		$this->start_controls_tab(
			'bwdib_icon_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdib_icon_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper-bg, {{WRAPPER}} .bwd-icon-box-wrapper-bgb::before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdib_icon_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper-bg',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper, {{WRAPPER}} .bwd-icon-content-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdib_icon_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdib_icon_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdib_icon_box_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper:hover .bwd-icon-box-wrapper-bg, {{WRAPPER}} .bwd-icon-box-wrapper:hover .bwd-icon-box-wrapper-bgb',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdib_icon_box_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper:hover',
			]
		);
		$this->add_responsive_control(
			'bwdib_icon_box_hover_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-icon-box-wrapper:hover, {{WRAPPER}} .bwd-icon-box-wrapper:hover .bwd-icon-content-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdib_icon_box_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-icon-box-wrapper:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section()
;    }
	protected function render() {
		$settings = $this->get_settings_for_display();
		$column_gap = $settings['bwdib-icon-box_column_gap'];
		if ( ! empty( $settings['bwdib_icon_box_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdib_icon_box_link', $settings['bwdib_icon_box_link'] );
		}

		if ('style1' == $settings['bwdib_icon_box_style'] || 'style2' == $settings['bwdib_icon_box_style']) { 
		if ('style1' === $settings['bwdib_icon_box_style']) { 
		?>
		<div class="bwd-icon-box-1">
			<div class="container-fluid">
				<div class="row <?php echo esc_attr($column_gap); ?>">
				<?php   
					if( $settings['bwdib_icon_box_list'] ) {
						foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>

						<div class="col-xl-<?php echo esc_attr( $settings['bwdib-icon-box_column_option'] ); ?> col-lg-<?php echo esc_attr( $settings['bwdib-icon-box_column_option'] ); ?> col-sm-<?php echo esc_attr( $settings['bwdib-icon-box_column_option'] ); ?> col-lg-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
								<div class="bwd-wrapper-box">
									<div class="bwd-sub-icon">
										<div class="bwd-icon-part bwd-icon-bg-color">
											<span class="bwd-iconstyle">
												<?php \Elementor\Icons_Manager::render_icon( $item['bwdib_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
											</span>
										</div>
									</div>
									<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
										<div class="bwd-icon-title"><?php echo esc_html( $item['bwdib_icon_box_title'] ); ?></div>
										<div class="bwd-icon-description"><?php echo esc_html( $item['bwdib_icon_box_description'] ); ?> </div>
									</div>
								</div>
							</a>
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
		} elseif ('style2' === $settings['bwdib_icon_box_style']) {
		?>
		<div class="bwd-icon-box-2">
			<div class="container-fluid">
				<div class="row <?php echo esc_attr($column_gap); ?>">
				<?php   
					if( $settings['bwdib_icon_box_list'] ) {
						foreach( $settings['bwdib_icon_box_list'] as $item ) { ?>

						<div class="col-xl-<?php echo esc_attr( $settings['bwdib-icon-box_column_option'] ); ?> col-lg-<?php echo esc_attr( $settings['bwdib-icon-box_column_option'] ); ?> col-sm-<?php echo esc_attr( $settings['bwdib-icon-box_column_option'] ); ?> col-lg-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<a href="<?php echo esc_url($item['bwdib_icon_box_link']['url']); ?>" class="bwd-icon-box-wrapper">
								<div class="bwd-wrapper-box">
									<div class="bwd-box-shado">
										<div class="bwd-sub-icon">
											<div class="bwd-icon-part bwd-icon-bg-color">
												<span class="bwd-iconstyle">
													<?php \Elementor\Icons_Manager::render_icon( esc_attr($item['bwdib_icon_box_icon']), [ 'aria-hidden' => 'true' ] ); ?>
												</span>
											</div>
										</div>
									</div>
									<div class="bwd-icon-content-part bwd-icon-box-wrapper-bg bwdib-icon-content-align">
										<div class="bwd-icon-title"><?php echo esc_html( $item['bwdib_icon_box_title'] ); ?></div>
										<div class="bwd-icon-description"><?php echo esc_html( $item['bwdib_icon_box_description'] ); ?></div>
									</div>
									<div class="bwd-box-footer bwd-all-shape">
									</div>
								</div>
							</a>
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