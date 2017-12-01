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

class UserRepository implements UserSchemeRepository
{
    private $users = [];

    /**
     * @param UserId $id
     * @return User|null
     */
    public function get(UserId $id)
    {
        // TODO: Implement get() method.
    }

    /**
     * @param User $user
     * @return bool
     */
    public function add(User $user): bool
    {
        // TODO: Implement add() method.
    }

    /**
     * @param User $user
     * @return bool
     */
    public function save(User $user): bool
    {
        // TODO: Implement save() method.
    }

    /**
     * @param User $user
     * @return bool
     */
    public function remove(User $user): bool
    {
        // TODO: Implement remove() method.
    }
}