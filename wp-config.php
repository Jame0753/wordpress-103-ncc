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
define('DB_NAME', 'northCountry');

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
define('AUTH_KEY',         'zc(LUhQ(d=VNn%}nko{`^ub*^L,YK!(u0KZ5/^P2IP,U.B2dH,.*kmM`G@qdu@,T');
define('SECURE_AUTH_KEY',  'v>`=,BMew}W`c)u26wD!(*;d/>vdG3-n0Nx9*hj2NtO)Rqb7h_ya2Ll3YS$!|>2(');
define('LOGGED_IN_KEY',    'sH9&TH_lER*Pv4BJE)y*}cFy#$)zE[{gW()xdw#t,+KUz(&gz}VFgcI&-un=p ?;');
define('NONCE_KEY',        '9]&CA!39P;O0f8&rbuND~F8.c&+z,,V?m6rm-)tNfD]:GwSf2+wXP[UEQy VR5p*');
define('AUTH_SALT',        'A*`-)|>Ej@DZ.[]|T@hh7D:@O?+HeFeGOALW3QLoxv8v: D$tSjjNYio<;l$>skf');
define('SECURE_AUTH_SALT', 'J-5]~QJgf+o^aVNJ;igQI|!q<{{ViaeD%|}qD]1VfY=f_yqJnaH%YgzW};jo#e0T');
define('LOGGED_IN_SALT',   'j~QQ~qy8! <M}NAOsN]dl.fUuO8! @Ek5#8G+2<0.}I{^)+mt:G`G*8,]4H&!=8:');
define('NONCE_SALT',       '7E3Y0B4UKVp9>l4|1B`;?FqFgy-bDTWVqG,DqI1;iM>pO5XIsYD=Df&*jqyz3=FO');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
