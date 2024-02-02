<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password_protected</title>
    <link href="password_protected_styles.css" rel="stylesheet">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap');
    </style>

    <div class="background">
        <div class="top_background">
            <img src="Images/locker.png" alt="cadenas">
                <h1>Page protégée</h1>
                <p>Accès administrateur Promote</p>

            <form action="">
                <input type="password" class="enter_password" name="password" placeholder="Entrez votre Mot de Passe">
                <input type="submit" value="Envoyer" class="submit_button">
            </form>
        </div>
    </div>
    

</body>
</html>

<?php
    if(isset($_GET['login_err'])){
        $err = htmlspecialchars($_GET['login_err']);
        switch($err){
            case 'mdp':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe incorrect
                </div>
            <?php
            break;

            case 'mail':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email incorrect
                </div>
            <?php
            break;

            case 'already':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> compte non existant
                </div>
            <?php
            break;
        }
    }

?>