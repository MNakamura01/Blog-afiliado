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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-blog-afiliado-curso' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uvBm0nLK-kD,Bs.?*+?M&n?wK9g=bvto<#8Jtj)TfJ~l|3p~2?:_--i%58+=qJzY' );
define( 'SECURE_AUTH_KEY',  '!J:]lUl:Lf*&J9|5[L{F4[ugoeJhu]_&@xx@Gd#+H>3^D$eET=1kyNxog5]|%O;x' );
define( 'LOGGED_IN_KEY',    'BpW0yF%A,LV-,c_Gs](_Z8S=SKn(&KDn7sv4]&n=du #:WvHF-;uF(^B$__q!n x' );
define( 'NONCE_KEY',        '!OKHUO|x7,zV11q0}I$J#k|+ABu6c:V|l>-dO6%U/*Hn/rrN!QZ><fcX>8S?$6*>' );
define( 'AUTH_SALT',        ',y+%D[8 y0uPdEo`Um!]RUDKGEDL%#1=`vOhcl_D%4?={0;*2jd8MDDtMuJu?VY[' );
define( 'SECURE_AUTH_SALT', 'rAg%D!aNB5+//+Q)r7v5=r3W}*94^-cSUT8-Hvfqo1)v1B@vz!FOV}KoCTSU3;?#' );
define( 'LOGGED_IN_SALT',   'J%qx2FED@p2K_!UiV2g,[R~Z#ci89-to$:cYf@mk.4Y#I#h|}Y&uTUm=T,B#E|`2' );
define( 'NONCE_SALT',       ']Ofbi[}ycVx)tx;iw(g&Q:9P9~}Eb(N&3x~};OHM7z2Esv57R3&P]?gf_xvgfhXt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
