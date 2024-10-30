<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDSIsocialicon extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdsi-social-icon';
	}

	public function get_title() {
		return esc_html__( 'Social Icon', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-social-icons bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'icon', 'arrow', 'social icon' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdsi_social_icon_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdsi_social_icon_style',
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
					'style32' => esc_html__( 'Style 32 (PRO)', 'bwd-elementor-addons' ),
					'style33' => esc_html__( 'Style 33 (PRO)', 'bwd-elementor-addons' ),
					'style34' => esc_html__( 'Style 34 (PRO)', 'bwd-elementor-addons' ),
					'style35' => esc_html__( 'Style 35 (PRO)', 'bwd-elementor-addons' ),
					'style36' => esc_html__( 'Style 36 (PRO)', 'bwd-elementor-addons' ),
					'style37' => esc_html__( 'Style 37 (PRO)', 'bwd-elementor-addons' ),
					'style38' => esc_html__( 'Style 38 (PRO)', 'bwd-elementor-addons' ),
					'style39' => esc_html__( 'Style 39 (PRO)', 'bwd-elementor-addons' ),
					'style40' => esc_html__( 'Style 40 (PRO)', 'bwd-elementor-addons' ),
					'style41' => esc_html__( 'Style 41 (PRO)', 'bwd-elementor-addons' ),
					'style42' => esc_html__( 'Style 42 (PRO)', 'bwd-elementor-addons' ),
					'style43' => esc_html__( 'Style 43 (PRO)', 'bwd-elementor-addons' ),
					'style44' => esc_html__( 'Style 44 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/social-icon/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdsi_alignment_style',
			[
				'label' => esc_html__( 'Position', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'bwdsi_default',
				'options' => [
					'bwdsi_default'  => esc_html__( 'Default', 'plugin-name' ),
					'bwdsi_floating' => esc_html__( 'Floating', 'plugin-name' ),
				],
				'condition' => [
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_social_fixed_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'condition' => [
					'bwdsi_alignment_style' => [ 'bwdsi_floating' ],
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
				'default' => 'left:0',
				'options' => [
					'left:0' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-left',
					],

					'right:0' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdsi_Horizontal_width',
			[
				'label' => esc_html__( 'Horizontal', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'bwdsi_alignment_style' => [ 'bwdsi_floating' ],
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],

				'selectors' => [
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-left' => 'left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-right' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdsi_verticaly_width',
			[
				'label' => esc_html__( 'Vertical', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'bwdsi_alignment_style' => [ 'bwdsi_floating' ],
					'bwdsi_social_icon_style!' => [ 'style43' ],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-left' => 'top: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-fixed-align.bwd-horizontal-align-right' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
        $this->start_controls_section(
			'bwdsi_social_content_style',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_responsive_control(
			'bwdsi_icon_alignment_44',
			[
				'label' => esc_html__( 'Distence Form Top', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'bwdsi_social_icon_style' => [ 'style44' ],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_alignment_left_44',
			[
				'label' => esc_html__( 'Distence Form left', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'bwdsi_social_icon_style' => [ 'style44' ],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_social_icon_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'condition' => [
					'bwdsi_social_icon_style!' => [ 'style44' ],
				],
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .bwd-social-alignment' => 'justify-content: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdsi_social_icon_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon',
			[
				'label' => esc_html__( 'Social Icons', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				// 'default' => [
				// 	'value' => 'fas fa-circle',
				// 	'library' => 'fa-solid',
				// ],
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->start_controls_tabs(
			'style_tabs'
		);
		
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon .bwdsi-icons-color' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwd-text' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdsi_icon_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color .bwd-shadow' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-circle-icon' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon .bwdsi-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-text' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-circle-items' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color',
			]
		);
		$repeater->add_responsive_control(
			'bwdsi_icon_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsi_normal_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdin-info-box' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover .bwd-extra-item' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwdsi-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwd-tooltip' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsi_icon_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwdsi-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color .bwd-before-icons,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwd-tooltip,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwd-icon:hover .bwd-tooltip:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:after',							
			]
		);
		$repeater->add_control(
			'bwdsi_social_hover_colors',
			[
				'label' => esc_html__( 'Background only for 40 number', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				// 'condition' => [
				// 	'bwdsi_social_icon_style!' => ['style40'],
				// ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover:after' => 'border-left-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color',
			]
		);
		$repeater->add_responsive_control(
			'bwdsi_icon_hover_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdsi_social_icon_border_hover_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsi_hover_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdin-info-box' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdsi-icons-color:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'bwdsi_social_icon_list',
			[
				'label' => esc_html__( 'Social Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdsi_social_icon_title' => esc_html__( 'Twitter', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-twitter',
							'library' => 'solid',
						],
					],
					[	'bwdsi_social_icon_title' => esc_html__( 'Facebook', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'bwdsi_social_icon_title' => esc_html__( 'Instagram', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
					[
						'bwdsi_social_icon_title' => esc_html__( 'Pinterest', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-pinterest-p',
							'library' => 'solid',
						],
					],
					[
						'bwdsi_social_icon_title' => esc_html__( 'Linkedin', 'bwdin-info-box' ),
						'bwdsi_social_icon' => [
							'value' => 'fab fa-linkedin-in',
							'library' => 'solid',
						],
					],
				],


				'title_field' => '{{{ bwdsi_social_icon_title }}}',
			]
		);
        $this->end_controls_section();

		
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Styles', 'bwdin-info-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdsi_social_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'background_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-social-icon-box',
			]
		);
		$this->add_control(
			'bwdsi_icon_padding',
			[
				'label' => esc_html__( 'Padding', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-social-icon-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsi_background_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdin-info-box' ),
				'selector' => '{{WRAPPER}} .bwd-social-icon-box',
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_margin',
			[
				'label' => esc_html__( 'Icon Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsi-icons-color' => 'gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-social-icon-box' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_width',
			[
				'label' => esc_html__( 'Icon Box Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsi-icons-color' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdsi_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsi-icons-color' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();


        
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

		

		if( 'bwdsi_floating' === $settings['bwdsi_alignment_style']){
			$floating = 'bwd-fixed-align';
		}


		if( 'left:0' === $settings['bwdsi_social_fixed_align']){
			$floatLeft = 'bwd-horizontal-align-left';
		}else if( 'right:0' === $settings['bwdsi_social_fixed_align']){
			$floatLeft = 'bwd-horizontal-align-right';
		}



		if ( ! empty( $settings['bwdsi_social_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdsi_social_icon_link', esc_url($settings['bwdsi_social_icon_link']) );
		}


		if ('style1' == $settings['bwdsi_social_icon_style'] || 'style2' == $settings['bwdsi_social_icon_style']) { 
		if ('style1' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-1 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo esc_attr( ' elementor-repeater-item-' . $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo esc_attr($item['bwdsi_social_icon']['value']);?>"></i></a>
						<?php
						}	
					}	
					?>
				</div>
			</div>
		<?php
        }elseif('style2' === $settings['bwdsi_social_icon_style']) { 
		?>
			<div class="bwd-social-icon-2 bwd-social-alignment">
				<div class="bwd-social-icon-box <?php echo esc_attr($floating . ' '); echo esc_attr($floatLeft); ?>">
					<?php
					if ( $settings['bwdsi_social_icon_list'] ) {
						foreach ( $settings['bwdsi_social_icon_list'] as $item ) { ?>
							<a class="bwdsi-icons-color <?php echo esc_attr( ' elementor-repeater-item-' . $item['_id'] ); ?>" href="<?php echo  esc_url( $item['bwdsi_social_icon_link']['url'] );?>"><i class="<?php echo esc_attr($item['bwdsi_social_icon']['value']);?>"></i></a>
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