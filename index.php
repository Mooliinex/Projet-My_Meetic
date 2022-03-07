<?php
include('html/head.html');
require ('scripts/include_index.php');
include ('html/navbar_index.php');
?>

<body>
    <header>
          
    <div style="background-image: url('https://diapogram.com/upload/2018/04/12/20180412133140-8ca19049.jpg'); background-size:cover; height: 100vh">
      
        <h2 style="color:#053248" class="text-center" >Meetyc</h2>  </a>
        <p style="color:#053248" class="text-center">"Cet été, préférez les pelles aux râteaux"</p>
        
   
    <div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Connectez-vous !</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="log_mail" placeholder="Mail" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required">
        </div>
        <div class="form-group">
        <p class="text-center">
        Made with <span>❤</span> by Meetyc</p>
        </div>
        <div class="form-group">
            <button type="submit" name="connect" value="Connexion" class="btn btn-primary btn-block">Log in</button>
        </div>
        
    </form>
    <p class="text-center"><a href="inscription.php">Creer un compte !</a></p>
</div>
</div>
</header>
<footer>
  
</footer>
</body>