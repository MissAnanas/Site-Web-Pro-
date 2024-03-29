<?php
 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../Header/header_styles.css"/>
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
    <div class="pagebanner">
        <?php 
          include("../Header/header.php"); 
        ?>

        <div class="container">
            <h2 class="title"><font color = "#FEC90C">//</font>AGENCE MARKETING</h2>
            <h1 class ="title2">Une agence <br> <font color = "#5956E8">marketing</font> 100% <br> digitale</h1>
            <p class="latin">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt ius ex. Ut vis mazim erroribus forensibus.</p>
            <a href="../Services/services.php"><button class="btnservices">Nos Services</button></a>
            <a href="#pagepricing"><button class="btnstart">Démarrer</button></a>
        </div>
    </div>


    <div class="backgroundservices">
        <div class="pageservices">
            <div class="containertitle">
                <img class="logotitle" src="../Home_Page/Images/iconservice.png">
                <div class ="containertxt">
                    <h2 class="titlesrvc"><font color = "#FEC90C">//</font> 01 . SERVICES</h2>
                    <h1 class="services">Des services à fort impact pour faire passer votre entreprise au niveau supérieur</h1>
                </div>
                <a class="abtn" href="../Services/services.php"><button class="btnservices2">Nos Services <img src="../Home_Page/Images/Vector purple.png" width="14px" height="14px"></button></a>
            </div>
            <div class="containerservices">
                <div class="column1">
                    <div class="service">
                        <img class="logoservice1" src="../Home_Page/Images/icon service 1.png">
                        <h3 class="titleservice">Marketing réseaux sociaux</h3>
                        <p class ="txtservice">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt.</p>
                        <a href="../Services_Single/ServicesSingle.php"><button class="btnservices3">Voir plus <img src="../Home_Page/Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice2" src="../Home_Page/Images/icon service 2.png">
                        <h3 class="titleservice">Publicité payée</h3>
                        <p class ="txtservice">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="../404/404.php"><button class="btnservices3">Voir plus <img src="../Home_Page/Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice3" src="../Home_Page/Images/icon service 3.png">
                        <h3 class="titleservice">Analyses avancées</h3>
                        <p class ="txtservice">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="../404/404.php"><button class="btnservices3">Voir plus <img src="../Home_Page/Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
                <div class="column2">
                    <div class="service">
                        <img class="logoservice4" src="../Home_Page/Images/icon service 4.png">
                        <h3 class="titleservice">SEO Optimisation</h3>
                        <p class ="txtservice">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="../404/404.php"><button class="btnservices3">Voir plus <img src="../Home_Page/Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice5" src="../Home_Page/Images/icon service 5.png">
                        <h3 class="titleservice">Tunnel Optimisation</h3>
                        <p class ="txtservice">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="../404/404.php"><button class="btnservices3">Voir plus <img src="../Home_Page/Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice6" src="../Home_Page/Images/icon service 6.png">
                        <h3 class="titleservice">Marketing de contenu</h3>
                        <p class ="txtservice">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a href="../404/404.php"><button class="btnservices3">Voir plus <img src="../Home_Page/Images/Vector grey.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="backgroundabout">
        <div class="about">
            <img class="imgabout" src="../Home_Page/Images/about.png">
            <div class="content2">
                <div class="heading">
                    <div class="containertitle2">
                        <img class="iconabout" src="../Home_Page/Images/yellow icon.png">
                        <div class="containertxt2">
                            <h2 class="titleabout"><font color = "#FEC90C">//</font> 02 . A PROPOS</h2>
                            <h1 class="digital">L’agence marketing #1 dans le digital</h1>
                        </div>
                    </div>
                    <img class="line" src="../Home_Page/Images/lineabout.png">
                    <p class="txt1">Lorem Ipsum is simply dummy text of the printing and typesetting industry ftyuu Ipsum has been the industry's standard book. It has survived not only <br>five centuries, 
                    but also the leap into electronic typesetting.</p>
                </div>
                <div class="points">
                    <div class="un">
                        <h3 class="titlepoints">Résultats garantis</h3>
                        <div class="circle">
                            <img class="une" src="../Home_Page/Images/une.png">
                            <img class="line2" src="../Home_Page/Images/Line 2.png">
                        </div>
                        <p class="txt2">Lorem Ipsum is simply dummy text of the printing<br>and typesetting industry.</p>
                    </div>
                    <div class="deux">
                        <h3 class="titlepoints">Une équipe d’experts à votre service</h3>
                        <div class="circle2">
                            <img class="deux" src="../Home_Page/Images/deux.png">
                            <img class="line2" src="../Home_Page/Images/Line 2.png">
                        </div>
                        <p class="txt2">Consectetur amet dolor sit comeneer ilremsilom<br>dolce issilm acalrm leoinsion duycoqun<br>consemleint lorem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="pageproccess">
        <div class="content">
            <div class="heading2">
                <img class="imgproccess" src="../Home_Page/Images/iconproccess.png" >
                <h2 class="titleproccessus"><font color = "#5956E8">//</font> 03 . PROCÉDURE</h2>
                <h1 class="processus">Un processus simple, mais<br>puissant et efficace</h1>
            </div>
            <div class="schema">
                <div class="containerprocess1">
                    <img class="imgstep1" src="../Home_Page/Images/schema1.png">
                    <div class="titlestep2">
                        <h3 class="titleproccess">Exécution du travail</h3>
                        <p class="txtproccess">consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm </p>
                    </div>
                    <img class="imgstep3" src="../Home_Page/Images/schema3.png">
                </div>

                <div class="positionbarre">
                    <img class="number1" src="../Home_Page/Images/number1.png">
                    <img class="number2" src="../Home_Page/Images/number2.png">
                    <img class="barreproccess" src="../Home_Page/Images/barreproccess.png">
                    <img class="number3" src="../Home_Page/Images/number3.png">
                </div>

                <div class="containerprocess3">
                    <div class="titlestep1">
                        <h3 class="titleproccess">Plan marketing</h3>
                        <p class="txtproccess">consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm </p>
                    </div>
                    <img class="imgstep2" src="../Home_Page/Images/schema2.png">
                    <div class="titlestep3">
                        <h3 class="titleproccess">Croissance</h3>
                        <p class="txtproccess">consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="backgroundcommentaire">
        <div class="pagetestimonial">
            <div class="heading3">
                <img class="imgtestimonial" src="../Home_Page/Images/icontestimonial.png" >
                <div class="containertestimonial">
                    <h2 class="titletestimonial"><font color = "#FEC90C">//</font> 04 . TÉMOIGNAGES</h2>
                    <h1 class="secteurs">Nous travaillons avec des <br>clients de tous les secteurs</h1> 
                </div>
            </div>
            <div class="containercomments">
                <div class="comment1">
                    <div class="titleandtxt">
                        <div class="titlecomment">
                            <img class="companyex1" src="../Home_Page/Images/companyexemple.png">
                            <div class="rating">
                                <input type="hidden" name="stars" id="ratingValue" value="0">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                            </div>
                        </div>    
                        <p class="commentairetxt">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make a type specimen book. </p>
                    </div>
                    <div class="pdpandauteur">
                        <img class="pdp1" src="../Home_Page/Images/pdp1.png">
                        <div class="commenteurs">
                            <h3 class="auteur">John Carter</h3>
                            <p class="métier">Lead marketer at Google</p>
                        </div>
                    </div>
                </div>

                
                <?php include 'displayComment.php'; ?>

                <div class="comment1">
                    <div class="titleandtxt">
                        <div class="titlecomment">
                            <img class="companyex1" src="<?php echo isset($companyPicName) ? $companyPicName : 'companyexemple.png'; ?>">
                            <div class="rating">
                                <?php echo isset($starsHtml) ? $starsHtml : ''; ?>
                            </div>
                        </div>    
                        <p class="commentairetxt"><?php echo isset($commentaire) ? $commentaire : 'Votre commentaire ici.'; ?></p>
                    </div>
                    <div class="pdpandauteur">
                        <img class="pdp1" src="<?php echo isset($companyPicName) ? $companyPicName : 'companyexemple.png'; ?>">
                        <div class="commenteurs">
                            <h3 class="auteur"><?php echo isset($name) ? $name : 'Votre nom ici'; ?></h3>
                            <p class="métier"><?php echo isset($profession) ? $profession : 'Votre profession ici'; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="backgroundproject">
        <div class="pageproject">
            <div class="containertitle">
                <img class="logotitle" src="../Home_Page/Images/iconetude.png">
                <div class ="containertxt">
                    <h2 class="titlesrvc"><font color = "#FEC90C">//</font>05 . ÉTUDES DE CAS</h2>
                    <h1 class="services">1520 - Projet réalisé. Consultez notre dernière étude de cas sur l'agence de marketing</h1>
                </div>
                <a class="abtnproject" href="../Projets/projets.php"><button class="btnservices2">Plus d'études <img src="../Home_Page/Images/Vector purple.png" width="14px" height="14px"></button></a>
            </div>
            <div id="project-container">
                <!-- Section des services -->
                <div id="services-section">
                    <div class="serviceproject" data-service="gestion-medias">
                        <div class="service-header">
                            <h3 class="titleetudedecas">Gestion des médias en ligne</h3>
                            <img class="arrow" src="../Home_Page/Images/Pattern.png" alt="Dérouler">
                        </div>
                        <div class="service-content">
                            <p class="txtetudedecas">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make.</p>
                        </div>
                    </div>
                    <div class="serviceproject" data-service="branding-marketing">
                        <div class="service-header">
                            <div class="titleserviceheader">
                                <span class="service-category">Branding / Marketing</span> 
                                <h3 class="titleetudedecas">Marketing d'expériences</h3>
                            </div>
                            <img class="arrow" src="../Home_Page/Images/Pattern.png" alt="Dérouler">
                        </div>
                        <div class="service-content">
                            <p class="txtetudedecas">Lorem Ipsum has been the industry's standard dummy text ever since the unknown printer...</p>
                        </div>
                    </div>
                    <div class="serviceproject" data-service="email-marketing">
                        <div class="service-header">
                            <h3 class="titleetudedecas">Email Marketing</h3>
                            <img class="arrow" src="../Home_Page/Images/Pattern.png" alt="Dérouler">
                        </div>
                        <div class="service-content">
                            <p class="txtetudedecas">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make.</p>
                        </div>
                    </div>
                </div>

                <script>
                    const arrows = document.querySelectorAll('.arrow');

                    arrows.forEach(arrow => {
                        arrow.addEventListener('click', function() {
                            const serviceProject = this.closest('.serviceproject');
                            if (serviceProject.style.opacity === '1') {
                                serviceProject.style.opacity = '0.5';
                            } else {
                                serviceProject.style.opacity = '1';
                            }
                        });
                    });
                </script>

                <!-- Image à droite -->
                <div id="image-container">
                    <img class="Projet1520" src="../Home_Page/Images/imageprojet1520.png" alt="Projet 1520">
                </div>
            <script src="etudedecas.js"></script>
            </div>
            <div id="superposer1">
                <div class="compteur" >
                    <div class="counter_all">
                        <div class="counter" id="counter1"></div>
                        <div class="txt_counteur">
                            <font color = "#5956E8">+</font>
                            <p class="compteurtxt">CLIENTS DANS LE MONDE</p>
                        </div>
                    </div>
                    <div class="counter_all">
                        <div class="counter" id="counter2"></div>
                        <div class="txt_counteur">
                            <font color = "#FF1850">+</font>
                            <p class="compteurtxt">PROJETS COMPLETES</p>
                        </div>
                    </div>
                    <div class="counter_all">
                        <div class="counter" id="counter3"></div>
                        <div class="txt_counteur">
                            <font color = "#FFDC60">+</font>
                            <p class="compteurtxt">MEMBRES DANS L'EQUIPE</p>
                        </div>
                    </div>
                    <div class="counter_all">
                        <div class="counter" id="counter4"></div>
                        <div class="txt_counteur">
                            <p class="millions">m</p>
                            <font color = "#38E55E">+</font>
                            <p class="compteurtxt">REVENUS GENEREES</p>
                        </div>
                    </div>
                </div>
            </div>
    
    <script>
        // Sélection de la div du compteur
        const counter1 = document.getElementById('counter1');
        let count1 = 0;
        
        // Fonction pour mettre à jour le compteur
        function updateCounter1() {
            if (count1 < 325) {
                count1 += 1;
                counter1.textContent = count1;
                setTimeout(updateCounter1, 15); // ajustez le délai selon vos besoins
            }
        }
        
        // Appelle la fonction pour démarrer le compteur
        updateCounter1();

        // Sélection de la div du compteur
        const counter2 = document.getElementById('counter2');
        let count2 = 0;
        
        // Fonction pour mettre à jour le compteur
        function updateCounter2() {
            if (count2 < 975) {
                count2 += 1;
                counter2.textContent = count2;
                setTimeout(updateCounter2, 1); // ajustez le délai selon vos besoins
            }
        }
        
        // Appelle la fonction pour démarrer le compteur
        updateCounter2();

        // Sélection de la div du compteur
        const counter3 = document.getElementById('counter3');
        let count3 = 0;
        
        // Fonction pour mettre à jour le compteur
        function updateCounter3() {
            if (count3 < 70) {
                count3 += 1;
                counter3.textContent = count3;
                setTimeout(updateCounter3, 60); // ajustez le délai selon vos besoins
            }
        }
        
        // Appelle la fonction pour démarrer le compteur
        updateCounter3();

        // Sélection de la div du compteur
        const counter4 = document.getElementById('counter4');
        let count4 = 0;
        
        // Fonction pour mettre à jour le compteur
        function updateCounter4() {
            if (count4 < 85) {
                count4 += 1;
                counter4.textContent = count4;
                setTimeout(updateCounter4, 50); // ajustez le délai selon vos besoins
            }
        }
        
        // Appelle la fonction pour démarrer le compteur
        updateCounter4();
    </script>
        </div>
    </div>


    <div class="pagepricing" id="pagepricing">
        <div class="heading4">
            <img class="imgpricing" src="../Home_Page/Images/iconpricing.png" >
            <h2 class="titlepricing"><font color = "#5956E8">//</font> 06 . PRIX & FORFAITS</h2>
            <h1 class="offre">Notre offre flexible de forfaits</h1>
        </div>
        <div class="containerpricing">
                <div class="containerprice">
                    <div class="iconandtitle">
                        <img class="imgprice1" src="../Home_Page/Images/light price.png">
                        <div class="size">
                            <h3 class="titleformule">Light</h3>
                            <div class="titleprice">
                                <h3 class="pricetag">€29</h3>
                                <h3 class="month">/Par mois</h3>
                            </div>
                        </div>
                    </div>
                <img class="line3" src="../Home_Page/Images/line price.png">
                <div class="yesno">
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Email Marketing Content</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Marketing Voice</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Optimisation SEO</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector no.png"> <p class="txtprice">Consulting Video</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector no.png"> <p class="txtprice">Publicité</p></div>
                </div>
                <a class="aprice" href="checkout29.php"><button class="btnprice">Je Choisis Light</button></a>
            </div>

            <div class="containerprice">
                <div class="iconandtitle">
                    <div class="rectangle"><p class="txtrectangle">POPULAIRE</p></div>
                    <img class="imgprice2" src="../Home_Page/Images/medium price.png">
                    <div class="size">
                        <h3 class="titleformule">Medium</h3>
                        <div class="titleprice">
                            <h3 class="pricetag">€49</h3>
                            <h3 class="month">/Par mois</h3>
                        </div>
                    </div>
                </div>
                <img class="line3" src="../Home_Page/Images/line price.png">
                <div class="yesno">
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Email Marketing Content</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Marketing Voice</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Optimisation SEO</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Consulting Video</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector no.png"> <p class="txtprice">Publicité</p></div>
                </div>
                <a class="aprice" href="checkout49.php"><button class="btnprice">Je Choisis Medium</button></a>
            </div>

            <div class="containerprice">
                <div class="iconandtitle">
                    <img class="imgprice3" src="../Home_Page/Images/big price.png">
                    <div class="size">
                        <h3 class="titleformule">Big</h3>
                        <div class="titleprice">
                            <h3 class="pricetag">€99</h3>
                            <h3 class="month">/Par mois</h3>
                        </div>
                    </div>
                </div>
                <img class="line3" src="../Home_Page/Images/line price.png">
                <div class="yesno">
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Email Marketing Content</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Marketing Voice</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Optimisation SEO</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Consulting Video</p></div>
                    <div class="criteres"><img class="imgyesno" src="../Home_Page/Images/vector yes.png"> <p class="txtprice">Publicité</p></div>
                </div>
                <a class="aprice" href="checkout99.php"><button class="btnprice">Je Choisis Big</button></a>
            </div>
        </div>
    </div>


    <div class="pagebenifits">
        <div class="contentbenef">
            <div class="contentbenef1">
                <div class="heading5">
                    <img class="imgbenifits" src="../Home_Page/Images/iconbenifits.png">
                    <div class="containertxt3">
                        <h2 class="titlebenifits"><font color = "#FEC90C">//</font> 07 .  BÉNÉFICES</h2>
                        <h1 class="avantages">Avantages de travailler avec Maruncy</h1>
                    </div>
                </div>
                <img class="graphicsbenifits" src="../Home_Page/Images/Graphics.png">
            </div>
            <div class="contentbenef2">
                <div class="un">
                    <h3 class="titlepoints">Page Rankings</h3>
                    <div class="circle">
                        <img class="une" src="../Home_Page/Images/benifits1.png">
                        <img class="line2" src="../Home_Page/Images/Line 2.png">
                    </div>
                    <p class="txt2">Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry.</p>
                </div>
                <div class="deux">
                    <h3 class="titlepoints">Site Optimisation</h3>
                    <div class="circle2">
                        <img class="deux" src="../Home_Page/Images/benifits2.png">
                        <img class="line2" src="../Home_Page/Images/Line 2.png">
                    </div>
                    <p class="txt2">Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry.</p>
                </div>
                <div class="trois">
                    <h3 class="titlepoints">Reporting & Analyses</h3>
                    <div class="circle2">
                        <img class="deux" src="../Home_Page/Images/benifits3.png">
                        <img class="line2" src="../Home_Page/Images/Line 2.png">
                    </div>
                    <p class="txt2">Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="contentblog">
        <div class="heading4">
            <img class="imgproccess" src="../Home_Page/Images/iconblog.png" >
            <h2 class="titleproccessus"><font color = "#5956E8">//</font> 08 . ARTICLES</h2>
            <h1 class="processus">Parcourez notre contenu sur la croissance <br>marketing</h1>
        </div>
        <div class="contentblog1">
            <div class="txtblog1">
                <div class="tag">
                    <h1 class="titleblog1.1">Marketing</h1>
                    <h1 class="titleblog1.2">1 SEPTEMBRE, 2023</h1>
                </div>
                <div class="txtmarketing">
                    <p class="marketingtxt1">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</p>
                    <p class="marketingtxt2">Tincidunt donec vulputate ipsum erat urna auctor. Eget phasellus ideirs.adipiscing elit. Tincidunt donec <br>vulputate ipsum erat urna auctor.</p>
                </div>
                <a href="../Blog_Single/blog_single.php"><button class="btnblog">Voir plus <img src="../Home_Page/Images/Vector purple.png" width="14px" height="14px"></button></a>
            </div>
            <img class="imgblog" src="../Home_Page/Images/imageblog.png">
        </div>
        <div class="contentblog2">
            <img class="imgblog" src="../Home_Page/Images/imageblog2.png">
            <div class="txtblog1">
                <div class="tag">
                    <h1 class="titleblog1.1">Content</h1>
                    <h1 class="titleblog1.2">1 SEPTEMBRE, 2023</h1>
                </div>
                <div class="txtmarketing">
                    <p class="marketingtxt1">Comment demander des articles à des invités pour accroître votre autorité en matière de référencement ?</p>
                    <p class="marketingtxt2">Tincidunt donec vulputate ipsum erat urna auctor. Eget phasellus ideirs.adipiscing elit. Tincidunt donec <br>vulputate ipsum erat urna auctor.</p>
                </div>
                <a href="../404/404.php"><button class="btnblog">Voir plus <img src="../Home_Page/Images/Vector purple.png" width="14px" height="14px"></button></a>
            </div>
        </div>
        <a class="abtnblog" href="../Blog/blog.php"><button class="btnblog2">Plus d'articles <img src="../Home_Page/Images/Vector purple.png" width="14px" height="14px"></button></a>
    </div>


    <?php 
        require("../Footer/footer.php"); 
    ?>

</body>
</html>