<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="bwd-main">
    <div class="bwd-container">
        <h1 style="color:rgb(126 126 124);font-family:cursive">Welcome to BWD Elementor Addons!</h1>
        <div class="bwd-progress-container">
            <hr class="bwd-progress-bar-back" />
            <hr class="bwd-progress-bar-front" />
            <div class="bwd-step bwd-checked" data-step="1">
                <i class="fas fa-1"></i>
            </div>
            <div class="bwd-step" data-step="2">
                <i class="fas fa-2"></i>
            </div>
            <div class="bwd-step" data-step="3">
                <i class="fas fa-3"></i>
            </div>
            <div class="bwd-step" data-step="4">
                <i class="fas fa-4"></i>
            </div>
            <div class="bwd-step" data-step="5">
                <i class="fas fa-5"></i>
            </div>
            <div class="bwd-step" data-step="6">
                <i class="fas fa-6"></i>
            </div>
            <div class="bwd-step" data-step="7">
                <i class="fas fa-7"></i>
            </div>
        </div>
        <div class="bwd-form-container">
            <div class="bwd-form" id="form-1">
                <h3 style="color:rgb(126 126 124);text-align:center">Check require plugins</h3>
                <div class="widget-requirements">
                    <h2>Widget Requirements</h2>
                    <p>To ensure proper functionality of the widgets in this plugin, please note the following requirements:</p>

                    <h3>➥ BWD Elementor Addons</h3>
                    <p>To use BWD Elementor Addons Widgets, the <a href="https://wordpress.org/plugins/elementor/" target="_blank"><strong>Elementor</strong></a> plugin is required. Please install and activate the Elementor plugin to use these widgets effectively.</p>

                    <h3>➥ E-Commerce Widgets</h3>
                    <p>For all e-commerce widgets, the <a href="https://wordpress.org/plugins/woocommerce/" target="_blank"><strong>WooCommerce</strong></a> plugin is required. Please install and activate the WooCommerce plugin to use these widgets effectively.</p>
                    
                    <h3>➥ Contact Form Widgets</h3>
                    <p>For all contact form widgets, the <a href="https://wordpress.org/plugins/contact-form-7/" target="_blank"><strong>Contact Form 7</strong></a> plugin is required. Please install and activate the Contact Form 7 plugin to utilize these widgets.</p>
                    
                    <h3>➥ Pro Widgets</h3>
                    <p>For all pro widgets, the <a href="https://bestwpdeveloper.com/pricing/" target="_blank"><strong>BWD Elementor Addons Pro</strong></a> plugin is required. Please install and activate the Pro plugin to access and use these advanced widgets.</p>
                </div>
            </div>
            <div class="bwd-form" id="form-2">
                <h3 style="color:rgb(126 126 124);text-align:center">Widgets</h3>
                <div class="bwd-dashboard-template-container bwd-dashb-subs-style" style="height: 500px;overflow: scroll;">
                    <?php
                        include 'tabs/imp/categories.php';
                        include 'tabs/imp/arrays.php';
                        include 'tabs/imp/utilized.php';
                        include 'tabs/widgets.php';
                    ?>
                </div>
            </div>
            <div class="bwd-form" id="form-3">
                <h3 style="color:rgb(126 126 124);text-align:center">Extensions</h3>
                <div class="bwd-dashboard-template-container bwd-dashb-subs-style" style="height: 500px;overflow: scroll;">
                    <?php
                        include 'tabs/extension.php';
                    ?>
                </div>
            </div>
            <div class="bwd-form" id="form-4">
                <h3 style="color:rgb(126 126 124);text-align:center">Extrasettings</h3>
                <div class="bwd-dashboard-template-container bwd-dashb-subs-style" style="height: 500px;overflow: scroll;">
                    <?php
                        include 'tabs/extrasettings.php';
                    ?>
                </div>
            </div>
            <div class="bwd-form" id="form-5">
                <h3 style="color:rgb(126 126 124);text-align:center">Compare with pro</h3>
                <div class="bwd-dashboard-template-container bwd-dashb-subs-style" style="height: 500px;overflow: scroll;background-color:transparent">
                    <?php
                        include 'tabs/license.php';
                    ?>
                </div>
            </div>
            <div class="bwd-form" id="form-6">
                <h3 style="color:rgb(126 126 124);text-align:center">Get pro</h3>
                <div class="bwd-dashboard-template-container bwd-dashb-subs-style bwd-dashboard-template-pro-promosion-container">
                    <?php include 'tabs/imp/pro-popup-box.php'; ?>
                </div>
            </div>
            <div class="bwd-form" id="form-7">
                <div class="congratulation-area text-center mt-5">
                    <div class="container">
                        <div class="congratulation-wrapper">
                            <div class="congratulation-contents center-text">
                                <div class="congratulation-contents-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h4 class="congratulation-contents-title"> Congratulations! </h4>
                                <p class="congratulation-contents-para">Basic configurations are done; you're ready to start now. </p>
                                <?php
                                $admin_email = get_option('admin_email');
                                echo '<form class="newsletter-form" method="post" action="' . esc_url(admin_url('admin-post.php')) . '">';
                                    echo '<input type="email" name="email" value="' . esc_attr($admin_email) . '" style="display:none" placeholder="Enter your email" required>';
                                    echo '<input type="hidden" name="action" value="handle_bwdes_email_subscription">';
                                    echo '<button type="submit">Let\'s Go ➥</button>';
                                echo '</form>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-container">
            <?php
            $skipCheck = is_plugin_active( 'elementor/elementor.php' )?admin_url('admin.php?page=bwdeb-plugin-main-menu'):admin_url( 'plugins.php' );
            echo '<a href="'.$skipCheck.'" class="bwd-btnn" id="skip">Skip...</a>';
            ?>
            <button class="bwd-btn" id="prev">⇐ Back</button>
            <button class="bwd-btn" id="next">Next ⇒</button>
        </div>
    </div>
</div>
<?php