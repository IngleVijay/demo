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
define( 'DB_NAME', 'practice' );

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
define( 'AUTH_KEY',         'xwc/[DgyB}5BYWtr</?fD~U-Y2IJZ`%s&[bn?6dU}_>IZ*k~)C)@#6;a3m B}}N=' );
define( 'SECURE_AUTH_KEY',  'D][/u5AB_2]p4`FzVQ/+A Igj6I$&,*#$BZh{iR?_yH]ida<Y@9)6(b-mg;:JtB}' );
define( 'LOGGED_IN_KEY',    'FOb%28~]?mC)2nLyj>i>PJ #`FFqClr<t-U_ITY{vskM,2@aZr{rip?%)t LPS^*' );
define( 'NONCE_KEY',        '%6KxmK6LaB- WR+% FSse+h_-<fU7Nw t_x~TQ^:kF>|.Eg?TBMcfJ>VL,1m;NIt' );
define( 'AUTH_SALT',        'X65(D@,-)CfH$%)mc.&h&|R*-{K[.BzP4[+P.oGAD<E!yM+OO0{M*iJn:+q0fz3B' );
define( 'SECURE_AUTH_SALT', 'P-7U!^6Ph)`c/.[zbrl6jFC5-S F {_a}i^?tJ%SJ*+=xnx:8EDj#0,OoEz ?5I%' );
define( 'LOGGED_IN_SALT',   '}Kh]YR:a#e`sTC={Ug%<N`oPP-g`u{5Jus]7z1VVPprWkus?f8>%ZAj[ZU+Hy?~F' );
define( 'NONCE_SALT',       'EGSCg[Et:MQYuT +&*oxq,8?S^td9|Tr3zKb9yj!T~k:_sk&8u=[c:deG/k/*T7Y' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
