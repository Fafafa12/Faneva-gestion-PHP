<?php
include ('Model/bdconnexion.php');
require ('Model/Etudiant.php');
require ('Model/Professeur.php');
class etudiantController{

    public function etudiantAdmin($type_Action='', $id_Action=0){
        ob_start(); 
        $result = new modelEtudiant;
        include('View/Admin/adminEtudiant.php');
        $view= new viewsEleve;

        if ($type_Action == "Modifier") {
            $reponses=$result->findOne($id_Action);
            $datas = $reponses->fetch();
            $result->updateOne($id_Action);
            

            $view->edit($datas);
        }
        else {
            $reponses=$result->find();
            $result->insertInfo();

            $view->eleve($reponses);

            if (!empty($type_Action) and !empty($id_Action) ) {
                if ($type_Action == "Supprimer") {
                    
                    $result->deleteEtud($id_Action);
                }
            }
        }   
        


        $html = ob_end_flush();

        return $html;
    }


    

}

class professeurController{
    
    public function professeurAdmin(){
        ob_start(); 
        
        $result = new modelProfesseur;
        $reponses=$result->find();
        $result->insertInfo();
       
        include('View/Admin/adminProfesseur.php');
        $html = ob_end_flush();

        return $html;
    }

    
}
?>