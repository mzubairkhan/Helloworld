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
define('DB_NAME', 'helloworld');

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
define('AUTH_KEY',         '-MVsrT/-OGjQIxv#Yu,`9I6MO,0PEZ_avUiPsN,|qs+0/0:d,~b|m<S nCTlx[9n');
define('SECURE_AUTH_KEY',  'W+x|0qx-JQploM[#Dv-=blw?s)X`u#uYhlqC~Hc~z)4f3_AmrOJbW<{e9ioBXq <');
define('LOGGED_IN_KEY',    ':8-!e6[o6-Q3Zk>4%r]LSVTb_5@%~89(%-gV9A|0|dagsFe,}!92[%--nA8ZgUa!');
define('NONCE_KEY',        '-1UsOf#?=*)}W lA17NAFQ~ZLC-(Px^xgqF9`+5%@C&yM03W$FU}g)+r;nYx8#{g');
define('AUTH_SALT',        '{EfFu7_5gt5L03@=N^eeODg?yr9)>W>:w</fNv:;r?%VD|NhFf`#Nc>y];!St|rV');
define('SECURE_AUTH_SALT', '6G$o.klPX]7`DIQbf):>D,w6~<>b{z|(>6J@E#Wwsz%eJioMvn}-,rpkXBu%.C!m');
define('LOGGED_IN_SALT',   '=&*L~NJ:)A[b^lKv,cIWUNaS.>rzv+%o+4&n:}6u1H!s{-Q!v|r*SqvU2Gy-%a8z');
define('NONCE_SALT',       'l;)0]fjQ0|QN`-vRW{}}E+1)Rt0!`ks2x/[7(UJ>@6|FFs|(]=B8v=Zspc_x9|=N');

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
