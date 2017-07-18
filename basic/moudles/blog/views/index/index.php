<?php
$this->title = Yii::$app->params['siteName'] . '-' . '首页';
?>
    我的博客首页
<?php
use yii\bootstrap\Carousel;

echo Carousel::widget([
    'items' => [
        [
            'content' => '<img src="https://imt-files001.oss-cn-beijing.aliyuncs.com/booth/2017/05/12/16/25571591577da15441222367086.jpg"/>',
            // 可选的，该轮播标题（HTML）
            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
            // 可选的，轮播样式
            'options' => [],
        ],
    ],
]);
?>
