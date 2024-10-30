<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdidbbuttonwidgets extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdidb-info-download-button';
	}

	public function get_title() {
		return esc_html__( 'Info & Download Button', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-download bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdidb_button_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		
		$this->add_control(
			'bwdidb_button_style',
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
					'style45' => esc_html__( 'Style 45 (PRO)', 'bwd-elementor-addons' ),
					'style46' => esc_html__( 'Style 46 (PRO)', 'bwd-elementor-addons' ),
					'style47' => esc_html__( 'Style 47 (PRO)', 'bwd-elementor-addons' ),
					'style48' => esc_html__( 'Style 48 (PRO)', 'bwd-elementor-addons' ),
					'style49' => esc_html__( 'Style 49 (PRO)', 'bwd-elementor-addons' ),
					'style50' => esc_html__( 'Style 50 (PRO)', 'bwd-elementor-addons' ),
					'style51' => esc_html__( 'Style 51 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/info-download-button" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdidb_button_content',
		    [
		        'label' => esc_html__('Button Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		$this->add_control(
			'bwdidb_button_hover_animations',
			[
				'label'     => esc_html__('Button Hover Animation', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'default' => 'none',
				'options'   => [
					'none' => esc_html__('None', 'bwd-elementor-addons'),
					'bounce' => esc_html__('Bounce', 'bwd-elementor-addons'),
					'bounceIn' => esc_html__('BounceIn', 'bwd-elementor-addons'),
					'bounceOut' => esc_html__('BounceOut', 'bwd-elementor-addons'),
					'flip' => esc_html__('Flip', 'bwd-elementor-addons'),
					'fadeIn' => esc_html__('fadeIn', 'bwd-elementor-addons'),
					'fadeOut' => esc_html__('FadeOut', 'bwd-elementor-addons'),
					'rotateIn' => esc_html__('RotateIn', 'bwd-elementor-addons'),
					'rotateOut' => esc_html__('RotateOut', 'bwd-elementor-addons'),
					'hinge' => esc_html__('Hinge', 'bwd-elementor-addons'),
					'zoomIn' => esc_html__('ZoomIn', 'bwd-elementor-addons'),
					'zoomOut' => esc_html__('ZoomOut', 'bwd-elementor-addons'),
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
					'{{WRAPPER}} .bwdidb-cover-button:hover' => 'animation-name: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bwdidb_button_hover_animations_speed',
			[
				'label' => __('Hover Animation Speed (ms)', 'bwd-elementor-addons'),
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
					'{{WRAPPER}} .bwdidb-cover-button:hover' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdidb_button_hover_animations!' => 'none',
				],
			]
		);

		$this->add_control(
			'bwdidb_button_hover_animations_infinite',
			[
				'label'     => esc_html__('Animation Count', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'default' => 'unset',
				'options'   => [
					'unset' => esc_html__('Default', 'bwd-elementor-addons'),
					'infinite' => esc_html__('Always', 'bwd-elementor-addons'),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button' => 'animation-iteration-count: {{VALUE}};',
				],
				'condition' => [
					'bwdidb_button_hover_animations!' => 'none',
				],
			]
		);

		$this->add_control(
			'bwdidb_button_info_down_option',
			[
				'label' => esc_html__( 'Button Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Info Button', 'bwd-elementor-addons' ),
					'download' => esc_html__( 'Download Button', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdidb_button_custom_url',
			[
				'label' => esc_html__( 'Custom Link', 'bwd-elementor-addons' ),
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
					'bwdidb_button_info_down_option' => '',
				]
			]
		);

		$this->add_control(
			'bwdidb_button_download_url',
			[
				'label' => esc_html__( 'Download Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.pdf', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdidb_button_info_down_option' => 'download',
				]
			]
		);

		//main-title
		$this->add_control(
			'bwdidb_button_main_title', 
			[
				'label' => esc_html__( 'Button Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Information' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//button-info-text
		$this->add_control(
			'bwdidb_button_info_text', 
			[
				'label' => esc_html__( 'Button Info Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'BestWPDeveloper' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdidb_button_info_text_position',
			[
				'label' => esc_html__( 'Info Text Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'column',
				'options' => [
					'column-reverse'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'column'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'row-reverse' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'row' => esc_html__( 'Right', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-btn' => 'flex-direction: {{VALUE}};',
				],
				'condition' =>[
					'bwdidb_button_info_text!' => '',
				],
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_info_text_position_gap',
			[
				'label' => esc_html__( 'Info Text Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-btn' => 'gap: {{SIZE}}{{UNIT}};',
				],
                'condition' =>[
					'bwdidb_button_info_text!' => '',
				],
			]
		);

		//Button Alignment
		$this->add_responsive_control(
			'bwdidb_button_alignment',
			[
				'label' => esc_html__( 'Button Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdidb-info-wrap' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);

		//Button Text Alignment
		$this->add_responsive_control(
			'bwdidb_button_text_alignment',
			[
				'label' => esc_html__( 'Button Text Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdidb-btn' => 'align-items: {{VALUE}}',
					//'{{WRAPPER}} .bwdidb-btn' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);

		$this->add_control(
			'bwdidb_button_icon_option',
			[
				'label' => esc_html__( 'Icon?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'None', 'bwd-elementor-addons' ),
						'icon' => 'eicon-close',
					],
					'Icon' => [
						'title' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'icon' => 'eicon-nerd',
					],
				],
				'default' => 'Icon',
				'toggle' => true,
			]
		);

		//button icon
		$this->add_control(
			'bwdidb_button_icon',
			[
				'label' => esc_html__( 'Button Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-cloud-download-alt',
					'library' => 'fa-solid',
				],
				'condition' =>[
					'bwdidb_button_icon_option' => 'Icon',
				],
			]
		);

		// $this->add_control(
		// 	'bwdidb_button_icon_position',
		// 	[
		// 		'label' => esc_html__( 'Icon Position', 'bwd-elementor-addons' ),
		// 		'type' => \Elementor\Controls_Manager::SELECT,
		// 		'default' => '',
		// 		'options' => [
		// 			''  => esc_html__( 'Default', 'bwd-elementor-addons' ),
		// 			'icon-left'  => esc_html__( 'Left', 'bwd-elementor-addons' ),
		// 			'icon-right'  => esc_html__( 'Right', 'bwd-elementor-addons' ),
		// 		],
		// 		'condition' =>[
		// 			'bwdidb_button_icon_option' => 'Icon',
		// 		],
		// 	]
		// );


        $this->end_controls_section();

		$this->start_controls_section(
			'bwdidb_button_title_style',
		    [
		        'label' => esc_html__('Title Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdidb_button_main_title!' => '',
				],
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_title_style_tabs'
		);

		$this->start_controls_tab(
			'button_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//title-color
		$this->add_control(
			'bwdidb_button_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'color: {{VALUE}}',
				],
			]
		);

		//title-bg-color
		$this->add_control(
			'bwdidb_button_title_color_bg',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdidb_button_title_typography',
				'selector' => '{{WRAPPER}} .bwdidb-info-text',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_title_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-info-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_title_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdidb_button_title_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//title-color
		$this->add_control(
			'bwdidb_button_title_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text' => 'color: {{VALUE}}',
				],
			]
		);

		//title-bg-color
		$this->add_control(
			'bwdidb_button_title_color_bg_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_title_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_title_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		
		$this->end_controls_section();	


		$this->start_controls_section(
			'bwdidb_button_infotext_style',
		    [
		        'label' => esc_html__('Info Text Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdidb_button_info_text!' => '',
				],
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_infotext_style_tabs'
		);
		
		$this->start_controls_tab(
			'button_infotext_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//info-text-color
		$this->add_control(
			'bwdidb_button_infotext_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'color: {{VALUE}}',
				],
			]
		);

		//infotext-bg-color
		$this->add_control(
			'bwdidb_button_infotext_color_bg',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdidb_button_infotext_typography',
				'selector' => '{{WRAPPER}} .bwdidb-info-extra-text',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_infotext_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-info-extra-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_infotext_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdidb_button_infotext_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-extra-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_infotext_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//info-text-color
		$this->add_control(
			'bwdidb_button_infotext_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text' => 'color: {{VALUE}}',
				],
			]
		);

		//infotext-bg-color
		$this->add_control(
			'bwdidb_button_infotext_color_bg_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button_infotext_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button_infotext_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-extra-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdidb_button_icon_style',
		    [
		        'label' => esc_html__('Button Icon Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdidb_button_icon_option' => 'Icon',
				],
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_icon_style_tabs'
		);
		
		$this->start_controls_tab(
			'button_icon_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//button-icon-color
		$this->add_control(
			'bwdidb_button-icon-color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'color: {{VALUE}}',
				],
			]
		);

		//Background Type option
		$this->add_control(
			'bwdidb_icon_bg_option',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient' => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		//button-icon-bg-color
		$this->add_control(
			'bwdidb_button-icon-solid-bg',
			[
				'label' => esc_html__( 'Solid Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon, {{WRAPPER}} .bwdidb-info-icon::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_icon_bg_option' => 'solid',
				],
			]
		);

		//button-icon-bg-color-gradient
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-icon-bg',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-info-icon, {{WRAPPER}} .bwdidb-info-icon::before',
				'condition' => [
					'bwdidb_icon_bg_option' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-icon-border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-info-icon',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-icon-border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//icon-size
		$this->add_responsive_control(
			'bwdidb_button-icon-size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//icon-box-width
		$this->add_responsive_control(
			'bwdidb_button-icon-box-width',
			[
				'label' => esc_html__( 'Icon Box Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//icon-box-height
		$this->add_responsive_control(
			'bwdidb_button-icon-box-height',
			[
				'label' => esc_html__( 'Icon Box Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
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
				],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-info-icon' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button-icon-box-boxshadow',
				'selector' => '{{WRAPPER}} .bwdidb-info-icon',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_icon_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		
		//button-icon-color
		$this->add_control(
			'bwdidb_button-icon-color-hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon' => 'color: {{VALUE}}',
				],
			]
		);

		//Background Type option
		$this->add_control(
			'bwdidb_icon_bg_option_hover',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient' => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		//button-icon-bg-color
		$this->add_control(
			'bwdidb_button-icon-solid-bg-hover',
			[
				'label' => esc_html__( 'Solid Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon, {{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_icon_bg_option_hover' => 'solid',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-icon-bg-hover',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon, {{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon::before',
				'condition' => [
					'bwdidb_icon_bg_option_hover' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-icon-border-hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-icon-border-radius-hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button-icon-box-boxshadow_hover',
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover .bwdidb-info-icon',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdidb_button_content_box_style',
		    [
		        'label' => esc_html__('Button Content Box','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);

		$this->start_controls_tabs(
			'button_content_box_style_tabs'
		);
		
		$this->start_controls_tab(
			'button_content_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//Background Type option
		$this->add_control(
			'bwdidb_button_bg_option',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient' => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		//button-bg-color
		$this->add_control(
			'bwdidb_button-solid-bg',
			[
				'label' => esc_html__( 'Solid Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button, {{WRAPPER}} .bwdidb-cover-button::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_button_bg_option' => 'solid',
				],
			]
		);

		//button-bg-color-gradient
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-gradient-bg',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-cover-button, {{WRAPPER}} .bwdidb-cover-button::before',
				'condition' => [
					'bwdidb_button_bg_option' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-box-border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-box-border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button, {{WRAPPER}} .bwdidb-cover-button::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdidb_button_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//margin
		$this->add_responsive_control(
			'bwdidb_button_box_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button_box_boxshadow',
				'selector' => '{{WRAPPER}} .bwdidb-cover-button',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'button_content_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		


		//Background Type option
		$this->add_control(
			'bwdidb_button_bg_option_hover',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient' => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		//button-bg-color
		$this->add_control(
			'bwdidb_button-solid-bg-hover',
			[
				'label' => esc_html__( 'Solid Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover, {{WRAPPER}} .bwdidb-cover-button:hover::before' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdidb_button_bg_option_hover' => 'solid',
				],
			]
		);

		//button-bg-color-gradient
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdidb_button-gradient-bg-hover',
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover, {{WRAPPER}} .bwdidb-cover-button:hover::before',
				'condition' => [
					'bwdidb_button_bg_option_hover' => 'gradient',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdidb_button-box-border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover',
			]
		);

		$this->add_responsive_control(
			'bwdidb_button-box-border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdidb-cover-button:hover, {{WRAPPER}} .bwdidb-cover-button:hover::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdidb_button_box_boxshadow_hover',
				'selector' => '{{WRAPPER}} .bwdidb-cover-button:hover',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

       
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

		if ( ! empty( $settings['bwdidb_button_custom_url']['url'] ) ) {
			$this->add_link_attributes( 'bwdidb_button_custom_url', $settings['bwdidb_button_custom_url'] );
		}
		if ( ! empty( $settings['bwdidb_button_download_url']['url'] ) ) {
			$this->add_link_attributes( 'bwdidb_button_download_url', $settings['bwdidb_button_download_url'] );
		}

        $style_num = $settings['bwdidb_button_style'];

        if ('style1' === $style_num || 'style2' === $style_num) {
        if ('style1' === $style_num) { ?>
			<div class="bwdidb-button-1">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
							<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
							<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_attr($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		} elseif ('style2' === $style_num) { ?>
			<div class="bwdidb-button-1 bwdidb-button-2 mb-50">
				<div class="bwdidb-info-wrap">
					<a class="bwdidb-cover-button" href="<?php 
					if( $settings['bwdidb_button_info_down_option'] == '' ){
						echo esc_url($settings['bwdidb_button_custom_url']['url']);
					} elseif($settings['bwdidb_button_info_down_option'] == 'download'){
						echo esc_url($settings['bwdidb_button_download_url']['url']);
					};
					?>" <?php echo esc_attr($settings['bwdidb_button_info_down_option']) ?>>
						<div class="bwdidb-btn">
							<?php if (!empty($settings['bwdidb_button_main_title'])) : ?>
                            <span class="bwdidb-info-text"><?php echo esc_html( $settings['bwdidb_button_main_title'] ); ?></span>
						<?php endif; ?>
							<?php if (!empty($settings['bwdidb_button_info_text'])) : ?>
                            <span class="bwdidb-info-extra-text"><?php echo esc_html( $settings['bwdidb_button_info_text'] ); ?></span>
						<?php endif; ?>
						</div>
						<?php if( $settings['bwdidb_button_icon_option'] == 'Icon' ) : ?>
						<span class="bwdidb-info-icon"><i class="<?php echo esc_attr($settings['bwdidb_button_icon']['value']); ?>"></i></span>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php
		}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
    }
}

