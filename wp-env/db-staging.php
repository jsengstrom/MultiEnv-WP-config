<?php
// Prevent file from being accessed directly
if (!defined('ABSPATH')) exit();

// MySQL settings //
define('DB_NAME',     'db-name');   // DB name
define('DB_USER',     'root');      // DB username
define('DB_PASSWORD', 'root');      // SB password
define('DB_HOST',     'localhost'); // DB hostname
define('DB_CHARSET',  'utf8');      // Charset to use in creating DB tables
define('DB_COLLATE',  '');          // DB Collate type. Don't change this if in doubt

// Authentication Keys and Salts //
// Generate via {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// DB table prefix (optional) //
$table_prefix = 'wp_'; // numbers, letters & underscores only

// Define additional settings here //
define('WP_DEBUG', true);
