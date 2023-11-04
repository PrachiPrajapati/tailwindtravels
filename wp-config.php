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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tailwindtravels' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^+sfqK4Fk6BKz^Q+e=zo7uf-lI7.no5@;Ym3JeXPMpKI3I`k{8zxf|BF!c5:3Fn5' );
define( 'SECURE_AUTH_KEY',  'fgB Zsy)$[mn~ fQOPNu|F%3k[g!EEi6=:Tl-?GMILP;.bj&G@W`>+LihlE&2ZA^' );
define( 'LOGGED_IN_KEY',    'Nb^l$R>QSrO%Q4DGg[RY,7K#nL(dp;z/(T1*X|6d_NI?w?[PLg[7!7OvN)NvG5BP' );
define( 'NONCE_KEY',        '8{N@Pe/d]h4+Ta`I:6[srl7a&l#KbeeFp3CfWFq/sP}5kcx9`>JRYpoc)_sv&=] ' );
define( 'AUTH_SALT',        '!&]gW.?-81gWwW[{Fc_{wQH#:95zc=M:=eGNxxsmLnUJXbxs+tdtg&ln}nX/,GkX' );
define( 'SECURE_AUTH_SALT', 'lyk-z 1i8R(}|ifNUV60`U!Km?!zMJ_#{&o&Fo[?Wj#@rzEok,sb?WrS`r D`16_' );
define( 'LOGGED_IN_SALT',   '9n)l:|8cV@ 11z[;q=`a@R<oR$XB8~J[>2YNMC/_54wnSVMKLWW5%sRQ2^-YW8_0' );
define( 'NONCE_SALT',       'r</|?_19/o0;T)Gw](ifDG58M4Vyr3UnbBH: ZEVd^KA9_;(vx :4o8?7rDT>Jay' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
