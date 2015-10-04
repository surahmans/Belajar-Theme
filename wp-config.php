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
define('DB_NAME', 'gurusid');

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
define('AUTH_KEY',         '7--S%fcMYBL`i5c.HP<TK GBr7~IC!X1Gj(,-#(zm!ESB#$y?-21/I@m{y--zV[>');
define('SECURE_AUTH_KEY',  '+UW]t1{&&Cj4Evl$u]8cD|l&PP3_c+rKR*24dnW@1HFcD M*N!8]q6_i+SI~a={#');
define('LOGGED_IN_KEY',    '/eG?^OvqtoE:.k;Aa-lZR5OwYT-Jo5QZ=}~4,a(e}6+N@7Z0>Fi<-CrtA8J#j-aV');
define('NONCE_KEY',        '{aqFz+z{+&cn/R5Bdd4JS/:peJDm]jjP@U*Vca)YE|krIOH,z}?|W+S#H^&{H7e*');
define('AUTH_SALT',        '+)z7%gj27G]HAm~AM@/S=5&J2?cNg6eatTshC&,/OtP~B3E$8xLc_R^$H(*/haU3');
define('SECURE_AUTH_SALT', 'S.%dL-{wV!:73#l1!Q=Aa9Y,%DK9=3/;E8(S+|?gaYYT%}%m3C%/P|Mrzb;;+!*h');
define('LOGGED_IN_SALT',   ')lNXvc=6e^}vwOjH7OZlST H.AMM-nF 8C+rj8GIN7&:N$}Xj<!D<1$%G711y[L&');
define('NONCE_SALT',       'sosU,I1-%P0t9:HxFr?$+Se=^_ bK%uGo_<}:SIqm6^uBC_ymBQx5+YV3uYi4t+@');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
