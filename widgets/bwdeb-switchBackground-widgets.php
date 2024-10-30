<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdsb_switchbackground_widgets extends Widget_Base {

    public function get_name() {
		return esc_html__( 'bwdsb-switchbackground', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Background Switcher', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle background-switcher';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    protected function register_controls(){
		

		$this->start_controls_section(
			'bwdsb_common_section',
			[
				'label' => esc_html__( 'Common', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdsb_select_style_selection',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/background-switcher/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

        $this->add_control(
			'bwdsb_mouse_event',
			[
				'label'     => esc_html__('Mouse Event Type', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'default' => 'mouseenter',
				'options'   => [
					'mouseenter' => esc_html__('Mouse Enter', 'bwd-elementor-addons'),
					'mouseleave' => esc_html__('Mouse Leave', 'bwd-elementor-addons'),
					'click' => esc_html__('Click', 'bwd-elementor-addons'),
					'dblclick' => esc_html__('Double Click', 'bwd-elementor-addons'),
				],
			]
		);

		//select
		$this->add_control(
			'bwdsb_switch_layout_style',
			[
				'label' => esc_html__( 'Layout Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'flex',
				'options' => [
					'flex'  => esc_html__( 'flex', 'bwd-elementor-addons' ),
					'grid'  => esc_html__( 'grid', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-style-common' => 'display: {{VALUE}}!important;',
				],
			]
		);

		$this->add_control(
			'bwdsb_switch_layout_style_flex',
			[
				'label'         => esc_html__('Direction', 'bwd-elementor-addons'),
				'type'          => Controls_Manager::SELECT,
				'default'       => '',
				'options'       => [
					''    => esc_html__('Horizontal', 'bwd-elementor-addons'),
					'column'      => esc_html__('Vertical', 'bwd-elementor-addons'),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-style-common' => 'flex-direction: {{VALUE}}!important;',
				],
				'condition' => [
					'bwdsb_switch_layout_style' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'bwdsb_switch_layout_style_grid',
			[
				'label'       => esc_html__('Grid Columns', 'bwd-elementor-addons'),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 2,
				'selectors'   => [
					'{{WRAPPER}} .bwdsb-style-common' => 'grid-template-columns: repeat({{SIZE}}, minmax(0, 1fr))',
				],
				'condition' => [
					'bwdsb_switch_layout_style' => 'grid',
				],
			]
		);

        //breakpoint--------------------
		$this->add_control(
			'bwdsb_switch_breakpoint',
			[
				'label'       => esc_html__('Responsive Breakpoint', 'bwd-elementor-addons'),
                'description' => esc_html__( 'For Horizontal Layout Only', 'bwd-elementor-addons' ),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
                'condition' => [
					'bwdsb_switch_layout_style' => 'flex',
					'bwdsb_switch_layout_style_flex' => '',
				],
			]
		);
        $this->add_control(
			'bwdsb_switch_item_width_breakpointout',
			[
				'label'       => esc_html__('Item Box Width', 'bwd-elementor-addons'),
                'description' => esc_html__( 'When using a responsive breakpoint, you will need to provide custom item box width. ', 'bwd-elementor-addons' ),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 300,
				'selectors'   => [
					'{{WRAPPER}} .bwdsb-style-common .content-wrappersss' => 'flex: 1 0 {{SIZE}}px!important',
				],
				'condition' => [
					'bwdsb_switch_breakpoint!' => '',
                    'bwdsb_switch_layout_style' => 'flex',
					'bwdsb_switch_layout_style_flex' => '',
				],
			]
		);
        $this->add_control(
			'bwdsb_switch_item_numbs',
			[
				'label'       => esc_html__('Item Numbers', 'bwd-elementor-addons'),
                'description' => esc_html__( 'Go to the [ Switch Item Repeater ] tab and count the repeated items. Now, this count value write here, Only Number"3". Example: Now your repeated item number is #3.', 'bwd-elementor-addons' ),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 10000,
				'step'        => 1,
				'default'     => 3,
				'condition' => [
					'bwdsb_switch_breakpoint!' => '',
                    'bwdsb_switch_layout_style' => 'flex',
					'bwdsb_switch_layout_style_flex' => '',
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'bwdsb_call_content_section',
			[
				'label' => esc_html__( 'Switch Item Repeater', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$bwdsb_repet = new \Elementor\Repeater();

		//content amination
		$bwdsb_repet->add_control(
			'bwdsb_content_animations',
			[
				'label'     => esc_html__('Content Animation', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'default' => '',
				'options'   => [
					'' => esc_html__('Default', 'bwd-elementor-addons'),
					'bounce' => esc_html__('Bounce', 'bwd-elementor-addons'),
					'bounceIn' => esc_html__('BounceIn', 'bwd-elementor-addons'),
					'bounceOut' => esc_html__('BounceOut', 'bwd-elementor-addons'),
					'bounceInUp' => esc_html__('bounceInUp', 'bwd-elementor-addons'),
					'bounceInDown' => esc_html__('bounceInDown', 'bwd-elementor-addons'),
					'bounceInLeft' => esc_html__('bounceInLeft', 'bwd-elementor-addons'),
					'bounceInRight' => esc_html__('bounceInRight', 'bwd-elementor-addons'),
					'backInUp' => esc_html__('backInUp', 'bwd-elementor-addons'),
					'backInDown' => esc_html__('backInDown', 'bwd-elementor-addons'),
					'backInLeft' => esc_html__('backInLeft', 'bwd-elementor-addons'),
					'backInRight' => esc_html__('backInRight', 'bwd-elementor-addons'),
					'flip' => esc_html__('Flip', 'bwd-elementor-addons'),
					'flipInX' => esc_html__('FlipInX', 'bwd-elementor-addons'),
					'flipInY' => esc_html__('FlipInY', 'bwd-elementor-addons'),
					'fadeIn' => esc_html__('fadeIn', 'bwd-elementor-addons'),
					'fadeOut' => esc_html__('FadeOut', 'bwd-elementor-addons'),
					'fadeInUp' => esc_html__('fadeInUp', 'bwd-elementor-addons'),
					'fadeInDown' => esc_html__('fadeInDown', 'bwd-elementor-addons'),
					'fadeInUpBig' => esc_html__('fadeInUpBig', 'bwd-elementor-addons'),
					'fadeInLeft' => esc_html__('fadeInLeft', 'bwd-elementor-addons'),
					'fadeInRight' => esc_html__('fadeInRight', 'bwd-elementor-addons'),
					'fadeInRightBig' => esc_html__('fadeInRightBig', 'bwd-elementor-addons'),
					'fadeInBottomRight' => esc_html__('fadeInBottomRight', 'bwd-elementor-addons'),
					'fadeInBottomLeft' => esc_html__('fadeInBottomLeft', 'bwd-elementor-addons'),
					'fadeInTopRight' => esc_html__('fadeInTopRight', 'bwd-elementor-addons'),
					'fadeInTopLeft' => esc_html__('fadeInTopLeft', 'bwd-elementor-addons'),
					'rotateIn' => esc_html__('RotateIn', 'bwd-elementor-addons'),
					'rotateOut' => esc_html__('RotateOut', 'bwd-elementor-addons'),
					'rotateInUpRight' => esc_html__('rotateInUpRight', 'bwd-elementor-addons'),
					'rotateInUpLeft' => esc_html__('rotateInUpLeft', 'bwd-elementor-addons'),
					'rotateInDownRight' => esc_html__('rotateInDownRight', 'bwd-elementor-addons'),
					'rotateInDownLeft' => esc_html__('rotateInDownLeft', 'bwd-elementor-addons'),
					'hinge' => esc_html__('Hinge', 'bwd-elementor-addons'),
					'zoomIn' => esc_html__('ZoomIn', 'bwd-elementor-addons'),
					'zoomOut' => esc_html__('ZoomOut', 'bwd-elementor-addons'),
					'zoomInUp' => esc_html__('zoomInUp', 'bwd-elementor-addons'),
					'zoomInRight' => esc_html__('zoomInRight', 'bwd-elementor-addons'),
					'zoomInLeft' => esc_html__('zoomInLeft', 'bwd-elementor-addons'),
					'zoomInDown' => esc_html__('zoomInDown', 'bwd-elementor-addons'),
					'slideInUp' => esc_html__('SlideInUp', 'bwd-elementor-addons'),
					'slideInRight' => esc_html__('slideInRight', 'bwd-elementor-addons'),
					'slideInLeft' => esc_html__('slideInLeft', 'bwd-elementor-addons'),
					'slideInDown' => esc_html__('slideInDown', 'bwd-elementor-addons'),
					'flash' => esc_html__('Flash', 'bwd-elementor-addons'),
					'rollIn' => esc_html__('rollIn', 'bwd-elementor-addons'),
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
					'jackInTheBox' => esc_html__('JackInTheBox', 'bwd-elementor-addons'),
					'lightSpeedInLeft' => esc_html__('lightSpeedInLeft', 'bwd-elementor-addons'),
					'lightSpeedInRight' => esc_html__('lightSpeedInRight', 'bwd-elementor-addons'),
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.content-wrappersss.active .content-inner-wrapper' => 'animation-name: {{VALUE}}!important;',
				],
			]
		);

		//content_animation_speed
		$bwdsb_repet->add_control(
			'bwdsb_content_animation_speed',
			[
				'label' => __('Animation Speed (ms)', 'bwd-elementor-addons'),
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
					'{{WRAPPER}} {{CURRENT_ITEM}}.content-wrappersss.active .content-inner-wrapper' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//image
		$bwdsb_repet->add_control(
			'bwdsb_switch_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

		$bwdsb_repet->add_control(
			'bwdsb_switch_image_position',
			[
				'label' => esc_html__( 'Image Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'center center',
				'options' => [
					'left top'  => esc_html__( 'Left Top', 'bwd-elementor-addons' ),
					'left center' => esc_html__( 'Left Center', 'bwd-elementor-addons' ),
					'left bottom' => esc_html__( 'Left Bottom', 'bwd-elementor-addons' ),
					'right top'  => esc_html__( 'Right Top', 'bwd-elementor-addons' ),
					'right center' => esc_html__( 'Right Center', 'bwd-elementor-addons' ),
					'right bottom' => esc_html__( 'Right Bottom', 'bwd-elementor-addons' ),
					'center top'  => esc_html__( 'Center Top', 'bwd-elementor-addons' ),
					'center center' => esc_html__( 'Center Center', 'bwd-elementor-addons' ),
					'center bottom' => esc_html__( 'Center Bottom', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .section-background' => 'background-position: {{VALUE}}!important;',
				],
			]
		);

		$bwdsb_repet->add_control(
            'bwdsb_button_popover',
            [
                'label' => __('Buttons', 'bwd-elementor-addons'),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', 'bwd-elementor-addons'),
                'label_on' => __('Custom', 'bwd-elementor-addons'),
                'return_value' => 'yes',
            ]
        );
		$bwdsb_repet->start_popover();
			//button text
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_text', 
				[
					'label' => esc_html__( 'First Button Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,	
					'label_block' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			//button link
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_link',
				[
					'label' => esc_html__( 'First Button Link', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => esc_html__( 'https://example.com', 'bwd-elementor-addons' ),
					'label_block' => true,
					'show_external' => true,
					'default' => [
						'url' => 'https://bestwpdeveloper.com/',
						'is_external' => true,
						'nofollow' => true,
					],
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdsb_switch_btn_text!' => '',
					],
				]
			);
			//button text
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_text_next', 
				[
					'label' => esc_html__( 'Second Button Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,	
					'label_block' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			//button link
			$bwdsb_repet->add_control(
				'bwdsb_switch_btn_link_next',
				[
					'label' => esc_html__( 'Second Button Link', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => esc_html__( 'https://example.com', 'bwd-elementor-addons' ),
					'label_block' => true,
					'show_external' => true,
					'default' => [
						'url' => 'https://bestwpdeveloper.com/',
						'is_external' => true,
						'nofollow' => true,
					],
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdsb_switch_btn_text_next!' => '',
					],
				]
			);
		$bwdsb_repet->end_popover();

		$bwdsb_repet->add_control(
			'bwdsb_switch_title', 
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$bwdsb_repet->add_control(
			'bwdsb_switch_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);

		//main-repeater
		$this->add_control(
			'bwdsb_switch_main_repetater',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bwdsb_repet->get_controls(),
				'default' => [
					[
						'bwdsb_switch_title' => esc_html__( 'Lorem ipsum dolor sit amet.' , 'bwd-elementor-addons' ),
						'bwdsb_switch_description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_text' => esc_html__( 'Contact' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_btn_text_next' => esc_html__( 'Details' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_link_next' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdsb_switch_title' => esc_html__( 'Lorem ipsum dolor sit amet.' , 'bwd-elementor-addons' ),
						'bwdsb_switch_description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_text' => esc_html__( 'Contact' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_btn_text_next' => esc_html__( 'Details' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_link_next' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
					[
						'bwdsb_switch_title' => esc_html__( 'Lorem ipsum dolor sit amet.' , 'bwd-elementor-addons' ),
						'bwdsb_switch_description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_text' => esc_html__( 'Contact' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_link' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_btn_text_next' => esc_html__( 'Details' , 'bwd-elementor-addons' ),
						'bwdsb_switch_btn_link_next' => ['url' => 'https://bestwpdeveloper.com/'],
						'bwdsb_switch_image' => [
                            'url' => plugin_dir_url(__DIR__).'assets/public/image/default.jpg',
                        ],
					],
				],
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'bwdsb_common_section_style',
			[
				'label' => esc_html__( 'Common', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//image-height
		$this->add_responsive_control(
			'bwdsb_commn_img_height',
			[
				'label' => esc_html__( 'Section Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'vh' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'vh' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .content-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//alignment
		$this->add_responsive_control(
			'bwdsb_commn_alignment',
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
					'{{WRAPPER}} .content-inner-wrapper' => 'text-align: {{VALUE}}',
					'{{WRAPPER}} .bwdsb-max-bttn' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_common_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsb_common_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdsb_switch_comn_BG_type',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdsb_switch_comn_BG_type_solid',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-wrappersss .content-wrapper' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdsb_switch_comn_BG_type' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsb_commn_background',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .content-wrappersss .content-wrapper',
				'condition' => [
					'bwdsb_switch_comn_BG_type' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_commn_border',
				'selector' => '{{WRAPPER}} .content-wrappersss .content-wrapper',
			]
		);

		$this->add_responsive_control(
			'bwdsb_commn_box_gap',
			[
				'label' => esc_html__( 'Box Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-style-common' => 'gap: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
					'bwdsb_switch_layout_style' => 'flex',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdsb_commn_padding',
			[
				'label' => esc_html__( 'Box Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .content-inner-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdsb_common_style_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdsb_switch_comn_BG_type_active',
			[
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid'  => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'gradient'  => esc_html__( 'Gradient', 'bwd-elementor-addons' ),
				],
			]
		);

		$this->add_control(
			'bwdsb_switch_comn_BG_type_solid_active',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-wrappersss.active .content-wrapper' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdsb_switch_comn_BG_type_active' => 'solid'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdsb_commn_background_active',
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .content-wrappersss.active .content-wrapper',
				'condition' => [
					'bwdsb_switch_comn_BG_type_active' => 'gradient'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_commn_border_active',
				'selector' => '{{WRAPPER}} .content-wrappersss.active .content-wrapper',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdsb_title_section_style',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_hover_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsb_hover_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdsb_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_title_background',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_title_typo',
				'selector' => '{{WRAPPER}} .bwdsb-title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_title_border',
				'selector' => '{{WRAPPER}} .bwdsb-title',
			]
		);
		$this->add_responsive_control(
			'bwdsb_title_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdsb_title_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//margin
		$this->add_responsive_control(
			'bwdsb_title_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdsb_hover_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdsb_title_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_title_background_hover',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_title_border_hover',
				'selector' => '{{WRAPPER}} .bwdsb-title:hover',
			]
		);
		$this->add_responsive_control(
			'bwdsb_title_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-title:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdsb_desce_section_style',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_desce_hover_style_tabs'
		);

		$this->start_controls_tab(
			'bwdsb_desce_hover_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdsb_desce_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_desce_background',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_desce_typo',
				'selector' => '{{WRAPPER}} .bwdsb-desc',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_desce_border',
				'selector' => '{{WRAPPER}} .bwdsb-desc',
			]
		);
		$this->add_responsive_control(
			'bwdsb_desce_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdsb_desce_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//margin
		$this->add_responsive_control(
			'bwdsb_desce_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();


		$this->start_controls_tab(
			'bwdsb_desce_hover_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'bwdsb_desce_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsb_desce_background_hover',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_desce_border_hover',
				'selector' => '{{WRAPPER}} .bwdsb-desc:hover',
			]
		);
		$this->add_responsive_control(
			'bwdsb_desce_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-desc:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();







		$this->start_controls_section(
			'bwdsb_button_section_style',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'bwdsb_button_gap',
			[
				'label' => esc_html__( 'Button Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-max-bttn' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdsb_first_button_options',
			[
				'label' => esc_html__( 'First Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->start_controls_tabs(
			'bwdsb_button_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdsb_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_FB_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_FB_bg',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_FB_typography',
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_FB_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_FB_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-padding
		$this->add_responsive_control(
			'bwdsb_FB_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_FB_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdsb_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_FB_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_FB_bg_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_FB_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_FB_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_FB_shadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-prev:hover',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();






		$this->add_control(
			'bwdsb_second_button_options',
			[
				'label' => esc_html__( 'Second Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);







		$this->start_controls_tabs(
			'bwdsb_SB_button_style_tabs'
		);
		
		$this->start_controls_tab(
			'bwdsb_SB_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_SB_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_SB_bg',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdsb_SB_typography',
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_SB_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_SB_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-padding
		$this->add_responsive_control(
			'bwdsb_SB_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_SB_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdsb_SB_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//first-button-color
		$this->add_control(
			'bwdsb_SB_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//first-button-background
		$this->add_control(
			'bwdsb_SB_bg_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdsb_SB_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover',
			]
		);

		//first-button-Border Radius
		$this->add_responsive_control(
			'bwdsb_SB_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//first-button-box-shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdsb_SB_shadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-bttn.bwdsb-bttn-next:hover',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();


		$this->end_controls_section();


		
	}

    protected function render(){

        $settings = $this->get_settings_for_display();

		$bwdsb_style_selection = $settings['bwdsb_select_style_selection'];

        $breakpoint_1 = $settings['bwdsb_switch_breakpoint'];
        $item_width = $settings['bwdsb_switch_item_width_breakpointout'];
        $item_numb = $settings['bwdsb_switch_item_numbs'];


		$media_query_1 = '@media only screen and (max-width: ' . $breakpoint_1 . 'px) {
			.bwdsb-style-common { overflow-x: auto; }
            .content-wrappersss .background_img { width: calc(' . $item_width .'px * ' . $item_numb . ')!important; }
		 }';
        ?>
                <style>
                    <?php echo esc_attr($media_query_1); ?>
                </style>
        <?php
        ?>

        <?php

        if( 'style1' == $bwdsb_style_selection || 'style2' == $bwdsb_style_selection) {
        if( 'style1' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style1 bwdsb-style-common">
            
                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title'] );?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description'] );?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? esc_url($repet_switch['bwdsb_switch_btn_link']['url']) : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? esc_url($repet_switch['bwdsb_switch_btn_link_next']['url']) : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">

                    <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdeb-MouseEvent2.php' ; ?>
            </div>
            <?php
        } elseif( 'style2' === $bwdsb_style_selection ) { ?>
            <div class="bwdsb-style2 bwdsb-style-common">

                <?php if ( $settings['bwdsb_switch_main_repetater'] ) { 
                    foreach (  $settings['bwdsb_switch_main_repetater'] as $repet_switch ) {
                ?>
                <div class="content-wrappersss elementor-repeater-item-<?php echo esc_attr( $repet_switch['_id'] ); ?>">
                    <div class="content-wrapper">
                        <div class="content-inner-wrapper">
                            <div class="content-inner-wrapper-extra">

                                <?php if (!empty($repet_switch['bwdsb_switch_title'])) : ?>
                                <div class="bwdsb-title"><?php echo esc_html( $repet_switch['bwdsb_switch_title']);?></div>
                                <?php endif; ?>

                                <?php if (!empty($repet_switch['bwdsb_switch_description'])) : ?>
                                <div class="bwdsb-desc"><?php echo esc_html( $repet_switch['bwdsb_switch_description']);?></div>
                                <?php endif; ?>

                                <div class="bwdsb-max-bttn">

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-prev" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link']['url']) ? esc_url($repet_switch['bwdsb_switch_btn_link']['url']) : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text']); ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($repet_switch['bwdsb_switch_btn_text_next'])) : ?>
                                    <a class="bwdsb-bttn bwdsb-bttn-next" href="<?php echo esc_url(isset($repet_switch['bwdsb_switch_btn_link_next']['url']) ? esc_url($repet_switch['bwdsb_switch_btn_link_next']['url']) : ''); ?>" <?php echo esc_attr(($repet_switch['bwdsb_switch_btn_link_next']['is_external']) ? 'target="_blank"' : ''); ?>><?php echo esc_html($repet_switch['bwdsb_switch_btn_text_next']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background_img">
                        <div class="section-background" style="background: url(<?php echo esc_url( $repet_switch['bwdsb_switch_image']['url'] ); ?>);"></div>
                        
                    </div>
                </div>
                <?php } } ?>
                <?php require 'bwdeb-MouseEvent2.php' ; ?>
            </div>
            <?php
        }
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
    }

}