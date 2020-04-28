<?php

function bdd()
    {
        try{
            $bd = new PDO ('mysql:host=localhost; dbname=vente_moto','root','');
        }
        catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }

        return $bd;
    }
