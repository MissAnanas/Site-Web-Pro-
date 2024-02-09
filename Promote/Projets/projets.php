<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="projets_styles.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap');
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site du jeu vidéo Outlast">
    <meta name="languages" content="HTML, CSS, JS, PHP, SQL ">
    <meta name="auteurs" content="Killian, Willem, Rémy, Arthur et Anaïs">
    <title>Promote</title>
</head>
<body>
    <div class="pageprojets">
        <?php 
          include("../Header/header.php"); 
        ?>
        <h1 class="titleprojets">Projets</h1>
    </div>


    <div class="theproject">       
        <div class="content">
            <div class="heading">
                <img class="imgprojects" src="../Projets/Images/iconproject.png" >
                <h2 class="titleprojethead"><font color = "#5956E8">//</font> 01 . PROJECTS</h2>
                <h1 class="projets">Parcourez nos projets</h1>
            </div>
        </div>

        <div class="containerall">
            <div class="container1">
                <img class="logoreseaux" src="../Projets/Images/projets1.png">
                <div class="txtprojets1">
                    <img src="../Projets/Images/icongoogle.png">
                    <div class="titletxt">
                        <h2 class="titleprojet">Comment nous avons aidé Google à augmenter son taux de conversion sur G-Suite de 25% en moins de 30 jours.</h2>
                        <p class="txtprojet">Tincidunt donec vulputate ipsum erat urna auctor. <br>Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. </p>
                    </div>
                    <a class="abtnprojet" href="../Project_Single/projetsingle.php"><button class="btnprojet">Voir le projet <img src="../Projets/Images/Vector white.png" width="14px" height="14px"></button></a>
                </div>
            </div>

            <div class="container2">
                <img class="logoreseaux" src="../Projets/Images/projets2.png">
                <div class="txtprojets1">
                    <img src="../Projets/Images/iconyoutube.png">
                    <div class="titletxt">
                    <h2 class="titleprojet">Comment nous avons aidé Google à augmenter son taux de conversion sur G-Suite de 25% en moins de 30 jours.</h2>
                    <p class="txtprojet">Tincidunt donec vulputate ipsum erat urna auctor. <br>Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. </p>
                    </div>
                    <a class="abtnprojet" href="../404/404.php"><button class="btnprojet">Voir le projet <img src="../Projets/Images/Vector white.png" width="14px" height="14px"></button></a>
                </div>
            </div>

            <div class="container3">
                <img class="logoreseaux" src="../Projets/Images/projets3.png">
                <div class="txtprojets1">
                    <img src="../Projets/Images/iconfacebook.png">
                    <div class="titletxt">
                        <h2 class="titleprojet">Comment nous avons aidé Google à augmenter son taux de conversion sur G-Suite de 25% en moins de 30 jours.</h2>
                        <p class="txtprojet">Tincidunt donec vulputate ipsum erat urna auctor. <br>Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. </p>
                        <a class="abtnprojet" href="../404/404.php"><button class="btnprojet">Voir le projet <img src="../Projets/Images/Vector white.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include("../Footer/footer.php"); 
    ?>
</body>
</html>