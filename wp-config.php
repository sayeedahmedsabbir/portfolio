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
define( 'DB_NAME', 'personal_resume' );

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
define( 'AUTH_KEY',         '~g$b_IdMhxET{,S,&%%F@F#!/!m^XjPdB:sW)!u(m1w:!>}q*3P$Wo4.&SD%{Vo5' );
define( 'SECURE_AUTH_KEY',  'C eJ}OoZ:<9DA9[<ko/p(P5(d@@Z1]Rm[N~OXC(Uv6?-Ex!:OlNK]2<u%A@w9m}/' );
define( 'LOGGED_IN_KEY',    'Tg.2RK+P8 ({|v])9!U|W>0_[=zulj{:xj`jI5qvVKG)`t),YTInCqK]K]?1J0Dl' );
define( 'NONCE_KEY',        'nr?]/4dV{1I)_i*=z3 45a y) 8&y(PmrqxQ.OO29?$Hrm F3IyD-#93cLxD^iKG' );
define( 'AUTH_SALT',        '@(b-+MrfAxDdx`vQ7@a`}1)iQ;#FpS8jM+;d-Pl@.Wz%-m5=d:?&[f]Tm0k0~ag,' );
define( 'SECURE_AUTH_SALT', '!nc/%Vf)XE6t>p=O(xoIN_;0DzY&^@@z!VBwJ.Y//=H;#a=q_?W{0Y@jJR_UQH;!' );
define( 'LOGGED_IN_SALT',   'o_CPAW?c$hBKZqm9Vr]Kna]-g>&8R]#J({L%g+/H*j;[}?5ro~Gw`t<AFGL/__tG' );
define( 'NONCE_SALT',       'C-Uzo0?l{]{qEr^d-$#uT]A.nfFJ9iwn1TA/NX0731_on&|PV}h#13!pN$7XRcZJ' );

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
