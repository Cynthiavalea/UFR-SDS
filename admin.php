<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>page d'inscription admin</title>
</head>
<body>
    <header>
    <div class="col">
        <img src="./logo.jpg" class="image1">
        <h1>LOGICIEL DE SUIVI DES ÉTUDIANTS DE L’UFR/SDS</h1>
        <img src="./pharma.png" class="image2">
    </div>
</header>

<center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="form">
    <a href="accueil.php" class="back_btn"><img src="" alt="">Accueil</a>
    <h2>Veuillez vous inscrire cher admin</h2>
    <p class="erreur_message">
        Veuillez remplir tous les champs !
    </p>
 
    <form action="./backend/admin.php" method="post">
        <label for="">Nom</label>
        <input type="text" name="nom">
        <label for="">Prénom</label>
        <input type="text" name="prenom">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Mot de passe</label>
        <input type="password" name="mot_de_passe">
        <label for="">Confirmation mot de passe</label>
        <input type="password" name="confirmation_mot_de_passe">
        <input type="submit" value="S'inscrire" name="inscrire">
    </form>
    </center>

    <footer class="footer_enregistrement">
    <h2>&COPY; UFR/SDS tous droits réservés</h2>
</footer>

</html>