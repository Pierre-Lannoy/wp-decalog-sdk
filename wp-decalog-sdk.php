<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WordPress DecaLog SDK Demo
 * Plugin URI:        https://github.com/Pierre-Lannoy/wp-decalog-sdk
 * Description:       Simple demo plugin to test WordPress DecaLog SDK.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.6
 * Author:            Pierre Lannoy
 * Author URI:        https://pierre.lannoy.fr
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       wp-decalog-sdk
 * Network:           true
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once __DIR__ . '/vendor/autoload.php';

$slug = 'my-plugin-slug';
