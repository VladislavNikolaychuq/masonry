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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'masonry');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hvmCX;&-%./%|Xf+0S}R0n?EeM{Ww(8>@=Aygr=1+x1dn*_bXwQ/6U~.|W*s5)VE');
define('SECURE_AUTH_KEY',  'pr&KcuJ$X!?u/$XSdq7Z<Q8*=TxGS(Guix?AKaGV_4&iUmStY2=IwyRlc2iK,adn');
define('LOGGED_IN_KEY',    'J@f?@v{d:HPT_O-xEzRCe41.o_Y2n@/uU>]|hux+EWG]7zh30 MSXtWp6}?uzL.;');
define('NONCE_KEY',        'Xgu_.mUJA*kYp19p$:NvT)^?8(jX^]=h@>}RKwDnrAOb-]h }HY4_ 7i8}6$J8of');
define('AUTH_SALT',        '1s_=Yu,=zlmO#d7{22q#2|yR1Y3(0@%ym!?.=dKEr-!n^Xh1$cimIFEHpCv5%$BB');
define('SECURE_AUTH_SALT', '#uQuxLax.8[eV;97=#F/UGUHp:&w_D7k>cL.w8`<D_{N@o/ma*DM*&NK|4z<F(8A');
define('LOGGED_IN_SALT',   '+~G/pHv.gu]Z/16K9xsW,fZl`g&4nvYHodAP@?G{L2qd[dzm?OK$G E,Rzk6&zB}');
define('NONCE_SALT',       '+2lT%MQ63yJ:c_sw!xir]*?e(;9FXAbq]bE%5WNO$3@U.>US</9c38dk>d9d`<2L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
