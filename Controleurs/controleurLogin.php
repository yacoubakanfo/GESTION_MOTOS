<?php

session_start();
require_once('../Modeles/connexion.php');
require_once('../Modeles/routeur.php');

class ControleurLogin 
{
    private $_admiManager;

    public function __construct()
    {
        if (isset($url)) 
        {
            throw new Execption ('La page est introuvable');
        }
        else 
        {
            $this->administrateurs();
        }
    }

    public function administrateurs()
    {
        $bd = bdd();
        $log = new AdmiManager($bd);
        if (isset($_POST['mailconnect']) AND $_POST['mdpconnect']) 
        {
            $log = new AdmiManager($bd);
            $log->connexion();
        }
        else 
        {            
            require_once('../Vues/vueLogin.php');
            $msg = "l'identifiant ou le mot de passe est incorecte";
        }
    }
}