<?php
class Tin_Restock_Handler {
    public function __construct() {
        add_action('template_redirect', array($this, 'check_restock_mode'));
    }

    public function check_restock_mode() {
        $is_enabled = get_option('tin_restock_enabled');

        if ($is_enabled && !current_user_can('manage_options')) {
            // Send 503 header for SEO
            header('HTTP/1.1 503 Service Temporarily Unavailable');
            header('Status: 503 Service Temporarily Unavailable');
            header('Retry-After: 3600');

            include TIN_RESTOCK_PATH . 'templates/splash-page.php';
            exit;
        }
    }
}