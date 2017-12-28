<?php
namespace DesignPatterns\Creational\Factory\Complex;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 15:34
 */

class VipUser extends AbstractUser {
    protected  $discount = 0.8;
    protected  $grade = "VipUser";
}