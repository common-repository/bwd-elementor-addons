<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_TBTTheBestTestimonials extends Widget_Base {

	public function get_name() {
		return esc_html__('bwdtbtTestimonials', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Testimonials', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-testimonial';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'tbt_content_selection',
			[
				'label' => esc_html__( 'Testimonial Contents', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'tbt_style_selection',
			[
				'label' => esc_html__( 'Testimonial Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2'  => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/testimonial" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'tbt_testimonial_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'tbt_testimonial_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .tbt-slide-area-box-shadow',
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'tbt_image_profile_image',
			[
				'label' => esc_html__( 'Choose Profile', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'tbt_team_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_name',
			[
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('JHON DOE', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_box_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-title',
			]
		);
		$repeater->add_control(
			'tbt_content_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tbt-testimonial-one {{CURRENT_ITEM}} .tbt-client-title' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_name_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-client-title' => 'color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'tbt_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_designation_switcher',
			[
				'label' => esc_html__( 'Show Designation', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'tbt_content_designation', [
				'label' => esc_html__( 'Designation', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Developer' , 'bwd-elementor-addons' ),
				'show_label' => false,
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_box_TEXTAREA_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} span',
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_designation_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} span' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_designation_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover span' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_designation_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_description', [
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, laborum laudantium. Eligendi repellat quis...' , 'bwd-elementor-addons' ),
				'show_label' => false,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_box_WYSIWYG_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-comment',
			]
		);
		$repeater->add_control(
			'tbt_content_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-comment' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'tbt_content_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-client-comment' => 'color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'tbt_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_star_rating_number', [
				'label' => esc_html__( 'Star Rating', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 5,
				'default' => 4,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'tbt_content_star_rating_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-rating' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_responsive_control(
			'tbt_content_star_rating_number_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-rating-wrapper .tbt_testimonials_star_rating' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_k',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_right_icon_switcher',
			[
				'label' => esc_html__( 'Right Icon Type (If Has)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$repeater->add_control(
			'tbt_content_icon_right',
			[
				'label' => esc_html__( 'Icon Right', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-right',
					'library' => 'solid',
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-bottom-q' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-quote' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_right_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-bottom-q' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-quote' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'tbt_testimonial_the_box_right_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-bottom-q' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-quote' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'tbt_content_right_icon_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_f',
			[
				'type' => Controls_Manager::DIVIDER, 
			]
		);

		$repeater->add_control(
			'tbt_content_left_icon_switcher',
			[
				'label' => esc_html__( 'Left Icon Type (If Has)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$repeater->add_control(
			'tbt_content_icon_left',
			[
				'label' => esc_html__( 'Icon Left', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-left',
					'library' => 'solid',
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_left_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-left-icon-tbt' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_quote_left_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-left-icon-tbt' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);
		$repeater->add_responsive_control(
			'tbt_testimonial_the_box_left_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-left-icon-tbt' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'tbt_content_left_icon_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_testimonials_sk_g',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_publish_date_switcher',
			[
				'label' => esc_html__( 'Publish Date', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$repeater->add_control(
			'tbt_testimonials_due_date',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'tbt_due_date_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .tbt-date',
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-date' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-date:hover' => 'color: {{VALUE}}'
				],
				'condition' => [
					'tbt_content_publish_date_switcher' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_e',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_box_bg_color',
			[
				'label' => esc_html__( 'Box Bg', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .slick-list.draggable' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_box_bg_hover_color',
			[
				'label' => esc_html__( 'Hover Box Bg', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .slick-list.draggable' => 'background-color: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'tbt_team_h',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_bg_color',
			[
				'label' => esc_html__( 'Content Bg', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'tbt_content_bg_hover_color',
			[
				'label' => esc_html__( 'Hover Content Bg', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}:hover .tbt-testi-desc' => 'background-color: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'tbt_team_i',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'tbt_content_extra_shape_switcher',
			[
				'label' => esc_html__( 'Extra Shape (If Has)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'tbt_content_extra_shape_color',
			[
				'label' => esc_html__( 'Extra Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-client-img-shape::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .tbt-testi-desc .tbt-quote' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .slick-list.draggable' => 'background: {{VALUE}}',
				],
				'condition' => [
					'tbt_content_extra_shape_switcher' => 'yes',
				],
			]
		);

		$this->add_control(
			'tbt_total_box',
			[
				'label' => esc_html__( 'Testimonial Boxes', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #1', 'bwd-elementor-addons' ),
					],
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #2', 'bwd-elementor-addons' ),
					],
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #3', 'bwd-elementor-addons' ),
					],
					[
						'tbt_total_box_title' => esc_html__( 'Testimonial #4', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ tbt_total_box_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'tbt_testimonial_style_section',
			[
				'label' => esc_html__( 'Testimonial Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'tbt_testimonial_section_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .tbt-background-box',
			]
		);
		$this->add_responsive_control(
            'tbt_testimonial_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'tbt_testimonial_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'tbt_testimonial_the_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .tbt-background-box .tbt-testimonial-item-wrapper .tbt-testimonial-item' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();



		$this->start_controls_section(
			'bwdtbt_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdtbt-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', 'bwd-elementor-addons' ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdtbt_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdtbt_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdtbt_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'bwdtbt_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'bwdtbt_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdtbt_aupoplay_popover',
			[
				'label' => esc_html__( 'More Controlls', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdtbt_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdtbt_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdtbt_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdtbt_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdtbt_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdtbt_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdtbt_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'text'  => esc_html__( 'Text', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdtbt_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdtbt_nav_type' => 'icon',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdtbt_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdtbt_nav_type' => 'icon',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdtbt_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdtbt_nav_type' => 'text',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdtbt_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdtbt_nav_type' => 'text',
						'bwdtbt_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdtbt_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdtbt_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdtbt_dots_type',
				[
					'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', 'bwd-elementor-addons' ),
						'numbers'  => esc_html__( 'Numbers', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdtbt_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdtbt_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', 'bwd-elementor-addons' ),
						'bwdtbt_dots1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
						'bwdtbt_dots2'  => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
						'bwdtbt_dots3'  => esc_html__( 'Style 3', 'bwd-elementor-addons' ),
						'bwdtbt_dots4'  => esc_html__( 'Style 4', 'bwd-elementor-addons' ),
						'bwdtbt_dots5'  => esc_html__( 'Style 5', 'bwd-elementor-addons' ),
						'bwdtbt_dots6'  => esc_html__( 'Style 6', 'bwd-elementor-addons' ),
						'bwdtbt_dots7'  => esc_html__( 'Style 7', 'bwd-elementor-addons' ),
						'bwdtbt_dots8'  => esc_html__( 'Style 8', 'bwd-elementor-addons' ),
						'bwdtbt_dots9'  => esc_html__( 'Style 9', 'bwd-elementor-addons' ),
						'bwdtbt_dots10'  => esc_html__( 'Style 10', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdtbt_dots_switcher' => 'yes',
						'bwdtbt_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();


		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();

		// for-owl-carousel-start
		$bwdtbt_slide_margin = $settings['bwdtbt_slide_margin'];
		$bwdtbt_slide_mobile_view = $settings['bwdtbt_slide_mobile_view'];
		$bwdtbt_slide_tablet_view = $settings['bwdtbt_slide_tablet_view'];
		$bwdtbt_slide_desktop_view = $settings['bwdtbt_slide_desktop_view'];
		$bwdtbt_infinite_autoplay_switcher = $settings['bwdtbt_infinite_autoplay_switcher'];
		$bwdtbt_infinite_loop_switcher = $settings['bwdtbt_infinite_loop_switcher'];
		$bwdtbt_HoverPause_switcher = $settings['bwdtbt_HoverPause_switcher'];
		$bwdtbt_centermode_switcher = $settings['bwdtbt_centermode_switcher'];
		$bwdtbt_autoplay_timeout = $settings['bwdtbt_autoplay_timeout'];
		$bwdtbt_autoplay_speed = $settings['bwdtbt_autoplay_speed'];
		$bwdtbt_stace_padding = $settings['bwdtbt_stace_padding'];
		//nav--------------------------------------------------
		$bwdtbt_nav_switcher = $settings['bwdtbt_nav_switcher'];
		$bwdtbt_nav_type = $settings['bwdtbt_nav_type'];

		if( $bwdtbt_nav_switcher == 'yes' ) {
			if( $bwdtbt_nav_type == 'icon' ) {
				$prev = $settings['bwdtbt_nav_prev_arrow']['value'];
				$next = $settings['bwdtbt_nav_next_arrow']['value'];
			} else if( $bwdtbt_nav_type == 'text' ) {
				$prev = $settings['bwdtbt_nav_prev_text'];
				$next = $settings['bwdtbt_nav_next_text'];
			} 
		}
		$bwdtbt_dots_switcher = $settings['bwdtbt_dots_switcher'];
		$bwdtbt_dots_type = $settings['bwdtbt_dots_type'];
		// for-owl-carousel-end
		if('style1' == $settings['tbt_style_selection'] || 'style2' == $settings['tbt_style_selection']){
		if('style1' === $settings['tbt_style_selection']){?>
			<div class="tbt-testimonial-two tbt-background-box bwdtbt-slider-common <?php echo esc_attr($settings['bwdtbt_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtbt-blogpost-custom-id'] ); ?>">
				<?php require 'tbt-variable.php' ; ?>
				<div class="container">
					<div class="tbt-testimonial-item-wrapper bwdtbt-owl bwdtbt-owl-carousel bwdtbt-owl-theme">
						<?php
						if ( $settings['tbt_total_box'] ) {
							foreach (  $settings['tbt_total_box'] as $item ) {
						echo '<div class="tbt-testimonial-item elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<i class="tbt-top-q tbt-left-icon-tbt <?php echo esc_html( $item['tbt_content_icon_left']['value'] ); ?>"></i>
							<div class="tbt-client-img">
							<img src="<?php echo esc_url($item['tbt_image_profile_image']['url']); ?>" alt="client img">
							</div>
							<div class="tbt-testi-desc">
								<p class="tbt-client-comment"><?php echo esc_html($item['tbt_content_description']); ?></p>
								<h4 class="tbt-client-title"><?php echo esc_html($item['tbt_content_name']); ?></h4>
								<?php
								if ( 'yes' === $item['tbt_content_designation_switcher'] ) {
									?>
								<span><?php echo esc_html($item['tbt_content_designation']); ?></span>
								<?php
								}
								?>
								<div class="tbt-rating-wrapper">
									<div class="tbt-rating tbt_testimonials_star_rating">
										<?php
										if(0 >= $item['tbt_content_star_rating_number']){
										} elseif(1 == $item['tbt_content_star_rating_number']){
											?>
										<i class="fas fa-star"></i>
										<?php
										} elseif(2 == $item['tbt_content_star_rating_number']){
											?>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<?php
											} elseif(3 == $item['tbt_content_star_rating_number']){
												?>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<?php
												} elseif(4 == $item['tbt_content_star_rating_number']){
													?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<?php
													} else {
														?>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<?php
														} 
										?>
									</div>
									<div class="tbt-rating-gray tbt_testimonials_star_rating">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
								</div>
								<?php
								if ( 'yes' === $item['tbt_content_publish_date_switcher'] ) {
									?>
								<div class="tbt-date"><?php echo esc_html($item['tbt_testimonials_due_date']); ?></div>
								<?php
								}
								?>
							</div>
							<!-- <i class="fas fa-quote-right tbt-bottom-q"></i> -->
							<i class="tbt-bottom-q <?php echo esc_attr( $item['tbt_content_icon_right']['value'] ); ?>"></i>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
			<?php
		} elseif ('style2' === $settings['tbt_style_selection']) {?>
			<div class="tbt-testimonial-one tbt-background-box bwdtbt-slider-common <?php echo esc_attr($settings['bwdtbt_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdtbt-blogpost-custom-id'] ); ?>">
				<?php require 'tbt-variable.php' ; ?>
				<div class="container">
					<div class="tbt-testimonial-item-wrapper bwdtbt-owl bwdtbt-owl-carousel bwdtbt-owl-theme">
					<?php
						if ( $settings['tbt_total_box'] ) {
							foreach (  $settings['tbt_total_box'] as $item ) {
						echo '<div class="tbt-testimonial-item elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="tbt-testi-desc">
								<p class="tbt-client-comment"><?php echo esc_html($item['tbt_content_description']); ?></p>
							</div>
							<div class="tbt-client-profile">
								<div class="tbt-client-img">
									<img src="<?php echo esc_url($item['tbt_image_profile_image']['url']); ?>" alt="client img">
								</div>
								<div class="tbt-client-bio">
									<h4 class="tbt-client-title"><?php echo esc_html($item['tbt_content_name']); ?></h4>
									<?php
									if ( 'yes' === $item['tbt_content_designation_switcher'] ) {
										?>
									<span><?php echo esc_html($item['tbt_content_designation']); ?></span>
									<?php
									}
									?>
									<div class="tbt-rating-wrapper">
										<div class="tbt-rating tbt_testimonials_star_rating">
											<?php
											if(0 >= $item['tbt_content_star_rating_number']){
											} elseif(1 == $item['tbt_content_star_rating_number']){
												?>
											<i class="fas fa-star"></i>
											<?php
											} elseif(2 == $item['tbt_content_star_rating_number']){
												?>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<?php
												} elseif(3 == $item['tbt_content_star_rating_number']){
													?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<?php
													} elseif(4 == $item['tbt_content_star_rating_number']){
														?>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<?php
														} else {
															?>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<?php
															} 
											?>
										</div>
										<div class="tbt-rating-gray tbt_testimonials_star_rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</div>
									</div>
								</div>
							</div>
							<?php
							if ( 'yes' === $item['tbt_content_publish_date_switcher'] ) {
								?>
							<div class="tbt-date"><?php echo esc_html($item['tbt_testimonials_due_date']); ?></div>
							<?php
							}
							?>
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
