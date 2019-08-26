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
define( 'DB_NAME', 'Pppm9euPIL' );

/** MySQL database username */
define( 'DB_USER', 'Pppm9euPIL' );

/** MySQL database password */
define( 'DB_PASSWORD', 'USDQ7q0gjT' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'W|6U9M.K*6mZq@m)_V57wk KbWT9m7^h$b9YMAxe:*gnvP$Up/]%w4!4ARVjy?PY' );
define( 'SECURE_AUTH_KEY',  'aw&)A5QJPl|fwGify_K#C8A`Ztw@-XhHY,],O[w91$F/:zk^R8)4}(S<Ug/ClJ|w' );
define( 'LOGGED_IN_KEY',    'gSag*zboogT:{6`{;|i1)6xT3GPjEB,$}=i$=PYED<| QgT}}KrHsXp*9e-+pGWU' );
define( 'NONCE_KEY',        'uMmfA1_rn%WgY+3P+L3|zy_tx.#wugg7X=lD]7gRNMZ|/B)f194.dp:X%F~+-Fz=' );
define( 'AUTH_SALT',        'c{RI4Q@|<$[J@a1#s#0J&GupImqma_2<:8fYUd0L@vOvpr;zF+c#i;gf^IMNMpLT' );
define( 'SECURE_AUTH_SALT', '8bqbG!<S,8.&6~i-UN/|G6-hXixii;E %8~!9W6j`_$^1s`Eo J9[BxZD1/-%h*8' );
define( 'LOGGED_IN_SALT',   'IN)Hzj`7gW0}~cC+mw(^=):1UwDY)#nlEEc(H;&[G^h0P0aS,XsnF|igAndJ@i4r' );
define( 'NONCE_SALT',       'vFoKpDxM;p2Ovu>PLje~6fC1aOZYJX:^u,atv_hWsAfo$M+pp$mFv!~0!VNBN<(=' );

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
