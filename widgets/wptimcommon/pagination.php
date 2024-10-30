<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

		<div class="woocptmln_pagination_item <?php echo esc_attr($woocptmln_pagination_align); ?>">
			<?php
			$total_pages = $woocptmln_all_products->max_num_pages;
			if ($total_pages > 1){
				$current_page = max(1, get_query_var('paged'));
				if('none' === $woocptmln_the_pagination_type){
					echo wp_kses_post(paginate_links(array(
						'show_all' => false,
					)));
				} elseif('woocptmln-number-and-text' === $woocptmln_the_pagination_type){
					echo wp_kses_post(paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_text' => esc_html($woocptmln_blog_prev_format),
						'next_text' => esc_html($woocptmln_blog_next_format),
					)));
				} elseif('number' === $woocptmln_the_pagination_type){
					echo wp_kses_post(paginate_links(array(
						'current' => $current_page,
						'total' => $total_pages,
						'prev_next' => false,
					)));
				}
			}
			?> </div>