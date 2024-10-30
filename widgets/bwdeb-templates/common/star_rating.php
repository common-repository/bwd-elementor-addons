<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

							<?php if('yes' === $settings['bwdcp_review']){ ?>
							<div class="bwdcp_catagory_review">
								<?php
								$bwdcp_star_number = esc_html($settings['bwdcp_review_star_number']);
								$star_number = $bwdcp_star_number - 1;
								$bwdcp_star_icon  = '<div class="bwdcp-star-rating">';
								if( !$category->count == true ) {
									$bwdcp_star_icon .= str_repeat( '<div class="bwdcp-star-icons far fa-star" aria-hidden="true"></div>', esc_html($bwdcp_star_number));
								}else{
									$bwdcp_star_icon .= str_repeat( '<div class="bwdcp-star-icons fas fa-star" aria-hidden="true"></div>', esc_html($star_number)).'<div class="bwdcp-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
								}
								$bwdcp_star_icon .= '</div>';
								echo wp_kses_post($bwdcp_star_icon); ?>
                            </div>
							<?php }