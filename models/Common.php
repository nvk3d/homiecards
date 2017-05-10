<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 10.05.17
 * Time: 21:56
 */

namespace app\models;


use yii\base\Model;
use Yii;

class Common extends Model
{
    public static function setStatusCode($code) {
        switch ($code) {
            case 403:
                return Yii::$app->end(403, 'Permission denied');
            case 204:
                return Yii::$app->end(204, 'No data');
        }
    }
}