<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="aboutus.css" />
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
    <div class="pageaboutus">
        <?php 
          include("../Header/header.php"); 
        ?>
        <h1 class="titleaboutus">A propos</h1>
    </div>
    <div class="backgroundabout">
        <div class="about">
            <img class="imgabout" src="../About_Us/Images/imgaboutus.png">
            <div class="content2">
                <div class="heading">
                    <div class="containertitle2">
                        <img class="iconabout" src="../About_Us/Images/yellow icon.png">
                        <div class="containertxt2">
                            <h2 class="titleabout"><font color = "#FEC90C">//</font> 01 . A PROPOS</h2>
                            <h1 class="digital">L’agence #1 dans le digital marketing</h1>
                        </div>
                    </div>
                    <img class="line" src="../About_Us/Images/lineabout.png">
                </div>
                <div class="points">
                    <div class="un">
                        <img class="logogoals" src="../About_Us/Images/logogoals.png">
                        <h3 class="titleaboutus2">Développement</h3>
                    </div>
                    <div class="deux">
                        <img class="logomegaphone" src="../About_Us/Images/logomegaphone.png">
                        <h3 class="titleaboutus2">Recherche & Strategie</h3>
                    </div>
                </div>
                <p class="txtaboutus">Lorem ipsum dolors sit non amet consectetur adipiscing elit fringilla aliquam Aliquam vestibulum libero morbi blandit cursus risus. Laoreet non curabitur gravida arcu ac tortor semper vivera nam libero justo laoreet mollis aliquam <br>ut porttitor leo a diam.</p>
                <a href="../Contact_Us/contacts_page.php"><button class="btnaboutus">Contact</button></a>
            </div>
        </div>
    </div>

    <div class="pageslide">
        <div class="heading2">
            <img class="imgequipe" src="../About_Us/Images/slidelogo.png" >
            <h2 class="titleequipe"><font color = "#FEC90C">//</font> 02 . NOS VALEURS</h2>
            <h1 class="valeur">Les valeurs fondamentales qui sous-tendent notre travail</h1>
        </div>
        <div class="carousel-container">
            <div class="left-arrow" onclick="slide(-1)" onmouseover="hoverLeftArrow()" onmouseout="unhoverLeftArrow()">
                <img id="leftArrowImage" class="logo_flecheL" src="../About_Us/Images/flechegauche.png" alt="Left Arrow">
            </div>

            <div class="carousel" id="carousel">
                <div class="carousel-item">
                    <img src="../About_Us/Images/Iconvaleurs1.png" alt="Efficacité">
                    <h3 class="carousel_titre">Efficacité</h3>
                    <p class="carousel_txt">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            
                <div class="carousel-item">
                    <img src="../About_Us/Images/Iconvaleurs2.png" alt="Efficacité">
                    <h3 class="carousel_titre">Responsabilité</h3>
                    <p class="carousel_txt">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            
                <div class="carousel-item">
                    <img src="../About_Us/Images/Iconvaleurs3.png" alt="Efficacité">
                    <h3 class="carousel_titre">Engagement</h3>
                    <p class="carousel_txt">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            
                <div class="carousel-item">
                    <img src="../About_Us/Images/Iconvaleurs4.png" alt="Efficacité">
                    <h3 class="carousel_titre">Travail d'équipe</h3>
                    <p class="carousel_txt">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            
                <div class="carousel-item">
                    <img src="../About_Us/Images/Iconvaleurs4.png" alt="Efficacité">
                    <h3 class="carousel_titre">Efficacité</h3>
                    <p class="carousel_txt">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            
                <div class="carousel-item">
                    <img src="../About_Us/Images/Iconvaleurs4.png" alt="Efficacité">
                    <h3 class="carousel_titre">Efficacité</h3>
                    <p class="carousel_txt">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
        
            <div class="right-arrow" onclick="slide(1)" onmouseover="hoverRightArrow()" onmouseout="unhoverRightArrow()">
                <img id="rightArrowImage" class="logo_flecheR" src="../About_Us/Images/flechedroite.png" alt="Right Arrow">
            </div>
        </div>
        <div class="btn_carousel">
            <a href="../Contact_Us/contacts_page.php"><button class="btnaboutus">Contact</button></a>
            <a href="../Services/services.php"> <button class="btn_carousel2" >
                <p class="txt_btn2">Nos Services</p>
                <img src="../About_Us/Images/flecheVdroite.png" class="btn_fleche">
            </button></a>
        </div>
    </div>
    <script>
        function hoverLeftArrow() {
            document.getElementById('leftArrowImage').src = '../About_Us/Images/flecheVgauche.png';
        }
        
        function unhoverLeftArrow() {
            document.getElementById('leftArrowImage').src = '../About_Us/Images/flechegauche.png';
        }

        function hoverRightArrow() {
            document.getElementById('rightArrowImage').src = '../About_Us/Images/flecheVdroite.png';
        }
        
        function unhoverRightArrow() {
            document.getElementById('rightArrowImage').src = '../About_Us/Images/flechedroite.png';
        }
    </script>
    <script>
        let itemWidth = 340;
        function slide(direction) {
          let carousel = document.getElementById('carousel');
          if (direction === 1) {
            carousel.scrollBy({ left: itemWidth, behavior: 'smooth' });
          } else {
            carousel.scrollBy({ left: -itemWidth, behavior: 'smooth' });
          }
        }
    </script>

    <div class="pageequipe">
        <div class="heading2">
            <img class="imgequipe" src="../About_Us/Images/equipelogo.png" >
            <h2 class="titleequipe"><font color = "#5956E8">//</font> 03 . NOTRE ÉQUIPE</h2>
            <h1 class="equipe">Notre équipe d’experts marketing</h1>
        </div>
        <div class="team">
            <div class="person">
                <img class="person1" src="../About_Us/Images/person1.png">
                <img class="lineperson" src="../About_Us/Images/lineperson.png">
                <h3 class="name">Pippa Clarkson</h3>
                <p class="metierperson">Manager principale</p>
                <div class="logoreseau">
                    <img src="../About_Us/Images/Facebook.png">
                    <img src="../About_Us/Images/Twitter.png">
                </div>
            </div>
            <div class="person2">
                <img class="person1" src="../About_Us/Images/person2.png">
                <img class="lineperson" src="../About_Us/Images/lineperson.png">
                <h3 class="name">Richard	Walsh</h3>
                <p class="metierperson">Manager</p>
                <div class="logoreseau">
                    <img src="../About_Us/Images/Facebook.png">
                    <img src="../About_Us/Images/Twitter.png">
                    <img src="../About_Us/Images/Instagram.png">
                </div>
            </div>
            <div class="person">
                <img class="person1" src="../About_Us/Images/person3.png">
                <img class="lineperson" src="../About_Us/Images/lineperson.png">
                <h3 class="name">Richard	Walsh</h3>
                <p class="metierperson">Manager</p>
                <div class="logoreseau">
                    <img src="../About_Us/Images/Facebook.png">
                    <img src="../About_Us/Images/Twitter.png">
                    <img src="../About_Us/Images/Instagram.png">
                </div>
            </div>
        </div>
    </div>


    <div class="backgroundbureaux">
        <div class="pagelocation">
            <div class="containertitle">
                <img class="logolocation" src="../About_Us/Images/locationlogo.png">
                <div class ="containertxt">
                    <h2 class="titlelocation"><font color = "#5956E8">//</font> 04 . NOS BUREAUX</h2>
                    <h1 class="visite">Venez nous rendre visite dans le monde entier le monde</h1>
                </div>
                <a class="abtn" href="../Contact_Us/contacts_page.php"><button class="btnlocation">Contact</button></a>
            </div>
            <div class="containerlocation">
                <div class="location">
                    <img src="../About_Us/Images/drapeau1.png">
                    <h3 class="ville">San Francisco, USA</h3>
                    <p class="adress">1650 Page. San Francisco, California(CA), 94117</p>
                    <div class="vectorlocation">
                        <img class="tel" src="../About_Us/Images/vector telephone.png"> <p class="adress">(414) 809 - 2567</p>
                    </div>
                    <div class="vectorlocation2">
                        <img class="mail" src="../About_Us/Images/vector mail.png"> <p class="adress">Contact@promote.com</p>
                    </div>
                </div>
                <div class="location">
                    <img src="../About_Us/Images/drapeau2.png">
                    <h3 class="ville">Toronto, CA</h3>
                    <p class="adress">1650 Page. San Francisco, California(CA), 94117</p>
                    <div class="vectorlocation">
                        <img class="tel" src="../About_Us/Images/vector telephone.png"> <p class="adress">(414) 809 - 2567</p>
                    </div>
                    <div class="vectorlocation2">
                        <img class="mail" src="../About_Us/Images/vector mail.png"> <p class="adress">Contact@promote.com</p>
                    </div>
                </div>
                <div class="location">
                    <img src="../About_Us/Images/drapeau1.png">
                    <h3 class="ville">San Francisco, USA</h3>
                    <p class="adress">1650 Page. San Francisco, California(CA), 94117</p>
                    <div class="vectorlocation">
                        <img class="tel" src="../About_Us/Images/vector telephone.png"> <p class="adress">(414) 809 - 2567</p>
                    </div>
                    <div class="vectorlocation2">
                        <img class="mail" src="../About_Us/Images/vector mail.png"> <p class="adress">Contact@promote.com</p>
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




