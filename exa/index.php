<?php
require('Controller/Admin_Controller.php');
var_dump($_GET);
$params = explode('/', $_GET['p']);
var_dump($params);



$controller = new etudiantController;
if(isset($params['0'])){
    if ($params['0'] == "AdminEtud") {
        
        if (!isset($params['1'])) {
            $controller->etudiantAdmin();
            }
            else {
                
                $controller->etudiantAdmin($params['1'],$params['2']);
            }
        }



    elseif ($params['0'] == "AdminProf") {
    $controller = new professeurController;
    var_dump($_POST);
    $controller->professeurAdmin();
    }
}






?>