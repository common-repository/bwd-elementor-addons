<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDDHHeading extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameDualHeading', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Dual Heading', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle dual-heading';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'bwddh_heading_content_section',
			[
				'label' => esc_html__( 'Heading Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwddh_style_selection',
			[
				'label' => esc_html__( 'Heading Styles', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/dual-heading/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		
		$this->add_control(
			'bwddh_heading_title_url_switcher',
			[
				'label' => esc_html__( 'Hide Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'yes' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bwddh_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);
		$this->add_control(
			'bwddh_heading_title_url',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'bwddh_heading_title_url_switcher' => 'yes',
				],
				'placeholder' => esc_attr( 'https://www.your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'https://www.google.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$this->add_control(
			'bwddh_heading_url_divider_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddh_heading_title01_switcher',
			[
				'label' => esc_html__( 'Hide Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'yes' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwddh_heading_title01',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'default' => esc_html__('Got to our main', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwddh_heading_title_style_tabs01'
		);
		$this->start_controls_tab(
			'bwddh_heading_title_normal_tab01',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_typography01',
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading .bwddh-first-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_color01',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading .bwddh-first-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwddh_heading_title_hover_tab01',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_hover_typography01',
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading:hover .bwddh-first-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_hover_color01',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title01_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading:hover .bwddh-first-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_control(
			'bwddh_heading_title02_divider_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddh_heading_divider_title02_switcher',
			[
				'label' => esc_html__( 'Hide Divider', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwddh_heading_divider_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heddi-1:after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwddh_heading_divider_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heddi-1:after' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwddh_heading_divider_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heddi-1:after' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'bwddh_heading_divider_width_position',
            [
                'label' => esc_html__('Position', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'condition' => [
					'bwddh_heading_divider_title02_switcher' => 'yes',
				],
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heddi-1:after' => 'position: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwddh_heading_title_headingdivider_divider_sk',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwddh_heading_title02_switcher',
			[
				'label' => esc_html__( 'Hide Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwddh_heading_title02',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'default' => esc_html__('Program', 'bwd-elementor-addons'),
				'label_block' => true,
			]
		);
		// Hover control start
		$this->start_controls_tabs(
			'bwddh_heading_title_style_tabs02'
		);
		$this->start_controls_tab(
			'bwddh_heading_title_normal_tab02',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_typography02',
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading .bwddh-sec-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_color02',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading .bwddh-sec-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwddh_heading_title_hover_tab02',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwddh_heading_title_hover_typography02',
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selector' => '{{WRAPPER}} .bwddh-heading:hover .bwddh-sec-hedi',
			]
		);
		$this->add_control(
			'bwddh_heading_title_hover_color02',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'bwddh_heading_title02_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwddh-heading:hover .bwddh-sec-hedi' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwddh_heading_style_section',
			[
				'label' => esc_html__( 'Heading Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwddh_heading_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bwddh-heading',
			]
		);
		$this->add_responsive_control(
            'bwddh_heading_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwddh_heading_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwddh_heading_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwddh-heading' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwddh_alignment = $settings['bwddh_alignment'];
		if('left' === $bwddh_alignment){
			$bwddh_align_p = 'bwddh_for_align_left';
		} elseif('center' === $bwddh_alignment){
			$bwddh_align_p = 'default';
		} elseif('right' === $bwddh_alignment){
			$bwddh_align_p = 'bwddh_for_align_right';
		}
		if('style1' == $settings['bwddh_style_selection'] || 'style2' == $settings['bwddh_style_selection']){
		if('style1' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo esc_attr($bwddh_align_p); ?> bwddh-dual-hedi-1">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-1"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		} elseif('style2' === $settings['bwddh_style_selection']){
		?>
		<?php if('yes' === $settings['bwddh_heading_title_url_switcher']){ ?><a class="bwddh_the_link" href="<?php echo esc_url($settings['bwddh_heading_title_url']['url']); ?>"><?php } ?><div class="bwddh-heading <?php echo esc_attr($bwddh_align_p); ?> bwddh-dual-hedi-2">
			<?php if('yes' === $settings['bwddh_heading_title01_switcher']){ ?><div class="bwddh-first-hedi <?php if('yes' === $settings['bwddh_heading_divider_title02_switcher']){ ?>bwddh-heddi-1 <?php } ?>"><?php echo esc_html($settings['bwddh_heading_title01']); ?></div><?php } if('yes' === $settings['bwddh_heading_title02_switcher']){ ?><div class="bwddh-sec-hedi bwddh-cor-hedi-2"><?php echo esc_html($settings['bwddh_heading_title02']); ?></div><?php } ?>
		</div></a>
		<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
