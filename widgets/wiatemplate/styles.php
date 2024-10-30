<?php 
/**
 * @
 * @
 * @@@@@@@@@@@--------------------////////// Style template ||||||||
 * @
 * @
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
echo '<div class="woociap-img-accordion-'.esc_attr($woociap_products_style).' woociap-common-style">';
    $woociap_all_products = new WP_Query( $woociap_args ); 
    if($woociap_all_products->have_posts()):
    while ( $woociap_all_products->have_posts() ) : $woociap_all_products->the_post();
        global $product;
    echo '<div class="woociap-single-img">';
     // Cat
         $woociap_div = '<div class="woociap-prodCat"><a href="'.esc_url(plugin_dir_url( '../../category/sk').$woociap_cat_showing_column).'">'.$woociap_cat_showing_column;
        echo ('yes' === $woociap_cat)?wp_kses_post($woociap_div):'';
        echo ('yes' === $woociap_cat)?'</a></div>':'';
        echo ('yes' === $woociap_wrapper)?'<a class="woociap-for-overlay" href="'.esc_url(get_the_permalink()).'">':'<div class="woociap-for-overlay">';
            echo wp_kses_post($product->get_image());
            echo '<div class="woociap-content-box" style="text-align:'.esc_attr($settings['woociap_content_alignment']).'">';
                $wooiap_title_link_check = ('yes' === $woociap_title_link)?'<a href="'.esc_url(get_the_permalink()).'">'.esc_html(get_the_title()).'</a>':esc_html(get_the_title());
                echo '<div class="woociap-title" style="text-align:'.esc_attr($settings['woociap_title_alignment']).'">'.wp_kses_post($wooiap_title_link_check).'</div>';
                echo '<div class="woociap-prodCont">';
                    echo '<div class="woociap-prodpriratbtn">';
                        echo '<div class="woociap-prodpriratwrap">';
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
                                echo wp_kses_post('<div class="woociap-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>');
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
                                $woociap_regular_price = '<del class="woociap-regularPrice woociap-price">'.wc_price($regular_price).' </del><div class="woociap-salePrice woociap-price"> '.wc_price($sale_price).'</div>';
                                $woociap_dis_price = '<div class="woociap-salePrice woociap-price"> '.wc_price($regular_price).'</div>';
                                if ( 'outofstock' === $product->get_stock_status() ) {
                                    echo esc_html__('Price not available', 'bwd-elementor-addons');
                                } else {
                                    $woociap_sale_check = ($sale_price)?$woociap_regular_price:$woociap_dis_price;
                                    $woociap_regu_check = ($regular_price)?$woociap_sale_check:'';
                                    $woociap_price_wraper = '<div class="woociap-prodprice">'.$woociap_regu_check.'</div>';
                                    echo ('yes' === $woociap_price)?wp_kses_post($woociap_price_wraper):'';
                                }
                            }
                            // Rating
                            if('yes' === $settings['woociap_review']){
                            echo '<div class="woociap-prodRatingWrap">';
                                $comment_id = $product->get_review_count();
                                $woociap_star_number = esc_html($settings['woociap_review_star_number']);
                                $star_number = $woociap_star_number - 1;
                                $woociap_star_icon  = '<div class="woociap-star-rating">';
                                if(!$comment_id){
                                    $woociap_star_icon .= str_repeat( '<div class="woociap-star-icons far fa-star" aria-hidden="true"></div>', $woociap_star_number);
                                }else{
                                    $woociap_star_icon .= str_repeat( '<div class="woociap-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="woociap-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
                                }
                                $woociap_star_icon .= '</div>';
                                echo wp_kses_post($woociap_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($product->get_review_count()).esc_html__(')', 'bwd-elementor-addons').'</div>';
                            echo '</div>';
                            }
                        echo '</div>';
                        // Cart
                        $woociap_cart_text = '<a href="'.$product->add_to_cart_url().'" class="woociap-cartBtn">'.esc_html($woociap_cart_button).'</a>';
                        $woociap_imgacr_icon = '<i class="'.esc_attr($settings['woociap_cart_button_icon']).'"></i>'; 
                        $woociap_cart_icon = '<a href="'.$product->add_to_cart_url().'" class="woociap-sscartbtndd">'.$woociap_imgacr_icon.'</a>';
                        $woociap_cart_T_I = ('text' === $woociap_cart_type)?$woociap_cart_text:$woociap_cart_icon;
                        $woociap_cart_wrap_html = '<div class="woociap-atcart-btn">'.$woociap_cart_T_I.'</div>';
                        echo ('yes' === $woociap_cart_btn)?wp_kses_post($woociap_cart_wrap_html):'';
                    echo '</div>';
                    echo '<div class="woociap-prodOptInfo">';
                        // ======================= Texo
                        $woociap_sale_wrap = '<div class="woociap-prodSaleCount woociap-extra-meta">'.esc_html($woociap_sale_label) .'<span>' . esc_html($product->get_total_sales()).'</span></div>';
                        echo ('yes' === $woociap_sale)?wp_kses_post($woociap_sale_wrap):'';
                        $woociap_date_wrap = '<div class="woociap-publishDate woociap-extra-meta"><span>'.gmdate( 'j M Y', strtotime( esc_html($product->get_date_created()) )).'</span></div>';
                        echo ('yes' === $woociap_date)?wp_kses_post($woociap_date_wrap):'';
                        $woociap_type_wrap = '<div class="woociap-prodType woociap-extra-meta">'.esc_html($woociap_type_label) .'<span>' . esc_html($product->get_type()).'</span></div>';
                        echo ('yes' === $woociap_type)?wp_kses_post($woociap_type_wrap):'';
                        // =======================
                    echo '</div>';
                        // Description
                        $woociap_description = wp_trim_words($product->get_short_description(), $woociap_description_words, $woociap_word_trim_indi);
                        $woociap_description_wrap = '<div class="woociap-desc"><p class="woociap-decs">'.$woociap_description.'</p></div>';
                        echo ('yes' === $woociap_description_swtcher)?wp_kses_post($woociap_description_wrap):'';
                echo '</div>';
            echo '</div>';
        echo ('yes' === $woociap_wrapper)?'</a>':'</div>';
    echo '</div>';
        endwhile;
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>'; 
    endif;
        wp_reset_query();
echo '</div>';