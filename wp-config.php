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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'VieuxTraore2016%' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'V&wgGzDY@0bE*+E;nQ(-Ob]wX,}NkH9w$>=:@HL=D@%5%N>u)oz]H xNBVOoXI;6' );
define( 'SECURE_AUTH_KEY',  '1YHl^2Db_a0.?9CYsC#%[m*vWC{I+TcX1,:7`R66ojPs,^[n{oOV<QlcVVjt6e`i' );
define( 'LOGGED_IN_KEY',    'Z?;0Z)fe4^S@z.A88Mij5vD.)XQ(HHD-!v-Rfy9%S0mQ/VHuTNG>6Hcnwty-f_Gu' );
define( 'NONCE_KEY',        '47)vC*nou+~x&^0@+{$LLG~f@bC, J9?` 8K/Ll|clqZN9hdlP)I/x+J<pT8pU{X' );
define( 'AUTH_SALT',        'ZxDl-6Y?MtIfKQ:(wkj^g7gL;u[^rCI2|BTk`4FjIFQ:cS!M=<~{my`?pNYX@rU]' );
define( 'SECURE_AUTH_SALT', 'GO|aZcv8f60?Uy#z@l::*P&;&D.c<S|Sjh^SHG:xoqiDgXAfA8u0h!^6Q4_?{cIO' );
define( 'LOGGED_IN_SALT',   '+`n]0in&FYcg]=F@MFS(-9$M_k4Zj7_b>^oDTB`F98~@y8TUeMQw|}X_fC40ald=' );
define( 'NONCE_SALT',       'WR_d7`N#ADilcp,l|]m]{?z~2SRW)115oQGg@A[`c3S^(Ixa}/XF>,pwlb8,J,pY' );

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
