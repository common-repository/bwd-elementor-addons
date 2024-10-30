<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDTZTabs extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameTabsZone', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Creative Tabs', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-tab';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	

	protected function register_controls() {
		$this->start_controls_section(
			'bwdtz_tabs_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdtz_tabs_zone_style',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/creative-tab/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_item_settings_section',
			[
				'label' => esc_html__( 'Tab Item Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdtz_tab-items_heading',
			[
				'label' => esc_html__( 'Tab Item', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_tabs_title_default', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Dev' , 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'bwdtz_default_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-elementor-addons'),
				'yes' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_default_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_default_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);

		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdtz_tabs_title_id', [
				'label' => esc_html__( 'Name ID', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_title', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Web Developer' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon_switcher',
			[
				'label' => esc_html__( 'Item Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-elementor-addons'),
				'yes' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_item_icon', 
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'bwdtz_tabs_item_icon_switcher' => 'yes',
				],
				'default' => [
					'value' => 'fas fa-award',
					'library' => 'solid',
				],
			]
		);
		$this->add_control(
			'bwdtz_tabs',
			[
				'label' => esc_html__( 'Balance Tab Item and Item Info', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_title' => esc_html__( 'Development', 'bwd-elementor-addons' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Software', 'bwd-elementor-addons' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Programming', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdtz_tabs_title }}}',
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_info_settings_section',
			[
				'label' => esc_html__( 'Item Info Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdtz_tab-item_info_heading',
			[
				'label' => esc_html__( 'Item Info', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdtz_hide_info_title_first',
			[
				'label' => esc_html__( 'Show Title Here', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-elementor-addons'),
				'yes' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdtz_tabs_description_default', [
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus?' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);

		$sk_repeater = new \Elementor\Repeater();
		$sk_repeater->add_control(
			'bwdtz_tabs_title2_id', [
				'label' => esc_html__( 'Name ID', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'bwdtztabs' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_hide_info_title',
			[
				'label' => esc_html__( 'Show Title Here', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('If has. Follow the live preview page.', 'bwd-elementor-addons'),
				'yes' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_info_title2', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdtz_hide_info_title' => 'yes'
				],
				'default' => esc_html__( 'Development' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$sk_repeater->add_control(
			'bwdtz_tabs_description2', [
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdtz_tabs2',
			[
				'label' => esc_html__( 'Balance Tab Item and Item Info', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $sk_repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #1', 'bwd-elementor-addons' ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #2', 'bwd-elementor-addons' ),
					],
					[
						'bwdtz_tabs_description2' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus? #3', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdtz_tabs_title2 }}}',
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_item_content_style',
			[
				'label' => esc_html__( 'Tab Item Styles', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtz_tabs_items_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdtz-tab-nineteen .bwdtz-nav-tabs',
				'condition' => [
					'bwdtz_tabs_zone_style' => 'style19',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_icon_item_color',
			[
				'label' => esc_html__( 'Icon Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-icon30 i' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdtz_tabs_zone_style' => 'style30',
				],
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwdtz_tabs_default_title_style_tabs'
		);
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdtz_box_default_title_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-btn i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-bg-btn:before' => 'background-color: {{VALUE}}; background: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-normal-btn-before:before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-btn i',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_title_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-normal-btn, {{WRAPPER}} .bwdtz-normal-btn i',
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_normal_progress_color',
			[
				'label' => esc_html__( 'Progress Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-progress-normal, {{WRAPPER}} .bwdtz-pgrs-before:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-pgrs-line' => 'border-right-color: {{VALUE}}',
				],
				'condition' => [
					'bwdtz_tabs_zone_style' => ['style18', 'style21', 'style22', 'style24'],
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_normal_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-normal-btn-border' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-normal-btn-bg-style17:before, {{WRAPPER}} .bwdtz-normal-btn-bg-style26:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtz_btn_normal_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-tab-button',
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdtz_tabs_default_title_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdtz_box_def_active_default_title_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active .bwdtz-active-btn i, {{WRAPPER}} .active p.bwdtz-active-btn, {{WRAPPER}} .bwd-tab-list.active .bwd-tab-button, {{WRAPPER}} .bwd-tab-list.active .bwd-tab-button:hover, {{WRAPPER}} .bwd-tab-list .bwd-tab-button:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-active-puls-color:before, {{WRAPPER}} .bwdtz-style29:before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_def_active_default_title_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active:nth-child(2) .bwdtz-active-btn, {{WRAPPER}} .bwdtz-active-btn.active, {{WRAPPER}} .active .bwdtz-active-btn:hover, {{WRAPPER}} .active p.bwdtz-active-btn, {{WRAPPER}} .active .bwdtz-active-btn, {{WRAPPER}} .bwdtz-active-btn:hover, {{WRAPPER}} .bwdtz-active-btn-after:after, {{WRAPPER}} .bwdtz-active-btn-before:before, {{WRAPPER}} .active .bwdtz-active-btn-before-style17:before, {{WRAPPER}} .bwdtz-style29:after' => 'background-color: {{VALUE}}; background: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-arrow-hover-active:hover:after, {{WRAPPER}} .active:after, {{WRAPPER}} .active .bwdtz-active-btn-after:after, {{WRAPPER}} .bwdtz-active-btn-before-style3:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} .active .bwdtz-active-btn-after-style28:after' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} .active .bwdtz-style5-after:after, {{WRAPPER}} .active .bwdtz-style5-before:before, {{WRAPPER}} .bwdtz-style5-after:hover:after, {{WRAPPER}} .bwdtz-style5-before:hover:before, {{WRAPPER}} .bwdtz-style5-after:after, {{WRAPPER}} .bwdtz-style5-before:before' => 'border-left-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-s-a:after' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz__def_active_title_default_title_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .active .bwdtz-active-btn i, {{WRAPPER}} .bwdtz-active-btn.active',
				'default' => [
					'color' => 'transparent',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box__def_active_default_title_name_typography',
				'selector' => '{{WRAPPER}} .active .bwdtz-active-btn i, {{WRAPPER}} .bwdtz-active-btn',
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_active_progress_color',
			[
				'label' => esc_html__( 'Progress Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-progress-active, {{WRAPPER}} .bwdtz-progress-active-b.active:before, {{WRAPPER}} .bwdtz-progress-active-b.active:hover:before, {{WRAPPER}} .bwdtz-progress-active-b:hover:before, {{WRAPPER}} .bwdtz-progress-active-a:hover:after, {{WRAPPER}} .bwdtz-progress-active-a:after, {{WRAPPER}} .bwdtz-progress-active-b:before, {{WRAPPER}} .bwdtz-normal-btn-bg-style26:after' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdtz_tabs_zone_style' => ['style18', 'style21', 'style22', 'style24', 'style25', 'style26'],
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_btn_active_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active .bwdtz-normal-btn-border' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-normal-btn-outline:before' => 'outline-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-active-btn1, {{WRAPPER}} .bwdtz-active-btn1-after:after, {{WRAPPER}} .bwdtz-active-btn1-before:before, {{WRAPPER}} .active .bwdtz-active-btn-after-style28:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtz_btn_active_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .active .bwd-tab-button',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_info_content_style',
			[
				'label' => esc_html__( 'Item Info Styles', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-item-info-style' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdtz_box_default_info_profile_info_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-item-info-bg, {{WRAPPER}} .bwdtz-tab-style14' => 'background-color: {{VALUE}}; border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-border-top, {{WRAPPER}} .bwdtz-border-top:before' => 'border-top-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-border-bottom, {{WRAPPER}} .bwdtz-border-bottom:after' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdtz_info_default_info_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdtz-item-info-style',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdtz_box_default_info_name_typography',
				'selector' => '{{WRAPPER}} .bwdtz-item-info-style',
			]
		);


		$this->add_control(
			'bwdtz_box_default_info_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdtz-item-info-border-after:after, {{WRAPPER}} .bwdtz-item-info-border-before:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-item-info-border-before-color:before, {{WRAPPER}} .bwdtz-tab-twenty-one .bwdtz-tab-content' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdtz-item-info-border1' => 'outline-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdtz_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdtz-info-boxshadow',
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'bwdtz_tabs_wrapper_style',
			[
				'label' => esc_html__( 'Wrapper Styles', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdtz_tabs_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdtz-tab-common',
			]
		);
		$this->add_responsive_control(
            'bwdtz_tabs_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtz-tab-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdtz_tabs_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdtz-tab-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section(); 
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdtz_common_styles = $settings['bwdtz_tabs_zone_style'];
		if('style1' == $bwdtz_common_styles || 'style2' == $bwdtz_common_styles ){
		if('style1' === $bwdtz_common_styles ){
	   ?>
	   	<div class="bwdtz-tab-one bwdtz-tab-common">
			<div class="bwdtz-nav">
				<div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-nav-link bwd-tab-list active" id="home-tab"><?php echo esc_html($settings['bwdtz_tabs_title_default']); ?></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwdtz-normal-btn bwdtz-active-btn bwdtz-nav-link bwd-tab-list bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="'. esc_attr($bwdtz_elementor['bwdtz_tabs_title_id']) .'-tab">'; ?>
				<?php echo esc_html($bwdtz_elementor['bwdtz_tabs_title']); ?></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active" id="home">
					<p><?php echo esc_html($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. esc_attr($bwdtz_elementor2['bwdtz_tabs_title2_id']) .'">'; ?>
					<p><?php echo esc_html($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	   <?php
	   } elseif('style2' === $bwdtz_common_styles ){
		?>
		<div class="bwdtz-tab-two bwdtz-tab-common">
			<div class="bwdtz-nav">
			<div class="bwd-tab-list active" id="Section1"><div class="bwdtz-normal-btn bwdtz-active-btn-after bwdtz-active-btn-before bwd-tab-button"><?php echo esc_html($settings['bwdtz_tabs_title_default']); ?></div></div>
				<?php
				if ( $settings['bwdtz_tabs'] ) {
					foreach (  $settings['bwdtz_tabs'] as $bwdtz_elementor ) {
				echo '<div class="bwd-tab-list bwdtz-nav-link bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor['_id'] ) . '" id="'. esc_attr($bwdtz_elementor['bwdtz_tabs_title_id']) .'-tab">'; ?>
				<div class="bwdtz-normal-btn bwdtz-active-btn-after bwdtz-active-btn-before bwd-tab-button"><?php echo esc_html($bwdtz_elementor['bwdtz_tabs_title']); ?></div></div>
				<?php
					}
				}
				?>
			</div>
			<div class="bwdtz-tab-content bwdtz-item-info-style bwdtz-item-info-bg">
				<div class="bwdtz-tab-pane active">
					<p><?php echo esc_html($settings['bwdtz_tabs_description_default']); ?></p>
				</div>
				<?php
				if ( $settings['bwdtz_tabs2'] ) {
					foreach (  $settings['bwdtz_tabs2'] as $bwdtz_elementor2 ) {
				echo '<div class="bwdtz-tab-pane bwdtz-plugin-elementor-' . esc_attr( $bwdtz_elementor2['_id'] ) . '" id="'. esc_attr($bwdtz_elementor2['bwdtz_tabs_title2_id']) .'">'; ?>
					<p><?php echo esc_html($bwdtz_elementor2['bwdtz_tabs_description2']); ?></p>
				</div>
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
		