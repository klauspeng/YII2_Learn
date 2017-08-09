<?php

namespace app\controllers;

use Yii;
use app\models\qiniu\Qiniu;

class BaseController extends \yii\web\Controller
{
    protected $logger = null;
    protected $qiniu = null;

    /**
     * 初始化动作，赋值日志对象等
     */
    public function init()
    {
        // Monolog
        $monologComponent = Yii::$app->monolog;
        $logger           = $monologComponent->getLogger();
        $this->logger     = $logger;
        // 七牛云存储
        $this->qiniu = new Qiniu();
    }
}
