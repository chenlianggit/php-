<?php
/**
 * Created by PhpStorm.
 * User: ChenLiang
 * Date: 2018/2/26
 * Time: 22:31
 */

namespace core;


class cl
{
    //启动框架要调用的方法
    static function run(){
        $route      = new \core\lib\route;   //加载路由类
        $ctrlClass  = $route->ctrl;
        $action     = $route->action;
        $ctrlfile   = APP.'/controller/'.$ctrlClass.'Controller.php';
        $controller = MODULE.'\controller\\'.$ctrlClass.'Controller';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $controller;
            $ctrl->$action();
        }else{
            echo "找不到控制器";exit;
        }
    }
    //类自动加载
    static function load($class){
        require ROOT.'/'.$class.'.php';
    }
}