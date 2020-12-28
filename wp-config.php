<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'mehedi' );

/** MySQL database username */
define( 'DB_USER', 'mehedi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jJl1zoF1YMtFoYzR' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$]Gc:C2:w;t8@(})#pq?RLOqKMrw~,9-_kP[EUchD|hm[7y&?,OD8;I]Y-KC.E}3' );
define( 'SECURE_AUTH_KEY',  '5p%4.<|~=P,}eQxlk-v%shjgM+rr:i32(YNjsIiVj6|1Zc|p|M8Z/alz:ec[6;t$' );
define( 'LOGGED_IN_KEY',    '7*/e#Y~sLsY/?j5GVd!D$Qp9CvZ{hT:S6c6$hf`f:1|B-P!6+<@8p]GKOQw2>B@H' );
define( 'NONCE_KEY',        'X6Li8@5FvB@kf]1A1ch9khUC=f.@gBY$R8orVwmsc^[U!Q.x!@sFu{O4h7N@ji8V' );
define( 'AUTH_SALT',        'n_==%tXNqP-~SU= B{l){TsjM!Fv{ACxP[O]T/W<ac@7.x~p,f{[e~7n=]WhYb4m' );
define( 'SECURE_AUTH_SALT', 'egS?Ibt|LjWB`Fp*=tP%Z%.sAC?}[9R+qe9Zn7.r-b:RCuUo4pzs`+YeATq!aTaa' );
define( 'LOGGED_IN_SALT',   '|Pr3$ YG `S6- wy)IrSV[x#eH)X2z[HaL]x+pS[9-5s3] c%nT6c#l%B{{n?+XT' );
define( 'NONCE_SALT',       'p#kC^aMe6MNadX@*44lJAFtv%mHXAOjosH)vFi{heg7+:2/j~$KLDN{L]%&`Sj1/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mhb_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
