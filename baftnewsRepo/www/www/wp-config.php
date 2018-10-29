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
define('DB_NAME', 'baftnewsdb');

/** MySQL database username */
define('DB_USER', 'baftNewsAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'baft_NEWS_1397#');

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
define('AUTH_KEY',         'O!DhB!EIyap%L)!KjsVcfD/a4jA$;9CoDho@qNe>/^N2gLU qc`ZC{03zaOTr]>b');
define('SECURE_AUTH_KEY',  'G~wK>BfG6qk} (92~E=q2NL*;{1|rWP2_1,@7i8O1o@;I2)Tg^g (Zc[CIv+QRKE');
define('LOGGED_IN_KEY',    '9VDnCQhQP7Sxl:>8uCM]nPYXwA]G/$l$ Qn{dcR1|$WYY Rx:;}M1swh/5uj8ll6');
define('NONCE_KEY',        'fsSCquq&/2R~)d%LCEai/:K~Rb.uUC1CWL(You,9h6fg7m}E/!zL)pNS%d;|^&<5');
define('AUTH_SALT',        'VZ6eu=jt$S6L#]2~l[lDK5-_7RSpXi4yED_<jadYUAoTB>qBanumQJ&#c!OF!8(I');
define('SECURE_AUTH_SALT', 'ZDiE>~/Igkp$MZouM//o,*Zxp=.ymh8puw#4ji`jWr2&i[>#^5PL7t&/1xL89&X{');
define('LOGGED_IN_SALT',   '`O1xvP6y6>#v(Ybv#Ax<8.Eb#4:&j4TLDdF7sBu4{LUiiG3)-6f0E}Q;^`9vCL}Y');
define('NONCE_SALT',       '{7Bng_@_fW!m({`Y?1S/3LUn1Y;S]:C$?FhM97N71VH5?%xq6:0<cP0u#pe0F|Vh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bn_';

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
