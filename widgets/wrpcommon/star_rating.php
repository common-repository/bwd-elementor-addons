<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

							<?php if('yes' === $settings['woocrp_review']){ ?>
							<div class="woocrp_product-rating <?php echo esc_attr($woocrp_cont_align); ?>">
								<?php 
								$comment_id = $name_one_fsk01->get_review_count();
								$star_number = $woocrp_review_star_number - 1;
								$woocrp_star_icon  = '<div class="woocrp-star-rating text-center">';
								if(!$comment_id){
									$woocrp_star_icon .= str_repeat( '<div class="woocrp_reating far fa-star" aria-hidden="true"></div>', $woocrp_review_star_number);
								}else{
									$woocrp_star_icon .= str_repeat( '<div class="woocrp_reating fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="woocrp_reating fas fa-star-half-alt" aria-hidden="true"></div>';
								}
								$woocrp_star_icon .= '</div>';
								echo wp_kses_post($woocrp_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($comment_id).esc_html__(')', 'bwd-elementor-addons').'</div>';
								?>
                            </div>
							<?php }