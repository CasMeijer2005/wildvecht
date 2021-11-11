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
define( 'DB_NAME', 'wildvecht' );

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
define( 'AUTH_KEY',         'UlF#y#5qI$U%AKCg,:=<MxPn[$crT,LFqfI0x<=r<yNqfXPO3A)WXd7fM,?HQupK' );
define( 'SECURE_AUTH_KEY',  'nDJ#%3?]M|M&5KuNNVX~Mdt:zXaD]8L4;_%cWRD8e%Y?:ck{kuar^|@x)u7W(q~M' );
define( 'LOGGED_IN_KEY',    'MUD_PnXCo-Ye)E}fq0t8`<r]YRJ}l5z<>?:EIIeLg.hMd~QilFXLH$oMS/Wntyzt' );
define( 'NONCE_KEY',        'inQ#)AVLR0~D)aK[}Yh{L<R(fCidMznHwnpsPAXxRnF;-Ee,aJ_V)SxA@E?TRL9r' );
define( 'AUTH_SALT',        's:FNW;EzZ8OT{!5#+jc(efw$R/#r<gW!Bh-f6j?}*T=Frf?(J]>5p!$74FDtGzL;' );
define( 'SECURE_AUTH_SALT', 'yqi4Nqm7v6#]nyvs_u}2wxdJlf0q)xN;QY7dz{6.uj5T`0^xhHm`0$W!FUM>F2*k' );
define( 'LOGGED_IN_SALT',   '_]]<Z=DRYM|d1<y_n]Lk meQ4@Wv`xYwc#?iZ:#|8g%xcO2#j.>LIr!wibKvBCz|' );
define( 'NONCE_SALT',       '4&PqL1*4<1#$w&u^-kh=uv,z_;*l=1O<~%C_l}~gLk({W#H85{f+1Ehs%u3:29#d' );

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
