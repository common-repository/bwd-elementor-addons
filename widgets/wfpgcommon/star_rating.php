<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

							<?php if('yes' === $settings['woofpt_review']){ ?>
							<div class="woofpt-rating-box">
								<?php $comment_id = $product->get_review_count();
								$woofpt_star_number = esc_html($settings['woofpt_review_star_number']);
								$star_number = $woofpt_star_number - 1;
								$woofpt_star_icon  = '<div class="woofpt-star-rating text-center">';
								if(!$comment_id){
									$woofpt_star_icon .= str_repeat( '<div class="woofpt-star-icons far fa-star" aria-hidden="true"></div>', $woofpt_star_number);
								}else{
									$woofpt_star_icon .= str_repeat( '<div class="woofpt-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="woofpt-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
								}
								$woofpt_star_icon .= '</div>';
								echo wp_kses_post($woofpt_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($product->get_review_count()).esc_html__(')', 'bwd-elementor-addons').'</div>'; ?>
                            </div>
							<?php }