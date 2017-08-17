<?php

namespace app\models\article;

use Yii;

/**
 * This is the model class for table "yb_article".
 *
 * @property integer $Id
 * @property string $type
 * @property string $title
 * @property string $intro
 * @property string $content
 * @property string $raw
 * @property integer $is_raw
 * @property string $add_time
 */
class YbArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yb_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'is_raw'], 'integer'],
            [['content'], 'string'],
            [['add_time'], 'safe'],
            [['title', 'intro', 'raw'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'type' => '类型',
            'title' => '标题',
            'intro' => '简介',
            'content' => '内容',
            'raw' => 'github链接',
            'is_raw' => '是否是raw',
            'add_time' => '添加时间',
        ];
    }
}
