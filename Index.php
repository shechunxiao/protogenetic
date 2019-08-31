<?php

use app\Controller\FirstController;
use app\Controller\Man;
use app\Controller\SecondController;
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

