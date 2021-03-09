<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'udemy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zgeYU?LXt]<)I+9Z_WmR~L-Oc^+L2p7pysvwLA9pXC4FJC#e5RRD<mw aEx}U^d_' );
define( 'SECURE_AUTH_KEY',  '6}5$zVvH-Kn@5g>#fn.vmA/7wA<Y<*  Hg8;1>]8qvp1b=e4mK( `S*q$e<i<kG|' );
define( 'LOGGED_IN_KEY',    '?xfI]nvem^7bW`y`9~-.a-KO(#D-[#FTy*`iT)3+z)|#PIB`4*P_[*!)YUinXpzm' );
define( 'NONCE_KEY',        'NSY~dvX34<1~?BdZ/y+(8es4CU8v&DXotf[4jE!1_cL?nN1lV0GYJ/HyQu@Worie' );
define( 'AUTH_SALT',        'Jm_M *V!$2]Sa5&k2Zi|4Jy_6JAw+^s=-mv<4yMv/e.<(U6Ih/~WCF~(Uon}DLJE' );
define( 'SECURE_AUTH_SALT', 'mwgO`kI@v x|+}~*gKJ~QW]%OZueYY]7Bf9&w!zuc%q{$7rrM~G~p-^A?*VUT?Tt' );
define( 'LOGGED_IN_SALT',   '>,@-OGV6zd$+(]R|)dg{Vt#c_L0tKKVs=(c4h)SzHCQTPL=Lx^f ,C4r/5j+mo;;' );
define( 'NONCE_SALT',       'VEu~2apE3JR0fw5Y~e{|>4&cHiLSZN%|0*Lm]Hc;6j(:vY5 MQ6>so%Zv7,;b,A&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
