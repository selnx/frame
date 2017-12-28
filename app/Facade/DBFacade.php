<?php

use App\Core\Facade;

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/28
 * Time: 19:15
 */

class DBFacade extends Facade{
    public static function getFacadeAccessor(){
        return API\DB::class;
    }
}