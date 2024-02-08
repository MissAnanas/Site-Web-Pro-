<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page contacts</title>
    <link rel="stylesheet" href="stylejs.css"></link>
    <script src="https://www.paypal.com/sdk/js?client-id=AYRBM2V4NwVE8Mdvs4jIGjTcfz1O9Rj7gWu9dM1uI5mXnAH_UZgFFRmlGl80JJI2CdcxKarRtqeAyUcu&currency=EUR"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap');
    </style>
</head>
<body>
    <div id="paypal-button-container"></div>

    <script>
        paypal.Buttons({
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    currency_code: 'EUR', 
                    value: '99' 
                }
            }]
        });
    },
    onApprove: function(data, actions) {
    return actions.order.capture().then(function(details) {
        fetch('updatePaymentStatus.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                orderID: data.orderID, 
                paymentStatus: true
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Payment status updated:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });

        alert("Transaction réussie pour : " + details.payer.name.given_name);
    });
},

    onError: function(err) {
        console.error('Erreur de paiement :', err);
        alert("Paiement échoué !");
    }
}).render("#paypal-button-container");

    

    </script>
    
    <div class="contact_register">
        <form action="formulaire2.php" method="post" enctype="multipart/form-data">
            <div>
                <div class="name_mail_register">
                    <div class="name_register">
                        <p>Nom et prénom *</p>
                        <input type="text" name="Name" placeholder="John David">
                    </div>
                    <div class="mail_register">
                        <p>commentaire *</p>
                        <input type="text" name="Commentaire" placeholder="votre avis nous interesse">
                    </div>
                </div>
                <div class="company_subject_register">
                    <div class="company_register">
                        <p>Nom Companie *</p>
                        <input type="text" name="Name_compagny" placeholder="nom de votre société ici">
                    </div>
                    <div class="subject_register">
                        <p>Profession *</p>
                        <input type="text" name="Profession" placeholder="Comment pouvons nous vous aider">
                    </div>
                </div>
            </div>
            <div class="rating">
                <input type="hidden" name="stars" id="ratingValue" value="0">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>    
                <span class="star" data-value="3">&#9733;</span>    
                <span class="star" data-value="4">&#9733;</span>    
                <span class="star" data-value="5">&#9733;</span>
            </div><br><br><br>
            <label for="img_profil">Choisissez une photo de profil :</label><br>
            <input type="file" id="img_profil" name="img_profil" accept="image/*"><br>
            <label for="img_compagny">Choisissez une photo pour votre compagnie :</label><br>
            <input type="file" id="img_compagny" name="img_compagny" accept="image/*"><br>
            <input type="submit" value="Envoyer Message" id="submit_button">

            <?php
            include 'config.php'; 

            $sql = "SELECT Name, payment FROM Comments ORDER BY ID_comments DESC LIMIT 1";

            $stmt = $bdd->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $paymentStatus = $result['payment'] ? "Paiement réalisé avec succès" : "Paiement en cours";

            echo "<table border='1'>";
            echo "<tr><th>Nom</th><th>Statut du Paiement</th></tr>";
            echo "<tr><td>" . htmlspecialchars($result['Name']) . "</td><td>" . $paymentStatus . "</td></tr>";
            echo "</table>";
            ?>

        </form>
    </div>
    <script src="script.js"></script>
    <!--Footer-->
</body>
</html>
