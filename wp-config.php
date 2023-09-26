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
define( 'DB_NAME', 'pakistan' );

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
define( 'AUTH_KEY',         'AA9]PbDs&SF(wI.me+-4ywOa)f*;.ZZV$3[.Qm_rUT!Qc|sn;|}xE[vSAxs(Y~`,' );
define( 'SECURE_AUTH_KEY',  'P Q^Fo3bf?YomWi&g_C;/|<1)^961TmVfM&Q0#Y0:A L^ZkZ{jRp@mOG.:f(Ye3;' );
define( 'LOGGED_IN_KEY',    '[X6Bk*Vv/36+l_Frj7K/KJ8q*t/(VNAiOla$uQ&tH=U9hq5se/g|c^]C9%<9jI9x' );
define( 'NONCE_KEY',        'A5v ,?qBJ+fm:H|.iuFKU&yrI,D(3d`]Q_{jVE1DBF,K#`wkA_4ivM{EuN;k}Fw1' );
define( 'AUTH_SALT',        ' Q0+?h;)e20+F`?g*30U6@TE!;]z$/ X2cq )6%TZwQIfuOP<6!Xr^#!YUy&;+98' );
define( 'SECURE_AUTH_SALT', 'Ej3!Csl2}z2(E-8&_+i1V oJ)I.0YuRsfNty<U<Kh}b_rLd[u-<1k*{FMr8,?X=H' );
define( 'LOGGED_IN_SALT',   '25fJY]7dxqjcH(Q>QaP!vGBdz~CdB2KrBlz A:K@T25(zJesjzkNnT?hnR0AHpJO' );
define( 'NONCE_SALT',       '~~`e!bqmf^r26/6ZkcZ8,}.Y6+lU^Rh ]9:rD]1auzrPL^}62i8_d^]ZE10D=`{H' );

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
