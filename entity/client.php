<?php 
class client{
	private $idc=NULL;
	private $nom=NULL;
    private $prenom=NULL;
	private $mailclient=NULL;
    private $tel=NULL;
    private $adresse=NULL;
    private $motdepasse=NULL;
	private $typeuser=NULL;	

	public function __construct($nom,$prenom,$mailclient,$tel,$adresse,$motdepasse)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mailclient=$mailclient;
        $this->tel=$tel;
		$this->adresse=$adresse;
        $this->motdepasse=$motdepasse;
		
	}
	function get_idc()
	{
		return $this->idc;
	}
	function get_nom()
	{
		return $this->nom;
	}
    function get_prenom()
	{
		return $this->prenom;
		
	}
    function get_mailclient()
	{
		return $this->mailclient;
		
	}
	 function get_tel()
	{
		return $this->tel;
		
	}

    function get_adresse()
	{
		return $this->adresse;
		
	}
    
	 function get_motdepasse()
     {
         return $this->motdepasse;
         
     }
function get_typeuser()
{
	return $this->motdepasse;
}

	public function Logedin($mailclient,$motdepasse)
	{
		$req="select * from utlisateur where mailclient='$mailclient' && motdepasse='$motdepasse'";
		//$rep=$conn->query($req);
		//return $rep->fetchAll();
	}

	}
	
	

	?>