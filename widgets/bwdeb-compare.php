<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDMEcompare extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameImageCompare', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Image Compare', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle image-compare';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'bwdic_compare_content_section',
			[
				'label' => esc_html__( 'Compare Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdic_style_selection',
			[
				'label' => esc_html__( 'Compare Styles', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/image-compare/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		
		$this->add_responsive_control(
			'bwdic_compare_the_image_height',
			[
				'label' => esc_html__( 'Image Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item img , {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img' => 'max-height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdic_compare_the_secound_image_',
			[
				'label' => esc_html__( 'Before', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdic_image_two',
			[
				'label' => esc_html__( 'Before Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_responsive_control(
            'bwdic_compare_image_two_border_radius',
            [
                'label' => esc_html__('Before Image Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdic-compare-item .bwdic-after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_control(
			'bwdic_compare_the_first_image_',
			[
				'label' => esc_html__( 'After', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdic_image_one',
			[
				'label' => esc_html__( 'After Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_responsive_control(
            'bwdic_compare_image_one_border_radius',
            [
                'label' => esc_html__('After Image Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before img, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_control(
			'bwdic_social_icon_text_switcher',
			[
				'label' => esc_html__( 'Compare Text Status', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();


		// Number 5/6
		$this->start_controls_section(
			'bwdic_compare_content_section_fiix',
			[
				'label' => esc_html__( 'Text Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdic_social_icon_text_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdic_compare_the_after_text_fiix',
			[
				'label' => esc_html__( 'After', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('After', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdic_compare_the_after_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-text-after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-text-after' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdic_compare_the_after_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-text-after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-text-after' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdic_compare_after_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdic_compare_the_after_text_typography',
				'selector' => '{{WRAPPER}} .bwdic-compare-item .bwdic-text-after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-text-after',
			]
		);

		$this->add_control(
			'bwdic_compare_style_before_after_fiix',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_responsive_control(
			'bwdic_compare_the_before_text_fiix',
			[
				'label' => esc_html__( 'Before', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Before', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdic_compare_the_before_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-text-before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-text-before' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdic_compare_the_before_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-text-before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-text-before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdic_compare_before_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdic_compare_the_before_text_typography',
				'selector' => '{{WRAPPER}} .bwdic-compare-item .bwdic-text-before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-text-before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-text-before',
			]
		);

		$this->add_control(
			'bwdic_compare_style_fiix',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdic_compare_style_section',
			[
				'label' => esc_html__( 'Compare Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdic_compare_the_box_border',
			[
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'rem', 'em', '%'],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdic-before.bwdic-common-class-px' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdic_border_style',
			[
				'label' => esc_html__( 'Border Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'dashed' => esc_html__( 'Dashed', 'bwd-elementor-addons' ),
					'dotted' => esc_html__( 'Dotted', 'bwd-elementor-addons' ),
					'double' => esc_html__( 'Double', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdic_content_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdic-before.bwdic-common-class-color' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdic_compare_the_box_border_radius',
			[
				'label' => esc_html__( 'Background Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper::before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdic_compare_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdic_content_divider_color',
			[
				'label' => esc_html__( 'Divider Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line::before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line::before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line::before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line::before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line::before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line::before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line::before' => 'border-top-color: {{VALUE}}; border-bottom-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdic_content_divider_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::before, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::before' => 'border-right-color: {{VALUE}}',
					'{{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::after, {{WRAPPER}} .bwdic-compare-item  .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::after, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar .bwdic-drag-line .bwdic-dragline-inner::after' => 'border-left-color: {{VALUE}}',
				],
			]
		);
		// Only for style2, 4, 5, 6, 7, 8, 9, 10
		$this->add_control(
			'bwdic_content_background_overlay_color',
			[
				'label' => esc_html__( 'Background Overlay', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdic_style_selection' => ['style2', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10']
				],
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-img-wrapper::before, {{WRAPPER}} .bwdic-compare-item .bwdic-compare-img-wrapper .bwdic-compare-img .bwdic-before .bwdic-slider-bar::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdic_compare_wrapper_style_section',
			[
				'label' => esc_html__( 'Wrapper', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdic_button_normal_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdic-compare-item',
			]
		);
		$this->add_responsive_control(
			'bwdic_compare_the_box_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdic_compare_the_box_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .bwdic-compare-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if('style1' == $settings['bwdic_style_selection'] || 'style2' == $settings['bwdic_style_selection']){
		if('style1' === $settings['bwdic_style_selection']){
		?>
		<div class="bwdic-compare-item bwdic-compare-item-1">
				<div class="bwdic-compare-img-wrapper">
				<div class="bwdic-text-before">
					<?php echo esc_html($settings['bwdic_compare_the_before_text_fiix']); ?>
				</div>
				<div class="bwdic-text-after">
					<?php echo esc_html($settings['bwdic_compare_the_after_text_fiix']); ?>
				</div>
				<div class="bwdic-compare-img">
				<div class="bwdic-before bwdic-common-class-px <?php if('solid' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-solid <?php } elseif('dashed' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-dashed <?php } elseif('dotted' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-dotted <?php } elseif('double' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-double <?php } ?> bwdic-common-class-color">
					<img src="<?php echo esc_url($settings['bwdic_image_one']['url']); ?>" alt="img" />
					<div class="bwdic-after" style="background-image: url(<?php echo esc_url($settings['bwdic_image_two']['url']); ?>)"></div>
					<div class="bwdic-slider-bar">
					<div class="bwdic-drag-line">
						<div class="bwdic-dragline-inner"></div>
					</div>
					<input type="range" min="0" class="bwdic-range-inp" />
					</div>
				</div>
				</div>
			</div>
		</div>
		<?php
		} elseif('style2' === $settings['bwdic_style_selection']){
		?>
		<div class="bwdic-compare-item bwdic-compare-item-2">
			<div class="bwdic-compare-img-wrapper">
				<div class="bwdic-text-before">
					<?php echo esc_html($settings['bwdic_compare_the_before_text_fiix']); ?>
				</div>
				<div class="bwdic-text-after">
					<?php echo esc_html($settings['bwdic_compare_the_after_text_fiix']); ?>
				</div>
				<div class="bwdic-compare-img">
				<div class="bwdic-before bwdic-common-class-px <?php if('solid' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-solid <?php } elseif('dashed' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-dashed <?php } elseif('dotted' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-dotted <?php } elseif('double' === $settings['bwdic_border_style']){ ?> bwdic-common-class-style-double <?php } ?> bwdic-common-class-color">
					<img src="<?php echo esc_url($settings['bwdic_image_one']['url']); ?>" alt="nature img" />
					<div
					class="bwdic-after"
					style="background-image: url(<?php echo esc_url($settings['bwdic_image_two']['url']); ?>)"
					></div>
					<div class="bwdic-slider-bar">
					<div class="bwdic-drag-line">
						<div class="bwdic-dragline-inner">
						</div>
					</div>
					<input type="range" min="0" class="bwdic-range-inp" />
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
