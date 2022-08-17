<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shafer_clinic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Fu<?j6xg{@C8AF0a{`/10OFe@n`,(8}##r?G)[In+juw)Z!R8-}LQZe_-r~|6_h[' );
define( 'SECURE_AUTH_KEY',  '`UUp{-X|o)=ePGYflC^CvJdy2gf^;,+]Drg-<_~E{mdk:n$[/%Cdvt[ug#`B5Xo@' );
define( 'LOGGED_IN_KEY',    'Y[`DTk&`~T]<=fBL_fzK.BrfgZxS,9T*8GwIz60cwRr;r2:4}T|w%YNld`X)>X@%' );
define( 'NONCE_KEY',        '(u{+{xGkF^KgmMlW(e)$=4Oy2sVAqb:_W,PU)tQ]8$p;[G<S@`cRoTjVP4e=w>rO' );
define( 'AUTH_SALT',        '-(ihb^u18t^Q;S<KJjqN1YtafE@9[;HZt]NuLloq1@Z;,xSiX~NIRu[WeCpqpX7:' );
define( 'SECURE_AUTH_SALT', 'wAv9)QGU}Uy{}UM[7U>l8<5JEw+;_+]%Ca0rUB,6iLpWClVk9JB;Fio;L)=BlD5I' );
define( 'LOGGED_IN_SALT',   'VshJ-[.R]=gA*A,!uOG)E~Sk`L5-w0D7cFW|g.&>akQ}$Wa#=^rA~rN#%Xk.Pq*r' );
define( 'NONCE_SALT',       'VN|W*u/#_[6B U-JseAG-*;|@K4IQq<y2x@TYP}|p0DvG=CD&h9YXD&Is-/P%x3~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
