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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WsTaP/ZVEp30NMaolvQF76deaL7Gm9IcAqwuchgmiE5ODqd6De+rb9DPM0mfzzwXGaKGJO8v8cn7d6jrvTCO+Q==');
define('SECURE_AUTH_KEY',  'ekit89D5pzcU/BoBLZE4DVgtx+3NzsvetPT0Bz6v0MHWphjvmcscCqumYiVjDHUJiveSdBBsyhvlIdMRwNmWYg==');
define('LOGGED_IN_KEY',    '9vWV5QedRZXUk65EduxzyfOLpV9XwU2ivUS2baKLfkbR4CDg4LSzL0dDnyU6IfE1iXOQodkGJiaLumo6eP53Sw==');
define('NONCE_KEY',        '79SXuX4g2/TjOBWtfQjnspTDIMSvHko75B1UJpIyvGjFUlFdXs2YFy9phTmHSQpcRXCJOLo2/w9XkIn9KdQK2Q==');
define('AUTH_SALT',        '/fqr5NS/mfxcPt9ULxzOA8Ou+n+RDdVS6JqL96OIALLzYgH4sUIWEtkqn8AXQ05ltQR19BKfp/Xb8KTOFdHNBA==');
define('SECURE_AUTH_SALT', 'ChfSOVRmlBwEpeTjkRq1TswEZvAMRvPRubTnfmnN0NB1uAcdJJhD+5XoGvlhnTPfuv9vsoy60zRFpBD0GfoVuA==');
define('LOGGED_IN_SALT',   '84du2PegAnst6xs8V7LGh6Nhi9+y2ClcsRRRfoeYvoB3ZmJDCZtnIjrpV2ouq5bmTurMNAo0c2DG8OTSmZUiZg==');
define('NONCE_SALT',       '/T5s+13Y8jt6iIO14Dq700veqbHwhbQHbTPPRp4ER81G8ilNBW3gurgEH9ts3Ga+oQ4DrBIM4PIk3VmwHwbPyg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
