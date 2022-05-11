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
define( 'DB_NAME', 'project' );

/** Database username */
define( 'DB_USER', 'nassir' );

/** Database password */
define( 'DB_PASSWORD', 'Zaniolo22' );

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
define( 'AUTH_KEY',         '<20VBEf=**rOsvq:]<g$(o}jC}3l0WO.C&o|[CNfnv,J)|h];Pe1B:7j.3qO5[KE' );
define( 'SECURE_AUTH_KEY',  '=d7CfXH<;?nF1:Ou_W$:fOrZgEpj+/J<;sAqWlM1RFS8G$p:z-!)ob2-+~b=)|^s' );
define( 'LOGGED_IN_KEY',    'ud.-<A$~~Q,Uo=c0^,(X~-v*mPMp2}>k)N0k+J{ dRr#23:y?kWK^;*f.)m~tk`4' );
define( 'NONCE_KEY',        'mP|meRBL6tli)VKu.*].1K#>z+NBuJ%pbG_IX&bf%`j%q(Qq-H:zL:ePK|}A6tJu' );
define( 'AUTH_SALT',        ',x3.^uG|7F[w)MDDY1H+[HtE!R@9k5::2>MC+,^J(-H$G)L8<TYgtcEVHO;T]YT_' );
define( 'SECURE_AUTH_SALT', 'BnK!/iQ&Kk_e XzS{B6+L%0$CsN)|g(r#e.olk.^au7@;U~i_0MlU/gq{vO,T4 <' );
define( 'LOGGED_IN_SALT',   'gz]N/U+t%rh!<d0*J6!uyY^A(IyiJ,.F&+ouTqGIjKMI&K;%Kg&$u^}=n/$h|Q6|' );
define( 'NONCE_SALT',       '?-cFeD@u*Ygwy[V!*:>!kzc@N}2Jmq*Wj.JL[7H?rBUbRoOv_~j&ObB9JC+Ppbh8' );

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
