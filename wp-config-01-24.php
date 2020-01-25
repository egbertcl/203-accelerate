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
define( 'DB_NAME', 'accelerate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'fd=0V;?*8%|u&y+/x%lXAk =r+oD)Oz{E=`F!u:9&Z9u:nsS%8sQp}*weB7iK_pC' );
define( 'SECURE_AUTH_KEY',  'hE$|t&~6p x0{2yGsi0IXo)7[{471UUnMSmW{]EWxZ$%2` >$cz&O1EBRYi5f}]!' );
define( 'LOGGED_IN_KEY',    'X9 SR+n^`})wnIETld<*M!DLGg~@t4|GON?*n 3[g+Ce0$`=e>:dDWxwe i 9cQv' );
define( 'NONCE_KEY',        '|MmK~#>).>oRXY+p[b*Ie98|lo]M.t064go}PjH<(t55Xjhou MIb.eM!L+SOAs{' );
define( 'AUTH_SALT',        'j`i|Iq$K $82)b/$%(O|Ous>~q4o$q;sN)&I:PBkCg!*E9l>cVN,d2B8wcbzDi0q' );
define( 'SECURE_AUTH_SALT', '8F=7W7!>fE$u!_+`yC|c34,JwU.S)chO*4]c;*y?AMZ6U+X:I^=Zkc]F.zZLRe)8' );
define( 'LOGGED_IN_SALT',   'Nxa(SrGvMLS,26(;t&=EJBUFNrrLi5r-$V.Om@0{p,>SPGtrN20NxHd3*&emj9;v' );
define( 'NONCE_SALT',       'xKp+q-tSo0jrE/FyBS$D.YtFWHH`1_2[@V+-+IHo(XvV0p7 QAxfDz*l9rb0QELc' );

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
