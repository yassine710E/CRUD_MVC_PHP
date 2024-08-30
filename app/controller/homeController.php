<?php

//require the senpai controller class

require __DIR__.'/../../core/Controller.php';

// require the login  model 

require __DIR__."/../model/homeModel.php";

// define class errorController

class homeController extends Controller
{
    function index(){

         parent::verifyHomeSession();
 
         $table_obj_students= homeModel::get_all_students();
          
         parent::loadView(__FUNCTION__,$table_obj_students);



    }
}