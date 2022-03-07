<?php
include('bdd/connexion.class.php');

session_start();
session_unset();
session_destroy();

if (isset($_POST['connect']) && $_POST['connect'] == 'Connexion') {
    $nouvelleConnexion = new login($_POST['log_mail'], $_POST['password']);
    if ($nouvelleConnexion->checkMail()){
        session_start();
        $_SESSION['log_mail'] = $_POST['log_mail'];
        header('location:home.php');
        exit();
    }
}

?>