<?php
include 'config.php'; 

$lastComment = false;

try {
    $result = $bdd->query("SELECT * FROM Comments ORDER BY ID_comments  DESC LIMIT 1");

    if ($result !== false) {
        $lastComment = $result->fetch(PDO::FETCH_ASSOC);
    } else {
        error_log('La requête SQL a échoué.');
    }
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}

if ($lastComment) {
    $name = htmlspecialchars($lastComment['Name']);
    $commentaire = htmlspecialchars($lastComment['Commentaire']);
    $companyName = htmlspecialchars($lastComment['Name_compagny']);
    $profession = htmlspecialchars($lastComment['Profession']);
    $stars = intval($lastComment['stars']);
    $profilePicName = htmlspecialchars($lastComment['img_profil']);
    $companyPicName = htmlspecialchars($lastComment['img_compagny']);

    $profilePicPath = "C:\UwAmp\www\Site-Web-Pro-\Promote\Home_Page\Images"  . $profilePicName;
    $companyPicPath = "C:\UwAmp\www\Site-Web-Pro-\Promote\Home_Page\Images" . $companyPicName;

    $starsHtml = "";
    for ($i = 1; $i <= 5; $i++) {
        $starsHtml .= $i <= $stars ? '<span class="star" style="color: gold;">&#9733;</span>' : '<span class="star" style="color: grey;">&#9733;</span>';
    }
}
?>
