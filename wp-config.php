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
define( 'DB_NAME', 'customer' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '6&*bGua?> ]7ePbInptOK}E18dO%,z=OJ`j&i%_!sQ;q%)id^ (?G`@tj`+Fs))x' );
define( 'SECURE_AUTH_KEY',  'W- Gsi$^GZ)HD>)+(s4rc&ki916GCSyg983Xe5%hJB}WIOe~~>|%+rzW_G/q %i~' );
define( 'LOGGED_IN_KEY',    'VgqklHtvOM7L]6f|#HBWn{x1^><.}qd>J8|ovz3t-n9}<=QP/z^}uC<=Y.|*IY$>' );
define( 'NONCE_KEY',        '?8Sp8%LcqXA@=#I*?$w3rUi&LoqAb36}c;+?^9BP=IIalCHwdEgaoUm`RujxeJ}i' );
define( 'AUTH_SALT',        '!OXgn=A}C{^2^$f+}r!0>{pY4[zRY`x@^/EQ2BaM<gD>_NtyvWV/K[OZX6M9nFPW' );
define( 'SECURE_AUTH_SALT', '>t64XU,2slXP,:I?-<Q[W]/-+dEW]Dh*7+aeRRe9JR]u6n6]^)S1l2?L~T#?&*.R' );
define( 'LOGGED_IN_SALT',   'Ep2pu8!/C(nm*d,&lpDoS0ahV>?0#B[mvsHwn7]|rTr?ns[|M6#8M2yjgepUB_D.' );
define( 'NONCE_SALT',       '_%s;c)h/[Ytcs_Xo.QI_ZRB9&71@Mzs ;MMKO>/+*+2@1Y6-pC)b%$;rT,gyw%O5' );

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
