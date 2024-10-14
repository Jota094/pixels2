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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_prueba' );

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
define( 'AUTH_KEY',         'RD=nYwu46EfM,UOfPzp#yL[Cm ly]hnxpqk/}1dsF{HTQFBX^Pr9T]><?x|;T%%?' );
define( 'SECURE_AUTH_KEY',  ',V^J$cv {^!WC:/F5@CRhr`cG}=hL]<%WW&0<g=fw!$?xM7;/CZ)6..|j.C`0Y)P' );
define( 'LOGGED_IN_KEY',    '7niayb6Dcc/0},M=Q-@_%8p!eWo1pI]D:e{Z[JRB5rRk~:(iz.Yj^dto.&m)-Mjq' );
define( 'NONCE_KEY',        ',9,aBtBSEYKJ3UGy,dS3Ka<BJ JyWK5-VXwfW$Zr!nrp*,O(XFYp[x!@vK2K=w.t' );
define( 'AUTH_SALT',        'GfGK!>`ecl8#E*<l5Y_31-f[gh-Yf@V>YVPkN!mF2R{:Y<uCz%YshK}tG0X=F:4H' );
define( 'SECURE_AUTH_SALT', '&<0=@.Yx.@;<(7/1~{AWRf,;gIU=$KwNh)8jC5T5>k#;xUw`V~my//||Xj;R|@oC' );
define( 'LOGGED_IN_SALT',   'CboD-(#p>uz=A3~Jf}f@)0zfp-r>RuTYf}I._N!t2zX!MyBid bx0dN}AyCdVyQe' );
define( 'NONCE_SALT',       'pg/>`h|/>W%u,gr`#+Y0RM+.e:aSqN)[dtwe)GW`ESq9;T~-$=3<G4#b:3+Mx|=y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
