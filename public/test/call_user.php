<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/11/15
 * Time: 19:32
 */
//namespace Pub\test;
class call_user
{
    function increment($var)
    {
//        echo $var;
        echo $var;
//        $var++;
    }
}

$classname = "call_user";
$a = 0;
call_user_func(array($classname, 'increment'),$a);
call_user_func($classname .'::increment',1); // As of 5.2.3
//echo $a."\n";

$myobject = new call_user();
//
call_user_func(array($myobject, 'increment'),2);

//$a=0;
//call_user_func(['public\\test\\call_user', 'increment'], $a);