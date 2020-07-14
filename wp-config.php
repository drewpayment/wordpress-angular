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
define( 'DB_NAME', 'afi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Ti>@VsxZ>rr4SZ+>gI-)J+ +DYcy4{.T;-jmIewHx,o`#x4)K|C=p>F|D7L3q]/[');
define('SECURE_AUTH_KEY',  '.xr)Ud4TknpOqnK+-`}%=0M35oaCDq~Ti. 6oyDq2z}./aMf{yTjFkFGG_+yK,W~');
define('LOGGED_IN_KEY',    '<m7/M@t5bID!Yk>G4Z^nA!sA^-RRz4$tyGM;~{=qh-dY8xr<Z3dcTNu>v)).%j:]');
define('NONCE_KEY',        '{OqW8nX[E-?I@=u>9&A?Y{D_7xxs%]a`J~ow5)8Kx^/J!;Zq6iO-5}w*Dkwi,,1B');
define('AUTH_SALT',        '1erT/,mmNV<%W%lJMn6bUwN,3bEPk|eE-(|$4(>UHrmjYM+JcxPYnQZ}!~~>2ZE@');
define('SECURE_AUTH_SALT', 'huK1 .N{w+FU0TAt+7|;Tltj)0kK)3X-CZenmzGGj=b3XVC|LSk>^#>^kt.v7[{6');
define('LOGGED_IN_SALT',   'z8a8iR-dEcwGm07J%Kai.kxq|KMQ39k(G%MJVjLI~nyWj{ZV,coYo+rvOF[;}y^0');
define('NONCE_SALT',       'v2]P&bFR.H!5r];MeaBg*!%]7rWwVhDOS68UK@5LOM~IMzi8s+-aj+$MPOJNnbt~');

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
define( 'WP_DEBUG', true );

define('JWT_AUTH_SECRET_KEY', 'secret');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
