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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wisiplor_lgmi' );

/** MySQL database username */
define( 'DB_USER', 'wisiplor_lgmi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LGMI@12345' );

/** MySQL hostname */
define( 'DB_HOST', '204.93.216.11' );

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
define( 'AUTH_KEY',         'cb(o=PgIqLd2=K6KQmN]+?!E9] B~t8^`)U%IY]f3JT-|IN;uB&BzjwWzJzPF=>p' );
define( 'SECURE_AUTH_KEY',  'aBTn}*W+k{^SI.d yz[/Gcs0`=X[,9qvu^7exd(&(XS>FY7|Rp=pehtLQ.&d9Vv5' );
define( 'LOGGED_IN_KEY',    '19|dae4)ux|U1c;qE&j5C2SfErY~1p#s >,:RqnZ8@0|q_epUNZIgR_[I:CsJDeq' );
define( 'NONCE_KEY',        ']BdwjiZSB)t_#8tkZ8Y7R|bFoNc]Z)j(KmP9lVeQGNX,lWuK-4DK#TK;BZ$Cn^3d' );
define( 'AUTH_SALT',        '3feOhZqwOs1@YtEoweJM%B;K4jeB7;f~2~>4FuP,e?:tW$U6Xr`X`fv-[RaruZj#' );
define( 'SECURE_AUTH_SALT', 'Pkp_m0-.2EAXEg?m{M*&9GC&A:wwmx3oeMmy^XyX6,4aO.bdRVR++2 A.t[RJ6#l' );
define( 'LOGGED_IN_SALT',   'dT1)r_{=I7E0<WYj3NyAM/|FATmS$O%QoRMjlot29H[_%^cfU>biQ<_m5CJ9^x]2' );
define( 'NONCE_SALT',       '94>}|>-+#UD/.+Q<1Eb@uWY#w01q`(&g2`EtSOzJS,7+{_7NoPu#792XQ-Yc~7_W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
