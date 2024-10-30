<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

if(get_option('bwdeb-plugin-meet-the-team','off')=='on' || get_option('bwdeb-plugin-team-carousel2','off')=='on'){
    wp_enqueue_style( 'bwdproeb-meet-the-team-main', plugin_dir_url( __FILE__ ) . '../assets/public/meet-the-team/mtt-team-main.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-meet-the-team-slick', plugin_dir_url( __FILE__ ) . '../assets/public/meet-the-team/slick.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-meet-the-team-min', plugin_dir_url( __FILE__ ) . '../assets/public/meet-the-team/min.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-meet-the-team-slick', plugin_dir_url( __FILE__ ) . '../assets/public/meet-the-team/slick.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-team-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-team-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-team-main.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/owl.carousel.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-owl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/owl.theme.default.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-team-carousel', plugin_dir_url( __FILE__ ) . '../assets/public/js/team-carousel.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-owl.carousel.min3', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-owl.carousel.min3.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/owl.carousel.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-testimonials','off')=='on'){
    wp_enqueue_style( 'bwdproeb-tbt-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/tbt_main.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-tbt-tmowl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/tmowl.carousel.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-tbt-tmowl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/owl.theme.default.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-tbt-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/main.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-tbt-testimonial', plugin_dir_url( __FILE__ ) . '../assets/public/js/testimonial.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-tbt-tmowl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/tmowl.carousel.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-creative-button','off')=='on'){
    wp_enqueue_style( 'bwdproeb-creative-buttons', plugin_dir_url( __FILE__ ) . '../assets/public/css/creative-buttons.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-acc-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-main2.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-acc-main2', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-main.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-masking-effect','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-masking', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-masking.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-service-showcase','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdss-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/style.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-promo-box','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeeo-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/main.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-service-flip-box','off')=='on'||get_option('bwdeb-plugin-step-flip-box','off')=='on'||get_option('bwdeb-plugin-team-flip-box','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdff-flip-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/flip-style.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-creative-list','off')=='on'){
    wp_enqueue_style( 'bwdproeb-creative-list-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/creative-list-style.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-dual-heading','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-heading', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-heading.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-icon-box','off')=='on'){
    wp_enqueue_style( 'bwdproeb-icon-box-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/icon-box-style.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-dual-button','off')=='on'){
    wp_enqueue_style( 'bwdproeb-dual-buttons', plugin_dir_url( __FILE__ ) . '../assets/public/css/dual-buttons.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-fancy-heading','off')=='on'){
    wp_enqueue_style( 'bwdproeb-fancy-heading', plugin_dir_url( __FILE__ ) . '../assets/public/css/fancy-heading.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-animated-heading','off')=='on'){
    wp_enqueue_style( 'bwdproeb-animated-heading-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/animated-heading-style.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-custom', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-custom.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-animated-link','off')=='on'){
    wp_enqueue_style( 'bwdproeb-animated-link', plugin_dir_url( __FILE__ ) . '../assets/public/css/animated-link.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-awesome-step','off')=='on'){
    wp_enqueue_style( 'bwdproeb-step-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/step-style.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-blockquote','off')=='on'){
    wp_enqueue_style( 'bwdproeb-blockquote', plugin_dir_url( __FILE__ ) . '../assets/public/css/blockquote.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-business-hours','off')=='on'){
    wp_enqueue_style( 'bwdproeb-businesshours', plugin_dir_url( __FILE__ ) . '../assets/public/css/businesshours.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-call-to-action','off')=='on'){
    wp_enqueue_style( 'bwdproeb-calltoaction', plugin_dir_url( __FILE__ ) . '../assets/public/css/calltoaction.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-click-to-contact','off')=='on'){
    wp_enqueue_style( 'bwdproeb-clicktocontact', plugin_dir_url( __FILE__ ) . '../assets/public/css/clicktocontact.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-clicktocontact', plugin_dir_url( __FILE__ ) . '../assets/public/js/clicktocontact.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-countdown','off')=='on'){
    wp_enqueue_style( 'bwdproeb-countdown', plugin_dir_url( __FILE__ ) . '../assets/public/css/countdown.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-countdown', plugin_dir_url( __FILE__ ) . '../assets/public/js/countdown.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-counter','off')=='on'){
    wp_enqueue_style( 'bwdproeb-counter', plugin_dir_url( __FILE__ ) . '../assets/public/css/counter.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-counter', plugin_dir_url( __FILE__ ) . '../assets/public/js/counter.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-coupon-code','off')=='on'){
    wp_enqueue_style( 'bwdproeb-coupon', plugin_dir_url( __FILE__ ) . '../assets/public/css/coupon.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-coupon', plugin_dir_url( __FILE__ ) . '../assets/public/js/coupon.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-filterable-gallery','off')=='on'){
    wp_enqueue_style( 'bwdproeb-filterable-gallery-popup', plugin_dir_url( __FILE__ ) . '../assets/public/css/filterable-gallery-popup.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-filterable-gallery', plugin_dir_url( __FILE__ ) . '../assets/public/css/filterable-gallery.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-filterable-gallery', plugin_dir_url( __FILE__ ) . '../assets/public/js/filterable-gallery.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-image-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgaccordion', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgaccordion.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-image-compare','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgcompare', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgcompare.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-imgcompare', plugin_dir_url( __FILE__ ) . '../assets/public/js/imgcompare.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-image-hover-effect','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imagehover', plugin_dir_url( __FILE__ ) . '../assets/public/css/imagehover.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-image-scroll','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgscroll', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgscroll.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-image-shape','off')=='on'){
    wp_enqueue_style( 'bwdproeb-image-shape', plugin_dir_url( __FILE__ ) . '../assets/public/css/image-shape.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-image-swap','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imgswap', plugin_dir_url( __FILE__ ) . '../assets/public/css/imgswap.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-pricing-table','off')=='on'){
    wp_enqueue_style( 'bwdproeb-price-table', plugin_dir_url( __FILE__ ) . '../assets/public/css/price-table.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-progress-bar','off')=='on'){
    wp_enqueue_style( 'bwdproeb-progressbar', plugin_dir_url( __FILE__ ) . '../assets/public/css/progressbar.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-progressbar', plugin_dir_url( __FILE__ ) . '../assets/public/js/progressbar.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-timeline','off')=='on'){
    wp_enqueue_style( 'bwdproeb-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/css/timeline.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/js/timeline.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-social-icon','off')=='on'){
    wp_enqueue_style( 'bwdproeb-social-icon', plugin_dir_url( __FILE__ ) . '../assets/public/css/social-icon.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-creative-tab','off')=='on'){
    wp_enqueue_style( 'bwdproeb-tab', plugin_dir_url( __FILE__ ) . '../assets/public/css/tab.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-tab', plugin_dir_url( __FILE__ ) . '../assets/public/js/tab.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-webinar-info','off')=='on'){
    wp_enqueue_style( 'bwdproeb-webinar', plugin_dir_url( __FILE__ ) . '../assets/public/css/webinar.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-webinar', plugin_dir_url( __FILE__ ) . '../assets/public/js/webinar.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-unique-headers','off')=='on'){
    wp_enqueue_style( 'bwdproeb-header-social-icon', plugin_dir_url( __FILE__ ) . '../assets/public/css/header_social_icon.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-header-top', plugin_dir_url( __FILE__ ) . '../assets/public/css/header-top.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-header', plugin_dir_url( __FILE__ ) . '../assets/public/css/header.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-search_style', plugin_dir_url( __FILE__ ) . '../assets/public/css/search_style.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-header', plugin_dir_url( __FILE__ ) . '../assets/public/js/header.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-photo-stack','off')=='on'){
    wp_enqueue_style( 'bwdproeb-photo-stack', plugin_dir_url( __FILE__ ) . '../assets/public/css/photo-stack.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-image-stack-group','off')=='on'){
    wp_enqueue_style( 'bwdproeb-imsgroup', plugin_dir_url( __FILE__ ) . '../assets/public/css/imsgroup.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-ihover','off')=='on'){
    wp_enqueue_style( 'bwdproeb-ihover', plugin_dir_url( __FILE__ ) . '../assets/public/css/ihover.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-video-popup','off')=='on'){
    wp_enqueue_style( 'bwdproeb-video-popup', plugin_dir_url( __FILE__ ) . '../assets/public/css/video-popup.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-video-popup', plugin_dir_url( __FILE__ ) . '../assets/public/js/video-popup.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-profile-card','off')=='on'){
    wp_enqueue_style( 'bwdproeb-profile-card', plugin_dir_url( __FILE__ ) . '../assets/public/css/profile-card.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-profile-card', plugin_dir_url( __FILE__ ) . '../assets/public/js/profile-card.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-back-to-top','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-bttop', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-bttop.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-bttop', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-bttop.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-masking-video','off')=='on'){
    wp_enqueue_style( 'bwdproeb-masking-video', plugin_dir_url( __FILE__ ) . '../assets/public/css/masking-video.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-masking-video', plugin_dir_url( __FILE__ ) . '../assets/public/js/masking-video.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-logo-carousel','off')=='on'||get_option('bwdeb-plugin-logo-grid','off')=='on'||get_option('bwdeb-plugin-logo-filter','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-main6', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-main6.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb-swiper', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-swiper.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-main7', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-main7.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-swiper', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-swiper.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-map-masking','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-masking2', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-masking2.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-author-bio','off')=='on'){
    wp_enqueue_style( 'bwdproeb-author-bio', plugin_dir_url( __FILE__ ) . '../assets/public/css/author-bio.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-author-bio', plugin_dir_url( __FILE__ ) . '../assets/public/js/author-bio.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-data-table','off')=='on'){
    wp_enqueue_style( 'bwdproeb-data-table', plugin_dir_url( __FILE__ ) . '../assets/public/css/data-table.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-effective-pre-loader','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-loader', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-loader.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb-loader.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-loader.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-loader-extra-transition', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-loader-extra-transition.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-loader-extra-transition.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-loader-extra-transition.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-loader', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-loader.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-loader.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-loader.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-social-share','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb_style3', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_style3.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-breadcrumb','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb_style', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_style.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-background-switcher','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb_main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_main.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb_main', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb_main.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-unfold','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-unfold-content', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-unfold-content.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-unfold-content', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-unfold-content.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-code-highlighter','off')=='on'){
    $styles = [
        'prism-default', 
        'prism-coy', 
        'prism-dark',
        'prism-funky', 
        'prism-okaidia', 
        'prism-solarized-light', 
        'solarized-dark-atom', 
        'prism-tomorrow-night', 
        'prism-twilight', 
        'prism-toolbar', 
        'cold-dark', 
        'colddark-dark', 
        'z-touch', 
        'zonokai-theme', 
        'vs-theme', 
        'nord-theme', 
        'holy-theme', 
        'laserwave-theme', 
        'lucario-theme', 
        'night-owl', 
        'atom-dark', 
        'dracula-theme', 
        'duotone-forest', 
        'duotone-dark', 
        'duotone-earth', 
        'duotone-light', 
        'duotone-sea', 
        'duotone-space', 
        'gruvbox-dark', 
        'gruvbox-light', 
        'ghcolors-theme', 
        'pojoaque', 
        'shades-of-purple', 
        'synthwave', 
        'a11y-dark-theme', 
        'material-dark', 
        'material-light', 
        'material-oceanic'
    ];
    foreach ( $styles as $style ) {
        wp_enqueue_style( str_replace('/', '-', $style), plugin_dir_url( __FILE__ ) . '../assets/public/css/codentor-css/' . $style . '.css', null, BWDEB_PLUGIN_V, 'all' );
    }
    wp_enqueue_script( 'bwdproeb-codentor-prism', plugin_dir_url( __FILE__ ) . '../assets/public/js/codentor-prism.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-codentor-prism-toolbar', plugin_dir_url( __FILE__ ) . '../assets/public/js/codentor-prism-toolbar.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-filterable-popup', plugin_dir_url( __FILE__ ) . '../assets/public/js/filterable-popup.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-single-post-slider','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-main7', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-main7.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-swiper-bundle.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-main9', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-main9.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-swiper-bundle.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-swiper-bundle.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-post-timeline','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-style3', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-style3.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-custom2', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-custom2.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-circle-info','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-main3', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-main3.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-main3', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-main3.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-product-category-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-main4', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-main4.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-owl.carousel.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb-owl.theme.default.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-owl.theme.default.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-main4', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-main4.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-owl.carousel.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-flip-box-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-style.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb-owl.theme.default.min2', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-owl.theme.default.min2.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb-owl.carousel.min2', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-owl.carousel.min2.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-main5', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-main5.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb-owl.carousel.min2', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-owl.carousel.min2.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-info-download-button','off')=='on'){
    wp_enqueue_style( 'bwdproeb-info-downld-btn-style', plugin_dir_url( __FILE__ ) . '../assets/public/css/info-downld-btn-style.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-info-downld-btn-animate.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/info-downld-btn-animate.min.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-post-grid','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-grid', plugin_dir_url( __FILE__ ) . '../assets/public/css/post-grid.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-post-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-main.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-main2', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-main2.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-post-image-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-image-accordion', plugin_dir_url( __FILE__ ) . '../assets/public/css/post-image-accordion.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-post-list','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-list', plugin_dir_url( __FILE__ ) . '../assets/public/css/post-list.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-post-tiles','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-tiles', plugin_dir_url( __FILE__ ) . '../assets/public/css/post-tiles.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-news-ticker','off')=='on'){
    wp_enqueue_style( 'bwdproeb-newsticker-animate.min', plugin_dir_url( __FILE__ ) . '../assets/public/newsticker/animate.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-newsticker-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/newsticker/owl.carousel.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-newsticker-style', plugin_dir_url( __FILE__ ) . '../assets/public/newsticker/style.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-newsticker-main', plugin_dir_url( __FILE__ ) . '../assets/public/newsticker/main.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-newsticker-owl.carousel.min', plugin_dir_url( __FILE__ ) . '../assets/public/newsticker/owl.carousel.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-masonary-blog-post','off')=='on'){
    wp_enqueue_style( 'bwdproeb-post-masonary', plugin_dir_url( __FILE__ ) . '../assets/public/css/post-masonary.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-product-grid','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-css', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_css.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-product-image-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-imgaccordion', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-imgaccordion.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-featured-product','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb_css3', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_css3.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-related-product','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-product', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-product.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb.carousel.min5', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb.carousel.min5.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb.theme.default.min5', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb.theme.default.min5.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb-product', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb-product.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb.carousel.min4', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb.carousel.min4.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-product-tiles','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb_css2', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_css2.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-product-accordion','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-main8', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-main8.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-product-category-tiles','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-tilescat', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-tilescat.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-product-list','off')=='on'){
    wp_enqueue_style( 'bwdproeb-product-list', plugin_dir_url( __FILE__ ) . '../assets/public/css/product-list.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-product-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-wooprogridcaro', plugin_dir_url( __FILE__ ) . '../assets/public/css/wooprogridcaro.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb.carousel.min3', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb.carousel.min3.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb.theme.default.min3', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb.theme.default.min3.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-woopgridcaro', plugin_dir_url( __FILE__ ) . '../assets/public/js/woopgridcaro.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb.carousel.min2', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb.carousel.min2.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-product-list-carousel','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb-caro', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb-caro.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb.carousel.min4', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb.carousel.min4.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-bwdeb.theme.default.min4', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb.theme.default.min4.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-prodlist-caro', plugin_dir_url( __FILE__ ) . '../assets/public/js/prodlist-caro.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-bwdeb.carousel.min3', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb.carousel.min3.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-product-category-grid','off')=='on'){
    wp_enqueue_style( 'bwdproeb-wprodcatgrid', plugin_dir_url( __FILE__ ) . '../assets/public/css/wprodcatgrid.css', null, BWDEB_PLUGIN_V, 'all' );
}
if(get_option('bwdeb-plugin-product-timeline','off')=='on'){
    wp_enqueue_style( 'bwdproeb-product-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/css/product-timeline.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-product-timeline', plugin_dir_url( __FILE__ ) . '../assets/public/js/product-timeline.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-content-switcher','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb_style2', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_style2.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb_min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb_min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-content-switcher','off')=='on'){
    wp_enqueue_style( 'bwdproeb-bwdeb_style2', plugin_dir_url( __FILE__ ) . '../assets/public/css/bwdeb_style2.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-bwdeb_min', plugin_dir_url( __FILE__ ) . '../assets/public/js/bwdeb_min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
if(get_option('bwdeb-plugin-ajax-data-table','off')=='on'){
    wp_enqueue_style( 'bwdproeb-main', plugin_dir_url( __FILE__ ) . '../assets/public/css/ajax-DataTable/main.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-datatables.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/ajax-DataTable/datatables.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_style( 'bwdproeb-responsive.dataTables.min', plugin_dir_url( __FILE__ ) . '../assets/public/css/ajax-DataTable/responsive.dataTables.min.css', null, BWDEB_PLUGIN_V, 'all' );
    wp_enqueue_script( 'bwdproeb-main', plugin_dir_url( __FILE__ ) . '../assets/public/js/ajax-DataTable/main.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-datatables.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/ajax-DataTable/datatables.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
    wp_enqueue_script( 'bwdproeb-dataTables.responsive.min', plugin_dir_url( __FILE__ ) . '../assets/public/js/ajax-DataTable/dataTables.responsive.min.js', array('jquery'), BWDEB_PLUGIN_V, true );
}
