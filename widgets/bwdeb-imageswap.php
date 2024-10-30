<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdisimageSwap extends \Elementor\Widget_Base {


	public function get_name() {
		return 'BWDISImageSwap';
	}

	public function get_title() {
		return esc_html__( 'Image Swap', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-image-swap bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'swap', 'hover', 'effect', 'bwd' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdis_image_swap_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdis_image_swap_style_layout',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/image-swap/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdis_image_swap_section',
			[
				'label' => esc_html__( 'Image Swap', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
			
		);
		//  image
		$this->add_control(
			'bwdis_swap_fornt_image',
			[
				'label' => esc_html__( 'Front Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdis_swap_back_image',
			[
				'label' => esc_html__( 'Back Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdis_image_swap_link',
			[
				'label' => esc_html__( 'Image Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write image link here', 
				'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				
			]
		);
		$this->end_controls_section();

		// skill style tab
		$this->start_controls_section(
			'bwdis_image_swap',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'bwdis_image_swap_overly_show',
			[
				'label' => esc_html__( 'Show Overly', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdis_image_swap_bg_color',
			[
				'label' => esc_html__( 'Overly Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdis-swap-img-area::before' => 'background-color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdis_image_swap_overly_show' => 'yes',
				],
				
			]
		);
		$this->add_responsive_control(
			'bwdis_image_swap_area_size',
			[
				'label' => esc_html__( 'Image Area Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdis-swap-img-area' => 'max-width: {{SIZE}}{{UNIT}}; max-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdis_swap_image_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwdis-swap-img-area' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdis-swap-img-area',
			]
		);
		
		$this->end_controls_section();


		
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdis_swap_fornt_image = $settings['bwdis_swap_fornt_image']['url'];
		$bwdis_swap_back_image = $settings['bwdis_swap_back_image']['url'];
		$is_overlay_show = $settings['bwdis_image_swap_overly_show'];

		if($is_overlay_show === 'yes'){
			$overlay_show = 'bwdis-overly-active';
		}else{
			$overlay_show = '';
		}

		if ( ! empty( $settings['bwdis_image_swap_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdis_image_swap_link', $settings['bwdis_image_swap_link'] );
		}
		
		if ('style1' === $settings['bwdis_image_swap_style_layout'] || 'style2' == $settings['bwdis_image_swap_style_layout']) {
		if ('style1' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-1-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
						</div>
					</a>
				</div>
			<?php
		}elseif ('style2' === $settings['bwdis_image_swap_style_layout']) {
			?>	
				<div class="bwdis-image-swap-2-area">
					<a href="<?php echo  esc_url( $settings['bwdis_image_swap_link']['url'] );?>">
						<div class="bwdis-swap-img-area <?php echo esc_attr($overlay_show);?>">
							<img src="<?php echo esc_attr($bwdis_swap_fornt_image); ?>" alt="" class="bwdis-img-1">
							<img src="<?php echo esc_attr($bwdis_swap_back_image); ?>" alt="" class="bwdis-img-2">
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



