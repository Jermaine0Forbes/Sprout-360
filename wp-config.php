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
define('DB_NAME', 'sprout360');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define( 'FS_METHOD', 'direct' );

define( 'WP_DEBUG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'O%:l-X{*MSNcz|2oHzGT@BL%Va-AKNk.0$)_oSymhs!d4H<<)f@LpVD/Z6kl1.Um');
 define('SECURE_AUTH_KEY',  'y=@5C +.Q{`VyS2YW2nJKCR-_@BdU Z97r{Q3lg*2-@`+r&Y9L*1h80bt(px}#SO');
 define('LOGGED_IN_KEY',    'l_Z?D^`v)|vKLS`U-qOCPi8KmOG`VxOSfH3g.[ hA@Mi$+K*w$w]fe0wHe]f<|_Q');
 define('NONCE_KEY',        '0L.rg}6`~)`>ms4|1eOZ^*lg,4qaQwmE8n8f^VqX%3hK|i@B#Y|yE;m^>Swi^|H6');
 define('AUTH_SALT',        '63dphSl23?gf]|j.4=:<~(H.TXik1B{I6rcqMp2~ Ol;iTm>g5F.g!#)67bt2ljY');
 define('SECURE_AUTH_SALT', 'C/]Yptk=VaHmU1_-9o(DHb4|r[-qfZ0{XCPO1]i7v|CtC$/-ptzqme08Q1OhoBH@');
 define('LOGGED_IN_SALT',   'X<>^=+.ST}$eo!_T&/BE+bbbI/c}xU{F|@]ix>|i|gW;sjUJ;+bhPjjuNI#|-csm');
 define('NONCE_SALT',       'EHeqxl6LN=V@tr=G7dd9U4)7E#{EL .[{Qkg*%ga%Mjj{1r-iQEZ@+Ve6QC!U]B~');


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
