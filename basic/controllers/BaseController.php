<?php

namespace app\controllers;

use Yii;

class BaseController extends \yii\web\Controller
{
    protected $logger = null;

    /**
     * 初始化动作，赋值日志对象等
     */
    public function init()
    {
        // Monolog
        $monologComponent = Yii::$app->monolog;
        $logger           = $monologComponent->getLogger();
        $this->logger     = $logger;
    }
}
