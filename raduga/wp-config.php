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
define( 'DB_NAME', 'raduga' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3305' );

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
define( 'AUTH_KEY',         'V@9r1>O+-dJo$#4bm>=8hhMsE(yJP8:?4y*{HYvPZ|Sd{4}/ynaO&pNvDID?S2M-' );
define( 'SECURE_AUTH_KEY',  'AoRR_;YjWgZWha0A}APQq{%PdZ:1a?`0@za^}XPJ=zu0,t#J4mxz2Bh,VqXKv^]R' );
define( 'LOGGED_IN_KEY',    ',3xzY~* 4jEi00tCB+/:hCCb3{R~3O`Tr7j=3^7h>]6nA/B5 yn 1YfKR/?yu8+R' );
define( 'NONCE_KEY',        'he^{XB^hHf2=UXfr1vQQtp6>}$tLRd16if{[Vb&QHYeswL2NN6DQS[jamd[18=N!' );
define( 'AUTH_SALT',        'u,qO~ck8#1+M^hk%V1}pr&L#;$bb_e,Z=K{GKY,.~M(Z~~2JW:sEWX`XUI_[|o^)' );
define( 'SECURE_AUTH_SALT', 'Ko7h o)[Qd|5f?{KKn476{^qv%R,)1Sg]x7 ?2[9AyM6R5e&O[.<*L^s/q&$*xbr' );
define( 'LOGGED_IN_SALT',   '9a|9J*9&(Ltqc;.|$s11&^N;Ia8::B0cmu{ShSRnzSqEU+`mMB]n_DT4X))dI#;o' );
define( 'NONCE_SALT',       'Ge5voupTv#M41:iy$GN>3)w+VE&m$96OYKKklqP`e.^:i[oV_r8%+>ktsL|3wnvR' );

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
