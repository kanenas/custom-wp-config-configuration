<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 *
 * @package WordPress
 */


/* MySQL settings */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'customtableprefix_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );


/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* AutoSave Interval */
define( 'AUTOSAVE_INTERVAL', '300' );
/* Specify maximum number of Revisions */
define( 'WP_POST_REVISIONS', '3' );
/* Media Trash */
define( 'MEDIA_TRASH', true );
/* Trash Days */
define( 'EMPTY_TRASH_DAYS', '7' );


/* WordPress debug mode for developers */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '384' );
define( 'WP_MAX_MEMORY_LIMIT', '512' );


/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* CRON */
define( 'DISABLE_WP_CRON',      'true' );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
// define( 'AUTOMATIC_UPDATER_DISABLED', true );


/* Files MODS & EDIT */
// define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );


/* Absolute path to the WordPress directory */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files */
require_once(ABSPATH . 'wp-settings.php');
