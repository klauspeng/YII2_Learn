<?php

namespace app\models\article;

/**
 * This is the ActiveQuery class for [[YbArticle]].
 *
 * @see YbArticle
 */
class YbArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return YbArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return YbArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
