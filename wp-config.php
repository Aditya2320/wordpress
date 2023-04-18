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
define( 'DB_NAME', 'wordpres' );

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
define( 'AUTH_KEY',         'xV6wj(e)H6]~U-!uQ%h] 3Tb1s)fgJjci2[cSw;(a,2a{MouW!E#@O{yhDFc0QgZ' );
define( 'SECURE_AUTH_KEY',  '/K<=9>!hLb+>Jlwm$Y(M4.=29p:#)|CWKBsnL*&1(n#th+Kr;,{3A!OiZikP=|m^' );
define( 'LOGGED_IN_KEY',    'v8h);nR_2>DL=IXPOm@M}MGx3_cyF`PiGjC%b.M&T3HVl*wj&8<>0VHmT9ft2.</' );
define( 'NONCE_KEY',        'a:u~+$^D>tQ<0R,|?:n{!3jiIjnAt@r+|bqd__!+t|C1+4i.>G>R/1/ (eR#LGdh' );
define( 'AUTH_SALT',        'XZ`]gGRei;45OWq6Cctrlz}=1@cs?yB<,Qy26$PZ]`@#kDIr&b/U%70[FvDGf<,.' );
define( 'SECURE_AUTH_SALT', 'y(Imq[>p~`eWVQ^@4$->x-liYA.%g;P3ErdPu,E:^^`9D.9MtYWV#?1t6AN0z&0=' );
define( 'LOGGED_IN_SALT',   '_ciVW5wbMDC2bWa%;VR@XZp ;m95 dtK1qAIxKjnD<)G&NJ#PtABSH3J8Pc$)>zD' );
define( 'NONCE_SALT',       '!kH{##B_YgqSEg:S=_^j<3L$t!UKn? 1w|w1mskL)q>7^a}`Y.JM6kYp[TBuD5y6' );

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
