<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => 'e8b5772643562151eeb77e5ef7932f0582592d63',
        'name' => 'yoast/wordpress-seo',
        'dev' => false,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'yoast/i18n-module' => array(
            'pretty_version' => '3.1.1',
            'version' => '3.1.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../yoast/i18n-module',
            'aliases' => array(),
            'reference' => '9d0a2f6daea6fb42376b023e7778294d19edd85d',
            'dev_requirement' => false,
        ),
        'yoast/wordpress-seo' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => 'e8b5772643562151eeb77e5ef7932f0582592d63',
            'dev_requirement' => false,
        ),
    ),
);
