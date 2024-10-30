<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdfbFlipBox extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdfb-flip-box-Carousel';
	}

	public function get_title() {
		return esc_html__( 'BWD Flip Box Carousel', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'flip-box-carousel bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'flip', 'box', 'hover', 'card' ];
	}

	public function get_script_depends() {
		return [ 'bwdfb-flip-box-category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdfb_flip_box_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdfb_flip_box_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/service-flip-box" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfb_flip_box_content_secition',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

        // Content
		$repeater = new \Elementor\Repeater();
		$repeater->start_controls_tabs(
			'bwdfb_flip_box_style_tabs'
		);
		// Front Part Start Here

		$repeater->start_controls_tab(
			'bwdfb_flip_box_style_front_tab',
			[
				'label' => esc_html__( 'Front', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_front_icon_inline',
			[
				'label' => esc_html__('Media Type', 'bwd-elementor-addons'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'none' => [
						'title' => esc_html__('None', 'bwd-elementor-addons'),
						'icon'  => 'fas fa-ban',
					],
					'image' => [
						'title' => esc_html__('Image', 'bwd-elementor-addons'),
						'icon'  => 'far fa-image',
					],
					'icon' => [
						'title' => esc_html__('Icon', 'bwd-elementor-addons'),
						'icon'  => 'fas fa-star',
					],
				],
				'default' => 'icon',
			]
		);
		
		// Front Part Icon
		$repeater->add_control(
			'bwdfb_flip_box_front_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-clinic-medical',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdfb_flip_box_front_icon_inline' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_front_image',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bwdfb_flip_box_front_icon_inline' => 'image',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_front_show_title',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		// Front Part Title
		$repeater->add_control(
			'bwdfb_flip_box_front_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => 'block',
				'default' => esc_html__( 'title', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdfb_flip_box_front_show_title' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_front_title_tag',
			[
				'label' => esc_html__( 'HTML Tag', 'bwd-elementor-addons' ),
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
				'condition' => [
					'bwdfb_flip_box_front_show_title' => 'yes',
				],
				'default' => 'h2',
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_front_show_des',
			[
				'label' => esc_html__( 'Show Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		// Front Part Description
		$repeater->add_control(
			'bwdfb_flip_box_front_des',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdfb_flip_box_front_show_des' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'back_img_box_front_background',
			[
				'label' => esc_html__( 'Box Background', 'the-unique-headers' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'front_img_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-wrapper .bwdfb-flip-img',
			]
		);

		$repeater->add_control(
			'front_background_overlay',
			[
				'label'     => __('Background Overlay', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-wrapper .bwdfb-flip-img::before' => 'background-color: {{VALUE}};',
				],
				'separator' => 'before',
				'condition' => [
					'front_img_background_image[id]!' => '',
				],
			]
		);
		
		$repeater->add_responsive_control(
			'bwdfb_flip_box_front_icon_align',
			[
				'label' => esc_html__( 'Icon Alignment', 'bwd-elementor-addons' ),
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
				'toggle' => true,
				'condition' => [
					'bwdfb_flip_box_front_icon_inline' => 'icon',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdfb_flip_box_front_image_align',
			[
				'label' => esc_html__( 'Image Alignment', 'bwd-elementor-addons' ),
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
				'toggle' => true,
				'condition' => [
					'bwdfb_flip_box_front_icon_inline' => 'image',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdfb_flip_box_front_content_align',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-font-content .bwdfb-flip-description, {{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-font-content .bwdfb-flip-title' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);
		$repeater->add_responsive_control(
			'bwdfb_flip_box_front_content_3d_depth',
			[
				'label' => esc_html__( '3D Depth', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content' => 'transform: translateZ({{SIZE}}px) scale(0.85);',
				],
			]
		);
		$repeater->end_controls_tab();
		// Front Part End Here
		// Back Part Start Here
		$repeater->start_controls_tab(
			'bwdfb_flip_box_style_back_tab',
			[
				'label' => esc_html__( 'Back', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_back_icon_inline',
			[
				'label' => esc_html__('Media Type', 'bwd-elementor-addons'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'none' => [
						'title' => esc_html__('None', 'bwd-elementor-addons'),
						'icon'  => 'fas fa-ban',
					],
					'image' => [
						'title' => esc_html__('Image', 'bwd-elementor-addons'),
						'icon'  => 'far fa-image',
					],
					'icon' => [
						'title' => esc_html__('Icon', 'bwd-elementor-addons'),
						'icon'  => 'fas fa-star',
					],
				],
				'default' => 'icon',
			]
		);
		// Back Part Icon
		$repeater->add_control(
			'bwdfb_flip_box_back_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-clinic-medical',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdfb_flip_box_back_icon_inline' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_back_image',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bwdfb_flip_box_back_icon_inline' => 'image',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_back_show_title',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		// Back Part Title
		$repeater->add_control(
			'bwdfb_flip_box_back_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => 'block',
				'default' => esc_html__( 'Item', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdfb_flip_box_back_show_title' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_back_title_tag',
			[
				'label' => esc_html__( 'HTML Tag', 'bwdfb-flip-boxr' ),
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
				'condition' => [
					'bwdfb_flip_box_back_show_title' => 'yes',
				],
				'default' => 'h2',
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_back_show_des',
			[
				'label' => esc_html__( 'Show Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		// Back Part Description
		$repeater->add_control(
			'bwdfb_flip_box_back_des',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdfb_flip_box_back_show_des' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'back_img_box_back_background',
			[
				'label' => esc_html__( 'Box Background', 'the-unique-headers' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'back_img_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-wrapper .bwdfb-flip-back',

			]
		);

		$repeater->add_control(
			'back_background_overlay',
			[
				'label'     => __('Background Overlay', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-wrapper .bwdfb-flip-back::before' => 'background-color: {{VALUE}};',
				],
				'separator' => 'before',
				'condition' => [
					'back_img_background_image[id]!' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_back_show_btn',
			[
				'label' => esc_html__( 'Show Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => 'block',
				'default' => esc_html__( 'Buy Now', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdfb_flip_box_back_show_btn' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdfb_flip_box_btn_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdfb_flip_box_btn_text!' => '',
					'bwdfb_flip_box_back_show_btn' => 'yes',
				],
				'label_block' => true,
			]
		);
		$repeater->add_responsive_control(
			'bwdfb_flip_box_back_icon_align',
			[
				'label' => esc_html__( 'Icon Alignment', 'bwd-elementor-addons' ),
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
				'toggle' => true,
				'condition' => [
					'bwdfb_flip_box_back_icon_inline' => 'icon',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdfb_flip_box_back_image_align',
			[
				'label' => esc_html__( 'Image Alignment', 'bwd-elementor-addons' ),
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
				'toggle' => true,
				'condition' => [
					'bwdfb_flip_box_back_icon_inline' => 'image',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdfb_flip_box_back_content_align',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-back-content .bwdfb-flip-description, {{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-back-content .bwdfb-flip-title, {{WRAPPER}} {{CURRENT_ITEM}} .bwdfb-flip-back-content .bwdfb-flip-button' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);
		$repeater->add_responsive_control(
			'bwdfb_flip_box_back_content_3d_depth',
			[
				'label' => esc_html__( '3D Depth', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back-content' => 'transform: translateZ({{SIZE}}px) scale(0.85)!important;',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Back Part End Here
		$this->add_control(
			'bwdfb_flip_box_content_list',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdfb_flip_box_front_title' => esc_html__( 'Item 1', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_front_des' => esc_html__( 'lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_back_title' => esc_html__( 'Item 1', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_back_des' => esc_html__( 'lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?', 'bwd-elementor-addons' ),
					],
					[
						'bwdfb_flip_box_front_title' => esc_html__( 'Item 2', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_front_des' => esc_html__( 'lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_back_title' => esc_html__( 'Item 2', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_back_des' => esc_html__( 'lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?', 'bwd-elementor-addons' ),
					],
					[
						'bwdfb_flip_box_front_title' => esc_html__( 'Item 3', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_front_des' => esc_html__( 'lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_back_title' => esc_html__( 'Item 3', 'bwd-elementor-addons' ),
						'bwdfb_flip_box_back_des' => esc_html__( 'lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdfb_flip_box_front_title }}}',
			]
		);
		
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdfb_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdfb-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', 'bwd-elementor-addons' ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdfb_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdfb_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdfb_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'bwdfb_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'bwdfb_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdfb_aupoplay_popover',
			[
				'label' => esc_html__( 'More Controlls', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdfb_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdfb_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdfb_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdfb_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdfb_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdfb_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdfb_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdfb_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdfb_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdfb_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'text'  => esc_html__( 'Text', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdfb_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdfb_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdfb_nav_type' => 'icon',
						'bwdfb_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdfb_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdfb_nav_type' => 'icon',
						'bwdfb_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdfb_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdfb_nav_type' => 'text',
						'bwdfb_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdfb_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdfb_nav_type' => 'text',
						'bwdfb_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdfb_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdfb_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdfb_dots_type',
				[
					'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', 'bwd-elementor-addons' ),
						'numbers'  => esc_html__( 'Numbers', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdfb_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdfb_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', 'bwd-elementor-addons' ),
						'bwdfb_dots1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
						'bwdfb_dots2'  => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
						'bwdfb_dots3'  => esc_html__( 'Style 3', 'bwd-elementor-addons' ),
						'bwdfb_dots4'  => esc_html__( 'Style 4', 'bwd-elementor-addons' ),
						'bwdfb_dots5'  => esc_html__( 'Style 5', 'bwd-elementor-addons' ),
						'bwdfb_dots6'  => esc_html__( 'Style 6', 'bwd-elementor-addons' ),
						'bwdfb_dots7'  => esc_html__( 'Style 7', 'bwd-elementor-addons' ),
						'bwdfb_dots8'  => esc_html__( 'Style 8', 'bwd-elementor-addons' ),
						'bwdfb_dots9'  => esc_html__( 'Style 9', 'bwd-elementor-addons' ),
						'bwdfb_dots10'  => esc_html__( 'Style 10', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdfb_dots_switcher' => 'yes',
						'bwdfb_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();


		$this->end_controls_section();



        $this->start_controls_section(
			'bwdfb_flip_box_style_tab',
		    [
		        'label' => esc_html__('Icon','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
				// 'condition' => [
				// 	'bwdfb_flip_box_front_icon_inline' => 'icon',
				// 	'bwdfb_flip_box_back_icon_inline' => 'icon',
				// ],
		   
		    ]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_title',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->start_controls_tabs(
			'bwdfb_flip_box_icon_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdfb_flip_box_icon_style_front_tab',
			[
				'label' => esc_html__( 'Front', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_front_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_front_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_round_size',
			[
				'label' => esc_html__( 'Icon Bg Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 60,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdfb_flip_box_icon_front_bg_color!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => '%',
				],
				'condition' => [
					'bwdfb_flip_box_icon_front_bg_color!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_front_border_style',
			[
				'label' => esc_html__( 'Border Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
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
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'border-style: {{VALUE}}',
				],
		
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_front_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdfb_flip_box_icon_front_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_border_width',
			[
				'label' => esc_html__( 'Border Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdfb_flip_box_icon_front_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
	
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_round_border_size',
			[
				'label' => esc_html__( 'Icon Area Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 60,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdfb_flip_box_icon_front_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_border_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => '%',
				],
				'condition' => [
					'bwdfb_flip_box_icon_front_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-icon' => 'border-radius: {{SIZE}}%;',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdfb_flip_box_icon_style_back_tab',
			[
				'label' => esc_html__( 'Back', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_back_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_back_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_round_size',
			[
				'label' => esc_html__( 'Icon BG Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 60,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdfb_flip_box_icon_back_bg_color!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => '%',
				],
				'condition' => [
					'bwdfb_flip_box_icon_back_bg_color!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_back_border_style',
			[
				'label' => esc_html__( 'Border Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
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
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'border-style: {{VALUE}}',
				],
		
			]
		);
		$this->add_control(
			'bwdfb_flip_box_icon_back_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdfb_flip_box_icon_back_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_border_width',
			[
				'label' => esc_html__( 'Border Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdfb_flip_box_icon_back_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
	
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_round_border_size',
			[
				'label' => esc_html__( 'Icon Area Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 60,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'condition' => [
					'bwdfb_flip_box_icon_back_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_border_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'unit' => '%',
				],
				'condition' => [
					'bwdfb_flip_box_icon_back_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-icon' => 'border-radius: {{SIZE}}%;',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdfb_flip_box_image_style_tab',
		    [
		        'label' => esc_html__('Image','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdfb_flip_box_image_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdfb_flip_box_icon_front_image_tab',
			[
				'label' => esc_html__( 'Front', 'bwd-elementor-addons' ),
			]
		);

		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_image_width',
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font .bwdfb-choose-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_front_image_height',
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font .bwdfb-choose-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdfb_flip_box_icon_back_image_tab',
			[
				'label' => esc_html__( 'Back', 'bwd-elementor-addons' ),
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_image_width',
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-choose-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_icon_back_image_height',
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-choose-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdfb_flip_box_title_style_tab',
		    [
		        'label' => esc_html__('Title','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,	   
		    ]
		);
		$this->start_controls_tabs(
			'bwdfb_flip_box_title_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdfb_flip_box_title_front_tab',
			[
				'label' => esc_html__( 'Front', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_flip_box_front_title_typography',
				'selector' => '{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-title',
			]
		);
		$this->add_control(
			'bwdfb_flip_box_title_front_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdfb_flip_box_title_front_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-title',
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_title_front_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdfb_flip_box_title_back_tab',
			[
				'label' => esc_html__( 'Back', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_flip_box_back_title_typography',
				'selector' => '{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-title',
			]
		);
		$this->add_control(
			'bwdfb_flip_box_title_back_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdfb_flip_box_title_back_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-title',
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_title_back_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdfb_flip_box_desc_style_tab',
		    [
		        'label' => esc_html__('Description','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdfb_flip_box_desc_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdfb_flip_box_desc_front_tab',
			[
				'label' => esc_html__( 'Front', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_flip_box_desc_front_typography',
				'selector' => '{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-description',
			]
		);
		$this->add_control(
			'bwdfb_flip_box_desc_front_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-description' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_desc_front_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_desc_front_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font-content .bwdfb-flip-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdfb_flip_box_desc_back_tab',
			[
				'label' => esc_html__( 'Back', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_flip_box_desc_back_typography',
				'selector' => '{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-description',
			]
		);
		$this->add_control(
			'bwdfb_flip_box_desc_back_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-description' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_desc_back_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_desc_back_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdfb_flip_box_btn_style_tab',
		    [
		        'label' => esc_html__('Button','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdfb_flip_box_btn_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdfb_flip_box_btn_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_flip_box_btn_typography',
				'selector' => '{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn',
			]
		);
		$this->add_control(
			'bwdfb_flip_box_btn_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfb_flip_box_btn_bg_color',
			[
				'label' => esc_html__( 'Backgrond Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdfb_flip_box_btn_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn',
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_btn_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_btn_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_btn_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdfb_flip_box_btn_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_flip_box_btn_hover_typography',
				'selector' => '{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn:hover',
			]
		);
		$this->add_control(
			'bwdfb_flip_box_btn_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfb_flip_box_btn_hover_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdfb_flip_box_btn_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn:hover',
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_box_btn_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-back .bwdfb-flip-back-content .bwdfb-flip-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdfb_flip_wrapper_box_style_tab',
		    [
		        'label' => esc_html__('Box','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,		   
		    ]
		);
		$this->add_responsive_control(
			'bwdfb_flip_wrapper_box_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdfb-flip-box-item' => 'min-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdfb_flip_wrapper_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdfb-flip-font, {{WRAPPER}} .bwdfb-flip-back',
			]
		);
		$this->add_responsive_control(
			'bwdfb_flip_wrapper_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-flip-font, {{WRAPPER}} .bwdfb-flip-back' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdfb_flip_wrapper_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdfb-flip-font, {{WRAPPER}} .bwdfb-flip-back',
			]
		);
		$this->end_controls_section();



		$this->start_controls_section(
			'bwdfb_catproduct_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwdfb-catproduct-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdfb_nav_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
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
				'label' => esc_html__( 'Normal', 'bwdfb-catproduct-td' ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdfb_arrow_color',
				[
					'label' => esc_html__( 'Color', 'bwdfb-catproduct-td' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdfb_arrow_background_color',
					'label' => esc_html__( 'Background', 'bwdfb-catproduct-td' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdfb_arrow_size',
				[
					'label' => esc_html__( 'Size', 'bwdfb-catproduct-td' ),
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
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdfb_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdfb_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev span, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next span',
					'condition' => [
						'bwdfb_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdfb_arrow_width',
				[
					'label' => esc_html__( 'Width', 'bwdfb-catproduct-td' ),
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
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdfb_arrow_height',
				[
					'label' => esc_html__( 'Height', 'bwdfb-catproduct-td' ),
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
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdfb_arrow_border',
					'label' => esc_html__( 'Border', 'bwdfb-catproduct-td' ),
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdfb_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwdfb-catproduct-td' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdfb_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', 'bwdfb-catproduct-td' ),
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'bwdfb_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwdfb-catproduct-td'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdfb_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', 'bwdfb-catproduct-td'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwdfb-catproduct-td'),
						'hidden'  => esc_html__('Hidden', 'bwdfb-catproduct-td'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdfb_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', 'bwdfb-catproduct-td' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwdfb-catproduct-td' ),
					'label_on' => esc_html__( 'Custom', 'bwdfb-catproduct-td' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdfb_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', 'bwdfb-catproduct-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdfb_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdfb_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdfb_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', 'bwdfb-catproduct-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdfb_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdfb_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdfb-catproduct-td' ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdfb_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', 'bwdfb-catproduct-td' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdfb_arrow_background_color_hover',
					'label' => esc_html__( 'Background', 'bwdfb-catproduct-td' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdfb_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', 'bwdfb-catproduct-td' ),
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
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdfb_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover span, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover span',
					'condition' => [
						'bwdfb_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdfb_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', 'bwdfb-catproduct-td' ),
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
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdfb_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', 'bwdfb-catproduct-td' ),
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
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdfb_arrow_border_hover',
					'label' => esc_html__( 'Border', 'bwdfb-catproduct-td' ),
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdfb_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', 'bwdfb-catproduct-td' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdfb_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', 'bwdfb-catproduct-td' ),
					'selector' => '{{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-prev:hover, {{WRAPPER}} .bwdfb-owl-nav button.bwdfb-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdfb_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwdfb-catproduct-td'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdfb_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', 'bwdfb-catproduct-td'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwdfb-catproduct-td'),
						'hidden'  => esc_html__('Hidden', 'bwdfb-catproduct-td'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-prev, {{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdfb_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', 'bwdfb-catproduct-td' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwdfb-catproduct-td' ),
					'label_on' => esc_html__( 'Custom', 'bwdfb-catproduct-td' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdfb_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', 'bwdfb-catproduct-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdfb_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdfb_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdfb_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', 'bwdfb-catproduct-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdfb_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdfb_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwdfb-catproduct-td' ),
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
							'{{WRAPPER}} .bwdfb-owl.bwdfb-owl-carousel:hover .bwdfb-owl-nav button.bwdfb-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();




		$this->start_controls_section(
			'bwdfb_catproduct_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwdfb-catproduct-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdfb_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'bwdfb_dots_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdfb-catproduct-td' ),
				'label_on' => esc_html__( 'Custom', 'bwdfb-catproduct-td' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//top
			$this->add_responsive_control(
				'bwdfb_dots_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwdfb-catproduct-td' ),
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
						'{{WRAPPER}} .bwdfb-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdfb_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwdfb-catproduct-td' ),
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
						'{{WRAPPER}} .bwdfb-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'bwdfb_dots_gap_ertical',
			[
				'label' => esc_html__( 'Vertical Gap', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'bwdfb_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:not(:last-child) ' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdfb_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdfb-catproduct-td' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdfb-catproduct-td' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdfb-catproduct-td' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', 'bwdfb-catproduct-td' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdfb_dots_number_color',
			[
				'label' => esc_html__( 'Color', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdfb_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfb_dots_background_color',
				'label' => esc_html__( 'Background', 'bwdfb-catproduct-td' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot span',
				'condition' => [
					'bwdfb_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdfb_dots_width',
			[
				'label' => esc_html__( 'Width', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdfb_dots_height',
			[
				'label' => esc_html__( 'Height', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdfb_dots_border',
				'label' => esc_html__( 'Border', 'bwdfb-catproduct-td' ),
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdfb_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdfb_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdfb-catproduct-td' ),
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', 'bwdfb-catproduct-td' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdfb_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdfb_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfb_dots_background_color_active',
				'label' => esc_html__( 'Background', 'bwdfb-catproduct-td' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active span',
				'condition' => [
					'bwdfb_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdfb_dots_width_active',
			[
				'label' => esc_html__( 'Width', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdfb_dots_height_active',
			[
				'label' => esc_html__( 'Height', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdfb_dots_border_active',
				'label' => esc_html__( 'Border', 'bwdfb-catproduct-td' ),
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdfb_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdfb_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', 'bwdfb-catproduct-td' ),
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot.active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', 'bwdfb-catproduct-td' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdfb_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdfb_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfb_dots_background_color_hover',
				'label' => esc_html__( 'Background', 'bwdfb-catproduct-td' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfb_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover span',
				'condition' => [
					'bwdfb_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdfb_dots_width_hover',
			[
				'label' => esc_html__( 'Width', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdfb_dots_height_hover',
			[
				'label' => esc_html__( 'Height', 'bwdfb-catproduct-td' ),
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
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdfb_dots_border_hover',
				'label' => esc_html__( 'Border', 'bwdfb-catproduct-td' ),
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdfb_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwdfb-catproduct-td' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdfb_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', 'bwdfb-catproduct-td' ),
				'selector' => '{{WRAPPER}} .bwdfb-owl-dots .bwdfb-owl-dot:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

		// for-owl-carousel-start
		$bwdfb_slide_margin = $settings['bwdfb_slide_margin'];
		$bwdfb_slide_mobile_view = $settings['bwdfb_slide_mobile_view'];
		$bwdfb_slide_tablet_view = $settings['bwdfb_slide_tablet_view'];
		$bwdfb_slide_desktop_view = $settings['bwdfb_slide_desktop_view'];
		$bwdfb_infinite_autoplay_switcher = $settings['bwdfb_infinite_autoplay_switcher'];
		$bwdfb_infinite_loop_switcher = $settings['bwdfb_infinite_loop_switcher'];
		$bwdfb_HoverPause_switcher = $settings['bwdfb_HoverPause_switcher'];
		$bwdfb_centermode_switcher = $settings['bwdfb_centermode_switcher'];
		$bwdfb_autoplay_timeout = $settings['bwdfb_autoplay_timeout'];
		$bwdfb_autoplay_speed = $settings['bwdfb_autoplay_speed'];
		$bwdfb_stace_padding = $settings['bwdfb_stace_padding'];
		//nav--------------------------------------------------
		$bwdfb_nav_switcher = $settings['bwdfb_nav_switcher'];
		$bwdfb_nav_type = $settings['bwdfb_nav_type'];

		if( $bwdfb_nav_switcher == 'yes' ) {
			if( $bwdfb_nav_type == 'icon' ) {
				$prev = $settings['bwdfb_nav_prev_arrow']['value'];
				$next = $settings['bwdfb_nav_next_arrow']['value'];
			} else if( $bwdfb_nav_type == 'text' ) {
				$prev = $settings['bwdfb_nav_prev_text'];
				$next = $settings['bwdfb_nav_next_text'];
			} 
		}
		$bwdfb_dots_switcher = $settings['bwdfb_dots_switcher'];
		$bwdfb_dots_type = $settings['bwdfb_dots_type'];
		// for-owl-carousel-end

        $style_num = $settings['bwdfb_flip_box_style'];
        $single_item = $settings['bwdfb_flip_box_content_list'];

		if ( ! empty( $settings['bwdfb_flip_box_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdfb_flip_box_btn_link', $settings['bwdfb_flip_box_btn_link'] );
		}

        if ('style1' === $style_num || 'style2' === $style_num) {
        if ('style1' === $style_num) { ?>
			<div class="bwdfb-flip-box-1-area bwdfb-slider-common <?php echo esc_attr($settings['bwdfb_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdfb-blogpost-custom-id'] ); ?>">
				<?php require 'bwdeb-variable.php' ; ?>
				<div class="bwdfb-owl bwdfb-owl-carousel bwdfb-owl-theme">
						<?php   
						if( $single_item ) {
							foreach( $single_item as $item ) { ?>
						<div class="col-bwdfb elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdfb-flip-box-item">
								<div class="bwdfb-flip-wrapper">
									<div class="bwdfb-flip-font">
										<div class="bwdfb-flip-font-content bwdfb-flip-img">
											<?php if ('image' === $item['bwdfb_flip_box_front_icon_inline'] && !empty($item['bwdfb_flip_box_front_image']['url'])) : ?>
												<div class="bwdfb-choose-img <?php echo esc_attr($item['bwdfb_flip_box_front_image_align']); ?>">
													<img src="<?php echo esc_attr($item['bwdfb_flip_box_front_image']['url']); ?>" alt="">
												</div>
											<?php elseif ('icon' === $item['bwdfb_flip_box_front_icon_inline'] && !empty($item['bwdfb_flip_box_front_icon']['value'])) : ?>	
												<div class="bwdfb-flip-icon <?php echo esc_attr($item['bwdfb_flip_box_front_icon_align']); ?>">
													<i class="<?php echo esc_attr($item['bwdfb_flip_box_front_icon']['value']); ?>"></i>
												</div>
											<?php else : ?>
										<?php endif; ?> 
										<div class=""></div>
										<?php if($item['bwdfb_flip_box_front_show_title'] === 'yes') { ?>
											<<?php echo esc_attr($item['bwdfb_flip_box_front_title_tag']); ?> class="bwdfb-flip-title"><?php echo esc_html($item['bwdfb_flip_box_front_title']); ?></<?php echo esc_attr($item['bwdfb_flip_box_front_title_tag']); ?>> <?php } ?>
											<?php if($item['bwdfb_flip_box_front_show_des'] === 'yes') { ?>
											<div class="bwdfb-flip-description"><?php echo esc_html($item['bwdfb_flip_box_front_des']); ?></div><?php } ?>
										</div>
									</div>
									<div class="bwdfb-flip-back">
										<div class="bwdfb-back-bg-img"></div>
										<div class="bwdfb-flip-back-content">
											<?php if ('image' === $item['bwdfb_flip_box_back_icon_inline'] && !empty($item['bwdfb_flip_box_back_image']['url'])) : ?>
													<div class="bwdfb-choose-img <?php echo esc_attr($item['bwdfb_flip_box_back_image_align']); ?>">
														<img src="<?php echo esc_attr($item['bwdfb_flip_box_back_image']['url']); ?>" alt="">
													</div>
												<?php elseif ('icon' === $item['bwdfb_flip_box_back_icon_inline'] && !empty($item['bwdfb_flip_box_back_icon']['value'])) : ?>	
													<div class="bwdfb-flip-icon <?php echo esc_attr($item['bwdfb_flip_box_back_icon_align']); ?>">
														<i class="<?php echo esc_attr($item['bwdfb_flip_box_back_icon']['value']); ?>"></i>
													</div>
												<?php else : ?>
											<?php endif; ?> 
											<?php if($item['bwdfb_flip_box_back_show_title'] === 'yes') { ?>
											<<?php echo esc_attr($item['bwdfb_flip_box_back_title_tag']); ?> class="bwdfb-flip-title"><?php echo esc_html($item['bwdfb_flip_box_back_title']); ?></<?php echo esc_attr($item['bwdfb_flip_box_back_title_tag']); ?>><?php } ?>
											<?php if($item['bwdfb_flip_box_back_show_des'] === 'yes') { ?>
											<div class="bwdfb-flip-description"><?php echo esc_html($item['bwdfb_flip_box_back_des']); ?></div><?php } ?>
											<?php if($item['bwdfb_flip_box_back_show_btn'] === 'yes') { ?>
											<div class="bwdfb-flip-button"><a href="<?php echo esc_url($item['bwdfb_flip_box_btn_link']['url'] ); ?>" class="bwdfb-flip-btn"><?php echo esc_html($item['bwdfb_flip_box_btn_text']); ?></a></div><?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						}
						} ?>
				</div>
			</div>
			<?php
		} elseif ('style2' === $style_num) { ?>
			<div class="bwdfb-flip-box-2-area bwdfb-slider-common <?php echo esc_attr($settings['bwdfb_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdfb-blogpost-custom-id'] ); ?>">
			<?php require 'bwdeb-variable.php' ; ?>
				<div class="bwdfb-owl bwdfb-owl-carousel bwdfb-owl-theme">
					<?php   
						if( $single_item ) {
							foreach( $single_item as $item ) { ?>
						<div class="col-bwdfb elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
							<div class="bwdfb-flip-box-item">
								<div class="bwdfb-flip-wrapper">
									<div class="bwdfb-flip-font bwdfb-flip-img">
										<div class="bwdfb-flip-font-content">
												<?php if ('image' === $item['bwdfb_flip_box_front_icon_inline'] && !empty($item['bwdfb_flip_box_front_image']['url'])) : ?>
													<div class="bwdfb-choose-img">
														<img src="<?php echo esc_attr($item['bwdfb_flip_box_front_image']['url']); ?>" alt="">
													</div>
												<?php elseif ('icon' === $item['bwdfb_flip_box_front_icon_inline'] && !empty($item['bwdfb_flip_box_front_icon']['value'])) : ?>	
													<div class="bwdfb-flip-icon <?php echo esc_attr($item['bwdfb_flip_box_front_icon_align']); ?>">
														<i class="<?php echo esc_attr($item['bwdfb_flip_box_front_icon']['value']); ?>"></i>
													</div>
												<?php else : ?>
											<?php endif; ?> 
											<?php if($item['bwdfb_flip_box_front_show_title'] === 'yes') { ?>
											<<?php echo esc_attr($item['bwdfb_flip_box_front_title_tag']); ?> class="bwdfb-flip-title"><?php echo esc_html($item['bwdfb_flip_box_front_title']); ?></<?php echo esc_attr($item['bwdfb_flip_box_front_title_tag']); ?>> <?php } ?>
											<?php if($item['bwdfb_flip_box_front_show_des'] === 'yes') { ?>
											<div class="bwdfb-flip-description"><?php echo esc_html($item['bwdfb_flip_box_front_des']); ?></div><?php } ?>
										</div>
									</div>
									<div class="bwdfb-flip-back">
										<div class="bwdfb-flip-back-content">
											<?php if ('image' === $item['bwdfb_flip_box_back_icon_inline'] && !empty($item['bwdfb_flip_box_back_image']['url'])) : ?>
													<div class="bwdfb-choose-img">
														<img src="<?php echo esc_attr($item['bwdfb_flip_box_back_image']['url']); ?>" alt="">
													</div>
												<?php elseif ('icon' === $item['bwdfb_flip_box_back_icon_inline'] && !empty($item['bwdfb_flip_box_back_icon']['value'])) : ?>	
													<div class="bwdfb-flip-icon <?php echo esc_attr($item['bwdfb_flip_box_back_icon_align']); ?>">
														<i class="<?php echo esc_attr($item['bwdfb_flip_box_back_icon']['value']); ?>"></i>
													</div>
												<?php else : ?>
											<?php endif; ?> 
											<?php if($item['bwdfb_flip_box_back_show_title'] === 'yes') { ?>
											<<?php echo esc_attr($item['bwdfb_flip_box_back_title_tag']); ?> class="bwdfb-flip-title"><?php echo esc_html($item['bwdfb_flip_box_back_title']); ?></<?php echo esc_attr($item['bwdfb_flip_box_back_title_tag']); ?>><?php } ?>
											<?php if($item['bwdfb_flip_box_back_show_des'] === 'yes') { ?>
											<div class="bwdfb-flip-description"><?php echo esc_html($item['bwdfb_flip_box_back_des']); ?></div><?php } ?>
											<?php if($item['bwdfb_flip_box_back_show_btn'] === 'yes') { ?>
											<div class="bwdfb-flip-button"><a href="<?php echo esc_url($item['bwdfb_flip_box_btn_link']['url'] ); ?>" class="bwdfb-flip-btn"><?php echo esc_html($item['bwdfb_flip_box_btn_text']); ?></a></div><?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
						} ?>
				</div>
			</div>
			<?php
		}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
    }
}