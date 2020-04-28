<?php

require_once('../Modeles/routeur.php');
require_once('../Modeles/connexion.php');


class ControleurAffiche
{
    private $_Controle;

    public function __construct()
    {
        if (isset($url)) 
        {
            throw new Execption ('La page est introuvable');
        }
        else 
        {
            $this->afficher();
        }
    }

    public function afficher()
    {
        $db = bdd();
        $motoManager = new MotoManager($db);
        $list_moto=$motoManager->afficher_moto();
        $list_yamaha=$motoManager->yamaha();
        $list_rato=$motoManager->rato();
        $list_kaiser=$motoManager->kaiser();
        $list_suziki=$motoManager->suziki();

        if (isset($_POST['modele']) and $_POST['marque'] and $_POST['cylindre'] and $_POST['categorie'] and $_POST['numeroSerie'] and $_POST['prix'] and $_POST['annee'])
        {
            $motoManager=new MotoManager($db);
            $motos=new Moto($_POST);
            $motoManager->add($motos);
        }

            if(isset($_GET['id']))
        {
            $motoManager->delete($_GET['is']);
            header("location: vueAffiche.php");
        }
    }
}