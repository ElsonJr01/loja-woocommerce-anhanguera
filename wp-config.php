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
define( 'DB_NAME', 'woocommerce_db' );

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
define( 'AUTH_KEY',         'V%Z7CH6~eT$C*|R)+!;R^6Qy^7&D<c?bQn-oIPK$j nDQKq+LTo~h7Pj`q?lqs24' );
define( 'SECURE_AUTH_KEY',  'D9gv)76)XqfJ&HZmi10e`Y.U?^$b]9r<O3r{x#TsiUoh{%WMs0uJ?@  kf w4>fN' );
define( 'LOGGED_IN_KEY',    'ik&k2b~A(cI__%FjjRlO(v/DWxv~5fjT)HMPZ}b<1zbfvL{<]82A?lRJUlnE$^!2' );
define( 'NONCE_KEY',        'h2[^7Sx>e&Wbn/h*gXipJh{( Y-swnh ciIA26_u.mXe,^[WOtonQLbir$]69pW<' );
define( 'AUTH_SALT',        '$U/_)%d8vbnO~n0>x^n80c4;uU]{iq)mH&MKP/S9{8n^t].+u,mjcrohgt2BtM.o' );
define( 'SECURE_AUTH_SALT', '~kxRQLNSQ!J) !Fk<A3[y%0>.qm$r,F]g1%6X)cFs@.[qh~g9]V$E+KhI|>6Dpd=' );
define( 'LOGGED_IN_SALT',   '7i#g)^~!t<#{kL{q(YRAylD[?wXtUqNr-h{o nL?#_[ Q}}9<1c4_W3dux5= (G{' );
define( 'NONCE_SALT',       '{EcE2|mfRceh$v45aBIzQcbl-kc~n3Qln`TF?upx-;OEEy&$&-;LXccl&ig+2%K,' );

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
