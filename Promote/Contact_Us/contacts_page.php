<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page contacts</title>
    <link rel="stylesheet" href="contacts_styles.css">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap');

    </style>
    <div class="pageaboutus">
        <?php 
          include("../Header/header.php"); 
        ?>
        <h1 class="titleaboutus">Contact</h1>
    </div>
    <div class="contact_us">
        <img src="../Contact_Us/Images/contact_icon.png" alt="contact icon" class="contact_icon">
        <h1 class="contact_us_01"><font color = "#FEC90C">//</font> 01 . CONTACTEZ NOUS</h1>
        <p class="contact_title_01">Construisons ensemble quelque chose de génial</p>

        <div class="informations_box">
            <div class="border">
                <div class="promote_mail">
                    <div class="contact">
                        <p>Contact</p>
                    </div>
                    <img src="../Contact_Us/Images/contact_line.png" alt="separation contact_line">
                    <div class="assembly_icon_text">
                        <div class="icon_titre">
                        <img src="../Contact_Us/Images/mail_icon.png" alt="mail icon" class="mail_icon_style">
                        <h1 class="title_01">E-Mail</h1>
                        </div> 
                        <p class="description_01">contact@promote.com</p>
                        
                    </div>
                </div>
            </div>

            <div class="border">
                <div class="promote_number">
                    <div class="appel">
                        <p>Appel</p>
                    </div>
                    <img src="../Contact_Us/Images/contact_line.png" alt="separation contact_line">
                    <div class="assembly_icon_text">
                        <div class="icon_titre">
                        <img src="../Contact_Us/Images/phone_icon.png" alt="phone icon" class="phone_icon_style">
                        <h1 class="title_01">Téléphone</h1>
                        </div>  
                        <p class="description_01">+33 4 79 36 53 84</p>
                        
                    </div>
                </div>
            </div>

            <div class="border">
                <div class="promote_location">
                    <div class="bureaux">
                        <p>Bureaux</p>
                    </div>
                    <img src="../Contact_Us/Images/contact_line.png" alt="separation contact_line">
                    <div class="assembly_icon_text">
                        <div class="icon_titre">
                        <img src="../Contact_Us/Images/location_icon.png" alt="location icon" class="location_icon_style">
                        <h1 class="title_01">Lieu</h1>
                        </div>
                        <p class="description_01">50, rue de Marseille, LYON</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact_register">
            <form action="formulaire.php" method="post"> 
                <div class="input_form">
                    <div class="name_mail_register">
                        <div class="name_register" id="register">
                            <p>Nom Complet *</p>
                            <input type="text" name="user_name" placeholder="John David">
                        </div>
                        
                        <div class="mail_register" id="register">
                            <p>Votre E-Mail *</p>
                            <input type="mail" name="mail" placeholder="email@gmail.com">
                        </div>
                    </div>
                    
                    <div class="company_subject_register">
                        <div class="company_register" id="register">
                            <p>Société *</p>
                            <input type="text" name="company" placeholder="nom de votre société ici">
                        </div>
                        
                        <div class="subject_register" id="register">
                            <p >Sujet *</p>
                            <input type="text" name="subject" placeholder="Comment pouvons nous vous aider">
                        </div>
                    </div>
                </div>
                
                
                <div class="message_register">
                    <p>Message *</p>
                    <input type="text" name="message" placeholder="Bonjour, je voudrais vous parler de ...">
                </div>
                
                <input type="submit" value="Envoyer Message" class="submit_button">
            </form>
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

    <div class="content_02">
        <img src="../Contact_Us/Images/icon_faq.png" alt="contact icon" class="contact_icon">
        <h1 class="contact_us_01"><font color = "#FEC90C">//</font> 02 . FAQ</h1>
        <p class="contact_title_01">Questions fréquemment posées</p>
        <div class="content_js">
            <div class="faq">
                <div class="question">
                    <p>Puis-je annuler ou modifier ma commande ?</p>
                    <img class="fleche_faq" src="../Contact_Us/Images/fleche_right_faq.png">
                </div>
                <div class="description">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make a type specimen book. </div>
            </div>
            <div class="faq">
                <div class="question">
                    <p>Quelle est la ligne d'assistance à appeler pour poser des questions ?</p>
                    <img class="fleche_faq" src="../Contact_Us/Images/fleche_right_faq.png">
                </div>
                <div class="description">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make a type specimen book. </div>
            </div>
            <div class="faq">
                <div class="question">
                    <p>J'ai un code promotionnel ou un code de réduction ?</p>
                    <img class="fleche_faq" src="../Contact_Us/Images/fleche_right_faq.png">
                </div>
                <div class="description">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make a type specimen book. </div>
            </div>
            <div class="faq">
                <div class="question">
                    <p>Puis-je intégrer ma boutique à Facebook ?</p>
                    <img class="fleche_faq" src="../Contact_Us/Images/fleche_right_faq.png">
                </div>
                <div class="description">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make a type specimen book. </div>
            </div>
            <div class="faq">
                <div class="question">
                    <p>Où en est ma commande ?</p>
                    <img class="fleche_faq" src="../Contact_Us/Images/fleche_right_faq.png">
                </div>
                <div class="description">Lorem Ipsum has been the industry's standard from dummy text ever since the unknown printer to galley of type and make a type specimen book. </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqArrows = document.querySelectorAll('.fleche_faq');
    
            faqArrows.forEach(arrow => {
                arrow.addEventListener('click', () => {
                    const description = arrow.parentElement.nextElementSibling;
    
                    faqArrows.forEach(otherArrow => {
                        if (otherArrow !== arrow) {
                            const otherDescription = otherArrow.parentElement.nextElementSibling;
                            otherDescription.classList.remove('active');
                            otherArrow.src = 'Images/fleche_right_faq.png';
                            otherDescription.parentElement.style.backgroundImage = 'none'
                        }
                    });
    
                    description.classList.toggle('active');
    
                    if (description.classList.contains('active')) {
                        arrow.src = 'Images/fleche_bas_faq.png';
                        description.parentElement.style.backgroundImage = 'linear-gradient(124.11deg, #E9F7FF 5.58%, #FFDBD5 21.8%, #FFF3CA 37.36%)';
                    } else {

                        arrow.src = 'Images/fleche_right_faq.png';
                        description.parentElement.style.backgroundImage = 'none';
                    }
                });
            });
        });
    </script>

    <?php 
    include("../Footer/footer.php"); 
    ?>

</body>
</html>