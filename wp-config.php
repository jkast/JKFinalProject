<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_jkast');

/** MySQL database username */
define('DB_USER', 'jkast@scu.edu');

/** MySQL database password */
define('DB_PASSWORD', 'Frodo123');

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
<p>
<span style="font-family: Courier New;font-size:11pt;color:rgb(0,0,0);font-style:normal;font-variant:normal;">
// ** MySQL settings - You can get this info from your web host ** //<br>/** The 
name of the database for WordPress */<br>define('DB_NAME', 'wordpress_JKast');<br>
/** MySQL database username */<br>define('DB_USER', 'jkast@scu.edu');<br>/** 
MySQL database password */<br>define('DB_PASSWORD', 'Frodo123');<br>/** MySQL 
hostname */<br>define('DB_HOST', 'localhost');<br>/** Database Charset to use in 
creating database tables. */<br>define('DB_CHARSET', 'utf8');<br>/** The 
Database Collate type. Don't change this if in doubt. */<br>define('DB_COLLATE', 
'');<br style=" font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; ">
<br class="Apple-interchange-newline"></span></p>
<p>
<span style="font-family: Courier New; font-size: 11pt; color: rgb(0,0,0); font-style: normal; font-variant: normal;">
// ** MySQL settings - You can get this info from your web host ** //<br>/** The 
name of the database for WordPress */<br>define('DB_NAME', 'wordpress_jkast');<br>
/** MySQL database username */<br>define('DB_USER', 'jkast@scu.edu');<br>/** 
MySQL database password */<br>define('DB_PASSWORD', 'Frodo123');<br>/** MySQL 
hostname */<br>define('DB_HOST', 'localhost:3306');<br>/** Database Charset to 
use in creating database tables. */<br>define('DB_CHARSET', 'utf8');<br>/** The 
Database Collate type. Don't change this if in doubt. */<br>define('DB_COLLATE', 
'');</span></p>
