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
define('AUTH_KEY',         'E--wY8#uo{aNwq@RWm_R7,+-WIwog3DCqa>DpZJ[+9wlh)Tc~-B/%8Eqevne)&K)');
define('SECURE_AUTH_KEY',  'hwV7{*zI`DPK5:tGBs0:v<n7kZ,tG,g:u=r+~=]L&n+u{[g~g#vF-GD3i!4^rb#g');
define('LOGGED_IN_KEY',    'Iu7$Luf+^ei ,HsR}Z^.b}F+|*mSP%*NJ)@$!RaCc|j1B9s|~Ju(8vfRebNTir&/');
define('NONCE_KEY',        'QSy(IEF%U|HUt{eob/usOo=5h+M#uRY&,Sm%x+1g{^-m-O}|w&W`H*}!#5.j.e-D');
define('AUTH_SALT',        'M;Lsz|gbD*D{cy=bqiUS*ar1t(7$*gZusY&:}?lm3sl!N/zWmP80-@@^S_|2N5Qp');
define('SECURE_AUTH_SALT', 'R6 ->.g,mY4]?Am4bmZ=u;~k4mdk^CCX>M<n1*&epG|E(ZZKK pfA(uSo+FuHKgj');
define('LOGGED_IN_SALT',   '[UW=j7RXzwVuoyh%(#MSrg-I}+J%2QC7CQO|/]i!a(,w+a@&lNW`D|J:)9]?yrG<');
define('NONCE_SALT',       '0TkV$)|ie>X|htrU~Qe?J/!e(^:Y$Jhx@mdvD`<C_|Aj44<^kqQVVvE{>hoS?1n&');

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
