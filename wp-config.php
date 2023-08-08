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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hasami' );

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
define( 'AUTH_KEY',         'StPNi>f+tZ-_P(L0>L7{p305dyOhe=eHR2F8r0fK%798#cv`jpZGI;K~8668fI1?' );
define( 'SECURE_AUTH_KEY',  'k.rqEd94-Pghz$`4XT3e*f-G8[s+#C[B(.ilIlz48uzk!XhV+/XEpVNlLO$IBm~%' );
define( 'LOGGED_IN_KEY',    'Q}uSkwN:0vJb+fIWmp$3f=)LSMUD?-a?5?Al+dQIaw]Re;>tn5#8 H8!vZ4{8zEI' );
define( 'NONCE_KEY',        ',2d%ql7d>=h4lTtlW[}WIGm8ly/ -ggK6}Zsf_l99>U;uULxN9j5p8Mww~2(2( f' );
define( 'AUTH_SALT',        '{Vgc@jjMOVB;n4yIJ>5(0{-Lihlx[/ I<r~|?$&] U#0[`un.b0cgG905e2 z>DW' );
define( 'SECURE_AUTH_SALT', 'CP] Q`P*,cJ~W$l_kS09tvk5Q/;!Td*EyxrfrDf&=$U]>MHEhO^),NGM>wAXFU`>' );
define( 'LOGGED_IN_SALT',   '^cjf}q)7+x+~Zug|aAG9d!^i)quLgl81p@& g:{P#,VtmY:nm*?z020m:=p NKIQ' );
define( 'NONCE_SALT',       'C,5wXO3YX7^)9#Pf~Ii5xrKXGKD<&+pfexxjA5r$ J$6DF>w>g^.{b{ EIi!y%ai' );

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
