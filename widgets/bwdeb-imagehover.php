<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDhbhimageHover extends \Elementor\Widget_Base {


	public function get_name() {
		return 'bwbih-image-hover';
	}

	public function get_title() {
		return esc_html__( 'Image Hover Effect', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-animation bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

    public function get_keywords() {
		return [ 'image', 'hover', 'effect', 'bwd', 'image hover', 'animation'  ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdih_hover_box_choose_style',
		    [
		        'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		    ]
		);
		$this->add_control(
			'bwdih_hover_box_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/image-hover-effect/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdih_hover_box_column_option',
			[
				'label' => esc_html__( 'Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'12'  => esc_html__( '1', 'bwd-elementor-addons' ),
					'6' => esc_html__( '2', 'bwd-elementor-addons' ),
					'4' => esc_html__( '3', 'bwd-elementor-addons' ),
					'3' => esc_html__( '4', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'bwdih_hover_content_icon',
		    [
		        'label' => esc_html__('Box Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdih_hover_box_image', 
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				]
			]
		);
        $repeater->add_control(
			'bwdih_hover_box_name',
			[
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'separator' => 'before',
				'dynamic' => [
                    'active' => true,
                ],
				'placeholder' => esc_html__( 'Type your name here', 'bwd-elementor-addons' ),
			]
		);
		// name color
		$repeater->add_control(
			'bwdih_name_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdih_name_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-title',
			]
		);		
		$repeater->add_control(
			'bwdih_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'dynamic' => [
                    'active' => true,
                ],
                'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, natus.', 'bwd-elementor-addons' ),
				'separator' => 'before',
				'placeholder' => esc_html__( 'Write Description here', 'bwd-elementor-addons' ),
			]
		);
		// title color
		$repeater->add_control(
			'bwdih_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-decs' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-decs',
			]
		);		
		$repeater->add_control(
			'bwdih_btn_title',
			[
				'label' => esc_html__( 'Button title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'default' => esc_html__( 'Read More', 'bwd-elementor-addons' ),
                'label_block' => true,
				'placeholder' => esc_html__( 'Write button here', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_control(
			'bwdih_btn_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'Write button link here', 'bwd-elementor-addons' ),
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
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdih_button_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a',
			]
		);
		$repeater->add_control(
			'bwdih_btn_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdih_btn_background_color',
			[
				'label' => esc_html__( 'Backgroud Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdih_btn_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a',
			]
		);
		$repeater->add_responsive_control(
			'bwdih_btn_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'bwdih_btn_adv_radius',
			[
				'label'       => __( 'Advanced Border Radius', 'bwd-elementor-addons' ),
				'type'        => Controls_Manager::SWITCHER,
				'description' => __( 'Apply custom radius values. Get the radius value from ', 'premium-addons-for-elementor' ) . '<a href="https://9elements.github.io/fancy-border-radius/" target="_blank">here</a>',
			]
		);
		$repeater->add_control(
			'bwdih_btn_adv_radius_value',
			[
				'label'     => __( 'Border Radius', 'bwd-elementor-addons' ),
				'type'      => Controls_Manager::TEXT,
				'dynamic'   => array( 'active' => true ),
				'selectors' => array(
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'border-radius: {{VALUE}};',
				),
				'condition' => array(
					'bwdih_btn_adv_radius' => 'yes',
				),
			]
		);
		$repeater->add_responsive_control(
			'bwdih_btn_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover',
			]
		);
		$repeater->add_control(
			'bwdih_btn_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'bwdih_btn_background_hover_color',
			[
				'label' => esc_html__( 'Backgroud color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdih_hover_btn_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover',
			]
		);
		$repeater->add_responsive_control(
			'bwdih_btn_hover_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-hover-button a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		$repeater->add_responsive_control(
			'bwdih_wrapper_bottom_space',
			[
				'label' => esc_html__( 'Item Bottom Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' =>['px', 'em', 'rem'] ,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-wrapper-box' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdih_hover_list',
			[
				'label' => esc_html__( 'Hover List', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdih_hover_box_name' => esc_html__( 'Williamson', 'bwd-elementor-addons' ),
					],
					[
						'bwdih_hover_box_name' => esc_html__( 'Jonduae', 'bwd-elementor-addons' ),
					],
					[
						'bwdih_hover_box_name' => esc_html__( 'Alexraue', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdih_hover_box_name }}}',
			]
		);

    	$this->end_controls_section();

		// style-tab
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Styles', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'hoverbox_border_radius',
			[
				'label' => esc_html__( 'Box border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'hoverbox_padding',
			[
				'label' => esc_html__( 'Box padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'hoverbox_margin',
			[
				'label' => esc_html__( 'Box margin', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-wrapper-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdih_bg_heading1',
			[
				'label' => esc_html__( 'Main background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdih_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-hover-part',
			]
		);
		$this->add_control(
			'bwdih_bg_heading2',
			[
				'label' => esc_html__( 'Inside background', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdih_background_content',
				'label' => esc_html__( 'Inside background ', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwd-hover-content',
			]
		);
		$this->add_control(
			'bwdih_overlay_color1',
			[
				'label' => esc_html__( 'Overlay Color 1', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdih_overlay_color2',
			[
				'label' => esc_html__( 'Overlay Color 2', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-hover-part:after' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdih_hover_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-hover-part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdih_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwd-hover-part',
			]
		);

		$this->end_controls_section();

    }

	protected function render() {

    $settings = $this->get_settings_for_display();

	if ( ! empty( $settings['bwdih_btn_link']['url'] ) ) {
		$this->add_link_attributes( 'bwdih_btn_link', $settings['bwdih_btn_link'] );
	}

	if ('style1' == $settings['bwdih_hover_box_style'] || 'style2' == $settings['bwdih_hover_box_style']) { 
	if ('style1' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-1">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach ( $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_url($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url($item['bwdih_btn_link']['url']);?>"><?php echo esc_attr ($item['bwdih_btn_title']);?></a>
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
	}elseif('style2' === $settings['bwdih_hover_box_style']) { 
	?>
	<div class="bwd-hover-box-2">
		<div class="container-fluid">
			<div class="row">
				<?php
				if ( $settings['bwdih_hover_list'] ) {
					foreach (  $settings['bwdih_hover_list'] as $item ) { ?>
					<div class="col-xl-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-lg-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-sm-<?php echo esc_attr($settings['bwdih_hover_box_column_option']); ?> col-md-4 col-sm-6">
						<?php echo '<div class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="bwd-wrapper-box">
								<div class="bwd-hover-part">
									<div class="bwd-img-box">
										<img src="<?php echo esc_attr ($item['bwdih_hover_box_image']['url']); ?>" alt="">
									</div>
									<div class="bwd-hover-content">
										<div class="bwd-hover-title"><?php echo esc_html($item['bwdih_hover_box_name']); ?></div>
										<div class="bwd-hover-decs"><?php echo esc_html($item['bwdih_description']); ?></div>
										<div class="bwd-hover-button">
										<a href="<?php echo esc_url ($item['bwdih_btn_link']['url']); ?>"><?php echo esc_html($item['bwdih_btn_title']);?></a>
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