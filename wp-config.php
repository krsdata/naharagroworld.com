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
define('DB_NAME', 'naharagr_db');

/** MySQL database username */
define('DB_USER', 'naharagr_user');

/** MySQL database password */
define('DB_PASSWORD', 'eQDCAuM?TV)M');

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
define('AUTH_KEY',         'coDF/ho&M![$|xQHf6J^=]QY;a[KRxus@tXIQMnc{R#Ti]+y.Zp^ ,Z !j9WE 3`');
define('SECURE_AUTH_KEY',  '0m~H!<|O|+8Q@,g`2vH4bmtLhtlpX8 g,sw1nH-c/_mp!5q-M&9}DAFt=CjoX4t+');
define('LOGGED_IN_KEY',    '.`4@ymQv6lvkp9gD-Q4,Q=:LCFrS7wc&TWl7D}_U8kDv6sUCAbm-JyF<8CF1H*H`');
define('NONCE_KEY',        'E)JB_caK_2q-B_uPUQ2AcJ15Q!~h,e5 q)(`/YEF-$?}VEr&X_38)T0.msi`?%%x');
define('AUTH_SALT',        '@qM{=b2YCa**6W&Q;:#jgmXT~rL@/%4{ CMAJHmYs,jU)G6Wf=[_ KVQ{<!39ye2');
define('SECURE_AUTH_SALT', '4iZ|nOh*sVW2u+;vp1E185WN?(Bpw Bk>6U^C;Cb4-&lZ1l+nTu}2Z{.S0uK08MP');
define('LOGGED_IN_SALT',   '8Dpu]NT/St0^Z9}M{x(bf,fS-l hh?JkUB;;JucA6G$![B|] <n0Xs2_A-&9mU,I');
define('NONCE_SALT',       'Wn9bb_kx8?<KhZ#hYMmPu}r8?Vnj36;Di,zzd-_kcKzP0;aQyp@  n8Lz|r1TF#>');

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
