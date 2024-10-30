<?php
/**
 * Plugin Name: BWD Elementor Addons
 * Description: <a href="https://bestwpdeveloper.com/" target="_blank">BWD Elementor Addons</a> is a plugin built on the Elementor page builder platform. It includes several widgets that can be used to create custom designs for your website. One of the main features of the plugin is the variety of preset designs available, which can save time and simplify the design process. Overall, the plugin aims to enhance the functionality and design capabilities of the Elementor page builder.
 * Plugin URI:  https://bwdelementoraddons.com/
 * Version:     4.3.8
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwd-elementor-addons
 * Elementor tested up to: 5.8.0
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit;
define( 'BWDEB_PLUGIN_V', '4.3.8' );
define( 'BWDEB_PLUGIN_TD', 'bwd-elementor-addons' );
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class BWDEBElementorBundle {
	const VERSION = BWDEB_PLUGIN_V;
	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';
	const MINIMUM_PHP_VERSION = '7.0';
	public function __construct() {
		add_filter( 'plugin_action_links', [$this, 'bwdeb_settings_plugin_action_link'], 10, 2 );
		add_action( 'bwdeb_init', array( $this, 'bwdeb_loaded_textdomain' ) );
		add_action( 'plugins_loaded', array( $this, 'bwdeb_init' ) );
		if ( ! did_action( 'woocommerce/loaded' ) ) {
			add_action( 'admin_notices', 'bwdeb_WooCommerce_register_required_plugins' );
			return;
		}
	}

	public function bwdeb_settings_plugin_action_link($links, $file){
		if ( plugin_basename( __FILE__ ) == $file ) {
			$settings_link = '<a href="' . admin_url( 'admin.php?page=bwdeb-plugin-main-menu' ) . '">'.esc_html__('Settings', 'bwd-elementor-addons').'</a>';
			$update_pro_link = ( !class_exists( 'ProbwdelementorBundle' ) ) ? '<a class="bwdeb_pro_action" href="https://bestwpdeveloper.com/pricing" target="_blank">'.esc_html__('Upgrade Pro', 'bwd-elementor-addons').'</a>' : '';
			array_push( $links, $settings_link, $update_pro_link );
		}
		return $links;
	}

	public function bwdeb_loaded_textdomain() {
		load_plugin_textdomain( 'bwd-elementor-addons', false, basename(dirname(__FILE__)).'/languages' );
	}

	public function bwdeb_init() {
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'bwdeb_register_required_plugins');
		}
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdeb_admin_notice_minimum_php_version' ) );
			return;
		}
		require_once( 'bwdeb-boots.php' );
        $this->bwdeb_reg_apps_reson_in_class();
	}

    public function bwdeb_reg_apps_reson_in_class(){
        require __DIR__ . '/vendor/autoload.php';
        function appsero_init_tracker_bwd_elementor_addons() {
            if ( ! class_exists( 'Appsero\Client' ) ) {
            require_once __DIR__ . '/appsero/src/Client.php';
            }
            $client = new Appsero\Client( 'f2381226-afef-469d-a9bd-6431fb47609e', 'BWD Elementor Addons', __FILE__ );
            $client->insights()->init();
        }
        appsero_init_tracker_bwd_elementor_addons();
    }

	public function bwdeb_admin_notice_minimum_php_version() {
		if (isset($_GET['activate'])) {
			unset($_GET['activate']);
		}
	
		$message = sprintf(
			esc_html__('%1$s requires %2$s version %3$s or greater.', 'bwd-elementor-addons'),
			'<strong>' . esc_html__('BWD Elementor Addons', 'bwd-elementor-addons') . '</strong>',
			'<strong>' . esc_html__('PHP', 'bwd-elementor-addons') . '</strong>',
			self::MINIMUM_PHP_VERSION
		);
	
		printf(
			'<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>',
			esc_html($message)
		);
	}
}
new BWDEBElementorBundle();

class bwdebSupport {
    private $api_url = 'https://app.bwdplugins.com/way-of-api/get-api.php?show_key=true';
    private $api_key;
    private $audience_id = 'https://app.bwdplugins.com/way-of-api/get-api.php?show_audience=true';
    private $list_id;

    public function __construct() {
        $this->bwdeb_fetch_api_key();
        register_activation_hook(__FILE__, [$this, 'on_activation']);
        add_action( 'admin_notices', [$this,'bwdeb_admin_updates_plugin_notice'] );
        add_action('admin_init', [$this, 'redirect_on_activation']);
        if (!get_option('bwdes_email_subscription_notice_shown', false)) {
            add_action('admin_menu', [$this, 'add_menu_pages']);
        }
        add_action('admin_post_handle_bwdes_email_subscription', [$this, 'handle_bwdes_email_subscription']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
    }

    private function bwdeb_fetch_api_key() {
        $response = file_get_contents($this->api_url);
        $data = json_decode($response, true);
        if (isset($data['api_key'])) {
            $this->api_key = $data['api_key'];
        } else {
            //echo "Error: API key not found.";
        }
        $responseID = file_get_contents($this->audience_id);
        $dataID = json_decode($responseID, true);
        if (isset($dataID['audience_id'])) {
            $this->list_id = $dataID['audience_id'];
        } else {
            //echo "Error: Audience id not found.";
        }
    }

    public function on_activation() {
        if (!get_option('bwdes_email_subscription_redirect_has_redirected', false)) {
            add_option('bwdes_email_subscription_redirect_do_redirect', true);
            add_option('bwdes_email_subscription_redirect_has_redirected', true);
        }
        add_option('bwdes_email_subscription_notice_shown', false);
    }

    public function redirect_on_activation() {
        if (get_option('bwdes_email_subscription_redirect_do_redirect', false)) {
            delete_option('bwdes_email_subscription_redirect_do_redirect');
            wp_safe_redirect(admin_url('admin.php?page=bwdes_email_subscription'));
            exit;
        }
    }

    public function add_menu_pages() {
        add_dashboard_page(
            '', 
            '', 
            'manage_options', 
            'bwdes_email_subscription', 
            [$this, 'subscription_temp_page_content']
        );
    }

    public function subscription_temp_page_content() {
		include 'includes/subscribe.php';
    }

    public function bwdeb_admin_updates_plugin_notice() {
        if (!get_option('bwdes_email_subscription_notice_shown', false)) {
            $admin_email = get_option('admin_email');
            echo '<div class="notice notice-success is-dismissible">';
            echo '<p>Thank you for choosing <strong>BWD Elementor Addons</strong>! We appreciate your trust. <a href="https://bestwpdeveloper.com" target="_blank">Find us..</a></p>';
            echo '<form class="newsletter-form" method="post" action="' . esc_url(admin_url('admin-post.php')) . '">';
            echo '<input type="email" name="email" value="' . esc_attr($admin_email) . '" style="display:none" required>';
            echo '<input type="hidden" name="action" value="handle_bwdes_email_subscription">';
            echo '<button type="submit" class="bwdeb-notice-btn">Hide Notice</button>';
            echo '</form>';
            echo '</div>';
        }
    }
    
    public function handle_bwdes_email_subscription() {
        if (isset($_POST['email']) && is_email($_POST['email'])) {
            $email = sanitize_email($_POST['email']);
            $this->add_to_mailchimp($email);
            update_option('bwdes_email_subscription_notice_shown', true);
            if(is_plugin_active( 'elementor/elementor.php' )){
                wp_safe_redirect(admin_url('admin.php?page=bwdeb-plugin-main-menu&status=success'));
            } else{
                wp_safe_redirect(admin_url( 'plugins.php?status=success' ));
            }
            exit;
        } else {
            wp_safe_redirect(admin_url('admin.php?page=bwdes_email_subscription&status=error'));
            exit;
        }
    }

    private function add_to_mailchimp($email) {
        $data_center = substr($this->api_key, strpos($this->api_key, '-') + 1);
        
        $url = 'https://' . $data_center . '.api.mailchimp.com/3.0/lists/' . $this->list_id . '/members/';

        $current_user_id = get_current_user_id();
        $user_info = get_userdata($current_user_id);
        $site_name = get_bloginfo('name');
        $username = $user_info->user_login;
        if (function_exists('get_plugin_data')) {
            $plugin_data = get_plugin_data(__FILE__);
            $plugin_name = $plugin_data['Name'];
        } else {
            $plugin_name = 'Unknown Plugin';
        }
        $tags = [$plugin_name];

        $merge_fields = array(
            'FNAME' => $username,
            'COMPANY' => $site_name,
        );
        
        $data = array(
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => $merge_fields,
            'tags'          => $tags,
        );
        
        $json_data = json_encode($data);
        
        $args = array(
            'body'        => $json_data,
            'headers'     => array(
                'Authorization' => 'Basic ' . base64_encode('user:' . $this->api_key),
                'Content-Type'  => 'application/json',
            ),
        );
        
        $response = wp_remote_post($url, $args);
        
        if (is_wp_error($response)) {
            error_log('Mailchimp error: ' . $response->get_error_message());
        }
    }

    public function enqueue_admin_assets($hook) {
        if ($hook != 'dashboard_page_bwdes_email_subscription') {
            return;
        }
        wp_enqueue_style('admin-subscription-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', null, '1.0', 'all');
        wp_enqueue_style('admin-subscription-assets-here', plugin_dir_url(__FILE__) . 'assets/admin/css/subscription.css', null, '1.0', 'all');
        wp_enqueue_script('admin-subscription-assets-here', plugin_dir_url(__FILE__) . 'assets/admin/js/subscription.js', ['jquery'], '1.0', true);
    }
}
new bwdebSupport();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
