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
define( 'DB_NAME', 'wp-test-task' );

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
define( 'AUTH_KEY',         'fgH%(^L7${9eF(yWYGC9Xl+aC}r@L/G7;41DT&2UJ5umrNjI.SiO1SyF_/i~}tnQ' );
define( 'SECURE_AUTH_KEY',  '[3oDJn~LCGh<5{B)0jZN#(4>/5?Hs9%xv&!@vEtmbE<Bx2GpK9,9x1_;<Nos6UMu' );
define( 'LOGGED_IN_KEY',    'wvE:[OERsJ~R)-c:RX`:awr6B>z cIDY:Dg2nXFpm`iKAFm 9= iZ[.Qb)!0i%-<' );
define( 'NONCE_KEY',        'wZ`|zOMh1{nqXZ}ah;ANU!lYb(~JP,]jt]Q&z9q|HDjw61!+:$Z=c@Duq,qfU0Bl' );
define( 'AUTH_SALT',        '1e[<5`UZYHWM9O0H#6t)+/pRdENKc=jG(z=SBeyF-<@fSk<HK`lU6]H9~o<j2[96' );
define( 'SECURE_AUTH_SALT', '$?}4EGM3E5E/#mv.P2wzyR.h}bx?C`@c:^ T%Kp!$rOGw|NysU$`~mg{*w;a49(*' );
define( 'LOGGED_IN_SALT',   ')5r^]B,>Y5<b_LF,LgLKDZpr&^}UYxM~/u32Z/]5*a@H=YwW>mF@O1^ocuZ@z^mH' );
define( 'NONCE_SALT',       ',9>2:Z(*!:UhF(|kk#$3Y{EI} I:PFu)!#?BC5#1-<Rwh.,{5_o,b4q4>Y,-d9^(' );

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
