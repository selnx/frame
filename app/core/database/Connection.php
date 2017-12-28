<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 11:07
 */
namespace App\Core\Database;

use PDO;

class Connection
{
    public static function make($config)
    {
//        var_dump($config);
        try {
            return new PDO($config['db_connection'].':Server='.$config['db_host'].','.$config['db_port'].';Database='.$config['db_database'], $config['db_username'] , $config['db_password'], $config['options']);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}