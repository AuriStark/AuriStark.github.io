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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '98p9C)[i!BMyj6tTe1RUY4{BGp<GZf~*Dy/U*s%e@18+U1Y->c;vV. kOWF`li/3' );
define( 'SECURE_AUTH_KEY',  '>>j8TYD88Z q<E.N[fp2Uw|e45<,`d%v~{p*n)+e[z*neTyBy^kOtu0/~l]|JJT|' );
define( 'LOGGED_IN_KEY',    '$Z1j~XMsDR&-_x9Lx<_7)N6nZn-fCuDEBp_s%djj)@&*37nK[BUy:S~o[EIX5p3O' );
define( 'NONCE_KEY',        '8:y/BTBfu;Jg6$V!XNM>JHQr{xDJ]}qPej@%E?2a#FY[NdTY#Z3->hG*GK}qi($S' );
define( 'AUTH_SALT',        '9GHTc||vp<gkF d=H`zZ_JH[t*1871*?H#g}OhiZl/oj7c=.h)Kr&.xYiLORBXap' );
define( 'SECURE_AUTH_SALT', 'lhYe?$lsq8/YN!EHC*|6MXI@XO6Y+o/PJ B+mT6Z.bL5^]p#eHf+ajO7Z)85DIb4' );
define( 'LOGGED_IN_SALT',   'Sqh/>*[2uS1H;#3I=b0HKks$=coR?TY?Z+E`.}+m=+WIprgRtj^+2+=a0kg(iuZu' );
define( 'NONCE_SALT',       '3C4Bma^hLG6G?dgHslZ0MBLr<cgbMZ>`D%N`#8bWrOr)hG{![^[wA_[[HMZt8ua_' );

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
