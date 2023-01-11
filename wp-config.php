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
define( 'DB_NAME', 'tastmindorbital' );

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
define( 'AUTH_KEY',         'Y!e,E_cDSQrQWlz24_!gNVI>W}q0XQDdnR_h0Qf#8Bgn)y,xS3S;$#ZAbTNd5VC)' );
define( 'SECURE_AUTH_KEY',  'z5!,+^}he:[h1T<V*>:,X|Yn! |e5uarQ1#LRHDLUI*NiSt+.|RrbKnR{8ySOr8#' );
define( 'LOGGED_IN_KEY',    '7;;L>jE{}*$ZW0uq5gK[W*[{<j9p}!oa.m;(QO9]!.n;`&6BnXpN4BYyibCEZ)S.' );
define( 'NONCE_KEY',        '9A/*1L|i;`4A@ICj9+mEyLR~8*5|dS:#H0*e-:wC8L&R:LPH$Z/JnFvXGpE4LHa0' );
define( 'AUTH_SALT',        'VYLNV/7^!|D&E lUi@2_H%>NQQbBK@Bm[57mFFDU@uw.&{N^LR_TUs$+E/< W)md' );
define( 'SECURE_AUTH_SALT', 'L:i/GAcrG&^@Y*+DN{%&E];+)[GczmJm]xs0HRPj60l^N{P:Z5h.z##0RK4T.AN2' );
define( 'LOGGED_IN_SALT',   'epK4y==y#N9-aSvk`MdWd.nLN be}}>T4./!w9r!JnUhqA,i@YWgP$*jF*qQEkuG' );
define( 'NONCE_SALT',       'qB.J=l=kp7lKD9}]v?JypM1q@X(R@9H]mR7@LqvluO^1xZd)7YKn,mwrg&OtjEEy' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
