<?php
include('connexionbdd.class.php');

class Profil extends Connexion{
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $age;
    protected $sexe;
    protected $ville;
    protected $loisir;
    protected $connexion;
    protected $bdd;

    public function __construct($newNom,$newPrenom,$newMail,$newLoisir,$newAge,$newSexe,$newVille){
        $this->nom = $newNom;
        $this->prenom = $newPrenom;
        $this->mail = $newMail;
        $this->age = $newAge;
        $this->sexe = $newSexe;
        $this->ville = $newVille;
        $this->loisir = $newLoisir;

        $this->connexion = new Connexion();
        $this->bdd = $this->connexion->getDB();
    }
}