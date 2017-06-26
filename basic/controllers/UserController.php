<?php

namespace app\controllers;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->getView()->title = "登陆";
        $params = [
            'name'  => 'lp',
        ];
        return $this->render('login',$params);
    }

}
