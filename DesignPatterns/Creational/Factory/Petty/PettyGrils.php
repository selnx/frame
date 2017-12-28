<?php
namespace DesignPatterns\Creational\Factory\Petty;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/21
 * Time: 10:33
 */

class PettyGrils implements IGoodBodyGrils,IGreatTemperament
{
    protected $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function goodFace()
    {
        echo $this->name.'姣好容颜<br>';
    }

    public function niceFigure()
    {
        echo $this->name.'魔鬼身材<br>';
    }

    public function greatTemperament()
    {
        echo $this->name.'迷人气质<br>';
    }
}