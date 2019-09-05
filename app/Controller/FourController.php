<?php
namespace app\Controller;
use app\Controller\Interfaces\ClosureInterface;
use app\Controller\Interfaces\ThreeInterface;
use app\Controller\Users\TraitOne;
use Closure;
class FourController extends Base implements ThreeInterface,ClosureInterface {
    use TraitOne;
    public function index(){
        $this->test();
    }
    public function test(){
        echo 'FourController/test';
    }
    public function change()
    {
        // TODO: Implement change() method.
        echo '实现了ThreeInterface';
        echo self::a;
    }
    public function active()
    {
        // TODO: Implement active() method.
        echo '这里是four/active';
    }

}