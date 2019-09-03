<?php

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

$d = 3;
$res = $thisTest->close(1, function ($thisTest) {
    return $thisTest->test();
});
print_r($res);






