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
echo '<div class="woocpa-accordion-all">';
    echo '<div class="woocpa-Accordion-'.esc_attr($woocpa_products_style).' woocpa-accordion-common">';
    $woocpa_all_products = new WP_Query( $woocpa_args ); if($woocpa_all_products->have_posts()):
    while ( $woocpa_all_products->have_posts() ) : $woocpa_all_products->the_post();
        global $product;
        echo '<div class="woocpa-Accordion-default">';
            echo '<div class="woocpa-Accordion-heading woocpa-panel-heading" >';
                echo '<h4 class="woocpa-panel-title">';
                    echo '<span class="woocpa-collapsed" style="text-align:'.esc_attr($settings['woocpa_title_alignment']).'">'.esc_html(get_the_title()).'</span>';
                    if('yes' === $woocpa_icon):
                        echo '<span class="woocpa-collapsed-icon woocpa-colexp-icon">'; 
                            echo '<i class="'.esc_attr($settings['woocpa_accordion_collapsed_icon']['value']).'"></i>'; 
                        echo '</span>';
                        echo '<span class="woocpa-expand-icon woocpa-colexp-icon">'; 
                            echo '<i class="'.esc_attr($settings['woocpa_accordion_expand_icon']['value']).'"></i>'; 
                        echo '</span>';
                    endif;
                echo '</h4>';
            echo '</div>';

            echo '<div id="collapseOne">';
                echo '<div class="woocpa-panel-body">';
                    // Thumbnail
                    $woocpa_thumb_link = '<div class="woocpa-productImg"><a href="'.esc_url(get_the_permalink()).'">';
                    $woocpa_title_link_check = ('yes' === $woocpa_image_link)?$woocpa_thumb_link:'';
                    $woocpa_title_link_close = ('yes' === $woocpa_image_link)?'</div></a>':'';
                    $woocpa_the_thumb = $woocpa_title_link_check. wp_kses_post($product->get_image()).$woocpa_title_link_close;
                    $woocpa_else_thumb = '<div class="woocpa-productImg"><div class="woocpa-img_text woocpa_for_one">'.esc_html__('No Feature Image', 'bwd-elementor-addons').'</div></div>';
                    echo (has_post_thumbnail())?$woocpa_the_thumb:$woocpa_else_thumb;
                    echo '<div class="woocpa-prodCont">';
                        // Cat
                        $woocpa_div = '<div class="woocpa-prodCat"><a href="'.esc_url(plugin_dir_url('../../category/sk').$woocpa_cat_showing_column).'">'.$woocpa_cat_showing_column;
                        $woocpa_cat_switch = ('yes' === $woocpa_cat)?$woocpa_div:'';
                        $woocpa_cat_a_close = ('yes' === $woocpa_cat)?'</a></div>':'';
                        echo wp_kses_post($woocpa_cat_switch.$woocpa_cat_a_close);
                        echo '<div class="woocpa-prodpriratbtn">';
                            echo '<div class="woocpa-prodpriratwrap">';
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
                                echo wp_kses_post('<div class="woocpa-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>');
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
                                $woocpa_regular_price = '<del class="woocpa-regularPrice woocpa-price">'.wc_price($regular_price).' </del><div class="woocpa-salePrice woocpa-price"> '.wc_price($sale_price).'</div>';
                                $woocpa_dis_price = '<div class="woocpa-salePrice woocpa-price"> '.wc_price($regular_price).'</div>';
                                if ( 'outofstock' === $product->get_stock_status() ) {
                                    echo esc_html__('Price not available', 'bwd-elementor-addons');
                                } else {
                                    $woocpa_sale_check = ($sale_price)?$woocpa_regular_price:$woocpa_dis_price;
                                    $woocpa_regu_check = ($regular_price)?$woocpa_sale_check:'';
                                    $woocpa_price_wraper = '<div class="woocpa-prodprice">'.$woocpa_regu_check.'</div>';
                                    echo ('yes' === $woocpa_price)?wp_kses_post($woocpa_price_wraper):'';
                                }
                            }
                                // Rating
                                if('yes' === $settings['woocpa_review']){
                                echo '<div class="woocpa-prodRatingWrap">';
                                    $comment_id = $product->get_review_count();
                                    $woocpa_star_number = esc_html($settings['woocpa_review_star_number']);
                                    $star_number = $woocpa_star_number - 1;
                                    $woocpa_star_icon  = '<div class="woocpa-star-rating text-center">';
                                    if(!$comment_id){
                                        $woocpa_star_icon .= str_repeat( '<div class="woocpa-star-icons far fa-star" aria-hidden="true"></div>', $woocpa_star_number);
                                    }else{
                                        $woocpa_star_icon .= str_repeat( '<div class="woocpa-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="woocpa-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
                                    }
                                    $woocpa_star_icon .= '</div>';
                                    echo wp_kses_post($woocpa_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($product->get_review_count()).esc_html__(')', 'bwd-elementor-addons').'</div>';
                                echo '</div>';
                                }
                            echo '</div>';
                            // Cart
                            $woocpa_cart_text = '<a href="'.$product->add_to_cart_url().'" class="woocpa-cartBtn">'.esc_html($woocpa_cart_button).'</a>';
                            $woocpa_cart_icon = '<a href="'.$product->add_to_cart_url().'" class="woocpa-sscartbtndd"><i class="woocpa-cartBtn '.esc_attr($settings['woocpa_cart_button_icon']).'"></i></a>';
                            $woocpa_cart_T_I = ('text' === $woocpa_cart_type)?$woocpa_cart_text:$woocpa_cart_icon;
                            $woocpa_cart_wrap_html = '<div class="woocpa-atcart-btn">'.$woocpa_cart_T_I.'</div>';
                            echo ('yes' === $woocpa_cart_btn)?wp_kses_post($woocpa_cart_wrap_html):'';
                        echo '</div>';
                        echo '<div class="woocpa-prodOptInfo">';
                            // ======================= Texo
                            $woocpa_sale_wrap = '<div class="woocpa-prodSaleCount woocpa-extra-meta">'.esc_html($woocpa_sale_label) .'<span>' . esc_html($product->get_total_sales()).'</span></div>';
                            echo ('yes' === $woocpa_sale)?wp_kses_post($woocpa_sale_wrap):'';
                            $woocpa_date_wrap = '<div class="woocpa-publishDate woocpa-extra-meta"><span>'.gmdate( 'j M Y', strtotime( esc_html($product->get_date_created()) )).'</span></div>';
                            echo ('yes' === $woocpa_date)?wp_kses_post($woocpa_date_wrap):'';
                            $woocpa_type_wrap = '<div class="woocpa-prodType woocpa-extra-meta">'.esc_html($woocpa_type_label) .'<span>' . esc_html($product->get_type()).'</span></div>';
                            echo ('yes' === $woocpa_type)?wp_kses_post($woocpa_type_wrap):'';
                            // =======================
                        echo '</div>';
                            // Description
                            $woocpa_description = wp_trim_words($product->get_short_description(), $woocpa_description_words, $woocpa_word_trim_indi);
                            $woocpa_description_wrap = '<div class="woocpa-desc"><p class="woocpa-prodDesc">'.$woocpa_description.'</p></div>';
                            echo ('yes' === $woocpa_description_swtcher)?wp_kses_post($woocpa_description_wrap):'';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        endwhile;
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>'; endif;
        wp_reset_query();
    echo '</div>';
echo '</div>';