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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '59jZ|.#wU1m)l}-YReZ`V6}YU5F4fSh3(5d`?3TM[wIZ{)&9vy*:M%)lIu9Sfr+U' );
define( 'SECURE_AUTH_KEY',  'eY,dCwhiSyGP+xo=n$Cy*$-z]j4)i_t#w8Iy)U]y;C,tJ5F$P]{!S]w4/G4FNo]%' );
define( 'LOGGED_IN_KEY',    'c5eG+^Ed$x6<Hv#xv,gssSM<|6#1]2jc!Gnm2esd!Z6k)YC]t@lp5B#E6/~Lpu^k' );
define( 'NONCE_KEY',        '?}B?d4VOaynbp(,Rypq%RVPP)qAzqXc!h0TgPU39NQ;C<},$|J`zcUEz#w%=r+ok' );
define( 'AUTH_SALT',        ')UgItad/zjzG7j?+9v<_D8A#T=*M@1UWj>Q$};pXn>1#K[{Vo1]lW-rq(%f@fuZ{' );
define( 'SECURE_AUTH_SALT', ';Z}U)MfXdH2ued~mst;dG>ooGCDZIIj4Kf099T[vV90SaR!?_td}^JUTRRK5_Ht)' );
define( 'LOGGED_IN_SALT',   'pN,Ip]<8;EH!,lA?E&>yNwC:rnDYq@DWx|96/^,$B0f8fN@`8f~m0tM)J@ei,pv-' );
define( 'NONCE_SALT',       'str@{=c)1&:A|_hw ;/|>U|H&TC3yb.;.=X tWZ^%Cj0(:<S=[+wg(sU^qVvDv^[' );

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
