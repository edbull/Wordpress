<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'merna');

/** MySQL database username */
define('DB_USER', 'elinore');

/** MySQL database password */
define('DB_PASSWORD', '0JILFfqi');

/** MySQL hostname */
define('DB_HOST', 'localhost:/tmp/mysql/merna.sock');

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
define('AUTH_KEY',         'J0@vn>pa!@NRY%!.yjp}MPz{WSGH*Zy:J*=U[y%~AMEMi[*unr[B.ZL8MYYYpJ!:');
define('SECURE_AUTH_KEY',  'TU{2H06;C4[ULZ`P42JuRBYRj+]<*HfD^n_ITUs~S/Fa+&[EPBfbbZ]l!:|;3?<]');
define('LOGGED_IN_KEY',    '~1oMre):qCTdlH=B+<<u^R?M(I&onr3i[-;;PJjxa r9A9dU|A0HI[+~EyB$?~5E');
define('NONCE_KEY',        'fhMOJ4Lt]A9)z[R<$})sH(q7MHjCn^X%;tvC>8`>[Cs``ep6*gii1tG0Eh)xX_<$');
define('AUTH_SALT',        'is:*.!#;;72[lGvo<#NBj,bDsceA=dD=-KIC b,Gs@ihFS>bg!5envqN[Z6G0B^=');
define('SECURE_AUTH_SALT', '56%-c/S#5xjL e}zZ$-5{uB-sXY7N/K35o>g7l##:1m=cMQ$!|R+5&7vaV(X..QI');
define('LOGGED_IN_SALT',   'kr:k1m:pmjMKc49I.5!05:/H;ks*Nl-u}nIIj,L~d}#!SP:ka%9R1C?GDO@%I|85');
define('NONCE_SALT',       ')>C}tb)2~bUVM63sj3=YU?CyIN]07$ypsKCDQCX$f22^^$)/ENKM{$,&V:Tb*,G6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
