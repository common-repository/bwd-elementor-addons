<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_CRTPProducts extends Widget_Base {

	public function get_name() {
		return esc_html__( 'CreativeProductsGrid', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Creative Products Grid', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-products';
	}

	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}

	protected function bwdthe_get_selected_products_options() {
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

	protected function get_product_categories_options() {
		$categories = get_terms('product_cat', array('hide_empty' => false));

		$options = array();

		foreach ($categories as $category) {
			$options[$category->term_id] = $category->name;
		}

		return $options;
	}
	protected function get_product_tags_options() {
		$tags = get_terms('product_tag', array('hide_empty' => false));

		$options = array();

		foreach ($tags as $tag) {
			$options[$tag->term_id] = $tag->name;
		}

		return $options;
	}

	// Function to get all standard post statuses dynamically
	protected function get_product_statuses_options() {
		$statuses = get_post_statuses();

		$options = array();

		foreach ($statuses as $status => $label) {
			$options[$status] = $label;
		}

		return $options;
	}

	protected function get_product_orderby_options() {
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
	protected function get_product_filter_options() {
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
			'crtp_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'crtp_products_zone_style',
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
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/woocommerce-product-grid-addon-for-elementor" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_responsive_control(
			'crtp_box_column',
			[
				'label' => esc_html__( 'Choose Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'description' => esc_html__('Choosing column layout means all modes follow suit. Default selection ensures automatic responsiveness.', 'bwd-elementor-addons'),
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'column1' => esc_html__( 'One', 'bwd-elementor-addons' ),
					'column2' => esc_html__( 'Two', 'bwd-elementor-addons' ),
					'column3' => esc_html__( 'Three', 'bwd-elementor-addons' ),
					'column4'  => esc_html__( 'Four', 'bwd-elementor-addons' ),
                    'column5' => esc_html__( 'Five', 'bwd-elementor-addons' ),
                    'column6' => esc_html__( 'Six', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'crpt-grid%s-'
			]
		);
		$this->add_responsive_control(
			'crtp_products_column_gap',
			[
				'label' => esc_html__( 'Column Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .crtp_gap_c' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .crtp_gap_r' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'crtp_blog_row_gap',
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
				'selectors' => [
					'{{WRAPPER}} .row .column_number' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section(); 
				$this->start_controls_section(
			'crtp_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_product_filter_by',
			[
				'label'    => esc_html__( 'Products Filter', 'bwd-elementor-addons' ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'recentlyadded',
				'options'  => $this->get_product_filter_options(),
			]
		);

		$this->add_control(
			'crtp_product_order_by',
			[
				'label'    => esc_html__( 'Order By', 'bwd-elementor-addons' ),
				'type'     => \Elementor\Controls_Manager::SELECT,
				'default'  => 'date',
				'options'  => $this->get_product_orderby_options(),
			]
		);
		$this->add_control(
			'crtp_product_order',
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
			'crtp_the_product_per_page',
			[
				'label' 	  => esc_html__( 'Product Per Page', 'bwd-elementor-addons' ),
				'type'        => Controls_Manager::NUMBER,
				'default'     => 6,
				'min'         => 1,
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'crtp_product_grid_products_status',
			[
				'label'    => esc_html__( 'Product Status', 'bwd-elementor-addons' ),
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options'  => $this->get_product_statuses_options(),
			]
		);

		
		$this->add_control(
			'crtp_selected_category',
			[
				'label'   => esc_html__( 'Select Category', 'bwd-elementor-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->get_product_categories_options(array( 'product_cat' )),
			]
		);
		$this->add_control(
			'crtp_selected_tags',
			[
				'label'   => esc_html__( 'Select Tags', 'bwd-elementor-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->get_product_tags_options(),
			]
		);

		$this->add_control(
			'crtp_selected_include_products',
			[
				'label'       => esc_html__( 'Include Products', 'bwd-elementor-addons' ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->bwdthe_get_selected_products_options(),
				'condition'   => [
					'crtp_product_filter_by' => 'manual',
				],
			]
		);
		$this->add_control(
			'crtp_selected_exclude_products',
			[
				'label'       => esc_html__( 'Exclude Products', 'bwd-elementor-addons' ),
				'type'        => \Elementor\Controls_Manager::SELECT2,
				'multiple'    => true,
				'label_block' => true,
				'options'     => $this->bwdthe_get_selected_products_options(),
				'condition'   => [
					'crtp_product_filter_by!' => 'manual',
				]
			]
		);

		$this->add_control(
			'crtp_the_all_date',
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
			'crtp_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'crtp_blog_coustom_month',
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
					'crtp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'crtp_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'crtp_the_all_date' => 'coustom',
				],
			]
		);
		
	
		$this->end_controls_section();		
		$this->start_controls_section(
			'crtp_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				
			]
		);
		$this->add_control(
			'crtp_products_image_heading',
			[
				'label' => esc_html__( 'Featured Image', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);
		$this->add_control(
			'crtp_products_show_image',
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
			'crtp_products_image_clickable',
			[
				'label' => esc_html__( 'Enable Clickable', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'crtp_products_show_image' => 'yes',
				]
			]
		);

		$this->add_control(
			'crtp_products_title_heading',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'crtp_title',
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
			'crtp_title_tag',
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
			'crtp_title_enable_link',
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
			'crtp_title_length',
			[
				'label' => __('Word Length', 'bwd-elementor-addons'),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$this->add_control(
			'crtp_products_description_heading',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'crtp_description',
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
			'crtp_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_price',
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
			'crtp_date',
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
			'crtp_review',
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
			'crtp_review_count',
			[
				'label' => esc_html__( 'Review Count', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'crtp_review' => 'yes',
				]
			]
		);
		$this->add_control(
			'crtp_cat',
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
			'crtp_tag',
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
			'crtp_sell',
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
			'crtp_sell_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sell:-', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_sell' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'crtp_products_sale_stock_badge_section',
			[
				'label' => esc_html__( 'Sale / Stock Badge', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_badge_style',
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
				'prefix_class' => 'crtp-badge-',
			]
		);
		$this->add_control(
			'crtp_show_sale_badge',
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
			'crtp_sale_badge_type',
			[
				'label' => esc_html__( 'Select Sale Badge', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'percent',
				'options' => [
					'percent' => esc_html__( 'Percentage', 'bwd-elementor-addons' ),
					'text' => esc_html__( 'Sale Text', 'bwd-elementor-addons' )
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				]
			]
		);
		$this->add_control(
			'crtp_sale_badge_before_percent_text',
			[
				'label' => esc_html__('Before Percentage Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
					'crtp_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_after_percent_text',
			[
				'label' => esc_html__('After Percentage Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Off', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
					'crtp_sale_badge_type' => 'percent',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_text',
			[
				'label' => esc_html__('Sale Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Sale', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
					'crtp_sale_badge_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_stock_out_badge',
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
			'crtp_show_badge_stock_out_text',
			[
				'label' => esc_html__('Stock Out Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Stock Out', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_badge_stock_in_text',
			[
				'label' => esc_html__('In Stock Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', 'bwd-elementor-addons'),
				'description' => esc_html__('This field will be used if the product does not have a stock count number.', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_badge_stock_in_number_text',
			[
				'label' => esc_html__('In Stock Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('In Stock', 'bwd-elementor-addons'),
				'description' => esc_html__('This field will be used only if the product has stock count number.', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_show_featured_badge',
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
			'crtp_show_badge_featured_text',
			[
				'label' => esc_html__('Featured Text', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Hot', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_badge_one_position',
			[
				'label' => esc_html__( 'Sale & Featured Badge Align', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'left',
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crtp-sale-featured-badge' => 'align-items: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_show_featured_sale_order',
			[
				'label' => esc_html__( 'Featured & Sale Badge Order', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->end_controls_section(); 
		$this->start_controls_section(
			'crtp_products_actions_section',
			[
				'label' => esc_html__( 'Product Actions', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_view_btn',
			[
				'label' => esc_html__( 'Actions', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtp_cart_btn',
			[
				'label' => esc_html__( 'Cart', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'crtp_view_btn' => 'yes'
				],
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtp_cart_button',
			[
				'label' => esc_html__('Cart Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_cart_btn' => 'yes',
					'crtp_products_zone_style' => ['style1', 'style5'],
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'crtp_products_zone_style' => ['style2', 'style3', 'style4', 'style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21'],
					'crtp_cart_btn' => 'yes',
					'crtp_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_btn',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'crtp_view_btn' => 'yes'
				],
				'separator' => 'before',
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'crtp_main_button',
			[
				'label' => esc_html__('Button Title', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Buy Now', 'bwd-elementor-addons'),
				'condition' => [
					'crtp_btn' => 'yes',
					'crtp_view_btn' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'crtp_choose_link',
			[
				'label' => esc_html__( 'Choose Custom', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'coustom_link' => esc_html__( 'Custom Link', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'crtp_btn' => 'yes',
					'crtp_view_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_main_button_link',
			[
				'label' => esc_html__( 'Custom Link', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'www.type-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.type-link.com',
				],
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'crtp_choose_link' => 'coustom_link',
				],
			]
		);
		$this->end_controls_section(); 
		$this->start_controls_section(
			'crtp_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'crtp_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'crtp-number-and-text',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'crtp-number-and-text' => esc_html__( 'Number and Text', 'bwd-elementor-addons' ),
					'number' => esc_html__( 'Number', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'crtp_the_pagination_items_align',
			[
				'label' => esc_html__( 'Items Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'center',
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'crtp_the_pagination_type' => ['crtp-number-and-text', 'number'],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item ul' => 'justify-content: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'crtp_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtp_the_pagination_type' => 'crtp-number-and-text',
				],
			]
		);
		$this->add_control(
			'crtp_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'crtp_the_pagination_type' => 'crtp-number-and-text',
				],
			]
		);
		$this->end_controls_section(); 

		$this->start_controls_section(
			'crtp_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'crpt_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx' => 'align-items: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
            'crtp_content_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_control(
			'crtp_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'crtp_title' => 'yes',
				],
				'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'crtp_blog_title_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_title_typography',
				'selector' => '{{WRAPPER}} .crpt-card-heading a',
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading a' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card-heading:hover a',
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading:hover a' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-heading:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_title' => 'yes',
				],
            ]
        );
		

		$this->add_control(
			'crtp_blog_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
				'condition' => [
					'crtp_title' => 'yes',
				],
			]
		);

		$this->add_control(
			'crtp_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'condition' => [
					'crtp_description' => 'yes',
				],
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtp_blog_description_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_description_typography',
				'selector' => '{{WRAPPER}} .crpt-card-decs',
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs, {{WRAPPER}} .crpt-card .crpt-contentbx' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card-decs:hover',
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card-decs:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-decs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_description' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card-decs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_description' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'crtp_blog_button_options',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtp_blog_button_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_button_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a',
			]
		);
		$this->add_control(
			'crtp_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a',
			]
		);
		$this->add_control(
			'crtp_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-card-button:hover a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button:hover a',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-card-button a, {{WRAPPER}} .crpt-card-area-sk .crpt-card .crpt-card-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'crtp_cart_button_options',
			[
				'label' => esc_html__( 'Cart Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'crtp_cart_button_style_post'
		);
		$this->start_controls_tab(
			'crtp_cart_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_cart_button_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a',
			]
		);
		$this->add_control(
			'crtp_cart_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_cart_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_cart_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a',
			]
		);
		$this->add_responsive_control(
            'crtp_cart_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_cart_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_cart_button_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a',
			]
		);
		$this->add_control(
			'crtp_cart_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_cart_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_cart_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a',
			]
		);
		$this->add_responsive_control(
            'crtp_cart_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn:hover a, {{WRAPPER}} .crpt-card .crpt-card-icon:hover a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'crtp_cart_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_cart_button_icon_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-addtocard-btn a, {{WRAPPER}} .crpt-card .crpt-card-icon a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'crtp_thumbnail_size',
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
					'{{WRAPPER}} .crpt-card .crpt-imgbx img, {{WRAPPER}} .crpt-card .crpt-imgbx2 img' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'crtp_image_bg_color',
			[
				'label' => esc_html__( 'Image Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt_for_image_bg, {{WRAPPER}} .crpt-card .crpt-upper-item .crpt-imgbx a:before, {{WRAPPER}} .crpt-card:before, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-sub-content, {{WRAPPER}} .crpt-card-area-21 .crpt-card .crpt-upper-item::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'crtp_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-imgbx img, {{WRAPPER}} .crpt-card .crpt-imgbx2 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_price_options',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_price' => 'yes',
				],
			]
		);
		// Regular Price
		$this->add_control(
			'crtp_blog_regular_sale_price_options',
			[
				'label' => esc_html__( 'Sale Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_sale_price_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_sale_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_sale_price_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_sale_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_sale_price_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_sale_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_sale_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_sale_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_sale_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price.crpt-sale-price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'crtp_blog_regular_price_options',
			[
				'label' => esc_html__( 'Regular Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// sale Price
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_regular_price_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_regular_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_regular_price_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box', 
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_regular_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_regular_price_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_regular_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price:hover, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_regular_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_regular_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_regular_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-regular-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-current-price, {{WRAPPER}} .crpt-card .crpt-contentbx .crpt-price-rating .crpt-price-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
			'crtp_badge_style_section',
			[
				'label' => esc_html__( 'Sale / Stock Out Badge', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_typography_heading',
			[
				'label' => esc_html__( 'Sale', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_sale_badge_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-sale-badge',
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_feature_badge_typography_heading',
			[
				'label' => esc_html__( 'Feature', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_feature_badge_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-featured-badge',
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_stock_badge_typography_heading',
			[
				'label' => esc_html__( 'Stock', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_stock_badge_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count',
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_color',
			[
				'label' => esc_html__( 'Sale Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-sale-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_feature_badge_color',
			[
				'label' => esc_html__( 'Feature Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-featured-badge' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_stock_badge_color',
			[
				'label' => esc_html__( 'Stock Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count' => 'color: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_sale_badge_bg_color',
			[
				'label' => esc_html__( 'Sale Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-sale-badge' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_feature_badge_bg_color',
			[
				'label' => esc_html__( 'Feature Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-featured-badge' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
			]
		);
		$this->add_control(
			'crtp_stock_badge_bg_color',
			[
				'label' => esc_html__( 'Stock Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count' => 'background: {{VALUE}}',
				],
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
            'crtp_sale_badge_padding',
            [
                'label' => esc_html__('Sale Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-sale-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_show_sale_badge' => 'yes',
				]
            ]
        );
		$this->add_responsive_control(
            'crtp_feature_badge_padding',
            [
                'label' => esc_html__('Feature Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-featured-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_show_featured_badge' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'crtp_stock_badge_padding',
            [
                'label' => esc_html__('Stock Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-stock-badge, {{WRAPPER}} .crpt-card .crpt-stock-count' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'crtp_show_stock_out_badge' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_date' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pub-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_review_style_section',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_review' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Star', 'bwd-elementor-addons' ),
			]
		);
		$this->add_responsive_control(
			'crtp_review_star_size',
			[
				'label' => esc_html__( 'Star Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-price-rating .crpt-rating-box' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'crtp_review_star_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp-star-rating .crpt-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Number', 'bwd-elementor-addons' ),
			]
		);
		$this->add_responsive_control(
			'crtp_review_number_size',
			[
				'label' => esc_html__( 'Number Size', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .make_a_star' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'crtp_review_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .make_a_star' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_tag' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'crtp_blog_tag_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_cat_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_cat' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-pro-cate a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_total_sell_style_section',
			[
				'label' => esc_html__( 'Total Sell', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_sell' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy total_sell
		$this->start_controls_tabs(
			'crtp_blog_taxonomy_total_sell_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_taxonomy_total_sell_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_total_sell_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_taxonomy_total_sell_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_taxonomy_total_sell_hover_typography',
				'selector' => '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale:hover',
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_taxonomy_total_sell_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'crtp_blog_total_sell_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_taxonomy_total_sell_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_taxonomy_total_sell_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx .crpt-total-sale' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'crtp_blog_box_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'crtp_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .crpt-card, {{WRAPPER}} .crpt-card .crpt_for_back_bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'crtp_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'crtp_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crpt-card:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'crtp_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .crpt-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'crtp_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'crtp_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .crpt-card:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'crtp_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card .crpt-contentbx' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crpt-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'crtp_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'crtp_the_pagination_type' => ['crtp-number-and-text', 'number'],
				],
			]
		);
		$this->add_responsive_control(
			'crtp_pagination_gap',
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
					'{{WRAPPER}} .crtp_pagination_item ul' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'crtp_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'crtp_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span',
			]
		);
		$this->add_control(
			'crtp_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'crtp_pagination_active_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'crtp_pagination_active_typography',
				'selector' => '{{WRAPPER}} .crtp_pagination_item .current',
			]
		);
		$this->add_control(
			'crtp_pagination_active_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item .current' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'crtp_pagination_active_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .crtp_pagination_item .current' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->add_responsive_control(
            'crtp_pagination_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'crtp_pagination_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .crtp_pagination_item a, {{WRAPPER}} .crtp_pagination_item span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$crtp_products_style = $settings['crtp_products_zone_style'];
		$crtp_title_tag = $settings['crtp_title_tag'];
		$crtp_title_link = $settings['crtp_title_enable_link'];
		$crtp_title_length = $settings['crtp_title_length'];
		$featured_image = $settings['crtp_products_show_image'];
		$image_link_enabled = $settings['crtp_products_image_clickable'];
		$review_count = $settings['crtp_review_count'];
		$crtp_featured_sale_order = $settings['crtp_show_featured_sale_order'];
		$crtp_show_sale_badge = $settings['crtp_show_sale_badge'];
		$crtp_show_featured_badge = $settings['crtp_show_featured_badge'];
		$crtp_show_stock_out_badge = $settings['crtp_show_stock_out_badge'];
		$crtp_sale_badge_type = $settings['crtp_sale_badge_type'];
		$crtp_sale_badge_before_percent_text = $settings['crtp_sale_badge_before_percent_text'];
		$crtp_sale_badge_after_percent_text = $settings['crtp_sale_badge_after_percent_text'];
		$crtp_sale_badge_text = $settings['crtp_sale_badge_text'];
		$crtp_badge_featured_text = $settings['crtp_show_badge_featured_text'];
		$crtp_badge_stock_out_text = $settings['crtp_show_badge_stock_out_text'];
		$crtp_badge_stock_in_text = $settings['crtp_show_badge_stock_in_text'];
		$crtp_badge_stock_in_number_text = $settings['crtp_show_badge_stock_in_number_text'];
		$crtp_pagination_align = $settings['crtp_the_pagination_items_align'];
		$crtp_the_pagination_type = $settings['crtp_the_pagination_type'];
		$crtp_blog_next_format = $settings['crtp_blog_next_format'];
		$crtp_blog_prev_format = $settings['crtp_blog_prev_format'];
		$crtp_products_perpage = $settings['crtp_the_product_per_page'];
		$crtp_description_words = $settings['crtp_description_words'];
		$crtp_word_trim_indi = $settings['crtp_word_trim_indi'];
		$crtp_main_button = $settings['crtp_main_button'];
		$crtp_choose_link = $settings['crtp_choose_link'];
		$crtp_cart_button = $settings['crtp_cart_button'];
		$filter_by = $settings['crtp_product_filter_by'];
		$selected_category = $settings['crtp_selected_category'];
		$selected_tags = $settings['crtp_selected_tags'];
		

		// Filter Query
		// Custom Select Product
		$selected_include_products = $settings['crtp_selected_include_products'];
		$selected_exclude_products = $settings['crtp_selected_exclude_products'];
		$selected_statuses = $settings['crtp_product_grid_products_status'];
		$crtp_order_by = $settings['crtp_product_order_by'];
		$crtp_order = $settings['crtp_product_order'];

		if ( ! empty( $settings['crtp_main_button_link']['url'] ) ) {
			$this->add_link_attributes( 'crtp_main_button_link', $settings['crtp_main_button_link'] );
		}

		$crtp_sell_label = $settings['crtp_sell_label'];

		$crtp_paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1; 

		$crtp_the_all_date = $settings['crtp_the_all_date'];
		$crtp_text_str = ' ';
		if('d' === $crtp_the_all_date){
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $crtp_the_all_date){
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $crtp_the_all_date){
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $crtp_the_all_date){
			$crtp_coustom_year = $settings['crtp_blog_coustom_year'];
			$crtp_coustom_month = $settings['crtp_blog_coustom_month'];
			$crtp_coustom_day = $settings['crtp_blog_coustom_day'];
			$wdbp_time = $crtp_text_str;
		} else{
			$crtp_coustom_day = $crtp_text_str;
			$crtp_coustom_month = $crtp_text_str;
			$crtp_coustom_year = $crtp_text_str;
			$wdbp_time = $crtp_text_str;
		}
		
		$crtp_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $crtp_products_perpage,
			'orderby'        => $crtp_order_by,
			'order'          => $crtp_order,
			'post__in'       => $selected_include_products,
			'post__not_in'   => $selected_exclude_products,
			'post_status'    => $selected_statuses,
			'paged' 		 => $crtp_paged,
			'date_query'     => $wdbp_time,
			'year'           => $crtp_coustom_year,
			'monthnum'       => $crtp_coustom_month,
			'day'            => $crtp_coustom_day, 
		);

		// Get the selected filter from the control
		
		switch ($filter_by) {
			 case 'featured':
				$crtp_args['tax_query'][] = array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					'operator' => 'IN',
				);
				break;

			case 'onsale':
				$crtp_args['meta_query'] = array(
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
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_wc_average_rating',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
    			break;

			case 'bestselling':
				$crtp_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0, 
						'type' => 'NUMERIC',
					),
				);
				break;
				
			case 'cheapest':
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_price',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				$crtp_args['orderby'] = 'meta_value_num';
				$crtp_args['order'] = 'ASC';
				break;

			case 'popularity':
				$crtp_args['meta_query'] = array(
					array(
						'key' => 'total_sales',
						'compare' => '>',
						'value' => 0,
						'type' => 'NUMERIC',
					),
				);
				break;

			case 'recommended':
				$crtp_args['meta_query'] = array(
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
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_price',
						'type' => 'NUMERIC',
					),
				);
				$crtp_args['orderby'] = 'meta_value_num';
				$crtp_args['order'] = 'DESC';
				break;

			case 'recentlyadded': 
				$crtp_args['date_query'] = array(
					array(
						'after' => '6 months ago',
						'inclusive' => true,						
					)
				);
				break;

			case 'instock':
				$crtp_args['meta_query'] = array(
					array(
						'key' => '_stock_status',
						'value' => 'instock',						
					)
				);
				break;

			case 'outofstock':
				$crtp_args['meta_query'] = array (
					array(
						'key' => '_stock_status',
						'value' => 'outofstock',						
					)
				);
				break;

			case 'limitedstock':
				$crtp_args['meta_query'] = array (
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
		if ($selected_category) {
			$crtp_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $selected_category,
			);
		}
		// If specific tags are selected, add a tag filter to the query
		if (!empty($selected_tags)) {
			$crtp_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $selected_tags,
				'operator' => 'IN',
			);
		}

		if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
			if($crtp_products_style == 'style1' || $crtp_products_style == 'style2'){
				include(__DIR__.'/pgthe_main/style.php');
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
		} else {
			?>
			<a href="https://WordPress.org/plugins/WooCommerce/">
				<div class="crtp_wooc_not_acivate_notice"><?php echo esc_html__('Maybe you have not installed/activated the WooCommerce plugin.', 'bwd-elementor-addons'); ?></div>
			</a>
			<?php
		}

	}
} 
