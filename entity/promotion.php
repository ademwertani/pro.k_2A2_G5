<?php

class promotion
{
    private $Reference;
    private $id;
    private $date_debut;
    private $date_fin;
    private $pourcentage;
    private $identifiantpack;

   

    
    public function getReference()
    {
        return $this->Reference;
    }

    
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
    }

    public function getid()
    {
        return $this->id;
    }

    
    public function setid($id)
    {
        $this->id = $id;
    }

    public function getdate_debut()
    {
        return $this->$date_debut;
    }

    
    public function setdate_debut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    public function getdate_fin()
    {
        return $this->date_fin;
    }

    
    public function setdate_fin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    public function getpourcentage()
    {
        return $this->pourcentage;
    }

    
    public function setpourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

    }
    public function getidentifiantpack()
    {
        return $this->identifiantpack;
    }

    
    public function setidentifiantpack($identifiantpack)
    {
        $this->identifiantpack = $identifiantpack;

    } 
    
    

  public function __construct($Reference, $id, $date_debut,$date_fin, $pourcentage,$identifiantpack)
    {
        $this->Reference = $Reference;
        $this->id = $id;
        $this->date_debut = $date_debut;
        $this->date_fin= $date_fin;
        $this->pourcentage = $pourcentage;
        $this->identifiantpack = $identifiantpack;
    
    }

}
