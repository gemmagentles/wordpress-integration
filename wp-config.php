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
define('DB_NAME', 'tractionguestdb');

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
define('AUTH_KEY',         '-ELdkU%^|h:nR9v5[S2AW=/aOp;9+#SMvf i>w0;j]mF+/g _vN(CK(`[Xl+ybF3');
define('SECURE_AUTH_KEY',  'EBkYtH0w!=4WL(t 2b_HUB!}[<So:DFE )~6wEG%!FEE}9V/eB;5Js]qenOe,48Z');
define('LOGGED_IN_KEY',    'TEXPLVH6P<~%>x(bfR}$>.Ngu.LhA+YnWFm>y7>0,`+XqJDeG|e_[p4Ji!{O%Sgl');
define('NONCE_KEY',        '96osf yPMcSre*>@5kgh=pLINE/K=pdkXUhq,3l1:5{9f 5b#L=+W8~V+>V,gh0b');
define('AUTH_SALT',        '!mp?-E 0|yX<_@2&Ka1__=aGBej%s|(cd/aZkT*TS?}<(iQWG5?idf!&ZwglvG2/');
define('SECURE_AUTH_SALT', '5/MRMaH7PI5?3N)>o6`y@szyh|_n2-$YJ*IrZR*XByK5fQA4A@<)t*P_&^ nVdfF');
define('LOGGED_IN_SALT',   '>Ia)Fu!U3^ijnE7CH7%)^zJM74[RKtjWH ,XpjO^OK<FU-7sx|laCWjSgJG#W0^I');
define('NONCE_SALT',       ']C<1QgHvSzu#6o&fF.f0k$C@2GQ{{$e) R 6)^|P:#QltSNJsz]s^^zd iOD70C<');

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
