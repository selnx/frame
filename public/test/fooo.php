<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/11/8
 * Time: 15:41
 */

class Foo
{
    public static $my_static = 'foott';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "1<br>";

$foo = new Foo();
print $foo->staticValue() . "2<br>";
print $foo->my_static . "3<br>";      // Undefined "Property" my_static

print $foo::$my_static . "4<br>";
$classname = 'Foo';
print $classname::$my_static . "5<br>"; // As of PHP 5.3.0

print Bar::$my_static . "6<br>";
$bar = new Bar();
print $bar->fooStatic() . "7<br>";