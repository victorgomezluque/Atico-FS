<?php

/**
 #ddev-generated: Automatically generated WordPress settings file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 It is recommended that you leave this file alone.
 */

/** Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'aCRYAWZZDJHIZxXugcvdDlDzMOEUAmJKjluuPbPQPIPcOvnmpkqJaymHpTvTSDhk');
define('SECURE_AUTH_KEY',  'LzxwZYHOsiRsDfmnXosCaziKuVQloEdFRPqWBshZOozUanzDjJAsgjqBPCNpWufE');
define('LOGGED_IN_KEY',    'uFJBrZKbJRumzYSlcNnBQIlVcMgnZqpfjgZRhvRmziSgALuXUyfZErfDxUhDPXbT');
define('NONCE_KEY',        'bMQUrnyhuAKZEsQdzgcjkWsyfLlyQXuzbnKhakWuAtWlpLHEQytSSoLpSvtGkBNm');
define('AUTH_SALT',        'eZcIbVORmXzdPzBfjNbCOHyWOhFfqvBORfuSmdSnwPzAYiOOnsNLHdqjKjJvsSVY');
define('SECURE_AUTH_SALT', 'pikSUnEIprABvioASYTfECVvHxiqQfRZawwTPPyrQNzpoLwXPpXJGbLqpnJpreSZ');
define('LOGGED_IN_SALT',   'wSsZnfFChQYqeOboMFTMdpxyPhkzAQDYHtNTMtfsJJipjhpJyzqjPJlVcdPmwcvN');
define('NONCE_SALT',       'EAVWiCXsLVslldnjPYcGTYMniXKHEbgObYPzQbjmEwrlswqkAGRDTMAVfnrJXkGr');

/** Absolute path to the WordPress directory. */
define('ABSPATH', dirname(__FILE__) . '/');

// Include for settings managed by ddev.
$ddev_settings = dirname(__FILE__) . '/wp-config-ddev.php';
if (is_readable($ddev_settings) && !defined('DB_USER') && getenv('IS_DDEV_PROJECT') == 'true') {
  require_once($ddev_settings);
}

/** Include wp-settings.php */
if (file_exists(ABSPATH . '/wp-settings.php')) {
  require_once ABSPATH . '/wp-settings.php';
}
