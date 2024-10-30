<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

							<?php if('yes' === $settings['bwdcrtplst_review']){ ?>
							<div class="bwdcrtplst_blog_comment">
								<div class="bwdcrtplst-rating-box">
									<?php $comment_id = $product->get_review_count();
									$bwdcrtplst_star_number = esc_html($settings['bwdcrtplst_review_star_number']);
									$star_number = $bwdcrtplst_star_number - 1;
									$bwdcrtplst_star_icon  = '<div class="bwdcrtplst-star-rating text-center">';
									if(!$comment_id){
										$bwdcrtplst_star_icon .= str_repeat( '<div class="bwdcrtplst-star-icons far fa-star" aria-hidden="true"></div>', $bwdcrtplst_star_number);
									}else{
										$bwdcrtplst_star_icon .= str_repeat( '<div class="bwdcrtplst-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="bwdcrtplst-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
									}
									$bwdcrtplst_star_icon .= '</div>';
									echo wp_kses_post($bwdcrtplst_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($product->get_review_count()).esc_html__(')', 'bwd-elementor-addons').'</div>'; ?>
								</div>
                            </div>
							<?php }