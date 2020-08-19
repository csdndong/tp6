<?php
/**
 * Create by Wy
 * User login
 * data 2020/6/9
 * Time 17:28
 */


namespace app\controller;
use app\BaseController;
use think\facade\Db;


class Data extends BaseController
{
    public function index( ){
//        $res=Db::table("mall_demo")->where('id',2)->find();
        //通过容器方式来获取
//        $res  = app("db")->table("mall_demo")->where('id',2)->find();

        $res=Db::table("mall_demo")
            ->where('id','>',2)
            ->where('category_id',3)
            ->order('id',"desc")
            ->page(1,8)
            ->select();
      dump($res);die;



    }



    public function insert(){

        $data=[
            'title'=>"yuandong223",
            'content'=>"被小营租房",
            'category_id'=>1,
            'create_time'=>date("Y-m-d H:i:s",time())


        ];
            $res=Db::table("mall_demo")->insert($data);
            echo Db::getLastSql();
            var_dump($res);die;
    }

}
