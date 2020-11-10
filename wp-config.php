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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thecolumn_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Y3PW?k>L$f,.y(jKB;3B TZDVzf8Rc/jMr?$=yFFa #lJdg2I~(l6/_i| bpCXm|' );
define( 'SECURE_AUTH_KEY',  '7$(}LkhV(!2v4v3I{w1A%dXS^q^ a,OilYkY(+dS6)?Pk]pJG>3Z?kT17R;zw$w_' );
define( 'LOGGED_IN_KEY',    'IkyyUzGS}P/>q;q%y}OH#-m<Ptowd`ou XSzO&e0P5NnE#{`2EWbGA#3(RQg6yV=' );
define( 'NONCE_KEY',        'h?f0?Mjt>#X$klOPqVM)Mae4XD2}v9EKq|`{Jm91rNZxuC%8K!wk .6Y>|ph2E~X' );
define( 'AUTH_SALT',        'FpeLjF6|,|?4/I{>i}wo/HMWv$M.@^M<XII<dkV|C(M2keJh2rhd+2=O =Gm9Slj' );
define( 'SECURE_AUTH_SALT', 'gQt>d*wWrsp6!.$=*q*iwfGYLB3l*neNOv~6lpT@G*M+jKt/N7.3@dV72P;WZn>U' );
define( 'LOGGED_IN_SALT',   '8KE!qH+Yy+-T/LM+T:!YW@W;[sjVMA>Aax|NC<a^^<^AuoEQL(7{xER6(r8)!/ 0' );
define( 'NONCE_SALT',       ':A}Amp[eQ7|F1#_JR:+s!nu#Xg8h)okMcQ=53[{!&~=9[&1$<+g<0=~f0X`d&N@i' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
