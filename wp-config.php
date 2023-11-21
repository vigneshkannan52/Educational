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
define( 'DB_NAME', 'educational_db' );

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
define( 'AUTH_KEY',         ';V%}(Dw^)JY@*`%ZX?WQ0]PEI[H1Tvs]eNUhQSwn)Cx9@z_%::B:31Ns+<suE[KG' );
define( 'SECURE_AUTH_KEY',  'X1[@ &qtARYFK.;nNCz@*XR:M/N[{zjx4It!&:V8.D[>BpZYCgFHFRzP{PrLHTA#' );
define( 'LOGGED_IN_KEY',    '2(Y5_1h7EfaNa+^`1U`Y#S^P|O-fWf30b.$zAD8QHw4nXIzzXg %zWV#oZUBt?O&' );
define( 'NONCE_KEY',        'X!b[-)L|LY@yhGcS-$t70KvNc+2-DMJ0+pF6&Dvm|kyU}=AFI2O,r<hvjLrm&b}P' );
define( 'AUTH_SALT',        'd}i&`MPhd.#~-2t#T(bgByzVI$hx:/lU*;BqSMZ~5$ ^g#=on e7a,{1~ME,s=KE' );
define( 'SECURE_AUTH_SALT', '~BAY~zm@6*Q=.-s`<]^}$urcBRydTs=?o0j3l)>2|C;-wJF_WKzFI-td8c;2MV4d' );
define( 'LOGGED_IN_SALT',   'oFzU&Sh_h:1f3z%!od/*_06jcw+l#pd)d39dxt3,%qN7`aYc<|MXe]ywm*oL7B3V' );
define( 'NONCE_SALT',       'K>0rHo[QQ(,&gb%u8C0{3$NA2t9_<ab6gMsT?aM-6]dC.Cw&srPCwRowG7c6htq(' );

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
