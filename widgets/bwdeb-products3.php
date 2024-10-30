<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_CRTPLSTProductsList extends Widget_Base {

	public function get_name() {
		return esc_html__( 'CreativeProductsList', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Creative Products List', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-productlist';
	}

	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}

	protected function crtplst_get_selected_products_options() {
		$args = array(
			'post_type'      => 'product',
			'posts_per_page' => -1,
		);

		$products = get_posts($args);

		$options = array();

		foreach ($products as $product) {
			$options[$product->ID] = $product->post_title;
		}

		return $options;
	}
	
	protected function crtplst_get_product_categories_options() {
		$categories = get_terms('product_cat', array('hide_empty' => false));

		$options = array();

		foreach ($categories as $category) {
			$options[$category->term_id] = $category->name;
		}

		return $options;
	}
	protected function crtplst_get_product_tags_options() {
		$tags = get_terms('product_tag', array('hide_empty' => false));

		$options = array();

		foreach ($tags as $tag) {
			$options[$tag->term_id] = $tag->name;
		}

		return $options;
	}

	protected function crtplst_get_product_types_options() {
		$product_types = get_terms('product_type', array('hide_empty' => false));

		$options = array();

		foreach ($product_types as $product_type) {
			$options[$product_type->slug] = $product_type->name;
		}

		return $options;
	}

	// Function to get all standard post statuses dynamically
	protected function crtplst_get_product_statuses_options() {
		$statuses = get_post_statuses();

		$options = array();

		foreach ($statuses as $status => $label) {
			$options[$status] = $label;
		}

		return $options;
	}

	protected function crtplst_get_product_orderby_options() {
		return apply_filters('crtp/product-grid/orderby-options', [
			'ID'         => esc_html__('Product ID', 'bwd-elementor-addons'),
			'title'      => esc_html__('Product Title', 'bwd-elementor-addons'),
			'_price'     => esc_html__('Price', 'bwd-elementor-addons'),
			'_sku'       => esc_html__('SKU', 'bwd-elementor-addons'),
			'date'       => esc_html__('Date', 'bwd-elementor-addons'),
			'modified'   => esc_html__('Last Modified Date', 'bwd-elementor-addons'),
			'parent'     => esc_html__('Parent ID', 'bwd-elementor-addons'),
			'rand'       => esc_html__('Random', 'bwd-elementor-addons'),
			'menu_order' => esc_html__('Menu Order', 'bwd-elementor-addons'),
			'comment_count' => esc_html__('Comment Count', 'bwd-elementor-addons'),
		]);
	}
	protected function crtplst_get_product_filter_options() {
		return apply_filters('crtp/product-grid/filter-options', [
			'recentlyadded'  => esc_html__('Latest Products', 'bwd-elementor-addons'),
			'featured'       => esc_html__('Featured Products', 'bwd-elementor-addons'),
			'onsale'         => esc_html__('On Sale Products', 'bwd-elementor-addons'),
			'instock'        => esc_html__('In Stock Products', 'bwd-elementor-addons'),
			'outofstock'     => esc_html__('Out of Stock Products', 'bwd-elementor-addons'),
			'toprated'       => esc_html__('Top Rated Products', 'bwd-elementor-addons'),
			'bestselling'    => esc_html__('Best Selling Products', 'bwd-elementor-addons'),
			'popularity'    => esc_html__('Popular Products', 'bwd-elementor-addons'),
			'recommended'    => esc_html__('Recommended Products', 'bwd-elementor-addons'),
			'cheapest'       => esc_html__('Cheapest Products', 'bwd-elementor-addons'),
			'lowstock'       => esc_html__('Low Stock Products', 'bwd-elementor-addons'),
			'expensive'      => esc_html__('Most Expensive Products', 'bwd-elementor-addons'),
			'manual'     	 => esc_html__('Manual Selection', 'bwd-elementor-addons'),
		]);
	}
	protected function register_controls() {
		$this->start_controls_section(
			'crtplst_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'crtplst_products_zone_style',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/creative-products-list" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_responsive_control(
			'crtplst_product_row_gap',
			[
				'label' => esc_html__( 'Row Gap', 'bwd-elementor-addons' ),
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
				// 'default' => [
				// 	'unit' => 'px',
				// 	'size' => 30,
				// ],
				'selectors' => [
					'{{WRAPPER}} .rows .crtplst_wrap:not(:last-child)' => 'margin-block-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'crtplst_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtplst_products_image_heading',
			[
				'label' => esc_html__( 'Featured Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
		$this->add_control(
			'crtplst_products_show_image',
			[
				'label' => esc_html__( 'Show Featured Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtplst_products_image_clickable',
			[
				'label' => esc_html__( 'Enable Clickable', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'crtplst_products_show_image' => 'yes',
				]
			]
		);

		$this->add_control(
			'crtplst_products_title_heading',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'crtplst_title',
			[
				'label' => esc_html__( 'Show Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtplst_title_tag',
			[
				'label' => esc_html__( 'HTML Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1' => esc_html__( 'H1', 'bwd-elementor-addons' ),
					'h2' => esc_html__( 'H2', 'bwd-elementor-addons' ),
					'h3' => esc_html__( 'H3', 'bwd-elementor-addons' ),
					'h4' => esc_html__( 'H4', 'bwd-elementor-addons' ),
					'h5' => esc_html__( 'H5', 'bwd-elementor-addons' ),
					'h6' => esc_html__( 'H6', 'bwd-elementor-addons' ),
					'div' => esc_html__( 'Div', 'bwd-elementor-addons' ),
					'span' => esc_html__( 'Span', 'bwd-elementor-addons' ),
					'p' => esc_html__( 'P', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'crtplst_title_enable_link',
			[
				'label' => esc_html__( 'Enable Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtplst_title_length',
			[
				'label' => __('Word Length', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$this->add_control(
			'crtplst_products_description_heading',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'crtplst_description',
			[
				'label' => esc_html__( 'Short Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtplst_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'crtplst_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtplst_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtplst_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtplst_price',
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
			'crtplst_review',
			[
				'label' => esc_html__( 'Rating', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtplst_review_count',
			[
				'label' => esc_html__( 'Review Count', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'crtplst_review' => 'yes',
				]
			]
		);
		$this->add_control(
			'crtplst_cat_show',
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
			'crtplst_tag_show',
			[
				'label' => esc_html__( 'Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'crtplst_total_sell',
			[
				'label' => esc_html__( 'Total Sell', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'crtplst_total_sell_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sell:-', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_total_sell' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'crtplst_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtplst_product_filter_by',
			[
				'label'    => esc_html__( 'Products Filter', 'bwd-elementor-addons' ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'recentlyadded',
				'options'  => $this->crtplst_get_product_filter_options(),
			]
		);

		$this->add_control(
			'crtplst_product_order_by',
			[
				'label'    => esc_html__( 'Order By', 'bwd-elementor-addons' ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'date',
				'options'  => $this->crtplst_get_product_orderby_options(),
			]
		);
		$this->add_control(
			'crtplst_product_order',
			[
				'label'   => esc_html__( 'Order', 'bwd-elementor-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'ASC',
				'options' => [
					'ASC'  => esc_html__( 'Ascending', 'bwd-elementor-addons' ),
					'DESC' => esc_html__( 'Descending', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'crtplst_the_product_per_page',
			[
				'label' 	  => esc_html__( 'Product Per Page', 'bwd-elementor-addons' ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 6,
				'min'         => 1,
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'crtplst_product_grid_products_status',
			[
				'label'    => esc_html__( 'Product Status', 'bwd-elementor-addons' ),
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options'  => $this->crtplst_get_product_statuses_options(),
			]
		);
		$this->add_control(
			'crtplst_selected_category',
			[
				'label'   => esc_html__( 'Select Category', 'bwd-elementor-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->crtplst_get_product_categories_options(array( 'product_cat' )),
			]
		);
		$this->add_control(
			'crtplst_selected_tags',
			[
				'label'   => esc_html__( 'Select Tags', 'bwd-elementor-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->crtplst_get_product_tags_options(),
			]
		);

		$this->add_control(
			'crtplst_selected_include_products',
			[
				'label'       => esc_html__( 'Include Products', 'bwd-elementor-addons' ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->crtplst_get_selected_products_options(),
				'condition'   => [
					'crtplst_product_filter_by' => 'manual',
				],
			]
		);
		$this->add_control(
			'crtplst_selected_exclude_products',
			[
				'label'       => esc_html__( 'Exclude Products', 'bwd-elementor-addons' ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->crtplst_get_selected_products_options(),
				'condition'   => [
					'crtplst_product_filter_by!' => 'manual',
				]
			]
		);
		$this->add_control(
			'crtplst_the_all_date',
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
			'crtplst_product_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'crtplst_product_coustom_month',
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
					'crtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'crtplst_product_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'crtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'crtplst_products_sale_stock_badge_section',
			[
				'label' => esc_html__( 'Sale / Stock Badge', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtplst_badge_style',
			[
				'label' => esc_html__( 'Select Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style2', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style3', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Style4', 'bwd-elementor-addons' ),
					'style5' => esc_html__( 'Style5', 'bwd-elementor-addons' ),
					'style6' => esc_html__( 'Style6', 'bwd-elementor-addons' ),
					'style7' => esc_html__( 'Style7', 'bwd-elementor-addons' ),
					'style8' => esc_html__( 'Style8', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'crtplst-badge-',
			]
		);
		$this->add_control(
			'crtplst_show_sale_badge',
			[
				'label' => esc_html__( 'Show Sale Badge', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'crtplst_sale_badge_type',
			[
				'label' => esc_html__( 'Select Sale Badge', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'percent',
				'options' => [
					'percent' => esc_html__( 'Percentage', 'bwd-elementor-addons' ),
					'text' => esc_html__( 'Sale Text', 'bwd-elementor-addons' )
				],
				'condition' => [
					'crtplst_show_sale_badge' => 'yes',
				]
			]
		);
		$this->add_control(
			'crtplst_sale_badge_before_percent_text',
			[
				'label' => esc_html__('Before Percentage Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'condition' => [
					'crtplst_show_sale_badge' => 'yes',
					'crtplst_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_sale_badge_after_percent_text',
			[
				'label' => esc_html__('After Percentage Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Off', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_show_sale_badge' => 'yes',
					'crtplst_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_sale_badge_text',
			[
				'label' => esc_html__('Sale Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Sale', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_show_sale_badge' => 'yes',
					'crtplst_sale_badge_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_show_stock_out_badge',
			[
				'label' => esc_html__( 'Stock Badge', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'crtplst_show_badge_stock_out_text',
			[
				'label' => esc_html__('Stock Out Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Stock Out', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_show_badge_stock_in_text',
			[
				'label' => esc_html__('In Stock Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', 'bwd-elementor-addons'),
				'description' => esc_html__('This field will be used if the product does not have a stock count number.', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_show_badge_stock_in_number_text',
			[
				'label' => esc_html__('In Stock Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', 'bwd-elementor-addons'),
				'description' => esc_html__('This field will be used only if the product has stock count number.', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_show_featured_badge',
			[
				'label' => esc_html__( 'Featured Badge', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'crtplst_show_badge_featured_text',
			[
				'label' => esc_html__('Featured Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Hot', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_show_featured_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_badge_one_position',
			[
				'label' => esc_html__( 'Badge Left/Right Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'left',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'crtplst_show_sale_badge' => 'yes',
				],
			]
		);

		$this->add_control(
			'crtplst_badge_order',
			[
				'label' => esc_html__( 'Badge Order', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'row',
				'options' => [
					'column' => esc_html__( 'Column', 'bwd-elementor-addons' ),
					'column-reverse' => esc_html__( 'Column Reverse', 'bwd-elementor-addons' ),
					'row' => esc_html__( 'Row', 'bwd-elementor-addons' ),
					'row-reverse' => esc_html__( 'Row Reverse', 'bwd-elementor-addons' ),
				],
				'selectors' => [
					'{{WRAPPER}} .crtplst-sale-featured-badge' => 'flex-direction: {{VALUE}};',
				],
				'condition' => [
					'crtplst_show_featured_badge' => 'yes',
					'crtplst_show_sale_badge' => 'yes',
				],
			]
		);
		
		$this->end_controls_section(); 

		$this->start_controls_section(
			'crtplst_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtplst_cart_btn',
			[
				'label' => esc_html__( 'Cart Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtplst_the_cart_type',
			[
				'label' => esc_html__( 'Button Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'cart',
				'options' => [
					'cart' => esc_html__( 'Cart Button', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
					'buy' => esc_html__( 'Buy Now', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'crtplst_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtplst_cart_button',
			[
				'label' => esc_html__('Cart Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_cart_btn' => 'yes',
					'crtplst_the_cart_type' => 'cart',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtplst_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'crtplst_cart_btn' => 'yes',
					'crtplst_the_cart_type' => 'icon',
				],
			]
		);
		$this->add_control(
			'crtplst_details_btn_text',
			[
				'label' => esc_html__('Details Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', 'bwd-elementor-addons'),
				'condition' => [
					'crtplst_cart_btn' => 'yes',
					'crtplst_the_cart_type' => 'buy',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'crtplst_product_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtplst_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'crtplst-number-and-text',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'crtplst-number-and-text' => esc_html__( 'Number and Text', 'bwd-elementor-addons' ),
					'number' => esc_html__( 'Number', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'crtplst_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'center',
				'options' => [
					'srart' => [
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
					'{{WRAPPER}} .crtplst_pagination_item .page-numbers' => 'justify-content: {{VALUE}};',
				],
				'condition' => [
					'crtplst_the_pagination_type' => ['crtplst-number-and-text', 'number'],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'crtplst_product_next_format',
			[
				'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtplst_the_pagination_type' => 'crtplst-number-and-text',
				],
			]
		);
		$this->add_control(
			'crtplst_product_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtplst_the_pagination_type' => 'crtplst-number-and-text',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'crtplst_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .crtplst_product_bottom_part' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .crtplst_product_meta' => 'justify-content: {{VALUE}};',
					'{{WRAPPER}} .crtplst_product_price' => 'justify-content: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
            'crtplst_product_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_bottom_part' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_the_box_content_border_radius',
            [
                'label' => esc_html__('Content Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_bottom_part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtplst_title' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'crtplst_product_title_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_title_typography',
				'selector' => '{{WRAPPER}} .crtplst_title',
			]
		);
		$this->add_control(
			'crtplst_product_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_product_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_product_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_title_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst_product_box:hover .crtplst_title',
			]
		);
		$this->add_control(
			'crtplst_product_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtplst_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtplst_product_description_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_description_typography',
				'selector' => '{{WRAPPER}} .crtplst_desce',
			]
		);
		$this->add_control(
			'crtplst_product_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_product_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_desce' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_desce' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_product_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_description_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst_product_box:hover .crtplst_desce',
			]
		);
		$this->add_control(
			'crtplst_product_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_button_style_section',
			[
				'label' => esc_html__( 'Action Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'crtplst_product_button_options',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtplst_product_button_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_button_typography',
				'selector' => '{{WRAPPER}} .crtplst_button, {{WRAPPER}} .crtplst_button a, {{WRAPPER}} .crtplst_button i',
			]
		);
		$this->add_control(
			'crtplst_product_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_button, {{WRAPPER}} .crtplst_button a, {{WRAPPER}} .crtplst_button i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtplst_product_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crtplst_product_bttn .crtplst_button, {{WRAPPER}} .crtplst_productList_4 .crtplst_product_meta',
			]
		);
		$this->add_responsive_control(
            'crtplst_product_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_button, {{WRAPPER}} .crtplst_product_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'crtplst_product_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_button' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_button_icon_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_bttn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_product_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_button_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst_button:hover, {{WRAPPER}} .crtplst_button:hover a',
			]
		);
		$this->add_control(
			'crtplst_product_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_button:hover, {{WRAPPER}} .crtplst_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_button:hover, {{WRAPPER}} .crtplst_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtplst_product_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crtplst_product_bttn .crtplst_button:hover, {{WRAPPER}} .crtplst_productList_4 .crtplst_product_meta:hover',
			]
		);
		$this->add_responsive_control(
            'crtplst_product_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_button:hover, {{WRAPPER}} .crtplst_product_bttn:hover, {{WRAPPER}} .crtplst_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'crtplst_the_post_image_height_size',
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
					'{{WRAPPER}} .crtplst_product_image' => 'block-size: {{SIZE}}{{UNIT}}% !important; inline-size: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'crtplst_product_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overly', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_image_overly_b::before, {{WRAPPER}} .crtplst_image_overly_a::after, {{WRAPPER}} .crtplst_productList_list_40 .crtplst_product_bottom_part::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_button_icon_overly_color',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_overlay_icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtplst_style_selection' => ['style4', 'style5', 'style24'],
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_product_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_productList_list_32 .crtplst_product_image, {{WRAPPER}} .crtplst_product_image img, {{WRAPPER}} .crtplst_product_image, {{WRAPPER}} .crtplst_product_image::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		// Price Styling
		$this->start_controls_section(
			'crtplst_blog_price_options',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtplst_price' => 'yes',
				],
			]
		);

		$this->add_control(
			'crtplst_price_between_gap',
			[
				'label' => esc_html__( 'Between Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_price' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Sale Price
		$this->add_control(
			'crtplst_blog_regular_sale_price_options',
			[
				'label' => esc_html__( 'Sale Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'crtplst_blog_taxonomy_sale_price_style_post'
		);
		$this->start_controls_tab(
			'crtplst_blog_taxonomy_sale_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_blog_taxonomy_sale_price_typography',
				'selector' => '{{WRAPPER}} .crtplst-current-price span bdi',
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_sale_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-current-price span bdi, {{WRAPPER}} .crtplst-current-price' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_sale_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-current-price span bdi' => 'background: {{VALUE}}!important',
				],
			]
		);

		$this->add_responsive_control(
            'crtplst_blog_sale_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst-current-price span bdi' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_blog_sale_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst-current-price' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_blog_taxonomy_sale_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst-current-price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_blog_taxonomy_sale_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_blog_taxonomy_sale_price_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst-current-price:hover span bdi',
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_sale_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-current-price:hover span bdi, {{WRAPPER}} .crtplst-current-price:hover' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_sale_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-current-price:hover span bdi' => 'background: {{VALUE}}!important',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		// Regular Price
		$this->add_control(
			'crtplst_blog_regular_price_options',
			[
				'label' => esc_html__( 'Regular Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'crtplst_blog_taxonomy_regular_price_style_post'
		);
		$this->start_controls_tab(
			'crtplst_blog_taxonomy_regular_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_blog_taxonomy_regular_price_typography',
				'selector' => '{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price del span bdi, {{WRAPPER}} .crtplst-regular-price.crtplst-sale-price, {{WRAPPER}} .crtplst_product_price span bdi', 
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_regular_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price del span bdi, {{WRAPPER}} .crtplst-regular-price.crtplst-sale-price, {{WRAPPER}} .crtplst_product_price span bdi, {{WRAPPER}} .crtplst_product_price, {{WRAPPER}} .crtplst_product_price span bdi' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_regular_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price, {{WRAPPER}} .crtplst_product_price span bdi' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_blog_regular_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price, {{WRAPPER}} .crtplst_product_price span bdi' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_blog_regular_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price, {{WRAPPER}} .crtplst_product_price' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_blog_taxonomy_regular_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price, {{WRAPPER}} .crtplst_product_price, {{WRAPPER}} .crtplst_product_price span bdi' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_blog_taxonomy_regular_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_blog_taxonomy_regular_price_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price:hover del span bdi, {{WRAPPER}} .crtplst-regular-price.crtplst-sale-price:hover',
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_regular_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price:hover del span bdi, {{WRAPPER}} .crtplst-regular-price.crtplst-sale-price:hover, {{WRAPPER}} .crtplst_product_price span bdi:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_blog_taxonomy_regular_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst-regular-price.crtplst-sale-price:hover, {{WRAPPER}} .crtplst_product_price span bdi:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_comment_options',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtplst_review' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'crtplst_product_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .crtplst_product_comment, {{WRAPPER}} .crtplst_product_comment a, {{WRAPPER}} .crtplst_product_comment .crtplst_icons',
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_comment, {{WRAPPER}} .crtplst_product_comment a, {{WRAPPER}} .crtplst_product_comment .crtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_comment, {{WRAPPER}} .crtplst_product_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_product_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_product_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment a, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment .crtplst_icons',
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment a, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment .crtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_product_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtplst_product_comment_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_comment' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_comment_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_comment' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_tags_options',
			[
				'label' => esc_html__( 'Sale', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtplst_sale' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'crtplst_product_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .crtplst_product_tag, {{WRAPPER}} .crtplst_product_tag a, {{WRAPPER}} .crtplst_product_tag .crtplst_icons',
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_tag, {{WRAPPER}} .crtplst_product_tag a, {{WRAPPER}} .crtplst_product_tag .crtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_product_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_tag_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_tag' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_product_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag a, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag .crtplst_icons',
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag a, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag .crtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtplst_product_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_box:hover .crtplst_product_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'crtplst_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_tag' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_categories_options',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'crtplst_product_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .crtplst_category li, {{WRAPPER}} .crtplst_category li a, {{WRAPPER}} .crtplst_category .crtplst_icons',
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_category li, {{WRAPPER}} .crtplst_category li a, {{WRAPPER}} .crtplst_category .crtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .crtplst_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_category li a, {{WRAPPER}} .crtplst_category li, {{WRAPPER}} .crtplst_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .crtplst_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_product_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .crtplst_category li:hover, {{WRAPPER}} .crtplst_category:hover li a, {{WRAPPER}} .crtplst_category:hover .crtplst_icons',
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_product_box .crtplst_category li:hover, {{WRAPPER}} .crtplst_product_box:hover .crtplst_category li a, {{WRAPPER}} .crtplst_product_box:hover .crtplst_category li .crtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_category li a:hover, {{WRAPPER}} .crtplst_product_box .crtplst_category li:hover, {{WRAPPER}} .crtplst_product_box .crtplst_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .crtplst_product_box:hover .crtplst_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'crtplst_product_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_category li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_category li a' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_category li a' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'crtplst_product_box_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'crtplst_product_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_productList_list_40 .crtplst_product_box, {{WRAPPER}} .crtplst_n_bg_b:before, {{WRAPPER}} .crtplst_n_bg, {{WRAPPER}} .crtplst_box_style_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'crtplst_product_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .crtplst_productList_list_40 .crtplst_product_box, {{WRAPPER}} .crtplst_g_bg_b:before, {{WRAPPER}} .crtplst_g_bg, {{WRAPPER}} .crtplst_box_style_cmn, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'crtplst_product_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crtplst_g_bg_b:before, {{WRAPPER}} .crtplst_box_sha, {{WRAPPER}} .crtplst_box_style_cmn, {{WRAPPER}} .crtplst_product_box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtplst_product_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'crtplst_product_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_productList_list_40 .crtplst_product_box:hover, {{WRAPPER}} .crtplst_n_bg_b:hover:before, {{WRAPPER}} .crtplst_n_bg:hover, {{WRAPPER}} .crtplst_box_style_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'crtplst_product_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .crtplst_productList_list_40 .crtplst_product_box:hover, {{WRAPPER}} .crtplst_g_bg_b:hover:before, {{WRAPPER}} .crtplst_g_bg:hover, {{WRAPPER}} .crtplst_box_style_cmn:hover, {{WRAPPER}} .crtplst_product_box:hover .crtplst_product_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'crtplst_product_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crtplst_product_box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtplst_product_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crtplst_product_box',
			]
		);
		$this->add_responsive_control(
            'crtplst_product_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_product_box' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_box_padding_cmn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtplst_product_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtplst_the_pagination_type' => ['crtplst-number-and-text', 'number'],
				],
			]
		);
		$this->add_responsive_control(
			'crtplst_product_button_box_pagi_margin_top',
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
					'{{WRAPPER}} .crtplst_pagination_item .page-numbers' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'crtplst_product_pagination_style_post'
		);
		$this->start_controls_tab(
			'crtplst_product_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtplst_product_pagination_typography',
				'selector' => '{{WRAPPER}} .crtplst_pagination_item ul li a, {{WRAPPER}} .crtplst_pagination_item ul li span',
			]
		);
		$this->add_control(
			'crtplst_product_pagination_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_pagination_item a, {{WRAPPER}} .crtplst_pagination_item ul li span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtplst_product_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_pagination_item a, {{WRAPPER}} .crtplst_pagination_item ul li span' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtplst_product_the_pagination_border',
				'selector' => '{{WRAPPER}} .crtplst_pagination_item span, {{WRAPPER}} .crtplst_pagination_item a',
			]
		);

		$this->add_responsive_control(
            'crtplst_product_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_pagination_item a, {{WRAPPER}} .crtplst_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_the_pagination_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_pagination_item span, {{WRAPPER}} .crtplst_pagination_item a' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtplst_product_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtplst_pagination_item' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_tab();

		// Hover + Active 
		$this->start_controls_tab(
			'crtplst_product_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'crtplst_product_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_pagination_item span, {{WRAPPER}} .crtplst_pagination_item a:hover' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'crtplst_product_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtplst_pagination_item span, {{WRAPPER}} .crtplst_pagination_item a:hover' => 'background: {{VALUE}}!important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtplst_product_the_pagination_border_active',
				'selector' => '{{WRAPPER}} .crtplst_pagination_item ul li span.page-numbers.current, {{WRAPPER}} .crtplst_pagination_item a:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$crtplst_products_style = $settings['crtplst_products_zone_style'];
		$crtplst_title_tag = $settings['crtplst_title_tag'];
		$crtplst_title_link = $settings['crtplst_title_enable_link'];
		$crtplst_title_length = $settings['crtplst_title_length'];
		$crtplst_featured_image = $settings['crtplst_products_show_image'];
		$crtplst_image_link_enabled = $settings['crtplst_products_image_clickable'];
		$crtplst_review_count = $settings['crtplst_review_count'];
		$crtplst_badge_one_position = $settings['crtplst_badge_one_position'];
		$crtplst_show_sale_badge = $settings['crtplst_show_sale_badge'];
		$crtplst_show_featured_badge = $settings['crtplst_show_featured_badge'];
		$crtplst_show_stock_out_badge = $settings['crtplst_show_stock_out_badge'];
		$crtplst_sale_badge_type = $settings['crtplst_sale_badge_type'];
		$crtplst_sale_badge_before_percent_text = $settings['crtplst_sale_badge_before_percent_text'];
		$crtplst_sale_badge_after_percent_text = $settings['crtplst_sale_badge_after_percent_text'];
		$crtplst_sale_badge_text = $settings['crtplst_sale_badge_text'];
		$crtplst_badge_featured_text = $settings['crtplst_show_badge_featured_text'];
		$crtplst_badge_stock_out_text = $settings['crtplst_show_badge_stock_out_text'];
		$crtplst_badge_stock_in_text = $settings['crtplst_show_badge_stock_in_text'];
		$crtplst_badge_stock_in_number_text = $settings['crtplst_show_badge_stock_in_number_text'];
		// $crtplst_pagination_align = $settings['crtplst_the_pagination_items_align'];
		$crtplst_the_pagination_type = $settings['crtplst_the_pagination_type'];
		$crtplst_product_next_format = $settings['crtplst_product_next_format'];
		$crtplst_product_prev_format = $settings['crtplst_product_prev_format'];
		$crtplst_products_perpage = $settings['crtplst_the_product_per_page'];
		$crtplst_description_words = $settings['crtplst_description_words'];
		$crtplst_word_trim_indi = $settings['crtplst_word_trim_indi'];
		// $crtplst_main_button = $settings['crtplst_main_button'];
		// $crtplst_choose_link = $settings['crtplst_choose_link'];
		$crtplst_cart_button = $settings['crtplst_cart_button'];
		$crtplst_filter_by = $settings['crtplst_product_filter_by'];
		$crtplst_selected_category = $settings['crtplst_selected_category'];
		$crtplst_selected_tags = $settings['crtplst_selected_tags'];

		// Product Action 
		$crtplst_the_cart_type = $settings['crtplst_the_cart_type'];
		$crtplst_cart_button = $settings['crtplst_cart_button'];
		$crtplst_details_btn_text = $settings['crtplst_details_btn_text'];

		// Filter Query
		$crtplst_selected_include_products = $settings['crtplst_selected_include_products'];
		$crtplst_selected_exclude_products = $settings['crtplst_selected_exclude_products'];
		$crtplst_selected_statuses = $settings['crtplst_product_grid_products_status'];
		$crtplst_order_by = $settings['crtplst_product_order_by'];
		$crtplst_order = $settings['crtplst_product_order'];

		$crtplst_show_sell = $settings['crtplst_total_sell'];
		$crtplst_sell_label = $settings['crtplst_total_sell_label'];

		$crtplst_paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1; 
		
		$crtplst_the_all_date = $settings['crtplst_the_all_date'];
		$crtplst_text_str = ' ';
		if('d' === $crtplst_the_all_date){
			$crtplst_coustom_day = $crtplst_text_str;
			$crtplst_coustom_month = $crtplst_text_str;
			$crtplst_coustom_year = $crtplst_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $crtplst_the_all_date){
			$crtplst_coustom_day = $crtplst_text_str;
			$crtplst_coustom_month = $crtplst_text_str;
			$crtplst_coustom_year = $crtplst_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $crtplst_the_all_date){
			$crtplst_coustom_day = $crtplst_text_str;
			$crtplst_coustom_month = $crtplst_text_str;
			$crtplst_coustom_year = $crtplst_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $crtplst_the_all_date){
			$crtplst_coustom_year = $settings['crtplst_product_coustom_year'];
			$crtplst_coustom_month = $settings['crtplst_product_coustom_month'];
			$crtplst_coustom_day = $settings['crtplst_product_coustom_day'];
			$wdbp_time = $crtplst_text_str;
		} else{
			$crtplst_coustom_day = $crtplst_text_str;
			$crtplst_coustom_month = $crtplst_text_str;
			$crtplst_coustom_year = $crtplst_text_str;
			$wdbp_time = $crtplst_text_str;
		}
		

		$crtplst_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $crtplst_products_perpage,
			'orderby'        => $crtplst_order_by,
			'order'          => $crtplst_order,
			'post__in'       => $crtplst_selected_include_products,
			'post__not_in'   => $crtplst_selected_exclude_products,
			'post_status'    => $crtplst_selected_statuses,
			'paged' 		 => $crtplst_paged,
			'date_query'     => $wdbp_time,
			'year'           => $crtplst_coustom_year,
			'monthnum'       => $crtplst_coustom_month,
			'day'            => $crtplst_coustom_day, 
		);
		
		switch ($crtplst_filter_by) {
			 case 'featured':
				$crtplst_args['tax_query'][] = array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					'operator' => 'IN',
				);
				break;

			case 'onsale':
				$crtplst_args['meta_query'] = array(
					'relation' => 'OR',
					array(
						'key' => '_sale_price',
						'value' => 0,
						'compare' => '>',
						'type' => 'NUMERIC',
					),
					array(
						'key' => '_sale_price',
						'value' => '',
						'compare' => '=',
					),
				);
				break;

			case 'toprated':
				$crtplst_args['meta_query'] = array(
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
    			break;

			case 'bestselling':
				$crtplst_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
				break;
				
			case 'cheapest':
				$crtplst_args['meta_query'] = array(
					array(
						'key' => '_price',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				$crtplst_args['orderby'] = 'meta_value_num';
				$crtplst_args['order'] = 'ASC';
				break;

			case 'popularity':
				$crtplst_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				break;

			case 'recommended':
				$crtplst_args['meta_query'] = array(
					'relation' => 'AND',
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 4.5,
						'type' => 'NUMERIC',
					),
					array(
						'key' => '_stock_status',
						'value' => 'instock',
					)
				);
				break;	

			case 'expensive':
				$crtplst_args['meta_query'] = array(
					array(
						'key' => '_price',
						'type' => 'NUMERIC',
					),
				);
				$crtplst_args['orderby'] = 'meta_value_num';
				$crtplst_args['order'] = 'DESC';
				break;

			case 'recentlyadded': 
				$crtplst_args['date_query'] = array(
					array(
						'after' => '6 months ago',
						'inclusive' => true,						
					)
				);
				break;

			case 'instock':
				$crtplst_args['meta_query'] = array(
					array(
						'key' => '_stock_status',
						'value' => 'instock',						
					)
				);
				break;

			case 'outofstock':
				$crtplst_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'outofstock',						
					)
				);
				break;

			case 'limitedstock':
				$crtplst_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'instock',
					),
					array (
						'key' => '_stock',
						'value' => 10,
						'compare' => '<=',
						'type' => 'NUMERIC',
					)
				);
				break;
				default:
					'recentlyadded';
				break;
		}
		// If a specific category is selected, add a category argument
		if ($crtplst_selected_category) {
			$crtplst_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $crtplst_selected_category,
			);
		}
		// If specific tags are selected, add a tag filter to the query
		if (!empty($crtplst_selected_tags)) {
			$crtplst_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $crtplst_selected_tags,
				'operator' => 'IN',
			);
		}

		include(__DIR__.'/from-product-list/condition.php');
		
		if ( in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))){
			if($crtplst_products_style == 'style1' || $crtplst_products_style == 'style2'){
			if( $crtplst_products_style ) {?>
				<div class="<?php echo $style_extra_class ?> crtplst_commons">
					<div class="rows">
						<?php $crtplst_all_products = new \WP_Query( $crtplst_args ); 
						if($crtplst_all_products->have_posts()){
							while ( $crtplst_all_products->have_posts() ){
								$crtplst_all_products->the_post();
								global $product; ?>
								<div class="crtplst_wrap">
									<div class="crtplst_product_box crtplst_box_sha">
										<div class="crtplst-sale-featured-badge <?php echo esc_attr( $crtplst_badge_one_position == 'right' ) ? 'crtplst-badge-right' : 'crtplst-badge-left'; ?>">
											<?php
											// Feature Badge
											if ('yes' === $crtplst_show_featured_badge && $product->is_featured()) {
												echo '<p class="crtplst-featured-badge">' . esc_html($crtplst_badge_featured_text) . '</p>';
											}
											// Sale Badge
											if ('yes' === $crtplst_show_sale_badge && $product->is_on_sale()) {
												
												$badge_content = ('percent' === $crtplst_sale_badge_type) ? 
												esc_html($crtplst_sale_badge_before_percent_text) .' ' . round(100 - ($product->get_sale_price() / $product->get_regular_price()) * 100) . '% ' . esc_html($crtplst_sale_badge_after_percent_text) :
													esc_html($crtplst_sale_badge_text);
													echo '<p class="crtplst-sale-badge">' . $badge_content . '</p>';
													
											} ?>
											<?php
											//Stock Badge
											if ('yes' === $crtplst_show_stock_out_badge) {
												echo !$product->is_in_stock() ? '<p class="crtplst-stock-badge">' . esc_html($crtplst_badge_stock_out_text) . '</p>' : '<p class="crtplst-stock-badge crtplst-stock-count">' . ($product->get_stock_quantity() > 0 ? esc_html__($crtplst_badge_stock_in_number_text) . ' : ' . $product->get_stock_quantity() : esc_html__($crtplst_badge_stock_in_text)) . '</p>';
											}?>
										</div>
										<?php if(has_post_thumbnail()){ ?>
										<?php if( $crtplst_products_style == 'style16' ){ ?>
											<div class="crtplst-productextra-img">
												<?php include(__DIR__.'/from-product-list/product-image.php'); ?>
												</div>
											</div>
										<?php }else{
											if( $crtplst_products_style !== 'style17' && $crtplst_products_style !== 'style18' && $crtplst_products_style !== 'style19' ){?>
											<?php include(__DIR__.'/from-product-list/product-image.php'); ?>
											</div>
											<?php } ?>
											<?php }} if( $crtplst_products_style == 'style17' || $crtplst_products_style == 'style18' || $crtplst_products_style == 'style19' ){ ?>
												<?php include(__DIR__.'/from-product-list/product-image.php'); ?>
											<?php } ?>
											<div class="crtplst_product_bottom_part crtplst_box_style_cmn">
												<div class="crtplst_product_meta">
													
													<?php if('yes' === $settings['crtplst_tag_show']){ ?>
													<div class="crtplst_product_tag"><?php echo wc_get_product_tag_list(get_the_id()); ?></div>
													<?php } ?>
													<?php if('yes' === $crtplst_show_sell){ ?>
													<div class="crtplst_product_tag crtplst_product_sale"><?php echo esc_html__($crtplst_sell_label) .'<span>' . $product->get_total_sales().'</span>'; ?></div>
													<?php } ?>

													<?php if('yes' === $settings['crtplst_review']){ ?>
													<div class="crtplst_product_comment">
														<?php include(__DIR__.'/from-product-list/star_rating.php'); ?>
													</div>
													<?php } ?>

													<?php if('yes' === $settings['crtplst_cat_show']){ ?>
													<div class="crtplst_category">
														<ul class="post-categories"><li><?php echo wc_get_product_category_list(get_the_id()); ?></li></ul>
													</div>
													<?php } ?>
												</div>
												
												<?php if('yes' === $settings['crtplst_title']){ ?>
													<?php include 'from-product-list/title.php'; ?>
												<?php } ?>

												<?php if('yes' === $settings['crtplst_price']){ ?>
													<?php include 'from-product-list/price.php'; ?>
												<?php } ?>

												<?php if('yes' === $settings['crtplst_description']){ ?>
												<div class="crtplst_product_description">
													<div class="crtplst_desce"><?php echo wp_trim_words($product->get_short_description(), $crtplst_description_words, $crtplst_word_trim_indi); ?></div>
												</div>
												<?php } ?>
												

												<?php if('yes' === $settings['crtplst_cart_btn']): ?>
													<div class="crtplst_product_bttn">
														<a href="<?php echo esc_url(('cart' === $crtplst_the_cart_type || 'icon' === $crtplst_the_cart_type) ? $product->add_to_cart_url() : get_permalink()); ?>" class="crtplst_button">
															<?php 
															echo ('cart' === $crtplst_the_cart_type) ? esc_html__($crtplst_cart_button) : 
																(('buy' === $crtplst_the_cart_type) ? esc_html__($crtplst_details_btn_text) : '');

															if ('icon' === $crtplst_the_cart_type) {
																\Elementor\Icons_Manager::render_icon($settings['crtplst_cart_button_icon'], ['aria-hidden' => 'true']);
															} 
															?>
														</a>
													</div>
												<?php endif; ?>
											</div>
											<?php if( $crtplst_products_style == 'style17' || $crtplst_products_style == 'style18' || $crtplst_products_style == 'style19' ){ ?>
											</div>
											<?php } ?>
										
									</div>
								</div>
							<?php } }
						wp_reset_query();?>
						</div>
				</div><?php
			} 
			include(__DIR__.'/from-product-list/pagination.php');
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
		} else{
			?><a href="https://WordPress.org/plugins/WooCommerce/"><div class="crtplst_wooc_not_acivate_notice"><?php echo esc_html__('May be you are not installed/activated WooCommerce plugin.', 'bwd-elementor-addons'); ?></div></a><?php
		}
	}
	
}
