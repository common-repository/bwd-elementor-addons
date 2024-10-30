<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDBTTBackToTop extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDBackToTop', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Back To Top', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-v-align-top';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Back To Top Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbtt_style_selection',
			[
				'label' => esc_html__( 'Back To Top Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/back-to-top/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdbtt_back_to_top_btn_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-up',
					'library' => 'solid',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_text', [
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
				'default' => esc_html__( 'Top' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);

		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_x_position',
			[
				'label' => esc_html__( 'X Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -10000,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_Y_position',
			[
				'label' => esc_html__( 'Y Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -10000,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'bottom: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbtt_style_section',
			[
				'label' => esc_html__( 'Style Section', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'bwdbtt_style_tabs'
		);

		$this->start_controls_tab(
			'bwdbtt_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_box_width',
			[
				'label' => esc_html__( 'Box Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_box_height',
			[
				'label' => esc_html__( 'Box Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} #bwdbtt-scroll__up-7' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style i' => 'font-size: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-9 span, {{WRAPPER}} .bwdbtt-scroll-to-top-19 span' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_btn_text_typography',
				'selector' => '{{WRAPPER}} .bwdbtt-scroll-to-top-9 span, {{WRAPPER}} .bwdbtt-scroll-to-top-19 span',
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style, {{WRAPPER}} .bwdbtt-progress-value-25, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style::before, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style::after, {{WRAPPER}} .bwdbtt-scroll-to-top-6::after, {{WRAPPER}} .bwdbtt-scroll-to-top-13 .bwdbtt-scroll:before, {{WRAPPER}} .bwdbtt-scroll-to-top-19::before' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_2nd_color',
			[
				'label' => esc_html__( 'Second Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-19::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdbtt_style_selection' => ['style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_border',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style',
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_box_shadow',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdbtt_style_Hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_responsive_control(
			'bwdbtt_back_to_top_btn_box_height_hover',
			[
				'label' => esc_html__( 'Box Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
					'{{WRAPPER}} .bwdbtt-scroll-to-top-19:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbtt_style_selection' => ['style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_text_color_hover',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdbtt_style_selection' => ['style9', 'style19'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-9:hover span, {{WRAPPER}} .bwdbtt-scroll-to-top-19:hover span' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_color_hover',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover, {{WRAPPER}} .bwdbtt-progress-value-25:hover, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style:hover::before, {{WRAPPER}} .bwdbtt-scroll-to-top-2.bwdbtt_background_and_main_common_style:hover::after, {{WRAPPER}} .bwdbtt-scroll-to-top-6:hover::after, {{WRAPPER}} .bwdbtt-scroll-top-10:before, {{WRAPPER}} .bwdbtt-scroll-to-top-13 .bwdbtt-scroll:after, {{WRAPPER}} .bwdbtt-scroll-to-top-19:hover::before' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_btn_2nd_color_hover',
			[
				'label' => esc_html__( 'Second Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt-scroll-to-top-19:hover::after' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdbtt_style_selection' => ['style19'],
				],
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_border_hover',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover',
			]
		);

		$this->add_control(
			'bwdbtt_back_to_top_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbtt_back_to_top_box_shadow_hover',
				'selector' => '{{WRAPPER}} .bwdbtt_background_and_main_common_style:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if($settings['bwdbtt_style_selection'] == 'style1' || $settings['bwdbtt_style_selection'] == 'style2'){
			if('style1' === $settings['bwdbtt_style_selection']){
			?>
				<a href="#" class="bwdbtt-scroll-to-top-1 <?php if('left' === $settings['bwdbtt_back_to_top_btn_align']){ ?> bwdbtt-scroll-to-top-2-btn-alignment-left <?php } elseif('center' === $settings['bwdbtt_back_to_top_btn_align']){ ?> bwdbtt-scroll-to-top-2-btn-alignment-center <?php } ?> bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
			<?php
			} elseif('style2' === $settings['bwdbtt_style_selection']){
			?>
				<a class="bwdbtt-scroll-to-top-2 <?php if('left' === $settings['bwdbtt_back_to_top_btn_align']){ ?> bwdbtt-scroll-to-top-2-btn-alignment-left <?php } elseif('center' === $settings['bwdbtt_back_to_top_btn_align']){ ?> bwdbtt-scroll-to-top-2-btn-alignment-center <?php } ?> bwdbtt_background_and_main_common_style"><i class="<?php echo esc_attr( $settings['bwdbtt_back_to_top_btn_icon_one']['value'] ); ?>"></i></a>
			<?php
			}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}
