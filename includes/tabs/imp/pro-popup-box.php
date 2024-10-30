<?php
if (!defined( 'ABSPATH')) {
    exit;
}
echo '<div class="bwd-pro-popup-box">';
    echo '<div class="bwd-pro-popup-close-button">';
        $screen = get_current_screen();
        if ($screen && $screen->id != 'dashboard_page_bwdes_email_subscription') {
            echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../../assets/admin/dashboard/images/cross.svg').'" alt="'.esc_attr('Close').'">';
        }
    echo '</div>';
    echo '<div class="bwd-pro-popup-content">';
        echo '<div class="bwd-pro-popup-img">';
            echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../../assets/admin/dashboard/images/pro.svg').'" alt="'.esc_attr('pro').'">';
        echo '</div>';
        echo '<h1>Go Pro</h1>';
        echo '<p>Unlock 68+ amazing widgets to build awesome websites.</p>';
        echo '<a href="https://bestwpdeveloper.com/pricing/" target="_blank" class="bwd-popup-upgrade-button">Upgrade Now</a>';
    echo '</div>';
echo '</div>';