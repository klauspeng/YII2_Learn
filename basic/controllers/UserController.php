<?php

namespace app\controllers;

class UserController extends BaseController
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
     * 测试Monolog
     */
    public function actionTest()
    {
        $this->logger->log('info', 'Hello world');
    }
}
