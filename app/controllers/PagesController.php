<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 14:53
 */
namespace App\Controllers;

//use App\Container\Alipay;
use App\Container\Alipay;
use App\Container\Btest;
use App\Container\Container;
//use App\Container\PayBill;
use App\Container\PayBill;
use App\Core\App;
use app\tests\MyHelloWorld;
use DesignPatterns\Behavioral\Strategy\DateComparator;
use DesignPatterns\Behavioral\Strategy\IdComparator;
use DesignPatterns\Behavioral\Strategy\ObjectCollection;
use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\RolePrintVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Parts\Bike;
use DesignPatterns\Creational\Factory\Complex\AbstractUser;
use DesignPatterns\Creational\Factory\Petty\PettyGrils;
use DesignPatterns\Creational\Factory\Petty\Talent;
use DesignPatterns\Creational\Factory\Simple\badFruitException;
use DesignPatterns\Creational\Factory\Simple\farmer;
use DesignPatterns\Creational\Pool\Pool;
use DesignPatterns\Creational\Pool\Processor;
use DesignPatterns\Structural\Decorator\Decorator;
use DesignPatterns\Structural\Decorator\RenderInXml;
use DesignPatterns\Structural\Decorator\Webservice;
use DesignPatterns\Structural\Proxy\RecordProxy;
use DesignPatterns\Structural\Registry\Registry;

use ReflectionClass;
use function Sodium\compare;
use Xiaoler\Blade\View;

class PagesController
{
    /**
     * @return mixed
     */
    public function home()
    {
//        var_dump(App);
//        echo $this->abc;
        $staff = App::get('database')->selectAll('t_stb_staff', 'Staff');
        var_dump($staff);
//        return View('index', ['staff' => $staff]);
        echo App::get('view')->make('hello', ['a' => 1, 'b' => 2])->render();
    }

    /**
     *
     */
    public function about()
    {
        /**
         * 获取水果实例化的方法
         */
//        try{
//            $appleInstance = farmer::factory('apple');
//            $appleInstance->setTreeAge(11);
//            var_dump($appleInstance->getTreeAge());
//        }catch(badFruitException $err){
//            echo $err->msg . "_______" . $err->errType;
//        }
//
//        $user = AbstractUser::getInstance('NormalUser' , 'zhangsan');
//        var_dump($user->getName());

//        $o = new MyHelloWorld();
//        $o->sayHello();
//        $o->saySomething();
        //生成依赖
//        $payMethod =  new Alipay();
//        //注入依赖
//        $pb = new PayBill( $payMethod );
//        $pb->payMyBill();

//        $reflection = new ReflectionClass('App\Container\PayBill');
////        echo $reflection->getShortName();
////        $instance = $reflection ->newInstanceArgs( [ $payMethod ]);
//        $constructor = $reflection->getConstructor();//获取class A 的构造函数
//        $dependencies = $constructor->getParameters();//获取class A 的依赖类
//        var_dump($constructor);
//
//        var_dump($dependencies);

        $app = new Container();
        $app->bind("Pay", "App\Container\Alipay");//Pay 为接口， Alipay 是 class Alipay \App\Container\Alipay
        $app->bind("tryToPayMyBill", "App\Container\PayBill"); //tryToPayMyBill可以当做是Class PayBill 的服务别名

//        var_dump($app);
//通过字符解析，或得到了Class PayBill 的实例
//        $payServer = $app->make("Pay");
        $paybill = $app->make("tryToPayMyBill");


//因为之前已经把Pay 接口绑定为了 Alipay，所以调用pay 方法的话会显示 'pay bill by alipay '
        $paybill->payMyBill();
//        $payServer->pay();


//        //建立class A 的反射
//        $reflection = new ReflectionClass('\App\Container\ATest');
//        $b = new Btest();
//
//        //获取class A 的实例
//        $instance = $reflection ->newInstanceArgs([ $b ]);
//        $instance->dosomething(); //输出 ‘Hellow World’
//
//        $constructor = $reflection->getConstructor();//获取class A 的构造函数
//
//        $methosArr = $reflection->getMethods();
//
//        $dependencies = $constructor->getParameters();//获取class A 的依赖类
//
//        var_dump($constructor);
//
//        var_dump($methosArr);
//
//        var_dump($dependencies);


        $pettyGril = new PettyGrils('暖暖');
        $talent = new Talent($pettyGril);
        $talent->show();

//        $htmlObj=new HtmlFactory();
//        $result=$htmlObj->createText('test 3');
//        var_dump($result->render());

//        $bike=new Bike();
//        $director=new Director();
//        $director->build($bike);

//        $pool = new Pool('DesignPatterns\Creational\Pool\Tests\TestWorker');
//        $worker = $pool->get();
//        $processor = new Processor($pool);
//        $processor->process();

//        echo $worker->id.'=';
//        $worker->id = 5;
//        $pool->dispose($worker);
//        $id=$pool->get()->id;
//        echo $id.'=';
//        $data = ['one' => 1, 'two' => 2, 'three' => 3];


        $data = [];
//        if($data==null){
//            echo '11111111111111';
//        }
        $recordP = new  RecordProxy($data);
        $recordP->abc='111111';
//        $recordP->isDirty = false;
        echo $recordP->abc;
//        echo RecordProxy::isDirty;
//        $recordP->xyz = '3.1415926';
//        echo $recordP->xyz.'==';

//        $data = ['one' => 1, 'two' => 2, 'three' => 3];
//        $web = new Webservice($data);
//        $service = new RenderInXml($web);
//        $result = $service->renderData();
//        var_dump($result);

//        Registry::set(Registry::LOGGER, new \StdClass());
//        $logger = Registry::get(Registry::LOGGER);
//        var_dump($logger);

//        $visitor = new RolePrintVisitor();
//        $group = new Group('administrators');
//        $user = new User('superman');
//        $group->accept($visitor);
//        $user->accept($visitor);

//        $datecomparator = new DateComparator();
//        echo $datecomparator->compare(['date' => '20140101'], ['date' => '20170101']);
//        $ids = [['id' => 4],['id' => 2], ['id' => 4]];
//        $date = [['date' => '20140101'], ['date' => '20170101']];
//        $obj = new ObjectCollection($date);
////        $obj->setComparator(new IdComparator());
//        $dateNew = new DateComparator();
//        $obj->setComparator($dateNew);
//        $elements = $obj->sort();
//        var_dump($elements);

        echo 'about';

//        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}