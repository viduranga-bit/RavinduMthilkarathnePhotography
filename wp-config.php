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
define( 'DB_NAME', 'rmtdb' );

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
define( 'AUTH_KEY',         '(w3UQM}G7D6AMKF,}Sl{c@W+E;SFlMh)G3fRRfj*8K =j-x /d+X/0D~!c&YQUDi' );
define( 'SECURE_AUTH_KEY',  '#UBEO]I!J@34rfVpT3LEVO4/TQ7eu[N2l:<r`.TOC:1,@XZ4iv-wv&cAiLUv?A)Z' );
define( 'LOGGED_IN_KEY',    ':F&l2&B!4D[lf^*EJ8CcoG-9|Q`l#X@V%9GI ZSU^n4KD,gHV5H2)>wfD%_+lStp' );
define( 'NONCE_KEY',        'q*$o_fSHMd_4ZgahC%ScDso1lHvPS3L6VVHJ).&D/EY}ddevSt8!%%#4)gt9Q$*R' );
define( 'AUTH_SALT',        'WaWKN$&itL.=nK9No1inm+_%2/]#,:RQa5!,q8;P^_#}j^G~ime>9u1Jd=R</Kt]' );
define( 'SECURE_AUTH_SALT', '#gzUq90`Qnn~eadXKJZGg~#J!<{r7(NIl##_89w<]UTbyd$r[nt<;zi3FjbZgQ+c' );
define( 'LOGGED_IN_SALT',   'L6y@{*bkFE@`VNU?hjf6pMFjyT8Kj%FF&x!%GVPq:7g>~R!176YR]q-G[}.I%<T]' );
define( 'NONCE_SALT',       '@py($95)PNSf$&mC6Z2Q GImCzq?St+5RgwUo360XF%~0/H^>8ECw)Hi*r NG$23' );

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
