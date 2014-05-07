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
define('DB_NAME', 'soad');

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
define('AUTH_KEY',         '>{8NYp{#2Q!xZ;ujL/m`+@m?j1T`uJC 3>::zxt1}+XD:Xl=TaNKyx2@vEQ}~sk|');
define('SECURE_AUTH_KEY',  'YVw30ogKV-C-<b+Vtc_o^Z={=tv]eMeTPX/*,.kb([74b=$)SilAYB[hbFDo!&N|');
define('LOGGED_IN_KEY',    's[,,|]AmWZxtw]sE+3bPCi+})qC;pNHD;JsryF-b9.I2xV-)_Y{e;!g|cdvA8_oi');
define('NONCE_KEY',        'AHwb.Mrm*KF{Vz-wbMH+?6%2]-Km7}>oj7=d|g`H+buQtZ.-T>A50_X,)#JDpmmy');
define('AUTH_SALT',        'DVT*UY)mb)+v(l![}oXKz%dGSA-A|OmlFXM)VPEhr,<_`SjoW:DwZa5u<J<{/?di');
define('SECURE_AUTH_SALT', '+y;uCnt9u/ ]2g!.&YoN8b+}8}x%q[Dq]0fw!dhAu@f?Y@Ua|4KE|4f,mUM;(wet');
define('LOGGED_IN_SALT',   'qGv|9tXRmH(-r}a>1D.sTcj@z3+v/T.$cj*9#h/>kVtgiL(6;]Xc#h*NWB-tmbVL');
define('NONCE_SALT',       '2;O-{2fm=mU6,Uy_z5d<4TiyzpL_rL*EQoRf6<Fo5JH*BtXf%s4Cq`eUVw|&q|YH');

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

