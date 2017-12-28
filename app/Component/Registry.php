<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/21
 * Time: 14:32
 */

namespace app\Component;


class Registry
{
    protected static $_connection;

    /**
     * Creates a connection
     */
    protected static function _createConnection()
    {
        return new Connection(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "secret",
            "dbname" => "invo"
        ));
    }

    /**
     * Creates a connection only once and returns it
     */
    public static function getSharedConnection()
    {
        if (self::$_connection===null){
            $connection = self::_createConnection();
            self::$_connection = $connection;
        }
        return self::$_connection;
    }

    /**
     * Always returns a new connection
     */
    public static function getNewConnection()
    {
        return self::_createConnection();
    }
}