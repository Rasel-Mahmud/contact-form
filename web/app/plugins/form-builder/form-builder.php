<?php
/**
 * Plugin Name:       Form builder plugin
 * Plugin URI:        https://rasel-portfolio.com
 * Description:       Handle the web form
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rasel Mahmud
 * Author URI:        https://rasel-portfolio.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

// Form Setting Option
require_once __DIR__ .'/option-panel/settings.php';

// Form Post Type
require_once __DIR__ .'/post-type/form.php';

// From Meta Box
require_once __DIR__ . '/meta-box/options.php';
