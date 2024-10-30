<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

                <div class="bwdcp_catacory-content <?php echo esc_attr($bwdcp_cont_align); ?>">
                    <?php if('yes' === $bwdcp_cat_title){ ?>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><div class="bwdcp_catagory-title"><?php echo esc_attr($category->name); echo esc_html__(' (', 'bwd-elementor-addons'); echo esc_attr($category->count); echo esc_html__(')', 'bwd-elementor-addons');?></div></a>
                    <?php }
                        include(__DIR__.'/star_rating.php');
                    ?>
                    <?php if('yes' === $bwdcp_cat_description){ ?>
                    <div class="bwdcp_catagory-disce"><?php echo esc_attr($category->description); ?></div>
                    <?php } ?>
                    <?php if('yes' === $bwdcp_cat_button){ ?>
                    <div class="bwdcp_catagory-bttn">
                        <a class="bwdcp_Cbutton" href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($bwdcp_button_text); ?></a>
                    </div>
                    <?php } ?>
                </div>