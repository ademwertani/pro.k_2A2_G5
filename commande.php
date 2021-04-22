<?php 
/**
* 
*/
class commande 
{
	private $Idcommande ;
	private $Date ;
	private $Prix ;
function __construct($Idcommande,$Date,$Prix)
 {
 	$this->Idcommande=$Idcommande;
 	$this->Date=$Date;
 	$this->Prix=$Prix;
}
function get_Idcommande(){return $this->Idcommande;}
function get_Date(){return $this->Date;}
function get_Prix(){return $this->Prix;}	

function set_Idcommande(){return $this->Idcommande;}
function set_Date(){return $this->Date;}
function set_Prix(){return $this->Prix;}	
}

 ?>