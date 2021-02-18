<?php
include('model/bdconnexion.php');

class modelProfesseur {

    public $reponse;
    public $reqInsert;

    public function find(){
        global $BDD;
        $this->reponse = $BDD->query('SELECT nom_prof , prenom_prof, email_prof, tel_prof  FROM professeur');
        
        return $this->reponse;

    }

    public function insertInfo(){
        global $BDD;
        if(!empty($_POST)){

            extract($_POST);
            

            $this->reqInsert =  $BDD->prepare('INSERT INTO professeur (nom_prof, prenom_prof, email_prof, tel_prof, mdp_prof) VALUES (?,?,?,?,?)');

            $this->reqInsert->execute(array($nom_prof, $prenom_prof, $email_prof, $tel_prof, $mdp_prof));
            
            header("Location:/exa/AdminProf");
        }


    }
}
?>