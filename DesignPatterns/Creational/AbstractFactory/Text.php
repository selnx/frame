<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/11/7
 * Time: 16:56
 */

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Text类
 */
abstract class Text implements MediaInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = (string) $text;
    }
}