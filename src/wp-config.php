<?php

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define('AUTH_KEY',         'R`pNJ8~bd~J:|sPTCO`C==/$)K]enc]m6$ypkw_Gpq3=~3{O,;2>2IZ7^EeBI*AV');
define('SECURE_AUTH_KEY',  '@Z<NR [9i~$I53h3Ef]}dOCjL0LJ4it}p+1p6_sQm8+$K6gks&TfeQ~KQ+#JP^&R');
define('LOGGED_IN_KEY',    '?Ko5+?+(Z$=DX>XA@=H?IA$0*I4`38O&|C.LKAyF$d}C8c7L[b)dK^gcMZ>X)S/5');
define('NONCE_KEY',        'Ekg5x3U#kioreRrIEs-3n0t*|&]xB&6?eab~;8|A.E.F.nH.}I^78qv)VD0h<Pdq');
define('AUTH_SALT',        'UT*!<s|o~{&{M];D&MlcLJNhT~aI36I6%*|Gn-#3ko>Ic>vAabHk.AzVu=Q5zTUm');
define('SECURE_AUTH_SALT', 'gCzqZ;p_-j7^Iq~g!wl4-__<nu]`=oDd%1> >y?RrV}*uy )|C%J}FiBDyNc@Qql');
define('LOGGED_IN_SALT',   'p~=%T8@z9/Uj&drw4Yo+fC,[vF*vitC>qz@%jJ|YK0g9-M%8`cFA+@U=:Kx.ZM<a');
define('NONCE_SALT',       '3I%qmm`mA*q,V4K&ZQ(=+0}Gr^]a/]Y/ #G[*k6QsrUG`QG~^x1#a|wVjJwGaeg&');
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
