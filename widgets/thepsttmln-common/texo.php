<?php
if ( ! defined( 'ABSPATH' ) ) exit;
// Title
if ($thepsttmln_yes_value === $thepsttmln_title_swtcher):
    echo '<div class="thepsttmln-timeline-title">';
    $thepsttmln_a_tag = '<a href="' . esc_url(get_the_permalink()). '">';
    $thepsttmln_title_link_switcher = ($thepsttmln_yes_value === $thepsttmln_title_link_show) ? $thepsttmln_a_tag : '';
    echo wp_kses_post($thepsttmln_title_link_switcher) . '<' . esc_attr($thepsttmln_title_tags) . ' class="thepsttmln-h2-title">' . esc_html(get_the_title()). '</' . esc_attr($thepsttmln_title_tags) . '></a></div>';
endif;
// ======================= Texo
// Cat
if($thepsttmln_yes_value === $thepsttmln_categories_swtcher):
    echo '<div class="thepsttmln-prodCat">';
    if('show_main_cat' === $thepsttmln_cat_show_status){ 
        $categories = get_the_category();
        if ( ! empty( $categories ) ):
            echo '<ul class="post-categories"><li><a href="'. esc_url( plugin_dir_url( '../../category/'.'name').$categories[0]->name ) .'" class="thepsttmln-cat">'.esc_html( $categories[0]->name).'</a></li></ul>';	
        endif;
    } elseif('show_multiple_cat' === $thepsttmln_cat_show_status){
        the_category();
     }
    echo '</div>';
endif;
// author
$thepsttmln_author_icon = '<i class="thepsttmln_icons ' . esc_attr($settings['thepsttmln_author_icon']['value']) . '"></i>';
$thepsttmln_gravater = wp_kses_post(get_avatar(get_the_author_meta('ID'), $size = '50', $default = '', $alt = 'Author Image', $args = array('class' => 'wt-author-img')));
$thepsttmln_author_indicator_check = ('icon' === $thepsttmln_author_indicator) ? $thepsttmln_author_icon : '';
$thepsttmln_author_indicator_gravatar = ('gravatar' === $thepsttmln_author_indicator) ? esc_url($thepsttmln_gravater) : '';
$thepsttmln_author = ($thepsttmln_yes_value === $thepsttmln_author_swtcher) ? $thepsttmln_author_indicator_check . $thepsttmln_author_indicator_gravatar . '<span>' . get_the_author_meta('nickname') . '</span>' : '';
echo '<div class="thepsttmln-meta-wrap">';
echo '<div class="thepsttmln-prodSaleCount thepsttmln-extra-meta">' . wp_kses_post($thepsttmln_author) .'</div>';
// Tags
$thepsttmln_post_tags = get_the_tags();
$thepsttmln_main_tag = ($thepsttmln_post_tags) ? $thepsttmln_post_tags[0]->name : '';
$thepsttmln_tag_title = '<span>' . $thepsttmln_main_tag . '</span></div>';
$thepsttmln_tag_icon = '<i class="fas fa-tag"></i>';
$thepsttmln_tag_show_icon = ('show' == $thepsttmln_taxo_icon) ? $thepsttmln_tag_icon : '';
$thepsttmln_wrap_div = '<div class="thepsttmln-prodType thepsttmln-extra-meta">' . $thepsttmln_tag_show_icon;
$thepsttmln_wrap_tag = ($thepsttmln_yes_value == $thepsttmln_tags_swtcher) ? $thepsttmln_wrap_div : '';
$thepsttmln_wrap_close_div = ($thepsttmln_yes_value == $thepsttmln_tags_swtcher) ? $thepsttmln_tag_title : '';
echo wp_kses_post($thepsttmln_wrap_tag . $thepsttmln_wrap_close_div);
// Comment
$thepsttmln_main_txtComm = 'Comment ('.get_comments_number() . ')';
$thepsttmln_main_comm = (!have_comments()) ? esc_html($thepsttmln_main_txtComm):'';
$thepsttmln_comm_title = '<span>' . $thepsttmln_main_comm . '</span></div>';
$thepsttmln_comm_icon = '<i class="fas fa-comments"></i>';
$thepsttmln_comm_show_icon = ('show' == $thepsttmln_taxo_icon) ? $thepsttmln_comm_icon : '';
$thepsttmln_wrap_comm_div = '<div class="thepsttmln-salePrice thepsttmln-price">' . $thepsttmln_comm_show_icon;
$thepsttmln_comm_switch = ($thepsttmln_yes_value === $thepsttmln_comments_swtcher) ? $thepsttmln_wrap_comm_div : '';
$thepsttmln_comm_title_echo = ($thepsttmln_yes_value === $thepsttmln_comments_swtcher) ? $thepsttmln_comm_title : '';
echo wp_kses_post($thepsttmln_comm_switch . $thepsttmln_comm_title_echo);
echo '</div>';
// =======================
// Description
$thepsttmln_description = wp_trim_words(get_the_content(), $thepsttmln_post_description_words, $thepsttmln_blog_word_trim_indi);
$thepsttmln_description_switcher = ($thepsttmln_yes_value === $thepsttmln_description_swtcher) ? $thepsttmln_description : '';
echo '<div class="thepsttmln-desc"><p class="thepsttmln-timeline-desc">' . esc_html($thepsttmln_description_switcher) . '</p></div>';
// Button
$thepsttmln_cart_text = '<a href="' . esc_url(get_the_permalink()). '" class="thepsttmln-cartBtn">' . esc_html($thepsttmln_cart_button) . '</a>';
$thepsttmln_cart_icon = '<a href="' . esc_url(get_the_permalink()). '" class="thepsttmln-sscartbtndd"><i class="thepsttmln-cartBtn ' . esc_attr($thepsttmln_cart_button_icon) . '"></i></a>';
$thepsttmln_cart_T_I = ('text' === $thepsttmln_cart_type) ? $thepsttmln_cart_text : $thepsttmln_cart_icon;
$thepsttmln_cart_wrap_html = '<div class="thepsttmln-atcart-btn">' . $thepsttmln_cart_T_I . '</div>';
echo ('yes' === $thepsttmln_cart_btn) ? wp_kses_post($thepsttmln_cart_wrap_html) : '';
