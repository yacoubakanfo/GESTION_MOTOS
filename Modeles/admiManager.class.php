<?php

require_once('connexion.php');

class AdmiManager 
{
    private $_bd;

    public function __construct($bd)
    {
        return $this->_bd = $bd;
    }

    public function connexion()
    {
        if (isset($_POST['formconnexion'])) 
        {
            $mailconnect =   htmlspecialchars($_POST['mailconnect']);
            $mdpconnect = sha1($_POST['mdpconnect']);
            if (!empty($mailconnect) AND !empty($mdpconnect)) 
            {
                $requser = $this->_bd->prepare("SELECT * FROM administrateur WHERE mail = ? AND motdepasse = ?");
                $requser->execute(array($mailconnect, $mdpconnect));
                $userexiste = $requser->rowCount();
                if ($userexiste==1) 
                {
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['nom'] = $userinfo['nom'];
                    $_SESSION['prenom']= $userinfo['prenom'];
                    $_SESSION['mail']= $userinfo['mail'];
                    
                    header('location: vueAffiche.php');
                } 
                else 
                {
                    $msg = "L'identifiant ou le mot de passe est incorrect";
                }
            }
            else 
            {
                $msg = "Tous les chalps doivent etre complété !";
            }
        }
    }
}