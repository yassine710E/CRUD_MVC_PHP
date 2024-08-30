<?php


require "routes/routes.php";


class router
{
   
    static $controller;  // To hold the controller name
   
    static $method;      // To hold the method name
   
    static $args = [];   // To hold arguments

    static function route()
    {

        $uri = $_SERVER['REQUEST_URI'];
    
        // Check if the URI starts with '/public' and remove it
        
        if (strpos($uri, "/public") === 0) 

        {

            $uri = substr($uri, strlen("/public"));

        }

        $uri=explode("/",$uri);

      

        if (isset(ROUTES["/".$uri[1]])) 

        {

            self::$controller=ROUTES["/".$uri[1]][0];

            
            self::$method=ROUTES["/".$uri[1]][1];

            if (isset($uri[2])) 
            {
                self::$args[0]=$uri[2];
            }
         
            
            require "../app/controller/".self::$controller.".php";
         
         
        if (method_exists(self::$controller,self::$method)) 
        
        {
           
            $obj_controller=new (self::$controller);

            call_user_func_array([$obj_controller,self::$method],self::$args);

         
        }else {
         
            header("location:/public/404Error");
         
        }         
         
        }else
        {
            header("location:/public/404Error");
        }
    }
}
