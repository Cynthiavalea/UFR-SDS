<!DOCTYPE html>
<html lang="en">
    <?php
     $bdd = new mysqli("localhost", "root", "","ufr_sds");

            $query = "SELECT * FROM etudiants";
            $solution = mysqli_query($bdd, $query);

?>

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
<br><div class="div container">
<a href="ajouter.php" class="Btn_add"> <img src="">Ajouter</a>


<br>
         <br> 
         <br>
         <br> 
         <br> 
         <br>

<table>
    <tr id="items">
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de naissance</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Tuteur</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>

    <tr>

    <?php
        $id=1;

        while($lign=mysqli_fetch_assoc($solution)){
            echo"
            <tr>
            <th scope='row'>$id</th>
            <td>$lign[nom]</td>
            <td>$lign[prenom]</td>
            <td>$lign[date_naissance]</td>
            <td>$lign[telephone]</td>
            <td>$lign[email]</td>
            <td>$lign[tuteur]</td>
        </tr>
    ";
    $id+=1;
    
        }

?>

        <td><a href="modifier.php"> <img src="./logo.jpg" width="20px"> </a></td>
        <td><a href="#"> <img src="" alt=""> </a></td>
    </tr>
</table>

</div>
    
</body>
 
<footer class="footer_enregistrement">
    <h2>&COPY; UFR/SDS tous droits réservés</h2>
</footer>

</html>





