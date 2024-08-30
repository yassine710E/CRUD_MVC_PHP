<?php

//require the senpai controller class

   require __DIR__.'/../../core/Controller.php';

// require the login  model 

   require __DIR__."/../model/loginModel.php";

// define class loginController

   class loginController extends Controller
{
    function login()
    {
        parent::verifySession();
        
        parent::loadView(__FUNCTION__);
        
        

        if ($this->frontEnd_Verification()) 
        {
            if (loginModel::login_Model($this->frontEnd_Verification()[0],$this->frontEnd_Verification()[1])) {

                parent::setSession($this->frontEnd_Verification()[0]);
                
                header("location:/public/home");
            }else
            {
                print "<div class=\"p-4 mb-4 mt-4 text-center  text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400\" role=\"alert\">
                <span class=\"font-medium\">not Valid : </span> User Not Found Try Again.
           </div>";
            }

        }

    }

    function frontEnd_Verification()
    {
       if (isset($_POST['go'])) 
       {
           if ($_POST['login']<>"" and $_POST['password']<>"") 
           {
           
            return [$_POST['login'],$_POST['password']];
           
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