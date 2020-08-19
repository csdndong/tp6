<?php

namespace app\api\controller;

use app\BaseController;

class Demo extends BaseController
{

    /**
     * @return Json
     */
    public function show()
    {

        $result = [
            'status' => 1,
            'msg' => "nihao",
            'result' => [
                'bas' => 1
            ],
        ];


        $header = [
            'Token' => "12121212asd",
        ];

        return json($result, 201,$header);


    }

    /**
     *
     */
    public function request(){

        var_dump($this->request->param('ac',1,"interval"));
    }

    /**
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public function getFamily(){

//        $result= (new \think\facade\Db)->table("mall_demo")->where("id",2)->find();
        $result=Db::table("mall_demo")->order("id","desc")
            ->where([
                ['id','>','2'],
                ['category_id','=',3]
            ])
            ->fetchSql()
            ->select();
//        $result=$result->toArray();
        var_dump($result);die;

    }
    public function mode1(){
        $result=demo1::find(2);
        dump($result->toArray());
    }
    public function model2(){
        $modelObj=new demo1();
        $res=$modelObj->where('category_id',3)
            ->limit(2)
            ->order('id','desc')
            ->select();
        dump($res->toArray());die;
        var_dump($res);die;

    }




}
