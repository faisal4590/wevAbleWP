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
define('DB_NAME', 'filmsWordpress');

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
define('AUTH_KEY',         'Fe)&n`-3NxS<fV1U_4<-S#{,#5*r9(fW;Dz=.=;L8g|``c0yqZol(j}u<Oh%ayx0');
define('SECURE_AUTH_KEY',  '5Hmu<SZMTaqM,.zi`kCgl]O$?`RZKj,U} L&:sK2x)qHS[F|,|BWqdN<P+x,kcy~');
define('LOGGED_IN_KEY',    '?VDg|_Eq?8nE80dQ A$y6vi5R|lO 6pPf+Tm8ls2-ON{dE5+(Nh8MZJ/7,ZSJ$h(');
define('NONCE_KEY',        'hQA+,T>qn@7Fsy#?o-%YG)S$^KD>6.*Ul}&@b9xRSm(/OV(_[f^jpMjHTi]sU8j{');
define('AUTH_SALT',        'T6$-b;i[fC]2SzWR+n}f?<~:0!$kS+xMDp%lT+;?s^$XT4kl3 @^qMu6zYJ!vnAB');
define('SECURE_AUTH_SALT', '45Lefxis.%`[i1z27=Uq{(0fv?.e{FWHh|@fktD1<)cae$uH-xaW`E{pF,m@7O5l');
define('LOGGED_IN_SALT',   'qR=gE.ZeXU^!]pqI4^dJtVs,:w-?)7WEbS8#=~j7Cmv.<0]CMv2NONKIx/U&QQ?0');
define('NONCE_SALT',       'd?Yh#2#0qH`Dx=h+!@<u$Yog4le1LUhu}Ee@#OGeCST}iS_-G,Dyy81ct/Q)vH{.');

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
