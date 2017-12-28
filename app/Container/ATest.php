<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/24
 * Time: 16:45
 */

namespace App\Container;


class ATest
{
    public function __construct(Btest $args)
    {
    }

    public function dosomething()
    {
        echo 'Hello world';
    }
}