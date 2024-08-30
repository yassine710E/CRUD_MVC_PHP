<?php

//require the senpai controller class

require __DIR__.'/../../core/Model.php';

class addModel extends Model
{
    static function insert_data($nom,$prenom,$age){
        
        $PDO=parent::DBconnection();

        if ($PDO) 
        {
             $stmt=$PDO->prepare("INSERT INTO  etudiant(nom,prenom,age) VALUES(?,?,?)") ;
             
             $stmt->execute([$nom,$prenom,$age]);
             
        }
    }
}