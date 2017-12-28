<?php
namespace app\tests;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 16:46
 */

trait SayWorld
{
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }

    public function saySomething(){
        echo 'Something!';
    }
}