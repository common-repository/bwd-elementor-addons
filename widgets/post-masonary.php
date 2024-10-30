<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_MBPOST_Post_Masonry extends Widget_Base {

	public function get_name() {
		return esc_html__( 'MasonryBlogPosts', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Masonry Posts', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle masonary-post';
	}

	public function get_categories() {
		return [ 'bwdeb_post_category' ];
	}

	

	protected function register_controls() {
		$this->start_controls_section(
			'mbpost_blog_content_layout_section',
			[
				'label' => esc_html__( 'Post Layout', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'mbpost_style_selection',
			[
				'label' => esc_html__( 'Post Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'one',
				'options' => [
					'one' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'two' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'three' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'four' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'five' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'six' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'seven' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'eight' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'nine' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'ten' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'eleven' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'twelve' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'thirteen' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
					'fourteen' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
					'fifteen' => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons' ),
					'sixteen' => esc_html__( 'Style 16 (PRO)', 'bwd-elementor-addons' ),
					'seventeen' => esc_html__( 'Style 17 (PRO)', 'bwd-elementor-addons' ),
					'eighteen' => esc_html__( 'Style 18 (PRO)', 'bwd-elementor-addons' ),
					'nineteen' => esc_html__( 'Style 19 (PRO)', 'bwd-elementor-addons' ),
					'twenty' => esc_html__( 'Style 20 (PRO)', 'bwd-elementor-addons' ),
					'twentyOne' => esc_html__( 'Style 21 (PRO)', 'bwd-elementor-addons' ),
					'twentytwo' => esc_html__( 'Style 22 (PRO)', 'bwd-elementor-addons' ),
					'twentythree' => esc_html__( 'Style 23 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/masonry-blog-post" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'mbpost_the_blog_type',
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
			'mbpost_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'mbpost_image_link_show_switcher',
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
			'mbpost_title_show_switcher',
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
			'mbpost_title_link_show_switcher',
			[
				'label' => esc_html__( 'Title Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'mbpost_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'mbpost_post_action_switcher',
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
			'mbpost_title_tags',
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
			'mbpost_description_show_switcher',
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
			'mbpost_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'mbpost_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'mbpost_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'mbpost_taxo_icon',
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
			'mbpost_date_show_switcher',
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
			'mbpost_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'mbpost_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'mbpost_author_show_switcher',
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
			'mbpost_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'gravatar' => esc_html__( 'Gravatar', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Author Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'mbpost_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'mbpost_blog_gravader_height',
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
					'{{WRAPPER}} .mbpost_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'mbpost_author_show_switcher' => 'yes',
					'mbpost_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'mbpost_author_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'mbpost_author_show_switcher' => 'yes',
					'mbpost_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'mbpost_comments_show_switcher',
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
			'mbpost_products_actions_section',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'mbpost_post_action_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'mbpost_cart_button',
			[
				'label' => esc_html__('Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Learn More', 'bwd-elementor-addons'),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'mbpost_btn_icon_switcher',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'mbpost_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-long-arrow-alt-right',
					'library' => 'solid',
				],
				'condition' => [
					'mbpost_btn_icon_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// For Author Filter
		$mbpost_array = get_users();
		foreach ($mbpost_array as $mbpost_author){
			$mbpost_id = $mbpost_author->ID;
			$mbpost_name = $mbpost_author->display_name;
			$mbpost_get_array[$mbpost_id] = $mbpost_name;
		}
		$this->add_control(
			'mbpost_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => $mbpost_get_array,
			]
		);
		$this->add_control(
			'mbpost_the_all_date',
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
			'mbpost_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'mbpost_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_coustom_month',
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
					'mbpost_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'mbpost_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'mbpost_the_order_by',
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
			'mbpost_blog_order',
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
			'mbpost_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 8,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'mbpost_categories_show_switcher',
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
			'mbpost_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_main_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'bwd-elementor-addons' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'mbpost_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$mbpost_idObj = get_category_by_slug('category-slug');
		$mbpost_order_options = array($mbpost_idObj => 'All Categories');
		$mbpost_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($mbpost_categories as $category):
			$mbpost_catids = $category->slug;
			$mbpost_catname = $category->name;
			$mbpost_order_options[$mbpost_catids] = $mbpost_catname;
		endforeach;
		$this->add_control(
			'mbpost_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $mbpost_order_options,
			]
		);
		$this->add_control(
			'mbpost_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// For tag Filter
		$mbpost_idObj = get_tag('tags-slug');
		$mbpost_order_optionst = array($mbpost_idObj => 'All Tags');
		$mbpost_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($mbpost_ta as $tag):
			$mbpost_tagids = $tag->slug;
			$mbpost_tagname = $tag->name;
			$mbpost_order_optionst[$mbpost_tagids] = $mbpost_tagname;
		endforeach;
		$this->add_control(
			'mbpost_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => $mbpost_idObj,
				'options' => $mbpost_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'mbpost_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'number-and-text',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'number-and-text' => esc_html__( 'Number and Text', 'bwd-elementor-addons' ),
					'number' => esc_html__( 'Number', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'mbpost_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'text-center',
				'options' => [
					'text-start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'text-center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'text-end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'mbpost_the_pagination_type' => ['number-and-text', 'number'],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'mbpost_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'mbpost_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'mbpost_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'mbpost_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
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
				'toggle' => true,
			]
		);
		$this->add_control(
			'mbpost_blog_content_bg_color',
			[
				'label' => esc_html__( 'Content Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-content-wrapper::before, {{WRAPPER}} .mbpost-style-eleven .mbpost-content-wrapper::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .mbpost-img-wrapper::after' => 'border-left: 55px solid {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'mbpost_blog_title_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_title_typography',
				'selector' => '{{WRAPPER}} .mbpost-title .mbpost-h2-title',
			]
		);
		$this->add_control(
			'mbpost_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-title .mbpost-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-title .mbpost-h2-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mbpost_blog_title_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper .mbpost-title .mbpost-h2-title',
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_title_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-title .mbpost-h2-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-title .mbpost-h2-title',
			]
		);
		$this->add_control(
			'mbpost_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-title .mbpost-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-title .mbpost-h2-title' => 'background-image: linear-gradient(to bottom,{{VALUE}} 0%,{{VALUE}} 98%)',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mbpost_blog_title_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-title .mbpost-h2-title',
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_title_hover_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-title .mbpost-h2-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'mbpost_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-title .mbpost-h2-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-title .mbpost-h2-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_button_style_section',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_post_action_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'mbpost_blog_button_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_button_typography',
				'selector' => '{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn',
			]
		);
		$this->add_control(
			'mbpost_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mbpost_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn',
			]
		);
		$this->add_control(
			'mbpost_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mbpost_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'mbpost_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-btnWrap .mbpost-moreBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_button_icon_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-btnWrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_description_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'mbpost_blog_description_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_description_typography',
				'selector' => '{{WRAPPER}} .mbpost-desc p',
			]
		);
		$this->add_control(
			'mbpost_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-desc p',
			]
		);
		$this->add_control(
			'mbpost_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'mbpost_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-desc p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-desc p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'mbpost_the_post_image_size',
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
					'{{WRAPPER}} .mbpost-img-wrapper img' => 'height: {{SIZE}}{{UNIT}}% !important; width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mbpost_image_overlay_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper::before, {{WRAPPER}} .mbpost-style-twelve .mbpost-img-wrapper::after',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_author_options',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_author_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'mbpost_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper .mbpost-author span, {{WRAPPER}} .mbpost-img-wrapper .mbpost-author .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-author span, {{WRAPPER}} .mbpost-img-wrapper .mbpost-author .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-author' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-author' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-author span, {{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-author .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-author span, {{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-author .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-author' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-author' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'mbpost_blog_author_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-author' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-author' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_date_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'mbpost_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper .mbpost-date span, {{WRAPPER}} .mbpost-img-wrapper .mbpost-date .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-date span, {{WRAPPER}} .mbpost-img-wrapper .mbpost-date .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-date span, {{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-date .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-date span, {{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-date .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'mbpost_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'mbpost_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper .mbpost-comment span, {{WRAPPER}} .mbpost-img-wrapper .mbpost-comment .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-comment span, {{WRAPPER}} .mbpost-img-wrapper .mbpost-comment .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-comment' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-comment span, {{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-comment .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-comment span, {{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-comment .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-comment' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'mbpost_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_comment_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-comment' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-comment' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'mbpost_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper .mbpost-cat',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper .mbpost-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-cat',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper:hover .mbpost-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'mbpost_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-cat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper .mbpost-cat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'mbpost_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .mbpost_blog_tag, {{WRAPPER}} .mbpost_blog_tag a, {{WRAPPER}} .mbpost_blog_tag .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_blog_tag, {{WRAPPER}} .mbpost_blog_tag a, {{WRAPPER}} .mbpost_blog_tag .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_blog_tag, {{WRAPPER}} .mbpost_blog_tag::before, {{WRAPPER}} .mbpost_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag, {{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag a, {{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag .mbpost_icons',
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag, {{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag a, {{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag .mbpost_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag, {{WRAPPER}} .mbpost_blog_box:hover .mbpost_blog_tag::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'mbpost_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost_blog_tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost_blog_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'mbpost_the_collumn_gap_size',
			[
				'label' => esc_html__( 'Collumn Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .mbpost-main-wrapper' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'mbpost_blog_box_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'mbpost_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mbpost_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper',
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'mbpost_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost-style-six .mbpost-img-wrapper:hover::after, {{WRAPPER}} .mbpost-style-twelve .mbpost-img-wrapper::after' => 'background: {{VALUE}}',
					'condition' => [
						'mbpost_style_selection' => ['six', 'twelve'],
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'mbpost_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'mbpost_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .mbpost-img-wrapper:hover',
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'mbpost_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost-img-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'mbpost_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mbpost_the_pagination_type' => ['number-and-text', 'number']
				],
			]
		);
		$this->add_responsive_control(
			'mbpost_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'rem' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .mbpost_pagination_item' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'mbpost_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'mbpost_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .mbpost_pagination_item a',
			]
		);
		$this->add_control(
			'mbpost_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'mbpost_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mbpost_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .mbpost_pagination_item span, {{WRAPPER}} .mbpost_pagination_item a:hover',
			]
		);
		$this->add_control(
			'mbpost_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_pagination_item span, {{WRAPPER}} .mbpost_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'mbpost_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mbpost_pagination_item span, {{WRAPPER}} .mbpost_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'mbpost_blog_button_box_width',
			[
				'label' => esc_html__( 'Box Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .mbpost_pagination_item a, {{WRAPPER}} .mbpost_pagination_item span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'mbpost_blog_button_box_height',
			[
				'label' => esc_html__( 'Box Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .mbpost_pagination_item a, {{WRAPPER}} .mbpost_pagination_item span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'mbpost_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost_pagination_item a, {{WRAPPER}} .mbpost_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mbpost_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mbpost_pagination_item a, {{WRAPPER}} .mbpost_pagination_item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$mbpost_title_tags = $settings['mbpost_title_tags'];
		$mbpost_styles = $settings['mbpost_style_selection'];
		$mbpost_post_per_page = $settings['mbpost_the_post_per_page'];
		$mbpost_post_description_words = $settings['mbpost_the_post_description_words'];
		$mbpost_blog_word_trim_indi = $settings['mbpost_blog_word_trim_indi'];
		$mbpost_blog_date_format = $settings['mbpost_blog_date_format'];

		$mbpost_author_indicator = $settings['mbpost_author_indicator'];
		$mbpost_taxo_icon = $settings['mbpost_taxo_icon'];
		$mbpost_cart_button_ss = $settings['mbpost_post_action_switcher'];
		$mbpost_cart_button = $settings['mbpost_cart_button'];
		$mbpost_cart_button_icon = $settings['mbpost_cart_button_icon']['value'];

		// Pagination
		$mbpost_the_pagination_type = $settings['mbpost_the_pagination_type'];
		$mbpost_pagination_position = $settings['mbpost_the_pagination_items_align'];
		$mbpost_blog_next_format = $settings['mbpost_blog_next_format'];
		$mbpost_blog_prev_format = $settings['mbpost_blog_prev_format'];
		// Pagination

		$mbpost_cont_align = $settings['mbpost_content_alignment'];
		if('left' === $mbpost_cont_align){
			$mbpost_cont_align = 'mbpost_taxo_align_left mbpost_taxo_align_left_j';
		} elseif('center' === $mbpost_cont_align){
			$mbpost_cont_align = 'mbpost_taxo_align_center mbpost_taxo_align_center_j';
		} elseif('right' === $mbpost_cont_align){
			$mbpost_cont_align = 'mbpost_taxo_align_right mbpost_taxo_align_right_j';
		} else{ $mbpost_cont_align = ' '; }

		$mbpost_image_link_show = $settings['mbpost_image_link_show_switcher'];
		$mbpost_title_swtcher = $settings['mbpost_title_show_switcher'];
		$mbpost_title_link_show = $settings['mbpost_title_link_show_switcher'];
		$mbpost_description_swtcher = $settings['mbpost_description_show_switcher'];
		$mbpost_date_swtcher = $settings['mbpost_date_show_switcher'];
		$mbpost_author_swtcher = $settings['mbpost_author_show_switcher'];
		$mbpost_comments_swtcher = $settings['mbpost_comments_show_switcher'];
		$mbpost_categories_swtcher = $settings['mbpost_categories_show_switcher'];
		$mbpost_tags_swtcher = $settings['mbpost_tags_show_switcher'];
		$mbpost_tags_filter = $settings['mbpost_the_tag_filter'];
		$mbpost_cat_show_status = $settings['mbpost_the_cat_show_status'];

		$mbpost_categorys_dataa = $settings['mbpost_the_cat_columnsdd'];
		$mbpost_the_blog_type = $settings['mbpost_the_blog_type'];
		$mbpost_blog_order = $settings['mbpost_blog_order'];
		$mbpost_author = $settings['mbpost_the_all_author'];
		$mbpost_order_by = $settings['mbpost_the_order_by'];
		
		$mbpost_the_all_date = $settings['mbpost_the_all_date'];
		if('d' === $mbpost_the_all_date){
			$mbpost_coustom_day = $mbpost_coustom_month = $mbpost_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $mbpost_the_all_date){
			$mbpost_coustom_day = $mbpost_coustom_month = $mbpost_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $mbpost_the_all_date){
			$mbpost_coustom_day = $mbpost_coustom_month = $mbpost_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $mbpost_the_all_date){
			$mbpost_coustom_year = $settings['mbpost_blog_coustom_year'];
			$mbpost_coustom_month = $settings['mbpost_blog_coustom_month'];
			$mbpost_coustom_day = $settings['mbpost_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$mbpost_coustom_day = $mbpost_coustom_month = $mbpost_coustom_year = $wdbp_time = '';
		}
		
		$mbpost_args = array(
			'post_type'=> $mbpost_the_blog_type,
			'author__in' => $mbpost_author,
			'orderby'   => $mbpost_order_by,
			'order' => $mbpost_blog_order,
			'post_status' => 'publish',
			'posts_per_page' => $mbpost_post_per_page,
			'category_name' => $mbpost_categorys_dataa,
			'date_query' => $wdbp_time,
			'year' => $mbpost_coustom_year,
			'monthnum' => $mbpost_coustom_month,
			'day' => $mbpost_coustom_day,
		);
		$mbpost_yes_value = 'yes';
		if($mbpost_styles == 'one' || $mbpost_styles == 'two'){
			include( __DIR__ . '/pmatemplates/bwdeb_styles_main.php' );
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
	public function mbpost_post_categories() {
		$mbpost_categories_list = get_the_category_list(', ');
		if ($mbpost_categories_list) {
			echo esc_html($mbpost_categories_list);
		}
	}
	public function mbpost_post_thumbnail_here(){
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
			} else{ 
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'bwd-elementor-addons') . '</h2>';
			}
	}
}
