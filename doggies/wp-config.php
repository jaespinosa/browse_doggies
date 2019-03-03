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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doggies' );

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
define( 'AUTH_KEY',         '#&}FE){2F--Pa199,}V34z%mx^k`i&k!$F~m$Nwp;mTP*_D1,k;)oN]+=>aHKHyu' );
define( 'SECURE_AUTH_KEY',  'Q7H+n1Zl|gZFkQp&mdDN;G[&i;iJwYcBYe0eS gIxTis<,SX[v!aJggNIU_e!f0{' );
define( 'LOGGED_IN_KEY',    '~/R7j%efuS/i[{o)^#iJ`zPe,[6Ba*aSybmk0{y~F`z Mi(=L65/) NJvjl,>O(k' );
define( 'NONCE_KEY',        'i}?Q|J;vTrHA_g;ItaAx^%-2bh!Vn#ScSf_{,^E(@<juKf?HYdBS4b;X`Y.{qyz8' );
define( 'AUTH_SALT',        'f#?@2i~=/~jT 9]&gB%7;Zvz_B(Asr3;T aJS*t8es>kozt76i:uklhN}^5t[I>o' );
define( 'SECURE_AUTH_SALT', 'RvT>0dAi0.mjNMsnEd)0r,iy}>|*VdRg=g.QqBxq W6DDAT+dBMwmX#VlZti )Y/' );
define( 'LOGGED_IN_SALT',   'uN0T]G*X$5M[B{*!ZHomJH>z/Fq*)YEAuY,aTzC;;~.C9r3Jn^f{]Gu^Nd1R8jD6' );
define( 'NONCE_SALT',       '%|o(O,B3/lw]CqJE)*j3Ni,{Wu1Dnz}zCW^# ulcUUN.43l^ZBP^>bUuln?[`eFt' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
