<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDMVMaskingVideoWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'MaskingVideo', 'bwd-masking-video' );
	}

	public function get_title() {
		return esc_html__( 'Masking Video', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle masking-video';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}


	protected function register_controls() {
		// video popup layout control section start
	   $this->start_controls_section(
		   'bwdmv_masking_video_presets_section',
		   [
			   'label' => esc_html__( 'Video Presets', 'bwd-elementor-addons' ),
			   'tab' => Controls_Manager::TAB_CONTENT,
		   ]
	   );
	   //source 
	   $this->add_control(
		   'bwdmv_masking_video_source',
		   [
			   'label' => esc_html__( 'Source', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SELECT,
			   'default' => 'youtube',
			   'options' => [
				   'youtube'  => esc_html__( 'YouTube', 'bwd-elementor-addons' ),
				   'vimeo'  => esc_html__( 'Vimeo', 'bwd-elementor-addons' ),
				   'self_hosted'  => esc_html__( 'Self Hosted', 'bwd-elementor-addons' )
			   ],
		   ]
	   );
	   //youtube link
	   $this->add_control(
		   'bwdmv_masking_video_youtube_video_link',
		   [
			   'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::TEXT,
			   'default' => esc_html__( 'https://www.youtube.com/watch?v=XHOmBV4js_E','bwd-elementor-addons' ),
			   'label_block' => true,
			   'dynamic' => [
				   'active' => true,
			   ],
			   'condition' => [
				   'bwdmv_masking_video_source' => 'youtube',
			   ]
		   ]
	   );
	   //vimeo link
	   $this->add_control(
		   'bwdmv_masking_video_vimeo_video_link',
		   [
			   'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::TEXT,
			   'default' => esc_html__( 'https://player.vimeo.com/video/740016989', 'bwd-elementor-addons' ),
			   'label_block' => true,
			   'dynamic' => [
				   'active' => true,
			   ],
			   'condition' => [
				   'bwdmv_masking_video_source' => 'vimeo',
			   ]
		   ]
	   );
	   //self hosted video 
	   $this->add_control(
		   'bwdmv_masking_video_self_hosted',
		   [
			   'label' => esc_html__( 'Choose Video', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::MEDIA,
			   'media_types' => ['video'],
			   'condition' => [
				   'bwdmv_masking_video_source' => 'self_hosted',
			   ]
		   ]
	   );
	   $this->end_controls_section();
	   //video option section
	   $this->start_controls_section(
		   'bwdmv_masking_video_option_section',
		   [
			   'label' => esc_html__( 'Video Options', 'bwd-elementor-addons' ),
			   'tab' => Controls_Manager::TAB_CONTENT,
		   ]
	   );
	   //autoplay
	   $this->add_control(
		   'bwdmv_masking_video_autoplay',
		   [
			   'label' => esc_html__( 'Autoplay', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
			   'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
			   'return_value' => 'yes',
			   'default' => 'no',
			   'condition' => [
				'bwdmv_masking_video_mute' => [ 'yes' ],
			],
		   ]
	   );
	   //mute
	   $this->add_control(
		   'bwdmv_masking_video_mute',
		   [
			   'label' => esc_html__( 'Mute', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
			   'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
			   'return_value' => 'yes',
			   'default' => 'no',
		   ]
	   );
	   //loop
	   $this->add_control(
		   'bwdmv_masking_video_loop',
		   [
			   'label' => esc_html__( 'Loop', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
			   'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
			   'return_value' => 'yes',
			   'default' => 'no',
		   ]
	   );
	   //Player Controls
	   $this->add_control(
		   'bwdmv_masking_video_player_controls',
		   [
			   'label' => esc_html__( 'Player Controls', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
			   'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
			   'return_value' => 'yes',
			   'default' => 'yes',
		   ]
	   );
	   //privacy mode
	   $this->add_control(
			'bwdmv_masking_video_privacy',
			[
				'label' => esc_html__( 'Privacy mode', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdmv_masking_video_source' => 'youtube',
				]
			]
		);
	   	//overlay 
	   $this->add_control(
		   'bwdmv_masking_video_overlay',
		   [
			   'label' => esc_html__( 'Overlay', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'yes', 'bwd-elementor-addons' ),
			   'label_off' => esc_html__( 'no', 'bwd-elementor-addons' ),
			   'return_value' => 'yes',
		   ]
	   );
	   	//lightbox 
	   $this->add_control(
		   'bwdmv_masking_video_lightbox',
		   [
			   'label' => esc_html__( 'Lightbox', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SWITCHER,
			   'label_on' => esc_html__( 'yes', 'bwd-elementor-addons' ),
			   'label_off' => esc_html__( 'no', 'bwd-elementor-addons' ),
			   'return_value' => 'yes',
			   'condition' => [
				'bwdmv_masking_video_overlay' => [ 'yes' ],
			],
		   ]
	   );
	   //self hosted video poster
	   $this->add_control(
		'bwdmv_masking_self_video_poster',
		[
			'label' => esc_html__( 'Poster', 'bwd-elementor-addons' ),
			'type' => \Elementor\Controls_Manager::MEDIA,
			'condition' => [
				'bwdmv_masking_video_source' => 'self_hosted',
			],
		]
	);
	   //video position
	   $this->add_responsive_control(
			'bwdmv_masking_video_position',
			[
				'label' => esc_html__( 'Video Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'c_c',
				'options' => [
					'c_c'  => esc_html__( 'Center Center', 'bwd-elementor-addons' ),
					'c_l'  => esc_html__( 'Center Left', 'bwd-elementor-addons' ),
					'c_r'  => esc_html__( 'Center Right', 'bwd-elementor-addons' ),
					't_c'  => esc_html__( 'Top Center', 'bwd-elementor-addons' ),
					't_l'  => esc_html__( 'Top Left', 'bwd-elementor-addons' ),
					't_r'  => esc_html__( 'Top Right', 'bwd-elementor-addons' ),
					'b_c'  => esc_html__( 'Bottom Center', 'bwd-elementor-addons' ),
					'b_l'  => esc_html__( 'Bottom Left', 'bwd-elementor-addons' ),
					'b_r'  => esc_html__( 'Bottom Right', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'separator' => 'before',
				'selectors' => [
                    '{{WRAPPER}} .mdp-videor-mask' => 'mask-position: {{value}}; 
					-webkit-mask-position: {{value}};',
                ]
			]
		);
	   //video scale
	   $this->add_control(
		'bwdmv_masking_video_scale',
		[
			'label' => esc_html__( 'Video Scale', 'bwd-elementor-addons' ),
			'type' => \Elementor\Controls_Manager::SLIDER,
			'size_units' => [ 'px'],
			'range' => [
				'px' => [
					'min' => 0.1,
					'max' => 5,
					'step' => 0.1,
				],
			],

			'selectors' => [
				'{{WRAPPER}} .bwdmv-video-mask-wrapper .bwdmv-mask-video iframe,
				{{WRAPPER}} .bwdmv-video-mask-wrapper .bwdmv-mask-video video' => 'transform: scale({{SIZE}});',
			],
		]
	);
	   $this->end_controls_section();
	   // clipping mask section
	   $this->start_controls_section(
		   'bwdmv_clipping_mask_section',
		   [
			   'label' => esc_html__( 'Clipping Mask', 'bwd-elementor-addons' ),
			   'tab' => Controls_Manager::TAB_CONTENT,
		   ]
	   );
	   	//mask styles
	   $this->add_control(
		   'bwdmv_masking_choose_mask_style',
		   [
			   'label' => esc_html__( 'Choose Mask', 'bwd-elementor-addons' ),
			   'type' => \Elementor\Controls_Manager::SELECT,
			   'default' => '1',
			   'options' => [
				   '1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
				   '2'  => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
				   '3'  => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
				   '4'  => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
				   '5'  => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
				   '6'  => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
				   '7'  => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
				   '8'  => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
				   '9'  => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
				   '10'  => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
				   '11'  => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
				   '12'  => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
				   '13'  => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
				   '14'  => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
				   '15'  => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons' ),
				   '16'  => esc_html__( 'Style 16 (PRO)', 'bwd-elementor-addons' ),
				   '17'  => esc_html__( 'Style 17 (PRO)', 'bwd-elementor-addons' ),
				   '18'  => esc_html__( 'Style 18 (PRO)', 'bwd-elementor-addons' ),
				   '19'  => esc_html__( 'Style 19 (PRO)', 'bwd-elementor-addons' ),
				   '20'  => esc_html__( 'Style 20 (PRO)', 'bwd-elementor-addons' ),
				   '21'  => esc_html__( 'Style 21 (PRO)', 'bwd-elementor-addons' ),
				   '22'  => esc_html__( 'Style 22 (PRO)', 'bwd-elementor-addons' ),
				   '23'  => esc_html__( 'Style 23 (PRO)', 'bwd-elementor-addons' ),
				   '24'  => esc_html__( 'Style 24 (PRO)', 'bwd-elementor-addons' ),
				   '25'  => esc_html__( 'Style 25 (PRO)', 'bwd-elementor-addons' ),
				   '26'  => esc_html__( 'Style 26 (PRO)', 'bwd-elementor-addons' ),
				   '27'  => esc_html__( 'Style 27 (PRO)', 'bwd-elementor-addons' ),
				   '28'  => esc_html__( 'Style 28 (PRO)', 'bwd-elementor-addons' ),
				   '29'  => esc_html__( 'Style 29 (PRO)', 'bwd-elementor-addons' ),
				   '30'  => esc_html__( 'Style 30 (PRO)', 'bwd-elementor-addons' ),
				   '31'  => esc_html__( 'Style 31 (PRO)', 'bwd-elementor-addons' ),
				   '32'  => esc_html__( 'Style 32 (PRO)', 'bwd-elementor-addons' ),
				   '33'  => esc_html__( 'Style 33 (PRO)', 'bwd-elementor-addons' ),
				   '34'  => esc_html__( 'Style 34 (PRO)', 'bwd-elementor-addons' ),
				   '35'  => esc_html__( 'Style 35 (PRO)', 'bwd-elementor-addons' ),
				   '36'  => esc_html__( 'Style 36 (PRO)', 'bwd-elementor-addons' ),
				   '37'  => esc_html__( 'Style 37 (PRO)', 'bwd-elementor-addons' ),
				   '38'  => esc_html__( 'Style 38 (PRO)', 'bwd-elementor-addons' ),
				   '39'  => esc_html__( 'Style 39 (PRO)', 'bwd-elementor-addons' ),
			   ],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/masking-video/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
				]
	   );
	   	//mask position
	   $this->add_responsive_control(
			'bwdmv_masking_mask_position',
			[
				'label' => esc_html__( 'Mask Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'center center',
				'options' => [
					'center center'  => esc_html__( 'Center Center', 'bwd-elementor-addons' ),
					'center left'  => esc_html__( 'Center Left', 'bwd-elementor-addons' ),
					'center right'  => esc_html__( 'Center Right', 'bwd-elementor-addons' ),
					'top center'  => esc_html__( 'Top Center', 'bwd-elementor-addons' ),
					'top left'  => esc_html__( 'Top Left', 'bwd-elementor-addons' ),
					'top right'  => esc_html__( 'Top Right', 'bwd-elementor-addons' ),
					'bottom center'  => esc_html__( 'Bottom Center', 'bwd-elementor-addons' ),
					'bottom left'  => esc_html__( 'Bottom Left', 'bwd-elementor-addons' ),
					'bottom right'  => esc_html__( 'Bottom Right', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-position: {{value}}; -webkit-mask-position: {{value}};',
				]
			]
		);
		//mask repeat
	   $this->add_responsive_control(
			'bwdmv_masking_mask_repeat',
			[
				'label' => esc_html__( 'Mask Repeat', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'no-repeat',
				'options' => [
					'no-repeat'  => esc_html__( 'No Repeat', 'bwd-elementor-addons' ),
					'repeat'  => esc_html__( 'Repeat', 'bwd-elementor-addons' ),
					'repeat-x'  => esc_html__( 'Repeat X', 'bwd-elementor-addons' ),
					'repeat-y'  => esc_html__( 'Repeat Y', 'bwd-elementor-addons' ),
				],
				'selectors' => [
                    '{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-repeat: {{value}}; -webkit-mask-repeat: {{value}};',
                ]
			]
		);
		//mask size
	   $this->add_responsive_control(
			'bwdmv_masking_mask_size',
			[
				'label' => esc_html__( 'Mask Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '90%',
				'options' => [
					'90%'  => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'cover'  => esc_html__( 'Cover', 'bwd-elementor-addons' ),
					'contain'  => esc_html__( 'Contain', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
                'selectors' => [
                    '{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-size: {{value}}; -webkit-mask-size: {{value}};',
                ]
			]
		);
		// Mask Custom Size 
        $this->add_responsive_control(
            'bwdmv_masking_mask_size_custom',
            [
                'label' => esc_html__( 'Custom Size', 'bwd-elementor-addons' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'vh' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 2000,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 150,
                ],
                'selectors' => [
                    '{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'mask-size: {{SIZE}}{{UNIT}}; -webkit-mask-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 'bwdmv_masking_mask_size' => 'custom' ]
            ]
        );
	   $this->end_controls_section();
	   //style video section
	   $this->start_controls_section(
		   'bwdmv_masking_video_style_section',
		   [
			   'label' => esc_html__( 'Video', 'bwd-elementor-addons' ),
			   'tab' => Controls_Manager::TAB_STYLE,
		   ]
	   );
	   //margin
	   $this->add_control(
			'bwdmv_masking_video_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
	   $this->add_control(
			'bwdmv_masking_video_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// width
		$this->add_control(
			'bwdmv_masking_video_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'vw'],
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
					'vw' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'separator'=>'before',
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// height
		$this->add_control(
			'bwdmv_masking_video_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'vh'],
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
					'vh' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'separator'=>'after',
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//background color
		$this->add_control(
			'bwdmv_masking_video_2bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdmv-mask-video' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdmv_masking_video_bg',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmv-mask-video',
			]
		);
	   $this->end_controls_section();
	   // style masking section
	   $this->start_controls_section(
			'bwdmv_masking_clipping_mask_style_section',
			[
				'label' => esc_html__( 'Clipping Mask', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//margin
	   $this->add_control(
			'bwdmv_masking_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//padding
	   $this->add_control(
			'bwdmv_masking_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		// style Overlay section
	   $this->start_controls_section(
			'bwdmv_masking_video_overlay_style_section',
			[
				'label' => esc_html__( 'Overlay', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'bwdmv_masking_overlay_tabs'
		);
		$this->start_controls_tab(
			'bwdmv_masking_video_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// overlay normal bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'overlay_normal_background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmv-video-mask-wrapper::before'
			]
		);
		// overlay normal opacity
		$this->add_control(
			'bwdmv_masking_overlay_opacity',
			[
				'label' => esc_html__( 'Opacity', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper::before' => 'opacity: {{SIZE}}%;',
				],
			]
		);
		// overlay transition 
		$this->add_control(
			'bwdmv_masking_overlay_transition',
			[
				'label' => esc_html__( 'Transition Duration', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step'=>0.1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper::before' => 'transition: {{SIZE}}s;',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdmv_masking_video_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// overlay hover bg
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'overlay_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdmv-video-mask-wrapper:hover::before'
			]
		);
		// overlay hover opacity
		$this->add_control(
			'bwdmv_masking_overlay_hover_opacity',
			[
				'label' => esc_html__( 'Opacity', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdmv-video-mask-wrapper:hover::before' => 'opacity: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();
   }

   protected function render() {
	   $settings = $this->get_settings_for_display();
	   $source = $settings['bwdmv_masking_video_source'];
	   $chosen_style= $settings['bwdmv_masking_choose_mask_style'];
	   $youtube_link = $settings['bwdmv_masking_video_youtube_video_link'];
	   $vimeo_link = $settings['bwdmv_masking_video_vimeo_video_link'];
	   $self_hosted = $settings['bwdmv_masking_video_self_hosted'];
	   $autoplay = $settings['bwdmv_masking_video_autoplay'];
	   $mute = $settings['bwdmv_masking_video_mute'];
	   $loop = $settings['bwdmv_masking_video_loop'];
	   $players_control = $settings['bwdmv_masking_video_player_controls'];
	   $privacy = $settings['bwdmv_masking_video_privacy'];
	   $overlay = $settings['bwdmv_masking_video_overlay'];
	   $lightbox=  $settings['bwdmv_masking_video_lightbox'];
	   $poster = $settings['bwdmv_masking_self_video_poster'];

	   if('yes' === $overlay){
		$v_wrapper_class = 'bwdmv-video-mask-wrapper bwdmv-overlay-active '; 
	   }else{
		$v_wrapper_class = 'bwdmv-video-mask-wrapper '; 
	   }
		 if($chosen_style == 1 || $chosen_style == 2){
	   // style render
	   if(!empty($chosen_style)){
		   ?>
		<div class="<?php echo esc_attr($v_wrapper_class);?> bwdmv-mask-<?php echo esc_attr($chosen_style);?>"
			data-youtube-url="<?php echo esc_attr($youtube_link);?>" 
			data-vimeo-url="<?php if(!empty($vimeo_link)){echo esc_attr($vimeo_link);}?>"
			data-self-url="<?php if(!empty($self_hosted)){echo esc_attr($self_hosted['url']);}?>"
			data-mute="<?php if(!empty($mute)){echo esc_attr($mute);}?>"
			data-loop="<?php if(!empty($loop)){echo esc_attr($loop);}?>"
			data-control="<?php if(!empty($players_control)){echo esc_attr($players_control);}?>"
			data-autoplay="<?php if(!empty($autoplay)){echo esc_attr($autoplay);}?>"
			data-privacy="<?php if(!empty($privacy)){echo esc_attr($privacy);}?>"
			data-lightbox="<?php if(!empty($lightbox)){echo esc_attr($lightbox);}?>"
			data-poster="<?php if(!empty($poster['url'])){echo esc_attr($poster['url']);}?>">
			<div class="bwdmv-mask-video">

			</div>
		</div>
		   <?php
	   }
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
   }
}
