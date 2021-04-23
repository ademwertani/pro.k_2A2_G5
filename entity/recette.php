<?php 
class recette{

    private $id; 
    private $nom; 
    private $description; 
    private $note; 
    private $image; 
    private $categorie;


    function construct($id, $nom, $description, $image,$categorie)
    {
        $this->nom=$nom; 
        $this->description=$description; 
        $this->image=$image; 
        $this->categorie=$categorie;
    }

    function __construct($nom,$description,$image,$categorie)
    {
        $this->nom=$nom;
        $this->description=$description; 
        $this->image=$image; 
        $this->categorie=$categorie;

    }

    function getId()
    {
        return $this->id; 
    }
    function getCategorie()
    {
        return $this->categorie;
    }

    function getNom()
    {return $this->nom;
    }

    function getDescription()
    {
        return $this->description; 
    }

    function getNote()
    {
        return $this->note; 
    }

    function getImage()
    {
        return $this->image; 
    }

    function setNom()
    {
        $this->nom=$nom; 
    }
    function setDescription()
    {
        $this->description=$description;
    }
    function setNote()
    {
        $this->note=$note;
    }
    function setImage()
    {
        $this->image=$image;
    }
    function setCategorie()
    {
        $this->categorie=$categorie;
    }
}

?>