<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

	<?php if('yes' === $settings['wppgpc_review']){ ?>
	<div class="wppgpc-rating-box">
		<?php $comment_id = $product->get_review_count();
		$wppgpc_star_number = esc_html($settings['wppgpc_review_star_number']);
		$star_number = $wppgpc_star_number - 1;
		$wppgpc_star_icon  = '<div class="wppgpc-star-rating text-center">';
		if(!$comment_id){
			$wppgpc_star_icon .= str_repeat( '<div class="wppgpc-star-icons far fa-star" aria-hidden="true"></div>', $wppgpc_star_number);
		}else{
			$wppgpc_star_icon .= str_repeat( '<div class="wppgpc-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="wppgpc-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
		}
		$wppgpc_star_icon .= '</div>';
		echo wp_kses_post($wppgpc_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($product->get_review_count()).esc_html__(')', 'bwd-elementor-addons').'</div>'; ?>
	</div>
	<?php }