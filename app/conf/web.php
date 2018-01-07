<?php return [
    'id' => '__APPLICATION__',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(__DIR__) . '/../vendor',
    'bootstrap' => ['log'],
    'components' => [
        'log' => [
            'targets' => [\yii\log\FileTarget::class],
        ],
        'urlManager' => [
            'enablePrettyUrls' => true,
        ],
    ],
    'params' => require(__DIR__ . '/params.php'),
];
