<?php
/**
 * Created by PhpStorm.
 * User: linyoocom
 * Date: 2020/12/24
 * Time: 上午11:34
 */
declare(strict_types=1);

namespace App\JsonRpc;

class MathValue
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}
