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
define( 'DB_NAME', 'nicolas4_challenge' );

/** MySQL database username */
define( 'DB_USER', 'nicolas4_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Abrico2012&' );

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
define( 'AUTH_KEY',         'u@(zc]-OsS@vXYruXi5eOV3Co=L|e@;3V|fpWJrYZOf.B66zzY/3a534%1g.yych' );
define( 'SECURE_AUTH_KEY',  'YgqtFa:*D584hC`R8}9gnyW(6(eFDEpz.2+/bE2ri)r7F)j=M1F8AtioZ9rWq@L5' );
define( 'LOGGED_IN_KEY',    '#9nh{Gj0yoE7l7a)x>`*1LCQV76mh,<FZ![[_Gtj.!ZmY<39XT?$65Mk>Tb6 :C_' );
define( 'NONCE_KEY',        '=$KX/*Nys7{,M:WJz=XT?bmkPZ%iPYumwL~~i+`8huEw/}ow`ch#lKnAE{w@>t^[' );
define( 'AUTH_SALT',        'w1@Pk$}i D@_,rwf%+b*[S@B+)fK?j$.Z1vMS.B1@ddS|xdgOIcIi19d6Q+x9ne=' );
define( 'SECURE_AUTH_SALT', '=M,;,yfVfHxZ+y3ZRM,Hc=xvD+EEe?|~wM1OHx,z9qDV/khtZOQOVssC:>#tYEn%' );
define( 'LOGGED_IN_SALT',   'fI2knh?&~}XL>=8Hh>YTskKerzeUT^XyNchZhRh9^4a>2~YE))nt96eONZH|}>No' );
define( 'NONCE_SALT',       'Su0]-X2thkVnuKR]$Y[5xJ-xaX?*&Zvy|tJeeyEKJyuR<j4N^*8Ew]j!}w8[oI&V' );

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
