<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/11/14
 * Time: 11:50
 */
$rgx01 = '/^Chapter [1-9][0-9]*/';
$rgx02 = '/Chapter [0-9]{1,2}/';
$rgx03 = '/Chapter [1-9][0-9]?/';
$rgx04 = '/Chapter [1-9][0-9]{0,1}/';
$rgx05 = '/<.*>/';
$rgx06 = '/<.*?>/';
$rgx07 = '/<\w+?>/';
echo preg_match($rgx01,'1 Chapter 10',$result);
var_dump($result);
echo preg_match($rgx02,'Chapter 101',$result);
var_dump($result);
echo preg_match($rgx03,'Chapter 101',$result);
var_dump($result);
echo preg_match($rgx04,'Chapter 101',$result);
var_dump($result);
echo preg_match($rgx05,'<H1>Chapter 1 - 介绍正则表达式</H1>',$result);
var_dump($result);
echo preg_match($rgx06,'<H1>Chapter 1 - 介绍正则表达式</H1>',$result);
var_dump($result);
echo preg_match($rgx06,'<STRONG>Chapter 1 - 介绍正则表达式</STRONG>',$result);
var_dump($result);
echo preg_match($rgx07,'<AAAAA>Chapter 1 - 介绍正则表达式</AAAAA>',$result);
var_dump($result);
$klass='DesignPatterns\Behavioral\Visitor\Group';
echo preg_match('#([^\\\\]+)$#', $klass, $result);
var_dump($result);
echo preg_match('[^abc]', 'plain-abc', $result);
var_dump($result);
//echo preg_match('"<\s*a[^>]*>([^<]|<(?!/a))*<\s*/a\s*>"', '<a href="1.html"><img src="1.gif">test<span style="color:red;">', $result);
//var_dump($result);