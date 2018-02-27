<?php
/**
 * Created by PhpStorm.
 * User: ChenLiang
 * Date: 2018/2/26
 * Time: 22:38
 */

namespace core\lib;


class route
{
    public $ctrl;   //控制器
    public $action; //方法
    public function __construct()
    {
        //1.隐藏index.php
        //2.获取URL，参数部分
        //3.返回对应控制器和方法
        //var_dump($_SERVER);
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            if($patharr[0]== 'index.php'){
                array_splice($patharr,0,1); //删除重新排序
            }
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
            }else{
                $this->ctrl = 'index';
            }
            if(isset($patharr[1])){
                $this->action = $patharr[1];
            }else{
                $this->action = 'index';
            }

        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}