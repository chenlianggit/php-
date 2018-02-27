<?php
/**
 * 入口文件
 * User: ChenLiang
 * Date: 2018/2/26
 * Time: 22:16
 */

define('ROOT',__DIR__);     //根目录

define('CORE',ROOT.'/core'); //项目文件   控制器  模型
define('APP',ROOT.'/app');
define('MODULE','app');
define('DEBUG',true);       //调试模式 项目上线请关闭

if(DEBUG){
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

include CORE.'/common/fun.php';     //函数库
include CORE.'/cl.php';             //项目核心文件

spl_autoload_register('\core\cl::load');

\core\cl::run();    //启动框架调用的方法








