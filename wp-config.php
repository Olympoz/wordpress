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
define('AUTH_KEY',         'rGH@v@pUN0V.iWaVgvJSb6F>9ZC&,Dj+;1RB` ^^.,@VQ6MCJVk`Rwma;O={N/M3');
define('SECURE_AUTH_KEY',  'AVWCZ ,rMFK6i0_WSNvy)y%BCD0.M_;,vG S?4?Si1l-Q!]}L_+WFvwKBi>X_re&');
define('LOGGED_IN_KEY',    'v`X,mb|DzkoJvQFN>{3RJ:apNVo_/x*EIvVR|.G`BL~!ya>2]8x&Rrkdx7%Mn8aq');
define('NONCE_KEY',        '*^kW=zEM/|5iFb_=|-b7t74SM5Wb}Y~w&PfFI]/yl37#F6>trB{ibA7pFBrv++AF');
define('AUTH_SALT',        'K=HfGBh.@&.p=W9tp~8-_e;5o<||DbM8KN~r1Wygkt{~M:+V>S{XW<Fgp%kOH[t?');
define('SECURE_AUTH_SALT', 'Y8w2GQ-HjF=&b{=cE<[^)^ZDtUR#VgAGuvXPcqe>U2EFECCU4fE{Q{W}v%<Yjn2w');
define('LOGGED_IN_SALT',   '~K,~(c.Lq$h0RSeRMM)}P_6kWyCFJsp}k-dHbBav_XRl.7tE]Pb_|A(-4Tk>0j64');
define('NONCE_SALT',       'J}v9w={)k){5`wyA0l5@|2L1{R}`;`%0$t!;vWAUY^qsN@QwgF6adJ&4|P tag6;');

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
