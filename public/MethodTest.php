<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/22
 * Time: 16:27
 */

class MethodTest
{
    public function __call($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }

    /**  PHP 5.3.0之后版本  */
    public static function __callStatic($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}

//$obj = new MethodTest;
//$obj->runTest('in object context');

MethodTest::runTest('in static context','in other context');  // PHP 5.3.0之后版本