<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDFGfilterable extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameFilterableGallery', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Filterable Gallery', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}
	


	protected function register_controls() {
		$this->start_controls_section(
			'bwdfg_filterable_content_basic_settings',
			[
				'label' => esc_html__( 'Filterable Gallery Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdfg_style_selection',
			[
				'label' => esc_html__( 'Filterable Gallery Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style 3 Masking (PRO)', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Style 4 Masking (PRO)', 'bwd-elementor-addons' ),
					'style5' => esc_html__( 'Style 5 Masking (PRO)', 'bwd-elementor-addons' ),
					'style6' => esc_html__( 'Style 6 Masking (PRO)', 'bwd-elementor-addons' ),
					'style7' => esc_html__( 'Style 7 Masking (PRO)', 'bwd-elementor-addons' ),
					'style8' => esc_html__( 'Style 8 Masking (PRO)', 'bwd-elementor-addons' ),
					'style9' => esc_html__( 'Style 9 Masking (PRO)', 'bwd-elementor-addons' ),
					'style10' => esc_html__( 'Style 10 Masking (PRO)', 'bwd-elementor-addons' ),
					'style11' => esc_html__( 'Style 11 Masking (PRO)', 'bwd-elementor-addons' ),
					'style12' => esc_html__( 'Style 12 Masking (PRO)', 'bwd-elementor-addons' ),
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/filterable-gallery/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdfg_column_check',
			[
				'label' => esc_html__( 'Column', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'column_default',
				'options' => [
					'column_default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'column_three' => esc_html__( 'Column Three', 'bwd-elementor-addons' ),
					'column_two' => esc_html__( 'Column Two', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_enable_filter',
			[
				'label' => __( 'Show Filter', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'bwd-elementor-addons' ),
				'label_off' => __( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_filterable_content_section',
			[
				'label' => esc_html__( 'Filterable Item', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'bwdfg_filterable_all_enable_filter' => 'yes',
				]
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item',
			[
				'label' => esc_html__( 'All Item', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('All', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdfg_filterable_item_name',
			[
				'label' => esc_html__( 'Item Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Development', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdfg_filterable_item_id',
			[
				'label' => esc_html__( 'Item ID', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'bwdfg_total_box',
			[
				'label' => esc_html__( 'Filterable Gallery Items', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdfg_total_box_title_one' => esc_html__( 'Filterable Gallery #1', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_title' => esc_html__( 'Filterable Gallery #2', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_title' => esc_html__( 'Filterable Gallery #3', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_title' => esc_html__( 'Filterable Gallery #4', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdfg_total_box_title }}}',
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'bwdfg_filterable_content_section_image',
			[
				'label' => esc_html__( 'Filterable Images', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$image_repeater = new \Elementor\Repeater();

		$image_repeater->add_control(
			'bwdfg_filterable_iamge_for_gallery',
			[
				'label' => esc_html__( 'Item ID', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('item', 'bwd-elementor-addons'),
				'description' => esc_html__('Copy from Filterable Item', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$image_repeater->add_control(
			'bwdfg_filterable_item_image_name',
			[
				'label' => esc_html__( 'Item Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Programming', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$image_repeater->add_control(
			'bwdfg_image_profile_image_image',
			[
				'label' => esc_html__( 'Choose Profile', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);

		$this->add_control(
			'bwdfg_total_box_image',
			[
				'label' => esc_html__( 'Filterable Gallery Boxes', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $image_repeater->get_controls(),
				'default' => [
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #1', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #2', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #3', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #4', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #5', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #6', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #7', 'bwd-elementor-addons' ),
					],
					[
						'bwdfg_total_box_image_pic' => esc_html__( 'Filterable Gallery #8', 'bwd-elementor-addons' ),
					],
				],
				'image_field' => '{{{ bwdfg_total_box_image_pic }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_gallery_item_style_section',
			[
				'label' => esc_html__( 'Gallery Item', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover
		$this->start_controls_tabs(
			'bwdfg_filterable_all_item_title_style_tabsxs'
		);

		$this->start_controls_tab(
			'bwdfg_filterable_all_item_title_style_normal_tabxx',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_typography',
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div',
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_quote_active_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class div' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_div_active_background',
			[
				'label' => esc_html__( 'Active Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_div_hoveraaaa_sssssbackground',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div',
			]
		);
		$this->add_responsive_control(
            'bwdfg_filterable_all_item_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-my-commonsk-class div' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();

		$this->start_controls_tab(
			'bwdfg_filterable_all_item_title_style_hover_tabaa',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_hover_typography',
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div:hover',
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_active_right_colorss',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active :hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_content_quote_right_colorss',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class div:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_item_div_hover_active_background',
			[
				'label' => esc_html__( 'Active Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-my-commonsk-class .active:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_filterable_all_item_div_hoveraaaa_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdfg-my-commonsk-class div:hover',
			]
		);
		$this->add_responsive_control(
            'bwdfg_filterable_all_item_hover_border_radius',
            [
                'label' => esc_html__('Hover Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', 'vh', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-my-commonsk-class div:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end

		$this->add_control(
			'bwdfg_filterable_all_items_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdfg_filterable_all_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'filter_left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'filter_center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'right',
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_gallery_info_style_section',
			[
				'label' => esc_html__( 'Gallery Image', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdfg_filterable_all_info_u_typography',
				'selector' => '{{WRAPPER}} div.bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content a .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-box-content .bwdfg-filter-heading',
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_info_u_content_quote_right_color',
			[
				'label' => esc_html__( 'Title Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} div.bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content a .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-content .bwdfg-filter-heading, {{WRAPPER}} .bwdfg-box-content .bwdfg-filter-heading' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdfg_filterable_all_info_u_div_active_background',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdfg-gallery-wrapper .bwdfg-content-box::before, {{WRAPPER}} .bwdfg-gallery-wrapper:hover:before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_filterable_all_info_u_div_hover4_4background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwdfg-gallery-item:before, {{WRAPPER}} .bwdfg-gallery-item:after, {{WRAPPER}} .bwdfg-gallery-thumb:after, {{WRAPPER}} .bwdfg-gallery-thumb:before, {{WRAPPER}} .bwdfg-my-commonsk-class div, {{WRAPPER}} .bwdfg-gallery-wrapper:before',
			]
		);
		$this->add_responsive_control(
            'bwdfg_filterable_all_info_u_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-gallery-thumb img, {{WRAPPER}} .bwdfg-gallery-wrapper:hover .bwdfg-content-box::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'bwdfg_filterable__the_social_icon_size',
			[
				'label' => esc_html__( 'Image Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} img, {{WRAPPER}} .bwdfg-single-gallery img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bwdfg_filterable_all_info_u_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdfg_filterable_all_info_u_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'filter_left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'filter_center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'right',
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdfg_gallery_style_section',
			[
				'label' => esc_html__( 'Gallery Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdfg_gallery_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => ['gradient' ],
				'selector' => '{{WRAPPER}} .bwdfg-gallery-filtering-common',
			]
		);
		$this->add_responsive_control(
            'bwdfg_gallery_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-gallery-filtering-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdfg_gallery_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdfg-gallery-filtering-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$the_class_one = esc_attr('active', 'bwd-elementor-addons');
		$bwdfg_column_class = $settings['bwdfg_column_check'];
		if( $bwdfg_column_class === 'column_two') {
			$bwdfg_column = esc_attr('col-xl-6', 'bwd-elementor-addons');
			$bwdfg_column_lg = esc_attr('col-lg-6', 'bwd-elementor-addons');
		} elseif($bwdfg_column_class === 'column_three') {
			$bwdfg_column = esc_attr('col-xl-4', 'bwd-elementor-addons');
			$bwdfg_column_lg = esc_attr('col-lg-4', 'bwd-elementor-addons');
		} else{
			$bwdfg_column = esc_attr('col-xl-3', 'bwd-elementor-addons');
			$bwdfg_column_lg = esc_attr('col-lg-3', 'bwd-elementor-addons');
		}

		$bwdfg_item_align_class = $settings['bwdfg_filterable_all_items_align'];
		if( $bwdfg_item_align_class === 'filter_left') {
			$bwdfg_filter_item = esc_attr('justify-content-start', 'bwd-elementor-addons');
			$bwdfg_filter_item_one = esc_attr('text-align: left;', 'bwd-elementor-addons');
		} elseif($bwdfg_item_align_class === 'filter_center') {
			$bwdfg_filter_item = esc_attr('justify-content-center', 'bwd-elementor-addons');
			$bwdfg_filter_item_one = esc_attr('text-align: center;', 'bwd-elementor-addons');
		} else{
			$bwdfg_filter_item = esc_attr('justify-content-end', 'bwd-elementor-addons');
			$bwdfg_filter_item_one = esc_attr('text-align: right;', 'bwd-elementor-addons');
		}
			if('style1' == $settings['bwdfg_style_selection'] || 'style2' == $settings['bwdfg_style_selection']){
        if('style1' === $settings['bwdfg_style_selection']){
				?>
			<div class="bwdfg-gallery-filtering-one bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu pb-40 bwdfg-my-commonsk-class" style="<?php echo esc_attr($bwdfg_filter_item_one); ?>">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo esc_attr($the_class_one); ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . esc_attr($bwdfg_column) .' '. esc_attr($bwdfg_column_lg) .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-gallery-wrapper mb-30">
								<div class="bwdfg-gallery-thumb">
									<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>"><img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty"></a>
								</div>
								<div class="bwdfg-content-box">
									<div class="bwdfg-content">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image">
											<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
			<div class="bwdfg-popup-overlay">
				<div class="bwdfg-popup-container">
					<img src="" alt="Popup Image" class="bwdfg-popup-image">
					<span class="bwdfg-popup-close">&times;</span>
				</div>
			</div>
		<?php
        } elseif('style2' === $settings['bwdfg_style_selection']){
            ?>
			<div class="bwdfg-our-gallery-two bwdfg-gallery-filtering-common">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="bwdfg-gallery-menu-two pb-40 d-flex bwdfg-my-commonsk-class  <?php echo esc_attr($bwdfg_filter_item); ?>">
							<?php
							if('yes' === $settings['bwdfg_filterable_all_enable_filter']){
							?>
								<div class="bwdfg-menu-item <?php echo esc_attr($the_class_one); ?>" data-filter="*"><?php echo esc_html($settings['bwdfg_filterable_all_item']); ?></div>
							<?php
							}
							if ( $settings['bwdfg_total_box'] ) {
								foreach (  $settings['bwdfg_total_box'] as $item_title ) {
								echo '<div class="bwdfg-menu-item elementor-repeater-item-' . esc_attr( $item_title['_id'] ) . '" data-filter="'. esc_attr( $item_title['bwdfg_filterable_item_id'] ) .'">'; ?><?php echo esc_html($item_title['bwdfg_filterable_item_name']); ?></div>
							<?php
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="row bwdfg-grid-two bwdfg-grid-common">
						<?php
						if ( $settings['bwdfg_total_box_image'] ) {
							foreach (  $settings['bwdfg_total_box_image'] as $item ) {
						echo '<div class="' . esc_attr($bwdfg_column) .' '. esc_attr($bwdfg_column_lg) .' col-md-4 col-sm-6 bwdfg-grid-item bwdfg-img-galleryItem-active  '. esc_attr( $item['bwdfg_filterable_iamge_for_gallery'] ) .' elementor-repeater-image-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwdfg-single-gallery snake mb-30">
								<img src="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" alt="Image Empty">
								<div class="overlay">
									<div class="bwdfg-content">
										<a href="<?php echo esc_url($item['bwdfg_image_profile_image_image']['url']); ?>" class="bwdfg-popup-image">
											<div class="bwdfg-filter-heading"><?php echo esc_html($item['bwdfg_filterable_item_image_name']); ?></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
			<div class="bwdfg-popup-overlay">
				<div class="bwdfg-popup-container">
					<img src="" alt="Popup Image" class="bwdfg-popup-image">
					<span class="bwdfg-popup-close">&times;</span>
				</div>
			</div>
		<?php
        }
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
	}
}
