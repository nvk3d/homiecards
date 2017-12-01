<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 14:09
 */

namespace app\modules\api\entities;


class User implements Entity
{
    /**
     * @var UserId
     */
    protected $id;

    /**
     * @return IdScheme
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }
}