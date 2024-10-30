<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDSSService extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameServiceShowcase', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Service Showcase', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle services';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'bwdss_service_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdss_service_showcase_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/service-showcase/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_responsive_control(
			'bwdss_column_layout',
			[
				'label' => esc_html__( 'Choose Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'column1' => esc_html__( '1 Column', 'bwd-elementor-addons' ),
					'column2' => esc_html__( '2 Column', 'bwd-elementor-addons' ),
					'column3'  => esc_html__( '3 Column', 'bwd-elementor-addons' ),
                    'column4' => esc_html__( '4 Column', 'bwd-elementor-addons' ),
                    'column5' => esc_html__( '5 Column', 'bwd-elementor-addons' ),
                    'column6' => esc_html__( '6 Column', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'bwdss-grid%s-'
			]
		);
		$this->add_responsive_control(
			'bwdss_service_showcase_column_gap',
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
					'{{WRAPPER}} .bwdss_gapc' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdss_gapr' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_showcase_row_gap',
			[
				'label' => esc_html__( 'Row Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-box' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
			'bwdss_column_section',
			[
				'label' => esc_html__( 'Service Content', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
       
        

		$repeater = new \Elementor\Repeater();
		 
		// Service Box Start
		
		$repeater->start_controls_tabs(
			'bwdss_service_service_box_style_tabs'
		);
		$repeater->start_controls_tab(
			'bwdss_service_service_box_background_content_tab',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdss_service_icon', [
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdss_service_title', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdss_service_cont', [
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
		$repeater->add_control(
			'bwdss_service_showcase_box_link',
			[
				'label' => esc_html__( 'Box Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdss_service_service_box_background_style_tab',
			[
				'label' => esc_html__( 'Style', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdss_service_service_box_icon-heading',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon ' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-6 .bwd-service-box.purple:after' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-3 .bwd-service-box:before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.blue::after' => 'border-color: {{VALUE}}'
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_icon_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon::before',
				
				// 'selectors' => [
				// 	'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box span, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box span:after, .bwd-service-style-18 .bwd-service-box .bwd-service-icon::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon::after' => 'border-color: {{VALUE}}',
				// 	'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon:after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box span::before' => 'background-color: {{VALUE}}',
				// ],
			]
		);
		$repeater->add_responsive_control(
			'bwdss_service_icon_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-service-icon' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdss_sevice_icon_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-icon',
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_primary_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'primary_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'gradient' ],
				'exclude' => ['image', 'classic'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon-bgb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon-bga::after',
				
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_secondary_background_color',
			[
				'label' => esc_html__( 'Secondary Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'secondary_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-icon::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-content::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.sunrise .bwd-top-title' ,
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_background_color_separator',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$repeater->add_responsive_control(
			'bwdss_service_icon_font_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon ' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'bwdss_service_icon_round-size',
			[
				'label' => esc_html__( 'Round Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em', '%' ],
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Service Icon End Here
		$repeater->add_control(
			'bwdss_service_service_box_title-heading',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_control(
			'bwdss_service_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .title' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdss_service_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .title',
			]
		);
		$repeater->add_control(
			'bwdss_service_text_shadow_popover_toggle',
			[
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
			]
		);
		$repeater->start_popover();
		$repeater->add_control(
			'bwdss_service_text_shadow', 
			[
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT_SHADOW,
				'selectors' => [
					'{{SELECTOR}} {{CURRENT_ITEM}} .title' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
				'condition' => [
					'bwdss_service_text_shadow_popover_toggle' => 'yes',
				],
			]	
		);	
		$repeater->end_popover();
		$repeater->add_control(
			'bwdss_service_service_box_des-heading',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdss_service_cont_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .desc' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdss_service_cont_border_color',
			[
				'label' => esc_html__( 'Content Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-content::before' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .bwd-service-content' => 'background-color: {{VALUE}}'
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdss_service_cont_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .desc',
			]
		);
		$repeater->add_control(
			'bwdss_service_service_box_style',
			[
				'label' => esc_html__( 'Box', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdss_service_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdss_service_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box',
			]
		);
		$repeater->add_control(
			'bwdss_service_box_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwdss_service_box_background_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdss_service_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-icon i:hover, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.blue .bwd-service-icon i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-6 .bwd-service-box.purple:after' => 'border-bottom-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-style-3 .bwd-service-box:before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box.blue::after' => 'border-color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdss_service_title_color_hover',
			[
				'label' => esc_html__( 'Title Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .title:hover' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdss_service_cont_color_hover',
			[
				'label' => esc_html__( 'Description Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box .desc:hover' => 'color: {{VALUE}}'
				],
			]
		);
		// Service Description End Here
		$repeater->add_control(
			'bwdss_service_service_box_hover_style',
			[
				'label' => esc_html__( 'Box Hover', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdss_service_box_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdss_service_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover',
			]
		);
		$repeater->add_control(
			'bwdss_service_box_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-service-box:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Icon Box End
		// Icon Start
		$this->add_control(
			'bwdss_service_item',
			[
				'label' => esc_html__( 'Service', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdss_service_title' => esc_html__( 'Title #1', 'bwd-elementor-addons' ),
						'bwdss_service_cont' => esc_html__( 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.', 'bwd-elementor-addons' ),
					],
					[
						'bwdss_service_title' => esc_html__( 'Title #2', 'bwd-elementor-addons' ),
						'bwdss_service_cont' => esc_html__( 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.', 'bwd-elementor-addons' ),
					],
					[
						'bwdss_service_title' => esc_html__( 'Title #3', 'bwd-elementor-addons' ),
						'bwdss_service_cont' => esc_html__( 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.', 'bwd-elementor-addons' ),
					],
					[
						'bwdss_service_title' => esc_html__( 'Title #4', 'bwd-elementor-addons' ),
						'bwdss_service_cont' => esc_html__( 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdss_service_title }}}',
			]
		);
		$this->add_control(
			'bwdss_service_service_icon_option_align',
			[
				'label' => esc_html__( 'Icon Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'center' => esc_html__( 'Center', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'bwdss-icon-align-',
				'condition' => [
					'bwdss_service_showcase_style!' => ['style1', 'style3', 'style4', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style17', 'style19', 'style20', 'style22', 'style24', 'style26', 'style28', 'style29', 'style30', 'style31'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_service_icon_choose_align',
			[
				'label' => esc_html__( 'Icon Alignment', 'bwd-elementor-addons' ),
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwd-service-box .bwd-icon-align' => 'text-align: {{VALUE}}!important;',
				],
				'condition' => [
					'bwdss_service_showcase_style!' => ['style2', 'style5', 'style6', 'style7', 'style8', 'style10', 'style11', 'style15', 'style16', 'style18', 'style21', 'style23', 'style25', 'style27'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_service_text_align',
			[
				'label' => esc_html__( 'Text Alignment', 'bwd-elementor-addons' ),
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
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwd-service-box .bwd-content-align' => 'text-align: {{VALUE}}!important;',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdss_service_style_section',
			[
				'label' => esc_html__( 'Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdss_service_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwd-service-style-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdss_service_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-style-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdss_service_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em','rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-style-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdss_service_section_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-service-style-wrapper',
			]
		);
		$this->add_responsive_control(
			'bwdss_service_section_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-service-style-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdss_column_gap = $settings['bwdss_service_showcase_column_gap'];
		$bwdss_column_num = $settings['bwdss_column_layout'];
		if ( ! empty( $settings['bwdss_service_showcase_box_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdss_service_showcase_box_link', $settings['bwdss_service_showcase_box_link'] );
		}
		if ('style1' == $settings['bwdss_service_showcase_style'] || 'style2' == $settings['bwdss_service_showcase_style']) { 
		if ('style1' === $settings['bwdss_service_showcase_style']) { 
		?>
		<div class="bwd-service-style-1 bwd-service-style-wrapper">
			<div class="container-fluid">
				<div class="row bwdss_gapr">
					<?php
						if( $settings['bwdss_service_item'] ) {
							foreach( $settings['bwdss_service_item'] as $item ) {
								?>
						<div class="column_number bwdss_gapc col-xl-3 col-lg-4 col-md-4 col-sm-6"><?php
							echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box red">
									<div class="bwd-icon-align">
										<div class="bwd-service-icon">
											<i class="<?php echo esc_attr($item['bwdss_service_icon']['value']); ?>"></i>
										</div>
									</div>
									<div class="bwd-content-align">
										<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
										<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
									</div>
								</a>
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
		} elseif ('style2' === $settings['bwdss_service_showcase_style']) { 
		?>
		<div class="bwd-service-style-2 bwd-service-style-wrapper">
			<div class="container-fluid">
				<div class="row bwdss_gapr">
					<?php
						if( $settings['bwdss_service_item'] ) {
							foreach( $settings['bwdss_service_item'] as $item ) {
								?>
						<div class="column_number bwdss_gapc col-xl-3 col-lg-4 col-md-4 col-sm-6"><?php
							echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
								<a href="<?php echo esc_url($item['bwdss_service_showcase_box_link']['url']); ?>" class="bwd-service-box red">
									<div class="bwd-icon-align">
										<div class="bwd-service-icon">
											<i class="<?php echo esc_attr($item['bwdss_service_icon']['value']); ?>"></i>
										</div>
									</div>
									<div class="bwd-content-align">
										<div class="title"><?php echo esc_html($item['bwdss_service_title']); ?></div>
										<div class="desc"><?php echo esc_html($item['bwdss_service_cont']); ?></div>
									</div>
								</a>
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
		
		