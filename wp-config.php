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
define( 'DB_NAME', 'website_apidonjusto_wp02' );

/** Database username */
define( 'DB_USER', 'website_adj_user' );

/** Database password */
define( 'DB_PASSWORD', 'P4p4n03l123' );

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
define( 'AUTH_KEY',         'crf]7Kf+VotF,$ya3]g &MIG]i.SZkI=<|D=3Ovu3MzM6NkZ$3LS&#9X.Z(Us{yO' );
define( 'SECURE_AUTH_KEY',  'rXwkbn0WPEGmkQQS_*S=@gtFC.8}nor_7*il.^#K0tVTH5u/)XZu!;T>CpH}AGjM' );
define( 'LOGGED_IN_KEY',    '=2vN2QGu5_M*.)-Gam+<*Hfm@A.k.H9/pHhaq&ktC8FIt_VlWS()e4!~Oh3O(=#`' );
define( 'NONCE_KEY',        'z8iJiSc<M]G 1;{yKmA+rEX)`bYJ)~H:VZDc)J3H/y!bSTSqwbTRcHa#!qi&jF,9' );
define( 'AUTH_SALT',        'gy?npUiVAaE5Q,^a%6{}d<~OfQK}<&td`]ee+Y]=mm u&=5VoHl::LC:4qMjGv^h' );
define( 'SECURE_AUTH_SALT', 'IXHM7AJM;:{(ZbP9l:~VEIgYv/oIvab7ds&m55 dV]/Z3BwiJ@dm<YU; ?Nt&x0!' );
define( 'LOGGED_IN_SALT',   'V!cD0ViZ]IipRtZs_u8Wg8wfE+J>+EcO:[UaFQN0 Vsc|?[7EbO7:Vya|bP>]50K' );
define( 'NONCE_SALT',       '[iRAJ#,u@.w`g*sdh#GkG?oD_$Zi7TuPhl^U6lmU6mS:zy;g0tct`G[[j%*my2?v' );

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
