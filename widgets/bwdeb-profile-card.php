<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDPCProfileCard extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbpc-profile-card';
	}

	public function get_title() {
		return esc_html__( 'Profile Card', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'profile-card bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'profile', 'card', 'profile card' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdpc_profile_card_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdpc_profile_card_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/profile-card/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_card_column_option',
			[
				'label' => esc_html__( 'Choose Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'column3',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'column1' => esc_html__( '1 Column', 'bwd-elementor-addons' ),
					'column2' => esc_html__( '2 Column', 'bwd-elementor-addons' ),
					'column3'  => esc_html__( '3 Column', 'bwd-elementor-addons' ),
					'column4' => esc_html__( '4 Column', 'bwd-elementor-addons' ),
					'column5' => esc_html__( '5 Column', 'bwd-elementor-addons' ),
					'column6' => esc_html__( '6 Column', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'bwdpc-grid%s-'
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_card_column_gap',
			[
				'label' => esc_html__( 'Column Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 15,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpc_gapc' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpc_gapr' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control (
			'bwdpc_profile_row_gap',
			[
				'label' => esc_html__( 'Row Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
                'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item,
                    {{WRAPPER}} .bwdpc-profile-card-wrapper' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_card_align',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdpc-profile-card-item,
                    {{WRAPPER}} .bwdpc-profile-card-content-area,
                    {{WRAPPER}} .bwdpc-profile-card-top-content,
                    {{WRAPPER}} .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-content-area' => 'text-align: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
        $this->add_control(
			'bwdpc_profile_show_title',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdpc_profile_show_username',
			[
				'label' => esc_html__( 'Show Username', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdpc_profile_show_location',
			[
				'label' => esc_html__( 'Show Location', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdpc_profile_show_status',
			[
				'label' => esc_html__( 'Show Status', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdpc_profile_show_button',
			[
				'label' => esc_html__( 'Show Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdpc_profile_show_social',
			[
				'label' => esc_html__( 'Show Social', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile-card_content_style',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        $repeater = new \Elementor\Repeater();

        // Content
        $repeater->add_control(
			'bwdpc_profile_card_image',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
        $repeater->add_control(
			'bwdpc_profile_card_title', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'John Doe' , 'bwd-elementor-addons' ),
				'label_block' => true,
                'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater->add_control(
			'bwdpc_profile_card_username', [
				'label' => esc_html__( 'Username', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '@JohnDoe', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_location_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-map-marker-alt',
					'library' => 'fa-solid',
				],
			]
		);
        $repeater->add_control(
			'bwdpc_profile_location_title', [
				'label' => esc_html__( 'Location Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '6845 Fieldcrest Road Riverhead, NY 37906', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_one_number', [
				'label' => esc_html__( 'Status One Number', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '235', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_one_name', [
				'label' => esc_html__( 'Status One Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Posts', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_two_number', [
				'label' => esc_html__( 'Status Two Number', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '452', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_two_name', [
				'label' => esc_html__( 'Status Two Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Followers', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_three_number', [
				'label' => esc_html__( 'Status Three Number', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '798', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_three_name', [
				'label' => esc_html__( 'Status Three Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Following', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_four_number', [
				'label' => esc_html__( 'Status Four Number', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( '85', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_stat_four_name', [
				'label' => esc_html__( 'Status 4 Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Works', 'bwd-elementor-addons' ),
			]
		);
        $repeater->add_control(
			'bwdpc_profile_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Follow', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type button text here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdpc_profile_btn_link',
			[
				'label' => esc_html__( 'Btn Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'label_block' => true,
                'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
        
        $this->add_control(
			'bwdpc_profile_card_repeater_list',
			[
				'label' => esc_html__( 'Content', 'bwdas_awesome_step' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					
					[
						'bwdpc_profile_card_title' => esc_html__( 'John Doe', 'bwd-elementor-addons' ),
					],
					[
						'bwdpc_profile_card_title' => esc_html__( 'John Doe', 'bwd-elementor-addons' ),
					],
                    [
						'bwdpc_profile_card_title' => esc_html__( 'John Doe', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdpc_profile_card_title }}}',
			]
		);
        
        // Icon
        $repeater_icon = new \Elementor\Repeater();

		$repeater_icon->add_control(
			'bwdpc_profile_icon_title', [
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Icon' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater_icon->add_control(
			'bwdpc_profile_box_icon',
			[
				'label' => esc_html__( 'Social Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon svg:hover' => 'fill: {{VALUE}}',
				],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon' => 'background-color: {{VALUE}}',
				],
				// 'condition' => [
				// 	'bwdpc_profile_card_style!' => ['style8','style11','style20'],
				// ],
			]
		);
        $repeater_icon->add_control(
			'bwdpc_profile_social_icon_hover_bg_color',
			[
				'label' => esc_html__( 'Background Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon:hover,
                    {{WRAPPER}} {{CURRENT_ITEM}}.bwdpc-socialIcon:hover::before' => 'background-color: {{VALUE}}',
				],
				// 'condition' => [
				// 	'bwdpc_profile_card_style!' => ['style8','style11'],
				// ],
			]
		);
		$repeater_icon->add_control(
			'bwdpc_profile_icon_link',
			[
				'label' => esc_html__( 'Icon Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', 
				'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
        $this->add_control(
			'bwdpc_profile_box_social_list',
			[
				'label' => esc_html__( 'Social Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater_icon->get_controls(),
				
				'default' => [
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-twitter',
							'library' => 'solid',
						],
					],
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
					[
						'bwdpc_profile_box_icon' => [
							'value' => 'fab fa-dribbble',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdpc_profile_icon_title }}}',
			]
		);

        $this->end_controls_section();

        // Style tab

		$this->start_controls_section(
			'bwdpc_profile_img_style',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_img_bg_color',
			[
				'label' => esc_html__( 'Img Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item::before,
                    {{WRAPPER}} .bwdpc-profile-card-img::before' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style15','style16','style19','style20','style21'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpc_profile_img_box_shadow',
				'label' => esc_html__( 'Img Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-img',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style3','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style20','style21',],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc_profile_img_border',
				'label' => esc_html__( 'Img Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-img,
                {{WRAPPER}} .bwdpc-profile-wrapper-img',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style5','style6','style9','style11','style12','style14','style15','style17','style18','style19','style21',],
				],
			]
		);
        $this->add_responsive_control (
			'bwdpc_profile_img_width',
			[
				'label' => esc_html__( 'Image Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-img,
                    {{WRAPPER}} .bwdpc-profile-wrapper-img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_title_style',
			[
				'label' => esc_html__( 'Name Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_title_box_bg_color',
			[
				'label' => esc_html__( 'Title Box Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-name-info,
                    {{WRAPPER}} .bwdpc-profile-card-name-info:before,
                    {{WRAPPER}} .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-status-area,
                    {{WRAPPER}} .bwdpc-profile-content-area' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style16','style17','style19','style20',],
				],
			]
		);
        $this->add_control(
			'bwdpc_profile_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-name' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_title_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-name',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_username_style',
			[
				'label' => esc_html__( 'Username Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_username_color',
			[
				'label' => esc_html__( 'Username Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-username' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_username_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-username',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_locatione_style',
			[
				'label' => esc_html__( 'Location Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_location_title_color',
			[
				'label' => esc_html__( 'Location Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-adress' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_location_title_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-adress',
			]
		);
        $this->add_control(
			'bwdpc_profile_location_icon_color',
			[
				'label' => esc_html__( 'Location Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-adress-title i' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdpc-profile-adress-title svg' => 'fill: {{VALUE}}',
				],
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_location_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-adress-title i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpc-profile-adress-title svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_status_style',
			[
				'label' => esc_html__( 'Status Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'bwdpc_profile_status_bg_color',
			[
				'label' => esc_html__( 'Status Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-state-area,
                    {{WRAPPER}} .bwdpc-profile-card-status' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style5','style6','style7','style8','style9','style10','style13','style14','style15','style16','style17','style18','style19','style20','style21',],
				],
			]
		);
        $this->add_control(
			'bwdpc_profile_status_color',
			[
				'label' => esc_html__( 'Status Number Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-stat' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_status_number_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-stat',
			]
		);
        $this->add_control(
			'bwdpc_profile_status_name_color',
			[
				'label' => esc_html__( 'Status Name Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-label' => 'Color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_status_name_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-label',
			]
		);
        $this->end_controls_section();

        // Social Icon
        $this->start_controls_section(
			'bwdpc_profile_social_icon_section',
			[
				'label' => esc_html__( 'Social Icon Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->start_controls_tabs(
			'bwdpc_profile_social_icon_style_tabs'
		);

		$this->start_controls_tab(
			'bwdpc_profile_social_icon_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_responsive_control(
			'bwdpc_profile_social_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-share-link a' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdpc-profile-card-share-link svg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdpc_profile_social_icon-round_size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-share-link a' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc-profile-social-icon-border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-share-link a',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdpc_profile_social_icon_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-share-link a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();

        $this->start_controls_tab(
			'bwdpc_profile_social_icon_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc_profile_social_icon_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-share-link a:hover',
                // 'condition' => [
				// 	'bwdpc_profile_card_style!' => ['style2','style3','style4','style5','style6','style7','style9','style10','style12','style13','style14','style15','style16','style17','style18','style19','style21'],
				// ],
			]
		);
		$this->add_responsive_control(
			'bwdpc_profile_social_icon_hover_border_radius',
			[
				'label' => esc_html__( 'Icon Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-share-link a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();

        // button
        $this->start_controls_section(
			'bwdpc_profile_button_section',
			[
				'label' => esc_html__( 'Button Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->start_controls_tabs(
			'bwdpc_profile_button_style_tabs'
		);

		$this->start_controls_tab(
			'bwdpc_profile_button_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpc_profile_card_button_typography',
				'selector' => '{{WRAPPER}} .bwdpc-profile-btn',
			]
		);

        $this->add_control(
			'bwdpc_profile_card_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdpc_profile_card_button_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'background-color: {{VALUE}}',
				],
				
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc-profile-btn-border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-btn',
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style6','style7','style8','style10','style11','style13','style14','style16','style17','style18','style19','style21'],
				],
			]
		);

        $this->add_responsive_control(
			'bwdpc_profile_card_button_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdpc_profile_card_button_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

        $this->start_controls_tab(
			'bwdpc_profile_button_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

        $this->add_control(
			'bwdpc_profile_button_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'bwdpc_profile_button_hover_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-btn:hover,
                    {{WRAPPER}} .bwdpc-profile-btn:hover:before,
                    {{WRAPPER}} .bwdpc-profile-btn:hover:after' => 'background-color: {{VALUE}}',
				],
				
			]
		);


		$this->end_controls_tab();
        
        $this->end_controls_section();

        $this->start_controls_section(
			'bwdpc_profile_box_section',
			[
				'label' => esc_html__( 'Profile Box Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdpc_profile_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-item',
			]
		);
        $this->add_control(
			'bwdpc_profile_box_bg_color',
			[
				'label' => esc_html__( 'Box Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item,
                    {{WRAPPER}} .bwdpc-profile-card-10-area .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-card-14-area .bwdpc-profile-content-item,
                    {{WRAPPER}} .bwdpc-profile-card-20-area .bwdpc-profile-front-card .bwdpc-profile-content-area' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'bwdpc_profile_box_top_bg_color',
			[
				'label' => esc_html__( 'Top Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item:before,
                    {{WRAPPER}} .bwdpc-profile-card-9-area .bwdpc-profile-card-top-content,
                    {{WRAPPER}} .bwdpc-profile-card-9-area .bwdpc-profile-card-name-info' => 'background-color: {{VALUE}}',
				],
                'condition' => [
					'bwdpc_profile_card_style!' => ['style1','style2','style3','style4','style5','style6','style8','style10','style11','style12','style14','style15','style16','style17','style18','style19','style20','style21'],
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdpc_profile_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdpc-profile-card-item',
			]
		);
        $this->add_responsive_control(
			'bwdpc_profile_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'bwdpc_profile_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdpc-profile-card-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
        

        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $bwdpc_title_show = $settings['bwdpc_profile_show_title'];
        $bwdpc_username_show = $settings['bwdpc_profile_show_username'];
        $bwdpc_location_show = $settings['bwdpc_profile_show_location'];
        $bwdpc_status_show = $settings['bwdpc_profile_show_status'];
        $bwdpc_button_show = $settings['bwdpc_profile_show_button'];
        $bwdpc_social_show = $settings['bwdpc_profile_show_social'];
        $bwdpc_column_gap = $settings['bwdpc_profile_card_column_gap'];

        if ('style1' == $settings['bwdpc_profile_card_style'] || 'style2' == $settings['bwdpc_profile_card_style']) { 
        if ('style1' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-1-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-card-name-info">
                                            <?php if( $bwdpc_title_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-name">
                                                <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_username_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-username">
                                                <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdpc-profile-card-bio">
                                            <?php if( $bwdpc_location_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-adress">
                                                <div class="bwdpc-profile-adress-title">
													<i class="<?php echo esc_attr($item['bwdpc_profile_location_icon']); ?>"></i>
                                                    <?php //\Elementor\Icons_Manager::render_icon( esc_attr($item['bwdpc_profile_location_icon']), [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_status_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-status">
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                    </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_button_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-btn">
                                            <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
												?>
												<a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
													href="<?php echo esc_url( $icon_item['bwdpc_profile_icon_link']['url'] ); ?>">
													<?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</a>
												<?php 
													}
                                            } ?>
                                        </div><?php } ?>
                                    </div>
                                </div>
                                <?php
                                }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
        }elseif ('style2' === $settings['bwdpc_profile_card_style']) { 
            ?>
                <div class="bwdpc-profile-card-2-area ">
                    <div class="container-fluid">
                        <div class="row bwdpc_gapr">
                            <?php   
                                if( $settings['bwdpc_profile_card_repeater_list'] ) {
                                    foreach( $settings['bwdpc_profile_card_repeater_list'] as $item ) { ?>
                                <div class="column_number col-lg-4 col-md-6 col-sm-12 bwdpc_gapc">
                                    <div class="bwdpc-profile-card-item">
                                        <div class="bwdpc-profile-card-img">
                                            <img src="<?php echo esc_url($item['bwdpc_profile_card_image']['url']); ?>" alt="">
                                        </div>
                                        <div class="bwdpc-profile-card-name-info">
                                            <?php if( $bwdpc_title_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-name">
                                                <?php echo esc_html($item['bwdpc_profile_card_title']); ?>
                                            </div><?php } ?>
                                            <?php if( $bwdpc_username_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-username">
                                                <?php echo esc_html($item['bwdpc_profile_card_username']); ?>
                                            </div><?php } ?>
                                        </div>
                                        <div class="bwdpc-profile-card-bio">
                                            <?php if( $bwdpc_location_show === 'yes' ) {?>
                                            <div class="bwdpc-profile-card-adress">
                                                <div class="bwdpc-profile-adress-title">
                                                    <?php \Elementor\Icons_Manager::render_icon( esc_attr($item['bwdpc_profile_location_icon']), [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <?php echo esc_html($item['bwdpc_profile_location_title']); ?> 
                                            </div><?php } ?>
                                        </div>
                                        <?php if( $bwdpc_status_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-status">
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_number']); ?>
                                                    </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_one_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_two_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_three_name']); ?>
                                                </div>
                                            </div>
                                            <div class="bwdpc-profile-state-area">
                                                <div class="bwdpc-profile-stat">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_number']); ?>
                                                </div>
                                                <div class="bwdpc-profile-label">
                                                    <?php echo esc_html($item['bwdpc_profile_stat_four_name']); ?>
                                                </div>
                                            </div>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_button_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-btn">
                                            <a href="<?php echo esc_url($item['bwdpc_profile_btn_link']['url']); ?>" class="bwdpc-profile-btn"><?php echo esc_html($item['bwdpc_profile_btn_text']); ?></a>
                                        </div><?php } ?>
                                        <?php if( $bwdpc_social_show === 'yes' ) {?>
                                        <div class="bwdpc-profile-card-share-link">
                                            <?php
                                                if( $settings['bwdpc_profile_box_social_list'] ) {
                                                foreach( $settings['bwdpc_profile_box_social_list'] as $icon_item ) { 
												?>
												<a class="bwdpc-socialIcon elementor-repeater-item-<?php echo esc_attr( $icon_item['_id'] ); ?>" 
													href="<?php echo esc_url( $icon_item['bwdpc_profile_icon_link']['url'] ); ?>">
													<?php \Elementor\Icons_Manager::render_icon( $icon_item['bwdpc_profile_box_icon'], [ 'aria-hidden' => 'true' ] ); ?>
												</a>
												<?php 
													}
                                            } ?>
                                        </div><?php } ?>
                                    </div>
                                </div>
                                <?php
                                }
                                }
                            ?>
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