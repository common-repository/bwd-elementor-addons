<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdiscrImageScroll extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdimagescroll';
	}

	public function get_title() {
		return esc_html__( 'Image Scroll', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-imagescroll bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'scroll', 'bwd', 'hover' ];
	}



	protected function register_controls() {

		$this->start_controls_section(
			'bwdiscr_image_scroll_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdiscr_image_scroll_style_layout',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/image-scroll" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdiscr_image_scroll_section',
			[
				'label' => esc_html__( 'Image Scroll', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		$this->add_control(
			'bwdiscr_image_scroll_option',
			[
				'label'   => esc_html__('Select Image Scroll', 'bwd-elementor-addons'),
				'type'    => Controls_Manager::SELECT,
				'default' => 'bottom-top',
				'options' => [
					'bottom-top'    => esc_html__('Bottom Top', 'bwd-elementor-addons'),
					'top-bottom'    => esc_html__('Top Bottom', 'bwd-elementor-addons'),
					'right-left'     => esc_html__('Right Left', 'bwd-elementor-addons'),
					'left-right'     => esc_html__('Left right', 'bwd-elementor-addons'),
				],
				'prefix_class' => 'bwdiscr-image-scroll-',
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => [ 'style7', 'style8','style9'],
				],
			]
		);
		//  image
		$this->add_control(
			'bwdiscr_scroll_image',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_monitor_device_image',
			[
				'label' => esc_html__( 'Monitor Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-2.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_mobile_device_image',
			[
				'label' => esc_html__( 'Mobile Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-3.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style4','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_tab_device_image',
			[
				'label' => esc_html__( 'Tab Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-5.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style5','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_scroll_laptop_device_image',
			[
				'label' => esc_html__( 'Laptop Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/scroll-img-4.png',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style6','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		
		
		$this->end_controls_section();

		// style tab
		$this->start_controls_section(
			'bwdiscr_image_scroll',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdiscr-scroll-img-area',
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style9','style10','style11',],
				],
			]
		);
		$this->add_responsive_control(
			'bwdiscr_image_scroll_width',
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
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-image-scroll-common,
					{{WRAPPER}} .bwdiscr-scroll-item,
					{{WRAPPER}} .bwdiscr-scroll-img-area,
					{{WRAPPER}} .bwdiscr-image-scroll-4-area .bwdiscr-scroll-item .bwdiscr-scroll-device-img,
					{{WRAPPER}} .bwdiscr-image-scroll-11-area .bwdiscr-scroll-img-area img,
					{{WRAPPER}} .bwdiscr-image-scroll-7-area .bwdiscr-scroll-img-area img,
					{{WRAPPER}} .bwdiscr-image-scroll-3-area .bwdiscr-scroll-device-img' => 'max-width: {{SIZE}}{{UNIT}};  width: {{SIZE}}{{UNIT}}; max-height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// $this->add_responsive_control(
		// 	'bwdiscr_image_scroll_height',
		// 	[
		// 		'label' => esc_html__( 'Image Height', 'bwd-elementor-addons' ),
		// 		'type' => \Elementor\Controls_Manager::SLIDER,
		// 		'size_units' => [ 'px', '%' ],
		// 		'range' => [
		// 			'px' => [
		// 				'min' => 0,
		// 				'max' => 1000,
		// 				'step' => 1,
		// 			],
		// 			'%' => [
		// 				'min' => 0,
		// 				'max' => 100,
		// 			],
		// 		],
		// 		'selectors' => [
		// 			'{{WRAPPER}} .bwdiscr-image-scroll-common,
		// 			{{WRAPPER}} .bwdiscr-scroll-item,
		// 			{{WRAPPER}} .bwdiscr-scroll-img-area,
		// 			{{WRAPPER}} .bwdiscr-image-scroll-6-area .bwdiscr-scroll-img-area img,
		// 			{{WRAPPER}} .bwdiscr-image-scroll-7-area .bwdiscr-scroll-img-area img' => 'max-height: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
		// 		],
		// 	]
		// );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdiscr-scroll-img-area',
			]
		);
		$this->add_control(
			'bwdiscr_image_scroll_bg_color',
			[
				'label' => esc_html__( 'Image Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-scroll-img-area::before' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style8','style9','style10','style11', 'style13', 'style14', 'style16', 'style17', 'style18', 'style19', 'style20'],
				],
			]
		);
		$this->add_control(
			'bwdiscr_image_scroll_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-scroll-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdiscr_image_scroll_style_layout!' => ['style1','style2','style3','style4','style8','style9','style10','style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdiscr_image_scroll_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdiscr-scroll-img-area,
					{{WRAPPER}} .bwdiscr-scroll-img-area img,
					{{WRAPPER}} .bwdiscr-image-scroll-8-area.bwdiscr-image-scroll-common' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
				
		$this->end_controls_section();
		
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
			$img_id = $settings['bwdiscr_scroll_image'];
		
		if ( ! empty( $settings['bwdiscr_scroll_image'] ) ) {
			$bwdiscr_scroll_image = $settings['bwdiscr_scroll_image']['url'];
		}


		if ( ! empty( $settings['bwdiscr_scroll_mobile_device_image'] ) ) {
			$bwdiscr_scroll_mobile_device_image = $settings['bwdiscr_scroll_mobile_device_image']['url'];
		}

		if ( ! empty( $settings['bwdiscr_scroll_tab_device_image'] ) ) {
			$bwdiscr_scroll_tab_device_image = $settings['bwdiscr_scroll_tab_device_image']['url'];
		}

		if ( ! empty( $settings['bwdiscr_scroll_laptop_device_image'] ) ) {
			$bwdiscr_scroll_laptop_device_image = $settings['bwdiscr_scroll_laptop_device_image']['url'];
		}		
		if ( ! empty( $settings['bwdiscr_scroll_monitor_device_image'] ) ) {
			$bwdiscr_scroll_monitor_device_image = $settings['bwdiscr_scroll_monitor_device_image']['url'];
		}		
		
		if ('style1' == $settings['bwdiscr_image_scroll_style_layout'] || 'style2' == $settings['bwdiscr_image_scroll_style_layout']) {
		if ('style1' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>
				<div class="bwdiscr-image-scroll-1-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_attr($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}elseif('style2' === $settings['bwdiscr_image_scroll_style_layout']) {
			?>	
				<div class="bwdiscr-image-scroll-2-area bwdiscr-image-scroll-common">
					<div class="bwdiscr-scroll-img-area  <?php echo esc_attr( $settings['bwdiscr_image_scroll_option'] ); ?>">
						<img src="<?php echo esc_attr($bwdiscr_scroll_image); ?>" alt="">
					</div>
				</div>
			<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}



