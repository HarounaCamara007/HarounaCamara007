<?php
        include("../bdd/database.php");
               
                if(isset($_POST["id"])){
                    $sql = "DELETE FROM formulaire WHERE id =?";
                    $stmt = $pdo->prepare($sql);
                    $res = $stmt->execute(array($_POST["id"])); 
                                    
                    header('Location:http://localhost/ProjetFinal/view/monespace.php');
                    exit();
                }   
?>