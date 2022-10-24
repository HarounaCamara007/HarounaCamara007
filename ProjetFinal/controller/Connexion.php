<?php
            session_start();
            require_once("../bdd/database.php"); 

            if(isset($_POST["Email"])){
                $valide= !empty($_POST["Email"]) &&
                         !empty($_POST["MotDePasse"]);
                if(!$valide){
                    echo "<p style='color:red'>Tous les champs sont obligatoire!</p>";
                }else{
                    $sql = "select Email, MotDePasse from connexion where Email='".$_POST['Email']."'";
                    $stmt = $pdo->query($sql, PDO::FETCH_ASSOC);
                    $stmt->execute();
                    
                    $result= $stmt->fetch();
                    $goodPassword= password_verify($_POST['MotDePasse'], $result["MotDePasse"]);

                    if($_POST['MotDePasse'] === $result["MotDePasse"]){
                        $_SESSION["User"]= $result;
                        header('Location: /ProjetFinal/view/monespace.php');
                    }else{
                        echo "<p style='color:red'>Identifiants incorrect !</p>";
                    }
                }
            }else if(isset($_SESSION["User"])){
                header('Location: /ProjetFinal/view/monespace.php'); 
            }
    ?>