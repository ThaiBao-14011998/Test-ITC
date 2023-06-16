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
define( 'DB_NAME', 'itc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lsYzlvrjEr,dXw0m}t8-5j?IO>jVR/} +P=.oYS~wo;caLH3^Rhzj1=8Oysb`Ds1' );
define( 'SECURE_AUTH_KEY',  '8];T]JXwsQD;YDns]%}<6qIRzedwD Kjh8y&zgX)%+?/[z |p=g^F0?L,z;`,f| ' );
define( 'LOGGED_IN_KEY',    ',yo9[jVJHA=j!y(iU_?XiBx#1Z=nk>blEPNm!~a[nT41m_,=^frXF#gGv=9`Uwe^' );
define( 'NONCE_KEY',        ':f(HvBfj~EkSzUXz{<h*f7I9gwA=W{cRKEW4Rm4zk!p|n?uU[q,$h@<0vs),AM5$' );
define( 'AUTH_SALT',        'a|lP~|#]DAutZPuq@!UGMHkP(ouVTu`Gpe`D)W[:,{wEt(-4!br*xNJiWm> 9C[[' );
define( 'SECURE_AUTH_SALT', '44]J%-B40;}D^/MThGj3.5#kAB_t}J5h*8d`IGsCTP2txI_9{T*W]oOh:OQKY`4v' );
define( 'LOGGED_IN_SALT',   'yfo{ag/?<A;As3-/aChl9S:q{~#yLjT)m-yD1:&%<vMHW;?9&Q@E[D_Zbm;o1!?f' );
define( 'NONCE_SALT',       'mu3#>=U<Ee2ieYXVd2ag!?&v~tz?e!O1k2vVC:on.z)WDeT/}D+NrHWv,D*qb=#^' );

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
