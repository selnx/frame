<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/24
 * Time: 16:39
 */

namespace App\Container;


class Alipay implements Pay
{
    public function __construct(){}

    public function pay()
    {
        echo 'pay bill by alipay';
    }
}