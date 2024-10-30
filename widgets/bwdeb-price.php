<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDPTPricingTable extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbpt-price';
	}

	public function get_title() {
		return esc_html__( 'Pricing Table', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-pricing bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'pricing table', 'price', 'table' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdpt_pricing_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdpt_pricing_table_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/pricing-table/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();
		
		// start of the Content tab section
	   $this->start_controls_section(
	       'bwdpt_pricing_choose_plan',
		    [
		        'label' => esc_html__('Choose Plan','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdpt_pricing_table_style' => 'style30',
				],
		   
		    ]
		);
	   $this->end_controls_section();
	   $this->start_controls_section(
	       'bwdpt_pricing_head',
		    [
		        'label' => esc_html__('Header','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		// Basic Plan Head

        $this->add_control(
			'bwdpt_pricing_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Basic', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'title' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
            'bwdpt_pricing_title_tag',
            [
                'label' => __( 'Title HTML Tag', 'bloglentor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                    'h5' => 'H5',
                    'h6' => 'H6',
                    'div' => 'div',
                    'span' => 'span',
                    'p' => 'p',
                ],
                'default' => 'h3',
            ]
        );
		$this->add_control(
			'bwdpt_pricing_description_show_hide',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SWITCHER,
				'default'  => 'no',
				'label_on' => esc_html__( 'On', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Off', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
			]
		);
        $this->add_control(
			'bwdpt_pricing_description',
			[
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nun.', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'title' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing',
			 [
				 'label' => esc_html__('Pricing','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_unit',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '50', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your price here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdpt_currency_symbol',
			[
				'label' => __( 'Currency Symbol', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__('$', 'bwd-elementor-addons')
			]
		);
		$this->add_control(
			'bwdpt_pricing_discount',
			[
				'label' => esc_html__( 'Discount', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SWITCHER,
				'default'  => 'no',
				'label_on' => esc_html__( 'On', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Off', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
			]
		);
		$this->add_control(
			'bwdpt_pricing_discount_unit',
			[
				'label' => esc_html__( 'Discount Price', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$25', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your price here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdpt_pricing_discount' => 'yes',
				],
			]
		);
        $this->add_control(
			'bwdpt_pricing_duration',
			[
				'label' => esc_html__( 'Duration', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Month', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your duration here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
            'bwdpt_pricing_table_period_separator',
            [
                'label' => esc_html__('Period Separator', 'bwd-elementor-addons'),
                'type'  => Controls_Manager::TEXT,
                'dynamic' => ['active' => true],
                'label_block' => false,
                'default' => esc_html__('/', 'bwd-elementor-addons'),
            ]
        );

		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_ribon',
			 [
				 'label' => esc_html__('Ribon','bwd-elementor-addons'),
				 'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			
			 ]
		 );
		 $this->add_control(
            'bwdpt_pricing_table_featured_ribon',
            [
                'label' => esc_html__('Show Ribon', 'bwd-elementor-addons'),
                'type'  => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'bwdpt_pricing_table_featured_ribon_styles',
            [
                'label' => esc_html__('Ribbon Style', 'bwd-elementor-addons'),
                'type'  => Controls_Manager::SELECT,
                'default' => 'ribbon-1',
                'options' => [
                    'ribbon-1' => esc_html__('Default', 'bwd-elementor-addons'),
                    'ribbon-2' => esc_html__('Angle', 'bwd-elementor-addons'),
                    'ribbon-3' => esc_html__('Circle', 'bwd-elementor-addons'),
                ],
                'condition' => [
                    'bwdpt_pricing_table_featured_ribon' => 'yes',
                ],
				'prefix_class' => 'ptm-pricing-table-',
            ]
        );
		$this->add_control(
			'bwdpt_ribbon_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' 	=> Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'New', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_ribbon_size',
			[
				'label' => esc_html__( 'Circle Size', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],
				'selectors'  => [
					'{{WRAPPER}} .ptm-ribon-title' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-3' ],
				],
			]
		);
		$this->add_responsive_control(
			'top_distance',
			[
				'label' => esc_html__( 'Distance from Top', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 90,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'top: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-2' ],
				],
			]
		);
		$this->add_responsive_control(
			'ribbon_ribon-2_right_distance',
			[
				'label' => esc_html__( 'Distance From Right', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-2' ],
					'bwdpt_ribbon_position' => 'right',
				],
			]
		);
		$this->add_responsive_control(
			'ribbon_ribon-2_left_distance',
			[
				'label' => esc_html__( 'Distance From Left', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-2' ],
					'bwdpt_ribbon_position' => 'left',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_top_distance',
			[
				'label' => esc_html__( 'Distance from Top', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1', 'ribbon-3', 'ribbon-4' ],
				],
			]
		);

		$this->add_responsive_control(
			'bwdpt_ribbon_distance_right',
			[
				'label' => esc_html__( 'Distance from Right', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition'=> [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1', 'ribbon-3', 'ribbon-4' ],
					'bwdpt_ribbon_position' => 'right',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_ribbon_distance_left',
			[
				'label' => esc_html__( 'Distance from Left', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1','ribbon-3', 'ribbon-4' ],
					'bwdpt_ribbon_position' => 'left',
				],
			]
		);
		$this->add_control(
			'bwdpt_ribbon_position',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'toggle'  => true,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon'  => 'eicon-h-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon'  => 'eicon-h-align-right',
					],
				],
				'default' => 'right',
				'condition' => [
					'bwdpt_pricing_table_featured_ribon' => 'yes',
					'bwdpt_pricing_table_featured_ribon_styles' => [ 'ribbon-1', 'ribbon-2', 'ribbon-3', 'ribbon-4' ],
				],
				'prefix_class' => 'ptm-ribon-position-',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_body',
		    [
		        'label' => esc_html__('Features','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
	

		// Basic Pricing Table Repeater

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdpt_basic_pricing_table_body_text', [
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_active',
			[
				'label' => esc_html__( 'Exclude', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_bottom_line',
			[
				'label'=> esc_html__( 'Bottom Line', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_bottom_border_style',
			[
				'label' => esc_html__( 'Bottom Line Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'double' => esc_html__( 'Double', 'bwd-elementor-addons' ),
					'dotted' => esc_html__( 'Dotted', 'bwd-elementor-addons' ),
					'dashed' => esc_html__( 'Dashed', 'bwd-elementor-addons' ),
					'groove' => esc_html__( 'Groove', 'bwd-elementor-addons' ),
					'ridge' => esc_html__( 'Ridge', 'bwd-elementor-addons' ),
					'inset' => esc_html__( 'Inset', 'bwd-elementor-addons' ),
					'outset' => esc_html__( 'Outset', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-pricing-features.bottom-line' => 'border-bottom-style: {{VALUE}}!important',
				],
				'condition' => [
					'bwdpt_pricing_table_feature_bottom_line' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_table_feature_bottom_border_color',
			[
				'label' => esc_html__( 'Bottom Line Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-pricing-features.bottom-line' => 'border-bottom-color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdpt_pricing_table_feature_bottom_line' => 'yes',
					'bwdpt_pricing_table_feature_bottom_border_style!' => '',

				],
			]
		);
		
		$repeater->add_responsive_control(
			'bwdpt_pricing_table_feature_bottom_border_width',
			[
				'label' => esc_html__( 'Bottom Line Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 2,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-pricing-features.bottom-line' => 'border-bottom-width: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'bwdpt_pricing_table_feature_bottom_line' => 'yes',
					'bwdpt_pricing_table_feature_bottom_border_style!' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_show_icon',
			[
				'label' => esc_html__( 'Show Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_feature_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-check',
					'library' => 'solid',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_basic_pricing_table_body_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-pricing-features' => 'color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-basic-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdpt_pricing_box_pricing_features_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-basic-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdpt_pricing_box_pricing_features_icon_gap',
			[
				'label' => esc_html__( 'Icon Spacing', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-features .ptm-basic-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_show_icon' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdpt_pricing_item_bg_color',
			[
				'label' => esc_html__( 'Item BG Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .ptm-pricing-features' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdpt_basic_pricing_table_features',
			[
				'label' => esc_html__( 'Basic Features', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'WEBSITES', 'bwd-elementor-addons' ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'GB SSD', 'bwd-elementor-addons' ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'DOMAIN NAME', 'bwd-elementor-addons' ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'EMAIL', 'bwd-elementor-addons' ),
					],
					[
						'bwdpt_basic_pricing_table_body_text' => esc_html__( 'CPU & RAM', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdpt_basic_pricing_table_body_text }}}',
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_align',
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
				'selectors'    => [
                    '{{WRAPPER}} .ptm-pricing-features' => 'text-align: {{VALUE}};',
                ],
			]
		);
        $this->end_controls_section();
	    $this->start_controls_section(
	       'bwdpt_pricing_button',
		    [
		        'label' => esc_html__('Button','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
	    );
        $this->add_control(
            'bwdpt_pricing_table_btn_text',
            [
                'label'       => esc_html__('Button Text', 'bwd-elementor-addons'),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic' => [
					'active' => true
				],
                'default'     => esc_html__('Order Now', 'bwd-elementor-addons'),
            ]
        );
        $this->add_control(
            'bwdpt_pricing_table_btn_link',
            [
                'label'         => esc_html__('Button Link', 'bwd-elementor-addons'),
                'type'          => Controls_Manager::URL,
                'dynamic'   => [
					'active' => true
				],
				'default' => [
					'url' => '#',
				],
                'label_block'   => true,
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_additional_info_section',
			 [
				 'label' => esc_html__('Additional Info','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_box_additional_info_show_hide',
			[
				'label'                 => esc_html__( 'Additional Info', 'bwd-elementor-addons' ),
				'type'                  => Controls_Manager::SWITCHER,
				'default'               => 'no',
				'label_on'              => esc_html__( 'On', 'bwd-elementor-addons' ),
				'label_off'             => esc_html__( 'Off', 'bwd-elementor-addons' ),
				'return_value'          => 'yes',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_additional_info',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nun.', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
        $this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_head_style',
			 [
				 'label' => esc_html__('Header','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_header_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .ptm-header-bg, {{WRAPPER}} .ptm-header-bgb::before, {{WRAPPER}} .ptm-header-bga::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_header_typography',
				'selector' => '{{WRAPPER}} .ptm-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_header_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptm-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_header_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptm-title',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_align',
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
					'{{WRAPPER}} .ptm-title' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .ptm-title-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_header_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_header_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-header-description' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_header_description_typography',
				'selector' => '{{WRAPPER}} .ptm-header-description',
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_description_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-header-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_description_align',
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
					'{{WRAPPER}} .ptm-header-description' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdpt_pricing_description_show_hide' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_style',
			 [
				 'label' => esc_html__('Pricing','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		 $this->add_control(
			'bwdpt_pricing_color',
			[
				'label' => esc_html__( 'Pricing Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-main-price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_typography',
				'selector' => '{{WRAPPER}} .ptm-main-price',
			]
		);
		$this->add_control(
			'bwdpt_pricing_symbol_color',
			[
				'label' => esc_html__( 'Symbol Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-main-currency' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_symbol_typography',
				'selector' => '{{WRAPPER}} .ptm-main-currency',
			]
		);
		$this->add_control(
			'bwdpt_pricing_duration_color',
			[
				'label' => esc_html__( 'Duration Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-price-duration' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_duration!' => '',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_duration_typography',
				'selector' => '{{WRAPPER}} .ptm-price-duration',
				'condition' => [
					'bwdpt_pricing_duration!' => '',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_separator_color',
			[
				'label' => esc_html__( 'Separator Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-price-separator' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_table_period_separator!' => '',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_separator_size',
			[
				'label' => esc_html__( 'Separator Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-price-separator' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_period_separator!' => '',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_separator_spacing',
			[
				'label' => esc_html__( 'Separator Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-price-separator' => 'margin-inline: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_period_separator!' => '',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_discount_color',
			[
				'label' => esc_html__( 'Discount Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .ptm-discount-price' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_discount' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_discount_typography',
				'selector' => '{{WRAPPER}} .ptm-discount-price',
				'condition' => [
					'bwdpt_pricing_discount' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_box_size',
			[
				'label' => esc_html__( 'Round Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => ['style3', 'style5', 'style6', 'style7', 'style10', 'style13', 'style18', 'style19'],
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_round_bg_color',
			[
				'label' => esc_html__( 'Round Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => ['style3', 'style5', 'style6', 'style7', 'style10', 'style13', 'style18', 'style19'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_box_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_header_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => ['style3', 'style5', 'style6', 'style7', 'style10', 'style13', 'style18', 'style19'],
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_ribon_style',
			 [
				 'label' => esc_html__('Ribon','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_ribon_typography',
				'selector' => '{{WRAPPER}} .ptm-ribon-title',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_ribon_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_ribon_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .ptm-ribon-title::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_ribon_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-ribon-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_features_style',
			 [
				 'label' => esc_html__('Features','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_features_typography',
				'selector' => '{{WRAPPER}} .ptm-pricing-features',
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_gap',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-features' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_basic_pricing_table_features_padding',
			[
				'label' => esc_html__( 'Item Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-features' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_pricing_button_style',
			 [
				 'label' => esc_html__('Button','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->start_controls_tabs(
			'bwdpt_pricing_box_pricing_button_style_tabs'
		);
		$this->start_controls_tab(
			'bwdpt_pricing_box_pricing_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_typography',
				'selector' => '{{WRAPPER}} .ptm-pricing-signup',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' =>[ 'image' ],
				'selector' => '{{WRAPPER}} .ptm-pricing-signup-btn, {{WRAPPER}} .ptm-pricing-signup-btnb::before, {{WRAPPER}} .ptm-pricing-signup-btna::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style!' => 'style14',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_position_bottom',
			[
				'label' => esc_html__( 'Btn position form top', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'bottom: -{{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => 'style14',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_position_left',
			[
				'label' => esc_html__( 'Btn position form left', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_table_style' => 'style14',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdpt_pricing_box_pricing_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_hover_typography',
				'selector' => '{{WRAPPER}} .ptm-pricing-signup:hover',
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_button_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_box_pricing_button_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup:hover' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .ptm-pricing-signupb:hover::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup:hover',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_pricing_button_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-pricing-signup:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_box_pricing_button_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptm-pricing-signup:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_additional_info_style',
			 [
				 'label' => esc_html__('Additional Info','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				 'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpt_pricing_additional_info_typography',
				'selector' => '{{WRAPPER}} .ptm-addition-info',
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdpt_pricing_additional_info_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ptm-addition-info' => 'color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_additional_info_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-addition-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_additional_info_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-addition-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdpt_pricing_box_additional_info_show_hide' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdpt_pricing_box_style',
			 [
				 'label' => esc_html__('Box','bwd-elementor-addons'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdpt_pricing_box_style_normal_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptm-box-bg, {{WRAPPER}} .ptm-box-bgb::before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpt_pricing_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptm-box-shadow',
			]
		);
		$this->add_responsive_control(
			'bwdpt_pricing_box_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptm-box-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$ptm_title = $settings['bwdpt_pricing_title'];
		$style_num = $settings['bwdpt_pricing_table_style'];
		$ptm_ribbon_title = $settings['bwdpt_ribbon_title'];
		$ptm_header_des = $settings['bwdpt_pricing_description_show_hide'];
		$ptm_currency_symbol = $settings['bwdpt_currency_symbol'];
		$ptm_price_unit = $settings['bwdpt_pricing_unit'];
		$ptm_discount_price_unit = $settings['bwdpt_pricing_discount_unit'];
		$ptm_price_separator = $settings['bwdpt_pricing_table_period_separator'];
		$ptm_price_duration = $settings['bwdpt_pricing_duration'];
		$bwdpt_pricing_btn_text = $settings['bwdpt_pricing_table_btn_text'];
		$bwdpt_pricing_btn_link = $settings['bwdpt_pricing_table_btn_link']['url'];
		$addition_info = $settings['bwdpt_pricing_box_additional_info'];
		$header_des = $settings['bwdpt_pricing_description'];
		$addition_info_show = $settings['bwdpt_pricing_box_additional_info_show_hide'];
		$dicount_price = $settings['bwdpt_pricing_discount'];

		if ('style1' == $style_num || 'style2' == $style_num) {
		if ('style1' === $style_num) { ?>
		<!-- pricing-one-start -->
		<div class="ptm-grid-container">
			<div class="ptm-pricing-card ptm-box-bg ptm-box-shadow">
				<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
				<div class="ptm-title-wrapper">
					<div class="ptm-title ptm-header-bg"><?php echo esc_html($ptm_title); ?></div>
				</div>
				<?php if($ptm_header_des === 'yes') { ?>
				<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
				<div class="ptm-price">
					<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo esc_url('ptm-cut-off');} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
					<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo esc_url('ptm-cut-off');} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
					<span class="ptm-discount-price"> <?php echo esc_html($ptm_discount_price_unit); ?></span>
					<span class="ptm-price-separator"> <?php echo esc_html($ptm_price_separator); ?> </span>
					<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?> </span>
				</div>
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
					<span class="ptm-pricing-features <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo esc_attr('exclude'); } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo esc_attr(' bottom-line');} ?>"><i class="ptm-basic-icon <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo esc_attr('exclude'); }?> <?php echo esc_attr($item['bwdpt_pricing_feature_icon']['value']); ?>"></i> <span><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span></span>
					</div>
					<?php }
					}?>
				<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
				<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signupb ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
				<?php if($addition_info_show === 'yes') { ?>
				<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
			</div>  
		</div>
		<!-- pricing-one-end -->
		<?php
		} elseif ('style2' === $style_num) { ?>
		<div class="ptm-grid-container ptm-box-shadow">
			<div class="ptm-pricingTable">
				<div class="ptm-pricingTable-header ptm-header-bg">
					<div class="ptm-ribon-title"><?php echo esc_html($ptm_ribbon_title); ?></div>
					<div class="ptm-title"><?php echo esc_html($ptm_title); ?></div>
					<?php if($ptm_header_des === 'yes') { ?>
					<div class="ptm-header-description"><?php echo esc_html($header_des); ?></div><?php } ?>
					<div class="ptm-price">
						<div class="ptm-price-bundle">
							<span class="ptm-main-currency <?php if($dicount_price === 'yes') { echo esc_attr('ptm-cut-off');} ?>"><?php echo esc_html($ptm_currency_symbol); ?></span>
							<span class="ptm-main-price <?php if($dicount_price === 'yes') { echo esc_attr('ptm-cut-off');} ?>"><?php echo esc_html($ptm_price_unit); ?></span>
						</div>
						<span class="ptm-discount-price"><?php echo esc_html($ptm_discount_price_unit); ?></span>
						<span class="ptm-price-separator"> <?php echo esc_html($ptm_price_separator); ?></span>
						<span class="ptm-price-duration"><?php echo esc_html($ptm_price_duration); ?></span>
					</div>
				</div>
				<div class="ptm-pricing-content ptm-box-bg">
				<?php
				if( $settings['bwdpt_basic_pricing_table_features'] ) {
					foreach( $settings['bwdpt_basic_pricing_table_features'] as $item ) { ?>	
					 <?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
					<span class="ptm-pricing-features <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo esc_attr('exclude'); } if($item['bwdpt_pricing_table_feature_bottom_line'] === 'yes') {echo esc_attr(' bottom-line');} ?>"><i class="ptm-basic-icon <?php if($item['bwdpt_pricing_table_feature_active'] === 'yes') { echo esc_attr('exclude'); }?> <?php echo esc_attr($item['bwdpt_pricing_feature_icon']['value']); ?>"></i><?php echo esc_html($item['bwdpt_basic_pricing_table_body_text']); ?></span>
					</div>
					<?php }
					}?>
					<?php if( !empty ($bwdpt_pricing_btn_text) ) { ?>
					<a href="<?php echo esc_url($bwdpt_pricing_btn_link); ?>" class="ptm-pricing-signup ptm-pricing-signup-btn"><?php echo esc_html($bwdpt_pricing_btn_text); ?></a><?php } ?>
					<?php if($addition_info_show === 'yes') { ?>
					<div class="ptm-addition-info"><?php echo esc_html($addition_info); ?></div><?php } ?>
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

