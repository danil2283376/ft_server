<?php
/** The name of the database for WordPress */
define( 'DB_NAME', 'Danya_Docker' );

/** MySQL database username */
define( 'DB_USER', 'Senior' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwerty' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'cFZ<-(=1sAc<`#rWBW4/!/7h>pLj^^Y}=0oK,xj6C,n1n48Ls)byY{J-+-6Yc]5H');
define('SECURE_AUTH_KEY',  '.V1>2#L^ExE;!cV+na0laHDp99J%-5XfzA?V/O}NnPIc2m@KRMA&I]P7,qh;0QX%');
define('LOGGED_IN_KEY',    'RQ.bD8J|?)H-oN%o>-x2:r:m*]4jY=^,NRZhl>|&<[LM3T(:Frw}2LGgh{]=4gpz');
define('NONCE_KEY',        '2x0FO7Tl|~00Rz!5Ru49El7t|#~_R:f1,i>uAmhXw* XS|R4YUy<z.c$cq7+KO8Z');
define('AUTH_SALT',        '=^*C-;_%KN&`6|%@?Y,vwYf>CSuVaYs UZ.OGA)>b+Uql8/`CC}@jR|Y=rtfb2+O');
define('SECURE_AUTH_SALT', '(~.+0|z2f_ Zr/h2]9j/4R3vvC0ad^&N1uWP@~X(x}# |ypds?`=~>+Oe)Nx+RCZ');
define('LOGGED_IN_SALT',   '@-`6Qx_yo<X>,[tVa,Qw-pv,5#BiD?##dP|?`*0KJjbC{BR.azc]@rye2dq{C:Od');
define('NONCE_SALT',       'z8eDx{/mti6qh{G1h:mygqu#1puwg{gnG)f]KCGfEkXRdo7zcs9^-tv50<y/WGeO');
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
