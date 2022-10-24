<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="public/css/index.css"/>
    <link rel="stylesheet" href="public/css/indexFooter.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&family=Libre+Bodoni:ital,wght@1,500&display=swap" rel="stylesheet">


    <div class="header"> 
    
<h1 id="titreReservation">Réservez votre place dès maintenant</h1>
    <img id="logo" src="./public/img/logoprojetfinal.PNG"></img>
    

    <a href="http://localhost/ProjetFinal/view/Connexion.php"><button id="buttonConnexion">Connexion</button></a>



<p id="text1">Zone Commerciale Gonesse</p>
    <!-- <h1 id="titre1">ParkingPro</h1> -->
   
</div>



</head>
<body>

<?php

// $placedispoAuchan = rand(100,105);
// $placedispoIkea = rand(100,105);
// $placedispoMcdo = 1;
?>
<?php
        include("bdd/database.php");
        $date = new DateTime();
        $dateSelected =  $date->format('Y-m-d');
        $arrive =  $date->format('H:i:s');
        $sortie =  "20:30:00";
        $NombreIkea = $pdo->query("SELECT Count(*) from place 
        WHERE id not in (select place from formulaire where date='$dateSelected' and arrivée<='$arrive' and sortie>='$sortie')
        and id_magasin=2;")->fetchColumn();

        $NombreMcDo = $pdo->query("SELECT Count(*) from place 
        WHERE id not in (select place from formulaire where date='$dateSelected'
        and arrivée<='$arrive' and sortie>='$sortie')
        and id_magasin=1;")->fetchColumn();

        $NombreAuchan = $pdo->query("SELECT Count(*) 
        from place 
        WHERE id not in (select place from formulaire where date='$dateSelected' 
        and arrivée<='$arrive' and sortie>='$sortie')
        and id_magasin=3;")->fetchColumn();
            
?>

<div class="choix">
    <a href="http://localhost/ProjetFinal/view/ParkingAuchan.php">
    <div id="auchan">
        <h1 id="titre">Parking Auchan</h1>
        <?php
        echo "<p id= 'TextPlaceDispo'> $NombreAuchan Places displonibles</p>"
        ?>
    </div>
    </a>

    <a href="http://localhost/ProjetFinal/view/ParkingIkea.php">
    <div id="ikea">
        <h1 id="titre">Parking Ikea</h1>
        <?php
        echo "<p id= 'TextPlaceDispo'>$NombreIkea Places displonibles</p>"
        ?>
    </div>
    </a>

    <a href="http://localhost/ProjetFinal/view/ParkingMcDo.php">
    <div id="mcdo">
        <h1 id="titre">Parking McDonald</h1>
       
        <?php
       echo "<p 'TextPlaceDispo'> $NombreMcDo Places displonibles</p>"  
?>
    </div>
    </a>
</div>


<div class="footer">
<div class="Contact">
<h1>Contact</h1>
    <ul>
    <li>Num: 01.46.38.18.39 </li>
    <li>parkingPro@gmail.com</li>
    </ul>
</div>

<div class="Adresse">
    <h1>Adresse</h1>
    <ul>
    <li>5 Avenue Leclerc</li>   
    <p>95500,Gonesse<p>
    </ul>
</div>

<div class="Partenaires">
<h1>Partenaires</h1>
    <ul>
        <li>Auchan France</li>
        <li>Ikea France</li>
        <li>Mc Donald's France</li>
    </ul>
</div>
</div>    
</div>


<img id= "video" src="./public/img/videoParking.gif"/>



</body>
</html>