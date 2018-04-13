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
define('DB_NAME', 'CVAikikai');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'h/jVq(U%R68r_4v}rLFlRgp9LHPaSD&mwXpzHHP{UT= ??v]Go4e[rdb$g/YiRk%');
define('SECURE_AUTH_KEY',  'Ro;jwf.ex(z* /5&Bg17uXpJ~H[6,M],9BToC>?ACpaC/6&7?22i+1*m6AcBzM,D');
define('LOGGED_IN_KEY',    'X~[h)v8A8rZoMX7pJ(hK_N-(_v5sThoojC~aFT%;j+3Kq8p-k:zeg k$_4&.oH)n');
define('NONCE_KEY',        '{X0bHPjREfgdkS_dl)L/{?d/bI$*`&5!g16L,]*1Cw7fqDdfL,OH:uBS;8eL}*3y');
define('AUTH_SALT',        'NO7o>-d?`PD>b,P3b#w 5kp5-zzH{1:|?>O5&!4u>?he3`T([S,vwZ(;lO-Y#[3H');
define('SECURE_AUTH_SALT', '5B]-?yN!2]$r89L@}cB8uNks:KLqG!:&K3[I6tf4A!)$kN?7Sjz-|ZfNGPD^af x');
define('LOGGED_IN_SALT',   '<hIx*T]+Ef]l|t}R0[Y^_D+$3)&vgkH98R=4q^!HjJ->(|rQZr}/L7}aPzn7zP0;');
define('NONCE_SALT',       '<dYY*FPE.`rT,Kg}idRdCZ8-<8;{U8N5[bVldU$RW!t<`7$A?k$,ze&xZGV0AGu7');

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
