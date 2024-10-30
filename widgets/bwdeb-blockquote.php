<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdbkBlockquote extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdeb-blockquote-addons';
	}

	public function get_title() {
		return esc_html__( 'Blockquote', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-blockquote bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'blockquote', 'bwd' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdbk_blockquote_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdbk_blockquote_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/blockquote/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);		
        $this->end_controls_section();

		$this->start_controls_section(
			'bwdbk_blockquote_section',
			[
				'label' => esc_html__( 'Blockquote Content', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_desg', [
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => esc_html__( 'Blockquote section can be used in different ways, to separate paragraphs of text or to create a quote. You will get tons of options for styling the block quotes and showcasing.', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdbk_blockquote_title', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'William Salazar', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquote_left_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-right',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style6','style8','style9','style10','style13','style14','style15','style16','style17','style20','style21',],
				],
			],
		);
		$this->add_control(
			'bwdbk_blockquote_right_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-left',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style2','style5','style7','style11',],
				],
			],
		);
		$this->add_responsive_control(
			'bwdbk_blockquote_text_align',
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
					'{{WRAPPER}} .bwdb-blockquote-content' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquote_name_align',
			[
				'label' => esc_html__( 'Title  Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdb-blockquote-title' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		// blockquote style tab
		$this->start_controls_section(
			'bwdbk_blockquote_description_section',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_desg_color',
			[
				'label' => esc_html__( 'Description Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-des' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbk_blockquote_desg_typography',
				'selector' => '{{WRAPPER}} .bwdb-blockquote-des',
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_description_margin',
			[
				'label' => esc_html__( ' Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-des' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_description_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-des' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdbk_blockquote_title_section',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-title' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbk_blockquote_title_typography',
				'selector' => '{{WRAPPER}} .bwdb-blockquote-title',
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_title_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_title_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdbk_blockquote_icon_section',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbk_blockquote_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquote_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a,
					{{WRAPPER}} .bwdb-blockquote-icon a::before,
					{{WRAPPER}} .bwdb-blockquote-icon a::after' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style5','style7','style10','style11','style12','style13','style14','style15','style16','style19','style20'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style7','style11','style12','style13','style14','style15','style16','style19','style20'],
				],
			]
		);

		// Single Icon Position

		$this->add_control(
			'bwdbk_blockquot_icon_position_popover-toggle',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Icon Position', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
			]
		);
		$this->start_popover();
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_position_x',
			[
				'label' => esc_html__( 'Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_popover-toggle' => 'yes',
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a' => 'left: {{SIZE}}px;',
					'{{WRAPPER}} .bwdb-blockquote-icon .icon-pos-inset' => 'inset-inline-start: {{SIZE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_position_y',
			[
				'label' => esc_html__( 'Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_popover-toggle' => 'yes',
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a' => 'top: {{SIZE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_icon_position_rotate',
			[
				'label' => esc_html__( 'Rotate', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 360,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_popover-toggle' => 'yes',
					'bwdbk_blockquote_style!' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a' => 'transform: rotate({{SIZE}}deg);',
				],
			]
		);
		$this->end_popover();

		// Dual Icon Position

		// First Icon Position
		$this->add_control(
			'bwdbk_blockquot_icon_position_first_popover-toggle',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'First Icon Position', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
			]
		);
		$this->start_popover();
		$this->add_responsive_control(
			'bwdbk_blockquot_first_icon_position_x',
			[
				'label' => esc_html__( 'Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_first_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-first-quote' => 'inset-inline-start: {{SIZE}}px !important;',
					'{{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon-2 a' => 'inset-inline-end: {{SIZE}}px !important;',

				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_first_icon_position_y',
			[
				'label' => esc_html__( 'Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_first_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-first-quote' => 'margin-top: {{SIZE}}px !important;',
					'{{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon-2 a' => 'margin-top: {{SIZE}}px !important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_first_icon_position_rotate',
			[
				'label' => esc_html__( 'Rotate', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 360,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_first_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-first-quote' => 'transform: rotate({{SIZE}}deg);',
					'{{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon-2 a' => 'transform: rotate({{SIZE}}deg);',
				],
			]
		);
		$this->end_popover();

		// Second Icon Position

		$this->add_control(
			'bwdbk_blockquot_icon_position_second_popover-toggle',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Second Icon Position', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
			]
		);
		$this->start_popover();
		$this->add_responsive_control(
			'bwdbk_blockquot_second_icon_position_x',
			[
				'label' => esc_html__( 'Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -600,
						'max' => 600,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_second_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-second-quote, {{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon a' => 'inset-inline-start: {{SIZE}}px !important;',
					'{{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-des a:last-child' => 'inset-inline-end: {{SIZE}}px !important;'
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_second_icon_position_y',
			[
				'label' => esc_html__( 'Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -300,
						'max' => 300,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_second_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-second-quote, {{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon a, {{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-des a:last-child' => 'margin-top: {{SIZE}}px !important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_second_icon_position_rotate',
			[
				'label' => esc_html__( 'Rotate', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 360,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdbk_blockquot_icon_position_second_popover-toggle' => 'yes',
					'bwdbk_blockquote_style' =>[ 'style3', 'style4', 'style12', 'style18', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdb-second-quote, {{WRAPPER}} .bwdb-blockquote-18-area .bwdb-blockquote-icon a, {{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-des a:last-child' => 'transform: rotate({{SIZE}}deg);',
				],
			]
		);
		$this->end_popover();

		$this->add_responsive_control(
			'bwdbk_blockquot_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-icon a,
					{{WRAPPER}} .bwdb-blockquote-des a i,
					{{WRAPPER}} .bwdb-blockquote-icon-2 a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style7','style11','style12','style13','style14','style15','style16','style19','style20'],
				],
			]
		);
        $this->end_controls_section();

		// Box Style

		$this->start_controls_section(
			'bwdbk_blockquot_box_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdbk_blockquot_width',
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
					'{{WRAPPER}} .bwdb-blockquote-item' => 'max-width: {{SIZE}}{{UNIT}};  width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_height',
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
					'{{WRAPPER}} .bwdb-blockquote-item' => 'min-height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquot_box_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-7-area,
					{{WRAPPER}} .bwdb-blockquote-15-area,
					{{WRAPPER}} .bwdb-blockquote-17-area,
					{{WRAPPER}} .bwdb-blockquote-19-area,
					{{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-corner,
					{{WRAPPER}} .bwdb-blockquote-19-area .bwdb-blockquote-title' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style11','style12','style13','style14','style16','style18','style20','style21'],
				],
			]
		);
		$this->add_control(
			'bwdbk_blockquot_item_bg_color',
			[
				'label' => esc_html__( 'Item Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-item,
					{{WRAPPER}} .bwdb-blockquote-item::before,
					{{WRAPPER}} .bwdb-blockquote-item::after' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style4','style5','style7','style10','style11','style12','style15','style17','style18','style19','style21'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Item Bg Color', 'bwd-elementor-addons' ),
				'types' => [ 'gradient'],
				'selector' => '{{WRAPPER}} .bwdb-blockquote-item,
				{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content',
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style3','style4','style6','style8','style9','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21'],
				],
			]
			
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdb-blockquote-item,
				{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content',
				'condition' => [
					'bwdbk_blockquote_style!' => ['style3','style5','style6','style7','style10','style12','style13','style14','style15','style16','style17','style20'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdb-blockquote-item',
				'condition' => [
					'bwdbk_blockquote_style!' => ['style1','style2','style4','style7','style11','style12','style15','style17','style18','style19','style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-item,
					{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbk_blockquot_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwdcv-cv-builder' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdb-blockquote-item,
					{{WRAPPER}} .bwdb-blockquote-7-area .bwdb-blockquote-item .bwdb-blockquote-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$bwdbk_blockquote_desg = $settings['bwdbk_blockquote_desg'];
		$bwdbk_blockquote_title = $settings['bwdbk_blockquote_title'];
		

		if ( ! empty( $settings['bwdbk_blockquote_left_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdbk_blockquote_left_icon_link', $settings['bwdbk_blockquote_left_icon_link'] );
		}

		if ( ! empty( $settings['bwdbk_blockquote_right_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdbk_blockquote_right_icon_link', $settings['bwdbk_blockquote_right_icon_link'] );
		}

		if ('style1' == $settings['bwdbk_blockquote_style'] || 'style2' == $settings['bwdbk_blockquote_style']) {
		if ('style1' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-1-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-des">
								<?php echo esc_html( $bwdbk_blockquote_desg); ?>
							</div>
							<div class="bwdb-blockquote-title">
								<?php echo esc_html( $bwdbk_blockquote_title); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#" class="bwdb-icon-pos">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_right_icon']['value'] );?>"></i>
							</a>
						</div>
					</div>
				</div>
			<?php
		}elseif ('style2' === $settings['bwdbk_blockquote_style']) {
			?>
				<div class="bwdb-blockquote-2-area">
					<div class="bwdb-blockquote-item">
						<div class="bwdb-blockquote-content">
							<div class="bwdb-blockquote-title">
								<?php echo esc_html( $bwdbk_blockquote_title); ?>
							</div>
							<div class="bwdb-blockquote-des">
								<?php echo esc_html( $bwdbk_blockquote_desg); ?>
							</div>
						</div>
						<div class="bwdb-blockquote-icon">
							<a href="#">
								<i class="<?php echo esc_attr( $settings['bwdbk_blockquote_left_icon']['value'] );?>"></i>
							</a>
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