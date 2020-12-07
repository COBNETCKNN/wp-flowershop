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
define('AUTH_KEY',         '13KWX3b2/2JwP2lAEuktiQ/LkbsK9hot/XOlBam2WIEDmX4Kh0fDF9gWcM8kRaS75I4x1/6s4tjdCmURB/6f9g==');
define('SECURE_AUTH_KEY',  '8LILpxvh8SUuDm21IS+8xm4RDQOpKJ+ADcw+2chufQW6dvcRGTGcf0fnvmSV4d26LfIHP6nFzOGbr7l+P5Hzqw==');
define('LOGGED_IN_KEY',    'NxUeGh3il7Ql5iOLi2++LyIx9wZeok8RTartUpC81AN/Hfr8IfZLZ+pAH9GjjMY2eGsE627tKkYLsTUioUB8Yg==');
define('NONCE_KEY',        'B/5oVfoHa476LjK/koRrqtgGeMq8/E67cyHF9gODJhMUG/TviRSIG2e+/wcxhrZHTqfVziJeJZV1u9rR68MNNw==');
define('AUTH_SALT',        'fOoGAH68Q0z6L99JoL8ZPb8BRn7DpseOAL4VgWCrjzqKg1RJavmaH800AWliZsW+si8H6qIF7AdAgwHMYtYKbQ==');
define('SECURE_AUTH_SALT', 'KSD5RJ3vaWTqKLCnL1q56z77yLFHOrOVFN0JSh158xfacXROVxzf8TbykrS5Ld6Gf8Y9sQXVFcvC/XPxArvDhA==');
define('LOGGED_IN_SALT',   'sKLCVO4FbW/8Ofr8b4GU6Plc+k79p6C3CCp1K9Q6rmnehBFFGCOFY9ohUsu1Y4PQasFiV9a2HKqS3pfpflVUmg==');
define('NONCE_SALT',       'tvoC0iWag8tR6JZUC2z7pZSZCdL0pYWcG/9pzx5+NCZzrTUgJ1J48SPB40J2X3LJOsRZB3Ldr4wFIE9efovomw==');

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
