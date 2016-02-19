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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'csulbtriDBhbnyc');

/** MySQL database username */
define('DB_USER', 'csulbtriDBhbnyc');

/** MySQL database password */
define('DB_PASSWORD', 'zRcLWfqeq0');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '62MfIXm+eu.2+];DLXmLWit.FQcnzYnz,0z,0BM}7IYjIUfv^fr$>7$<3EQ3EQbny');
define('SECURE_AUTH_KEY',  'bqTfu.1CRdoRds~gs@:8!}CNZCNZkzcoz[o@>4J>7JUk#2HSeHSWht_;t~:9K[5G');
define('LOGGED_IN_KEY',    '0z[8J[4JVk#6HTiHTitWit_;x_;DP1DOapOep-dt~]9~:9Ka7MXjuXjy.my.3E.2E');
define('NONCE_KEY',        'pSht_ht_1D_:DOdCOdp3FQbrQfr${q^{7M{AMXjMXmyXmy<3y<2IT2ITe|0CRcBRc');
define('AUTH_SALT',        '{AQbEQbq$fq${q.FRgs@gr!}8!}BNYBNYnMcnz,n$>3F>3IUfIUfvw_1DS1CSdpSd');
define('SECURE_AUTH_SALT', 'o@}v!}BN0BNYBMYnz~]9LW9KWhxalw_lw#1G|1GSdGShs~ds!:s!:COq*{6M{ALXA');
define('LOGGED_IN_SALT',   'Shs_lw!1w|1CO0CRdo;APbmLam+am+<6+#6HX6HWitWix_ix_;D_1DOe0CNcoRco@');
define('NONCE_SALT',       '{EQfEPfq*fq*{A*{ALXALbmJYkz|kz,0^}BNYBMcnzcnz>n$>7J>7IUjIUju5GSdp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
