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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+.8bERmBgY^(].(*CY<.A(qj~|Hx475eOhY4o>ZAp7T.U9jjRUMF2Yd(:I=q<<f3' );
define( 'SECURE_AUTH_KEY',  'H%ni0Rz&.dhNE# +9}n,mJ)oSc[mmUgw!Fr}H2Im:wyY!g;(ser(pnj2ZOFW}?rL' );
define( 'LOGGED_IN_KEY',    'ieaDzl^GXvVkX?ox^GkhCNunAT6Qoudt{P}COaWaB,lytKLVpR|fdoBBuL$e%%hQ' );
define( 'NONCE_KEY',        'oS0$bkYwwvYe-2>d%VkcZ:Ts:cT%{053yP>!Z3_YS>W|hmW)g<HwgrL~`e+qo;)!' );
define( 'AUTH_SALT',        'y?n~J@q=yib]w), hm3`XH<LfQRh8+D`y&LKxPopO$uCu4P_o@n*;qwk2f@-EXHT' );
define( 'SECURE_AUTH_SALT', '@}N rhqf.m8$AHVs?S*#)xUN-+`|5GK rni4SrbJ`XTm%?6=b<JTT?gp8};3|&^#' );
define( 'LOGGED_IN_SALT',   'K5M4b<.:i+.o!;9rahVoc;]{0wDr#v[3dbQ)0|gJR?vY?B|S.Y:*^8#OQAG8 yq$' );
define( 'NONCE_SALT',       'P)6qeSBO[j?w.$;D*okzi $oL*VpIG51({CAJw<M{P`wecGGMF}voa5~J)2R@y2*' );

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
