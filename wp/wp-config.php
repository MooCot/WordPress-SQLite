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

define('DB_ENGINE', 'sqlite');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',          '#nj+1/|:k 1qPCmo}LTfm4Up&-qy@;Z 4rYV%L~-6H%-B~Q+4}_*itmw2W,y</B4' );
define( 'SECURE_AUTH_KEY',   '6:Xae7)W,kEPo`^Njbr)/WM*blb3)-mA%]x0b6, ;:Hx6.o7vhsBn}uC1=qZ}fEo' );
define( 'LOGGED_IN_KEY',     '5b+PAkhv)<X_r @^KaF-ENBY7%4B<ShPk1<[kng0S%Fa$+L#.7>:+WP4(<#@m+JO' );
define( 'NONCE_KEY',         '~TpHt)k@}2ElD~memWa:6omB*op{<X6{2s4DKmdg02)K-wVUsDP;Pvspkp*?$<UF' );
define( 'AUTH_SALT',         'P(PREY$$$uMzFH*0[X&;E-vUt_Fvl9z>q=2/b;Nuw=oq,htA.;nFVu&V_s]c4C1;' );
define( 'SECURE_AUTH_SALT',  'iK}hPLFj5|VTHb u?,]9mtx<Nt3X[GL!gi8lkSaxF#Av2jqwjQPCp$e/:p >-T~0' );
define( 'LOGGED_IN_SALT',    'Rhz[/S~Ad$AD60P<} nwb1M,(:z!kQ=0?Nw+kov7It85#A=$gxdRgl)y4~MZw:qb' );
define( 'NONCE_SALT',        'ioy9!_:jI@ZO$]^6e,R5e3Dvv<#BXl3|PM.5K#Vp* -* /.UYH0tm4]qe#mEu/sB' );
define( 'WP_CACHE_KEY_SALT', '2XkX[EV80:az}d^Z{.):wm?> !Er)h@3 f{Q4f6,M*`b],1]`4;Oc;s.RW#SyMLb' );


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

$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', getenv('WP_HOME') ?? 'http://localhost' );
define( 'WP_SITEURL', getenv('WP_HOME') ?? 'http://localhost' );
define( 'FS_METHOD', 'direct');
define( 'FORCE_SSL_ADMIN', true);
define( 'WP_AUTO_UPDATE_CORE', false);
define( 'DISALLOW_FILE_MODS', true ); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
