<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdps_photostack extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdps_photo_stack', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Photo Stack', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-photostack bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return ['bwdeb_general_category'];
	}


	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdps_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdps_style_selection',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/photo-stack" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdps_photo_stack_section',
			[
				'label' => esc_html__( 'Photo Stack', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		//media
		$repeater->add_control(
			'bwdps_photostack_image',
			[
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);

		//all masking image
		$repeater->add_control(
			'bwdps_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'mask_none',
				'options' => [
					'mask_none' => esc_html__('None', 'bwd-elementor-addons'),
					'mask_1'  => esc_html__( 'mask 1', 'bwd-elementor-addons' ),
					'pro-mask_2'  => esc_html__( 'mask 2 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_3'  => esc_html__( 'mask 3 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_4'  => esc_html__( 'mask 4 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_5'  => esc_html__( 'mask 5 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_6'  => esc_html__( 'mask 6 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_7'  => esc_html__( 'mask 7 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_8'  => esc_html__( 'mask 8 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_9'  => esc_html__( 'mask 9 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_10'  => esc_html__( 'mask 10 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_11'  => esc_html__( 'mask 11 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_12'  => esc_html__( 'mask 12 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_13'  => esc_html__( 'mask 13 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_14'  => esc_html__( 'mask 14 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_15'  => esc_html__( 'mask 15 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_16'  => esc_html__( 'mask 16 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_17'  => esc_html__( 'mask 17 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_18'  => esc_html__( 'mask 18 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_19'  => esc_html__( 'mask 19 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_20'  => esc_html__( 'mask 20 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_21'  => esc_html__( 'mask 21 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_22'  => esc_html__( 'mask 22 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_23'  => esc_html__( 'mask 23 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_24'  => esc_html__( 'mask 24 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_25'  => esc_html__( 'mask 25 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_26'  => esc_html__( 'mask 26 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_27'  => esc_html__( 'mask 27 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_28'  => esc_html__( 'mask 28 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_29'  => esc_html__( 'mask 29 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_30'  => esc_html__( 'mask 30 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_31'  => esc_html__( 'mask 31 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_32'  => esc_html__( 'mask 32 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_33'  => esc_html__( 'mask 33 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_34'  => esc_html__( 'mask 34 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_35'  => esc_html__( 'mask 35 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_36'  => esc_html__( 'mask 36 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_37'  => esc_html__( 'mask 37 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_38'  => esc_html__( 'mask 38 (PRO)', 'bwd-elementor-addons' ),
					'pro-mask_39'  => esc_html__( 'mask 39 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/photo-stack-plugin-for-elementor-page-builder" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		//image-link
		$repeater->add_control(
			'bwdps_photostack_image_link',
			[
				'label' => esc_html__( 'Image Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//alt-text
		$repeater->add_control(
			'bwdps_alt_text', 
			[
				'label' => esc_html__( 'ALT Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Item' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//bwdps_imgcontrol_switcher
		$repeater->add_control(
			'bwdps_imgcontrol_switcher',
			[
				'label' => esc_html__( 'Image Control', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
			]
		);

		//image-width
        $repeater->add_responsive_control(
			'bwdps_photostack_width',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//image-height
        $repeater->add_responsive_control(
			'bwdps_photostack_height',
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//z-index
		$repeater->add_responsive_control(
            'bwdps_image_z_index',
            [
                'label'     => esc_html__('Z-Index', 'bwd-elementor-addons'),
                'type'      => Controls_Manager::NUMBER,
                'min'       => -1000,
                'max'       => 1000,
                'step'      => 1,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'z-index: {{VALUE}};',
                ],
                'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
            ]
        );

		//Image Object Opsition
		$repeater->add_control(
			'bwdps_image_object_opsition',
			[
				'label' => esc_html__( 'Image Object Opsition', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'center',
				'options' => [
					'top'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'right'  => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'bottom'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'center'  => esc_html__( 'Center', 'bwd-elementor-addons' ),
				],
				'selectors'   => [
                    '{{WRAPPER}} img' => 'object-position: {{value}}',
                ],
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//position-heading
		$repeater->add_control(
			'bwdps_photostack_image_heading',
			[
				'label' => esc_html__( 'Image Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);
		//top
		$repeater->add_responsive_control(
			'bwdps_photostack_top',
			[
				'label' => esc_html__( 'Offset Y', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'top: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		$repeater->add_responsive_control(
			'bwdps_photostack_left',
			[
				'label' => esc_html__( 'Offset X', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$repeater->start_controls_tabs(
			'style_tabs',
            [
                'separator' => 'before',
				'condition' => [
					'bwdps_imgcontrol_switcher' => 'yes'
				],
            ]
		);

		//highlight-normal-style------------------------------------------
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//border
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img',
			]
		);

		//Border Radius
		$repeater->add_responsive_control(
			'bwdps_photostack_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img',
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

		//border
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img:hover',
			]
		);

		 //Border Radius
		 $repeater->add_responsive_control(
			'bwdps_photostack_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.bwdps_photo_stack_item img:hover',
			]
		);

		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();

		//four-image-repeater
		$this->add_control(
			'bwdps-photostack-section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
				],
				'condition' => [
					'bwdps_style_selection!' => ['style2', 'style3', 'style4', 'style6', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style17', 'style19', 'style20', 'style21'],
				],
				'title_field' => '{{{ bwdps_alt_text }}}',
			]
		);

		//three-image-repeater
		$this->add_control(
			'bwdps-photostack-three-section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
				],
				'condition' => [
					'bwdps_style_selection!' => ['style1', 'style5', 'style7', 'style8', 'style11', 'style12', 'style13', 'style15', 'style16', 'style17', 'style18'],
				],
				'title_field' => '{{{ bwdps_alt_text }}}',
			]
		);

		//five-image-repeater
		$this->add_control(
			'bwdps-photostack-five-section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdps_alt_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
						'bwdps_photostack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
				],
				'condition' => [
					'bwdps_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style14', 'style16', 'style18', 'style19', 'style21'],
				],
				'title_field' => '{{{ bwdps_alt_text }}}',
			]
		);

		$this->end_controls_section();



		//tab-content
		$this->start_controls_section(
			'bwdps_tab_style_section',
			[
				'label' => esc_html__( 'Photo Stack Common', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//Infinite Animation
		$this->add_control(
            'image_infinite_animation',
            [
                'label'     => esc_html__('Infinite Animation', 'bwd-elementor-addons'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''                    => esc_html__('None', 'bwd-elementor-addons'),
                    'bwdps-bounce-sm'        => esc_html__('Bounce Small', 'bwd-elementor-addons'),
                    'bwdps-bounce-md'        => esc_html__('Bounce Medium', 'bwd-elementor-addons'),
                    'bwdps-bounce-lg'        => esc_html__('Bounce Large', 'bwd-elementor-addons'),
                    'bwdps-fade'             => esc_html__('Fade', 'bwd-elementor-addons'),
                    'bwdps-rotating'         => esc_html__('Rotating', 'bwd-elementor-addons'),
                    'bwdps-rotating-inverse' => esc_html__('Rotating inverse', 'bwd-elementor-addons'),
                    'bwdps-scale-sm'         => esc_html__('Scale Small', 'bwd-elementor-addons'),
                    'bwdps-scale-md'         => esc_html__('Scale Medium', 'bwd-elementor-addons'),
                    'bwdps-scale-lg'         => esc_html__('Scale Large', 'bwd-elementor-addons'),
                ],
                'default'   => 'bwdps-bounce-sm',
                'separator' => 'before',
            ]
        );

		//animation_speed
		$this->add_control(
			'bwdps_animation_speed',
			[
				'label'       => esc_html__('Infinite Animation speed', 'bwd-elementor-addons'),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => 6,
				'selectors'   => [
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => '--animation_speed:{{SIZE}}s',
				],
			]
		);

		//hover amination
		$this->add_control(
            'bwdps_hover_animation_style',
            [
                'label'     => esc_html__('Hover Animation', 'bwd-elementor-addons'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'none'             => esc_html__('None', 'bwd-elementor-addons'),
                    'fly-sm'           => esc_html__('Fly Small', 'bwd-elementor-addons'),
                    'fly'              => esc_html__('Fly Medium', 'bwd-elementor-addons'),
                    'fly-lg'           => esc_html__('Fly Large', 'bwd-elementor-addons'),
                    'scale-sm'         => esc_html__('Scale Small', 'bwd-elementor-addons'),
                    'scale'            => esc_html__('Scale Medium', 'bwd-elementor-addons'),
                    'scale-lg'         => esc_html__('Scale Large', 'bwd-elementor-addons'),
                    'scale-inverse-sm' => esc_html__('Scale Inverse Small', 'bwd-elementor-addons'),
                    'scale-inverse'    => esc_html__('Scale Inverse Medium', 'bwd-elementor-addons'),
                    'scale-inverse-lg' => esc_html__('Scale Inverse Large', 'bwd-elementor-addons'),
                    'bounce' => esc_html__('Bounce', 'bwd-elementor-addons'),
                ],
                'default'   => 'scale-sm',
            ]
        );

		//extra hover amination
		$this->add_control(
            'bwdps_extra_hover_animation_style',
            [
                'label'     => esc_html__('Extra Hover Animation', 'bwd-elementor-addons'),
				'description' => esc_html__('Notice: if you use [ Extra Hover Animation ] control, please turn off [ Hover Animation ] control. Thank You', 'bwd-elementor-addons'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'bnone' => esc_html__('None', 'bwd-elementor-addons'),
                    'bounce' => esc_html__('bounce', 'bwd-elementor-addons'),
					'bounceIn' => esc_html__('BounceIn', 'bwd-elementor-addons'),
					'bounceOut' => esc_html__('BounceOut', 'bwd-elementor-addons'),
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
                    'fadeOut' => esc_html__('FadeOut', 'bwd-elementor-addons'),
                    'flip' => esc_html__('Flip', 'bwd-elementor-addons'),
                    'flipInX' => esc_html__('FlipInX', 'bwd-elementor-addons'),
                    'flipInY' => esc_html__('FlipInY', 'bwd-elementor-addons'),
                    'rotateIn' => esc_html__('RotateIn', 'bwd-elementor-addons'),
                    'rotateOut' => esc_html__('RotateOut', 'bwd-elementor-addons'),
                    'hinge' => esc_html__('Hinge', 'bwd-elementor-addons'),
                    'jackInTheBox' => esc_html__('JackInTheBox', 'bwd-elementor-addons'),
                    'zoomIn' => esc_html__('ZoomIn', 'bwd-elementor-addons'),
                    'zoomOut' => esc_html__('ZoomOut', 'bwd-elementor-addons'),
                ],
                'default'   => 'bnone',
				'selectors'   => [
                    '{{WRAPPER}} .bwdps_photo_stack_item:hover img' => 'animation-name: {{value}}',
                ],
            ]
        );

		//hover animation_speed
		$this->add_control(
			'bwdps_hover_animation_speed',
			[
				'label'       => esc_html__('Hover Animation speed', 'bwd-elementor-addons'),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdps_photo_stack_item img' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//image-width
		$this->add_responsive_control(
			'bwdps_photostack_common_width',
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
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		//image-height
		$this->add_responsive_control(
			'bwdps_photostack_common_height',
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
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => 'min-height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//overflow
		$this->add_responsive_control(
            'bwdps_photostack_overflow',
            [
                'label'     => esc_html__('Overflow', 'bwd-elementor-addons'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
					'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
                    'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
                    'scroll'  => esc_html__('Scroll', 'bwd-elementor-addons'),
				],
                'default'   => 'visible',
                'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_wrap' => 'overflow: {{VALUE}}',
				],
            ]
        );

		//alignment
		$this->add_responsive_control(
			'bwdps_photostack_alignment',
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
					'{{WRAPPER}} .bwdps_photostack_alignment' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//norlam-hover-tab-------------------------------------
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

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border_comn',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdps_photostack_border-radius_comn',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_item img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack_comn',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img',
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

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdps_photostack_border_hover_comn',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdps_photostack_border-radius_hover_comn',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdps_photo_stack_item img:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdps_box_shadow_photostack_hover_comn',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdps_photo_stack_item img:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

  
	}


	protected function render(){

		$settings = $this->get_settings_for_display();

		$bwdps_style_selection = $settings['bwdps_style_selection'];

        if ( ! empty( $settings['bwdps_photostack_image_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdps_photostack_image_link', esc_url($settings['bwdps_photostack_image_link']) );
		}

		if( 'style1' == $bwdps_style_selection || 'style2' == $bwdps_style_selection ) {
		if( 'style1' === $bwdps_style_selection ) {
			echo '<div class="bwdps_photo_stack_1 bwdps_photostack_alignment">';
				echo '<div class="bwdps_photo_stack_wrap">';
					if ( $settings['bwdps-photostack-section'] ) {
						foreach (  $settings['bwdps-photostack-section'] as $item ) {
					?>
						<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_attr( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
					<?php } } ?>
				</div>
			</div>
			<?php
		} elseif( 'style2' === $bwdps_style_selection ) {
			echo '<div class="bwdps_photo_stack_2 bwdps_photostack_alignment">';
				echo '<div class="bwdps_photo_stack_wrap">';
					if ( $settings['bwdps-photostack-three-section'] ) {
						foreach (  $settings['bwdps-photostack-three-section'] as $item ) {
				?>
					<div class="bwdps_photo_stack_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?> <?php echo esc_attr( $settings['image_infinite_animation'] ); ?> <?php echo esc_attr( $item['bwdps_maskink_image'] ); ?>">

						<a class="bwdps_anchor" href="<?php echo esc_url( $item['bwdps_photostack_image_link']['url'] ); ?>">
							<img class="<?php echo esc_attr( $settings['bwdps_hover_animation_style'] ); ?>" src="<?php echo esc_attr( $item['bwdps_photostack_image']['url'] ); ?>" alt="<?php echo esc_attr( $item['bwdps_alt_text'] ); ?>">
						</a>
					</div>
				<?php } } ?>
				</div>
        	</div>
			<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
