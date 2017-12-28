<?php
namespace DesignPatterns\Creational\Factory\Complex;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 15:33
 */

class NormalUser extends AbstractUser  {
    protected  $discount = 1.0;
    protected  $grade = "NormalUser";
}