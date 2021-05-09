<?PHP 

class evenement 

{
    private $place; 
    private $date; 
    private $temp; 
    private $type; 
    private $adresse; 
    private $nbr;



   









    function getplace()
    {
        return $this->place; 
    } 

    function getdate()
    {
        return $this->date; 
    }
    function getemp()
    {
        return $this->temp; 
    } 

    function gettype()
    {
        return $this->type; 
    }
    function getadresse()
    {
        return $this->adresse; 
    }
    function getnbr()
    {
        return $this->nbr; 
    }






    function setplace()
    {
        $this->place=$place;  
    }
    function setdate()
    {
        $this->date=$date;  
    }
    function settemp()
    {
        $this->temp=$temp;  
    }
    function settype()
    {
        $this->type=$type;  
    }
    function setadresse()
    {
        $this->adresse=$adresse;  
    }
    function setnbr()
    {
        $this->nbr=$nbr;  
    }

}



?>
