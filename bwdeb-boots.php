<?php
namespace BWDEBCreativeElementorBundle;
define( "BWDEB_ASFSK_ASSETS_ADMIN_DIR_FILE",  plugin_dir_url( __FILE__ ) . "assets/admin" );

class BWDEBClassElementorBundle {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdeb_admin_editor_scripts() {
		wp_enqueue_script( 'bwdeb_the_contact_form_editor', plugin_dir_url( __FILE__ ) . 'assets/public/js/empty-dummy.js', array(), BWDEB_PLUGIN_V, true );
		wp_script_add_data( 'bwdeb_the_contact_form_editor', 'type', 'module' );
	}

	public function bwdeb_register_widgets() {
    	if(get_option('bwdeb-plugin-meet-the-team','off')=='on'){
			require_once( __DIR__ . '/widgets/team-bwdeb.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_MTTMeetTheTeam() );
		}
     	if(get_option('bwdeb-plugin-team-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-teamcarousel-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTMCTeamcarousel() );//
		}
     	if(get_option('bwdeb-plugin-team-carousel2','off')=='on'){
			require_once( __DIR__ . '/widgets/team-bwdeb-carousel.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_MTTMeetTheTeamCarousel() );//
		}
     	if(get_option('bwdeb-plugin-testimonials','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb_testimonial.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_TBTTheBestTestimonials() );
		}
     	if(get_option('bwdeb-plugin-creative-button','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-creative-buttons.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CBTNSCreativeButtons() );
		}
     	if(get_option('bwdeb-plugin-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-accordion2.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDACAccordionCreatoR() );
		}
     	if(get_option('bwdeb-plugin-masking-effect','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-masking.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMEmasking() );
		}
     	if(get_option('bwdeb-plugin-service-showcase','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-service.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDSSService() );
		}
     	if(get_option('bwdeb-plugin-promo-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-Promo-Box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdeeo_promobox() );
		}
     	if(get_option('bwdeb-plugin-service-flip-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-service-flip-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDServiceFlipBox() );
		}
     	if(get_option('bwdeb-plugin-step-flip-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-step-flip-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDStepFlipBox() );
		}
     	if(get_option('bwdeb-plugin-team-flip-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-team-flip-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTeamFlipBox() );
		}
		if(get_option('bwdeb-plugin-creative-list','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-list.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdblBundleList() );
		}
     	if(get_option('bwdeb-plugin-dual-heading','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDDHHeading() );
		}
     	if(get_option('bwdeb-plugin-icon-box','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-iconbox.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDIBIconbox() );
		}
     	if(get_option('bwdeb-plugin-dual-button','off')=='on'){
			require_once( __DIR__ . '/widgets/dual-button.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDDBDualButtons() );
		}
     	if(get_option('bwdeb-plugin-fancy-heading','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-fancy-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDSTfancyheading() );
		}
     	if(get_option('bwdeb-plugin-animated-heading','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-animated-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDAHAnimatedHeadingWidget() );
		}
     	if(get_option('bwdeb-plugin-animated-link','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-animatedlink.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdalAnimatedLink() );
		}
     	if(get_option('bwdeb-plugin-awesome-step','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-step.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDASAwesomeStep() );
		}
     	if(get_option('bwdeb-plugin-blockquote','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-blockquote.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdbkBlockquote() );
		}
     	if(get_option('bwdeb-plugin-business-hours','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-businesshours.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdbhBusinessHours() );
		}
     	if(get_option('bwdeb-plugin-call-to-action','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-calltoaction.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCTACallToAction() );
		}
     	if(get_option('bwdeb-plugin-click-to-contact','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-clickcall-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdctcclickcall_widgets() );
		}
     	if(get_option('bwdeb-plugin-countdown','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-count-down.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdcdCountDownWidget() );
		}
     	if(get_option('bwdeb-plugin-counter','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-counter.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCCounterWidget() );
		}
     	if(get_option('bwdeb-plugin-coupon-code','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-coupon-code.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCODCouponCode() );
		}
     	if(get_option('bwdeb-plugin-filterable-gallery','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-filterable.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDFGfilterable() );
		}
     	if(get_option('bwdeb-plugin-image-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-imageaccordion2.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdiaImageAccordion() );
		}
     	if(get_option('bwdeb-plugin-image-compare','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-compare.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMEcompare() );
		}
     	if(get_option('bwdeb-plugin-image-hover-effect','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-imagehover.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDhbhimageHover() );
		}
     	if(get_option('bwdeb-plugin-image-scroll','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-image-scroll.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdiscrImageScroll() );
		}
     	if(get_option('bwdeb-plugin-image-shape','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-image-shape.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDIMimageshape() );
		}
     	if(get_option('bwdeb-plugin-image-swap','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-imageswap.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdisimageSwap() );
		}
     	if(get_option('bwdeb-plugin-pricing-table','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-price.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDPTPricingTable() );
		}
     	if(get_option('bwdeb-plugin-progress-bar','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-progressBar.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDPBProgressBarWidget() );
		}
     	if(get_option('bwdeb-plugin-timeline','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-timeline.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTLTimelineWidget() );
		}
     	if(get_option('bwdeb-plugin-social-icon','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-social-icon.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDSIsocialicon() );
		}
     	if(get_option('bwdeb-plugin-creative-tab','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-tabs.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTZTabs() );
		}
     	if(get_option('bwdeb-plugin-webinar-info','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-webinar-info.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdWIwebinarinfo() );
		}
     	if(get_option('bwdeb-plugin-unique-headers','off')=='on'){
			require_once( __DIR__ . '/widgets/header_bwdeb.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_THFTheHeader() );
		}
     	if(get_option('bwdeb-plugin-photo-stack','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-photoStack.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdps_photostack() );
		}
     	if(get_option('bwdeb-plugin-image-stack-group','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-imageStack.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdis_imagestack() );
		}
     	if(get_option('bwdeb-plugin-ihover','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-ihover-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_wppih_iHover_widgets() );
		}
     	if(get_option('bwdeb-plugin-video-popup','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-video-popup-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDVPVideoPopupWidget() );
		}
     	if(get_option('bwdeb-plugin-profile-card','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-profile-card.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDPCProfileCard() );
		}
     	if(get_option('bwdeb-plugin-back-to-top','off')=='on'){
			require_once( __DIR__ . '/widgets/back_to_top.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDBTTBackToTop() );
		}
     	if(get_option('bwdeb-plugin-masking-video','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-masking-video.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMVMaskingVideoWidget() );
		}
     	if(get_option('bwdeb-plugin-logo-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-logo-carousel-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDLCLogoCarousel() );
		}
     	if(get_option('bwdeb-plugin-logo-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-logo-grid-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDLCLogoGrid() );
		}
     	if(get_option('bwdeb-plugin-logo-filter','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-logo-filter-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDLCLogoFilter() );
		}
     	if(get_option('bwdeb-plugin-map-masking','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-mflag-masking.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMFMasking() );
		}
     	if(get_option('bwdeb-plugin-author-bio','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-authorbio.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdabAuthorBio() );
		}
     	if(get_option('bwdeb-plugin-data-table','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-creativeTable.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdct_creativetable() );
		}
		// First 
     	if(get_option('bwdeb-plugin-effective-pre-loader','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-preloader-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_EPREL_Effective_widgets() );
		}
     	if(get_option('bwdeb-plugin-social-share','off')=='on'){
			require_once( __DIR__ . '/widgets/unique-social-share-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_USShareWidget() );
		}
     	if(get_option('bwdeb-plugin-breadcrumb','off')=='on'){
			require_once( __DIR__ . '/widgets/greatest-breadcrumb-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_GRSTBCMBreadcrumBWidget() );
		}
     	if(get_option('bwdeb-plugin-background-switcher','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-switchBackground-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdsb_switchbackground_widgets() );
		}
		// Secound 
     	if(get_option('bwdeb-plugin-unfold','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-unfoldcontent.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdufUnfoldcontent() );
		}
     	if(get_option('bwdeb-plugin-code-highlighter','off')=='on'){
			require_once( __DIR__ . '/widgets/codentor-template.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CodEntor_Code_Widgete() );
		}
     	if(get_option('bwdeb-plugin-single-post-slider','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_TEPSThe_Effective_Post_Slider_widgets() );
		}
     	if(get_option('bwdeb-plugin-post-timeline','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-the-post-timeline.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_THEPSTTMLNTimelineWidget() );
		}
     	if(get_option('bwdeb-plugin-circle-info','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-circle-info-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdci_circle_info_widgets() );
		}
     	if(get_option('bwdeb-plugin-product-category-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-catproduct-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdcpcatproduct_widgets() );
		}
     	if(get_option('bwdeb-plugin-flip-box-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-flipbox.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdfbFlipBox() );
		}
     	if(get_option('bwdeb-plugin-info-download-button','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-button-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdidbbuttonwidgets() );
		}
		// Post Widget
     	if(get_option('bwdeb-plugin-post-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/post-grid-w.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDBPBlog() );
		}
     	if(get_option('bwdeb-plugin-post-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-accordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BPACCDNAccordionCreatoR() );
		}
     	if(get_option('bwdeb-plugin-post-image-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-imageaccordion.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bpiacrdnImageAccordion() );
		}
     	if(get_option('bwdeb-plugin-post-list','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-blog-post.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDBPLBlog() );
		}
     	if(get_option('bwdeb-plugin-post-tiles','off')=='on'){
			require_once( __DIR__ . '/widgets/post-tiles-w.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BPTLS_Post_Tiles() );
		}
     	if(get_option('bwdeb-plugin-news-ticker','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-newsticker-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_ptnticker_newsticker_widgets() );
		}
     	if(get_option('bwdeb-plugin-masonary-blog-post','off')=='on'){
			require_once( __DIR__ . '/widgets/post-masonary.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_MBPOST_Post_Masonry() );
		}
		//============================================================================================================================================================================
     	// Woocommerce Product
     	if(get_option('bwdeb-plugin-product-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-products2.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CRTPProducts() );
		}
     	if(get_option('bwdeb-plugin-product-image-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-imageaccordion3.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_woociapImageAccordion() );
		}
     	if(get_option('bwdeb-plugin-featured-product','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-products5.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOFPTProducts() );
		}
     	if(get_option('bwdeb-plugin-related-product','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-product-widgets.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_woocrp_product_widgets() );
		}
     	if(get_option('bwdeb-plugin-product-tiles','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-products4.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOCPTProducts() );
		}
     	if(get_option('bwdeb-plugin-product-accordion','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-accordion3.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOCPAAccordionCreatoR() );
		}
     	if(get_option('bwdeb-plugin-product-category-tiles','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-catproduct-widget3.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_woocptcCATproduct_TILES() );
		}
     	if(get_option('bwdeb-plugin-product-list','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-products3.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CRTPLSTProductsList() );
		}
     	if(get_option('bwdeb-plugin-product-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-product-widgets2.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_wppgpc_product_widgets() );
		}
     	if(get_option('bwdeb-plugin-product-list-carousel','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-products.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCRTPLSTProductsListcarousel() );
		}
     	if(get_option('bwdeb-plugin-product-category-grid','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-catproduct-widget2.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_thecpgcatproduct_widgets() );
		}
     	if(get_option('bwdeb-plugin-product-timeline','off')=='on'){
			require_once( __DIR__ . '/widgets/woocommerce-products-timeline.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOCPTMLNProductsTimelineWidget() );
		}
     	if(get_option('bwdeb-plugin-content-switcher','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdeb-content-switcher.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCSContentSwitcher() );
		}
		// For new  widgets  10Dec2023
		if(get_option('bwdeb-plugin-ajax-data-table','off')=='on'){
			require_once( __DIR__ . '/widgets/bwdadt-creativeTable.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdadt_creativetable() );
		}
	}

	// Register Category
	public function bwdeb_add_elementor_widget_categories( $elements_manager ) {
		$elements_manager->add_category(
			'bwdeb_general_category',
			[
				'title' => esc_html__( 'BWD General', BWDEB_PLUGIN_TD ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdeb_post_category',
			[
				'title' => esc_html__( 'BWD Post', BWDEB_PLUGIN_TD ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdeb_woocommerce_category',
			[
				'title' => esc_html__( 'BWD Woocommerce', BWDEB_PLUGIN_TD ),
				'icon' => 'eicon-person',
			]
		);
	}

	public function bwdeb_all_assets_for_the_public(){
		include 'includes/load-ass.php';
		$script_paths = ['imagesloaded.pkgd.min','isotope.pkgd.min','snake','bwdeb-owl.carousel.min4','bootstrap.min'];
		foreach($script_paths as $filepath){
			wp_enqueue_script( 'bwdcssk-content-'.$filepath, plugin_dir_url( __FILE__ ) . 'assets/public/js/'.$filepath.'.js', array('jquery'), BWDEB_PLUGIN_V, true );
		}
		$stylefile = ['responsive-column','bwdeb-animate.min','bootstrap.min','bwdeb-owl.carousel.min3', 'cmn'];
		foreach($stylefile as $filepath){
			wp_enqueue_style( 'bwdeb-'.$filepath, plugin_dir_url( __FILE__ ) . 'assets/public/css/'.$filepath.'.css', null, BWDEB_PLUGIN_V, 'all' );
		}
		wp_enqueue_style( 'bwdeb-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', null, '6.5.0', 'all' );
	}

	public function bwdeb_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
			'admin-icon-style' => array('bwdeb_path_admin_define'=>BWDEB_ASFSK_ASSETS_ADMIN_DIR_FILE . '/css/icon.css'),
		);
		foreach($all_css_js_file as $handle => $fileinfo){
      wp_enqueue_style( $handle, $fileinfo['bwdeb_path_admin_define'], null, BWDEB_PLUGIN_V, 'all');
		}
	}

	public function bwdeb_all_assets_for_dashboard_admin($hook){
		wp_enqueue_style( 'bwdeb-global',  plugin_dir_url( __FILE__ ) . 'assets/admin/css/global.css', null, BWDEB_PLUGIN_V, 'all' );
		if ($hook != 'toplevel_page_bwdeb-plugin-main-menu' && $hook != 'dashboard_page_bwdes_email_subscription') {
			return;
		}
        wp_enqueue_script('bwdtsk-ajax-script', plugin_dir_url(__FILE__) . 'assets/admin/dashboard/ajax-save.js', ['jquery'], '3.6.0', true);
        wp_localize_script('bwdtsk-ajax-script', 'bwdtsk_ajax_object', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'security' => wp_create_nonce('bwdtsk_ajax_nonce')
        ]);
		wp_enqueue_script( 'bwdeb-dashboard-jquery',  'https://code.jquery.com/jquery-3.6.0.min.js', ['jquery'], '3.6.0', true );
		wp_enqueue_script( 'bwdeb-dashboard-chart',  'https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js', ['jquery'], BWDEB_PLUGIN_V, true );
		$adCsAss = ['css/admin-basic', 'dashboard/bwd-dashboard'];
		foreach($adCsAss as $pathCs){
			wp_enqueue_style( 'bwdeb-'.$pathCs,  plugin_dir_url( __FILE__ ) . 'assets/admin/'.$pathCs.'.css', null, BWDEB_PLUGIN_V, 'all' );
		}
		$adJsAss = ['dashboard/bwd-dashboard','dashboard/widgets-cnt','js/checkbox-status'];
		foreach($adJsAss as $pathJs){
			wp_enqueue_script( 'bwdeb-'.$pathJs,  plugin_dir_url( __FILE__ ) . 'assets/admin/'.$pathJs.'.js', ['jquery'], BWDEB_PLUGIN_V, true );
		}
	}

	public function bwdeb_admin_menu_test(){
		if(current_user_can('manage_options')){
			$icon_url = plugins_url('bwd-elementor-addons/assets/admin/logo-header.png');
			add_menu_page(
				esc_html__('BWD Elementor Addons', BWDEB_PLUGIN_TD),
				esc_html__('BWD Elementor Addons', BWDEB_PLUGIN_TD),
				'manage_options',
				'bwdeb-plugin-main-menu',
				array($this, 'bwdeb_plugin_settings_page'),
				$icon_url,
				25
			);
			$headerBoots = (get_option( 'bwdeb-header-builder', 'off' )=='on')?'Header':'';
			$footerBoots = (get_option( 'bwdeb-footer-builder', 'off' )=='on')?'Footer':'';
			$headerBfooterB = $headerBoots.' & '.$footerBoots;
			$headerBfooterBelse = $headerBoots.$footerBoots;
			$headerFooter = (get_option( 'bwdeb-header-builder', 'off' )=='on'&&get_option( 'bwdeb-footer-builder', 'off' )=='on')?$headerBfooterB:$headerBfooterBelse;
			if(class_exists( 'ProbwdelementorBundle' )){
				if(get_option( 'bwdeb-header-builder', 'off' )=='on'||get_option( 'bwdeb-footer-builder', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__($headerFooter.' Builder', BWDEB_PLUGIN_TD),
						esc_html__($headerFooter.' Builder', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=bwd-header-footer'
					);
				}
				if(get_option( 'bwdeb-product-single', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('Single Product', BWDEB_PLUGIN_TD),
						esc_html__('Single Product', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-singleproduct'
					);
				}
				if(get_option( 'bwdeb-product-archive', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('Product Archive', BWDEB_PLUGIN_TD),
						esc_html__('Product Archive', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-woocarcvprdct'
					);
				}
				if(get_option( 'bwdeb-product-cart', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('Cart', BWDEB_PLUGIN_TD),
						esc_html__('Cart', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-wooccart'
					);
				}
				if(get_option( 'bwdeb-product-checkout', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('Checkout', BWDEB_PLUGIN_TD),
						esc_html__('Checkout', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-wooccheckout'
					);
				}
				if(get_option( 'bwdeb-post-single', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('Single Post', BWDEB_PLUGIN_TD),
						esc_html__('Single Post', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-sitepstsingle'
					);
				}
				if(get_option( 'bwdeb-post-archive', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('Post Archive', BWDEB_PLUGIN_TD),
						esc_html__('Post Archive', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-sitepstarchive'
					);
				}
				if(get_option( 'bwdeb-thankyou', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('Thank You', BWDEB_PLUGIN_TD),
						esc_html__('Thank You', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-woocthankyou'
					);
				}
				if(get_option( 'bwdeb-my-account', 'off' )=='on'){
					add_submenu_page(
						'bwdeb-plugin-main-menu',
						esc_html__('My Account', BWDEB_PLUGIN_TD),
						esc_html__('My Account', BWDEB_PLUGIN_TD),
						'manage_options',
						'edit.php?post_type=wcspc-sitemyaccount'
					);
				}
			}
		}
	}

	public function bwdeb_plugin_settings_page() {
        $message = '';
        if (isset($_GET['status']) && $_GET['status'] === 'success') {
            $message = '<div class="updated notice is-dismissible"><p>Thank you for confirmation!</p></div>';
        } elseif (isset($_GET['status']) && $_GET['status'] === 'error') {
            $message = '<div class="error notice is-dismissible"><p>Please enter a valid email address.</p></div>';
        }
        echo $message; 
		include 'includes/dashboard_style.php';
  	}

	public function bwdeb_plugin_function_for_datas_callback() {
        check_ajax_referer('bwdtsk_ajax_nonce', 'security');
        if (current_user_can('manage_options')) {
			include 'includes/tabs/imp/arrays.php';
			$mergedWidgets = array_merge($generalWidgets, $cvWidgets, $postWidgets, $productWidgets, $productSingleWidgets,$productArchiveWidgets,$cartWidgets,$checkoutWidgets,$thankyouWidgets,$myaccountWidgets, $headerFooterWidgets, $postSingleWidgets, $postArchiveWidgets, $extentionsWidgets,$heroWidgets,$extraStng,$getBuilder);
			foreach ($mergedWidgets as $widget) {
				$option_name = $widget['id'];
				$value = isset($_POST[$option_name]) && $_POST[$option_name] === 'on' ? 'on' : 'off';
				update_option($option_name, $value);
			}
            wp_send_json_success(['message' => 'Settings saved successfully!']);
        } else {
            wp_send_json_error(['message' => 'Permission denied.']);
        }
        wp_die();
	}

	public function __construct() {
		add_action('admin_menu', [$this,'bwdeb_admin_menu_test']);
		add_action('admin_enqueue_scripts', [$this, 'bwdeb_all_assets_for_dashboard_admin']);
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdeb_all_assets_for_elementor_editor_admin']);
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdeb_add_elementor_widget_categories' ] );
		// Load the hook after pro plugin is loaded
		add_action( 'after_setup_theme', function() {
			// Check if the pro plugin activated
			if ( !class_exists( 'ProbwdelementorBundle' ) ) {
				add_action('wp_enqueue_scripts', [$this, 'bwdeb_all_assets_for_the_public']);
				add_action( 'elementor/widgets/register', [ $this, 'bwdeb_register_widgets' ] );
			}
		});
		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdeb_admin_editor_scripts' ] );
		add_action( 'wp_ajax_bwdtsk_save_settings', [$this, 'bwdeb_plugin_function_for_datas_callback'] );
    }
}

// Instantiate Plugin Class
BWDEBClassElementorBundle::instance();