<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO Newsletter (mail) VALUES (:mail)";

    $stmt = $bdd->prepare($sql);



    $stmt->bindParam(':mail', $_POST['mail']);


    try {
        $stmt->execute();
        echo "Nouveau mail ajoutée avec succès";
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    $stmt->closeCursor();
}

?>
