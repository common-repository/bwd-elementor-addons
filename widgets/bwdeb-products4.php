<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_WOOCPTProducts extends Widget_Base {

	public function get_name() {
		return esc_html__( 'WooCProductsTiles', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Products Tiles', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle product-tiles';
	}

	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'woocpt_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'woocpt_products_zone_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/product-tiles" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_responsive_control(
			'woocpt_products_gap',
			[
				'label' => esc_html__( 'Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocpt-main-wrapper' => 'gap: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpt_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpt_image_link',
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
			'woocpt_title',
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
			'woocpt_title_link',
			[
				'label' => esc_html__( 'Title Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'woocpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_title_tags',
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
				'condition' => [
					'woocpt_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_description',
			[
				'label' => esc_html__( 'Short Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'woocpt_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'woocpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocpt_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_price',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocpt_date',
			[
				'label' => esc_html__( 'Publish Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woocpt_review',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocpt_review_star_number',
			[
				'label' => esc_html__( 'Star Number', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'woocpt_review' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_sale',
			[
				'label' => esc_html__( 'Total Sale', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woocpt_sale_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sale:-', 'bwd-elementor-addons'),
				'condition' => [
					'woocpt_sale' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_type',
			[
				'label' => esc_html__( 'Product Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'woocpt_type_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', 'bwd-elementor-addons'),
				'condition' => [
					'woocpt_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpt_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// =========================================
		$this->add_control(
			'woocpt_cart_btn',
			[
				'label' => esc_html__( 'Cart Status', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'woocpt_cart_type',
			[
				'label' => esc_html__( 'Select Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text',
				'options' => [
					'text' => esc_html__( 'Text', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'woocpt_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_cart_button',
			[
				'label' => esc_html__('Cart Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'bwd-elementor-addons'),
				'condition' => [
					'woocpt_cart_type' => 'text',
					'woocpt_cart_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpt_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'woocpt_cart_type' => 'icon',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpt_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpt_the_product_per_page',
			[
				'label' => esc_html__( 'Product Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		// For Author Filter
		$woocpt_array = get_users();
		foreach ($woocpt_array as $woocpt_author){
			$woocpt_id = $woocpt_author->ID;
			$woocpt_name = $woocpt_author->display_name;
			$woocpt_get_array[$woocpt_id] = $woocpt_name;
		}
		$this->add_control(
			'woocpt_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => $woocpt_get_array,
			]
		);
		$this->add_control(
      'woocpt_the_product_stock_or_not',
      [
        'label' => esc_html__( 'Stock Check', 'bwd-elementor-addons' ),
        'type' => Controls_Manager::SELECT,
        'default' => 'both',
        'options' => [
          'both' => esc_html__( 'Both', 'bwd-elementor-addons' ),
          'outofstock' => esc_html__( 'Out of Stock', 'bwd-elementor-addons' ),
          'instock' => esc_html__( 'In Stock', 'bwd-elementor-addons' ),
        ],
      ]
    );
		$this->add_control(
			'woocpt_the_all_date',
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
			'woocpt_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_coustom_month',
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
					'woocpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'woocpt_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpt_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'author' => esc_html__( 'Author', 'bwd-elementor-addons' ),
					'title' => esc_html__( 'Title', 'bwd-elementor-addons' ),
					'meta_value_num' => esc_html__( 'Price', 'bwd-elementor-addons' ),
					'id' => esc_html__( 'ID', 'bwd-elementor-addons' ),
					'date' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'woocpt_blog_order',
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
			'woocpt_cat',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		// For product category filter
		function woocpt_get_cat_terms_array( $tax = array( 'category' ), $return_key = 'slug' ) {
			$terms = array();
			$tax = is_array( $tax ) ? $tax : array( $tax ) ;

			foreach ( $tax as $key => $value ) {
				if ( ! taxonomy_exists( $value ) ) {
					unset( $tax[ $key ] );
				}
			}
			$all_woocpt_terms = (array) get_terms( $tax, array(
				'hide_empty'   => 0,
				'hierarchical' => 0,
			) );

			if ( empty( $all_woocpt_terms ) || is_wp_error( $all_woocpt_terms ) ) {
				return '';
			}
			foreach ( $all_woocpt_terms as $term ) {
				$terms[ $term->$return_key ] = $term->name;
			}
			return $terms;
		}
		//=================================================//
		// For product category showing
		$this->add_control(
			'woocpt_the_cat_showing_columnsdd',
			[
				'label' => esc_html__( 'Display Category Select', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woocpt_cat' => 'yes',
				],
				'default' => 'Select a Display Category',
				'options' => woocpt_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		//=================================================//
		$this->add_control(
			'woocpt_the_select_cat_columnsdd',
			[
				'label' => esc_html__( 'Products Filter By', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all_filter',
				'options' => [
					'all_filter' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'all_cat' => esc_html__( 'By Category', 'bwd-elementor-addons' ),
					'all_tags' => esc_html__( 'By Tag', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'woocpt_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woocpt_the_select_cat_columnsdd' => 'all_cat',
				],
				'default' => 0,
				'options' => woocpt_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		function woocpt_get_tag_terms_array() {
			$tags = get_terms( 'product_tag' );
			if ( empty( $tags ) || ! is_array( $tags ) ) {
				return array();
			}
			return wp_list_pluck( $tags, 'name', 'slug' );
		}
		$this->add_control(
			'woocpt_the_tag_columnsdd',
			[
				'label' => esc_html__( 'Filter Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woocpt_the_select_cat_columnsdd' => 'all_tags',
				],
				'default' => 0,
				'options' => woocpt_get_tag_terms_array( array( 'product_tag' ) ),
			]
		);
	
		$this->end_controls_section();

		/**
		 * 
		 * @ Start style controls from here
		 * 
		 */

		$this->start_controls_section(
			'woocpt_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocpt_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
				'separator' => 'after',
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
		$this->add_responsive_control(
            'woocpt_blog_content_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-content-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_title' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'woocpt_blog_title_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_title_typography',
				'selector' => '{{WRAPPER}} .woocpt-title .woocpt-h2-title',
			]
		);
		$this->add_control(
			'woocpt_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-title .woocpt-h2-title',
			]
		);
		$this->add_control(
			'woocpt_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-title .woocpt-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_bottom_border_color',
			[
				'label' => esc_html__( 'Bottom Border', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'background-image: linear-gradient(to bottom,{{VALUE}} 0%,{{VALUE}} 98%);',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-title .woocpt-h2-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpt_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-title .woocpt-h2-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_blog_description_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_description_typography',
				'selector' => '{{WRAPPER}} .woocpt-desc p',
			]
		);
		$this->add_control(
			'woocpt_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-desc p',
			]
		);
		$this->add_control(
			'woocpt_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpt_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-desc p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-desc p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_button_style_section',
			[
				'label' => esc_html__( 'Actions Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_button_options',
			[
				'label' => esc_html__( 'Actions', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_blog_button_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_button_typography',
				'selector' => '{{WRAPPER}} .woocpt-cartbtn',
			]
		);
		$this->add_control(
			'woocpt_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-cartbtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-cartbtn:hover',
			]
		);
		$this->add_control(
			'woocpt_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-cartbtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-cartbtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocpt_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-cartbtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-cartbtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_button_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-cartbtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocpt_the_post_image_width_size',
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
					'{{WRAPPER}} .woocpt-img-wrapper img' => 'width: {{SIZE}}px',
					'{{WRAPPER}} .woocpt-img-wrapper img' => 'height: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'woocpt_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_caategory_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_cat' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_blog_caategory_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_caategory_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat',
			]
		);
		$this->add_control(
			'woocpt_blog_caategory_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-cat',
			]
		);
		$this->add_control(
			'woocpt_blog_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_caategory_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-cat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_price_options',
			[
				'label' => esc_html__( 'Price', 'creative-products' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_price' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_new_price_options',
			[
				'label' => esc_html__( 'New Price', 'creative-products' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Old Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocpt_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-products' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .woocpt-prival .woocpt-disprice',
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-disprice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-disprice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-products' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-prival .woocpt-disprice:hover',
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-disprice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-disprice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpt_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', 'creative-products'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-prival .woocpt-disprice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', 'creative-products'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-prival .woocpt-disprice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-products'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-prival .woocpt-disprice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// New Price
		$this->add_control(
			'woocpt_blog_new_old_price_options',
			[
				'label' => esc_html__( 'Old Price', 'creative-products' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocpt_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-products' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .woocpt-prival .woocpt-rootprice',
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-rootprice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-rootprice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-products' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-prival .woocpt-rootprice:hover',
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-rootprice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-prival .woocpt-rootprice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpt_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', 'creative-products'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-prival .woocpt-rootprice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', 'creative-products'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-prival .woocpt-rootprice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-products'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-prival .woocpt-rootprice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_sale_style_section',
			[
				'label' => esc_html__( 'Sale', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_sale' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_blog_sale_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_sale_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale',
			]
		);
		$this->add_control(
			'woocpt_blog_sale_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_sale_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_sale_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-total-sale',
			]
		);
		$this->add_control(
			'woocpt_blog_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_sale_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_sale_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_sale_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-total-sale' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_date' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_blog_date_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_date_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date',
			]
		);
		$this->add_control(
			'woocpt_blog_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_date_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-pub-date',
			]
		);
		$this->add_control(
			'woocpt_blog_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_date_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_blog_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-pub-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_type_style_section',
			[
				'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_type' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpt_blog_type_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_type_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_type_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type',
			]
		);
		$this->add_control(
			'woocpt_blog_type_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_type_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_blog_type_hover_typography',
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-product-type',
			]
		);
		$this->add_control(
			'woocpt_blog_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-product-type' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-img-wrapper:hover .woocpt-product-type' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_type_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpt_blog_type_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_type_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_type_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper .woocpt-product-type' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpt_review' => 'yes',
				],
			]
		);
		// ============================================
		// Hover control start for box
		$this->start_controls_tabs(
			'woocpt_blog_review_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_review_normal_post',
			[
				'label' => esc_html__( 'Icons', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'woocpt_the_post_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocpt-content-wrapper  .woocpt-star-rating' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocpt_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-content-wrapper  .woocpt-star-rating' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_review_hover_tab',
			[
				'label' => esc_html__( 'Number', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpt_the_post_number_size',
				'selector' => '{{WRAPPER}} .woocpt-content-wrapper  .make_a_star',
			]
		);
		$this->add_control(
			'woocpt_blog_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-content-wrapper  .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		// ============================================
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpt_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'woocpt_blog_box_style_post'
		);
		$this->start_controls_tab(
			'woocpt_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocpt_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper::before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocpt_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpt_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'woocpt_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpt-style-nine .woocpt-img-wrapper::after' => 'border-left: 55px solid {{VALUE}}',
					'condition' => [
						'woocpt_select_style_selection' => 'nine',
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocpt_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocpt-style-one .woocpt-content-wrapper, {{WRAPPER}} .woocpt-img-wrapper:hover::before, {{WRAPPER}} .woocpt-style-ten .woocpt-img-wrapper:hover .woocpt-content-wrapper::before, {{WRAPPER}} .woocpt-style-fourteen .woocpt-content-wrapper, {{WRAPPER}} .woocpt-style-twelve .woocpt-img-wrapper::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocpt_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpt_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpt-img-wrapper:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocpt_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpt_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpt-img-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$woocpt_image_link = $settings['woocpt_image_link'];
		$woocpt_title = $settings['woocpt_title'];
		$woocpt_title_link = $settings['woocpt_title_link'];
		$woocpt_title_tags = $settings['woocpt_title_tags'];
		$woocpt_description_swtcher = $settings['woocpt_description'];
		$woocpt_cat = $settings['woocpt_cat'];
		// ==================
		$woocpt_products_style = $settings['woocpt_products_zone_style'];
		$woocpt_products_perpage = $settings['woocpt_the_product_per_page'];
		$woocpt_cat_showing_column = $settings['woocpt_the_cat_showing_columnsdd'];
		$woocpt_the_cat_product = $settings['woocpt_the_cat_columnsdd'];
		$woocpt_the_tag_product = $settings['woocpt_the_tag_columnsdd'];
		$woocpt_description_words = $settings['woocpt_description_words'];
		$woocpt_word_trim_indi = $settings['woocpt_word_trim_indi'];
		$woocpt_price = $settings['woocpt_price'];
		$woocpt_cart_btn = $settings['woocpt_cart_btn'];
		$woocpt_cart_type = $settings['woocpt_cart_type'];
		$woocpt_cart_button = $settings['woocpt_cart_button'];
		$woocpt_sale = $settings['woocpt_sale'];
		$woocpt_date = $settings['woocpt_date'];
		$woocpt_type = $settings['woocpt_type'];

		$woocpt_sale_label = $settings['woocpt_sale_label'];
		$woocpt_type_label = $settings['woocpt_type_label'];

		$woocpt_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$woocpt_blog_order = $settings['woocpt_blog_order'];
		$woocpt_author = $settings['woocpt_the_all_author'];
		$woocpt_order_by = $settings['woocpt_the_order_by'];
		
		$woocpt_the_all_date = $settings['woocpt_the_all_date'];
		if('d' === $woocpt_the_all_date){
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $woocpt_the_all_date){
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $woocpt_the_all_date){
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $woocpt_the_all_date){
			$woocpt_coustom_year = $settings['woocpt_blog_coustom_year'];
			$woocpt_coustom_month = $settings['woocpt_blog_coustom_month'];
			$woocpt_coustom_day = $settings['woocpt_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$woocpt_coustom_day = $woocpt_coustom_month = $woocpt_coustom_year = $wdbp_time = '';
		}
		$woocpt_cont_alignment = $settings['woocpt_content_alignment'];
		if('left' === $woocpt_cont_alignment):
			$woocpt_cont_align = 'woocpt_taxo_align_left woocpt_taxo_align_left_j';
		elseif('center' === $woocpt_cont_alignment):
			$woocpt_cont_align = 'woocpt_taxo_align_center woocpt_taxo_align_center_j';
		elseif('right' === $woocpt_cont_alignment):
			$woocpt_cont_align = 'woocpt_taxo_align_right woocpt_taxo_align_right_j';
		else: $woocpt_cont_align = ''; endif;
		if($settings['woocpt_the_product_stock_or_not'] == 'instock'):
      $woocpt_product_stock_check = 'instock';
      $woocpt_product_compre_check = '=';
      elseif($settings['woocpt_the_product_stock_or_not'] == 'outofstock'):
        $woocpt_product_stock_check = 'outofstock';
        $woocpt_product_compre_check = 'IN';
        elseif($settings['woocpt_the_product_stock_or_not'] == 'both'):
          $woocpt_product_stock_check = ['instock','outofstock'];
          $woocpt_product_compre_check = 'IN';
        endif;
			$woocpt_args = array(
				'post_type'      => 'product',
				'posts_per_page' => $woocpt_products_perpage,
				'product_cat'    => $woocpt_the_cat_product,
				'product_tag'    => $woocpt_the_tag_product,
				'author__in' => $woocpt_author,
				'orderby'   => $woocpt_order_by,
				'meta_query' => array(
					array(
						'key' => '_stock_status',
						'value' => $woocpt_product_stock_check,
						'compare' => $woocpt_product_compre_check,
					)
				),
				'order' => $woocpt_blog_order,
				'post_status' => 'publish',
				'paged' => $woocpt_paged,
				'date_query' => $wdbp_time,
				'year' => $woocpt_coustom_year,
				'monthnum' => $woocpt_coustom_month,
				'day' => $woocpt_coustom_day,
			);
		if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
			if($woocpt_products_style == 'one' || $woocpt_products_style == 'two'){
				include( __DIR__ . '/wptithe_main/the-styls-here.php');
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
		else: echo '<a href="https://WordPress.org/plugins/WooCommerce/"><div class="woocpt_wooc_not_acivate_notice">'.esc_html__('May be you are not installed/activated WooCommerce plugin.', 'bwd-elementor-addons').'</div></a>'; endif;
	}
}