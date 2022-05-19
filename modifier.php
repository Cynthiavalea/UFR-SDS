<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>page de connexion</title>
</head>
    <header>
    <div class="col">
        <img src="./logo.jpg" class="image1">
        <h1>LOGICIEL DE SUIVI DES ÉTUDIANTS DE L’UFR/SDS</h1>
        <img src="./pharma.png" class="image2">
    </div>
</header>
<br>
<br>
<br>
<br>
<br>
<center>
<div class="form">
    <a href="index.php" class="back_btn"><img src="" alt="">Retour</a>
    <h2>Modifier l'étudiant</h2>
    <p class="erreur_message">
        Veuillez remplir tous les champs !
    </p>

    <form action="" method="POST">
        <label for="">Nom</label>
        <input type="text" name="nom">
        <label for="">Prénom</label>
        <input type="text" name="prenom">
        <label for="">Date de naissance</label>
        <input type="text" name="Date de naissance">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Téléphone</label>
        <input type="submit" value="Modifier l'étudiant" name="button">
    </form>
    </center>
</div>
<footer class="footer_enregistrement">
    <h2>&COPY; UFR/SDS tous droits réservés</h2>
</footer>