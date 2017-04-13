<?php

// MultiEnv WP config
//
// This file replates the default wp-config, and directs the server to the correct
// database settings. Set up a config for each environment within the wp-config folder.

// Set your environments. Name the environment, and pair it to the correct hostname.
$environments = array(
  'local'       => 'localhost:8888',
  'staging'     => 'my-test-site.com',
  'production'  => 'my-live-website.com',
);

// Get the hostname for the current environment
$http_host = $_SERVER['HTTP_HOST'];

// Loop through $environments to see if there’s a match
foreach($environments as $environment => $hostname) {
  if (stripos($http_host, $hostname) !== FALSE) {
    define('ENVIRONMENT', $environment);
    break;
  }
}

// Exit if there's no match from $environments
if (!defined('ENVIRONMENT')) exit('No database configured for this host');

// Link to the relevent config file (/wp-config/db-{ENVIRONMENT-NAME}.php)
$wp_db_config = 'wp-config/db-' . ENVIRONMENT . '.php';

// Check the config file for the matched environment exists, and include it
if (file_exists(__DIR__ . '/' . $wp_db_config)) {
  require_once($wp_db_config);
} else {
  exit('No database configuration found for this host');
}

// -- There's usualluy no need to edit anything below this line -- //

// Absolute path to the WordPress directory
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

// Sets up WordPress vars and included files
require_once(ABSPATH . 'wp-settings.php');
