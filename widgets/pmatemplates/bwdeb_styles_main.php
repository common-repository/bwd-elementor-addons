<?php
if ( ! defined( 'ABSPATH' ) ) exit;
echo '<div class="mbpost-main-wrapper mbpost-style-'.esc_attr($mbpost_styles).'">';
    $wp_query = new \WP_Query( $mbpost_args );
    if($wp_query->have_posts()) :
        echo '<div class="mbpost_cont_wrap">';
        while($wp_query->have_posts()) : $wp_query->the_post();
    echo '<article class="mbpost-img-wrapper">';
        if($mbpost_styles == 'twentytwo' || $mbpost_styles == 'twentythree'){
        // Image for twentytwo & twentythree style
        $mbpost_image_a_tag = '<a class="mbpost_thumbnail" href="'.esc_url(get_the_permalink()).'">';
        echo ($mbpost_yes_value === $mbpost_image_link_show)?wp_kses_post($mbpost_image_a_tag):'';
        $this->mbpost_post_thumbnail_here();
        echo '</a>';
        echo '<div class="mbpost-content-wrapper '.esc_attr($mbpost_cont_align).'">';
            // Title
            if($mbpost_yes_value === $mbpost_title_swtcher):
                echo '<div class="mbpost-title">';
                $mbpost_a_tag = '<a href="'.esc_url(get_the_permalink()).'">';
                $mbpost_title_link_switcher = ($mbpost_yes_value === $mbpost_title_link_show)?$mbpost_a_tag:'';
                echo wp_kses_post($mbpost_title_link_switcher).'<'.esc_attr($mbpost_title_tags).' class="mbpost-h2-title">'. esc_html(get_the_title());
                echo '</'.esc_attr($mbpost_title_tags).'></a></div>';
            endif;
            // Description
            $mbpost_description = wp_trim_words(get_the_content(), $mbpost_post_description_words, $mbpost_blog_word_trim_indi);
            $mbpost_description_switcher = ($mbpost_yes_value === $mbpost_description_swtcher)?$mbpost_description:'';
            echo '<div class="mbpost-desc"><p>';
            echo wp_kses_post($mbpost_description_switcher);
            echo '</p></div>';
            echo '<div class="mbpost-meta '.esc_attr($mbpost_cont_align).'">';
                // date
                $mbpost_post_date = get_the_date(esc_html($mbpost_blog_date_format));
                $mbpost_date_title = '<span>'.$mbpost_post_date.'</span></div>';
                $mbpost_date_icon = '<i class="mbpost_icons far fa-calendar-alt"></i>';
                $mbpost_date_show_icon = ('show' == $mbpost_taxo_icon)?$mbpost_date_icon:'';
                $mbpost_date_wrap_div = '<div class="mbpost-date">'.$mbpost_date_show_icon;
                echo ($mbpost_yes_value === $mbpost_date_swtcher)? wp_kses_post($mbpost_date_wrap_div):'';
                echo ($mbpost_yes_value === $mbpost_date_swtcher)? wp_kses_post($mbpost_date_title):'';
                // author
                $mbpost_control_icon = $settings['mbpost_author_icon']['value'];
                $mbpost_author_icon = '<i class="mbpost_icons '.esc_attr($mbpost_control_icon).'"></i>';
                $mbpost_gravater = wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) ));
                $mbpost_total_author = ('icon' === $mbpost_author_indicator) ? $mbpost_author_icon : $mbpost_gravater;
                $mbpost_author = ($mbpost_yes_value === $mbpost_author_swtcher) ? $mbpost_total_author : '';
                echo '<div class="mbpost-author">';
                echo wp_kses_post($mbpost_author);
                echo '<span>'.get_the_author_meta( 'nickname' ).'</span>';
                echo '</div>';
                // Tags
                $mbpost_post_tags = get_the_tags();
                $mbpost_main_tag = ($mbpost_post_tags) ? $mbpost_post_tags[0]->name:'';
                $mbpost_tag_title = '<span>'.$mbpost_main_tag.'</span></div>';
                $mbpost_tag_icon = '<i class="fas fa-tag"></i>';
                $mbpost_tag_show_icon = ('show' == $mbpost_taxo_icon)?$mbpost_tag_icon:'';
                $mbpost_wrap_div = '<div class="mbpost-tag">'.$mbpost_tag_show_icon;
                echo ($mbpost_yes_value == $mbpost_tags_swtcher)?wp_kses_post($mbpost_wrap_div):'';
                echo ($mbpost_yes_value == $mbpost_tags_swtcher)?wp_kses_post($mbpost_tag_title):'';
                // Comment
                $mbpost_main_txtComm = 'Comment ('.get_comments_number().')';
                $mbpost_main_comm = (!have_comments())?esc_html($mbpost_main_txtComm):'';
                $mbpost_comm_title = '<span>'.$mbpost_main_comm.'</span></div>';
                $mbpost_comm_icon = '<i class="fas fa-comments"></i>';
                $mbpost_comm_show_icon = ('show' == $mbpost_taxo_icon)?$mbpost_comm_icon:'';
                $mbpost_wrap_comm_div = '<div class="mbpost-comment">'.$mbpost_comm_show_icon;
                echo ($mbpost_yes_value === $mbpost_comments_swtcher)?wp_kses_post($mbpost_wrap_comm_div):'';
                echo ($mbpost_yes_value === $mbpost_comments_swtcher)?wp_kses_post($mbpost_comm_title):'';
            echo '</div>';
            // Button for twentytwo and three
            if($mbpost_cart_button_ss == 'yes'):
            echo '<div class="mbpost-btnWrap">';
                echo '<a href="'.esc_url(get_the_permalink()).'" class="mbpost-moreBtn">'.esc_html($mbpost_cart_button).'<span class="mbpost-moreIcon"><i class="'.esc_attr($mbpost_cart_button_icon).'"></i></span></a>';
            echo '</div>';
            endif;
        echo '</div>';
        if($mbpost_yes_value === $mbpost_categories_swtcher):
            if('show_main_cat' === $mbpost_cat_show_status){ 
                $categories = get_the_category();
                $mbpost_url = plugin_dir_url( '../../category/sk');
                if ( ! empty( $categories ) ):
                    echo '<ul class="post-categories"><li><a href="'. esc_url( $mbpost_url.$categories[0]->name ) .'" class="mbpost-cat">'.esc_html( $categories[0]->name).'</a></li></ul>';	
                endif;
            } elseif('show_multiple_cat' === $mbpost_cat_show_status){
                the_category();
             }
        endif;
        } else{ // For else style without twentytwo & twentythree styles
        echo '<div class="mbpost-content-wrapper '.esc_attr($mbpost_cont_align).'">';
            // Title
            if($mbpost_yes_value === $mbpost_title_swtcher):
                echo '<div class="mbpost-title">';
                $mbpost_a_tag = '<a href="'.esc_url(get_the_permalink()).'">';
                $mbpost_title_link_switcher = ($mbpost_yes_value === $mbpost_title_link_show)?$mbpost_a_tag:'';
                echo wp_kses_post($mbpost_title_link_switcher).'<'.esc_attr($mbpost_title_tags).' class="mbpost-h2-title">'. esc_html(get_the_title());
                echo '</'.esc_attr($mbpost_title_tags).'></a></div>';
            endif;
            // Description
            $mbpost_description = wp_trim_words(get_the_content(), $mbpost_post_description_words, $mbpost_blog_word_trim_indi);
            $mbpost_description_switcher = ($mbpost_yes_value === $mbpost_description_swtcher)?$mbpost_description:'';
            echo '<div class="mbpost-desc"><p>';
            echo wp_kses_post($mbpost_description_switcher);
            echo '</p></div>';
            echo '<div class="mbpost-meta '.esc_attr($mbpost_cont_align).'">';
                // date
                $mbpost_post_date = get_the_date(esc_html($mbpost_blog_date_format));
                $mbpost_date_title = '<span>'.$mbpost_post_date.'</span></div>';
                $mbpost_date_icon = '<i class="mbpost_icons far fa-calendar-alt"></i>';
                $mbpost_date_show_icon = ('show' == $mbpost_taxo_icon)?$mbpost_date_icon:'';
                $mbpost_date_wrap_div = '<div class="mbpost-date">'.$mbpost_date_show_icon;
                echo ($mbpost_yes_value === $mbpost_date_swtcher)? wp_kses_post($mbpost_date_wrap_div):'';
                echo ($mbpost_yes_value === $mbpost_date_swtcher)? wp_kses_post($mbpost_date_title):'';
                // author
                $mbpost_control_icon = $settings['mbpost_author_icon']['value'];
                $mbpost_author_icon = '<i class="mbpost_icons '.esc_attr($mbpost_control_icon).'"></i>';
                $mbpost_gravater = wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) ));
                $mbpost_total_author = ('icon' === $mbpost_author_indicator) ? $mbpost_author_icon : $mbpost_gravater;
                $mbpost_author = ($mbpost_yes_value === $mbpost_author_swtcher) ? $mbpost_total_author : '';
                echo '<div class="mbpost-author">';
                echo wp_kses_post($mbpost_author);
                echo '<span>'.esc_html(get_the_author_meta( 'nickname' )).'</span>';
                echo '</div>';
                // Tags
                $mbpost_post_tags = get_the_tags();
                $mbpost_main_tag = ($mbpost_post_tags) ? $mbpost_post_tags[0]->name:'';
                $mbpost_tag_title = '<span>'.$mbpost_main_tag.'</span></div>';
                $mbpost_tag_icon = '<i class="fas fa-tag"></i>';
                $mbpost_tag_show_icon = ('show' == $mbpost_taxo_icon)?$mbpost_tag_icon:'';
                $mbpost_wrap_div = '<div class="mbpost-tag">'.$mbpost_tag_show_icon;
                echo ($mbpost_yes_value == $mbpost_tags_swtcher)?wp_kses_post($mbpost_wrap_div):'';
                echo ($mbpost_yes_value == $mbpost_tags_swtcher)?wp_kses_post($mbpost_tag_title):'';
                // Comment
                $mbpost_main_txtComm = 'Comment ('.get_comments_number().')';
                $mbpost_main_comm = (!have_comments())?esc_html($mbpost_main_txtComm):'';
                $mbpost_comm_title = '<span>'.$mbpost_main_comm.'</span></div>';
                $mbpost_comm_icon = '<i class="fas fa-comments"></i>';
                $mbpost_comm_show_icon = ('show' == $mbpost_taxo_icon)?$mbpost_comm_icon:'';
                $mbpost_wrap_comm_div = '<div class="mbpost-comment">'.$mbpost_comm_show_icon;
                echo ($mbpost_yes_value === $mbpost_comments_swtcher)?wp_kses_post($mbpost_wrap_comm_div):'';
                echo ($mbpost_yes_value === $mbpost_comments_swtcher)?wp_kses_post($mbpost_comm_title):'';
            echo '</div>';
        echo '</div>';
        if($mbpost_yes_value === $mbpost_categories_swtcher):
            if('show_main_cat' === $mbpost_cat_show_status){ 
                $categories = get_the_category();
                $mbpost_url = plugin_dir_url( '../../category/sk' );
                if ( ! empty( $categories ) ):
                    echo '<ul class="post-categories"><li><a href="'. esc_url( $mbpost_url.$categories[0]->name ) .'" class="mbpost-cat">'.esc_html( $categories[0]->name).'</a></li></ul>';	
                endif;
            } elseif('show_multiple_cat' === $mbpost_cat_show_status){
                the_category();
             }
        endif;
        // Else Image
        $mbpost_image_a_tag = '<a class="mbpost_thumbnail" href="'.esc_url(get_the_permalink()).'">';
        echo ($mbpost_yes_value === $mbpost_image_link_show)?wp_kses_post($mbpost_image_a_tag):'';
        $this->mbpost_post_thumbnail_here();
        echo '</a>'; }
    echo '</article>';
        endwhile;
        echo '</div>';
        include(__DIR__.'/../common/pagination.php');
    endif;
echo '</div>';