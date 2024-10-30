<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="thf_header_common dates-header-2 <?php echo esc_attr($thf_menu_indi_align).' '.esc_attr($thf_menu_i_main) .' '. esc_attr($thf_menu_i_child); ?>"
data-sticky-h="<?php echo esc_attr($thf_sticky_h )?>"
    data-scroll="<?php echo esc_attr($thf_dk_scroll )?>"
    data-brk="<?php echo esc_attr($thf_menu_brkPoint )?>"
>
    <div class="thf-main-header-width">
        <?php if('yes' === $thf_nav_logo_switcher){ ?>
        <div class="dates-header-logo <?php echo esc_attr($thf_logo_align); ?>">
            <?php if('custom_link' === $thf_choose_logo_link){ ?><a href="<?php echo esc_url($settings['thf_logo_wraper_link']['url']); ?>"><?php } else{ ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php }
                $thf_custom_logo_id = get_theme_mod( 'custom_logo' );
                $thf_logo = wp_get_attachment_image_src( $thf_custom_logo_id , 'full' );
                if('dynamic_logo' === $thf_choose_menu_type){
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $thf_logo[0] ) . '" alt="' . esc_attr(get_bloginfo( 'name' )) . '">';
                    } else {
                        echo '<div class="bwdhf_site_title">' . esc_attr(get_bloginfo( 'name' )) . '</div>';
                    }
                } elseif('custom_logo' === $thf_choose_menu_type){
                    echo '<img src="' . esc_url( $settings['thf_custom_logo']['url'] ) . '" alt="Logo">';
                } elseif('custom_text' === $thf_choose_menu_type){
                    echo '<div class="bwdhf_custom_site_title bwdhf_site_title">' . esc_html($thf_custom_logo_text) . '</div>';
                } ?>
            </a>
            <?php if('yes' === $thf_tagline){ ?><p><?php echo wp_kses_post(get_bloginfo('description')); ?></p><?php } ?>
        </div>
        <?php } ?>
        <div class="thf-dates-menu-area <?php  echo esc_attr($thf_menu_align) .' '; ?>">
            <nav id="dates-nav-1">
                <?php echo wp_kses_post($menu_html); ?>
            </nav>
        </div>
        <!-- For The Desktop Menu -->
        <?php if('search_form' === $thf_header_footer_btn_type){ ?>
        <div class="<?php echo esc_attr($thf_search_class); ?> bwdsb-search-box-common <?php echo esc_attr($thf_button_align); ?>">
            <div class="bwdsb-search-form">
                <form role="search" method="get" class="bwdsb-form" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" class="bwdsb-input-text" name="search" placeholder="<?php echo esc_attr( 'Search here...', 'bwd-elementor-addons' ); ?>" value="<?php echo get_search_query(); ?>">
                    <input type="submit" class="bwdsb-search-btn" value="<?php echo esc_attr($thf_nav_search_form_text); ?>"/>
                </form>
            </div>
        </div>
        <?php } elseif('custom' === $thf_header_footer_btn_type){ ?>
        <?php if($thf_button_style_selection === $thf_button_style_selection){ ?>
            <div class="thf-all-button-con <?php echo esc_attr($thf_button_style_selection) . ' ' . esc_attr($thf_button_align); ?> thf_creative_buttons" id="<?php echo esc_attr($settings['thf_buttons_custom_class_id']); ?>">
                <a href="<?php echo esc_url($settings['thf_header_footer_button_link']['url']); ?>"><div class="thf-title"><?php echo esc_html($thf_nav_button_text); ?></div></a>
            </div>
        <?php }
        } elseif('social_icon' === $thf_header_footer_btn_type){ ?>
        <div class="thf-all-button-con <?php echo esc_attr($thf_social_icon) . ' ' . esc_attr($thf_button_align); ?> thf-social-alignment">
            <div class="thf-social-icon-box">
                <?php
                if ( $settings['thf_social_icon_list'] ) {
                    foreach ( $settings['thf_social_icon_list'] as $item ) { ?>
                        <a class="thf-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['thf_social_icon_link']['url'] );?>"><i class="<?php echo esc_attr($item['thf_social_icon']['value']);?>"></i></a>
                    <?php
                    }
                } ?>
            </div>
        </div>
        <?php } elseif('admin_icon_name' === $thf_header_footer_btn_type){ ?>
        <div class="thf-header-login-author thf-all-button-con <?php echo esc_attr($thf_button_align); ?>">
        <?php if( is_user_logged_in() ){ ?>
            <a href="<?php echo get_edit_profile_url(); ?>"><?php echo wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) )); ?> <?php echo wp_kses_post(get_the_author_meta()); ?></a>
        <?php } else{ echo '<a href="'.wp_login_url().'">'. esc_html__('Log-in', 'bwd-elementor-addons').'</a>'; } ?>
        </div>
        <?php } ?>
        <div class="dates-mobile-menu <?php echo esc_attr($thf_mobile_align); ?>">
            <i class="<?php echo esc_attr($thf_hamburger); ?>"></i>
        </div>
    </div>
</div>

