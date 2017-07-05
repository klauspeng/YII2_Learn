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
        $this->logger->addInfo('Adding a new user', array('username' => 'Seldaek'));
        // $this->logger->log('info', $this->getView());

        // $b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
        // $results = print_r ($b, true); //$results 包含了 print_r 的输出结果
        // echo $results;

        // echo print_r($this->getView(),true);
        // echo json_encode($this->getView());
        // var_dump($this->getView());
    }
}
