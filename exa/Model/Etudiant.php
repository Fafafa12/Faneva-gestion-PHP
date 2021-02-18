<?php
include('model/bdconnexion.php');

class modelEtudiant {

    public $reponse;

    public $reqInsert;

    public $reqSupp;
    public $id_supp;
    public $id_modif;

    public function find(){
        global $BDD;
        $this->reponse = $BDD->query('SELECT id_etud, nom_etud , prenom_etud,  dateNaiss_etud, email_etud, tel_etud  FROM etudiant');
        
        return $this->reponse;

    }

    public function insertInfo(){
        global $BDD;
        if(!empty($_POST)){
            if ($_POST['inscrire'] == "Add") {
              
                extract($_POST);
                

                $this->reqInsert =  $BDD->prepare('INSERT INTO etudiant (nom_etud, prenom_etud, sexe_etud, dateNaiss_etud, email_etud, tel_etud, mdp_etud) VALUES (?,?,?,?,?,?,?)');

                $this->reqInsert->execute(array($nom_etud, $prenom_etud, $sexe_etud, $dateNaiss_etud, $email_etud, $tel_etud, $mdp_etud));
            }
            header("Location:/exa/AdminEtud");
        }
    }

    public function deleteEtud($id_supp){
        global $BDD;

        #$this->reqSupp = "DELETE FROM etudiant WHERE etudiant . id_etud = $this->id_supp";

        $this->reqSupp = $BDD->prepare('DELETE FROM etudiant WHERE etudiant . id_etud = ?');
        $this->reqSupp->execute(array($id_supp));
        #execute($this->reqSupp);

        header("Location:/exa/AdminEtud");  
    }

    public function findOne($id_modif){
        global $BDD;

        $this->reponse = $BDD->prepare('SELECT * FROM etudiant WHERE etudiant . id_etud = ? ');
        $this->reponse->execute(array($id_modif));
        
        return $this->reponse;

    }

    public function updateOne($id_update){
        global $BDD;
        if(!empty($_POST)){
            if ($_POST['inscrire'] == "Edit") {

                extract($_POST);
                $this->reqInsert =  $BDD->prepare('UPDATE etudiant SET nom_etud = ?, prenom_etud = ?, sexe_etud = ?, dateNaiss_etud = ?, email_etud = ?, tel_etud = ?, mdp_etud = ? WHERE etudiant . id_etud = ? ');

                $this->reqInsert->execute(array($nom_etud, $prenom_etud, $sexe_etud, $dateNaiss_etud, $email_etud, $tel_etud, $mdp_etud, $id_update));
            }
            header("Location:/exa/AdminEtud/Modifier/$id_update");
            header("Location:/exa/AdminEtud");
        }
    }


    
}
?>