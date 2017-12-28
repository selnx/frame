<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/24
 * Time: 10:44
 */
require 'Functions.php';
require 'Staff.php';

$pdo = Functions::connectToDb();
$tasks = Functions::fetchAllTasks($pdo);
//var_dump($tasks);
echo '<br>';
echo '<br>';
//$row = [];
//foreach ($tasks as $rows)
//{
//    echo '<br>';
//    var_dump($rows);
//    echo '<br>';
//    foreach ($rows as $k => $v)
//    {
//        echo '<br>';
//        var_dump($k);
//        var_dump($v);
//        echo '<br>';
//        if (is_string($k))
//        {
//            $row[$k] = $v;
//        }
//    }
//}
//var_dump($row);
$test=[['a'=>'ab','b'=>'bc','c'=>'cd'],['d'=>'ab','e'=>'bc','f'=>'cd']];
echo '<br>';
$rows = [];
for ($i=0;$i<count($tasks);$i++){
    $row=[];
    foreach ($tasks[$i] as $k => $v){
        $row[$k]=$v;
    }
    array_push($rows,$row);
}
echo '<br>';
foreach ($rows as $one){
//    var_dump($one);
    echo $one['stb_name'].'<br>';
    echo '<br>';
}

//foreach ($test as $k => $v){
//    echo '<br>';
//    echo $k.'======'.$v;
//}
//var_dump($rows);
//foreach($tasks as $key=>$value){
//    echo $key.":".$value."<br/>";
//}