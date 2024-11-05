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
define( 'DB_NAME', 'eposdomaci' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(NvGLft9{FTg#)fML:[ZE1(0TuTbj=3uGiZ@zn i_:LRzHeFEuj yVT(BZ9%z*<X' );
define( 'SECURE_AUTH_KEY',  '$S.;Es&JGmoPJ-$qZJU1e&fnR<j8ev ` HT:Y:>h%rDfy6G*+# 4jGq#FQ0 Qb.Q' );
define( 'LOGGED_IN_KEY',    'i8c@y@K#wNN-<@J=Ie@#{@ 7E@_U;E]<D73$_SWIe]^0B61yT;uo~6VecfBxFQdo' );
define( 'NONCE_KEY',        'qo^+E>Euyz2 WhOYh8a2#kb]jHE74Z5cO^WXP7hPu}qdVo[D]t(ybk`q9G9#+iiS' );
define( 'AUTH_SALT',        'nli[njP]H;PeS9;N[5)l*WD4OB0Oj<}P7?=%[EZ1QvTZQ>Lj`hsRQv^jI!Z9d*8s' );
define( 'SECURE_AUTH_SALT', 'D=5d7yqGe%f+xY{{#)@V-re4do:TTtqabdg5oXgEDB18mwEsC//hPH))w`kR;<UR' );
define( 'LOGGED_IN_SALT',   'X2@@midU8AmhdG2csNf8Z:QTM%XJ|B!@&kEmGY#CO>1E1ZzGXQn~YwJ?Sb0gGGa?' );
define( 'NONCE_SALT',       's%jD0{1;b%gTXYkZT;3^k3jKY!_XND#Qqu7(VE)>b;@gw/I/-yu9rAE>xHo+E;@E' );

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
