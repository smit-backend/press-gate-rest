<?php
/**
 * Plugin Name:       RestFortress: Secure REST API Customizer
 * Plugin URI:        https://github.com/smit-backend/press-gate-rest
 * Description:       Hardened WordPress REST API security plugin locking default endpoints while exposing cached, secured routes for headless apps.
 * Version:           1.0.0
 * Author:            smit-backend
 * Author URI:        https://github.com/smit-backend
 * License:           MIT
 * Text Domain:       press-gate-rest
 */

if (!defined('ABSPATH')) {
    exit;
}

final class SecurityGate
{
    public static function boot(): void
    {
        // WordPress hooks bootstrapping
    }
}

add_action('plugins_loaded', ['SecurityGate', 'boot']);
