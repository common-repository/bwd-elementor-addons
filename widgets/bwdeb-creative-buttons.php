<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_CBTNSCreativeButtons extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameCreativeButtons', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Creative Buttons', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-dual-button';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'cbtns_buttons_content_section',
			[
				'label' => esc_html__( 'Buttons Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'cbtns_style_selection',
			[
				'label' => esc_html__( 'Button Styles', 'bwd-elementor-addons' ),
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
					'style25' => esc_html__( 'Style 25 (PRO)', 'bwd-elementor-addons' ),
					'style26' => esc_html__( 'Style 26 (PRO)', 'bwd-elementor-addons' ),
					'style27' => esc_html__( 'Style 27 (PRO)', 'bwd-elementor-addons' ),
					'style28' => esc_html__( 'Style 28 (PRO)', 'bwd-elementor-addons' ),
					'style29' => esc_html__( 'Style 29 (PRO)', 'bwd-elementor-addons' ),
					'style30' => esc_html__( 'Style 30 (PRO)', 'bwd-elementor-addons' ),
					'style31' => esc_html__( 'Style 31 (PRO)', 'bwd-elementor-addons' ),
					'style32' => esc_html__( 'Style 32 (PRO)', 'bwd-elementor-addons' ),
					'style33' => esc_html__( 'Style 33 (PRO)', 'bwd-elementor-addons' ),
					'style34' => esc_html__( 'Style 34 (PRO)', 'bwd-elementor-addons' ),
					'style35' => esc_html__( 'Style 35 (PRO)', 'bwd-elementor-addons' ),
					'style36' => esc_html__( 'Style 36 (PRO)', 'bwd-elementor-addons' ),
					'style37' => esc_html__( 'Style 37 (PRO)', 'bwd-elementor-addons' ),
					'style38' => esc_html__( 'Style 38 (PRO)', 'bwd-elementor-addons' ),
					'style39' => esc_html__( 'Style 39 (PRO)', 'bwd-elementor-addons' ),
					'style40' => esc_html__( 'Style 40 (PRO)', 'bwd-elementor-addons' ),
					'style41' => esc_html__( 'Style 41 (PRO)', 'bwd-elementor-addons' ),
					'style42' => esc_html__( 'Style 42 (PRO)', 'bwd-elementor-addons' ),
					'style43' => esc_html__( 'Style 43 (PRO)', 'bwd-elementor-addons' ),
					'style44' => esc_html__( 'Style 44 (PRO)', 'bwd-elementor-addons' ),
					'style45' => esc_html__( 'Style 45 (PRO)', 'bwd-elementor-addons' ),
					'style46' => esc_html__( 'Style 46 (PRO)', 'bwd-elementor-addons' ),
					'style47' => esc_html__( 'Style 47 (PRO)', 'bwd-elementor-addons' ),
					'style48' => esc_html__( 'Style 48 (PRO)', 'bwd-elementor-addons' ),
					'style49' => esc_html__( 'Style 49 (PRO)', 'bwd-elementor-addons' ),
					'style50' => esc_html__( 'Style 50 (PRO)', 'bwd-elementor-addons' ),
					'style51' => esc_html__( 'Style 51 (PRO)', 'bwd-elementor-addons' ),
					'style52' => esc_html__( 'Style 52 (PRO)', 'bwd-elementor-addons' ),
					'style53' => esc_html__( 'Style 53 (PRO)', 'bwd-elementor-addons' ),
					'style54' => esc_html__( 'Style 54 (PRO)', 'bwd-elementor-addons' ),
					'style55' => esc_html__( 'Style 55 (PRO)', 'bwd-elementor-addons' ),
					'style56' => esc_html__( 'Style 56 (PRO)', 'bwd-elementor-addons' ),
					'style57' => esc_html__( 'Style 57 (PRO)', 'bwd-elementor-addons' ),
					'style58' => esc_html__( 'Style 58 (PRO)', 'bwd-elementor-addons' ),
					'style59' => esc_html__( 'Style 59 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style60' => esc_html__( 'Style 60 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style61' => esc_html__( 'Style 61 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style62' => esc_html__( 'Style 62 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style63' => esc_html__( 'Style 63 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style64' => esc_html__( 'Style 64 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style65' => esc_html__( 'Style 65 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style66' => esc_html__( 'Style 66 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style67' => esc_html__( 'Style 67 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style68' => esc_html__( 'Style 68 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style69' => esc_html__( 'Style 69 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style70' => esc_html__( 'Style 70 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style71' => esc_html__( 'Style 71 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style72' => esc_html__( 'Style 72 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style73' => esc_html__( 'Style 73 Gradient (PRO)', 'bwd-elementor-addons' ),
					'style74' => esc_html__( 'Style 74 Social (PRO)', 'bwd-elementor-addons' ),
					'style75' => esc_html__( 'Style 75 Social (PRO)', 'bwd-elementor-addons' ),
					'style76' => esc_html__( 'Style 76 Social (PRO)', 'bwd-elementor-addons' ),
					'style77' => esc_html__( 'Style 77 Social (PRO)', 'bwd-elementor-addons' ),
					'style78' => esc_html__( 'Style 78 Social (PRO)', 'bwd-elementor-addons' ),
					'style79' => esc_html__( 'Style 79 Social (PRO)', 'bwd-elementor-addons' ),
					'style80' => esc_html__( 'Style 80 Social (PRO)', 'bwd-elementor-addons' ),
					'style81' => esc_html__( 'Style 81 (PRO)', 'bwd-elementor-addons' ),
					'style82' => esc_html__( 'Style 82 (PRO)', 'bwd-elementor-addons' ),
					'style83' => esc_html__( 'Style 83 (PRO)', 'bwd-elementor-addons' ),
					'style84' => esc_html__( 'Style 84 (PRO)', 'bwd-elementor-addons' ),
					'style85' => esc_html__( 'Style 85 (PRO)', 'bwd-elementor-addons' ),
					'style86' => esc_html__( 'Style 86 (PRO)', 'bwd-elementor-addons' ),
					'style87' => esc_html__( 'Style 87 Masking (PRO)', 'bwd-elementor-addons' ),
					'style88' => esc_html__( 'Style 88 Masking (PRO)', 'bwd-elementor-addons' ),
					'style89' => esc_html__( 'Style 89 Masking (PRO)', 'bwd-elementor-addons' ),
					'style90' => esc_html__( 'Style 90 Masking (PRO)', 'bwd-elementor-addons' ),
					'style91' => esc_html__( 'Style 91 Masking (PRO)', 'bwd-elementor-addons' ),
					'style92' => esc_html__( 'Style 92 Masking (PRO)', 'bwd-elementor-addons' ),
					'style93' => esc_html__( 'Style 93 Masking (PRO)', 'bwd-elementor-addons' ),
					'style94' => esc_html__( 'Style 94 Masking (PRO)', 'bwd-elementor-addons' ),
					'style95' => esc_html__( 'Style 95 Masking (PRO)', 'bwd-elementor-addons' ),
					'style96' => esc_html__( 'Style 96 Masking (PRO)', 'bwd-elementor-addons' ),
					'style97' => esc_html__( 'Style 97 Masking (PRO)', 'bwd-elementor-addons' ),
					'style98' => esc_html__( 'Style 98 Masking (PRO)', 'bwd-elementor-addons' ),
					'style99' => esc_html__( 'Style 99 Masking (PRO)', 'bwd-elementor-addons' ),
					'style100' => esc_html__( 'Style 100 Masking (PRO)', 'bwd-elementor-addons' ),
					'style101' => esc_html__( 'Style 101 Masking (PRO)', 'bwd-elementor-addons' ),
					'style102' => esc_html__( 'Style 102 Masking (PRO)', 'bwd-elementor-addons' ),
					'style103' => esc_html__( 'Style 103 Masking (PRO)', 'bwd-elementor-addons' ),
					'style104' => esc_html__( 'Style 104 Masking (PRO)', 'bwd-elementor-addons' ),
					'style105' => esc_html__( 'Style 105 Masking (PRO)', 'bwd-elementor-addons' ),
					'style106' => esc_html__( 'Style 106 Masking (PRO)', 'bwd-elementor-addons' ),
					'style107' => esc_html__( 'Style 107 Masking (PRO)', 'bwd-elementor-addons' ),
					'style108' => esc_html__( 'Style 108 Masking (PRO)', 'bwd-elementor-addons' ),
					'style109' => esc_html__( 'Style 109 Masking (PRO)', 'bwd-elementor-addons' ),
					'style110' => esc_html__( 'Style 110 Masking (PRO)', 'bwd-elementor-addons' ),
					'style111' => esc_html__( 'Style 111 Masking (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/creative-button/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'cbtns_text_buttons', [
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Click Here' , 'bwd-elementor-addons' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'cbtns_link_buttons',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_attr__( 'https://www.your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$this->add_control(
			'cbtns_alignment_buttons',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
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
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .cbtns-button-box' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'cbtns_buttons_a',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'cbtns_buttons_icon_switcher',
			[
				'label' => esc_html__( 'Show Icon (If Has)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'cbtns_content_icon_button',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'cbtns_buttons_icon_positions',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon_position_right',
				'options' => [
					'icon_position_right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'icon_position_left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'cbtns_title_style_tabsxs'
		);

		$this->start_controls_tab(
			'cbtns_title_style_normal_tabxx',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'cbtns_content_quote_right_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns-icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_hoveraaaa_sssssbackground',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .cbtns-icon',
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'cbtns_content_quote_right_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns-icon' => 'background: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'cbtns_title_style_hover_tabaa',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'cbtns_content_quote_right_colorss',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a:hover .cbtns-icon' => 'color: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_hoveraaaa_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} a:hover .cbtns-icon',
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'cbtns_content_quote_right_hover_colordd',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a:hover .cbtns-icon' => 'background: {{VALUE}}',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end

		
		$this->add_responsive_control(
			'cbtns_buttons_the_box_right_icon_size',
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
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .cbtns-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);


		$this->add_control(
			'cbtns_buttons_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_responsive_control(
			'cbtns_buttons_social_border_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} a .cbtns-icon' => 'block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'cbtns_buttons_social_border_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} a .cbtns-icon' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'cbtns_buttons_social_border_radius',
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
				'desktop_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'laptop' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'tablet_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '',
					'unit' => 'px',
				],
				'mobile_extra' => [
					'size' => '',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} a .cbtns-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'cbtns_buttons_icon_switcher' => 'yes',
				],
			]
		);

		$this->add_control(
			'cbtns_buttons_ska',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'cbtns_buttons_custom_class_id', [
				'label' => esc_html__( 'Class ID (Custom)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'description' => sprintf(
					esc_html__( 'Please make sure the Class and ID is unique. This field allows %1$sA-z 0-9%2$s & underscore chars without spaces.', 'bwd-elementor-addons' ),
					'<code>',
					'</code>'
				),
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'cbtns_buttons_style_section',
			[
				'label' => esc_html__( 'Buttons Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'cbtns_buttons_content_typography',
				'selector' => '{{WRAPPER}} .cbtns-title, a:before, a:after, .cbtns_creative_buttons a',
			]
		);
		$this->add_control(
			'cbtns_buttons_text_shadow', [
				'label' => esc_html__( 'Text Shadow', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT_SHADOW,
				'default' => [
					'color' => 'transparent'
				],
				'selectors' => [
					'{{SELECTOR}} {{WRAPPER}} .cbtns-title' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
			]
		);
		// Hover
		$this->start_controls_tabs(
			'cbtns_title_style_tabs'
		);

		$this->start_controls_tab(
			'cbtns_title_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'cbtns_title_content_text_normal_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_normal_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title',
			]
		);
		$this->add_control(
			'cbtns_title_content_normal_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'cbtns_title_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'cbtns_title_content_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title:hover' => 'color: {{VALUE}}',
					
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cbtns_button_hover_background',
				'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::before, .cbtns_creative_buttons .cbtns-title:hover',
			]
		);
		$this->add_control(
			'cbtns_title_content_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::before' => 'border-color: {{VALUE}}', // Style no 56
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title::after' => 'border-color: {{VALUE}}', // Style no 56
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title:hover' => 'background: {{VALUE}}',
					'{{WRAPPER}} .cbtns_creative_buttons .cbtns-title:hover' => 'background: {{VALUE}}',
					
				],
			]
		);
		$this->add_control(
			'cbtns_buttons_entrance_animation',
			[
				'label' => esc_html__( 'Entrance Animation', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ANIMATION,
				'prefix_class' => '.cbtns_creative_buttons',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover end
		
		$this->add_responsive_control(
            'cbtns_buttons_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'cbtns_buttons_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title',
			]
		);
		$this->add_responsive_control(
            'cbtns_buttons_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtns_creative_buttons .cbtns-title, .cbtns_creative_buttons .cbtns-title:after, .cbtns-btn-eleven .cbtns-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$cbtns_styles = $settings['cbtns_style_selection'];
		// Social Link
		if ( ! empty( $settings['cbtns_link_buttons']['url'] ) ) {
			$this->add_link_attributes( 'cbtns_link_buttons', $settings['cbtns_link_buttons'] );
		}
		if('style1' == $settings['cbtns_style_selection'] || 'style2' == $settings['cbtns_style_selection']){
		?>
			<div class="cbtns-button-box">
			<?php
			// Single buttons
			if( $cbtns_styles ){ ?>
				<div class="cbtns-btn-<?php echo $cbtns_styles ?> cbtns_creative_buttons <?php echo esc_attr($settings['cbtns_buttons_custom_class_id']); ?>">
					<a href="<?php echo esc_url($settings['cbtns_link_buttons']['url']); ?>">
					<div class="cbtns-title"><?php echo esc_html__($settings['cbtns_text_buttons']); ?></div>
					   <?php if($cbtns_styles == 'two'){?>
							<span style="top: 59.7969px; left: 2.46875px;"></span>
					   <?php }
					   if($cbtns_styles == 'fourty'){?>
					    	<span></span>
						<?php }
						if($cbtns_styles == 'fiftythree'){?>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						<?php }
						if($cbtns_styles == 'eightyone'){?>
							<div class="liquid"></div>
						<?php }
						if($cbtns_styles == 'eightythree'){?>
							<span></span>
							<span></span>
						<?php }
						if($cbtns_styles == 'eightysix'){?>
							<span></span>
						<?php }?>
					</a>
				</div>
			    <?php
			}?>
		</div> <!-- Buttons Alignment -->
		<?php
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
