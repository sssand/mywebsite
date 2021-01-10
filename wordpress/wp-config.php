<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aRVcb6m4_K!_ns)j5yNie0q/RZ=XJ|cvTVg@7AYhrHe/<.1E>nss~nX//tfC6/9+' );
define( 'SECURE_AUTH_KEY',  'a70`bx*6Z!yyK}wRR71mnr0eV~b0tY]bkw*7Gd~}sP<~eUpApMnNuL7lQEpN.osX' );
define( 'LOGGED_IN_KEY',    '={Au53cr>}!NTad3U&|Ngv{(sNJSg+KX2.K%:Fq+z+.f94Y6LI<px,N|<e.Q%,K6' );
define( 'NONCE_KEY',        'UaP8=7nfPAB}?+&aY|m2M`>Nb~wkbb=r}U1U63le)Y:g9fe~/.;qwfKmF*7mMK2F' );
define( 'AUTH_SALT',        'VYU]015&#-M^80g%5E$P_e=|viV.w4$j?|9*+*J,~irg9-v,_wP:XC~Cl/RCZP(5' );
define( 'SECURE_AUTH_SALT', 'WFT~z|n{-x2S;j+n0 z$E:vdet$C}czCFlYDHTh&V%`*%u!R_v4W5TL2>cACo*J;' );
define( 'LOGGED_IN_SALT',   'EVE!AXzUzEJ/}r23NM(M);7-@K3%~.sIq8+FJ-4)lV3hOKL|Y.y:?0^eL)b;alpw' );
define( 'NONCE_SALT',       'G5){vM2C4aP#KMr#y-ou7l=(|Xc1zJM8ybb c ]1Ne).Gh4d!`RB^$/98}=pr<zH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
