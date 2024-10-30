<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_ptnticker_newsticker_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'ptnticker-newsticker', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Post News Ticker', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-posts-ticker bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return ['bwdeb_post_category'];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'ptnticker_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		//Select Style
		$this->add_control(
			'ptnticker_select_style_selection',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'5' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'6' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'7' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'8' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'9' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'10' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'11' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'12' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'13' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
					'14' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
					'15' => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons' ),
					'16' => esc_html__( 'Style 16 (PRO)', 'bwd-elementor-addons' ),
					'17' => esc_html__( 'Style 17 (PRO)', 'bwd-elementor-addons' ),
					'18' => esc_html__( 'Style 18 (PRO)', 'bwd-elementor-addons' ),
					'19' => esc_html__( 'Style 19 (PRO)', 'bwd-elementor-addons' ),
					'20' => esc_html__( 'Style 20 (PRO)', 'bwd-elementor-addons' ),
					'21' => esc_html__( 'Style 21 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/news-ticker/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'ptnticker_title_link',
			[
				'label' => esc_html__( 'Title Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'ptnticker_title_tags',
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
		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_ticker_content',
			[
				'label' => esc_html__( 'Ticker Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'ptnticker_ticker_sticky_switcher',
			[
				'label' => esc_html__( 'Ticker Sticky', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'YES', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'NO', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'ptnticker_ticker_sticky_position',
			[
				'label' => esc_html__( 'Sticky Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bottom',
				'options' => [
					'bottom' => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'top' => esc_html__( 'Top', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
				],
			]
		);
		//top
		$this->add_responsive_control(
			'ptnticker_ticker_sticky_position_top',
			[
				'label' => esc_html__( 'Top Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'rem' => [
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
					'{{WRAPPER}} .ptnticker-ticker-common.sticky.top' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
					'ptnticker_ticker_sticky_position' => 'top',
				],
			]
		);
		//bottom
		$this->add_responsive_control(
			'ptnticker_ticker_sticky_position_bottom',
			[
				'label' => esc_html__( 'Bottom Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'rem' => [
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
					'{{WRAPPER}} .ptnticker-ticker-common.sticky.bottom' => 'bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
					'ptnticker_ticker_sticky_position' => 'bottom',
				],
			]
		);
		//width
		$this->add_responsive_control(
			'ptnticker_ticker_sticky_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'rem' => [
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
					'{{WRAPPER}} .ptnticker-width' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'ptnticker_ticker_sticky_switcher' => 'yes',
				],
			]
		);

		$this->add_control(
			'ptnticker_one_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		$this->add_control(
			'ptnticker_tag_switcher',
			[
				'label' => esc_html__( 'Heading?', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'YES', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'NO', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'ptnticker_ticker_title',
			[
				'label' => esc_html__( 'Heading Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Latest News', 'bwd-elementor-addons'),
				'label_block' => true,
				'condition' => [
					'ptnticker_tag_switcher' => 'yes',
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function ptnticker_get_all_post_types() {
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
				'options' => ptnticker_get_all_post_types(),
			]
		);

		// Add custom query to retrieve all authors
		function ptnticker_get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'ptnticker_the_all_author',
            [
                'label' => __( 'Select Authors', 'bwd-elementor-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => ptnticker_get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function ptnticker_get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'ptnticker_the_all_categories',
			[
				'label' => __( 'Select Categories', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function ptnticker_get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'ptnticker_the_all_tags',
			[
				'label' => __( 'Select Tags', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function ptnticker_get_all_post_formats() {
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
			'ptnticker_the_all_post_formats',
			[
				'label' => __( 'Post Formats', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function ptnticker_get_all_posts() {
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
			'ptnticker_include_posts',
			[
				'label' => __( 'Include Posts', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function ptnticker_get_all_post() {
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
			'ptnticker_exclude_post',
			[
				'label' => __( 'Exclude Posts', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => ptnticker_get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'ptnticker_the_all_date',
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
			'ptnticker_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'ptnticker_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'ptnticker_blog_coustom_month',
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
					'ptnticker_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'ptnticker_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'ptnticker_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'ptnticker_the_order_by',
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
			'ptnticker_blog_order',
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
			'ptnticker_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_catproduct_carousel',
			[
				'label' => esc_html__( 'Animation Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'ptnticker-ticker-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'ticker-id', 'bwd-elementor-addons' ),
			]
		);

		//popover-responsive-device
		$this->add_control(
			'ptnticker_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();
			$this->add_control(
				'ptnticker_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'ptnticker_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'ptnticker_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();

		//content amination
		$this->add_control(
			'ptnticker_content_effect',
			[
				'label'     => esc_html__('Effects Type', 'bwd-elementor-addons'),
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
				'default' => 'animate__slideInLeft',
			]
		);
		
		//infinite_loop_switcher
		$this->add_control(
			'ptnticker_infinite_autoplay_switcher',
			[
				'label' => esc_html__( 'Autoplay', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//infinite_loop_switcher
		$this->add_control(
			'ptnticker_infinite_loop_switcher',
			[
				'label' => esc_html__( 'Infinite Loop', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		//infinite_loop_switcher
		$this->add_control(
			'ptnticker_HoverPause_switcher',
			[
				'label' => esc_html__( 'Hover Pause', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'ptnticker_autoplay_timeout',
			[
				'label' => esc_html__( 'Autoplay TimeOut (ms)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100000,
				'step' => 1,
				'default' => 3000,
			]
		);

		$this->add_control(
			'ptnticker_autoplay_speed',
			[
				'label' => esc_html__( 'Autoplay Speeds (ms)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100000,
				'step' => 1,
				'default' => 2000,
			]
		);


		//popover-//Arrow Navigation
		$this->add_control(
			'ptnticker_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'ptnticker_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'ptnticker_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						//'text'  => esc_html__( 'Text', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'ptnticker_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'ptnticker_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'ptnticker_nav_type' => 'icon',
						'ptnticker_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'ptnticker_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'ptnticker_nav_type' => 'icon',
						'ptnticker_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();
		$this->end_controls_section();



		$this->start_controls_section(
			'ptnticker_tag_style',
			[
				'label' => esc_html__( 'Tag Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'ptnticker_tag_switcher' => 'yes'
				]
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'tag_style_tabs',
			[
				'separator' => 'before',
			]
		);
		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'tag_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'ptnticker_tag_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_tag_bgcolor',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-title, {{WRAPPER}} .ptnticker-title::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ptnticker_tag_typography',
				'selector' => '{{WRAPPER}} .ptnticker-title',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_tag_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-title',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_tag_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_tag_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-title',
			]
		);
		$this->add_responsive_control(
            'ptnticker_tag_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'ptnticker_tag_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'tag_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'ptnticker_tag_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_tag_bgcolor_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-title:hover, {{WRAPPER}} .ptnticker-title:hover::after',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_tag_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-title:hover',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_tag_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-title:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_tag_box-shadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-title:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();


		$this->end_controls_section();

		$this->start_controls_section(
			'ptnticker_ticker_content_style',
			[
				'label' => esc_html__( 'Ticker Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'ticker_content_style_tabs',
			[
				'separator' => 'before',
			]
		);
		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'ticker_content_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'ptnticker_ticker_content_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-headline' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ptnticker_ticker_content_typography',
				'selector' => '{{WRAPPER}} .ptnticker-headline',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_ticker_content_bgcolor',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_ticker_content_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_ticker_content_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-content-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_ticker_content_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap',
			]
		);
		$this->add_responsive_control(
            'ptnticker_ticker_content_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-items' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'ptnticker_ticker_content_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .ptnticker-items' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'ticker_content_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		$this->add_control(
			'ptnticker_ticker_content_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ptnticker-headline:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_ticker_content_bgcolor_hover',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap:hover',
			]
		);
		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_ticker_content_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap:hover',
			]
		);
		//Border Radius
		$this->add_responsive_control(
			'ptnticker_ticker_content_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ptnticker-content-wrap:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_ticker_content_box-shadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .ptnticker-content-wrap:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();


		$this->end_controls_section();


		$this->start_controls_section(
			'ptnticker_ticker_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'ptnticker_nav_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
            [
                'separator' => 'before',
            ]
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
			'ptnticker_arrow_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ' => 'color: {{VALUE}}',
				],
			]
		);

		//arrow-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_arrow_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon',
			]
		);

		//size
		$this->add_responsive_control(
			'ptnticker_arrow_size',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next svg' => 'inline-size: {{SIZE}}{{UNIT}}; block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'ptnticker_arrow_width',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i ' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'ptnticker_arrow_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i ' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_arrow_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'ptnticker_arrow_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_arrow_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i, {{WRAPPER}} .owl-nav button.owl-next i, {{WRAPPER}} .ptnticker-pn-icon ',
			]
		);

		//popover-//Arrow Navigation
		$this->add_control(
			'ptnticker_arrow_popover_style',
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
				'ptnticker_arrow_left_heading',
				[
					'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			//top
			$this->add_responsive_control(
				'ptnticker_arrow_left_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .owl-nav button.owl-prev' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'ptnticker_arrow_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .owl-nav button.owl-prev' => 'inset-inline-start: {{SIZE}}{{UNIT}};',
					],
				]
			);


			//right-arrow
			$this->add_control(
				'ptnticker_arrow_right_heading',
				[
					'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			//top
			$this->add_responsive_control(
				'ptnticker_arrow_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .owl-nav button.owl-next' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//right
			$this->add_responsive_control(
				'ptnticker_arrow_right_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .owl-nav button.owl-next' => 'inset-inline-end: {{SIZE}}{{UNIT}};',
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
			'ptnticker_arrow_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover' => 'color: {{VALUE}}',
				],
			]
		);

		//arrow-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ptnticker_arrow_background_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover',
			]
		);

		//size
		$this->add_responsive_control(
			'ptnticker_arrow_size_hover',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'ptnticker_arrow_width_hover',
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
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover ' => 'inline-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		//height
		$this->add_responsive_control(
			'ptnticker_arrow_height_hover',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover ' => 'block-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ptnticker_arrow_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'ptnticker_arrow_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ptnticker_arrow_box-shadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .owl-nav button.owl-prev i:hover, {{WRAPPER}} .owl-nav button.owl-next i:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();


	}
	

	protected function render(){
		$ptnticker_display = $this->get_settings_for_display();
		// for-owl-carousel-start
		$ptnticker_slide_mobile_view = $ptnticker_display['ptnticker_slide_mobile_view'];
		$ptnticker_slide_tablet_view = $ptnticker_display['ptnticker_slide_tablet_view'];
		$ptnticker_slide_desktop_view = $ptnticker_display['ptnticker_slide_desktop_view'];
		$ptnticker_content_effect = $ptnticker_display['ptnticker_content_effect'];
		$ptnticker_infinite_autoplay_switcher = $ptnticker_display['ptnticker_infinite_autoplay_switcher'];
		$ptnticker_infinite_loop_switcher = $ptnticker_display['ptnticker_infinite_loop_switcher'];
		$ptnticker_HoverPause_switcher = $ptnticker_display['ptnticker_HoverPause_switcher'];
		$ptnticker_autoplay_timeout = $ptnticker_display['ptnticker_autoplay_timeout'];
		$ptnticker_autoplay_speed = $ptnticker_display['ptnticker_autoplay_speed'];
		//nav--------------------------------------------------
		$ptnticker_nav_switcher = $ptnticker_display['ptnticker_nav_switcher'];
		$ptnticker_nav_type = $ptnticker_display['ptnticker_nav_type'];
		if( $ptnticker_nav_switcher == 'yes' ):
			if( $ptnticker_nav_type == 'icon' ):
				$prev = $ptnticker_display['ptnticker_nav_prev_arrow']['value'];
				$next = $ptnticker_display['ptnticker_nav_next_arrow']['value'];
			endif;
		endif;
		// for-owl-carousel-end
		$ptnticker_display['ptnticker_ticker_sticky_switcher'] == 'yes' ?  $sticky = 'sticky' : $sticky = '';


		// =========== wp Query
		$ptnticker_post_per_page = $ptnticker_display['ptnticker_the_post_per_page'];
		$ptnticker_categorys_dataa = $ptnticker_display['ptnticker_the_all_categories'];
		$ptnticker_the_blog_type = $ptnticker_display['selected_post_types'];
		$ptnticker_blog_order = $ptnticker_display['ptnticker_blog_order'];
		$ptnticker_author = $ptnticker_display['ptnticker_the_all_author'];
		$ptnticker_order_by = $ptnticker_display['ptnticker_the_order_by'];
		$ptnticker_include_post = $ptnticker_display['ptnticker_include_posts'];
		$ptnticker_exclude_post = $ptnticker_display['ptnticker_exclude_post'];
		$ptnticker_tags_filter = $ptnticker_display['ptnticker_the_all_tags'];
		$ptnticker_post_format = $ptnticker_display['ptnticker_the_all_post_formats'];
		
		$ptnticker_the_all_date = $ptnticker_display['ptnticker_the_all_date'];
		$ptnticker_text_str = ' ';
		if('d' === $ptnticker_the_all_date){
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $ptnticker_the_all_date){
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $ptnticker_the_all_date){
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $ptnticker_the_all_date){
			$ptnticker_coustom_year = $ptnticker_display['ptnticker_blog_coustom_year'];
			$ptnticker_coustom_month = $ptnticker_display['ptnticker_blog_coustom_month'];
			$ptnticker_coustom_day = $ptnticker_display['ptnticker_blog_coustom_day'];
			$wdbp_time = $ptnticker_text_str;
		} else{
			$ptnticker_coustom_day = $ptnticker_text_str;
			$ptnticker_coustom_month = $ptnticker_text_str;
			$ptnticker_coustom_year = $ptnticker_text_str;
			$wdbp_time = $ptnticker_text_str;
		}

		
		$ptnticker_args = array(
			'posts_per_page' => $ptnticker_post_per_page,
			'author__in'     => $ptnticker_author,
			'tag__in'        => $ptnticker_tags_filter,
			'category__in'   => $ptnticker_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $ptnticker_exclude_post,
			'orderby'        => $ptnticker_order_by,
			'order'   		 => $ptnticker_blog_order,
			'date_query'     => $wdbp_time,
			'year'           => $ptnticker_coustom_year,
			'monthnum'       => $ptnticker_coustom_month,
			'day'            => $ptnticker_coustom_day,
		);
		
		// Check the selected post source
		if ($ptnticker_the_blog_type === 'post') {
			$ptnticker_args['post_type'] = 'post';
		} elseif ($ptnticker_the_blog_type === 'page') {
			$ptnticker_args['post_type'] = 'page';
		} elseif ($ptnticker_the_blog_type === 'manual') {
			$ptnticker_include_post = $ptnticker_display['ptnticker_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($ptnticker_include_post)) {
				$ptnticker_args['post__in'] = $ptnticker_include_post;
			} else {}
		}

		if($ptnticker_display['ptnticker_select_style_selection'] == 1 || $ptnticker_display['ptnticker_select_style_selection'] == 2){
			echo '<div class="ptnticker-news-ticker-'.esc_attr($ptnticker_display['ptnticker_select_style_selection']).' ptnticker-ticker-common '.esc_attr($sticky).' '.esc_attr($ptnticker_display['ptnticker_ticker_sticky_position']).'" id="'.esc_attr( $ptnticker_display['ptnticker-ticker-custom-id'] ).'">';
			require 'ptnticker-variables.php';
				echo '<div class="ptnticker-width">';
				echo '<div class="ptnticker-content-wrap">';
				echo ('yes' === $ptnticker_display['ptnticker_tag_switcher'])?'<div class="ptnticker-title-box"><div class="ptnticker-title">'.esc_html($ptnticker_display['ptnticker_ticker_title']).'</div></div>':'';
				echo '<div class="ptnticker-slide-box">';
					echo '<div class="ptnticker-owl owl-carousel">';
					$wp_query = new \WP_Query($ptnticker_args);
					if($wp_query->have_posts()) :
						while($wp_query->have_posts()) : $wp_query->the_post();
						echo '<div class="ptnticker-headline-box">';
							echo '<div class="ptnticker-headline-items">';
								echo '<div class="ptnticker-items"><'.$ptnticker_display['ptnticker_title_tags'].' class="ptnticker-headline">';
									echo ('yes' === $ptnticker_display['ptnticker_title_link'])?'<a class="ptnticker-headline" href="'.get_the_permalink().'">'.get_the_title().'</a>':get_the_title();
								echo '</'.$ptnticker_display['ptnticker_title_tags'].'></div>';
							echo '</div>';
						echo '</div>';
						endwhile;
					endif;
					echo '</div>';
				echo '</div>';
			echo '</div>';
				echo '</div>';
			echo '</div>';
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}