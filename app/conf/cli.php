<?php return [
    'id' => '__APPLICATION__ CLI',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(__DIR__) . '/../vendor',
    'bootstrap' => ['log'],
    'params' => require(__DIR__ . '/params.php'),
];
