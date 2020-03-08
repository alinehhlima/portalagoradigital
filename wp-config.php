<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'port1871_wp' );

/** MySQL database username */
define( 'DB_USER', 'port1871_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Er1IfUcZDr7sRwV@' );

/** MySQL hostname */
define( 'DB_HOST', 'port1871-wp.mysql.uhserver.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Jt?Z^Ml` =Wui;^~xTc,`9B]1L{Jta#1|td[-GYZ#O(D/svw>wIey+AQA(jmnr(r' );
define( 'SECURE_AUTH_KEY',   'ZT vjnO>byc 2iU(vkYkH~7$lx6eAB;eE%UKm7I#4p+k]}EQu8pnaz)8#C5PNx_v' );
define( 'LOGGED_IN_KEY',     '`yJO<l0Py-%4I)_0:4$<IO@}XU^ZRI(x6e;2cIk4()Cjo7z o1^U#VQR,,}T,<_R' );
define( 'NONCE_KEY',         'ST&z3R>zjhzvs6,nO{[LaNc;3`+@w|O@C `p +:<aqh_!>BdZb0Jo,]&3S*)p`=U' );
define( 'AUTH_SALT',         '(gRVNSmnqA;Et: hR19Joye9nT8hAI{#ek}2wtiI.*}U$8u,,T7b|-[XYU`)hN{p' );
define( 'SECURE_AUTH_SALT',  '#(dJ(Kj< 2RF=3: 5HE{r?D#27[~D{^&W-XQpC8cZ?y1kIA*o*.Jf>xo4a}*mYJ4' );
define( 'LOGGED_IN_SALT',    '`OVvJN~Lt%j8P:Cmc3<P_7:]A>jJ xuV/Z>w/>hI0.WaEuIc)c,tCw/!~.Csuq@p' );
define( 'NONCE_SALT',        'VQHGC<)e=0hCep>^ da-3h$oZe_tWvy<Uz. -d<K4Sw;54kT&rIW8!l<s~1@.p= ' );
define( 'WP_CACHE_KEY_SALT', '=a/bW7lg`f-^iobU?M?cf t1V||g*5H*;qJ`TRw=<:f{ge%aZ:%cvK%p_eQ)Q&/P' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
