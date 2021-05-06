<?php 
class recette{

    private $id; 
    private $nom; 
    private $description; 
    private $note; 
    private $image; 
    private $idc;



    function construct($id, $nom, $description, $image,$idc)
    {
        $this->nom=$nom; 
        $this->description=$description; 
        $this->image=$image; 
        $this->idc=$idc;
    }

    function __construct($nom,$description,$image,$idc)
    {
        $this->nom=$nom;
        $this->description=$description; 
        $this->image=$image; 
        $this->idc=$idc;

    }

    function getId()
    {
        return $this->id; 
    }
    function getIdc()
    {
        return $this->idc;
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
    function setIdc()
    {
        $this->idc=$idc;
    }
}

?>