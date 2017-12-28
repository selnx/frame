<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/11/7
 * Time: 16:55
 */

namespace DesignPatterns\Creational\AbstractFactory;
/**
 * Picture类
 */
abstract class Picture implements MediaInterface
{

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->name = (string) $name;
        $this->path = (string) $path;
    }
}