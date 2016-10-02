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
define('DB_NAME', 'genydb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'GclP/DB^-og6h1Zg%l|9$[%*H{fYe/-%{6*cC/3+o2AMMDK/`k26Sk +3n(oBdf(');
define('SECURE_AUTH_KEY',  'X.I>oZ&O>=Js2BxEo{+{fDAsh`lc|U^fhm1J#v=lfD`nK+C4M+K1cr3J+A@u?&mt');
define('LOGGED_IN_KEY',    'gH_TJ~}hE!/!/V#l|Q^[3N-O@2U[?-swGKJb3Ra/*Y9s=-tZ6t.:?$4mvB.QYna0');
define('NONCE_KEY',        '~FRWU{*J{9fl^LbOSnS-cOq>^Z;597|c|X$QQG[uhoW_g8fDb`<3pO|(vV8_!l4U');
define('AUTH_SALT',        '-v<MR-E.~B2 ,4Sea<@MZ)=B<zHNx^-;UyJRqn<w.qGVzKE*e8l?,mqSbLb CUX,');
define('SECURE_AUTH_SALT', 'bkR$Y=&=2Hx(SdsE5fPT!+a1|Jcgp)=+v*%*|0O2@tMD~T(w_],|]xUaJxvsyXJ#');
define('LOGGED_IN_SALT',   'h(%7=(q0a40++1-a{>kL(CwaYZt5,-Jr0O+Ig(>PZ%Ni%1|DW)UM9LH>9wLw8`D]');
define('NONCE_SALT',       '=9ODol(88LjB-Y5C_&+2%zZ}/|!O7_N|DrW`MGX{#)/_,=:4<N+)}b,Zd-:}hBgI');

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
