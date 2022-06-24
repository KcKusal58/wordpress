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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '8>1@{&e]uEbkh/:B+k8k+!)Bu`nPh8(_}(wF4cVFJX nc[+^vz>>Uu,In*LvHOH/' );
define( 'SECURE_AUTH_KEY',  '2i_9!wcql{t-2LHzQpcmQJJe@`R2i[HD&`@Ax|uboi8{?5IMJ([Wat [n6?r)t#K' );
define( 'LOGGED_IN_KEY',    'txND$,y5m0D#(F]pHJ4[Ukj[[65,9^kO`-{lO*|`IW(Yq-3ZF`6*h0yvQmYpD^0|' );
define( 'NONCE_KEY',        'wdt||NL>&=wK5.;d-rF:n:%@@S]f1l[_)IDVXZ7eWH;]EQvSJ{.@-_U*?(H1(c7n' );
define( 'AUTH_SALT',        't{#l|o^5X2=zdDYg!5v_dY^spnatV6lNw#8kdI^*kS/S?r:VT.~`pR85g:*2(Vs@' );
define( 'SECURE_AUTH_SALT', 'zUVe)[T]7ofe7E+Uh)v+>Q,V5xy%^j7i& lud@s}mH*h0#(hqJF*(>ULR(3HtV3&' );
define( 'LOGGED_IN_SALT',   'm<55k#d,>7pnUUQ(k$y>HGfQ/Q@(K`@g]8vJ_!JQPj1KADEs`rKPH$bm+pR1*oW&' );
define( 'NONCE_SALT',       'xh]%<=](j3U%Wg93fX:fs<6?Rjk/t WE.yZnp}wp:`=z*4S=DI,=<kSwo7AG~J7(' );

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
