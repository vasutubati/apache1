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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Sriram@1985');

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

define('AUTH_KEY',         'M0)AMR02,O~k{PNy1aIhCi&+mHFV1(d}oe-=^xq1(?}l;2|B<+}oUWQAB#tsx/lS');
define('SECURE_AUTH_KEY',  'js7G;/|dGq*foFKHd*a:bu><4<RpUCq/%N8,8S!|M~2|!djcUh|]o>B*&),WSYDZ');
define('LOGGED_IN_KEY',    '-A3j4Y`H,p9&rdGv5M>V(Ye..,xbv0do-R?Z!HL[pTm?v/Zg|`5GezH2zFb)Dz8B');
define('NONCE_KEY',        '}ZCMV[VD<a-u7!B[&UN~SSs?3=E>,SLIrS0xeSk.#;]F6u*c/jlj3>Pvc/ceKMu}');
define('AUTH_SALT',        'K*||{Q${5:iW $>v-YHC .SW8dKdv7xH 7Q.,hm%#p:A+pB@Io-6&DF[;vqYM [w');
define('SECURE_AUTH_SALT', '4bpbREyb!U/z^-#oD2iR$BkU[mDEw-td-}r2&Cuou3nM4)>L*QQSJ}:N)+3/CeE$');
define('LOGGED_IN_SALT',   'c)=<D!Iu7Q2y3U%:YzmlV1kfS4$*->|@IN+Y(e@LnrDsN*-yuI+&])+b^G<Fec:Q');
define('NONCE_SALT',       'tk*z<$2XYw|J,8;C2RDx>eI}x^?<yH=W_95~BeCi1@$WNuM6l*hv_kg>gOzj0|GK');

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
