<?php


namespace app\admin\controller;


use think\db\Fetch;
use think\response\Json;
use think\facade\View;

class Error
{
    /**
     * @param $name
     * @param $arguments
     * @return Json
     */
    public function __call($name, $arguments)
    {
       return  View::fetch('error');

    }

}
