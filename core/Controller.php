<?php

//define the senpai class (Controller) 

class Controller
{
    static function loadView($page,$data=[])
    {
        
        require __DIR__."/../app/view/".$page.".php";
    }
    
    static function setSession($login){
    
        session_start();
    
        $_SESSION['user_login']=$login;
    
    }

    static function verifySession()
    {
        session_start();

        // If the user is already logged in, redirect to the dashboard or any other protected page
        
        if (isset($_SESSION['user_login'])) 
        {

            header("location:/public/home");
            
            exit();
        }
    }

    static function verifyHomeSession()
    {
            // Start the session
            session_start();
            
            // Check if the user session is set
            if (!isset($_SESSION['user_login'])) 
            {
                // If the session is not set, redirect to the login page
                header("Location:/public/login");
                exit(); // Stop further script execution
            }
    }


    function frontEnd_Verification()
    {
       if (isset($_POST['go'])) 
       {
           if ($_POST['nom']<>"" and $_POST['prenom']<>"" and $_POST['age']) 
           {
           
            return [$_POST['nom'],$_POST['prenom'],$_POST['age']];
           
           }else
           {
            print "<div class=\"p-4 mb-4 mt-4 text-center  text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400\" role=\"alert\">
            <span class=\"font-medium\">not Valid : </span> Fill All Info.
       </div>";
            
            return false;
            
           }
       }
    }


    

}