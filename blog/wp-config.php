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
define('DB_NAME', 'bikalpa_wp145');

/** MySQL database username */
define('DB_USER', 'bikalpa_wp145');

/** MySQL database password */
define('DB_PASSWORD', 'p[73j2]Spm');

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
define('AUTH_KEY',         '53fhagpjmvnv0xbvcp2rxslbl0xql9pglk8pudtcpcdoql9d60rmohid4cvyhf0g');
define('SECURE_AUTH_KEY',  'vtv6ov1uhbkuofeo5tfx7uhypa2lztennzfuktjcvy2zhsif2tifunjdqi0iggvf');
define('LOGGED_IN_KEY',    'gwvvqenmod4cx8emwfs3pt8zcnnlsbpffmxy7jjlzmis3gb42yzusrsmvmqb8nqy');
define('NONCE_KEY',        '334d43jt1mrkrjgfnk4aspdhwx6nqvszq3kc7vzdupiwua1vkhwrxhv9m1agb1nq');
define('AUTH_SALT',        'mclmhp1duvcdyqqvddc9fdaborhkbetuquwy0r5xxnixguzpcwebhjmxjhefl26d');
define('SECURE_AUTH_SALT', 'x4xwzyem7ae5w3but2zijy7yj4fxaf7kq0g9uz28thykipyzftnijimqekdkewfb');
define('LOGGED_IN_SALT',   'xzwh1jfupzjvj2bleiqvok0thdojxa6n8gondnnuzg9wylrx0w7eqwgctzielckb');
define('NONCE_SALT',       '2k2qkuk9wuo4rngncjiycww0on5xg89c9sa4m6cdwbh3ghyzcxz7cwi3k4qi8djk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmm_';

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
