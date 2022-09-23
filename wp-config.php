<?php

/**
 #ddev-generated: Automatically generated WordPress settings file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 It is recommended that you leave this file alone.
 */

/** Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'IvDeFXFZhLlhmEtYBTUBKyVZooEFEibaXerKIiJsuwpThByGZJsnFhPWfhwemotN');
define('SECURE_AUTH_KEY',  'dLpEeFMQvshWscjOAdQBmbUPVbNPMnzuInSsEpNGmJePUXRXCBotMlBLBcYFDGzc');
define('LOGGED_IN_KEY',    'FFFShAcmvJAteiaRgprcUeRmkBUgyTCDommnbIYiJUtZZFezACFQaXwvedkPyuAl');
define('NONCE_KEY',        'HZSKdjXakCjWWyBqSLBgsjckSQQNNyubjdolmcpFsHycUysdsyvJzRKGKLkcsDqY');
define('AUTH_SALT',        'bwAUseSUjcpetaLlYMUxxVbXieKWRaAfqgQZgKCkRjvOcBTTOEQtGRNpgNRNbtDv');
define('SECURE_AUTH_SALT', 'EVFKdxXLNzWYZLJpFkkztIsRYRVGzszgccIaGwmpBfkMArxNOvhxmmhxvzlUNYhi');
define('LOGGED_IN_SALT',   'DcHMxLPYGCauRSbyDkyPysLdPceBgvgOoAldbGiZTsVluDtACeXDXvUyVlBGKsnl');
define('NONCE_SALT',       'IKIyYIGgEYPSVqRkGkBNgfZOsXBNMfhyAQVkxbkoeqjPpMpuEpVmgiiatGOLVQhW');

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
