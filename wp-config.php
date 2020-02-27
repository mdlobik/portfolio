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
define( 'DB_NAME', 'mattd274_ptest' );

/** MySQL database username */
define( 'DB_USER', 'mattd274_ptest' );

/** MySQL database password */
define( 'DB_PASSWORD', '2Sb2.Jp@09' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'omc5fukmb2ndojbq7j5jgo7zyq1vf30pi14mi4sm6dnsxgyuqrksm1544js8ihf9' );
define( 'SECURE_AUTH_KEY',  'by3bt07qvrvasqx9ify8rugkcocu1p1rn0dyilflswcx9zfupfnge3hmrplordjo' );
define( 'LOGGED_IN_KEY',    'i5ihtdvsnywjeycdx0ugs3xowchyoaicl7e83emcn6dzkaiw9ndjpuckbc40ajwa' );
define( 'NONCE_KEY',        'vpi4hm85jwdqfmmxlzaqneuubuxbapkutzwq1cntklovyxdtqdgv0vui9wsehknu' );
define( 'AUTH_SALT',        'kzgle9ttiy6wtkgmxci9js7k2zexqeuaxmstdwfeesmoda69qwfdguxpt4eo7mv0' );
define( 'SECURE_AUTH_SALT', 'njnvpewi5ay0qlgt5pmvpzol6v6nxsmj5f31ziir2s2lb032pamyvnd8fiyd5mbl' );
define( 'LOGGED_IN_SALT',   'cu4afbvabuvignxwuoy6akpp9xrnxdd2kt5l7jiwtkkqqmxrfrgpbpodfankzsw9' );
define( 'NONCE_SALT',       'loapk73tqebaeuk5e0fvsvmfqhjyimkyzfucvmdoi6dlvbqf223kgdmf7hwucvzl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcy_';

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

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

