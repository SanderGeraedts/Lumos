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
require __DIR__ . '/wp-content/vendor/autoload.php';


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'starter' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );

define( 'WP_HOME', 'http://starter.test' );

define( 'WP_SITEURL', 'http://starter.test' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'kd)`Zeb~7}}5kC]U6IgPA9^<{qjiIKi4/>L-9~n3w|)Kx*;Vt#NrP:qbzxu{Gqq(' );
define( 'SECURE_AUTH_KEY', '}(P^5Icyo4tr}Gb.jH|Sd:){!UsRIGM<.zj>F1T*L.xHg`-cg8{HTxb@j1l89R!K' );
define( 'LOGGED_IN_KEY', 'Q.5m,fnFR>K8=A!xvE[Ho/oFZ>HT3yRs:zv~b4vZk6>Ve($ImtGiaO>@-~6>$uta' );
define( 'NONCE_KEY', 'rfK|x=5J:iYg%k!<Jf=H1/hLm_q2XnMq1-sYBoE;JW1%WnrH>Gd7o5)<(Os*K!!e' );
define( 'AUTH_SALT', '[mvltW!PJ+ur?DaF~kN6j0Z7%l7Q%wH+Vm^1d;OTTElv)@t.-;AGiO|2tSE>I.dk' );
define( 'SECURE_AUTH_SALT', 'N8,g]919beRxFTxd9D~cOh6b[a>K)00pP::F,;Ww}I$#,08ExM(4)~e(yumQ5jUN' );
define( 'LOGGED_IN_SALT', '+Lja^B@<s.,@>:wd0c=|-h_1/[b0>c}b?*}/h^D!@tdOk1y|XUxd<CYA@u@S}*a=' );
define( 'NONCE_SALT', 'Wn<fu6:n&W)MKfOw#]mhZXci+i&8O%;y=r[Z>wZWA}F9w$xq4vWZT.B<&RfMH}Kf' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
