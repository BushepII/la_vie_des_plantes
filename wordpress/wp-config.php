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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         '~rtI3%6D{`8%@+S>X0mNf-F6D/=Js_) =VGfVyk&fZ@TE?isegKHTt2PKkN>LB$}' );
define( 'SECURE_AUTH_KEY',  '8 gg<d1_ ZwT[BmHzHqzWvG!H*_>nT{@&LXS!gL2o1<ONQkaag>Y!)_{qY(~DJl&' );
define( 'LOGGED_IN_KEY',    '(c^i~*@[]c rdAi)HgYgG-Tn+5.)4IwAv_zlS`.UV%?NF3)E=(d~m?.%{XJ,?t;(' );
define( 'NONCE_KEY',        'KijSEU,+I+8n[i[lFirg|U :W+pSJZ^,aLo~ThQ)PV]S+8v>|IlqUVz[q=nHvj[|' );
define( 'AUTH_SALT',        'p#|mYVZk*j{VhPbxTDOX(U&ewqwCSu<nOQeWH/zJUhxb9]~Ni%v$34W-5)5pU^aw' );
define( 'SECURE_AUTH_SALT', '>r6&~yR3.ojs}pwDLf4eS)9FV.=&)?yfqO#vYQ1BJtkLyQSC]<~Hyw~xRj{>tbx4' );
define( 'LOGGED_IN_SALT',   'vRA*-}YP&&V^o4L,$/$EeF(.Pp,>BC/=I?^.bzU;5n7p;,ZgzRb1+YZr8$cQRGxs' );
define( 'NONCE_SALT',       '^.#w4~<,lF# lHNF)n_><.J1(O=wC:e)#Z3N8+`_J1CM}ecPTd<n|nRWd%w${jdE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'mp_la_vie_des_plantes';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
