<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');
defined('YII_ENV_DEV') or define('YII_ENV_DEV', 'test');
defined('YII_ENV_TEST') or define('YII_ENV_TEST', true);
defined('YII_APP_BASE_PATH') or define('YII_APP_BASE_PATH', __DIR__.'/../../../../');

$config = array_merge(
    require(YII_APP_BASE_PATH . '/config/web.php')
);

require_once(YII_APP_BASE_PATH . '/vendor/autoload.php');
require_once(YII_APP_BASE_PATH . '/vendor/yiisoft/yii2/Yii.php');
