<?php
namespace app\Controller;
use app\Controller\Interfaces\ClosureInterface;
use Closure;

class ClosureFirst{
    protected $app;
    public function __construct(ClosureInterface $app)
    {
        $this->app = $app;
    }
    public function ClosureTest(Closure $callback){
        call_user_func($callback,$this->app);
        call_user_func($callback,$this);
    }
    public function active(){
        echo '<br/>ClosureFirst/active<br/>';
    }
}