<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDAHAnimatedHeadingWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDAnimatedHeading', 'bwd-elementor-addons');
	}
	public function get_title() {
		return esc_html__( 'Animated Heading', 'bwd-elementor-addons');
	}
	public function get_icon() {
		return 'eicon-animated-headline bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}
	public function get_script_depends() {
		return [ 'bwdeb_general_category' ];
	}
	public function get_keywords() {
		return [ 'animated-heading', 'bwd animated-heading', 'animated', 'heading', 'text' ];
	}
	protected function register_controls() {
     // animated heading layout control section start
		$this->start_controls_section(
			'bwdah_animated_heading_layout_section',
			[
				'label' => esc_html__( 'Animated Heading Layout', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//all animation category
		$this->add_control(
			'bwdah_animation_category',
			[
				'label' => esc_html__( 'Animation Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'split_text',
				'options' => [
					'split_text' => esc_html__( 'Split Text', 'bwd-elementor-addons'),
					'typing' => esc_html__( 'Typing', 'bwd-elementor-addons'),
					'scroll' => esc_html__( 'Scroll', 'bwd-elementor-addons'),
					'multiple_text' => esc_html__( 'Multiple Text', 'bwd-elementor-addons'),
				],
			]
		);
		// Split Text category
		$this->add_control(
			'bwdah_split_text_cate',
			[
				'label' => esc_html__( 'Split Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'spl-1',
				'options' => [
					'spl-1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'spl-2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'spl-3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'spl-4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'spl-5' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'spl-6' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'spl-7' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'spl-8' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'spl-9' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'spl-10' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'spl-11' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'spl-12' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'spl-13' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
					'spl-14' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdah_animation_category' => 'split_text'
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/animated-heading/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		// typing category
		$this->add_control(
			'bwdah_typing_cate',
			[
				'label' => esc_html__( 'Typing', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'typ-1',
				'options' => [
					'typ-1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'typ-2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdah_animation_category' => 'typing'
				]
			]
		);
		// scroll category
		$this->add_control(
			'bwdah_scroll_cate',
			[
				'label' => esc_html__( 'Scroll', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'srl-1',
				'options' => [
					'srl-1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'srl-2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdah_animation_category' => 'scroll'
				]
			]
		);
		// Text Animation Text category
		$this->add_control(
			'bwdah_multiple_text_cate',
			[
				'label' => esc_html__( 'Multiple Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'mlt-1',
				'options' => [
					'mlt-1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'pro-mlt-2' => esc_html__( 'Style 2 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-5' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-6' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-7' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-8' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-9' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-10' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-11' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-12' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'pro-mlt-13' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://www.bwdplugins.com/bwd-animated-heading/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
				'condition' => [
					'bwdah_animation_category' => 'multiple_text'
				]
			]
		);
		$this->end_controls_section();
		// content section ==========================
		$this->start_controls_section(
			'bwdah_animated_heading_content_section',
			[
				'label' => esc_html__( 'Heading Content', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//before text 
		$this->add_control(
			'bwdah_a_h_before_text',
			[
				'label' => esc_html__( 'Before Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hi Im', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//for single animation text
		$this->add_control(
			'bwdah_a_h_anim_singe_text', [
				'label' => esc_html__( 'Animating text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Web Developer', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category' => [ 'split_text', 'scroll' ],
				],
			]
		);
		//multiple animating text
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdah_a_h_anim_text', [
				'label' => esc_html__( 'Animating text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//fetch repeater
		$this->add_control(
			'bwdah_a_h_anim_text_list',
			[
				'label' => esc_html__( 'Animating text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
						'bwdah_a_h_anim_text' => esc_html__( 'Web Developer', 'bwd-elementor-addons' ),

						'bwdah_a_h_anim_text' => esc_html__( 'Graphic Designer', 'bwd-elementor-addons' ),

						'bwdah_a_h_anim_text' => esc_html__( 'Web Designer', 'bwd-elementor-addons' ),
				],
				'title_field' => '{{{ bwdah_a_h_anim_text }}}',
				'condition' => [
					'bwdah_animation_category' => [ 'typing', 'multiple_text' ],
				],
			]
		);
		//after text 
		$this->add_control(
			'bwdah_a_h_after_text',
			[
				'label' => esc_html__( 'After Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//infinite loop
		$this->add_control(
			'bwdah_a_h_infinite_loop',
			[
				'label' => esc_html__( 'Infinite Loop', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'no', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//speed 
		$this->add_control(
			'bwdah_a_h_speed',
			[
				'label' => esc_html__( 'Speed (ms)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 50,
				'max' => 5000,
				'step' => 5,
				'default' => 150,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		//delay 
		$this->add_control(
			'bwdah_a_h_delay',
			[
				'label' => esc_html__( 'Delay (ms)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 200,
				'max' => 7000,
				'step' => 5,
				'default' => 1500,
				'separator' => 'after',
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_animation_category!' => 'scroll'
				],
			]
		);
		//link
		$this->add_control(
			'bwdah_a_h_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'no', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
				
			]
		);
		$this->add_control(
			'bwdah_a_h_link_url',
			[
				'label' => esc_html__( 'Link Url', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
				],
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_a_h_link' => 'yes'
				]
			]
		);
		$this->end_controls_section();
		//heading style section
		$this->start_controls_section(
			'bwdah_a_h_style_section',
			[
				'label' => esc_html__( 'Animated Heading Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//heading color
		$this->add_control(
			'bwdah_a_h_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdah-heading' => 'color: {{VALUE}}',
				],
			]
		);
		//heading typo
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdah_a_h_typo',
				'selector' => '{{WRAPPER}} .bwdah-heading,
				{{WRAPPER}} .bwdah-heading .bwdah-heading-inner-wrapper',
			]
		);
		//heading alignment
		$this->add_responsive_control(
			'bwdah_a_h_text_align',
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
				'default' => 'center',
				'toggle' => true,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selectors' => [
					'{{WRAPPER}} .bwdah-heading' => 'text-align: {{VALUE}};'
				]
			]
		);
		//animating heading===========
		$this->add_control(
			'bwdah_a_h_anim_text_heading',
			[
				'label' => esc_html__( 'Animated Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		//heading color
		$this->add_control(
			'bwdah_a_h_anim_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdah-heading .bwdah-heading-inner,
					{{WRAPPER}} .bwdah-heading .bwdah-heading-inner-wrapper' => 'color: {{VALUE}}',

				],
			]
		);
		//heading typo
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdah_a_h_anim_typo',
				'selector' => '{{WRAPPER}} .bwdah-heading .bwdah-heading-inner,
				{{WRAPPER}} .bwdah-heading .bwdah-heading-inner span'
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings();
		$all_animation_cate = $settings['bwdah_animation_category'];
		$split_cate = $settings['bwdah_split_text_cate'];
		$typing_cate = $settings['bwdah_typing_cate'];
		$scroll_cate = $settings['bwdah_scroll_cate'];
		$multiple_cate = $settings['bwdah_multiple_text_cate'];
		$before_text = $settings['bwdah_a_h_before_text'];
		$animate_text_list = $settings['bwdah_a_h_anim_text_list'];
		$animate_single_text = $settings['bwdah_a_h_anim_singe_text'];
		$after_text = $settings['bwdah_a_h_after_text'];
		// animation timing
		$inf_loop = $settings['bwdah_a_h_infinite_loop'];
		$speed = $settings['bwdah_a_h_speed'];
		$delay = $settings['bwdah_a_h_delay'];
		$link = $settings['bwdah_a_h_link'];
		
		if($link === 'yes'){
			$link_url = $settings['bwdah_a_h_link_url']['url'];
		}

		if($split_cate == 'spl-1' || $split_cate == 'spl-2'){
		//================ animated heading rendering start here===============
		if('split_text' === $all_animation_cate){
				?>
		 <div class="bwdcd-is-link-add">
			<div class="bwdah-animated-heading-<?php echo esc_attr($split_cate)?> bwdah-heading bwdah-split-text">
			<div class="bwdcd-anim-timing-unit" hidden
			data-inf="<?php echo esc_attr($inf_loop)?>"
			data-speed="<?php echo esc_attr($speed)?>" 
			data-delay="<?php echo esc_attr($delay)?>" 
			data-url="<?php echo esc_attr($link_url)?>" 
			>
			</div>
				<div class="bwdah-animated-heading-before-text">
					<?php echo esc_html($before_text)?>
				</div>
				<div class="bwdah-heading-inner">
					<?php echo esc_html($animate_single_text) ?>
				</div>
				<div class="bwdah-animated-heading-after-text">
					<?php echo esc_html($after_text)?>
				</div>
			</div>
		<div> 
				<?php
		}else if('typing' === $all_animation_cate){
				?>
			<div class="bwdah-animated-heading-<?php echo esc_attr($typing_cate)?> bwdah-heading bwdah-typing-text">
				<div class="bwdcd-anim-timing-unit" hidden
				data-inf="<?php echo esc_attr($inf_loop)?>"
				data-speed="<?php echo esc_attr($speed)?>" 
				data-delay="<?php echo esc_attr($delay)?>" 
				data-url="<?php echo esc_attr($link_url)?>" 
				>
				</div>
				<div class="bwdah-animated-heading-before-text">
					<?php echo esc_html($before_text)?>
				</div>
				<div class="bwdah-heading-inner-wrapper">
					<?php
						if($animate_text_list){
							foreach($animate_text_list as $item){
								?>
								<div class="bwdah-heading-inner elementor-repeater-item-<?php esc_attr($item['_id'] ) ?>">
										<?php echo esc_html($item['bwdah_a_h_anim_text']) ?>
								</div>
								<?php
							}
						}
					?>
				</div>
				<div class="bwdah-animated-heading-after-text">
					<?php echo esc_html($after_text)?>
				</div>
			</div>
				<?php
		}else if('scroll' === $all_animation_cate){
				?>
			<div class="bwdah-animated-heading-<?php echo esc_attr($scroll_cate)?> bwdah-heading bwdah-scroll">
				<div class="bwdcd-anim-timing-unit" hidden
				data-speed="<?php echo esc_attr($speed)?>" 
				data-url="<?php echo esc_attr($link_url)?>" 
				>
				</div>
				<div class="bwdah-heading-inner">
					<?php echo esc_html($animate_single_text) ?>
				</div>
			</div>
				<?php
		}else if('multiple_text' === $all_animation_cate){
				?>
			<div class="bwdah-animated-heading-<?php echo esc_attr($multiple_cate)?> bwdah-heading bwdah-multiple-text">
				<div class="bwdcd-anim-timing-unit" hidden
				data-inf="<?php echo esc_attr($inf_loop)?>"
				data-speed="<?php echo esc_attr($speed)?>" 
				data-delay="<?php echo esc_attr($delay)?>" 
				data-url="<?php echo esc_attr($link_url)?>" 
				>
				</div>
				<div class="bwdah-animated-heading-before-text">
					<?php echo esc_html($before_text)?>
				</div>
				<div class="bwdah-heading-inner-wrapper">
				<?php
					if($animate_text_list){
						foreach($animate_text_list as $item){
							?>
							<div class="bwdah-heading-inner elementor-repeater-item-<?php esc_attr($item['_id'] ) ?>">
									<?php echo esc_html($item['bwdah_a_h_anim_text']) ?>
								</div>
							<?php
						}
					}
				?>
				</div>
				<div class="bwdah-animated-heading-after-text">
					<?php echo esc_html($after_text)?>
				</div>
			</div>
				<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
