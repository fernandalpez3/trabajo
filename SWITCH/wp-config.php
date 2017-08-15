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
define('DB_NAME', 'switch');

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
define('AUTH_KEY',         '/!zuKz&/]u*+KkHyhMvrDu#%g?X[jip{BoRm*yN]gn-)nx%Cr?W1= !clBM2gyZj');
define('SECURE_AUTH_KEY',  '0;.U,$K$S/e<H]g@w9n-KfDg^#eZ2>]$B$e@mVK|Z8>D&t&w.TXOH$@7{L7|Ja;g');
define('LOGGED_IN_KEY',    'X#[8W;=h-u&1pQ?k-H#/ptcv}8}5Z RH^0u_EQDDo4x|Z=>UY} C`?3$ ]sYf&iZ');
define('NONCE_KEY',        'u+ {i6Z16yar*$;L:Ra8PmC{@nA_n2gpjliTPzN~oZ<S-}*6U16b(< `0IG,hy|V');
define('AUTH_SALT',        '/Sp.T7,|c`@-tU>QeY$^qI{Kn?IMn0v~ZhkQ(}E=81;9P!6=Ps-S3<% 0z0n:GVP');
define('SECURE_AUTH_SALT', ')-Wk8t!G?w~4$/1iNZhkKVp]O9f#8c[~|iPVMXhH:b&;jT}x6||@15WqVJnWtqBf');
define('LOGGED_IN_SALT',   '[t&cIN=_Zt=x=.6Xh$j&,$*y$C$|,D!FbB 35:GnMjJ?2/Edg|o^2_DIjZ&HZBM}');
define('NONCE_SALT',       'qJ,[:u&{{tM8b!_HRF} ;E,+./RSJ/lv$zd0bxYJRem,k)|ruOGyerZ]ITq ; a7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sw_';

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
