<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'medieval_festival');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']3/)?(5q?n[eEZ|x[RcR6!xNMUp,,=r4;Aol9Stgvv4(x/A]uWSFNj@je+[J;o8/');
define('SECURE_AUTH_KEY',  'X_V3}pR95z=F@.yr<vx2nza?1=mY*;y?X3oiY-*(UB.iwe~(frKE<1]KyW<;<dRc');
define('LOGGED_IN_KEY',    'xC *D/B)/X 0 .{2y}$Jx7:.N_$B !4V$`>s,_TLj6nknG36%vCq5F9J(,oUfS9,');
define('NONCE_KEY',        'D8@TZORW} &y#Ll!i.1m5=M1ywY$ion)ozSI[w/DSbc;0DLVg^Ge+xGt~OECW,~H');
define('AUTH_SALT',        '@0o+96GOqs:2)*-):-.sScV3Oo6o|]]Utn|XwOXrxJrpuumo )DBAsJG46^{8L_l');
define('SECURE_AUTH_SALT', '(rxT4O|syX*M>K@N~D_dWIuInT+/70K gRl(Mm|B;e O7X&Z_.cGkq.8Oh<O#Bpp');
define('LOGGED_IN_SALT',   'iC96:oos[l#Gp~aC,k?LncJ2P0_~f8Fc1(#RHopD!e{a$3b@C~H=d{{{*d5_W,#+');
define('NONCE_SALT',       'ACyb{LfQk,03iGX)ng|em 4FQ|a xU5;/7f.yDu0aqsjgW8.1hQK;2/eEjsMxXp8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_festival';

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
