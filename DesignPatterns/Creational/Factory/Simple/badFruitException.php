<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 15:09
 */
namespace DesignPatterns\Creational\Factory\Simple;

use Exception;

class badFruitException extends Exception{
    public $msg;
    public $errType;
    public function __construct($msg = '' , $errType = 1){
        $this->msg = $msg;
        $this->errType = $errType;
    }
}