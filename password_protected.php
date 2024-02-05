<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password_protected</title>
    <link href="password_protected_styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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

            <form action="login.php" method="post">
                <input type="password" class="enter_password" name="password" placeholder="Entrez votre Mot de Passe">
                <input type="submit" value="Envoyer" class="submit_button">
            </form>
        </div>
    </div>
    

</body>
</html>
