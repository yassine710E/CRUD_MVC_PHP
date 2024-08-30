<?php
//require with DB CONFIG to get data from there

require "../private/config.php";

//define the senpai Model Class

class Model

{   
    
    protected static $host=DB_CONFIG["host"];

    protected static $db=DB_CONFIG["db"];
    
    protected static $charset=DB_CONFIG['charset'];
    
    protected static $user=DB_CONFIG['username'];
    
    protected static $pass=DB_CONFIG['password'];

    protected static $pdo = null;
    
    static function DBconnection()
    
    {

        try {

            self::$pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$db.";charset=".self::$charset, self::$user, self::$pass);
            
            return self::$pdo;
            
        
        } catch (\PDOException $e) {
        
            print "<i style=\"color:red \">".$e->getMessage()."</i>";

            return false;
        
        }
    
    }
}