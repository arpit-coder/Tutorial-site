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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         '%;J~}+ChvN{&_/c$0Gnj~@LrhO.Fl7;ukF<N,t/TeV2-X0X2Q6j?`Xo 9B:C5VhO' );
define( 'SECURE_AUTH_KEY',  '-^>$mu/IXYnX{FHmH.LkV}YD?*5Qm~ fn92.L^I7,L-:&YM}eX9!gOKV=?GVDs!N' );
define( 'LOGGED_IN_KEY',    'YBz#<Jjj&9o!W5-$=b4l#:kYF;QI_l#VG#*M2@qx!]EBp4KF`}bjSU29:Wp?75(O' );
define( 'NONCE_KEY',        'U:[~7tSW:J-i4,$u=m!w;g8L,##lV-Fg7gPCIX[|Y+CCP.F[wA[~{!8xd}5CopoL' );
define( 'AUTH_SALT',        'f:):9c#HaA R.c)qp>vYi~D?H.e$.C46}X?oK^MY4HK#=Fg<fCz;oI6:lZs.iZ_ ' );
define( 'SECURE_AUTH_SALT', 'E@{6^Wsxb$P-MToJ-fQT>/]f:#u&obdWB]y-Q-+1.K(1r0r^g,SN9:1t1kv3_Qw1' );
define( 'LOGGED_IN_SALT',   'C(Gw)0~qCxLQAS326vwefO#bbCsK4}`nvTqkm_&&9aT)Lw$S8w)FW9qZkxp;hM};' );
define( 'NONCE_SALT',       '(a#iBvUy^9Rcl-^Ujmq:s/|MM58fK?<B>i3$b^@YNFa?q=@E_M8cL<>mA/;9C07&' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
