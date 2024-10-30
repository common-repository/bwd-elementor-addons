<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDSTfancyheading extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdst-fancy-heading';
	}

	public function get_title() {
		return esc_html__( 'Fancy Heading', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-text-area bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'fancy', 'heading', 'fancy heading' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'bwdst_stroke_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdst_stroke_text_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/fancy-heading/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->end_controls_section();
        $this->start_controls_section(
			'bwdst_stroke_content_style',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdst_stroke_text_heading', [
				'label' => esc_html__( 'Heading 1', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Fancy Heading', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style15'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->add_control(
			'bwdst_stroke_text_inside_extra_heading', [
				'label' => esc_html__( 'Inside Heading', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Heading', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style9'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->add_responsive_control(
			'bwdst_stroke_heading_position_size',
			[
				'label' => esc_html__( 'Inside text positioning', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px'],
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style9'],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text-two' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdst_stroke_heading_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px'],
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-text-15' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdst_stroke_text_extra_heading', [
				'label' => esc_html__( 'Heading 2', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style14'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->add_control(
			'bwdst_stroke_text_textarea', [
				'label' => esc_html__( 'Heading', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eligendi?
				', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
                'dynamic' => [
                    'active' => true,
                ],
			]
		);
		$this->start_controls_tabs(
			'bwdsi_stroke_style_tabs'
		);
        $this->start_controls_tab(
			'bwdsi_stroke_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style11', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_extra_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style7', 'style11', 'style17'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_extra_border_after_color',
			[
				'label' => esc_html__( 'Middle Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style7'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_extra_color',
			[
				'label' => esc_html__( 'Inner Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style9'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text-two' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_color',
			[
				'label' => esc_html__( 'Fill Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style5', 'style8', 'style12', 'style13', 'style14', 'style16', 'style19', 'style20', 'style21', 'style25', 'style28'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text .bwd-box' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:before' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:after' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text-box-two .bwd-inner-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_color',
			[
				'label' => esc_html__( 'Stroke Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style6', 'style7', 'style9', 'style10', 'style11', 'style12', 'style16', 'style17', 'style20', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text-two' => '-webkit-text-stroke-color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text .bwd-inner-text' => '-webkit-text-stroke-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_bg_right',
			[
				'label' => esc_html__( 'Background Right', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_bg_left',
			[
				'label' => esc_html__( 'Background Left', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style' => [ 'style15'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text-box-two' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdst_stroke_background',
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style1', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style13', 'style15', 'style17', 'style19', 'style24', 'style26', 'style27', 'style29'],
				],
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],	
				'exclude' => ['image', 'angle'],
				// 'options' => [
				// 	'angle' => false,
				// ],
				// 'default' => [
				// 	'angle' => 220,
				// ],
				'selector' => '{{WRAPPER}} .bwdst-text,							
								{{WRAPPER}} .bwdst-text:before,							
								{{WRAPPER}} .bwdst-text-two,							
								{{WRAPPER}} .bwd-bg-box',							
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdst_stroke_text_extra_size',
				'condition' => [
					'bwdst_stroke_text_style' => ['style9', 'style14'],
				],
				'selector' => '{{WRAPPER}} .bwdst-text-two',			
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdst_stroke_text_size',
				'selector' => '{{WRAPPER}} .bwdst-text,
								{{WRAPPER}} .bwd-inner-text,
								{{WRAPPER}} .bwdst-text .bwd-box',		
			]
		);
		$this->add_control(
			'bwdst_stroke_text_margin',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .bwdst-text-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
        $this->start_controls_tab(
			'bwdsi_stroke_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style11', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_hover_color',
			[
				'label' => esc_html__( 'Fill Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style9', 'style10', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:hover:before' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdst-text:hover:before' => '-webkit-text-fill-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdsi_stroke_text_hover_color',
			[
				'label' => esc_html__( 'Stroke Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdst_stroke_text_style!' => [ 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style12', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29'],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdst-text:hover:before' => '-webkit-text-stroke-color: {{VALUE}}',
				],
			]
		);
        $this->end_controls_tab();
        $this->end_controls_tabs();
		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Styles', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdst_stroke_style_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-items' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'background_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdst-stroke-items',
			]
		);
		$this->add_control(
			'bwdst_stroke_text_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdst_stroke_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdst-stroke-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();




    }

    protected function render() {
			$settings = $this->get_settings_for_display();
			// if ('style1' == $settings['bwdst_stroke_text_style'] || 'style2' == $settings['bwdst_stroke_text_style']) { 
			if ('style1' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-1 bwdst-stroke-items">
				<div class="bwdst-text" text-data="<?php echo esc_attr($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
        }elseif ('style2' === $settings['bwdst_stroke_text_style']) { 
		?>
			<div class="bwdst-stroke-text-2 bwdst-stroke-items">
				<div class="bwdst-text" text-data="<?php echo esc_attr($settings['bwdst_stroke_text_heading']);?>"><?php echo esc_html($settings['bwdst_stroke_text_heading']);?></div>
			</div>
		<?php
		// }
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}