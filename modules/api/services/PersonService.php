<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 13:39
 */

namespace app\modules\api\services;


use app\models\LoginForm;
use app\modules\api\entities\User;
use app\modules\api\entities\UserId;
use app\modules\api\repositories\UserRepository;
use Yii;

class PersonService
{
    /**
     * @var UserRepository
     */
    protected $users;

    /**
     * @var LoginForm
     */
    private $loginForm;

    /**
     * @param array $data
     * @return User|null $user
     */
    public function login($data)
    {
        $this->loginForm = new LoginForm();
        $this->loginForm->setAttributes([
            'username' => $data['username'],
            'password' => $data['password']
        ]);
        if ($this->loginForm->login()) {
            return $this->users->get(new UserId(Yii::$app->user->id));
        }
        return null;
    }

    public function logout() : array
    {
        if (Yii::$app->user->logout()) {
            Yii::$app->cache->flush();
            return ['res' => 1];
        }
        return ['res' => 0];
    }

    /**
     * @param array $data
     * @return array
     */
    public function register($data) : array {}
}