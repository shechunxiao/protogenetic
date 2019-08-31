<?php
namespace app\Controller;
use app\Controller\Interfaces\ThreeInterface;

class Man{
    protected $three;
    public function __construct(ThreeInterface $three)
    {
        $this->three = $three;
    }
    public function groUp(){
        echo $this->three->change().'Man/groUp';
    }
}