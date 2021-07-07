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
define( 'DB_NAME', 'corporate' );

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
define( 'AUTH_KEY',         'Mr,o8P.`-KFk3[582I#b 2}:VUjPbYGto4e@YD:Ekt]3q=0DTB]k=K-*tm:N x(l' );
define( 'SECURE_AUTH_KEY',  '1~<&[0-h7uW3<m3``-C~dvE8^(GdWfrf8h-u2/E_On4dbYWXuWU)f4G.SzYmeZIF' );
define( 'LOGGED_IN_KEY',    'X!Es%R8+STx`ukFP0vWLJS|QRgZYP+&PM1P#?k[kE+Gd1Dz6@K2TcQ%h/Vm(Jo#f' );
define( 'NONCE_KEY',        'CcH]HG%.)P:]VVQ8/tCP _R]_Flxg4dJoOr,V(,R=^2b}y9D^5:2nyFK$ewkKNA/' );
define( 'AUTH_SALT',        '<#uuD-n,~oyEB^~IJnCdoohuxzEOD9a^]C5EI<YJRc@A{M=Mmu$&h:MV@3*.t 5T' );
define( 'SECURE_AUTH_SALT', 'o!^]4tbNBJ8i>h-15LY=GU|BH^rMGryR/I%nko.,B;3O*m:y3z73wT)*]x]-HQMW' );
define( 'LOGGED_IN_SALT',   'tzof3!=09!V3hzx`z]_ic^nN3lF?|@<Be!G#+RRXc?P#V@P/kEo#X[T*vV*u<m!f' );
define( 'NONCE_SALT',       'x{MgTf`L)sh&(/juy,D[#C0Y!n5JWgP{ByN&Q&/8n$pE6O qWK6#r.0:?6Rp1[(#' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
