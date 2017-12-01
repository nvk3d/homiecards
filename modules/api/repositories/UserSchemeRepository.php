<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 13:49
 */

namespace app\modules\api\repositories;


use app\modules\api\entities\User;
use app\modules\api\entities\UserId;

interface UserSchemeRepository
{
    /**
     * @param UserId $id
     * @return User|null
     */
    public function get(UserId $id);

    /**
     * @param User $user
     * @return bool
     */
    public function add(User $user) : bool;

    /**
     * @param User $user
     * @return bool
     */
    public function save(User $user) : bool;

    /**
     * @param User $user
     * @return bool
     */
    public function remove(User $user) : bool;
}