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
define( 'DB_NAME', 'marlly' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '09698be04545e2e5f2413162500be5be79c99e3fd8649752' );

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
define( 'AUTH_KEY',         'kr&[@ibUH%n}/%l9F5<js!ymfqnf,eR 5_y).M7RBr:QLv:B4*FH,@~6DL{^t912' );
define( 'SECURE_AUTH_KEY',  ';Nmp}3Gcnj%xdVhrE*1V//C5dF%p1M0i6p>5 Ml},&v+(Is4uYo<l2`phdW@qP&Y' );
define( 'LOGGED_IN_KEY',    ')0v}yb.6sdiTW!I3*Q)w,_[+[@`=ijt|#jH|4+l/QncL:f0`tX`H92$qVY?+wl(%' );
define( 'NONCE_KEY',        '*tL4EK|#g,KPr$9F*V5fAT2_Z>9VOqr#)F5g):b|+c,`9!I=B}qQEj,CJWAzJ/Kx' );
define( 'AUTH_SALT',        'mP:g=Wr,KLG[{POTx/w.}]n4VH1]=q )WF+AnY:._h et![5^rUUfY]9Ylst)KUK' );
define( 'SECURE_AUTH_SALT', 'F<%[/7u6:@J0 {}}@N@3&%N-~E(t0r)nd/Q}>sV@7Gg28yx(B<g_*6&61`9EM:X#' );
define( 'LOGGED_IN_SALT',   'z/B~&oP-%6pOKi.FE+}<]~nW&1C|@1E-M|UV-.@{uv$dE[I@e>/WcPpkf/53`jNS' );
define( 'NONCE_SALT',       '|Z}^VT{(1IN7 +,s:%fV.pOVo?.AQ#cx+BPg_UYg;[.(RlWh7^TgNI[=sW%7eI98' );

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
define('FS_METHOD', 'direct');


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
