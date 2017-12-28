<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 10:38
 */

use App\Core\Request;
use App\Core\Router;

require '../vendor/autoload.php';
//require '../bootstrap/view.php';


require '../bootstrap/bootstrap.php';
require '../bootstrap/view.php';
//$this->abc = '11111111';
// 获取用户在地址栏输入的相对路径，并去除头尾的 / 字符
//$uri = trim($_SERVER['REQUEST_URI'], '/');

// 创建路由对象
//$router = new Router;
// 定义路由
//require '../routes/web.php';
// 引入 与相对路径 $uri 对应的控制器类的路径
// 比如说相对路径如果是 about， 下面这句代码就等价于 require 'controllers/about.php';
// 这里还存在一个问题，$uri 的值我们如何获得，后面再解决它
//require $router->direct($uri);
//require Router::load('../routes/web.php')->direct(Request::uri());
//require Router::load('../routes/web.php')->direct(Request::uri(), Request::method());
//echo Request::uri().'-------------'.Request::method();
//$web = Router::load('../routes/web.php');
Router::load('../routes/web.php')->direct(Request::uri(), Request::method());


//$staff = $query->selectAll('t_stb_staff', 'Staff');
//var_dump($staff);

//$pdo = Connection::make();
//$query = new QueryBuilder($pdo);
//$staff = $query->selectAll('t_stb_staff', 'Staff');
//var_dump($staff);

//$pdo = Functions::connectToDb();
//$staff = Functions::fetchAllTasks($pdo);
//var_dump($staff);