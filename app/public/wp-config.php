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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '[-Ezs(BXKLN~ZgtP-6%cr|yc#{HB%mW^$yGaL9K?rrGS%Oi{w4+wautMIF^lUdS_' );
define( 'SECURE_AUTH_KEY',   'lIs}o}=wz,}D7_>/K9x*WER@Fc 0Rd-0VLR NPNupi.2{;d6EJWZxeEJ+Ct3`zX%' );
define( 'LOGGED_IN_KEY',     'PP22h]/G.`o^w1qh(^#PXCUlc>{XHYQF xs4k%o{5z8Po[MTwNOmPu[ppm+O6<+^' );
define( 'NONCE_KEY',         'i^pzC^IqYf=C{Kylt9-* $~SW9U-9-p9pflnVEzs3~vG)|_(]7a.paPBIK:kZD&V' );
define( 'AUTH_SALT',         'N?e>8AWzYHns=VlB:=F;Pp^li=6J-Chzqf1TAg#%LcQA4X`UwM#~xO<!E0hb98NQ' );
define( 'SECURE_AUTH_SALT',  ';eR}m. 0@<3@96!K2+US3zB^N{yh1#AF<ekW$sm:WlO-y<@=.Y=;0b,]}`V^2FhL' );
define( 'LOGGED_IN_SALT',    '&lkc:a?u`Y~?xP2jn(adzJU(;*=ki}6R PlT)MqKPQ1f?!sLVYFg0L5-6a`L#8&R' );
define( 'NONCE_SALT',        '$F{rGI)..eam>_9R698ywmvqu3n,@j~9.T z(TU<]C_`g^qA&j!ja_ y>BVDZSp}' );
define( 'WP_CACHE_KEY_SALT', '!o3^6(+_Vd-IwDa()EJ1I} yVap`7?3}7{)HfvNaw~4?uY7s]s{oX&*%Q6Ux} ,Y' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
