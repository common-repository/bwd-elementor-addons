<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_WOOCPTMLNProductsTimelineWidget extends Widget_Base {

	public function get_name() {
		return esc_html__( 'WooCommerceProductsTimeline', 'bwd-elementor-addons');
	}
	public function get_title() {
		return esc_html__( 'Products Timeline', 'bwd-elementor-addons');
	}
	public function get_icon() {
		return 'product-timeline bwdeb-elementor-bundle';
	}
	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}

	public function get_keywords() {
		return [ 'timeline', 'bwd', 'text', 'product', 'p', 'woocommerce' ];
	}
	protected function register_controls() {
     // Timeline layout control section start
		$this->start_controls_section(
			'woocptmln_TL_presets',
			[
				'label' => esc_html__( 'Presets', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		//all timeline style
		$this->add_control(
			'woocptmln_TL_choose_design',
			[
				'label' => esc_html__( 'Choose Designs', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style1', 'bwd-elementor-addons'),
					'style2' => esc_html__( 'Style2', 'bwd-elementor-addons'),
					'style3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons'),
					'style4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons'),
					'style5' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons'),
					'style6' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons'),
					'style7' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons'),
					'style8' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons'),
					'style9' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons'),
					'style10' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons'),
					'style11' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons'),
					'style12' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons'),
					'style13' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons'),
					'style14' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons'),
					'style15' => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons'),
					'style16' => esc_html__( 'Style 16 (PRO)', 'bwd-elementor-addons'),
					'style17' => esc_html__( 'Style 17 (PRO)', 'bwd-elementor-addons'),
					'style18' => esc_html__( 'Style 18 (PRO)', 'bwd-elementor-addons'),
					'style19' => esc_html__( 'Style 19 (PRO)', 'bwd-elementor-addons'),
					'style20' => esc_html__( 'Style 20 (PRO)', 'bwd-elementor-addons'),
					'style21' => esc_html__( 'Style 21 (PRO)', 'bwd-elementor-addons'),
					'style22' => esc_html__( 'Style 22 (PRO)', 'bwd-elementor-addons'),
					'style23' => esc_html__( 'Style 23 (PRO)', 'bwd-elementor-addons'),
					'style24' => esc_html__( 'Style 24 (PRO)', 'bwd-elementor-addons'),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/product-timeline" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'woocptmln_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocptmln_wrapper',
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
			'woocptmln_title',
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
			'woocptmln_title_link',
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
			'woocptmln_description',
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
			'woocptmln_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'woocptmln_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptmln_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocptmln_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptmln_price',
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
			'woocptmln_date',
			[
				'label' => esc_html__( 'Publish Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'woocptmln_review',
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
			'woocptmln_review_star_number',
			[
				'label' => esc_html__( 'Star Number', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'woocptmln_review' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptmln_sale',
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
			'woocptmln_sale_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sale:-', 'bwd-elementor-addons'),
				'condition' => [
					'woocptmln_sale' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocptmln_type',
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
			'woocptmln_type_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', 'bwd-elementor-addons'),
				'condition' => [
					'woocptmln_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocptmln_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// =========================================
		$this->add_control(
			'woocptmln_cart_btn',
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
			'woocptmln_cart_type',
			[
				'label' => esc_html__( 'Select Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text',
				'options' => [
					'text' => esc_html__( 'Text', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'woocptmln_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptmln_cart_button',
			[
				'label' => esc_html__('Cart Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'bwd-elementor-addons'),
				'condition' => [
					'woocptmln_cart_type' => 'text',
					'woocptmln_cart_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woocptmln_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'woocptmln_cart_type' => 'icon',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woocptmln_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocptmln_the_product_per_page',
			[
				'label' => esc_html__( 'Product Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		// For Author Filter
		$woocptmln_array = get_users();
		foreach ($woocptmln_array as $woocptmln_author){
			$woocptmln_id = $woocptmln_author->ID;
			$woocptmln_name = $woocptmln_author->display_name;
			$woocptmln_get_array[$woocptmln_id] = $woocptmln_name;
		}
		$this->add_control(
			'woocptmln_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => ['' => esc_html__( 'Select Author')]+$woocptmln_get_array,
			]
		);
		$this->add_control(
      'woocptmln_the_product_stock_or_not',
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
			'woocptmln_the_all_date',
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
			'woocptmln_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocptmln_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_coustom_month',
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
					'woocptmln_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'woocptmln_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woocptmln_the_order_by',
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
			'woocptmln_blog_order',
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
			'woocptmln_cat',
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
		function woocptmln_get_cat_terms_array( $tax = array( 'category' ), $return_key = 'slug' ) {
			$terms = array();
			$tax = is_array( $tax ) ? $tax : array( $tax ) ;

			foreach ( $tax as $key => $value ) {
				if ( ! taxonomy_exists( $value ) ) {
					unset( $tax[ $key ] );
				}
			}
			$all_woocptmln_terms = (array) get_terms( $tax, array(
				'hide_empty'   => 0,
				'hierarchical' => 0,
			) );

			if ( empty( $all_woocptmln_terms ) || is_wp_error( $all_woocptmln_terms ) ) {
				return '';
			}
			foreach ( $all_woocptmln_terms as $term ) {
				$terms[ $term->$return_key ] = $term->name;
			}
			return $terms;
		}
		// For product category showing
		$this->add_control(
			'woocptmln_the_cat_showing_columnsdd',
			[
				'label' => esc_html__( 'Display Category Select', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => esc_html__( 'Select Category', 'bwd-elementor-addons'),
				'condition' => [
					'woocptmln_cat' => 'yes',
				],
				'options' => ['' => esc_html__( 'Select Category')]+woocptmln_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		$this->add_control(
			'woocptmln_the_select_cat_columnsdd',
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
			'woocptmln_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woocptmln_the_select_cat_columnsdd' => 'all_cat',
				],
				'default' => 0,
				'options' => woocptmln_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		function woocptmln_get_tag_terms_array() {
			$tags = get_terms( 'product_tag' );
			if ( empty( $tags ) || ! is_array( $tags ) ) {
				return array();
			}
			return wp_list_pluck( $tags, 'name', 'slug' );
		}
		$this->add_control(
			'woocptmln_the_tag_columnsdd',
			[
				'label' => esc_html__( 'Filter Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woocptmln_the_select_cat_columnsdd' => 'all_tags',
				],
				'default' => 0,
				'options' => woocptmln_get_tag_terms_array( array( 'product_tag' ) ),
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woocptmln_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'woocptmln-number-and-text',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'woocptmln-number-and-text' => esc_html__( 'Number and Text', 'bwd-elementor-addons' ),
					'number' => esc_html__( 'Number', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'woocptmln_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'crpt_taxo_align_center',
				'options' => [
					'crpt_taxo_align_left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'crpt_taxo_align_center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'crpt_taxo_align_right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'woocptmln_the_pagination_type' => ['woocptmln-number-and-text', 'number'],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'woocptmln_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocptmln_the_pagination_type' => 'woocptmln-number-and-text',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woocptmln_the_pagination_type' => 'woocptmln-number-and-text',
				],
			]
		);
		$this->end_controls_section(); 

		/**
		 * 
		 * @ Start style controls from here
		 * 
		 */

		 $this->start_controls_section(
			'woocptmln_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'woocptmln_title_alignment',
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
			'woocptmln_blog_title_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_title_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-title a, {{WRAPPER}} .woocptmln-timeline-title',
			]
		);
		$this->add_control(
			'woocptmln_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-title a, {{WRAPPER}} .woocptmln-timeline-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-title a, {{WRAPPER}} .woocptmln-timeline-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-timeline-title a',
			]
		);
		$this->add_control(
			'woocptmln_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-timeline-title a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-timeline-title a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocptmln_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-title a, {{WRAPPER}} .woocptmln-timeline-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-title a, {{WRAPPER}} .woocptmln-timeline-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-title a, {{WRAPPER}} .woocptmln-timeline-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocptmln_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'separator' => 'after',
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
				'toggle' => true,
				'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-for-content' => 'text-align: {{VALUE}};',
                    '{{WRAPPER}} .woocptmln-prodprice' => 'justify-content: {{VALUE}};',
                    '{{WRAPPER}} .woocptmln-prodRatingWrap' => 'justify-content: {{VALUE}};',
                ],
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'woocptmln_blog_box_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocptmln_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocptmln_blog_box_boxshadow',
				'label' => esc_html__( 'Content Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocptmln_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocptmln_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Wrap Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocptmln_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item-container .woocptmln-timeline-for-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptmln_blog_description_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_description_typography',
				'selector' => '{{WRAPPER}} .woocptmln-desc .woocptmln-timeline-desc',
			]
		);
		$this->add_control(
			'woocptmln_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-desc .woocptmln-timeline-desc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-desc .woocptmln-timeline-desc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-desc .woocptmln-timeline-desc',
			]
		);
		$this->add_control(
			'woocptmln_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-desc .woocptmln-timeline-desc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-desc .woocptmln-timeline-desc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocptmln_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-desc .woocptmln-timeline-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-desc .woocptmln-timeline-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_button_style_section',
			[
				'label' => esc_html__( 'Add To Cart Button Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_cart_btn' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptmln_blog_button_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_button_typography',
				'selector' => '{{WRAPPER}} .woocptmln-cartBtn',
			]
		);
		$this->add_control(
			'woocptmln_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-cartBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-cartBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-cartBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-cartBtn:hover',
			]
		);
		$this->add_control(
			'woocptmln_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-cartBtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-cartBtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-cartBtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woocptmln_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-cartBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_button_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-cartBtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woocptmln_the_post_image_width_size',
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
					'{{WRAPPER}} .attachment-woocommerce_thumbnail' => 'width: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .attachment-woocommerce_thumbnail' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_caategory_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_cat' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptmln_blog_caategory_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_caategory_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodCat a',
			]
		);
		$this->add_control(
			'woocptmln_blog_caategory_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodCat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodCat a',
			]
		);
		$this->add_control(
			'woocptmln_blog_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodCat a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_caategory_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodCat',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodCat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodCat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodCat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_price_options',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_price' => 'yes',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_new_price_options',
			[
				'label' => esc_html__( 'New Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// New Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocptmln_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .woocptmln-salePrice',
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-salePrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-salePrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-salePrice:hover',
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocptmln_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-salePrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-salePrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// Old Price
		$this->add_control(
			'woocptmln_blog_new_old_price_options',
			[
				'label' => esc_html__( 'Old Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woocptmln_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .woocptmln-regularPrice',
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-regularPrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-regularPrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-regularPrice:hover',
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-regularPrice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-regularPrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woocptmln_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-regularPrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-regularPrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-regularPrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_sale_style_section',
			[
				'label' => esc_html__( 'Sale', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_sale' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptmln_blog_sale_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_sale_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodSaleCount',
			]
		);
		$this->add_control(
			'woocptmln_blog_sale_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_sale_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_sale_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodSaleCount',
			]
		);
		$this->add_control(
			'woocptmln_blog_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_sale_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodSaleCount',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_sale_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodSaleCount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_sale_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodSaleCount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_date' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptmln_blog_date_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_date_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-timeline-date',
			]
		);
		$this->add_control(
			'woocptmln_blog_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-timeline-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-timeline-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_date_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-timeline-date',
			]
		);
		$this->add_control(
			'woocptmln_blog_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-timeline-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-timeline-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_date_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-timeline-date',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-timeline-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-timeline-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-timeline-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_type_style_section',
			[
				'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_type' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woocptmln_blog_type_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_type_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_type_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodType',
			]
		);
		$this->add_control(
			'woocptmln_blog_type_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_type_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_type_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodType',
			]
		);
		$this->add_control(
			'woocptmln_blog_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-item:hover .woocptmln-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_type_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodType',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_type_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodType' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_type_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodType' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_type_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item .woocptmln-prodType' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_review' => 'yes',
				],
			]
		);
		// ============================================
		// Hover control start for box
		$this->start_controls_tabs(
			'woocptmln_blog_review_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_review_normal_post',
			[
				'label' => esc_html__( 'Icons', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'woocptmln_the_post_icon_size',
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
					'{{WRAPPER}} .woocptmln-prodRatingWrap  .woocptmln-star-rating' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-prodRatingWrap  .woocptmln-star-rating' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_review_hover_tab',
			[
				'label' => esc_html__( 'Number', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_the_post_number_size',
				'selector' => '{{WRAPPER}} .woocptmln-prodRatingWrap  .make_a_star',
			]
		);
		$this->add_control(
			'woocptmln_blog_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-prodRatingWrap  .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		// ============================================
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'woocptmlnlkjhkl_blog_number_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-timeline-box-bgc-cmmn, {{WRAPPER}} .woocptmln-timeline-box-bgc-cmmn::before, {{WRAPPER}} .woocptmln-timeline-box-bgc-cmmn::after' => 'background: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woocptmln_blog_box_Wrap_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woocptmln-timeline-box-bgc-cmmn, {{WRAPPER}} .woocptmln-timeline-box-bgc-cmmn::before, {{WRAPPER}} .woocptmln-timeline-box-bgc-cmmn::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woocptmln_blog_box2_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_box2_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woocptmln-timeline-item',
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woocptmln_blog_boxL_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln-timeline-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		// timeline style tab
		$this->start_controls_section(
			'woocptmln_TL_styles',
			[
				'label' => esc_html__( 'Progress', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// progressbar
		$this->add_control(
			'woocptmln_TL_progressbar',
			[
				'label' => esc_html__( 'Progress Bar', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'woocptmln_TL_choose_design!' => ['style11','style12','style13','style14','style15','style16','style17']
				]
			]
		);
		//width
		$this->add_responsive_control(
			'woocptmln_TL_progressbar_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .woocptmln-pb-cmn,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::after,
					{{WRAPPER}} .woocptmln-pb-bg-cmn' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woocptmln_TL_choose_design!' => ['style10','style11','style12','style13','style14','style15','style16','style17']
				]
				
			]
		);
		// border -radius
		$this->add_responsive_control(
			'woocptmln_TL_progressbar_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .woocptmln-pb-cmn,
					{{WRAPPER}} .woocptmln-pb-bg-cmn,
					{{WRAPPER}} .woocptmln-pb-cmn-pseudo::before,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::after,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::before' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'woocptmln_TL_choose_design!' => ['style11','style12','style13','style14','style15','style16','style17']
				]
			]
		);
		//color 
		$this->add_control(
			'woocptmln_TL_progressbar_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-pb-cmn,
					{{WRAPPER}} .woocptmln-pb-cmn-pseudo::before' => 'background: {{VALUE}} !important;',
				],
				'condition' => [
					'woocptmln_TL_choose_design!' => [ 'style10','style11','style12','style13','style14','style15','style16','style17','style22']
				]
			]
		);
		//border color 
		$this->add_control(
			'woocptmln_TL_progressbar_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-pb-cmn,
					{{WRAPPER}} .woocptmln-pb-cmn-pseudo::before' => 'border-color: {{VALUE}} !important;',
				],
				'condition' => [
					'woocptmln_TL_choose_design!' => [ 'style1', 'style2','style3','style4','style5','style6','style7','style8','style9','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24'],
				]
			]
		);
		//bg color 
		$this->add_control(
			'woocptmln_TL_progressbar_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-pb-bg-cm,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::after' => 'background: {{VALUE}} !important;',
				],
				'condition' => [
					'woocptmln_TL_choose_design!' => [ 'style1', 'style2','style3','style4','style5','style6','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19'],
				]
			]
		);
		//bg border color 
		$this->add_control(
			'woocptmln_TL_progressbar_bg_border_color',
			[
				'label' => esc_html__( 'BG Border Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln-pb-bg-cmn,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::before,
					{{WRAPPER}} .woocptmln-pb-bg-cmn-pseudo::after' => 'border-color: {{VALUE}} !important;',
				],
				'condition' => [
					'woocptmln_TL_choose_design!' => [ 'style1','style2','style3','style4','style5','style7','style8','style9','style10','style11','style12','style13','style14','style15','style16','style17','style18','style19','style20','style21','style22','style23','style24'],
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'woocptmln_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woocptmln_the_pagination_type' => ['woocptmln-number-and-text', 'number'],
				],
			]
		);
		$this->add_responsive_control(
			'woocptmln_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Top Gap', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .woocptmln_pagination_item' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'woocptmln_blog_button_box_pagi_margin_right',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .woocptmln_pagination_item a:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .woocptmln_pagination_item span' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'woocptmln_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'woocptmln_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .woocptmln_pagination_item a',
			]
		);
		$this->add_control(
			'woocptmln_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woocptmln_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woocptmln_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .woocptmln_pagination_item span, {{WRAPPER}} .woocptmln_pagination_item a:hover',
			]
		);
		$this->add_control(
			'woocptmln_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln_pagination_item span, {{WRAPPER}} .woocptmln_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woocptmln_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woocptmln_pagination_item span, {{WRAPPER}} .woocptmln_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woocptmln_blog_the_pagination_page_border',
				'selector' => '{{WRAPPER}} .woocptmln_pagination_item a, {{WRAPPER}} .woocptmln_pagination_item span',
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_the_pagination_page_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln_pagination_item a, {{WRAPPER}} .woocptmln_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'woocptmln_blog_the_pagination_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .woocptmln_pagination_item a, {{WRAPPER}} .woocptmln_pagination_item span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'woocptmln_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woocptmln_pagination_item a, {{WRAPPER}} .woocptmln_pagination_item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings();
		$TL_chosen_style = $settings['woocptmln_TL_choose_design'];
		// column
		if(!empty($settings['woocptmln_TL_choose_col'])){
			$TL_col = $settings['woocptmln_TL_choose_col'];
		}
		$woocptmln_pagination_align = $settings['woocptmln_the_pagination_items_align'];
		$woocptmln_the_pagination_type = $settings['woocptmln_the_pagination_type'];
		$woocptmln_blog_next_format = $settings['woocptmln_blog_next_format'];
		$woocptmln_blog_prev_format = $settings['woocptmln_blog_prev_format'];

		// my
		$woocptmln_wrapper = $settings['woocptmln_wrapper'];
		$woocptmln_title = $settings['woocptmln_title'];
		$woocptmln_title_link = $settings['woocptmln_title_link'];
		$woocptmln_description_swtcher = $settings['woocptmln_description'];
		$woocptmln_cat = $settings['woocptmln_cat'];
		// ==================
		$woocptmln_products_perpage = $settings['woocptmln_the_product_per_page'];
		$woocptmln_cat_showing_column = $settings['woocptmln_the_cat_showing_columnsdd'];
		$woocptmln_the_cat_product = $settings['woocptmln_the_cat_columnsdd'];
		$woocptmln_the_tag_product = $settings['woocptmln_the_tag_columnsdd'];
		$woocptmln_description_words = $settings['woocptmln_description_words'];
		$woocptmln_word_trim_indi = $settings['woocptmln_word_trim_indi'];
		$woocptmln_price = $settings['woocptmln_price'];
		$woocptmln_cart_btn = $settings['woocptmln_cart_btn'];
		$woocptmln_cart_type = $settings['woocptmln_cart_type'];
		$woocptmln_cart_button = $settings['woocptmln_cart_button'];
		$woocptmln_sale = $settings['woocptmln_sale'];
		$woocptmln_date = $settings['woocptmln_date'];
		$woocptmln_type = $settings['woocptmln_type'];

		$woocptmln_cart_button_icon = $settings['woocptmln_cart_button_icon']['value'];

		$woocptmln_sale_label = $settings['woocptmln_sale_label'];
		$woocptmln_type_label = $settings['woocptmln_type_label'];

		$woocptmln_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$woocptmln_blog_order = $settings['woocptmln_blog_order'];
		$woocptmln_author = $settings['woocptmln_the_all_author'];
		$woocptmln_order_by = $settings['woocptmln_the_order_by'];
		
		$woocptmln_the_all_date = $settings['woocptmln_the_all_date'];
		
		if('d' === $woocptmln_the_all_date){
			$woocptmln_coustom_day = $woocptmln_coustom_month = $woocptmln_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $woocptmln_the_all_date){
			$woocptmln_coustom_day = $woocptmln_coustom_month = $woocptmln_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $woocptmln_the_all_date){
			$woocptmln_coustom_day = $woocptmln_coustom_month = $woocptmln_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $woocptmln_the_all_date){
			$woocptmln_coustom_year = $settings['woocptmln_blog_coustom_year'];
			$woocptmln_coustom_month = $settings['woocptmln_blog_coustom_month'];
			$woocptmln_coustom_day = $settings['woocptmln_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$woocptmln_coustom_day = $woocptmln_coustom_month = $woocptmln_coustom_year = $wdbp_time = '';
		}
		if($settings['woocptmln_the_product_stock_or_not'] == 'instock'):
      $woocptmln_product_stock_check = 'instock';
      $woocptmln_product_compre_check = '=';
      elseif($settings['woocptmln_the_product_stock_or_not'] == 'outofstock'):
        $woocptmln_product_stock_check = 'outofstock';
        $woocptmln_product_compre_check = 'IN';
        elseif($settings['woocptmln_the_product_stock_or_not'] == 'both'):
          $woocptmln_product_stock_check = ['instock','outofstock'];
          $woocptmln_product_compre_check = 'IN';
        endif;
        $woocptmln_args = array(
					'post_type'      => 'product',
					'posts_per_page' => $woocptmln_products_perpage,
					'product_cat'    => $woocptmln_the_cat_product,
					'product_tag'    => $woocptmln_the_tag_product,
					'author__in' => $woocptmln_author,
					'orderby'   => $woocptmln_order_by,
					'meta_query' => array(
						array(
							'key' => '_stock_status',
							'value' => $woocptmln_product_stock_check,
							'compare' => $woocptmln_product_compre_check,
						)
					),
					'order' => $woocptmln_blog_order,
					'post_status' => 'publish',
					'paged' => $woocptmln_paged,
					'date_query' => $wdbp_time,
					'year' => $woocptmln_coustom_year,
					'monthnum' => $woocptmln_coustom_month,
					'day' => $woocptmln_coustom_day,
        );
		if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
			if($TL_chosen_style == 'style1' || $TL_chosen_style == 'style2'){
				include( __DIR__ . '/all-styles/'.$TL_chosen_style.'.php');
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
		else: echo '<a href="https://WordPress.org/plugins/WooCommerce/"><div class="woocptmln_wooc_not_acivate_notice">'.esc_html__('May be you are not installed/activated WooCommerce plugin.', 'bwd-elementor-addons').'</div></a>'; endif;
	}
}


