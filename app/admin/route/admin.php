<?php
use think\facade\Route;
Route::rule("test",'admin/index/hello','get');
Route::miss('admin/error/index');
