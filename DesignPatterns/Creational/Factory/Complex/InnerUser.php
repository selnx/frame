<?php
namespace DesignPatterns\Creational\Factory\Complex;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 15:34
 */

class InnerUser extends AbstractUser {
    protected  $discount = 0.7;
    protected  $grade = "InnerUser";
}