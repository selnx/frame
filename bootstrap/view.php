<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 11:19
 */
Xiaoler\Blade\Autoloader::register();

use App\Core\App;
use Xiaoler\Blade\FileViewFinder;
use Xiaoler\Blade\Factory;
use Xiaoler\Blade\Compilers\BladeCompiler;
use Xiaoler\Blade\Engines\CompilerEngine;
use Xiaoler\Blade\Filesystem;
use Xiaoler\Blade\Engines\EngineResolver;

$path = ['F:/work0411/frame/resources/views'];         // your view file path, it's an array
$cachePath = 'F:/work0411/frame/resources/views/cache';     // compiled file path

$file = new Filesystem;
$compiler = new BladeCompiler($file, $cachePath);

// you can add a custom directive if you want
//$compiler->directive('datetime', function($timestamp) {
/*    return preg_replace('/(\(\d+\))/', '<?php echo date("Y-m-d H:i:s", $1); ?>', $timestamp);*/
//});

$resolver = new EngineResolver;
$resolver->register('blade', function () use ($compiler) {
    return new CompilerEngine($compiler);
});
//echo dirname(__file__);
// get an instance of factory
$factory = new Factory($resolver, new FileViewFinder($file, $path));
$factory->addExtension('tpl', 'blade');
App::bind('view', $factory);
//var_dump($factory);
// if your view file extension is not php or blade.php, use this to add it
//$factory->addExtension('tpl', 'blade');

// render the template file and echo it
//echo $factory->make('hello', ['a' => 1, 'b' => 2])->render();