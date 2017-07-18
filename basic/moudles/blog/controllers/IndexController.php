<?php

namespace app\moudles\blog\controllers;

use app\controllers\BaseController;

/**
 * Default controller for the `blog` module
 */
class IndexController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        // $uid = md5(uniqid(md5(microtime(true)), true));
        // echo $uid;
        // var_dump(strlen($uid));

        // 获取ID为 "forum" 的模块
        $module = \Yii::$app->getModule('blog');

        var_dump($module);


        $module = \Yii::$app->controller->module;
    }
}
