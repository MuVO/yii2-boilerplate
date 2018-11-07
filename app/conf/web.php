<?php return [
    'id' => '__APPLICATION__',
    'name' => getenv('APP_NAME'),
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(__DIR__) . '/../vendor',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'bootstrap' => ['log'],
    'components' => [
        'log' => [
            'targets' => [\yii\log\FileTarget::class],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => getenv('APP_ENVIRONMENT') !== 'prod',
        ],
    ],
    'params' => require(__DIR__ . '/params.php'),
];
