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
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         '? 92E;RjIVC_>~?i[y3fu%2fUe&FrI()!9D-p&9BU11?!ur[$yvED)NVZ [8F%rX' );
define( 'SECURE_AUTH_KEY',  'GpR[^V^}8JBVKx@k4.piIcdhUOyh4, ~BG@,@_2?xC$`|J]s,=:8039q1q=n5CS]' );
define( 'LOGGED_IN_KEY',    'tJ<.)d!rS?_PJwMh_.([0ul{!~~&aTpo~Gg;;}!i=j@QL}g8Xh$Erts3t=l0L{d[' );
define( 'NONCE_KEY',        '8Euy(~5TSe=~b>V|KwbS^QP|#Z]b?r1Q[;=fH~fEGktMvk-a+2~F8[1DSyfUe)*J' );
define( 'AUTH_SALT',        '[_63mw66EySE>ml~&9Paw{9T75;62sJ~k>:w{0PZ/F2ePQ#Y$2B{x!GyR||JO}yP' );
define( 'SECURE_AUTH_SALT', 't6GW}&opWzQK)$8nrg{zJ%(Q.{fk~yLoZ%L//D8el^42q8PwEVVE$t)-1/P[nMaJ' );
define( 'LOGGED_IN_SALT',   't#:N/%x)7%MD2(JDUZiUFodQHBPFhrcvQhQ@FX]<}L1H}.~}oezzplt^r9B(sGA)' );
define( 'NONCE_SALT',       'w>&gdEgge{rM40PP;gY`wFPPY=U;,gh>.2^/)|ZzOC9`tV+ud(kuoDt%L P:$W9m' );

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
