<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="thepsttmln-timeline-two thepsttmln-1 thepsttmln-common thepsttmln-scroll-show">
    <div class="thepsttmln-progress-line thepsttmln-pb-cmn"></div>
    <div class="thepsttmln-timeline-item-container">
        <?php
$wp_query = new \WP_Query($thepsttmln_args);
if ($wp_query->have_posts()):
    while ($wp_query->have_posts()):
        $wp_query->the_post();
        ?>
            <div class="thepsttmln-box thepsttmln-timeline-item thepsttmln-timeline-box-bgc-cmmn">
                <div class="thepsttmln-timeline-img">
                    <?php
        // Image
        $thepsttmln_image_a_tag = '<a class="thepsttmln_thumbnail" href="' . esc_url(get_the_permalink()). '">';
        echo ($thepsttmln_yes_value === $thepsttmln_image_link_show) ? wp_kses_post($thepsttmln_image_a_tag) : '';
        $this->thepsttmln_post_thumbnail_here();
        echo ($thepsttmln_yes_value === $thepsttmln_image_link_show) ? '</a>' : '';
        ?>
            </div>
            <div class="thepsttmln-timeline-item-content thepsttmln-content-box thepsttmln-timeline-for-content">
                <?php include __DIR__ . '/../common/texo.php';?>
            </div>
            <?php
            // date
            $thepsttmln_post_date = get_the_date(esc_html($thepsttmln_blog_date_format));
            $thepsttmln_date_title = '<span>' . $thepsttmln_post_date . '</span></div>';
            $thepsttmln_date_icon = '<i class="thepsttmln_icons far fa-calendar-alt"></i>';
            $thepsttmln_date_show_icon = ('show' == $thepsttmln_taxo_icon) ? $thepsttmln_date_icon : '';
            $thepsttmln_date_wrap_div = '<div class="thepsttmln-timeline-date thepsttmln-shape-one thepsttmln-extra-meta">' . $thepsttmln_date_show_icon;
            echo ($thepsttmln_yes_value === $thepsttmln_date_swtcher) ? wp_kses_post($thepsttmln_date_wrap_div) : '';
            echo ($thepsttmln_yes_value === $thepsttmln_date_swtcher) ? wp_kses_post($thepsttmln_date_title) : '';
            ?>
        </div>
        <?php
    endwhile;
    include __DIR__ . '/../common/bwdeb_pagination.php';
else:
    echo '<div class="bwdsk_none_product" style="text-align:center;">' . esc_html__('You don\'t have any posts. Please add your post.', 'bwd-elementor-addons') . '</div>';
endif;
?>
    </div>
</div>