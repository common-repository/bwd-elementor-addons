<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="bwdcp_catagory_1 bwdcp-slider-common <?php echo esc_attr($settings['bwdcp_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdcp-catproduct-custom-id'] ); ?>">
    <?php require 'bwdcp-variable.php';?>
    <div class="bwdcp-owl bwdcp-owl-carousel bwdcp-owl-theme">
        <?php foreach ($categories as $category) { ?>
        <div class="bwdcp-item bwdcp_cat_box_common">
            <div class="bwdcp_catagory-wrap">
                <?php 
                include(__DIR__.'/common/catagory-img.php');
                include(__DIR__.'/common/content.php');
                ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>