<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>page d'enregitrement</title>
</head>
<body>
    <header>
    <div class="col">
        <a href="index.php"><img src="" alt="">Retour</a>
        <img src="./image/logo.jpg" class="image1">
        <h1>LOGICIEL DE SUIVI DES ÉTUDIANTS DE L’UFR/SDS</h1>
        <img src="./image/pharma.png" class="image2">
    </div>


</header>
<center> 
<form action="multipart" class="formulaire">
<input type="text" placeholder="Nom"> <br> <br>
<input type="text" placeholder="Prenom"><br> <br>
<input type="text" placeholder="Date de naissance"><br> <br>
<input type="text" placeholder="Email"> <br> <br>
<input type="text" placeholder="telephone"> <br> <br>

<select class="col form-select" aria-label="Default select example">
    <option selected>L'etudiant a-t-il un tuteur ?</option>
    <option value="1">Oui</option>
    <option value="2">Non</option>
  </select>
<br>
<br>
<br>
<button checked class="button"> <b> Enregistrer</button>
</form>
</center>


<footer class="footer_enregistrement">
    <h2>&COPY; UFR/SDS tous droits réservés</h2>
</footer>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>page d'inscription admin</title>
</head>
    <body>
    <header>
    <div class="col">
        <a href="index.php"><img src="" alt="">Retour</a>
        <img src="./image/logo.jpg" class="image1">
        <h1>LOGICIEL DE SUIVI DES ÉTUDIANTS DE L’UFR/SDS</h1>
        <img src="./image/pharma.png" class="image2">
    </div>
</header>



        <center> 
    <form action="multipart" class="formulaire">
        <input type="text" placeholder="Nom"> <br> <br>
        <input type="text" placeholder="Prenom"><br> <br>
        <input type="text" placeholder="Date de naissance"><br> <br>
        <input type="text" placeholder="Email">
        <br>
        <br>
        <br>
        <button checked class="button"> <b> Enregistrer</button>
    </form>
</center>
    <footer class="">
        <h2>&COPY; UFR/SDS tous droits réservés</h2>
    </footer>


</body>
</html>


<?php
     include_once "connexion.php"
?>