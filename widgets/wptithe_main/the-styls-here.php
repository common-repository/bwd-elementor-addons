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
echo '<div class="woocpt-main-wrapper woocpt-style-'.esc_attr($woocpt_products_style).'">';
    $woocpt_all_products = new WP_Query( $woocpt_args ); if($woocpt_all_products->have_posts()):
    while ( $woocpt_all_products->have_posts() ) : $woocpt_all_products->the_post();
        global $product;
    echo '<article class="woocpt-img-wrapper">';
        echo '<div class="woocpt-content-wrapper '.esc_attr($woocpt_cont_align).'">';
            // Title
            $woocpt_for_h2 = ('yes' === $woocpt_title)?$woocpt_title_tags:'h2';
            $woocpt_a_tag = '<a href="'.esc_url(get_the_permalink()).'">';
            $woocpt_title_link_switcher = ('yes' === $woocpt_title_link)?$woocpt_a_tag:'';
            echo '<div class="woocpt-title">'.wp_kses_post($woocpt_title_link_switcher).'<'.esc_attr($woocpt_for_h2).' class="woocpt-h2-title">';
            echo ('yes' === $woocpt_title)?get_the_title():'';
            echo '</'.esc_attr($woocpt_for_h2).'></a></div>';
            // Description
            $woocpt_description = wp_trim_words($product->get_short_description(), $woocpt_description_words, $woocpt_word_trim_indi);
            echo '<div class="woocpt-desc"><p>';
            echo ('yes' === $woocpt_description_swtcher)?$woocpt_description:'';
            echo '</p></div>';
            echo '<div class="woocpt-contalign-wrapper '.esc_attr($woocpt_cont_align).'">';
                echo '<div class="bwdts-pricart-wrapper">';
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
                        echo wp_kses_post('<div class="woocpt-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>');
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
                        $woocpt_regular_price = '<del class="woocpt-rootprice woocpt-price">'.wc_price($regular_price).' </del><div class="woocpt-disprice woocpt-price"> '.wc_price($sale_price).'</div>';
                        $woocpt_dis_price = '<div class="woocpt-disprice woocpt-price"> '.wc_price($regular_price).'</div>';
                        if ( 'outofstock' === $product->get_stock_status() ) {
                            echo esc_html__('Price not available', 'bwd-elementor-addons');
                        } else {
                            $woocpt_sale_check = ($sale_price)?$woocpt_regular_price:$woocpt_dis_price;
                            $woocpt_regu_check = ($regular_price)?$woocpt_sale_check:'';
                            $woocpt_price_wraper = '<div class="woocpt-prival">'.$woocpt_regu_check.'</div>';
                            echo ('yes' === $woocpt_price)?wp_kses_post($woocpt_price_wraper):'';
                        }
                    }
                    // Cart
                    $woocpt_cart_text = '<a href="'.$product->add_to_cart_url().'" class="woocpt-cartbtn">'.esc_html($woocpt_cart_button).'</a>';
                    $woocpt_cart_button_icon = ($settings['woocpt_cart_type'] == 'icon')?$settings['woocpt_cart_button_icon']['value']:'';
                    $woocpt_cart_icon = '<a href="'.$product->add_to_cart_url().'" class="woocpt-sscartbtndd"><i class="woocpt-cartbtn '.esc_attr($woocpt_cart_button_icon).'"></i></a>';
                    $woocpt_cart_T_I = ('text' === $woocpt_cart_type)?$woocpt_cart_text:$woocpt_cart_icon;
                    $woocpt_cart_wrap_html = '<div class="woocpt-atcart-btn">'.$woocpt_cart_T_I.'</div>';
                    echo ('yes' === $woocpt_cart_btn)?wp_kses_post($woocpt_cart_wrap_html):'';
                echo '</div>';
                // Rating
                if('yes' === $settings['woocpt_review']){
                echo '<div class="woocpt-review">';
                    $comment_id = $product->get_review_count();
                    $woocpt_star_number = esc_html($settings['woocpt_review_star_number']);
                    $star_number = $woocpt_star_number - 1;
                    $woocpt_star_icon  = '<div class="woocpt-star-rating text-center">';
                    if(!$comment_id){
                        $woocpt_star_icon .= str_repeat( '<div class="woocpt-star-icons far fa-star" aria-hidden="true"></div>', esc_html($woocpt_star_number));
                    }else{
                        $woocpt_star_icon .= str_repeat( '<div class="woocpt-star-icons fas fa-star" aria-hidden="true"></div>', esc_html($star_number)).'<div class="woocpt-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
                    }
                    $woocpt_star_icon .= '</div>';
                    echo wp_kses_post($woocpt_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($comment_id).esc_html__(')', 'bwd-elementor-addons').'</div>';
                echo '</div>';
                }
            echo '</div>';
            // ======================= Texo
            $woocpt_sale_wrap = '<div class="woocpt-total-sale woocpt-extra-meta">'.esc_html($woocpt_sale_label) .'<span>' . esc_html($product->get_total_sales()).'</span></div>';
            $woocpt_extra_sale  = ('yes' === $woocpt_sale)?$woocpt_sale_wrap:'';
            $woocpt_date_wrap = '<div class="woocpt-pub-date woocpt-extra-meta">'.gmdate( 'j M Y', strtotime( esc_html($product->get_date_created()) )).'</div>';
            $woocpt_extra_date = ('yes' === $woocpt_date)?$woocpt_date_wrap:'';
            $woocpt_type_wrap = '<div class="woocpt-product-type woocpt-extra-meta">'.esc_html($woocpt_type_label) .'<span>' . esc_html($product->get_type()).'</span></div>';
            $woocpt_extra_type  = ('yes' === $woocpt_type)?$woocpt_type_wrap:'';
            echo wp_kses_post($woocpt_extra_sale.$woocpt_extra_date.$woocpt_extra_type);
            // =======================
        echo '</div>';
        // Cat
        $woocpt_div = '<div class="woocpt-cat">'.$woocpt_cat_showing_column;
        $woocpt_cat_switch = ('yes' === $woocpt_cat)?$woocpt_div:'';
        $woocpt_cat_a_close = ('yes' === $woocpt_cat)?'</div>':'';
        echo wp_kses_post($woocpt_cat_switch. $woocpt_cat_a_close);
        // Thumbnail
        $woocpt_thumb_link = '<a href="'.esc_url(get_the_permalink()).'">';
        $woocpt_title_link_check = ('yes' === $woocpt_image_link)?$woocpt_thumb_link:'';
        $woocpt_title_link_close = ('yes' === $woocpt_image_link)?'</a>':'';
        $woocpt_the_thumb = $woocpt_title_link_check. $product->get_image().$woocpt_title_link_close;
        $woocpt_else_thumb = '<div class="woocpt-img_text woocpt_for_one">'.esc_html__('No Feature Image', 'bwd-elementor-addons').'</div>';
        $woocpt_thumb_check = (has_post_thumbnail())?$woocpt_the_thumb:$woocpt_else_thumb;
        echo wp_kses_post($woocpt_thumb_check);
    echo '</article>';
    endwhile;
    else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>'; endif;
    wp_reset_query();
echo '</div>';
