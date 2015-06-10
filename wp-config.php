<?php
/** Enable W3 Total Cache Edge Mode */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/surgemedia/Documents/MAMP/test-revisr/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wptest_testingwp');

/** MySQL database username */
define('DB_USER', 'wptest_surge');

/** MySQL database password */
define('DB_PASSWORD', 'JNNazB7isiCt');

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
define('AUTH_KEY',         'R6ufiLUSUHw8&f#]#d+x+Sp;$+F||}u2V-z;A83Q>N5+qoRs#rz`LW;v:Dom|,1k');
define('SECURE_AUTH_KEY',  'B}kMMro3z8IHAZ/iV+?YGP++ATGMqDZAd1v]SAR|yrDv2POKQcJH^fl=Q&QVX_I8');
define('LOGGED_IN_KEY',    '+mj/A.u=>ePtf^6=BS;JINYf>5B-(?f`z1wC+f-e*1-x8W|7V,FyB6&G,p6+GsgW');
define('NONCE_KEY',        '(<(3kEa4_=l>N1#l8Uu0]!6cSJkbnkkXZ*sGmtkUm]~8LMLTffO3D#&@Rf-MIRsK');
define('AUTH_SALT',        'cdpz+n6Lsj+z}z[ Ni7|NqJ6][H8;{(7M1;0i`g+UQl8@|4fjbiyQXmeR>8*&+,B');
define('SECURE_AUTH_SALT', '1*?[<s(F^?U~:<=21pQ-z7?.p7)`&Tv$A5k I@] (QL|TGe-Z@#W,|~Av&!I%f9Y');
define('LOGGED_IN_SALT',   't8sB>E*Cix*fSHEf%Znj&#3M|!A6+t-1s9aG-O|0qgZs$e+B]U}}7r74=8]+O{Q}');
define('NONCE_SALT',       '0<gpsB{r`Z7vfmDJf|Q!$`.`Bc&P|_+qIVH+Px|D`,%NW I<yPvQw> 6fW<a>Ii@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'test_';

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

require_once(ABSPATH . 'website_link.php');
