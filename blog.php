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
            <img class="imgproccess" src="iconblog.png" >
            <div class="text_header">
                <h2 class="titleproccessus"><font color = "#5956E8">//</font> 01 . ARTICLES</h2>
                <h1 class="processus">Consultez notre contenu sur <br> le marketing de croissance</h1>
            </div>
            <form action="blog.php" method="get">
                <input class="input_headerBlog" type="text" name="search" placeholder="Rechercher dans le blog">
                <button class="btn_headerBlog" type="submit" name="submit">Recherche</button>
            </form>
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
                        echo '<h1 class="titlepost">' . $row['title'] . '</h1>';
                        echo '<h1 class="datepost">' . $row['date_published'] . '</h1>';
                        echo '</div>';
                        echo '<p class="txtpost">' . $row['content'] . '</p>';
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
                <a class="btn_blog" href="Blog.php"><button class="btnblog">En Savoir Plus <img src="Vector purple.png" width="14px" height="14px"></button></a>
            </div>
            <img class="imgblog" src="imageblog.png">
        </div>
    </div>

    <div class="post_container">
        <div class="post_menu">
            <h1 class="txt_filtre">Derniers posts</h1>
            <div class="filtres">
                <button class="btn_filtre_all">Tous</button>
                <button class="btn_filtre">Croissance</button>
                <button class="btn_filtre">Contenu</button>
                <button class="btn_filtre">Réseaux</button>
            </div>
        </div>
        <div class="post_content_top">
            <div class="post_box">
                <img class="imgpost" src="imgpost1.png">
                <div class="post_text">
                    <h1 class="titlepost">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <p class="txtpost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</p>
            </div>
            <div class="post_box">
                <img class="imgpost" src="imgpost2.png">
                <div class="post_text">
                    <h1 class="titlepost">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <p class="txtpost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</p>
            </div>
        </div>
        <div class="post_content_down">
            <div class="post_box">
                <img class="imgpost" src="imgpost3.png">
                <div class="post_text">
                    <h1 class="titlepost">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <p class="txtpost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</p>
            </div>
            <div class="post_box">
                <img class="imgpost" src="imgpost4.png">
                <div class="post_text">
                    <h1 class="titlepost">Marketing</h1>
                    <h1 class="datepost">1 SEPTEMBRE, 2023</h1>
                </div>
                <p class="txtpost">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</p>
            </div>
        </div>
    </div>
</body>
</html>
