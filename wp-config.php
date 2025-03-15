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
define( 'DB_NAME', 'railway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'NyTlscGgqczpfsRPSKMKRwPYKHZPLzhA' );

/** Database hostname */
define( 'DB_HOST', 'mysql.railway.internal' );

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
define( 'AUTH_KEY',         '*xEXs:JS4Uy2[-!@pC<9FH?cXkphk$oMmO91m<]CGY[90R@Q1|?hJ8ajs^ED$.:[' );
define( 'SECURE_AUTH_KEY',  '/T$sgACc)?*V9&o)l_<Y4@2Q)fq0WZ&4 i5:L>tos D,/6|`KcFma3.r7F(xn>ML' );
define( 'LOGGED_IN_KEY',    '0o<Z+AE2r?pK&[7?)UZQPBsDX3FUaOE}>?W*lQIM$<-+5aW(J=_g2$o--qWR?9p5' );
define( 'NONCE_KEY',        'yRrLbyxv3j/rm~>}mf|P2ImG1u_k]e`Dn O]AG~l~sILv]KRTTN3IeNpBZY~3NCY' );
define( 'AUTH_SALT',        '#.zW9UX9u*VA}0AY/ywcfVr[b=H6W/P{eKyn;ygE`^&|l^3ehq`vWizm,}hR8|:q' );
define( 'SECURE_AUTH_SALT', ':SIY5Oc-Od1{nr5xepW,),x&8-=S{Q)V+gy)<vl:`#?Lk(@:0YsoCj]n}dQ46Jhp' );
define( 'LOGGED_IN_SALT',   'W$Z@mg|Fa$SU%8oI t<!)h ns8 ~tolnel7]$Wy8pM.]@]f<E0%eEWzxgi:|awuc' );
define( 'NONCE_SALT',       'LGn8i~mn_U MnzrgZ%9Zyh[S*q]7IzVP3tp#~!2SFfPW1x|Uq!J;-CO*.dMW4j@4' );

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
$table_prefix = 'sg_';

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
