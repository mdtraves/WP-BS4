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
define('DB_NAME', 'cmaadmin');

/** MySQL database username */
define('DB_USER', 'localpma');

/** MySQL database password */
define('DB_PASSWORD', 'localpass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'cx-+/Oqx7fB}J?83y.1e+7UKM9bMHYF%||nBb)$ZfZYvSS+p`wEyVYjW*;E1XNh<');
define('SECURE_AUTH_KEY',  'MI!Fj_QQo 2MQ3T(g/Z`xW3MZ<06?K1WC(%QocC.< KT`w*Ky^$R,fakQp,bua*[');
define('LOGGED_IN_KEY',    'TirqQIVH*Ml-{/HR[Pt-Nq1/~l`wD`k)eY=o|>b]eZmJWu{}4m#h~,qXEz0IZ)D8');
define('NONCE_KEY',        '6meDK<Jg9L0[H_Y|689FRH7fPP&4%So4=`Zsw=?A@+!w-`2>$*4%Z#|L[C9oY$kt');
define('AUTH_SALT',        '=MI>#:.JyMp(ns}oDiN3$t|<W37@lg)X0`wbeFe9:.V0V!)V2dno15+}~CNJ*[|8');
define('SECURE_AUTH_SALT', 'mTQvU,9z-6_ixoN2|b=fB>kE|oavK@._5T- @!j(%W?x15eE>Z(&,,_qw9q`W#,1');
define('LOGGED_IN_SALT',   '7RQH%Qq7{Gq)hNrG&M=q<JQo/| $ff9AH&pVtwy;sB8De:=7(]UCTE-j2F^MKa3Q');
define('NONCE_SALT',       '*%U3sv#T5Tjbi<k{ZR@nu;eobXby:1@ .!PcMSN./$oag.DTTBBSrP0[*oJLx#2!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
