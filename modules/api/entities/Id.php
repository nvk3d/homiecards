<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 13:55
 */

namespace app\modules\api\entities;



use Ramsey\Uuid\Uuid;

class Id implements IdScheme
{
    protected $id;

    public function __construct($id = null)
    {
        if (is_null($id)) $id = Uuid::uuid4();
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function isEqualTo(IdScheme $other): bool
    {
        return $this->getId() === $other->getId();
    }
}