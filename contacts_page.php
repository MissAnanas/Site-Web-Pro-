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
    <!--Header-->

    <div class="contact_us">
        <img src="Images/contact_icon.png" alt="contact icon" class="contact_icon">
        <h1 class="contact_us_01">// 01 . CONTACTEZ NOUS</h1>
        <p class="contact_title_01">Construisons ensemble quelque chose de génial</p>

        <div class="informations_box">
            <div class="promote_mail">
                <div class="contact">
                    <p>Contact</p>
                </div>
                <img src="Images/Line.png" alt="separation line">
                <div class="assembly_icon_text">
                    <img src="Images/mail_icon.png" alt="mail icon" class="mail_icon_style">
                    <div>
                        <h1 class="01_email_title">E-Mail</h1>
                        <p class="01_email">contact@promote.com</p>
                    </div>
                    
                </div>
            </div>

            <div class="promote_number">
                <div class="appel">
                    <p>Appel</p>
                </div>
                <img src="Images/Line.png" alt="separation line">
                <div class="assembly_icon_text">
                    <img src="Images/phone_icon.png" alt="phone icon" class="phone_icon_style">
                    <div>
                        <h1 class="01_phone_title">Téléphone</h1>
                        <p class="01_phone">+33 4 79 36 53 84</p>
                    </div>
                    
                </div>
            </div>

            <div class="promote_location">
                <div class="bureaux">
                    <p>Bureaux</p>
                </div>
                <img src="Images/Line.png" alt="separation line">
                <div class="assembly_icon_text">
                    <img src="Images/location_icon.png" alt="location icon" class="location_icon_style">
                    <div>
                        <h1 class="01_location_title">Lieu</h1>
                        <p class="01_location">50, rue de Marseille, LYON</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact_register">
            <form action="formulaire.php" method="post"> 
                <div>
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
                    <input type="text" name="message" placeholder="Bonjour, je voudrais vous  parler de ...">
                </div>
                
                <input type="submit" value="Envoyer Message" class="submit_button">
            </form>
        </div>
    </div>
    

    <!--Footer-->
</body>
</html>