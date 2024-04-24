<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'shopsizzle' );

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
define( 'AUTH_KEY',         '2MoR l@}qZ^laMf0?g?M2n 9d`)^aOPi9czZ6<s~M,6{s0+4//w0depWA3a}1)X+' );
define( 'SECURE_AUTH_KEY',  'p{yJ)3H4tv%BK@Y<3SI<yAFa!eP@0x,<~k],WRg^~N:-cC2zD20I+#SO5(=ry9Vg' );
define( 'LOGGED_IN_KEY',    '}x;sBO_Ngd4;Jq|)xLMxLO]f`ERu]wR>ku/CWpv)qZONlLLg;4iv@F-B8EHgRgVZ' );
define( 'NONCE_KEY',        'A8&>ltw+D2XFmn(tG~=*@os0VS3c5Kp72pztA-zk5n%LSS>0A|cAJ!%ltX;)S~<#' );
define( 'AUTH_SALT',        '6`1Br(9#Ow4,iN0 Mkw=KXBgO{bEyug,NF(p:aS;@.:&zTLf83QdAcQOp?A[h}CF' );
define( 'SECURE_AUTH_SALT', '|[):Cm[W>C5m{2Pwv-3&bKzfyh =_+FNN^23^+lDkaH6 >r=(X8S2|xWbH!;ZD%2' );
define( 'LOGGED_IN_SALT',   'kqz}$x`s+T9JPbSuVW1O~k8G/*s#X8[#MnFWK}s^~&e4:o(6C_QJ[qiB>|l-D!nE' );
define( 'NONCE_SALT',       'M!X1}zlbJy5%E|?H:%/lB!~XWT>=[Nb1tMitdR~;zs3v_L9(!7ZIL+c@FCjNB)V_' );

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
