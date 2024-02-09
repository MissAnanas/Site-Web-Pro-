<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");     
header("Cache-Control: post-check=0, pre-check=0", false);     
header("Pragma: no-cache");
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <?php 
        include("../Header/header.php"); 
    ?>
    <div class="contentblog">
        <div class="heading4">
            <img class="imgproccess" src="../Blog/Images/blog_icon.png" >
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

            if (isset($_GET['submit']) && !isset($_GET['reload'])) {
                $searchTerm = htmlspecialchars($_GET['search'], ENT_QUOTES, 'UTF-8');

                try {
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT * FROM articles WHERE title LIKE :searchTerm OR content LIKE :searchTerm";
                    
                    $stmt = $bdd->prepare($sql);

                    $searchTerm = '%' . $searchTerm . '%';
                    $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);

                    $stmt->execute();

                    echo '<div class="post_content">';

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="post_box">';
                        echo '<img class="imgpost" src="' . $row['image'] . '">';
                        echo '<div class="post_text">';
                        echo '<h1 class="type_post">' . $row['type'] . '</h1>';
                        echo '<h1 class="datepost">' . $row['date_published'] . '</h1>';
                        echo '</div>';
                        echo '<a href="../Blog_Single/blog_single.php" class="titlepost">' . $row['title'] . '</a>';
                        echo '</div>';
                    }

                    echo '</div>';

                } catch (PDOException $e) {
                    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
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

        <?php
            try {
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $sql = "SELECT * FROM articles ORDER BY date_published DESC LIMIT 1";
                $result = $bdd->query($sql);
            
                if ($result->rowCount() > 0) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        $type = $row["type"];
                        $date = $row["date_published"];
                        $title = $row["title"];
                        $content = $row["content"];
                        $image = $row["image"];
                    ?>

        <div class="contentblog1">
            <div class="txtblog1">
                <div class="tag">
                    <h1 class="titleblog1.1"><?php echo $type; ?></h1>
                    <h1 class="titleblog1.2"><?php echo $date; ?></h1>
                </div>
                <div class="txtmarketing">
                    <p class="marketingtxt1"><?php echo $title; ?></p>
                    <p class="marketingtxt2"><?php echo $content; ?></p>
                </div>
                <a class="btn_blog" href="../Blog_Single/blog_single.php"><button class="btnblog">En Savoir Plus <img src="../Blog/Images/vector_purple.png" width="14px" height="14px"></button></a>  
            </div>
            <img class="imgblog" src="<?php echo $image; ?>">
        </div>
    </div>

                    <?php
                    }
                } else {
                    echo "Aucun article trouvé dans la base de données.";
                }
            } catch (PDOException $e) {
                echo "Erreur de connexion à la base de données : " . $e->getMessage();
            }

            $bdd = null
        ?>

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
                    <img class="imgpost" src="../Blog/Images/minia_post_1.png">
                    <div class="post_text">
                        <h1 class="type_post">Marketing</h1>
                        <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                    </div>
                    <a href="../Blog_Single/blog_single.php" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
                </div>
                <div class="post_box" data-id="2">
                    <img class="imgpost" src="../Blog/Images/minia_post_2.png">
                    <div class="post_text">
                        <h1 class="type_post">Marketing</h1>
                        <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                    </div>
                    <a href="../Blog_Single/blog_single.php" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
                </div>
        </div>
        <div class="post_content_down">
            <div class="post_box" data-id="3">
                <img class="imgpost" src="../Blog/Images/minia_post_3.png">
                <div class="post_text">
                    <h1 class="type_post">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <a href="../Blog_Single/blog_single.php" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
            </div>
            <div class="post_box" data-id="4">
                <img class="imgpost" src="../Blog/Images/minia_post_4.png">
                <div class="post_text">
                    <h1 class="type_post">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <a href="../Blog_Single/blog_single.php" class="titlepost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</a>
            </div>
        </div>
    </div>

    <?php 
        include("../Footer/footer.php"); 
    ?>

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
                            posts.forEach(post => post.style.display = 'flex');
                            break;
                        case 'Croissance':
                            document.querySelector('.post_box[data-id="2"]').style.display = 'flex';
                            break;
                        case 'Contenu':
                            document.querySelector('.post_box[data-id="3"]').style.display = 'flex';
                            break;
                        case 'Réseaux':
                            document.querySelector('.post_box[data-id="1"]').style.display = 'flex';
                            document.querySelector('.post_box[data-id="4"]').style.display = 'flex';
                            break;
                    }
                });
            });
        });
    </script>



</body>
</html>
