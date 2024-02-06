<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO Comments (	Name, Commentaire, Name_compagny, Profession, stars, img_compagny, img_profil,	) VALUES (	:Name, :Commentaire, :Name_compagny, :Profession, :stars, :img_compagny, :img_profil,	)";

    $stmt = $bdd->prepare($sql);


    $stmt->bindParam(':Name', $_POST['Name']);
    $stmt->bindParam(':Commentaire', $_POST['Commentaire']);
    $stmt->bindParam(':Name_compagny', $_POST['Name_compagny']); 
    $stmt->bindParam(':Profession', $_POST['Profession']);
    $stmt->bindParam(':stars', $_POST['stars']);
    $stmt->bindParam(':img_compagny', $_POST['img_compagny']);
    $stmt->bindParam(':img_profil', $_POST['img_profil']);


    try {
        $stmt->execute();
        echo "Nouveau commentaire ajoutée avec succès";
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profilePicture"]["name"]);
    if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_file)) {
        echo "La photo de profil a été téléchargée avec succès.";
    } else {
        echo "Désolé, une erreur s'est produite lors du téléchargement de votre photo de profil.";
    }
        


    $stmt->closeCursor();
}

?>
