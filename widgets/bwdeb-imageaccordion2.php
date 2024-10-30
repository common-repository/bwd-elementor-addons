<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdiaImageAccordion extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwdskimageaccordion';
	}

	public function get_title() {
		return esc_html__( 'Image Accordion', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-accordion bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'accordion', 'bwd', 'hover' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdia_image_accordion_choose_style',
			[
				'label' => esc_html__('Choose Style','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdia_image_accordion_style_layout',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/image-accordion/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
			'bwdia_image_accordion_content_style',
		    [
		        'label' => esc_html__('Content','bwd-elementor-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		    ]
		);
		$this->add_responsive_control(
			'bwdia_img_acc_content_align',
			[
				'label' => esc_html__( ' Content Alignment', 'bwd-elementor-addons' ),
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
				'selectors' => [
					'{{WRAPPER}} .bwdia-content-box' => 'text-align: {{UNIT}};',
				],
				'toggle' => true,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdia_image_acc_show_one_item',
			[
				'label' => esc_html__( 'Active item', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'bwdia_image_acc_show_title',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdia_image_acc_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Williamson', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdia_image_acc_show_title' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-title' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdia_image_acc_show_title' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdia_image_title_font_size',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-title',
				'condition' => [
					'bwdia_image_acc_show_title' => 'yes',
				],
			]
		);

		$repeater->add_control(
			'bwdia_image_acc_show_decs',
			[
				'label' => esc_html__( 'Show Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',

			]
		);
		$repeater->add_control(
			'bwdia_image_acc_shape_decs',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, suscipit.', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your title here', 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdia_image_acc_show_decs' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_decs_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'bwdim_image_show_decs' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-decs' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdia_image_acc_show_decs' => 'yes',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdim_decs_font_size',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-decs',
				'condition' => [
					'bwdia_image_acc_show_decs' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_cont_bg_switch',
			[
				'label' => esc_html__( 'Show Content Bg', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'bwdia_img_content_background_color',
			[
				'label' => esc_html__( 'Content Bg Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-content-bg' => 'background: {{VALUE}} !important',
				],
				'condition' => [
					'bwdia_image_cont_bg_switch' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_accordion_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true,
                ],
				'separator' => 'before',
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'bwdia_image_accordion_show_link',
			[
				'label' => esc_html__( 'Show Image Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'bwdia_image_acc_link',
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
					'bwdia_image_accordion_show_link' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdia_image_accordion_item',
			[
				'label' => esc_html__( 'Image Accordion list', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdia_image_acc_title' => esc_html__( 'Williamso', 'bwd-elementor-addons' ),
					],
					[
						'bwdia_image_acc_title' => esc_html__( 'Jonduae', 'bwd-elementor-addons' ),
					],
					[
						'bwdia_image_acc_title' => esc_html__( 'Alexraue', 'bwd-elementor-addons' ),
					],
					[
						'bwdia_image_acc_title' => esc_html__( 'Luthipeue', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ bwdia_image_acc_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdia_image_style_background_overlay_color',
			[
				'label' => esc_html__( 'Image Overlay Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-single-img:hover > a:before' => 'background-color: {{VALUE}} !important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdia_image_shape_width',
			[
				'label' => esc_html__( 'Image Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdia_image_style_background_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdia_image_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdia_img_background_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .bwdim-box',
			]
		);
		$this->add_responsive_control(
			'bwdia_image_background_border_radius',
			[
				'label' => esc_html__( 'Border radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwdia-common-style' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( ! empty( $settings['bwdia_image_acc_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdia_image_acc_btn_link', $settings['bwdia_image_acc_btn_link'] );
		}
		if ( ! empty( $settings['bwdia_image_acc_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdia_image_acc_link', $settings['bwdia_image_acc_link'] );
		}

		if ('style1' == $settings['bwdia_image_accordion_style_layout'] || 'style2' == $settings['bwdia_image_accordion_style_layout']) { 
		if ('style1' === $settings['bwdia_image_accordion_style_layout']) { 
		?>
			<div class="bwdia-img-accordion-1 bwdia-common-style">
			<?php
				if ( $settings['bwdia_image_accordion_item'] ) {
					foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
						<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo esc_attr(' bwdia-active-item');}?>">
							<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>"><img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">
							<div class="bwdia-content-box">
								<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
								<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
							</div>
							</a>
						</div>
					<?php
					}	
				}	
				?>
			</div>

		<?php
		}elseif ('style2' === $settings['bwdia_image_accordion_style_layout']) { 
			?>
	
		<div class="bwdia-img-accordion-2 bwdia-common-style">
				<?php
					if ( $settings['bwdia_image_accordion_item'] ) {
						foreach ( $settings['bwdia_image_accordion_item'] as $item ) { ?>
			<div class="bwdia-single-img elementor-repeater-item-<?php echo esc_attr( $item['_id'] );
			 if($item['bwdia_image_acc_show_one_item'] === 'yes'){echo esc_attr(' bwdia-active-item');}?>">
				<a href="<?php echo esc_url($item['bwdia_image_acc_link']['url']);?>">
					<img src="<?php echo esc_attr($item['bwdia_image_accordion_image']['url']); ?>" alt="">
					<div class="bwdia-content-box">
						<div class="bwdia-title"><?php echo esc_html($item['bwdia_image_acc_title']);?></div>
						<div class="bwdia-decs"><?php echo esc_html($item['bwdia_image_acc_shape_decs']);?></div>
					</div>
					</a>
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



