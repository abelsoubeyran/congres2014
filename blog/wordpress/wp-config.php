<?php
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
define('DB_NAME', 'eclais');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Bw*9Sec;vZ-o?+JE=7PEkEMghsp>83#oY^f?Byz%h7V1;=#|e`&NmzSd1kt4 :Zs');
define('SECURE_AUTH_KEY',  'N12R6-u|z4GOJlaL05|B*ee@<W>X{:o>%ifd9{2B6P/ N@Nh68y4VIIfOB|~YctD');
define('LOGGED_IN_KEY',    'h(L;JLL;O]fT#8kvj1R3fx++,bueYGh83~;0<gWO7wo!&oUjBf#>7t5E!)=76%*9');
define('NONCE_KEY',        'VEp_br AG7h66{F ?M%%gKs_n5^Z&a.GK3XVSU$SNf|046oYuRYL yyV)n.9kqSu');
define('AUTH_SALT',        ':m5dV*Tp^Fm27)?FIEz$b1}{5cX=->qkcfhsEp #cFA%*iDt>vlRt8{6 w6y)9&m');
define('SECURE_AUTH_SALT', '>]#{v+|%-sg:)1&3p6W&:B_[R#Gj[0!0AD%avRP=*#@&OweZC.D1J3na@f00Uw}E');
define('LOGGED_IN_SALT',   '>#bLjnl&sXl@6-H)8cv&Cjs^s1rNj@r2:$[UKl`+9ZvKZ:]$Oh)O1C|}L-(hSUYh');
define('NONCE_SALT',       'VbaP<~KCVH$?-vMh(a;bNWL4ci;2AXB,T~,Q@,hr@oz_hug_2`C]>Hz|EK|{o6${');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
