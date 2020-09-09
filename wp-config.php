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
define('DB_NAME', "wordpress");

/** MySQL database username */
define('DB_USER', "suitecrm-owner");

/** MySQL database password */
define('DB_PASSWORD', "Suitecrm14\$%");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'trymkc8pki6hc4yq1kjluiapoynzctwm9xz6g427zwkovpesurgdhkgrsvekilh0');
define('SECURE_AUTH_KEY',  '8rvvpxjstwkmmzh3dllzkd49qpucgovxqo6aeim0xvlvcsf5kgieybhzseftem6g');
define('LOGGED_IN_KEY',    'mneotfwa1othgwrebwxn8cvligh2vsbyz60kutblp2mepnwkj38sp3pqyvsaeqhd');
define('NONCE_KEY',        'xg16uho1ig31gvajygtuneaygxmmbqqzati4uxgnbrlpg9uxl47r85wsjj7iboqe');
define('AUTH_SALT',        'hinrq8dtj0azsgjq4spk3y5gtiwz99dufrcimywsr8dlwwphj5tuvukhafmgg71n');
define('SECURE_AUTH_SALT', 'wgn2sdkjikt8qwfnqvrpca7gkdqov2hjmzjr0gol8lutxvrzkkeosijgazzrsbn8');
define('LOGGED_IN_SALT',   'zpcie9vvspbuppnbtbjtw5g4a0dvmkujhcmcnkm2i125vriecg92todmkzyuko4p');
define('NONCE_SALT',       'ktarys80kl2s6hn79e9juh3zjykgrseyxdcgxccmbqorfewqk431cewcd0daeqex');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpky_';

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
