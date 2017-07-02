<?php

namespace app\controllers;

use Yii;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->getView()->title = "登陆";
        $params                 = [
            'name' => 'lp',
        ];
        return $this->render('login', $params);
    }

    /**
     * This action register "Hello world" in channel
     * "main"(default when no value is setted on "getLogger" method).
     */
    public function actionTest()
    {
        $monologComponent = Yii::$app->monolog;
        $logger           = $monologComponent->getLogger();
        $logger->log('info', 'Hello world');
    }
}
