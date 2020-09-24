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
define( 'DB_NAME', '***_***' );

/** MySQL database username */
define( 'DB_USER', '***_***' );

/** MySQL database password */
define( 'DB_PASSWORD', '***' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

define('AUTH_KEY',         'T4;NW)KDUlpG``L2o@,3^O@`|J?+Googletest03=.5pHaGI1OMF=A{h:8m,>TQ0');
define('SECURE_AUTH_KEY',  'Y0tFKjIl=ZQzyu@LV|S]dcS#d}|$GoogletestlVB]1xX4}5}P9#Qkri*pMq-O-b');
define('LOGGED_IN_KEY',    'C7#RE7nk`lyd:bJ$W+7I4#:0)$fZGoogletestqx5Ji8E)I*BEK&SvFd,*?A{y[/');
define('NONCE_KEY',        'q-L0@7-|?l 4H*8)JeQnABH*p`2ZGoogletest5bK=,=5nSe&`w,d&q++0x?E^f@');
define('AUTH_SALT',        'W9u|fAEPgrk{OdASneWNiUV/GoIyGoogletestRu}SS_Cdh^H1sd++aMNMRp}z|f');
define('SECURE_AUTH_SALT', '/),9YCw92l3,}c<L.:(zk}bW<8n}Googletestu0lviKSYA@MA$nAh0QgZB+,uAI');
define('LOGGED_IN_SALT',   'bs(noE+f}LpEpKOeuOV4&o,5FiH@GoogletestGiz`XZ+gOL:P&+iu8$l$I>$+|o');
define('NONCE_SALT',       '(]r`-(]hW$Gg2%6 Liq58!1f>jdmGoogletest@*$}SJ6,I)9p.hRZ5;X{{XX!Bj');
/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
