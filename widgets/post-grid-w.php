<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDBPBlog extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameBlog', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Post Grid', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-posts-grid';
	}

	public function get_categories() {
		return [ 'bwdeb_post_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdbp_blog_content_layout_section',
			[
				'label' => esc_html__( 'Post Layout', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbp_style_selection',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/post-grid" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);

		$this->add_responsive_control(
			'bwdbp_column_layout',
			[
				'label' => esc_html__( 'Choose Column', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'creative-blog-post' ),
					'column1' => esc_html__( '1 Column', 'creative-blog-post' ),
					'column2' => esc_html__( '2 Column', 'creative-blog-post' ),
					'column3'  => esc_html__( '3 Column', 'creative-blog-post' ),
                    'column4' => esc_html__( '4 Column', 'creative-blog-post' ),
                    'column5' => esc_html__( '5 Column', 'creative-blog-post' ),
                    'column6' => esc_html__( '6 Column', 'creative-blog-post' ),
				],
				'prefix_class' => 'bwdbp-grid%s-'
			]
		);
		$this->add_responsive_control(
			'bwdbp_col_alignment',
			[
				'label' => esc_html__( 'Column Alignment', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-row' => 'justify-content: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
			'bwdbp_post_grid_column_gap',
			[
				'label' => esc_html__( 'Column Gap', 'bwd-services-showcase' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
					'size' => 15,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbp_gapc' => 'padding-inline-start: {{SIZE}}{{UNIT}}; padding-inline-end: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdbp_gapr' => 'margin-inline-start: -{{SIZE}}{{UNIT}}; margin-inline-end: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_row_gap',
			[
				'label' => esc_html__( 'Row Gap', 'creative-blog-post' ),
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
					'{{WRAPPER}} .bwd-row' => 'row-gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_responsive_control(
			'bwdbp_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_bottom_part' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .bwdbp_blog_meta' => 'justify-content: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdbp_title_show_switcher',
			[
				'label' => esc_html__( 'Title', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbp_title_tags',
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
			'bwdbp_description_show_switcher',
			[
				'label' => esc_html__( 'Description', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'creative-blog-post' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bwdbp_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'creative-blog-post' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'creative-blog-post' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbp_taxo_icon',
			[
				'label' => esc_html__( 'All Taxo Icons', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'show',
				'options' => [
					'none' => esc_html__( 'None', 'creative-blog-post' ),
					'show' => esc_html__( 'Show', 'creative-blog-post' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbp_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'creative-blog-post' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'creative-blog-post' ),
				'placeholder' => esc_html__( 'j M y', 'creative-blog-post' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bwdbp_author_show_switcher',
			[
				'label' => esc_html__( 'Author', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdbp_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'none' => esc_html__( 'None', 'creative-blog-post' ),
					'gravatar' => esc_html__( 'Gravatar', 'creative-blog-post' ),
					'icon' => esc_html__( 'Author Icon', 'creative-blog-post' ),
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_gravader_height',
			[
				'label' => esc_html__( 'Gravader Size', 'creative-blog-post' ),
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
					'{{WRAPPER}} .bwdbp_author-img img' => 'block-size: {{SIZE}}{{UNIT}} !important; inline-size: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
					'bwdbp_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bwdbp_author_icon',
			[
				'label' => esc_html__( 'Icon', 'creative-blog-post' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
					'bwdbp_author_indicator' => 'icon',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_author_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'creative-blog-post' ),
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
					'{{WRAPPER}} .bwdbp_author-img i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
					'bwdbp_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blogs_button',
			[
				'label' => esc_html__( 'Button', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbp_button_show_switcher',
			[
				'label' => esc_html__( 'Button', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbp_button_types',
			[
				'label' => esc_html__( 'Button Type', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', 'creative-blog-post' ),
					'icon' => esc_html__( 'Icon', 'creative-blog-post' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_title',
			[
				'label' => esc_html__( 'Title', 'creative-blog-post' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', 'creative-blog-post'),
				'label_block' => true,
				'condition' => [
					'bwdbp_button_show_switcher' => 'yes',
				],
				'condition' => [
					'bwdbp_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'none' => esc_html__( 'None', 'creative-blog-post' ),
					'left' => esc_html__( 'Left', 'creative-blog-post' ),
					'right' => esc_html__( 'Right', 'creative-blog-post' ),
				],
				'condition' => [
					'bwdbp_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', 'creative-blog-post' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbp_button_types' => 'text_icon',
					'bwdbp_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', 'creative-blog-post' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbp_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'creative-blog-post' ),
				'label_off' => esc_html__( 'No', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdbp_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function get_all_post_types() {
			$post_type_options = array(
				'post' => __('Posts', 'creative-blog-post'),
				'page' => __('Pages', 'creative-blog-post'),
			);
			$post_type_options['manual'] = esc_html__('Manual Selection', 'creative-blog-post');

			return $post_type_options;
		}
		$this->add_control(
			'selected_post_types',
			[
				'label' => __( 'Source', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'post',
				'multiple' => true,
				'options' => get_all_post_types(),
			]
		);

		// Add custom query to retrieve all authors
		function get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'bwdbp_the_all_author',
            [
                'label' => __( 'Select Authors', 'creative-blog-post' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'bwdbp_the_all_categories',
			[
				'label' => __( 'Select Categories', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'bwdbp_the_all_tags',
			[
				'label' => __( 'Select Tags', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function get_all_post_formats() {
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
			'bwdbp_the_all_post_formats',
			[
				'label' => __( 'Post Formats', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function get_all_posts() {
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
			'bwdbp_include_posts',
			[
				'label' => __( 'Include Posts', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function get_all_post() {
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
			'bwdbp_exclude_post',
			[
				'label' => __( 'Exclude Posts', 'creative-blog-post' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'bwdbp_the_all_date',
			[
				'label' => esc_html__( 'Date', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'creative-blog-post' ),
					'd' => esc_html__( 'Today', 'creative-blog-post' ),
					'm' => esc_html__( 'Current Month', 'creative-blog-post' ),
					'coustom' => esc_html__( 'Custom', 'creative-blog-post' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'creative-blog-post' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', 'creative-blog-post' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'creative-blog-post' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_coustom_month',
			[
				'label' => esc_html__( 'Select Month', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', 'creative-blog-post' ),
					'1' => esc_html__( 'Jan', 'creative-blog-post' ),
					'2' => esc_html__( 'Feb', 'creative-blog-post' ),
					'3' => esc_html__( 'Mar', 'creative-blog-post' ),
					'4' => esc_html__( 'Apr', 'creative-blog-post' ),
					'5' => esc_html__( 'May', 'creative-blog-post' ),
					'6' => esc_html__( 'Jun', 'creative-blog-post' ),
					'7' => esc_html__( 'Jul', 'creative-blog-post' ),
					'8' => esc_html__( 'Aug', 'creative-blog-post' ),
					'9' => esc_html__( 'Sep', 'creative-blog-post' ),
					'10' => esc_html__( 'Oct', 'creative-blog-post' ),
					'11' => esc_html__( 'Nov', 'creative-blog-post' ),
					'12' => esc_html__( 'Dec', 'creative-blog-post' ),
				],
				'condition' => [
					'bwdbp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'creative-blog-post' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'creative-blog-post' ),
				'placeholder' => esc_html__( '00', 'creative-blog-post' ),
				'condition' => [
					'bwdbp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbp_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'creative-blog-post' ),
					'author' => esc_html__( 'Author', 'creative-blog-post' ),
					'title' => esc_html__( 'Title', 'creative-blog-post' ),
					'id' => esc_html__( 'ID', 'creative-blog-post' ),
					'date' => esc_html__( 'Date', 'creative-blog-post' ),
					'rand' => esc_html__( 'Random', 'creative-blog-post' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_order',
			[
				'label' => esc_html__( 'Order', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', 'creative-blog-post' ),
					'ASC' => esc_html__( 'Ascending', 'creative-blog-post' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'creative-blog-post' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'creative-blog-post' ),
			]
		);
		$this->add_control(
			'bwdbp_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdbp_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'creative-blog-post' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'creative-blog-post' ),
				],
				'condition' => [
					'bwdbp_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$bwdbp_idObj = get_category_by_slug('category-slug');
		$bwdbp_order_options = array($bwdbp_idObj => 'All Categories');
		$bwdbp_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($bwdbp_categories as $category):
			$bwdbp_catids = $category->slug;
			$bwdbp_catname = $category->name;
			$bwdbp_order_options[$bwdbp_catids] = $bwdbp_catname;
		endforeach;
		$this->add_control(
			'bwdbp_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $bwdbp_order_options,
			]
		);
		$this->add_control(
			'bwdbp_tags_show_switcher',
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
		$bwdbp_idObj = get_tag('tags-slug');
		$bwdbp_order_optionst = array($bwdbp_idObj => 'All Tags');
		$bwdbp_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($bwdbp_ta as $tag):
			$bwdbp_tagids = $tag->slug;
			$bwdbp_tagname = $tag->name;
			$bwdbp_order_optionst[$bwdbp_tagids] = $bwdbp_tagname;
		endforeach;
		$this->add_control(
			'bwdbp_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => $bwdbp_idObj,
				'options' => $bwdbp_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbp_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'number-and-text',
				'options' => [
					'none' => esc_html__( 'None', 'creative-blog-post' ),
					'number-and-text' => esc_html__( 'Number and Text', 'creative-blog-post' ),
					'number' => esc_html__( 'Number', 'creative-blog-post' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'creative-blog-post' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'center',
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'creative-blog-post' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'bwdbp_the_pagination_type' => ['number-and-text', 'number'],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdbp_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', 'creative-blog-post' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'creative-blog-post' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'creative-blog-post' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'creative-blog-post' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbp_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdbp_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_title_typography',
				'selector' => '{{WRAPPER}} .bwdbp_title',
			]
		);
		$this->add_control(
			'bwdbp_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_title',
			]
		);
		$this->add_control(
			'bwdbp_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbp_blog_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbp_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_description_typography',
				'selector' => '{{WRAPPER}} .bwdbp_desce',
			]
		);
		$this->add_control(
			'bwdbp_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_desce' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_desce' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_desce',
			]
		);
		$this->add_control(
			'bwdbp_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbp_blog_button_options',
			[
				'label' => esc_html__( 'Button', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbp_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_button_typography',
				'selector' => '{{WRAPPER}} .bwdbp_button, {{WRAPPER}} .bwdbp_button a',
			]
		);
		$this->add_control(
			'bwdbp_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button, {{WRAPPER}} .bwdbp_button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_button_border',
				'label' => esc_html__( 'Border', 'creative-blog-post' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_bttn .bwdbp_button, {{WRAPPER}} .bwdbp_blogPost_4 .bwdbp_blog_meta',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_button, {{WRAPPER}} .bwdbp_blog_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'bwdbp_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_button' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_button:hover a',
			]
		);
		$this->add_control(
			'bwdbp_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'creative-blog-post' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_bttn .bwdbp_button:hover, {{WRAPPER}} .bwdbp_blogPost_4 .bwdbp_blog_meta:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_blog_bttn:hover, {{WRAPPER}} .bwdbp_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_post_image_height_size',
			[
				'label' => esc_html__( 'Thumbnail Height', 'creative-blog-post' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 600,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_image' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overly', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_image_overly_b::before, {{WRAPPER}} .bwdbp_image_overly_a::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_icon_overly_color',
			[
				'label' => esc_html__( 'Icon Overly', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_overlay_icon .bwdbp_icons' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbp_style_selection' => ['4', 'style24'],
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_image img, {{WRAPPER}} .bwdbp_blog_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_taxonomies_style_section',
			[
				'label' => esc_html__( 'Taxonomy And Others', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbp_blog_author_options',
			[
				'label' => esc_html__( 'Author', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_user .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_author-img, {{WRAPPER}} .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_user .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_user::after, {{WRAPPER}} .bwdbp_blog_user::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_user' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_user:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'bwdbp_blog_author_image_height',
			[
				'label' => esc_html__( 'Admin Image Size', 'creative-blog-post' ),
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
					'{{WRAPPER}} .bwdbp_author img, {{WRAPPER}} .bwdbp_author-img img' => 'block-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbp_style_selection' => '19',
				]
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_user' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_author',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_date_options',
			[
				'label' => esc_html__( 'Date', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_date .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_date .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_date::before, {{WRAPPER}} .bwdbp_blogPost_17 .bwdbp_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_date_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_date',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_comment_options',
			[
				'label' => esc_html__( 'Comment', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_comment .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_comment .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_comment' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_comment',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_tags_options',
			[
				'label' => esc_html__( 'Tags', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_tag .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_tag .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_tag::before, {{WRAPPER}} .bwdbp_blog_tag::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_tag' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bwdbp_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_tag' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_tags',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_categories_options',
			[
				'label' => esc_html__( 'Category', 'creative-blog-post' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bwdbp_category li, {{WRAPPER}} .bwdbp_category li a, {{WRAPPER}} .bwdbp_category .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_category li, {{WRAPPER}} .bwdbp_category li a, {{WRAPPER}} .bwdbp_category .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_category li, {{WRAPPER}} .bwdbp_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_category li:hover, {{WRAPPER}} .bwdbp_category:hover li a, {{WRAPPER}} .bwdbp_category:hover .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box .bwdbp_category li:hover, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box .bwdbp_category li:hover, {{WRAPPER}} .bwdbp_blog_box .bwdbp_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbp_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_category li' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_category li' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_categories',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_responsive_control(
			'bwdbp_blog_taxo_gap',
			[
				'label' => esc_html__( 'Taxo Gap', 'creative-blog-post' ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_meta' => 'gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdbp-btm-gap' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdbp_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdbp_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_n_bg_b:before, {{WRAPPER}} .bwdbp_n_bg, {{WRAPPER}} .bwdbp_box_style_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbp_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:before, {{WRAPPER}} .bwdbp_g_bg, {{WRAPPER}} .bwdbp_box_style_cmn, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbp_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'creative-blog-post' ),
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:before, {{WRAPPER}} .bwdbp_box_sha, {{WRAPPER}} .bwdbp_box_style_cmn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_box_border',
				'label' => esc_html__( 'Border', 'creative-blog-post' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_box',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_box_margin_cmn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_bottom_part' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_box_padding_cmn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdbp_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_n_bg_b:hover:before, {{WRAPPER}} .bwdbp_n_bg:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbp_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:hover:before, {{WRAPPER}} .bwdbp_g_bg:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbp_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'creative-blog-post' ),
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:hover:before, {{WRAPPER}} .bwdbp_box_sha:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'creative-blog-post' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_box_radi:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', 'creative-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Gap', 'creative-blog-post' ),
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
					'{{WRAPPER}} .bwdbp_pagination_item' => 'margin-block-start: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'bwdbp_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .bwdbp_pagination_item a',
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_pagination_item span, {{WRAPPER}} .bwdbp_pagination_item a:hover',
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item span, {{WRAPPER}} .bwdbp_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item span, {{WRAPPER}} .bwdbp_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'bwdbp_blog_button_box_width',
			[
				'label' => esc_html__( 'Box Width', 'creative-blog-post' ),
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
					'{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_button_box_height',
			[
				'label' => esc_html__( 'Box Height', 'creative-blog-post' ),
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
					'{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdbp_title_tags = $settings['bwdbp_title_tags'];
		$bwdbp_styles = $settings['bwdbp_style_selection'];
		$bwdbp_post_per_page = $settings['bwdbp_the_post_per_page'];
		$bwdbp_post_description_words = $settings['bwdbp_the_post_description_words'];
		$bwdbp_blog_word_trim_indi = $settings['bwdbp_blog_word_trim_indi'];
		$bwdbp_blog_date_format = $settings['bwdbp_blog_date_format'];

		$bwdbp_author_indicator = $settings['bwdbp_author_indicator'];
		$bwdbp_button_icon_align = $settings['bwdbp_button_icon_align'];
		// Button Icon only bwdbp_blog_button_icon
		$bwdbp_taxo_icon = $settings['bwdbp_taxo_icon'];
		$bwdbp_button_types = $settings['bwdbp_button_types'];

		if( $bwdbp_styles == 'style2' ){
			$bwdbp_blog_add = 'bwdbp_blogPost_style1';
		}else {
			$bwdbp_blog_add = '';
		}
		$bwdbp_title_swtcher = $settings['bwdbp_title_show_switcher'];
		$bwdbp_description_swtcher = $settings['bwdbp_description_show_switcher'];
		$bwdbp_date_swtcher = $settings['bwdbp_date_show_switcher'];
		$bwdbp_author_swtcher = $settings['bwdbp_author_show_switcher'];
		$bwdbp_comments_swtcher = $settings['bwdbp_comments_show_switcher'];
		$bwdbp_categories_swtcher = $settings['bwdbp_categories_show_switcher'];
		$bwdbp_tags_swtcher = $settings['bwdbp_tags_show_switcher'];
		$bwdbp_tags_filter = $settings['bwdbp_the_tag_filter'];
		$bwdbp_cat_show_status = $settings['bwdbp_the_cat_show_status'];

		$bwdbp_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$bwdbp_categorys_dataa = $settings['bwdbp_the_all_categories'];
		$bwdbp_the_blog_type = $settings['selected_post_types'];
		$bwdbp_blog_order = $settings['bwdbp_blog_order'];
		$bwdbp_author = $settings['bwdbp_the_all_author'];
		$bwdbp_order_by = $settings['bwdbp_the_order_by'];
		$bwdbp_include_post = $settings['bwdbp_include_posts'];
		$bwdbp_exclude_post = $settings['bwdbp_exclude_post'];
		$bwdbp_tags_filter = $settings['bwdbp_the_all_tags'];
		$bwdbp_post_format = $settings['bwdbp_the_all_post_formats'];
		
		$bwdbp_the_all_date = $settings['bwdbp_the_all_date'];
		$bwdbp_text_str = ' ';
		if('d' === $bwdbp_the_all_date){
			$bwdbp_coustom_day = $bwdbp_text_str;
			$bwdbp_coustom_month = $bwdbp_text_str;
			$bwdbp_coustom_year = $bwdbp_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bwdbp_the_all_date){
			$bwdbp_coustom_day = $bwdbp_text_str;
			$bwdbp_coustom_month = $bwdbp_text_str;
			$bwdbp_coustom_year = $bwdbp_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bwdbp_the_all_date){
			$bwdbp_coustom_day = $bwdbp_text_str;
			$bwdbp_coustom_month = $bwdbp_text_str;
			$bwdbp_coustom_year = $bwdbp_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bwdbp_the_all_date){
			$bwdbp_coustom_year = $settings['bwdbp_blog_coustom_year'];
			$bwdbp_coustom_month = $settings['bwdbp_blog_coustom_month'];
			$bwdbp_coustom_day = $settings['bwdbp_blog_coustom_day'];
			$wdbp_time = $bwdbp_text_str;
		} else{
			$bwdbp_coustom_day = $bwdbp_text_str;
			$bwdbp_coustom_month = $bwdbp_text_str;
			$bwdbp_coustom_year = $bwdbp_text_str;
			$wdbp_time = $bwdbp_text_str;
		}

		
		$bwdbp_args = array(
			'posts_per_page' => $bwdbp_post_per_page,
			'author__in'     => $bwdbp_author,
			'tag__in'        => $bwdbp_tags_filter,
			'category__in'   => $bwdbp_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $bwdbp_exclude_post,
			'orderby'        => $bwdbp_order_by,
			'order'   		 => $bwdbp_blog_order,
			'paged'          => $bwdbp_paged,
			'date_query'     => $wdbp_time,
			'year'           => $bwdbp_coustom_year,
			'monthnum'       => $bwdbp_coustom_month,
			'day'            => $bwdbp_coustom_day,
		);
		
		// Check the selected post source
		if ($bwdbp_the_blog_type === 'post') {
			$bwdbp_args['post_type'] = 'post';
		} elseif ($bwdbp_the_blog_type === 'page') {
			$bwdbp_args['post_type'] = 'page';
		} elseif ($bwdbp_the_blog_type === 'manual') {
			$bwdbp_include_post = $settings['bwdbp_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($bwdbp_include_post)) {
				$bwdbp_args['post__in'] = $bwdbp_include_post;
			} else {}
		}
		
		
		// Check if post format is set
		if (isset($bwdbp_post_format) && !empty($bwdbp_post_format)) {
			// Ensure post format has correct format without 'post-format-' prefix
			$post_format_slug = 'post-format-' . $bwdbp_post_format;
			// Add tax query for post format
			$bwdbp_args['tax_query'] = array(
				array(
					'taxonomy' => 'post_format',
					'field'    => 'slug',
					'terms'    => $post_format_slug,
				),
			);
		}
		$bwdbp_the_pagination_type = $settings['bwdbp_the_pagination_type'];
		$bwdbp_yes_value = 'yes';
		$bwdbp_blog_next_format = $settings['bwdbp_blog_next_format'];
		$bwdbp_blog_prev_format = $settings['bwdbp_blog_prev_format'];
		if($bwdbp_styles == 'style1' || $bwdbp_styles == 'style2'){
			if ( $bwdbp_styles ) {?>
				<div class="bwdbp_blogPost_<?php echo $bwdbp_styles ?> <?php echo $bwdbp_blog_add ?> bwdbp_for_nested">
					<div class="bwd-container-fluid">
						<div class="bwd-row bwdbp_gapr">
							<?php $wp_query = new \WP_Query( $bwdbp_args );
							if($wp_query->have_posts()) :
							while($wp_query->have_posts()) : $wp_query->the_post();
								echo '<div class="bwdbp_box_margin_cmn bwd-col-lg-4 bwd-col-md-6 bwd-col-sm-6 bwdbp_gapc column_number">';?>
									<div class="bwdbp_blog_box bwdbp_box_padding_cmn"> <?php
										if( $bwdbp_styles == 'style3' ){ include 'pgridtemplates/thumbnail-bg.php'; }
										if( $bwdbp_styles !== 'style3' ){ include 'pgridtemplates/thumbnail.php'; include 'pgridtemplates/post-bottom-part.php'; }
										if( $bwdbp_styles == 'style6' ){ include 'pgridtemplates/overlay-content.php'; }?>
									</div>
								</div>
							<?php endwhile; 
							// Post Pagination
							include 'pgridtemplates/pagination.php';
							endif;
							wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<?php
			}
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
	public function bwdbp_post_categories() {
        $bwdbp_categories_list = get_the_category_list(esc_html__(', ', 'creative-blog-post'));
        if ($bwdbp_categories_list) {
            echo $bwdbp_categories_list;
        }
    }
}
