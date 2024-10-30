<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdalAnimatedLink extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdal-animated-link', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Animated Link', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return ' eicon-editor-external-link bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	protected function register_controls() {


		//tab-content
		$this->start_controls_section(
			'bwdal_content_section',
			[
				'label' => esc_html__( 'Animated Link', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdal_style_selection',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/animated-link/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();



		$this->start_controls_section(
			'bwdal_title_section',
			[
				'label' => esc_html__( 'Animated Link Title', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//title
		$this->add_control(
			'bwdal_main_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Animated Link', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Title Here', 'bwd-elementor-addons' ),
				'label_block' => ['true'],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//link
		$this->add_control(
			'bwdal_link-url',
			[
				'label' => esc_html__( 'Link URL', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Link URL Here', 'bwd-elementor-addons' ),
				'label_block' => ['true'],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdal_style_alignment',
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
					'{{WRAPPER}} .bwdal_link_alignment' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'separator' => 'before',
				'default' => 'center',
			]
		);
		$this->end_controls_section();


		//tab-style title
		$this->start_controls_section(
			'bwdal_title__style_section',
			[
				'label' => esc_html__( 'Animated Link Style', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//tabs------------------------------------------
		$this->start_controls_tabs(
			'style_tabs'
		);

		//normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdal_title_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink' => 'color: {{VALUE}}',
				],
			]
		);

		//Background color
		$this->add_control(
			'bwdal_title_background_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2','style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style38', 'style39', 'style41', 'style41']
				],
			]
		);

		//style color
		$this->add_control(
			'bwdal_title_style_color',
			[
				'label' => esc_html__( 'Style Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box::before' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box1::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box1::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style3', 'style4', 'style6', 'style10', 'style14', 'style15', 'style16', 'style31', 'style38', 'style39', 'style40']
				],
			]
		);

		//gradient_bg 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdal_gradient_bg',
				'label' => esc_html__( 'Gradient Background', 'bwdbh-business-hours' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdal_animated_box::before',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41']
				],
			]
		);

		//style notbg color for style4
		$this->add_control(
			'bwdal_style_notbg',
			[
				'label' => esc_html__( 'Style Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box::after' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box::before' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2', 'style3', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style39', 'style40', 'style41']
				],
			]
		);

		//border for style10
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdal_text_border_style',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdal_animated_box::after',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style1', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style40', 'style41']
				],
			]
		);
		$this->end_controls_tab();



		//hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//color
		$this->add_control(
			'bwdal_title_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//style color
		$this->add_control(
			'bwdal_title_style_hover_color',
			[
				'label' => esc_html__( 'Style Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box:hover::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box:hover::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style3', 'style4', 'style5', 'style6', 'style7', 'style10', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style25', 'style30', 'style31', 'style34', 'style37', 'style38', 'style39', 'style40']
				],
			]
		);

		//gradient_bg for style5
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdal_gradient_hover_bg',
				'label' => esc_html__( 'Gradient Background', 'bwdbh-business-hours' ),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdal_animated_box:hover::before',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9' , 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style39', 'style40', 'style41']
				],
			]
		);

		//border for style10
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdal_text_border_hover_style',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdal_animated_box:hover::before',
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style1', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style38', 'style40', 'style41']
				],
			]
		);

		//style bgcolor 38
		$this->add_control(
			'bwdal_title_style_bgcolor',
			[
				'label' => esc_html__( 'Style Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdal_animated_box::after' => 'Background: {{VALUE}}',
					'{{WRAPPER}} .bwdal_animated_box1::before' => 'Background: {{VALUE}}',
				],
				'condition' => [
					'bwdal_style_selection!' => ['style1', 'style2','style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style32', 'style33', 'style34', 'style35', 'style36', 'style37', 'style39', 'style41']
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdal_title_typography',
				'selector' => '{{WRAPPER}} .bwdal_title_textlink',
				'separator' => 'before',
			]
		);

		//padding
		$this->add_responsive_control(
			'bwdal_link_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdal_title_textlink' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		if ( ! empty( $settings['bwdal_link-url']['url'] ) ) {
			$this->add_link_attributes( 'bwdal_link-url', esc_url($settings['bwdal_link-url']) );
		}
		$settings = $this->get_settings_for_display();
		$bwdal_style_selection = $settings['bwdal_style_selection'];
		$bwdal_main_title = $settings['bwdal_main_title'];
		$bwdal_link_url = $settings['bwdal_link-url']['url'];
		if($bwdal_style_selection == 'style1' || $bwdal_style_selection == 'style2'){
			if( 'style1' === $bwdal_style_selection ) {
				?>
				<div class="bwdal_link_1 bwdal_link_alignment">
					<a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
				</div>
				<?php
			}elseif( 'style2' === $bwdal_style_selection ) {
				?>
				<div class="bwdal_link_2 bwdal_link_alignment">
					<a class="bwdal_animated_box bwdal_title_textlink" href="<?php echo esc_url($bwdal_link_url); ?>"><?php echo esc_html($bwdal_main_title); ?></a>
				</div>
				<?php
			}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}
