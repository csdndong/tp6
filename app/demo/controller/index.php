<?php


namespace app\demo\controller;


use app\BaseController;

class index extends BaseController
{

    public function abc(){
        return 122121;
    }
    public function hello(){
        return time();
//        return 222222222222;
    }
}
