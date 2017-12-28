<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 11:19
 */
use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

//require '../vendor/autoload.php';

App::bind('config', require '../config/database.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
//$app = [];
//$app['config'] = require '../config/database.php';
//require '../app/core/database/Connection.php';
//require '../app/core/database/QueryBuilder.php';
//require '../app/core/Router.php';
//require '../app/core/Request.php';
////var_dump($app['config']['database']);
//return new QueryBuilder(
//    Connection::make($app['config']['database'])
//);
