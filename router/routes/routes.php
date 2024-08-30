<?php


define("ROUTES",

array("/"=>["loginController","login"],

      "/login"=>["loginController","login"],

      "/logout"=>["logoutController","logout"],

      "/home"=>["homeController","index"],
      
      "/404Error"=>["errorController","notFound"] ,
      
      "/add"=>["addController","add"],
      
      "/delete"=>['deleteController',"delete"],

      "/modify"=>['modifyController',"modify"]
      )
);


