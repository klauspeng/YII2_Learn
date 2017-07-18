<?php

namespace app\moudles\blog;

/**
 * blog module definition class
 */
class Blog extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\moudles\blog\controllers';

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
