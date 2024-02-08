<?php
    $dsn = "mysql:host=mysql-promotecapybara.alwaysdata.net;dbname=promotecapybara_bd";
    $user = "345538";
    $password = "promote2024";

    try {
        $bdd = new PDO($dsn, $user, $password);
    }catch(Exception $e){
        die('Erreur'.$e->getMessage());
    }

?>