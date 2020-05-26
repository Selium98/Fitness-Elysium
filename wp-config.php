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
define( 'DB_NAME', 'fitelygit_db' );

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
define( 'AUTH_KEY',         ':ruWIr#Ii<v(D5Jz}yuT#jUzH;Ep=t*FdwUIF[pcs,/hnD;`^a<8vn)4T)n~BYVz' );
define( 'SECURE_AUTH_KEY',  '{-ftTdNuuUi^L5Z0 /5yQoHU7c<@w29d*t~9R#09!D>dHGe7!#x;/LRB4I2%/FXo' );
define( 'LOGGED_IN_KEY',    'R@UCUN|tk2#7.jim:0j^/;0b47Ci AiH3H=@2x|hdZHSqMj$5<Iv`%/{/%X.gI>.' );
define( 'NONCE_KEY',        '~#x&Vnb?IUZ~t[#&R^1ICgCyiA)f(n6H#]Fw-Y@DTcwBSmuqZMA^3jA&!{,J`366' );
define( 'AUTH_SALT',        'U=UlhG=.LJ(,YgFGvYZDa w5tS?rxt=C)Ut,XM}({lx:PXy;0N$]3t:OGbf4D%~]' );
define( 'SECURE_AUTH_SALT', 'x.)rex|m.K3<]7*Z1meh1k-WQ!wI$B<aHTnX#uYbLjsRdTBi^;lT)2KQ@GeO[q1S' );
define( 'LOGGED_IN_SALT',   '-$Co1M4R57i*O7JD]F^Jd}j/:OxCEXdS1)^Q8D0W]uH :=B`Y_cZ,&J[yH8jIKpv' );
define( 'NONCE_SALT',       '|otR_dj2Bql$-;|,{#MUuy9$Jf@4Fl$$!L4NEP5(SH:9R~ @AMDMgE7.Mggj]jg]' );

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
