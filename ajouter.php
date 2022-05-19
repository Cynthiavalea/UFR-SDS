<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>page d'accueil</title>
</head>
<body>
    <a href="index.php"></a>
    <header>
    <div class="col">
        <img src="./logo.jpg" class="image1">
        <h1>LOGICIEL DE SUIVI DES ÉTUDIANTS DE L’UFR/SDS</h1>
        <img src="./pharma.png" class="image2">
    </div>
</header>

</header>
<center> 
<form action="./backend/etudiants.php" method="post" class="formulaire">
<input type="text" placeholder="Nom" name="nom"> <br> <br>
<input type="text" placeholder="Prenom" name="prenom"><br> <br>
<input type="date" placeholder="Date de naissance" name="date_naissance"><br> <br>
<input type="email" placeholder="Email" name="email"> <br> <br>
<input type="text" placeholder="telephone" name="telephone"> <br> <br>

<!-- <div class="row"> -->
<select class="" aria-label="Default select example" name="tuteur">
    <option selected >L'etudiant a-t-il un tuteur ?</option>
    <option value="1">Oui</option>
    <option value="2">Non</option>
  </select>
<!-- </div> -->
<br>
<br>
<br>
<button checked class="button" name="enregister"> <b> Enregistrer</button>
</form>
</center>

<br>
<br>
<br>

<footer class="footer_enregistrement">
    <h2>&COPY; UFR/SDS tous droits réservés</h2>
</footer>