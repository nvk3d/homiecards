<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 13:53
 */

namespace app\modules\api\entities;


interface IdScheme
{
    /**
     * @return mixed
     */
    public function getId();

    public function isEqualTo(IdScheme $other) : bool;
}