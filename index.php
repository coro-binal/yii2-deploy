<?php
// change to your path of yii2 root
define('_APP_', '/path/of/yii2/root')

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require _APP_ . '/vendor/autoload.php';
require _APP_ . '/vendor/yiisoft/yii2/Yii.php';

$config = require _APP_ . '/config/web.php';

(new yii\web\Application($config))->run();
