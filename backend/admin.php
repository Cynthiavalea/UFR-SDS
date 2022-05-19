<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>admin backend</title>
</head>





<?php
include("../accueil.php")
?>

<?php
if (isset($_POST["enregister"])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password = $_POST["mot_de_passe"];
    $password_2 = $_POST["confirmation_mot_de_passe"];
    $email = $_POST["email"];


    if ($password == $password_2) {
        $query = " INSERT INTO `admin`  ( nom, prenom, email , mot_de_passe )
        VALUES( '$nom', '$prenom' , '$email' , md5('$password') ) ";
        $resultats = mysqli_query($con, $query);
        if ($resultats) {
            header("Location: ../authentification.php
            ");
            exit;
        } else {
            echo "erreur";
        }
    } else {
        header("Location: page_erreur.php?error=1");
    }
}

if (isset($_POST["connecter"])) {

    $password = $_POST["password"];
    $password = md5($password);
    $identifiant = $_POST["identifiant"];
    $query = " SELECT email , mot_de_passe FROM `admin` 
    WHERE  email = '$identifiant' AND mot_de_passe='$password' ";
    $resultats = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($resultats);

    if ($row) {
        header("Location: ../index.php");
        exit;
    }
    else {
        header("Location: ../page_erreur.php?error=2");
        exit;
    }
}
?>

