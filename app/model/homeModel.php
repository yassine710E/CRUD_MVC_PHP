<?php

//require the senpai controller class

require __DIR__.'/../../core/Model.php';

class homeModel extends Model
{
    static function get_all_students()
    {
        $PDO=parent::DBconnection();

        if ($PDO) 
        {

            $stmt=$PDO->prepare("SELECT * FROM etudiant ");
            
            $stmt->execute([]);

            $table=$stmt->fetchAll(PDO::FETCH_OBJ);

            return $table;

        }

    }
}
