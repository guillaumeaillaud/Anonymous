<?php require "php/models/models.php";
// verification si les tous les champs sont remplis dans notre formulaire
if(isset($_POST["nom"])&&isset($_POST["email"])&&isset($_POST["telephone"])&&isset($_POST["message"])){

// on stocke les données dans un tableau assossiatif

    $tabDonnees=["nom"=>$_POST["nom"],
    "email"=>$_POST["email"],
    "telephone"=>$_POST["telephone"],
    "message"=>$_POST["message"]
];
// (extract)raccourci pour creer des variables a partir de notre tableau assossiatif
extract($tabDonnees);
// debug on affiche un message pour l'utilisateur avec son nom
echo "<h4>merci pour votre message <span style=color:blue;>$nom</span> </h4>";
    
// la requete sql creat et on a met des tokens(:) pour eviter les injections sql
    $requeteSql="INSERT INTO contact (nom,email,telephone,message)
                VALUES(:nom, :email, :telephone, :message)";
// connecter php  a sql
                $pdo=dataConnection();
 // on envoie la requette preparée
                $pdoStatement=$pdo->prepare($requeteSql);
//on fournit les données extérieurs a part
                $pdoStatement->execute($tabDonnees);
   
                
}

