<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <div class="contentblog">
        <div class="heading4">
            <img class="imgproccess" src="Images/iconblog.png" >
            <div class="text_header">
                <h2 class="titleproccessus"><font color = "#5956E8">//</font> 01 . ARTICLES</h2>
                <h1 class="processus">Consultez notre contenu sur <br> le marketing de croissance</h1>
            </div>
            <div>
                <form action="blog.php" method="get">
                    <input class="input_headerBlog" type="text" name="search" placeholder="Rechercher dans le blog">
                    <button class="btn_headerBlog" type="submit" name="submit">Recherche</button>
                </form>
            </div>
        </div>

        <?php
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");     
            header("Cache-Control: post-check=0, pre-check=0", false);     
            header("Pragma: no-cache");
            

            if (isset($_GET['submit']) && !isset($_GET['reload'])) {
                $searchTerm = htmlspecialchars($_GET['search'], ENT_QUOTES, 'UTF-8');

                require_once 'config.php';

                try {
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT * FROM articles WHERE title LIKE :searchTerm OR content LIKE :searchTerm";
                    
                    $stmt = $bdd->prepare($sql);

                    $searchTerm = '%' . $searchTerm . '%';
                    $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);

                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="post_box">';
                        echo '<img class="imgpost" src="' . $row['image'] . '">';
                        echo '<div class="post_text">';
                        echo '<h1 class="type_post">' . $row['type'] . '</h1>';
                        echo '<h1 class="datepost">' . $row['date_published'] . '</h1>';
                        echo '</div>';
                        echo '<a href="blog_single" class="titlepost">' . $row['title'] . '</a>';
                        echo '</div>';
                    }

                } catch (PDOException $e) {
                    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
                } finally {
                    $bdd = null;
                }
            } 
        ?>

        <script>
            window.onload = function() {
                if (performance.navigation.type === 1) {
                    window.location.href = window.location.href + '&reload=true';
                }
            };
        </script>

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
                <a class="btn_blog" href="blog_single.php"><button class="btnblog">En Savoir Plus <img src="Images/Vector purple.png" width="14px" height="14px"></button></a>
            </div>
            <img class="imgblog" src="Images/imageblog.png">
        </div>
    </div>

    <div class="newsletter">
        <div class="newsletter_content">
            <h1 class="titre_newsletter">Souscrivez à notre <font color="#FFDC60">newsletter</font></h1>
            <div class="input_content">
                <input class="input_mail" type="text" name="mail" placeholder="Entrez votre E-Mail..." >
                <button class="btn_souscrire">Souscrire</button>
            </div>
        </div>
    </div>



    <div class="post_container">
        <div class="post_menu">
            <h1 class="txt_filtre">Derniers posts</h1>
            <div class="filtres">
                <button class="btn_filtre">Tous</button>
                <button class="btn_filtre">Croissance</button>
                <button class="btn_filtre">Contenu</button>
                <button class="btn_filtre">Réseaux</button>
            </div>
        </div>
        <div class="post_content_top">
                <div class="post_box" data-id="1">
                    <img class="imgpost" src="Images/imgpost1.png">
                    <div class="post_text">
                        <h1 class="type_post">Marketing</h1>
                        <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                    </div>
                    <a href="#" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
                </div>
                <div class="post_box" data-id="2">
                    <img class="imgpost" src="Images/imgpost2.png">
                    <div class="post_text">
                        <h1 class="type_post">Marketing</h1>
                        <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                    </div>
                    <a href="#" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
                </div>
        </div>
        <div class="post_content_down">
            <div class="post_box" data-id="3">
                <img class="imgpost" src="Images/imgpost3.png">
                <div class="post_text">
                    <h1 class="type_post">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <a href="#" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
            </div>
            <div class="post_box" data-id="4">
                <img class="imgpost" src="Images/imgpost4.png">
                <div class="post_text">
                    <h1 class="type_post">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <a href="#" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer_container">
            <div class="footernewsletter">
                
                    <img class="imgfooter1" src="Images/white_logo_promote.png">
                    <img class="imgfooter2" src="Images/logo_megaphone.png">
                
                <div class="containerfooter">
                    <h2 class="texttitle">Souscrire maintenant</h2>
                    <p class="textfooter">Obtenez les dernières <br>informations sur notre agence</p>
                    <input class="input_news" type="text" name="" placeholder="Entrez Votre E-Mail...">
                    <input href="accueil.html"  class="button_footer"  type="button" value="Souscrire" />
                </div>
            </div>
            <div class="info_container">
                <div class="top">
                    <div class="tel_container">
                        <div class="telfooter">
                            <img class="tel_icon" src="Images/green_phone_icon.png">
                            <h2 class="tel_title">Restons en contact</h2>
                        </div>
                        <h1 class="tel_nb">+33 4 79 64 57 62</h1>
                        <p class="mailfooter">contact@promote.com</p>
                    </div>
    
                    <div class="adresse_container">
                        <div class="adresse">
                            <img class="adresse_icon" src="Images/yellow_location_icon.png">
                            <h2 class="adresse_title">Lieu</h2>
                        </div>
                        <p class="rue">50 rue de Marseille <br>69 000 LYON</p>
                        <a href="https://maps.google.com" class="MAP">MAP</a>
                    </div>
                </div>
    
                <img class="barre" src="Images/footer_line.png"><img class="barre" src="Images/footer_line.png"><img class="barre" src="Images/footer_line.png"><br>
    
                <div class="bottom">
                    <div class="page_container">
                        <div class="page">
                            <img class="page_icon" src="Images/Icon_page.png">
                            <h2 class="page_title">Pages</h2>
                        </div>
                        <div class="page_link">
                            <a href="Acceuil.html" class="link">Accueil</a><br>
                            <a href="A propos.html" class="link">A propos</a><br>
                            <a href="Blog.html" class="link">Blog</a><br>
                            <a href="Prix.html" class="link">Prix</a><br>
                            <a href="Contact.html" class="link">Contact</a><br>
                            <a href="Services.html" class="link">Services</a><br>
                        </div>
                    </div>
                    <div class="reseau_container">
                        <div class="reseau">
                            <img class="reseau_icon" src="Images/Iconspeaker.png">
                            <h2 class="reseau_title">Réseaux</h2>
                        </div>
                        <div class="reseau_link"></div>
                            <a href="facebook.fr" class="link">Facebook</a><br>
                            <a href="twitter.fr" class="link">Twitter</a><br>
                            <a href="instagram.fr" class="link">Instagram</a><br>
                            <a href="linkedin.fr" class="link">LinkedIn</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>   

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.btn_filtre, .btn_filtre_all');
            var posts = document.querySelectorAll('.post_box');

            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    buttons.forEach(btn => {
                        btn.style.backgroundColor = 'white';
                        btn.style.color = 'black'; 
                    });

                    
                    button.style.backgroundColor = 'black';
                    button.style.color = 'white'; 

                    posts.forEach(post => post.style.display = 'none');

                    switch(button.textContent.trim()) {
                        case 'Tous':
                            posts.forEach(post => post.style.display = 'block');
                            break;
                        case 'Croissance':
                            document.querySelector('.post_box[data-id="2"]').style.display = 'block';
                            break;
                        case 'Contenu':
                            document.querySelector('.post_box[data-id="3"]').style.display = 'block';
                            break;
                        case 'Réseaux':
                            document.querySelector('.post_box[data-id="1"]').style.display = 'block';
                            document.querySelector('.post_box[data-id="4"]').style.display = 'block';
                            break;
                    }
                });
            });
        });
    </script>



</body>
</html>
