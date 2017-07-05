<?php

namespace app\controllers;

use Yii;
use app\models\cache\Redis;

class MqController extends BaseController
{
    public function actionIndex()
    {
        $redis = new Redis('TEST');
        if ($redis->lpush(1212))
        {
            var_dump($redis->getetAll());
        }
        else
        {
            echo 'redis 存储失败！';
        }

    }
}
