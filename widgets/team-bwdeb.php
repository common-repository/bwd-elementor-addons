<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_MTTMeetTheTeam extends Widget_Base {

	public function get_name() {
		return esc_html__( 'MeetTheTeam', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Meet The Team', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle mtt-team';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_script_depends() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Team Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'mtt_style_selection',
			[
				'label' => esc_html__( 'Team Style', 'bwd-elementor-addons' ),
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
					'style26' => esc_html__( 'Style 26 (PRO)', 'bwd-elementor-addons' ),
					'style27' => esc_html__( 'Style 27 (PRO)', 'bwd-elementor-addons' ),
					'style28' => esc_html__( 'Style 28 (PRO)', 'bwd-elementor-addons' ),
					'style29' => esc_html__( 'Style 29 (PRO)', 'bwd-elementor-addons' ),
					'style30' => esc_html__( 'Style 30 (PRO)', 'bwd-elementor-addons' ),
					'style31' => esc_html__( 'Style 31 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/meet-the-team/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_responsive_control(
			'mtt_team_box_align',
			[
				'label' => esc_html__( 'Column Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'flex-start',
				'selectors' => [
					'{{WRAPPER}} .bwd-row' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'mtt_column_layout',
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
				'prefix_class' => 'mtt-grid%s-'
			]
		);
		$this->add_responsive_control(
			'mtt_column_gap',
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
					'{{WRAPPER}} .mtt_gapc' => 'padding-inline-start: {{SIZE}}{{UNIT}}; padding-inline-end: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt_gapr' => 'margin-inline-start: -{{SIZE}}{{UNIT}}; margin-inline-end: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'mtt_row_gap',
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
					'{{WRAPPER}} .mtt-total-team-box' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'mtt_flipflop_step_content_box_section',
			[
				'label' => esc_html__( 'Team Boxes', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();

		// Content Tab

		$repeater->start_controls_tabs(
			'style_tabs'
		);
		$repeater->start_controls_tab(
			'mtt_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'mtt_box_name', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'JHON DOE' , 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'mtt_box_designation', [
				'label' => esc_html__( 'Designation', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Web Developer' , 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'mtt_team_profile_image',
			[
				'label' => esc_html__( 'Choose Profile Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_switcher',
			[
				'label' => esc_html__( 'Social Icon One', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
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
			'mtt_social_icon_two_switcher',
			[
				'label' => esc_html__( 'Social Icon Two', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
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
			'mtt_social_icon_three_switcher',
			[
				'label' => esc_html__( 'Social Icon Three', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
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
			'mtt_social_icon_four_switcher',
			[
				'label' => esc_html__( 'Social Icon Four', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four',
			[
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
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
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_style_tab',
			[
				'label' => esc_html__( 'Style', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'mtt_box_name_style',
			[
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-title',
			]
		);
		$repeater->add_control(
			'mtt_box_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_profile_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_title_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-title',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_control(
			'mtt_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		$repeater->add_control(
			'mtt_box_designation_heading',
			[
				'label' => esc_html__( 'Designation', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_designation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-post',
			]
		);
		$repeater->add_control(
			'mtt_box_designation_color',
			[
				'label' => esc_html__( ' Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-post' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_profile_des_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-post' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_designation_shadow',
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-content .mtt-post',
				'default' => [
					'color' => 'transparent',
				]
			]
		);

		$repeater->add_control(
			'mtt_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		
		$repeater->add_control(
			'mtt_box_profile_background_color',
			[
				'label' => esc_html__( 'Profile Image Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_team_profile_background, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-pic::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-26-team .mtt-team-content::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-portfolio-team .mtt-pic::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-section::before,{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-28-team:hover' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-section' => 'border: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-thumble::after,{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-29-team::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-portfolio:after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-our-box:hover, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-30-team, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-31-team' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-16-box::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-pic:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-20-team .mtt-pic' => 'border: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-23-team' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-22-team, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-21-team .mtt-pic::before' => 'background: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Icon One Style

		$repeater->add_control(
			'mtt_social_icon_one_style_switcher',
			[
				'label' => esc_html__( 'Social Icon One Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'mtt_team_social_icon_one_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_one_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-one svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_one_background_color',
			[
				'label' => esc_html__( 'Icon Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-one' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_one_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-one:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_one_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_one_style_switcher' => 'yes',
				],
			]
		);

		// Icon Two Style
		$repeater->add_control(
			'mtt_social_icon_two_style_switcher',
			[
				'label' => esc_html__( 'Social Icon Two Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'mtt_team_social_icon_two_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_two_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-two svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_two_background_color',
			[
				'label' => esc_html__( 'Icon Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  a.mtt-social-icon-two' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_two_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}  a.mtt-social-icon-two:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_two_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_two_style_switcher' => 'yes',
				],
			]
		);

		// Icon Three Style

		$repeater->add_control(
			'mtt_social_icon_three_style_switcher',
			[
				'label' => esc_html__( 'Social Icon Three Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'mtt_team_social_icon_three_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_three_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-three svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_three_background_color',
			[
				'label' => esc_html__( 'Icon Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-three' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_three_hover_background_color',
			[
				'label' => esc_html__( 'Icon Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-three:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_three_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_three_style_switcher' => 'yes',
				],
			]
		);

		// Icon Four Style

		$repeater->add_control(
			'mtt_social_icon_four_style_switcher',
			[
				'label' => esc_html__( 'Social Icon Four Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'mtt_team_social_icon_four_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
        $repeater->add_control(
			'mtt_team_social_icon_hover_four_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four i:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social-icon-four svg:hover' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_four_background_color',
			[
				'label' => esc_html__( 'Icon Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-four' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_four_hover_background_color',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a.mtt-social-icon-four:hover' => 'background-color: {{VALUE}}!important'
				],
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_box_icon_four_border',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt-social-icon-one',
				'condition' => [
					'mtt_social_icon_four_style_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_icon_bg_shape_color',
			[
				'label' => esc_html__( 'Shape Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_team_shape, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team .mtt-pic::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-26-team .mtt-team-content' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-portfolio-team .mtt-pic::after, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content .mtt-title::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content .mtt-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-portfolio::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-28-team::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-our-box-content::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-our-box::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-29-team .mtt-team-content .mtt-inner-content' => 'background: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-15-box:before' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mtt_team_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-six-number-bg, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-total-team-box .mtt-social, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-19-team::after, {{WRAPPER}} .mtt-team-style-19-team::before, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-25-team, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-pic:after, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content:before,  {{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-style-27-team .mtt-team-content:after',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'mtt_box',
			[
				'label' => esc_html__( 'Meet The Team', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mtt_box_name' => esc_html__( 'Jhon Doe', 'bwd-elementor-addons' ),
					],
					[
						'mtt_box_name' => esc_html__( 'Smith Jhon', 'bwd-elementor-addons' ),
					],
					[
						'mtt_box_name' => esc_html__( 'Robin Smith', 'bwd-elementor-addons' ),
					],
					[
						'mtt_box_name' => esc_html__( 'Json Doe', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ mtt_box_name }}}',
			]
		);
		$this->add_responsive_control(
			'mtt_team__the_social_icon_size',
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
					'{{WRAPPER}} .mtt-social-icon-one i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-two i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-three i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-four i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-one svg' => 'inline-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-two svg' => 'inline-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-three svg' => 'inline-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .mtt-social-icon-four svg' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'mtt_team__the_social_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .mtt-social a' => 'inline-size: {{SIZE}}{{UNIT}}!important; block-size: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'mtt_team_style_section',
			[
				'label' => esc_html__( 'Team Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mtt_team_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .mtt-total-team-box',
			]
		);
		$this->add_responsive_control(
            'mtt_team_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-total-team-box' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mtt_team_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-total-team-box' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mtt_team_the_box_border',
				'selector' => '{{WRAPPER}} .mtt-total-team-box',
			]
		);
		$this->add_responsive_control(
			'mtt_team_the_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .mtt-total-team-box' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'mtt_team_the_box_box_shadow',
				'selector' => '{{WRAPPER}} .mtt-total-team-box',
			]
		);
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$column_align = $settings['mtt_team_box_align'];
		$mtt_styles_no = $settings['mtt_style_selection'];

		// Social Link
		if ( ! empty( $settings['mtt_social_icon_one_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_one_link', $settings['mtt_social_icon_one_link'] );
		}
		if ( ! empty( $settings['mtt_social_icon_two_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_two_link', $settings['mtt_social_icon_two_link'] );
		}
		if ( ! empty( $settings['mtt_social_icon_three_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_three_link', $settings['mtt_social_icon_three_link'] );
		}
		if ( ! empty( $settings['mtt_social_icon_four_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_four_link', $settings['mtt_social_icon_four_link'] );
		}

			if('style1' == $settings['mtt_style_selection'] || 'style2' == $settings['mtt_style_selection']){
			if( $mtt_styles_no ){?>
				<div class="mtt-team-area-<?php echo $mtt_styles_no ?>">
					<div class="bwd-container-fluid">
						<div class="bwd-row mtt_gapr <?php echo $column_align; ?>">
					<?php
						if ( $settings['mtt_box'] ) {
							foreach (  $settings['mtt_box'] as $item ) {
						echo '<div class="column_number mtt_gapc bwd-col-lg-3 bwd-col-md-6 bwd-col-sm-6 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="mtt-our-team-box mtt-total-team-box">
								<?php if( $mtt_styles_no == 'style2' ){?> <div class="mtt-our-team-item"> <?php } ?>
								<div class="mtt-pic mtt_team_profile_background">
									<img src="<?php echo esc_url($item['mtt_team_profile_image']['url']); ?>" alt="bestwpdeveloper">
									<?php if( $mtt_styles_no == 'style27' ){?> <div class="bwd-img-layer"></div> <?php } ?>
									<!-- image social -->
									<?php $allowed_styles1 = array('style3', 'style4', 'style18', 'style26'); //if (in_array($mtt_styles_no, $allowed_styles1)) { include 'common/social.php'; } ?>
								</div>
								<!-- middle social -->
								<?php $allowed_styles2 = array('style6', 'style9', 'style20', 'style21', 'style25'); //if (in_array($mtt_styles_no, $allowed_styles2)) { include 'common/social.php'; } ?>
								<?php if( $mtt_styles_no == 'style11' ){?> <div class="mtt-team-our-box-content"> <?php } ?>
								<div class="mtt-team-content">
									<?php if( $mtt_styles_no == 'style21' ){?> <div class="mtt-info"> <?php } ?>
										<?php //if( $mtt_styles_no == 'style16' ){ include 'common/social.php'; }?>
										<div class="mtt-title mtt-titleee"><?php echo esc_html($item['mtt_box_name']); ?></div>
										<div class="mtt-post"><?php echo $item['mtt_box_designation']; ?></div>
										<!-- Content social -->
										<?php $allowed_styles3 = array('style2', 'style5', 'style7', 'style10', 'style14', 'style15', 'style17', 'style19', 'style24', 'style27'); if (in_array($mtt_styles_no, $allowed_styles3)) { 
											?>
											<div class="mtt-social">
												<?php if('yes' === $item['mtt_social_icon_one_switcher']){ ?><a class="mtt-social-icon-one" href="<?php echo esc_url($item['mtt_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['mtt_social_icon_two_switcher']){ ?><a class="mtt-social-icon-two" href="<?php echo esc_url($item['mtt_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['mtt_social_icon_three_switcher']){ ?><a class="mtt-social-icon-three" href="<?php echo esc_url($item['mtt_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['mtt_social_icon_four_switcher']){ ?><a class="mtt-social-icon-four" href="<?php echo esc_url($item['mtt_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											</div>
											<?php 
											} ?>
									<?php if( $mtt_styles_no == 'style21' ){?> </div> <?php } ?>
								</div>
								<!-- bottom social -->
								<?php $allowed_styles4 = array('style1', 'style8', 'style11', 'style12', 'style13', 'style22', 'style23', 'style28', 'style29', 'style30', 'style31'); if (in_array($mtt_styles_no, $allowed_styles4)) { 
									?>
									<div class="mtt-social">
												<?php if('yes' === $item['mtt_social_icon_one_switcher']){ ?><a class="mtt-social-icon-one" href="<?php echo esc_url($item['mtt_social_icon_one_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_one'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['mtt_social_icon_two_switcher']){ ?><a class="mtt-social-icon-two" href="<?php echo esc_url($item['mtt_social_icon_two_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_two'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['mtt_social_icon_three_switcher']){ ?><a class="mtt-social-icon-three" href="<?php echo esc_url($item['mtt_social_icon_three_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_three'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
												<?php if('yes' === $item['mtt_social_icon_four_switcher']){ ?><a class="mtt-social-icon-four" href="<?php echo esc_url($item['mtt_social_icon_four_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['mtt_social_icon_four'], [ 'aria-hidden' => 'true' ] ); ?></a> <?php } ?>
											</div>
											<?php 
									} ?>
								<?php if( $mtt_styles_no == 'style11' ){?> </div> <?php } ?>
								<?php if( $mtt_styles_no == 'style2' ){?> </div> <?php } ?>
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
