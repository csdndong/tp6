<?php

/**
 * 中间件
 */

namespace app\admin\middleware;


use think\Response;

class Check
{

    /**中间件处理数据
     * @param $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request,\Closure $next){

        $request->type="XX";//定义需要处理的数据
        return $next($request);
    }

    /**
     * 中间件结束调度
     * @param Response $response
     */
    public function end(Response $response){

    }


}
