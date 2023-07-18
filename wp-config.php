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
define( 'DB_NAME', 'wp_fuegopower_db' );

/** Database username */
define( 'DB_USER', 'wp_fuegopower_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_fuegopower_pw' );

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
define( 'AUTH_KEY',          'z@rnG@k)#dl@%dwk5:K=qs_K:y3XY!+qs<=m!9C;LbiOW_w0wl*1G|9z+V#nILf)' );
define( 'SECURE_AUTH_KEY',   'i%6e^m1uHqrk{i67]TRRK=i^>q#.(.xjlF$fFi7< jDDZZzg 4d.tB24$gNP,Al8' );
define( 'LOGGED_IN_KEY',     'RL*yVI5st7{1ybmf!y3lzp:pF$@KIvQ*dadiH.<})M&>|s=]|~THY.xeVV+qA?ih' );
define( 'NONCE_KEY',         '>TlQ>,I950XV_^>[EoFB<%wf)>ih8&)s)Uu-d~d1ROEtq+lcl?JI nxx?A3uKvEq' );
define( 'AUTH_SALT',         'rMw52?Z@s/h[_ypkHIAwRYNV$6e4_fkbzPt4J!VgyRC8o>P36+e23]ms7B 8a>#F' );
define( 'SECURE_AUTH_SALT',  'F}Tni1K3L$o5S+jj7A|d506JiTDHGG}SXeL+[%lm|wQ[HP`fcF89{T9o=R2f5FgG' );
define( 'LOGGED_IN_SALT',    '3{g a|s:3efV3wLDPCVjQ,v3}p7[UqA[4rPnTt}[Hwc!4ek&:k^H]c ^?bu3:3A6' );
define( 'NONCE_SALT',        '`hl`<IxU_dLjX NTxju|~PT<U;dcqhafWN+MEts$1AGsG3hPH Qf9nu=GYE%T@Y7' );
define( 'WP_CACHE_KEY_SALT', 'p>)a_CDz2VUqok]sLfyaqZ8xO{rB8MlR h14!2y8k oZExnA<`w$@w^!)k5rl_T4' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
