<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ganuongcomlam');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8)zKS8iKIjMkn|S1bGXsD#bSL.RS!vRUhm}?oKX(~10=$|iW QTmn)A <<PuSsZ<');
define('SECURE_AUTH_KEY',  '</fa|8pl9 ,SO~uMEfU;^jW$yrjZFB Rg 0vD7w}BgFHc6|P^yiN>Ca0{AO.k)sc');
define('LOGGED_IN_KEY',    '>l%T3|}p-5K*-fGqwsf0Qv>`LC>hm,L (B|,c>m4!cBk,D@%X!):bI+I#&Y-l76w');
define('NONCE_KEY',        '69Mk)|HJ6o;NiF9tuAq#*95)pWA7/B#GTd~~UuD&y{MZRT5{)gDB/jf&r:-^r-e;');
define('AUTH_SALT',        'eH)rj^lg%|yL,UtBf|Lb+bKc>5+85jJc6-EqoU;TypgX|U_63~D6J~$l^4Pb)Rg`');
define('SECURE_AUTH_SALT', 'L}~j}RHwE+^A mXwt5pB=HH4{,V`  ,r5:YHd&oBa$N8DG~^qIPOTf;{ECy)%5_i');
define('LOGGED_IN_SALT',   '}:u25IR8_a-vPYeiO{<o{|:;C#Xyu<#QFB !|n~>[t*ApgE:A^/BD6hj>P]vU?gZ');
define('NONCE_SALT',       'ttIA<7C8u,Zr`{K?6Lg1L!L$BA;}v?kLqpIc|`DLZd<=|Vk|JwGdi2(y:T2AiO^&');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
