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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Pmyg+.<[TpA|zsLz>]2h7KA;M]x#/o]G21;vl?=P|{2B:sr?XoG4cHY5xC4|0jEQ');
define('SECURE_AUTH_KEY',  '+`tzSIN28k +cvQ[#{?D2I|SbfjZefGZZK0O7%d$!<LfD*q?uDrrAp1-Z<RRz|p#');
define('LOGGED_IN_KEY',    'x@e-uCUU2ClXzkk7`{L_a?Y=1(o:zw*[c0Na,i<M$!N#)wmjKg3grzWPgnv:{>6+');
define('NONCE_KEY',        'FTf~ekX>E]dG;YXu7.lu)a|jY3DI!vigovab-D>W$AXHIy/l[vHqCP16XsF1yWn_');
define('AUTH_SALT',        ' @1!L98?N:`>,y%=j:!YhAWG/T5CNO+N]dEnn][]8P^LVemBkZ??yJky@7aCy%O[');
define('SECURE_AUTH_SALT', 'AyA6,m+:Wu=%W*ir1k_Ysjo-eDtLY=/U>Rj.u*sNw2.!6UsU]:/_8HTq^E_EcXn5');
define('LOGGED_IN_SALT',   ':O;Ba{Sm2;*)/kN?N`}lAbS8[NVJ:EL:JUa?8CYU`Jg:AT62zYo.0^FZn8!hQ?9/');
define('NONCE_SALT',       '>87k>Y~(EF}zh/mPa6Oo.O0x3M24Ld$N8W=e3I+4el{SHt!}l5_f#A/eX=AB}U[-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_elliptigo';

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
