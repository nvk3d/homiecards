<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 02.12.17
 * Time: 19:04
 */

namespace app\modules\api\entities\User;


class Name
{
    /**
     * @var string
     */
    public $first;

    /**
     * @var string
     */
    public $sur;

    /**
     * @var string
     */
    public $last;

    public function toArray() : array
    {
        return [
            'first' => $this->first,
            'sur' => $this->sur,
            'last' => $this->last
        ];
    }

}