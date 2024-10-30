<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDDBDualButtons extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameDualButtons', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Dual Buttons', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-dualbutton';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'bwddb_buttons_content_section',
			[
				'label' => esc_html__( 'Buttons Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwddb_style_selection',
			[
				'label' => esc_html__( 'Button Styles', 'bwd-elementor-addons' ),
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
					'style32' => esc_html__( 'Style 32 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/dual-button/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwddb_show_buttons_switcher',
			[
				'label' => esc_html__( 'Show/Hide', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bwddb-default',
				'options' => [
					'bwddb-default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'bwddb-hide-left' => esc_html__( 'Hide Left', 'bwd-elementor-addons' ),
					'bwddb-hide-right' => esc_html__( 'Hide Right', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwddb_first_alignment_buttons',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'default' => 'bwddb-center',
				'options' => [
					'bwddb-left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'bwddb-center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'bwddb-right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				// 'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'bwddb_btn_gape_here',
			[
				'label' => esc_html__( 'Button Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-gape' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		// Right Button
		$this->start_controls_section(
			'bwddb_first_buttons_content_section',
			[
				'label' => esc_html__( 'Left Button Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_show_buttons_switcher' => ['bwddb-default', 'bwddb-hide-right'],
				],
			]
		);
		$this->add_control(
			'bwddb_first_text_buttons', [
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here' , 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwddb_first_link_buttons',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr( 'https://www.your-link.com', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'default' => [
					'url' => 'https://www.google.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$this->add_control(
			'bwddb_buttons_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddb_first_buttons_custom_class_id', [
				'label' => esc_html__( 'Class ID (Custom)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', 'bwd-elementor-addons' ),
					'<code>',
					'</code>'
				),
			]
		);
		$this->end_controls_section();


		// Icon Here Start
		$this->start_controls_section(
			'bwddb_secound_buttons_icon_section',
			[
				'label' => esc_html__( 'Inner Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_style_selection' => ['style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17'],
				]
			]
		);
		$this->add_control(
			'bwddb_buttons_icon_switcher',
			[
				'label' => esc_html__( 'Hide Center Content', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'bwddb_center_text_buttons', [
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
					'bwddb_style_selection' => ['style11', 'style13', 'style14'],
				],
				'default' => esc_html__( 'OR' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwddb_button_center_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
					'bwddb_style_selection' => ['style16', 'style17'],
				],
				'default' => [
					'value' => 'fab fa-youtube',
					'library' => 'solid',
				],
			]
		);
		$this->add_responsive_control(
			'bwddb_title_content_center_icon_size_one',
			[
				'label' => esc_html__( 'Font Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwddb-left-button-class12 i, {{WRAPPER}} span.bwddb-button-seprator, {{WRAPPER}} span.bwddb-btn-seprator' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_color_one',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-left-button-class12 i, {{WRAPPER}} span.bwddb-button-seprator, {{WRAPPER}} span.bwddb-btn-seprator' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_bgcolor_one',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddb_buttons_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-left-button-class12 i, {{WRAPPER}} span.bwddb-button-seprator, {{WRAPPER}} span.bwddb-btn-seprator' => 'background: {{VALUE}}',
				],
			]
		);

		// Secound Icon
		$this->add_control(
			'bwddb_secound_buttons_icon_switcher',
			[
				'label' => esc_html__( 'Hide Secound Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'condition' => [
					'bwddb_style_selection' => 'style12',
				],
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwddb_secound_button_center_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
						'bwddb_style_selection' => 'style12',
				],
				'default' => [
					'value' => 'fas fa-star-half-alt',
					'library' => 'solid',
				],
			]
		);
		$this->add_responsive_control(
			'bwddb_title_content_center_icon_size_two',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
						'bwddb_style_selection' => 'style12',
				],
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwddb-right-button-class12 i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_color_two',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
						'bwddb_style_selection' => 'style12',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-right-button-class12 i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_center_icon_bgcolor_two',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
						'bwddb_secound_buttons_icon_switcher' => 'yes',
						'bwddb_style_selection' => 'style12',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddb-right-button-class12 i' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		// Icon Here End


		// Right Button Start
		$this->start_controls_section(
			'bwddb_secound_buttons_content_section',
			[
				'label' => esc_html__( 'Right Button Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwddb_show_buttons_switcher' => ['bwddb-hide-left', 'bwddb-default'],
				],
			],
		);
		$this->add_control(
			'bwddb_secound_text_buttons', [
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Click Here' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwddb_secound_link_buttons',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_attr( 'https://www.your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'https://www.google.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$this->add_control(
			'bwddb_secound_buttons_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddb_secound_buttons_custom_class_id', [
				'label' => esc_html__( 'Class ID (Custom)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', 'bwd-elementor-addons' ),
					'<code>',
					'</code>'
				),
			]
		);
		$this->end_controls_section();

		// First Button Style 
		$this->start_controls_section(
			'bwddb_buttons_style_section',
			[
				'label' => esc_html__( 'Left Buttons Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwddb_show_buttons_switcher' => ['bwddb-default', 'bwddb-hide-right'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddb_buttons_content_typography',
				'selector' => '{{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class span, {{WRAPPER}} .bwddb-btn-first span',
			]
		);

		
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwddb_buttons_content_titleg',
				'label' => esc_html__( 'Title Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{SELECTOR}} {{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class span, {{WRAPPER}} .bwddb-btn-first span',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		// Hover
		$this->start_controls_tabs(
			'bwddb_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwddb_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'bwddb_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span',
			]
		);
		$this->add_control(
			'bwddb_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwddb_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'bwddb_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-up:hover a, {{WRAPPER}} .bwddb-btn .bwddb-left:hover a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class:hover, {{WRAPPER}} .bwddb-btn-first:hover span' => 'color: {{VALUE}}',
					
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-nine:before, {{WRAPPER}} .bwddb-btn-twenty-nine:after, {{WRAPPER}} .bwddb-btn-twenty-eight:before, .bwddb-btn-twenty-eight:after, {{WRAPPER}} .bwddb-btn-twenty-six:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box:hover, {{WRAPPER}} .bwddb-btn .bwddb-up:hover, {{WRAPPER}} .bwddb-btn .bwddb-left:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class::before, {{WRAPPER}} .bwddb-btn-first:hover span',
			]
		);
		$this->add_control(
			'bwddb_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-nine:before, {{WRAPPER}} .bwddb-btn-twenty-nine:after, {{WRAPPER}} .bwddb-btn-twenty-eight:before, .bwddb-btn-twenty-eight:after, {{WRAPPER}} .bwddb-btn-twenty-six:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box:hover, {{WRAPPER}} .bwddb-btn .bwddb-up:hover, {{WRAPPER}} .bwddb-btn .bwddb-left:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class::before, {{WRAPPER}} .bwddb-btn-first:hover span' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'bwddb_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwddb_team_bb',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		
		$this->add_responsive_control(
			'bwddb_compare_the_box_border_font',
			[
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'rem', 'em', '%'],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwddb-step-front' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_normal_first_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwddb_border_font_style_font',
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

		$this->add_control(
			'bwddb_team_bbe',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwddb_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box, {{WRAPPER}} .bwddb-btn .bwddb-up, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span',
			]
		);
		$this->add_responsive_control(
            'bwddb_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-btn-twenty-four-left a:before, {{WRAPPER}} .bwddb-btn-twenty-four-left a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-left-box .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-left .bwddb-box a, {{WRAPPER}} .bwddb-btn .bwddb-up a, {{WRAPPER}} .bwddb-btn .bwddb-left a, {{WRAPPER}} .bwddb-btn .bwddb-left-button-class, {{WRAPPER}} .bwddb-btn-first span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		// Secound Button Style
		$this->start_controls_section(
			'bwddb_secound_buttons_style_section',
			[
				'label' => esc_html__( 'Right Buttons Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwddb_show_buttons_switcher' => ['bwddb-default', 'bwddb-hide-left'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddb_secound_buttons_content_typography',
				'selector' => '{{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class span, {{WRAPPER}} .bwddb-btn-secound span',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwddb_secound_buttons_text_shadow',
				'label' => esc_html__( 'Title Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{SELECTOR}} {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		// Hover
		$this->start_controls_tabs(
			'bwddb_secound_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwddb_secound_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'bwddb_secound_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_secound_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span',
			]
		);
		$this->add_control(
			'bwddb_secound_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwddb_secound_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'bwddb_secound_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn .bwddb-down:hover a, {{WRAPPER}} .bwddb-btn .bwddb-right:hover a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class:hover, {{WRAPPER}} .bwddb-btn-secound:hover span' => 'color: {{VALUE}}',
					
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddb_secound_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:before, {{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:after, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:before, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:after, {{WRAPPER}} .bwddb-btn-twenty-six.bwddb-twe-six-right:before, {{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-down:hover, {{WRAPPER}} .bwddb-btn .bwddb-right:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class::before, {{WRAPPER}} .bwddb-btn-secound:hover span',
			]
		);
		$this->add_control(
			'bwddb_secound_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:before, {{WRAPPER}} .bwddb-btn-twenty-nine.bwddb-twe-nine-right:after, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:before, {{WRAPPER}} .bwddb-btn-twenty-eight.bwddb-twe-eight-right:after, {{WRAPPER}} .bwddb-btn-twenty-six.bwddb-twe-six-right:before, {{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-btn-twenty-three.bwddb-twe-three-right:hover a, {{WRAPPER}} .bwddb-btn-twenty-one:before, .bwddb-btn-twenty-one:after, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2:hover, {{WRAPPER}} .bwddb-btn .bwddb-down:hover, {{WRAPPER}} .bwddb-btn .bwddb-right:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class:hover, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class::before, {{WRAPPER}} .bwddb-btn-secound:hover span' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'bwddb_secound_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'bwddb_compare_the_box_border_font2',
			[
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'rem', 'em', '%'],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-twe-three-right .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwddb_title_content_normal_secound_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-twe-three-right .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwddb_border_font_style_font2',
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

		$this->add_control(
			'bwddb_team_bbfe',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwddb_secound_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-twe-three-right .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2, {{WRAPPER}} .bwddb-btn .bwddb-down, {{WRAPPER}} .bwddb-btn .bwddb-right, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span',
			]
		);
		$this->add_responsive_control(
            'bwddb_secound_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddb-twe-four-right a:before, {{WRAPPER}} .bwddb-twe-four-right a:after, {{WRAPPER}} .bwddb-twe-three-right .bwddb-btn-twenty-three a, {{WRAPPER}} .bwddb-btn .bwddb-right-box .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-right .bwddb-box-2 a, {{WRAPPER}} .bwddb-btn .bwddb-down a, {{WRAPPER}} .bwddb-btn .bwddb-right a, {{WRAPPER}} .bwddb-btn .bwddb-right-button-class, {{WRAPPER}} .bwddb-btn-secound span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwddb_border_ra = $settings['bwddb_border_font_style_font'];
		$bwddb_border_button_1 = '';
		if('solid' === $bwddb_border_ra){
			$bwddb_border_button_1 = 'bwddb-border-style-solid';
		} elseif('dashed' === $bwddb_border_ra){
			$bwddb_border_button_1 = 'bwddb-border-style-dashed';
		} elseif('dotted' === $bwddb_border_ra){
			$bwddb_border_button_1 = 'bwddb-border-style-dotted';
		} elseif('double' === $bwddb_border_ra){
			$bwddb_border_button_1 = 'bwddb-border-style-double';
		}
		$bwddb_border_ra2 = $settings['bwddb_border_font_style_font2'];
		$bwddb_border_button_2 = '';
		if('solid' === $bwddb_border_ra){
			$bwddb_border_button_2 = 'bwddb-border-style-solid';
		} elseif('dashed' === $bwddb_border_ra){
			$bwddb_border_button_2 = 'bwddb-border-style-dashed';
		} elseif('dotted' === $bwddb_border_ra){
			$bwddb_border_button_2 = 'bwddb-border-style-dotted';
		} elseif('double' === $bwddb_border_ra){
			$bwddb_border_button_2 = 'bwddb-border-style-double';
		}

		if('style1' == $settings['bwddb_style_selection'] || 'style2' == $settings['bwddb_style_selection']){
		if('style1' === $settings['bwddb_style_selection']){
		?>
		<div class="bwddb-btn <?php if('bwddb-left' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-left <?php } elseif('bwddb-center' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-center <?php } elseif('bwddb-right' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-right <?php } ?> bwddb-1">
			<?php
			if('bwddb-hide-right' === $settings['bwddb_show_buttons_switcher']){
			?>
			<a href="<?php echo esc_url($settings['bwddb_first_link_buttons']['url']); ?>" class="<?php echo esc_attr($settings['bwddb_first_buttons_custom_class_id']); ?> bwddb-left-button-class1 bwddb-btn-first">
				<span class="<?php echo esc_attr($bwddb_border_button_1); ?>" ><?php echo esc_html($settings['bwddb_first_text_buttons']); ?></span>
			</a>
			<?php
			} elseif('bwddb-hide-left' === $settings['bwddb_show_buttons_switcher']){
			?>
			<a href="<?php echo esc_url($settings['bwddb_secound_link_buttons']['url']); ?>" class="bwddb-btn-gape <?php echo esc_attr($settings['bwddb_secound_buttons_custom_class_id']); ?> bwddb-right-button-class1 bwddb-btn-secound bwddb-btn-one">
				<span class="<?php echo esc_attr($bwddb_border_button_2); ?>" ><?php echo esc_html($settings['bwddb_secound_text_buttons']); ?></span>
			</a>
			<?php
			} else{
			?>
			<a href="<?php echo esc_url($settings['bwddb_first_link_buttons']['url']); ?>" class="<?php echo esc_attr($settings['bwddb_first_buttons_custom_class_id']); ?> bwddb-left-button-class1 bwddb-btn-first">
				<span class="<?php echo esc_attr($bwddb_border_button_1); ?>" ><?php echo esc_html($settings['bwddb_first_text_buttons']); ?></span>
			</a>
			<a href="<?php echo esc_url($settings['bwddb_secound_link_buttons']['url']); ?>" class="bwddb-btn-gape <?php echo esc_attr($settings['bwddb_secound_buttons_custom_class_id']); ?> bwddb-right-button-class1 bwddb-btn-secound bwddb-btn-one">
				<span class="<?php echo esc_attr($bwddb_border_button_2); ?>" ><?php echo esc_html($settings['bwddb_secound_text_buttons']); ?></span>
			</a>
			<?php
			}
			?>
		</div>
		<?php
		} elseif('style2' === $settings['bwddb_style_selection']){
		?>
		<div class="bwddb-btn <?php if('bwddb-left' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-left <?php } elseif('bwddb-center' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-center <?php } elseif('bwddb-right' === $settings['bwddb_first_alignment_buttons']){ ?> bwddb-btn-right <?php } ?> bwddb-2">
			<?php
			if('bwddb-hide-right' === $settings['bwddb_show_buttons_switcher']){
			?>
			<a href="<?php echo esc_url($settings['bwddb_first_link_buttons']['url']); ?>" class="<?php echo esc_attr($bwddb_border_button_1); ?> <?php echo esc_attr($settings['bwddb_first_buttons_custom_class_id']); ?> bwddb-left-button-class bwddb-btn-sec-button">
				<span><?php echo esc_html($settings['bwddb_first_text_buttons']); ?></span>
			</a>
			<?php
			} elseif('bwddb-hide-left' === $settings['bwddb_show_buttons_switcher']){
			?>
			<a href="<?php echo esc_url($settings['bwddb_secound_link_buttons']['url']); ?>" class="<?php echo esc_attr($bwddb_border_button_2); ?> bwddb-btn-gape <?php echo esc_attr($settings['bwddb_secound_buttons_custom_class_id']); ?> bwddb-right-button-class bwddb-btn-sec-button bwddb-second-but">
				<span><?php echo esc_html($settings['bwddb_secound_text_buttons']); ?></span>
			</a>
			<?php
			} else{
			?>
			<a href="<?php echo esc_url($settings['bwddb_first_link_buttons']['url']); ?>" class="<?php echo esc_attr($bwddb_border_button_1); ?> <?php echo esc_attr($settings['bwddb_first_buttons_custom_class_id']); ?> bwddb-left-button-class bwddb-btn-sec-button">
				<span><?php echo esc_html($settings['bwddb_first_text_buttons']); ?></span>
			</a>
			<a href="<?php echo esc_url($settings['bwddb_secound_link_buttons']['url']); ?>" class="<?php echo esc_attr($bwddb_border_button_2); ?> bwddb-btn-gape <?php echo esc_attr($settings['bwddb_secound_buttons_custom_class_id']); ?> bwddb-right-button-class bwddb-btn-sec-button bwddb-second-but">
				<span><?php echo esc_html($settings['bwddb_secound_text_buttons']); ?></span>
			</a>
			<?php
			}
			?>
		</div>
		<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
