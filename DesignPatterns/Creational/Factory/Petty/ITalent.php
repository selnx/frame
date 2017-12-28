<?php
namespace DesignPatterns\Creational\Factory\Petty;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/21
 * Time: 10:35
 */

abstract class ITalent
{
    protected $pettyGril;

    public function __construct($pettyGril)
    {
        $this->pettyGril = $pettyGril;
    }

    abstract public function show();
}