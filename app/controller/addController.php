<?php

//require the senpai controller class

require __DIR__.'/../../core/Controller.php';

//require the add model to insert data into database

require __DIR__."/../model/addModel.php";

class addController extends Controller
{
    function add(){
        parent::verifyHomeSession();
        
        parent::loadView(__FUNCTION__);

        if ($this->frontEnd_Verification()) {
           
            addModel::insert_data($this->frontEnd_Verification()[0],$this->frontEnd_Verification()[1],$this->frontEnd_Verification()[2]);
           
            header("location:/public/home");
        }
    

     }




}