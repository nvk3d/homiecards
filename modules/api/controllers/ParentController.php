<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 12:53
 */

namespace app\modules\api\controllers;


use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\rest\Controller;

class ParentController extends Controller
{
    protected $data = [];

    public function beforeAction($action)
    {
        $data = file_get_contents('php://input');
        if (!empty($data)) {
            $this->data = ArrayHelper::toArray(Json::decode($data));
        }
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        return parent::afterAction($action, Json::encode($result));
    }
}