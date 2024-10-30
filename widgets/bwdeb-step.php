<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDASAwesomeStep extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbasawesomestep';
	}

	public function get_title() {
		return esc_html__( 'Awesome Step', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'icon-steps bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'step', 'arrow', 'awesome step', 'bwd' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdas_step_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdas-awesome-step_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
                'description' => esc_html__( 'If you use more than 5 items in a section should be used content section width full for better experience.', 'bwd-elementor-addons' ),
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/awesome-step/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
        $this->add_responsive_control(
			'bwdas_column_layout',
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
                    'unlimitedstep' => esc_html__( 'Unlimited Step', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'bwdas-grid%s-'
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
			'bwdas_step_content_style',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdas_step_content_number', [
				'label' => esc_html__( 'Step Number', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_number_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-num' => 'color: {{VALUE}}',
				],
			]
		);
    
		$repeater->add_control(
			'bwdas_step_content_title', [
				'label' => esc_html__( 'Step Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-main-title' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-main-title ' => 'color: {{VALUE}} ',
				],
			]
		);
		$repeater->add_control(
			'bwdas_step_content_description', [
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-content .bwd-description' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-content .bwd-description' => 'color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-cogs',
					'library' => 'solid',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon svg' => 'color: {{VALUE}}; fill: {{VALUE}};',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_icon_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-icon i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-wrapper:hover .bwd-step-icon svg' => 'color: {{VALUE}}; fill: {{VALUE}};',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_icon_number_background',
			[
				'label' => esc_html__( 'Icon Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'description' => esc_html__( 'Icon bg color will be applicable in which bg color has available.', 'bwd-elementor-addons' ),
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-num, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bg, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num-bg' => 'background-color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_content_shape_background_title',
			[
				'label' => esc_html__( 'Shape Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_content_shape_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
                'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num-gbl, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num-gbla::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-num-gblb::before',
			]
		);
        $repeater->add_control(
			'bwdas_step_content_box_background_title',
			[
				'label' => esc_html__( 'Box Bg', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
        $repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_content_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
                'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-bg-box, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-bg-boxb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-bg-boxa::after',
			]
		);
        $repeater->add_control(
			'bwdas_step_icon_number_border_color',
			[
				'label' => esc_html__( 'All Visible Border Color', 'bwd-elementor-addons' ),
				'description' => esc_html__( 'Some styles have borders it will be applicable only for those.', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-num, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numb::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numa::after' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bortrans::before' => 'border-top-color: {{VALUE}}; border-left-color: {{VALUE}}; border-right-color: transparent; border-bottom-color: transparent;',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bortrans' => 'border-top-color: transparent; border-left-color: {{VALUE}}; border-right-color: transparent; border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-bortransparent' => 'border-top-color: {{VALUE}}; border-left-color: transparent; border-right-color: {{VALUE}}; border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-borritrans' => 'border-top-color: {{VALUE}}; border-left-color: {{VALUE}}; border-right-color: transparent; border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numa::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwd-step-icon-numback::before' => 'background-color: {{VALUE}}',
				],
			]
		);
        $repeater->add_control(
			'bwdas_step_arrow_show_hide',
			[
				'label' => esc_html__( 'Forward Backward Option', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'If arrow has available',
				'label_on' => esc_html__( 'On', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Off', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
                'default' => 'no',
			]
		);
        $repeater->add_control(
			'bwdas_step_arrow_on_off',
			[
				'label' => esc_html__( 'Show Arrow', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'If arrow has available',
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
                'default' => 'yes',
			]
		);
        $this->add_control(
			'bwdas_step_content_repeater_list',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
				
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					
					[
						'bwdas_step_content_number' => esc_html__( '1', 'bwd-elementor-addons' ),
						'bwdas_step_content_title' => esc_html__( 'Title #1', 'bwd-elementor-addons' ),
						'bwdas_step_content_description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur. Dolorum dolor repudiandae quidem facilis corrupti odit!' ),
					],
					[
						'bwdas_step_content_number' => esc_html__( '2', 'bwd-elementor-addons' ),
						'bwdas_step_content_title' => esc_html__( 'Title #2', 'bwd-elementor-addons' ),
						'bwdas_step_content_description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur. Dolorum dolor repudiandae quidem facilis corrupti odit!' ),
					],
					[
						'bwdas_step_content_number' => esc_html__( '3', 'bwd-elementor-addons' ),
						'bwdas_step_content_title' => esc_html__( 'Title #3', 'bwd-elementor-addons' ),
						'bwdas_step_content_description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur. Dolorum dolor repudiandae quidem facilis corrupti odit!' ),
					],
				],
				'title_field' => '{{{ bwdas_step_content_title }}}',
                
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
			'bwdas_step_style',
		    [
		        'label' => esc_html__('Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdas_step_content_number_typography',
                'label' => esc_html__('Number Typography','bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .bwd-step-num',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdas_step_content_title_typography',
                'label' => esc_html__('Title Typography','bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .bwd-step-main-title',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdas_step_content_description_typography',
                'label' => esc_html__('Description Typography','bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .bwd-step-content .bwd-description',
			]
		);
        $this->add_responsive_control(
			'bwdas_step_content_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwd-step-icon svg' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdas_step_content_item_box_padding',
			[
				'label' => esc_html__( 'Box Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-bg-box, {{WRAPPER}} .bwd-step-bg-boxb' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
				],
			]
		);
        $this->start_controls_tabs(
			'bwdas_step_style_tabs'
		);
        $this->start_controls_tab(
			'bwdas_step_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_style_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-step-style',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdas_step_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-step-style',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdas_step_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-step-style',
			]
		);
        $this->add_responsive_control(
			'bwdas_step_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-style' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'bwdas_step_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-step-style' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_tab();
        $this->start_controls_tab(
			'bwdas_step_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdas_step_style_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-step-style:hover',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdas_step_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-step-style:hover',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdas_step_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-step-style:hover',
			]
		);
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $styles = $settings['bwdas-awesome-step_style'];

		include 'awesome-step/condition.php';

		if($settings['bwdas-awesome-step_style'] == 'style1' || $settings['bwdas-awesome-step_style'] == 'style2'){
			if ( $styles ) { ?>
				<div class="bwd-step-style bwd-step-<?php echo esc_attr($styles); ?>">
					<div class="bwd-container-fluid">
						<div class="bwd-row"> <?php   
							if( $settings['bwdas_step_content_repeater_list'] ) {
								foreach( $settings['bwdas_step_content_repeater_list'] as $item ) { ?>
								<div class="bwd-col-lg-4 bwd-col-md-6 bwd-col-sm-6 column_number">
									<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
										<div class="bwd-step-wrapper <?php echo esc_attr($stepWrapperF . $stepBgBoxSix . $stepWrapperTw . $stepWrapperET . $stepWrapperNT . $stepWrapperTh); ?>">
										<?php
										$stepShadow = ['style27'];
										if( in_array($styles, $stepShadow) ){ ?>
											<div class="bwd-step-shaddow bwd-shape-shadow"></div>
										<?php }
										$stepShapeAR = ['style30'];
										if( in_array($styles, $stepShapeAR) ){ ?>
											<div class="bwd-step-shape bwd-step-icon-bortrans bwd-step-icon-numback"></div>
										<?php } ?>
											<div class="bwd-step-item <?php echo esc_attr($stepBgBoxF . $stepBgBoxS . $stepBgBoxFi . $stepItemF . $stepBgBoxEi . $stepBgBoxN . $stepBgBoxTen . $stepBgBoxTw . $stepBgBoxTh . $stepBgBoxFT . $stepBgBoxTWF . $stepBgBoxTWS . $stepBgBoxTh . $stepItemTHO); ?> <?php if ('yes' === $item['bwdas_step_arrow_show_hide']){echo 'bwdas_arrow_dir';} ?>">

												<?php $stepShape = ['style24'];
												if( in_array($styles, $stepShape) ){ ?>
													<div class="bwd-step-shape <?php echo esc_attr($stepShapeTF);?>"></div>
												<?php } $stepIcon = ['style7', 'style9', 'style19', 'style20', 'style23', 'style24', 'style26', 'style28', 'style30', 'style31'];
												if( !in_array($styles, $stepIcon) ){
													include 'awesome-step/step-icon.php';
												} ?>
												<div class="bwd-step-content <?php echo esc_attr($stepContentF . $stepBgBoxT . $stepBgBoxSev . $stepBgBoxTWT); ?> <?php if ('yes' !== $item['bwdas_step_arrow_on_off']){echo 'bwdas_arrow_show';} ?>">
													<?php
													if( in_array($styles, $stepIcon) ){
														include 'awesome-step/step-icon.php';
													}
													$stepNumber = ['style7', 'style8', 'style9', 'style10', 'style14', 'style17', 'style18', 'style19', 'style20', 'style26', 'style31'];
													$showArrow = ['style4', 'style5', 'style18'];
													if( in_array($styles, $showArrow) ){ ?>
														<div class="show-arrow <?php echo esc_attr($stepNumT); ?>"></div>
													<?php }
													if( !in_array($styles, $stepNumber) ){
														include 'awesome-step/step-number.php';
													} ?>
													<div class="bwd-step-title bwd-step-main-title"><?php echo esc_html($item['bwdas_step_content_title']); ?></div>
													<div class="bwd-description"><?php echo esc_html($item['bwdas_step_content_description']); ?></div>
												</div>
												<?php if( in_array($styles, $stepNumber) ){
													include 'awesome-step/step-number.php';
												} ?>
											</div>
										</div>
									</div>
								</div>
							<?php } } ?>
						</div>
					</div>
				</div> <?php
			}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
    }
}