<?php
class reclamation{
    private ?int $idc;
    private string $nomc;
    private string $emailc;
    private string $sujetrec;
    private string $messagerec;
    private string $etatrec;
    function __constrast($idc,$nomc,$emailc,$sujetrec,$messagerec,$etatrec )
    {
        $this->idc=$idc;
        $this->nomc=$nomc;
        $this->emailc=$emailc;
        $this->sujetrec=$sujetrec;
        $this->message=$messagerec;
        $this->etatrec=$etatrec;

    }
    function get_idc()
    {return $this->idc;}
    function get_nomc()
     {return $this->nomc;}
     function get_emailc()
     {return $this->emailc;}
     function get_sujetrec()
     {return $this->sujetrec;}
     function get_messagerec()
     {return $this->messagerec;}
     function get_etatrec()
     {return $this->etatrec;}

     function set_idc()
    {return $this->idc;}
     function set_nomc()
     {return $this->nomc;}
     function set_emailc()
     {return $this->emailc;}
     function set_sujetrec()
     {return $this->sujetrec;}
     function set_messagerec()
     {return $this->messagerec;}
     function set_etatrec()
     {return $this->etatrec;}


}




















?>