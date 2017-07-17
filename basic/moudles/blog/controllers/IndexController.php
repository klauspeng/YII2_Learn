<?php

namespace app\moudles\blog\controllers;

use yii\web\Controller;

/**
 * Default controller for the `blog` module
 */
class IndexController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
