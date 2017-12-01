<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 12:37
 */

namespace app\modules\api\controllers;


use app\modules\api\helpers\Helper;
use app\modules\api\services\PersonService;
use yii\filters\VerbFilter;
use Yii;

class PersonController extends ParentController
{
    /**
     * @var PersonService
     */
    protected $persons;

    public function beforeAction($action)
    {
        $this->persons = new PersonService();
        return parent::beforeAction($action);
    }

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
        if (!Helper::gv($this->data, 'username') || !Helper::gv($this->data, 'password')) {
            Yii::$app->response->setStatusCode(400, 'No input data');
            return Yii::$app->response->send();
        }
        $user = $this->persons->login($this->data);
        if ($user) {
            return $user->toArray();
        }
        Helper::Forbidden();
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