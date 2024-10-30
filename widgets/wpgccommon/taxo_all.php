<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

	<div class="wppgpc-category-tag <?php echo esc_attr($wppgpc_cont_align); ?>">
		<?php if('yes' === $settings['wppgpc_cat']){ ?>
		<div class="wppgpc-pro-cate">
			<?php echo wc_get_product_category_list(get_the_id()); ?>
		</div>
		<?php } ?>
		<?php if('yes' === $settings['wppgpc_tag']){ ?>
		<div class="wppgpc-pro-tag">
			<?php echo wp_kses_post(wc_get_product_tag_list(get_the_id())); ?>
		</div>
		<?php } ?>
	</div>
	<div class="wppgpc-totalsale-pubdate <?php echo esc_attr($wppgpc_cont_align); ?>">
		<?php if('yes' === $settings['wppgpc_sell']){ ?>
		<div class="wppgpc-total-sale">
			<?php echo esc_html($wppgpc_sell_label).'<span>' . esc_html($product->get_total_sales()).'</span>'; ?>
		</div>
		<?php } ?>
		<?php if('yes' === $settings['wppgpc_date']){ ?>
		<div class="wppgpc-pub-date">
			
                                <?php
                                $product_date_created = $product->get_date_created();

                                if ( $product_date_created ) {
                                    $formatted_date = gmdate( 'j M Y', strtotime( esc_html( $product_date_created->date('Y-m-d H:i:s') ) ) );
                                    echo esc_html( $formatted_date );
                                } else {
                                    echo esc_html__( 'Date not available', 'your-textdomain' );
                                }
                                ?>
		</div>
		<?php } ?>
	</div>