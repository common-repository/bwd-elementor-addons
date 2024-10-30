<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

use Elementor\Utils;
use Elementor\Core\Schemes\Color;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Css_Filter;
use TheplusAddons\Theplus_Element_Load;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_EPREL_Effective_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'EffectivePreLoader', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Effective Pre Loader', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-loading';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	
	public function get_keywords() {
		return ['preloader' , 'pre loader', 'load' , 'animation' , 'loader'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
			'contentSection',
			[
				'label' => esc_html__( 'Loader Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();		
		$repeater->add_control(
			'plcSelect',
			[
				'label' => esc_html__( 'Choose Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'predefined',
				'options' => [
					'predefined'  => esc_html__( 'Predefined', 'bwd-elementor-addons' ),
					'TextContent'  => esc_html__( 'Text Content (PRO)', 'bwd-elementor-addons' ),
					'Image'  => esc_html__( 'Image (PRO)', 'bwd-elementor-addons' ),
					'Icon'  => esc_html__( 'Icon (PRO)', 'bwd-elementor-addons' ),
					'CustomCode'  => esc_html__( 'Custom Code (PRO)', 'bwd-elementor-addons' ),
					'Shortcode'  => esc_html__( 'Shortcode (PRO)', 'bwd-elementor-addons' ),
					'Progress'  => esc_html__( 'Progress (PRO)', 'bwd-elementor-addons' ),
				],
			]
		);
		$repeater->add_control(
			'plcsPreAnimation',
			[
				'label' => esc_html__( 'Select', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'animation-1',
				'options' => [
					'animation-1'  => esc_html__( 'Animation 1', 'bwd-elementor-addons' ),
					'animation-2'  => esc_html__( 'Animation 2', 'bwd-elementor-addons' ),
					'pro-animation-3'  => esc_html__( 'Animation 3 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-4'  => esc_html__( 'Animation 4 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-5'  => esc_html__( 'Animation 5 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-6'  => esc_html__( 'Animation 6 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-7'  => esc_html__( 'Animation 7 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-8'  => esc_html__( 'Animation 8 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-9'  => esc_html__( 'Animation 9 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-10'  => esc_html__( 'Animation 10 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-11'  => esc_html__( 'Animation 11 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-12'  => esc_html__( 'Animation 12 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-13'  => esc_html__( 'Animation 13 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-14'  => esc_html__( 'Animation 14 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-15'  => esc_html__( 'Animation 15 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-16'  => esc_html__( 'Animation 16 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-17'  => esc_html__( 'Animation 17 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-18'  => esc_html__( 'Animation 18 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-19'  => esc_html__( 'Animation 19 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-20'  => esc_html__( 'Animation 20 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-21'  => esc_html__( 'Animation 21 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-22'  => esc_html__( 'Animation 22 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-23'  => esc_html__( 'Animation 23 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-24'  => esc_html__( 'Animation 24 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-25'  => esc_html__( 'Animation 25 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-26'  => esc_html__( 'Animation 26 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-27'  => esc_html__( 'Animation 27 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-28'  => esc_html__( 'Animation 28 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-29'  => esc_html__( 'Animation 29 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-30'  => esc_html__( 'Animation 30 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-31'  => esc_html__( 'Animation 31 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-32'  => esc_html__( 'Animation 32 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-33'  => esc_html__( 'Animation 33 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-34'  => esc_html__( 'Animation 34 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-35'  => esc_html__( 'Animation 35 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-36'  => esc_html__( 'Animation 36 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-37'  => esc_html__( 'Animation 37 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-38'  => esc_html__( 'Animation 38 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-39'  => esc_html__( 'Animation 39 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-40'  => esc_html__( 'Animation 40 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-41'  => esc_html__( 'Animation 41 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-42'  => esc_html__( 'Animation 42 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-43'  => esc_html__( 'Animation 43 (PRO)', 'bwd-elementor-addons' ),
					'pro-animation-44'  => esc_html__( 'Animation 44 (PRO)', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'plcSelect' => 'predefined',
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/effective-pre-loader/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$repeater->add_control(
			'plcprecentagelayout',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'plcper1',
				'options' => [
					'plcper1'  => esc_html__( 'Layout 1', 'bwd-elementor-addons' ),
					'plcper2'  => esc_html__( 'Layout 2', 'bwd-elementor-addons' ),
					'plcper3'  => esc_html__( 'Layout 3', 'bwd-elementor-addons' ),
					'plcper4'  => esc_html__( 'Layout 4', 'bwd-elementor-addons' ),
					'plcper5'  => esc_html__( 'Layout 5', 'bwd-elementor-addons' ),
					'plcper6'  => esc_html__( 'Layout 6', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'plcSelect' => 'Progress',
				],
			]
		);
		$repeater->add_control(
			'plcper3prefix',
			[
				'label' => esc_html__( 'Prefix', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => esc_html__( 'Enter Prefix', 'bwd-elementor-addons' ),
				'condition' => [
					'plcSelect' => 'Progress',
					'plcprecentagelayout' => 'plcper3',
				],
			]
		);
		$repeater->add_control(
			'plcper3postfix',
			[
				'label' => esc_html__( 'Postfix', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => esc_html__( 'Enter Postfix', 'bwd-elementor-addons' ),
				'condition' => [
					'plcSelect' => 'Progress',
					'plcprecentagelayout' => 'plcper3',
				],
			]
		);
		$repeater->add_control(
			'plcprecentagelayoueprelos',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'plcperpostop',
				'options' => [
					'plcperpostop'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'plcperposbottom'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'plcSelect' => 'Progress',
					'plcprecentagelayout' => 'plcper2',
				],
			]
		);
		$repeater->add_control(
			'plcsImage',
			[
				'type' => Controls_Manager::MEDIA,
				'label' => esc_html__('Image', 'bwd-elementor-addons'),
				'dynamic' => [ 'active'   => true, ],
				'condition' => [
					'plcSelect' => 'Image',
				],
			]
		);
		$repeater->add_control(
			'plcsImageLoader',
			[
				'label' => esc_html__( 'Loader on Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Disable', 'bwd-elementor-addons' ),
				'default' => 'no',
				'condition' => [
					'plcSelect' => 'Image',
				],
			]
		);
		$repeater->add_control(
			'plcsIcons',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-spinner',
					'library' => 'solid',
				],
				'condition' => [
					'plcSelect' => 'Icon',
				],	
			]
		);
		$repeater->add_control(
			'plcsText',
			[
				'label' => esc_html__( 'Load Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Loading...', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type your loading text', 'bwd-elementor-addons' ),
				'condition' => [
					'plcSelect' => 'TextContent',
				],
			]
		);
		$repeater->add_control(
			'plcsTextLoader',
			[
				'label' => esc_html__( 'Loader on Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Disable', 'bwd-elementor-addons' ),
				'default' => 'no',
				'condition' => [
					'plcSelect' => 'TextContent',
				],
			]
		);
		$repeater->add_control(
			'plcsCustomCode',
			[
				'label' => esc_html__( 'Code', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => '',
				'placeholder' => esc_html__( 'Enter Your Custom Code.', 'bwd-elementor-addons' ),
				'dynamic' => [ 'active'   => true, ],
				'condition' => [
					'plcSelect' => 'CustomCode',
				],
			]
		);
		$repeater->add_control(
			'plcsCustomShortCode',
			[
				'label' => esc_html__( 'Shortcode', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'rows' => 3,
				'default' => '',
				'placeholder' => esc_html__( 'Enter Shortcode.', 'bwd-elementor-addons' ),
				'dynamic' => [ 'active'   => true, ],
				'condition' => [
					'plcSelect' => 'Shortcode',
				],
			]
		);
		$this->add_control(
			'preLoaderContent',
			[
				'label' => esc_html__( 'Pre Loader', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'plcSelect' => 'predefined',                       
					],
				],                
				'fields' => $repeater->get_controls(),
					'title_field' => '{{{ plcSelect }}}',				
			]
		);
		$this->add_control(
			'backpreloader',
			[
				'label' => esc_html__( 'PreLoad Visibility??', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Disable', 'bwd-elementor-addons' ),
				'default' => 'no',
				'description' => esc_html__('Note : It will show static preloader area just for design purpose.','bwd-elementor-addons'),
				'separator' => 'before',
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'aniLoadFirstSection',
			[
				'label' => esc_html__( 'Load First', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'alfSwitch',
			[
				'label' => esc_html__( 'Exclude Content', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Disable', 'bwd-elementor-addons' ),
				'default' => 'no',
			]
		);
		$this->add_control(
			'alfExclude',
			[
				'label' => esc_html__( 'Exclude', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'alfheader',
				'options' => [
					'alfheader'  => esc_html__( 'Header', 'bwd-elementor-addons' ),
					'alfcustom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'alfSwitch' => 'yes',
				],
			]
		);
		$this->add_control(
			'alfExcludecustom',
			[
				'label' => esc_html__( 'Class', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => '',
				'placeholder' => esc_html__( '.your-class', 'bwd-elementor-addons' ),
				'dynamic' => [ 'active'   => true, ],
				'condition' => [
					'alfSwitch' => 'yes',
					'alfExclude' => 'alfcustom',
				],
			]
		);
		$this->add_control(
			'alfExcludeZIndexpos',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'top',
				'options' => [
					'top'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'alfSwitch' => 'yes',
					'alfExclude' => 'alfcustom',
				],
			]
		);
		$this->add_control(
			'alfExcludeZIndex',
			[
				'type' => Controls_Manager::SLIDER,
				'label' => esc_html__('Z-Index', 'bwd-elementor-addons'),
				'size_units' => ['px'],
				'separator' => 'before',
				'default' => [
					'unit' => 'px',
					'size' => 12345,
				],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 99999,
						'step' => 100,
					],
				],
				'condition' => [
					'alfSwitch' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pageLoadSection',
			[
				'label' => esc_html__( 'Page Transition', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'inTransition',
			[
				'label' => esc_html__( 'In Transition', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		$this->add_control(
			'pageLoadTransition',
			[
				'label' => esc_html__( 'Transition', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'pageloadfadein',
				'options' => [
					'pageloadfadein'  => esc_html__( 'Fade', 'bwd-elementor-addons' ),
					'pageloadslidein'  => esc_html__( 'Slide', 'bwd-elementor-addons' ),
					'pageloadtripleswoosh'  => esc_html__( 'Triple Swoosh', 'bwd-elementor-addons' ),
					'pageloadsimple'  => esc_html__( 'Simple', 'bwd-elementor-addons' ),
					'pageloadduomove'  => esc_html__( 'Duo Move', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'pageLoad4InDir',
			[
				'label' => esc_html__( 'Direction', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right'  => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'top'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'topleft'  => esc_html__( 'Top Left', 'bwd-elementor-addons' ),
					'topright'  => esc_html__( 'Top Right', 'bwd-elementor-addons' ),
					'bottomleft'  => esc_html__( 'Bottom Left', 'bwd-elementor-addons' ),
					'bottomright'  => esc_html__( 'Bottom Right', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'pageLoadTransition' => ['pageloadtripleswoosh','pageloadsimple','pageloadduomove'],
				],
			]
		);
		$this->add_control(
			'pageLoadSlideInDir',
			[
				'label' => esc_html__( 'Direction', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right'  => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'top'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'pageLoadTransition' => 'pageloadslidein',
				],
			]
		);
		$this->add_control(
			'outTransition',
			[
				'label' => esc_html__( 'Out Transition', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Disable', 'bwd-elementor-addons' ),
				'default' => 'no',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'postLoadTransition',
			[
				'label' => esc_html__( 'Transition', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'postloadfadeout',
				'options' => [
					'postloadfadeout'  => esc_html__( 'Fade', 'bwd-elementor-addons' ),
					'postloadslideout'  => esc_html__( 'Slide', 'bwd-elementor-addons' ),
					'postloadstripleswoosh'  => esc_html__( 'Triple Swoosh', 'bwd-elementor-addons' ),
					'postloadssimple'  => esc_html__( 'Simple', 'bwd-elementor-addons' ),
					'postloadsduomove'  => esc_html__( 'Duo Move', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'outTransition' => 'yes',
				],
			]
		);
		$this->add_control(
			'postLoad4InDir',
			[
				'label' => esc_html__( 'Direction', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right'  => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'top'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'topleft'  => esc_html__( 'Top Left', 'bwd-elementor-addons' ),
					'topright'  => esc_html__( 'Top Right', 'bwd-elementor-addons' ),
					'bottomleft'  => esc_html__( 'Bottom Left', 'bwd-elementor-addons' ),
					'bottomright'  => esc_html__( 'Bottom Right', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'outTransition' => 'yes',
					'postLoadTransition' => ['postloadstripleswoosh','postloadssimple','postloadsduomove'],
				],
			]
		);
		$this->add_control(
			'postLoadSlideInDir',
			[
				'label' => esc_html__( 'Direction', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right'  => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'top'  => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom'  => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'outTransition' => 'yes',
					'postLoadTransition' => 'postloadslideout',
				],
			]
		);
		$this->add_control(
			'postLoadExcludeCustom',
			[
				'label' => esc_html__( 'Exclude Class', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => '',
				'placeholder' => esc_html__( 'Enter Exclude Class.', 'bwd-elementor-addons' ),
				'dynamic' => [ 'active'   => true, ],
				'condition' => [
					'outTransition' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'extraOptionsSection',
			[
				'label' => esc_html__( 'Extra Options', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'loadtime',
			[
				'label' => esc_html__( 'Load Time', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'loadtimedefault',
				'options' => [
					'loadtimedefault'  => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'loadtimemin'  => esc_html__( 'Minimum', 'bwd-elementor-addons' ),					
					'loadtimemax'  => esc_html__( 'Maximum', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'loadmaxtime',
			[
				'label' => esc_html__( 'Time (Second)', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 60,
						'step' => 1,
					],
				],
				'condition' => [
					'loadtime' => 'loadtimemax',
				],
			]
		);
		$this->add_responsive_control(
			'loadmintime',
			[
				'label' => esc_html__( 'Time (Second)', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 60,
						'step' => 1,
					],
				],
				'condition' => [
					'loadtime' => 'loadtimemin',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pr_image_styling',
			[
				'label' => esc_html__('Image Style', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'pr_image_max_width',
			[
				'type' => Controls_Manager::SLIDER,
				'label' => esc_html__('Max Width', 'bwd-elementor-addons'),
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 500,
						'step' => 1,
					],
				],				
				'render_type' => 'ui',
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader #eprel-preloader-logo-img img,#eprel-img-loader .eprel-preloader-logo-img' => 'max-width: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'pr_image_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader #eprel-preloader-logo-img img,
					#eprel-img-loader' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'pr_image_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '.eprel-loader-wrapper #eprel-loader #eprel-preloader-logo-img img',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'pr_imageb_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'.eprel-loader-wrapper #eprel-loader #eprel-preloader-logo-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',				
				],	
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'pr_image_shadow',
				'selector' => '.eprel-loader-wrapper #eprel-loader #eprel-preloader-logo-img img',				
			]
		);
		$this->add_control(
			'imageloaderheading',
			[
				'label' => esc_html__( 'Image Loader', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		$this->start_controls_tabs('il_tabs');
		$this->start_controls_tab('il_norm',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_responsive_control(
			'if_n_i_opacity',
			[
				'type' => Controls_Manager::SLIDER,
				'label' => esc_html__('Opacity', 'bwd-elementor-addons'),
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => .1,
						'max' => 1,
						'step' => 0.1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 0.3,
				],
				'render_type' => 'ui',
				'selectors' => [
					'{{WRAPPER}} #eprel-img-loader .eprel-preloader-logo-img' => 'opacity: {{SIZE}}',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Css_Filter::get_type(),
			[
				'name' => 'if_n_i_filters',
				'selector' => '{{WRAPPER}} #eprel-img-loader .eprel-preloader-logo-img',
				'separator' => 'before',
			]
		);	
		$this->end_controls_tab();
		$this->start_controls_tab('il_fill',
			[
				'label' => esc_html__( 'Fill', 'bwd-elementor-addons' ),
			]
		);
		$this->add_responsive_control(
			'if_f_i_opacity',
			[
				'type' => Controls_Manager::SLIDER,
				'label' => esc_html__('Opacity', 'bwd-elementor-addons'),
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => .1,
						'max' => 1,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 1,
				],
				'render_type' => 'ui',
				'selectors' => [
					'{{WRAPPER}} .eprel-img-loader-wrap .eprel-img-loader-wrap-in' => 'opacity: {{SIZE}}',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Css_Filter::get_type(),
			[
				'name' => 'if_f_i_filters',
				'selector' => '{{WRAPPER}} #eprel-img-loader-wrap .eprel-img-loader-wrap-in',
				'separator' => 'before',
			]
		);	
		$this->end_controls_tab();
		$this->end_controls_tabs();			
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pr_icon_styling',
			[
				'label' => esc_html__('Icon Style', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'pr_icon_size',
			[
				'type' => Controls_Manager::SLIDER,
				'label' => esc_html__('Size', 'bwd-elementor-addons'),
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 500,
						'step' => 1,
					],
				],				
				'render_type' => 'ui',
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i' => 'font-size: {{SIZE}}{{UNIT}}',
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg' => 'width:{{SIZE}}{{UNIT}};height:{{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'pr_icon_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i,.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'pr_icon_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i,.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);
		$this->add_control(
			'pr_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i:before' => 'color: {{VALUE}};',
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg' => 'fill: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'pr_icon_background',
				'types'     => [ 'classic', 'gradient' ],
				'selector'  => '.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i,.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg',
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'pr_icon_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i,.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg',
			]
		);
		$this->add_responsive_control(
			'pr_iconb_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i,.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',				
				],	
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'pr_icon_shadow',
				'selector' => '.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon i,.eprel-loader-wrapper #eprel-loader .eprel-preloader-icon svg',				
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pr_text_styling',
			[
				'label' => esc_html__('Text Style', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'pr_text_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,
					.eprel-loader-wrapper .eprel-text-loader,.eprel-loader-wrapper .eprel-text-loader .eprel-text-loader-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'pr_text_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,
					.eprel-loader-wrapper .eprel-text-loader,.eprel-loader-wrapper .eprel-text-loader .eprel-text-loader-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'pr_text_typography',
				'selector' => '.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,
				.eprel-loader-wrapper .eprel-text-loader,.eprel-loader-wrapper .eprel-text-loader .eprel-text-loader-inner',
			]
		);		
		$this->add_control(
			'pr_text_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,.eprel-loader-wrapper .eprel-text-loader' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'pr_text_background',
				'types'     => [ 'classic', 'gradient' ],
				'selector'  => '.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,
				.eprel-loader-wrapper .eprel-text-loader',
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'pr_text_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,
				.eprel-loader-wrapper .eprel-text-loader',
			]
		);
		$this->add_responsive_control(
			'pr_textb_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,
					.eprel-loader-wrapper .eprel-text-loader' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',				
				],	
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'pr_text_shadow',
				'selector' => '.eprel-loader-wrapper #eprel-loader .eprel-preloader-animated-text span,
				.eprel-loader-wrapper .eprel-text-loader',				
			]
		);
		$this->add_control(
			'textloaderheading',
			[
				'label' => esc_html__( 'Text Loader', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'textloader_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .eprel-loader-wrapper .eprel-text-loader .eprel-text-loader-inner' => 'color: {{VALUE}};',
				],
			]
		);		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pr_predefined_styling',
			[
				'label' => esc_html__('Predefined', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'pr_predefine_padding',
			[
				'label' => esc_html__( 'Padding', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'#eprel-loader > div' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'pr_predefine_margin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'#eprel-loader > div' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pr_progress_styling',
			[
				'label' => esc_html__('Progress Bar', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'progresswidth',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'size_units' => [ '%' ,'px','vw'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 700,
						'step' => 1,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
					'vw' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 300,
				],
				'selectors' => [
					'{{WRAPPER}} .eprel-preloader-wrap,
					{{WRAPPER}} .eprel-preloader-wrap4,
					{{WRAPPER}} .eprel-preloader-wrap6' => 'min-width: {{SIZE}}{{UNIT}};width: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'progressheight',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 700,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'selectors' => [
					'{{WRAPPER}} .eprel-loader,{{WRAPPER}} .eprel-percentage,{{WRAPPER}} .percentagelayout' => 'height: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
			'progressmargin',
			[
				'label' => esc_html__( 'Margin', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em'],				
				'selectors' => [
					'{{WRAPPER}} .eprel-preloader-wrap,
					{{WRAPPER}} .eprel-preloader-wrap4,
					{{WRAPPER}} .eprel-preloader-wrap6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);		
		$this->add_control(
			'progressbar',
			[
				'label' => esc_html__( 'Progress Bar', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'progressbargradiantcolor',
			[
				'label' => esc_html__( 'Gradient Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Disable', 'bwd-elementor-addons' ),
				'default' => 'no',				
			]
		);
		$this->add_control(
			'progressbarcolor1',
			[
				'label' => esc_html__( 'Color 1', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#6fc784',
				'condition' => [
					'progressbargradiantcolor!' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolor2',
			[
				'label' => esc_html__( 'Color 2', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#6fc784d4',
				'selectors' => [
					'{{WRAPPER}} .eprel-loadbar,{{WRAPPER}} .percentagelayout,{{WRAPPER}} .eprel-preloader-wrap4.plcper4 .eprel-preloader-wrap4-in,
					{{WRAPPER}} .eprel-preloader-wrap5.plcper5 .eprel-pre-5' => 'background: repeating-linear-gradient(45deg,  {{progressbarcolor1.VALUE}}, {{progressbarcolor1.VALUE}} 10px, {{progressbarcolor2.VALUE}} 10px, {{progressbarcolor2.VALUE}} 20px);',
					'{{WRAPPER}} .eprel-glow' => 'box-shadow: 0 0 60px 10px {{progressbarcolor1.VALUE}};',
				],
				'condition' => [
					'progressbargradiantcolor!' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorg1',
			[
				'label' => esc_html__( 'Color 1', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffd33d',
				'condition' => [
					'progressbargradiantcolor' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorg2',
			[
				'label' => esc_html__( 'Color 2', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ff5a6e',
				'condition' => [
					'progressbargradiantcolor' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorg3',
			[
				'label' => esc_html__( 'Color 3', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#8072fc',
				'condition' => [
					'progressbargradiantcolor' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorg4',
			[
				'label' => esc_html__( 'Color 4', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#6fc784',
				'condition' => [
					'progressbargradiantcolor' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorg5',
			[
				'label' => esc_html__( 'Color 5', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#f7d782',
				'condition' => [
					'progressbargradiantcolor' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorg6',
			[
				'label' => esc_html__( 'Color 6', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ff5a6e',
				'condition' => [
					'progressbargradiantcolor' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorg7',
			[
				'label' => esc_html__( 'Color 7', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#8072fc',
				'selectors' => [
					'{{WRAPPER}} .eprel-loadbar,{{WRAPPER}} .percentagelayout,{{WRAPPER}} .eprel-preloader-wrap4.plcper4 .eprel-preloader-wrap4-in,
					{{WRAPPER}} .eprel-preloader-wrap5.plcper5 .eprel-pre-5' => 'background: linear-gradient(90deg,{{progressbarcolorg1.VALUE}},{{progressbarcolorg2.VALUE}} 17%,{{progressbarcolorg3.VALUE}} 34%,{{progressbarcolorg4.VALUE}} 51%,{{progressbarcolorg5.VALUE}} 68%,{{progressbarcolorg6.VALUE}} 85%,{{progressbarcolorg7.VALUE}});',
					'{{WRAPPER}} .eprel-glow' => 'box-shadow: 0 0 60px 10px {{progressbarcolorg1.VALUE}};',
				],
				'condition' => [
					'progressbargradiantcolor' => 'yes',
				],
			]
		);
		$this->add_control(
			'progressbarcolorempty',
			[
				'label' => esc_html__( 'Progress Empty Color (Layout 4)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff7d',
				'selectors' => [
					'{{WRAPPER}} .eprel-preloader-wrap4.plcper4' => 'background-color: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'progressbar5size',
			[
				'label' => esc_html__( 'Progress Size (Layout 5)', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 25,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 3,
				],
				'selectors' => [
					'{{WRAPPER}} .eprel-preloader-wrap5.plcper5 .eprel-pre-5-in3,{{WRAPPER}}  .eprel-preloader-wrap5.plcper5 .eprel-pre-5-in4' => 'height: {{SIZE}}{{UNIT}}',
					'{{WRAPPER}} .eprel-preloader-wrap5.plcper5 .eprel-pre-5-in1,{{WRAPPER}}  .eprel-preloader-wrap5.plcper5 .eprel-pre-5-in2' => 'width: {{SIZE}}{{UNIT}}',
				],
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'progressbordercolor',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .eprel-percentage.eprel-percentage-load',				
				'separator' => 'before',
			]
	    );
		$this->add_responsive_control(
			'progressborderradious',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .eprel-loadbar,.percentagelayout,{{WRAPPER}} .eprel-percentage.eprel-percentage-load' => 'border-radius: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'progresstext_styling',
			[
				'label' => esc_html__('Progress Number', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progresstexttypography',
				'label' => esc_html__( 'Typography', 'bwd-elementor-addons' ),
				'scheme' => Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .eprel-percentage.eprel-percentage-load,{{WRAPPER}} .eprel-preloader-wrap.plcper3 div#eprel-precent3,
				{{WRAPPER}} .eprel-preloader-wrap4.plcper4 .eprel-preloader-wrap4-in',
				
			]
		);
		$this->add_control(
			'progresstextcolor',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .eprel-percentage.eprel-percentage-load,{{WRAPPER}} .eprel-preloader-wrap.plcper3 div#eprel-precent3,
					{{WRAPPER}} .eprel-preloader-wrap4.plcper4 .eprel-preloader-wrap4-in' => 'color: {{VALUE}}',
				],
				
			]
		);
		$this->add_control(
			'progresstexeprelrepostheading',
			[
				'label' => esc_html__( 'Progress Layout 3', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'progresstexeprelrefix',
			[
				'label' => esc_html__( 'Prefix', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progresstexeprelrefixtypography',
				'label' => esc_html__( 'Typography', 'bwd-elementor-addons' ),
				'scheme' => Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .eprel-preloader-wrap.plcper3 span.eprel-perc-prepostfix.eprel-perc-pre',
				
			]
		);
		$this->add_control(
			'progresstexeprelrefixcolor',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .eprel-preloader-wrap.plcper3 span.eprel-perc-prepostfix.eprel-perc-pre' => 'color: {{VALUE}}',
				],
				
			]
		);
		$this->add_control(
			'progresstexeprelostfix',
			[
				'label' => esc_html__( 'Postfix', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progresstexeprelostfixtypography',
				'label' => esc_html__( 'Typography', 'bwd-elementor-addons' ),
				'scheme' => Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .eprel-preloader-wrap.plcper3 span.eprel-perc-prepostfix.eprel-perc-post',
				
			]
		);
		$this->add_control(
			'progresstexeprelostfixcolor',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .eprel-preloader-wrap.plcper3 span.eprel-perc-prepostfix.eprel-perc-post' => 'color: {{VALUE}}',
				],
				
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'progresscircle_styling',
			[
				'label' => esc_html__('Progress Circle', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'pctextemptycolor',
			[
				'label' => esc_html__( 'Empty Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff36',
				
			]
		);
		$this->add_control(
			'pctextfillcolor',
			[
				'label' => esc_html__( 'Fill Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
				
			]
		);
		$this->add_responsive_control(
			'pctextstrocksize',
			[
				'label' => esc_html__( 'Stroke Width', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 20,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 4,
				],
			]
		);
		$this->add_control(
			'pctextheading',
			[
				'label' => esc_html__( 'Percentage Styling', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'pctexttypography',
				'label' => esc_html__( 'Typography', 'bwd-elementor-addons' ),
				'scheme' => Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .eprel-preloader-wrap6.plcper6 .eprel-percentage.eprel-percentage-load',
				
			]
		);
		$this->add_control(
			'pctextcolor',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .eprel-preloader-wrap6.plcper6 .eprel-percentage.eprel-percentage-load' => 'color: {{VALUE}}',
				],
				
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pr_extra_transition_styling',
			[
				'label' => esc_html__('Transition Effect', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pageLoadTransition' => ['pageloadtripleswoosh','pageloadsimple','pageloadduomove'],
				],
			]
		);
		$this->add_control(
			'eprel4color1',
			[
				'label' => esc_html__( 'Color 1', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ff5a6e',
			]
		);
		$this->add_control(
			'eprel4color2',
			[
				'label' => esc_html__( 'Color 2', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#8072fc',
				'conditions'   => [
					'terms' => [
						[
							'relation' => 'or',
							'terms'    => [								
								[
									'name'     => 'pageLoadTransition','operator' => '==','value'    => 'pageloadtripleswoosh',
								],
								[
									'name'     => 'pageLoadTransition','operator' => '==','value'    => 'pageloadduomove',
								],
							],
						],
					],
				],
			]
		);
		$this->add_control(
			'eprel4color3',
			[
				'label' => esc_html__( 'Color 3', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#6fc784',
				'conditions'   => [
					'terms' => [
						[
							'relation' => 'or',
							'terms'    => [								
								[
									'name'     => 'pageLoadTransition','operator' => '==','value'    => 'pageloadtripleswoosh',
								],
							],
						],
					],
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pr_box_styling',
			[
				'label' => esc_html__('Box Style', 'bwd-elementor-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'pr_box_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type'  => Controls_Manager::SLIDER,
				'size_units' => [ '%' ,'px','vw'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 700,
						'step' => 1,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
					'vw' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .eprel-loader-wrapper #eprel-loader' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
				'pr_box_padding',
				[
					'label'      => esc_html__( 'Padding', 'bwd-elementor-addons' ),
					'type'       => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors'  => [
						'#eprel-loader-wrapper #eprel-loader' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],				
				]
		);
		$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'pr_box_BG',
					'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
				    'types' => [ 'classic', 'gradient' ],
				    'selector' => '#eprel-loader-wrapper #eprel-loader',
				   
				]
		);
		 $this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'pr_box_Border',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '#eprel-loader-wrapper #eprel-loader',
				]
	    );
		$this->add_responsive_control(
			'pr_box_BRadius',
			[
				'label'      => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'#eprel-loader-wrapper #eprel-loader' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pr_box_Shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '#eprel-loader-wrapper #eprel-loader',
				
			]
		);
		$this->add_control(
			'whole_pr_box',
			[
				'label' => esc_html__( 'Whole Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'pr_whole_box_BG',
					'label' => esc_html__( 'Background Type', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '#eprel-loader-wrapper',
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$preLoaderContent=$settings["preLoaderContent"];
		
		if(\Elementor\Plugin::$instance->editor->is_edit_mode() && (!empty($settings['backpreloader']) && $settings['backpreloader']=='yes')){
			echo '<style>.eprel-loaded #eprel-loader-wrapper{visibility:visible;opacity:1}.eprel-loaded #eprel-loader{opacity:1}.eprel-loadbar{width:50%}.eprel-percentage{border:2px solid #6fc784}</style>';
		}

		$pageLoadTransition=!empty($settings["pageLoadTransition"]) ? $settings["pageLoadTransition"] : 'pageloadfadein';
		$pageLoadSlideInDir=!empty($settings["pageLoadSlideInDir"]) ? $settings["pageLoadSlideInDir"] : 'left';
		$pageLoad4InDir=!empty($settings["pageLoad4InDir"]) ? $settings["pageLoad4InDir"] : 'left';
		
		$postLoadTransition=!empty($settings["postLoadTransition"]) ? $settings["postLoadTransition"] : 'postloadfadeout';
		$postLoadSlideInDir=!empty($settings["postLoadSlideInDir"]) ? $settings["postLoadSlideInDir"] : 'left';
		$postLoad4InDir=!empty($settings["postLoad4InDir"]) ? $settings["postLoad4InDir"] : 'left';

		$preloaderSrc=$slideinclass=$slideoutclass=$slideinclasseclass='';
		
		if(!empty($pageLoadTransition) && $pageLoadTransition=='pageloadslidein' && !empty($pageLoadSlideInDir)){
			$slideinclass = 'eprel-duo-move-'.esc_attr($pageLoadSlideInDir);
		}
		
		if(!empty($postLoadTransition) && $postLoadTransition=='postloadslideout' && !empty($pageLoadSlideInDir)){
			$slideoutclass = 'eprel-out-duo-move-'.esc_attr($postLoadSlideInDir);
		}
		
		if(!empty($pageLoadTransition) && ($pageLoadTransition=='pageloadtripleswoosh' || $pageLoadTransition=='pageloadsimple' || $pageLoadTransition=='pageloadduomove' || $postLoadTransition=='postloadstripleswoosh' || $postLoadTransition=='postloadssimple' || $postLoadTransition=='postloadsduomove')){
			$slideinclasseclass='eprel-preload-transion4';
		}
				
		if(!empty($pageLoadTransition) && $pageLoadTransition=='pageloadtripleswoosh' && !empty($pageLoad4InDir)){
			$slideinclass = 'eprel-tripleswoosh eprel-4-preload-'.esc_attr($pageLoad4InDir);
		}
		
		if(!empty($postLoadTransition) && $postLoadTransition=='postloadstripleswoosh' && !empty($postLoad4InDir)){
			$slideoutclass = 'eprel-tripleswoosh eprel-4-postload-'.esc_attr($postLoad4InDir);
		}
		
		if(!empty($pageLoadTransition) && $pageLoadTransition=='pageloadsimple' && !empty($pageLoad4InDir)){
			$slideinclass = 'eprel-simple eprel-4-preload-'.esc_attr($pageLoad4InDir);
		}
		if(!empty($postLoadTransition) && $postLoadTransition=='postloadssimple' && !empty($postLoad4InDir)){
			$slideoutclass = 'eprel-tripleswoosh eprel-4-postload-'.esc_attr($postLoad4InDir);
		}
		if(!empty($pageLoadTransition) && $pageLoadTransition=='pageloadduomove' && !empty($pageLoad4InDir)){
			$slideinclass = 'eprel-duomove2 eprel-4-preload-'.esc_attr($pageLoad4InDir);
		}
		if(!empty($postLoadTransition) && $postLoadTransition=='postloadsduomove' && !empty($postLoad4InDir)){
			$slideoutclass = 'eprel-tripleswoosh eprel-4-postload-'.esc_attr($postLoad4InDir);
		}
		$preload_opt = [];
		$data_attr='';
		$preload_opt["post_load_opt"] ='disablepostload';
		if(!empty($settings['outTransition']) && $settings['outTransition']=='yes'){
			$preload_opt["post_load_opt"] ='enablepostload';
			if(!empty($settings['postLoadExcludeCustom'])){
				$preload_opt["post_load_exclude_class"] = $settings['postLoadExcludeCustom'];			
			}
		}

		if(!empty($settings['loadtime']) && $settings['loadtime']!='loadtimedefault'){
			if($settings['loadtime']=='loadtimemin' && isset($settings['loadmintime']) && !empty($settings['loadmintime']['size'])){
				$preload_opt["loadtime"] = 'loadtimemin';
				$preload_opt["loadmintime"] = $settings['loadmintime']['size'];
			}else if($settings['loadtime']=='loadtimemax' && isset($settings['loadmaxtime']) && !empty($settings['loadmaxtime']['size'])){
				$preload_opt["loadtime"] = 'loadtimemax';
				$preload_opt["loadmaxtime"] = $settings['loadmaxtime']['size'];
			}
		}

		$data_attr = ' data-plec=\'' . json_encode($preload_opt) . '\'';
		if(!empty($preLoaderContent)) {
			$index=0;
			$sectioncolumn='body';
			$preloaderSrc .='<div id="eprel-loader-wrapper" class="eprel-loader-wrapper '.esc_attr($slideinclass).' '.esc_attr($slideoutclass).' '.esc_attr($slideinclasseclass).'" '.$data_attr.' data-post_load_opt='.$preload_opt["post_load_opt"].'>';
			
			foreach($preLoaderContent as $item1) {			
				
				if((!empty($item1["plcSelect"]) && $item1["plcSelect"]=='Progress') && (!empty($item1['plcprecentagelayout']) && $item1['plcprecentagelayout']=='plcper2')){					
					$plcposclass="";	
					if(!empty($item1['plcprecentagelayoueprelos'])){
						if($item1['plcprecentagelayoueprelos']=='plcperpostop'){
							$plcposclass = 'eprel-perc-top';							
						}else if($item1['plcprecentagelayoueprelos']=='plcperposbottom'){
							$plcposclass = 'eprel-perc-bottom';
						} 
					}					
					$preloaderSrc .='<span class="percentagelayout '.esc_attr($plcposclass).'"></span>';
				}else if($item1["plcSelect"]=='Progress' && (!empty($item1['plcprecentagelayout']) && $item1['plcprecentagelayout']=='plcper5')){
					$preloaderSrc .='<div class="eprel-preloader-wrap5 '.esc_attr($item1['plcprecentagelayout']).'">
					<div class="eprel-pre-5 eprel-pre-5-in1" id="eprel-precent5"></div>
					<div class="eprel-pre-5 eprel-pre-5-in2" id="eprel-precent5"></div>
					<div class="eprel-pre-5 eprel-pre-5-in3" id="eprel-precent5"></div>
					<div class="eprel-pre-5 eprel-pre-5-in4" id="eprel-precent5"></div>
					</div>';
				}
				$index++;
			}

			$preloaderSrc .='<div id="eprel-loader">';
			foreach($preLoaderContent as $item) {							
				if($item['plcSelect'] == 'predefined'){// for pro
				$plcSelect=!empty($item["plcSelect"]) ? $item["plcSelect"] : 'Image';
				if(!empty($plcSelect)){
					//image
					if($plcSelect=='Image' && !empty($item["plcsImage"]["url"])){						
						$plcsImage=$item['plcsImage']['url'];													
						$image_id=$item["plcsImage"]["id"];
						$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
						if(!$image_alt){
							$image_alt = get_the_title($image_id);
						}else if(!$image_alt){
							$image_alt = 'Image';
						}
	
						if(isset($item['plcsImageLoader']) && $item['plcsImageLoader']=='yes'){
							$preloaderSrc .='<div id="eprel-img-loader">
								<div class="eprel-img-loader-wrap">
									<span style="background-image: url('.esc_url($plcsImage).');" data-no-lazy="1" class="eprel-img-loader-wrap-in skip-lazy"></span>
									</div>
									<img data-no-lazy="1" class="eprel-preloader-logo-img skip-lazy" alt="'.esc_attr($image_alt).'" src="'.esc_url($plcsImage).'">
								</div>';
						}else{
							$preloaderSrc .='<div id="eprel-preloader-logo-img" class="img"><img class="eprel-preloader-image" src='.esc_url($plcsImage).' alt="'.esc_attr($image_alt).'" /></div>';
						}	
					}
					//icon
					if($plcSelect=='Icon' && !empty($item['plcsIcons'])){
						ob_start();
						\Elementor\Icons_Manager::render_icon( $item['plcsIcons'], [ 'aria-hidden' => 'true' ]);
						$preloaderIconSrc = ob_get_contents();
						ob_end_clean();
						$preloaderSrc .='<div id="eprel-preloader-logo-img" class="icon"><span class="eprel-preloader-icon">'.$preloaderIconSrc.'</span></div>';
					}
					//text
					if($plcSelect=='TextContent' && !empty($item['plcsText'])){
						if(isset($item['plcsTextLoader']) && $item['plcsTextLoader']=='yes'){	
							$preloaderSrc .='<div class="eprel-text-loader">'.esc_html($item['plcsText']).'<div class="eprel-text-loader-inner">'.esc_html($item['plcsText']).'</div></div>';
						}else{
							$preloaderSrc .='<div class="eprel-preloader-animated-text"><span>'.esc_html($item['plcsText']).'</span></div>';
						}
					}
					// Pro 
					if($item['plcsPreAnimation'] == 'animation-1' || $item['plcsPreAnimation'] == 'animation-2'){// for pro
					//predefine animation
					if($plcSelect=='predefined' && !empty($item['plcsPreAnimation'])){
						if($item['plcsPreAnimation']=='animation-1'){
							$preloaderSrc .='<div class="eprel-ball-grid-pulse"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-2'){
							$preloaderSrc .='<div class="eprel-ball-triangle-path"><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-3'){
							$preloaderSrc .='<div class="eprel-ball-scale-ripple-multiple"><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-4'){
							$preloaderSrc .='<div class="eprel-triangle-skew-spin"><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-5'){
							$preloaderSrc .='<div class="eprel-rounded-triangle"></div>';
						}else if($item['plcsPreAnimation']=='animation-6'){
							$preloaderSrc .='<div class="eprel_preloader_audio_wave"><span></span><span></span><span></span><span></span><span></span></div>';
						}else if($item['plcsPreAnimation']=='animation-7'){
							$preloaderSrc .='<div class="pac-man" />';
						}else if($item['plcsPreAnimation']=='animation-8'){
							$preloaderSrc .='<div class="eprel-preloader-help"></div>';
						}else if($item['plcsPreAnimation']=='animation-9'){
							$preloaderSrc .='<div class="eprel-preloader-cord">
								<div class="eprel-cord eprel-leftMove"><div class="eprel-ball"></div></div>
								  <div class="eprel-cord"><div class="eprel-ball"></div></div>
								  <div class="eprel-cord"><div class="eprel-ball"></div></div>
								  <div class="eprel-cord"><div class="eprel-ball"></div></div>
								  <div class="eprel-cord"><div class="eprel-ball"></div></div>
								  <div class="eprel-cord"><div class="eprel-ball"></div></div>
								<div class="eprel-cord eprel-rightMove"><div class="eprel-ball" id="eprel-first"></div></div>
								<div class="eprel-shadows"><div class="eprel-leftShadow"></div>
									<div></div><div></div><div></div><div></div><div></div>
									<div class="eprel-rightShadow"></div>
								</div>
							</div>';
						}else if($item['plcsPreAnimation']=='animation-10'){
							$preloaderSrc .='<div class="eprel-preloader-dot">
									<span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								  <span class="eprel-preloader-dots"></span>
								 </div>';
						}else if($item['plcsPreAnimation']=='animation-11'){
							$preloaderSrc .='<section class="animation_loader"><div><div><div><div><div><div><div><div><div></div></div></div></div></div></div></div></div></div></section>';
						}else if($item['plcsPreAnimation']=='animation-12'){
							$preloaderSrc .='<div class="cup"><div class="h"></div></div>';
						}else if($item['plcsPreAnimation']=='animation-13'){
							$preloaderSrc .='<div class="eprel_preloader_spinning_disc_block"><div class="eprel_preloader_spinning_disc"></div></div>';
						}else if($item['plcsPreAnimation']=='animation-14'){
							$preloaderSrc .='<div class="line"><div class="pen"><div class="pen_overlay"></div><div class="pen_top"></div><div class="pen_bottom"></div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-15'){
							$preloaderSrc .='<div class="predefined-style-15"><div class="cube"><div class="sides"><div class="top"></div><div class="right"></div><div class="bottom"></div><div class="left"></div><div class="front"></div><div class="back"></div></div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-16'){
							$preloaderSrc .='<span class="back"><span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span></span>';
						}else if($item['plcsPreAnimation']=='animation-17'){
							$preloaderSrc .='<div class="predefined-style-17"><p>l</p><p>o</p><p>a</p><p>d</p><p>i</p><p>n</p><p>g</p></div>';
						}else if($item['plcsPreAnimation']=='animation-18'){
							$preloaderSrc .='<h1 class="title">Loading</h1><div class="rainbow-marker-loader"></div>';
						}else if($item['plcsPreAnimation']=='animation-19'){
							$preloaderSrc .='<div class="container-style-19">
										<div class="baton-0"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-1"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-2"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-3"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-4"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-5"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-6"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-7"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-8"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-9"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-10"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-11"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-12"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-13"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-14"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-15"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-16"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-17"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-18"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-19"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-20"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-21"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-22"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-23"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-24"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-25"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-26"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-27"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-28"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-29"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-30"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-31"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-32"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-33"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-34"><div class="metronome"><div class="baton"></div></div></div>
										<div class="baton-35"><div class="metronome"><div class="baton"></div></div></div>
							</div>';
						}else if($item['plcsPreAnimation']=='animation-20'){
							$preloaderSrc .='<div class="blobs"><div class="blob-center"></div><div class="blob"></div><div class="blob"></div><div class="blob"></div><div class="blob"></div><div class="blob"></div><div class="blob"></div></div>';
						}else if($item['plcsPreAnimation']=='animation-21'){
							$preloaderSrc .='<div class="container-style-21"><div class="row"><div class="col-md-12"><div class="loader-style-21"><div></div><div></div><div></div><div></div></div></div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-22'){
							$preloaderSrc .='<div class="predefined-style-22"><div class="item item-1"></div><div class="item item-2"></div><div class="item item-3"></div><div class="item item-4"></div></div>';
						}else if($item['plcsPreAnimation']=='animation-23'){
							$preloaderSrc .='<div class="predefined-style-23"><span></span><span></span><span></span><span></span></div>';
						}else if($item['plcsPreAnimation']=='animation-24'){
							$preloaderSrc .='<div class="spinner-wrapper"><div class="spinner"><div class="sk-folding-cube"><div class="sk-cube1 sk-cube"></div><div class="sk-cube2 sk-cube"></div><div class="sk-cube4 sk-cube"></div><div class="sk-cube3 sk-cube"></div></div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-25'){
							$preloaderSrc .='<div class="loading"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>';
						}else if($item['plcsPreAnimation']=='animation-26'){
							$preloaderSrc .='<div class="predefined-style-26"></div>';
						}else if($item['plcsPreAnimation']=='animation-27'){
							$preloaderSrc .=' <div class="container-style-27"><div class="wrapper"><div class="loader"><div class="spinner"></div></div><div class="loader"><div class="spinner"></div></div><div class="loader"><div class="spinner"></div></div><div class="loader"><div class="spinner"></div></div><div class="loader"><div class="spinner"></div></div><div class="loader"><div class="spinner"></div></div><div class="loader"><div class="spinner"></div></div><div class="loader"><div class="spinner"></div></div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-28'){
							$preloaderSrc .='<div class="predefined-style-28"></div>';
						}else if($item['plcsPreAnimation']=='animation-29'){
							$preloaderSrc .='<div class="predefined-style-29"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-30'){
							$preloaderSrc .='<div class="predefined-style-30"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>';
						}else if($item['plcsPreAnimation']=='animation-31'){
							$preloaderSrc .='<div class="predefined-style-31"><div class="loader-style-31"><div class="loader-inner-style-31"></div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-32'){
							$preloaderSrc .='<div class="preloader-style-32"><div class="box1"></div><div class="box2"></div><div class="box3"></div><div class="box4"></div></div>';
						}else if($item['plcsPreAnimation']=='animation-33'){
							$preloaderSrc .='<div class="loader-style-33"><div class="holder"><div class="box"></div></div><div class="holder"><div class="box"></div></div><div class="holder"><div class="box"></div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-34'){
							$preloaderSrc .='<div class="loader-style-34"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>';
						}else if($item['plcsPreAnimation']=='animation-35'){
							$preloaderSrc .='<div class="loader-style-35"><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-36'){
							$preloaderSrc .='<div class="loader-style-36"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>';
						}else if($item['plcsPreAnimation']=='animation-37'){
							$preloaderSrc .='<div class="loader-style-37"></div>';
						}else if($item['plcsPreAnimation']=='animation-38'){
							$preloaderSrc .='<div class="loader-style-38"><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-39'){
							$preloaderSrc .='<div class="loader-style-39"><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div></div>';
						}else if($item['plcsPreAnimation']=='animation-40'){
							$preloaderSrc .='<div class="loader-style-40"><div></div><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-41'){
							$preloaderSrc .='<div class="loader-style-41"><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-42'){
							$preloaderSrc .='<div class="loader-style-42"><div></div><div></div><div></div><div></div><div></div><div></div></div>';
						}else if($item['plcsPreAnimation']=='animation-43'){
							$preloaderSrc .='<div class="loader-style-43"><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div><div class="inner_loader"></div></div>';
						}else if($item['plcsPreAnimation']=='animation-44'){
							$preloaderSrc .='<div class="demo-style-44"><div class="container"><div class="row"><div class="col-md-12"><div class="loader"><div class="loader-inner-1"></div><div class="loader-inner-2"></div><div class="loader-inner-3"></div></div></div></div></div></div>';
						}
						}
						}// for pro
					
				
					
					//custom
					if($plcSelect=='CustomCode' && !empty($item['plcsCustomCode'])){
						$preloaderSrc .='<div class="eprel-preloader-custom">'.$item['plcsCustomCode'].'</div>';
					}
					
					if($plcSelect=='Shortcode' && !empty($item['plcsCustomShortCode'])){
						$preloaderSrc .='<div class="eprel-preloader-custom-shortcode">'.do_shortcode( shortcode_unautop( $item['plcsCustomShortCode'] ) ).'</div>';
					}
					
					if($plcSelect=='Progress' && (!empty($item['plcprecentagelayout']) && $item['plcprecentagelayout']=='plcper1')){
						$preloaderSrc .='<div class="eprel-preloader-wrap"><div class="eprel-percentage" id="eprel-precent"></div><div class="eprel-loader"><div class="p-trackbar"><div class="eprel-loadbar"></div></div><div class="eprel-glow"></div></div></div>';
					}else if($plcSelect=='Progress' && (!empty($item['plcprecentagelayout']) && $item['plcprecentagelayout']=='plcper3')){
						$percpre=$percpost='';
						if(!empty($item['plcper3prefix'])){
							$percpre='<span class="eprel-perc-prepostfix eprel-perc-pre">'.esc_html($item['plcper3prefix']).'</span>';
						}
						if(!empty($item['plcper3postfix'])){
							$percpost='<span class="eprel-perc-prepostfix eprel-perc-post">'.esc_html($item['plcper3postfix']).'</span>';
						}
						$preloaderSrc .='<div class="eprel-preloader-wrap '.esc_attr($item['plcprecentagelayout']).'">'.$percpre.'<div class="eprel-percentage" id="eprel-precent3"></div>'.$percpost.'</div>';
					}else if($plcSelect=='Progress' && (!empty($item['plcprecentagelayout']) && $item['plcprecentagelayout']=='plcper4')){
						$preloaderSrc .='<div class="eprel-preloader-wrap4 '.esc_attr($item['plcprecentagelayout']).'"><div class="eprel-preloader-wrap4-in" id="eprel-precent4"></div></div>';
					}else if($item["plcSelect"]=='Progress' && (!empty($item['plcprecentagelayout']) && $item['plcprecentagelayout']=='plcper6')){
					$pctextemptycolor = !empty($settings['pctextemptycolor']) ? $settings['pctextemptycolor'] : '#ffffff36';
					$pctextfillcolor = !empty($settings['pctextfillcolor']) ? $settings['pctextfillcolor'] : '#fff';
					$pctextstrocksize = !empty($settings['pctextstrocksize']) ? $settings['pctextstrocksize']['size'] : 4;
					$preloaderSrc .='<div class="eprel-preloader-wrap6 '.esc_attr($item['plcprecentagelayout']).'">
							<svg class="progress-ring" width="120" height="120">
								<circle id="eprel-precent6" class="progress-ring__circle progress-ring1" style="stroke-dasharray: 326.726, 326.726;stroke-dashoffset: 326.726;" stroke="'.esc_attr($pctextfillcolor).'" stroke-width="'.esc_attr($pctextstrocksize).'" fill="transparent" r="52" cx="60" cy="60"/>
							</svg>
							<svg class="progress-ring progress-ring2" width="120" height="120">
								<circle class="progress-ring__circle" style="stroke-dasharray: 326.726, 326.726;stroke-dashoffset:0;" stroke="'.esc_attr($pctextemptycolor).'" stroke-width="'.esc_attr($pctextstrocksize).'" fill="transparent" r="52" cx="60"    cy="60"/>
							</svg>
							<div class="eprel-percentage" id="eprel-precent3"></div>
						</div>';
					}
					
				}				
				$index++;
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
			}
			
			$get_ele_pre = '.elementor-element'.$this->get_unique_selector();
			$pd_color_1 = !empty($settings['pr_predefined_color1']) ? $settings['pr_predefined_color1'] : '';
			$pd_color_2 = !empty($settings['pr_predefined_color2']) ? $settings['pr_predefined_color2'] : '';
			$preloaderSrc .='<style>'.$get_ele_pre.' .eprel-preloader-help:after,'.$get_ele_pre.' .eprel-preloader-cord .eprel-ball,'.$get_ele_pre.' .eprel-preloader-dots:before,'.$get_ele_pre.' .eprel_preloader_the_shake span{
					background:'.$pd_color_1.';
				}
				'.$get_ele_pre.' .eprel-ball-triangle-path>div,'.$get_ele_pre.'  .eprel-ball-scale-ripple-multiple>div,'.$get_ele_pre.' .eprel-preloader-help{
					border-color:'.$pd_color_1.';
				}
				'.$get_ele_pre.' .eprel-triangle-skew-spin>div{
					 border-bottom-color:'.$pd_color_1.';
				}
				'.$get_ele_pre.' .eprel_dot_1,.eprel-preloader-dot .eprel-preloader-dots:after{
					background:'.$pd_color_2.';
				}
				'.$get_ele_pre.' .eprel_preloader_spinning_disc:after{
					border-top:10px solid '.$pd_color_2.';
					border-bottom:10px solid '.$pd_color_2.';
				}
				@-webkit-keyframes eprel_typing_loader {
					0% {
						background-color: '.$pd_color_1.';
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'33
					}

					25% {
						background-color: '.$pd_color_1.'66;
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'33
					}

					75% {
						background-color: '.$pd_color_1.'66;
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'
					}
				}

				@-moz-keyframes eprel_typing_loader {
					0% {
						background-color: '.$pd_color_1.';
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'33
					}

					25% {
						background-color: '.$pd_color_1.'66;
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'33
					}

					75% {
						background-color: '.$pd_color_1.'66;
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'
					}
				}

				@keyframes eprel_typing_loader {
					0% {
						background-color: '.$pd_color_1.';
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'33
					}

					25% {
						background-color: '.$pd_color_1.'66;
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'33
					}

					75% {
						background-color: '.$pd_color_1.'66;
						box-shadow: 12px 0 0 0 '.$pd_color_1.'33,24px 0 0 0 '.$pd_color_1.'
					}
				}

				@-webkit-keyframes eprel_preloader_1 {
					0% {height:5px;-webkit-transform:translateY(0px);-ms-transform:translateY(0px);-moz-transform:translateY(0px);-o-transform: translateY(0px);	transform:translateY(0px);background:'.$pd_color_1.';}
					25% {height:30px;-webkit-transform:translateY(15px);-ms-transform:translateY(15px);-moz-transform:translateY(15px);-o-transform: translateY(15px);	transform:translateY(15px);background:'.$pd_color_2.';}
					50% {height:5px;-webkit-transform:translateY(0px);-ms-transform:translateY(0px);-moz-transform:translateY(0px);-o-transform: translateY(0px);	transform:translateY(0px);background:'.$pd_color_1.';}
					100% {height:5px;-webkit-transform:translateY(0px);-ms-transform:translateY(0px);-moz-transform:translateY(0px);-o-transform: translateY(0px);	transform:translateY(0px);background:'.$pd_color_1.';}
				}
				@-moz-keyframes eprel_preloader_1 {
					0% {height:5px;-moz-transform:translateY(0px);background:'.$pd_color_1.';}
					25% {height:30px;-moz-transform:translateY(15px);background:'.$pd_color_2.';}
					50% {height:5px;-moz-transform:translateY(0px);background:'.$pd_color_1.';}
					100% {height:5px;-moz-transform:translateY(0px);background:'.$pd_color_1.';}
				}
				@keyframes eprel_preloader_1 {
					0% {height:5px;transform:translateY(0px);background:'.$pd_color_1.';}
					25% {height:30px;transform:translateY(15px);background:'.$pd_color_2.';}
					50% {height:5px;transform:translateY(0px);background:'.$pd_color_1.';}
					100% {height:5px;transform:translateY(0px);background:'.$pd_color_1.';}
				}
				.eprel_preloader_circular_square span,.eprel-preloader-12,.eprel_preloader_spinning_disc{	
					background:'.$pd_color_1.';
				}
				@-webkit-keyframes eprel_preloader_5 {
					0% {-webkit-transform: rotate(0deg);}
					50% {-webkit-transform: rotate(180deg);background:'.$pd_color_2.';}
					100% {-webkit-transform: rotate(360deg);}
				}
				@-webkit-keyframes eprel_preloader_5_after {
					0% {border-top:10px solid '.$pd_color_2.';border-bottom:10px solid '.$pd_color_2.';}
					50% {border-top:10px solid '.$pd_color_1.';border-bottom:10px solid '.$pd_color_1.';}
					100% {border-top:10px solid '.$pd_color_2.';border-bottom:10px solid '.$pd_color_2.';}
				}
				@-moz-keyframes eprel_preloader_5 {
					0% {-moz-transform: rotate(0deg);}
					50% {-moz-transform: rotate(180deg);background:'.$pd_color_2.';}
					100% {-moz-transform: rotate(360deg);}
				}
				@-moz-keyframes eprel_preloader_5_after {
					0% {border-top:10px solid '.$pd_color_2.';border-bottom:10px solid '.$pd_color_2.';}
					50% {border-top:10px solid '.$pd_color_1.';border-bottom:10px solid '.$pd_color_1.';}
					100% {border-top:10px solid '.$pd_color_2.';border-bottom:10px solid '.$pd_color_2.';}
				}
				@keyframes eprel_preloader_5 {
					0% {transform: rotate(0deg);}
					50% {transform: rotate(180deg);background:'.$pd_color_2.';}
					100% {transform: rotate(360deg);}
				}
				@keyframes eprel_preloader_5_after {
					0% {border-top:10px solid '.$pd_color_2.';border-bottom:10px solid '.$pd_color_2.';}
					50% {border-top:10px solid '.$pd_color_1.';border-bottom:10px solid '.$pd_color_1.';}
					100% {border-top:10px solid '.$pd_color_2.';border-bottom:10px solid '.$pd_color_2.';}
				}
				@-webkit-keyframes eprel_preloader_4 {
					0% {opacity: 0.3; -webkit-transform:translateY(0px);	-webkit-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1);  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
					50% {opacity: 1; -webkit-transform: translateY(-10px); background:'.$pd_color_2.';	-webkit-box-shadow:0px 20px 3px rgba(0, 0, 0, 0.05); box-shadow: 0px 20px 3px rgba(0, 0, 0, 0.05);}
					100%  {opacity: 0.3; -webkit-transform:translateY(0px);	-webkit-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1); box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
				}
				@-moz-keyframes eprel_preloader_4 {
					0% {opacity: 0.3; -moz-transform:translateY(0px);	-moz-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1); box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
					50% {opacity: 1; -moz-transform: translateY(-10px); background:'.$pd_color_2.';	-moz-box-shadow: 0px 20px 3px rgba(0, 0, 0, 0.05);box-shadow: 0px 20px 3px rgba(0, 0, 0, 0.05);}
					100%  {opacity: 0.3; -moz-transform:translateY(0px);-moz-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1);	box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
				}
				@-ms-keyframes eprel_preloader_4 {
					0% {opacity: 0.3; -ms-transform:translateY(0px);	-webkit-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1); box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
					50% {opacity: 1; -ms-transform: translateY(-10px); background:'.$pd_color_2.';	-webkit-box-shadow:0px 20px 3px rgba(0, 0, 0, 0.05); -moz-box-shadow:0px 20px 3px rgba(0, 0, 0, 0.05);box-shadow: 0px 20px 3px rgba(0, 0, 0, 0.05);}
					100%  {opacity: 0.3; -ms-transform:translateY(0px);	-webkit-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);-moz-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
				}
				@keyframes eprel_preloader_4 {
					0% {opacity: 0.3; transform:translateY(0px);-webkit-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1);-moz-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1);	box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
					50% {opacity: 1; transform: translateY(-10px); background:'.$pd_color_2.';	-webkit-box-shadow:0px 20px 3px rgba(0, 0, 0, 0.05); -moz-box-shadow:0px 20px 3px rgba(0, 0, 0, 0.05);box-shadow: 0px 20px 3px rgba(0, 0, 0, 0.05);}
					100%  {opacity: 0.3; transform:translateY(0px);	-webkit-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1);-moz-box-shadow:0px 0px 3px rgba(0, 0, 0, 0.1); box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
				}</style>';

			$preloaderSrc .='</div>';
			if(($pageLoadTransition && $pageLoadTransition=='pageloadtripleswoosh')){
				$preloaderSrc .='<div class="eprel-preload-reveal-layer-box"><div style="background:'.$settings['eprel4color1'].'" class="eprel-preload-reveal-layer"></div>
				<div style="background:'.$settings['eprel4color2'].'" class="eprel-preload-reveal-layer"></div>
				<div style="background:'.$settings['eprel4color3'].'" class="eprel-preload-reveal-layer"></div></div>';
			}else if(($pageLoadTransition && $pageLoadTransition=='pageloadsimple')){
				$preloaderSrc .='<div class="eprel-preload-reveal-layer-box"><div style="background:'.$settings['eprel4color1'].'" class="eprel-preload-reveal-layer"></div></div>';
			}else if(($pageLoadTransition && $pageLoadTransition=='pageloadduomove')){
				$preloaderSrc .='<div class="eprel-preload-reveal-layer-box"><div style="background:'.$settings['eprel4color1'].'" class="eprel-preload-reveal-layer"></div>
				<div style="background:'.$settings['eprel4color2'].'" class="eprel-preload-reveal-layer"></div></div>';
			}
			$preloaderSrc .='</div>';
			
			if((!empty($settings['alfSwitch']) && $settings['alfSwitch']=='yes') && (!empty($settings['alfExclude']) && $settings['alfExclude']=='alfcustom') && !empty($settings['alfExcludecustom']) && !empty($settings['alfExcludeZIndex']['size']) && !empty($settings['alfExcludeZIndexpos'])){
				$topbottom = '';
				if($settings['alfExcludeZIndexpos'] == 'top'){
					$topbottom = 'top:0';
				}else if($settings['alfExcludeZIndexpos'] == 'bottom'){
					$topbottom = 'bottom:0';
				}
				$preloaderSrc .='<style>body:not(.eprel-loaded):not(.eprel-out-loaded) '.$settings['alfExcludecustom'].'{z-index : '.$settings['alfExcludeZIndex']['size'].';width:100%;position:fixed;'.$topbottom.'}</style>';				
			}else if((!empty($settings['alfSwitch']) && $settings['alfSwitch']=='yes') && (!empty($settings['alfExclude']) && $settings['alfExclude']=='alfheader') && !empty($settings['alfExcludeZIndex']['size'])){
				$preloaderSrc .='<style>body:not(.eprel-loaded):not(.eprel-out-loaded) header{z-index : '.$settings['alfExcludeZIndex']['size'].' !important;width:100% !important;position:fixed !important;}</style>';
			}
			echo $preloaderSrc;
		}
	}
}