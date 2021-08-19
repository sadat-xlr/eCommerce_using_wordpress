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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'AzVVnonK`+[zOUsm).KB.97Dr-^oY;qPw//Q,=y-/9|w<3<u6;vjI$rKMx/OV}<V' );
define( 'SECURE_AUTH_KEY',  '8y$s7P-Vj3Dq2)0Wk5XvhXT: s+PE[dJ5OHszc#`wTp4~GmezYRnY<2zmRguGZ?0' );
define( 'LOGGED_IN_KEY',    'h)#r6{=-~W,ZHBQ<p2_[ U`)#Uf-lp[|g.j]o_hY$#us-yfD}Kew.#^ve!r$|J/1' );
define( 'NONCE_KEY',        'iuNK53C[=0^Shj:2P*u;]+FCwTq$Jt(#J}}VnyBJj$!%Eu-^DQ}c5FIP cClC&h,' );
define( 'AUTH_SALT',        'KOR#K+In:1,pBd<0uqkP53V$f!G}0i_b@bO&J7mT*ay1/()&[5sDNHQ=Pzdg%R 3' );
define( 'SECURE_AUTH_SALT', 'qftr>/{`6&t8DlMk0C`<G2-{gbJ;ZIc9.EceWN]+w ,Ay}_ 2;It&yN`+*yKlzd_' );
define( 'LOGGED_IN_SALT',   ' _TDodc*x-IA,s^cK2(& 5]ru O8Gx~Vd9{~5NWKVR+|2x`PRM+r&N}^mcunq},s' );
define( 'NONCE_SALT',       'r;R@Z?aH;6$OPXMi~z|qk1GvK%kXy=Ob}NJ(i(Oaz~9-Rr{DqQo^@[G-M<i&Z/{e' );

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
