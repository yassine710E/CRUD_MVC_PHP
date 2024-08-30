<?php

//require the senpai controller class

require __DIR__.'/../../core/Model.php';


class loginModel extends Model

{
    
    static function login_Model($login,$password)
    
    {
    
        $PDO=parent::DBconnection();
        
        if ($PDO) 
    
        {
            
            $stmt=$PDO->prepare("SELECT * FROM user_app WHERE login=? and password=?");

            $stmt->execute([$login, $password]);

            if ($stmt->rowCount()>0) 
            {

                return true;

            
            }else{
                
                return false;
            
            }

        }
    }
}