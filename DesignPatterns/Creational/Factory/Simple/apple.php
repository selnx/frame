<?php
namespace DesignPatterns\Creational\Factory\Simple;

/**
 * 定义具体产品类 苹果
 * 首先，我们要实现所继承的接口所定义的方法
 * 然后定义苹果所特有的属性，以及方法
 */
class apple implements fruit{

    //苹果树有年龄
    private $treeAge;

    //苹果有颜色
    private $color;

    public function grow(){
        echo "grape grow";
    }

    public function plant(){
        echo "grape plant";
    }

    public function harvest(){
        echo "grape harvest";
    }

    public function eat(){
        echo "grape eat";
    }

    //取苹果树的年龄
    public function getTreeAge(){
        return $this->treeAge;
    }

    //设置苹果树的年龄
    public function setTreeAge($age){
        $this->treeAge = $age;
        return true;
    }

}