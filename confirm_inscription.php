<?php
include('bdd/inscription.class.php');

if (isset($_POST['inscription']) && $_POST['inscription'] == "S'inscrire") {
    $nouvelleInscription = new Inscription($_POST['nom'], $_POST['prenom'], $_POST['birthday'], $_POST['sexe'], $_POST['ville'],$_POST['loisir'], $_POST['email'], $_POST['mdp']);


    if ($nouvelleInscription->checkEmail($_POST['email'])) {
        if ($nouvelleInscription->checkAge() >= 18) {
            $nouvelleInscription->insert();
            echo '
             <strong>Success!</strong> Votre inscription à bien été validé. Merci de patienter 5 secondes le temps de la validations ! Merci !
             <meta http-equiv="refresh" content="5 ; url=index.php">';
             
        } else {
            $nouvelleInscription->error('Tu est trop jeune !');
        }
    } else {
        $nouvelleInscription->error('Mail déja existant !');
    }
}

include('html/head.html');
include ('html/navbar_insc.php');

?>

