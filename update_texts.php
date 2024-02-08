<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once 'config.php';

    foreach ($_POST as $key => $value) {
        if (strpos($key, 'text_') === 0) {
            $id = substr($key, 5);
            $content = htmlspecialchars($value);
            $stmt = $bdd->prepare("UPDATE service_page_texts SET content = ? WHERE id = ?");
            $stmt->execute([$content, $id]);
        }
    }

    echo "Textes mis à jour avec succès !";
} else {
    http_response_code(400);
    echo "Mauvaise requête.";
}

?>