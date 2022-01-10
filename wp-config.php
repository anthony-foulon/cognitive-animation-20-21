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
define( 'DB_NAME', '39281' );

/** MySQL database username */
define( 'DB_USER', '39281' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HeppR21@3615Xn4$5cPT' );

/** MySQL hostname */
define( 'DB_HOST', 'bdd-peda.univ-lille.fr' );

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
define( 'AUTH_KEY',         'KU ]sd>XAb_rE:937 :QOq`l2PQ[cL$*wDaX7&-< q0n@>F.:yZ{TX>ms2qkltsB' );
define( 'SECURE_AUTH_KEY',  'I+ve6`I6i>=95k|@@J4Gas/}puE.2V^g2ln!7?n%}*1X9uE)r1D(p*[y%+C#S#xX' );
define( 'LOGGED_IN_KEY',    'a6~O5Ovz:@O/KeUPI|>&iC[A2LhxJ~M[#h&@-P+78x`klKCDcd=U(<enQ~BZ&gWE' );
define( 'NONCE_KEY',        'd!)Q[El58/#eqz$7n4&lo2<f67_io2Fe0KA&6|jAcMVTe]w8=J+7B+|vV.F]feYr' );
define( 'AUTH_SALT',        '6>(B~UP8~4CY!n1/S?cz~`}.y{YO7NcG:MdeX/fka5f` Gd!%:&fi{N@C`31S6T$' );
define( 'SECURE_AUTH_SALT', '{X%gO)kZEFJhk3qiqZHp7Tw?%LXe,i06tU,Y~HVz4qC:4OF0[2lvw}nTB x^(.3k' );
define( 'LOGGED_IN_SALT',   '(45TO6CGJ1vK49.et|14{5VY@Bs/oSrEq0q20kn1QSxT;HVYZ0Ei[3zkmNp$@+L%' );
define( 'NONCE_SALT',       'QC79m(n@+1v=@/TK5-9PlkS5^f(V=YfM>X*4lp9EU*Q!rnyD5czo)>Di&CG?.u 5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpprojet_';

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
