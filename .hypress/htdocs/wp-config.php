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
	define('DB_NAME', 'hypress');
	
	/** MySQL database username */
	define('DB_USER', 'hypress');
	
	/** MySQL database password */
	define('DB_PASSWORD', 'hypress');
	
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
	define('AUTH_KEY',         'vICiPzG2Anjzp87ut5LdGhMfruk2zdu3');
	define('SECURE_AUTH_KEY',  'P39v2AHds75npwSeqve2si2VUDm1uSez');
	define('LOGGED_IN_KEY',    'K8L1qrxpV2gPEF1OGnw25Tdk0iaOBgsJ');
	define('NONCE_KEY',        '6dDeJzxFHiLCA2zLgHkROKGJ1gkwWAXO');
	define('AUTH_SALT',        'IeyVdgf8d8ZifId0A07ZZ2zbbnR9OjYz');
	define('SECURE_AUTH_SALT', 'yGAYPMBdedRhhjxxULzNdSHTi41myFgm');
	define('LOGGED_IN_SALT',   'JI6m5NerS818T1lP2WE6Xxfm0r46mBqO');
	define('NONCE_SALT',       'GLJnXmBSoKnQX60vmYkAeGhwTgYiDRhv');
	
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
	define('WP_DEBUG', true);
	
	/* That's all, stop editing! Happy blogging. */
	
	/** Absolute path to the WordPress directory. */
	if ( !defined('ABSPATH') )
		define('ABSPATH', dirname(__FILE__) . '/');
	
	/** Sets up WordPress vars and included files. */
	require_once(ABSPATH . 'wp-settings.php');
