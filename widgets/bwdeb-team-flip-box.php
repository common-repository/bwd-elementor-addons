<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDTeamFlipBox extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameTeamFlipBox', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Team Flip Box', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle team-flip';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_script_depends() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdff_text_content_section',
			[
				'label' => esc_html__( 'Team Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdff_style_selection',
			[
				'label' => esc_html__( 'Team Styles', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/service-flip-box" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdff_team_column',
			[
				'label' => esc_html__( 'Column', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '3',
				'options' => [
					'4' => esc_html__( '4', 'bwd-elementor-addons' ),
					'3' => esc_html__( '3', 'bwd-elementor-addons' ),
					'2' => esc_html__( '2', 'bwd-elementor-addons' ),
					'1' => esc_html__( '1', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdff_team_box_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'center'  => esc_html__( 'Center', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdff_team_content_width',
			[
				'label' => esc_html__( 'Content Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'boxed',
				'options' => [
					'boxed' => esc_html__( 'Boxed', 'bwd-elementor-addons' ),
					'full_width' => esc_html__( 'Full Width', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdff_flipflop_content_team_box_section',
			[
				'label' => esc_html__( 'Content Boxes', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		// Hover control start
		$repeater->start_controls_tabs(
			'bwd_team_icon_box_style_tabs01s'
		);
		$repeater->start_controls_tab(
			'bwd_team_icon_box_background_normal_tab01s',
			[
				'label' => esc_html__( 'Font View', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'bwdff_team_profile_image',
			[
			  'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
			  'type' => Controls_Manager::MEDIA,
			  'default' => [
				'url' => plugin_dir_url(__DIR__) . 'assets/public/img/bwd-placeholder.jpg',
			  ],
			]
		);

		$repeater->add_control(
			'bwdff_font_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
			'bwdff_font_compare_the_box_border_back',
			[
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'rem', 'em', '%'],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-font-border-cmn' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdff_font_flipflop_box_border_color_back',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-team-img::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-team-img, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-font-border-cmn' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_font_border_back_style_view',
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
		$repeater->add_responsive_control(
            'bwdff_font_border_back_style_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-front-content .bwdff-team-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$repeater->add_control(
			'bwdff_font_flipflop_border_divider2',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdff_font_flipflop_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-front-content',
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_font_border_divider222',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_icon_font_bg_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
				'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-team-img' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-content-shape-cmn, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-front .bwdff-content-shape-cmn-b, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-front .bwdff-content-shape-cmn-a' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_icon_font_bg_another_shape_color',
			[
				'label' => esc_html__( 'Another Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-team-img' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_team_font_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-team-img, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-front .bwdff-team-item-cmn-bio-bg,',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'bwd_icon_box_background_hover_tab01s',
			[
				'label' => esc_html__( 'Back View', 'bwd-elementor-addons' ),
			]
		);
		// Back Controls
		$repeater->add_control(
			'bwdff_box_name', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'JHON DOE' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdff_box_name_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_icon_back_bg_name_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdff_title_shadow',
				'label' => esc_html__( 'Title Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_box_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-name, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-name',
			]
		);
		
		$repeater->add_control(
			'bwdff_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_box_designation', [
				'label' => esc_html__( 'Designation', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Web Developer' , 'bwd-elementor-addons' ),
				'show_label' => false,
			]
		);
		$repeater->add_control(
			'bwdff_box_designation_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-post, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_box_designation_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-post, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdff_box_designation_shadow',
				'label' => esc_html__( 'Title Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-post, {{SELECTOR}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdff_box_designation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-front .bwdff-team-front-content .bwdff-member-bio .bwdff-member-post, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-member-post',
			]
		);

		$repeater->add_control(
			'bwdff_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_one_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_one',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdff_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#3b5998',
				'condition' => [
					'bwdff_team_icon_type_one' => 'official',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_one' => 'official',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_one' => 'custom',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_one' => 'custom',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  .bwdff_social_media_one, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_one:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_one_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_one' => 'custom',
					'bwdff_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_e',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_two_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_two',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdff_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#00acee',
				'condition' => [
					'bwdff_team_icon_type_two' => 'official',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_two' => 'official',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_two' => 'custom',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_two' => 'custom',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_two:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_two_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_two' => 'custom',
					'bwdff_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_f',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_three_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_three',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdff_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#0077b5',
				'condition' => [
					'bwdff_team_icon_type_three' => 'official',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_three' => 'official',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_three' => 'custom',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_three' => 'custom',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_three:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_three_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_three' => 'custom',
					'bwdff_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_g',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_social_icon_four_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
				'condition' => [
					'bwdff_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_team_icon_type_four',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdff_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'red',
				'condition' => [
					'bwdff_team_icon_type_four' => 'official',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_four' => 'official',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_four' => 'custom',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwdff_team_icon_type_four' => 'custom',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons .bwdff_social_media_four:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_social_icon_four_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwdff_team_icon_type_four' => 'custom',
					'bwdff_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'bwdff_team_h',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
			'bwdff_team__the_social_icon_size',
			[
				'label' => esc_html__( 'Social Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff_social_media_one' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff_social_media_two' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff_social_media_three' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff_social_media_four' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdff_box_icon_background_color',
			[
				'label' => esc_html__( 'Icon Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a i' => 'background: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'bwdff_box_icon_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a i:hover' => 'background: {{VALUE}}'
				],
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_border_aadivider2',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
			'bwdff_compare_the_box_border_back',
			[
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'rem', 'em', '%'],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back' => 'border: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdff_flipflop_box_border_color_back',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-team-img, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-team-img, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-team-img, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio .bwdff-social-icons a i' => 'outline-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_border_back_style_back',
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
		$repeater->add_responsive_control(
            'bwdff_border_back_style_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$repeater->add_control(
			'bwdff_flipflop_border_divider2',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdff_flipflop_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-team-img, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-back',
			]
		);

		$repeater->add_control(
			'bwdff_flipflop_border_divider222',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'bwdff_icon_back_bg_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-content-shape-cmn-border' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-cmn-bio .bwdff-member-name::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-cmn-bio .bwdff-member-name::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-cmn-bio::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-cmn-bio::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::before' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdff_icon_back_bg_another_shape_color',
			[
				'label' => esc_html__( 'Another Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio-for9, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-team-img::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::after' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(), 
			[
				'name' => 'bwdff_team_back_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back, {{WRAPPER}} {{CURRENT_ITEM}} .clas, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::after, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-cmn-bio, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content .bwdff-member-bio::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item .bwdff-team-back .bwdff-team-back-content::before',
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'bwdff_flipflop_border_dividert22652',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_responsive_control(
            'bwdff_flipflop_single_box_normal_margin_t',
            [
                'label' => esc_html__('Box Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .bwdff-team-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdff_box',
			[
				'label' => esc_html__( 'The Team', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdff_box_name' => esc_html__( 'Jhon Doe', 'bwd-elementor-addons' ),
					],
					[
						'bwdff_box_name' => esc_html__( 'Zuckerberg', 'bwd-elementor-addons' ),
					],
					[
						'bwdff_box_name' => esc_html__( 'Donald Trump', 'bwd-elementor-addons' ),
					],
					[
						'bwdff_box_name' => esc_html__( 'Jhon Smith', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdff_box_name }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdff_team_style_section',
			[
				'label' => esc_html__( 'Team Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdff_team_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdff-team-common',
			]
		);
		$this->add_responsive_control(
            'bwdff_team_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-team-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdff_team_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdff-team-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdff_column = $settings['bwdff_team_column'];
		if('1' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-12';
			$bwdff_md_dev_clmn = 'col-md-12';
			$bwdff_lg_dev_clmn = 'col-lg-12';
			$bwdff_xl_dev_clmn = 'col-xl-12';
		} elseif('2' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-6';
			$bwdff_md_dev_clmn = 'col-md-6';
			$bwdff_lg_dev_clmn = 'col-lg-6';
			$bwdff_xl_dev_clmn = 'col-xl-6';
		} elseif('3' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-4';
			$bwdff_md_dev_clmn = 'col-md-4';
			$bwdff_lg_dev_clmn = 'col-lg-4';
			$bwdff_xl_dev_clmn = 'col-xl-4';
		} elseif('4' === $bwdff_column){
			$bwdff_sm_dev_clmn = 'col-sm-3';
			$bwdff_md_dev_clmn = 'col-md-3';
			$bwdff_lg_dev_clmn = 'col-lg-3';
			$bwdff_xl_dev_clmn = 'col-xl-3';
		}

		$bwdff_content_width = $settings['bwdff_team_content_width'];
		if('full_width' === $bwdff_content_width){
			$bwdff_content_c_f = 'container-fluid';
		} elseif('boxed' === $bwdff_content_width){
			$bwdff_content_c_f = 'container';
		}
		if('style1' == $settings['bwdff_style_selection'] || 'style2' == $settings['bwdff_style_selection']){
		if('style1' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-common bwdff-team-1">
			<div class="<?php echo esc_attr($bwdff_content_c_f); ?>">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="'.esc_attr($bwdff_sm_dev_clmn).' '.esc_attr($bwdff_md_dev_clmn).' '. esc_attr($bwdff_lg_dev_clmn) .' '. esc_attr($bwdff_xl_dev_clmn) .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content bwdff-team-font-border-cmn <?php if('solid' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-solid<?php } elseif('dashed' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-dashed <?php } elseif('dotted' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-dotted <?php } elseif('double' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-double <?php } ?>">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
								</div>
							</div>
							<div class="bwdff-team-back <?php if('solid' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-solid <?php } elseif('dashed' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dashed <?php } elseif('dotted' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dotted <?php } elseif('double' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-double <?php } ?>">
								<div class="bwdff-team-back-content bwdff-team-back-content-a bwdff-team-back-content-b">
									<div class="bwdff-team-img bwdff-content-shape-cmn-border">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio bwdff-member-cmn-bio bwdff-team-back-content-a bwdff-team-back-content-b">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
									</div>
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
		<?php
		} elseif('style2' === $settings['bwdff_style_selection']){
		?>
		<div class="bwdff-team-common bwdff-team-2">
			<div class="<?php echo esc_attr($bwdff_content_c_f); ?>">
				<?php
				if('left' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-start">';
				} elseif('center' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-center">';
				} elseif('right' === $settings['bwdff_team_box_align']){
					echo '<div class="bwdff-team-wrapper row justify-content-end">';
				}
				?>
					<?php
					if ( $settings['bwdff_box'] ) {
						foreach (  $settings['bwdff_box'] as $item ) {
						echo '<div class="col-sm-6 '. esc_attr($bwdff_lg_dev_clmn) .' '. esc_attr($bwdff_xl_dev_clmn) .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
						<div class="bwdff-team-item">
							<div class="bwdff-team-front">
								<div class="bwdff-team-front-content bwdff-content-shape-cmn-b <?php if('solid' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-solid <?php } elseif('dashed' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-dashed <?php } elseif('dotted' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-dotted <?php } elseif('double' === $item['bwdff_font_border_back_style_view']){ ?>bwdff-common-class-style-double <?php } ?>">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio bwdff-team-item-cmn-bio-bg">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										</div>
								</div>
							</div>
							<div class="bwdff-team-back <?php if('solid' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-solid <?php } elseif('dashed' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dashed <?php } elseif('dotted' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-dotted <?php } elseif('double' === $item['bwdff_border_back_style_back']){ ?>bwdff-common-class-style-back-double <?php } ?>">
								<div class="bwdff-team-back-content">
									<div class="bwdff-team-img">
										<img src="<?php echo esc_url($item['bwdff_team_profile_image']['url']); ?>" alt="img one">
									</div>
									<div class="bwdff-member-bio bwdff-member-cmn-bio">
										<div class="bwdff-member-name"><?php echo esc_html($item['bwdff_box_name']); ?></div>
										<div class="bwdff-member-post"><?php echo esc_html($item['bwdff_box_designation']); ?></div>
										<div class="bwdff-social-icons">
											<?php if('yes' === $item['bwdff_social_icon_one_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_one_link']['url']); ?>"><i class="bwdff_social_media_one <?php echo esc_attr( $item['bwdff_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_two_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_two_link']['url']); ?>"><i class="bwdff_social_media_two <?php echo esc_attr( $item['bwdff_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_three_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_three_link']['url']); ?>"><i class="bwdff_social_media_three <?php echo esc_attr( $item['bwdff_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
											<?php if('yes' === $item['bwdff_social_icon_four_switcher']){ ?><a href="<?php echo esc_url($item['bwdff_social_icon_four_link']['url']); ?>"><i class="bwdff_social_media_four <?php echo esc_attr( $item['bwdff_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
										</div>
									</div>
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
		<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
