<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 02.12.17
 * Time: 19:22
 */

namespace app\modules\api\services\dto\User;


use app\modules\api\entities\User\Name;
use app\modules\api\entities\User\UserId;

class UserCreateDto
{
    /** @var UserId */
    public $id;

    /** @var Name */
    public $name;

    /** @var string */
    public $email;

    /** @var string */
    public $nick;
}