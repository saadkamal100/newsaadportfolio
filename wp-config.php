<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'newsaadportfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Njmr1WcgeYtd5mIJ]k>&-h;@I#4EK -R?lvBT$}luns79%Q1%CX]%g~>ycz4yHJt' );
define( 'SECURE_AUTH_KEY',  'A.&[&Aoc1D}-7)s_F}FePL$kJmA!~~e2=*?{-L%<JLGcDda^q=tbFi0:?Zo6_+B)' );
define( 'LOGGED_IN_KEY',    '<w?2|HioR_;k=9U#^m8_ED{I`mn},0P(OF4h],a&o/fOosYo)?/:i5x5Wi53Q.62' );
define( 'NONCE_KEY',        'Sd_8]Bx?dwAQGp5Q;zgJH5?a<pRdtk;:c(tT}14vpic0M9XRPwxQ#&3|aSMDUPho' );
define( 'AUTH_SALT',        'G[+1DT.lU:uH}`HCM/d^; *6nc.3`;`f$o}G5(9#u33@}#FW0Wa%*9a;EKKUAEBC' );
define( 'SECURE_AUTH_SALT', '3+aN/SUG?eE3u06J]^Qw^qe.^k^EoLWj)}QIdT_b+^u2[Ut =o}/MPLU_Fk=WYLM' );
define( 'LOGGED_IN_SALT',   'CltT#GF l*Hk>d!dk8ON IE*gqR$nHLGe*mQ<pzGC%Wz-JmMg1$oT++]Oe;$5%TF' );
define( 'NONCE_SALT',       'Eo#uT$[,!e&X{j<iCtJZV]/0*=(y9,6SdLNwZt8L#1ii!<eNu.?.DHode+aEdMQ7' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
