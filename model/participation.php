<?PHP 

class participation 

{
    private $idpart; 
    private $idev; 
    private $idcl; 
    private $datepart; 
    private $fraispart; 
    
    function getidpart()
    {
        return $this->idpart; 
    } 

    function getidev()
    {
        return $this->idev; 
    }
    function getidcl()
    {
        return $this->idcl; 
    } 

    function getdatepart()
    {
        return $this->datepart; 
    }
    function getfraispart()
    {
        return $this->fraispart; 
    }
   






    function setidpart()
    {
        $this->idpart=$idpart;  
    }
    function setidev()
    {
        $this->idev=$idev;  
    }
    function setidcl()
    {
        $this->idcl=$idcl;  
    }
    function setdatepart()
    {
        $this->datepart=$datepart;  
    }
    function setfraispart()
    {
        $this->fraispart=$fraispart;  
    }
    
}

?>
