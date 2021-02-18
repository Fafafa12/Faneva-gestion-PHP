<?php
class viewsEleve{

    public function eleve($reponses){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="lien"><a href="/exa/AdminProf">Professeur</a></div>
    <div class="principal">
    <div class="formulaire-etud">
        <form action="/exa/AdminEtud" method="POST" class="register">
            <div class="etud_info">
                <div>
                    <label for="nom_etud">Nom : </label>
                    <input type="text" name="nom_etud" id="nom_etud" class="nom_etud" placeholder="Entrez votre nom" required>
                </div>
                <div>
                    <label for="prenom_etud">Prénom : </label>
                    <input type="text" name="prenom_etud" id="prenom_etud" class="prenom_etud" placeholder="Entrez votre prénom" required>
                </div>
            </div>
                <div class="sexe_info">
                    <label for="sexe_etud">Sexe : </label>
                    <input type="radio" name="sexe_etud" id="sexe_etud" class="sexe_etud" value="Masculin">Masculin
                    <input type="radio" name="sexe_etud" id="sexe_etud" class="sexe_etud" value="Féminin">Féminin
                </div>
                <div class="dateNaiss_info">
                    <label for="dateNaiss_etud">Date de naissance : </label>
                    <input type="date" name="dateNaiss_etud" id="dateNaiss_etud" class="dateNaiss_etud" requiredd>
                </div>
                <div class="tel_info">
                    <label for="tel_etud">Telephone : </label>
                    <input type="tel" name="tel_etud" id="tel_etud" class="tel_etud" required>
                </div>
                <div class="email_info">
                    <label for="email_etud">Adresse email : </label>
                    <input type="email" name="email_etud" id="email_etud" class="email_etud" required>
                </div>
                <div class="mdp_info">
                    <label for="mdp_etud">Mot de passe : </label>
                    <input type="password" name="mdp_etud" id="mdp_etud" class="mdp_etud" required>
                </div>
                <div class="submit_info">
                    <input type="submit" name="inscrire" value="Add" >
                </div>
        </form>
    </div>
    <div class="list"></div>
    <table>
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Date de naissance</td>
            <td>Adresse email</td>
            <td>Contact</td>
            <td>Action</td>
        </tr>
        
        <?php while ($datas = $reponses->fetch()) {?>
        <tr>
                    <td> <?php echo $datas['nom_etud'];  ?> </td>
                    <td> <?php echo $datas['prenom_etud'] ;   ?> </td>
                    <td> <?php echo $datas['dateNaiss_etud'];   ?> </td>
                    <td> <?php echo $datas['email_etud'] ;   ?> </td>  
                    <td> <?php echo $datas['tel_etud'] ;   ?> </td>  
                    <td>
                        <div class="btn-action">
                            <form action="/exa/AdminEtud/Modifier/<?php echo $datas['id_etud'] ; ?> " method="POST">          
                                
                                <div class="btn-modifier">
                                    <input type="submit" value="Modifier">
                                </div>
                                
                            </form>
                            <form action="/exa/AdminEtud/Supprimer/<?php echo $datas['id_etud'] ; ?>" method="POST">          
            
                                <div class="btn-modifier">
                                    <input type="submit" value="Supprimer">
                                </div>
                            
                            </form>
                        </div>
                    </td>          
        </tr>
    <?php }
     $reponses->closeCursor();?>
    </table>
    </div>




    </div>
</body>
</html>
        <?php
    }

    public function edit($datas){
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="retour"><a href="/exa/AdminEtud">Retour Admin</a></div>
<div class="formulaire-etud">
        <form action="" method="POST" class="register">
            <div class="etud_info">
                <div>
                    <label for="nom_etud">Nom : </label>
                    <input type="text" name="nom_etud" id="nom_etud" class="nom_etud" placeholder="Entrez votre nom" value="<?php echo $datas['nom_etud'];  ?>" required>
                </div>
                <div>
                    <label for="prenom_etud">Prénom : </label>
                    <input type="text" name="prenom_etud" id="prenom_etud" class="prenom_etud" placeholder="Entrez votre prénom" value="<?php echo $datas['prenom_etud'];  ?>" required>
                </div>
            </div>
                <div class="sexe_info">
                    <label for="sexe_etud">Sexe : </label>
                    <input type="radio" name="sexe_etud" id="sexe_etud" class="sexe_etud" value="Masculin" <?php if ($datas['sexe_etud'] == "Masculin"){echo "checked";}?>>Masculin
                    <input type="radio" name="sexe_etud" id="sexe_etud" class="sexe_etud" value="Féminin" <?php if ($datas['sexe_etud'] == "Féminin"){echo "checked";}?>>Féminin
                </div>
                <div class="dateNaiss_info">
                    <label for="dateNaiss_etud">Date de naissance : </label>
                    <input type="date" name="dateNaiss_etud" id="dateNaiss_etud" class="dateNaiss_etud" value="<?php echo $datas['dateNaiss_etud'];  ?>" requiredd>
                </div>
                <div class="tel_info">
                    <label for="tel_etud">Telephone : </label>
                    <input type="tel" name="tel_etud" id="tel_etud" class="tel_etud" value="<?php echo $datas['tel_etud'];  ?>"required>
                </div>
                <div class="email_info">
                    <label for="email_etud">Adresse email : </label>
                    <input type="email" name="email_etud" id="email_etud" class="email_etud" value="<?php echo $datas['email_etud'];  ?>" required>
                </div>
                <div class="mdp_info">
                    <label for="mdp_etud">Mot de passe : </label>
                    <input type="password" name="mdp_etud" id="mdp_etud" class="mdp_etud" required>
                </div>
                <div class="submit_info">
                    <input type="submit" name="inscrire" value="Edit">
                </div>
        </form>
    </div>
</body>
</html>

        <?php
    }


}?>