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
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         's2|(rR;_8<>RImbpEHC~oo; 53QySUe!Kt]Bb5hdzTvH.CiU,R/pS_?ck4V{ZEt#');
define('SECURE_AUTH_KEY',  '7/h63UMwgI]sVF{l$%ama>?+R3e)3H]W<~nm1%1e-tjsrnV5i7 +aF2/Zom =@`%');
define('LOGGED_IN_KEY',    's:IJ$-v&i,(iQ`)|+<zc@pt4OFsrkN]lMg@;8:3[@XV21i|bq[)/VAW34v:x%?7D');
define('NONCE_KEY',        '7e&KmfQ>Wlw;}F;K0qX#5b9mRJ9Z|vTUNwW@|Wt;98|C19AT+Gg<irF-21; =v!_');
define('AUTH_SALT',        '0Q{g5@`c:;`5gEI-1s1dtJR[3E-;y->8Nj-4{0qx>/nEh!P{].`eHt}:1qSL>2Gf');
define('SECURE_AUTH_SALT', '@%NRA<A2BtPq-8q[uN%NS3]w?^}:dI1oAv[4rF[}c,+;0zv^.kqArmbT#U|%ZFa2');
define('LOGGED_IN_SALT',   'kqF)^ai7dyCb;sy) r-SHR;5dTvl(>KT|Hahu`7lnkngz}6m?Yu/W_lO}_sg3=EU');
define('NONCE_SALT',       ':pF~QE5.WS`sbp~i+-|eo+.dUow7.kGx+kg2S1-8PG+^RhsnCI]:L.%>m(H0In>%');

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
