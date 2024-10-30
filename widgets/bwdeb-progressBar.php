<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDPBProgressBarWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDPBProgressBar', 'bwd-elementor-addons' );
	}
	public function get_title() {
		return esc_html__( 'ProgressBar', 'bwd-elementor-addons' );
	}
	public function get_icon() {
		return 'icon-progressbar bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'progressBar', 'bwd bwdpb-progressBar', 'progress', 'bar' ];
	}
	protected function register_controls() {
     // ProgressBar layout control section start
		$this->start_controls_section(
			'bwdpb_ProgressBar_layout_section',
			[
				'label' => esc_html__( 'ProgressBar Styles', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdpb_ProgressBar_choose',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/progress-bar/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();
		// ProgressBar content section start
		$this->start_controls_section(
			'bwdpb_PB_content_section',
			[
				'label' => esc_html__( 'Progress Bar', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//percentage hide show status
		$this->add_control(
			'bwdpb_PB_per_status',
			[
				'label' => esc_html__( 'Display Percentage', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'after'
			]
		);
		$repeater = new \Elementor\Repeater();
		// pb present
		$repeater->add_control(
			'bwdpb_pb_width',
			[
				'label' => esc_html__( 'Percentage', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'default' => 75,
				'separator' => 'after'
			]
		);
		//title
		$repeater->add_control(
			'bwdpb_PB_title', [
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'HTML5 -' , 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// pb title color
		$repeater->add_control(
			'bwdpb_PB_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-title,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-value' => 'color: {{VALUE}}',
				]
			]
		);
		// title typo
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdpb_PB_typo',
				'selector' => '{{WRAPPER}} {{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-title',

			]
		);

		$repeater->add_control(
			'bwdpb_PB_style',
			[
				'label' => esc_html__( 'Progress Bar Styles', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// pb color
		$repeater->add_control(
			'bwdpb_PB_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-bar' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd_pb-color' => 'color: {{VALUE}}'
				],
			]
		);
		// pb bg color
		$repeater->add_control(
			'bwdpb_PB_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd-progress' => 'background-color: {{VALUE}}',
				],
			]
		);
		// height 
		$repeater->add_control(
			'bwdpb_PB_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwd-progress' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//border radius
		$repeater->add_control(
			'bwdpb_PB_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd-progress,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwd_progress-bar' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//pb gap
		$repeater->add_control(
			'bwdpb_PB_gap',
			[
				'label' => esc_html__( 'ProgressBar Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],

				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}}.bwdpb-mb-30,
					{{WRAPPER}} {{CURRENT_ITEM}}.bwdpb-mb-50' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				]
			]
		);

		//progress indicator
		$repeater->add_control(
			'bwdpb_PB_indicator',
			[
				'label' => esc_html__( 'Progress Indicator', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//pb indicator size
		$repeater->add_control(
			'bwdpb_PB_indicator_size',
			[
				'label' => esc_html__( 'Indicator Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					]
				],
				'selectors' => [
				'{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-size,
				{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-after::after,
				{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-before::before' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				
				]
			]
		);
		//pb indicator border color
		$repeater->add_control(
			'bwdpb_PB_indicator_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-size,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-after::after,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-before::before' => 'border-color: {{VALUE}};',
				]
			]
		);
		//pb indicator bg color
		$repeater->add_control(
			'bwdpb_PB_indicator_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-size,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-after::after,
					{{WRAPPER}} {{CURRENT_ITEM}} .bwdpb-indicator-before::before' => 'background-color: {{VALUE}};',
				]
			]
		);
		//fetch repeater
		$this->add_control(
			'bwdpb_PB_item_list',
			[
				'label' => esc_html__( 'Progress Bar Item', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdpb_PB_title' => esc_html__( 'HTML', 'bwd-elementor-addons' ),
					],
					[
						'bwdpb_PB_title' => esc_html__( 'CSS', 'bwd-elementor-addons' ),
					],
					[
						'bwdpb_PB_title' => esc_html__( 'JS', 'bwd-elementor-addons' ),
					],
					[
						'bwdpb_PB_title' => esc_html__( 'PHP', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdpb_PB_title }}}',
			]
		);
		$this->end_controls_section();
		// style section 
	}
	protected function render() {
		$settings =$this->get_settings();
		$chosen_pb = $settings['bwdpb_ProgressBar_choose']; 
		$pb_list = $settings['bwdpb_PB_item_list'];
		$pb_per_st = $settings['bwdpb_PB_per_status'];

		if('yes' === $pb_per_st){
			$per_st = 'bwd_pr_show';
		}else{
			$per_st = 'bwd_pr_hide';
		}

		//================== ProgressBar rendering start here=====================
		if('style1' == $chosen_pb || 'style2' == $chosen_pb){
		if('style1' === $chosen_pb){
				?>
	  		<div class="bwd_progress_Design_1 bwd_pb_common">
					<?php
				if($pb_list){
					foreach($pb_list as $item){
							?>
						<div class="bwd_progress_box">
							<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?>">
								<div class="bwd_progress-title">
									<?php echo esc_html( $item['bwdpb_PB_title'] )?>
									<span class="bwd_pb_val_con">
										<?php echo esc_html( $item['bwdpb_pb_width'] )?>
									</span>
									<span class="<?php echo esc_attr($per_st)?>">
										<?php echo esc_html__('%', 'bwd-elementor-addons'); ?>
									</span>
								</div>
								<div class="bwd-progress">
								<div class="bwd_progress-bar bwdpb-indicator-after"></div>
								</div>
							</div>
						</div>
							<?php
					}
				}
					?>
      		</div>
				<?php
		}else if('style2' === $chosen_pb){
			?>
			<div class="bwd_progress_Design_2 bwd_pb_common">
			<?php
			if($pb_list){
				foreach($pb_list as $item){
			?>
              <div class="bwd_progress_box">
			  	<div class="bwdpb-mb-30 elementor-repeater-item-<?php echo esc_attr( $item['_id'] )?>">
                	<div class="bwd_progress-title">
					<?php echo esc_html( $item['bwdpb_PB_title'] )?>
					</div>
                	<div class="bwd_progress-outer">
						<div class="bwd-progress">
							<div class="bwd_progress-bar bwd_progress-bar-striped"></div>
								<div class="bwd_progress-value">
									<span class="bwd_pb_val_con">
										<?php echo esc_html( $item['bwdpb_pb_width'] )?>
									</span>
									<span class="<?php echo esc_attr($per_st)?>">
										<?php echo esc_html__('%', 'bwd-elementor-addons'); ?>
									</span>
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
			<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}


