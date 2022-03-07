<?php

require ('confirm_inscription.php');

?>
<body>
          <header>
        <div style="background-image: url('https://diapogram.com/upload/2018/04/12/20180412133130-5a7a1b5b.jpg'); background-size:cover; height: 120vh">
        
                <h2 class="text-center" >Rencontrer l'amour devient plus facile !</h2>
        <p class="text-center">Et en plus, c'est gratuit !</p>
               
        <div class="subform">
            <form class="inscription" action="" method="post">
                <label for="prenom">Prenom : </label> <input type="text" name="prenom" id="prenom" required><br>
                <label for="nom">Nom : </label><input type="text" name="nom" id="nom" required><br>
                <label for="birthday">Date de naissance : </label><input type="date" name="birthday" id="birthday" required><br>
                Sexe :<br><input type="radio" name="sexe" value="homme" id="sexe" required>Homme
                <input type="radio" name="sexe" value="femme" id="sexe" required>Femme
                <input type="radio" name="sexe" value="autre" id="sexe" required>Autre <br>
                <label for="ville">Ville : </label><input type="text" name="ville" id="ville" required><br>
                <label for="loisir">Loisir : </label><input type="text" name="loisir" id="loisir"  placehorder="Séparé d'une virgules" required><br>
                <label for="email">Adresse mail : </label><input type="mail" name="email" id="email" required><br>
                <label for="mdp">Mot de passe : </label><input type="password" name="mdp" id="mdp" required> <br>
                <input type="submit" value="S'inscrire" id="inscription" name="inscription">
            </form>
        </div>
        </div>
        </header>
    </body>

</html>