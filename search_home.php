<?php
session_start();
if (empty($_SESSION)) {
    header('location:index.php');
}
include('bdd/membre.class.php');
include('html/head.html');
include ('html/navbar_home.php');
$user = new Membre($_SESSION['log_mail']);
$result = $user->getInfo();
$resultQuery = '';
$searchQuery = "select * from users where 1";
$error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Error!</strong> Choisir un filtre.
<button type="button" class="close" data-dismiss="alert">&times;</button>';

if (isset($_POST['recherche']) && $_POST['recherche'] == 'Rechercher') {

    if ($_POST['genre'] == "2" && $_POST['age'] == "2" && $_POST['ville'] == "2" && $_POST['secondVille'] == "2") {
        $searchQuery = "";
        $afficherResultat = "";
        $nombreDeResultat = "";
    }

    if ($_POST['genre'] != '2') {
        $searchQuery .= '&& sexe ="' . $_POST['genre'] . '" ';
    }
    if ($_POST['age'] != '2') {
        if ($_POST['age'] == "45+") {
            $searchQuery .= '&& TIMESTAMPDIFF(year,birthday,NOW()) > 45';
        } else {
            $searchQuery .= '&& TIMESTAMPDIFF(year,birthday,NOW()) between ' . $_POST['age'];
        }
    }
    if ($_POST['ville'] != "2") {
        if ($_POST['secondVille'] != '2') {
            if ($_POST['secondVille'] != $_POST['ville']) {
                $searchQuery .= ' && ville in ("' . $_POST['ville'] . '","' . $_POST['secondVille'] . '")';
            } else {
                $user->error('Recherche invalide');
            }
        } else {
            $searchQuery .= ' && ville in ("' . $_POST['ville'] . '")';
        }
    }

    if ($searchQuery != "") {
        $rechercheQuery = $user->basicQuery($searchQuery);
        $afficherResultat = "";
        $nombreDeResultat = 0;
        if ($rechercheQuery->rowCount() >= 1) {
            while ($compte = $rechercheQuery->fetch()) {
                $afficherResultat .= "<li>Nom: " . ucfirst($compte['Nom']) . "<br>
            Prenom: " . ucfirst($compte['prenom']) . "<br>
            Age: " . ucfirst($compte['birthday']) . "<br>
            Ville: " . ucfirst($compte['ville']) . "</li>";
            
          
                $nombreDeResultat++;
            }
        } 
    } 
}
?>


