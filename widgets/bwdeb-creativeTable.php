<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdct_creativetable extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdeb-data-table', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Data Table', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-table bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {


		//tab-content
		$this->start_controls_section(
			'bwdct_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdct_style_selection',
			[
				'label' => esc_html__( 'Select Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/data-table/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->end_controls_section();

		//Table-header
		$this->start_controls_section(
			'bwdct_header_section',
			[
				'label' => esc_html__( 'Table Header', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		//header-title
		$repeater->add_control(
			'bwdct_header_title_name', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Header Title' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//bwdct_header-colspan
		$repeater->add_control(
			'bwdct_header-colspan',
			[
				'label' => esc_html__( 'Col Span', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 1,
			]
		);
		$repeater->add_control(
			'bwdct_headers_switcher',
			[
				'label' => esc_html__( 'Header Icon & Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		//header-icon&image
		$repeater->add_control(
			'bwdct_header_media_type',
			[
				'label' => esc_html__( 'Madia Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'bwdct_header_icon' => [
						'title' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'icon' => 'eicon-font-awesome',
					],
					'bwdct_header_image' => [
						'title' => esc_html__( 'Image', 'bwd-elementor-addons' ),
						'icon' => 'eicon-image-bold',
					],
				],
				'condition' => [
					'bwdct_headers_switcher' => 'yes'
				],
				'default' => 'bwdct_header_icon',
				'toggle' => true,
			]
		);
		//header-icon
		$repeater->add_control(
			'bwdct_header_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				'condition' => [
					'bwdct_header_media_type' => 'bwdct_header_icon',
					'bwdct_headers_switcher' => 'yes',
				],
			]
		);
		//header-image
		$repeater->add_control(
			'bwdct_header_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdct_header_media_type' => 'bwdct_header_image',
					'bwdct_headers_switcher' => 'yes',
				],
			]
		);

		//highlight tabs------------------------------------------
		$repeater->start_controls_tabs(
			'style_tabs',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//color
		$repeater->add_control(
			'bwdct_highlight_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_th' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_tb_header_bg',
				'label' => esc_html__( 'Gradient Background', 'bwd-elementor-addons' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_th',
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdct_highlight_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_th',
			]
		);

		$repeater->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//color
		$repeater->add_control(
			'bwdct_highlight_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_th:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_tb_header_bg_hover',
				'label' => esc_html__( 'Gradient Background', 'bwd-elementor-addons' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_th:hover',
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdct_highlight_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_th:hover',
			]
		);

		$repeater->end_controls_tab();

		$repeater->end_controls_tabs();

		//header-repeater-control
		$this->add_control(
			'bwdct_repet_header',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdct_header_title_name' => esc_html__( 'Header Title', 'bwd-elementor-addons' ),
					],
					[
						'bwdct_header_title_name' => esc_html__( 'Header Title', 'bwd-elementor-addons' ),
					],
					[
						'bwdct_header_title_name' => esc_html__( 'Header Title', 'bwd-elementor-addons' ),
					],
					[
						'bwdct_header_title_name' => esc_html__( 'Header Title', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdct_header_title_name }}}',
			]
		);

		$this->end_controls_section();

		//tab-style-header
		$this->start_controls_section(
			'bwdct_header_tab_style_section',
			[
				'label' => esc_html__( 'Table Header', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//header-icon-popover
		$this->add_control(
			'bwdct_headers_icon_popover',
			[
				'label' => esc_html__( 'Header Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();
			//color
			$this->add_control(
				'bwdct_head_icon_color',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdct_header-icon' => 'color: {{VALUE}}',
					],
				]
			);
			//gradient_bg 
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdct_head_icon_BG',
					'label' => esc_html__( 'Gradient Background', 'bwd-elementor-addons' ),
					'types' => ['classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdct_header-icon',
				]
			);
			//icon-position
			$this->add_control(
				'bwdct_header_icon-position',
				[
					'label' => esc_html__( 'Icon Position', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'bwdct_image_inline_block',
					'options' => [
						'bwdct_image_inline_block' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'bwdct_image_block' => esc_html__( 'Top', 'bwd-elementor-addons' ),
					],
				]
			);
			//icon-size
			$this->add_control(
				'bwdct_header_icon_size',
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
					'default' => [
						'unit' => 'px',
						'size' => 20,
					],
					'selectors' => [
						'{{WRAPPER}} .bwdct_header-icon' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//image-width
			$this->add_responsive_control(
				'bwdct_head_icon_WH',
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
						'{{WRAPPER}} .bwdct_header-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//header-icon-margin-right
			$this->add_responsive_control(
				'bwdct_icon_spaces',
				[
					'label' => esc_html__( 'Icon Gap', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdct_header-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdct_header_icon-position' => 'bwdct_image_inline_block'
					],
				]
			);
			//header-icon-margin-bottom
			$this->add_responsive_control(
				'bwdct_icon_title_spaces',
				[
					'label' => esc_html__( 'Icon Gap', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdct_header-icon' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdct_header_icon-position' => 'bwdct_image_block'
					],
				]
			);
			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdct_head_icon_border',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdct_header-icon',
				]
			);
			//Border Radius
			$this->add_responsive_control(
				'bwdct_head_icon_border_radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdct_header-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_popover();

		//header-image-popover
		$this->add_control(
			'bwdct_headers_image_popover',
			[
				'label' => esc_html__( 'Header Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();
			//header-image-width
			$this->add_control(
				'bwdct_header_image_width',
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
							'max' => 100,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 35,
					],
					'selectors' => [
						'{{WRAPPER}} .bwdct_th_image' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//header-image-height
			$this->add_control(
				'bwdct_header_image_height',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
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
						'{{WRAPPER}} .bwdct_th_image' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//image-position
			$this->add_control(
				'bwdct_header_image-position',
				[
					'label' => esc_html__( 'Image Position', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'bwdct_image_inline_block',
					'options' => [
						'bwdct_image_inline_block' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'bwdct_image_block' => esc_html__( 'Top', 'bwd-elementor-addons' ),
					],
				]
			);
			//header-image-margin-right
			$this->add_responsive_control(
				'bwdct_image_spaces',
				[
					'label' => esc_html__( 'Image Gap', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdct_th_image' => 'margin-right: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdct_header_image-position' => 'bwdct_image_inline_block'
					],
				]
			);
			//header-image-margin-bottom
			$this->add_responsive_control(
				'bwdct_header_img_bottom_gap',
				[
					'label' => esc_html__( 'Image Gap', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .bwdct_th_image' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdct_header_image-position' => 'bwdct_image_block',
					],
				]
			);
			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdct_header_img_border',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdct_th_image',
				]
			);
			//Border Radius
			$this->add_responsive_control(
				'bwdct_header_img_bor_radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdct_th_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_popover();

		//highlight tabs------------------------------------------
		$this->start_controls_tabs(
			'style_tabs',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdct_header_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdct_th' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_header_gradient_bg',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdct_th',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdct_header_typography',
				'selector' => '{{WRAPPER}} .bwdct_th',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_header_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_th',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdct_header_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_th' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdct_header_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_th' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdct_header_title_alignment',
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
					'{{WRAPPER}} .bwdct_th' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdct_header_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdct_th:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_header_hover_gradient_bg',
				'label' => esc_html__( 'Gradient Background', 'bwd-elementor-addons' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdct_th:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_header_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_th:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdct_header_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_th:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		//table-header-end--------------------------------------------------------


		//table-body-start--------------------------------------------------------
		//Table-body
		$this->start_controls_section(
			'bwdct_body_section',
			[
				'label' => esc_html__( 'Table Body', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdct_table_content_row_type',
			[
				'label' => esc_html__( 'Row/Column', 'bwd-elementor-addons'),
				'type' => Controls_Manager::SELECT,
				'default' => 'tr',
				'options' => [
					'tr' => esc_html__( 'Row', 'bwd-elementor-addons'),
					'td' => esc_html__( 'Column', 'bwd-elementor-addons'),
				]
			]
		);

		//bwdct_body-colspan
		$repeater->add_control(
			'bwdct_body-colspan',
			[
				'label' => esc_html__( 'Col Span', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 1,
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//bwdct_body-rowspan
		$repeater->add_control(
			'bwdct_body-rowspan',
			[
				'label' => esc_html__( 'Row Span', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 1,
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//body content, icon, image, button
		$repeater->add_control(
			'bwdct_body_media_type',
			[
				'label' => esc_html__( 'Madia Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'bwdct_body_text' => [
						'title' => esc_html__( 'Text', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-area',
					],
					'bwdct_body_image' => [
						'title' => esc_html__( 'Image', 'bwd-elementor-addons' ),
						'icon' => 'eicon-image-bold',
					],
					'bwdct_body_icon' => [
						'title' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'icon' => 'eicon-font-awesome',
					],
					'bwdct_body_button' => [
						'title' => esc_html__( 'Button', 'bwd-elementor-addons' ),
						'icon' => 'eicon-button',
					],
				],
				'default' => 'bwdct_body_text',
				'toggle' => true,
				'condition' 	=> [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//body-title
		$repeater->add_control(
			'bwdct_body_text', 
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Body Content' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
					'bwdct_body_media_type' => 'bwdct_body_text',
				],
			]
		);
		//body-button-url
		$repeater->add_control(
			'bwdct_body_text_url',
			[
				'label' => esc_html__( 'Text Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
					'bwdct_body_media_type' => 'bwdct_body_text',
				],
			]
		);

		//body-image
		$repeater->add_control(
			'bwdct_body_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
					'bwdct_body_media_type' => 'bwdct_body_image',
				],
			]
		);
		//body-button-url
		$repeater->add_control(
			'bwdct_body_img_url',
			[
				'label' => esc_html__( 'Image Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
					'bwdct_body_media_type' => 'bwdct_body_image',
				],
			]
		);

		//body-icon
		$repeater->add_control(
			'bwdct_body_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
					'bwdct_body_media_type' => 'bwdct_body_icon',
				],
			]
		);

		//body-button-text
		$repeater->add_control(
			'bwdct_body_button',
			[
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Text Here' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
					'bwdct_body_media_type' => 'bwdct_body_button',
				],
			]
		);
		//body-button-url
		$repeater->add_control(
			'bwdct_body_button_url',
			[
				'label' => esc_html__( 'Button Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
					'bwdct_body_media_type' => 'bwdct_body_button',
				],
			]
		);

		//tabs---norlam---hover---------------------------------
		$repeater->start_controls_tabs(
			'style_tabs_body_trtd',
		);

		$repeater->start_controls_tab(
			'style_normal_tab_body_trtd',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//color
		$repeater->add_control(
			'bwdct_body_title_text',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdct-body-text' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//gradient_bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_single_tb_body_bggg',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_td',
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdct_body_text_typography_alll',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdct-body-text',
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		$repeater->end_controls_tab();


		$repeater->start_controls_tab(
			'style_hover_tab_body_trtd',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//color
		$repeater->add_control(
			'bwdct_body_title_text_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdct_td:hover .bwdct-body-text' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		//gradient_bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_single_tb_body_bggg_hover',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdct_td:hover',
				'condition' => [
					'bwdct_table_content_row_type' => 'td',
				],
			]
		);

		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();

		
		//body-repeater-control
		$this->add_control(
			'bwdct_repet_body',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[ 'bwdct_table_content_row_type' => 'tr' ],
					[ 'bwdct_table_content_row_type' => 'td' ],
					[ 'bwdct_table_content_row_type' => 'td' ],
					[ 'bwdct_table_content_row_type' => 'td' ],
					[ 'bwdct_table_content_row_type' => 'td' ],
				],
				'title_field' => '{{{ bwdct_table_content_row_type }}}',
			]
		);

		$this->end_controls_section();


		//Table Body style
		$this->start_controls_section(
			'bwdct_body_style_section',
			[
				'label' => esc_html__( 'Table Body', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'style_tabs_body_trtd'
		);

		$this->start_controls_tab(
			'style_normal_tab_body_trtd',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdct_body_title_text_all',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdct-body-text' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_single_tb_body_bggg_all',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdct_td',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdct_body_text_typography_all',
				'selector' => '{{WRAPPER}} .bwdct-body-text',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_body_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_td',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdct_body_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_td' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdct_box_shadow_body_all',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_table',
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdct_body_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_td' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdct_body_alignment',
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
					'{{WRAPPER}} .bwdct_td' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'style_hover_tab_body_trtd',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdct_body_text_hover_color_all',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdct_td:hover .bwdct-body-text' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_single_tb_body_bggg_hover_all',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdct_td:hover',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdct_body_text_typography_hover_all',
				'selector' => '{{WRAPPER}} .bwdct-body-text:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_body_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_td:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdct_body_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_td:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdct_box_shadow_body_all_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_table:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();


		//Table Body Image
		$this->start_controls_section(
			'bwdct_body_img_style_section',
			[
				'label' => esc_html__( 'Table Body Icon & Image', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bwdct_body_img_heading',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		//body-image-width
		$this->add_control(
			'bwdct_body_image_width',
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
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdct-body-img' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);
		//body-image-height
		$this->add_control(
			'bwdct_body_image_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdct-body-img' => 'height: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_body_img_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct-body-img',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdct_body_img_bor_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct-body-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdct_box_shadow_body_img',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct-body-img',
			]
		);

		//body_icon_heading
		$this->add_control(
			'bwdct_body_icon_heading',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//color
		$this->add_control(
			'bwdct_body_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdct-body-icon' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);
		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_body_icon_BG',
				'label' => esc_html__( 'Gradient Background', 'bwd-elementor-addons' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdct-body-icon',
			]
		);
		//icon-size
		$this->add_control(
			'bwdct_body_icon_size',
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
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdct-body-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//image-width
		$this->add_responsive_control(
			'bwdct_body_icon_WH',
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
					'{{WRAPPER}} .bwdct-body-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_body_icon_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct-body-icon',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdct_body_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct-body-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdct_box_shadow_body_icon',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct-body-icon',
			]
		);
		
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdct_body_button_style_section',
			[
				'label' => esc_html__( 'Table Body Button', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//highlight tabs--------------
		$this->start_controls_tabs(
			'style_tabs_body_button',
		);

		//highlight-normal-style-------------------
		$this->start_controls_tab(
			'style_normal_tab_body_button',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdct_body_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdct_Table-button' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_body_button_BG',
				'label' => esc_html__( 'Gradient Background', 'bwd-elementor-addons' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdct_Table-button',
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdct_body_button_typography',
				'selector' => '{{WRAPPER}} .bwdct_Table-button',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_body_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_Table-button',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdct_body_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_Table-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdct_box_shadow_body_button',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_Table-button',
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdct_body_button_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_Table-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		//highlight-hover-style-------------------
		$this->start_controls_tab(
			'style_hover_tab_body_button',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdct_body_button_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdct_Table-button:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdct_body_button_BG_hover',
				'label' => esc_html__( 'Gradient Background', 'bwd-elementor-addons' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdct_Table-button:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdct_body_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_Table-button:hover',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'bwdct_body_button_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdct_Table-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdct_box_shadow_body_button_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdct_Table-button:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$bwdct_style_selection = $settings['bwdct_style_selection'];
		$bwdct_header_image_position = $settings['bwdct_header_image-position'];
		$bwdct_header_icon_position = $settings['bwdct_header_icon-position'];

		if( $bwdct_header_image_position === 'bwdct_image_inline_block' ) {
			$image_position = 'bwdct_th_image_inline_block';
		}else if( $bwdct_header_image_position === 'bwdct_image_block' ) {
			$image_position = 'bwdct_th_image_block';
		}

		if( $bwdct_header_icon_position === 'bwdct_image_inline_block' ) {
			$icon_position = 'bwdct_th_image_inline_block';
		}else if( $bwdct_header_icon_position === 'bwdct_image_block' ) {
			$icon_position = 'bwdct_th_image_block';
		}

		if( 'style1' == $bwdct_style_selection || 'style2' == $bwdct_style_selection) {
		if( 'style1' === $bwdct_style_selection ) { ?>
			<div class="bwdct_common bwdct_CreativeTable_1">
				<table class="bwdct_table">
					<thead>
						<tr>
						<?php
							if ( $settings['bwdct_repet_header'] ) {
							foreach (  $settings['bwdct_repet_header'] as $item ){ ?>
							<th colspan="<?php echo esc_attr( $item['bwdct_header-colspan'] ) ?>"  class="bwdct_th elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?>">
								<?php if( $item['bwdct_headers_switcher'] === 'yes' ){
								if( !empty($item['bwdct_header_image']['url']) ) { ?>
									<div class="bwdct_head_img <?php echo esc_attr($image_position) ?>">
										<img class="bwdct_th_image" src="<?php echo esc_url( $item['bwdct_header_image']['url'] ); ?>" alt="image">
									</div>
								<?php } else if( !empty( $item['bwdct_header_icon']['value'] ) ){?>
									<div class="bwdct-head-icon <?php echo esc_attr($icon_position) ?>">
										<span class="bwdct_header-icon">
											<i class="<?php echo esc_attr( $item['bwdct_header_icon']['value'] ); ?>">
										</i>
										</span>
									</div>
								<?php }} ?>
								<div class="bwdct_header-title" ><?php echo esc_html( $item['bwdct_header_title_name'] ); ?></div>
							</th>
						<?php }} ?>
						</tr>
					</thead>
					<tbody>
						<?php
							if ( $settings['bwdct_repet_body'] ) {
								foreach (  $settings['bwdct_repet_body'] as $item ){
						?>
							<<?php echo esc_attr( $item['bwdct_table_content_row_type'] ); ?> class="bwdct_td elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?>" colspan="<?php echo esc_attr( $item['bwdct_body-colspan'] ) ?>" rowspan="<?php echo esc_attr( $item['bwdct_body-rowspan'] ) ?>">

							<?php if( !empty($item['bwdct_body_text']) ) { ?>
								<a class="bwdct-body-text" href="<?php echo esc_url( $item['bwdct_body_text_url']['url'] ) ?>"><?php echo esc_html( $item['bwdct_body_text'] ); ?></a>

							<?php } else if( !empty( $item['bwdct_body_icon']['value'] ) ) { ?>
								<span class="bwdct-body-icon"><i class="<?php echo esc_attr( $item['bwdct_body_icon']['value'] ); ?>"></i></span>

							<?php } else if( !empty( $item['bwdct_body_image']['url'] ) ) { ?>
								<a href="<?php echo esc_url( $item['bwdct_body_img_url']['url'] ) ?>">
								<img class="bwdct-body-img" src="<?php echo esc_url( $item['bwdct_body_image']['url'] ); ?>" alt="image">
								</a>

							<?php } else if( !empty( $item['bwdct_body_button'] ) ) { ?>
								<a class="bwdct_Table-button" href="<?php echo esc_url( $item['bwdct_body_button_url']['url'] ) ?>"><?php echo esc_html( $item['bwdct_body_button'] ); ?></a>
							<?php }?>

							</<?php echo esc_attr( $item['bwdct_table_content_row_type'] ); ?>>
						<?php 
								}
							}
						?>
					</tbody>
				</table>
			</div>
			<?php
		} else if( 'style2' === $bwdct_style_selection ) { ?>
			<div class="bwdct_common bwdct_CreativeTable_2">
				<table class="bwdct_table">
					<thead>
						<tr>
						<?php
							if ( $settings['bwdct_repet_header'] ) {
							foreach (  $settings['bwdct_repet_header'] as $item ){ ?>
							<th colspan="<?php echo esc_attr( $item['bwdct_header-colspan'] ) ?>"  class="bwdct_th elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?>">
								<?php if( $item['bwdct_headers_switcher'] === 'yes' ){
								if( !empty($item['bwdct_header_image']['url']) ) { ?>
									<div class="bwdct_head_img <?php echo esc_attr($image_position) ?>">
										<img class="bwdct_th_image" src="<?php echo esc_url( $item['bwdct_header_image']['url'] ); ?>" alt="image">
									</div>
								<?php } else if( !empty( $item['bwdct_header_icon']['value'] ) ){?>
									<div class="bwdct-head-icon <?php echo esc_attr($icon_position) ?>">
										<span class="bwdct_header-icon">
											<i class="<?php echo esc_attr( $item['bwdct_header_icon']['value'] ); ?>">
										</i>
										</span>
									</div>
								<?php }} ?>
								<div class="bwdct_header-title" ><?php echo esc_html( $item['bwdct_header_title_name'] ); ?></div>
							</th>
						<?php }} ?>
						</tr>
					</thead>
					<tbody>
						<?php
							if ( $settings['bwdct_repet_body'] ) {
								foreach (  $settings['bwdct_repet_body'] as $item ){
						?>
							<<?php echo esc_attr( $item['bwdct_table_content_row_type'] ); ?> class="bwdct_td elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?>" colspan="<?php echo esc_attr( $item['bwdct_body-colspan'] ) ?>" rowspan="<?php echo esc_attr( $item['bwdct_body-rowspan'] ) ?>">

							<?php if( !empty($item['bwdct_body_text']) ) { ?>
								<a class="bwdct-body-text" href="<?php echo esc_url( $item['bwdct_body_text_url']['url'] ) ?>"><?php echo esc_html( $item['bwdct_body_text'] ); ?></a>

							<?php } else if( !empty( $item['bwdct_body_icon']['value'] ) ) { ?>
								<span class="bwdct-body-icon"><i class="<?php echo esc_attr( $item['bwdct_body_icon']['value'] ); ?>"></i></span>

							<?php } else if( !empty( $item['bwdct_body_image']['url'] ) ) { ?>
								<a href="<?php echo esc_url( $item['bwdct_body_img_url']['url'] ) ?>">
								<img class="bwdct-body-img" src="<?php echo esc_url( $item['bwdct_body_image']['url'] ); ?>" alt="image">
								</a>

							<?php } else if( !empty( $item['bwdct_body_button'] ) ) { ?>
								<a class="bwdct_Table-button" href="<?php echo esc_url( $item['bwdct_body_button_url']['url'] ) ?>"><?php echo esc_html( $item['bwdct_body_button'] ); ?></a>
							<?php }?>

							</<?php echo esc_attr( $item['bwdct_table_content_row_type'], 'bwd-elementor-addons' ); ?>>
						<?php 
								}
							}
						?>
					</tbody>
				</table>
        	</div>
			<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
