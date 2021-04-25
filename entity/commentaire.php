<?php 
class commentaire{

    private $id; 
    private $nom; 
    private $mail; 
    private $commentaire; 
    


    function construct($id, $nom, $mail, $commentaire)
    {
        $this->nom=$nom; 
        $this->mail=$mail; 
        $this->commentaire=$commentaire; 
    }

    function __construct($nom, $mail, $commentaire)
    {
        $this->nom=$nom;
        $this->mail=$mail; 
        $this->commentaire=$commentaire; 

    }

    function getId()
    {
        return $this->id; 
    }
    function getNom()
    {return $this->nom;
    }

    function getMail()
    {
        return $this->mail; 
    }
    function getCommentaire()
    {
        return $this->commentaire; 
    }

    function setNom()
    {
        $this->nom=$nom; 
    }
    function setMail()
    {
        $this->mail=$mail;
    }
    
    function setCommentaire()
    {
        $this->Commentaire=$commentaire;
    }
    
}

?>