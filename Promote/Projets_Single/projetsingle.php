<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="projetsingle.css" />
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
    <?php 
        include("../Header/header.php"); 
    ?>

    <div class="pageprojet">
        <div class="containerarticle">
            <div class="titleprojet">
                <div class="titlegoogle">
                    <img class="logogoogle2" src="../Projets_Single/Images/logogoogle2.png">
                    <img class="vectorarticle" src="../Projets_Single/Images/vector violet article.png">
                    <h1 class="dateprojet">1ER AVRIL, 2023</h1>
                </div>
                <h2 class="titlearticle">Comment nous avons aidé Google à augmenter le taux de conversion sur G-Suite de 25% en moins de 30 jours</h2>
                <img class="photoarticle" src="../Projets_Single/Images/photoarticle.png">
                <div class="subtitle">
                    <div class="one">
                        <h3 class="titlesub">Client</h3>
                        <p class="txtsub">YouTube</p>
                    </div>
                    <div class="two">
                        <h3 class="titlesub">Services</h3>
                        <p class="txtsub">Publicité payante</p>
                    </div>
                    <div class="three">
                        <h3 class="titlesub">Plateforme</h3>
                        <p class="txtsub">Créateurs de YouTube</p>
                    </div>
                    <div class="four">
                        <h3 class="titlesub">Resultats</h3>
                        <h2 class="counter">85m+</h2>
                        <p class="txtsub2">Plus De Visiteurs Par An</p>
                    </div>
                </div>
            </div>
            <div class="contenttxt">
                <div class="overview">
                    <h1 class="titletxt">Description du projet</h1>
                    <p class="txtprojet1">Veniam quae. Nostrum facere repellendus minus quod aut aliquam neque reiciendis. Qui beatae vel magnam repudiandae ipsum repellat repudiandae. Voluptate at dolores ut dolor sint occaecati similique. Velit eius ab delectus temporibus.</p>
                    <div class="points">
                        <li class="txtprojet">Dolor duis lorem enim eu turpis potenti nulla semper velit sed</li>
                        <li class="txtprojet">Lorem a eget blandit ac neque amet amet non dapibus pulvinar</li>
                        <li class="txtprojet">Pellentesque non integer ac id imperdiet blandit sit bibendum</li>
                    </div>
                </div>
                <p class="txtprojet">Lorem ipsum dolor sit amet consectetur adipiscing elit nunc donec vel sem ut ipsum odio duis vel sem et ornare consequat. Bibendum nibh et eget magna at habitant mauris nisi pellentesque morbi massa in eleifend tempus pellentesque sed pellentesque ridiculus aliquam maecenas turpis vulputate pellentesque maecenas egestas platea dictumst. <br>
                    <br>Lorem ipsum dolor sit amet consectetur adipiscing elit mollis justo integer vitae aliquet elit velit dictum. Commodo facilisi sapien natoque eu elit odio est libero scelerisque urna aliquet id mauris suspendisse.</p>
                <ol>
                    <li class="txtprojet">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis justo integer vitae aliquet elit velit dictum.</li>
                    <li class="txtprojet">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis justo integer vitae aliquet elit velit dictum.</li>
                    <li class="txtprojet">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis justo integer vitae aliquet elit velit dictum.</li>
                </ol>
                <p class="txtprojet">Veniam quae. Nostrum facere repellendus minus quod aut aliquam neque reiciendis. Qui beatae vel magnam repudiandae ipsum repellat repudiandae. Voluptate at dolores ut dolor sint occaecati similique. Velit eius ab delectus temporibus.</p>
            </div>
        </div>
    </div>


    <form action="newsletter.php" method="post"> 
        <div class="newsletter">
            <div class="newsletter_content">
                <h1 class="titre_newsletter">Souscrivez à notre <font color="#FFDC60">newsletter</font></h1>
                <div class="input_content">
                    <input class="input_mail" type="text" name="mail" placeholder="Entrez votre E-Mail...">
                    <button class="btn_souscrire">Souscrire</button>
                </div>
            </div>
        </div>
    </form>

    <?php 
        include("../Footer/footer.php"); 
    ?>
</body>
</html>