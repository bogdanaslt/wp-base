<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

if (is_readable(__DIR__ . '/.env')) {
    $env = new Dotenv();
    $env->load(__DIR__ . '/.env');
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', env('DB_NAME', '') );

/** MySQL database username */
define( 'DB_USER', env('DB_USER', 'root') );

/** MySQL database password */
define( 'DB_PASSWORD', env('DB_PASSWORD', '') );

/** MySQL hostname */
define( 'DB_HOST', env('DB_HOST', 'wp-mysql') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', env('DB_CHARSET', 'utf8') );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', env('DB_COLLATE', '') );

define( 'WP_HOME', env('WP_HOME', 'http://localhost:8080') );
define( 'WP_SITEURL', env('WP_SITEURL', 'http://localhost:8080') );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', env('AUTH_KEY', ''));
define('SECURE_AUTH_KEY', env('SECURE_AUTH_KEY', ''));
define('LOGGED_IN_KEY', env('LOGGED_IN_KEY', ''));
define('NONCE_KEY', env('NONCE_KEY', ''));
define('AUTH_SALT', env('AUTH_SALT', ''));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT', ''));
define('LOGGED_IN_SALT', env('LOGGED_IN_SALT', ''));
define('NONCE_SALT', env('NONCE_SALT', ''));
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', env('WP_DEBUG', false) );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
