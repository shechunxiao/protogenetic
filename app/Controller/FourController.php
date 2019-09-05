<?php
namespace app\Controller;
use app\Controller\Interfaces\ClosureInterface;
use app\Controller\Interfaces\ThreeInterface;
use app\Controller\Users\TraitOne;
use Closure;
class FourController extends Base implements ThreeInterface,ClosureInterface {
    use TraitOne;
    public $b;
    public function index(){
        $this->test();
    }
    public function test(){
        echo 'FourController/test|||||';
       $temp = $this->b;
       if (is_null($this->b)){
           echo 'null';
       }else{
           echo '非null';
       }
       $a = 1;
       print_r((Object)$a);
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