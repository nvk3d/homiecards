<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 13:32
 */

namespace app\modules\api\helpers;


use Yii;

class Helper
{
    public static function gv(array $array, $value, $default = null)
    {
        return $array[$value] ?? $default;
    }

    public static function Forbidden()
    {
        Yii::$app->response->setStatusCode(403, 'Access denied');
        return Yii::$app->response->send();
    }
}