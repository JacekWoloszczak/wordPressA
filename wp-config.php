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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_}pv6r}]+uV;}2P/3d~][p[s-5cv|G!#W{#>eDfG1/iTf$ED&x]6o<1]Gv@T4)F[' );
define( 'SECURE_AUTH_KEY',  '1N|SHRZ#+NKYC{[UtDu%kB>6a+=+HN$`#gn]dae>8:~^]OI[<s=oMTt7H:]Z(0XA' );
define( 'LOGGED_IN_KEY',    '?)*RFV@NX$7y3s^;WC{Y)9m.fXC?7[2yMD<F%4U/fn_8]!pNF[ovoqh>`ww5lh,U' );
define( 'NONCE_KEY',        '3twWW@AR{Lpw<> Jpe`:lNGqOYSZ:se(W-E=]!:X]JtDUL?UIY9@v&@b.ns.*P2+' );
define( 'AUTH_SALT',        '{xd5Hod9W{h/d|dvk|<FmE6Z%&cj*)YI,[+x47ak3.,B2 :Cpm{7J5}M&g9`N]2&' );
define( 'SECURE_AUTH_SALT', 'P;/@4G/ q7<I7QYw:R#!s<fG{=bpsU!sG5XZVAn?OJZmD{G,t}joZFye5@(l(6c{' );
define( 'LOGGED_IN_SALT',   'FJry%4g-hk*M.24g?:)[[]Cq*g>p)QV-UN.>&|N4.Nyf]z+~&rrm:tK`(3>I%`>S' );
define( 'NONCE_SALT',       '|oRz:Yg{cI,0XZGqv(Ke{e7i80>|p_N%VU%g3nur$uslbvrO5JTRl:,s/|QEfPT@' );

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
