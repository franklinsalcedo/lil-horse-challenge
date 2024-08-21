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
define( 'DB_NAME', 'lh_fs_challenge' );

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
define('AUTH_KEY',         '^OZS;6|//]l_~h2c[t1d-FS>o0Nn.zGj|8e 31XV|:Ni~QnsC+g&58+_LNjwi.C&');
define('SECURE_AUTH_KEY',  '0U9q#NGRfTkuE$%qxXoZW]{#`vMwZt8Xgd?q+I{g~=LFe6Vte)&EM.b9~0Ky+v?R');
define('LOGGED_IN_KEY',    'xC8piKczG@Z9gn*%]4_Q3f-&MWj@bz_sDA:9t-U4 v?8p#KkoyrGz]GsY6q}lS.K');
define('NONCE_KEY',        'PS1}n9pOXm`PvLM)L0do+Wz8AYK]2 zJ=:ymHJ<,g~8eCW.JC5K|lACg!tI^c}F-');
define('AUTH_SALT',        'j1OvBT5Ta>C2u?QjfD;<G[7tS:0RPVGOp?K?Ce<9ej=V<-{e|IJVUe{}=pgCh|q_');
define('SECURE_AUTH_SALT', 'E%JMLTza/#PlvI?!F!-!3Q|+2p7QP;ia&S$@79l|rookGpwa}7~!(w>2WHX>e2r9');
define('LOGGED_IN_SALT',   '|84m]WG(|6;Qr=xudsDf3la-A+D8Oo@l_OKkIb)dWYGtjEZ<>L&Qqa{[IWhs-4KO');
define('NONCE_SALT',       'R- }?PM 4SA7Y+iZ>;bYf@|ms:EW51FB )^:ax;uJOg]p4),O*z|*wPcW?axg$s!');

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
