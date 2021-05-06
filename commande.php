<?php 

class commande 
{
	private $Idcommande ;
	private $Daate ;
	private $Prix ;
	private $idclient;
function __construct($Daate,$Prix)
 {
 	
 	$this->Daate=$Daate;
 	$this->Prix=$Prix;
}
public function get_Idcommande(){return $this->Idcommande;}
public function get_Date(){return $this->Daate;}
public function get_Prix(){return $this->Prix;}	

function set_Idcommande(){return $this->Idcommande;}
function set_Date(){return $this->Daate;}
function set_Prix(){return $this->Prix;}	
}

 ?>