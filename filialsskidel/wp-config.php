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
define( 'DB_NAME', 'bdfilialsskidel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         '2%ECL)]7)5pe!_cRqLsFt-Tc(E7d{2we]9c]/+sp+V(.a0 pY&tI0 B!Q#I/|IYl' );
define( 'SECURE_AUTH_KEY',  'yq*EQi)&2WK1]i)bH;)gh PnkOEG#f_cZw4FEwe|QrT85dXaET!5<D7gasRn7Ka<' );
define( 'LOGGED_IN_KEY',    'n=-+e%d[DCKgLbV$_Yr[7J6e~#y^LIa9_#lU~2X 5KeG^N3-tbX$ZAbpaK?Ta,X<' );
define( 'NONCE_KEY',        ',|%z}oy-rTqj}QWwrAN45AbqqRRCbVKK2!,z-JvMd{@52PhxF+0BWBl!-a`8u{X-' );
define( 'AUTH_SALT',        'fxsrZdUT,ax+d|yb}%P#03ey]PBcA/pCdGRghqhsj@#L<-$I3B=t9?f6`wJ%Xp/{' );
define( 'SECURE_AUTH_SALT', 'A D44Q8(8y2Q[2eg$h hINIK^{:5+bk[7va6KZSs]n!{kn?Mx~hO|RjWpN.a-}##' );
define( 'LOGGED_IN_SALT',   't&;pK+>N$(V 1zTO>U] {Q_aQlh.=fGf.#Zz+w4lAb0Rvqf;ELH}{1@oXch&2`Ol' );
define( 'NONCE_SALT',       'fs7wDpibnB`#e|9er_pVp<)S~)*tq0Dl{&2sBDo*tLr^c_rUBsl OBYG/)fjD<; ' );

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
