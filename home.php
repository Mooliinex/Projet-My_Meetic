<?php
require('scripts/search_home.php');
?>

<body>
    <header>
        <div style="background-image: url('https://diapogram.com/upload/2018/04/12/20180412133050-bb5d52e5.jpg'); background-size:cover; height: 120vh">

           
                <h2  style="color:#DBEBF3 " class="text-center">Bienvenue <?php echo ucfirst($result['Nom']) . " !"; ?></h2>
                <p style="color:#DBEBF3 " class="text-center">« Start something real »</p>
       

            <form class="subform" action="" method="post" id="recherche">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Genre</label>
                    </div>
                    <select name="genre" class="custom-select" id="inputGroupSelect01">
                        <option value="2">Tout</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Age</label>
                    </div>
                    <select name="age" class="custom-select" id="inputGroupSelect01">
                        <option value="2">Tout</option>
                        <option value="18 and 25">18-25</option>
                        <option value="25 and 35">25-35</option>
                        <option value="35 and 45">35-45</option>
                        <option value="45+">45+</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Ville</label>
                    </div>
                    <select name="ville" class="custom-select" id="inputGroupSelect01">
                        <option value="2">Tout</option>
                        <?php
                        $selectVille = $user->basicQuery('select ville from users group by ville');
                        foreach ($selectVille as $value) {
                            echo '<option value="' . $value['ville'] . '">' . $value['ville'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Autre Ville</label>
                    </div>
                    <select name="secondVille" class="custom-select" id="inputGroupSelect01">
                        <option value="2">Tout</option>
                        <?php
                        $selectVille = $user->basicQuery('select ville from users group by ville');
                        foreach ($selectVille as $value) {
                            echo '<option value="' . $value['ville'] . '">' . $value['ville'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" class="recherche" name="recherche" value="Rechercher">
            </form>

            <div class="subform slider">

                <?php
                if (isset($_POST['recherche']) && $_POST['recherche'] == 'Rechercher') {
                    if ($_POST['genre'] == "2" && $_POST['age'] == "2" && $_POST['ville'] == "2" && $_POST['secondVille'] == "2") {
                        echo $error;
                    } else {
                        echo '<H3 id="nombreResultat">' . $nombreDeResultat . ' Résultat(s) à votre recherche :</H3>';
                    }
                }
                ?>
                <ul>
                    <?php
                    if (isset($_POST['recherche']) && $_POST['recherche'] == 'Rechercher')
                        echo $afficherResultat;
                    ?>

                </ul>
                <span class="prev btn btn-outline-primary">Precedent</span> <span class="next btn btn-outline-primary">Suivant</span>
            </div>
        </div>





    </header>
    </div>
</body>