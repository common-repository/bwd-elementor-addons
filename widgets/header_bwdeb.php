<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_THFTheHeader extends Widget_Base {

	public function get_name() {
		return esc_html__( 'TheNavMenu', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'The Unique Headers', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-header';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}



	private function get_available_menus() {
		$menus = wp_get_nav_menus();
		$options = [];
		foreach ( $menus as $menu ) {
			$options[ $menu->slug ] = $menu->name;
		}
		return $options;
	}

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Menu Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_header_footer_styles',
			[
				'label' => esc_html__( 'Menu Style', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/unique-headers/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$menus = $this->get_available_menus();
		if ( ! empty( $menus ) ) {
			$this->add_control(
				'thf_choose_main_menu',
				[
					'label' => esc_html__( 'Select Menu', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'options' => $menus,
					'default' => array_keys( $menus )[0],
					'save_default' => true,
					'description' => sprintf(
						esc_html__( 'Your menu home page %1$shere.%2$s Create Menu.', 'bwd-elementor-addons' ),
						sprintf( '<a href="%s" target="_blank">', admin_url( 'nav-menus.php' ) ),
						'</a>'
					),
				]
			);
		} else {
			$this->add_control(
				'thf_choose_main_menu',
				[
					'type' => Controls_Manager::RAW_HTML,
					'raw' => '<strong>' . esc_html__( 'There are no menus in your site.', 'bwd-elementor-addons' ) . '</strong><br>' .
						sprintf(
							esc_html__( 'Your menu home page %1$shere.%2$s Create Menu.', 'bwd-elementor-addons' ),
							sprintf( '<a href="%s" target="_blank">', admin_url( 'nav-menus.php?action=edit&menu=0' ) ),
							'</a>'
						),
					'separator' => 'after',
				]
			);
		}
		$this->add_control(
			'thf_header_top_switcher',
			[
				'label' => esc_html__( 'Hide Top Bar', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'thf_nav_logo_switcher',
			[
				'label' => esc_html__( 'Hide Logo', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_sticky_header_section',
			[
				'label' => esc_html__( 'Sticky Header', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_header_type',
			[
				'label' => esc_html__( 'Header Sticky', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'thf_menus_scroll_desktop_distance',
			[
				'label' => esc_html__( 'Scroll Distance (px)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 1000,
				'step' => 1,
				'default' =>200,
				'condition' => [
					'thf_header_type' => 'yes'
				],
				'separator'=>'after'
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'text_header_top_section',
			[
				'label' => esc_html__( 'Header Top Bar', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'thf_header_top_switcher' => 'yes',
				],
			]
		);
		// msg
		$this->add_control(
			'thf_header_top_text_switcher',
			[
				'label' => esc_html__( 'Contacts', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$top_bar_text = new \Elementor\Repeater();
		$top_bar_text->add_control(
			'thf_header_top_contact_icon_switcher',
			[
				'label' => esc_html__( 'Icon Hide', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-phone',
					'library' => 'fa-solid',
				],
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
			]
		);
		// For Text Icon start
		$top_bar_text->start_controls_tabs(
			'style_top_bar_tabstext_icon'
		);
		$top_bar_text->start_controls_tab(
			'style_top_bar_normal_tabtext_icon',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
			]
		);
		$top_bar_text->add_responsive_control(
			'thf_main_text_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_text_icon_top_bar_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'background-color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->start_controls_tab(
			'style_top_bar_hover_tabtext_icon',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
			]
		);
		$top_bar_text->add_responsive_control(
			'thf_main_text_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_text_icon_top_bar_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_text_icon_top_bar_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover i',							
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->end_controls_tabs();
		
		$top_bar_text->add_responsive_control(
			'thf_text_icon_top_bar_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$top_bar_text->add_responsive_control(
            'thf_header_top_bar_paddingtext_icon',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$top_bar_text->add_responsive_control(
            'thf_header_top_bar_margintext_icon',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_top_bar_text_icon_hover_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i',
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_top_bar_text_icon_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'condition' =>[
					'thf_header_top_contact_icon_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}} i',
			]
		);
		// For Text Icon end
		$top_bar_text->add_control(
			'thf_top_icon_text',
			[
				'label' => esc_html__( 'Text Address', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'label_block' => 'true',
				'separator' => 'before',
				'default' => esc_html__( 'www.wordpress.org', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'www.the-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_title',
			[
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$top_bar_text->start_controls_tabs(
			'style_top_bar_tabstext'
		);
		$top_bar_text->start_controls_tab(
			'style_top_bar_normal_tabtext',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'style_top_bar_text_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text',
			]
		);
		$top_bar_text->add_control(
			'thf_top_bar_text_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_control(
			'thf_text_top_bar_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->start_controls_tab(
			'style_top_bar_hover_tabtext',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'style_top_bar_text_hover_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text:hover',
			]
		);
		$top_bar_text->add_control(
			'thf_text_top_bar_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .thf-topbar-text:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_text_top_bar_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}:hover',							
			]
		);
		$top_bar_text->end_controls_tab();
		$top_bar_text->end_controls_tabs();
		$top_bar_text->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_top_bar_text_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .top-header-left {{CURRENT_ITEM}}',
			]
		);
		$this->add_control(
			'thf_top_bar_text_list',
			[
				'type' => Controls_Manager::REPEATER,
				'fields' => $top_bar_text->get_controls(),
				'default' => [
					[
						'thf_top_icon_text' => esc_html__( 'US. IN. 47712', 'bwd-elementor-addons' ),
						'thf_top_bar_text_icon' => [
							'value' => 'fas fa-map-marker-alt',
							'library' => 'solid',
						],
					],
					[
						'thf_top_icon_text' => esc_html__( '+12027953213', 'bwd-elementor-addons' ),
					],
					[
						'thf_top_icon_text' => esc_html__( 'mail@mail.com', 'bwd-elementor-addons' ),
						'thf_top_bar_text_icon' => [
							'value' => 'far fa-envelope',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ thf_top_icon_text }}}',
				'condition' => [
					'thf_header_top_text_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_address_item_gap_size',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 15,
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left a' => 'margin-right: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_address_item_bottom_gap',
			[
				'label' => esc_html__( 'Item Bottom Gap (Mobile)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left a' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_top_bar_address_area',
			[
				'label' => esc_html__( 'Address Area', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-left' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_address_item_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'start',
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
					'{{WRAPPER}} .top-header-left' => 'justify-content: {{VALUE}};',
				],
			]
		);
		// Social Icon
		$this->add_control(
			'thf_header_top_icon_switcher',
			[
				'label' => esc_html__( 'Social Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$top_bar_icon = new \Elementor\Repeater();
		$top_bar_icon->add_control(
			'thf_top_bar_social_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'fa-solid',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_top_bar_social_icon_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'www.the-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$top_bar_icon->start_controls_tabs(
			'style_top_bar_tabs'
		);
		$top_bar_icon->start_controls_tab(
			'style_top_bar_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$top_bar_icon->add_responsive_control(
			'thf_main_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}} i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_icon->add_responsive_control(
			'thf_main_icon_round_size',
			[
				'label' => esc_html__( 'Icon Round Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.social-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_top_bar_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_icon_top_bar_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
				],
			]
		);
		$top_bar_icon->end_controls_tab();
		$top_bar_icon->start_controls_tab(
			'style_top_bar_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$top_bar_icon->add_responsive_control(
			'thf_main_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}:hover i' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$top_bar_icon->add_control(
			'thf_social_icon_top_bar_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}:hover i' => 'color: {{VALUE}}',
				],
			]
		);
		$top_bar_icon->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_icon_top_bar_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .social-icons {{CURRENT_ITEM}}:hover',							
			]
		);
		$top_bar_icon->end_controls_tab();
		$top_bar_icon->end_controls_tabs();
		
		$top_bar_icon->add_responsive_control(
			'thf_icon_top_bar_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .social-icons {{CURRENT_ITEM}}' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$top_bar_icon->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_top_bar_hover_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .social-icons {{CURRENT_ITEM}}',
			]
		);
		$top_bar_icon->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_top_bar_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .social-icons {{CURRENT_ITEM}}',
			]
		);
		$this->add_control(
			'thf_top_bar_social_icon_list',
			[
				'type' => Controls_Manager::REPEATER,
				'fields' => $top_bar_icon->get_controls(),
				'default' => [
					[
						'thf_social_icon_text_title' => esc_html__( 'Twitter', 'bwd-elementor-addons' ),
						'thf_top_bar_social_icon' => [
							'value' => 'fab fa-twitter',
							'library' => 'solid',
						],
					],
					[	'thf_social_icon_text_title' => esc_html__( 'Facebook', 'bwd-elementor-addons' ),
						'thf_top_bar_social_icon' => [
							'value' => 'fab fa-facebook-f',
							'library' => 'solid',
						],
					],
					[
						'thf_social_icon_text_title' => esc_html__( 'Instagram', 'bwd-elementor-addons' ),
						'thf_top_bar_social_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ thf_social_icon_text_title }}}',
				'condition' => [
					'thf_header_top_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'thf_icon_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .top-header-right' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .social-icons' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_icon_area',
			[
				'label' => esc_html__( 'Icon Area', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-right' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_icon_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'end',
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
					'{{WRAPPER}} .top-header-right' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'text_logo_section',
			[
				'label' => esc_html__( 'Nav Logo', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'thf_nav_logo_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'thf_choose_logo_link',
			[
				'label' => esc_html__( 'Logo Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'dynamic_link',
				'options' => [
					'dynamic_link' => esc_html__( 'Dynamic Link', 'bwd-elementor-addons' ),
					'custom_link' => esc_html__( 'Custom Link', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'thf_logo_wraper_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr( 'https://www.your-link.com' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'condition' => [
					'thf_choose_logo_link' => 'custom_link',
				],
			]
		);
		$this->add_control(
			'thf_choose_menu_type',
			[
				'label' => esc_html__( 'Logo Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom_logo',
				'options' => [
					'dynamic_logo' => esc_html__( 'Dynamic Logo', 'bwd-elementor-addons' ),
					'custom_logo' => esc_html__( 'Custom Logo', 'bwd-elementor-addons' ),
					'custom_text' => esc_html__( 'Custom Text', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'thf_custom_logo',
			[
			  'label' => esc_html__( 'Choose Logo', 'bwd-elementor-addons' ),
			  'type' => Controls_Manager::MEDIA,
			  'default' => [
				'url' => plugin_dir_url(__DIR__) . 'assets/public/img/logo-header.webp',
			  ],
			  'condition' => [
				  'thf_choose_menu_type' => 'custom_logo',
			  ],
			]
		);
		$this->add_control(
			'thf_custom_logo_text',
			[
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'MY LOGO', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_choose_menu_type' => 'custom_text',
				],
			]
		);
		$this->add_responsive_control(
			'thf_nav_logo_alignment',
			[
				'label' => esc_html__( 'Logo Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'separator' => 'after',
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
					'{{WRAPPER}} .dates-header-logo' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_logo_area',
			[
				'label' => esc_html__( 'Logo Area', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%'],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .dates-header-logo, {{WRAPPER}} .offcanvas-header-common .dates-header-logo' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		
		$this->add_control(
			'thf_tagline_switcher',
			[
				'label' => esc_html__( 'Show Tagline', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_main_menu_section',
			[
				'label' => esc_html__( 'Main Menu', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_responsive_control(
			'thf_menu_alignment',
			[
				'label' => esc_html__( 'Menu Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'thf-dates-menu-area-left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'thf-dates-menu-area-center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'thf-dates-menu-area-right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thf_main_menu_area',
			[
				'label' => esc_html__( 'Menu Area (width:50%)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'selectors' => [
					'{{WRAPPER}} .thf-dates-menu-area' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_menu_indicator_section',
			[
				'label' => esc_html__( 'Dropdown', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_menu_depth',
			[
				'label' => esc_html__( 'Menu Depth', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'step' => 1,
				'default' => 4,
			]
		);
		$this->add_control(
			'thf_submenu_indicator_alignment',
			[
				'label' => esc_html__( 'Indicator Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'menu_indicator_right',
				'options' => [
					'menu_indicator_left'  => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'menu_indicator_right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'thf_main_menu_icon',
			[
				'label' => esc_html__( 'Main Indicator Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'thf-main-down',
				'options' => [
					'thf-main-default-icon'  => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'thf-main-down'  => esc_html__( 'Down', 'bwd-elementor-addons' ),
					'thf-main-right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'thf-main-updown-leftright' => esc_html__( 'Left Right', 'bwd-elementor-addons' ),
					'thf-main-quote-left' => esc_html__( 'Quote Left', 'bwd-elementor-addons' ),
					'thf-main-left-right' => esc_html__( 'Left Right', 'bwd-elementor-addons' ),
					'thf-main-double-right' => esc_html__( 'Double Right', 'bwd-elementor-addons' ),
					'thf-main-bolt-right' => esc_html__( 'Bolt Right', 'bwd-elementor-addons' ),
					'thf-main-plus' => esc_html__( 'Plus', 'bwd-elementor-addons' ),
					'thf-main-user-plus' => esc_html__( 'User Plus', 'bwd-elementor-addons' ),
				],
			]
		);
		
		$this->add_control(
			'thf_child_menu_icon',
			[
				'label' => esc_html__( 'Child Indicator Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'thf-child-right',
				'options' => [
					'thf-child-down'  => esc_html__( 'Down', 'bwd-elementor-addons' ),
					'thf-child-right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'thf-child-updown-leftright' => esc_html__( 'Left Right', 'bwd-elementor-addons' ),
					'thf-child-quote-left' => esc_html__( 'Quote Left', 'bwd-elementor-addons' ),
					'thf-child-left-right' => esc_html__( 'Left Right', 'bwd-elementor-addons' ),
					'thf-child-double-right' => esc_html__( 'Double Right', 'bwd-elementor-addons' ),
					'thf-child-bolt-right' => esc_html__( 'Bolt Right', 'bwd-elementor-addons' ),
					'thf-child-plus' => esc_html__( 'Plus', 'bwd-elementor-addons' ),
					'thf-child-user-plus' => esc_html__( 'User Plus', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_nav_button_content_section',
			[
				'label' => esc_html__( 'Nav Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_header_footer_btn_type',
			[
				'label' => esc_html__( 'Button Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'none'  => esc_html__( 'None', 'bwd-elementor-addons' ),
					'search_form' => esc_html__( 'Search Form', 'bwd-elementor-addons' ),
					'custom' => esc_html__( 'Custom Button', 'bwd-elementor-addons' ),
					'social_icon' => esc_html__( 'Social Icon', 'bwd-elementor-addons' ),
					'admin_icon_name' => esc_html__( 'Admin', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'thf_search_form_style_selection',
			[
				'label' => esc_html__( 'Search Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bwdsb-search-box-6',
				'options' => [
					'bwdsb-search-box-6' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'bwdsb-search-box-7' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'bwdsb-search-box-8' => esc_html__( 'Style 3', 'bwd-elementor-addons' ),
					'bwdsb-search-box-9' => esc_html__( 'Style 4', 'bwd-elementor-addons' ),
					'bwdsb-search-box-10' => esc_html__( 'Style 5', 'bwd-elementor-addons' ),
					'bwdsb-search-box-11' => esc_html__( 'Style 6', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_nav_search_form_text',
			[
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Search', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);

		// Coustom
		$this->add_control(
			'thf_button_style_selection',
			[
				'label' => esc_html__( 'Button Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style 3', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Style 4', 'bwd-elementor-addons' ),
					'style5' => esc_html__( 'Style 5', 'bwd-elementor-addons' ),
					'style6' => esc_html__( 'Style 6', 'bwd-elementor-addons' ),
					'style7' => esc_html__( 'Style 7', 'bwd-elementor-addons' ),
					'style8' => esc_html__( 'Style 8', 'bwd-elementor-addons' ),
					'style9' => esc_html__( 'Style 9', 'bwd-elementor-addons' ),
					'style10' => esc_html__( 'Style 10', 'bwd-elementor-addons' ),
					'style11' => esc_html__( 'Style 11', 'bwd-elementor-addons' ),
					'style12' => esc_html__( 'Style 12', 'bwd-elementor-addons' ),
					'style13' => esc_html__( 'Style 13', 'bwd-elementor-addons' ),
					// Style 1,2,3,26,41,50,59,62,67,69,85,87,88,89,92
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_buttons_custom_class_id', 
			[
				'label' => esc_html__( 'Class ID (Custom)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', 'bwd-elementor-addons' ),
					'<code>',
					'</code>'
				),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_nav_button_text',
			[
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Get in touch', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_header_footer_button_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr( 'https://www.your-link.com' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		// Social Icon
		
		$this->add_control(
			'thf_social_icon_selection',
			[
				'label' => esc_html__( 'Icon Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style 3', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Style 4', 'bwd-elementor-addons' ),
					'style5' => esc_html__( 'Style 5', 'bwd-elementor-addons' ), 
					// Style 2,6,7,19,28
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'social_icon',
				],
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'thf_social_icon',
			[
				'label' => esc_html__( 'Social Icons', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
			]
		);
		$repeater->add_control(
			'thf_social_icon_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write icon link here', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->start_controls_tabs(
			'style_tabs'
		);
		$repeater->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'thf_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon .thf-icons-color' => 'color: {{VALUE}}',
					'{{WRAPPER}} .thf-text' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'thf_icon_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color .thf-shadow' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-circle-icon' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon .thf-icons-color' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-text' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .thf-circle-items' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->add_responsive_control(
			'thf_icon_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'thf_social_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_normal_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'thf_social_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover .thf-extra-item' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-icons-color:hover' => 'color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_icon_hover_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-icons-color:hover,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color .thf-before-icons,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icon:hover .thf-tooltip:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover:before,
				{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color:hover:after',							
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}.thf-icons-color',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_hover_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}}:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$this->add_control(
			'thf_social_icon_list',
			[
				'label' => esc_html__( 'Social Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'thf_social_icon_title' => esc_html__( 'Twitter', 'bwd-elementor-addons' ),
						'thf_social_icon' => [
							'value' => 'fab fa-twitter',
							'library' => 'solid',
						],
					],
					[	'thf_social_icon_title' => esc_html__( 'Facebook', 'bwd-elementor-addons' ),
						'thf_social_icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'solid',
						],
					],
					[
						'thf_social_icon_title' => esc_html__( 'Instagram', 'bwd-elementor-addons' ),
						'thf_social_icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ thf_social_icon_title }}}',
				'condition' => [
					'thf_header_footer_btn_type' => 'social_icon',
				],
			]
		);
		// Social Icon

		// 
		$this->add_responsive_control(
			'thf_nav_button_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'separator' => 'after',
				'options' => [
					'thf-dates-menu-area-left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'thf-dates-menu-area-center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'thf-dates-menu-area-right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'thf_menu_button_area',
			[
				'label' => esc_html__( 'Button Area (width:25%)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'selectors' => [
					'{{WRAPPER}} .thf-all-button-con' => 'flex-basis: {{SIZE}}%;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_nav_hamburger_menu',
			[
				'label' => esc_html__( 'Hamburger Icon', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thf_mobile_menu_breakpoint',
			[
				'label' => esc_html__( 'Breakpoint', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'mobile' => esc_html__( 'Mobile (768px >)', 'bwd-elementor-addons' ),
					'tablet' => esc_html__( 'Tablet (1025px >)', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'thf_hamburger_menu_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-bars',
					'library' => 'solid',
				],
			]
		);
		$this->add_control(
			'thf_mobile_menu_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				// 'default' => 'right',
				'separator' => 'after',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		// Style start
		$this->start_controls_section(
			'thf_style_section_for_top_bar',
			[
				'label' => esc_html__( 'Top Bar Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_top_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'thf_top_header_outer_width',
			[
				'label' => esc_html__( 'Top Header Outer Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .top-header-1' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_top_header_inner_width',
			[
				'label' => esc_html__( 'Top Header Inner  Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-top-header-width' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_top_bar_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .top-header-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_top_bar_bg_color',
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .top-header-1',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_style_section_for_header',
			[
				'label' => esc_html__( 'Header Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_menus_header_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .thf_header_common, {{WRAPPER}} .offcanvas-header-common .dates-menu-area, {{WRAPPER}} .offcanvas-header-common::after',
			]
		);
		$this->add_responsive_control(
			'thf_main_header_outer_width',
			[
				'label' => esc_html__( 'Header Outer Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .thf_header_common' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_header_inner_width',
			[
				'label' => esc_html__( 'Header Inner Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 4000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-main-header-width' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_wraper_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_header_common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'thf_style_section_for_logo',
			[
				'label' => esc_html__( 'Logo Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thf_main_logo_size',
			[
				'label' => esc_html__( 'Logo Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .dates-header-logo img' => ' height: {{SIZE}}px;',
				],
				'condition' => [
					'thf_choose_menu_type' => 'custom_logo',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .dates-header-logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_choose_menu_type' => 'custom_logo',
				],
            ]
        );
		if ( !has_custom_logo() ) {
		$this->add_control(
			'thf_header_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdhf_site_title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thf_choose_menu_type' => 'custom_text',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_header_title_typography',
				'selector' => '{{WRAPPER}} .bwdhf_site_title',
				'condition' => [
					'thf_choose_menu_type' => 'custom_text',
				],
			]
		);
		}
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_menus',
			[
				'label' => esc_html__( 'Menu Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_title_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item > li > a',
			]
		);
		$this->add_control(
			'thf_menus_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > a' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items > ul > li' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_menu_space',
			[
				'label' => esc_html__( 'Menu Item Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .menu-items > .thf-menu-part-item' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menus_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thf_header_menus_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .menu-items ul li, {{WRAPPER}} .sub-menu li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_hover_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li:hover a, {{WRAPPER}} .sub-menu li:hover',
			]
		);
		$this->add_control(
			'thf_menus_title_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li:hover a, {{WRAPPER}} .sub-menu li:hover' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items ul li:hover, {{WRAPPER}} .sub-menu li:hover, {{WRAPPER}} .thf-menu-part-item li .sub-menu li:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_hover_bg_overly_color',
			[
				'label' => esc_html__( 'Overlay', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-items .thf-menu-part-item li::after, {{WRAPPER}} .menu-items .thf-menu-part-item li:hover, {{WRAPPER}} .menu-items .thf-menu-part-item li a:hover::before, {{WRAPPER}} .menu-items .thf-menu-part-item li a:hover::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .menu-items .thf-menu-part-item li .sub-menu' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_active_status',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'thf_menus_title_active_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active-dates-menu-item a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_active_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .active-dates-menu-item' => 'background: {{VALUE}} !important',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_submenu_options',
			[
				'label' => esc_html__( 'Dropdown', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_title_submenu_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_title_submenu_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_dropdown_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li .sub-menu li a',
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_text_color',
			[
				'label' => esc_html__( 'Dropdown Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li .sub-menu li a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_main_indicator_title',
			[
				'label' => esc_html__( 'Dropdown Indicator', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'thf_menu_indicator_size',
			[
				'label' => esc_html__( 'Indicator Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item .menu-item-has-children::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children::before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_color',
			[
				'label' => esc_html__( 'Indicator Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sub-menu .menu-item-has-children a::before, {{WRAPPER}} .menu-item-has-children a::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children::before' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_responsive_control(
			'thf_main_indicator_space',
			[
				'label' => esc_html__( 'Indicator Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children::before' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
				'condition' => [
					'thf_submenu_indicator_alignment' => 'menu_indicator_right',
				],
			]
		);
		$this->add_responsive_control(
			'thf_child_indicator_space',
			[
				'label' => esc_html__( 'Child Indicator Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .sub-menu .menu-item-has-children::before' => 'right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
	
		$this->add_control(
			'thf_main_dropdown_border_title',
			[
				'label' => esc_html__( 'Dropdown Item Divider', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'thf_main_dropdown_border_style',
			[
				'label' => esc_html__( 'Border Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'solid' => esc_html__( 'Solid', 'bwd-elementor-addons' ),
					'double' => esc_html__( 'Double', 'bwd-elementor-addons' ),
					'dotted' => esc_html__( 'Dotted', 'bwd-elementor-addons' ),
					'dashed' => esc_html__( 'Dashed', 'bwd-elementor-addons' ),
					'groove' => esc_html__( 'Groove', 'bwd-elementor-addons' ),
					'ridge' => esc_html__( 'Ridge', 'bwd-elementor-addons' ),
					'inset' => esc_html__( 'Inset', 'bwd-elementor-addons' ),
					'outset' => esc_html__( 'Outset', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu > li:not(:last-child)' => 'border-bottom-style: {{VALUE}}',
				],
				
		
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_item_border_width',
			[
				'label' => esc_html__( 'Border Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu > li:not(:last-child)' => 'border-bottom-width: {{SIZE}}px;',
				],
				'condition' => [
					'thf_main_dropdown_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
		$this->add_control(
			'thf_menus_dropdown_border_item_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu > li:not(:last-child)' => 'border-bottom-color: {{VALUE}}',
				],
				'condition' => [
					'thf_main_dropdown_border_style' => ['solid', 'double', 'dotted', 'dashed', 'groove'],
				],
			]
		);
		$this->add_control(
			'thf_main_dropdown_width_title',
			[
				'label' => esc_html__( 'Dropdown Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_width',
			[
				'label' => esc_html__( 'Dropdown Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'width: {{SIZE}}px;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thf_main_dropdown_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thf-menu-part-item > li > .sub-menu',
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thf_main_dropdown_top_gap',
			[
				'label' => esc_html__( 'Dropdown Top Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'top: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_bg_color',
			[
				'label' => esc_html__( 'Dropdown Bg Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_menus_title_submenu_item_padding',
            [
                'label' => esc_html__('Dropdown Item Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .thf-menu-part-item li .sub-menu li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_title_submenu_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_title_dropdown_hover_typography',
				'selector' => '{{WRAPPER}} .thf-menu-part-item li .sub-menu li a:hover',
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_hover_text_color',
			[
				'label' => esc_html__( 'Dropdown Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li .sub-menu li a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'thf_menu_indicator_hover_size',
			[
				'label' => esc_html__( 'Indicator Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item .menu-item-has-children:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children:hover::before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_hover_color',
			[
				'label' => esc_html__( 'Indicator Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sub-menu .menu-item-has-children a:hover::before, {{WRAPPER}} .menu-item-has-children a:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children:hover::before, {{WRAPPER}} .thf-menu-part-item .menu-item-has-children .sub-menu .menu-item-has-children:hover::before' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_item_bg_hover_color',
			[
				'label' => esc_html__( 'Dropdown Item Bg Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item li .sub-menu li:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_title_submenu_bg_hover_color',
			[
				'label' => esc_html__( 'Dropdown Bg Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf-menu-part-item > li > .sub-menu:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_button',
			[
				'label' => esc_html__( 'Button Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_buttons_content_typography',
				'selector' => '{{WRAPPER}} .thf-title, a:before, a:after, .thf_creative_buttons a',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'thf_title_style_tabs'
		);

		$this->start_controls_tab(
			'thf_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-creative-buttons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		
		$this->add_control(
			'thf_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-creative-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title' => 'background: {{VALUE}}',
					
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'thf_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-creative-buttons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		
		$this->add_control(
			'thf_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title:hover' => 'color: {{VALUE}}',
					
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-creative-buttons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title::before, .thf_creative_buttons .thf-title:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_control(
			'thf_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-creative-buttons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thf_creative_buttons .thf-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .thf_creative_buttons .thf-title:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'thf_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-creative-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_creative_buttons .thf-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-creative-buttons' ),
				'selector' => '{{WRAPPER}} .thf_creative_buttons .thf-title',
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
			]
		);
		$this->add_responsive_control(
            'thf_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-creative-buttons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf_creative_buttons .thf-title, .thf_creative_buttons .thf-title:after, .thf-btn-eleven .thf-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thf_header_footer_btn_type' => 'custom',
				],
            ]
        );
		// End Custom Button
		$this->end_controls_section();


		// For Search Button start
		$this->start_controls_section(
			'thf_style_section_for_search_form',
			[
				'label' => esc_html__( 'Search Form', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Input Style
		$this->add_control(
			'thf_input_style_title_options',
			[
				'label' => esc_html__( 'Input Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_search_button_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_search_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_search_button_typography',
				'selector' => '{{WRAPPER}} .bwdsb-input-text',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_search_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_search_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdsb-input-text:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_search_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-input-text:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thf_header_menu_search_btn_padding_hover',
            [
                'label' => esc_html__('Input Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-input-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'thf_divider_aa',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Submit Style
		$this->add_control(
			'thf_submit_style_title_options',
			[
				'label' => esc_html__( 'Submit Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_submit_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_submit_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_submit_typography',
				'selector' => '{{WRAPPER}} .bwdsb-search-btn',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_submit_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_submit_hover_typography',
				'selector' => '{{WRAPPER}} .bwdsb-search-btn:hover',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_submit_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdsb-search-btn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thf_header_menu_submit_padding_hover',
            [
                'label' => esc_html__('Submit Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_control(
			'thf_divider_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Wrapper Style
		$this->add_control(
			'thf_wrapper_style_title_options',
			[
				'label' => esc_html__( 'Wrapper Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thf_menus_search_wrapper',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_wrapper_padding_hover',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thf_header_btn_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_search_btn_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
				// 'separator' => 'before',
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thf_search_form_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdsb-search-form',
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_btn_border-radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'search_form',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdsb-search-form .bwdsb-form input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		// Search for form end
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_admin_gravader',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thf_menus_menu_admin_style_post'
		);
		$this->start_controls_tab(
			'thf_menus_menu_admin_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_admin_typography',
				'selector' => '{{WRAPPER}} .thf-header-login-author a',
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_admin_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf-header-login-author a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thf_menus_menu_admin_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thf_menus_admin_hover_typography',
				'selector' => '{{WRAPPER}} .thf-header-login-author:hover a',
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_admin_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thf_header_menu_admin_padding_hover',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thf-header-login-author:hover a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'thf_menus_admin_size',
			[
				'label' => esc_html__( 'Image Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thf-header-login-author img' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'thf_header_footer_btn_type' => 'admin_icon_name',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thf_style_section_for_hamburger_menu',
			[
				'label' => esc_html__( 'Hamburger Icon', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thf_menus_hamburger_menu',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .dates-mobile-menu i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thf_menus_menu_hamburger_menu_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dates-mobile-menu i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$thf_header_style = $settings['thf_header_footer_styles'];
		$menus = $this->get_available_menus();
		if ( ! empty( $menus ) ) {
			$thf_choose_the_menu = $settings['thf_choose_main_menu'];
		} else{
			$thf_choose_the_menu = '';
		}
		$thf_nav_logo_switcher = $settings['thf_nav_logo_switcher'];
		$thf_tagline = $settings['thf_tagline_switcher'];
		$thf_search_form_style_selection = $settings['thf_search_form_style_selection'];
		if($thf_search_form_style_selection === $thf_search_form_style_selection){
			$thf_search_class = $thf_search_form_style_selection;
		}
		$thf_nav_search_form_text = $settings['thf_nav_search_form_text'];
		$thf_button_style_selection = $settings['thf_button_style_selection'];
		$thf_header_footer_btn_type = $settings['thf_header_footer_btn_type'];
		$thf_hamburger = $settings['thf_hamburger_menu_icon']['value'];
		$thf_menu_brkPoint = $settings['thf_mobile_menu_breakpoint'];

		$thf_choose_menu_type = $settings['thf_choose_menu_type'];
		$thf_choose_logo_link = $settings['thf_choose_logo_link'];
		$thf_custom_logo_text = $settings['thf_custom_logo_text'];
		
		$thf_sticky_h =$settings['thf_header_type'];

		if('yes' === $thf_sticky_h){
			$thf_dk_scroll = $settings['thf_menus_scroll_desktop_distance'];
		}


		
		$thf_id_menu = $settings['thf_menu_alignment'];
		if($thf_id_menu === $thf_id_menu){
			$thf_menu_align = $thf_id_menu;
		} else{
			$thf_menu_align = ' ';
		}
		$thf_id_button = $settings['thf_nav_button_alignment'];
		if($thf_id_button === $thf_id_button){
			$thf_button_align = $thf_id_button;
		} else{
			$thf_button_align = ' ';
		}

		$thf_mm_alignment = $settings['thf_mobile_menu_alignment'];
		if('left' === $thf_mm_alignment){
			$thf_mobile_align = 'thf_hb_left';
		} elseif('center' === $thf_mm_alignment){
			$thf_mobile_align = 'thf_hb_center';
		} elseif('right' === $thf_mm_alignment){
			$thf_mobile_align = 'thf_hb_right';
		} else{$thf_mobile_align = ' ';}

		$thf_nav_button_text = $settings['thf_nav_button_text'];
		$thf_social_icon_selection = $settings['thf_social_icon_selection'];
		if($thf_social_icon_selection === $thf_social_icon_selection){
			$thf_social_icon = $thf_social_icon_selection;
		}

		$thf_submenu_indicator_alignment = $settings['thf_submenu_indicator_alignment'];
		if($thf_submenu_indicator_alignment === $thf_submenu_indicator_alignment){
			$thf_menu_indi_align = $thf_submenu_indicator_alignment;
		} else{
			$thf_menu_indi_align = ' ';
		}
		$thf_main_menu_icon = $settings['thf_main_menu_icon'];
		if($thf_main_menu_icon === $thf_main_menu_icon){
			$thf_menu_i_main = $thf_main_menu_icon;
		}
		$thf_child_menu_icon = $settings['thf_child_menu_icon'];
		if($thf_child_menu_icon === $thf_child_menu_icon){
			$thf_menu_i_child = $thf_child_menu_icon;
		}
		$thf_menu_depth = $settings['thf_menu_depth'];
		$settings = $this->get_active_settings();
		$args = [
			'echo' => false,
			'menu' => $thf_choose_the_menu,
			'container' => 'div',
			'container_class' => 'menu-items',
			'menu_class' => 'thf-menu-part-item',
			'fallback_cb' => '__return_empty_string',
			'depth' => $thf_menu_depth,
		];
		?><div class="<?php echo esc_attr($thf_header_style); ?>"><?php
		// Menu header top ber
		$thf_header_top = $settings['thf_header_top_switcher'];
		switch ($thf_header_top) {
			case "yes":
				include( __DIR__ . '/templates/its-top.php' );
				break;
		}
		// Menu HTML
		$menu_html = wp_nav_menu( $args );
		if($thf_header_style == 'style1' || $thf_header_style == 'style2'){
			include( __DIR__ . '/templates/'.$thf_header_style.'.php' );
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
		?></div><?php
	}
}
