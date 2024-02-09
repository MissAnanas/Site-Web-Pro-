<?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");     
    header("Cache-Control: post-check=0, pre-check=0", false);     
    header("Pragma: no-cache");
    
    require_once 'config.php';

    function getTextById($id, $bdd) {
        $stmt = $bdd->prepare("SELECT content FROM service_page_texts WHERE id = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return ($result !== false) ? $result['content'] : '';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="services_styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Services de Promote">
    <meta name="languages" content="HTML, CSS, JS, PHP, SQL ">
    <meta name="auteurs" content="Killian, Willem, Rémy, Arthur et Anaïs">
    <title>Promote</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
    </style>
</head>

<body> 
    <div class="pagebanner">
        <header>
            <img class="logo" src="Images/Logo_promote.png">
            <div class="txtheader">
                <a class = "bheader" href="Accueil.php" ><?php echo getTextById(1, $bdd); ?></a>
                <a class = "bheader" href="A Propos.php" ><?php echo getTextById(2, $bdd); ?></a>
                <a class = "bheader" href="Services.php" ><?php echo getTextById(3, $bdd); ?></a>
                <a class = "bheader" href="Blog.php" ><?php echo getTextById(4, $bdd); ?></a>
                <a href="aaa.html"><button class="btnheader" ><?php echo getTextById(5, $bdd); ?></button></a>
            </div>
        </header>

        <div class="title_banner">
            <p ><?php echo getTextById(6, $bdd); ?></p>
        </div>
    </div>
    
    <div class="backgroundservices">
        <div class="pageservices">
            <div class="Content">
                <div class="Heading">
                    <div id="icon">
                        <img src="Images/gear_icon.png" class="icon" height="88px">
                    </div>
                    <div class="title">
                        <h1 class=title_01 ><font color = "#FEC90C">//</font><?php echo getTextById(7, $bdd); ?></h1>
                        <p class="decription_01" ><?php echo getTextById(8, $bdd); ?></p>    
                    </div>   
                </div>
            </div>

            <div class="containerservices">
                <div class="column1">
                    <div class="service">
                        <img class="logoservice1" src="Images/icon service 1.png">
                        <h3 class="titleservice" ><?php echo getTextById(9, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(10, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(11, $bdd); ?><img src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice2" src="Images/icon service 2.png">
                        <h3 class="titleservice" ><?php echo getTextById(12, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(13, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(14, $bdd); ?><img src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice3" src="Images/icon service 3.png">
                        <h3 class="titleservice" ><?php echo getTextById(15, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(16, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(17, $bdd); ?><img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
                <div class="column2">
                    <div class="service" >
                        <img class="logoservice4" src="Images/icon service 4.png">
                        <h3 class="titleservice" ><?php echo getTextById(18, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(19, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(20, $bdd); ?><img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice5" src="Images/icon service 5.png">
                        <h3 class="titleservice" ><?php echo getTextById(21, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(22, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(23, $bdd); ?><img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice6" src="Images/icon service 6.png">
                        <h3 class="titleservice" ><?php echo getTextById(24, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(25, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(26, $bdd); ?><img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="CTA">
      <div class="CTA-content background_fusee">
        <div class="CTA-text">
          <p ><?php echo getTextById(27, $bdd); ?></p>
        </div>
        <div class="boutons">
          <a href="contacts_page.html"><button class="CTA-button1" ><?php echo getTextById(28, $bdd); ?></button> </a>
          <a href="index.php"><button class="CTA-button2" ><?php echo getTextById(29, $bdd); ?></button></a>
        </div>
      </div>
    </div>

    <footer>
        <div class="footer_container">
            <div class="newsletter">
                
                    <img class="imgfooter1" src="Images/white_logo_promote.png">
                    <img class="imgfooter2" src="Images/logo_megaphone.png">
                
                <div class="containerfooter">
                    <h2 class="texttitle"  ><?php echo getTextById(30, $bdd); ?></h2>
                    <p class="textfooter"  ><?php echo getTextById(31, $bdd); ?></p>
                    <input class="input_news" type="text" name="" placeholder="Entrez Votre E-Mail...">
                    <input href="accueil.html"  class="button_footer"  type="button" value="Souscrire" />
                </div>
            </div>
            <div class="info_container">
                <div class="top">
                    <div class="tel_container">
                        <div class="telfooter">
                            <img class="tel_icon" src="Images/green_phone_icon.png">
                            <h2 class="tel_title"  ><?php echo getTextById(32, $bdd); ?></h2>
                        </div>
                        <h1 class="tel_nb"  ><?php echo getTextById(33, $bdd); ?></h1>
                        <p class="mailfooter"  ><?php echo getTextById(34, $bdd); ?></p>
                    </div>
    
                    <div class="adresse_container">
                        <div class="adresse">
                            <img class="adresse_icon" src="Images/yellow_location_icon.png">
                            <h2 class="adresse_title"  ><?php echo getTextById(35, $bdd); ?></h2>
                        </div>
                        <p class="rue"  ><?php echo getTextById(36, $bdd); ?></p>
                        <a href="https://maps.google.com" class="MAP"  ><?php echo getTextById(37, $bdd); ?></a>
                    </div>
                </div>
    
                <img class="barre" src="Images/footer_line.png"><img class="barre" src="Images/footer_line.png"><img class="barre" src="Images/footer_line.png"><br>
    
                <div class="bottom">
                    <div class="page_container">
                        <div class="page">
                            <img class="page_icon" src="Images/Icon_page.png">
                            <h2 class="page_title" ><?php echo getTextById(38, $bdd); ?></h2>
                        </div>
                        <div class="page_link">
                            <a href="Accueil.html" class="link" ><?php echo getTextById(39, $bdd); ?></a><br>
                            <a href="A propos.html" class="link" ><?php echo getTextById(40, $bdd); ?></a><br>
                            <a href="Blog.html" class="link" ><?php echo getTextById(41, $bdd); ?></a><br>
                            <a href="Prix.html" class="link" ><?php echo getTextById(42, $bdd); ?></a><br>
                            <a href="Contact.html" class="link" ><?php echo getTextById(43, $bdd); ?></a><br>
                            <a href="Services.html" class="link" ><?php echo getTextById(44, $bdd); ?></a><br>
                        </div>
                    </div>
                    <div class="reseau_container">
                        <div class="reseau">
                            <img class="reseau_icon" src="Images/Iconspeaker.png">
                            <h2 class="reseau_title" ><?php echo getTextById(45, $bdd); ?></h2>
                        </div>
                        <div class="reseau_link"></div>
                            <a href="facebook.fr" class="link" ><?php echo getTextById(46, $bdd); ?></a><br>
                            <a href="twitter.fr" class="link" ><?php echo getTextById(47, $bdd); ?></a><br>
                            <a href="instagram.fr" class="link" ><?php echo getTextById(48, $bdd); ?></a><br>
                            <a href="linkedin.fr" class="link" ><?php echo getTextById(49, $bdd); ?></a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>