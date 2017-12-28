<?php
namespace DesignPatterns\Creational\Factory\Simple;

/**
 * 定义具体产品类 葡萄
 * 首先，我们要实现所继承的接口所定义的方法
 * 然后定义葡萄所特有的属性，以及方法
 */
class grape implements fruit{


    //葡萄是否有籽
    private $seedLess;

    public function grow(){
        echo "apple grow";
    }

    public function plant(){
        echo "apple plant";
    }

    public function harvest(){
        echo "apple harvest";
    }

    public function eat(){
        echo "apple eat";
    }

    //有无籽取值
    public function getSeedLess(){
        return $this->seedLess;
    }

    //设置有籽无籽
    public function setSeedLess($seed){
        $this->seedLess = $seed;
        return true;
    }

}