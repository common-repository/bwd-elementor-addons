<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="woocptmln-timeline-two woocptmln-1 woocptmln-common woocptmln-scroll-show">
    <div class="woocptmln-progress-line woocptmln-pb-cmn"></div>
    <div class="woocptmln-timeline-item-container">
        <?php
    $woocptmln_all_products = new WP_Query( $woocptmln_args ); 
    if($woocptmln_all_products->have_posts()):
        while ( $woocptmln_all_products->have_posts() ) : $woocptmln_all_products->the_post();
            global $product;
            ?>
            <div class="woocptmln-box woocptmln-timeline-item woocptmln-timeline-box-bgc-cmmn">
                <div class="woocptmln-timeline-img">
                    <?php 
                        echo ('yes' === $woocptmln_wrapper)?'<a href="'.esc_url(get_the_permalink()).'">'.wp_kses_post($product->get_image()).'</a>':wp_kses_post($product->get_image());
                    ?>
                </div>
                <div class="woocptmln-timeline-item-content woocptmln-content-box woocptmln-timeline-for-content">
                    <?php 
                    $wooiap_title_link_check = ('yes' === $woocptmln_title_link)?'<a href="'.esc_url(get_the_permalink()).'">'.esc_html(get_the_title()).'</a>':esc_html(get_the_title());
                    $wooiap_title_check = '<div class="woocptmln-timeline-title" style="text-align:'.esc_attr($settings['woocptmln_title_alignment']).'"> ' . $wooiap_title_link_check . ' </div>';
                    echo ('yes' === $woocptmln_title)?wp_kses_post($wooiap_title_check):'';
                    // ======================= Texo
                    // Cat
                    $woocptmln_url = plugin_dir_url( '../../category/sk');
                    $woocptmln_div = '<div class="woocptmln-prodCat"><a href="'.esc_url($woocptmln_url.$woocptmln_cat_showing_column).'">'.esc_html($woocptmln_cat_showing_column);
                    echo ('yes' === $woocptmln_cat)?wp_kses_post($woocptmln_div):'';
                    echo ('yes' === $woocptmln_cat)?'</a></div>':'';
                    // Price
                if ( $product->is_type( 'variable' ) ) {
                    $variations = $product->get_available_variations();
                    $variation_prices = array();
                    foreach ( $variations as $variation ) {
                        $variation_price = $variation['display_price'];
                        if ( $variation_price && ! in_array( $variation_price, $variation_prices ) ) {
                            $variation_prices[] = $variation_price;
                        }
                    }
                    if ( count( $variation_prices ) > 1 ) {
                    $min_price = min( $variation_prices );
                    $max_price = max( $variation_prices );
                    echo wp_kses_post('<div class="wppgpc-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>');
                    } else {
                        if ( ! empty( $variation_prices ) ) {
                            echo esc_html(wc_price( floatval( $variation_prices[0] ) ));
                        } else {
                            $variation_stock_status = $product->get_stock_status();
                            if ( 'outofstock' === $variation_stock_status ) {
                                echo esc_html__('Price not available', 'bwd-elementor-addons');
                            } elseif ( ! empty( $variation_prices ) ) {
                                echo esc_html(wc_price( floatval( $variation_prices[0] ) )); // Convert the value to float before passing it to wc_price()
                            }
                        }
                    }
                } else {
                    $regular_price = $product->get_regular_price();
                    $sale_price = $product->get_sale_price();
                    $woocptmln_regular_price = '<del class="woocptmln-regularPrice woocptmln-price">'.wc_price($regular_price).' </del><div class="woocptmln-salePrice woocptmln-price"> '.wc_price($sale_price).'</div>';
                    $woocptmln_dis_price = '<div class="woocptmln-salePrice woocptmln-price"> '.wc_price($regular_price).'</div>';
                    if ( 'outofstock' === $product->get_stock_status() ) {
                        echo esc_html__('Price not available', 'bwd-elementor-addons');
                    } else {
                        $woocptmln_sale_check = ($sale_price)?$woocptmln_regular_price:$woocptmln_dis_price;
                        $woocptmln_regu_check = ($regular_price)?$woocptmln_sale_check:'';
                        $woocptmln_price_wraper = '<div class="woocptmln-prodprice">'.$woocptmln_regu_check.'</div>';
                        echo ('yes' === $woocptmln_price)?wp_kses_post($woocptmln_price_wraper):'';
                    }
                }
                    // Rating
                    if('yes' === $settings['woocptmln_review']){
                        echo '<div class="woocptmln-prodRatingWrap">';
                            $comment_id = $product->get_review_count();
                            $woocptmln_star_number = esc_html($settings['woocptmln_review_star_number']);
                            $star_number = $woocptmln_star_number - 1;
                            $woocptmln_star_icon  = '<div class="woocptmln-star-rating">';
                            if(!$comment_id){
                                $woocptmln_star_icon .= str_repeat( '<div class="woocptmln-star-icons far fa-star" aria-hidden="true"></div>', $woocptmln_star_number);
                            }else{
                                $woocptmln_star_icon .= str_repeat( '<div class="woocptmln-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="woocptmln-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
                            }
                            $woocptmln_star_icon .= '</div>';
                            echo wp_kses_post($woocptmln_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($product->get_review_count()).esc_html__(')', 'bwd-elementor-addons').'</div>';
                        echo '</div>';
                    }
                    $woocptmln_sale_wrap = '<div class="woocptmln-prodSaleCount woocptmln-extra-meta">'.esc_html($woocptmln_sale_label) .'<span>' . esc_html($product->get_total_sales()).'</span></div>';
                    $woocptmln_extra_sale  = ('yes' === $woocptmln_sale)?$woocptmln_sale_wrap:'';
                    echo wp_kses_post($woocptmln_extra_sale);
                    $woocptmln_type_wrap = '<div class="woocptmln-prodType woocptmln-extra-meta">'.esc_html($woocptmln_type_label) .'<span>' . esc_html($product->get_type()).'</span></div>';
                    echo ('yes' === $woocptmln_type)?wp_kses_post($woocptmln_type_wrap):'';
                    // =======================
                    // Description
                    $woocptmln_description = wp_trim_words($product->get_short_description(), $woocptmln_description_words, $woocptmln_word_trim_indi);
                    $woocptmln_description_wrap = '<div class="woocptmln-desc"><p class="woocptmln-timeline-desc">'.$woocptmln_description.'</p></div>';
                    echo ('yes' === $woocptmln_description_swtcher)?wp_kses_post($woocptmln_description_wrap):'';
                    // Cart
                    $woocptmln_cart_text = '<a href="'.$product->add_to_cart_url().'" class="woocptmln-cartBtn">'.esc_html($woocptmln_cart_button).'</a>';
                    $woocptmln_cart_icon = '<a href="'.$product->add_to_cart_url().'" class="woocptmln-sscartbtndd"><i class="woocptmln-cartBtn '.esc_attr($woocptmln_cart_button_icon).'"></i></a>';
                    $woocptmln_cart_T_I = ('text' === $woocptmln_cart_type)?$woocptmln_cart_text:$woocptmln_cart_icon;
                    $woocptmln_cart_wrap_html = '<div class="woocptmln-atcart-btn">'.$woocptmln_cart_T_I.'</div>';
                    echo ('yes' === $woocptmln_cart_btn)?wp_kses_post($woocptmln_cart_wrap_html):'';
                    ?>
                </div>
                <?php 
                $woocptmln_date_wrap = '<div class="woocptmln-timeline-date woocptmln-shape-one woocptmln-extra-meta">'.gmdate( 'j M Y', strtotime( esc_html($product->get_date_created()) )).'</div>';
                echo ('yes' === $woocptmln_date)?wp_kses_post($woocptmln_date_wrap):'';
                ?>
            </div>
        <?php
        endwhile;
        include(__DIR__.'/../wptimcommon/pagination.php');
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>'; 
    endif;
        wp_reset_query();
        ?>
    </div>
</div>