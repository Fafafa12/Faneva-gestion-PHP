<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="principal">
    <div class="formulaire-prof">
        <form action="" method="POST" class="register">
            <div class="prof_info">
                <div>
                    <label for="nom_prof">Nom : </label>
                    <input type="text" name="nom_prof" id="nom_prof" class="nom_prof" placeholder="Entrez votre nom">
                </div>
                <div>
                    <label for="prenom_prof">Prénom : </label>
                    <input type="text" name="prenom_prof" id="prenom_prof" class="prenom_prof" placeholder="Entrez votre prénom">
                </div>
            </div>
                
                <div class="tel_info">
                    <label for="tel_prof">Telephone : </label>
                    <input type="tel" name="tel_prof" id="tel_prof" class="tel_prof" >
                </div>

                <div class="email_info">
                    <label for="email_prof">Adresse email : </label>
                    <input type="email" name="email_prof" id="tel_prof" class="tel_prof" >
                </div>

                <div class="mdp_info">
                    <label for="mdp_prof">Mot de passe : </label>
                    <input type="password" name="mdp_prof" id="mdp_prof" class="mdp_prof" >
                </div>

                <div class="submit_info">
                    <input type="submit" name="inscrire" value="Add">
                </div>
        </form>
    </div>
    <div class="list"></div>
    <table>

    <?php while ($datas = $reponses->fetch()) {?>
    <tr>
                <td> <?php echo $datas['nom_prof'];  ?> </td>
                <td> <?php echo $datas['prenom_prof'] ;   ?> </td>
                <td> <?php echo $datas['email_prof'] ;   ?> </td>  
                <td> <?php echo $datas['tel_prof'] ;   ?> </td>           
    </tr>
    <?php }
     $reponses->closeCursor();?>
    </table>

    </div>




    </div>
</body>
</html>