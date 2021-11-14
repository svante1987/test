<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RKucHPVrvMzBpDjfQHQ3XJLgwbfIaLD8nxMJI5m8wfNuwFs42s7EEh3ZxkH/3fxy0rC5Yhpx+SUdA8dlYPP8+Q==');
define('SECURE_AUTH_KEY',  'FkRK8V+owlmGyLCxVaQY2qJfqY1v9EiEuFRgmJ7pNfP8LoL3LmDeL3uuaBMQ//7n+rqPCavB0ZPcqoOhgJKivg==');
define('LOGGED_IN_KEY',    'y8TAOjG/8gmqIzQM3Fr7ihP6BLPWeaBLJgG80mnAkTOEvJvONjGyAbukBxJl1zKql9qsa8oAQxtnkxhSunmpBA==');
define('NONCE_KEY',        '+IuRz2P9DaEUFQhNAjASlPmZBVjD3QmxwNdUNK7m3yX3khip7xdi0WnNpL3Gz1c312gq3ANckwlBCChIQCBpdg==');
define('AUTH_SALT',        'EopNKWeSHXPP+EHHBi7BDueutyHQt9T/zMGYlJ+RCEfIUxcWGPrEyLtMN+kTBetQuY1UibAc7rnLWGaVKvuN1g==');
define('SECURE_AUTH_SALT', 'vsDtTyJMuTR/vR0NalWIXImGvUOZ1anS5jXE6LimAV0XQW8v/BfnN+5n1ay0fo3TU72VuqmC48kEtDHCACZGww==');
define('LOGGED_IN_SALT',   'eTvVJaDgaqQZKXKxhqMiVTJ3wIVbD6MB09LG0mpQXZRA/8d+KoYOzwVLPGSox+XLO1EGegOtyL0sexqx07/aew==');
define('NONCE_SALT',       'olWop90OdWpfaoiWSHAIiECfFgQYBBXopdU/zgMQoMm4kC7159CJCwiOp6eT/BneHqFbnrjmqqeQ1XsvTzs16A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
