<?php
namespace DesignPatterns\Creational\Factory\Simple;
/**
 * 一个事例
 *
 * 一个农场，要向市场销售水果
 * 农场里有三种水果 苹果、葡萄
 * 我们设想：1、水果有多种属性，每个属性都有不同，但是，他们有共同的地方 |  生长、种植、收货、吃
 *              2、将来有可能会增加新的水果、我们需要定义一个接口来规范他们必须实现的方法
 *              3、我们需要获取某个水果的类，要从农场主那里去获取某个水果的实例，来知道如何生长、种植、收货、吃
 */


/**
 * 虚拟产品接口类
 * 定义好需要实现的方法
 */

interface fruit{

    /**
     * 生长
     */
    public function grow();

    /**
     * 种植
     */
    public function plant();

    /**
     * 收获
     */
    public function harvest();

    /**
     * 吃
     */
    public function eat();

}
