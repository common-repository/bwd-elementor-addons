<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_WOOCPAAccordionCreatoR extends Widget_Base {

	public function get_name() {
		return esc_html__('WooCommerceProductAccordion', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Product Accordion', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle product-accordion';
	}

	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'woocpa_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'woocpa_products_zone_style',
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
					'22' => esc_html__( 'Style 22 (PRO)', 'bwd-elementor-addons' ),
					'23' => esc_html__( 'Style 23 (PRO)', 'bwd-elementor-addons' ),
					'24' => esc_html__( 'Style 24 (PRO)', 'bwd-elementor-addons' ),
					'25' => esc_html__( 'Style 25 (PRO)', 'bwd-elementor-addons' ),
					'26' => esc_html__( 'Style 26 (PRO)', 'bwd-elementor-addons' ),
					'27' => esc_html__( 'Style 27 (PRO)', 'bwd-elementor-addons' ),
					'28' => esc_html__( 'Style 28 (PRO)', 'bwd-elementor-addons' ),
					'29' => esc_html__( 'Style 29 (PRO)', 'bwd-elementor-addons' ),
					'30' => esc_html__( 'Style 30 (PRO)', 'bwd-elementor-addons' ),
					'31' => esc_html__( 'Style 31 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/product-accordion" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpa_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpa_image_link',
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
			'woocpa_icon',
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
			'woocpa_accordion_collapsed_icon',
			[
				'label' => esc_html__( 'Collapsed Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-down',
					'library' => 'solid',
				],
				'condition' => [
					'woocpa_icon' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpa_accordion_expand_icon',
			[
				'label' => esc_html__( 'Expand Icon', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-up',
					'library' => 'solid',
				],
				'condition' => [
					'woocpa_icon' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpa_description',
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
			'woocpa_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'woocpa_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpa_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocpa_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpa_price',
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
			'woocpa_date',
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
			'woocpa_review',
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
			'woocpa_review_star_number',
			[
				'label' => esc_html__( 'Star Number', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'woocpa_review' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpa_sale',
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
			'woocpa_sale_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sale:-', 'bwd-elementor-addons'),
				'condition' => [
					'woocpa_sale' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpa_type',
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
			'woocpa_type_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', 'bwd-elementor-addons'),
				'condition' => [
					'woocpa_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpa_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// =========================================
		$this->add_control(
			'woocpa_cart_btn',
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
			'woocpa_cart_type',
			[
				'label' => esc_html__( 'Select Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text',
				'options' => [
					'text' => esc_html__( 'Text', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'woocpa_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpa_cart_button',
			[
				'label' => esc_html__('Cart Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'bwd-elementor-addons'),
				'condition' => [
					'woocpa_cart_type' => 'text',
					'woocpa_cart_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocpa_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'woocpa_cart_type' => 'icon',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocpa_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocpa_the_product_per_page',
			[
				'label' => esc_html__( 'Product Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		// For Author Filter
		$woocpa_array = get_users();
		foreach ($woocpa_array as $woocpa_author){
			$woocpa_id = $woocpa_author->ID;
			$woocpa_name = $woocpa_author->display_name;
			$woocpa_get_array[$woocpa_id] = $woocpa_name;
		}
		$this->add_control(
			'woocpa_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => $woocpa_get_array,
			]
		);
		$this->add_control(
      'woocpa_the_product_stock_or_not',
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
			'woocpa_the_all_date',
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
			'woocpa_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocpa_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_coustom_month',
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
					'woocpa_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'woocpa_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocpa_the_order_by',
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
			'woocpa_blog_order',
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
			'woocpa_cat',
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
		function woocpa_get_cat_terms_array( $tax = array( 'category' ), $return_key = 'slug' ) {
			$terms = array();
			$tax = is_array( $tax ) ? $tax : array( $tax ) ;

			foreach ( $tax as $key => $value ) {
				if ( ! taxonomy_exists( $value ) ) {
					unset( $tax[ $key ] );
				}
			}
			$all_woocpa_terms = (array) get_terms( $tax, array(
				'hide_empty'   => 0,
				'hierarchical' => 0,
			) );

			if ( empty( $all_woocpa_terms ) || is_wp_error( $all_woocpa_terms ) ) {
				return '';
			}
			foreach ( $all_woocpa_terms as $term ) {
				$terms[ $term->$return_key ] = $term->name;
			}
			return $terms;
		}
		// For product category showing
		$this->add_control(
			'woocpa_the_cat_showing_columnsdd',
			[
				'label' => esc_html__( 'Display Category Select', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => esc_html__( 'Select Category', 'bwd-elementor-addons' ),
				'condition' => [
					'woocpa_cat' => 'yes',
				],
				'options' => [esc_html__( 'Select Category')]+woocpa_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		$this->add_control(
			'woocpa_the_select_cat_columnsdd',
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
			'woocpa_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woocpa_the_select_cat_columnsdd' => 'all_cat',
				],
				'default' => 0,
				'options' => woocpa_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		function woocpa_get_tag_terms_array() {
			$tags = get_terms( 'product_tag' );
			if ( empty( $tags ) || ! is_array( $tags ) ) {
				return array();
			}
			return wp_list_pluck( $tags, 'name', 'slug' );
		}
		$this->add_control(
			'woocpa_the_tag_columnsdd',
			[
				'label' => esc_html__( 'Filter Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woocpa_the_select_cat_columnsdd' => 'all_tags',
				],
				'default' => 0,
				'options' => woocpa_get_tag_terms_array( array( 'product_tag' ) ),
			]
		);
		$this->end_controls_section();

		/**
		 * 
		 * @ Start style controls from here
		 * 
		 */

		$this->start_controls_section(
			'woocpa_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocpa_title_alignment',
			[
				'label' => esc_html__( 'Title Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
		// Hover control start for title
		$this->start_controls_tabs(
			'woocpa_blog_title_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_title_typography',
				'selector' => '{{WRAPPER}} .woocpa-panel-title .woocpa-collapsed',
			]
		);
		$this->add_control(
			'woocpa_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-panel-title .woocpa-collapsed' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-panel-title .woocpa-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-panel-title .woocpa-collapsed',
			]
		);
		$this->add_control(
			'woocpa_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-panel-title .woocpa-collapsed' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-panel-title .woocpa-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpa_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-panel-title .woocpa-collapsed' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-panel-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-panel-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_icon_t_style_section',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_icon' => 'yes',
				],
			]
		);
		// Hover control start for icon_t
		$this->start_controls_tabs(
			'woocpa_blog_icon_t_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_icon_t_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'woocpa_the_title_icon_size',
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
					'{{WRAPPER}} .woocpa-panel-title .woocpa-colexp-icon' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_icon_t_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-panel-title .woocpa-colexp-icon' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_icon_t_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-panel-title .woocpa-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_icon_t_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_responsive_control(
			'woocpa_the_title_icon_hover_size',
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
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-panel-title .woocpa-colexp-icon' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_icon_t_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-panel-title .woocpa-colexp-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_icon_t_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-panel-title .woocpa-collapsed' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_pprroo_icon_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'separator' => 'before',
				'selector' => '{{WRAPPER}} .woocpa-collapsed',
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_icon_t_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-collapsed' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_icon_t_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-collapsed' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
	
		// Hover control start for box
		$this->start_controls_tabs(
			'woocpa_blog_box_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocpa_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocpa-prodCont',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocpa_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-prodCont',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-prodCont',
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-prodCont' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-prodCont' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-prodCont' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocpa_blog_box_bg_grediant_hover_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocpa-prodCont:hover',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocpa_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-prodCont:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-prodCont:hover',
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_the_box_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-prodCont:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpa_blog_description_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_description_typography',
				'selector' => '{{WRAPPER}} .woocpa-prodDesc',
			]
		);
		$this->add_control(
			'woocpa_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodDesc',
			]
		);
		$this->add_control(
			'woocpa_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpa_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-prodDesc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-prodDesc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_button_style_section',
			[
				'label' => esc_html__( 'Action Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_cart_btn' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpa_blog_button_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_button_typography',
				'selector' => '{{WRAPPER}} .woocpa-cartBtn',
			]
		);
		$this->add_control(
			'woocpa_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-cartBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-cartBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-cartBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-cartBtn:hover',
			]
		);
		$this->add_control(
			'woocpa_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-cartBtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-cartBtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-cartBtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocpa_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-cartBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_button_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-cartBtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocpa_the_post_image_width_size',
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
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-productImg img' => 'width: {{SIZE}}px',
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-productImg img' => 'height: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-productImg img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_caategory_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_cat' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpa_blog_caategory_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_caategory_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodCat',
			]
		);
		$this->add_control(
			'woocpa_blog_caategory_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodCat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodCat',
			]
		);
		$this->add_control(
			'woocpa_blog_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodCat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_caategory_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodCat',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodCat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodCat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodCat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_price_options',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_price' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_new_price_options',
			[
				'label' => esc_html__( 'New Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// New Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocpa_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .woocpa-salePrice',
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-salePrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-salePrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-salePrice:hover',
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpa_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-salePrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-salePrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// Old Price
		$this->add_control(
			'woocpa_blog_new_old_price_options',
			[
				'label' => esc_html__( 'Old Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocpa_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .woocpa-regularPrice',
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-regularPrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-regularPrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-regularPrice:hover',
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-regularPrice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-regularPrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocpa_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-regularPrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-regularPrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-regularPrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_sale_style_section',
			[
				'label' => esc_html__( 'Sale', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_sale' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpa_blog_sale_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_sale_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodSaleCount',
			]
		);
		$this->add_control(
			'woocpa_blog_sale_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_sale_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_sale_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodSaleCount',
			]
		);
		$this->add_control(
			'woocpa_blog_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_sale_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodSaleCount',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_sale_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodSaleCount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_sale_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodSaleCount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_date' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpa_blog_date_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_date_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-publishDate',
			]
		);
		$this->add_control(
			'woocpa_blog_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_date_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-publishDate',
			]
		);
		$this->add_control(
			'woocpa_blog_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_date_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-publishDate',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-publishDate' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-publishDate' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-publishDate' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_type_style_section',
			[
				'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_type' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocpa_blog_type_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_type_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_type_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodType',
			]
		);
		$this->add_control(
			'woocpa_blog_type_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_type_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_blog_type_hover_typography',
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodType',
			]
		);
		$this->add_control(
			'woocpa_blog_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default:hover .woocpa-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocpa_blog_type_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodType',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_type_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodType' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_type_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodType' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_type_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-Accordion-default .woocpa-prodType' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocpa_review' => 'yes',
				],
			]
		);
		// ============================================
		// Hover control start for box
		$this->start_controls_tabs(
			'woocpa_blog_review_style_post'
		);
		$this->start_controls_tab(
			'woocpa_blog_review_normal_post',
			[
				'label' => esc_html__( 'Icons', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'woocpa_the_post_icon_size',
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
					'{{WRAPPER}} .woocpa-prodRatingWrap  .woocpa-star-rating' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocpa_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-prodRatingWrap  .woocpa-star-rating' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocpa_blog_review_hover_tab',
			[
				'label' => esc_html__( 'Number', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocpa_the_post_number_size',
				'selector' => '{{WRAPPER}} .woocpa-prodRatingWrap  .make_a_star',
			]
		);
		$this->add_control(
			'woocpa_blog_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocpa-prodRatingWrap  .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		// ============================================
		$this->end_controls_section();

		$this->start_controls_section(
			'woocpa_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocpa_blog_box_Wrap_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocpa-panel-body',
			]
		);
		$this->add_responsive_control(
			'woocpa_products_gap',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .woocpa-Accordion-default' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_responsive_control(
            'woocpa_blog_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-panel-body' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocpa_blog_boxL_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocpa-panel-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$woocpa_image_link = $settings['woocpa_image_link'];
		$woocpa_icon = $settings['woocpa_icon'];
		$woocpa_description_swtcher = $settings['woocpa_description'];
		$woocpa_cat = $settings['woocpa_cat'];
		// ==================
		$woocpa_products_style = $settings['woocpa_products_zone_style'];
		$woocpa_products_perpage = $settings['woocpa_the_product_per_page'];
		$woocpa_cat_showing_column = $settings['woocpa_the_cat_showing_columnsdd'];
		$woocpa_the_cat_product = $settings['woocpa_the_cat_columnsdd'];
		$woocpa_the_tag_product = $settings['woocpa_the_tag_columnsdd'];
		$woocpa_description_words = $settings['woocpa_description_words'];
		$woocpa_word_trim_indi = $settings['woocpa_word_trim_indi'];
		$woocpa_price = $settings['woocpa_price'];
		$woocpa_cart_btn = $settings['woocpa_cart_btn'];
		$woocpa_cart_type = $settings['woocpa_cart_type'];
		$woocpa_cart_button = $settings['woocpa_cart_button'];
		$woocpa_sale = $settings['woocpa_sale'];
		$woocpa_date = $settings['woocpa_date'];
		$woocpa_type = $settings['woocpa_type'];


		$woocpa_sale_label = $settings['woocpa_sale_label'];
		$woocpa_type_label = $settings['woocpa_type_label'];


		$woocpa_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$woocpa_blog_order = $settings['woocpa_blog_order'];
		$woocpa_author = $settings['woocpa_the_all_author'];
		$woocpa_order_by = $settings['woocpa_the_order_by'];
		
		$woocpa_the_all_date = $settings['woocpa_the_all_date'];
	
		if('d' === $woocpa_the_all_date){
			$woocpa_coustom_day = $woocpa_coustom_month = $woocpa_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $woocpa_the_all_date){
			$woocpa_coustom_day = $woocpa_coustom_month = $woocpa_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $woocpa_the_all_date){
			$woocpa_coustom_day = $woocpa_coustom_month = $woocpa_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $woocpa_the_all_date){
			$woocpa_coustom_year = $settings['woocpa_blog_coustom_year'];
			$woocpa_coustom_month = $settings['woocpa_blog_coustom_month'];
			$woocpa_coustom_day = $settings['woocpa_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$woocpa_coustom_day = $woocpa_coustom_month = $woocpa_coustom_year = $wdbp_time = '';
		}
		
		if($settings['woocpa_the_product_stock_or_not'] == 'instock'):
      $woocpa_product_stock_check = 'instock';
      $woocpa_product_compre_check = '=';
      elseif($settings['woocpa_the_product_stock_or_not'] == 'outofstock'):
        $woocpa_product_stock_check = 'outofstock';
        $woocpa_product_compre_check = 'IN';
        elseif($settings['woocpa_the_product_stock_or_not'] == 'both'):
          $woocpa_product_stock_check = ['instock','outofstock'];
          $woocpa_product_compre_check = 'IN';
        endif;
        $woocpa_args = array(
            'post_type'      => 'product',
            'posts_per_page' => $woocpa_products_perpage,
            'product_cat'    => $woocpa_the_cat_product,
            'product_tag'    => $woocpa_the_tag_product,
			'author__in' => $woocpa_author,
			'orderby'   => $woocpa_order_by,
			'meta_query' => array(
        array(
          'key' => '_stock_status',
          'value' => $woocpa_product_stock_check,
          'compare' => $woocpa_product_compre_check,
        )
      ),
			'order' => $woocpa_blog_order,
			'post_status' => 'publish',
			'paged' => $woocpa_paged,
			'date_query' => $wdbp_time,
			'year' => $woocpa_coustom_year,
			'monthnum' => $woocpa_coustom_month,
			'day' => $woocpa_coustom_day,
        );
		if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
			if($woocpa_products_style == '1' || $woocpa_products_style == '2'){
				include( __DIR__ . '/wpacctemplate/the-styls-here.php');
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
		else: echo '<a href="https://WordPress.org/plugins/WooCommerce/"><div class="woocpa_wooc_not_acivate_notice">'.esc_html__('May be you are not installed/activated WooCommerce plugin.', 'bwd-elementor-addons').'</div></a>'; endif;
	}
}
