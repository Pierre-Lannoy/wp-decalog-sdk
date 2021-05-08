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

\DecaLog\Engine::initPlugin( $slug, 'My Plugin Name', '1.0.0');

$events  = \DecaLog\Engine::eventsLogger( $slug );
$metrics = \DecaLog\Engine::metricsLogger( $slug );
$traces  = \DecaLog\Engine::tracesLogger( $slug );

$sleep = $traces->start_span( 'test' );
usleep(200000);
$traces->end_span( $sleep );

//$events->info( 'That\'s ok!');

//\DecaLog\Engine::metricsLogger( $slug )->createProdCounter( 'AAAAA', 'HHHHHHHHHHH');
//\DecaLog\Engine::metricsLogger( $slug )->incProdCounter( 'AAAAA', 123456);

