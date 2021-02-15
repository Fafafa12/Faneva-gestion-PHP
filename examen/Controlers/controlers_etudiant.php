<?php

class controlers_etudiant{

    public function recuperer_info(){
        if(!empty($_POST)){
            extract($_POST);
            #echo $nom_etud;
        }
    }


}


?>