<?php
    require_once 'config.php';
        // On vérifie que toutes les variables poste existe
        if(isset($_POST['pseudo'])) && isset($_POST['email'] &&  isset($_POST['password'])  && isset($_POST['password_retype']);
    {

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);
        // On vérifie si c'est dans la base de données
    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ? ');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

        if($row == 0)  // la personne n'est pas dans la BDD
        {
           if(strlen($pseudo) >=100)
           {
               if(srtlen($email) >=100)
               {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {    
                        if($password == $password_retype);
                        {
                            // encore un hachage du mdp ??? il est fou ce mec!!! permet de ne pas stocker un mdp en clair
                            $password = hash('sha256', $password);
                            $ip = $_SERVER['REMOTE_ADDR']; // On insère l'adresse IP dans le serveur IP
                                        //On va insérer tout ça dans la base de données 1 REQUETE $insert ( C'est une requête préparer on va insérer dans utilisateur des valeurs du tableau associatif)
                            $insert = $bdd -> prepare('INSERT INTO utilisateurs (pseudo, email, password, ip") VALUES(:pseudo, :email, :password, :ip)');   
                            $insert ->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' =>$password,
                                'ip'=> $ip
                             )
                                header('Location:inscrition.php?reg_err=success')



                        }else header('location:inscritption.php?reg_err=password');
                    }else header('Location:inscription.php?reg_err=email');
               }else header('Location:inscription.php?reg_err=email_length');
           }else header('Location: inscription.php?reg_err=pseudo_length');
        }else header('Location: inscription.php?reg_err=already'); 
        // Already csq déjà inscrit oups !!!
        // Puis on va faire 4 vérifications ligne du dessus
        // Le pseudo et emailon bien moins de -100 caractères
        //et que les passord sont égaux => En fait c'est un délire du codeur puisque les chansons vérifier en amont lors de l'inscription il fait juste un peu de zèle en revérifiant quelque chose qui est déjà validé  C UN GRAND MALADE 888
        

}

?>