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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'D1%Y<u!r5s8XTZXG>m[p!hfoPWK7v De6puMy#QL*2g/7=)C?jZ/ [XxQ9mRpBvb' );
define( 'SECURE_AUTH_KEY',  '-Y^2.1H1%EMRe}9/3e=*vP0N;e/6,N1{p3=kUoeoN(x[*I*iuS*zA8~&d6)?JAtG' );
define( 'LOGGED_IN_KEY',    'W3~e6N(uYVgAb9NBA*;mcUS<f4P.ZhWg`ufl>: --PR>UU3}7>m^%TA?LS#}YNR0' );
define( 'NONCE_KEY',        'I`<bAePK/6ISuj(3[JU=ZtRv&j-`mEi`&x=JfDtG`gneY( 2b7LRFI_[{D!`)JGc' );
define( 'AUTH_SALT',        'xvA]>uSm,!hoA4!Gif0VZq4g=>|+HBb;[?g+Z9wy|BRZkC@*|7[fqf2#SKF}$PP)' );
define( 'SECURE_AUTH_SALT', 'ohw1 iyXs{^X^ONz/})qUmC*{R F==N!Wiz%L&R%#iFmUU>W$.5ZLyKjAa^t8E2c' );
define( 'LOGGED_IN_SALT',   'qfEqt$tE}P?H%d!C%<+DE9?UrBPyVg|8.U~Ll>0Ri)Q6rU0g}(EcW5T)]Qp;@{ov' );
define( 'NONCE_SALT',       '4z{oBeu6mkf/{e&91Z7Bwn9C-%LP[BmC>?@,DPvp*`}7^9E>3^WNM0N!%A27Q6&{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
