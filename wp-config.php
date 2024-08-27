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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'areeg' );

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
define( 'AUTH_KEY',         ',0c<A|c3x-4u5%)f2;/XS4^i:vpB/C@J;B-jX!7U,na4@|l+rxZ~T^=)30>Czt$K' );
define( 'SECURE_AUTH_KEY',  '%dUt)5<@Rw$0.?Dv(0k`M^=`qBC$Q<W+-{dKY65z~1]7:MXylW*r&otjuG&CNa5(' );
define( 'LOGGED_IN_KEY',    'e$Mz)LWUs<k0AyZ1}V/C1Z?(y|J;&S@$ I=i#^j}n#+#zjmQFGymrZ]saWW[J{>M' );
define( 'NONCE_KEY',        'H[23NYj#cf=2{xqgIk_8iY5f*65T[sAgkO7$:hv;<7y9hhTQrD7kX:fS>,DmtsQ/' );
define( 'AUTH_SALT',        '+zn0_G|Jh&+NPvyJ+:Nb~cBXNGBH{4gvt9/sC7nXtmy JNTT jw}+!hzHkJ5X$MF' );
define( 'SECURE_AUTH_SALT', '(jqwHFr<aRV*Q#;h:D4g?,l;&AZBCxsyGV45W*eI]wxUFhrKwgJ}|`j*dDHDuI,f' );
define( 'LOGGED_IN_SALT',   'f-JBNMoY6F#RiTpwqBT[upz-$Ho9U;`~5bJdF{1{GU<?J(~<e~g=[jpDY{zYI`@@' );
define( 'NONCE_SALT',       'A5dv8i^/B6YjP8$,I01!Ja)Er=BS$>AOoELiB@5lXL]V/a)&mlPX{hVnuj]d+=B*' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
