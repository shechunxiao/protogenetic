<?php
namespace app\Controller;
use app\Controller\Interfaces\ThreeInterface;

class ThreeImplements implements ThreeInterface{
    public function change()
    {
        // TODO: Implement change() method.
        echo 'ThreeInterface';
    }
}