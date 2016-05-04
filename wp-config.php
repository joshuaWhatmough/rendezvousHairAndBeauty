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
define('DB_PASSWORD', 'Peanut81');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'cAvgt8mp*+4vS+w80gwh_@xS3Ei|z#{6.s0-95-G[9B47_zZR5d}^E656/n_X3y-');
define('SECURE_AUTH_KEY',  'woOtvzKOwl_:+jY4Xle-AC1ov@z_[ER x-IaVxCX#jcXNM}*}>N5%WNc<kRw.BZv');
define('LOGGED_IN_KEY',    'vMqA-IO8k/:Zujo*TpVVQ6Ge/b<tfw=oA+Gm>ilmE}-_1@lzQn*|p^*[g|?p/4fI');
define('NONCE_KEY',        'JT3g:;sA;uHUPo_Z1uA(S 8-v0r631Y9 G3eS!w}^eM{/`Q{SO:o>X$rMQ`%8TP{');
define('AUTH_SALT',        'J]8Q7&=%i75Z$GXyU?5htsdC-qGiB||L|*h%F&Huv}RMC2*SC19+OT%9oR`=H1~o');
define('SECURE_AUTH_SALT', ';H8O22wYeKfq_}*uyJk_~>}}5TV/bJ5OHwXTZohaWl<q.=de,Pl/u0N[xD!gt|cc');
define('LOGGED_IN_SALT',   '=)U@bqhy|Gz_OEob:{;N|.388R+9B|a|{^(+fhMm*[L^k`D_),{[Z9Mj-;bU.++s');
define('NONCE_SALT',       'f|0F@z:PN1Jz?6xV.qUBj(zI6MZM(uh5,K3WcQV%S!{Gth+@T4POq-^0-Gm5o0}$');

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
