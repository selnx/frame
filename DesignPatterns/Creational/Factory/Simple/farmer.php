<?php
namespace DesignPatterns\Creational\Factory\Simple;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/20
 * Time: 15:07
 */

/**
 *农场主类 用来获取实例化的水果
 *
 */
class farmer{

    //定义个静态工厂方法
    /**
     * @param $fruitName
     * @return apple|grape
     */
    public static function factory($fruitName){
        switch ($fruitName) {
            case 'apple':
                return new apple();
                break;
            case 'grape':
                return new grape();
                break;
            default:
                throw new badFruitException("Error no the fruit", 1);
                break;
        }
    }
}