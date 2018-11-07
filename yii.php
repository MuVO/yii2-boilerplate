#!/usr/bin/env php

<?php

require_once __DIR__ . '/vendor/autoload.php';
(new \Dotenv\Dotenv(__DIR__))->load();

require_once __DIR__ . '/vendor/yiisoft/yii2/Yii.php';

if (!$conf = require(__DIR__ . '/app/conf/cli.php')) {
    throw new ErrorException("Application not configured");
}

(new \yii\console\Application($conf))->run();
