<?php

class Moto
{
    protected $id;
    protected $model;
    protected $marque;
    protected $cylindre;
    protected $categorie;
    protected $numeroSerie;
    protected $prix;
    protected $annee;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) 
        {
            $methode = 'set'.ucfirst($key);
            if (method_exists($this,$methode)) 
            {
                $this->$methode($value);
            }
        }
    }

    public function setId($id)
    {
        $id = (int)$id;
        if ($id>0) {
            $this->id;
        }
    }

    public function setModel($model)
    {
        if (is_string($model)) {
            $this->model;
        }
    }

    public function setMarque($marque)
    {
        if (is_string($marque)) {
            $this->marque;
        }
    }

    public function setCylindre($cylindre)
    {
        if (is_string($cylindre)) {
            $this->cylindre;
        }
    }

    public function setCategorie($categorie)
    {
        if (is_string($categorie)) {
            $this->categorie;
        }
    }

    public function setNumeroSerie($numeroSerie)
    {
        if (is_string($numeroSerie)) {
            $this->numeroSerie;
        }
    }

    public function setPrix($prix)
    {
        $prix = (int)$prix;
        if ($prix) {
            $this->prix;
        }
    }

    public function setAnnee($annee)
    {
        if (is_string($annee)) {
            $this->annee;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getCylindre()
    {
        return $this->cylindre;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getAnnee()
    {
        return $this->annee;
    }
}