<?php 

class Administrateur 
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $motdepasse;

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
        $id=(int)$id;
        if ($id>0) 
        {
            $this->id = $id;
        }
    }

    public function setNom($nom)
    {
        if (is_string($nom)) {
            $this->nom = $nom;
        }
    }
    
    public function setPrenom($prenom)
    {
        if (is_string($prenom)) {
            $this->prenom = $prenom;
        }
    }

    public function setMail($mail)
    {
        if (is_string($mail)) {
            $this->mail = $mail;
        }
    }

    public function setMotdepasse($motdepasse)
    {
        if (is_string($motdepasse)) {
            $this->motdepasse = $motdepasse;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getMail()
    {
        return $this->Mail;
    }

    public function getModepasse()
    {
        return $this->motdepasse;
    }
}