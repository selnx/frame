<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/11/8
 * Time: 12:31
 */

class foo
{
    function __call($name,$arguments) {
        print("Did you call me? I'm $name!");
    }
}
$x = new foo();
$x->doStuff();