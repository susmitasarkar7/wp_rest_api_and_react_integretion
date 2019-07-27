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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'react_integration' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '} ]Zx#Rf?isRh2%V 6Xwg!jVXH ~D#9>RO 8A3s +&O+?I[p&n}G/Xr-xqtB$d#K' );
define( 'SECURE_AUTH_KEY',  'D)|!vHp(pnS5bwmR978ao~mA98}dGXt8QAtE^P3jQ@=flE*`|fp/=mJM{_,Eh.WW' );
define( 'LOGGED_IN_KEY',    'c%^VO>;)!ZUQKZ+.(c?o#2h]Cprz3g;S;a0U5~Kzng#>mZ6bYYSmSAGP$BDiQVm[' );
define( 'NONCE_KEY',        'DjsH/o^knd/lBG:h]AW8,m/D.=759t:bcPEgZ`6us%p3$kprZ2:g,3.{8GYh_72[' );
define( 'AUTH_SALT',        'g:RRq+f;P8eW{u`2`?TEO3e{J)y3kLKfW{;sgpuMe9s?-1b{`Rd4c{L_37S@9fPX' );
define( 'SECURE_AUTH_SALT', '$%ByX1nN<S_8c!m_QrTTC%Wd4P]lqnH`OuhIT^[aq)VMa,F$tL|DQxN@>K[oUeX9' );
define( 'LOGGED_IN_SALT',   'kyYq;.:90TYD.Xa.8dsTh,tLk6.?pJTa!Jh?$P6>11!l]5L0XG/n.h_^)fyHOf+U' );
define( 'NONCE_SALT',       'gd/lr8 _G>hf?!AVwKf8 |X(25rqe^JVNS tn8{{!7c}]U9T%|R`Bl39$:kKJu8J' );

define('JWT_AUTH_SECRET_KEY', 'secret-key');

define('JWT_AUTH_CORS_ENABLE', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
