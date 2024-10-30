<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="woocrp_related-product_1 woocrp-slider-common <?php echo esc_attr($settings['woocrp_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['woocrp-product-custom-id'] ); ?>">
<?php require 'woocrp-variable.php' ; ?>
	<div class="woocrp-owl woocrp-owl-carousel woocrp-owl-theme">
		<?php 
		foreach($wooc_product as $wooc_products){ $name_one_fsk01 = wc_get_product($wooc_products); $thumbnail 	= get_the_post_thumbnail_url( $wooc_products ); ?>
		<div class="woocrp-item">
			<div class="woocrp_relproduct-wrap">
				<div class="woocrp_more-content">
					<div class="woocrp_relproduct-content <?php echo esc_html($woocrp_cont_align); ?>">
						<?php if($woocrp_title === 'yes'){ ?><a href="<?php the_permalink( $wooc_products ); ?>"><div class="woocrp_product-title"><?php echo wp_kses_post($name_one_fsk01->get_name()); ?></div></a><?php } ?>
						<?php if($woocrp_description === 'yes'){ ?><div class="woocrp_relproduct-desc"><?php echo wp_trim_words($name_one_fsk01->get_short_description(), $woocrp_description_words, $woocrp_word_trim_indi); ?></div><?php } ?>
						<?php 
						include(__DIR__.'/../wrpcommon/star_rating.php');
						?>
						<?php if($woocrp_new_price === 'yes'){ ?><div class="woocrp_product-price"><?php echo wp_kses_post(get_woocommerce_currency_symbol()); echo wp_kses_post($name_one_fsk01->get_price()); ?></div><?php } ?>
						<?php if($settings['woocrp_btn'] === 'yes'){ ?>
						<div class="woocrp_relproduct-bttn">
							<a class="woocrp_relbtn" href="<?php if($woocrp_choose_link === 'custom_link'){echo esc_url($woocrp_main_button_link);} else{the_permalink( $wooc_products );} ?>"><?php echo esc_html($woocrp_main_button); ?></a>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="woocrp_relproduct-img">
					<?php if($woocrp_image === 'yes'){ ?><a class="woocrp-img" href="<?php the_permalink( $wooc_products ); ?>"><img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php echo esc_attr( $name_one_fsk01->get_name() ); ?>"/></a><?php } ?>
					<?php if($woocrp_cart_btn === 'yes'){ ?>
					<div class="woocrp_relproduct-cart">
						<a class="woocrp_addcart" href="?add-to-cart=<?php echo esc_attr( $wooc_products ); ?>"><i class="<?php echo esc_attr($settings['woocrp_cart_button_icon']); ?>"></i></a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>

