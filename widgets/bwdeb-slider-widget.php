<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_TEPSThe_Effective_Post_Slider_widgets extends Widget_Base {

	public function get_name() {
		return 'teps-swiperslider';
	}

	public function get_title() {
		return esc_html__( 'Effective Post Slider', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-post-slider bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_post_category' ];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'teps_slider_contents',
			[
				'label' => esc_html__( 'Slider Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'teps_all_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/effective-post-slider" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		

		$this->add_control(
            'slides_control_separator',
            [
                'type' => Controls_Manager::DIVIDER,
            ]
        );

		$this->add_control(
			'teps_the_blog_type',
			[
				'label' => esc_html__( 'Blog Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post',
				'options' => [
					'post' => esc_html__( 'Post', 'bwd-elementor-addons' ),
					'page' => esc_html__( 'Page', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'teps_image_link_show_switcher',
			[
				'label' => esc_html__( 'Image Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'teps_title_show_switcher',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'teps_title_link_show_switcher',
			[
				'label' => esc_html__( 'Title Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'teps_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'teps_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'div'  => esc_html__( 'Div', 'bwdib-icon-box' ),
					'h1' => esc_html__( 'H1', 'bwdib-icon-box' ),
					'h2' => esc_html__( 'H2', 'bwdib-icon-box' ),
					'h3' => esc_html__( 'H3', 'bwdib-icon-box' ),
					'h4' => esc_html__( 'H4', 'bwdib-icon-box' ),
					'h5' => esc_html__( 'H5', 'bwdib-icon-box' ),
					'h6' => esc_html__( 'H6', 'bwdib-icon-box' ),
					'p' => esc_html__( 'p', 'bwdib-icon-box' ),
				],
			]
		);
		$this->add_control(
			'teps_description_show_switcher',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'teps_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'teps_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'teps_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '...', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'teps_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'teps_taxo_icon',
			[
				'label' => esc_html__( 'All Taxo Icons', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'show',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'show' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'teps_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'teps_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'teps_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'teps_author_show_switcher',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'teps_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'gravatar' => esc_html__( 'Gravatar', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Author Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'teps_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'teps_blog_gravader_height',
			[
				'label' => esc_html__( 'Gravader Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'teps_author_show_switcher' => 'yes',
					'teps_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'teps_author_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'teps_author_show_switcher' => 'yes',
					'teps_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'teps_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blogs_button',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'teps_button_show_switcher',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'teps_button_types',
			[
				'label' => esc_html__( 'Button Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'teps_blog_button_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Continue Reading', 'bwd-elementor-addons'),
				'label_block' => true,
				'condition' => [
					'teps_button_show_switcher' => 'yes',
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'teps_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'teps_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
					'teps_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'teps_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'teps_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'teps_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'teps_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// For Author Filter
		$teps_array = get_users();
		foreach ($teps_array as $teps_author){
			$teps_id = $teps_author->ID;
			$teps_name = $teps_author->display_name;
			$teps_get_array[$teps_id] = $teps_name;
		}
		$this->add_control(
			'teps_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => $teps_get_array,
			]
		);
		$this->add_control(
			'teps_the_all_date',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'd' => esc_html__( 'Today', 'bwd-elementor-addons' ),
					'm' => esc_html__( 'Current Month', 'bwd-elementor-addons' ),
					'coustom' => esc_html__( 'Coustom', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'teps_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'teps_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'teps_blog_coustom_month',
			[
				'label' => esc_html__( 'Select Month', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'1' => esc_html__( 'Jan', 'bwd-elementor-addons' ),
					'2' => esc_html__( 'Feb', 'bwd-elementor-addons' ),
					'3' => esc_html__( 'Mar', 'bwd-elementor-addons' ),
					'4' => esc_html__( 'Apr', 'bwd-elementor-addons' ),
					'5' => esc_html__( 'May', 'bwd-elementor-addons' ),
					'6' => esc_html__( 'Jun', 'bwd-elementor-addons' ),
					'7' => esc_html__( 'Jul', 'bwd-elementor-addons' ),
					'8' => esc_html__( 'Aug', 'bwd-elementor-addons' ),
					'9' => esc_html__( 'Sep', 'bwd-elementor-addons' ),
					'10' => esc_html__( 'Oct', 'bwd-elementor-addons' ),
					'11' => esc_html__( 'Nov', 'bwd-elementor-addons' ),
					'12' => esc_html__( 'Dec', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'teps_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'teps_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'teps_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'teps_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'author' => esc_html__( 'Author', 'bwd-elementor-addons' ),
					'title' => esc_html__( 'Title', 'bwd-elementor-addons' ),
					'id' => esc_html__( 'ID', 'bwd-elementor-addons' ),
					'date' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'teps_blog_order',
			[
				'label' => esc_html__( 'Order', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', 'bwd-elementor-addons' ),
					'ASC' => esc_html__( 'Ascending', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'teps_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 4,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'teps_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'teps_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_main_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'bwd-elementor-addons' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'teps_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$teps_idObj = get_category_by_slug('category-slug');
		$teps_order_options = array($teps_idObj => 'All Categories');
		$teps_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($teps_categories as $category):
			$teps_catids = $category->slug;
			$teps_catname = $category->name;
			$teps_order_options[$teps_catids] = $teps_catname;
		endforeach;
		$this->add_control(
			'teps_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $teps_order_options,
			]
		);
		$this->add_control(
			'teps_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// For tag Filter
		$teps_idObj = get_tag('tags-slug');
		$teps_order_optionst = array($teps_idObj => 'All Tags');
		$teps_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($teps_ta as $tag):
			$teps_tagids = $tag->slug;
			$teps_tagname = $tag->name;
			$teps_order_optionst[$teps_tagids] = $teps_tagname;
		endforeach;
		$this->add_control(
			'teps_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => $teps_idObj,
				'options' => $teps_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_slider_controls',
			[
				'label' => esc_html__( 'Slider Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//content amination
		$this->add_control(
			'teps_content_animations',
			[
				'label'     => esc_html__('Animation Type', 'bwd-elementor-addons'),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'none' => esc_html__('None', 'bwd-elementor-addons'),
					'animate__bounce' => esc_html__('Bounce', 'bwd-elementor-addons'),
					'animate__bounceIn' => esc_html__('BounceIn', 'bwd-elementor-addons'),
					'animate__bounceOut' => esc_html__('BounceOut', 'bwd-elementor-addons'),
					'animate__bounceInUp' => esc_html__('bounceInUp', 'bwd-elementor-addons'),
					'animate__bounceInDown' => esc_html__('bounceInDown', 'bwd-elementor-addons'),
					'animate__bounceInLeft' => esc_html__('bounceInLeft', 'bwd-elementor-addons'),
					'animate__bounceInRight' => esc_html__('bounceInRight', 'bwd-elementor-addons'),
					'animate__backInUp' => esc_html__('backInUp', 'bwd-elementor-addons'),
					'animate__backInDown' => esc_html__('backInDown', 'bwd-elementor-addons'),
					'animate__backInLeft' => esc_html__('backInLeft', 'bwd-elementor-addons'),
					'animate__backInRight' => esc_html__('backInRight', 'bwd-elementor-addons'),
					'animate__flip' => esc_html__('Flip', 'bwd-elementor-addons'),
					'animate__flipInX' => esc_html__('FlipInX', 'bwd-elementor-addons'),
					'animate__flipInY' => esc_html__('FlipInY', 'bwd-elementor-addons'),
					'animate__fadeIn' => esc_html__('fadeIn', 'bwd-elementor-addons'),
					'animate__fadeOut' => esc_html__('FadeOut', 'bwd-elementor-addons'),
					'animate__fadeInUp' => esc_html__('fadeInUp', 'bwd-elementor-addons'),
					'animate__fadeInDown' => esc_html__('fadeInDown', 'bwd-elementor-addons'),
					'animate__fadeInUpBig' => esc_html__('fadeInUpBig', 'bwd-elementor-addons'),
					'animate__fadeInLeft' => esc_html__('fadeInLeft', 'bwd-elementor-addons'),
					'animate__fadeInRight' => esc_html__('fadeInRight', 'bwd-elementor-addons'),
					'animate__fadeInRightBig' => esc_html__('fadeInRightBig', 'bwd-elementor-addons'),
					'animate__fadeInBottomRight' => esc_html__('fadeInBottomRight', 'bwd-elementor-addons'),
					'animate__fadeInBottomLeft' => esc_html__('fadeInBottomLeft', 'bwd-elementor-addons'),
					'animate__fadeInTopRight' => esc_html__('fadeInTopRight', 'bwd-elementor-addons'),
					'animate__fadeInTopLeft' => esc_html__('fadeInTopLeft', 'bwd-elementor-addons'),
					'animate__rotateIn' => esc_html__('RotateIn', 'bwd-elementor-addons'),
					'animate__rotateOut' => esc_html__('RotateOut', 'bwd-elementor-addons'),
					'animate__rotateInUpRight' => esc_html__('rotateInUpRight', 'bwd-elementor-addons'),
					'animate__rotateInUpLeft' => esc_html__('rotateInUpLeft', 'bwd-elementor-addons'),
					'animate__rotateInDownRight' => esc_html__('rotateInDownRight', 'bwd-elementor-addons'),
					'animate__rotateInDownLeft' => esc_html__('rotateInDownLeft', 'bwd-elementor-addons'),
					'animate__hinge' => esc_html__('Hinge', 'bwd-elementor-addons'),
					'animate__zoomIn' => esc_html__('ZoomIn', 'bwd-elementor-addons'),
					'animate__zoomOut' => esc_html__('ZoomOut', 'bwd-elementor-addons'),
					'animate__zoomInUp' => esc_html__('zoomInUp', 'bwd-elementor-addons'),
					'animate__zoomInRight' => esc_html__('zoomInRight', 'bwd-elementor-addons'),
					'animate__zoomInLeft' => esc_html__('zoomInLeft', 'bwd-elementor-addons'),
					'animate__zoomInDown' => esc_html__('zoomInDown', 'bwd-elementor-addons'),
					'animate__slideInUp' => esc_html__('SlideInUp', 'bwd-elementor-addons'),
					'animate__slideInRight' => esc_html__('slideInRight', 'bwd-elementor-addons'),
					'animate__slideInLeft' => esc_html__('slideInLeft', 'bwd-elementor-addons'),
					'animate__slideInDown' => esc_html__('slideInDown', 'bwd-elementor-addons'),
					'animate__flash' => esc_html__('Flash', 'bwd-elementor-addons'),
					'animate__rollIn' => esc_html__('rollIn', 'bwd-elementor-addons'),
					'animate__pulse' => esc_html__('Pulse', 'bwd-elementor-addons'),
					'animate__rubberBand' => esc_html__('RubberBand', 'bwd-elementor-addons'),
					'animate__shakeX' => esc_html__('ShakeX', 'bwd-elementor-addons'),
					'animate__shakeY' => esc_html__('ShakeY', 'bwd-elementor-addons'),
					'animate__headShake' => esc_html__('HeadShake', 'bwd-elementor-addons'),
					'animate__swing' => esc_html__('Swing', 'bwd-elementor-addons'),
					'animate__tada' => esc_html__('Tada', 'bwd-elementor-addons'),
					'animate__wobble' => esc_html__('Wobble', 'bwd-elementor-addons'),
					'animate__jello' => esc_html__('Jello', 'bwd-elementor-addons'),
					'animate__heartBeat' => esc_html__('HeartBeat', 'bwd-elementor-addons'),
					'animate__jackInTheBox' => esc_html__('JackInTheBox', 'bwd-elementor-addons'),
					'animate__lightSpeedInLeft' => esc_html__('lightSpeedInLeft', 'bwd-elementor-addons'),
					'animate__lightSpeedInRight' => esc_html__('lightSpeedInRight', 'bwd-elementor-addons'),
				],
				'default' => 'animate__fadeInUp',
			]
		);

		//content_animation_speed
		$this->add_control(
			'teps_content_animation_speed',
			[
				'label' => __('Animation Speed (ms)', 'bwd-elementor-addons'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['ms'],
				'range' => [
					'ms' => [
						'min' => 100,
						'max' => 5000,
						'step' => 50,
					],
				],
				'default' => [
					'unit' => 'ms',
					'size' => 1250,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .teps-slide-content' => 'animation-duration: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Slide Effect
		$this->add_control(
			'teps_slider_effects',
			[
				'label' => esc_html__( 'Slide Effect', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'false',
				'options' => [
					'false'  => esc_html__( 'Slide', 'bwd-elementor-addons' ),
					'fade'  => esc_html__( 'Fade', 'bwd-elementor-addons' ),
					'coverflow'  => esc_html__( 'Cover Flow', 'bwd-elementor-addons' ),
					'cube'  => esc_html__( 'Cube', 'bwd-elementor-addons' ),
					'flip'  => esc_html__( 'Flip', 'bwd-elementor-addons' ),
					'cards'  => esc_html__( 'Cards', 'bwd-elementor-addons' ),
					'creative'  => esc_html__( 'Creative', 'bwd-elementor-addons' ),
				],
				'frontend_available' => true,
			]
		);

		//popover-Coverflow-coverflow
		$this->add_control(
			'teps_popover_slider_coverflow',
			[
				'label' => esc_html__( 'Coverflow Control', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'teps_slider_effects' => 'coverflow',
				],
			]
		);

		$this->start_popover();

			//Coverflow Rotate
			$this->add_control(
				'teps_coverflow_rotate',
				[
					'label' => esc_html__( 'Coverflow Rotate', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Depth
			$this->add_control(
				'teps_coverflow_depth',
				[
					'label' => esc_html__( 'Coverflow Depth', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 100,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow Modifier
			$this->add_control(
				'teps_coverflow_modifier',
				[
					'label' => esc_html__( 'Coverflow Modifier', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 1,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Coverflow shadow switcher
			$this->add_control(
				'teps_coverflow_shadow_switcher',
				[
					'label' => esc_html__( 'Coverflow Shadow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);

			//Coverflow shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_coverflow_shadow_left',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-slide-shadow-left, {{WRAPPER}} .teps-swiper-slide-shadow-right',
					'condition' => [
						'teps_coverflow_shadow_switcher' => true,
					],
					'frontend_available' => true,
				]
			);

		$this->end_popover();



		//popover-Coverflow-cube
		$this->add_control(
			'teps_popover_slider_cube',
			[
				'label' => esc_html__( 'Cube Control', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'condition' => [
					'teps_slider_effects' => 'cube',
				],
			]
		);
		$this->start_popover();

			//Cube shadow switcher
			$this->add_control(
				'teps_cube_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Shadow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_Cube_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-cube-shadow:before',
					'condition' => [
						'teps_cube_shadow_switcher' => true,
					],
				]
			);

			//Cube slide shadow switcher
			$this->add_control(
				'teps_cube_slide_shadow_switcher',
				[
					'label' => esc_html__( 'Cube Slide Shadow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
					'return_value' => true,
					'default' => true,
					'frontend_available' => true,
				]
			);
			//Cube shadow
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_Cube_slide_shadow',
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-slide-shadow-left, {{WRAPPER}} .teps-swiper-slide-shadow-right',
					'condition' => [
						'teps_cube_slide_shadow_switcher' => true,
					],
				]
			);

			//Cube shadow offset
			$this->add_control(
				'teps_cube_shadow_offset',
				[
					'label' => esc_html__( 'Cube Shadow Offset', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 10000,
					'step' => 1,
					'default' => 50,
					'dynamic' => [
						'active' => true,
					],
					'frontend_available' => true,
				]
			);

			//Cube Shadow Blur
			$this->add_control(
				'teps_Cube_shadow_blur',
				[
					'label'       => esc_html__('Cube Shadow Blur', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => 1,
					'default'     => 50,
					'selectors'   => [
						'{{WRAPPER}} .teps-swiper-cube-shadow:before' => 'filter: blur({{SIZE}}px)',
					],
				]
			);

		$this->end_popover();

		//slide speed
		$this->add_control(
			'teps_slide_speed',
			[
				'label' => esc_html__( 'Slide Speed (ms)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
				'default' => 1500,
				'dynamic' => [
					'active' => true,
				],
				'frontend_available' => true,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'teps_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Slider', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'frontend_available' => true,
			]
		);
		$this->start_popover();

			//desktop
			$this->add_control(
				'teps_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwd-elementor-addons' ),
					'description' => esc_html__('Notice: ( minimum - 1025px )', 'bwd-elementor-addons'),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'teps_desk_Space',
				[
					'label' => esc_html__( 'SpaceBetween', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 500,
					'step' => 1,
					'default' => 0,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//tablet
			$this->add_control(
				'teps_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwd-elementor-addons' ),
					'description' => esc_html__('Notice: ( 768px - 1024px )', 'bwd-elementor-addons'),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'teps_tablet_space',
				[
					'label' => esc_html__( 'SpaceBetween', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'separator' => 'after',
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

			//mobile
			$this->add_control(
				'teps_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwd-elementor-addons' ),
					'description' => esc_html__('Notice: ( maximum - 767px )', 'bwd-elementor-addons'),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);
			$this->add_control(
				'teps_mobile_space',
				[
					'label' => esc_html__( 'SpaceBetween', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 100,
					'step' => 1,
					'default' => 0,
					'frontend_available' => true,
					'dynamic' => [
						'active' => true,
					],
				]
			);

		$this->end_popover();

        //Slider Direction
		$this->add_control(
            'teps_slider_direction',
            [
                'label' => __('Slider Direction', 'bwd-elementor-addons'),
                'type' => Controls_Manager::SELECT,
                'default' => 'horizontal',
                'options' => [
                    'horizontal'  => __('Horizontal', 'bwd-elementor-addons'),
                    'vertical' => __('Vertical', 'bwd-elementor-addons'),
                ],
                'frontend_available' => true,
            ]
        );

        //Infinite Loop
        $this->add_control(
            'teps_loop_switcher',
            [
                'label' => esc_html__( 'Infinite Loop?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //autoplay
        $this->add_control(
            'teps_autoslide_switcher',
            [
                'label' => esc_html__( 'Autoplay?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //autoplay speed
		$this->add_control(
			'teps_slider_autoplay_speed',
			[
				'label' => esc_html__( 'Autoplay Speed (ms)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100000,
				'step' => 1,
                'default' => 5000,
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'teps_autoslide_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);

		//mousewheel
        $this->add_control(
            'teps_mousewheel',
            [
                'label' => esc_html__( 'Mousewheel?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
                'return_value' => true,
                'default' => true,
				'frontend_available' => true,
            ]
        );

        //scrollbar
		$this->add_control(
            'teps_scroll_bar',
            [
                'label' => __('Scroll Bar?', 'bwd-elementor-addons'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'bwd-elementor-addons'),
                'label_off' => __('No', 'bwd-elementor-addons'),
                'return_value' => 'yes',
                'default' => 'no',
                'frontend_available' => true,
            ]
        );

		//scrollbar show-hide
        $this->add_control(
            'teps_scroll_visibility',
            [
                'label' => __('Scroll Bar', 'bwd-elementor-addons'),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false'  => __('Always show', 'bwd-elementor-addons'),
                    'true' => __('Automatic hide', 'bwd-elementor-addons'),
                ],
                'condition' => [
                    'teps_scroll_bar' => 'yes',
                ],
                'frontend_available' => true,
            ]
        );

        //Pagination
        $this->add_control(
            'teps_slide_pagination',
            [
                'label' => esc_html__( 'Pagination?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //teps_pagination_type
        $this->add_control(
            'teps_pagination_type',
            [
                'label' => esc_html__( 'Pagination Type', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'bullets',
                'options' => [
                    'bullets'  => esc_html__( 'Dots', 'bwd-elementor-addons' ),
					'numbers'  => esc_html__( 'Numbers', 'bwd-elementor-addons' ),
                    'progressbar'  => esc_html__( 'Progressbar', 'bwd-elementor-addons' ),
                    'fraction'  => esc_html__( 'Fraction', 'bwd-elementor-addons' ),
                ],
                'condition' => [
                    'teps_slide_pagination' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //Arrow Navigation
        $this->add_control(
            'teps_arrow_switcher',
            [
                'label' => esc_html__( 'Arrow Navigation?', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
                'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
				'frontend_available' => true,
            ]
        );

        //arrow type
        $this->add_control(
            'teps_nav_type',
            [
                'label' => esc_html__( 'Navigation Type', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'icon'  => esc_html__( 'Icon', 'bwd-elementor-addons' ),
                    'text'  => esc_html__( 'Text', 'bwd-elementor-addons' ),
                ],
                'condition' => [
                    'teps_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
            ]
        );

        //popover Navigation icon
        $this->add_control(
			'teps_popover_navigation_icon',
			[
				'label' => esc_html__( 'Navigation Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
                'condition' => [
                    'teps_nav_type' => 'icon',
                    'teps_arrow_switcher' => 'yes',
                ],
				'frontend_available' => true,
			]
		);
        $this->start_popover();

            //prev icon
			$this->add_control(
				'teps_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
				]
			);
			//next icon
			$this->add_control(
				'teps_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
				]
			);

        $this->end_popover();


        //popover Navigation text
        $this->add_control(
			'teps_popover_navigation_text',
			[
				'label' => esc_html__( 'Navigation Text', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
                'condition' => [
                    'teps_nav_type' => 'text',
                    'teps_arrow_switcher' => 'yes',
                ],
			]
		);
        $this->start_popover();

            //prev text
			$this->add_control(
				'teps_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
				]
			);

            //next text
			$this->add_control(
				'teps_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
				]
			);
		$this->end_popover();
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_box_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		//slider-height
		$this->add_responsive_control(
			'teps_slider_main_height',
			[
				'label' => esc_html__( 'Slider Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-feature-image' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style9','style10','style20'],
					'teps_slider_direction!' => 'vertical',
				],
			]
		);

		//slider-height-for-vertical
		$this->add_responsive_control(
			'teps_slider_main_height_vertical',
			[
				'label' => esc_html__( 'Slider Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-feature-image, {{WRAPPER}} .teps-postslider-wrap' => 'height: 100%!important;',
					'{{WRAPPER}} .teps-swiper-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style9','style10','style20'],
					'teps_slider_direction' => 'vertical',
				],
			]
		);

		//content-box-width
		$this->add_responsive_control(
			'teps_blog_content_box_width',
			[
				'label' => esc_html__( 'Content Box Width (%)', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-content-info' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style8','style9','style10','style14','style20'],
				],
			]
		);
		//texonomy-gap
		$this->add_responsive_control(
			'teps_blog_texonomy_gap',
			[
				'label' => esc_html__( 'Texonomy Gap ', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'px' => [
						'min' => 0,
						'max' => 100000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-meta.d-flex' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//horizontan-alignment
		$this->add_responsive_control(
			'teps_blog_box_horizontal_alignment',
			[
				'label' => esc_html__( 'Horizontal Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => ' eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-box-alignment' => 'justify-content: {{VALUE}}!important',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style8','style9','style10','style14','style20'],
				],
				'toggle' => true,
			]
		);
		//vertical-alignment
		$this->add_responsive_control(
			'teps_blog_box_vertical_alignment',
			[
				'label' => esc_html__( 'Vertical Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Top', 'bwd-elementor-addons' ),
						'icon' => 'eicon-v-align-top',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-v-align-middle',
					],
					'end' => [
						'title' => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
						'icon' => ' eicon-v-align-bottom',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-box-alignment' => 'align-items: {{VALUE}}!important',
				],
				'condition' => [
					'teps_all_style!' => ['style1','style6','style8','style9','style10','style11','style20'],
				],
				'toggle' => true,
			]
		);
		//alignment
		$this->add_responsive_control(
			'teps_blog_box_content_alignment',
			[
				'label' => esc_html__( 'Text Alignment', 'bwd-elementor-addons' ),
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
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-content-info' => 'text-align: {{VALUE}}',
					'{{WRAPPER}} .teps-extra-align, {{WRAPPER}} .teps-postslider-meta' => 'justify-content: {{VALUE}}!important',
				],
				'toggle' => true,
			]
		);
		//box-padding
		$this->add_responsive_control(
            'teps_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		//box-margin
		$this->add_responsive_control(
            'teps_blog_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->start_controls_tabs(
			'teps_blog_box_style_tabs'
		);
		
		$this->start_controls_tab(
			'teps_blog_box_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_blog_box_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-postslider-content-info, {{WRAPPER}} .teps-postslider-content-info::after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_box_border',
				'selector' => '{{WRAPPER}} .teps-postslider-content-info',
			]
		);

		$this->add_responsive_control(
            'teps_blog_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info, {{WRAPPER}} .teps-postslider-content-info::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-content-info',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_box_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_blog_box_background_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-postslider-content-info:hover, {{WRAPPER}} .teps-postslider-content-info:hover::after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_box_border_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-content-info:hover',
			]
		);

		$this->add_responsive_control(
            'teps_blog_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-content-info:hover, {{WRAPPER}} .teps-postslider-content-info:hover::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-content-info:hover',
			]
		);

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'teps_blog_title_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'teps_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_title_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-title-link',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_title_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-title-link',
			]
		);
		$this->add_responsive_control(
            'teps_blog_title_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_responsive_control(
            'teps_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		// Hover Controls
		
		$this->add_control(
			'teps_blog_title_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_title_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-title-link:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_title_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-title-link:hover',
			]
		);
		$this->add_responsive_control(
            'teps_blog_title_bg_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-title-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_description_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'teps_blog_description_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'teps_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_description_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-desce',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_description_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-desce',
			]
		);
		$this->add_responsive_control(
            'teps_blog_description_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_responsive_control(
            'teps_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		
		$this->add_control(
			'teps_blog_description_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_description_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-desce:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_description_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-desce:hover',
			]
		);
		$this->add_responsive_control(
            'teps_blog_description_bg_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-desce:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);



		$this->start_controls_tabs(
			'teps_blog_image_style_tabs'
		);
		
		$this->start_controls_tab(
			'teps_blog_image_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_responsive_control(
			'teps_the_post_image_size',
			[
				'label' => esc_html__( 'Thumbnail Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-feature-image' => 'width: {{SIZE}}{{UNIT}}',
				],
				'condition' =>[
					'teps_all_style' =>['style1'],
				],
			]
		);
		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'teps_image_overlay',
			[
				'label' => esc_html__( 'Image Overlay', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_image_overlay_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-feature-image-link',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_image_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-feature-image',
			]
		);
		$this->add_responsive_control(
            'teps_image_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-feature-image img, {{WRAPPER}} .teps-feature-image-link, {{WRAPPER}} .teps-postslider-feature-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_image_border_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-swiper-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_image_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-feature-image',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_image_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'teps_image_overlay_hover',
			[
				'label' => esc_html__( 'Image Overlay', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_image_overlay_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-feature-image-link',
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();


		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_author_options',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_author_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'teps_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls

		$this->add_control(
			'teps_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_author_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_author_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_author_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-author.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		
		$this->add_control(
			'teps_blog_taxonomy_author_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_author_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_author_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_author_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_author_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-author.teps-postslider-commn-meta',
			]
		);

		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_date_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'teps_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_date_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_date_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-date.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_date_hover_post',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_date_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_date_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_date_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_date_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_date_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-date.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_comments_show_switcher' => 'yes',
				],
			]
		);
		
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'teps_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_comment_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_comment_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_comment_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_comment_hover_post',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_comment_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_comment_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_comment_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_comment_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_comment_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-comment.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_categories_show_switcher' => 'yes',
				],
			]
		);
		
		// Hover control start for taxonomy category
		$this->start_controls_tabs(
			'teps_blog_taxonomy_category_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_category_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_category_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta, {{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta .teps-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_category_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_category_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta .teps-cat',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_category_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_category_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_category_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_category_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-category.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_category_hover_post',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_category_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta, {{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta .teps-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_category_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_category_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
            'teps_blog_taxonomy_category_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_category_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-category.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'teps_tags_show_switcher' => 'yes',
				],
			]
		);
		
		// Hover control start for taxonomy tag
		$this->start_controls_tabs(
			'teps_blog_taxonomy_tag_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_taxonomy_tag_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		
		$this->add_control(
			'teps_blog_taxonomy_tag_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_tag_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_taxonomy_tag_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_tag_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
			'teps_blog_taxonomy_tag_border_radius',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'teps_blog_tag_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_tag_boxshadow',
				'selector' => '{{WRAPPER}} .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_taxonomy_tag_hover_post',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'teps_blog_taxonomy_tag_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_taxonomy_tag_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_taxonomy_tag_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);
		$this->add_responsive_control(
			'teps_blog_taxonomy_tag_border_radius_hover',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_tag_boxshadow_hover',
				'selector' => '{{WRAPPER}} .teps-postslider-wrap:hover .teps-postslider-tag.teps-postslider-commn-meta',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		// Hover Control End

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'teps_blog_button_style_post'
		);
		$this->start_controls_tab(
			'teps_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'teps_blog_button_icon_gap',
			[
				'label' => __('Icon Gap', 'bwd-elementor-addons'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 5000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 5,
				],
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link' => 'gap: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_button_types' => 'text_icon',
					'teps_button_icon_align!' => 'none',
				],
			]
		);
		$this->add_control(
			'teps_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_blog_button_typography',
				'selector' => '{{WRAPPER}} .teps-postslider-button-link',
			]
		);
		//alignment
		$this->add_responsive_control(
			'teps_blog_button_text_alignment',
			[
				'label' => esc_html__( 'Text Alignment', 'bwd-elementor-addons' ),
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
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link' => 'justify-content: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link',
			]
		);
		$this->add_responsive_control(
            'teps_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'teps_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'teps_blog_button_icon_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_button_icon_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link',
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'teps_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		
		$this->add_control(
			'teps_blog_button_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'teps_blog_button_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-postslider-button-link:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link:hover',
			]
		);
		$this->add_responsive_control(
            'teps_blog_button_bg_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .teps-postslider-button-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_blog_button_icon_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-postslider-button-link:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'teps_slider_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_arrow_switcher' => 'yes',
                ],
			]
		);

        //norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

            //arrow-color
            $this->add_control(
                'teps_arrow_color',
                [
                    'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'color: {{VALUE}}',
                    ],
                ]
            );

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_arrow_background_color',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
				]
			);

			//size
			$this->add_responsive_control(
				'teps_arrow_size',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'teps_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'teps_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
                    'condition' => [
						'teps_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'teps_arrow_width',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'teps_arrow_height',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'teps_arrow_border',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'teps_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'teps_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev',
				]
			);

			//opacity
			$this->add_control(
				'teps_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'teps_slider_visibility',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'teps_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'teps_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'teps_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'teps_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'teps_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

			//arrow-color
			$this->add_control(
				'teps_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'teps_arrow_background_color_hover',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'teps_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
						'teps_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'teps_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
                    'condition' => [
						'teps_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'teps_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'teps_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 10000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 10000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'teps_arrow_border_hover',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'teps_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'teps_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .teps-swiper-button-next .teps-swiper-next:hover, {{WRAPPER}} .teps-swiper-button-prev .teps-swiper-prev:hover',
				]
			);

			//opacity
			$this->add_control(
				'teps_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'teps_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next, {{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'teps_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'teps_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'teps_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-prev .teps-swiper-prev' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'teps_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'teps_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'teps_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100000,
								'max' => 100000,
								'step' => 1,
							],
							'%' => [
								'min' => -100000,
								'max' => 100000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .teps-slider-common:hover .teps-swiper-button-next .teps-swiper-next' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

        $this->end_controls_section();



		//Pagination :: Dots
        $this->start_controls_section(
			'teps_slider_dots_style',
			[
				'label' => esc_html__( 'Pagination :: Dots', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_pagination_type' => ['bullets', 'numbers'],
					'teps_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//dots Pagination
		$this->add_control(
			'teps_dots_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

            //horizontal
			//bottom
			$this->add_responsive_control(
				'teps_dots_bottom_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'bottom: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'horizontal',
                    ],
				]
			);

			//left
			$this->add_responsive_control(
				'teps_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'left: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'horizontal',
                    ],
				]
			);

            //vertical
            //top
			$this->add_responsive_control(
				'teps_dots_top_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'top: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'vertical',
                    ],
				]
			);

			//right
			$this->add_responsive_control(
				'teps_dots_right_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination' => 'right: {{SIZE}}{{UNIT}};',
					],
                    'condition' => [
                        'teps_slider_direction' => 'vertical',
                    ],
				]
			);

		$this->end_popover();

		//dots-gap horizontal
		$this->add_responsive_control(
			'teps_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination .teps-swiper-pagination-bullet:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'teps_slider_direction' => 'horizontal',
                ],
			]
		);

		//dots-gap vertical
		$this->add_responsive_control(
			'teps_dots_gap_vartical',
			[
				'label' => esc_html__( 'Dots Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination .teps-swiper-pagination-bullet:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'teps_slider_direction' => 'vertical',
                ],
			]
		);

		//alignment
		$this->add_responsive_control(
			'teps_dots_alignment',
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
					'{{WRAPPER}} .teps-swiper-pagination' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
                'condition' => [
                    'teps_slider_direction' => 'horizontal',
                ],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'teps_dots_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet .teps-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_dots_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_dots_number_typography',
				'selector' => '{{WRAPPER}} .teps-swiper-pagination .teps-swiper-pagination-bullet',
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'teps_dots_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'teps_dots_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_dots_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'teps_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet-active .teps-paginumb' => 'color: {{VALUE}}',
				],
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_dots_background_color_active',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active',
			]
		);

		//width
		$this->add_responsive_control(
			'teps_dots_width_active',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'teps_dots_height_active',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_dots_border_active',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet.teps-swiper-pagination-bullet-active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'teps_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet .teps-paginumb:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'teps_pagination_type' => 'bullets',
					'teps_pagination_dots_number_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_dots_background_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet:hover',
			]
		);

		//width
		$this->add_responsive_control(
			'teps_dots_width_hover',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'teps_dots_height_hover',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_dots_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-bullet:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-bullet:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'teps_slider_progressbar_style',
			[
				'label' => esc_html__( 'Pagination :: Progressbar', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_pagination_type' => 'progressbar',
					'teps_slide_pagination' => 'yes',
                ],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_progressbar',
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_progressbar',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//Height
		$this->add_responsive_control(
			'teps_progressbar_height',
			[
				'label' => esc_html__( 'height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-progressbar' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_slider_direction' => 'horizontal',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'teps_progressbar_width',
			[
				'label' => esc_html__( 'width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-progressbar' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'teps_slider_direction' => 'vertical',
				],
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_progressbar_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-progressbar',
			]
		);

		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_progressbar',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		//progressbar-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_progressbar_background_color_active',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-progressbar .teps-swiper-pagination-progressbar-fill',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();



		$this->start_controls_section(
			'teps_slider_fraction_style',
			[
				'label' => esc_html__( 'Pagination :: Fraction', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_pagination_type' => 'fraction',
					'teps_slide_pagination' => 'yes',
                ],
			]
		);

		//popover-//fraction Pagination
		$this->add_control(
			'teps_fraction_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//bottom
			$this->add_responsive_control(
				'teps_fraction_bottom_position',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'teps_fraction_left_position',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -2000,
							'max' => 2000,
							'step' => 1,
						],
						'%' => [
							'min' => -2000,
							'max' => 2000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//Fraction-width
		$this->add_responsive_control(
			'teps_fraction_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-height
		$this->add_responsive_control(
			'teps_fraction_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//Fraction-gap horizontal
		$this->add_responsive_control(
			'teps_fraction_gap',
			[
				'label' => esc_html__( 'Fraction Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 10000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'teps_fraction_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
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
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction' => 'justify-content: {{VALUE}}',
				],
			]
		);

		//fraction-color
		$this->add_control(
			'teps_fraction_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'color: {{VALUE}}',
				],
			]
		);

		//fraction-active-color
		$this->add_control(
			'teps_fraction_number_active_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span.teps-swiper-pagination-current' => 'color: {{VALUE}}',
				],
			]
		);

		//typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'teps_fraction_typography',
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_fraction_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'teps_faction_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'teps_faction_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .teps-swiper-pagination-fraction span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'teps_faction_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .teps-swiper-pagination-fraction span',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'teps_scrollbar_style',
			[
				'label' => esc_html__( 'Scroll Bar', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'teps_scroll_bar' => 'yes',
                ],
			]
		);

		//fraction-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'teps_scrollbar_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .teps-swiper-scrollbar-drag',
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$teps_all_num = $settings['teps_all_style'];
		$teps_title_tags = $settings['teps_title_tags'];
		$teps_post_per_page = $settings['teps_the_post_per_page'];
		$teps_post_description_words = $settings['teps_the_post_description_words'];
		$teps_blog_word_trim_indi = $settings['teps_blog_word_trim_indi'];
		$teps_blog_date_format = $settings['teps_blog_date_format'];

		$teps_author_indicator = $settings['teps_author_indicator'];
		$teps_taxo_icon = $settings['teps_taxo_icon'];

		$teps_image_link_show = $settings['teps_image_link_show_switcher'];
		$teps_title_swtcher = $settings['teps_title_show_switcher'];
		$teps_title_link_show = $settings['teps_title_link_show_switcher'];
		$teps_description_swtcher = $settings['teps_description_show_switcher'];
		$teps_date_swtcher = $settings['teps_date_show_switcher'];
		$teps_author_swtcher = $settings['teps_author_show_switcher'];
		$teps_comments_swtcher = $settings['teps_comments_show_switcher'];
		$teps_categories_swtcher = $settings['teps_categories_show_switcher'];
		$teps_tags_swtcher = $settings['teps_tags_show_switcher'];
		$teps_tags_filter = $settings['teps_the_tag_filter'];
		$teps_cat_show_status = $settings['teps_the_cat_show_status'];

		$teps_categorys_dataa = $settings['teps_the_cat_columnsdd'];
		$teps_the_blog_type = $settings['teps_the_blog_type'];
		$teps_blog_order = $settings['teps_blog_order'];
		$teps_author = $settings['teps_the_all_author'];
		$teps_order_by = $settings['teps_the_order_by'];

		// btn
		$teps_button_types = $settings['teps_button_types'];
		$teps_button_icon_align = $settings['teps_button_icon_align'];
		$teps_the_all_date = $settings['teps_the_all_date'];
		if('d' === $teps_the_all_date){
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $teps_the_all_date){
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $teps_the_all_date){
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $teps_the_all_date){
			$teps_coustom_year = $settings['teps_blog_coustom_year'];
			$teps_coustom_month = $settings['teps_blog_coustom_month'];
			$teps_coustom_day = $settings['teps_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$teps_coustom_day = $teps_coustom_month = $teps_coustom_year = $wdbp_time = '';
		}
		$teps_args = array(
			'post_type'=> $teps_the_blog_type,
			'author__in' => $teps_author,
			'orderby'   => $teps_order_by,
			'order' => $teps_blog_order,
			'post_status' => 'publish',
			'posts_per_page' => $teps_post_per_page,
			'category_name' => $teps_categorys_dataa,
			'date_query' => $wdbp_time,
			'year' => $teps_coustom_year,
			'monthnum' => $teps_coustom_month,
			'day' => $teps_coustom_day,
		);
		$teps_yes_value = 'yes';
		$animation_class = (isset($settings['teps_content_animations']) && ($settings['teps_content_animations'] != 'none')) ? $settings['teps_content_animations'] : '';
		if($teps_all_num == 'style1' || $teps_all_num == 'style2'){
			include( __DIR__ . '/bwdeb-templates2/'.$teps_all_num.'.php' );
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}
