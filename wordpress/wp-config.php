<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd01e32c5');

/** MySQL database username */
define('DB_USER', 'd01e32c5');

/** MySQL database password */
define('DB_PASSWORD', 'rnXFr6dBPUYkS9Ly');

/** MySQL hostname */
define('DB_HOST', 'w00cd5ef.kasserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c3350e4207dac7277014c587f6065e6ba70f0752');
define('SECURE_AUTH_KEY',  '07f2874c041a519b24e67509737c575eb3b7f7a5');
define('LOGGED_IN_KEY',    'bfc382e5e7bd0610c00d5fa0136adafd21196980');
define('NONCE_KEY',        'fcf101c067c198344ac8b580c82ecedfca91878a');
define('AUTH_SALT',        '1fca7eb3130ca540281ff0691bce3781392dc4a8');
define('SECURE_AUTH_SALT', 'bc060eff0dea77a696cf68fa6c7c8e92d6291f0e');
define('LOGGED_IN_SALT',   'ea32b722bb791fdca3bc4a818c40edaa7c1717f7');
define('NONCE_SALT',       '817cf19d57113bfccbc9a9cf09ebf1d80d594b55');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
