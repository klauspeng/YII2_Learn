<?php

namespace app\moudles\admin;

/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\moudles\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // 设置模块布局文件
        $this->layout = 'main.php';
    }
}
