<?php 
class Database{

    private static $host ="localhost";
    private  static$username="root";
    private static $password="";
    private  static $database="isga";
    private  static $connection;

    private static $instance = null;

    public  static function con()
    {
      
        try {
             self::$connection = new PDO("mysql:host=".self::$host.";dbname=".self::$database,self::$username,self::$password);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        return self::$connection;
    }
    

    public static function getInstance(){ 
        if(self::$instance == null){
            self::$instance = self::con();
        }  
        return self::$instance;
    }
    
}


?>