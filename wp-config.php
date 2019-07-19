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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'aRXHArZyqdJ3hKoyjQFL9b+l8F0hbUK8c3DZ4H7Y+YNOiSj1/9A4+XlIsyUxxh7+p4FzlZDzOyLKlkaH/L98JQ==');
define('SECURE_AUTH_KEY',  'YbApiLnLIMcFovTnGQ2jM0q8OwdjrvHqkrstvv7y2VpYLVW8uO2fLRki2g2w4Bh5ofq8q6wmKlibvc2MkwY7eQ==');
define('LOGGED_IN_KEY',    'jYss6zQMtZdI/t6D7OAw+nq7XNDh2UNA9VDqVsFjDqLAg4LNpmclfJxlhDYIZdYDf84G43oxtURDXXfOhEdKuQ==');
define('NONCE_KEY',        'TW+11cn3wGxZqTIh3zcyOh/0UC7alqdmnAITIBKYnaXg9mqjEXmNPZQxIZk1f4rZd7ezKF+EUjq4RLXb9LX6pw==');
define('AUTH_SALT',        'gvPIOmBSV1xWwjQv1bw9YHKS43RdlZ9ngYP8T/kh15Vse3Iw0ucL7z5ChXR8OOIRaEB03nw4yY9QBwE69Wsv6Q==');
define('SECURE_AUTH_SALT', 'UDJ3T+URrOGpwctaFkaHpaxi5B1bEq8+hpxSSyNd4YpNCoa/Y/fAiwYb3Y/+oB1d88sJUyhWCgpC2K8n6jnE/w==');
define('LOGGED_IN_SALT',   'gjzUxIFMxxseegYmLkX0wCazH36IgoICtANNfxwnNR8EBf1roRvpgx2k6z8imQ3UTN8FsDaIrjDqYYpYztg77g==');
define('NONCE_SALT',       'tCLhgbz9Kwxv58ZsFJ8eCCXbGfpz1RVMA8rxavd66puO9IuzE0EiFlwDUDqgjk5+oZEXoTuri8zSzTC/9wNqRQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
