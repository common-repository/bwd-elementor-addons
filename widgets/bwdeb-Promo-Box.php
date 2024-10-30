<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdeeo_promobox extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdeeo_promo_box', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Promo Box', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-price-tag bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdeeo_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		//Select Style
		$this->add_control(
			'bwdeeo_style_selection',
			[
				'label' => esc_html__( 'Select Style', 'bwd-elementor-addons' ),
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/promo-box/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();

		//tab-content
		$this->start_controls_section(
			'bwdeeo_promobox_content_section',
			[
				'label' => esc_html__( 'Promo Box Content', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//tabs------------------------------------------
		$this->start_controls_tabs(
			'bwdeeo_style_tabs'
		);

		//title tab------------------------
		$this->start_controls_tab(
			'style_title_tab',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdeeo_title_tab', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'BIG SALE' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_tab();

		//sub title tab------------------------
		$this->start_controls_tab(
			'bwdeeo_style_sub_title_tab',
			[
				'label' => esc_html__( 'Sub Title', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdeeo_sub_image_switcher' => 'yes'
				],
			]
		);
		$this->add_control(
			'bwdeeo_sub_title_tab', [
				'label' => esc_html__( 'Sub Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Limit offer' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_tab();

		//event tab------------------------
		$this->start_controls_tab(
			'bwdeeo_style_event_tab',
			[
				'label' => esc_html__( 'Event', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdeeo_event_image_switcher' => 'yes'
				],
			]
		);
		$this->add_control(
			'bwdeeo_event_tab', [
				'label' => esc_html__( 'Event', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '50% off' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

		//link-url
		$this->add_control(
			'bwdeeo_promobox_url',
			[
				'label' => esc_html__( 'Promo Box URL', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'URL Here', 'bwd-elementor-addons' ),
				'label_block' => true,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_alignment',
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
					'{{WRAPPER}}.elementor-widget-bwdeeo_promo_box' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_section();



		//tab-content custom shape
		$this->start_controls_section(
			'bwdeeo_promobox_custom_shape',
			[
				'label' => esc_html__( 'Promo Box Custom Shape', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//switcher Event Image----------------------------------
		$this->add_control(
			'bwdeeo_custom_shape_switcher',
			[
				'label' => esc_html__( 'Custom Shape', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'bwdeeo_custom_shape_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdeeo_custom_shape_switcher' => 'yes',
				],
			]
		);

		$this->end_controls_section();



		//tab-style==================================
		$this->start_controls_section(
			'bwdeeo_promobox_style_section',
			[
				'label' => esc_html__( 'Promo Box Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//tabs------------------------------------------
		$this->start_controls_tabs(
			'bwdeeo_promobox_style_tabs'
		);

		//tab-title-------------------------------------------
		$this->start_controls_tab(
			'style_pbtitle_tab',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdeeo_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_title' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdeeo_promo_box_title_typography',
				'selector' => '{{WRAPPER}} .bwdeeo_title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdeeo_title_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdeeo_title',
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_title_alignment',
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
					'{{WRAPPER}} .bwdeeo_title' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();

		//tab-sub-title-------------------------------------------
		$this->start_controls_tab(
			'bwdeeo_style_pbsub_title_tab',
			[
				'label' => esc_html__( 'Sub Title', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdeeo_sub_image_switcher' => 'yes'
				],
			]
		);

		$this->add_control(
			'bwdeeo_sub_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_offer' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdeeo_promo_box_subtitle_typography',
				'selector' => '{{WRAPPER}} .bwdeeo_offer',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdeeo_sub_title_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdeeo_offer',
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_subtitle_alignment',
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
					'{{WRAPPER}} .bwdeeo_offer' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();
		
		//tab-event-------------------------------------------
		$this->start_controls_tab(
			'bwdeeo_style_pbevent_tab',
			[
				'label' => esc_html__( 'Event', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdeeo_event_image_switcher' => 'yes'
				],
			]
		);

		//color
		$this->add_control(
			'bwdeeo_event_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_persent' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdeeo_promo_box_event_typography',
				'selector' => '{{WRAPPER}} .bwdeeo_persent',
			]
		);

		//text-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdeeo_event_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdeeo_persent',
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdeeo_style_event_alignment',
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
					'{{WRAPPER}} .bwdeeo_persent' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();


		//tab-style
		$this->start_controls_section(
			'bwdeeo_promobox_image_style_section',
			[
				'label' => esc_html__( 'Promo Box Image & Content', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//title-image-heading
		$this->add_control(
			'bwdeeo_title_image_options',
			[
				'label' => esc_html__( 'Main Title & Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdis_promobox_image_Size',
			[
				'label' => esc_html__( 'Image Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 400,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_shape_1' => 'max-width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		//switcher Sub Title & Image----------------------------------
		$this->add_control(
			'bwdeeo_sub_image_switcher',
			[
				'label' => esc_html__( 'Sub Title & Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdis_promobox_sub_image_Size',
			[
				'label' => esc_html__( 'Image Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-Y-top
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetY_top',
			[
				'label' => esc_html__( 'Image Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style4', 'style6', 'style13', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style24', 'style26', 'style29', 'style30'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-right
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetX_right',
			[
				'label' => esc_html__( 'Image Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style4', 'style5', 'style6', 'style7', 'style8', 'style10', 'style11', 'style12', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style29', 'style30', 'style31'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-bottom
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetX_bottom',
			[
				'label' => esc_html__( 'Image Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style3', 'style5', 'style7', 'style8', 'style10', 'style11', 'style12', 'style14', 'style23', 'style25', 'style27', 'style28', 'style31'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-left
		$this->add_responsive_control(
			'bwdis_promobox_image_offsetX_left',
			[
				'label' => esc_html__( 'Image Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_sub_image' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style3', 'style13', 'style14', 'style26', 'style27', 'style28'],
					'bwdeeo_sub_image_switcher' => 'yes',
				],
			]
		);

		//switcher Event Image----------------------------------
		$this->add_control(
			'bwdeeo_event_image_switcher',
			[
				'label' => esc_html__( 'Event Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdis_promobox_event_image_Size',
			[
				'label' => esc_html__( 'Image Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-Y-top
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetY_top',
			[
				'label' => esc_html__( 'Image Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style3', 'style5', 'style7', 'style8', 'style14', 'style23', 'style25', 'style27', 'style28', 'style31'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-right
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetX_right',
			[
				'label' => esc_html__( 'Image Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style1', 'style2', 'style4', 'style5', 'style7', 'style11', 'style13', 'style14', 'style15', 'style20', 'style23', 'style24', 'style27', 'style30', 'style31'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-Y-bottom
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetX_bottom',
			[
				'label' => esc_html__( 'Image Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style4', 'style6', 'style10', 'style11', 'style12', 'style13', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style24', 'style26', 'style29', 'style30'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		//image-offset-X-left
		$this->add_responsive_control(
			'bwdis_promobox_event_image_offsetX_left',
			[
				'label' => esc_html__( 'Image Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_all_event_image' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style3', 'style6', 'style8', 'style10', 'style12', 'style16', 'style17', 'style18', 'style19', 'style21', 'style22', 'style25', 'style26', 'style28', 'style29'],
					'bwdeeo_event_image_switcher' => 'yes',
				],
			]
		);

		$this->end_controls_section();



		//extra shape---------------------------------
		$this->start_controls_section(
			'bwdeeo_promobox_shape_section',
			[
				'label' => esc_html__( 'Promo Box Shape', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//switcher first shape----------------------------------
		$this->add_control(
			'bwdeeo_first_shape_switcher',
			[
				'label' => esc_html__( 'Shape', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//first-shape-width
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_Size',
			[
				'label' => esc_html__( 'Shape Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_first_shape' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-Y-top
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetY_top',
			[
				'label' => esc_html__( 'Shape Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_first_shape' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style2', 'style3', 'style4', 'style13'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-X-right
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetX_right',
			[
				'label' => esc_html__( 'Shape Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_first_shape' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style3', 'style5', 'style6', 'style13'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-Y-bottom
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetX_bottom',
			[
				'label' => esc_html__( 'Shape Offset Y', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_first_shape' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style5', 'style6', 'style7', 'style8', 'style14', 'style15'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);

		//first-shape-offset-X-left
		$this->add_responsive_control(
			'bwdis_promobox_first_shape_offsetX_left',
			[
				'label' => esc_html__( 'Shape Offset X', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_first_shape' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdeeo_style_selection!' => ['style2', 'style4', 'style7', 'style8', 'style14', 'style15'],
					'bwdeeo_first_shape_switcher' => 'yes',
				],
			]
		);


		$this->end_controls_section();



		//custom shape---------------------------------
		$this->start_controls_section(
			'bwdeeo_promobox_custom_shape_section',
			[
				'label' => esc_html__( 'Promo Box custom Shape', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdeeo_custom_shape_switcher' => 'yes',
				],
			]
		);

		//custom-shape-width
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_width_Size',
			[
				'label' => esc_html__( 'Shape Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-height
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_height_Size',
			[
				'label' => esc_html__( 'Shape Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-top
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_position_top',
			[
				'label' => esc_html__( 'Position Top', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-right
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_right',
			[
				'label' => esc_html__( 'Position Right', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-bottom
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_bottom',
			[
				'label' => esc_html__( 'Position Bottom', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//custom-shape-left
		$this->add_responsive_control(
			'bwdis_promobox_custom_shape_left',
			[
				'label' => esc_html__( 'Position Left', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -1000,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdeeo_custom_shape' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
  
	}


	protected function render(){

		$settings = $this->get_settings_for_display();

		if ( ! empty( $settings['bwdeeo_promobox_url']['url'] ) ) {
			$this->add_link_attributes( 'bwdeeo_promobox_url', esc_url($settings['bwdeeo_promobox_url']) );
		}

		$bwdeeo_style_selection = $settings['bwdeeo_style_selection'];
		$bwdeeo_promobox_title = $settings['bwdeeo_title_tab'];
		$bwdeeo_promobox_sub_title = $settings['bwdeeo_sub_title_tab'];
		$bwdeeo_promobox_event = $settings['bwdeeo_event_tab'];
		$bwdeeo_eventImage_switcher = $settings['bwdeeo_event_image_switcher'];
		$bwdeeo_subImage_switcher = $settings['bwdeeo_sub_image_switcher'];
		$bwdeeo_first_shape_switcher = $settings['bwdeeo_first_shape_switcher'];
		$bwdeeo_custom_shape_switcher = $settings['bwdeeo_custom_shape_switcher'];


		if( 'style1' == $bwdeeo_style_selection || 'style2' == $bwdeeo_style_selection) {
		if( 'style1' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_1 bwdeeo_inline_block">
				<a href="<?php echo esc_url( $settings['bwdeeo_promobox_url']['url'] ); ?>">
					<div class="bwdeeo_wraper_1">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../assets/public/image/design_1/shape1.png');?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
							<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../assets/public/image/design_1/shape3.png');?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
							<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../assets/public/image/design_1/img2.png');?>">
								<div class="bwdeeo_content_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
			</div>
			<?php
		} elseif( 'style2' === $bwdeeo_style_selection ) { ?>
			<div class="bwdeeo_creative-design_2 bwdeeo_inline_block">
				<a href="#">
					<div class="bwdeeo_wraper_2">
						<div class="bwdeeo_shape_1 bwdeeo_all_shape_1">
							<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../assets/public/image/design_2/img1.png');?>">
							<div class="bwdeeo_content">
								<div class="bwdeeo_title"><?php echo esc_html( $bwdeeo_promobox_title ); ?></div>
							</div>
							<?php if( $bwdeeo_eventImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_2 bwdeeo_all_event_image">
							<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../assets/public/image/design_2/img2.png');?>">
								<div class="bwdeeo_sub_persent">
									<div class="bwdeeo_persent"><?php echo esc_html( $bwdeeo_promobox_event ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_subImage_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_3 bwdeeo_all_sub_image">
							<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../assets/public/image/design_2/img3.png');?>">
								<div class="bwdeeo_sub_offer">
									<div class="bwdeeo_offer"><?php echo esc_html( $bwdeeo_promobox_sub_title ); ?></div>
								</div>
							</div>
							<?php }?>
							<?php if( $bwdeeo_first_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_shape_5 bwdeeo_first_shape">
							<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../assets/public/image/design_2/img5.png');?>">
							</div>
							<?php }?>
							<?php if( $bwdeeo_custom_shape_switcher == 'yes' ) {?>
							<div class="bwdeeo_custom_shape">
								<img src="<?php echo esc_url( $settings['bwdeeo_custom_shape_image']['url'] ); ?>" alt="">
							</div>
							<?php }?>
						</div>
					</div>
				</a>
    		</div>
			<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}

	}
}
