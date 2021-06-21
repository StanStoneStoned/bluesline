<?php
    session_start();
        require_once 'config.php';
                    //PAGE DE CONNEXION// Vérification de l'e-mail de vérification du pseudo de redirection vers la landing kpage
if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        //Check si la personne est bientôt inscrite dans notre base: Pour ça on va créer une variable check - Dans la base de données on prépare sélect pseudo, email, password FROM utilisateurs ou l'email est = à ça

        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ? ');
        $check->execute(array($email));
        
        // On va stocker les données dans $data on va rechercher avec "FETCH"avec row on va vérifier si c dans la base et avec if $row = 1 : la personne existe
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {    //haschage du mdp avec l'algorithme sha256
                    $password = hach('sha256' , $password)

                    //ensuite on va faire une vérificcation triple = parcce  qd on verifiait les hasch il y avait des failles sur le serveur pour éviter ça = = = 
                    if($data['password'] === $password);
                    {
                        // Là on va créer une session Pour mettre en valeur le pseudo de la personne
                        $_SESSION['user'] = $data['pseudo '];
                        //Une fois que c'est fait on redirige vers landing.pHP
                        header('Location:landing.php');
                    }else header('Location:index.php?login-err=password');
                }else header('Location:index.php?login-err=email');
        }else header('Location:index.php?login_err=already')  ;
    }else header('Location:index.php'); 

    // Stop à 8.59 https://youtu.be/jEgzxXCB9-w

?>