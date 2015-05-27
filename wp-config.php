<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'shirin_cafe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#|x.w({?xk-gLO-;U],#8Q>M|%gHr3|URbNV?FATP{N[H}*.!5Iqi)9:_++Q)^0D');
define('SECURE_AUTH_KEY',  ' F-/ym9e=eo&<EO[U76ykFstN|,XE&$QgF#Hx?H+6*F.>{}(&|:`=:`0x)ckV]x{');
define('LOGGED_IN_KEY',    'XG+};o<&Naw/KGOkNq8o:?5gEa2n87yK`A~~juOa&V@GQu8&os4^UDy`}fQlfKnf');
define('NONCE_KEY',        'QrEK$,|yH_$IpO+U@R+jjIu@X0W,5S}odIct+xPyvtMB@L+oUE~$0ZJO)>|lu[(x');
define('AUTH_SALT',        'zuL-E?u]gLlCiu6}aR3/-0g6-.$Jq6J.n),T((V7[`l5>MMQfDu0B+nWH~c|b:43');
define('SECURE_AUTH_SALT', '>Wb^^)h#l,CY|kiXY}yiv?^/ry_zqrlZ<;@j7@gh#l^xZRKaEO$9=njqr@}^9#R}');
define('LOGGED_IN_SALT',   ';+eM9|%4c=siMQQ<bxPFxh@bHH3N?TkU+8fcJ=Ihnx0GT5VZ<[k8Jyl;E:0EzKVp');
define('NONCE_SALT',       'BlW<-[`Y#Ke66L3|]z[82lm<x8iv]jP?:P=<Z3+.lxQdxO_[5~+-B%bE(=lc/0+0');

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

define( 'WP_MEMORY_LIMIT', '64M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
