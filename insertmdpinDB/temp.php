<?php
    require_once 'config.php';

    if(isset($_POST['mdp'])){
        $mdp = htmlspecialchars($_POST['mdp']);

        $check = $bdd->prepare('SELECT password FROM Admin');
        $data = $check->fetch();
        $row = $check->rowCount();


        
        $mdp = hash('md5', $mdp);

        $insert = $bdd->prepare('INSERT INTO Admin(password) VALUES(:mdp)');
        $insert->execute(array(
            'mdp' => $mdp
        ));
        header('Location:tempform.php?reg_err=success');

            
    };
?>