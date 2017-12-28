<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 14:56
 */
function view($name, $data =[])
{
    extract($data);
    return require dirname(__FILE__) ."/../../resources/views/{$name}.view.php";
}
function redirect($path = '')
{
    header("Location: /{$path}");
}