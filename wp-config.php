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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@{elQc(]uw8%meD#N3!ZC]?Q-A Bs#/LM5W}IfI)/5UV_>RtRX*Fq/zJZ5/O0IF?' );
define( 'SECURE_AUTH_KEY',   'T!.p-h8S,j4O=`6pv2vV{E|J9:1?8s]eW6qrpJ%r%vad3J4^Pn~04Wl[XSy{?]~ ' );
define( 'LOGGED_IN_KEY',     '/OkW![Hy@(u>0diCz&lo,Xy&|gm2.,~tAdp9m*ja8;7mTiGce+M+eda3|i2{92F+' );
define( 'NONCE_KEY',         '4XqVm3$*1VkW3Vf]]?yyItex b!qmc+N&}PYCT2/[$%NW^jz6Bu7,K&mA]UEf7Aq' );
define( 'AUTH_SALT',         '7fNw2eauH%U=0m$DcL#g+KL-_Y~ dIc??TCXP**K,+vYQRmzU>ae -Lirj&f^AzR' );
define( 'SECURE_AUTH_SALT',  'Ex6eob#i#ZN5,o4b_Jmp:]{XS-;~?gZrpGe)qAlp5*10R7Rab5NUwkq|aSe&f&H]' );
define( 'LOGGED_IN_SALT',    'c_KvrQ;,>An1*O=.VA>ou4QPA55;;kWFkbCZv4+(u{3@v.H5mJ<^|u19#do|$Pt0' );
define( 'NONCE_SALT',        '/i:Z=J!?/n0o(~-&M|xo%e{fX51QKfx)!X?3:&uR2p6wxJi9>$hdZbVr.uo9Uru^' );
define( 'WP_CACHE_KEY_SALT', 'Z6#(f.RN*r-)C&&bwZ?N$ba/!Pi<S?wu<VBGQn~|#}[d|<ScW62 -Y++pyXsd#7,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
