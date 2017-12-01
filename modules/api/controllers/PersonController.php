<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 12:37
 */

namespace app\modules\api\controllers;


use yii\filters\VerbFilter;

class PersonController extends ParentController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'login'         => ['post'],
                    'logout'        => ['post'],
                    'register'      => ['post']
                ]
            ]
        ];
    }

    public function actionLogin()
    {
        return [
            'action' => $this->action->id
        ];
    }

    public function actionLogout()
    {
        return [
            'action' => $this->action->id
        ];
    }

    public function actionRegister()
    {
        return [
            'action' => $this->action->id
        ];
    }
}