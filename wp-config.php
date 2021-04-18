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
define( 'DB_NAME', 'ecommerce_db' );

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
define( 'AUTH_KEY',         'y;U ruxcFS2B^Nd0v=h:,y[8~f_QKD4j0m&0L:>ZA0Y?Sq5<Zqi]nWtr%%+EIyIU' );
define( 'SECURE_AUTH_KEY',  '|H47j?(;x Esvn|)Jr[oXc3|zy[HlCx) p,hGVQ+T14%Z2ZN(E)guX$_fNA`8US|' );
define( 'LOGGED_IN_KEY',    '3=xG2 TJ+?%.%&]hq65rRi7rVOuj8I/V8`Zs7F|J:imukAnkwi%v(#ld^hvorZ /' );
define( 'NONCE_KEY',        'nFlV:Wl,0qafo!z5RcC1pK L]N4l||J=L,IW;@yO{095L@%YcFGCRO!_46&YG|oQ' );
define( 'AUTH_SALT',        '[B<PJKKlwTjY8J{;(e_cQt 30mtgWPN?Q$!-;R.>=/.<fIoH90PO z8#Odj+hd2_' );
define( 'SECURE_AUTH_SALT', '+D:;e@0H{Dzq&T2R-7D9iPyc1XMTPz]i4}6dlll!1SmF!*=BQRf~nUQFnTXKs-<>' );
define( 'LOGGED_IN_SALT',   'z*2S3]u|qLT=ADf;L|mXvm)>pZy2;:`+4cDDJF Cy7`x6&>BCLUL%I|0H/nJvVYq' );
define( 'NONCE_SALT',       '<2gk7*=$CH5e7Y55+lMHCYi`mG7Fdh):{Y+FDg29bbyY7|*+I$WjI]Ir9Dt8Ou@&' );

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
