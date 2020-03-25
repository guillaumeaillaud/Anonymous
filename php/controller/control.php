<?php require "php/models/models.php";
if(isset($_POST["nom"])&&isset($_POST["email"])&&isset($_POST["telephone"])&&isset($_POST["message"])){

    
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $telephone=$_POST["telephone"];
    $message=$_POST["message"];

    echo "<h4>merci pour votre message <span style=color:blue;>$nom</span> </h4>";
    $requeteSql="INSERT INTO contact (nom,email,telephone,message)
                VALUES('$nom','$email','$telephone','$message')";

                $pdo=dataConnection();
                $pdo->exec($requeteSql);
                
}
