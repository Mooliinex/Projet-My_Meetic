<?php
class Connexion
{

    protected $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:dbname=my_meetic;host=127.0.0.1', 'root', '');
        } catch (Exception $e) {
            die('Echec de connexion :' . $e->getMessage());
        }
    }

    public function getDB()
    {
        return $this->bdd;
    }
}
