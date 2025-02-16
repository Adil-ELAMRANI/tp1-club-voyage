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
define( 'DB_NAME', '33wordpress' );

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
define( 'AUTH_KEY',         '{4z>gT f[~>M-,z}2?Al_iO4H~o3!Y&5)i-c#-#L/R-5+Kg=~Qaey/XQNV-`.n5[' );
define( 'SECURE_AUTH_KEY',  'UU_ :fyc9[0A/cJyDDI?+J8mzHZ:bv#=$-6-=+1)~owBrn]|6Kd;8agU%hdU-6E8' );
define( 'LOGGED_IN_KEY',    '{#C*U&lC~9=@v:zpRL:ba}(7tLrpB `!*i/mly],f_tOiX~)T@@o$A|YZx0Rw4DR' );
define( 'NONCE_KEY',        'kr!7,=C.nPv; <-?4%-4mb~sz[r3e^w#y($w`0#*PX/3&I`b@o&KQ W)<2d4}5Gm' );
define( 'AUTH_SALT',        'S4qSCx`42.-QZC?R,{4(!b=fAka!.J]%!+Qy{<P=7^3$O%5jM[]bd@ttrs?*!)Nb' );
define( 'SECURE_AUTH_SALT', 'N+l).yP{;[2v;$&ebwDS)jb?}U+{he.@d`X_(oGtrjMe+QX2)Y 9u?Ddcx3W Dl<' );
define( 'LOGGED_IN_SALT',   'd<X[EiNn+6{!pf;rxm:0xC!:.yC} Ag1A#qhHM+ =hpB<Z=)),!]-?6> ,E<Muhp' );
define( 'NONCE_SALT',       'J}/<z,.8PzDw6V@)Y@-]@sv+Y8:k9sF64#]TLk}:Em}uQ#AG-|6=9|3aSci@*DI+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
