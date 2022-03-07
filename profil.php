
<?php
session_start();
if (empty($_SESSION)) {
    header('location:index.php');
}
include('bdd/membre.class.php');
include('html/head.html');
$user = new Membre($_SESSION['log_mail']);
$result = $user->getInfo();
require ('html/navbar_home.php');
?>

<body>
<div style="background-image: url('https://diapogram.com/upload/2018/04/09/20180409164520-e3abdbe3.jpg'); background-size:cover; height: 120vh">

            <h2 style="color:#DBEBF3 " class="text-center">Informations du compte</h2>
            <p style="color:#DBEBF3 " class="text-center">« Little details, great stories »</p>
            
        
<div class="subform">
   
        <p>Nom: <?php echo ucfirst($result['prenom']); ?></p>
        <p>Prenom: <?php echo ucfirst($result['Nom']); ?></p>
        <p>Date de naissance: <?php echo $result['birthday']; ?></p>
        <p>Age: <?php echo date("Y") - substr($result['birthday'], 0, 4); ?></p>
        <p>Loisir: <?php echo ucfirst($result['loisir']); ?></p>
    </div>
 

    <div class="subform">
    <a class="confirm w3-btn w3-red" href="delete.php" title="Mais non">Supprimer le compte</a>
    </div>
</div>
</body>