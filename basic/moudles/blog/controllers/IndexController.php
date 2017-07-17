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
}
