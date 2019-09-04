<?php
namespace app\Controller;
use Closure;
class ThisTest{
    protected $m;
    public function __construct()
    {
        $this->m = 222;
    }
    public function index(){
       return $this;
    }
    public function check(){
        if (method_exists(static::class,'index')){
            echo 'index方法存在';
        }else{
            echo 'index方法不存在';
        }
    }
    public function close($a,Closure $callback){
        $result = call_user_func($callback,$this);
//        $result = $callback($this);
        return $result.$a;
    }
    public function test(){
        echo 222;
    }

}