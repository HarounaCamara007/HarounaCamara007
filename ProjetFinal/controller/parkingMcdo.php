<?php
  
  include("../bdd/database.php");
        
      $date = new DateTime();
      $dateSelected =  $date->format('Y-m-d');
      $arrive =  $date->format('H:i');
      $sortie =  "20:30:00";

      if(isset($_GET["date"])){
        $dateSelected= $_GET["date"];
        $arrive= $_GET["arrive"];
        $sortie= $_GET["sortie"];
      }
      
      $sql= "SELECT place.*, formulaire.id as reservation from place
      left join formulaire on formulaire.place=place.id and date='$dateSelected' and arrivée<='$arrive' and sortie>='$sortie' 
      where rang ='A' AND id_magasin=1 group by place.id";
      $stmt =  $pdo->query($sql);
      $result = $stmt->fetchAll();

      $sqlB= "SELECT place.*, formulaire.id as reservation from place
      left join formulaire on formulaire.place=place.id and date='$dateSelected' and arrivée<='$arrive' and sortie>='$sortie' 
      where rang ='B' AND id_magasin=1 group by place.id";
      $stmtB =  $pdo->query($sqlB);
      $resultB = $stmtB->fetchAll();

      $sqlC= "SELECT place.*, formulaire.id as reservation from place
      left join formulaire on formulaire.place=place.id and date='$dateSelected' and arrivée<='$arrive' and sortie>='$sortie' 
      where rang ='C' AND id_magasin=1 group by place.id";
      $stmtC =  $pdo->query($sqlC);
      $resultC = $stmtC->fetchAll();

      $sqlD= "SELECT place.*, formulaire.id as reservation from place
      left join formulaire on formulaire.place=place.id and date='$dateSelected' and arrivée<='$arrive' and sortie>='$sortie' 
      where rang ='D' AND id_magasin=1 group by place.id";
      $stmtD =  $pdo->query($sqlD);
      $resultD = $stmtD->fetchAll();

      $sqlE= "SELECT place.*, formulaire.id as reservation from place
      left join formulaire on formulaire.place=place.id and date='$dateSelected' and arrivée<='$arrive' and sortie>='$sortie' 
      where rang ='E' AND id_magasin=1 group by place.id";
      $stmtE =  $pdo->query($sqlE);
      $resultE = $stmtE->fetchAll();
        //sql pour lire toute les valeur de la table place
        //stmt pour demander les valeur de la table Place;
        //fetchALL  pour récupérer les résultats sous forme de tableau 
?>