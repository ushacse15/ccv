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
define( 'DB_NAME', 'coventiondb' );

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
define( 'AUTH_KEY',         'W4~,KR#NY`Q:)v5+nFk,<fkqI[P3&BN6>`K9,X]BQ,jkUT+UlDCa_R}kG-GiUVli' );
define( 'SECURE_AUTH_KEY',  'M#?xZC)mrf_-CUox8}Z^Y@_2dkDea70/_X1,R^ElG9B:Z=v0rq2(h928Dh6(i7Bl' );
define( 'LOGGED_IN_KEY',    '1JiYpKYmeh;g(vc>n^rS5$G)fmJPk(}v$gh1&s{V]FBjbZI3w#Tvq)GJURj Im/A' );
define( 'NONCE_KEY',        '(tC5h qIq490V}8KU-{[#TgfI>ykba|)GKrQGEB$o>ZHg8U&nf`@#)O(4-lWEAx/' );
define( 'AUTH_SALT',        '1MSQY.6zT{ y*Raif-Avw* ~##y i61fh1QP,H!vK~H,6d0r[!@w5q}w>@:xJmp1' );
define( 'SECURE_AUTH_SALT', 'BvkRPv-kDv6}#=I26}5fa=%GTWcEE@H`/<wm![NZ[~?^Q7KiE^l&eY@2~k9gcliO' );
define( 'LOGGED_IN_SALT',   '*WFm9#RUm1A@pe13H3*sBI-s&@UFNM:n*##7ku}2zH0h)NBm+}zB?WVF{pM#yjQZ' );
define( 'NONCE_SALT',       '(&C{LxNqfc 7(;=a>mS@Z>(U:7m{A<l[v?3:$dA-; q/:;{Q3Fja+jB,0Ap7%P&v' );

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
