<?php
/**
 * DecaLog SDK main engine.
 *
 * @package SDK
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */

namespace DecaLog;

/**
 * DecaLog engine class.
 *
 * This class defines all code necessary to manage DecaLog operations.
 *
 * @package SDK
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */
class Engine {

	/**
	 * The logger instances and parameters.
	 *
	 * @since  1.0.0
	 * @var    array    $loggers    Maintains the loggers list.
	 */
	private static $loggers = [];

	/**
	 * Registers a new logger.
	 *
	 * @param string $class   The class identifier, must be a value in ['plugin', 'theme'].
	 * @param string $slug    The slug identifier.
	 * @param string $name    The name of the component that will trigger events.
	 * @param string $version The version of the component that will trigger events.
	 * @since 1.0.0
	 */
	private static function init( $class, $slug, $name, $version ) {
		if ( is_string( $slug ) && '' !== $slug ) {
			static::$loggers[ $slug ] = [
				'logging'    => null,
				'monitoring' => null,
				'tracing'    => null,
				'class'      => $class,
				'name'       => (string) $name,
				'version'    => (string) $version,
			];
		} else {
			throw new \DecaLog\Exception\InvalidSlugException( 'The slug is not a valid, non-empty string.' );
		}
	}

	/**
	 * Registers a new theme logger.
	 *
	 * @param string $slug    The slug identifier.
	 * @param string $name    The name of the theme that will trigger events.
	 * @param string $version The version of the theme that will trigger events.
	 * @since 1.0.0
	 */
	public static function initTheme( $slug, $name, $version ) {
		static::init( 'theme', $slug, $name, $version );
	}

	/**
	 * Registers a new plugin logger.
	 *
	 * @param string $slug    The slug identifier.
	 * @param string $name    The name of the plugin that will trigger events.
	 * @param string $version The version of the plugin that will trigger events.
	 * @since 1.0.0
	 */
	public static function initPlugin( $slug, $name, $version ) {
		static::init( 'plugin', $slug, $name, $version );
	}

	/**
	 * Registers a new logger.
	 *
	 * @param string $slug    The slug identifier.
	 * @return  string  The string index if logger is registered, empty string otherwise.
	 * @since 1.0.0
	 */
	private static function getLoggerSlug( $slug ) {
		if ( is_string( $slug ) && '' !== $slug && array_key_exists( $slug, static::$loggers ) ) {
			return $slug;
		}
		return '';
	}

	/**
	 * Get a registered logger.
	 *
	 * @param string $slug    The slug identifier.
	 * @return  \DecaLog\EventLogger    The corresponding event logger.
	 * @throws \DecaLog\Exception\InvalidSlugException
	 * @since 1.0.0
	 */
	public static function eventsLogger( $slug ) {
		$slug = static::getLoggerSlug( $slug );
		if ( '' === $slug ) {
			throw new \DecaLog\Exception\InvalidSlugException( 'No registered logger with this slug.' );
		}
		if ( ! static::$loggers[ $slug ]['logging'] ) {
			static::$loggers[ $slug ]['logging'] = new \DecaLog\EventsLogger( static::$loggers[ $slug ]['class'], static::$loggers[ $slug ]['name'], static::$loggers[ $slug ]['version'] );
		}
		return static::$loggers[ $slug ]['logging'];
	}



}
