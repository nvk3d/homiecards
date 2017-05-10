<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 10.05.17
 * Time: 22:03
 */

namespace app\modules\common\controllers;


use app\models\Common;
use yii\rest\Controller;

class LoginController extends Controller
{
    public function actionIndex($username = null, $password = null) {
        if (!$username || !$password) {
            return Common::setStatusCode(204);
        }

    }
}