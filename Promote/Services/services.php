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
        <?php 
          include("../Header/header.php"); 
        ?>

        <div class="title_banner">
            <p ><?php echo getTextById(6, $bdd); ?></p>
        </div>
    </div>
    
    <div class="backgroundservices">
        <div class="pageservices">
            <div class="Content">
                <div class="Heading">
                    <div id="icon">
                        <img src="../Services/Images/gear_icon.png" class="icon" height="88px">
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
                        <img class="logoservice1" src="../Services/Images/icon_service_1.png">
                        <h3 class="titleservice" ><?php echo getTextById(9, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(10, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(11, $bdd); ?><img src="../Services/Images/vector_grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice2" src="../Services/Images/icon_service_2.png">
                        <h3 class="titleservice" ><?php echo getTextById(12, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(13, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(14, $bdd); ?><img src="../Services/Images/vector_grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice3" src="../Services/Images/icon_service_3.png">
                        <h3 class="titleservice" ><?php echo getTextById(15, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(16, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(17, $bdd); ?><img class="imgservice" src="../Services/Images/vector_grey.png" width="14px" height="14px"></button></a>
                    </div>
                </div>
                <div class="column2">
                    <div class="service" >
                        <img class="logoservice4" src="../Services/Images/icon_service_4.png">
                        <h3 class="titleservice" ><?php echo getTextById(18, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(19, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(20, $bdd); ?><img class="imgservice" src="../Services/Images/vector_grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice5" src="../Services/Images/icon_service_5.png">
                        <h3 class="titleservice" ><?php echo getTextById(21, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(22, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(23, $bdd); ?><img class="imgservice" src="../Services/Images/vector_grey.png" width="14px" height="14px"></button></a>
                    </div>
                    <div class="service">
                        <img class="logoservice6" src="../Services/Images/icon_service_6.png">
                        <h3 class="titleservice" ><?php echo getTextById(24, $bdd); ?></h3>
                        <p class ="txtservice" ><?php echo getTextById(25, $bdd); ?></p>
                        <a href="Services.php"><button class="btnservices3" ><?php echo getTextById(26, $bdd); ?><img class="imgservice" src="../Services/Images/vector_grey.png" width="14px" height="14px"></button></a>
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
          <a href="../Contact_Us/contacts_page.php"><button class="CTA-button1" ><?php echo getTextById(28, $bdd); ?></button> </a>
          <a href="../Home_Page/index.php"><button class="CTA-button2" ><?php echo getTextById(29, $bdd); ?></button></a>
        </div>
      </div>
    </div>

    <?php 
        include("../Footer/footer.php"); 
    ?>
</body>