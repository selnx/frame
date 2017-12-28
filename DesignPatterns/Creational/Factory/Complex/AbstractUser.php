<?php
namespace DesignPatterns\Creational\Factory\Complex;
use Exception;

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 15:30
 */

abstract class AbstractUser implements User{
    private $name = ""; //名字
    protected  $discount = 0; //折扣
    protected  $grade = "";  //级别

    final public static function getInstance($userType , $name){
        $userType = 'DesignPatterns\\Creational\\Factory\\Complex\\' . $userType;
//        echo $userType;
//        return;
        if(class_exists($userType)){
            $instance = new $userType($name);
            if($instance instanceof self){
                return $instance;
            }
        }
        throw new Exception("Error no the userType");
    }

    public function __construct($_name){
        $this->setName($_name);
    }
    public function getName(){
        return $this->name;
    }
    public function setName($_name){
        $this->name = $_name;
    }
    public function getDiscount(){
        return $this->discount;
    }

    public function getGrade(){
        return $this->grade;
    }
}