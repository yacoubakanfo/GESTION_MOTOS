<?php

require_once('connexion.php');
require_once('routeur.php');

class MotoManager
{
    private $_bd;

    public function __construct($bd)
    {
        return $this->_bd = $bd;
    }

    public function inserer(Moto $moto)
    {
        $req = $this->_bd->prepare("INSERT INTO moto SET modele=:modele, marque = :marque, cylindre=:cylindre, categorie=:categorie, numeroSerie=:numeroSerie, prix=:prix, annee=:annee");
        $req->bindValue(":modele", $moto->getModel());
        $req->bindValue(":marque", $moto->getMarque());
        $req->bindValue(":cylindre", $moto->getCylindre());
        $req->bindValue(":categorie", $moto->getCategorie());
        $req->bindValue(":numeroSerie", $moto->getNumeroSerie());
        $req->bindValue(":prix", $moto->getPrix());
        $req->bindValue(":annee", $moto->getAnnee());
        $req->execute();
    }

    public function selecteur($id)
    {
        $req = $this->_bd->query("SELECT * FROM moto WHERE id=".$id);
        $lignes = $req->fetch();
        $req->cursorClose();
        $q = new Moto($lignes);
        return $q;
    }

    public function delete($id)
    {
        $req = $this->_bd->exec("DELETE FROM moto WHERE id=".$id);
        return $req>0;
    }

    public function afficher_moto()
    {
        $moto=[];
        $req = $this->_bd->query("SELECT * FROM moto ORDER BY modele");
        $lignes = $req->fetchAll();
        $req->closeCursor();        
        foreach ($lignes as $ligne)
        {
            $moto[] = new Moto($ligne);
        }

        return $moto;
    }

    public function yamaha()
    {
        $moto=[];
        $req=$this->_bd->query('SELECT * FROM moto WHERE marque="yamaha"');
        $lignes=$req->fetchAll();
        $req->closeCursor();
        foreach ($lignes as $ligne)
        {
            $moto[]=new Moto ($ligne);
        }
        return $moto;
    }

    public function rato()
    {
        $moto=[];
        $req=$this->_bd->query('SELECT * FROM moto WHERE marque="rato"');
        $lignes=$req->fetchAll();
        $req->closeCursor();
        foreach ($lignes as $ligne)
        {
            $moto[]=new Moto ($ligne);
        }
        return $moto;
    }

    public function kaiser()
    {
        $moto=[];
        $req=$this->_bd->query('SELECT * FROM moto WHERE marque="kaiser"');
        $lignes=$req->fetchAll();
        $req->closeCursor();
        foreach ($lignes as $ligne)
        {
            $moto[]=new Moto ($ligne);
        }
        return $moto;
    }

    public function suziki()
    {
        $moto=[];
        $req=$this->_bd->query('SELECT * FROM moto WHERE marque="suziki"');
        $lignes=$req->fetchAll();
        $req->closeCursor();
        foreach ($lignes as $ligne)
        {
            $moto[]=new Moto ($ligne);
        }
        return $moto;
    }

    public function upDate(Moto $moto)
    {
        try
        {
            $req = $this->_bd->query("UPDATE moto SET modele=:modele, marque = :marque, cylindre=:cylindre, categorie=:categorie, numeroSerie=:numeroSerie, prix=:prix, annee=;annee");
            $req->execute(array('model'=>$moto->getModele(),
            'marque'=>$moto->getMarque(),
            'cylindre'=>$moto->getCylindre(),
            'categorie'=>$moto->getCategorie(),
            'numeroSerie'=>$moto->getNumeroSerie(),
            'prix'=>$moto->getPrix(),
            'annee'=>$moto->getAnnee()        
            ));
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}