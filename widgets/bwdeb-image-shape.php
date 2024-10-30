<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDIMimageshape extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwdim-image-shape';
	}

	public function get_title() {
		return esc_html__( 'Image Shape', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-shape bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'image', 'shape', 'image shape' ];
	}

	

	protected function register_controls() {

		$this->start_controls_section(
			'bwdim_image_shape_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdim_image_shape_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/bwd-image-shape/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
			'bwdim_image_shape_content_style',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdim_image_shape',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_show_link',
			[
				'label' => esc_html__( 'Show Image Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write link here', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_shape_show_link' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_show_overlry_color',
			[
				'label' => esc_html__( 'Show Overlay', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_decs_overley_color',
			[
				'label' => esc_html__( 'Overlay Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_shape_show_overlry_color' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} a::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_show_title',
			[
				'label' => esc_html__( 'Show Animation', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'No',
			]
		);
		$this->add_control(
			'bwdim_image_show_title',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_shape_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Williamson', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_show_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_show_decs',
			[
				'label' => esc_html__( 'Show Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_shape_decs',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, suscipit.', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_show_decs' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_show_button_title',
			[
				'label' => esc_html__( 'Show Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdim_image_shape_btn_title',
			[
				'label' => esc_html__( 'Button Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_image_shape_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write link here', 'bwd-elementor-addons' ),
				'default' => [
					'url' => '#',
				],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'title_style_section',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdim_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdim-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdim_image_show_title' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_title_font_size',
				'selector' => '{{WRAPPER}} .bwdim-title',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'decs_style_section',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdim_decs_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_decs' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_decs_font_size',
				'selector' => '{{WRAPPER}} .bwdim-decs',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'button_style_section',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'style_tabs'
		);
		
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_normal_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_button_font_size',
				'selector' => '{{WRAPPER}} .bwdim-button a',
			]
		);
		$this->add_responsive_control(
			'bwdim_btn_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdim-button a',
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdim_btn_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a:hover' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'bwdim_btn_background_hover_color',
			[
				'label' => esc_html__( 'Backgroud color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a:hover' => 'background: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdim_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdim-button a:hover',
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdim_btn_border_hover_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'condition' => [
					'bwdim_image_show_button_title' => 'yes',
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-button a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
        $this->end_controls_section();
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdim_image_shape_width',
			[
				'label' => esc_html__( 'Image Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdim-box a' => 'height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdim-box-thirty-six a' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdim_image_style_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdim-box' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'background_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdim-box',
			]
		);
		$this->add_control(
			'bwdim_image_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdim_image_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdim-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
		$bwdim_image_anim = $settings['bwdim_image_shape_show_title'];
		$bwdim_btn_swit = $settings['bwdim_image_show_button_title'];
		$is_overlay_show = $settings['bwdim_image_shape_show_overlry_color'];
		if($is_overlay_show === 'yes'){
			$overlay_show = 'bwdim-active-overlay';
		}else{
			$overlay_show = '';
		}

	if ('style1' == $settings['bwdim_image_shape_style'] || 'style2' == $settings['bwdim_image_shape_style']) { 
	if ('style1' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-1">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo esc_attr('active-anim');} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>">
						<img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo esc_attr('bwdim-deactive-btn');} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}elseif('style2' === $settings['bwdim_image_shape_style']) { 
		?>
			<div class="bwdim-image-shape-2">
				<div class="bwdim-image-items">
					<div class="bwdim-box <?php if($bwdim_image_anim === 'yes'){echo esc_attr('active-anim');} ?>">
						<a href="<?php echo esc_url($settings['bwdim_image_link']['url']);?>" class="<?php echo esc_attr($overlay_show);?>"><img src="<?php echo esc_attr($settings['bwdim_image_shape']['url']); ?>" alt=""></a>
					</div>
					<div class="bwdim-content-box">
						<div class="bwdim-title">
							<?php echo esc_html($settings['bwdim_image_shape_title']);?>
						</div>
						<div class="bwdim-decs">
							<?php echo esc_html($settings['bwdim_image_shape_decs']);?>
						</div>
						<div class="bwdim-button">
							<a href="<?php echo esc_url($settings['bwdim_image_shape_btn_link']['url']);?>" class="<?php if($bwdim_btn_swit !== 'yes'){echo esc_attr('bwdim-deactive-btn');} ?>"><?php echo esc_html($settings['bwdim_image_shape_btn_title']);?></a>
						</div>
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