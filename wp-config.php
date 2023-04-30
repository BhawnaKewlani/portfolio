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
define( 'DB_NAME', 'BK' );

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
define( 'AUTH_KEY',         'PeMW4t0uBT)wLyL-g&8b!lQdZ43DwCXBZ!-alHVZ{$.xU`q[upM2&WHpRm2v^&<g' );
define( 'SECURE_AUTH_KEY',  'p7wvCfvm<n9_EUR0}?._I#t4=^n/>;xcuq7uU0RR{R/Xj[`h$/O9B8I$QJW[yqn`' );
define( 'LOGGED_IN_KEY',    '%`VrXwB{XwU]<Qi]pNi$9d>D?MFD?*Tp-2{z/1xbLZ?3AdNmQP$J&L,6F^@`q8aS' );
define( 'NONCE_KEY',        ',_f.>H2G&.@<:wW~Td>~+PajWpcv}]NI`v2Imwnu*2wW(1N4vFmj`@Uz{~:{{m^4' );
define( 'AUTH_SALT',        'Zle)&=Ow(W-Xz5PG49,&g^d=AlZnE@-Th@I:dn{Oq[j|C~J+5sB]5!;$SYjNd_D}' );
define( 'SECURE_AUTH_SALT', 'IWJ`nX{rT}[pHSa&4QwnLCJf^rF9(xs$o>?fS,RR@ia}Ve<}L&,C9P*4s=)+_63*' );
define( 'LOGGED_IN_SALT',   '%R6}g+7AYwqZ@8#11mBoD>!VHa+AL!<Q|d#i>n;u$H9NZ3*9O7pn9s1=,cVE?y`r' );
define( 'NONCE_SALT',       '*GePn3G9*o3(+6q;HQi`.J$JgL]3docPM y*<f((]5B *T,qMGs=b*t-cqm^+4f`' );

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
