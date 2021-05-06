<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 01/04/2018
 * Time: 00:49
 */
include "config.php";
class UserC
{
    public function addUser($user)
    {
        $conn=config::getConnexion();
        $insert=$conn->prepare("INSERT INTO utilisateur`(password, nom)values(?,?)");
        $insert->execute(array($user->getMail(),$user->getPassword(),$user->getNom(),$user->getPrenom(),$user->getDateNaiss(),$user->getSexe(),$user->getAdressse(),$user->getTel(),0));

    }

    public function login($mail,$password)
    {
        $conn=config::getConnexion();
        $check=$conn->query("Select * from Utilisateur where mail='$mail' AND password='$password'");
        return $check->fetchAll();
    }

   public function afficherProfilClient($idClient)
    {
        $conn = config::getConnexion();
        $check = $conn->query("SELECT utilisateur.nom , utilisateur.prenom ,utilisateur.dateNaissance , utilisateur.sexe , utilisateur.telephone , utilisateur.adresse , utilisateur.mail ,fidelite.PointsFidelite from utilisateur JOIN fidelite on utilisateur.id=fidelite.idClient where id='$idClient'");
		$liste = $check->fetchAll() ;
        return $liste;
    }

        public function afficherTousClients()
    {
        $conn=config::getConnexion();
        $check=$conn->query("Select * from Utilisateur where role=0");
        return $check->fetchAll();
    }

    public function updateUser($user)
    {
        $conn=config::getConnexion();
        $del=$conn->prepare("UPDATE utilisateur SET nom`=?,prenom`=?,`DateNaissance`=?,`sexe`=?,`Adresse`=?,`telephone`=? WHERE `id`=?");

            $del->execute(array($user->getNom(),$user->getPrenom(),$user->getDateNaiss(),$user->getSexe(),$user->getAdressse(),$user->getTel(),$user->getId()));
    }


}


?>