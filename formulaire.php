<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO Contact (firstname_name, mail, job, subject, message, dates) VALUES (:firstname_name, :mail, :job, :subject, :message, :dates)";

    $currentDate = date('Y-m-d');
    $stmt = $bdd->prepare($sql);


    $stmt->bindParam(':firstname_name', $_POST['user_name']);
    $stmt->bindParam(':mail', $_POST['mail']);
    $stmt->bindParam(':job', $_POST['company']); 
    $stmt->bindParam(':subject', $_POST['subject']);
    $stmt->bindParam(':message', $_POST['message']);
    $stmt->bindParam(':dates', $currentDate);

    try {
        $stmt->execute();
        echo "Nouveau commentaire ajoutée avec succès";
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    $stmt->closeCursor();
}

?>