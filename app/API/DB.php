<?php
namespace API;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/28
 * Time: 19:19
 */

class DB{
    public function __construct($args){

    }
    public function Write($str){
        echo 'Write:'.$str.PHP_EOL;
    }
    public function Read($str){
        echo 'Read:'.$str.PHP_EOL;
    }
}