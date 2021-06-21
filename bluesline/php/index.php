<?php
	echo "index.php ! <br>";
    $host = "localhost";
        $db_name = "bluesline";
    $username = "root";
    $password = "";
    $conn = null;
    try{
        $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
        echo "OK ! <br>";
    }catch(PDOException $exception){
        echo "Connection error: " . $exception->getMessage();
    }
            $query = "select * from musicien";
            //var_dump( $query );
            $stmt = $conn->prepare($query);
            if($stmt->execute()){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "id-musicien=" . $id-musicien . "<br>"; 
        }
    }
    ?>
<!--$this = class  -->

var_dump($POST);

?>




<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Formulaire BLUES LINE</title> 

            <!--     attention  C'EST A METTRE DANS LE <INDEX.PHP"> -->
<!-- 
        <style>
            *html{
                margin: 0;
                padding: 0;
            }
            body{
                display: inline-block;
                flex-direction: column;
                align-items: center;
                background: rgb(223, 137, 62);
                /* background-image:url(img/back-sitdeg.jpg) no-repeat fixed center/cover; */
            }
            form{
                padding: 20%;
                border-radius: 20px;
                width: 50%;
                display: flex;
                flex-direction: column;
                align-items: center;
                background: rgb(74, 140, 210);
            }
            
            input{
                margin-top: 20%;
            }
           
        </style>

</head> -->
<!-- <body>
    <h1>INSCRIPTION BLUES LINE</h1>
        <form action="traitement-formulaire.php" method="POST"> 
            <!--  placeholder préféré à label => directif-->
            <!-- <p>Déjà inscrit ?</p>
            <label for="identifiant-id">Rentrez votre identifiant</label>
            <input type="text" id="indentifaint-id" name="identifiant">
            <input name="submit" type="submit" value="GO formulaire">

            <input name="Email" type="email" placeholder="Complétez votre email" required class="form-control">
            <input name="pseudo" type="text" placeholder="Complétez votre pseudo" required class="form-control">
            <input name="password" type="mdp" placeholder="Entrez votre password" required class="form-control">
            <input name="password" type="mdp2" placeholder="Confirmez votre password" required class="form-control">

            <label for="submit-id">Envoyer le formulaire</label>
            <input name="submit" type="submit" id="submit-id" value="GO formulaire">
             -->

        <!-- </form>
    </body>
</html> -->
 --> -->













<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<form action="traitement.php" method="post" >
                <fieldset>
                    <legend>Quelques infos vous concernant</legend>             
                    <p><label for="email">Un email de contact? </label><input type="email" />
                    <p>
                    <label for="pseudo">Votre pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" placeholder=" - - - " size="30" maxlength="10" />
                    
                    <input type="text" name="prenom" id="prenom" autofocus required /

                    <input type="tel" />
                    <input type="date" />
                    <input type="submit" value="Clic et envoie" />
                </p>
                <p> Votre tranche d'âge :<br />
                    <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />
                    <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
                    <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
                    <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">50 et plus</label>
                </p>
                <form method="post" action="traitement.php">
                    <p>
                        <label for="pays">Dans quel pays vivez-vous ?</label><br />
                        <select name="pays" id="pays">
                            <option value="france">France</option>
                            <option value="espagne">Espagne</option>
                            <option value="italie">Italie</option>
                            <option value="royaume-uni">Royaume-Uni</option>
                            <option value="canada">Canada</option>
                            <option value="etats-unis">États-Unis</option>
                            <option value="chine">Chine</option>
                            <option value="japon">Japon</option>
                        </select>
                    </p>
                 </form>
                        </fieldset>
                 </form>
</body>
</html> -->
