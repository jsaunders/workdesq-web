<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db184334_workdesq_dev' );

/** MySQL database username */
define( 'DB_USER', 'db184334' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Pmac7100!@webadmin' );

/** MySQL hostname */
define( 'DB_HOST', 'external-db.s184334.gridserver.com' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'wXZXeAJNm{+U+K8( _&Ngq+BVP(h[x>QTqUZY)4y,!+|:6Qf^}!&TNhxX>s(Ne)H');
define('SECURE_AUTH_KEY',  '5a+<QY!DxIs<FT53hJ<)<( ]1W$DJ0>7-Cf,--.NX_:WbX<pu]-+p3t[|NT!x!sH');
define('LOGGED_IN_KEY',    'ALo;:N-Pk35?yY>F?/v0c`T+=@|7`k ReDtte?ILV@-D^3Jn7>fpSvhP5g$Wc@2v');
define('NONCE_KEY',        'iPmx(:0O6`Hn}0jR-pInNYqP=^{+N*8=]vl3+xUX^dS6lZ{<43`nPDS8j_#[dCX ');
define('AUTH_SALT',        'C`*(=@Yg_~x%Q^0bT{Uv)-T;49N5H#kHITP1tv{-((+<F06%zBSPcU6APP-UDx*K');
define('SECURE_AUTH_SALT', '<q:+1bmh>+mZuFn}#.+OhHuKAHQ-Vb#; -TSO(:Uxl~ODJ+_!|sYWFN?%Js]X#O}');
define('LOGGED_IN_SALT',   '@MBUf1|*#k91]}lw e:lLo`A-P(iGoBK`+! pbOR8~q+(.Hs{0!ay>H=TevihMN}');
define('NONCE_SALT',       '(YAmTsh6&OTIP&xChjXG;K7Y0(!p#A}]O-C8{s8)n-hrvM%3%Gf?-Tt:m0W:d^q7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
