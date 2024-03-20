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
define( 'DB_NAME', 'whimsywonders' );

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
define( 'AUTH_KEY',         '~O-CR8iO%[aJ%7QK@|6 4#%wQ64}blk@M.&m5[+e*bW<TDyFbkvw%RV}#%,xF@^;' );
define( 'SECURE_AUTH_KEY',  'A_QPqdg-4#TzK53 Qm q)>sk:SSW@.GH.zKIY#P4[0(w)}f#OfaD7~X4{7Lb`X<9' );
define( 'LOGGED_IN_KEY',    'zQ@1+%*IsZPT&bnmj7%yS,tn)bm]vFvn2?UxVT8^,6bX0Nf5snc$<V!YGw7L3e@v' );
define( 'NONCE_KEY',        '=S?L=C`=X%T7O[A/YKz?loqs#8Fp4 RDV/j9I{+LhetVvNe$ioXFu,fD_nA5jFeZ' );
define( 'AUTH_SALT',        'OQE_@3Z4`e$><WQ|4l(5L+~z8oJ-zJC&yjU+P@+?4iCY1$jzo?C.ZH+*RMcA&J^/' );
define( 'SECURE_AUTH_SALT', 'r1Tfp]c-!oz->D5xhE-A1k9U[D~@)g_n>cI{92%9fFkzggt:Lda][ec$/oc5-|Nj' );
define( 'LOGGED_IN_SALT',   'pgAKhy7QFR|IP5]YEOxH0SFD463|LQU?}QC?F0P6P8X`6lh%-9Y,a0*~RAnZLcoD' );
define( 'NONCE_SALT',       'G8i:F9`UcHU3M,Fnzm;&zJ*}j/xN91uCy}5cwWD=r>y 6+Vh91ilj _(Y=Ypz{lN' );

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
