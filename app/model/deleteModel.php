<?php

//require the senpai controller class

require __DIR__.'/../../core/Model.php';


class deleteModel extends Model
{
    static function delete_data($id){
        
        $PDO=parent::DBconnection();

        if ($PDO) 
        {
             $stmt=$PDO->prepare("DELETE FROM etudiant WHERE id=?") ;
             
             $stmt->execute([$id]);
             
        }
    }
}