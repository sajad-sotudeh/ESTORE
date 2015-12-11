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
define('DB_NAME', 'estore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '*mMsMC!_N8w}/00?.}]-C+++1F7fR&nH,}XD`f?}3hhJ((fROcs6ylva:(BV+e U');
define('SECURE_AUTH_KEY',  'p=CkU,$o*~GuLQlRfr]CG-~$S7a2/02T~OhfRQCd4+-i|&jGQTG2CRwL[ fr+Lt0');
define('LOGGED_IN_KEY',    '6?6dLxWI g,ul-]&qYa)?8GD,*7bOGg:*@N76A|kb7cy7fk>{ ju|*-6+T!WSvno');
define('NONCE_KEY',        '1gj$bR-k/N9;~(R0+Lj9 (%$_<}CgHFVJ!98ht7GZvg,a?<|s+_BsmY5w<RT$-y{');
define('AUTH_SALT',        'YKj:^o}S3O9>?OI`s{hRsxzRTpS6wJ}6F2!O<H7g]1u|6U4jzKD):CmTUipJ`h)S');
define('SECURE_AUTH_SALT', 'Y.=t2eJXPXxtX!z}AN5J_Rr1j/OQ6xBPr]10n9HGW<QoyEP)U=6{.n*-%RqF+{#1');
define('LOGGED_IN_SALT',   'fP-lT-*9&r!h%ige^M`jg/xk4UKyad|?2(d9FID ! f|/.,{(fa)!,[&T&MHY9e|');
define('NONCE_SALT',       '(_^|Q%xy.mcBIwy:Zx.lKx_i%9)@SX76HNFV44&zM78}@mI~dCXzV+5W$WRc%Ul>');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
