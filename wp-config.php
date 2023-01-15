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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*2OfHjeSja)R8|)!a:wQb(+rJKBGs#C}%#zM^BwhlRL0=fq>hN]6t K)R<xpq[vE' );
define( 'SECURE_AUTH_KEY',  '$%5rO64{l(F_]<QM|Kd=%v:;`rgg4jEpDkBASo~; f8fd)d.z!NtC1HZ7vyK%]-;' );
define( 'LOGGED_IN_KEY',    '[POrpQ@9fz$EjmJ-$P1^w?&|v*h1h4LY93>-q/@Yr!mB6kWes thUOtVc+&>5=p*' );
define( 'NONCE_KEY',        ']HNIm5/6Ge$!X/^_hgGJ[Io^+&l^s%{*KW48nP.iR>5@5^Ku[WsRE_wl,kHP_p$ ' );
define( 'AUTH_SALT',        '2l=Sp&U>t{Q#,@HBP*xCB#pj|3D8$nPP.dgM|qfr1%S(~Ppvx>pm:5frK|c$Tbj_' );
define( 'SECURE_AUTH_SALT', '{d#Zzq|xYO92~UMp?_/E6(n.4vj3w8Y5:EAn7++ hzHgc6=qdj|Z{^[P<G:dCl:T' );
define( 'LOGGED_IN_SALT',   '*~^Kg_z8&rOpnA`R%LdQB41]Ih:[0kv`&n/&G|xg~d)uVinc6&P#P`QOxT&D,A6V' );
define( 'NONCE_SALT',       'pd(R*B#j)J!957tr4/K_Jzg!P$[<+pyWz!z+Hp,njX% Q:7 r5j I5#2;#)qxGC&' );

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
