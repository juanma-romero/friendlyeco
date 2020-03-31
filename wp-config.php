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
define( 'DB_NAME', 'friendlyeco' );

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
define( 'AUTH_KEY',         '<(]d%0ZUu+xRNQmUsv5<O_C@/1Snp3[d&TvJ9T]^6MVXj:p3ayH.LN;V(Haq2KbI' );
define( 'SECURE_AUTH_KEY',  'NaQz&(cgC|]*Z3(Ny~[<c{Pxi.v1cczu8vb^6@*^g?t!<Oo$lOrQQC!94_s#Y%oN' );
define( 'LOGGED_IN_KEY',    ']7LfE`k}z=/wv.O81R!?+x5i<{Ow^ny&U&e@g:S}6|:s(wKh[3.##)B,9bs9ftzg' );
define( 'NONCE_KEY',        ')o^WrQz}Y9(PAp?MhoxFA}VW;-Y=LBJl/P][EwC,f~#^/am_U/!3X.D;Wa b7517' );
define( 'AUTH_SALT',        '}v:4%7qM}U(f|t1o>OEBn?RrY,u+JfLja1u-pm^~itA7HTiFw;.7-eiW`|;aj~W,' );
define( 'SECURE_AUTH_SALT', 'Xlr($q@9jelJ`u<^y0 i2s O3Vs5W|PR/{yU)RjYu+ogzne@4M*vL-O_MbGg-qC0' );
define( 'LOGGED_IN_SALT',   '>r1T5.-(  2sN0m>ta49YS=(;%%%rz+ft{gi3=>T=R-gv17>X2e2)+:`~LL*~My_' );
define( 'NONCE_SALT',       'y~Ee,Dsgp/Z`ZrC<5:erc79_.LNl./fuWfBJzm*?J^@f0bR.iZi;h})+C[J`%D+X' );

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
