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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '4zt@s-SqV9)hPbXT`)jS]L]m?=IU+39m#a[RFIZL)U;Q-XFopszHDPd(G%*=cD#2');
define('SECURE_AUTH_KEY',  'l$d,m+Fy@qWwHK 6#oi+RU!n$92KdUx2&@M$yZ<~tqTO!7HmFHnmABS}3z[Z{Zmi');
define('LOGGED_IN_KEY',    '~)Nw-)_JjAM}K[J2]]U+$7/z!ja=VX.ZWhigjJT*lGwx997[x8r<pu?H*B!e(.1)');
define('NONCE_KEY',        'f]H$ 7zFa@!:H&3fT6(qF~Q[sfW|NonkKip!|K{g3U^u1n_`N0-K[KSl:k 7@sE-');
define('AUTH_SALT',        '709>zzIV]Dz;/f`+Vz;K90JVH6o, f({hwLGqwE`,aR|K,^%6#6)Mg3~w<Uwx5mm');
define('SECURE_AUTH_SALT', './G/biVV0j6l636ynv!oUrqaeT$Y#q4*75+.F;>:4gl=B_Jqq|>w.,+G;;+0W>> ');
define('LOGGED_IN_SALT',   'jCVz+W|ra,6R`k1+LooU^J/jQY?2,SwF2K4TVz!uTJqb%T%~m%8u,^<J+H3I=D6`');
define('NONCE_SALT',       'YT7s&[*?~S@{nuu:;bkgqI97dM5Fm8ICy@q|gWJqZ2(7%MD~3kBk2iHME^i^C2bt');

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
