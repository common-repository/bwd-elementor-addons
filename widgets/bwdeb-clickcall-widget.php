<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdctcclickcall_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdctc-clicktocall', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Click To Contact', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-clicktocontact bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls(){
		
		//tab-content
		$this->start_controls_section(
			'bwdctc_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdctc_select_style_selection',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/click-to-contact/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'bwdctc_call_button_section',
			[
				'label' => esc_html__( 'Contact Button', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//button text title
		$this->add_control(
			'bwdctc_button_title', 
			[
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Call Us' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25','style26','style27','style28','style29','style30','style31',],
				],
			]
		);

		//show icon
		$this->add_control(
			'bwdctc_call_show_Icon',
			[
				'label' => esc_html__( 'Contact Show Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-phone',
					'library' => 'fa-solid',
				],
			]
		);

		//close icon
		$this->add_control(
			'bwdctc_call_close_Icon',
			[
				'label' => esc_html__( 'Contact Close Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-xmark',
					'library' => 'fa-solid',
				],
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'bwdctc_call_content_section',
			[
				'label' => esc_html__( 'Contact Content', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//overlay switcher
		$this->add_control(
			'bwdctc_overlay_switcher',
			[
				'label' => esc_html__( 'Background Overlay?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


		//img-switcher
		$this->add_control(
			'bwdctc_img_switcher',
			[
				'label' => esc_html__( 'Image?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//media
		$this->add_control(
			'bwdctc_call_image',
			[
				'label'   => __('Choose Image', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdctc_img_switcher' => 'yes'
				],
			]
		);

		//image-link
		$this->add_control(
			'bwdctc_image_link',
			[
				'label' => esc_html__( 'Image Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://example.com', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_img_switcher' => 'yes'
				],
			]
		);

		//title switcher
		$this->add_control(
			'bwdctc_title_switcher',
			[
				'label' => esc_html__( 'Title?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//title
		$this->add_control(
			'bwdctc_title', 
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Diana Lunto' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_title_switcher' => 'yes'
				],
			]
		);

		//sub title switcher
		$this->add_control(
			'bwdctc_sub_title_switcher',
			[
				'label' => esc_html__( 'Sub Title?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//sub title
		$this->add_control(
			'bwdctc_sub_title', 
			[
				'label' => esc_html__( 'Sub Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Finance' , 'bwd-elementor-addons' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdctc_sub_title_switcher' => 'yes'
				],
			]
		);

		//Description switcher
		$this->add_control(
			'bwdctc_desce_switcher',
			[
				'label' => esc_html__( 'Description?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdctc_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Hey there Need help? I am here for you, so just give me a call', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your description here', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdctc_desce_switcher' => 'yes'
				],
			]
		);
		$this->add_control(
			'bwdctc_allow_shortcode_switcher',
			[
				'label' => esc_html__( 'Add Shortcode?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdctc_shortcode',
			[
					'label' => esc_html__('Shortcode', 'bwd-elementor-addons'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'placeholder' => esc_html__('Enter your shortcode here', 'bwd-elementor-addons'),
					'condition' => [
						'bwdctc_allow_shortcode_switcher' => 'yes'
					],
			]
	);
		$this->add_control(
			'bwdctc_contact_type',
			[
				'label' => esc_html__( 'Contact Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'tel:',
				'options' => [
					'tel:'  => esc_html__( 'Phone', 'bwd-elementor-addons' ),
					'mailto:'  => esc_html__( 'Email', 'bwd-elementor-addons' ),
					'https://wa.me/'  => esc_html__( 'Whatsapp', 'bwd-elementor-addons' ),
					''  => esc_html__( 'Skype', 'bwd-elementor-addons' ),
				],
			]
		);

		//Contact Text
		$this->add_control(
			'bwdctc_contact_phone', 
			[
				'label' => esc_html__( 'Contact Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+01705107675' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//Contact link
		$this->add_control(
			'bwdctc_contact_link', 
			[
				'label' => esc_html__( 'Contact Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'description' => esc_html__('(Phone: 017xxxxxxxx), (Email: examp@gmail.com), (Whatsapp: 017xxxxxxx), (Skype: https://join.skype.com/invite/BTHm4h0xFkdJ)', 'bwd-elementor-addons'),
				'default' => esc_html__( '+01705107675' ),	
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//Description switcher
		$this->add_control(
			'bwdctc_cont_icon_switcher',
			[
				'label' => esc_html__( 'Content Icon?', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		//content icon
		$this->add_control(
			'bwdctc_call_cont_Icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-phone',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdctc_cont_icon_switcher' => 'yes'
				],
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'bwdctc_call_button_style_section',
			[
				'label' => esc_html__( 'Contact Button', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//position-popover
		$this->add_control(
			'bwdctc_position_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();

			$this->add_responsive_control(
				'bwdctc_button_bottom',
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
						'{{WRAPPER}} .bwdctc-call-button-position' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_responsive_control(
				'bwdctc_button_right',
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
						'{{WRAPPER}} .bwdctc-call-button-position' => 'right: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();


		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//button-text-popover
		$this->add_control(
			'bwdctc_button_text_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24','style25','style26','style27','style28','style29','style30','style31',],
				],
			]
		);
		$this->start_popover();

			//text gap
			$this->add_responsive_control(
				'bwdctc_button_text_gap',
				[
					'label' => esc_html__( 'Gap', 'bwd-elementor-addons' ),
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
						'{{WRAPPER}} .bwdctc-call-text' => 'margin-left: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//button tetx color
			$this->add_control(
				'bwdctc_button_text_color',
				[
					'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-call-text' => 'color: {{VALUE}}',
					],
				]
			);

			//button tetx hover color
			$this->add_control(
				'bwdctc_button_text_color_hover',
				[
					'label' => esc_html__( 'Text Hover Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-call-button:hover .bwdctc-call-text' => 'color: {{VALUE}}',
					],
				]
			);

			//button text typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_button_text_typography',
					'selector' => '{{WRAPPER}} .bwdctc-call-text',
				]
			);

		$this->end_popover();

		//amination
		$this->add_control(
            'bwdctc_animation_style',
            [
                'label'     => esc_html__('Infinite Animation', 'bwd-elementor-addons'),
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
                    '{{WRAPPER}} .bwdctc-call-button' => 'animation-name: {{value}}',
                ],
            ]
        );

		//animation_speed
		$this->add_control(
			'bwdctcps_animation_speed',
			[
				'label'       => esc_html__('Animation speed', 'bwd-elementor-addons'),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdctc-call-button' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//button width
		$this->add_responsive_control(
			'bwdctc_button_width',
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
					'{{WRAPPER}} .bwdctc-call-button' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//button height
        $this->add_responsive_control(
			'bwdctc_button_height',
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
					'{{WRAPPER}} .bwdctc-call-button' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//icon size
        $this->add_responsive_control(
			'bwdctc_button_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdctc-call-button' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//show icon color
		$this->add_control(
			'bwdctc_button_color',
			[
				'label' => esc_html__( 'Show Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc_show-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//close icon color
		$this->add_control(
			'bwdctc_button_close_color',
			[
				'label' => esc_html__( 'Close Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc_close-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_button',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-button',
			]
		);

		//shape_before_color
		$this->add_control(
			'bwdctc_button_shape_before_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button::before' => 'border-color: {{VALUE}}',
				],
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style6','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style20','style21','style22','style23','style24','style25','style28','style29','style30','style31',],
				],
			]
		);

		//shape_before_color
		$this->add_control(
			'bwdctc_button_before_background',
			[
				'label' => esc_html__( 'Animate Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdctc_select_style_selection!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style22','style23','style24','style25','style26','style27','style28','style29','style30','style31',],
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_button',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button',
			]
		);

		$this->end_controls_tab();

		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		
		//amination
		$this->add_control(
            'bwdctc_animation_style_active',
            [
                'label'     => esc_html__('Infinite Animation', 'bwd-elementor-addons'),
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
                    '{{WRAPPER}} .bwdctc-call-button.show-call-button' => 'animation-name: {{value}}',
                ],
            ]
        );

		//animation_speed
		$this->add_control(
			'bwdctcps_animation_speed_active',
			[
				'label'       => esc_html__('Animation speed', 'bwd-elementor-addons'),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdctc-call-button.show-call-button' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_button_active',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-button.show-call-button',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_active',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button.show-call-button',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button.show-call-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_button_active',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button.show-call-button',
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

		//amination
		$this->add_control(
			'bwdctc_animation_style_hover',
			[
				'label'     => esc_html__('Infinite Animation', 'bwd-elementor-addons'),
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
					'{{WRAPPER}} .bwdctc-call-button:hover' => 'animation-name: {{value}}',
				],
			]
		);

		//animation_speed
		$this->add_control(
			'bwdctcps_animation_speed_hover',
			[
				'label'       => esc_html__('Animation speed', 'bwd-elementor-addons'),
				'type'        => Controls_Manager::NUMBER,
				'min'         => 0,
				'max'         => 100,
				'step'        => .1,
				'default'     => .4,
				'selectors'   => [
					'{{WRAPPER}} .bwdctc-call-button:hover' => 'animation-duration:{{SIZE}}s',
				],
			]
		);

		//show icon color
		$this->add_control(
			'bwdctc_button_color_hover',
			[
				'label' => esc_html__( 'Show Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button:hover .bwdctc_show-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//close icon color
		$this->add_control(
			'bwdctc_button_close_color_hover',
			[
				'label' => esc_html__( 'Close Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button:hover .bwdctc_close-bttn' => 'color: {{VALUE}}',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_button_hover',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-button:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_button_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-button:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_overlay',
			[
				'label' => esc_html__( 'Background Overlay', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdctc_overlay_switcher' => 'yes',
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_overlay',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-overlay',
			]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_call_content_style_section',
			[
				'label' => esc_html__( 'Contact Content Box', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//content box position
		$this->add_control(
			'bwdctc_content_posi_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Box Position', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
			]
		);
		$this->start_popover();

			$this->add_responsive_control(
				'bwdctc_box_top',
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
						'{{WRAPPER}} .bwdctc-agent-box' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_responsive_control(
				'bwdctc_box_left',
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
						'{{WRAPPER}} .bwdctc-agent-box' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//alignment
		$this->add_responsive_control(
			'bwdctc_all_item_alignment',
			[
				'label' => esc_html__( 'Item Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdctc-agent-info' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//box width
		$this->add_responsive_control(
			'bwdctc_box_width',
			[
				'label' => esc_html__( 'Max Width', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdctc-agent-box' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_box',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_box',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_box',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-agent-box',
			]
		);
		
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_box',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_box',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_box',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdctc_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		//highlight-Hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_box',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_gradient_box_hover',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-agent-box:hover',
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_box_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box:hover',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_button_border_box_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-box:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_button_border-radius_box_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-box:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_contact_img',
			[
				'label' => esc_html__( 'Contact Image', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' =>[
					'bwdctc_img_switcher' => 'yes',
				],
			]
		);

		//img width
		$this->add_responsive_control(
			'bwdctc_img_width',
			[
				'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdctc-agent-img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_img_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-img',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_img_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-agent-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_img_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-agent-img',
			]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_text_content_section',
			[
				'label' => esc_html__( 'Contact Text Content', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//title popover
		$this->add_control(
			'bwdctc_content_title_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' =>[
					'bwdctc_title_switcher' => 'yes',
				],
			]
		);
		$this->start_popover();

			//title color
			$this->add_control(
				'bwdctc_box_title',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-title' => 'color: {{VALUE}}',
					],
				]
			);

			//title hover color
			$this->add_control(
				'bwdctc_box_title_hover',
				[
					'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-title:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//title typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_title_typography',
					'selector' => '{{WRAPPER}} .bwdctc-agent-title',
				]
			);

			//item gap
			$this->add_responsive_control(
				'bwdctc_title_gap',
				[
					'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
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
						'{{WRAPPER}} .bwdctc-agent-title' => 'margin-top: {{SIZE}}{{UNIT}};',
					],
					'condition' =>[
						'bwdctc_title_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();

		//sub title popover
		$this->add_control(
			'bwdctc_content_subtitle_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Sub Title', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' =>[
					'bwdctc_sub_title_switcher' => 'yes',
				],
			]
		);
		$this->start_popover();

			//sub title color
			$this->add_control(
				'bwdctc_box_sub_title',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-subtitle' => 'color: {{VALUE}}',
					],
				]
			);

			//sub title hover color
			$this->add_control(
				'bwdctc_box_sub_title_hover',
				[
					'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-subtitle:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//sub title typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_sub_title_typography',
					'selector' => '{{WRAPPER}} .bwdctc-agent-subtitle',
				]
			);

			//item gap
			$this->add_responsive_control(
				'bwdctc_subtitle_gap',
				[
					'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
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
						'{{WRAPPER}} .bwdctc-agent-subtitle' => 'margin-top: {{SIZE}}{{UNIT}};',
					],
					'condition' =>[
						'bwdctc_sub_title_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();

		//desc popover
		$this->add_control(
			'bwdctc_content_desc_popover',
			[
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' =>[
					'bwdctc_desce_switcher' => 'yes',
				],
			]
		);
		$this->start_popover();

			//desc color
			$this->add_control(
				'bwdctc_box_desc',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-desc' => 'color: {{VALUE}}',
					],
				]
			);

			//desc hover color
			$this->add_control(
				'bwdctc_box_desc_hover',
				[
					'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdctc-agent-desc:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//desc typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdctc_desc_typography',
					'selector' => '{{WRAPPER}} .bwdctc-agent-desc',
				]
			);

			//item gap
			$this->add_responsive_control(
				'bwdctc_desc_gap',
				[
					'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
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
						'{{WRAPPER}} .bwdctc-agent-desc' => 'margin-top: {{SIZE}}{{UNIT}};',
					],
					'condition' =>[
						'bwdctc_desce_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();

		$this->end_controls_section();



		$this->start_controls_section(
			'bwdctc_number_section',
			[
				'label' => esc_html__( 'Contact Number', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//common heading
		$this->add_control(
			'bwdctc_common_heading',
			[
				'label' => esc_html__( 'Common', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdctc_common',
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .bwdctc-call-number',
				'separator' => 'before',
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdctc_box_shadow_comm',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-number',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdctc_border_comm',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdctc-call-number',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdctc_border_radius_comm',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdctc_common_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//icon heading
		$this->add_control(
			'bwdctc_icon_heading',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon gap
		$this->add_responsive_control(
			'bwdctc_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdctc-call-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon gap
		$this->add_responsive_control(
			'bwdctc_icon_size_gap',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdctc-call-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon color
		$this->add_control(
			'bwdctc_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-icon' => 'color: {{VALUE}}',
				],
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//icon hover color
		$this->add_control(
			'bwdctc_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number:hover .bwdctc-call-icon' => 'color: {{VALUE}}',
				],
				'condition' =>[
					'bwdctc_cont_icon_switcher' => 'yes',
				],
			]
		);

		//number heading
		$this->add_control(
			'bwdctc_number_heading',
			[
				'label' => esc_html__( 'Number Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		//number text color
		$this->add_control(
			'bwdctc_number_color',
			[
				'label' => esc_html__( 'Number Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-num' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);

		//number text hover color
		$this->add_control(
			'bwdctc_numbtext_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdctc-call-number:hover .bwdctc-call-num' => 'color: {{VALUE}}',
				],
			]
		);

		//number text typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdctc_number_typography',
				'selector' => '{{WRAPPER}} .bwdctc-call-num',
			]
		);

		$this->end_controls_section();


	}

	protected function render(){
		$settings = $this->get_settings_for_display();

		$bwdctc_style_selection = $settings['bwdctc_select_style_selection'];

		if( $settings['bwdctc_overlay_switcher'] == 'yes' ) {
			$varOverlay = 'bwdctc-overlay-x';
		}else {
			$varOverlay = 'bwdctc-overlay-hide';
		}

		if( 'style1' == $bwdctc_style_selection ||  'style2' == $bwdctc_style_selection) {
		if( 'style1' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_1 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_attr( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_attr( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
								<?php if( $settings['bwdctc_img_switcher'] ){ ?>
									<div class="bwdctc-agent-img">
										<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
									</div>
								<?php }?>
								<?php if( $settings['bwdctc_title_switcher'] ){ ?>
									<div class="bwdctc-agent-title"><?php echo esc_html($settings['bwdctc_title']); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
									<div class="bwdctc-agent-subtitle"><?php echo esc_html($settings['bwdctc_sub_title']); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
									<div class="bwdctc-agent-desc"><?php echo esc_html($settings['bwdctc_description']); ?></div>
								<?php }?>
								<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
									<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
								<?php }?>
								<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html($settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_attr( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html($settings['bwdctc_contact_link'] ); ?>">
									<?php echo esc_html($settings['bwdctc_contact_phone']); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else if( 'style2' === $bwdctc_style_selection ) { ?>
			<div class="bwdctc-callbutton_2 bwdctc-common-class">
				<div class="bwdctc-call-button-wrap bwdctc-call-button-position">
					<div class="bwdctc-call-button">
						<span class="bwdctc_show-bttn"><i class="<?php echo esc_attr( $settings['bwdctc_call_show_Icon']['value'] ); ?>"></i></span>
						<span class="bwdctc_close-bttn"><i class="<?php echo esc_attr( $settings['bwdctc_call_close_Icon']['value'] ); ?>"></i></span>
					</div>
					<div class="bwdctc-content-box">
						<div class="bwdctc-overlay <?php echo esc_attr( $varOverlay ); ?>"></div>
						<div class="bwdctc-agent-box">
							<div class="bwdctc-agent-info">
									<?php if( $settings['bwdctc_img_switcher'] ){ ?>
										<div class="bwdctc-agent-img">
											<a href="<?php echo esc_url( $settings['bwdctc_image_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['bwdctc_call_image']['url'] ); ?>"></a>
										</div>
									<?php }?>
									<?php if( $settings['bwdctc_title_switcher'] ){ ?>
										<div class="bwdctc-agent-title"><?php echo esc_html( $settings['bwdctc_title']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_sub_title_switcher'] ){ ?>
										<div class="bwdctc-agent-subtitle"><?php echo esc_html( $settings['bwdctc_sub_title'] ); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_desce_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo esc_html($settings['bwdctc_description']); ?></div>
									<?php }?>
									<?php if( $settings['bwdctc_allow_shortcode_switcher'] ){ ?>
										<div class="bwdctc-agent-desc"><?php echo do_shortcode($settings['bwdctc_shortcode']); ?></div>
									<?php }?>
									<div class="bwdctc-call-number">
									<?php if( $settings['bwdctc_cont_icon_switcher'] ){ ?>
										<a class="bwdctc-call-icon" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html($settings['bwdctc_contact_link'] ); ?>"><i class="<?php echo esc_attr( $settings['bwdctc_call_cont_Icon']['value'] ); ?>"></i></a>
									<?php }?>
										<a class="bwdctc-call-num" target="_blank" href="<?php echo esc_url( $settings['bwdctc_contact_type'] ); ?><?php echo esc_html($settings['bwdctc_contact_link']); ?>">
									<?php echo esc_html($settings['bwdctc_contact_phone'] ); ?></a>
								</div>
								</div>
							</div>
						</div>
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
