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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mobile' );

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
define( 'AUTH_KEY',         '=#`T6c52&[W&! wD:cS[c->3f?]jZz?etCISN~3-|E9@inCzN6~~I8u:@XCoae9J' );
define( 'SECURE_AUTH_KEY',  '7%.i]v3[{0|P073h}uUe++Bq|Xj=H^TBVHU8MUPe>R|3b!F<WgE/kiOlQ-L`Fi%`' );
define( 'LOGGED_IN_KEY',    'hwo<NsL]s:{-lyA:dOm`zP][-B(Ua?Mh9-G:/2|gxPShGB5rw,2Ie|KtB9u3 (@S' );
define( 'NONCE_KEY',        ',sZPk7gNzNHK?@jS(q)8xbyR*ut[q]U,p0(z9YjQQQfnJdf#<Js]&0HIX4>e?rr2' );
define( 'AUTH_SALT',        'B:Z#VRq)$EU1>,7*0[@Ru@QH)5lsVvcg)T_Ya_GH=j?KN|-5[E`c99jANE4D|2^G' );
define( 'SECURE_AUTH_SALT', 'qh6+?NooS9EpD$4.H:{*0+BTf=Ku8*xWu:6|-r>XO#-[a},Xe4Vq:37I {H!V>C9' );
define( 'LOGGED_IN_SALT',   '>uhi9KQoZe@vho3N`ts!A_RXczZ|/8^lx4Uojiu-^_:htY-j1FLK*?WON0]EYdIn' );
define( 'NONCE_SALT',       'vz$Kba+5u]`r~9bkC7r_v?5zwCc3={Cs>3^~<YZw#R,e]4~8#[[g+md%u7F3Ymzr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bv';

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
