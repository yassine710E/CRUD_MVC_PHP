<?php

//require the senpai controller class

require __DIR__.'/../../core/Controller.php';


//require the add model to delete data 

require __DIR__."/../model/deleteModel.php";

class deleteController extends Controller
{
    function delete($id){
        parent::verifyHomeSession();

        deleteModel::delete_data($id);

        header("location:/public/home");



    }
}