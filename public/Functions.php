<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 10:58
 */
class Functions
{
    public static function connectToDb()
    {
        $db_connection = 'sqlsrv';
        $db_host = '192.168.10.18';
        $db_port = '1433';
        $db_database = 'rzy2014db';
        $db_username = 'rzy2014';
        $db_password = 'rzy2014123';
        try {
            return new PDO("$db_connection:Server=$db_host,$db_port;Database=$db_database", $db_username , $db_password);;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function fetchAllTasks($pdo)
    {
        $statement = $pdo->prepare('select top 10 stb_id,stb_loginid,stb_name from t_stb_staff');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}