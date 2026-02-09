<?php
/**
 * Plugin Name: Tin Apothecary Restock Mode
 * Description: Enable a branded maintenance page for limited-edition scent drops.
 * Version: 1.0.0
 * Author: Francisco Garay
 * Author URI: https://franciscogaray.me
 * Text Domain: tin-restock
 */

if (!defined('ABSPATH')) exit;

define('TIN_RESTOCK_PATH', plugin_dir_path(__FILE__));
define('TIN_RESTOCK_URL', plugin_dir_url(__FILE__));

// Load Classes
require_once TIN_RESTOCK_PATH . 'includes/class-admin-settings.php';
require_once TIN_RESTOCK_PATH . 'includes/class-restock-handler.php';

// Initialize
new Tin_Restock_Settings();
new Tin_Restock_Handler();