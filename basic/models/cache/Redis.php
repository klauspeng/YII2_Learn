<?php

namespace app\models\cache;

use Yii;
use yii\base\Model;

class Redis extends Model
{
    private $listName = null;
    private $redis = null;

    /**
     * Redis constructor.
     * @param string $listName
     */
    public function __construct($listName)
    {
        parent::__construct();

        // 获取redis配置
        $config = \Yii::$app->params['redis'];
        //连接本地的 Redis 服务
        $redis = new \Redis();
        $redis->connect($config['host'], $config['port']);
        $this->redis = $redis;

        $this->listName = $listName;
    }


    public function lpush($id)
    {
        //存储数据到列表中
        return $this->redis->lpush($this->listName, $id);
    }

    public function getetAll()
    {
        $list = $this->redis->lRange($this->listName, 0, -1);
        return $list;
    }
}
