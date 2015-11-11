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
define('DB_NAME', 'wordpress-pract');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':6^yzKB!KuvZVVMB.-Yf#r#A&!.--_JFj^a#*%+s}X|{-gN]DZi]D7!@O(HR]L8<');
define('SECURE_AUTH_KEY',  '4uc|ue(xXGa&I]Q!T`p|.8(u1&H)Eh>M*:PPvh.uY1Q)#0s7Dg{5/r78G)2.F2ey');
define('LOGGED_IN_KEY',    '{yCH]7DTT-iZ_h|Z{A{!gW7TlwVmxvw(qn)ofX<;p]yr^k+k+i|b+:lqb(VJnCxi');
define('NONCE_KEY',        '/],?_wg-g$v7.4A [pO*jyCzpG~}]6p4m^%G$=.9,MS4-V?( f;S;_|=|)xieF@e');
define('AUTH_SALT',        'e`(0/CjBUh[mt,,ilDQ$w<h}In|a+3t}jGaP:.e1Mqnki-@z5FXd+FZMr*l+Xh1n');
define('SECURE_AUTH_SALT', '8+,:IZpm>}FVj3tNxp>Vi+-n~Htxm]chu63:EUAT#:xV60J~TJ<A|Rk8cIdzTe+,');
define('LOGGED_IN_SALT',   '|G}!oXubdEyWa4|1`1f4.P/U&?+)B;ctUB|+|+^9*>s[|GkSHO<$|mF8$a0-drg6');
define('NONCE_SALT',       'x5rU|4%AOMz+g:@!aLg!<,|lg5u5I4@$L<L6P^^^)f|QCAy<5ZU8aYCR0.Vt>09e');

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
