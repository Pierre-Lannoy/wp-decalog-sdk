<?php
/**
 * Dummy logger definition.
 *
 * @package SDK
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */

namespace PerfOpsOne\DecaLog\Feature;

/**
 * Dummy logger class.
 *
 * This class defines all code necessary to act as if DecaLog is installed.
 *
 * @package SDK
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */
class DLogger {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param   string  $class The class identifier, must be in self::$classes.
	 * @param   string  $name Optional. The name of the component.
	 * @param   string  $version Optional. The version of the component.
	 * @param   string  $test Optional. The handler to create if specified.
	 * @param   boolean $psr3 Optional. True if this logger is a PSR-3 logger.
	 * @since   1.0.0
	 */
	public function __construct( $class, $name = null, $version = null, $test = null, $psr3 = false ) {
	}

	/**
	 * Adds a log record at a specific level.
	 *
	 * @param   mixed   $level   The log level.
	 * @param   string  $message The log message.
	 * @param   integer $code    Optional. The log code.
	 * @param   string  $phase   Optional. The log phase.
	 * @param   boolean $signal  Optional. Add .
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function log( $level, $message, $code = 0, $phase = '', $signal = true ) {
		return false;
	}

	/**
	 * Adds a log record at the DEBUG level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function debug( $message, $code = 0 ) {
		return false;
	}

	/**
	 * Adds a log record at the INFO level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function info( $message, $code = 0 ) {
		return false;
	}

	/**
	 * Adds a log record at the NOTICE level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function notice( $message, $code = 0 ) {
		return false;
	}

	/**
	 * Adds a log record at the WARNING level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function warning( $message, $code = 0 ) {
		return false;
	}

	/**
	 * Adds a log record at the ERROR level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function error( $message, $code = 0 ) {
		return false;
	}

	/**
	 * Adds a log record at the CRITICAL level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function critical( $message, $code = 0 ) {
		return false;
	}

	/**
	 * Adds a log record at the ALERT level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function alert( $message, $code = 0 ) {
		return false;
	}

	/**
	 * Adds a log record at the EMERGENCY level.
	 *
	 * @param   string  $message    The log message.
	 * @param   integer $code       Optional. The log code.
	 * @return  boolean True if message was logged, false otherwise.
	 * @since   1.0.0
	 */
	public function emergency( $message, $code = 0 ) {
		return false;
	}

}
