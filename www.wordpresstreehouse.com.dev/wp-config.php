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
define('DB_NAME', 'comDBhms8e');

/** MySQL database username */
define('DB_USER', 'comDBhms8e');

/** MySQL database password */
define('DB_PASSWORD', 'Bxdjaz3kch');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '9D9#~x91]xphe_+taSLHmeWD5;#PH9#*xt2]xqieW+iaTPHAeLE62].6;<.+u<*+u');
define('SECURE_AUTH_KEY',  '!!sgNkVGC}G0:@4!sdZwhO851_o#whdOhSD9WD:~5#xtd+hSDlWH;L62_t]xiS+mW');
define('LOGGED_IN_KEY',    '-_~ldVSKpWOG95:SK1]_-w5;-tlha~leWOKDiOH92;#L2]_*xp.+tpiatmeaTLDXP');
define('NONCE_KEY',        'eLH;<.+u<*yumeyqifXPIbTMIA2{E6<.$j<^$unTMrnfXE7UMIB3{y7>,$jb^$');
define('AUTH_SALT',        '6EA3*yq3{yqjfX$ubUMIAfYE7{,I3^yrn},rjcUQvcUMJB3YF70>,$!ngcUNFYR');
define('SECURE_AUTH_SALT', 'DE2L6<.u{$mTqbXIbM63.7<yu{$nUQB7>u}$yj^rcJgQN7,B}@z0!rYvgRN8RC}@G');
define('LOGGED_IN_SALT',   'pxeWSLpWPHD5;T92]#*x6.+tqiaumeaTLDXPHA6;<A2{<*x{.*yqXPuqjbIA2bTME');
define('NONCE_SALT',       'U,MF},^zr,$vrjc<^yunfMrjfXQ7UQIB<^yB3{yrjf,rjcUQInUMF73}F70},r0>');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
