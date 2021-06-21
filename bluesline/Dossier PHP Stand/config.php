<?php
// J'utilise la méthode de try/catch J'appelle ma base de données j'utilise la méthode newPDO j'utilise MySQL je me connecte en local Hoste j'appelle ma base de données XXX j'utilise L'encodage chartset utf8 - Mon login c'est 'root' - il n'y a pas de mot de passe!//
    try
    {
    $bdd = new PDO('mysql:host=localhost;bdname=bluesline; charset=utf-8', 'root', "");
    }catch(Exception $e)   // catch exception si il y a une erreur//
    {
            die('erreur' .$e->getMessage());   // Qu'on arrête immédiatement avec un die//
    }
    ?>