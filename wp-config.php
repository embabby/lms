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
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         '%5OHt3w3<rOIMZ/xe~[69,q.ymSsL m,R$k4uaoDvoQgW_oUe[8[`t0z?mqS>vKF' );
define( 'SECURE_AUTH_KEY',  '9BJGStkZfW,y@$2Z8+#s 53zKeHbUNM+d?c%OkMXZS-Bb7djKT[:AgVhI;&BI5NC' );
define( 'LOGGED_IN_KEY',    ':]-h|Vw]B9P}*P *(Ei#Q!rDNi#%s(:]J)^5.II,wRp`Y>`YoRsvE%e:fm;;h;Xn' );
define( 'NONCE_KEY',        '@`1s3UGq&}AbB!mgiQ#&lRY.2rn^#Jh,3p Gg?~}OII@/{bO-eMS7{_3*l%!e-=T' );
define( 'AUTH_SALT',        ';wdE=p`+Pt!,XINLii#EC7.5oaJ6le{ cgr(28eX[UEk%sra8~2e*W5Vcht]*wiC' );
define( 'SECURE_AUTH_SALT', 'iYLdXC?I e;C56)B1ei9N(9W=Z,OYByhY@=N_`47#L(0sEaT9ZXON#Im2aiI1y>$' );
define( 'LOGGED_IN_SALT',   'XkCW;aZuiwm:+prO80?O3$D9~b4>4x`0wFw]yG2NIz1)_bvqhbnO=C[G#N*%du&f' );
define( 'NONCE_SALT',       'x/.meR)/{dI3-%P<;ku[-4;VuE;V|wkzB50a*3<b2)7!D:%EN@vyy=z7:ZW8#1dM' );

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
