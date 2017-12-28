<?php
namespace DesignPatterns\Creational\Factory\Complex;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 15:30
 */
/*
* 定义了 User接口.
* 和子类 NormalUser,VipUser,InnerUser
*/
//User接口,定义了三个抽象方法.
interface User{
    public function getName();
    public function setName($_name);
    public function getDiscount();
}