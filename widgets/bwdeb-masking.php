<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDMEmasking extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameMaskingEffects', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Masking Effects', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-maskingeffect';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'bwdme_masking_content_section',
			[
				'label' => esc_html__( 'Masking Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdme_style_selection',
			[
				'label' => esc_html__( 'Masking Styles', 'bwd-elementor-addons' ),
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
					'style59' => esc_html__( 'Style 59 (PRO)', 'bwd-elementor-addons' ),
					'style60' => esc_html__( 'Style 60 (PRO)', 'bwd-elementor-addons' ),
					'style61' => esc_html__( 'Style 61 (PRO)', 'bwd-elementor-addons' ),
					'style62' => esc_html__( 'Style 62 (PRO)', 'bwd-elementor-addons' ),
					'style63' => esc_html__( 'Style 63 (PRO)', 'bwd-elementor-addons' ),
					'style64' => esc_html__( 'Style 64 (PRO)', 'bwd-elementor-addons' ),
					'style65' => esc_html__( 'Style 65 (PRO)', 'bwd-elementor-addons' ),
					'style66' => esc_html__( 'Style 66 (PRO)', 'bwd-elementor-addons' ),
					'style67' => esc_html__( 'Style 67 (PRO)', 'bwd-elementor-addons' ),
					'style68' => esc_html__( 'Style 68 (PRO)', 'bwd-elementor-addons' ),
					'style69' => esc_html__( 'Style 69 (PRO)', 'bwd-elementor-addons' ),
					'style70' => esc_html__( 'Style 70 (PRO)', 'bwd-elementor-addons' ),
					'style71' => esc_html__( 'Style 71 (PRO)', 'bwd-elementor-addons' ),
					'style72' => esc_html__( 'Style 72 (PRO)', 'bwd-elementor-addons' ),
					'customtext' => esc_html__( 'Custom Text (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/bwd-masking-effect/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdme_masking_color',
			[
				'label' => esc_html__( 'Masking Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_title_for_sale30',
			[
				'label' => esc_html__( 'Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('BEST WP DEVELOPER', 'bwd-elementor-addons'),
				'condition' => [
					'bwdme_style_selection' => 'customtext',
				],
				'label_block' => true,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdme_masking_title_typography',
				'selector' => '{{WRAPPER}} .bwdme-custom-text-in',
				'condition' => [
					'bwdme_style_selection' => 'customtext',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_salesk',
			[
				'type' => Controls_Manager::DIVIDER,
				'condition' => [
					'bwdme_style_selection' => 'customtext',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_masking_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-svg-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_masking_min_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-svg-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_position',
			[
				'label' => esc_html__( 'Masking Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'center' => esc_html__( 'Center', 'bwd-elementor-addons' ),
					'top' => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom' => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_size',
			[
				'label' => esc_html__( 'Masking Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
					'contain' => esc_html__( 'Contain', 'bwd-elementor-addons' ),
					'cover' => esc_html__( 'Cover', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdme_masking_repeat_mask',
			[
				'label' => esc_html__( 'Masking Repeat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'repeat' => esc_html__( 'Repeat', 'bwd-elementor-addons' ),
					'no-repeat' => esc_html__( 'No-Repeat', 'bwd-elementor-addons' ),
					'repeat-x' => esc_html__( 'Repeat-x', 'bwd-elementor-addons' ),
					'repeat-y' => esc_html__( 'Repeat-y', 'bwd-elementor-addons' ),
					'round' => esc_html__( 'Round', 'bwd-elementor-addons' ),
					'space' => esc_html__( 'Space', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

		
		$this->start_controls_section(
			'bwdme_background_content_section',
			[
				'label' => esc_html__( 'Background Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdme_masking_image',
			[
				'label' => esc_html__( 'Choose Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_background_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-bg-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdme_background_min_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdme-bg-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdme_masking_attachment',
			[
				'label' => esc_html__( 'Bg Attachment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'paralax',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'paralax' => esc_html__( 'Paralax', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_position',
			[
				'label' => esc_html__( 'Background Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'center' => esc_html__( 'Center', 'bwd-elementor-addons' ),
					'top' => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom' => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_size',
			[
				'label' => esc_html__( 'Background Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
					'contain' => esc_html__( 'Contain', 'bwd-elementor-addons' ),
					'cover' => esc_html__( 'Cover', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdme_background_repeat_masking',
			[
				'label' => esc_html__( 'Background Repeat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'repeat' => esc_html__( 'Repeat', 'bwd-elementor-addons' ),
					'no-repeat' => esc_html__( 'No-Repeat', 'bwd-elementor-addons' ),
					'repeat-x' => esc_html__( 'Repeat-x', 'bwd-elementor-addons' ),
					'repeat-y' => esc_html__( 'Repeat-y', 'bwd-elementor-addons' ),
					'round' => esc_html__( 'Round', 'bwd-elementor-addons' ),
					'space' => esc_html__( 'Space', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdme_masking_style_section',
			[
				'label' => esc_html__( 'Masking Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
            'bwdme_masking_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdme-svg-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdme_masking_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdme-svg-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<?php
			if('style1' === $settings['bwdme_style_selection'] || 'style2' === $settings['bwdme_style_selection']){
        if('style1' === $settings['bwdme_style_selection']){
				?>
				<div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking1">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
            </div>
            <?php
        } elseif('style2' === $settings['bwdme_style_selection']){
            ?>
            <div class="bwdme-svg-img 
			<?php if('center' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-default <?php } elseif('top' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-top <?php } elseif('bottom' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-bottom <?php } elseif('left' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-left <?php } elseif('right' === $settings['bwdme_masking_position']){ ?>bwdme-masking-position-right <?php } elseif('auto' === $settings['bwdme_masking_position']){ ?>bwdme-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-default <?php } elseif('auto' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-auto <?php } elseif('contain' === $settings['bwdme_masking_size']){ ?>bwdme-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat <?php } elseif('repeat-x' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-y <?php } elseif('round' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-round <?php } elseif('space' === $settings['bwdme_masking_repeat_mask']){ ?>bwdme-masking-repeat-space <?php } ?>
			bwdme-masking2">
                <div class="bwdme-bg-img 
				<?php if('paralax' === $settings['bwdme_masking_attachment']){ ?>bwdme_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdme_background_position']){ ?>bwdme-background-position-default <?php } elseif('top' === $settings['bwdme_background_position']){ ?>bwdme-background-position-top <?php } elseif('bottom' === $settings['bwdme_background_position']){ ?>bwdme-background-position-bottom <?php } elseif('left' === $settings['bwdme_background_position']){ ?>bwdme-background-position-left <?php } elseif('right' === $settings['bwdme_background_position']){ ?>bwdme-background-position-right <?php } elseif('auto' === $settings['bwdme_background_position']){ ?>bwdme-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdme_background_size']){ ?>bwdme-background-default <?php } elseif('auto' === $settings['bwdme_background_size']){ ?>bwdme-background-auto <?php } elseif('contain' === $settings['bwdme_background_size']){ ?>bwdme-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat <?php } elseif('repeat-x' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-y <?php } elseif('round' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-round <?php } elseif('space' === $settings['bwdme_background_repeat_masking']){ ?>bwdme-background-repeat-space <?php } ?>
				" style="background-image: url(<?php echo esc_url($settings['bwdme_masking_image']['url']); ?>);"></div>
				</div>
				<?php
    	}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}
