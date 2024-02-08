<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="admin.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap');
    </style>
    <p class="titleadmin">Bonjour Admin</p>
    
    <div class="containeradmin">
        <form id="updateForm">
            <?php
                header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");     
                header("Cache-Control: post-check=0, pre-check=0", false);     
                header("Pragma: no-cache");
                
                require_once 'config.php';

                $stmt = $bdd->query("SELECT * FROM service_page_texts");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<label for="text_' . $row['id'] . '">' . $row['content'] . '</label>';
                    echo '<input type="text" id="text_' . $row['id'] . '" name="text_' . $row['id'] . '" value="' . htmlspecialchars($row['content']) . '"><br>';
                }
            ?>

            <button class="btnadmin" type="button" onclick="updateTexts()">Enregistrer</button>
        </form>
        </div>

    <script>
        function updateTexts() {
            var formData = $("#updateForm").serialize();

            $.ajax({
                type: "POST",
                url: "update_texts.php",
                data: formData,
                success: function(response) {
                    alert("Textes mis à jour avec succès !");
                },
                error: function(error) {
                    console.error("Erreur lors de la mise à jour des textes :", error);
                }
            });
        }
    </script>
</body>
</html>