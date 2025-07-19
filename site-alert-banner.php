
<?php
/**
 * Plugin Name: Site Alert Banner
 * Description: Display a dismissible banner on your WordPress site with admin control.
 * Version: 1.0
 * Author: Aditya Singh
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'admin/settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/render.php';

function sab_enqueue_scripts() {
    wp_enqueue_style('sab-style', plugin_dir_url(__FILE__) . 'assets/banner.css');
    wp_enqueue_script('sab-script', plugin_dir_url(__FILE__) . 'assets/banner.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'sab_enqueue_scripts');
