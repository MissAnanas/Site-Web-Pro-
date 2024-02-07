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
                <a class = "bheader" href="Accueil.php" id="1">Accueil</a>
                <a class = "bheader" href="A Propos.php" id="2">A Propos</a>
                <a class = "bheader" href="Services.php" id="3">Services</a>
                <a class = "bheader" href="Blog.php" id="4">Blog</a>
                <a href="aaa.html"><button class="btnheader" id="5">Démarrer</button></a>
            </div>
        </header>

        <div class="title_banner">
            <p id="6">Services</p>
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
                        <h1 class=title_01 id="7"><font color = "#FEC90C">//</font>01 . SERVICES</h1>
                        <p class="decription_01" id="8">Services à fort impact pour faire passer votre entreprise au niveau suivant</p>    
                    </div>   
                </div>
            </div>

            <div class="containerservices">
                <div class="column1">
                    <div class="service">
                        <img class="logoservice1" src="Images/icon service 1.png">
                        <h3 class="titleservice" id="9">Marketing réseaux sociaux</h3>
                        <p class ="txtservice" id="10">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt.</p>
                        <a href="Services.php"><button class="btnservices3" id="11">Voir plus <img src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice2" src="Images/icon service 2.png">
                        <h3 class="titleservice" id="12">Publicité payée</h3>
                        <p class ="txtservice" id="13">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="Services.php"><button class="btnservices3" id="14">Voir plus <img src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice3" src="Images/icon service 3.png">
                        <h3 class="titleservice" id="15">Analyses avancées</h3>
                        <p class ="txtservice" id="16">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="Services.php"><button class="btnservices3" id="17">Voir plus <img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
                <div class="column2">
                    <div class="service" >
                        <img class="logoservice4" src="Images/icon service 4.png">
                        <h3 class="titleservice" id="18">SEO Optimisation</h3>
                        <p class ="txtservice" id="19">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="Services.php"><button class="btnservices3" id="20">Voir plus <img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice5" src="Images/icon service 5.png">
                        <h3 class="titleservice" id="21">Tunnel Optimisation</h3>
                        <p class ="txtservice" id="22">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="Services.php"><button class="btnservices3" id="23">Voir plus <img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice6" src="Images/icon service 6.png">
                        <h3 class="titleservice" id="24">Marketing de contenu</h3>
                        <p class ="txtservice" id="25">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="Services.php"><button class="btnservices3" id="26">Voir plus <img class="imgservice" src="Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="CTA">
      <div class="CTA-content background_fusee">
        <div class="CTA-text">
          <p id="27">Contactez nous et démarrez la croissance avec nous</p>
        </div>
        <div class="boutons">
          <a href="contacts_page.html"><button class="CTA-button1" id="28">Contact</button> </a>
          <a href="index.php"><button class="CTA-button2" id="29">Démarrer</button></a>
        </div>
      </div>
    </div>



    <footer>
        <div class="footer_container">
            <div class="newsletter">
                <div><img class="img" src="Images/logo_promote.png"></div>
                <div><img class="img" src="Images/logo_megaphone.png"></div>
                <h2 class="texttitle" id="30">Souscrire maintenant</h2>
                <p class="textfooter" id="31">Obtenez les dernières <br>informations sur notre agence</p>


                <form action="newsletter.php" method="post"> 
                <input class="input_news" type="mail" name="mail" placeholder="Entrez Votre E-Mail...">
                <input   class="button_footer"  type="submit" value="Souscrire" class="submit_button" />
                </form>
            </div>
            <div class="info_container">
                <div class="top">
                    <div class="tel_container">
                        <div class="tel">
                            <img class="tel_icon" src="Images/green_phone_icon.png">
                            <h2 class="tel_title" id="32">Restons en contact</h2>
                        </div>
                        <h1 class="tel_nb" id="33">+33 4 79 64 57 62</h1>
                        <p class="mail" id="34">contact@promote.com</p>
                    </div>
            
                    <div class="adresse_container">
                        <div class="adresse">
                            <img class="adresse_icon" src="Images/yellow_location_icon.png">
                            <h2 class="adresse_title" id="35">Lieu</h2>
                        </div>
                        <p class="rue" id="36">50 rue de Marseille <br>69 000 LYON</p>
                        <a href="https://maps.google.com" class="MAP" id="37">MAP</a>
                    </div>
                </div>

                <img class="barre" src="Images/footer_line.png"><img class="barre" src="Images/footer_line.png"><img class="barre" src="Images/footer_line.png"><br>
                
                <div class="bottom">
                    <div class="page_container">
                        <div class="page">
                            <img class="page_icon" src="Images/Icon_page.png">
                            <h2 class="page_title" id="38">Pages</h2>
                        </div>
                        <div class="page_link">
                            <a href="Acceuil.html" class="link" id="39">Acceuil</a><br>
                            <a href="A propos.html" class="link" id="40">A propos</a><br>
                            <a href="Blog.html" class="link" id="41">Blog</a><br>
                            <a href="Prix.html" class="link" id="42">Prix</a><br>
                            <a href="Contact.html" class="link" id="43">Contact</a><br>
                            <a href="Services.html" class="link" id="44">Services</a><br>
                        </div>
                    </div>
                    <div class="reseau_container">
                        <div class="reseau">
                            <img class="reseau_icon" src="Images/Iconspeaker.png">
                            <h2 class="reseau_title" id="45">Réseaux</h2>
                        </div>
                        <div class="reseau_link"></div>
                            <a href="facebook.fr" class="link" id="46">Facebook</a><br>
                            <a href="twitter.fr" class="link" id="47">Twitter</a><br>
                            <a href="instagram.fr" class="link" id="48">Instagram</a><br>
                            <a href="linkedin.fr" class="link" id="49">LinkedIn</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>