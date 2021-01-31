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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '<E9kW3J3qmWT/F%|5<1dk[TF@U/v03Vhw0,YIa9w #/1~xsJ*%e8:{7EhI%6/&D,' );
define( 'SECURE_AUTH_KEY',  'dExY~gZl#u!VB$y>Zd4}rJRrp9f0r5H<#37_H%C.6b&pE0XEB+E$kq,xu81m)Y.7' );
define( 'LOGGED_IN_KEY',    'p>86+c?tq=E+)%7.gdu5Wt*NBMtbf4SIXi_Rg=={nBw~.r_yfQdK#jK-?4l#THRj' );
define( 'NONCE_KEY',        'C{t1B= jfP/H4>6$+I&.R{=}u;){@O`to&W1z9j@= OCc{tOkjteGS [`IJH.FB*' );
define( 'AUTH_SALT',        ';Ws!3a5OOV-_@l]MQg(B0{K~TO]N=H^BCW|nz8/`mDq*E&V_/{U+<hUx0ZkZmZ9Y' );
define( 'SECURE_AUTH_SALT', 'HZ-bUTWGx=KzeaAoI^p{E!dbe/8M%f5(5%^a^fs5yFfC87SzTIdhY4olmlO++ /2' );
define( 'LOGGED_IN_SALT',   'Q9kNb9z*m9i&b{Frm:Pw)>yQN,H+j5s.=}d[cw{(/,8:eG<{K5|tb^ud1)P3?z(W' );
define( 'NONCE_SALT',       '_|b[S3(ASn`qYx!8|y2lmPi-t..u%<<yviVtZ1piI)wHnF!*uR]PtX+xe PE+_8Z' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
