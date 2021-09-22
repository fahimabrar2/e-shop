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
define( 'DB_NAME', 'final-project' );

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
define( 'AUTH_KEY',         '>f{EPd]zA@WBM^oLBX#gwNILHvTHP5>7[*(jc>Xv`Vp^(z?a4N4XXm03B]`0*W$c' );
define( 'SECURE_AUTH_KEY',  'MMEPIg6/kPSOr(lox9ZDM68fCEfd p![e#BWacUyL:B:^UU20VzI!#!%35EGLv4z' );
define( 'LOGGED_IN_KEY',    '{3nj Ys4--%)j]$zVCNWGO,IHlv_9AI{yC``UT<76L!kPH-Jh6L@N~3s4b.<ZIN9' );
define( 'NONCE_KEY',        '2dK],dt^}s}%Qm)fbeFFQK$zLN2| *f3-{nz9gef5>(Q)rZhMb8gFLS6;YA*S*[Y' );
define( 'AUTH_SALT',        '9N)>0N*8FcZp:*`jJ:Wvd${z4i8Iz<7H3a,&4tC<bE_>N{mO}@0H`i-L&G{.BL#a' );
define( 'SECURE_AUTH_SALT', 'e^J{ONRYE4`C-ir)+9r?epGbuolWu@vX^kjx{O]nMXJ)l:?{jF[`M3zf(n-pDw={' );
define( 'LOGGED_IN_SALT',   '6/&2T[w-3E-o5l o+FOiy/M*aGs(q2L[r+WcGI?88w2,tAVM6[_H)^13w1PcR@=(' );
define( 'NONCE_SALT',       'ZE*rBqm(e??z;|{?;4}YJx]5Cgd1,`uxV+W+YnVGwar3(M_e&_Y3zTqu>>vNxfx0' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
