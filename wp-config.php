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
define('DB_NAME', 'i902968_wp2');

/** MySQL database username */
define('DB_USER', 'i902968_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'S.j4CyMYSge[z(A3NJ&47*(8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g9nkBDpqu6PURoC4VeyfRP1nYkAgS4LBdRVa3SjlyNUs51P4k1PDstLjDlfAwNZx');
define('SECURE_AUTH_KEY',  'DqB10RKuhAWtj1egmUOo9o43EeIhSTvafioJFeVEjlxedo2YfH6lu6KlErliZkE3');
define('LOGGED_IN_KEY',    'cxFuluTeFDY7zQiQd6g5kcorTuzin8kfzIdGTtwnCQ6kyX2VJ4dr48vsVglPxJ1c');
define('NONCE_KEY',        'tAjwbI5CskbK4ag9H3YwApyxZNNe6qllg5VodxhYSJp4Ftk4Ibt8o8t53e8BNrew');
define('AUTH_SALT',        'fmzS9WciBS9ANNJFxe9x1qql0EQBUXs8UqD2cphkM2qbt0PSmv1WZRLWFjQIuCeU');
define('SECURE_AUTH_SALT', '5Q8lckTQ0iHZmsVem2esSj6IxKqc0FpOgkVE8owGnDwYKgpv53gx28e9nvGlNNJA');
define('LOGGED_IN_SALT',   'bNXdedRzD5chfyHgh2WI8UokfISU1FrYS8628K7zLChNtWrT9UBzsGCMNMZrkPQ2');
define('NONCE_SALT',       'YtR8k8JZQZnFEvFmqK5EopbfBDEKVjFlDdGrjrqNBBOky0lJDvQAB9BMpfTB28uZ');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
