<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

if (!defined('ABSPATH')){ 
	exit; 
} // Exit if accessed directly

class BWDEB_USShareWidget extends Widget_Base{

	public function get_name(){
		return esc_html__('UniqueSocialShare', 'bwd-elementor-addons');
	}
	public function get_title(){
		return esc_html__('Unique Social Share', 'bwd-elementor-addons');
	}
	public function get_icon(){
		return 'bwdeb-elementor-bundle social-share';
	}
	public function get_categories(){
		return ['bwdeb_general_category'];
	}
	public function get_keywords() {
		return ['social', 'shares', 'social-share', 'social-media', 'media', 'plugins', 'developer', 'elementor'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_usshares',
			array(
				'label' => esc_html__( 'Content Settings', 'bwd-elementor-addons' ),
			)
		);
		$this->add_control(
			'usshare_presets_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/social-share" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'usshare_main_show_title',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'usshare_main_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Social Share Icon', 'bwd-elementor-addons' ),
				'dynamic'     => [
					'active' => true,
				],
				'label_block' => true,
				'condition' => [
					'usshare_main_show_title' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'usshare_whole_social_icons',
			array(
				'label' => esc_html__( 'Social Share', 'bwd-elementor-addons' ),
			)
		);
		
		$this->add_control(
			'usshare_icon_btn_position',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'inline',
				'options' => [
					'inline' => esc_html__( 'Inline', 'bwd-elementor-addons' ),
					'floating' => esc_html__( 'Floating', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'usshare-icon-pos-',
			]
		);
		$this->add_control(
			'usshare_icon_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'default' => 'left',
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
				],
				'prefix_class' => 'usshare-icon-align-',
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'gap: {{SIZE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_vertical_pos',
			[
				'label' => esc_html__( 'Vertical Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_horizontal_pos_left',
			[
				'label' => esc_html__( 'Horizontal Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
					'usshare_icon_align' => 'left',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_icon_horizontal_pos_right',
			[
				'label' => esc_html__( 'Horizontal Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container' => 'right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'floating',
					'usshare_icon_align' => 'right',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_btn_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => ' eicon-h-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .main-container, {{WRAPPER}} .usshare_btn_wrap.usshare_style17' => 'justify-content: {{VALUE}};',
				],
				'condition' => [
					'usshare_icon_btn_position' => 'inline',
				],
			]
		);
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'usshare_social_type',
			[
				'label'   => esc_html__( 'Networks', 'bwd-elementor-addons' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'facebook'    => esc_html__( 'Facebook', 'bwd-elementor-addons' ),
					'twitter'     => esc_html__( 'Twitter', 'bwd-elementor-addons' ),
					'linkedin'    => esc_html__( 'Linkedin (PRO)', 'bwd-elementor-addons' ),
					'instagram'   => esc_html__( 'Instagram (PRO)', 'bwd-elementor-addons' ),
					'email'       => esc_html__( 'Email (PRO)', 'bwd-elementor-addons' ),
					'whatsapp'    => esc_html__( 'Whatsapp (PRO)', 'bwd-elementor-addons' ),
					'youtube'     => esc_html__( 'Youtube (PRO)', 'bwd-elementor-addons' ),
					'telegram'    => esc_html__( 'Telegram (PRO)', 'bwd-elementor-addons' ),
					'viber'       => esc_html__( 'Viber (PRO)', 'bwd-elementor-addons' ),
					'pinterest'   => esc_html__( 'Pinterest (PRO)', 'bwd-elementor-addons' ),
					'tumblr'      => esc_html__( 'Tumblr (PRO)', 'bwd-elementor-addons' ),
					'reddit'      => esc_html__( 'Reddit (PRO)', 'bwd-elementor-addons' ),
					'vk'          => esc_html__( 'VK (PRO)', 'bwd-elementor-addons' ),
					'xing'        => esc_html__( 'Xing (PRO)', 'bwd-elementor-addons' ),
					'get-pocket'  => esc_html__( 'Get Pocket (PRO)', 'bwd-elementor-addons' ),
					'digg'        => esc_html__( 'Digg (PRO)', 'bwd-elementor-addons' ),
					'stumbleupon' => esc_html__( 'StumbleUpon (PRO)', 'bwd-elementor-addons' ),
					'weibo'       => esc_html__( 'Weibo (PRO)', 'bwd-elementor-addons' ),
					'renren'      => esc_html__( 'Renren (PRO)', 'bwd-elementor-addons' ),
					'skype'       => esc_html__( 'Skype (PRO)', 'bwd-elementor-addons' ),
					'quora'       => esc_html__( 'Quora (PRO)', 'bwd-elementor-addons' ),
					'snapchat'      => esc_html__( 'Snapchat (PRO)', 'bwd-elementor-addons' ),
					'flicker'       => esc_html__( 'Flicker (PRO)', 'bwd-elementor-addons' ),
					'odnoklassniki' => esc_html__( 'Odnoklassniki (PRO)', 'bwd-elementor-addons' ),
					'moimir'        => esc_html__( 'Moimir (PRO)', 'bwd-elementor-addons' ),
					'blogger'       => esc_html__( 'Blogger (PRO)', 'bwd-elementor-addons' ),
					'evernote'      => esc_html__( 'Evernote (PRO)', 'bwd-elementor-addons' ),
					'delicious'     => esc_html__( 'Delicious (PRO)', 'bwd-elementor-addons' ),
					'surfingbird'   => esc_html__( 'Surfingbird (PRO)', 'bwd-elementor-addons' ),
					'liveinternet'  => esc_html__( 'Liveinternet (PRO)', 'bwd-elementor-addons' ),
					'buffer'        => esc_html__( 'Buffer (PRO)', 'bwd-elementor-addons' ),
					'instapaper'    => esc_html__( 'Instapaper (PRO)', 'bwd-elementor-addons' ),
					'wordpress'     => esc_html__( 'WordPress (PRO)', 'bwd-elementor-addons' ),
					'baidu'         => esc_html__( 'Baidu (PRO)', 'bwd-elementor-addons' ),
					'line'          => esc_html__( 'Line (PRO)', 'bwd-elementor-addons' ),
				],
				'default' => 'facebook',
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/social-share" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$repeater->add_control(
			'usshare_icon_content_type',
			[
				'label' => esc_html__( 'Content Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icontext' => esc_html__( 'Icon & Text', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
					'text' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				],
			]
		);
		$repeater->add_control(
			'usshare_icon_position',
			[
				'label' => esc_html__( 'Icon Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'before',
				'options' => [
					'before' => esc_html__( 'Before', 'bwd-elementor-addons' ),
					'after' => esc_html__( 'After', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_btn_icon_spacing',
			[
				'label' => esc_html__( 'Icon Spacing', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link.icontext' => 'gap: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_btn_iocn_text',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook' , 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your social title' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_btn_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook' , 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your social title' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_iconstext',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'fa-solid',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icons',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'fa-solid',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'usshare_custom_link',
			[
				'label'       => esc_html__( 'Custom Link', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'https://your-share-link.com', 'bwd-elementor-addons' ),
				'type'        => Controls_Manager::URL,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
			]
		);
		// Hover control start for box
		$repeater->start_controls_tabs(
			'usshare_social_box_style_share'
		);
		$repeater->start_controls_tab(
			'usshare_social_box_normal_share',
			[
				'label' => esc_html__('Normal', 'bwd-elementor-addons'),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_icon_text_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_text_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_text_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_text_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_btn_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap a i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .usshare_btn_wrap a svg' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_color',
			[
				'label' => esc_html__('Icon Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color',
				'label' => esc_html__('Background', 'bwd-elementor-addons'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow',
				'label' => esc_html__('Box Shadow', 'bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border',
				'label' => esc_html__('Border', 'bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'usshare_social_box_hover_tab',
			[
				'label' => esc_html__('Hover', 'bwd-elementor-addons'),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_icontext_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_text_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_text_hover_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icontext',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_text_hover_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'text',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_btn_hover_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap a:hover i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_control(
			'usshare_social_icon_hover_color',
			[
				'label' => esc_html__('Icon Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover i' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover svg' => 'fill: {{VALUE}}',
				],
				'condition' => [
					'usshare_icon_content_type' => 'icon',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hover',
				'label' => esc_html__('Background', 'bwd-elementor-addons'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .usshare_btn_link:hover, {{WRAPPER}} {{CURRENT_ITEM}}.usshare_btn_link_wrap a:hover::before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow_hover',
				'label' => esc_html__('Box Shadow', 'bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border_hover',
				'label' => esc_html__('Border', 'bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End
		$repeater->add_responsive_control(
			'usshare_social_the_box_border_radius',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_social_the_box_border_bottom',
			[
				'label' => esc_html__('Margin', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_social_box_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'usshare_all_social_btn',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-facebook',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'facebook',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-twitter',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'twitter',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-linkedin',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'linkedin',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-whatsapp',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'whatsapp',
					],
				],
				'title_field' => '{{{ usshare_social_type }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'usshare_social_title_style',
			[
				'label' => esc_html__( 'Wrapper', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'usshare_content_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => ' eicon-h-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'text-align: {{VALUE}};',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'usshare_title_style_post'
		);
		$this->start_controls_tab(
			'usshare_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_title_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->add_control(
			'usshare_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hovere',
				'label' => esc_html__('Background', 'bwd-elementor-addons'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'usshare_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_title_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap:hover .usshare_share_text',
			]
		);
		$this->add_control(
			'usshare_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap:hover .usshare_share_text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hoverr',
				'label' => esc_html__('Background', 'bwd-elementor-addons'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_style1:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border_wraa',
				'label' => esc_html__('Border', 'bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'usshare_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow_wraa',
				'label' => esc_html__('Box Shadow', 'bwd-elementor-addons'),
				'selector' => '{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->add_responsive_control(
			'usshare_title_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_title_margin',
			[
				'label' => esc_html__('Margin', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render(){
		$settings = $this->get_settings_for_display();
		if($settings['usshare_presets_style'] == 'style1' || $settings['usshare_presets_style'] == 'style2'){// for pro
		echo '<div class="usshare_btn_wrap usshare_'.esc_attr($settings['usshare_presets_style']).'">';
			if($settings['usshare_main_show_title'] === 'yes') {
				echo '<span class="usshare_share_text">'.esc_attr($settings['usshare_main_title']).'</span>';
			}
				echo '<div class="main-container">';
					foreach (  $settings['usshare_all_social_btn'] as $usshare_btn ) {
						if($usshare_btn['usshare_social_type'] == 'facebook' || $usshare_btn['usshare_social_type'] == 'twitter'){ // for pro
						$types = $usshare_btn['usshare_social_type'];
						$social_title = $usshare_btn['usshare_btn_title'];
						$social_icon_text = $usshare_btn['usshare_btn_iocn_text'];
						$social_cont = $usshare_btn['usshare_icon_content_type'];
						$icon_pos = $usshare_btn['usshare_icon_position'];
						$current = get_the_permalink();
						$titlE = get_the_title();
						$link = $usshare_btn['usshare_custom_link']['url'];
						if($types == 'facebook'): $usshare_Alink = (!empty($link))?'https://www.facebook.com/sharer/sharer.php?u='.$link:'https://www.facebook.com/sharer/sharer.php?u='.$current; 
							elseif($types == 'twitter'): $usshare_Alink = (!empty($link))?'https://twitter.com/intent/tweet?text='.$link:'https://twitter.com/intent/tweet?text='.$titlE.'&amp;url='.$current; 
								elseif($types == 'whatsapp'): $usshare_Alink = (!empty($link))?'https://api.whatsapp.com/send?text='.$link:'https://api.whatsapp.com/send?text='.$titlE.$current; 
									elseif($types == 'linkedin'): $usshare_Alink = (!empty($link))?'https://www.linkedin.com/sharing/share-offsite/?url='.$link:'https://www.linkedin.com/sharing/share-offsite/?url='.$current; 
							elseif($types == 'reddit'): $usshare_Alink = (!empty($link))?'https://www.reddit.com/submit?url='.$link:'https://www.reddit.com/submit?url='.$current.'&amp;title='.$titlE; 
								elseif($types == 'tumblr'): $usshare_Alink = (!empty($link))?'https://www.tumblr.com/share/link?url='.$link:'https://www.tumblr.com/share/link?url='.$current.'&amp;name='. $titlE.'&amp;description='.get_the_excerpt(); 
									elseif($types == 'telegram'): $usshare_Alink = (!empty($link))?'https://telegram.me/share/url?url='.$link:'https://telegram.me/share/url?url='.$current.'&amp;text='.$titlE; 
										elseif($types == 'email'): $usshare_Alink = (!empty($link))?'mailto:?subject='.$link:'mailto:?subject='.$titlE.'&body='.$current; 
							elseif($types == 'viber'): $usshare_Alink = (!empty($link))?'viber://forward?text='.$link:'viber://forward?text='.$titlE.$current; 
								elseif($types == 'vk'): $usshare_Alink = (!empty($link))?'http://vk.com/share.php?url='.$link:'http://vk.com/share.php?url='.$current; 
									elseif($types == 'xing'): $usshare_Alink = (!empty($link))?'https://www.xing.com/spi/shares/new?url='.$link:'https://www.xing.com/spi/shares/new?url='.$current; 
										elseif($types == 'pocket'): $usshare_Alink = (!empty($link))?'https://getpocket.com/save?url='.$link:'https://getpocket.com/save?url='.$current.'&title='.$titlE; 
							elseif($types == 'digg'): $usshare_Alink = (!empty($link))?'http://digg.com/submit?url='.$link:'http://digg.com/submit?url='.$current; 
								elseif($types == 'stumbleupon'): $usshare_Alink = (!empty($link))?'http://www.stumbleupon.com/submit?url='.$link:'http://www.stumbleupon.com/submit?url='.$current.'&title='.$titlE; 
									elseif($types == 'weibo'): $usshare_Alink = (!empty($link))?'http://service.weibo.com/share/share.php?url='.$link:'http://service.weibo.com/share/share.php?url='.$current.'&title='.$titlE; 
										elseif($types == 'renren'): $usshare_Alink = (!empty($link))?'http://widget.renren.com/dialog/share?resourceUrl='.$link:'http://widget.renren.com/dialog/share?resourceUrl='.$current.'&title='.$titlE; 
							elseif($types == 'skype'): $usshare_Alink = (!empty($link))?'skype:?chat&topic='.$link:'skype:?chat&topic='.$titlE.'&add='.$current; 
								elseif($types == 'pinterest'): $usshare_Alink = (!empty($link))?'https://pinterest.com/pin/create/button/?url='.$link:'https://pinterest.com/pin/create/button/?url='.$current.'&amp;media='.wp_get_attachment_url( get_share_thumbnail_id($share->ID) ).'&amp;description='.get_the_excerpt(); 
									elseif($types == 'youtube'): $usshare_Alink = (!empty($link))?'https://www.youtube.com/share?url='.$link:'https://www.youtube.com/share?url='.$current; 
										elseif($types == 'instagram'): $usshare_Alink = (!empty($link))?'https://www.instagram.com/share?url='.$link:'https://www.instagram.com/share?url='.$current.'&title='.$titlE; 
							elseif($types == 'quora'): $usshare_Alink = (!empty($link))?'http://www.quora.com/share?url='.$link:'http://www.quora.com/share?url='.$current.'&title='.$titlE; 
								elseif($types == 'snapchat'): $usshare_Alink = (!empty($link))?'https://www.snapchat.com/share?url='.$link:'https://www.snapchat.com/share?url='.$current; 
									elseif($types == 'flickr'): $usshare_Alink = (!empty($link))?'https://www.flickr.com/search/?q='.$link:'https://www.flickr.com/search/?q='.$titlE; 
										elseif($types == 'odnoklassniki'): $usshare_Alink = (!empty($link))?'https://connect.ok.ru/offer?url='.$link:'https://connect.ok.ru/offer?url='.urlencode($current); 
							elseif($types == 'blogger'): $usshare_Alink = (!empty($link))?'https://www.blogger.com/share?u='.$link:'https://www.blogger.com/share?u='.urlencode($current); 
								elseif($types == 'evernote'): $usshare_Alink = (!empty($link))?'https://www.evernote.com/clip.action?url='.$link:'https://www.evernote.com/clip.action?url='.urlencode($current).'&title='.urlencode($titlE); 
									elseif($types == 'delicious'): $usshare_Alink = (!empty($link))?'https://del.icio.us/post?url='.$link:'https://del.icio.us/post?url='.urlencode($current).'&amp;title='.urlencode($titlE); 
										elseif($types == 'surfingbird'): $usshare_Alink = (!empty($link))?'http://surfingbird.ru/share?url='.$link:'http://surfingbird.ru/share?url='.$current.'&title='.$titlE; 
							elseif($types == 'liveinternet'): $usshare_Alink = (!empty($link))?'http://www.liveinternet.ru/journal_post.php?action=n_add&cnurl='.$link:'http://www.liveinternet.ru/journal_post.php?action=n_add&cnurl='.$current.'&cntitle='.$titlE; 
								elseif($types == 'buffer'): $usshare_Alink = (!empty($link))?'https://bufferapp.com/add?url='.$link:'https://bufferapp.com/add?url='.urlencode($current).'&amp;text='.urlencode($titlE); 
									elseif($types == 'instapaper'): $usshare_Alink = (!empty($link))?'http://www.instapaper.com/hello2?url='.$link:'http://www.instapaper.com/hello2?url='.urlencode($current).'&title='.urlencode($titlE);
										elseif($types == 'wordpress'): $usshare_Alink = (!empty($link))?'https://wordpress.com/press-this.php?u='.$link:'https://wordpress.com/press-this.php?u='.urlencode($current).'&t='.urlencode($titlE);
							elseif($types == 'baidu'): $usshare_Alink = (!empty($link))?'http://cang.baidu.com/do/add?iu=&it=&fr=ien#nw=1&iu=&link='.$link:'http://cang.baidu.com/do/add?iu=&it=&fr=ien#nw=1&iu=&link='.esc_url($current).'&title='.esc_attr($titlE);
								elseif($types == 'line'): $usshare_Alink = (!empty($link))?'https://line.me/R/msg/text/?'.$link:'https://line.me/R/msg/text/?'.$titlE.'%0A'.$current;
						endif;
						echo '<div class="usshare_btn_link_wrap elementor-repeater-item-' . esc_attr( $usshare_btn['_id'] ) . '">';
							?><a class="usshare_btn_link <?php echo esc_attr($social_cont); ?> <?php echo esc_attr($icon_pos); ?>" href="<?php echo esc_url($usshare_Alink); ?>" 
								onclick="window.open(this.href, '_blank', 'width=400,height=400,left='+screen.width/2.5+',top='+screen.height/3); return false;">
								<?php
								if($usshare_btn['usshare_icon_content_type'] === 'icontext') :
									\Elementor\Icons_Manager::render_icon( $usshare_btn['usshare_social_iconstext'], [ 'aria-hidden' => 'true' ] ); 
									echo esc_html($social_icon_text);
								elseif($usshare_btn['usshare_icon_content_type'] === 'icon') :	
									\Elementor\Icons_Manager::render_icon( $usshare_btn['usshare_social_icons'], [ 'aria-hidden' => 'true' ] ); 
								elseif($usshare_btn['usshare_icon_content_type'] === 'text') :
									echo esc_html($social_title);
								endif;
							echo '</a>';
						echo '</div>';
					}// for pro
					}
				echo '</div>';
		echo '</div>';
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}
