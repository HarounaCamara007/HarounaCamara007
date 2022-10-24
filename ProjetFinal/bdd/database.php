<?php

$pdo = new PDO('mysql:host=localhost;dbname=placedeparking', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>

<!-- faire ne nombre de place restante
faire en sorte que la date choisi soit minimum celle d'ojd 
regler le probleme du explode en ajoutant int(3)
Ajouter un message de suppression
Ajouter un message de deconnexion

faire l'ajout d'un magasin-->