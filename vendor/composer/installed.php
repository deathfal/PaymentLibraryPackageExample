<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'gap/test-dp-payment',
        'dev' => true,
    ),
    'versions' => array(
        'gap/payment-library' => array(
            'pretty_version' => 'dev-CreatingPackage',
            'version' => 'dev-CreatingPackage',
            'type' => 'library',
            'install_path' => __DIR__ . '/../gap/payment-library',
            'aliases' => array(),
            'reference' => '7f2909f9e8b5488df77cd6d78ac28f083d52dc30',
            'dev_requirement' => false,
        ),
        'gap/test-dp-payment' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
