<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDVPVideoPopupWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWD_Video_Popup', 'bwd-elementor-addons');
	}
	public function get_title() {
		return esc_html__( 'Video Popup', 'bwd-elementor-addons');
	}
	public function get_icon() {
		return 'video-popup bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}
	
	public function get_keywords() {
		return [ 'video', 'popup', 'bwd', 'video-popup', 'bwd-video-popup' ];
	}
	protected function register_controls() {
     	// video popup layout control section start
		$this->start_controls_section(
			'bwdah_video_popup_presets_section',
			[
				'label' => esc_html__( 'Video Presets', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//source 
		$this->add_control(
			'bwdah_video_popup_source',
			[
				'label' => esc_html__( 'Source', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'youtube',
				'options' => [
					'youtube'  => esc_html__( 'YouTube', 'bwd-elementor-addons' ),
					'vimeo'  => esc_html__( 'Vimeo', 'bwd-elementor-addons' ),
					'self_hosted'  => esc_html__( 'Self Hosted', 'bwd-elementor-addons' )
				],
			]
		);
		// styles
		$this->add_control(
			'bwdah_video_popup_choose_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'2'  => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'3'  => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'4'  => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'5'  => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'6'  => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'7'  => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'8'  => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'9'  => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'10'  => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'11'  => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'12'  => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/video-popup/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		//youtube link
		$this->add_control(
			'bwdah_video_popup_youtube_video_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'https://www.youtube.com/watch?v=XHOmBV4js_E', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_video_popup_source' => 'youtube',
				]
			]
		);
		//vimeo link
		$this->add_control(
			'bwdah_video_popup_vimeo_video_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'https://player.vimeo.com/video/740016989', 'bwd-elementor-addons' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdah_video_popup_source' => 'vimeo',
				]
			]
		);
		//self hosted video 
		$this->add_control(
			'bwdah_video_popup_self_hosted',
			[
				'label' => esc_html__( 'Choose Video', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_types' => ['video'],
				'condition' => [
					'bwdah_video_popup_source' => 'self_hosted',
				]
			]
		);
		//icon 
		$this->add_control(
			'bwdah_video_popup_btn_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-play',
					'library' => 'fa-solid',
				]
			]
		);
		//button 
		$this->add_control(
			'bwdah_video_text_btn',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
			]
			
		);
		//button top text
		$this->add_control(
			'bwdah_video_btn_top_text',
			[
				'label' => esc_html__( 'Top Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WATCH VIDEO', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
				
			]
		);
		//button bottom text
		$this->add_control(
			'bwdah_video_btn_bottom_text',
			[
				'label' => esc_html__( 'Bottom Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Follow The Step By Step Guide', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
				
			]
		);
		$this->end_controls_section();
		//option section
		$this->start_controls_section(
			'bwdah_video_popup_option_section',
			[
				'label' => esc_html__( 'Video Options', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//autoplay
		$this->add_control(
			'bwdah_video_popup_autoplay',
			[
				'label' => esc_html__( 'Autoplay', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		//mute
		$this->add_control(
			'bwdah_video_popup_mute',
			[
				'label' => esc_html__( 'Mute', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		//loop
		$this->add_control(
			'bwdah_video_popup_loop',
			[
				'label' => esc_html__( 'Loop', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		//Player Controls
		$this->add_control(
			'bwdah_video_popup_player_controls',
			[
				'label' => esc_html__( 'Player Controls', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();
		//style section
		$this->start_controls_section(
			'bwdah_video_popup_style_section',
			[
				'label' => esc_html__( 'Styles', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//button text
		$this->add_control(
			'bwdah_video_popup_btn_text_styles',
			[
				'label' => esc_html__( 'Button Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
			]
		);
		// text color
		$this->add_control(
			'bwdah_video_popup_text_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdvp-btn-12' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
			]
		);
		// top text
		$this->add_control(
			'bwdah_video_popup_btn_top_text',
			[
				'label' => esc_html__( 'Top Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
			]
		);		
		//top text typo 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdvp_btn_top_text',
				'selector' => '{{WRAPPER}} .bwdvp-btn-top-text',
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
			]
		);
		// bottom text
		$this->add_control(
			'bwdah_video_popup_btn_bottom_text',
			[
				'label' => esc_html__( 'Bottom Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
			]
		);
		//bottom text typo 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdvp_btn_bottom_text',
				'selector' => '{{WRAPPER}} .bwdvp-bottom-text',
				'condition' => [
					'bwdah_video_popup_choose_style' => '12',
				]
			]
		);

		$this->add_control(
			'bwdah_video_popup_btn_styles',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// size
		$this->add_responsive_control(
			'bwdah_video_popup_btn_size',
			[
				'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px','em','rem'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' =>1
					],
					'em' => [
						'min' => 0,
						'max' => 100,
						'step' =>1
					],
					'rem' => [
						'min' => 0,
						'max' => 100,
						'step' =>1
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdvp-btn' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// button alignment
		$this->add_control(
			'bwdah_video_popup_btn_alignment',
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
			]
		);

		// border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdvp_btn_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdvp-btn',
			]
		);
		//box shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdvp_btn_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdvp-btn'
			]
		);
		// background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdvp_btn_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' =>['image'],
				'selector' => '{{WRAPPER}} .bwdvp-btn'
			]
		);
		//icon styles 
		$this->add_control(
			'bwdah_video_popup_icon_styles',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// size
		$this->add_responsive_control(
			'bwdah_video_popup_icon_font_size',
			[
				'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px','em','rem'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' =>1
					],
					'em' => [
						'min' => 0,
						'max' => 50
					],
					'rem' => [
						'min' => 0,
						'max' => 50
					]
				],
				'selectors' => [
					'{{WRAPPER}} .bwdvp-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// color
		$this->add_control(
			'bwdah_video_popup_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdvp-btn i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$source = $settings['bwdah_video_popup_source'];
		$chosen_style= $settings['bwdah_video_popup_choose_style'];
		$youtube_link = $settings['bwdah_video_popup_youtube_video_link'];
		$vimeo_link = $settings['bwdah_video_popup_vimeo_video_link'];
		$self_hosted = $settings['bwdah_video_popup_self_hosted'];
		$autoplay = $settings['bwdah_video_popup_autoplay'];
		$mute = $settings['bwdah_video_popup_mute'];
		$loop = $settings['bwdah_video_popup_loop'];
		$players_control = $settings['bwdah_video_popup_player_controls'];
		if($settings['bwdah_video_popup_btn_alignment']){
			if('left' === $settings['bwdah_video_popup_btn_alignment']){
				$btn_align = 'text-left';
			}else if('center' === $settings['bwdah_video_popup_btn_alignment']){
				$btn_align = 'text-center';
			}else if('right' === $settings['bwdah_video_popup_btn_alignment']){
				$btn_align = 'text-right';
			}
		}
		
		// style render
		if($chosen_style == 1 || $chosen_style == 2){
		if(!empty($chosen_style) && '12' !== $chosen_style){
			?>
			<div class="bwdvp-btn-<?php echo esc_attr($chosen_style);?> bwdvp-btn <?php echo esc_attr($btn_align);?>" 
				data-youtube-url="<?php if(!empty($youtube_link)){echo esc_attr($youtube_link);}?>" 
				data-vimeo-url="<?php if(!empty($vimeo_link)){echo esc_attr($vimeo_link);}?>"
				data-self-url="<?php if(!empty($self_hosted)){echo esc_attr($self_hosted['url']);}?>"
				data-autoplay="<?php if(!empty($autoplay)){echo esc_attr($autoplay);}?>"
				data-mute="<?php if(!empty($mute)){echo esc_attr($mute);}?>"
				data-loop="<?php if(!empty($loop)){echo esc_attr($loop);}?>"
				data-control="<?php if(!empty($players_control)){echo esc_attr($players_control);}?>"
			>
				<i class="<?php echo esc_attr($settings['bwdah_video_popup_btn_icon']['value'])?>"></i>
			</div>
			<?php
		} else if(!empty($chosen_style) && '12' === $chosen_style){
			?>
			<div class="bwdvp-btn-<?php echo esc_attr($chosen_style);?> bwdvp-btn <?php echo esc_attr($btn_align);?>" 
				data-youtube-url="<?php if(!empty($youtube_link)){echo esc_attr($youtube_link);}?>" 
				data-vimeo-url="<?php if(!empty($vimeo_link)){echo esc_attr($vimeo_link);}?>"
				data-self-url="<?php if(!empty($self_hosted)){echo esc_attr($self_hosted['url']);}?>"
				data-autoplay="<?php if(!empty($autoplay)){echo esc_attr($autoplay);}?>"
				data-mute="<?php if(!empty($mute)){echo esc_attr($mute);}?>"
				data-loop="<?php if(!empty($loop)){echo esc_attr($loop);}?>"
				data-control="<?php if(!empty($players_control)){echo esc_attr($players_control);}?>"
			>
				<div class="bwdvp-btn-top-text-wrapper">
				<i class="<?php echo esc_attr($settings['bwdah_video_popup_btn_icon']['value'])?>"></i>
					<div class="bwdvp-btn-top-text">
					<?php echo esc_html($settings['bwdah_video_btn_top_text']);?>
					</div>
				</div>
				<div class="bwdvp-bottom-text">
					<?php echo esc_html($settings['bwdah_video_btn_bottom_text']);?>
				</div>
				

			</div>
			<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}

