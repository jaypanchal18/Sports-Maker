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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'j+QmPcgN4+db*!owcyP@o[rNM~T,Kl&V{C{5a}B9Dl]}W:>`W-xhb-Il_3G1rN,@' );
define( 'SECURE_AUTH_KEY',  ':dC=%dDI#m[LW=FV]gM/pQP>9d1}fh3y;01@?eW9i7_FJomw)`JBjq2OiE=:<3h`' );
define( 'LOGGED_IN_KEY',    'M%r5;5*y(5F>`|%Dn_?h=|uKK{?cxUc)T7Oj9m:#t0s,Y53;d., }w}x89ioZGRn' );
define( 'NONCE_KEY',        '5V*bePfB[EKAx;K(udm*w4^ERz@wnvy/)Ly.KS;.n9R2.7MZF&~bzd(gFw?8vr~K' );
define( 'AUTH_SALT',        'of*0N?a%B`73m`ZEXAo%=Kr311lqi~,5e2/?;ljk.y|;|x?f!zTLX58V2}$1+[q~' );
define( 'SECURE_AUTH_SALT', '0*Bua:JobpczMRV.^; H76mHH9k3sCV~:c]F`K(k)CZ+oVfBPLcRUs`quJ$+n0mn' );
define( 'LOGGED_IN_SALT',   'J!pNYN(F(>L>gD_(UEY* ez32uk6&ndRJi3W(X,^$E`p_RbL<iyJo{o8pEn{S/Ba' );
define( 'NONCE_SALT',       'l_g1*t#O6|Bm>OHy}7Ctrrx&2# N^FUJ/iJ}J1]pUA}%rurIwuC,:{T>ZAGYbm;I' );

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
