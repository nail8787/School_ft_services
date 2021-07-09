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
define( 'DB_NAME', 'mysql_db' );

/** MySQL database username */
define( 'DB_USER', 'tcassia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aaa' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-svc' );

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
define('AUTH_KEY',         'EU7Ncy{uP0v2qA)KJudX!bLUP[_i^X4KQ(9cSAq#f}SZ26R|i0mRZ<}^$+#Hcr<=');
define('SECURE_AUTH_KEY',  'UD;$;*}6u/V3/b)[]g>}H~AdzZ?THQm}O,q399TE.ZZ$b#-4^85nN5-}cPK-HR@#');
define('LOGGED_IN_KEY',    '-(`VX8$t;Wc|A=a#f/&6RfH|M@m :/:t>;WY|~i56dV,-K_>]qgN*>$m]4h@q,sg');
define('NONCE_KEY',        'q 9m@VS7MMn,1)veRyXMek#4{Fo-SNKwT-5AfX<e~H,g6&-vy8~pQW>c,-Y0nV[n');
define('AUTH_SALT',        'I<jm?(N/Y?/[E5`3{a8J+BULWDS:Z_1n=ZNb;-UyGP-D aR`v5O1*Q[G$c,qDr:+');
define('SECURE_AUTH_SALT', '{&<XyHftn8.}8E^uLWP0M<A<-gm0Z7KIp.`nU:gj,a)`vF$bF.*LL{C/62gCq2,:');
define('LOGGED_IN_SALT',   'T-&l^C?<..!|bNa?8@c!tY@.z,v^H49V-?,g:ZJn*nX)tWaAUy0-<065|,r=+=ai');
define('NONCE_SALT',       'oGY4S-- U+t-=mozZ6&f>)kgF?.%gG.oIW|>++QlaH|@zGcS)i_@7(a8B~_tU>?K');

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