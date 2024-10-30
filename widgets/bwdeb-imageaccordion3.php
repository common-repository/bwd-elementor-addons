<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_woociapImageAccordion extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bwdimageaccordion';
	}

	public function get_title() {
		return esc_html__( 'Product Image Accordion', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'product-img-accordion bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}

	public function get_keywords() {
		return [ 'image', 'accordion', 'bwd', 'hover' ];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'woociap_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'woociap_products_zone_style',
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
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/product-image-accordion" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woociap_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woociap_wrapper',
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
			'woociap_title',
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
			'woociap_title_link',
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
			'woociap_description',
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
			'woociap_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'woociap_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woociap_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_price',
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
			'woociap_date',
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
			'woociap_review',
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
			'woociap_review_star_number',
			[
				'label' => esc_html__( 'Star Number', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'woociap_review' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_sale',
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
			'woociap_sale_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sale:-', 'bwd-elementor-addons'),
				'condition' => [
					'woociap_sale' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_type',
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
			'woociap_type_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', 'bwd-elementor-addons'),
				'condition' => [
					'woociap_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woociap_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// =========================================
		$this->add_control(
			'woociap_cart_btn',
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
			'woociap_cart_type',
			[
				'label' => esc_html__( 'Select Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text',
				'options' => [
					'text' => esc_html__( 'Text', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'woociap_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_cart_button',
			[
				'label' => esc_html__('Cart Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'bwd-elementor-addons'),
				'condition' => [
					'woociap_cart_type' => 'text',
					'woociap_cart_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'woociap_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'woociap_cart_type' => 'icon',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'woociap_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'woociap_the_product_per_page',
			[
				'label' => esc_html__( 'Product Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		// For Author Filter
		$woociap_array = get_users();
		foreach ($woociap_array as $woociap_author){
			$woociap_id = $woociap_author->ID;
			$woociap_name = $woociap_author->display_name;
			$woociap_get_array[$woociap_id] = $woociap_name;
		}
		$this->add_control(
			'woociap_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => ['' => esc_html__( 'Select Author')]+$woociap_get_array,
			]
		);
		$this->add_control(
      'woociap_the_product_stock_or_not',
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
			'woociap_the_all_date',
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
			'woociap_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'woociap_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woociap_blog_coustom_month',
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
					'woociap_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woociap_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'woociap_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'woociap_the_order_by',
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
			'woociap_blog_order',
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
			'woociap_cat',
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
		function woociap_get_cat_terms_array( $tax = array( 'category' ), $return_key = 'slug' ) {
			$terms = array();
			$tax = is_array( $tax ) ? $tax : array( $tax ) ;

			foreach ( $tax as $key => $value ) {
				if ( ! taxonomy_exists( $value ) ) {
					unset( $tax[ $key ] );
				}
			}
			$all_woociap_terms = (array) get_terms( $tax, array(
				'hide_empty'   => 0,
				'hierarchical' => 0,
			) );

			if ( empty( $all_woociap_terms ) || is_wp_error( $all_woociap_terms ) ) {
				return '';
			}
			foreach ( $all_woociap_terms as $term ) {
				$terms[ $term->$return_key ] = $term->name;
			}
			return $terms;
		}
		// For product category showing
		$this->add_control(
			'woociap_the_cat_showing_columnsdd',
			[
				'label' => esc_html__( 'Display Category Select', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => esc_html__( 'Select Category', 'bwd-elementor-addons'),
				'condition' => [
					'woociap_cat' => 'yes',
				],
				'options' => ['' => esc_html__( 'Select Category')]+woociap_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		$this->add_control(
			'woociap_the_select_cat_columnsdd',
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
			'woociap_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woociap_the_select_cat_columnsdd' => 'all_cat',
				],
				'default' => 0,
				'options' => woociap_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		function woociap_get_tag_terms_array() {
			$tags = get_terms( 'product_tag' );
			if ( empty( $tags ) || ! is_array( $tags ) ) {
				return array();
			}
			return wp_list_pluck( $tags, 'name', 'slug' );
		}
		$this->add_control(
			'woociap_the_tag_columnsdd',
			[
				'label' => esc_html__( 'Filter Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'woociap_the_select_cat_columnsdd' => 'all_tags',
				],
				'default' => 0,
				'options' => woociap_get_tag_terms_array( array( 'product_tag' ) ),
			]
		);
		$this->end_controls_section();

		/**
		 * 
		 * @ Start style controls from here
		 * 
		 */

		 $this->start_controls_section(
			'woociap_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_title' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'woociap_title_alignment',
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
			'woociap_blog_title_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_title_typography',
				'selector' => '{{WRAPPER}} .woociap-title',
			]
		);
		$this->add_control(
			'woociap_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-title' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'woociap_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-title',
			]
		);
		$this->add_control(
			'woociap_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woociap_content_alignment',
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
		// Hover control start for box
		$this->start_controls_tabs(
			'woociap_blog_box_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woociap_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woociap-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woociap_blog_box_boxshadow',
				'label' => esc_html__( 'Content Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'woociap_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Shape', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-style-nine .woociap-content-box::after' => 'border-left: 55px solid {{VALUE}}',
					'condition' => [
						'woociap_select_style_selection' => 'nine',
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woociap_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woociap-style-one .woociap-prodRatingWrap, {{WRAPPER}} .woociap-content-box:hover::before, {{WRAPPER}} .woociap-style-ten .woociap-content-box:hover .woociap-prodRatingWrap::before, {{WRAPPER}} .woociap-style-fourteen .woociap-prodRatingWrap, {{WRAPPER}} .woociap-style-twelve .woociap-content-box::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woociap_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Wrap Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woociap_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_blog_description_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_description_typography',
				'selector' => '{{WRAPPER}} .woociap-prodDesc',
			]
		);
		$this->add_control(
			'woociap_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodDesc',
			]
		);
		$this->add_control(
			'woociap_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodDesc' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodDesc' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-prodDesc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-prodDesc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_button_style_section',
			[
				'label' => esc_html__( 'Action Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_cart_btn' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_blog_button_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_button_typography',
				'selector' => '{{WRAPPER}} .woociap-cartBtn',
			]
		);
		$this->add_control(
			'woociap_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-cartBtn',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-cartBtn:hover',
			]
		);
		$this->add_control(
			'woociap_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-cartBtn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-cartBtn:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'woociap_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-cartBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-cartBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_button_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-cartBtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'woociap_the_post_image_width_size',
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
					'{{WRAPPER}} .woociap-single-img img' => 'width: {{SIZE}}px',
					'{{WRAPPER}} .woociap-single-img img' => 'height: {{SIZE}}px',
				],
			]
		);
		$this->add_responsive_control(
            'woociap_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-single-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_caategory_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_cat' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_blog_caategory_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_caategory_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_caategory_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodCat a',
			]
		);
		$this->add_control(
			'woociap_blog_caategory_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_caategory_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_caategory_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_caategory_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodCat a',
			]
		);
		$this->add_control(
			'woociap_blog_caategory_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodCat a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_caategory_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodCat a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_caategory_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodCat a',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_blog_caategory_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_caategory_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_caategory_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodCat a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_price_options',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_price' => 'yes',
				],
			]
		);
		$this->add_control(
			'woociap_blog_new_price_options',
			[
				'label' => esc_html__( 'New Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// New Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woociap_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .woociap-salePrice',
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-salePrice:hover',
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-salePrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-salePrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-salePrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-salePrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		// Old Price
		$this->add_control(
			'woociap_blog_new_old_price_options',
			[
				'label' => esc_html__( 'Old Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'woociap_blog_taxonomy_old_price_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_taxonomy_old_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_taxonomy_old_price_typography',
				'selector' => '{{WRAPPER}} .woociap-regularPrice',
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_old_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_old_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_taxonomy_old_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_taxonomy_old_price_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-regularPrice:hover',
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_old_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_old_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-regularPrice:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'woociap_blog_old_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-regularPrice' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_old_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-regularPrice' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_taxonomy_old_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-regularPrice' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_sale_style_section',
			[
				'label' => esc_html__( 'Sale', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_sale' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_blog_sale_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_sale_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_sale_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount',
			]
		);
		$this->add_control(
			'woociap_blog_sale_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_sale_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_sale_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_sale_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodSaleCount',
			]
		);
		$this->add_control(
			'woociap_blog_sale_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodSaleCount' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_sale_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodSaleCount' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_sale_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_blog_sale_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_sale_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_sale_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodSaleCount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_date' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_blog_date_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_date_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-publishDate',
			]
		);
		$this->add_control(
			'woociap_blog_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_date_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-publishDate',
			]
		);
		$this->add_control(
			'woociap_blog_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-publishDate' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-publishDate' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_date_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-publishDate',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_blog_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-publishDate' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_type_style_section',
			[
				'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_type' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'woociap_blog_type_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_type_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_type_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodType',
			]
		);
		$this->add_control(
			'woociap_blog_type_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_type_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_type_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_blog_type_hover_typography',
				'selector' => '{{WRAPPER}} .woociap-content-box:hover .woociap-prodType',
			]
		);
		$this->add_control(
			'woociap_blog_type_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodType' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'woociap_blog_type_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-content-box:hover .woociap-prodType' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_type_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-content-box .woociap-prodType',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
            'woociap_blog_type_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_type_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_type_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-content-box .woociap-prodType' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'woociap_review' => 'yes',
				],
			]
		);
		// ============================================
		// Hover control start for box
		$this->start_controls_tabs(
			'woociap_blog_review_style_post'
		);
		$this->start_controls_tab(
			'woociap_blog_review_normal_post',
			[
				'label' => esc_html__( 'Icons', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'woociap_the_post_icon_size',
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
					'{{WRAPPER}} .woociap-prodRatingWrap  .woociap-star-rating' => 'font-size: {{SIZE}}px',
				],
			]
		);
		$this->add_control(
			'woociap_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodRatingWrap  .woociap-star-rating' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'woociap_blog_review_hover_tab',
			[
				'label' => esc_html__( 'Number', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'woociap_the_post_number_size',
				'selector' => '{{WRAPPER}} .woociap-prodRatingWrap  .make_a_star',
			]
		);
		$this->add_control(
			'woociap_blog_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .woociap-prodRatingWrap  .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		// ============================================
		$this->end_controls_section();

		$this->start_controls_section(
			'woociap_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'woociap_blog_box_Wrap_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .woociap-for-overlay:before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'woociap_blog_box2_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-single-img',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'woociap_blog_box2_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .woociap-single-img',
			]
		);
		$this->add_responsive_control(
            'woociap_blog_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-for-overlay:before, {{WRAPPER}} .woociap-single-img img, {{WRAPPER}} .woociap-single-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_the_boxL_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-single-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'woociap_blog_boxL_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .woociap-single-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$woociap_wrapper = $settings['woociap_wrapper'];
		$woociap_title = $settings['woociap_title'];
		$woociap_title_link = $settings['woociap_title_link'];
		$woociap_description_swtcher = $settings['woociap_description'];
		$woociap_cat = $settings['woociap_cat'];
		// ==================
		$woociap_products_style = $settings['woociap_products_zone_style'];
		$woociap_products_perpage = $settings['woociap_the_product_per_page'];
		$woociap_cat_showing_column = $settings['woociap_the_cat_showing_columnsdd'];
		$woociap_the_cat_product = $settings['woociap_the_cat_columnsdd'];
		$woociap_the_tag_product = $settings['woociap_the_tag_columnsdd'];
		$woociap_description_words = $settings['woociap_description_words'];
		$woociap_word_trim_indi = $settings['woociap_word_trim_indi'];
		$woociap_price = $settings['woociap_price'];
		$woociap_cart_btn = $settings['woociap_cart_btn'];
		$woociap_cart_type = $settings['woociap_cart_type'];
		$woociap_cart_button = $settings['woociap_cart_button'];
		$woociap_sale = $settings['woociap_sale'];
		$woociap_date = $settings['woociap_date'];
		$woociap_type = $settings['woociap_type'];

		$woociap_sale_label = $settings['woociap_sale_label'];
		$woociap_type_label = $settings['woociap_type_label'];

		$woociap_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$woociap_blog_order = $settings['woociap_blog_order'];
		$woociap_author = $settings['woociap_the_all_author'];
		$woociap_order_by = $settings['woociap_the_order_by'];
		
		$woociap_the_all_date = $settings['woociap_the_all_date'];
		if('d' === $woociap_the_all_date){
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $woociap_the_all_date){
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $woociap_the_all_date){
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $woociap_the_all_date){
			$woociap_coustom_year = $settings['woociap_blog_coustom_year'];
			$woociap_coustom_month = $settings['woociap_blog_coustom_month'];
			$woociap_coustom_day = $settings['woociap_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$woociap_coustom_day = $woociap_coustom_month = $woociap_coustom_year = $wdbp_time = '';
		}
		$woociap_cont_alignment = $settings['woociap_content_alignment'];
		if('left' === $woociap_cont_alignment):
			$woociap_cont_align = 'woociap_taxo_align_left woociap_taxo_align_left_j';
		elseif('center' === $woociap_cont_alignment):
			$woociap_cont_align = 'woociap_taxo_align_center woociap_taxo_align_center_j';
		elseif('right' === $woociap_cont_alignment):
			$woociap_cont_align = 'woociap_taxo_align_right woociap_taxo_align_right_j';
		else: $woociap_cont_align = ''; endif;
		if($settings['woociap_the_product_stock_or_not'] == 'instock'):
      $woociap_product_stock_check = 'instock';
      $woociap_product_compre_check = '=';
      elseif($settings['woociap_the_product_stock_or_not'] == 'outofstock'):
        $woociap_product_stock_check = 'outofstock';
        $woociap_product_compre_check = 'IN';
        elseif($settings['woociap_the_product_stock_or_not'] == 'both'):
          $woociap_product_stock_check = ['instock','outofstock'];
          $woociap_product_compre_check = 'IN';
        endif;
		$woociap_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $woociap_products_perpage,
			'product_cat'    => $woociap_the_cat_product,
			'product_tag'    => $woociap_the_tag_product,
			'author__in' => $woociap_author,
			'orderby'   => $woociap_order_by,
			'meta_query' => array(
        array(
          'key' => '_stock_status',
          'value' => $woociap_product_stock_check,
          'compare' => $woociap_product_compre_check,
        )
      ),
			'order' => $woociap_blog_order,
			'post_status' => 'publish',
			'paged' => $woociap_paged,
			'date_query' => $wdbp_time,
			'year' => $woociap_coustom_year,
			'monthnum' => $woociap_coustom_month,
			'day' => $woociap_coustom_day,
		);
		if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
			if($woociap_products_style == 1 || $woociap_products_style == 2){
				include( __DIR__ . '/wiatemplate/styles.php');
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
		else: echo '<a href="https://WordPress.org/plugins/WooCommerce/"><div class="woociap_wooc_not_acivate_notice">'.esc_html__('May be you are not installed/activated WooCommerce plugin.', 'bwd-elementor-addons').'</div></a>'; endif;
	}
}
