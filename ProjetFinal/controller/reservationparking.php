<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/reservationparking.css"/>
</head>
<body>
    
</body>
</html>

<?php

include('../bdd/database.php');
//séparer le rang et la place exemple: A1 en A-1
try {
    //Inserer les données du formulaire en bdd
    $sql= "INSERT INTO formulaire (prenom, nom, place, tel, date, arrivée, sortie, magazin) VALUES (?,?,?,?,?,?,?,?) ";
    $stmt =  $pdo->prepare($sql);

    $stmt->execute([$_POST['Prenom'],$_POST['Nom'],$_POST['rang'],$_POST['Tel'],$_POST['date'],$_POST['arrive'],$_POST['sortie'],$_POST['magasin']]);

      
    // print("Retourne le nombre de lignes effacées :\n");
    // $count = $stmt->rowCount();
    // ECHO "PLACE RESERVER  $count .\n";

    //compter le nombre de place restantes
    $a = -1;
    $b = 1;

    //redirige la page 
    header('Location:http://localhost/ProjetFinal/');
    exit();
} catch (\PDOException $e) {
    echo $e;
    //throw $th;
    echo "<div class='Erreur'>

    <p>Erreur ! Veuillez réessayer.</p>
    <a href='/ProjetFinal'><button id='buttonRetour1'>Retour</button></a>

    </div>";
}

?>