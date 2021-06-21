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

\DecaLog\Engine::initPlugin( $slug, 'My Plugin Name', '1.0.0' );



/*$events  = \DecaLog\Engine::eventsLogger( $slug );
$metrics = \DecaLog\Engine::metricsLogger( $slug );
$traces  = \DecaLog\Engine::tracesLogger( $slug );

$sleep = $traces->start_span( 'test bootstrap' );
$span  = $traces->start_span( 'subtest bootstrap', $sleep );
usleep( 200000 );
$traces->end_span( $span );
usleep( 50000 );
$traces->end_span( $sleep );



add_action(
	'shutdown',
	function() use ( &$traces ) {
		$sleep = $traces->start_span( 'test shutdown' );
		usleep( 100000 );
		$traces->end_span( $sleep );
	},
	10,
	0
);

add_action(
	'wp_head',
	function() use ( &$traces ) {
		$sleep = $traces->start_span( 'test wp_head' );
		$s     = $traces->start_span( 'subtest wp_head', $sleep );
		usleep( 100000 );
		$traces->end_span( $s );
		usleep( 50000 );
		$traces->end_span( $sleep );},
	10,
	0
);
*/


