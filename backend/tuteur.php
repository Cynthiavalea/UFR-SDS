<?php
 $bdd=new mysqli('localhost', 'root', '', 'ufr_sds');

require ("../connexion.php");
// $host='localhost';
// $dbname='ufr_sds';
// $username='root';
// $password='';



if(isset($_POST['enregistrer'])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];

    
    $res = $bdd->prepare("INSERT INTO tuteur(nom, prenom, telephone) VALUES( ?,?,? )");
    $recup = $res->execute(array($nom, $prenom, $telephone));


    
        header("location: ../liste.php");
 } else {
        echo "echec de l'insertion";
    }


    ?>

