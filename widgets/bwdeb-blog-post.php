<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDBPLBlog extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BlogList', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Post List', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-post-list';
	}

	public function get_categories() {
		return [ 'bwdeb_post_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdbpl_blog_content_layout_section',
			[
				'label' => esc_html__( 'Post Layout', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpl_style_selection',
			[
				'label' => esc_html__( 'Post Styles', 'bwd-elementor-addons' ),
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/post-list" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_responsive_control(
			'bwdbpl_blog_row_gap',
			[
				'label' => esc_html__( 'Items Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 30,
				// ],
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpl_title_show_switcher',
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
			'bwdbpl_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'div',
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
			'bwdbpl_description_show_switcher',
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
			'bwdbpl_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bwdbpl_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbpl_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpl_taxo_icon',
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
			'bwdbpl_date_show_switcher',
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
			'bwdbpl_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbpl_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bwdbpl_author_show_switcher',
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
			'bwdbpl_author_indicator',
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
					'bwdbpl_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpl_blog_gravader_height',
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
					'{{WRAPPER}} .bwdbpl_author-img img' => 'block-size: {{SIZE}}{{UNIT}} !important; inline-size: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdbpl_author_show_switcher' => 'yes',
					'bwdbpl_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bwdbpl_author_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpl_author_show_switcher' => 'yes',
					'bwdbpl_author_indicator' => 'icon',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpl_blog_author_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdbpl_blog_user i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbpl_author_show_switcher' => 'yes',
					'bwdbpl_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbpl_comments_show_switcher',
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
			'bwdbpl_blogs_button',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpl_button_show_switcher',
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
			'bwdbpl_button_types',
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
			'bwdbpl_blog_button_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', 'bwd-elementor-addons'),
				'label_block' => true,
				'condition' => [
					'bwdbpl_button_show_switcher' => 'yes',
				],
				'condition' => [
					'bwdbpl_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bwdbpl_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdbpl_button_types' => 'text_icon',
				],
			]
		);
		
		$this->add_control(
			'bwdbpl_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpl_button_types' => 'text_icon',
					'bwdbpl_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpl_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbpl_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdbpl_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function bwdbpl_get_all_post_types() {
			$post_type_options = array(
				'post' => __('Posts', 'bwd-elementor-addons'),
				'page' => __('Pages', 'bwd-elementor-addons'),
			);
			$post_type_options['manual'] = esc_html__('Manual Selection', 'bwd-elementor-addons');

			return $post_type_options;
		}
		$this->add_control(
			'selected_post_types',
			[
				'label' => __( 'Source', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'post',
				'multiple' => true,
				'options' => bwdbpl_get_all_post_types(),
			]
		);

		// Add custom query to retrieve all authors
		function bwdbpl_get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'bwdbpl_the_all_author',
            [
                'label' => __( 'Select Authors', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => bwdbpl_get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function bwdbpl_get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'bwdbpl_the_all_categories',
			[
				'label' => __( 'Select Categories', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpl_get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function bwdbpl_get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'bwdbpl_the_all_tags',
			[
				'label' => __( 'Select Tags', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpl_get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function bwdbpl_get_all_post_formats() {
			$post_formats = get_theme_support( 'post-formats' );
			
			// Check if $post_formats is an array
			if ( is_array( $post_formats ) && is_array( $post_formats[0] ) ) {
				$post_formats = $post_formats[0];
			} else {
				$post_formats = array();
			}
		
			$post_format_options = array();
			foreach ( $post_formats as $format ) {
				$post_format_options[$format] = ucfirst( $format );
			}
			return $post_format_options;
		}
		
		
		$this->add_control(
			'bwdbpl_the_all_post_formats',
			[
				'label' => __( 'Post Formats', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpl_get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function bwdbpl_get_all_posts() {
			$posts = get_posts( array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			) );

			$post_options = array();
			foreach ( $posts as $post ) {
				$post_options[$post->ID] = $post->post_title;
			}
			return $post_options;
		}
		$this->add_control(
			'bwdbpl_include_posts',
			[
				'label' => __( 'Include Posts', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpl_get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function bwdbpl_get_all_post() {
			$posts = get_posts( array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			) );

			$post_options = array();
			foreach ( $posts as $post ) {
				$post_options[$post->ID] = $post->post_title;
			}
			return $post_options;
		}

		$this->add_control(
			'bwdbpl_exclude_post',
			[
				'label' => __( 'Exclude Posts', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => bwdbpl_get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'bwdbpl_the_all_date',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'd' => esc_html__( 'Today', 'bwd-elementor-addons' ),
					'm' => esc_html__( 'Current Month', 'bwd-elementor-addons' ),
					'coustom' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbpl_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_coustom_month',
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
					'bwdbpl_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdbpl_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpl_the_order_by',
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
					'rand' => esc_html__( 'Random', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpl_blog_order',
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
			'bwdbpl_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdbpl_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdbpl_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'bwd-elementor-addons' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdbpl_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$bwdbpl_idObj = get_category_by_slug('category-slug');
		$bwdbpl_order_options = array($bwdbpl_idObj => 'All Categories');
		$bwdbpl_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($bwdbpl_categories as $category):
			$bwdbpl_catids = $category->slug;
			$bwdbpl_catname = $category->name;
			$bwdbpl_order_options[$bwdbpl_catids] = $bwdbpl_catname;
		endforeach;
		$this->add_control(
			'bwdbpl_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $bwdbpl_order_options,
			]
		);
		$this->add_control(
			'bwdbpl_tags_show_switcher',
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
		$bwdbpl_idObj = get_tag('tags-slug');
		$bwdbpl_order_optionst = array($bwdbpl_idObj => 'All Tags');
		$bwdbpl_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($bwdbpl_ta as $tag):
			$bwdbpl_tagids = $tag->slug;
			$bwdbpl_tagname = $tag->name;
			$bwdbpl_order_optionst[$bwdbpl_tagids] = $bwdbpl_tagname;
		endforeach;
		$this->add_control(
			'bwdbpl_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => $bwdbpl_idObj,
				'options' => $bwdbpl_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpl_the_pagination_type',
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
			'bwdbpl_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'filter_center',
				'options' => [
					'filter_left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'filter_center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'bwdbpl_the_pagination_type' => ['number-and-text', 'number'],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdbpl_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbpl_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbpl_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbpl_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
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
					'{{WRAPPER}} .bwdbpl_blog_bottom_part' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .bwdbpl_blog_meta' => 'justify-content: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdbpl_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdbpl_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_title_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_title',
			]
		);
		$this->add_control(
			'bwdbpl_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_title',
			]
		);
		$this->add_control(
			'bwdbpl_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbpl_blog_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbpl_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbpl_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_description_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_desce',
			]
		);
		$this->add_control(
			'bwdbpl_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_desce' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_desce' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_desce',
			]
		);
		$this->add_control(
			'bwdbpl_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_options',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbpl_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_button_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_button, {{WRAPPER}} .bwdbpl_button a, {{WRAPPER}} .bwdbpl_button i',
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_button, {{WRAPPER}} .bwdbpl_button a, {{WRAPPER}} .bwdbpl_button i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpl_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbpl_blog_bttn .bwdbpl_button, {{WRAPPER}} .bwdbpl_blogPost_4 .bwdbpl_blog_meta',
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_button, {{WRAPPER}} .bwdbpl_blog_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'bwdbpl_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_button' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_button:hover, {{WRAPPER}} .bwdbpl_button:hover a',
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_button:hover, {{WRAPPER}} .bwdbpl_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_button:hover, {{WRAPPER}} .bwdbpl_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpl_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbpl_blog_bttn .bwdbpl_button:hover, {{WRAPPER}} .bwdbpl_blogPost_4 .bwdbpl_blog_meta:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_button:hover, {{WRAPPER}} .bwdbpl_blog_bttn:hover, {{WRAPPER}} .bwdbpl_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbpl_the_post_image_height_size',
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
					'{{WRAPPER}} .bwdbpl_blog_image' => 'block-size: {{SIZE}}{{UNIT}}% !important; inline-size: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overly', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_image_overly_b::before, {{WRAPPER}} .bwdbpl_image_overly_a::after, {{WRAPPER}} .bwdbpl_blogPost_list_40 .bwdbpl_blog_bottom_part::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_button_icon_overly_color',
			[
				'label' => esc_html__( 'Icon Overly', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_overlay_icon .bwdbpl_icons' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpl_style_selection' => ['style5', 'style24'],
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blogPost_list_32 .bwdbpl_blog_image, {{WRAPPER}} .bwdbpl_blog_image img, {{WRAPPER}} .bwdbpl_blog_image, {{WRAPPER}} .bwdbpl_blog_image::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_taxonomies_style_section',
			[
				'label' => esc_html__( 'Taxonomy And Others', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbpl_blog_taxo_gap',
			[
				'label' => esc_html__( 'Taxonomy Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_meta' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_author_options',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdbpl_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_user a, {{WRAPPER}} .bwdbpl_blog_user, {{WRAPPER}} .bwdbpl_blog_user .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_author-img, {{WRAPPER}} .bwdbpl_blog_user a, {{WRAPPER}} .bwdbpl_blog_user, {{WRAPPER}} .bwdbpl_blog_user .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_user::after, {{WRAPPER}} .bwdbpl_blog_user::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_user' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user a, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user a, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_user:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'bwdbpl_blog_author_image_height',
			[
				'label' => esc_html__( 'Admin Image Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdbpl_author img, {{WRAPPER}} .bwdbpl_author-img img' => 'block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbpl_author_indicator' => 'gravatar',
				]
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_author_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_user' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_user' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbpl_blog_taxonomy_divider_author',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbpl_blog_date_options',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdbpl_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_date, {{WRAPPER}} .bwdbpl_blog_date .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_date, {{WRAPPER}} .bwdbpl_blog_date .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_date::before, {{WRAPPER}} .bwdbpl_blogPost_17 .bwdbpl_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_date' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_date' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_date, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_date .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_date, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_date .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_date_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_date:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbpl_blog_taxonomy_divider_date',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbpl_blog_comment_options',
			[
				'label' => esc_html__( 'Comment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdbpl_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_comment, {{WRAPPER}} .bwdbpl_blog_comment a, {{WRAPPER}} .bwdbpl_blog_comment .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_comment, {{WRAPPER}} .bwdbpl_blog_comment a, {{WRAPPER}} .bwdbpl_blog_comment .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_comment, {{WRAPPER}} .bwdbpl_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment a, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment a, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpl_blog_comment_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_comment' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_comment' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		

		$this->add_control(
			'bwdbpl_blog_taxonomy_divider_comment',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbpl_blog_tags_options',
			[
				'label' => esc_html__( 'Tags', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bwdbpl_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_tag, {{WRAPPER}} .bwdbpl_blog_tag a, {{WRAPPER}} .bwdbpl_blog_tag .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_tag, {{WRAPPER}} .bwdbpl_blog_tag a, {{WRAPPER}} .bwdbpl_blog_tag .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_tag' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag a, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag a, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bwdbpl_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_tag' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbpl_blog_taxonomy_divider_tags',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbpl_blog_categories_options',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bwdbpl_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_category li, {{WRAPPER}} .bwdbpl_category li a, {{WRAPPER}} .bwdbpl_category .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_category li, {{WRAPPER}} .bwdbpl_category li a, {{WRAPPER}} .bwdbpl_category .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_category li a, {{WRAPPER}} .bwdbpl_category li, {{WRAPPER}} .bwdbpl_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_category li:hover, {{WRAPPER}} .bwdbpl_category:hover li a, {{WRAPPER}} .bwdbpl_category:hover .bwdbpl_icons',
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blog_box .bwdbpl_category li:hover, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_category li a, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_category li .bwdbpl_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_category li a:hover, {{WRAPPER}} .bwdbpl_blog_box .bwdbpl_category li:hover, {{WRAPPER}} .bwdbpl_blog_box .bwdbpl_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bwdbpl_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_category li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_category li a' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_category ul li' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbpl_blog_taxonomy_divider_categories',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

	
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdbpl_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdbpl_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blogPost_list_40 .bwdbpl_blog_box, {{WRAPPER}} .bwdbpl_n_bg_b:before, {{WRAPPER}} .bwdbpl_n_bg, {{WRAPPER}} .bwdbpl_box_style_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpl_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbpl_blogPost_list_40 .bwdbpl_blog_box, {{WRAPPER}} .bwdbpl_g_bg_b:before, {{WRAPPER}} .bwdbpl_g_bg, {{WRAPPER}} .bwdbpl_box_style_cmn, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpl_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbpl_g_bg_b:before, {{WRAPPER}} .bwdbpl_box_sha, {{WRAPPER}} .bwdbpl_box_style_cmn, {{WRAPPER}} .bwdbpl_blog_box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdbpl_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_blogPost_list_40 .bwdbpl_blog_box:hover, {{WRAPPER}} .bwdbpl_n_bg_b:hover:before, {{WRAPPER}} .bwdbpl_n_bg:hover, {{WRAPPER}} .bwdbpl_box_style_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpl_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbpl_blogPost_list_40 .bwdbpl_blog_box:hover, {{WRAPPER}} .bwdbpl_g_bg_b:hover:before, {{WRAPPER}} .bwdbpl_g_bg:hover, {{WRAPPER}} .bwdbpl_box_style_cmn:hover, {{WRAPPER}} .bwdbpl_blog_box:hover .bwdbpl_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpl_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpl_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbpl_blog_box',
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_box' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_bottom_part' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_the_box_content_border_radius',
            [
                'label' => esc_html__('Content Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_blog_bottom_part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_box_padding_cmn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpl_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpl_the_pagination_type' => ['number-and-text', 'number']
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpl_blog_button_box_pagi_margin_top',
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
					'{{WRAPPER}} .bwdbpl_pagination_item' => 'margin-block-start: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'bwdbpl_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'bwdbpl_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_pagination_item a',
			]
		);
		$this->add_control(
			'bwdbpl_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpl_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpl_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpl_pagination_item span, {{WRAPPER}} .bwdbpl_pagination_item a:hover',
			]
		);
		$this->add_control(
			'bwdbpl_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_pagination_item span, {{WRAPPER}} .bwdbpl_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpl_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpl_pagination_item span, {{WRAPPER}} .bwdbpl_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'bwdbpl_blog_button_box_width',
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
					'{{WRAPPER}} .bwdbpl_pagination_item a, {{WRAPPER}} .bwdbpl_pagination_item span' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpl_blog_button_box_height',
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
					'{{WRAPPER}} .bwdbpl_pagination_item a, {{WRAPPER}} .bwdbpl_pagination_item span' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpl_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_pagination_item a, {{WRAPPER}} .bwdbpl_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpl_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpl_pagination_item a, {{WRAPPER}} .bwdbpl_pagination_item span' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdbpl_title_tags = $settings['bwdbpl_title_tags'];
		$bwdbpl_styles = $settings['bwdbpl_style_selection'];
		$bwdbpl_post_per_page = $settings['bwdbpl_the_post_per_page'];
		$bwdbpl_post_description_words = $settings['bwdbpl_the_post_description_words'];
		$bwdbpl_blog_word_trim_indi = $settings['bwdbpl_blog_word_trim_indi'];
		$bwdbpl_blog_date_format = $settings['bwdbpl_blog_date_format'];

		$bwdbpl_author_indicator = $settings['bwdbpl_author_indicator'];
		$bwdbpl_button_icon_align = $settings['bwdbpl_button_icon_align'];
		// Button Icon only bwdbpl_blog_button_icon
		$bwdbpl_taxo_icon = $settings['bwdbpl_taxo_icon'];
		$bwdbpl_button_types = $settings['bwdbpl_button_types'];

		$bwdbpl_title_swtcher = $settings['bwdbpl_title_show_switcher'];
		$bwdbpl_description_swtcher = $settings['bwdbpl_description_show_switcher'];
		$bwdbpl_date_swtcher = $settings['bwdbpl_date_show_switcher'];
		$bwdbpl_author_swtcher = $settings['bwdbpl_author_show_switcher'];
		$bwdbpl_comments_swtcher = $settings['bwdbpl_comments_show_switcher'];
		$bwdbpl_categories_swtcher = $settings['bwdbpl_categories_show_switcher'];
		$bwdbpl_tags_swtcher = $settings['bwdbpl_tags_show_switcher'];
		$bwdbpl_tags_filter = $settings['bwdbpl_the_tag_filter'];
		$bwdbpl_cat_show_status = $settings['bwdbpl_the_cat_show_status'];

		$bwdbpl_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$bwdbpl_categorys_dataa = $settings['bwdbpl_the_all_categories'];
		$bwdbpl_the_blog_type = $settings['selected_post_types'];
		$bwdbpl_blog_order = $settings['bwdbpl_blog_order'];
		$bwdbpl_author = $settings['bwdbpl_the_all_author'];
		$bwdbpl_order_by = $settings['bwdbpl_the_order_by'];
		$bwdbpl_include_post = $settings['bwdbpl_include_posts'];
		$bwdbpl_exclude_post = $settings['bwdbpl_exclude_post'];
		$bwdbpl_tags_filter = $settings['bwdbpl_the_all_tags'];
		$bwdbpl_post_format = $settings['bwdbpl_the_all_post_formats'];
		
		$bwdbpl_the_all_date = $settings['bwdbpl_the_all_date'];
		$bwdbpl_text_str = ' ';
		if('d' === $bwdbpl_the_all_date){
			$bwdbpl_coustom_day = $bwdbpl_text_str;
			$bwdbpl_coustom_month = $bwdbpl_text_str;
			$bwdbpl_coustom_year = $bwdbpl_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bwdbpl_the_all_date){
			$bwdbpl_coustom_day = $bwdbpl_text_str;
			$bwdbpl_coustom_month = $bwdbpl_text_str;
			$bwdbpl_coustom_year = $bwdbpl_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bwdbpl_the_all_date){
			$bwdbpl_coustom_day = $bwdbpl_text_str;
			$bwdbpl_coustom_month = $bwdbpl_text_str;
			$bwdbpl_coustom_year = $bwdbpl_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bwdbpl_the_all_date){
			$bwdbpl_coustom_year = $settings['bwdbpl_blog_coustom_year'];
			$bwdbpl_coustom_month = $settings['bwdbpl_blog_coustom_month'];
			$bwdbpl_coustom_day = $settings['bwdbpl_blog_coustom_day'];
			$wdbp_time = $bwdbpl_text_str;
		} else{
			$bwdbpl_coustom_day = $bwdbpl_text_str;
			$bwdbpl_coustom_month = $bwdbpl_text_str;
			$bwdbpl_coustom_year = $bwdbpl_text_str;
			$wdbp_time = $bwdbpl_text_str;
		}

		
		$bwdbpl_args = array(
			'posts_per_page' => $bwdbpl_post_per_page,
			'author__in'     => $bwdbpl_author,
			'tag__in'        => $bwdbpl_tags_filter,
			'category__in'   => $bwdbpl_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $bwdbpl_exclude_post,
			'orderby'        => $bwdbpl_order_by,
			'order'   		 => $bwdbpl_blog_order,
			'paged'          => $bwdbpl_paged,
			'date_query'     => $wdbp_time,
			'year'           => $bwdbpl_coustom_year,
			'monthnum'       => $bwdbpl_coustom_month,
			'day'            => $bwdbpl_coustom_day,
		);
		
		// Check the selected post source
		if ($bwdbpl_the_blog_type === 'post') {
			$bwdbpl_args['post_type'] = 'post';
		} elseif ($bwdbpl_the_blog_type === 'page') {
			$bwdbpl_args['post_type'] = 'page';
		} elseif ($bwdbpl_the_blog_type === 'manual') {
			$bwdbpl_include_post = $settings['bwdbpl_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($bwdbpl_include_post)) {
				$bwdbpl_args['post__in'] = $bwdbpl_include_post;
			} else {}
		}
		
		
		// Check if post format is set
		if (isset($bwdbpl_post_format) && !empty($bwdbpl_post_format)) {
			// Ensure post format has correct format without 'post-format-' prefix
			$post_format_slug = 'post-format-' . $bwdbpl_post_format;
			// Add tax query for post format
			$bwdbpl_args['tax_query'] = array(
				array(
					'taxonomy' => 'post_format',
					'field'    => 'slug',
					'terms'    => $post_format_slug,
				),
			);
		}
		$bwdbpl_the_pagination_type = $settings['bwdbpl_the_pagination_type'];
		$bwdbpl_yes_value = 'yes';
		$bwdbpl_blog_next_format = $settings['bwdbpl_blog_next_format'];
		$bwdbpl_blog_prev_format = $settings['bwdbpl_blog_prev_format'];

		include 'pltemplates/condition.php';

		if($bwdbpl_styles == 'style1' || $bwdbpl_styles == 'style2'){
			if ( $bwdbpl_styles ) {?>
				<div class="<?php echo $added_class ?>">
					<?php $wp_query = new \WP_Query( $bwdbpl_args );
					if($wp_query->have_posts()) :
						while($wp_query->have_posts()) : $wp_query->the_post();?>
						<div class="bwdbpl_blog_box bwdbpl_box_padding_cmn"> <?php
							include 'pltemplates/thumbnail.php'; 
							if( $bwdbpl_styles !== 'style17' && $bwdbpl_styles !== 'style18' && $bwdbpl_styles !== 'style19' ){ include 'pltemplates/post-bottom-part.php';}
							if( $bwdbpl_styles == 'style6' ){ include 'pltemplates/overlay-content.php'; }?>
						</div>
					<?php endwhile; 
					// Post Pagination
					include 'pltemplates/pagination.php';
					endif;
					wp_reset_postdata(); ?>
				</div>
				<?php
			}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
	public function bwdbpl_post_categories() {
        $bwdbpl_categories_list = get_the_category_list(esc_html__(', ', 'bwd-elementor-addons'));
        if ($bwdbpl_categories_list) {
            echo $bwdbpl_categories_list;
        }
    }
}
