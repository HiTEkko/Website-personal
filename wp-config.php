<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'universitas' );

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
define( 'AUTH_KEY',         'M2E9G?S6/<J!uu^*z 96R(DnqlkiW`dhMn8tg_BfSMj4*.4`,BO0e1dg(r707=mt' );
define( 'SECURE_AUTH_KEY',  '=%IV@:D_}Q=1oAJyu0Y^X~mWe#EQf~:X$TTH<)YYx&,gj&VW5.Za_T3l}W8Q`Z7Q' );
define( 'LOGGED_IN_KEY',    'Nx{c;4ma]s/~3}911%c~^dH]N~,J;$bp0N4&+L*2!/H~Kpd@s@;y#uimK38j$$)J' );
define( 'NONCE_KEY',        '%zF-NTD<I/0Lspmb/ X/K{(.6QCvoh6$_viOI;hF):{=hJI_[,$rN`F4[u,~ne2 ' );
define( 'AUTH_SALT',        'lvw*a:}|E<AN,/_-mq=srF&scNpN13&Q=bgAf|< Ca]Ij&Z[=l8k/Q_A?GT._-kv' );
define( 'SECURE_AUTH_SALT', 'j)p>p$G-eC8lJ{;;Kz/5jvz}Y-Ced`?j%tq^F 0vVf$i)YhCO6JB/#8Q,W*}#|)V' );
define( 'LOGGED_IN_SALT',   'WtY!Y!oIxc16tVe!9@  HASTiIIM@MAk:2:g=DxREVPS^9q*cQgU:wbPg%geAHI-' );
define( 'NONCE_SALT',       '^AU?XJ>z?)9Dz{8rcDu$g,gY@xfsr,4%APBnU# ;9sz4Lf]$ mZcUQ(`[kg<7Yce' );

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
