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
define( 'DB_NAME', 'softwarehouse' );

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
define( 'AUTH_KEY',         '0A+]~2>8F*yp=;p%[~U`AmB[;).p1~r<xiS!x}oim8tdJuFF_r?VHp#_sl |DjNR' );
define( 'SECURE_AUTH_KEY',  'Hg%`f]4c1qTG>>rr>54WzSV)aUR<a8iDsjI.5{qb&:j~,Kq^q`~x{V60~.7ll+*2' );
define( 'LOGGED_IN_KEY',    'Co_WueU&l#6%*rB#4T+H{6)*~hJ{ivIr~0B(s<2_P0P!cwpI2y6G?{QvNR?v(Y$y' );
define( 'NONCE_KEY',        'X^K+JWXIm{+{wN;{?W)j7Jac]6<? +yw$L_Ff74L*8ksS-oLtb=ExmK-}ykD,[YQ' );
define( 'AUTH_SALT',        '9L5FoHB8YF<_p23L=Q.>J9]=q*NwG7s1XK!E2cf&&(MUdNXlo0+2I?8ZzAy3X+ *' );
define( 'SECURE_AUTH_SALT', 'KF^yKVA~CBm+t>(0XdlBM4mF$!W<9,FGW{9.bB?sh*  , XWX#z{w.|ID+e?PG&(' );
define( 'LOGGED_IN_SALT',   'a*j*D*h;%o7_ar?xKRb: M1dnS~#u/W:Y$G{Je^Di:0F8}<bqtRNyl9japIdH8j9' );
define( 'NONCE_SALT',       'M2$Q}?lS`q+&<FrS*fPr`@ZzayFY$@MfT}<]Y3i<zHZNCh;m_<h]<r]mfd@1aD7{' );

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
