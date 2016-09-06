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
define('DB_NAME', 'db_insydsports');

/** MySQL database username */
define('DB_USER', 'sports-admin');

/** MySQL database password */
define('DB_PASSWORD', 'insydadmin');

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
define('AUTH_KEY',         'HcM^xoaC9$./Ub.2c>FK)Zah0#BlN8>Mp=7TP?.!y/N4CHW9%S#8_s<0Z}: G)if');
define('SECURE_AUTH_KEY',  '&pOG$`,G!X$fS&:,.?4#x)nUZ0H$|+dLo;kC7a#c(&)~vV~p}6xV`<A)e&]DDAN[');
define('LOGGED_IN_KEY',    ' UYsy^.;=^1)TA(JN{b}n`e2waJPPyW%@WiIT~X$tSIrOzP@*55DxKe&(xRyyNL8');
define('NONCE_KEY',        '1}hzg#m0dg|[DE&bC!8xawc0_QlvU;:NX5}/N!eU-M<X+6[joGA7]64|2z.L|4<I');
define('AUTH_SALT',        '8;U M,+0!G9^L{{M.y`wumXJ%M,u|3lh`^+ p*]x//@4/pvvOewHwF)N+>..$}+D');
define('SECURE_AUTH_SALT', 'qi?X1#03kvpR=5C|`U,Qh 3z*+g,y_yozEqr^nW#aoKOG%yo4P=`HURcAf2h;=Na');
define('LOGGED_IN_SALT',   'S<.bNld:V1Gl4A<nWLw~O,2I?y0Ca&t]h_Owk0$DVRp;dS:9Zy%!>&IKa-M[#}j*');
define('NONCE_SALT',       'TXJA6(<aB_F!A&X?wO+g&nEv#UmEaGcb7NgV(UGk|erVZ9F}tR%1K}(<]I}2rZu/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ins_';

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
