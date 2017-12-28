<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 11:52
 */
//$router->define([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'contact' => 'controllers/contact.php'
//]);
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
