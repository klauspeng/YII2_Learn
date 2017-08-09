<?php

namespace app\models\qiniu;

use yii\base\Model;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;

class Qiniu extends Model
{

    private $auth = null;
    private $token = null;
    private $link = null;
    private $bucket = null;

    /**
     * Qiniu constructor.
     */
    public function __construct()
    {
        $qiniuConfig = \Yii::$app->params['qiniu'];

        // 配置
        $accessKey = $qiniuConfig['ak'];
        $secretKey = $qiniuConfig['sk'];
        $bucket    = $qiniuConfig['bucket'];
        $link      = $qiniuConfig['link'];

        $this->link   = $link;
        $this->bucket = $bucket;

        // 生成上传Token
        $this->auth  = new Auth($accessKey, $secretKey);
        $this->token = $this->auth->uploadToken($bucket);
    }


    /**
     * 上传文件
     */
    public function put($file, $name = null)
    {
        $name || $name = date('Ymd_His');
        $data = [
            'status' => false,
            'data'   => [],
        ];

        // 构建 UploadManager 对象
        $uploadMgr = new UploadManager();
        // 上传文件
        $result = $uploadMgr->putFile($this->token, $name, $file);

        if (!$result[1])
        {
            $data['status'] = true;
            $data['data']   = $result[0];
            $data['url']    = $this->link . '/' . $result[0]['key'];

            return $data;
        }

        if (!$result[0])
        {
            $data['data'] = $result[1];

            return $data;
        }

    }

    /**
     * 删除文件
     */
    public function del($file)
    {
        $BucketManager = new BucketManager($this->auth);
        $result = $BucketManager->delete($this->bucket,$file);
        return $result;
    }

}
