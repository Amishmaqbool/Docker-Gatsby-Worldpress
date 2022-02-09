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
define( 'DB_NAME', 'my_database' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Czs`[J#-wn*H29IsdsFVU^XwS4%NRvdIwi17^*kf]^a7(^?qy=`t)AOm@ih!#}u8' );
define( 'SECURE_AUTH_KEY',  '3a[:9L+qoEz;Xif6v|R~kSAsS]@TkL JO[~W$r6[TB)a+bN|jJ@]uI0{J@~S.:rm' );
define( 'LOGGED_IN_KEY',    'uO/epe|Ve~NdFCoFv}5oZ*,8SC!%&cEf0cg.f+ {BvHa&7jlnDT]R$2Q/W5N;$lw' );
define( 'NONCE_KEY',        'GGQxsbM<0a*cY@A]lq@;nb7i]GlDF#mC=kR]t}}ygj]-OWXHdYU|k;;<kGbkq;o>' );
define( 'AUTH_SALT',        'GoCY4VxLb7J x4kO~A9*9c3,>~(-EnA@%A!RDJ]@0,Uz3D+`&UK*EW3TR?ZG}L4x' );
define( 'SECURE_AUTH_SALT', 'j:l(c1A!9,g8]ih{U.e$W0aEb${=q5{#fnKIn!55@$Et|rLr.HF4<MM5TJl~V*vR' );
define( 'LOGGED_IN_SALT',   '7XL])<]L*K, p`T_XhbE;Z/>>6?MBD+(N(zpHZtJV+4Tq1QNRI,29tEs)hdu)#00' );
define( 'NONCE_SALT',       'q_TcX!gJJCwe^cD*#ZcaSOfp&kXah/Y!=<lbm8fM hwu>VR2m|h.j@:7YQU9CIT0' );

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
