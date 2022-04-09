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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joforte' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** This line is added by kedmon Maquiz to enable installing themes and plugins without filling ftp credentials */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'yCCN+.v!%_0ELh~Jl_;(R`3vSH(eE.jrc6CfuuyOR<OYJ=KgUm*zPx>[_f#JS;|;' );
define( 'SECURE_AUTH_KEY',  'bC8WS8RvZ.$AN;{ear%<;NW`1M.f6.u+, #@m4EL?bFRk 1Qdb91N5EiL#~yU6ji' );
define( 'LOGGED_IN_KEY',    'q*BSg>ITgEqC=Yi*NLGxn aP=#&cw4u7wDmI15_QnrF,B>eAJ1VokDAfY,I[q/mx' );
define( 'NONCE_KEY',        'hT-=dw]pWO}.YV@tUsXnicb5$DUF:FrOxR1G[6}{hbY$6`MZ2F}+K: wj=9ij?Y+' );
define( 'AUTH_SALT',        '$zp~[&fDrqx8dxp3#6Q}M!BGi(7%ofIxU0dnkZe]/[EeG(zVJaI_`%](Y{SK2R3k' );
define( 'SECURE_AUTH_SALT', 'Wbp}Rl^;@Eyqo/{-fb+7^iq&[}>N$aAp4jck=![~fCkVsV%~g>EMV}}v([A!B{|u' );
define( 'LOGGED_IN_SALT',   'O>:nt!ObRQhv+;F!o($/)}]!m^`K{S{2TrV+%<S/H1d#C-W^j<b6G<Wx=hB]5x/}' );
define( 'NONCE_SALT',       'R@5| lH5Epz2yzlH2V~W?VE?kRd&>E7W@$HbF*.*M~ykTX-=7]/G]U8An{^c+*O3' );
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
