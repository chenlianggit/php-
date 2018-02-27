<?php
/**
 * Created by PhpStorm.
 * User: ChenLiang
 * Date: 2018/2/27
 * Time: 0:00
 */

namespace core\lib;


class model
{
    function __construct($host = 'localhost',$username = 'root',$password = 'cc123456',$dbname='test',$charset = 'utf8')
    {
        $con = mysqli_connect($host,$username,$password) or die(mysqli_error());
        mysqli_select_db($dbname);
        mysqli_set_charset($charset);
    }

    //选表
    public function M($table,$prefix= ''){
        if(!empty($prefix)){
            $this->table = $prefix.$table;
        }else{
            $this->table = $table;
        }
        return $this;
    }

    //打印SQL
    public function fet($boolval){
        if($boolval == true){
            $this->boolval = true;
        }else{
            $this->boolval = false;
        }
        return $this;
    }
}