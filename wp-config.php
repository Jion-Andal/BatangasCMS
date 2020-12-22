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
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'tesda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'Pqd=1a>o28)z~_o/z`7EE{>(C[ufi,;* :^vRlD>.)z+W@B5Eg*AzG:B*G:Y56A;' );
define( 'SECURE_AUTH_KEY',  'ltd?Yn.RF]Z!CtXYg#HCBHje#Hx(i(1bt~>O3=,S1Qz8KJ`xC_Z)5-bs:,b^y;nh' );
define( 'LOGGED_IN_KEY',    'EkqrDypS?[0>~I/$oxfqi2v$P/J&wPVX~:uO=Y%{G8$R{Tcmv.P1*[Xewm@<[nYG' );
define( 'NONCE_KEY',        'Xb/$<y]Ok#J0D[Xf$WbT6dR+!%4JuM6AD~_Mg!:;H,3QOjs/j78wu@bGW6b@ctNt' );
define( 'AUTH_SALT',        '/^`3ZP*?-o.hZu>,SG2-0xoNLZX_|ET+GTPJ+~&ed8Xe0-}Z5b`rbi[)BXNFQ<c)' );
define( 'SECURE_AUTH_SALT', 'iMV/c;jsl$nu?c!heOL6N2Fp~/E96`3nPGZ4VF^>lkd~,|_<na5Ca)Z=TG1F`A+_' );
define( 'LOGGED_IN_SALT',   ')HHK^x<m:wyEMl3rki8]+sR$@P]hy*1IE&v:9m>.:kILNgY 0o`)HfrkQ=Xmqt77' );
define( 'NONCE_SALT',       '953~G7?72,=7-QbXoz}{^wjP2 $_{hHdojPgAXy9IhZ`pQO8z*wI]M|{|R~#pwP.' );

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
