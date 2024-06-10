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
define( 'AUTH_KEY',          'x>mnkc7{b821v`;[EmC_b>XfU;vc-HHd 18T?N b<iK}~5gY>h`DX@8&!wm|cKzn' );
define( 'SECURE_AUTH_KEY',   'nX/,k{o6NtP!YRBa&:qXeBgzhbOt%R5{m=z%B/:!X=>lWyWER6$S`l.VAoVqe@[g' );
define( 'LOGGED_IN_KEY',     '>nUk%>A7BONSU*CcsTshmFE}J7u[oJe<&E+7mIuG.xoJ&33z4xM)}j5MQ^BeTO3J' );
define( 'NONCE_KEY',         'KApz;:(9/A6wzPdd|^zKs,/-R!S{f,>>g:,UglEL,3)L(J<<0)r%ED1)?G.jFm+e' );
define( 'AUTH_SALT',         '^RUu<TM_er!_dj{,X>E^u&PDGAs;#XDVfo; glCE.@dw2tc313QBN!JHYNo921gH' );
define( 'SECURE_AUTH_SALT',  '&9QiW|JP1Eu ,F-0.ZGG;2Vd,ZiwDcc;BU0U|Y&e&kM;2$Bhu87^$[2!MBBe}k|4' );
define( 'LOGGED_IN_SALT',    'xuz&x<H!Q-H3;=z?}05A}OH|A<U&SXq#4I?4>(8eH})aEVj&4E-Jn<tPq-%@5a5X' );
define( 'NONCE_SALT',        '{_AR+&lfx-X/TC[]WKT<D.+#Sx__-!J!i/bn~rpT)N6`JRA)y{~fpdZ$3=AKVJ4n' );
define( 'WP_CACHE_KEY_SALT', 'L6Vwv m<nC0vQ]`1:[&O%A4@w)q~w3?<cq^^0woq_Q*[Yu$[)};^O13jFgtb||2u' );


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
