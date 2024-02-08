<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "D:\UwAmp\www\Site-Web-Pro-";


    $profilePicName = basename($_FILES["img_profil"]["name"]);
    $target_file_profile = $target_dir . $profilePicName;
    move_uploaded_file($_FILES["img_profil"]["tmp_name"], $target_file_profile);

    $companyPicName = basename($_FILES["img_compagny"]["name"]);
    $target_file_company = $target_dir . $companyPicName;
    move_uploaded_file($_FILES["img_compagny"]["tmp_name"], $target_file_company);


    $sql = "INSERT INTO Comments (Name, Commentaire, Name_compagny, Profession, stars, img_compagny, img_profil) VALUES (:Name, :Commentaire, :Name_compagny, :Profession, :stars, :img_compagny, :img_profil)";

    $stmt = $bdd->prepare($sql);

    $stmt->bindParam(':Name', $_POST['Name']);
    $stmt->bindParam(':Commentaire', $_POST['Commentaire']);
    $stmt->bindParam(':Name_compagny', $_POST['Name_compagny']); 
    $stmt->bindParam(':Profession', $_POST['Profession']);
    $stmt->bindParam(':stars', $_POST['stars']);
    $stmt->bindParam(':img_compagny', $profilePicName);
    $stmt->bindParam(':img_profil', $companyPicName);

    try {
        $stmt->execute();
        echo "Nouveau commentaire ajoutée avec succès";
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    $stmt->closeCursor();
}
?>
