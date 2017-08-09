<?php

namespace app\moudles\blog\controllers;

use app\controllers\BaseController;
use  app\models\qiniu\Qiniu;

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
        $up = Qiniu::putFile('test.png','test');
        var_dump($up);
    }
}
