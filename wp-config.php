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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'pEIztkW$](_CqA_J?%boa5V5!9SA]e_WsulU9YDfh%}~Y_s.H-,X,:*?&f}(KI[.' );
define( 'SECURE_AUTH_KEY',   '{``=5,tCI!EK=+5$-c8G#J`UMDT!pJXJ/X9m<<v<m`HwJ(wB9j0Q:Z#fEW^R[]kx' );
define( 'LOGGED_IN_KEY',     'T~4~F.ES#z1fZd3tg;x1tSbI8p_) R2<;lEZt*Q|1vm9/n3R5o@S1:[3{u%0*LoR' );
define( 'NONCE_KEY',         ')?iuJf.yB |(g[7`vPk789XBptfRTmQq *jZ!w.<wsxag-M]P{A VmBI,{9ohink' );
define( 'AUTH_SALT',         'f~=jA.einczO2;6@s[vKM3k9J)E[qUN pl7eD&,+|hA2:0E|}%%_NwKzD|s$/nvZ' );
define( 'SECURE_AUTH_SALT',  'VeL@4)4mYW%j5N&M{qrAU.}1Mp8A@_@Qa.~bw:3a8K5R8A=?JS]~As;A.6V7>IrK' );
define( 'LOGGED_IN_SALT',    's}2RCxX|3J!drr?=vjV-$T~=O;/^]/E^<4B)&u8FS}z?`g,&(EP*2U[K1n8#7!g=' );
define( 'NONCE_SALT',        'Q`W9$hNvB2y$f^{M:HYL]^c0f*Wmikan~y]}5 ktf,n_&2sA(7HacC(yw3@Mfl@<' );
define( 'WP_CACHE_KEY_SALT', '1T]$fp49{.*W-R3AbS%5qx4,D4kL8|uL6eD=0uNDX|Q~qvLU3NR0Jm|T4Ir$E3aB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
