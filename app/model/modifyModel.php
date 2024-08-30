<?php

//require the senpai controller class

require __DIR__.'/../../core/Model.php';


class modifyModel extends Model
{
    static function get_student($id){
       
        $PDO=parent::DBconnection();

        if ($PDO) 
        {
            $stmt=$PDO->prepare("SELECT * FROM etudiant WHERE id=?") ;
            
            $stmt->execute([$id]);

            $obj_student=$stmt->fetch(PDO::FETCH_OBJ);

            return $obj_student;
             
        }
    }

    static function modify_student($nom,$prenom,$age,$id){
        
        $PDO=parent::DBconnection();
        
        if ($PDO) 
        {
        
            $stmt=$PDO->prepare("UPDATE etudiant SET nom=? , prenom=? , age=? WHERE id=? ");
        
            $stmt->execute([$nom,$prenom,$age,$id]);
        
        }
    
    }
}