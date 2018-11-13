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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'userYW2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AfByOPUiRq7ytmAT' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '^uu5xTy^v^XlQe^v& :]po) Rq]sEeEddR5rjD.v(yR)DvuY[u)gW^!)S&3A}&^f' );
define( 'SECURE_AUTH_KEY',  '9Xs*5BcbEPb1yja5AR:MxyD)P1GVaUuGZ2~KOAr@mI+wWt]6GaM.Z!2%=M#(No,x' );
define( 'LOGGED_IN_KEY',    'Qx0=YWXWCvDYxPjdqvP|NL/j]& @?3;1;jw?%k$:=8mU3d/qhVGser^bW7? P~Iv' );
define( 'NONCE_KEY',        'cQzpA!;57>^[%0=udmj7r`GY0d<A,x1|W2(fny?#35ZW}r2iwwtrp]&lE/w,VIVC' );
define( 'AUTH_SALT',        '}$?@suY!WXMR:r=LGAE- =IBn%yLr9DOA%ZpI:J5>jX,(;}tGBA;OdiqPR4lPa;?' );
define( 'SECURE_AUTH_SALT', '|y@r`%c(yb`KQpwl%8rI^uDbwR/)irLi;-28#5zp)Vac|/9P9MCZ=fEjRPI>Yq99' );
define( 'LOGGED_IN_SALT',   '%5#oxds-goTZc%U,,zB@W`9PvbKD_.;2zUINk,]V/ +PLUgHba#d&~#~EZ7yB;FU' );
define( 'NONCE_SALT',       'lg7xIne0j/hem1k+(!9Nh9_D!);7thL^8QP`+d8LJT|e>~5X37zz.V6&(ZMj3y<x' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
