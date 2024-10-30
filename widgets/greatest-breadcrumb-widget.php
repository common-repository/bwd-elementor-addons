<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;
use Elementor\Utils;
use Elementor\Icons_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography as Scheme_Typography;
use Elementor\Core\Schemes\Color as Scheme_Color;

if (!defined('ABSPATH')){ 
	exit; 
} // Exit if accessed directly

class BWDEB_GRSTBCMBreadcrumBWidget extends Widget_Base{

    public function get_name(){
        return esc_html__('GreatestBreadcrumb', 'bwd-elementor-addons');
    }
    public function get_title(){
        return esc_html__('Greatest Breadcrumb', 'bwd-elementor-addons');
    }
    public function get_icon(){
        return 'bwdeb-elementor-bundle eicon-product-breadcrumbs';
    }
    public function get_categories(){
        return ['bwdeb_general_category'];
    }
	public function get_keywords() {
		return ['breadcrumb', 'breadcrumbs', 'crumb', 'crumbs', 'list', 'header', 'builder'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_breadcrumbs',
			array(
				'label' => esc_html__( 'Content Settings', 'bwd-elementor-addons' ),
			)
		);
		$this->add_control(
			'breadcrumb_presets_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/breadcrumb" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		// has a control for type selection (ferdaussk)
		$this->add_control(
			'show_home',
			array(
				'label'        => esc_html__( 'Show Home', 'bwd-elementor-addons' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'label_on'     => esc_html__( 'On', 'bwd-elementor-addons' ),
				'label_off'    => esc_html__( 'Off', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
			)
		);

		$this->add_control(
			'home_text',
			array(
				'label'     => esc_html__( 'Home Text', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => esc_html__( 'Home', 'bwd-elementor-addons' ),
				'dynamic'   => array(
					'active'     => true,
				),
				'condition' => [
					'show_home' => 'yes',
				],
			)
		);

		$this->add_control(
			'select_home_icon',
			array(
				'label'            => esc_html__( 'Home Icon', 'bwd-elementor-addons' ),
				'type'             => Controls_Manager::ICONS,
				'label_block'      => false,
				'skin'             => 'inline',
				'fa4compatibility' => 'home_icon',
				'default'          => array(
					'value'   => 'fas fa-home',
					'library' => 'fa-solid',
				),
				'condition' => [
					'show_home' => 'yes',
				],
			)
		);
		$this->add_responsive_control(
			'align',
			array(
				'label'                => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type'                 => Controls_Manager::CHOOSE,
				'default'              => '',
				'options'              => array(
					'left'   => array(
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon'  => 'eicon-h-align-left',
					),
					'center' => array(
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon'  => 'eicon-h-align-center',
					),
					'right'  => array(
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon'  => 'eicon-h-align-right',
					),
				),
				'selectors_dictionary' => array(
					'left'   => 'flex-start',
					'center' => 'center',
					'right'  => 'flex-end',
				),
				'selectors'            => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs, {{WRAPPER}} .grstbcmb_style4:not(.grstbcmb_style4 .grstbcmb-breadcrumbs), {{WRAPPER}} .grstbcmb_style7, {{WRAPPER}} .grstbcmb_style10' => 'justify-content: {{VALUE}};',
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_separator',
			array(
				'label'     => esc_html__( 'Separate Indicator', 'bwd-elementor-addons' ),
			)
		);

		$this->add_control(
			'separator_type',
			array(
				'label'     => esc_html__( 'Separate Type', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'icon',
				'options'   => array(
					'text' => esc_html__( 'Text', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				),
			)
		);

		$this->add_control(
			'separator_text',
			array(
				'label'     => esc_html__( 'Separator', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => esc_html__( '>', 'bwd-elementor-addons' ),
				'condition' => array(
					'separator_type'   => 'text',
				),
			)
		);

		$this->add_control(
			'select_separator_icon',
			array(
				'label'            => esc_html__( 'Indicator', 'bwd-elementor-addons' ),
				'type'             => Controls_Manager::ICONS,
				'label_block'      => false,
				'skin'             => 'inline',
				'fa4compatibility' => 'separator_icon',
				'default'          => array(
					'value'   => 'fas fa-angle-double-right',
					'library' => 'fa-solid',
				),
				'recommended'      => array(
					'fa-regular' => array(
						'circle',
						'square',
						'window-minimize',
					),
					'fa-solid'   => array(
						'angle-right',
						'angle-double-right',
						'caret-right',
						'chevron-right',
						'bullseye',
						'circle',
						'dot-circle',
						'genderless',
						'greater-than',
						'grip-lines',
						'grip-lines-vertical',
						'minus',
					),
				),
				'condition'        => array(
					'separator_type'   => 'icon',
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_breadcrumbs_style',
			array(
				'label' => esc_html__( 'Items Style', 'bwd-elementor-addons' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'breadcrumbs_items_spacing',
			array(
				'label'     => esc_html__( 'Spacing', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array(
					'px' => array(
						'max' => 100,
					),
				),
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs' => 'gap: {{SIZE}}{{UNIT}};',
				),
			)
		);

		$this->start_controls_tabs( 'tabs_breadcrumbs_style' );

		$this->start_controls_tab(
			'tab_breadcrumbs_normal',
			array(
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			)
		);

		$this->add_control(
			'breadcrumbs_color',
			array(
				'label'     => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) a, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) span:not(.separator)' => 'color: {{VALUE}}',
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb .grstbcmb-icon svg' => 'fill: {{VALUE}}',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'breadcrumbs_background_color',
				'types' => array( 'classic', 'gradient' ),
				'selector' => '{{WRAPPER}} .grstbcmb-breadcrumbs-item:not(.grstbcmb-breadcrumbs-item-current), {{WRAPPER}} .grstbcmb-breadcrumbs-item::after, {{WRAPPER}} .grstbcmb-breadcrumbs-item::before',
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'breadcrumbs_typography',
				'label'    => esc_html__( 'Typography', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .grstbcmb-breadcrumbs-crumb, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) a, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) span:not(.separator)',
			)
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			array(
				'name'        => 'breadcrumbs_border',
				'label'       => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'placeholder' => '1px',
				'default'     => '1px',
				'selector'    => '{{WRAPPER}} .grstbcmb-breadcrumbs-crumb, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) a, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) span:not(.separator)',
			)
		);

		$this->add_control(
			'breadcrumbs_border_radius',
			array(
				'label'      => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) a, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) span:not(.separator)' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_breadcrumbs_hover',
			array(
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			)
		);

		$this->add_control(
			'breadcrumbs_color_hover',
			array(
				'label'     => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-link:hover, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) a:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-link:hover .grstbcmb-icon svg' => 'fill: {{VALUE}}',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'breadcrumbs_background_hover_color',
				'types' => array( 'classic', 'gradient' ),
				'selector' => '{{WRAPPER}} .grstbcmb-breadcrumbs-item:hover:not(.grstbcmb-breadcrumbs-item-current), {{WRAPPER}} .grstbcmb-breadcrumbs-item:hover::after, .grstbcmb-breadcrumbs-item:hover::before',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_breadcrumbs_active',
			array(
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			)
		);
		$this->add_control(
			'breadcrumbs_color_active',
			array(
				'label'     => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs .grstbcmb-breadcrumbs-crumb-current' => 'color: {{VALUE}}',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'breadcrumbs_background_active_color',
				'types' => array( 'classic', 'gradient' ),
				'selector' => '{{WRAPPER}} .grstbcmb-breadcrumbs .grstbcmb-breadcrumbs-item-current',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->add_responsive_control(
			'breadcrumbs_padding',
			array(
				'label'      => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'separator'  => 'before',
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) a, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) span:not(.separator)' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);
		$this->add_responsive_control(
			'breadcrumbs_margin',
			array(
				'label'      => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) a, {{WRAPPER}} .grstbcmb-breadcrumbs:not(.grstbcmb-breadcrumbs-greatest-breadcrumb) span:not(.separator)' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_separators_style',
			array(
				'label'     => esc_html__( 'Indicator', 'bwd-elementor-addons' ),
				'tab'       => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'separators_color',
			array(
				'label'     => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-separator, {{WRAPPER}} .grstbcmb-breadcrumbs .separator' => 'color: {{VALUE}}',
					'{{WRAPPER}} .grstbcmb-breadcrumbs-separator svg' => 'fill: {{VALUE}}',
				),
			)
		);

		$this->add_control(
			'separators_background_color',
			array(
				'label'     => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-separator, {{WRAPPER}} .grstbcmb-breadcrumbs .separator' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'      => 'separators_typography',
				'label'     => esc_html__( 'Typography', 'bwd-elementor-addons' ),
				'selector'  => '{{WRAPPER}} .grstbcmb-breadcrumbs-separator, {{WRAPPER}} .grstbcmb-breadcrumbs .separator',
			)
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			array(
				'name'        => 'separators_border',
				'label'       => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'placeholder' => '1px',
				'default'     => '1px',
				'selector'    => '{{WRAPPER}} .grstbcmb-breadcrumbs-separator, {{WRAPPER}} .grstbcmb-breadcrumbs .separator',
			)
		);

		$this->add_control(
			'separators_border_radius',
			array(
				'label'      => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-separator, {{WRAPPER}} .grstbcmb-breadcrumbs .separator' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->add_responsive_control(
			'separators_padding',
			array(
				'label'      => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-separator, {{WRAPPER}} .grstbcmb-breadcrumbs .separator' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_current_style',
			array(
				'label'     => esc_html__( 'Current', 'bwd-elementor-addons' ),
				'tab'       => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'current_color',
			array(
				'label'     => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-current' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_control(
			'current_background_color',
			array(
				'label'     => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-current' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'      => 'current_typography',
				'label'     => esc_html__( 'Typography', 'bwd-elementor-addons' ),
				'selector'  => '{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-current',
			)
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			array(
				'name'        => 'current_border',
				'label'       => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'placeholder' => '1px',
				'default'     => '1px',
				'selector'    => '{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-current',
			)
		);

		$this->add_control(
			'current_border_radius',
			array(
				'label'      => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-current' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->add_control(
			'current_padding',
			array(
				'label'      => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-current' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->add_control(
			'current_margin',
			array(
				'label'      => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .grstbcmb-breadcrumbs-crumb-current' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section('grstbcmb_breadcrumbs_grstbcmb_structured_data',
			[
				'label' => __('Google Structured Data Schema', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'grstbcmb_enable_google_schema',
				[
					'label' => esc_html__('Enable Schema?', 'bwd-elementor-addons'),
					'type' => Controls_Manager::SELECT,
					'options'  => [
						'yes'  => esc_html__('Yes', 'Show Child Pages', 'bwd-elementor-addons'),
						'no' => esc_html__('No', 'Show Child Pages', 'bwd-elementor-addons'),
					],
					'default' => 'yes',
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		if($settings['breadcrumb_presets_style'] == 'style1' || $settings['breadcrumb_presets_style'] == 'style2'){
		// For google schema
		global $post;
		global $wp;
		$grstbcmb_structured_data = [];
		$grstbcmb_structured_data['@context'] = 'https://schema.org/';
		$grstbcmb_structured_data['@type'] = 'BreadcrumbList';
		$grstbcmb_structured_data['itemListElement'] = [];
		
		$parents = get_post_ancestors($post->ID);
		krsort($parents);
		$parents_count = 1;
		foreach($parents as $a_parent_ID){
			$parent = get_post($a_parent_ID);
			$grstbcmb_temp_data_item = [];
			$grstbcmb_temp_data_item['@type'] = 'ListItem';
			$grstbcmb_temp_data_item['position'] = $parents_count;
			$grstbcmb_temp_data_item['name'] = $parent->post_title;
			$grstbcmb_temp_data_item['item'] = get_the_permalink($parent->ID);
			$output .= '<li class="visited"><a href="'.get_permalink($parent->ID).'">'.$parent->post_title.'</a></li>';
			$grstbcmb_structured_data['itemListElement'][] = $grstbcmb_temp_data_item;
			$parents_count++;
		}
		$grstbcmb_current_page_data['@type'] = 'ListItem';
		$grstbcmb_current_page_data['position'] = intval($parents_count);
		$grstbcmb_current_page_data['name'] = esc_attr(get_the_title());
		$grstbcmb_current_page_data['item'] = home_url(add_query_arg(array(), $wp->request));
		$grstbcmb_structured_data['itemListElement'][] = $grstbcmb_current_page_data;
		// schema end

		echo '<div class="grstbcmb_'.esc_attr($settings['breadcrumb_presets_style']).'">';
		$name_herE = 'bwd-elementor-addons';
		if ( $name_herE == true ) {
			$query = $this->get_query();
			if ( $query ) {
				if ( $query->have_posts() ) {
					$this->render_breadcrumbs( $query );
					wp_reset_postdata();
				}
			} else {
				$this->render_breadcrumbs();
			}
		}
		if($settings['grstbcmb_enable_google_schema'] === 'yes'){
			$json_data = json_encode($grstbcmb_structured_data);
			$encoded_json_data = esc_attr($json_data);
			echo '<div data-structured-data="' . esc_attr($encoded_json_data) . '"></div>';
		}
		echo '</div>';
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...').'</b></a></h1>';
	}
	}

	protected function get_query() {
		$settings = $this->get_settings_for_display();

		global $post;

		$post_type = 'any';

		$args = array(
			'post_type' => $post_type,
		);

		// Posts Query.
		$post_query = new \WP_Query( $args );
		return false;
	}

	protected function render_breadcrumbs( $query = false ) {
		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'breadcrumbs', 'class', array( 'grstbcmb-breadcrumbs', 'grstbcmb-breadcrumbs-greatest-breadcrumb' ) );
		$this->add_render_attribute( 'breadcrumbs-item', 'class', 'grstbcmb-breadcrumbs-item' );
		$custom_taxonomy = 'product_cat';
		global $post, $wp_query;

		if ( false === $query ) {
			$wp_query->reset_postdata();
			$query = $wp_query;
		}

		// Do not display on the homepage
		if ( ! $query->is_front_page() ) {
			echo '<ul ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs' ) ) . '>';

			// Home page
			if ( 'yes' === $settings['show_home'] ) {
				$this->render_home_link();
			}

			if ( $query->is_archive() && ! $query->is_tax() && ! $query->is_category() && ! $query->is_tag() ) {

				$this->add_render_attribute(
					'breadcrumbs-item-archive',
					'class',
					array(
						'grstbcmb-breadcrumbs-item',
						'grstbcmb-breadcrumbs-item-current',
						'grstbcmb-breadcrumbs-item-archive',
					)
				);

				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-archive' ) ) . '><strong class="bread-current bread-archive">' . wp_kses_post(post_type_archive_title( '', false )) . '</strong></li>';

			} elseif ( $query->is_archive() && $query->is_tax() && ! $query->is_category() && ! $query->is_tag() ) {
				$post_type = get_post_type();
				if ( 'post' !== $post_type ) {
					$post_type_object  = get_post_type_object( $post_type );
					$post_type_archive = get_post_type_archive_link( $post_type );

					$this->add_render_attribute(
						array(
							'breadcrumbs-item-cpt'       => array(
								'class' => array(
									'grstbcmb-breadcrumbs-item',
									'grstbcmb-breadcrumbs-item-cat',
									'grstbcmb-breadcrumbs-item-custom-post-type-' . esc_attr($post_type),
								),
							),
							'breadcrumbs-item-cpt-crumb' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-crumb',
									'grstbcmb-breadcrumbs-crumb-link',
									'grstbcmb-breadcrumbs-crumb-cat',
									'grstbcmb-breadcrumbs-crumb-custom-post-type-' . esc_attr($post_type),
								),
								'href'  => esc_attr($post_type_archive),
								'title' => esc_attr($post_type_object->labels->name),
							),
						)
					);

					echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-cpt' ) ) . '><a ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-cpt-crumb' ) ) . '>' . esc_attr( $post_type_object->labels->name ) . '</a></li>';

					$this->render_separator();

				}

				$this->add_render_attribute(
					array(
						'breadcrumbs-item-tax'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-archive',
							),
						),
						'breadcrumbs-item-tax-crumb' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
							),
						),
					)
				);

				$custom_tax_name = get_queried_object()->name;

				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-tax' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-tax-crumb' ) ) . '>' . esc_attr( $custom_tax_name ) . '</strong></li>';

			} elseif ( $query->is_single() ) {

// has an code for post type string showed here (ferdaussk)

				$category = get_the_category();
				if ( ! empty( $category ) ) {
					$values = array_values( $category );
					$last_category = reset( $values );
					$categories      = array();
					$get_cat_parents = rtrim( get_category_parents( $last_category->term_id, true, ',' ), ',' );
					$cat_parents     = explode( ',', $get_cat_parents );
					foreach ( $cat_parents as $parent ) {
						$categories[] = get_term_by( 'name', $parent, 'category' );
					}

					$cat_display = '';
					foreach ( $categories as $parent ) {
						if ( ! is_wp_error( get_term_link( $parent ) ) ) {
							$cat_display .= '<li class="grstbcmb-breadcrumbs-item grstbcmb-breadcrumbs-item-cat"><a class="grstbcmb-breadcrumbs-crumb grstbcmb-breadcrumbs-crumb-link grstbcmb-breadcrumbs-crumb-cat" href="' . get_term_link( $parent ) . '">' . $parent->name . '</a></li>';
							$cat_display .= $this->render_separator( false );
						}
					}
				}

				$taxonomy_exists = taxonomy_exists( $custom_taxonomy );
				$taxonomy_terms = array();
				if ( empty( $last_category ) && ! empty( $custom_taxonomy ) && $taxonomy_exists ) {
					$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
				}

				if ( ! empty( $last_category ) ) {
					echo wp_kses_post( $cat_display );
					$this->add_render_attribute(
						array(
							'breadcrumbs-item-post-cat' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-item',
									'grstbcmb-breadcrumbs-item-current',
									'grstbcmb-breadcrumbs-item-' . $post->ID,
								),
							),
							'breadcrumbs-item-post-cat-bread' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-crumb',
									'grstbcmb-breadcrumbs-crumb-current',
									'grstbcmb-breadcrumbs-crumb-' . $post->ID,
								),
								'title' => get_the_title(),
							),
						)
					);
					echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post-cat' ) ) . '"><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post-cat-bread' ) ) . '">' . wp_kses_post( get_the_title() ) . '</strong></li>';
				} elseif ( ! empty( $taxonomy_terms ) ) {
					foreach ( $taxonomy_terms as $index => $taxonomy ) {
						$cat_id       = $taxonomy->term_id;
						$cat_nicename = $taxonomy->slug;
						$cat_link     = get_term_link( $taxonomy->term_id, $custom_taxonomy );
						$cat_name     = $taxonomy->name;
						$this->add_render_attribute(
							array(
								'breadcrumbs-item-post-cpt-' . $index => array(
									'class' => array(
										'grstbcmb-breadcrumbs-item',
										'grstbcmb-breadcrumbs-item-cat',
										'grstbcmb-breadcrumbs-item-cat-' . $cat_id,
										'grstbcmb-breadcrumbs-item-cat-' . $cat_nicename,
									),
								),
								'breadcrumbs-item-post-cpt-crumb-' . $index => array(
									'class' => array(
										'grstbcmb-breadcrumbs-crumb',
										'grstbcmb-breadcrumbs-crumb-link',
										'grstbcmb-breadcrumbs-crumb-cat',
										'grstbcmb-breadcrumbs-crumb-cat-' . $cat_id,
										'grstbcmb-breadcrumbs-crumb-cat-' . $cat_nicename,
									),
									'href'  => $cat_link,
									'title' => $cat_name,
								),
							)
						);
						echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post-cpt-' . $index ) ) . '"><a ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post-cpt-crumb-' . $index ) ) . '>' . esc_attr( $cat_name ) . '</a></li>';
						$this->render_separator();
					}
					$this->add_render_attribute(
						array(
							'breadcrumbs-item-post'       => array(
								'class' => array(
									'grstbcmb-breadcrumbs-item',
									'grstbcmb-breadcrumbs-item-current',
									'grstbcmb-breadcrumbs-item-' . $post->ID,
								),
							),
							'breadcrumbs-item-post-crumb' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-crumb',
									'grstbcmb-breadcrumbs-crumb-current',
									'grstbcmb-breadcrumbs-crumb-' . $post->ID,
								),
								'title' => get_the_title(),
							),
						)
					);
					echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post' ) ) . '"><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post-crumb' ) ) . '">' . wp_kses_post( get_the_title() ) . '</strong></li>';
				} else {

					$this->add_render_attribute(
						array(
							'breadcrumbs-item-post'       => array(
								'class' => array(
									'grstbcmb-breadcrumbs-item',
									'grstbcmb-breadcrumbs-item-current',
									'grstbcmb-breadcrumbs-item-' . $post->ID,
								),
							),
							'breadcrumbs-item-post-crumb' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-crumb',
									'grstbcmb-breadcrumbs-crumb-current',
									'grstbcmb-breadcrumbs-crumb-' . $post->ID,
								),
								'title' => get_the_title(),
							),
						)
					);
					echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post' ) ) . '"><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-post-crumb' ) ) . '">' . wp_kses_post( get_the_title() ) . '</strong></li>';
				}
			} elseif ( $query->is_category() ) {
					$this->add_render_attribute(
						array(
							'breadcrumbs-item-cat'       => array(
								'class' => array(
									'grstbcmb-breadcrumbs-item',
									'grstbcmb-breadcrumbs-item-current',
									'grstbcmb-breadcrumbs-item-cat',
								),
							),
							'breadcrumbs-item-cat-bread' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-crumb',
									'grstbcmb-breadcrumbs-crumb-current',
									'grstbcmb-breadcrumbs-crumb-cat',
								),
							),
						)
					);
				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-cat' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-cat-bread' ) ) . '>' . single_cat_title( '', false ) . '</strong></li>';
			} elseif ( $query->is_page() ) {

				$this->add_render_attribute(
					array(
						'breadcrumbs-item-page'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-' . $post->ID,
							),
						),
						'breadcrumbs-item-page-crumb' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
								'grstbcmb-breadcrumbs-crumb-' . $post->ID,
							),
							'title' => get_the_title(),
						),
					)
				);
				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-page' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-page-crumb' ) ) . '>' . wp_kses_post( get_the_title() ) . '</strong></li>';
			} elseif ( $query->is_tag() ) {
				$term_id       = get_query_var( 'tag_id' );
				$taxonomy      = 'post_tag';
				$args          = 'include=' . $term_id;
				$terms         = get_terms( $taxonomy, $args );
				$get_term_id   = $terms[0]->term_id;
				$get_term_slug = $terms[0]->slug;
				$get_term_name = $terms[0]->name;

				$this->add_render_attribute(
					array(
						'breadcrumbs-item-tag'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-tag-' . $get_term_id,
								'grstbcmb-breadcrumbs-item-tag-' . $get_term_slug,
							),
						),
						'breadcrumbs-item-tag-bread' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
								'grstbcmb-breadcrumbs-crumb-tag-' . $get_term_id,
								'grstbcmb-breadcrumbs-crumb-tag-' . $get_term_slug,
							),
							'title' => get_the_title(),
						),
					)
				);
				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-tag' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-tag-bread' ) ) . '>' . wp_kses_post( $get_term_name ) . '</strong></li>';
			} elseif ( $query->is_day() ) {
				$this->add_render_attribute(
					array(
						'breadcrumbs-item-year'        => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-year',
								'grstbcmb-breadcrumbs-item-year-' . get_the_time( 'Y' ),
							),
						),
						'breadcrumbs-item-year-crumb'  => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-link',
								'grstbcmb-breadcrumbs-crumb-year',
								'grstbcmb-breadcrumbs-crumb-year-' . get_the_time( 'Y' ),
							),
							'href'  => get_year_link( get_the_time( 'Y' ) ),
							'title' => get_the_time( 'Y' ),
						),
						'breadcrumbs-item-month'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-month',
								'grstbcmb-breadcrumbs-item-month-' . get_the_time( 'm' ),
							),
						),
						'breadcrumbs-item-month-crumb' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-link',
								'grstbcmb-breadcrumbs-crumb-month',
								'grstbcmb-breadcrumbs-crumb-month-' . get_the_time( 'm' ),
							),
							'href'  => get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ),
							'title' => get_the_time( 'M' ),
						),
						'breadcrumbs-item-day'         => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-' . get_the_time( 'j' ),
							),
						),
						'breadcrumbs-item-day-crumb'   => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
								'grstbcmb-breadcrumbs-crumb-' . get_the_time( 'j' ),
							),
						),
					)
				);

				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-year' ) ) . '><a ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-year-crumb' ) ) . '>' . wp_kses_post( get_the_time( 'Y' ) ) . ' ' . esc_html__( 'Archives', 'bwd-elementor-addons' ) . '</a></li>';

				$this->render_separator();

				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-month' ) ) . '><a ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-month-crumb' ) ) . '>' . wp_kses_post( get_the_time( 'M' ) ) . ' ' . esc_html__( 'Archives', 'bwd-elementor-addons' ) . '</a></li>';

				$this->render_separator();

				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-day' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-day-crumb' ) ) . '> ' . wp_kses_post( get_the_time( 'jS' ) ) . ' ' . wp_kses_post( get_the_time( 'M' ) ) . ' ' . esc_html__( 'Archives', 'bwd-elementor-addons' ) . '</strong></li>';

			} elseif ( $query->is_month() ) {
				$this->add_render_attribute(
					array(
						'breadcrumbs-item-year'        => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-year',
								'grstbcmb-breadcrumbs-item-year-' . get_the_time( 'Y' ),
							),
						),
						'breadcrumbs-item-year-crumb'  => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-year',
								'grstbcmb-breadcrumbs-crumb-year-' . get_the_time( 'Y' ),
							),
							'href'  => get_year_link( get_the_time( 'Y' ) ),
							'title' => get_the_time( 'Y' ),
						),
						'breadcrumbs-item-month'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-month',
								'grstbcmb-breadcrumbs-item-month-' . get_the_time( 'm' ),
							),
						),
						'breadcrumbs-item-month-crumb' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-month',
								'grstbcmb-breadcrumbs-crumb-month-' . get_the_time( 'm' ),
							),
							'title' => get_the_time( 'M' ),
						),
					)
				);

				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-year' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-year-crumb' ) ) . '>' . wp_kses_post( get_the_time( 'Y' ) ) . ' ' . esc_html__( 'Archives', 'bwd-elementor-addons' ) . '</strong></li>';

				$this->render_separator();

				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-month' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-month-crumb' ) ) . '>' . wp_kses_post( get_the_time( 'M' ) ) . ' ' . esc_html__( 'Archives', 'bwd-elementor-addons' ) . '</strong></li>';

			} elseif ( $query->is_year() ) {

				$this->add_render_attribute(
					array(
						'breadcrumbs-item-year'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-current-' . get_the_time( 'Y' ),
							),
						),
						'breadcrumbs-item-year-crumb' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
								'grstbcmb-breadcrumbs-crumb-current-' . get_the_time( 'Y' ),
							),
							'title' => get_the_time( 'Y' ),
						),
					)
				);
				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-year' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-year-crumb' ) ) . '>' . wp_kses_post( get_the_time( 'Y' ) ) . ' ' . esc_html__( 'Archives', 'bwd-elementor-addons' ) . '</strong></li>';

			} elseif ( $query->is_author() ) {

				// Get the author information
				global $author;
				$userdata = get_userdata( $author );

				$this->add_render_attribute(
					array(
						'breadcrumbs-item-author'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-current-' . $userdata->user_nicename,
							),
						),
						'breadcrumbs-item-author-bread' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
								'grstbcmb-breadcrumbs-crumb-current-' . $userdata->user_nicename,
							),
							'title' => $userdata->display_name,
						),
					)
				);
				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-author' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-author-bread' ) ) . '>' . esc_html__( 'Author:', 'bwd-elementor-addons' ) . ' ' . esc_html( $userdata->display_name ) . '</strong></li>';
			} elseif ( get_query_var( 'paged' ) ) {

				$this->add_render_attribute(
					array(
						'breadcrumbs-item-paged'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-current-' . get_query_var( 'paged' ),
							),
						),
						'breadcrumbs-item-paged-bread' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
								'grstbcmb-breadcrumbs-crumb-current-' . get_query_var( 'paged' ),
							),
							'title' => esc_html__( 'Page', 'bwd-elementor-addons' ) . ' ' . get_query_var( 'paged' ),
						),
					)
				);
				echo '<li id="hksdh_ferdaus" ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-paged' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-paged-bread' ) ) . '>' . esc_html__( 'Page', 'bwd-elementor-addons' ) . ' ' . wp_kses_post( get_query_var( 'paged' ) ) . '</strong></li>';

			} elseif ( $query->is_search() ) {
				$this->add_render_attribute(
					array(
						'breadcrumbs-item-search'       => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
								'grstbcmb-breadcrumbs-item-current-' . get_search_query(),
							),
						),
						'breadcrumbs-item-search-crumb' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-crumb',
								'grstbcmb-breadcrumbs-crumb-current',
								'grstbcmb-breadcrumbs-crumb-current-' . get_search_query(),
							),
							'title' => esc_html__( 'Search results for:', 'bwd-elementor-addons' ) . ' ' . get_search_query(),
						),
					)
				);
				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-search' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-search-crumb' ) ) . '>' . esc_html__( 'Search results for:', 'bwd-elementor-addons' ) . ' ' . get_search_query() . '</strong></li>';
			} elseif ( $query->is_home() ) {
				$blog_label = 'Blog';
				if ( $blog_label ) {
					$this->add_render_attribute(
						array(
							'breadcrumbs-item-blog' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-item',
									'grstbcmb-breadcrumbs-item-current',
								),
							),
							'breadcrumbs-item-blog-crumb' => array(
								'class' => array(
									'grstbcmb-breadcrumbs-crumb',
									'grstbcmb-breadcrumbs-crumb-current',
								),
								'title' => $blog_label,
							),
						)
					);
					echo '<li id="_id_ferdaussk" ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-blog' ) ) . '><strong ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-blog-crumb' ) ) . '>' . esc_html( $blog_label ) . '</strong></li>';
				}
			} elseif ( $query->is_404() ) {
				$this->add_render_attribute(
					array(
						'breadcrumbs-item-error' => array(
							'class' => array(
								'grstbcmb-breadcrumbs-item',
								'grstbcmb-breadcrumbs-item-current',
							),
						),
					)
				);
				// 404 page
				echo '<li ' . wp_kses_post( $this->get_render_attribute_string( 'breadcrumbs-item-error' ) ) . '>' . esc_html__( 'Error 404', 'bwd-elementor-addons' ) . '</li>';
			}
			echo '</ul>';
		}
	}
	
	protected function get_separator() {
		$settings = $this->get_settings_for_display();
		ob_start();
		if ( 'icon' === $settings['separator_type'] ) {
			if ( ! isset( $settings['separator_icon'] ) && ! Icons_Manager::is_migration_allowed() ) {
				// add old default
				$settings['separator_icon'] = 'fa fa-angle-right';
			}
			$has_icon = ! empty( $settings['separator_icon'] );
			if ( $has_icon ) {
				$this->add_render_attribute( 'separator-icon', 'class', esc_attr($settings['separator_icon']) );
				$this->add_render_attribute( 'separator-icon', 'aria-hidden', 'true' );
			}
			if ( ! $has_icon && ! empty( $settings['select_separator_icon']['value'] ) ) {
				$has_icon = true;
			}
			$migrated = isset( $settings['__fa4_migrated']['select_separator_icon'] );
			$is_new   = ! isset( $settings['separator_icon'] ) && Icons_Manager::is_migration_allowed();
			if ( $has_icon ) {
				?>
				<span class="grstbcmb-separator-icon grstbcmb-icon">
					<?php
					if ( $is_new || $migrated ) {
						Icons_Manager::render_icon( esc_attr($settings['select_separator_icon']), array( 'aria-hidden' => 'true' ) );
					} elseif ( ! empty( $settings['separator_icon'] ) ) {
						?>
						<i <?php echo wp_kses_post( $this->get_render_attribute_string( 'separator-icon' ) ); ?>></i>
						<?php
					}
					?>
					
				</span>
				<?php
			}
		} else {
			$this->add_inline_editing_attributes( 'separator_text' );
			$this->add_render_attribute( 'separator_text', 'class', 'grstbcmb-breadcrumbs-separator-text' );
			echo '<span ' . wp_kses_post( $this->get_render_attribute_string( 'separator_text' ) ) . '>' . esc_attr( $settings['separator_text'] ) . '</span>';
		}
		$separator = ob_get_contents();
		ob_end_clean();
		return $separator;
	}

	protected function render_separator( $output = true ) {
		$settings = $this->get_settings_for_display();
		$html  = '<li class="grstbcmb-breadcrumbs-separator">';
		$html .= $this->get_separator();
		$html .= '</li>';
		if ( true === $output ) {
			\Elementor\Utils::print_unescaped_internal_string( $html );
			return;
		}
		return $html;
	}

	protected function render_home_link() {
		$settings = $this->get_settings_for_display();
		$this->add_render_attribute(
			array(
				'home_item' => array(
					'class' => array(
						'grstbcmb-breadcrumbs-item',
						'grstbcmb-breadcrumbs-item-home',
					),
				),
				'home_link' => array(
					'class' => array(
						'grstbcmb-breadcrumbs-crumb',
						'grstbcmb-breadcrumbs-crumb-link',
						'grstbcmb-breadcrumbs-crumb-home',
					),
					'href'  => get_home_url(),
					'title' => $settings['home_text'],
				),
				'home_text' => array(
					'class' => array(
						'grstbcmb-breadcrumbs-text',
					),
				),
			)
		);

		if ( ! isset( $settings['home_icon'] ) && ! Icons_Manager::is_migration_allowed() ) {
			$settings['home_icon'] = 'fa fa-home';
		}

		$has_home_icon = ! empty( $settings['home_icon'] );
		if ( $has_home_icon ) {
			$this->add_render_attribute( 'i', 'class', esc_attr($settings['home_icon']) );
			$this->add_render_attribute( 'i', 'aria-hidden', 'true' );
		}
		if ( ! $has_home_icon && ! empty( $settings['select_home_icon']['value'] ) ) {
			$has_home_icon = true;
		}
		$migrated_home_icon = isset( $settings['__fa4_migrated']['select_home_icon'] );
		$is_new_home_icon   = ! isset( $settings['home_icon'] ) && Icons_Manager::is_migration_allowed();
		?>
		<li <?php echo wp_kses_post( $this->get_render_attribute_string( 'home_item' ) ); ?>>
			<a <?php echo wp_kses_post( $this->get_render_attribute_string( 'home_link' ) ); ?>>
				<span <?php echo wp_kses_post( $this->get_render_attribute_string( 'home_text' ) ); ?>>
					<?php if ( ! empty( $settings['home_icon'] ) || ( ! empty( $settings['select_home_icon']['value'] ) && $is_new_home_icon ) ) { ?>
						<span class="grstbcmb-icon">
							<?php
							if ( $is_new_home_icon || $migrated_home_icon ) {
								Icons_Manager::render_icon( $settings['select_home_icon'], array( 'aria-hidden' => 'true' ) );
							} elseif ( ! empty( $settings['home_icon'] ) ) {
								?>
								<i <?php echo wp_kses_post( $this->get_render_attribute_string( 'i' ) ); ?>></i>
								<?php
							}
							?>
						</span>
					<?php } ?>
					<?php echo esc_attr( $settings['home_text'] ); ?>
				</span>
			</a>
		</li>
		<?php
		$this->render_separator();
	}
}
