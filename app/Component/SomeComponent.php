<?php
namespace app\Component;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/21
 * Time: 14:29
 */

class SomeComponent
{
    protected $_connection;

    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }

    public function someDbTask()
    {
        $connection = new Connection(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "secret",
            "dbname" => "invo"
        ));
    }
}