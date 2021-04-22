<?PHP 

class categorie 

{
    private $id; 
    private $nom; 


    function __construct($nom)
    {
        $this->nom=$nom;
    }
    function construct($id,$nom)
    {

        $this->id=$id;
        $this->nom=$nom;
    }


    function getnom()
    {
        return $this->nom; 
    } 

    function getId()
    {
        return $this->id; 
    }


    function setNom()
    {
        $this->nom=$nom;  
    }

}


?>
