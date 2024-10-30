<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

                <?php if('yes' === $bwdcp_cat_image){ ?>
                <div class="bwdcp_catagory-img bwdcp_cat_h_bg bwdcp_cat_n_bg">
                    <?php
                    $thumbnail_id = get_term_meta($category->term_id, "thumbnail_id", true );
                    $image = wp_get_attachment_url($thumbnail_id);
                    ?>
                    <?php if('yes' === $bwdcp_cat_image_link){?><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php } ?>
                    <?php if($thumbnail_id == true){ ?><img src="<?php echo esc_url($image); ?>"><?php }else{echo '<h1 class="text-center text-warning">'.esc_html__('Add Category Image', 'bwd-elementor-addons').'</h1>';} ?>
                    </a>
                </div>
                <?php }