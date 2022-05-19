<?php

include("../connexion.php");


    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $tuteur = $_POST["tuteur"];


    $query = " INSERT INTO `etudiants`  ( nom, prenom, date_naissance, telephone, email, tuteur  )
    VALUES( '$nom', '$prenom' , '$date_naissance' , '$telephone', '$email', '$tuteur' ) ";
    $resultats = mysqli_query($con, $query);
    if ($resultats) {
        header("Location: ../liste.php
        ");
        exit;
    } else {
        echo "erreur";
    }
