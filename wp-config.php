<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'innovate' );

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
define( 'AUTH_KEY',         '[wZ6N!F=yDGYBtq&?MH5.7tzfbH)&qucc6<uf{o)q-],gX%HXdT+>fz;Q{ef,~b~' );
define( 'SECURE_AUTH_KEY',  '}3k9/tY^P`WQ2MfS`~(RR`^Uf,-NVbwvv,u%$XCOP~n!~E{XOK`rLL-jL$iT)>NQ' );
define( 'LOGGED_IN_KEY',    'Kn7@POd_0n;&lE^@u#Py6:a>h`QnPzC<>ypEPt;DyvG!UI{C.u~Wr<.MO$0*Rd[/' );
define( 'NONCE_KEY',        'Xg%l,]_ITW5vrKq32Qg:_v8rJ1__zj|v!ZP2>Px09u4%A78GUkgN8D-E3D{Zg2:F' );
define( 'AUTH_SALT',        'm/cFg3jhX{G~O]C.:;@4H*Qe^uJ5@2  LVD8I5g.p%y6CFS0jj8PZ}5(_.rYPm}j' );
define( 'SECURE_AUTH_SALT', 'Ur xgnAD(3`jttyZ|h5Mj=vK;U6m(+FQEX?WCG;ab&d*]qdfdt#ciXnyzLu%:V5!' );
define( 'LOGGED_IN_SALT',   'k{m?mTMShI[E).Kh=T9bN/+5AU7t1 WpmgK$gq2V-Dx5I!q-)6p@#c5+LLrAiO&X' );
define( 'NONCE_SALT',       'wuH4+Z~;UvIkb3+b#cQFt.8QQ5o(qYvVH4<N:5FK)hC=,zC|k[?e+_0}=/zXwR$i' );

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