<!-- for mobile menu -->
<div class="off-canvas-dates-header-2 offcanvas-header-common ocv-style-2 <?php echo esc_attr($thf_menu_indi_align).' '.esc_attr($thf_menu_i_main) .' '. esc_attr($thf_menu_i_child); ?>">
    <?php if('yes' === $thf_nav_logo_switcher){ ?>
    <div class="dates-header-logo <?php echo esc_attr($thf_logo_align); ?>">
        <?php if('custom_link' === $thf_choose_logo_link){ ?><a href="<?php echo esc_url($settings['thf_logo_wraper_link']['url']); ?>"><?php } else{ ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php }
            $thf_custom_logo_id = get_theme_mod( 'custom_logo' );
            $thf_logo = wp_get_attachment_image_src( $thf_custom_logo_id , 'full' );
            if('dynamic_logo' === $thf_choose_menu_type){
                if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url( $thf_logo[0] ) . '" alt="' . esc_attr(get_bloginfo( 'name' )) . '">';
                } else {
                    echo '<div class="bwdhf_site_title">' . esc_attr(get_bloginfo( 'name' )) . '</div>';
                }
            } elseif('custom_logo' === $thf_choose_menu_type){
                echo '<img src="' . esc_url( $settings['thf_custom_logo']['url'] ) . '" alt="Logo">';
            } elseif('custom_text' === $thf_choose_menu_type){
                echo '<div class="bwdhf_custom_site_title bwdhf_site_title">' . esc_html($thf_custom_logo_text) . '</div>';
            } ?>
        </a>
        <?php if('yes' === $thf_tagline){ ?><p><?php echo wp_kses_post(get_bloginfo('description')); ?></p><?php } ?>
    </div>
    <?php } ?>
    <div class=" dates-menu-area <?php  echo esc_attr($thf_menu_align) .' '; ?>">
        <nav id="dates-nav-1">
            <?php echo wp_kses_post($menu_html); ?>
        </nav>
 
    <!-- For button, icons, search & author Mobile Menu -->
    <div class="dates-mobile-menu-btn-wrap">

    <?php if('search_form' === $thf_header_footer_btn_type){ ?>
    <div class="<?php echo esc_attr($thf_search_class); ?> bwdsb-search-box-common <?php echo esc_attr($thf_button_align); ?>">
        <div class="bwdsb-search-form">
            <form role="search" method="get" class="bwdsb-form" action="<?php echo home_url( '/' ); ?>">
                <input type="text" class="bwdsb-input-text" name="search" placeholder="<?php echo esc_attr( 'Search here...', 'bwd-elementor-addons' ); ?>" value="<?php echo get_search_query(); ?>">
                <input type="submit" class="bwdsb-search-btn" value="<?php echo esc_attr($thf_nav_search_form_text); ?>"/>
            </form>
        </div>
    </div>
    <?php } elseif('custom' === $thf_header_footer_btn_type){ ?>
    <?php if($thf_button_style_selection === $thf_button_style_selection){ ?>
        <div class="thf-all-button-con <?php echo esc_attr($thf_button_style_selection) . ' ' . esc_attr($thf_button_align); ?> thf_creative_buttons" id="<?php echo esc_attr($settings['thf_buttons_custom_class_id']); ?>">
            <a href="<?php echo esc_url($settings['thf_header_footer_button_link']['url']); ?>"><div class="thf-title"><?php echo esc_html($thf_nav_button_text); ?></div></a>
        </div>
    <?php }
    } elseif('social_icon' === $thf_header_footer_btn_type){ ?>
    <div class="thf-all-button-con <?php echo esc_attr($thf_social_icon) . ' ' . esc_attr($thf_button_align); ?> thf-social-alignment">
        <div class="thf-social-icon-box">
            <?php
            if ( $settings['thf_social_icon_list'] ) {
                foreach ( $settings['thf_social_icon_list'] as $item ) { ?>
                    <a class="thf-icons-color <?php echo 'elementor-repeater-item-' . esc_attr( $item['_id'] ); ?>" href="<?php echo  esc_url( $item['thf_social_icon_link']['url'] );?>"><i class="<?php echo esc_attr($item['thf_social_icon']['value']);?>"></i></a>
                <?php
                }
            } ?>
        </div>
    </div>
    <?php } elseif('admin_icon_name' === $thf_header_footer_btn_type){ ?>
    <div class="thf-header-login-author thf-all-button-con <?php echo esc_attr($thf_button_align); ?>">
    <?php if( is_user_logged_in() ){ ?>
        <a href="<?php echo get_edit_profile_url(); ?>"><?php echo wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) )); ?> <?php echo wp_kses_post(get_the_author_meta()); ?></a>
    <?php } else{ echo '<a href="'.wp_login_url().'">'. esc_html__('Log-in', 'bwd-elementor-addons').'</a>'; } ?>
    </div>
    <?php } ?>
    
    </div>
    <div class="dates-header-close"></div>
    </div>

    <div class="dates-mobile-menu <?php echo esc_attr($thf_mobile_align); ?>">
        <i class="<?php echo esc_attr($thf_hamburger); ?>"></i>
    </div>
</div>
<!-- for mobile menu -->