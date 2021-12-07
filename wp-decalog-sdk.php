<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WordPress DecaLog SDK Demo
 * Plugin URI:        https://perfops.one/decalog-sdk
 * Description:       Simple demo plugin to test WordPress DecaLog SDK.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.6
 * Author:            Pierre Lannoy / PerfOps One
 * Author URI:        https://perfops.one
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       wp-decalog-sdk
 * Network:           true
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/*
require_once __DIR__ . '/vendor/autoload.php';

$slug = 'my-plugin-slug';

\DecaLog\Engine::initPlugin( $slug, 'My Plugin Name', '1.0.0' );



$events  = \DecaLog\Engine::eventsLogger( $slug );
$metrics = \DecaLog\Engine::metricsLogger( $slug );
$traces  = \DecaLog\Engine::tracesLogger( $slug );

$sleep = $traces->startSpan( 'test bootstrap', DECALOG_SPAN_PLUGINS_LOAD );
$span  = $traces->startSpan( 'subtest bootstrap', $sleep );
usleep( 200000 );
$traces->endSpan( $span );
usleep( 50000 );
$traces->endSpan( $sleep );

add_filter(
			'decalog_events_list_actions_for_ip',
			function( $actions, $item ) {
				$actions[] = [
					'url'  => 'https://google.fr',
					'hint' => $item['message'],
					'icon' => 'compass',
				];
				return $actions;
			},
			10,
			2
		);

add_action(
	'shutdown',
	function() use ( &$traces ) {
		$sleep = $traces->startSpan( 'test shutdown', DECALOG_SPAN_SHUTDOWN );
		usleep( 100000 );
		$traces->endSpan( $sleep );
	},
	10,
	0
);

add_action(
	'wp_head',
	function() use ( &$traces ) {
		$sleep = $traces->startSpan( 'test wp_head', DECALOG_SPAN_MAIN_RUN );
		$s     = $traces->startSpan( 'subtest wp_head', $sleep );
		usleep( 100000 );
		$traces->endSpan( $s );
		usleep( 50000 );
		$traces->endSpan( $sleep );},
	10,
	0
);*/



