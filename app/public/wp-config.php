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
define( 'DB_NAME', 'local' );

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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ubqusmVhq4XHXoSFtonPehS4366ombe1YTQX7mAcWr/Gc1TkiraseJiADUx8T2nPcWlw2KD2911ssnGwMvxRJw==');
define('SECURE_AUTH_KEY',  'XBTNfh7BMApBhvnUKiv61XlTGTl8pOaJ/wJZ4R5cB8Y+5OUPPAb1ZKA/HrLPhlCKQSWtK9cy+n8s2U8Rgwd47g==');
define('LOGGED_IN_KEY',    'kvzFaHDwl3XPcF0vDO7YT8f95N4cZyYrZH6aH6yIC1ZrjmLK/lpo6o+4VlVq3+izy43tFHxvItsq/JXvdTDy9A==');
define('NONCE_KEY',        'LSaNHWVw55z/lxT1ZnrLeEd0yz/pKGvANQzIkX2HCoAbnlKK7kDSkQav17KjVVkbsbs9zeEBiU5qogVLq5spLw==');
define('AUTH_SALT',        'YkoDcBQgryihnna62avuc/I5pwAFUGhRqf5zrkOoYP7rbVregAN6QWFKUN/bpwsB+8Ja1a1dN0ibaTUYPxfCeg==');
define('SECURE_AUTH_SALT', 'kFJpjYnNimChP3wEcuVPHAr2dqoVA5zS0jOWEPaORtiaJcq3gD45bVc9ZZkD1sxtU3q5esDSMioxR0/3EWB9wQ==');
define('LOGGED_IN_SALT',   'ZBWGONldEPruyjp9nI5FbuszkxXiYeN1qNd9Pss+61/x0RhfCG1fy7NdIx9vYR1VsJYcjl7deakEnjTAg9NgNQ==');
define('NONCE_SALT',       'njiD/VExeT7UzE/xPbRRPAlLEgdnA09gGHzaeL/DKWH174F59++VhvHwfdfEWv+NSq1Y3CaiR+5UpPgnXl8hqQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
