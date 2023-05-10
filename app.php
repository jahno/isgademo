<?php 
class App{

    private static $c = "/isga";

    public static function  Param($v){ 
        return ($_GET[$v] ?? $_POST[$v]  );
    }

    public static function  getParam($v){ 
        return  ($_GET[$v]  ?? '');
    }

    public static function  postParam($v){ 
        return ( $_POST[$v]  );
    }




    public static function getSession($k){
        if($_SESSION) return $_SESSION[$k];
        return '';
    }
    
    public static function setSession($k,$v){
        return $_SESSION[$k]=$v;
    }

    public static function isConnect(){
        return self::getSession('user');
    }


    public static function getRoute($ro){
        return "$ro";
    }

 

    
}

?>