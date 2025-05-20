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
define( 'AUTH_KEY',          '`/qEr%{O>az/YS^VYBPm`X&ABj|#O[[65_/#`*w~Fp2mW[>PGd5Kw sJ9~$%bxQj' );
define( 'SECURE_AUTH_KEY',   'R59E*c4$?~2>,u,I:A.M~1.43GhL[!2dX9< Y{rcAk^/v;VLhy bULM=|K>=##Xo' );
define( 'LOGGED_IN_KEY',     '!iT$UDU&[GIuUT,RUz0t 9KM5Z a]~TnhB.l+OPwFr+vd1k$xP7gdO?AzAR>S+GF' );
define( 'NONCE_KEY',         'YQCTvVWH;aQN:(L.Xks2,M_s$%m~A~2m7R9rk5`@fCd6C%6I+j%6-@eKSEjteIz8' );
define( 'AUTH_SALT',         '9]#V$dNTCRwbo%fa8q-j/l7E[tc_W1t*]oeH_#kTo]Bgewe$..eXX,PwaYkXsz;@' );
define( 'SECURE_AUTH_SALT',  'pu=Aa7q>NNGX TL.UX-qdIV*ra:%&w|#:hdp)35z#h)Oy^<kd*yLIJ%5yO}tJ~8p' );
define( 'LOGGED_IN_SALT',    '5xbQ<d*hpy&}^/)^(q)3{?3[6+A@GWLs~]p^t&%v1v#st_Lx3JMFoWr~vk,lB=_c' );
define( 'NONCE_SALT',        'sSGZ(?S7Nf&rVS*m*-N)f3@S<q@fz*1s$#po)0#.gssH-&[+`Kh<vOS&uHb}a70D' );
define( 'WP_CACHE_KEY_SALT', '~J/ADL3LDc&9#?.9%yG@(sodxA/GG/MNSSTatw9rb FQjlZ%?!V,_qQ{;RCAZ*e2' );


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
