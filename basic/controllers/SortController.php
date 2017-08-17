<?php

namespace app\controllers;

class SortController extends BaseController
{
    public function actionIndex()
    {
        // var_dump($this->read_all_dir(\Yii::getAlias('@app')));

        // echo file_get_contents('https://github.com/klauspeng/notes/blob/master/php/php.md');
        $arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);

        $sortArr = $this->bubbleSort($arr);
        var_dump($sortArr);

    }


    /**
     * 遍历一个文件夹下的所有文件和子文件夹
     */
    private function read_all_dir($dir)
    {
        $result = array();
        $handle = opendir($dir);
        if ($handle)
        {
            while (($file = readdir($handle)) !== false)
            {
                if ($file != '.' && $file != '..')
                {
                    $cur_path = $dir . DIRECTORY_SEPARATOR . $file;
                    if (is_dir($cur_path))
                    {
                        $result['dir'][$cur_path] = $this->read_all_dir($cur_path);//递归
                    }
                    else
                    {
                        $result['file'][] = $cur_path;
                    }
                }
            }
            closedir($handle);
        }
        return $result;
    }


    private function bubbleSort($arr)
    {
        $len = count($arr);
        //该层循环控制 需要冒泡的轮数
        for ($i = 1; $i < $len; $i++)
        { //该层循环用来控制每轮 冒出一个数 需要比较的次数
            for ($k = 0; $k < $len - $i; $k++)
            {
                if ($arr[$k] > $arr[$k + 1])
                {
                    $tmp         = $arr[$k + 1];
                    $arr[$k + 1] = $arr[$k];
                    $arr[$k]     = $tmp;

                    print_r($arr);
                    echo '<br />';
                    ob_flush();
                    flush();
                    sleep(1);
                }

            }
        }
        return $arr;
    }
}
