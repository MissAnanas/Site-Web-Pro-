<?php
    require_once 'config.php';

    if(isset($_POST['password'])){

        $mdp = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT password FROM Admin');
        $check -> execute();
        $data = $check->fetch();

        $mdp = hash('md5', $mdp);

        echo hash('md5', $mdp) . "\n";
        echo hash('md5', $mdp) . "\n";
        echo $data['password'];

        if($data['password'] === $mdp){

            header('Location:admin_page.php');
            
        }
    }
?>
