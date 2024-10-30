<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDCSContentSwitcher extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdcs-content-switcher';
	}

	public function get_title() {
		return esc_html__( 'BWD Content Switcher', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'content-switcher-icon bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'content', 'switcher', 'content switcher', 'content-switcher' ];
	}

	public function get_script_depends() {
		return [ 'bwdeb_general_category' ];
	}

    public function select_elementor_page( $type ) {
		$args  = [
			'bwdcs_tax_query'      => [
				[
					'taxonomy' => 'elementor_library_type',
					'field'    => 'slug',
					'terms'    => $type,
				],
			],
			'post_type'      => 'elementor_library',
			'posts_per_page' => -1,
		];
		$query = new \WP_Query( $args );
		$posts = $query->posts;
		foreach ( $posts as $post ) {
			$items[ $post->ID ] = $post->post_title;
		}
		if ( empty( $items ) ) {
			$items = [];
		}
		return $items;
	}
	protected function register_controls() {

		$this->start_controls_section(
			'bwdcs_content_switcher_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdcs_content_switcher_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style 2 (PRO)', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/content-switcher/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdcs_content_switcher_column_option',
			[
				'label' => esc_html__( 'Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'12'  => esc_html__( '1', 'bwd-elementor-addons' ),
					'6' => esc_html__( '2', 'bwd-elementor-addons' ),
					'4' => esc_html__( '3', 'bwd-elementor-addons' ),
					'3' => esc_html__( '4', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdcs_content_switcher_column_gap',
			[
				'label' => esc_html__( 'Columns Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'  => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'gx-0' => esc_html__( 'No Gap', 'bwd-elementor-addons' ),
					'gx-1' => esc_html__( 'Narrrow', 'bwd-elementor-addons' ),
					'gx-2' => esc_html__( 'Extended', 'bwd-elementor-addons' ),
					'gx-3' => esc_html__( 'Wide', 'bwd-elementor-addons' ),
					'gx-4' => esc_html__( 'Wider', 'bwd-elementor-addons' ),
					'gx-5' => esc_html__( 'Extra Wider', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_content_switcher_row_gap',
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
					'{{WRAPPER}} .bwdcs-switcher-content-box' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

        // Switcher Tab
        $this->start_controls_section(
			'bwdcs_switcher_tab_style',
		    [
		        'label' => esc_html__('Switcher Tab','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

        $this->add_control(
			'bwdcs_switcher_tab_btn_style',
			[
				'label' => esc_html__( 'Switcher Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '12',
				'options' => [
					'1'  => esc_html__('Style 1', 'bwd-elementor-addons' ),
					'2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'3pro' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'4pro' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'5pro' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'6pro' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'7pro' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'8pro' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'9pro' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'10pro' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'11pro' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'12pro' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'13pro' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
					'14pro' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
					'15pro' => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/content-switcher/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

        $this->add_control(
			'bwdcs_switcher_primary_tab', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Primary', 'bwd-elementor-addons' ),
			]
		);

        $this->add_control(
			'bwdcs_switcher_secondary_tab', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Secondary', 'bwd-elementor-addons' ),
			]
		);

        $this->end_controls_section();

        // Switcher Primary Content
        $this->start_controls_section(
			'bwdcs_switcher_primary_content_style',
		    [
		        'label' => esc_html__('Primary Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        // Control add start
		$this->add_control(
			'bwdcs_primary_content_type',
			[
				'label'   => __( 'Type', 'bwd-elementor-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'bwdcs_switcher_primary_repeater_list',
				'options' => [
					'bwdcs_switcher_primary_repeater_list' => esc_html__( 'Plain/ HTML Text', 'bwd-elementor-addons' ),
					'bwdcs_saved_primary_section' => esc_html__( 'Saved Section', 'bwd-elementor-addons' ),
				],
			]
		);
		$saved_primary_sections = ['0' => esc_html__( 'Choose Section', 'bwd-elementor-addons' )];
		$saved_primary_sections = $saved_primary_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdcs_primary_saved_section',
			[
				'label'     => __( 'Sections', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_primary_sections,
				'default'   => '0',
				'condition' => [
					'bwdcs_primary_content_type' => 'bwdcs_saved_primary_section',
				],
			]
		);

		// Control add end

       
        $repeater_primary = new \Elementor\Repeater();

		$repeater_primary->add_control(
			'bwdcs_switcher_media_type',
			[
				'label' => esc_html__( 'Media Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'bwdcs_switcher_icon' => [
						'title' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'icon' => 'eicon-apps',
					],
					'bwdcs_switcher_image' => [
						'title' => esc_html__( 'Image', 'bwd-elementor-addons' ),
						'icon' => 'eicon-image-hotspot',
					],
				],
				'default' => 'bwdcs_switcher_image',
			]
		);

		$repeater_primary->add_control(
			'bwdcs_switcher_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-tv',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdcs_switcher_media_type' => 'bwdcs_switcher_icon'
				]
			]
		);
        $repeater_primary->add_control(
			'bwdcs_switcher_image',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
                    'active' => true,
                ],
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'/assets/public/img/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdcs_switcher_media_type' => 'bwdcs_switcher_image'
				]
			]
		);
        $repeater_primary->add_control(
			'bwdcs_switcher_content_title', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WILLIAMSON' , 'bwd-elementor-addons' ),
				'label_block' => true,
                'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater_primary->add_control(
			'bwdcs_switcher_content_desc', [
                'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Web Developer', 'bwd-elementor-addons' ),
			]
		);
        $this->add_control(
			'bwdcs_switcher_primary_repeater_list',
			[
				'label' => esc_html__( 'Primary Content', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater_primary->get_controls(),
				'default' => [
					
					[
						'bwdcs_switcher_image'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdcs_switcher_icon' => [
							'value' => 'fas fa-tv',
							'library' => 'fa-solid',
						],
						'bwdcs_switcher_content_title' => esc_html__( 'WILLIAMSON', 'bwd-elementor-addons' ),

						'bwdcs_switcher_content_desc' => esc_html__( 'Web Developer', 'bwd-elementor-addons' ),
					],
					[
						'bwdcs_switcher_image'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdcs_switcher_icon' => [
							'value' => 'fab fa-codepen',
							'library' => 'fa-solid',
						],
						'bwdcs_switcher_content_title' => esc_html__( 'John Doe', 'bwd-elementor-addons' ),

                        'bwdcs_switcher_content_desc' => esc_html__( 'Front End Developer', 'bwd-elementor-addons' ),
					],
                    [
						'bwdcs_switcher_image'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdcs_switcher_icon' => [
							'value' => 'fas fa-swatchbook',
							'library' => 'fa-solid',
						],
						'bwdcs_switcher_content_title' => esc_html__( 'STEVE THOMAS', 'bwd-elementor-addons' ),

                        'bwdcs_switcher_content_desc' => esc_html__( 'Php Developer', 'bwd-elementor-addons' ),
					],
				],
				'condition' => [
					'bwdcs_primary_content_type' => 'bwdcs_switcher_primary_repeater_list',
				],
			
				'title_field' => '{{{ bwdcs_switcher_content_title }}}',
				
			]
		);
        $this->end_controls_section();

        // Switcher Secondary Content
        $this->start_controls_section(
			'bwdcs_switcher_secondary_content_style',
		    [
		        'label' => esc_html__('Secondary Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        // Control add start
		$this->add_control(
			'bwdcs_secondary_content_type',
			[
				'label'   => __( 'Type', 'bwd-elementor-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'bwdcs_switcher_secondary_repeater_list',
				'options' => [
					'bwdcs_switcher_secondary_repeater_list' => esc_html__( 'Plain/ HTML Text', 'bwd-elementor-addons' ),
					'saved_secondary_section' => esc_html__( 'Saved Section', 'bwd-elementor-addons' ),
				],
				
			]
		);
		$saved_secondary_sections = ['0' => esc_html__( 'Choose Section', 'bwd-elementor-addons' )];
		$saved_secondary_sections = $saved_secondary_sections + $this->select_elementor_page( 'section' );

		$this->add_control(
			'bwdcs_secondary_saved_section',
			[
				'label'     => __( 'Sections', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $saved_secondary_sections,
				'default'   => '0',
				'condition' => [
					'bwdcs_secondary_content_type' => 'saved_secondary_section',
				],
			]
		);

		// Control add end

       
        $repeater_secondary = new \Elementor\Repeater();

		$repeater_secondary->add_control(
			'bwdcs_switcher_secondary_media_type',
			[
				'label' => esc_html__( 'Media Type', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'bwdcs_switcher_secondary_icon' => [
						'title' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'icon' => 'eicon-apps',
					],
					'bwdcs_switcher_secondary_image' => [
						'title' => esc_html__( 'Image', 'bwd-elementor-addons' ),
						'icon' => 'eicon-image-hotspot',
					],
				],
				'default' => 'bwdcs_switcher_secondary_image',
			]
		);

		$repeater_secondary->add_control(
			'bwdcs_switcher_secondary_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-tv',
					'library' => 'fa-solid',
				],
				'condition' => [
					'bwdcs_switcher_secondary_media_type' => 'bwdcs_switcher_secondary_icon'
				]
			]
		);
        $repeater_secondary->add_control(
			'bwdcs_switcher_secondary_image',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
                    'active' => true,
                ],
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
				'condition' => [
					'bwdcs_switcher_secondary_media_type' => 'bwdcs_switcher_secondary_image'
				]
			]
		);
        $repeater_secondary->add_control(
			'bwdcs_switcher_secondary_title', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WILLIAMSON' , 'bwd-elementor-addons' ),
				'label_block' => true,
                'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater_secondary->add_control(
			'bwdcs_switcher_secondary_desc', [
                'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Web Developer', 'bwd-elementor-addons' ),
			]
		);
        $this->add_control(
			'bwdcs_switcher_secondary_repeater_list',
			[
				'label' => esc_html__( 'Secondary Content', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater_secondary->get_controls(),
				'default' => [
					
					[
						'bwdcs_switcher_secondary_image'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdcs_switcher_secondary_icon' => [
							'value' => 'fas fa-swatchbook',
							'library' => 'fa-solid',
						],
						'bwdcs_switcher_secondary_title' => esc_html__( 'WILLIAMSON', 'bwd-elementor-addons' ),

						'bwdcs_switcher_secondary_desc' => esc_html__( 'Web Developer', 'bwd-elementor-addons' ),
					],
					[
						'bwdcs_switcher_secondary_image'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdcs_switcher_secondary_icon' => [
							'value' => 'fas fa-tv',
							'library' => 'fa-solid',
						],
						'bwdcs_switcher_secondary_title' => esc_html__( 'John Doe', 'bwd-elementor-addons' ),

                        'bwdcs_switcher_secondary_desc' => esc_html__( 'Front End Developer', 'bwd-elementor-addons' ),
					],
                    [
						'bwdcs_switcher_secondary_image'=>[
							'url' => plugins_url('../assets/public/img/bwd-placeholder.jpg', __FILE__),
						],
						'bwdcs_switcher_secondary_icon' => [
							'value' => 'fab fa-codepen',
							'library' => 'fa-solid',
						],
						'bwdcs_switcher_secondary_title' => esc_html__( 'STEVE THOMAS', 'bwd-elementor-addons' ),

                        'bwdcs_switcher_secondary_desc' => esc_html__( 'Php Developer', 'bwd-elementor-addons' ),
					],
				],
				'condition' => [
					'bwdcs_secondary_content_type' => 'bwdcs_switcher_secondary_repeater_list',
				],
				'title_field' => '{{{ bwdcs_switcher_secondary_title }}}',
			]
		);
        $this->end_controls_section();

		// Switch bar Style
        $this->start_controls_section(
			'bwdcs_switch_bar_control_style',
		    [
		        'label' => esc_html__('Switch Bar','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		    ]
		);
		$this->add_control(
			'bwdcs_switch_bar_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
                'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-tab' => 'justify-content: {{VALUE}}',
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcs_switcher_bar_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcs-switcher-content-tab',
			]
		);
        $this->add_control(
			'bwdcs_switcher_bar_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-tab' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcs_switcher_bar_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcs-switcher-content-tab',
			]
		);
        $this->add_responsive_control(
			'bwdcs_switcher_bar_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-tab' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdcs_switcher_bar_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-tab' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

		// Switch title Style
        $this->start_controls_section(
			'bwdcs_switch_title_control_style',
		    [
		        'label' => esc_html__('Switch Title','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcs_switch_title_typography',
				'selector' => '{{WRAPPER}} .bwdcs-content-title',
			]
		);
		$this->start_controls_tabs(
			'bwdcs_switch_title_style_tabs'
		);

		$this->start_controls_tab(
			'bwdcs_switch_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcs_switch_normal_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-title' => 'Color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'bwdcs_switch_style_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcs_switch_active_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-title.active-title' => 'Color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();

		// Switcher Btn Style
        $this->start_controls_section(
			'bwdcs_switcher_btn_control_style',
		    [
		        'label' => esc_html__('Switcher Btn Control','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		    ]
		);

		$this->add_responsive_control (
			'bwdcs_switcher_btn_speach',
			[
				'label' => esc_html__( 'Switcher Btn Spacing', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-btn' => 'margin-inline: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->start_controls_tabs(
			'bwdcs_switcher_style_tabs'
		);

		$this->start_controls_tab(
			'bwdcs_switcher_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcs_switcher_btn_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-btn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_switcher_btn_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_switcher_btn_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcs_switcher_btn_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn',
			]
		);
		$this->add_responsive_control(
			'bwdcs_switcher_btn_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'bwdcs_switcher_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcs_switcher_btn_active_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-btn.active' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();

		// Switch Style
		$this->start_controls_section(
			'bwdcs_switch_control_style',
			[
				'label' => esc_html__('Switch Control','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'bwdcs_switch_style_tabs'
		);

		$this->start_controls_tab(
			'bwdcs_switch_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcs_switch_bg_color',
			[
				'label' => esc_html__( 'Switch Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-btn:before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_switch_size',
			[
				'label' => esc_html__( 'Switch Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn:before,
					{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn:after' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcs_switcher_tab_btn_style!' => ['4','5','10','11'],
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_switch_width',
			[
				'label' => esc_html__( 'Switch Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn:before' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcs_switcher_tab_btn_style!' => ['1','2','3','6','7', '8','9', '12','13', '14', '15'],
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_switch_height',
			[
				'label' => esc_html__( 'Switch Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn:before' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcs_switcher_tab_btn_style!' => ['1','2','3','6','7', '8','9', '12','13', '14', '15'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcs_switch_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn:before',
			]
		);
		$this->add_responsive_control(
			'bwdcs_switch_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'separator' => [ 'after' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-content-switcher.bwdcs-switcher-btn:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);         
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'bwdcs_switch_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcs_switch_active_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-btn.active::before' => 'background: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		// Content Style
		$this->start_controls_section(
			'bwdcs_switcher_content_title_style',
			[
				'label' => esc_html__('Content Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control (
			'bwdcs_switcher_img_size',
			[
				'label' => esc_html__( 'Image Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'separator' => [ 'after' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_switcher_icon_size',
			[
				'label' => esc_html__( 'Icon Font Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-box i,
					{{WRAPPER}} .bwdcs-switcher-content-box .bwdcs-switcher-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control (
			'bwdcs_icon_width_size',
			[
				'label' => esc_html__( 'Icon Bg Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-box .bwdcs-switcher-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcs_content_switcher_style!' => ['style1','style2','style3'],
				],
			]
		);
		$this->add_control(
			'bwdcs_switcher_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-box i,
					{{WRAPPER}} .bwdcs-switcher-content-box .bwdcs-switcher-icon' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcs_content_switcher_style!' => ['style1','style2','style3'],
				],
			]
		);
		$this->add_control(
			'bwdcs_switcher_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => [ 'after' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-box i,
					{{WRAPPER}} .bwdcs-switcher-content-box .bwdcs-switcher-icon' => 'Color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcs_switcher_content_bg_color',
			[
				'label' => esc_html__( 'Content Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdcs_content_switcher_style!' => ['style2','style4'],
				],
			]
		);
		$this->add_control(
			'bwdcs_switcher_title_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-name' => 'Color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcs_switcher_content_title_typography',
				'selector' => '{{WRAPPER}} .bwdcs-switcher-name',
			]
		);
		$this->add_control(
			'bwdcs_switcher_desc_color',
			[
				'label' => esc_html__( 'Desc Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator' => [ 'before' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-post' => 'Color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcs_switcher_content_desc_typography',
				'selector' => '{{WRAPPER}} .bwdcs-switcher-post',
			]
		);

		$this->end_controls_section();
		
        // Box Style
		$this->start_controls_section(
			'bwdcs_switcher_box_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcs_switcher_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcs-switcher-content-box',
			]
		);
        $this->add_control(
			'bwdcs_switcher_box_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-box' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcs_switcher_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcs-switcher-content-box',
			]
		);
        $this->add_responsive_control(
			'bwdcs_switcher_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-box,
					{{WRAPPER}} .bwdcs-switcher-content-box:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdcs_switcher_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcs-switcher-content-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
        
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $bwdcs_switcher_primary_tab = $settings['bwdcs_switcher_primary_tab'];
        $bwdcs_switcher_secondary_tab = $settings['bwdcs_switcher_secondary_tab'];
		$switcher_tab =  $settings['bwdcs_switcher_tab_btn_style'];
		$bwdcs_primary = $settings['bwdcs_switcher_primary_repeater_list'];
		$bwdcs_secondary = $settings['bwdcs_switcher_secondary_repeater_list'];
		$bwdcs_column_gap = $settings['bwdcs_content_switcher_column_gap'];


     	if ('style1' === $settings['bwdcs_content_switcher_style'] || 'style2' === $settings['bwdcs_content_switcher_style']) {
     	if ('style1' === $settings['bwdcs_content_switcher_style']) {
			?>
				<div class="bwdcs-content-switcher-1-area bwdcs-content-switcher-common">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
								<div class="bwdcs-switcher-content-tab text-center ">
									<div class="bwdcs-content-title">
										<?php echo esc_html( $bwdcs_switcher_primary_tab); ?>
									</div>
									<div class="bwdcs-content-switcher">
										<?php 
										require('switcher-styles/1.php');
										?>
									</div> 
									<div class="bwdcs-content-title">
										<?php echo esc_html( $bwdcs_switcher_secondary_tab); ?>
									</div>
								</div>
                            </div>
                            <div class="bwdcs-switcher-content-area">
                                <div class="col-lg-12">
                                    <div class="bwdcs-switcher-content-item row <?php echo esc_attr($bwdcs_column_gap); ?>">
										<?php if('bwdcs_saved_primary_section' === $settings['bwdcs_primary_content_type']){
											echo bwdeb_bwdcs_my_plugin()->frontend->get_builder_content_for_display( esc_html($settings['bwdcs_primary_saved_section']) ); 
										}elseif('bwdcs_switcher_primary_repeater_list' === $settings['bwdcs_primary_content_type']){ ?>
											<?php   
												if( $bwdcs_primary ) {
													foreach( $bwdcs_primary as $item ) { ?>
													<div class="col-xl-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-md-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?>  col-lg-4 col-sm-6">
														<div class="bwdcs-switcher-content-box">
															<?php
																if(!empty($item['bwdcs_switcher_icon']['value'])){
															?>		
																<i class="<?php echo esc_attr($item['bwdcs_switcher_icon']['value']);?>"></i>
															<?php 
																}elseif(!empty($item['bwdcs_switcher_image']['url'])){
															?>
															<div class="bwdcs-switcher-img">
																<img src="<?php echo esc_url($item['bwdcs_switcher_image']['url']); ?>" alt="">
															</div>
															<?php 	
																}
															?>
															<div class="bwdcs-switcher-content">
																<div class="bwdcs-switcher-name">
																	<?php echo esc_html($item['bwdcs_switcher_content_title']); ?>
																</div>
																<div class="bwdcs-switcher-post">
																	<?php echo esc_html($item['bwdcs_switcher_content_desc']); ?>
																</div>
															</div>
														</div>
													</div>
													<?php
												}
												}
											?>
										
										<?php } ?>
                                	</div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="bwdcs-switcher-content-wrraper row <?php echo esc_attr($bwdcs_column_gap); ?>">
										<?php if('saved_secondary_section' === $settings['bwdcs_secondary_content_type']){
											echo bwdeb_bwdcs_my_plugin()->frontend->get_builder_content_for_display( esc_html($settings['bwdcs_secondary_saved_section']) ); 
										}elseif('bwdcs_switcher_secondary_repeater_list' === $settings['bwdcs_secondary_content_type']){ ?>
											<?php   
												if( $bwdcs_secondary ) {
													foreach( $bwdcs_secondary as $item ) { ?>
													<div class="col-xl-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-md-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?>  col-lg-4 col-sm-6">
														<div class="bwdcs-switcher-content-box">
															<?php
																if(!empty($item['bwdcs_switcher_secondary_icon']['value'])){
															?>		
																<i class="<?php echo esc_attr($item['bwdcs_switcher_secondary_icon']['value']);?>"></i>
															<?php 
																}elseif(!empty($item['bwdcs_switcher_secondary_image']['url'])){
															?>
															<div class="bwdcs-switcher-img">
																<img src="<?php echo esc_url($item['bwdcs_switcher_secondary_image']['url']); ?>" alt="">
															</div>
															<?php 	
																}
															?>
															<div class="bwdcs-switcher-content">
																<div class="bwdcs-switcher-name">
																	<?php echo esc_html($item['bwdcs_switcher_secondary_title']); ?>
																</div>
																<div class="bwdcs-switcher-post">
																	<?php echo esc_html($item['bwdcs_switcher_secondary_desc']); ?>
																</div>
															</div>
														</div>
													</div>
													<?php
												}
												}
											?>
										<?php } ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php
		}elseif ('style2' === $settings['bwdcs_content_switcher_style']) {
			?>
				<div class="bwdcs-content-switcher-2-area bwdcs-content-switcher-common">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
								<div class="bwdcs-switcher-content-tab">
									<div class="bwdcs-content-title">
										<?php echo esc_html( $bwdcs_switcher_primary_tab); ?>
									</div>
									<div class="bwdcs-content-switcher">
										<?php 
										require('switcher-styles/'. $switcher_tab .'.php');
										?>
									</div> 
									<div class="bwdcs-content-title">
										<?php echo esc_html( $bwdcs_switcher_secondary_tab); ?>
									</div>
								</div>
                            </div>
                            <div class="bwdcs-switcher-content-area">
                                <div class="col-lg-12">
                                    <div class="bwdcs-switcher-content-item row <?php echo esc_attr($bwdcs_column_gap); ?>">
										<?php if('bwdcs_saved_primary_section' === $settings['bwdcs_primary_content_type']){
											echo bwdeb_bwdcs_my_plugin()->frontend->get_builder_content_for_display( esc_html($settings['bwdcs_primary_saved_section']) ); 
										}elseif('bwdcs_switcher_primary_repeater_list' === $settings['bwdcs_primary_content_type']){ ?>
											<?php   
												if( $bwdcs_primary ) {
													foreach( $bwdcs_primary as $item ) { ?>
													<div class="col-xl-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-md-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?>  col-lg-4 col-sm-6">
														<div class="bwdcs-switcher-content-box">
															<?php
																if(!empty($item['bwdcs_switcher_icon']['value'])){
															?>		
																<i class="<?php echo esc_attr($item['bwdcs_switcher_icon']['value']);?>"></i>
															<?php 
																}elseif(!empty($item['bwdcs_switcher_image']['url'])){
															?>
															<div class="bwdcs-switcher-img">
																<img src="<?php echo esc_url($item['bwdcs_switcher_image']['url']); ?>" alt="">
															</div>
															<?php 	
																}
															?>
															<div class="bwdcs-switcher-content">
																<div class="bwdcs-switcher-name">
																	<?php echo esc_html($item['bwdcs_switcher_content_title']); ?>
																</div>
																<div class="bwdcs-switcher-post">
																	<?php echo esc_html($item['bwdcs_switcher_content_desc']); ?>
																</div>
															</div>
														</div>
													</div>
													<?php
													}
												}
											?>
										
										<?php } ?>
                                	</div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="bwdcs-switcher-content-wrraper row <?php echo esc_attr($bwdcs_column_gap); ?>">
										<?php if('saved_secondary_section' === $settings['bwdcs_secondary_content_type']){
											echo bwdeb_bwdcs_my_plugin()->frontend->get_builder_content_for_display( esc_html($settings['bwdcs_secondary_saved_section']) ); 
										}elseif('bwdcs_switcher_secondary_repeater_list' === $settings['bwdcs_secondary_content_type']){ ?>
											<?php   
												if( $bwdcs_secondary ) {
													foreach( $bwdcs_secondary as $item ) { ?>
													<div class="col-xl-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-md-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdcs_content_switcher_column_option']); ?>  col-lg-4 col-sm-6">
														<div class="bwdcs-switcher-content-box">
															<?php
																if(!empty($item['bwdcs_switcher_secondary_icon']['value'])){
															?>		
																<i class="<?php echo esc_attr($item['bwdcs_switcher_secondary_icon']['value']);?>"></i>
															<?php 
																}elseif(!empty($item['bwdcs_switcher_secondary_image']['url'])){
															?>
															<div class="bwdcs-switcher-img">
																<img src="<?php echo esc_url($item['bwdcs_switcher_secondary_image']['url']); ?>" alt="">
															</div>
															<?php 	
																}
															?>
															<div class="bwdcs-switcher-content">
																<div class="bwdcs-switcher-name">
																	<?php echo esc_html($item['bwdcs_switcher_secondary_title']); ?>
																</div>
																<div class="bwdcs-switcher-post">
																	<?php echo esc_html($item['bwdcs_switcher_secondary_desc']); ?>
																</div>
															</div>
														</div>
													</div>
													<?php
												}
												}
											?>
										<?php } ?> 
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