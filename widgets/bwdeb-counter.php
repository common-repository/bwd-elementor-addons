<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDCCounterWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdcCounter', 'bwd-elementor-addons' );
	}
	public function get_title() {
		return esc_html__( 'Counter', 'bwd-elementor-addons' );
	}
	public function get_icon() {
		return 'icon-counter bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'counter', 'bwd counter', 'number' ];
	}
	protected function register_controls() {
     // counter layout control section start
		$this->start_controls_section(
			'bwdc_counter_layout_section',
			[
				'label' => esc_html__( 'Counter Layout', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdc_counter_choose',
			[
				'label' => esc_html__( 'Choose Styles', 'bwd-elementor-addons' ),
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/counter/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		// column control
		$this->add_control(
			'bwdc_column',
			[
				'label' => esc_html__( 'Column', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'4' => esc_html__( '4', 'bwd-elementor-addons' ),
					'3' => esc_html__( '3', 'bwd-elementor-addons' ),
					'2' => esc_html__( '2', 'bwd-elementor-addons' ),
					'1' => esc_html__( '1', 'bwd-elementor-addons' ),
				]
			]
		);
		$this->end_controls_section();
		// counter layout control section end

		// counter content control section start
		$this->start_controls_section(
				'bwdc_counter_content_section',
				[
					'label' => esc_html__( 'Counter Content', 'bwd-elementor-addons' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);

		// repeater start
		$repeater = new \Elementor\Repeater();
		// title control start
		$repeater->add_control(
			'bwdc_counter_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Order Received', 'bwd-elementor-addons'),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdc_counter_title_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-heading ',
			]
		);
		//title alignMent
		$repeater->add_responsive_control(
			'bwdc_title_text_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-heading' => 'text-align: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$repeater->add_control(
			'bwdc_counter_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-heading' => 'color: {{VALUE}}',
				],
			]
		);
		// title divider
		$repeater->add_control(
			'bwdc_counter_title_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		// icon control start
		$repeater->add_control(
			'bwdc_counter_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'label_block'=>true,
				'default' => [
					'value' => 'fa fa-globe',
					'library' => 'solid',
				],
			]
		);
    	// icon size (slider)
		$repeater->add_responsive_control(
			'bwdc_counter_normal_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//icon alignment
		$repeater->add_responsive_control(
			'bwdc_icon_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
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
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-icon' => 'text-align: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		// icon text color
		$repeater->add_control(
			'bwdc_counter_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-icon' => 'color: {{VALUE}}',
				],
			]
		);
		// icon bg color
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdc_counter_icon_bg',
				'label' => esc_html__('BG Color','bwd-elementor-addons'),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-icon',
				'exclude' => ['image']
			]
		);
		// icon divider
		$repeater->add_control(
			'bwdc_counter_icon_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		// ========================
		//count number control start
		$repeater->add_control(
			'bwdc_counter_number',
			[
				'label' => esc_html__( 'Number', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => esc_html__( '1500', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// counter number prefix
		$repeater->add_control(
			'bwdc_counter_number_prefix',
			[
				'label' => esc_html__( 'Number Prefix', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => '',
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// counter number suffix
		$repeater->add_control(
			'bwdc_counter_number_suffix',
			[
				'label' => esc_html__( 'Number Suffix', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => esc_html__( '+', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//count animation duration
		$this->add_control(
			'bwdc_counter_animation_duration',
			[
				'label' => esc_html__( 'Count Duration', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'=>true,
				'default' => esc_html__( '1000', 'bwd-elementor-addons' ),
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdc_number_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-value ',
			]
		);
		//number alignment
		$repeater->add_responsive_control(
			'bwdc_number_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
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
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-value' => 'justify-content: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		//number color
		$repeater->add_control(
			'bwdc_counter_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-value' => 'color: {{VALUE}}',
				],
			]
		);
		//number bg color
		$repeater->add_control(
			'bwdc_counter_number_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter .bwdc-counter-value' => 'background-color: {{VALUE}}',
				],
			]
		);
		//wrapper box
		$repeater->add_control(
				'bwdc_wrapper_box',
				[
					'label' => esc_html__( 'Wrapper Box', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdc_counter_bg',
				'label' => esc_html__('Counter BG','bwd-elementor-addons'),
				'types' => [ 'classic', 'gradient'],
				'exclude' =>['image'],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter, {{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter-content-common',
			]
		);
		// wrapper box padding
		$repeater->add_responsive_control(
			'bwdc_wrapper_box_padding',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// wrapper box padding
		$repeater->add_responsive_control(
			'bwdc_wrapper_box_margin',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// counter border control
		$repeater->add_control(
			'bwdc_wrapper_box_border_heading',
			[
				'label' => esc_html__( 'Wrapper Box Border', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdc_wrapper_box_border',
				'label' => esc_html__( 'wrapper box border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter',
			]
		);
		// wrapper box border-radius
		$repeater->add_responsive_control(
			'bwdc_wrapper_box_border_radius',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
			'name' => 'bwdc_wrapper_box_shadow',
			'label' => esc_html__( 'Wrapper Box Shadow', 'bwd-elementor-addons' ),
			'separator' => 'before',
			'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-counter',
			]
		);
		// box shape
		$repeater->add_control(
			'bwdc_counter_shapes_heading',
			[
				'label' => esc_html__( 'Shape', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// shape bg 
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdc_shape_bg',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::before, {{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::after',
				'exclude' => ['image']
			]
		);
		// shape border color 
		$repeater->add_control(
			'bwdc_counter_shape_border_color',
			[
				'label' => esc_html__( 'Shape Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::before, 
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape::after,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdc-shape' => 'border-color: {{VALUE}}',
				],
			]
		);
		// fetch data from repeater
		$this->add_control(
			'bwdc_counters',
			[
				'label' => esc_html__( 'Counters', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'counter_title' => esc_html__( 'counter #1', 'bwd-elementor-addons' ),
					],
					[
						'counter_title' => esc_html__( 'counter #2', 'bwd-elementor-addons' ),
					],
					[
						'counter_title' => esc_html__( 'counter #3', 'bwd-elementor-addons' ),
					],
					[
						'counter_title' => esc_html__( 'counter #4', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ counter_title }}}',
			]
		);
		$this->end_controls_section();
    	// ==========================
        $this->start_controls_section(
          'bwdc_counter_style_section',
          [
            'label' => esc_html__( 'Counter Style', 'bwd-elementor-addons' ),
            'tab' => Controls_Manager::TAB_STYLE,
          ]
        );

		// bg control
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'counter_section_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient','video' ],
				'selector' => '{{WRAPPER}} .bwdc-counter-common',
			]
		);
		$this->add_responsive_control(
            'bwdc_counter_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdc-counter-common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdc_counter_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdc-counter-common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdc_col = $settings['bwdc_column'];
		if($bwdc_col === '1'){
			$bwdc_col_sm = 'col-sm-12';
			$bwdc_col_md = 'col-md-12';
			$bwdc_col_lg = 'col-lg-12';
		}else if($bwdc_col === '2'){
			$bwdc_col_sm = 'col-sm-6';
			$bwdc_col_md = 'col-md-6';
			$bwdc_col_lg = 'col-lg-6';
		}else if($bwdc_col === '3'){
			$bwdc_col_sm = 'col-sm-4';
			$bwdc_col_md = 'col-md-4';
			$bwdc_col_lg = 'col-lg-4';
		}else if($bwdc_col === '4'){
			$bwdc_col_sm = 'col-sm-3';
			$bwdc_col_md = 'col-md-3';
			$bwdc_col_lg = 'col-lg-3';
		}

			//counter 1
			if('style1' == $settings['bwdc_counter_choose'] || 'style2' == $settings['bwdc_counter_choose']){
			if('style1' === $settings['bwdc_counter_choose']){
				?>
			<div class="bwdc-counter-1 bwdc-counter-common">
				<div class="container-fluid">
						<div class="row">
					<?php
						if($settings['bwdc_counters']){
							foreach($settings['bwdc_counters'] as $item){
							echo '<div class="'.esc_attr($bwdc_col_sm).' '.esc_attr($bwdc_col_md).' '. esc_attr($bwdc_col_lg) .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
							?>
									<div class="bwdc-counter bwdc-shape">
											<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">

										<div class="bwdc-counter-icon">
											<i class=" <?php echo esc_attr($item['bwdc_counter_icon']['value']); ?> "></i>
										</div>
										<div class="bwdc-counter-heading">
											 <?php echo esc_html($item['bwdc_counter_title']); ?> 
										</div>

										<div class="bwdc-counter-value">
											<div class="bwdc-num-prefix"> 
												<?php echo esc_html($item['bwdc_counter_number_prefix']) ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo esc_html($item['bwdc_counter_number_suffix']) ;?>
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
			<?php   //counter 2
			}else if($settings['bwdc_counter_choose']==='style2'){
			?>
			<div class="bwdc-counter-2 bwdc-counter-common">
				<div class="container-fluid">
						<div class="row">
						<?php
					if($settings['bwdc_counters']){
						foreach($settings['bwdc_counters'] as $item){
							echo '<div class="col-sm-6 col-md-6 '. esc_attr($bwdc_col_lg) .' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">';
										?>
							<div class="bwdc-counter bwdc-shape">
							<input hidden  class="bwdc-count-duration" value="<?php echo esc_html($settings['bwdc_counter_animation_duration']); ?>">

								<div class="bwdc-counter-content">
									<div class="bwdc-counter-icon ">
										<i class="<?php echo esc_attr($item['bwdc_counter_icon']['value']); ?>"></i>
									</div>
									<div class="bwdc-counter-heading "> 
										<?php echo esc_html($item['bwdc_counter_title']); ?>
									</div>
									<div class="bwdc-counter-value ">
											<div class="bwdc-num-prefix"> 
												<?php echo esc_html($item['bwdc_counter_number_prefix']) ;?>
											</div>
											<div class="bwdc-num-container">
												<?php echo esc_html($item['bwdc_counter_number']); ?>
											</div>	 
											<div class="bwdc-num-suffix">
												<?php echo esc_html($item['bwdc_counter_number_suffix']) ;?>
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
?>
