<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>page d'authentifiaction admin</title>
</head>
<body>
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
<br>
<br>
  <center>
<form action="./backend/admin.php" method="post">
        <label for="">Identifiant</label> 
        <input type="text" name="identifiant"> <br>
        <br>
        <label for="">Mot de passe</label>
        <input type="text" name="password"><br>
        <br>
        <input type="submit" value="Se connecter" name="connecter">
    </form>
    </center>
     <br>
    <footer class="footer_enregistrement">
    <h2>&COPY; UFR/SDS tous droits réservés</h2>
</footer>

</html>