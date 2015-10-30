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
define('DB_NAME', 'theme-demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '[j+_7h$Hno+ae;Kmf8L~+.Rof9VJ&41nF,?&TX~$XfcW-(#7)F.{tT1xA_b4Jn{n');
define('SECURE_AUTH_KEY',  '4b%Jd*M b(>d`FJe1(Z1e=m<bb($Q?|<bnnnKLieMWG6MsX;8%?>]5Y!|%Et78Cv');
define('LOGGED_IN_KEY',    'ny-nd/BkBU*2-J*.4 O[u6[ulM:D4+{;(ibQK]kTuI HME`%/o)>NQ.hzCu8;xYV');
define('NONCE_KEY',        'vc}*h~%5|yMPnai<u[4y}B-)tjA T{Bh]{D/F}Ks/}a&YtXrwJueK84w,J|zE>E]');
define('AUTH_SALT',        '<~rIfbC=-F5~~yi^P.`(a:SN$g`E%.jJac;9FQNobLND[8m>DX9^T[Fj+-4{|]8<');
define('SECURE_AUTH_SALT', 'Vp5><W &$/7$d^R!_*Qr<+mz)Z$Q3/&o[doul/H&6LBK=xr-}n7qCDPas!(]/;b|');
define('LOGGED_IN_SALT',   'R3cLjhXj(u4RO&{z;+ZX:{ _?gs|5k%9^TJ]kij@*cLXAtT(n)v2JyN,(-hzAi~-');
define('NONCE_SALT',       'wr/6|/h~(lpD)^%,wM9FaQU#o3z_la+`3PgyyfG-_>}$G!cl)iji_JBiH}Vc;J$>');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');