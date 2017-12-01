<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 01.12.17
 * Time: 14:11
 */

namespace app\modules\api\entities;


interface Entity
{
    /**
     * @return IdScheme
     */
    public function getId();

    /**
     * @return array
     */
    public function toArray() : array;
}