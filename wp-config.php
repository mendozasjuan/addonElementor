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
define( 'DB_NAME', 'wordpress_prueba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/>l`1?;ME9b*B0$jZ[8th/qU{l!W;]1+@B{ TkQVtmAQ-:ibE6MQA@UG64s${Tr+' );
define( 'SECURE_AUTH_KEY',  '+m|ZEgeeH+$EB~Lk(.p:0xMndO}Y5(Y%,2Q0DL6x)k1:hhPg!;zyW@yAK<Udv.=b' );
define( 'LOGGED_IN_KEY',    'Zf5V66Zj&o}mW$o~v4}nC->Qt=DqfDb=DBe0+{A@d}P&y+TfCA4(g^vnW$Gy7C*0' );
define( 'NONCE_KEY',        'CW<>tx6YQG3uN1.37AjLj}|{FYEf6>dktU?b$y)c.g}:{Aqk(sAX,]ee45Y@Nn6$' );
define( 'AUTH_SALT',        '^a!Tg0/R:}[pfCba~!<uiiBS,o{eTP__B9R|&f$-]c^T6}_fpybaee(P*?[n4,E*' );
define( 'SECURE_AUTH_SALT', 'U{V<Vi&Hehe:%Lh1a]gfMEP},~.lj.*bY`gb-L8ylKtt~s+i~rQ6GL(7Ewzx7amj' );
define( 'LOGGED_IN_SALT',   'X^g<:2k. *VMi&`t0.<LNg&%,-si5_|M]k}|87K3fD^rYw(Cnfw:Ua#eW`s$QBoV' );
define( 'NONCE_SALT',       ':JEG$aQ3$Ch!>#pAB -jn1BD?=s2>>d}fP:RV]k_?!r{(cN}sycSYF3aT o8`mXq' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
