
<?php
/***
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'proiectlink2021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '-#^PTg#^u[-)#*P}m)^g~l9Iqr_6Nmy;cbOaseXiCR$:xTz;l(m8/0c%pQq340y2' );
define( 'SECURE_AUTH_KEY',  'N9 7edwO_4;HV&KMms}jau=Ass_%pno/o.~$Bt/^Y(?cp=S$TGw[|eM7i;xS{5`F' );
define( 'LOGGED_IN_KEY',    '4qfRkC)+7 f/m(Z?H*L]!/|RGEtaVhNP27=s9%)$xS x4Oh&AzM6=DJfnS7&$PQ)' );
define( 'NONCE_KEY',        '{*4JPOVBc=k^d@&YT=Sg^f$u_RX$tLaT_PJM1p?Ptwcy+nIU%PBpGO|JK)Nqt|3G' );
define( 'AUTH_SALT',        '7-uOj:x9x)LDCD:x1=>1vZdug`P2iW=85MsV6YIo8b.L?wsYTjrJUEIq_=77zeiz' );
define( 'SECURE_AUTH_SALT', '-VRtXCS[8Xzo:+=].]d [9g0]Djw$`c$D<m@<*tMlEk>eig5XQh!SCEh w9?__I!' );
define( 'LOGGED_IN_SALT',   'DPnLlGd#/0O!3cG&-Tx5&^]H:@k#EAy9xdH3Bw5%/_uiKTh(SLOihb{bw:<T4e~o' );
define( 'NONCE_SALT',       ' 7)T;dxe,_x{&%$~I~hJ*vZgiN< RkFg/[NI%`O4:1_T0&-.yyIcQ<j1|la$bJC`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lap_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define('FS_METHOD', 'direct');


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
