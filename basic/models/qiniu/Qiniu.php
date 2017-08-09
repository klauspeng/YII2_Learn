<?php

namespace app\models\qiniu;

use yii\base\Model;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;

class Qiniu extends Model
{
    /**
     * 上传文件
     */
    public static function putFile($file, $name)
    {
        $data = [
            'status' => false,
            'data'   => [],
        ];

        $qiniuConfig = \Yii::$app->params['qiniu'];

        // 配置
        $accessKey = $qiniuConfig['ak'];
        $secretKey = $qiniuConfig['sk'];
        $bucket    = $qiniuConfig['bucket'];
        $link      = $qiniuConfig['link'];

        // 生成上传Token
        $auth  = new Auth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        // 构建 UploadManager 对象
        $uploadMgr = new UploadManager();
        // 上传文件
        $result = $uploadMgr->putFile($token, $name, $file);

        if (!$result[1])
        {
            $data['status'] = true;
            $data['data']   = $result[0];
            $data['url']    = $link . '/' . $result[0]['key'];

            return $data;
        }

        if (!$result[0])
        {
            $data['data'] = $result[1];

            return $data;
        }

    }
}
