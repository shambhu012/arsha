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
define( 'DB_NAME', 'Arsha' );

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
define( 'AUTH_KEY',         'sDkPJ[q*d34WB=!RH`7/2ek~fD3Cc=<=jlYc0^h`9>}oO&qXm|5$}kJ#G9t1r)HD' );
define( 'SECURE_AUTH_KEY',  '^)JLqokk;r~k%gBxuDso}cyWS@}qe*$umwV}7w4e4P1-m>WzuwkfqUbV)YOLk!o=' );
define( 'LOGGED_IN_KEY',    '}./_PUXZ;{=y1&ao#ad7::meD; f4.0Eyd|Z(p_}SO&;R1@CD/>I/F,3XO[7vq9<' );
define( 'NONCE_KEY',        'uc[C-s3#frcHy!uPqAeNV_YZQZ?bBg*IlX/znfn@4BZbk622R{Oa(zek1Ca,{L(2' );
define( 'AUTH_SALT',        '!d8zl711vbzQt~!to0>HffE`P+@ WjE/%ENSL|)X^:7_+]1=)M4|xL{k7FQOHI{)' );
define( 'SECURE_AUTH_SALT', 'W59R :5>NYB6gjX]Djm_vV0AWI9;G[Z??IA yl7}^qt+<;8Cgz!lJ+SC;& 6,TXg' );
define( 'LOGGED_IN_SALT',   'Z5)t*L@6)p3:02m:&V|-1Z5kzR4Lcka7(2dHU:EAuU0.!oR*#F$:%yTylsp4Cu]G' );
define( 'NONCE_SALT',       'hBREe?sr^9O+a5:a=HT=vV*m*#v3p#=O4$,nIy (>1DQlO8)IH#!|fwR%lJ^dhpr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Arsha_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
