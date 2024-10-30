<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
                <div class="bwdbpl_pagination_item <?php echo esc_attr($bwdbpl_pagination_position); ?>">
                <?php
                $total_pages = $wp_query->max_num_pages;
                if ($total_pages > 1){
                    $current_page = max(1, get_query_var('paged'));
                    if('none' === $bwdbpl_the_pagination_type){
                        echo wp_kses_post(paginate_links(array(
                            'show_all' => false,
                        )));
                    } elseif('number-and-text' === $bwdbpl_the_pagination_type){
                        echo wp_kses_post(paginate_links(array(
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text' => esc_html($bwdbpl_blog_prev_format),
                            'next_text' => esc_html($bwdbpl_blog_next_format),
                        )));
                    } elseif('number' === $bwdbpl_the_pagination_type){
                        echo wp_kses_post(paginate_links(array(
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_next' => false,
                        )));
                    }
                }
                ?> </div>