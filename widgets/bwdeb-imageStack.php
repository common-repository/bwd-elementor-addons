<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdis_imagestack extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdis_image_stack', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Image Stack Group', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-image-box bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdis_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		//Select Style
		$this->add_control(
			'bwdis_style_selection',
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
					'style52' => esc_html__( 'Style 52 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/image-stack-group/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();


        //image box reapeater
		$this->start_controls_section(
			'bwdis_image_stack_section',
			[
				'label' => esc_html__( 'Image Stack', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'bwdis_stack_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);

        //all masking image
		$repeater->add_control(
			'bwdis_maskink_image',
			[
				'label' => esc_html__( 'Masking Effect', 'bwd-elementor-addons' ),
                'description' => esc_html__('Notice: if using [ Masking Effect ] then does not work [ ToolTip ]. Thank You', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'mask_none',
				'options' => [
					'mask_none' => esc_html__('None', 'bwd-elementor-addons'),
					'mask_1'  => esc_html__( 'mask 1', 'bwd-elementor-addons' ),
					'mask_2'  => esc_html__( 'mask 2', 'bwd-elementor-addons' ),
					'mask_3'  => esc_html__( 'mask 3 (PRO)', 'bwd-elementor-addons' ),
					'mask_4'  => esc_html__( 'mask 4 (PRO)', 'bwd-elementor-addons' ),
					'mask_5'  => esc_html__( 'mask 5 (PRO)', 'bwd-elementor-addons' ),
					'mask_6'  => esc_html__( 'mask 6 (PRO)', 'bwd-elementor-addons' ),
					'mask_7'  => esc_html__( 'mask 7 (PRO)', 'bwd-elementor-addons' ),
					'mask_8'  => esc_html__( 'mask 8 (PRO)', 'bwd-elementor-addons' ),
					'mask_9'  => esc_html__( 'mask 9 (PRO)', 'bwd-elementor-addons' ),
					'mask_10'  => esc_html__( 'mask 10 (PRO)', 'bwd-elementor-addons' ),
					'mask_11'  => esc_html__( 'mask 11 (PRO)', 'bwd-elementor-addons' ),
					'mask_12'  => esc_html__( 'mask 12 (PRO)', 'bwd-elementor-addons' ),
					'mask_13'  => esc_html__( 'mask 13 (PRO)', 'bwd-elementor-addons' ),
					'mask_14'  => esc_html__( 'mask 14 (PRO)', 'bwd-elementor-addons' ),
					'mask_15'  => esc_html__( 'mask 15 (PRO)', 'bwd-elementor-addons' ),
					'mask_16'  => esc_html__( 'mask 16 (PRO)', 'bwd-elementor-addons' ),
					'mask_17'  => esc_html__( 'mask 17 (PRO)', 'bwd-elementor-addons' ),
					'mask_18'  => esc_html__( 'mask 18 (PRO)', 'bwd-elementor-addons' ),
					'mask_19'  => esc_html__( 'mask 19 (PRO)', 'bwd-elementor-addons' ),
					'mask_20'  => esc_html__( 'mask 20 (PRO)', 'bwd-elementor-addons' ),
					'mask_21'  => esc_html__( 'mask 21 (PRO)', 'bwd-elementor-addons' ),
					'mask_22'  => esc_html__( 'mask 22 (PRO)', 'bwd-elementor-addons' ),
					'mask_23'  => esc_html__( 'mask 23 (PRO)', 'bwd-elementor-addons' ),
					'mask_24'  => esc_html__( 'mask 24 (PRO)', 'bwd-elementor-addons' ),
					'mask_25'  => esc_html__( 'mask 25 (PRO)', 'bwd-elementor-addons' ),
					'mask_26'  => esc_html__( 'mask 26 (PRO)', 'bwd-elementor-addons' ),
					'mask_27'  => esc_html__( 'mask 27 (PRO)', 'bwd-elementor-addons' ),
					'mask_28'  => esc_html__( 'mask 28 (PRO)', 'bwd-elementor-addons' ),
					'mask_29'  => esc_html__( 'mask 29 (PRO)', 'bwd-elementor-addons' ),
					'mask_30'  => esc_html__( 'mask 30 (PRO)', 'bwd-elementor-addons' ),
					'mask_31'  => esc_html__( 'mask 31 (PRO)', 'bwd-elementor-addons' ),
					'mask_32'  => esc_html__( 'mask 32 (PRO)', 'bwd-elementor-addons' ),
					'mask_33'  => esc_html__( 'mask 33 (PRO)', 'bwd-elementor-addons' ),
					'mask_34'  => esc_html__( 'mask 34 (PRO)', 'bwd-elementor-addons' ),
					'mask_35'  => esc_html__( 'mask 35 (PRO)', 'bwd-elementor-addons' ),
					'mask_36'  => esc_html__( 'mask 36 (PRO)', 'bwd-elementor-addons' ),
					'mask_37'  => esc_html__( 'mask 37 (PRO)', 'bwd-elementor-addons' ),
					'mask_38'  => esc_html__( 'mask 38 (PRO)', 'bwd-elementor-addons' ),
					'mask_39'  => esc_html__( 'mask 39 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://wppluginzone.com/image-stack-group" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);


        //extra hover amination
        $repeater->add_control(
            'bwdis_extra_hover_animation_style',
            [
                'label'     => esc_html__('Hover Animation', 'bwd-elementor-addons'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
									'bnone' => esc_html__('None', 'bwd-elementor-addons'),
									'bounce' => esc_html__('bounce', 'bwd-elementor-addons'),
									'pro-bounceIn' => esc_html__('BounceIn (PRO)', 'bwd-elementor-addons'),
									'pro-bounceOut' => esc_html__('BounceOut (PRO)', 'bwd-elementor-addons'),
									'pro-flash' => esc_html__('Flash (PRO)', 'bwd-elementor-addons'),
									'pro-pulse' => esc_html__('Pulse (PRO)', 'bwd-elementor-addons'),
									'pro-rubberBand' => esc_html__('RubberBand (PRO)', 'bwd-elementor-addons'),
									'pro-shakeX' => esc_html__('ShakeX (PRO)', 'bwd-elementor-addons'),
									'pro-shakeY' => esc_html__('ShakeY (PRO)', 'bwd-elementor-addons'),
									'pro-headShake' => esc_html__('HeadShake (PRO)', 'bwd-elementor-addons'),
									'pro-swing' => esc_html__('Swing (PRO)', 'bwd-elementor-addons'),
									'pro-tada' => esc_html__('Tada (PRO)', 'bwd-elementor-addons'),
									'pro-wobble' => esc_html__('Wobble (PRO)', 'bwd-elementor-addons'),
									'pro-jello' => esc_html__('Jello (PRO)', 'bwd-elementor-addons'),
									'pro-heartBeat' => esc_html__('HeartBeat (PRO)', 'bwd-elementor-addons'),
									'pro-fadeOut' => esc_html__('FadeOut (PRO)', 'bwd-elementor-addons'),
									'pro-flip' => esc_html__('Flip (PRO)', 'bwd-elementor-addons'),
									'pro-flipInX' => esc_html__('FlipInX (PRO)', 'bwd-elementor-addons'),
									'pro-flipInY' => esc_html__('FlipInY (PRO)', 'bwd-elementor-addons'),
									'pro-rotateIn' => esc_html__('RotateIn (PRO)', 'bwd-elementor-addons'),
									'pro-rotateOut' => esc_html__('RotateOut (PRO)', 'bwd-elementor-addons'),
									'pro-hinge' => esc_html__('Hinge (PRO)', 'bwd-elementor-addons'),
									'pro-jackInTheBox' => esc_html__('JackInTheBox (PRO)', 'bwd-elementor-addons'),
									'pro-zoomIn' => esc_html__('ZoomIn (PRO)', 'bwd-elementor-addons'),
									'pro-zoomOut' => esc_html__('ZoomOut (PRO)', 'bwd-elementor-addons'),
                ],
              'default'   => 'bnone',
							'selectors'   => [
									'{{WRAPPER}} {{CURRENT_ITEM}}.bwdis_img_item:hover img' => 'animation-name: {{value}}',
                ],
							'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://wppluginzone.com/image-stack-group" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
				]
        );

		//hover animation_speed
		$repeater->add_control(
			'bwdis_hover_animation_speed',
			[
				'label'       => esc_html__('Hover Animation speed', 'bwd-elementor-addons'),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdis_img_item img' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

        //Image Object Opsition
		$repeater->add_control(
			'bwdis_image_object_opsition',
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
                    '{{WRAPPER}} {{CURRENT_ITEM}}.bwdis_img_item img' => 'object-position: {{value}}',
                ],
			]
		);

        $repeater->add_control(
			'bwdis_image_stack_link',
			[
				'label' => esc_html__( 'Image URL', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Link URL Here', 'bwd-elementor-addons' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

        $repeater->add_control(
			'bwdis_tooltip_switcher',
			[
				'label' => esc_html__( 'ToolTip', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before',
			]
		);

        $repeater->add_control(
			'bwdis_toltip_text',
            [
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Tooltip Text' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //Tooltip Position
		$repeater->add_control(
			'bwdis_tooltip_position',
			[
				'label' => esc_html__( 'Tooltip Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'top' => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'bottom' => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
				],
				'default' => 'top',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);
        $repeater->add_control(
			'bwdis_tooltip_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'color: {{VALUE}}',
				],
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //gradient_bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdis_image_stack_bg_tooltip',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip::before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //typography
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdis_tooltip_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip',
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //alignment
        $repeater->add_responsive_control(
            'bwdis_image_stack_tooltip_alignment',
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
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'text-align: {{VALUE}}',
                ],
                'toggle' => true,
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
            ]
        );

        //tooltip-width
        $repeater->add_responsive_control(
			'bwdis_tooltip_width',
			[
				'label' => esc_html__( 'Tooltip Width', 'bwd-elementor-addons' ),
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
					'size' => 130,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'min-width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //border
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdis_tooltip_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //Border Radius
		$repeater->add_responsive_control(
			'bwdis_image_stack_border-radius_tooltip',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_img_item::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //Box Shadow
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdis_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip',
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        //padding
		$repeater->add_responsive_control(
			'bwdis_tooltip_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdis_tooltip' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
                'condition' => [
					'bwdis_tooltip_switcher' => 'yes'
				],
			]
		);

        $this->add_control(
			'bwdis_image_stack_repeater_section',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdis_toltip_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
                        'bwdis_stack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdis_toltip_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
                        'bwdis_stack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdis_toltip_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
                        'bwdis_stack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
					[
						'bwdis_toltip_text' => esc_html__( 'Item', 'bwd-elementor-addons' ),
                        'bwdis_stack_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
                        ],
					],
				],
				'title_field' => '{{{ bwdis_toltip_text }}}',
			]
		);  

        $this->end_controls_section();



        //tab-style-image-stack
        $this->start_controls_section(
			'bwdis_image_stack_style',
			[
				'label' => esc_html__( 'Image Stack', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        //image-height-width
        $this->add_responsive_control(
            'bwdis_image_stack_Size',
            [
                'label' => esc_html__( 'Image Size', 'bwd-elementor-addons' ),
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
					'size' => 80,
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdis_img_item img' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        //alignment
        $this->add_responsive_control(
            'bwdis_image_stack_alignment',
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
                    '{{WRAPPER}} .bwdis_text-align-center' => 'text-align: {{VALUE}}',
                ],
                'toggle' => true,
            ]
        );

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

        //image-height
        $this->add_control(
            'bwdis_image_stack_hight',
            [
                'label' => esc_html__( 'Image Height', 'bwd-elementor-addons' ),
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
					'size' => 170,
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdis_img_item img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25' , 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style35','style36','style37','style38','style39','style40','style41','style42','style43','style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
            ]
        );

        //gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdis_image_stack_bg',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdis_img_item::before, {{WRAPPER}} .bwdis_img_item img',
				'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style32', 'style33','style34', 'style35','style36', 'style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
			]
		);

        //border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdis_image_stack_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdis_img_item img',
			]
		);

        //Border Radius
		$this->add_responsive_control(
			'bwdis_image_stack_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdis_img_item img, {{WRAPPER}} .bwdis_img_item::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        //Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdis_box_shadow_image',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdis_img_item img',
				'separator' => 'before',
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

        //image-height
        $this->add_control(
            'bwdis_image_stack_hight_hover',
            [
                'label' => esc_html__( 'Image Height', 'bwd-elementor-addons' ),
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
					'size' => 130,
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdis_img_item:hover img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25' , 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style35','style36','style37','style38','style39','style40','style41','style42','style43','style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
            ]
        );

        //gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdis_image_stack_bg_hover',
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdis_img_item:hover::before',
				'condition' => [
					'bwdis_style_selection!' => ['style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style27', 'style28', 'style29', 'style30', 'style32', 'style33','style34', 'style35','style36', 'style40','style41','style42','style43','style44','style45','style46','style47','style48', 'style49', 'style50', 'style51', 'style52'],
				],
			]
		);

        //border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdis_image_stack_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdis_img_item img:hover',
			]
		);

        //Border Radius
		$this->add_responsive_control(
			'bwdis_image_stack_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdis_img_item img, {{WRAPPER}} .bwdis_img_item::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();


	}


	protected function render(){

		$settings = $this->get_settings_for_display();

		$bwdis_style_selection = $settings['bwdis_style_selection'];

        if ( ! empty( $settings['bwdis_image_stack_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdis_image_stack_link', esc_url($settings['bwdis_image_stack_link']) );
		}


		
		if( 'style1' == $bwdis_style_selection || 'style2' == $bwdis_style_selection ) {
		if( 'style1' === $bwdis_style_selection ) { ?>
			<div class="one bwdis_text-align-center">
                <div class="bwdis_image_stack_1 bwdis_image_stack">
                <?php
                if ( $settings['bwdis_image_stack_repeater_section'] ) {
                    foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
						$bwdis_mas_img = ( 'mask_1' == $item['bwdis_maskink_image'] || 'mask_2' == $item['bwdis_maskink_image'] )?esc_url($item['bwdis_maskink_image']):'';
                		?>
						<a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $bwdis_mas_img ); ?> " href="<?php echo esc_url($item['bwdis_image_stack_link']['url']) ?>">
						<?php
						$tooltip = $item['bwdis_tooltip_position'];
						if( 'left' === $tooltip) {
							$variable = 'left';
						} else if( 'top' === $tooltip){
							$variable = 'top';
						} else if( 'right' === $tooltip){
							$variable = 'right';
						} else if( 'bottom' === $tooltip){
							$variable = 'bottom';
						} 
						if( $item['bwdis_tooltip_switcher'] === 'yes' ){
						?>
						<div class="bwdis_tooltip <?php echo esc_attr($variable) ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
						</div>
						<?php }?>
						<img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
						</a>
                <?php } 
				}?>
                </div>
            </div>
			<?php
		} elseif( 'style2' === $bwdis_style_selection ) { ?>
			<div class="two bwdis_text-align-center">
                <div class="bwdis_image_stack_2 bwdis_image_stack">
                <?php
                if ( $settings['bwdis_image_stack_repeater_section'] ) {
                    foreach (  $settings['bwdis_image_stack_repeater_section'] as $item ) {
						$bwdis_mas_img = ( 'mask_1' == $item['bwdis_maskink_image'] || 'mask_2' == $item['bwdis_maskink_image'] )?esc_url($item['bwdis_maskink_image']):'';
						?>
						<a class="bwdis_img_item elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?> <?php echo esc_attr( $bwdis_mas_img ); ?>" href="<?php echo esc_url($item['bwdis_image_stack_link']['url']) ?>">
						<?php
						$tooltip = $item['bwdis_tooltip_position'];
						if( 'left' === $tooltip) {
							$variable = 'left';
						} else if( 'top' === $tooltip){
							$variable = 'top';
						} else if( 'right' === $tooltip){
							$variable = 'right';
						} else if( 'bottom' === $tooltip){
							$variable = 'bottom';
						} 
						if( $item['bwdis_tooltip_switcher'] === 'yes' ){
						?>
						<div class="bwdis_tooltip <?php echo esc_attr($variable) ?> "><?php echo esc_html( $item['bwdis_toltip_text'] ); ?>
						</div>
						<?php }?>
						<img src="<?php echo esc_url($item['bwdis_stack_image']['url']); ?>" alt="">
						</a>
                <?php } 
				}?>
                </div>
            </div>
			<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
