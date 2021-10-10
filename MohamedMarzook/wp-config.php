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
define( 'DB_NAME', 'MohamedMarzook' );

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
define( 'AUTH_KEY',         'zSHfZ6+< >#wG!tB$JqH&!Azd98f/=Yyja&pVY{Qu4P03BNwd eY&<Fsk!{`E4Jo' );
define( 'SECURE_AUTH_KEY',  'LUPCs:&]]$7Y]h=Pd_@hvCa?/4Ht+@dM%6>SR|TSg/Vi~An68:|iTeaz:AeB:;t-' );
define( 'LOGGED_IN_KEY',    'H2W1Y(<u9 XG,BqWuy@+$wkgN[;Gp*$ilRm;AU@RJ&M*zLpQ5L?$y_r7Hl8>7rSf' );
define( 'NONCE_KEY',        '<Phu?{)LRz1&W/eQn4E+I`cGJCC(8#y{~(0fpzNe9eAs|TzZdQ}ni|nGaviWkcIA' );
define( 'AUTH_SALT',        '1_eZr02SuCID6(e*;lu1q-64U5A%S=0c`h5&(4mUIDuUH p0JWZU8IT8re NF{G6' );
define( 'SECURE_AUTH_SALT', 'l*uf^a7<jeS}KEFF1{J7}/XVWySo*vdB|(g&8<&YZ00c<ufJ,%iyI1lpX,NqNeQR' );
define( 'LOGGED_IN_SALT',   '8)o6Hb3d&nm{)U!VW]blSX1V[7?]cC)s<K8Q&acdK:T~T/T4nvT4o}~KDh6U&oM|' );
define( 'NONCE_SALT',       'Szb[E|)gF(=J*Wz;v-qi8Nl!XYmR[yH1x|jGW<T@ 2NrF548p2(t/Eeu{B~g$kN^' );

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
