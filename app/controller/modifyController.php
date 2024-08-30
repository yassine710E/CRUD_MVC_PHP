<?php
//require the senpai controller class

require __DIR__.'/../../core/Controller.php';


//require the add model to modify data into database

require __DIR__."/../model/modifyModel.php";


class modifyController extends Controller
{
    function modify($id){
        parent::verifyHomeSession();
        
        $obj_student=modifyModel::get_student($id);

        parent::loadView(__FUNCTION__,$obj_student);

        if ($this->frontEnd_Verification()) {
            
            modifyModel::modify_student($this->frontEnd_Verification()[0],$this->frontEnd_Verification()[1],$this->frontEnd_Verification()[2],$id);

            header("location:/public/home");
        }





    }
}