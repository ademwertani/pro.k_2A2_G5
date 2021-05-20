<?php

class packet
{
    private $ReferencePack;
    private $identifiantpack;
    private $Datedebutpack;
    private $Datefinpack;
    private $prix;
    private $image;
    

    
    public function getReferencePack()
    {
        return $this->ReferencePack;
    }

    
    public function setReferencePack($ReferencePack)
    {
        $this->ReferencePack = $ReferencePack;
    }

    public function getidentifiantpack()
    {
        return $this->identifiantpack;
    }

    
    public function setidentifiantpack($identifiantpack)
    {
        $this->identifiantpack = $identifiantpack;
    }

    public function getDatedebutpack()
    {
        return $this->$Datedebutpack;
    }

    
    public function setDatedebutpack($Datedebutpack)
    {
        $this->Datedebutpack = $Datedebutpack;
    }

    public function getDatefinpack()
    {
        return $this->Datefinpack;
    }

    
    public function setDatefinpack($Datefinpack)
    {
        $this->Datefinpack = $Datefinpack;
    }

    public function getprix()
    {
        return $this->prix;
    }

    
    public function setprix($prix)
    {
        $this->prix = $prix;

    }
    public function getimage()
    {
        return $this->image;
    }

    
    public function setimage($image)
    {
        $this->image = $image;

    }
  
  
  public function __construct($ReferencePack, $identifiantpack, $Datedebutpack,$Datefinpack, $prix,$image)
    {
        $this->ReferencePack = $ReferencePack;
        $this->identifiantpack = $identifiantpack;
        $this->Datedebutpack = $Datedebutpack;
        $this->Datefinpack= $Datefinpack;
        $this->prix= $prix;
        $this->image= $image;
       
    
    }

}
