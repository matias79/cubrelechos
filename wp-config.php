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
define( 'DB_NAME', 'cubrelechoshogarbd' );

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
define( 'AUTH_KEY',         'uh;agbv7SX6=$XuyB?.(R<Qy_p)YxSe)!JYp}iZGkBlZ]2]CnV:hXs2/!_MadD;/' );
define( 'SECURE_AUTH_KEY',  'Rr|QvnTJyKD8fr[W[3}I56w?%ck<G ~.ZgdW-5FS{VwR/(L<BkMX%}5J6+]0k-n ' );
define( 'LOGGED_IN_KEY',    ']}Y;yM4~&G(Oldo=|zC|z98Xqj.nMMfx_re_!Y&~XzbXk-L)TRe]k$@L;12!`:pc' );
define( 'NONCE_KEY',        '~)&&Ur~mCn:8_$P=uq~{q@n4YsjW-5(QK0R>smw#nmeUu}(%ze}!;XY8LF]tg%:k' );
define( 'AUTH_SALT',        '#|-dQP<s1YEP(Xru%*I-cp!O%/uj^!2cvrs&~.*WA.CS:Xa_D[/_up4#%6JNJ4&O' );
define( 'SECURE_AUTH_SALT', ' G/T+C,q~0t@Ht=~V`ynPl13^-(.3_hmXY,Npn|s57^EGaG(=|gV}KBXRqaZ,daC' );
define( 'LOGGED_IN_SALT',   '@(][gyU]o4+,4=-}kbE0#QYeW)AvjT.zd.lZm$IyB$z;f;nIuz5Bj&O{x8@?WvJ*' );
define( 'NONCE_SALT',       'F@_YI;6&$ !QSlOMeOB`y@&YSe!e9hR?#=Keh3I?pDuD>}1kRaner6:TBT@X_tO#' );

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
