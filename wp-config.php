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
define( 'AUTH_KEY',          'HSB[@,_FuOGWRYGX:bzNv3c}(b*/:Z#D4XnYOf~b%3;2dBh/KGt]DjUo/[/sz2Yn' );
define( 'SECURE_AUTH_KEY',   'DjW;;u>kX[K04W2m!qm7QM+NXMkUV!F~_!+V3qrC-l`M!43HdEh&xs-A9rtDMN>m' );
define( 'LOGGED_IN_KEY',     'lDH-23ou{+CD1^2g%<Tpy /HES6+&p48feN?O.!I5hgnj5~waIZ*VsuMlhMFU/`k' );
define( 'NONCE_KEY',         'TXp}L2d@:`4g5K{(4oO`0`scO2z0__$VF FB.~=Yi&=$%WeR<e.GfXwssKtH%haL' );
define( 'AUTH_SALT',         'a=KJv3L?T9_)yk tbL+Hk>d;N2YpY,=&@tRB]9dq7/%-;w-v|qg 9YE*<^-N$Z/?' );
define( 'SECURE_AUTH_SALT',  'f9iX+]!8zf<YK}h1b~JjFs;TmXmVTSVV8zb27U1=Ukzs>#IDM5,kv3ZMi(ni+J/{' );
define( 'LOGGED_IN_SALT',    ')b8IKx(Ff.^j jfMa:Gt.)cNX748Pc}VyS7x3qisjk1G3jx*,+KVj}~Ud1J<afB6' );
define( 'NONCE_SALT',        '9=Y9^8~FdN5mD%!W2oUABCbcS|!_i0d&IrJK8S5?o8C3htc-0:gL{uBL0.DMYt`o' );
define( 'WP_CACHE_KEY_SALT', 'r0JGR`g/OFR)AUi]7o7dEgqHRnF(488$dT`,.2[*cl&a/4{WjI3bock-kCbxFQ?W' );


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
