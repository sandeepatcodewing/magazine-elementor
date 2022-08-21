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
define( 'DB_NAME', 'magazine' );

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
define( 'AUTH_KEY',         '*1!UI%pV.&cnh-jJVcV:!wv->_>rz]<D[V}{JiTg^+<jOmrB]tw9sx4TDkP_2f1/' );
define( 'SECURE_AUTH_KEY',  'Pb!~15*(AdR~3TPHLXz#fMYp F+%7F&JA]}fLECKeN1*i0}dF>TEf9W|q&<E?69p' );
define( 'LOGGED_IN_KEY',    'HE:zqo)oPr~*2N!>N^{+MhvwdouAx36U|F0+r-J1{&lh4;R@/P#>)CzB+WYu$gYF' );
define( 'NONCE_KEY',        'M2$`yvGk3Q `y5?T=h0g }z`Qr=4]y~wXOGDhg^.n,8rBZciZLU3Cp}z&VMQ!#n7' );
define( 'AUTH_SALT',        '2~fv9`J_x#*L1S3rU4aO}$W@OIWL^EbD-ENTfM]a~2jh_T$;~<I-_A%yx=i!U-(z' );
define( 'SECURE_AUTH_SALT', '*hL$[ulj7)F,.)q}61Kh0=aVar^SG+<tssg)bx_U~!CYV#3;FbPxDN8/;&YR~bp*' );
define( 'LOGGED_IN_SALT',   '@r~-))thH55i30fT{1_uPl/9wT&?:6w#J+ .=QZ=)[$oD~^/s@iChd*!`Uvy}W i' );
define( 'NONCE_SALT',       '1zllsQA<E4M+/#z|9qt8tSYr1)!CE@<01iN7Ia5`>z*#mojy.YB^2BYU5>C?Yj=X' );

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
