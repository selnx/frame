<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 11:47
 */
namespace App\Core;

use Exception;

class Router
{
    protected $routes = [
        'GET'   => [],
        'POST'  => []
    ];
    // 当定义Get路由时候，把对应的$uri和$controller以健值对的形式保存在$this->routes['GET']数组中
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    // 当定义POST路由时候，把对应的$uri和$controller以健值对的形式保存在$this->routes['POST']数组中
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    // 这里的 $requestType 是请求方式，GET 或者是 POST
    // 通过请求方式和 $uri 查询对应请求方式的数组中是否定义了路由
    // 如果定义了，则返回对应的值，没有定义则抛出异常。
//    public function direct($uri, $requestType)
//    {
//        if (array_key_exists($uri, $this->routes[$requestType])) {
//            return $this->routes[$requestType][$uri];
//        }
//
//        throw new Exception('No route defined for this URI');
//    }
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No route defined for this URI');
    }

    public static function load($file)
    {
        $router = new static;

        // 调用 $router->define([]);
        require $file;

        // 注意这里，静态方法中没有 $this 变量，不能 return $this;
        return $router;
    }

//    private function callAction($controller, $action)
//    {
//        $controllerObj = new $controller;
//        if (! method_exists($controllerObj, $action)) {
//            throw new Exception(
//                "{$controller} does not respond to the {$action} action."
//            );
//        }
//        return $controllerObj->$action();
//    }
    private function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controllerObj = new $controller;
        if (! method_exists($controllerObj, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return $controllerObj->$action();
    }
}