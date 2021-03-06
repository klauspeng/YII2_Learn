<?php

namespace app\moudles\admin\controllers;

use yii\web\Controller;
use app\models\EntryForm;
use app\models\article\YbArticle;

class ArticleController extends Controller
{
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionEntry()
    {
        $model = new EntryForm;


        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            // 验证 $model 收到的数据

            // 做些有意义的事 ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // 无论是初始化显示还是数据验证错误
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionAdd()
    {
        $model = new YbArticle();

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $model->add_time = date('Y-m-d H:i:s');
            $model->save();
            return $this->render('add-confirm', ['model' => $model]);
        } else {
            // 无论是初始化显示还是数据验证错误
            return $this->render('add', ['model' => $model]);
        }
    }
}
