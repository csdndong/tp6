<?php


namespace app\admin\exception;

use  think\exception\Handle;
use  think\Response;
use Throwable;
class Http extends Handle
{


    public $httpStatus=500;
    /**
     * Render an exception into an HTTP response.
     *
     * @access public
     * @param \think\Request   $request
     * @param Throwable $e
     * @return Response
     */
    public function render($request, Throwable $e): Response
    {

        // 添加自定义异常处理机制
        if (ENV('APP_DEBUG')) {
            // 如果是HttpResponseException异常则原样输出
            // JUMP插件里的success,error和result方法均返回的是HttpResponseException异常
            if ($e instanceof HttpResponseException) {
                return $e->getResponse();
            }

            // Whoops 接管请求异常
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
            return Response::create(
                $whoops->handleException($e),
                'html',
                500
            );
        }
        return parent::render($request, $e);

    }
}
