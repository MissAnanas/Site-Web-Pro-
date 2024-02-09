<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail']; 
    $sql = "INSERT INTO Newsletter (mail) VALUES (:mail)";

    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':mail', $email);

    try {
        $stmt->execute();
        echo "Nouveau mail ajoutée avec succès";

        $to = $email;
        $subject = ""; 
        $message = "newsletter"; 
        $headers = "From: rmagne@gaming.tech"; 

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            mail($to, $subject, $message, $headers);
            echo " Email de newsletter envoyé.";
        } else {
            echo " Email non valide.";
        }

    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    $stmt->closeCursor();
}
?>
