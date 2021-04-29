<?php
class produit
{
	private $id;
	private $nom;
	private $description; 
	private $etat;
	private $dateFabrication;
	private $image; 
    private $categorie;
    private $prix;
	



	public function __construct($nom,$description,$etat,$dateFabrication,$image,$categorie,$prix)
	{
		
		$this->nom=$nom;
		$this->description=$description; 
        $this->image=$image; 
		$this->etat=$etat;
		$this->dateFabrication=$dateFabrication;
		$this->categorie=$categorie;
		$this->prix=$prix;

	}

	public function getid(){return $this->id;}
	public function getnom(){return $this->nom;}
	public function getetat(){return $this->etat;}
	public function getdateFabrication(){return $this->dateFabrication;}
	public function getimage(){return $this->image;}
	public function getcategorie(){return $this->categorie;}
	public function getdescription(){return $this->description;}
	public function getprix(){return $this->prix;}




	public function setnom(){$this->nom=$nom;}
	public function setdescription(){$this->description=$description;}
	public function setetatProduit(){$this->etat=$etat;}
	public function setdateFabrication(){$this->dateFabrication=$dateFabrication;}
	public function setimage(){$this->image=$image;}
	public function setprix(){$this->prix=$prix;}
	public function setcategorie(){$this->categorie=$categorie;}
	
	}
	


?>