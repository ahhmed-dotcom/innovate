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
define( 'AUTH_KEY',         ';Dx#(OxQKgi~xX1x=-xHdiSdE[vw$xXn}^B0ALtL_Q`l/WFQ3fOAriZYOTrfB<^ ' );
define( 'SECURE_AUTH_KEY',  'zPM]7Lnm1ju[UjC)m(U5>_dN|cV2XeN`LO)+}.?wv_U;8%oo_LYAW4,pK~P0q#!=' );
define( 'LOGGED_IN_KEY',    'uC#BZu^l`Bs1$_!d,haelU!jdI`mOP3k_8B[]gRpm%@fT5dkB5KJM,$cge1b%P#~' );
define( 'NONCE_KEY',        '(W88Ep4bS{I! hvf/>%jM)A6[Mp+5-Y<E{|ck#3UH^fNdnRY!SBy8q2EA_yqL.[-' );
define( 'AUTH_SALT',        '(s=,STirwefqEj#7A,uigzSo#Y; 4fMdD.Ewzn5eF{N,b0Uj1U~0HicS&V[[!;G^' );
define( 'SECURE_AUTH_SALT', 'G6=iY[n9vC+oqoeh&?-46]D0T?eK2;KlAV2aYcl5dlf>2Fxq.AZ!Wsi!O7-N}W;v' );
define( 'LOGGED_IN_SALT',   ':?DO0iEx_Napw1 pxi63V^OSGDwqd,ji+A7C3Z7s47rd+$.r8*>&D`et>;egQ=VZ' );
define( 'NONCE_SALT',       '`&GAE1L4NdjKNa%mqrfN/=;anBk7B!bF+_3]8-&{4o&S=xQ7W:[QxGkkx.RO![9t' );

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
