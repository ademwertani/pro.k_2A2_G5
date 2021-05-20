<?php
class reclamation{
    private $idrec=NULL;
    private $nomc=NULL;
    private $emailc=NULL;
    private $sujetrec=NULL;
    private $messagerec=NULL;
    private $etatrec=NULL;
    private $iduser=NULL;
    public function __construct($nomc,$emailc,$sujetrec,$messagerec,$iduser )
    {
       
        $this->nomc=$nomc;
        $this->emailc=$emailc;
        $this->sujetrec=$sujetrec;
        $this->messagerec=$messagerec;
        $this->iduser=$iduser;
        

    }
    public function get_idrec()
    {return $this->idrec;}
    public function get_nomc()
     {return $this->nomc;}
    public function get_emailc()
     {return $this->emailc;}
    public function get_sujetrec()
     {return $this->sujetrec;}
    public function get_messagerec()
     {return $this->messagerec;}
    public function get_etatrec()
     {return $this->etatrec;}

     public function get_iduser()
     {return $this->iduser;}

    public function set_idrec()
    {return $this->idrec;}
    public function set_nomc()
     {return $this->nomc;}
    public function set_emailc()
     {return $this->emailc;}
    public function set_sujetrec()
     {return $this->sujetrec;}
    public function set_messagerec()
     {return $this->messagerec;}
    public function set_etatrec()
     {return $this->etatrec;}
     public function set_iduser()
     {return $this->iduser;}


}




















?>