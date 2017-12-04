<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 14:09
 */

namespace app\modules\api\entities\User;


use app\modules\api\entities\Entity;
use app\modules\api\services\dto\User\UserCreateDto;

class User implements Entity
{
    /**
     * @var UserId $id
     */
    protected $id;

    /**
     * @var Name
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $nick;

    /**
     * @var User[]
     */
    protected $friends;

    public function __construct(UserCreateDto $dto)
    {
        $this->id = $dto->id;
        $this->name = $dto->name;
        $this->email = $dto->email;
        $this->nick = $dto->nick;
    }

    /** @return array */
    public function toArray(): array
    {
        return [
            'id' => $this->id->getId(),
            'name' => $this->name->toArray(),
            'email' => $this->email,
            'nick' => $this->nick
        ];
    }

    public function getId() : UserId { return $this->id; }
    public function getName() : Name { return $this->name; }
    public function getEmail() : string { return $this->email; }
    public function getNick() : string { return $this->nick; }
    /** @return User[] */
    public function getFriends() { return $this->friends; }

}