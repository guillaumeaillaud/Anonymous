<?php
function dataConnection()
{
    try {
        $user = "root";
        $psw = "";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $bdd = new PDO("mysql:host=localhost;dbname=anonymous;charset=utf8", $user, $psw, $options);
    } catch (PDOException $erreur) {
        echo "erreur connection" . $erreur->getMessage();
    }
    return $bdd;
}

