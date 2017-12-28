<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 11:08
 */
namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($table, $parameters)
    {
        $sql  = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :',array_keys($parameters)) //  这句不喜欢可以用array_map处理下
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function selectAll($table, $className)
    {
        $statement = $this->pdo->prepare("select top 10 * from {$table}");
        $statement->execute();
        $result= $statement->fetchAll(PDO::FETCH_CLASS, "App\\Models\\{$className}");
//        $row = [];
//        foreach ($result as $rows)
//        {
//            foreach ($rows as $k => $v)
//            {
//                if (is_string($k))
//                {
//                    $row[$k] = $v;
//                }
//            }
//        }
        $rows = [];
        for ($i=0;$i<count($result);$i++){
            $row=[];
            foreach ($result[$i] as $k => $v){
                $row[$k]=$v;
            }
            array_push($rows,$row);
        }

        return $rows;
    }
}