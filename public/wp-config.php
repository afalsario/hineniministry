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
define('DB_NAME', 'hineni_db');

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
define('AUTH_KEY',         'WWbtWQ<#xz8MnUR;5l_|k3>n7b0nlp? s6-QYj!7zO@)QSs_|1Um!Ub_7&cCX-%}');
define('SECURE_AUTH_KEY',  'mF)+kE)y!-F.F]b7q$iZnA4qJ{v(,Uvza3WLdHG?,j!yC;>dS,?w8sv3Ep@|fDL`');
define('LOGGED_IN_KEY',    '(;Q8`tci&!<LGdtSyEYCtPHF7hKi/*P$sjg O_B2HK42?j|V%Aapt|L}7~_d9:$8');
define('NONCE_KEY',        'xBDF+-!kN>W1#TAIeH?~PL(j:+ HL9jA+NyG{,No@nOKF9WIK(91i/hBF6FL3*+1');
define('AUTH_SALT',        '$1nyLbZuUq*/X[S+lWkij}#Ws#m(#q2T)[3++}N|oZW}$:;Gkn>yxf &:(PbepZ5');
define('SECURE_AUTH_SALT', '@Xieb71@cuiXr?HxL.w1<8{>LAd:SMau2wu~<i=}}RA.^^-)?3y<PyTYdH3Q(2c{');
define('LOGGED_IN_SALT',   'Xoqb]=C&W9xp=2bn!/yUCy~E1fs|v<btHO]}E[$>,)c2HVA+/.0jpq74ti5`tb+8');
define('NONCE_SALT',       'qzu|iEnwdd!r4f?U(wf4}XY@|o/-EZ{pg|^b=)*as=DX#-9)QbH}Sw?XTUk2uZ+$');

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
