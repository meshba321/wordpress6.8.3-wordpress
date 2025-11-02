<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'd*6R<.dOgU{wE&+[V|{=A3%mn+}X)]zx$PFy$mJeV?Ay@1FdyTkx[UC]#OfK1MV=' );
define( 'SECURE_AUTH_KEY',  'WeliG<(RNmwQ!3e.8q8.PEK?7m4`Apqd&duzsF*-4hK]|:j[Rp|1R+StVS9RofFO' );
define( 'LOGGED_IN_KEY',    'I68roxPz,x!&LAekvC&sq,J5j7O<^O~wNCW[hmG3D9GL1=:r__g#*Im>Vri_uh*3' );
define( 'NONCE_KEY',        'b}?Sl*6kyye4[/x)Ii?v QN5u6$^1zmq PtHHCEG/,8,CM+I4T%9r7 TY|U_i1rF' );
define( 'AUTH_SALT',        'j*`NNw4,O`)Nsp% oWm ;a;&Wo/&nl%;S1ZqQ=wu5uR@;j@{Li#T4s7,HMElUC~_' );
define( 'SECURE_AUTH_SALT', '+z{Jp}QEK471veyZHKV&8a+vT~|E/Mx?QyR&rAD!j+|nA+.k<p+SI1*_opH<:FQF' );
define( 'LOGGED_IN_SALT',   'S,56[Le(G_Cb~c5:@Qj07-:_=I}DD=JMm4^,dHuC7{.>64~J;KmMT_(nL1ZSF|ow' );
define( 'NONCE_SALT',       '3zQa(p+; >;dSW/#b{A[Y5&+0o$1111Hk:y];kM^!wbUm6JVHI}XM~;]$&I4*_>_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
