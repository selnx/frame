<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/24
 * Time: 16:40
 */

namespace App\Container;


class PayBill
{
    private $payMethod;

    public function __construct(Pay $payMethod)
    {
        $this->payMethod= $payMethod;
    }

    public function  payMyBill()
    {
        $this->payMethod->pay();
    }
}