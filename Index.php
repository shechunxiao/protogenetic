<?php

use app\Controller\ClosureFirst;
use app\Controller\ClosureImplementOne;
use app\Controller\FirstController;
use app\Controller\Man;
use app\Controller\SecondController;
use app\Controller\ThisTest;
use app\Controller\ThreeImplements;

require 'bootstrap/app.php';

$a = new FirstController();
$a->index();
echo '<br>';

$b = new SecondController();
$b->index();
echo '<br>';

$c = new Man(new ThreeImplements());
$c->groUp();
echo '<br>';

$thisTest = new ThisTest();
$thi = $thisTest->index();

$get_class = get_class($thisTest);
print_r($get_class);
$thisTest->check();
echo '<br/>';
$thisTest->nnnn(1,2,3,4);

//闭包函数学习测试
$d = 3;
$res = $thisTest->close(1, function ($thisTest) {
    return $thisTest->test();
});
print_r($res);
echo '<br/>*************************************<br/>';
//闭包详细研究

$closureFirst = new ClosureFirst(new ClosureImplementOne());
$closureFirst->ClosureTest(function($app){
    return $app->active();
});

$e = new stdClass();
$e->name = 22;
if (is_object($e)){
    echo '是一个对象';
}else{
    echo '不是一个对象';
}
ThisTest::get(11,22,33,44);





