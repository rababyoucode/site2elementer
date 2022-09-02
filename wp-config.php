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
define( 'DB_NAME', 'site2elementer' );

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
define( 'AUTH_KEY',         '5<8M$!(;f&4S5Fz&(w{uOFShXc|Ic:IndKZ%Q`oT+gYHDcV1Uz(TP*@=(G8V# p6' );
define( 'SECURE_AUTH_KEY',  'UXd{#&Nd!YbDXbG*4U#QT=Q9W&x5_]Ebm](nBSFnPRlI-r[O8Y/>aeSf>~5_VWnw' );
define( 'LOGGED_IN_KEY',    '-[&DU7H=iaQxMbGotej-K,40d2FX*oQjX8v~}TU6>-&1MF5<!h_*H%Ixkf`.a}B ' );
define( 'NONCE_KEY',        '7?S_w[HM#`PT!wf#{M2t5{$VZk)J%T$2ZP_8o,MjwXmQ^u[B&YYewdKRK{W3je[J' );
define( 'AUTH_SALT',        'ej_5e!i6~hde ]&%mO|]r-y:,c3v[d/L  @S=Id jFN2|fQ0/6XCBQh58daMRd/ ' );
define( 'SECURE_AUTH_SALT', 'vw1*,OuJF*llQDhr|Khjvy~EJ<cUAe8.$@9(w}Xp-6sQZkKK+a s9E/ec$0Dep_|' );
define( 'LOGGED_IN_SALT',   '8wZ5T` ABx^U0p;oUE0Uhz.n$MEK6=]K%n!|5uJ*&@wWjwxa_KdI>jyMW60DesVx' );
define( 'NONCE_SALT',       'MlD}NHCqM}2mILD]f;+bU,o/6SlO8zuQ$m-0bxxKL0>WsFeda(83y]Fz3q<S9FV@' );

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
