<?php
/**
 * DecaLog PSR-3 logger definition.
 *
 * @package SDK
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */

namespace PerfOpsOne\DecaLog;

/**
 * DecaLog PSR-3 logger class.
 *
 * This class defines all code necessary to log events with DecaLog.
 * If DecaLog is not installed, it will do nothing and will not throw errors.
 *
 * @package SDK
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */
class Logger implements \Psr\Log\LoggerInterface {

	/**
	 * The "true" Logger instance.
	 *
	 * @since  1.0.0
	 * @var    \Decalog\Plugin\Feature\DLogger|\PerfOpsOne\DecaLog\Feature\DLogger    $logger    Maintains the internal Logger instance.
	 */
	private $logger = null;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $class   The class identifier, must be a value in ['plugin', 'theme'].
	 * @param string $name    Optional. The name of the component that will trigger events.
	 * @param string $version Optional. The version of the component that will trigger events.
	 * @since 1.0.0
	 */
	public function __construct( $class, $name = null, $version = null ) {
		if ( class_exists( '\Decalog\Plugin\Feature\DLogger' ) ) {
			$this->logger = new \Decalog\Plugin\Feature\DLogger( $class, $name, $version, null, true );
		} else {
			$this->logger = new \PerfOpsOne\DecaLog\Feature\DLogger( $class, $name, $version, null, true );
		}
	}

	/**
	 * Logs a panic condition. WordPress is unusable.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function emergency( $message, $context = [] ) {
		$this->logger->emergency( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs a major operating error that undoubtedly affects the operations.
	 * It requires immediate investigation and corrective treatment.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function alert( $message, $context = [] ) {
		$this->logger->alert( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs an operating error that undoubtedly affects the operations.
	 * It requires investigation and corrective treatment.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function critical( $message, $context = [] ) {
		$this->logger->critical( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs a minor operating error that may affects the operations.
	 * It requires investigation and preventive treatment.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function error( $message, $context = [] ) {
		$this->logger->error( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs a significant condition indicating a situation that may lead to an error if recurring or if no action is taken.
	 * Does not usually affect the operations.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function warning( $message, $context = [] ) {
		$this->logger->warning( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs a normal but significant condition.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function notice( $message, $context = [] ) {
		$this->logger->notice( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs a standard information.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function info( $message, $context = [] ) {
		$this->logger->info( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs an information for developers and testers.
	 * Only used for events related to application/system debugging.
	 *
	 * @param  string $message The message to log.
	 * @param  array  $context Optional. The context of the event.
	 *                         FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                         that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                         element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function debug( $message, $context = [] ) {
		$this->logger->debug( (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}

	/**
	 * Logs an information with an arbitrary level.
	 *
	 * @param  \Psr\Log\LogLevel    $level   The level of the message to log.
	 * @param  string               $message The message to log.
	 * @param  array                $context Optional. The context of the event.
	 *                                       FYI, DecaLog has its own context-aware logging system. The only element of context
	 *                                       that you can pass to DecaLog is a numerical error code ($context['code']). All other
	 *                                       element of context will be removed.
	 * @return void
	 * @since  1.0.0
	 */
	public function log( $level, $message, $context = [] ) {
		$this->logger->log( $level, (string) $message, array_key_exists( 'code', $context ) ? (int) $context['code'] : 0 );
	}
}