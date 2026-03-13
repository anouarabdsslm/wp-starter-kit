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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/pivotlar/websites/starter-kit.pivotlar.app/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'db_pivotlar_b19n' );

/** Database username */
define( 'DB_USER', 'plr_pivotlar_b19n' );

/** Database password */
define( 'DB_PASSWORD', 'hnKK6mp3+dBLWQcE' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'o%q7|!q.HidiSI; [3(6IM9spye75~?4r:lz0m|tV@H%V*|bOKr@?udlknfiDR~,' );
define( 'SECURE_AUTH_KEY',   'BGx($?Wp@hLruTe}c-j#f K%42Kwj2mC*8V.i;)9M7xtMk-ToySmsT rUq{ i/fO' );
define( 'LOGGED_IN_KEY',     '+0tQsO6Hez8 1czn1GC(km*y)Ae52<lt]Eh8P_G]d68q2-hu]5,C&t pEdt}C_Ly' );
define( 'NONCE_KEY',         '<FV=W/IBrbY#Zzl8fHA:r:ca{}H1(T~UbH~y(ambKx <luIGGqEKpFuW`{zc8>aU' );
define( 'AUTH_SALT',         ')CElj@w~?[MzC9*G+iNZW&(4%s+sM,I;Vb_h,p55]@lv^hd[5gACv45>1iJZ@X(#' );
define( 'SECURE_AUTH_SALT',  'J*fPMDl^b#w,lSUAEUa+X2L1e{P7gZ%6rNXG>UQX $z_v49.9d*~`|h&W>jGv+w_' );
define( 'LOGGED_IN_SALT',    'FLMyvFy?];`hD17DYAPsrvg5{(JnZLf>Qq*57yv-}f$.6`}%^[6Gz=AfB}g:$fzY' );
define( 'NONCE_SALT',        'jvxJWu{rIex_>{)iYd%WIGIdJBAD3&P/ I9S56 (Z{>1u+}+B]`@G91<)H!K:0BP' );
define( 'WP_CACHE_KEY_SALT', 'P!E:IF] 4v&$Pl%n3I%|H_1:G?epuM,R)9Lq6qI>0p_Gh/mbZ7|LppWQTmTWlIQq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
