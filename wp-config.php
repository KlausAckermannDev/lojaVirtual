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
define( 'DB_NAME', 'main' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'ratodeescada' );

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
define( 'AUTH_KEY',         'f4&LQ`-HD^NZ0a)>UFp)u{vWFV2w{Q|SLLdQCA{vIhC#?uN4GJ^dNvNT@ej4mli?' );
define( 'SECURE_AUTH_KEY',  '`FPWdg Jyk<Vdl5/|DAQt vl5Vv8H<}@ e08_VI8eMO7_0Rm1%o]ajG)W+-,;d(e' );
define( 'LOGGED_IN_KEY',    ':>Ui{P_K^c{LbVgIaRT7sWrP[QwlH,j3%5i~woKLE8PJ)!Vk5j`,gng)6B+N7qTU' );
define( 'NONCE_KEY',        'ZPSV d[zbT1-}<MB 4Ndv2Qbzp{tNvRSBxZJ|_n8<b<XfxMC2s* X[N1)I-AZ_?g' );
define( 'AUTH_SALT',        '&#?!j!K3~*&>2z=0](<PXIvic$AGBY$4%rUVv; WGNJ9)~}ONm,Q*]zs+9:nTT)B' );
define( 'SECURE_AUTH_SALT', '6S6=f;gtoA1^!LS~= wxgkE<RMDPXb99SpmLHm/,kl2=!{~uY6%Q%-N)[Q0JBJt-' );
define( 'LOGGED_IN_SALT',   'zFGT/I,@a01u&*C&,47cyR1{<@WYn,[E/s(7v8f-W~GSme6HWY~[<}1!8R=PoDvQ' );
define( 'NONCE_SALT',       '3(zF/I4z_sS&i_{oBthZ!IKa@%-NERz+qqa]ji2Ci;~UdIDCc^i,9I.+am/}>|}m' );

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
