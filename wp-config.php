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
define( 'DB_NAME', 'mitienda' );

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
define( 'AUTH_KEY',         'gv`2+@YrqPCUH4Y8}BFJe$*lDUDQBT?z@^<d.Lukyy#:~G_89SLMyCT r=Yv.kR ' );
define( 'SECURE_AUTH_KEY',  'F/+p]iLFtn/A[jmZlh&g-*KUcb]O?q20zVCN)SY:sM(P4nM2L@kcTQZ|V[OxP/_M' );
define( 'LOGGED_IN_KEY',    'sM}WDmh]gBESU+Wc/km+YYjCgjZP2(mL,=r>W{T>>{ffDylpJqn_FMy:M2iRQbCz' );
define( 'NONCE_KEY',        '?W<Hr%,[EbUJH:alW,Yar4,h;|g?xV)|7iq7t4S,+L7dQ{O1sM# R$$O$DcgL^5?' );
define( 'AUTH_SALT',        'vg!QsML0^ps_818nVT,)QmqbFDMPrbel(r([ =L[jbDb#ce$X$[!P_1}u+n9Eo+#' );
define( 'SECURE_AUTH_SALT', ']{YN(#H83tx6>M5gU?|%ddry.03t1W{@]>j|.ib_o0?ovhy%OXRWC^6dv8|oy*]6' );
define( 'LOGGED_IN_SALT',   ';)O[V9t{a};xl)r9}E:3 V;4E+Iefe O)~8o9k+M>jbVFpKmUj5,2HzX#9GDMO:b' );
define( 'NONCE_SALT',       '`tfb{;*7_p,=MZOG 3-5mS+?ITc37%=-F#+odf(<T)U(D/!^7L ]{*?]gkhRCl)C' );

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
