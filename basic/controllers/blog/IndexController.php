<?php

namespace app\controllers\blog;

use Yii;
use app\controllers\BaseController;

class IndexController extends BaseController
{
    /**
     * 首页
     */
    public function actionIndex()
    {
        $params = [
            'title' => '波哥',
        ];
        var_dump(Yii::$app);
        return $this->render('index', $params);
    }
}