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
define( 'DB_NAME', 'wp_fullsystem' );

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
define( 'AUTH_KEY',         '`(ZS< 6K *bK{Kr9uRX S6+,S/C|P[W$ NLXEP,Ms}(ny7pku9G_UT#V__U;)hFJ' );
define( 'SECURE_AUTH_KEY',  'k2MM6~`Wjx^2LR7%z5~q>PT[#4V/>bBp`mEG|~rZ`>Y|^mp[M[&oXWV$9)39iE;[' );
define( 'LOGGED_IN_KEY',    'ij5xv>-HMHj=)6eFC[:OiL1,3k?r)#Dd pl78>XfFMP-*Dd^-`4XL3e$qG2}2Qa3' );
define( 'NONCE_KEY',        'vmeYE51=sV}Wms>!AcLT(<3)>vKyYgm7E<{LFS(<GLJU~i(s?V5>?`~(u64^ScnT' );
define( 'AUTH_SALT',        'HgI11 *2-{d3T;_th$:Ufp4FlO?{z+Vf`sd:r>!-H+)0aIIpa7~ZZVXUem3f8s;U' );
define( 'SECURE_AUTH_SALT', 'TO@LY#*-IH,nqG~`5C0e*fj2aeRhFs.Q#o9?K~W6;h /rP.2).2mz{S=:hc:Rw5g' );
define( 'LOGGED_IN_SALT',   'gH/ !4-=QSHH@H_J5^aw&w5{:>+w2Y0TF!O;fMRrtb}Vd)b+gpz_A[k=6~b.WxLe' );
define( 'NONCE_SALT',       'DKiq{B}^vYaS8yi(T[<FTA aSHbd8UFS|0N5&^3~&x::3f)3?rWNi9|L8^/oZc%|' );

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
