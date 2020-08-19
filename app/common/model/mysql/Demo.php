<?php


namespace app\common\mysql\model;

use  think\Model;
class Demo extends Model
{

    public function getStatusTestAttr($value,$date){
        $status=[
            0=>"待审核",
            1=>'正常'
        ];

        return $status[$date['status']];
    }

}
