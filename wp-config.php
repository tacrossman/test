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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'O8u^3_ae#+WU,hZJYQJ3~f@}Bw`K flm_-aqwA),9A$lWqT$.-<dfvr_O=ghsT)>');
define('SECURE_AUTH_KEY',  '!)@uy-z5gw:sj3%sX:qa]_I+;v5wa{KNri/W89P|tp^A-w0nZY}zvj5V>BH/>F*l');
define('LOGGED_IN_KEY',    'V){Q~|Rc.lH^5M|Y18*@@1?%B1xz:PciYHc+_;9-*]ro:N0$wGK8CfVfksF!ZSK3');
define('NONCE_KEY',        '$fH+NR:u-GXi/+|Vy7g0.$=`F|AfrQ$|*V==,Y|P+v..uzR|h!,ax+[~W]PH&3X3');
define('AUTH_SALT',        '5dr},Kq2T>/#rXufjv6#{<96#.ltCsS^VaY-+nFHNk>l*]:/#N2%.Y<+z.+[7_iI');
define('SECURE_AUTH_SALT', '-@P[+wT,;P)!M0bv-Do2Zx2Y2V#${nB>*IuC5F.mp^!J=E!e:9`C?ipIcHh<Bw-]');
define('LOGGED_IN_SALT',   'e3!E! v+j+om2pC6n%~80;|>%x2J[r+=4QV>CmyG2rL$~_?@jA0#Wa&Y[0oP6VlH');
define('NONCE_SALT',       '?A9DuMu,}hTblE+}D2 U6,x@Q|fVNeRL$jlOgWB{.iJpi_o&CwDf0-M^7V0O=]:n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test_';

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
