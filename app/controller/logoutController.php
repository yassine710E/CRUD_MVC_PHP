<?php

//require the senpai controller class

require __DIR__.'/../../core/Controller.php';

// define class errorController

class logoutController extends Controller
{
    function logout(){

         session_start();
        
         session_destroy();
        
         header("location:/public/");
        
         exit();

    }
}