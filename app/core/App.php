<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 14:29
 */
namespace App\Core;

class App
{
    protected static $registries = [];

    public static function bind($key, $value)
    {
        static::$registries[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registries)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$registries[$key];
    }

    public function has($key) {
        return isset($this->data[$key]);
    }
}