<?php
session_start();
if (empty($_SESSION)) {
    header('location:index.php');
}

include('bdd/membre.class.php');
include('html/head.html');
$user = new Membre($_SESSION['log_mail']);
$result = $user->getInfo();

if (isset($_POST['editPassSubmit']) && $_POST['editPassSubmit'] == 'Modifier') {
    $user->editPassword($_POST['nouveau'], $_SESSION['log_mail']);
    echo '<div class="valide">Le(s) changement ont bien été prise en compte.</div>';
}
if (isset($_POST['editMailSubmit']) && $_POST['editMailSubmit'] == 'Modifier') {
    if ($user->checkEmail($_POST['newMail']) == true) {
        $user->editMail($_POST['newMail'], $_SESSION['log_mail']);
        $user->valide('Les changements on bien été prise en compte !');
    } else {
        $user->error('Mail déja existant');
    }
}

require('html/navbar_seeting.php');

?>

<body>
<div style="background-image: url('https://diapogram.com/upload/2018/04/12/20180412133050-bb5d52e5.jpg'); background-size:cover; height: 120vh">
    


            <h2 style="color:#DBEBF3" class="text-center">Modifications pour le compte !</h2>
            <p style="color:#DBEBF3" class="text-center">« Si vous n'aimez pas vos imperfections, quelqu'un les aimera pour vous »</p>
     
    
        <div class="subform">
            <form action="" method="post" id="editPassword">
                Ancien mot de passe: <input type="password" name="ancien"> <br>
                Nouveau mot de passe: <input type="password" name="nouveau"> <br>
                <input type="submit" name="editPassSubmit" value="Modifier">
            </form>
            <form action="" method="post" id="editMail">
                Ancien mail: <?php echo $_SESSION['log_mail']; ?><br>
                Nouveau mail: <input type="mail" name="newMail"> <br>
                <input type="submit" name="editMailSubmit" value="Modifier">
            </form>
        </div>
    </div>
    </div>
    </div>
</body>