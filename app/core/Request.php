<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 11:55
 */
namespace App\Core;

class Request
{
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }
}